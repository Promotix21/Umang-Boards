<?php
/**
 * UBL Form Submission Handlers
 *
 * Handles Product Enquiries, Contact Messages, and Job Applications.
 * Stores submissions as a custom post type with taxonomy-based categorisation,
 * email notifications, and admin dashboard integration.
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* =========================================================================
   A. Custom Post Type & Taxonomy
   ========================================================================= */

add_action( 'init', function () {
    register_post_type( 'ubl_submission', [
        'labels' => [
            'name'          => 'Submissions',
            'singular_name' => 'Submission',
            'menu_name'     => 'Submissions',
            'all_items'     => 'All Submissions',
            'search_items'  => 'Search Submissions',
        ],
        'public'          => false,
        'show_ui'         => true,
        'show_in_menu'    => true,
        'menu_icon'       => 'dashicons-email-alt',
        'menu_position'   => 25,
        'supports'        => [ 'title' ],
        'capability_type' => 'post',
    ] );

    register_taxonomy( 'submission_type', 'ubl_submission', [
        'labels' => [
            'name'          => 'Types',
            'singular_name' => 'Type',
        ],
        'public'            => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
    ] );
} );

/* Create default terms */
add_action( 'init', function () {
    if ( ! term_exists( 'Product Enquiry', 'submission_type' ) ) {
        wp_insert_term( 'Product Enquiry', 'submission_type', [ 'slug' => 'product-enquiry' ] );
    }
    if ( ! term_exists( 'Contact Message', 'submission_type' ) ) {
        wp_insert_term( 'Contact Message', 'submission_type', [ 'slug' => 'contact-message' ] );
    }
    if ( ! term_exists( 'Job Application', 'submission_type' ) ) {
        wp_insert_term( 'Job Application', 'submission_type', [ 'slug' => 'job-application' ] );
    }
} );


/* =========================================================================
   B. Product Enquiry Handler
   ========================================================================= */

function ubl_handle_product_enquiry() {
    if ( ! wp_verify_nonce( $_POST['ubl_enq_nonce'] ?? '', 'ubl_product_enquiry' ) ) {
        wp_die( 'Security check failed.' );
    }

    $name        = sanitize_text_field( $_POST['enq_name'] ?? '' );
    $email       = sanitize_email( $_POST['enq_email'] ?? '' );
    $company     = sanitize_text_field( $_POST['enq_company'] ?? '' );
    $requirement = sanitize_textarea_field( $_POST['enq_requirement'] ?? '' );
    $product_name = sanitize_text_field( $_POST['product_name'] ?? '' );
    $product_url  = esc_url_raw( $_POST['product_url'] ?? '' );

    $post_id = wp_insert_post( [
        'post_type'   => 'ubl_submission',
        'post_title'  => sprintf( 'Product Enquiry: %s — %s', $product_name, $name ),
        'post_status' => 'publish',
    ] );

    if ( $post_id ) {
        wp_set_object_terms( $post_id, 'product-enquiry', 'submission_type' );
        update_post_meta( $post_id, '_ubl_name', $name );
        update_post_meta( $post_id, '_ubl_email', $email );
        update_post_meta( $post_id, '_ubl_company', $company );
        update_post_meta( $post_id, '_ubl_requirement', $requirement );
        update_post_meta( $post_id, '_ubl_product_name', $product_name );
        update_post_meta( $post_id, '_ubl_product_url', $product_url );
        update_post_meta( $post_id, '_ubl_status', 'new' );

        // Email notification
        $to = get_option( 'admin_email' );
        $sales_email = function_exists( 'get_field' ) ? get_field( 'company_sales_email', 'option' ) : '';
        if ( $sales_email ) $to = $sales_email;

        $subject = sprintf( '[UBL Enquiry] %s — %s', $product_name, $name );
        $body    = sprintf(
            "New product enquiry received:\n\nProduct: %s\nURL: %s\n\nName: %s\nEmail: %s\nCompany: %s\n\nRequirement:\n%s",
            $product_name, $product_url, $name, $email, $company, $requirement
        );
        $headers = [
            'Content-Type: text/plain; charset=UTF-8',
            'Reply-To: ' . $name . ' <' . $email . '>',
        ];
        wp_mail( $to, $subject, $body, $headers );
    }

    wp_redirect( add_query_arg( 'enquiry', 'sent', $product_url ?: home_url() ) );
    exit;
}
add_action( 'admin_post_ubl_product_enquiry', 'ubl_handle_product_enquiry' );
add_action( 'admin_post_nopriv_ubl_product_enquiry', 'ubl_handle_product_enquiry' );


/* =========================================================================
   C. Contact Form Handler
   ========================================================================= */

function ubl_handle_contact() {
    if ( ! wp_verify_nonce( $_POST['ubl_contact_nonce'] ?? '', 'ubl_contact' ) ) {
        wp_die( 'Security check failed.' );
    }

    $name    = sanitize_text_field( $_POST['name'] ?? $_POST['full_name'] ?? '' );
    $email   = sanitize_email( $_POST['email'] ?? '' );
    $phone   = sanitize_text_field( $_POST['phone'] ?? '' );
    $company = sanitize_text_field( $_POST['company'] ?? '' );
    $subject = sanitize_text_field( $_POST['subject'] ?? 'General Inquiry' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    $post_id = wp_insert_post( [
        'post_type'   => 'ubl_submission',
        'post_title'  => sprintf( 'Contact: %s — %s', $subject, $name ),
        'post_status' => 'publish',
    ] );

    if ( $post_id ) {
        wp_set_object_terms( $post_id, 'contact-message', 'submission_type' );
        update_post_meta( $post_id, '_ubl_name', $name );
        update_post_meta( $post_id, '_ubl_email', $email );
        update_post_meta( $post_id, '_ubl_phone', $phone );
        update_post_meta( $post_id, '_ubl_company', $company );
        update_post_meta( $post_id, '_ubl_subject', $subject );
        update_post_meta( $post_id, '_ubl_message', $message );
        update_post_meta( $post_id, '_ubl_status', 'new' );

        $to   = get_option( 'admin_email' );
        $subj = sprintf( '[UBL Contact] %s — %s', $subject, $name );
        $body = sprintf(
            "New contact message:\n\nSubject: %s\nName: %s\nEmail: %s\nPhone: %s\nCompany: %s\n\nMessage:\n%s",
            $subject, $name, $email, $phone, $company, $message
        );
        $headers = [
            'Content-Type: text/plain; charset=UTF-8',
            'Reply-To: ' . $name . ' <' . $email . '>',
        ];
        wp_mail( $to, $subj, $body, $headers );
    }

    wp_redirect( add_query_arg( 'contact', 'sent', wp_get_referer() ?: home_url( '/contact-us/' ) ) );
    exit;
}
add_action( 'admin_post_ubl_contact', 'ubl_handle_contact' );
add_action( 'admin_post_nopriv_ubl_contact', 'ubl_handle_contact' );


/* =========================================================================
   D. Job Application Handler
   ========================================================================= */

function ubl_handle_application() {
    if ( ! wp_verify_nonce( $_POST['ubl_apply_nonce'] ?? '', 'ubl_apply' ) ) {
        wp_die( 'Security check failed.' );
    }

    $name         = sanitize_text_field( $_POST['applicant_name'] ?? '' );
    $email        = sanitize_email( $_POST['applicant_email'] ?? '' );
    $phone        = sanitize_text_field( $_POST['applicant_phone'] ?? '' );
    $position     = sanitize_text_field( $_POST['position'] ?? '' );
    $cover_letter = sanitize_textarea_field( $_POST['cover_letter'] ?? '' );

    // Handle resume upload
    $resume_url = '';
    if ( ! empty( $_FILES['resume']['name'] ) ) {
        require_once ABSPATH . 'wp-admin/includes/file.php';
        require_once ABSPATH . 'wp-admin/includes/media.php';
        require_once ABSPATH . 'wp-admin/includes/image.php';

        $allowed = [
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ];
        if ( ! in_array( $_FILES['resume']['type'], $allowed ) ) {
            wp_die( 'Only PDF and Word documents are accepted.' );
        }
        if ( $_FILES['resume']['size'] > 5 * 1024 * 1024 ) {
            wp_die( 'Resume file must be under 5 MB.' );
        }

        $upload = wp_handle_upload( $_FILES['resume'], [ 'test_form' => false ] );
        if ( ! empty( $upload['url'] ) ) {
            $resume_url = $upload['url'];
        }
    }

    $post_id = wp_insert_post( [
        'post_type'   => 'ubl_submission',
        'post_title'  => sprintf( 'Application: %s — %s', $position, $name ),
        'post_status' => 'publish',
    ] );

    if ( $post_id ) {
        wp_set_object_terms( $post_id, 'job-application', 'submission_type' );
        update_post_meta( $post_id, '_ubl_name', $name );
        update_post_meta( $post_id, '_ubl_email', $email );
        update_post_meta( $post_id, '_ubl_phone', $phone );
        update_post_meta( $post_id, '_ubl_position', $position );
        update_post_meta( $post_id, '_ubl_cover_letter', $cover_letter );
        update_post_meta( $post_id, '_ubl_resume_url', $resume_url );
        update_post_meta( $post_id, '_ubl_status', 'new' );

        // Email to HR
        $to   = 'hr@umangboards.com';
        $subj = sprintf( '[UBL Application] %s — %s', $position, $name );
        $body = sprintf(
            "New job application:\n\nPosition: %s\nName: %s\nEmail: %s\nPhone: %s\n\nCover Letter:\n%s\n\nResume: %s",
            $position, $name, $email, $phone, $cover_letter, $resume_url ?: 'Not attached'
        );
        $headers = [
            'Content-Type: text/plain; charset=UTF-8',
            'Reply-To: ' . $name . ' <' . $email . '>',
        ];

        // Attach resume to email if uploaded
        $attachments = [];
        if ( $resume_url ) {
            $upload_dir = wp_upload_dir();
            $file_path  = str_replace( $upload_dir['baseurl'], $upload_dir['basedir'], $resume_url );
            if ( file_exists( $file_path ) ) {
                $attachments[] = $file_path;
            }
        }

        wp_mail( $to, $subj, $body, $headers, $attachments );
    }

    wp_redirect( add_query_arg( 'applied', 'success', wp_get_referer() ?: home_url( '/careers/' ) ) );
    exit;
}
add_action( 'admin_post_ubl_apply', 'ubl_handle_application' );
add_action( 'admin_post_nopriv_ubl_apply', 'ubl_handle_application' );


/* =========================================================================
   E. Admin: Custom Columns for Submissions List
   ========================================================================= */

add_filter( 'manage_ubl_submission_posts_columns', function ( $columns ) {
    $new = [ 'cb' => $columns['cb'] ];
    $new['title']           = 'Submission';
    $new['submission_type'] = 'Type';
    $new['ubl_name']        = 'Name';
    $new['ubl_email']       = 'Email';
    $new['ubl_status']      = 'Status';
    $new['date']            = 'Date';
    return $new;
} );

add_action( 'manage_ubl_submission_posts_custom_column', function ( $column, $post_id ) {
    switch ( $column ) {
        case 'ubl_name':
            echo esc_html( get_post_meta( $post_id, '_ubl_name', true ) );
            break;
        case 'ubl_email':
            $email = get_post_meta( $post_id, '_ubl_email', true );
            echo '<a href="mailto:' . esc_attr( $email ) . '">' . esc_html( $email ) . '</a>';
            break;
        case 'ubl_status':
            $status = get_post_meta( $post_id, '_ubl_status', true ) ?: 'new';
            $colors = [
                'new'         => '#3B82F6',
                'in-progress' => '#F59E0B',
                'resolved'    => '#10B981',
                'closed'      => '#6B7280',
            ];
            $color = $colors[ $status ] ?? '#6B7280';
            echo '<span style="display:inline-block;padding:2px 10px;border-radius:12px;font-size:12px;font-weight:600;color:#fff;background:' . $color . ';">' . ucfirst( str_replace( '-', ' ', $status ) ) . '</span>';
            break;
    }
}, 10, 2 );

add_filter( 'manage_edit-ubl_submission_sortable_columns', function ( $columns ) {
    $columns['ubl_name']   = 'ubl_name';
    $columns['ubl_status'] = 'ubl_status';
    return $columns;
} );


/* =========================================================================
   F. Admin: Meta Box for Submission Details
   ========================================================================= */

add_action( 'add_meta_boxes', function () {
    add_meta_box(
        'ubl_submission_details',
        'Submission Details',
        'ubl_render_submission_metabox',
        'ubl_submission',
        'normal',
        'high'
    );
} );

function ubl_render_submission_metabox( $post ) {
    $fields = [
        '_ubl_name'         => 'Name',
        '_ubl_email'        => 'Email',
        '_ubl_phone'        => 'Phone',
        '_ubl_company'      => 'Company',
        '_ubl_subject'      => 'Subject',
        '_ubl_product_name' => 'Product',
        '_ubl_product_url'  => 'Product URL',
        '_ubl_position'     => 'Position Applied',
        '_ubl_requirement'  => 'Requirement',
        '_ubl_message'      => 'Message',
        '_ubl_cover_letter' => 'Cover Letter',
        '_ubl_resume_url'   => 'Resume',
    ];

    $status = get_post_meta( $post->ID, '_ubl_status', true ) ?: 'new';

    echo '<table style="width:100%;border-collapse:collapse;">';

    // Status selector
    echo '<tr style="border-bottom:1px solid #eee;"><td style="padding:10px;font-weight:600;width:150px;">Status</td><td style="padding:10px;">';
    echo '<select name="ubl_status" style="min-width:150px;">';
    foreach ( [ 'new' => 'New', 'in-progress' => 'In Progress', 'resolved' => 'Resolved', 'closed' => 'Closed' ] as $val => $label ) {
        echo '<option value="' . $val . '"' . selected( $status, $val, false ) . '>' . $label . '</option>';
    }
    echo '</select>';
    wp_nonce_field( 'ubl_save_status', 'ubl_status_nonce' );
    echo '</td></tr>';

    foreach ( $fields as $key => $label ) {
        $value = get_post_meta( $post->ID, $key, true );
        if ( empty( $value ) ) continue;

        echo '<tr style="border-bottom:1px solid #eee;">';
        echo '<td style="padding:10px;font-weight:600;vertical-align:top;">' . esc_html( $label ) . '</td>';
        echo '<td style="padding:10px;">';

        if ( $key === '_ubl_email' ) {
            echo '<a href="mailto:' . esc_attr( $value ) . '">' . esc_html( $value ) . '</a>';
        } elseif ( $key === '_ubl_product_url' ) {
            echo '<a href="' . esc_url( $value ) . '" target="_blank">' . esc_html( $value ) . '</a>';
        } elseif ( $key === '_ubl_resume_url' ) {
            echo '<a href="' . esc_url( $value ) . '" target="_blank" style="display:inline-flex;align-items:center;gap:6px;padding:6px 14px;background:#f0f0f0;border-radius:6px;text-decoration:none;color:#333;">Download Resume</a>';
        } elseif ( in_array( $key, [ '_ubl_requirement', '_ubl_message', '_ubl_cover_letter' ] ) ) {
            echo '<div style="white-space:pre-wrap;line-height:1.6;">' . esc_html( $value ) . '</div>';
        } else {
            echo esc_html( $value );
        }

        echo '</td></tr>';
    }
    echo '</table>';
}

// Save status on post update
add_action( 'save_post_ubl_submission', function ( $post_id ) {
    if ( ! isset( $_POST['ubl_status_nonce'] ) || ! wp_verify_nonce( $_POST['ubl_status_nonce'], 'ubl_save_status' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( isset( $_POST['ubl_status'] ) ) {
        update_post_meta( $post_id, '_ubl_status', sanitize_text_field( $_POST['ubl_status'] ) );
    }
} );


/* =========================================================================
   G. Admin: Dashboard Widget
   ========================================================================= */

add_action( 'wp_dashboard_setup', function () {
    wp_add_dashboard_widget( 'ubl_submissions_widget', 'Recent Submissions', function () {
        $types = [
            'product-enquiry' => [ 'label' => 'Product Enquiries',  'icon' => 'dashicons-cart' ],
            'contact-message' => [ 'label' => 'Contact Messages',   'icon' => 'dashicons-email' ],
            'job-application' => [ 'label' => 'Job Applications',   'icon' => 'dashicons-media-text' ],
        ];

        foreach ( $types as $slug => $info ) {
            $count = new WP_Query( [
                'post_type'      => 'ubl_submission',
                'post_status'    => 'publish',
                'tax_query'      => [ [ 'taxonomy' => 'submission_type', 'field' => 'slug', 'terms' => $slug ] ],
                'meta_query'     => [ [ 'key' => '_ubl_status', 'value' => 'new' ] ],
                'posts_per_page' => -1,
                'fields'         => 'ids',
            ] );
            $new_count = $count->found_posts;

            echo '<div style="display:flex;justify-content:space-between;align-items:center;padding:8px 0;border-bottom:1px solid #eee;">';
            echo '<span><span class="dashicons ' . esc_attr( $info['icon'] ) . '" style="font-size:16px;width:16px;height:16px;margin-right:6px;vertical-align:middle;"></span>' . esc_html( $info['label'] ) . '</span>';
            if ( $new_count > 0 ) {
                echo '<span style="background:#3B82F6;color:#fff;padding:2px 10px;border-radius:12px;font-size:12px;font-weight:600;">' . $new_count . ' new</span>';
            } else {
                echo '<span style="color:#999;font-size:12px;">0 new</span>';
            }
            echo '</div>';
        }

        echo '<p style="margin-top:12px;"><a href="' . admin_url( 'edit.php?post_type=ubl_submission' ) . '">View all submissions &rarr;</a></p>';
    } );
} );
