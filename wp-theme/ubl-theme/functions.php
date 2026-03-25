<?php
/**
 * Umang Boards Limited — Theme Functions
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'UBL_VERSION', '2.16.0' );
define( 'UBL_DIR', get_template_directory() );
define( 'UBL_URI', get_template_directory_uri() );

/* ─── Theme Setup ─── */
add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
    add_theme_support( 'editor-styles' );

    register_nav_menus( [
        'primary'   => __( 'Primary Navigation', 'ubl-theme' ),
        'mobile'    => __( 'Mobile Navigation', 'ubl-theme' ),
        'footer'    => __( 'Footer Navigation', 'ubl-theme' ),
    ] );
} );

/* ─── Enqueue Styles & Scripts ─── */
add_action( 'wp_enqueue_scripts', function () {
    // Google Fonts
    wp_enqueue_style( 'ubl-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&family=Inter:wght@400;500;600;700&display=swap',
        [], null
    );

    // Theme CSS
    wp_enqueue_style( 'ubl-main', UBL_URI . '/assets/css/styles-v2.css', [], UBL_VERSION );
    wp_enqueue_style( 'ubl-sections', UBL_URI . '/assets/css/sections-v2.css', [ 'ubl-main' ], UBL_VERSION );
    wp_enqueue_style( 'ubl-theme-style', get_stylesheet_uri(), [ 'ubl-sections' ], UBL_VERSION );

    // Blue theme variant (toggle in Site Settings)
    if ( function_exists( 'get_field' ) && get_field( 'color_mode', 'option' ) === 'blue' ) {
        wp_enqueue_style( 'ubl-blue', UBL_URI . '/assets/css/style-blue.css', [ 'ubl-theme-style' ], UBL_VERSION );
    }

    // Libraries (CDN)
    wp_enqueue_script( 'lenis', 'https://unpkg.com/lenis@1.1.18/dist/lenis.min.js', [], '1.1.18', true );
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', [], '3.12.5', true );
    wp_enqueue_script( 'gsap-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', [ 'gsap' ], '3.12.5', true );

    // Theme JS
    wp_enqueue_script( 'ubl-world-paths', UBL_URI . '/assets/js/world-paths.js', [], UBL_VERSION, true );
    wp_enqueue_script( 'ubl-main-js', UBL_URI . '/assets/js/script-v2.js', [ 'lenis', 'gsap', 'gsap-scroll' ], UBL_VERSION, true );
    wp_localize_script( 'ubl-main-js', 'ublData', [ 'themeUri' => UBL_URI ] );
    wp_enqueue_script( 'ubl-world-map', UBL_URI . '/assets/js/world-map.js', [ 'ubl-main-js' ], UBL_VERSION, true );

    // Product pages — conditional loading (digitaldadi-ecom CPT)
    if ( is_singular( 'dd_product' ) || is_tax( 'dd_product_cat' ) || is_post_type_archive( 'dd_product' ) ) {
        wp_enqueue_style( 'ubl-products', UBL_URI . '/assets/css/product-pages.css', [ 'ubl-sections' ], UBL_VERSION );
        wp_enqueue_script( 'ubl-products-js', UBL_URI . '/assets/js/product-pages.js', [ 'gsap', 'gsap-scroll' ], UBL_VERSION, true );
    }
} );

/* ─── ACF Options Page (Site-wide settings) ─── */
if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page( [
        'page_title' => 'UBL Site Settings',
        'menu_title' => 'Site Settings',
        'menu_slug'  => 'ubl-site-settings',
        'capability' => 'manage_options',
        'icon_url'   => 'dashicons-building',
        'position'   => 2,
    ] );
}

/* ─── ACF Field Registrations ─── */
add_action( 'acf/init', function () {
    require_once UBL_DIR . '/inc/acf-fields.php';
    require_once UBL_DIR . '/inc/acf-product-fields.php';
} );

/* ─── Helper: get ACF field with fallback ─── */
function ubl_field( $field, $fallback = '', $post_id = false ) {
    if ( ! function_exists( 'get_field' ) ) return $fallback;
    $val = get_field( $field, $post_id );
    return ( $val !== null && $val !== '' && $val !== false ) ? $val : $fallback;
}

function ubl_option( $field, $fallback = '' ) {
    return ubl_field( $field, $fallback, 'option' );
}

/* ─── Admin: Show front page setting ─── */
add_action( 'admin_init', function () {
    // Ensure "Your homepage displays" setting shows in Reading
    if ( get_option( 'show_on_front' ) !== 'page' ) {
        update_option( 'show_on_front', 'page' );
    }
} );

/* ─── Preconnect for performance ─── */
add_action( 'wp_head', function () {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}, 1 );

/* ─── Favicon ─── */
add_action( 'wp_head', function () {
    echo '<link rel="icon" type="image/png" href="' . UBL_URI . '/assets/images/ubl-favicon.png">' . "\n";
} );

/* ─── Cloudflare Cache Purge ─── */
define( 'UBL_CF_ZONE', '272b4923ce32cbb684e169a1e4694fdd' );
define( 'UBL_CF_TOKEN', 'cfut_vQ1y0nax6ufvH4SWHx71KU0miKXAAutV76TnBvhVb0f3828e' );

function ubl_cf_purge_cache() {
    $response = wp_remote_post( 'https://api.cloudflare.com/client/v4/zones/' . UBL_CF_ZONE . '/purge_cache', [
        'headers' => [
            'Authorization' => 'Bearer ' . UBL_CF_TOKEN,
            'Content-Type'  => 'application/json',
        ],
        'body' => json_encode( [ 'purge_everything' => true ] ),
    ] );
    $body = json_decode( wp_remote_retrieve_body( $response ), true );
    return ! empty( $body['success'] );
}

/* Admin bar "Purge Cache" button */
add_action( 'admin_bar_menu', function ( $wp_admin_bar ) {
    if ( ! current_user_can( 'manage_options' ) ) return;
    $wp_admin_bar->add_node( [
        'id'    => 'ubl-purge-cf',
        'title' => '🔄 Purge CF Cache',
        'href'  => wp_nonce_url( admin_url( 'admin-post.php?action=ubl_purge_cf' ), 'ubl_purge_cf' ),
    ] );
}, 999 );

add_action( 'admin_post_ubl_purge_cf', function () {
    if ( ! current_user_can( 'manage_options' ) || ! wp_verify_nonce( $_GET['_wpnonce'], 'ubl_purge_cf' ) ) {
        wp_die( 'Unauthorized' );
    }
    $success = ubl_cf_purge_cache();
    wp_redirect( add_query_arg( 'cf_purged', $success ? '1' : '0', wp_get_referer() ?: admin_url() ) );
    exit;
} );

add_action( 'admin_notices', function () {
    if ( isset( $_GET['cf_purged'] ) ) {
        $ok = $_GET['cf_purged'] === '1';
        printf( '<div class="notice notice-%s is-dismissible"><p>Cloudflare cache %s.</p></div>',
            $ok ? 'success' : 'error',
            $ok ? 'purged successfully' : 'purge failed'
        );
    }
} );

/* Auto-purge on post/page update */
add_action( 'save_post', function ( $post_id ) {
    if ( wp_is_post_revision( $post_id ) || wp_is_post_autosave( $post_id ) ) return;
    ubl_cf_purge_cache();
}, 20 );

/* ─── Custom Login Page (Light Theme + Math Captcha) ─── */
add_action( 'login_enqueue_scripts', function () {
    wp_enqueue_style( 'ubl-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap',
        [], null
    );
    ?>
    <style>
        :root {
            --navy: #0B1F3A;
            --gold: #C8A84B;
            --gold-light: #D4BA6A;
        }
        body.login {
            background: #F5F5F7 !important;
            display: flex; align-items: center; justify-content: center;
            min-height: 100vh; margin: 0;
            font-family: 'Poppins', -apple-system, sans-serif;
        }
        /* Logo */
        #login h1 a {
            background-image: url('<?php echo UBL_URI; ?>/assets/images/UBL_LOGO.png') !important;
            background-size: contain !important;
            background-position: center !important;
            width: 80px !important; height: 80px !important;
            margin-bottom: 1.2rem !important;
        }
        /* Form container */
        #loginform, #registerform, #lostpasswordform {
            background: #FFFFFF !important;
            border: 1px solid rgba(11,31,58,0.08) !important;
            border-radius: 16px !important;
            padding: 2.5rem 2.5rem 2rem !important;
            box-shadow: 0 8px 40px rgba(11,31,58,0.08) !important;
        }
        #login {
            width: 400px !important; padding: 0 !important;
        }
        /* Labels */
        #loginform label, #registerform label, #lostpasswordform label,
        #loginform .ubl-captcha-label {
            color: var(--navy) !important;
            font-family: 'Poppins', sans-serif !important;
            font-size: 0.82rem !important;
            font-weight: 600 !important;
            letter-spacing: 0 !important;
            text-transform: none !important;
        }
        /* Inputs */
        #loginform input[type="text"],
        #loginform input[type="password"],
        #loginform input[type="number"],
        #registerform input[type="text"],
        #registerform input[type="email"],
        #lostpasswordform input[type="text"] {
            background: #F5F5F7 !important;
            border: 1px solid rgba(11,31,58,0.12) !important;
            border-radius: 8px !important;
            color: var(--navy) !important;
            font-family: 'Poppins', sans-serif !important;
            font-size: 0.9rem !important;
            padding: 0.8rem 1rem !important;
            width: 100% !important;
            box-sizing: border-box !important;
            transition: border-color 0.3s, box-shadow 0.3s !important;
            margin-top: 0.3rem !important;
        }
        #loginform input:focus, #registerform input:focus, #lostpasswordform input:focus {
            background: #FFFFFF !important;
            border-color: var(--gold) !important;
            box-shadow: 0 0 0 3px rgba(200,168,75,0.12) !important;
            outline: none !important;
        }
        /* Submit button */
        #wp-submit, .button-primary {
            background: var(--navy) !important;
            border: none !important;
            border-radius: 8px !important;
            color: #FFFFFF !important;
            font-family: 'Poppins', sans-serif !important;
            font-size: 0.85rem !important;
            font-weight: 600 !important;
            letter-spacing: 0.02em !important;
            text-transform: none !important;
            padding: 0.85rem 2rem !important;
            width: 100% !important;
            cursor: pointer !important;
            transition: all 0.3s !important;
            text-shadow: none !important;
            box-shadow: none !important;
            height: auto !important;
            line-height: 1.4 !important;
            margin-top: 0.5rem !important;
        }
        #wp-submit:hover, .button-primary:hover {
            background: var(--gold) !important;
            color: var(--navy) !important;
            box-shadow: 0 6px 20px rgba(200,168,75,0.25) !important;
            transform: translateY(-1px);
        }
        /* Remember me */
        .forgetmenot { margin-bottom: 1rem !important; }
        .forgetmenot label {
            color: #6B6F7A !important;
            font-size: 0.8rem !important;
        }
        .forgetmenot input[type="checkbox"] { accent-color: var(--gold); }
        /* Links */
        #login #nav a, #login #backtoblog a, .login .privacy-policy-page-link a {
            color: #6B6F7A !important;
            font-family: 'Poppins', sans-serif !important;
            font-size: 0.78rem !important;
            transition: color 0.2s !important;
        }
        #login #nav a:hover, #login #backtoblog a:hover { color: var(--gold) !important; }
        #login #nav, #login #backtoblog { text-align: center !important; padding: 0 !important; }
        /* Error/Message */
        #login .message, #login .success {
            background: rgba(200,168,75,0.08) !important;
            border-left: 4px solid var(--gold) !important;
            color: var(--navy) !important;
            border-radius: 8px !important;
            padding: 0.8rem 1rem !important;
            margin-bottom: 1.5rem !important;
            box-shadow: none !important;
        }
        #login_error {
            background: #FEF2F2 !important;
            border-left: 4px solid #EF4444 !important;
            color: #991B1B !important;
            border-radius: 8px !important;
            padding: 0.8rem 1rem !important;
            margin-bottom: 1.5rem !important;
            box-shadow: none !important;
        }
        #login_error a { color: var(--gold) !important; }
        .language-switcher { display: none !important; }
        /* Captcha field */
        .ubl-captcha-wrap {
            margin: 1rem 0 0.5rem;
            padding: 1rem;
            background: #F5F5F7;
            border-radius: 8px;
            border: 1px solid rgba(11,31,58,0.06);
        }
        .ubl-captcha-label {
            display: block; margin-bottom: 0.5rem;
        }
        .ubl-captcha-question {
            font-family: 'Inter', sans-serif;
            font-size: 1.1rem; font-weight: 700;
            color: var(--navy); margin-bottom: 0.5rem;
        }
        .ubl-captcha-wrap input[type="number"] {
            width: 100px !important; text-align: center;
        }
    </style>
    <?php
} );

/* Custom login logo URL & title */
add_filter( 'login_headerurl', function () { return home_url(); } );
add_filter( 'login_headertext', function () { return 'Umang Boards Limited'; } );

/* ─── Math Captcha on Login ─── */
add_action( 'login_form', function () {
    $num1 = wp_rand( 2, 15 );
    $num2 = wp_rand( 1, 10 );
    $hash = wp_hash( $num1 + $num2, 'nonce' );
    ?>
    <div class="ubl-captcha-wrap">
        <label class="ubl-captcha-label">Security Check</label>
        <div class="ubl-captcha-question">What is <?php echo $num1; ?> + <?php echo $num2; ?>?</div>
        <input type="number" name="ubl_captcha_answer" required placeholder="Answer" autocomplete="off">
        <input type="hidden" name="ubl_captcha_hash" value="<?php echo esc_attr( $hash ); ?>">
    </div>
    <?php
} );

add_filter( 'authenticate', function ( $user, $username, $password ) {
    if ( empty( $username ) && empty( $password ) ) return $user;
    if ( defined( 'XMLRPC_REQUEST' ) || defined( 'REST_REQUEST' ) ) return $user;

    $answer = isset( $_POST['ubl_captcha_answer'] ) ? intval( $_POST['ubl_captcha_answer'] ) : -1;
    $hash   = isset( $_POST['ubl_captcha_hash'] ) ? sanitize_text_field( $_POST['ubl_captcha_hash'] ) : '';

    if ( wp_hash( $answer, 'nonce' ) !== $hash ) {
        return new \WP_Error( 'captcha_failed', '<strong>Security check failed.</strong> Please solve the math problem correctly.' );
    }

    return $user;
}, 30, 3 );

/* ─── Customer Portal AJAX Handlers ─── */
require_once UBL_DIR . '/inc/portal-handlers.php';

/* ─── Remove unnecessary WP head bloat ─── */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
