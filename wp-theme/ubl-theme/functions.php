<?php
/**
 * Umang Boards Limited — Theme Functions
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'UBL_VERSION', '2.6.0' );
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
        'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&family=DM+Mono:wght@400;500&display=swap',
        [], null
    );

    // Theme CSS
    wp_enqueue_style( 'ubl-main', UBL_URI . '/assets/css/styles-v2.css', [], UBL_VERSION );
    wp_enqueue_style( 'ubl-sections', UBL_URI . '/assets/css/sections-v2.css', [ 'ubl-main' ], UBL_VERSION );
    wp_enqueue_style( 'ubl-theme-style', get_stylesheet_uri(), [ 'ubl-sections' ], UBL_VERSION );

    // Libraries (CDN)
    wp_enqueue_script( 'lenis', 'https://unpkg.com/lenis@1.1.18/dist/lenis.min.js', [], '1.1.18', true );
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', [], '3.12.5', true );
    wp_enqueue_script( 'gsap-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', [ 'gsap' ], '3.12.5', true );

    // Theme JS
    wp_enqueue_script( 'ubl-world-paths', UBL_URI . '/assets/js/world-paths.js', [], UBL_VERSION, true );
    wp_enqueue_script( 'ubl-main-js', UBL_URI . '/assets/js/script-v2.js', [ 'lenis', 'gsap', 'gsap-scroll' ], UBL_VERSION, true );
    wp_enqueue_script( 'ubl-world-map', UBL_URI . '/assets/js/world-map.js', [ 'ubl-main-js' ], UBL_VERSION, true );
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

/* ─── Custom Login Page ─── */
add_action( 'login_enqueue_scripts', function () {
    wp_enqueue_style( 'ubl-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap',
        [], null
    );
    ?>
    <style>
        :root {
            --navy: #0B1F3A;
            --navy-light: #1A3556;
            --gold: #C8A84B;
            --gold-light: #D4BA6A;
            --gold-pale: #E8D9A8;
        }
        body.login {
            background: var(--navy) !important;
            display: flex; align-items: center; justify-content: center;
            min-height: 100vh; margin: 0;
            font-family: 'Poppins', -apple-system, sans-serif;
            position: relative; overflow: hidden;
        }
        /* Watermark */
        body.login::before {
            content: 'UBL';
            position: fixed; top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Poppins', sans-serif;
            font-size: 28vw; font-weight: 900;
            color: rgba(255,255,255,0.02);
            pointer-events: none; z-index: 0;
            letter-spacing: 0.05em;
        }
        /* Logo */
        #login h1 a {
            background-image: url('<?php echo UBL_URI; ?>/assets/images/UBL_LOGO.png') !important;
            background-size: contain !important;
            background-position: center !important;
            width: 80px !important; height: 80px !important;
            margin-bottom: 1.5rem !important;
        }
        /* Form container */
        #loginform, #registerform, #lostpasswordform {
            background: rgba(255,255,255,0.04) !important;
            border: 1px solid rgba(255,255,255,0.08) !important;
            border-radius: 16px !important;
            padding: 2.5rem 2.5rem 2rem !important;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3) !important;
            backdrop-filter: blur(12px);
        }
        #login {
            width: 380px !important; padding: 0 !important;
            position: relative; z-index: 1;
        }
        /* Labels */
        #loginform label, #registerform label, #lostpasswordform label {
            color: rgba(255,255,255,0.5) !important;
            font-family: 'DM Mono', monospace !important;
            font-size: 0.72rem !important;
            letter-spacing: 0.12em !important;
            text-transform: uppercase !important;
            font-weight: 500 !important;
        }
        /* Inputs */
        #loginform input[type="text"],
        #loginform input[type="password"],
        #registerform input[type="text"],
        #registerform input[type="email"],
        #lostpasswordform input[type="text"] {
            background: rgba(255,255,255,0.06) !important;
            border: 1px solid rgba(255,255,255,0.12) !important;
            border-radius: 8px !important;
            color: #FFFFFF !important;
            font-family: 'Poppins', sans-serif !important;
            font-size: 0.9rem !important;
            padding: 0.8rem 1rem !important;
            width: 100% !important;
            box-sizing: border-box !important;
            transition: border-color 0.3s, box-shadow 0.3s !important;
            margin-top: 0.4rem !important;
        }
        #loginform input:focus, #registerform input:focus, #lostpasswordform input:focus {
            border-color: var(--gold) !important;
            box-shadow: 0 0 0 3px rgba(200,168,75,0.15) !important;
            outline: none !important;
        }
        /* Submit button */
        #wp-submit, .button-primary {
            background: var(--gold) !important;
            border: none !important;
            border-radius: 6px !important;
            color: var(--navy) !important;
            font-family: 'DM Mono', monospace !important;
            font-size: 0.72rem !important;
            font-weight: 700 !important;
            letter-spacing: 0.15em !important;
            text-transform: uppercase !important;
            padding: 0.9rem 2rem !important;
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
            background: var(--gold-light) !important;
            box-shadow: 0 8px 30px rgba(200,168,75,0.3) !important;
            transform: translateY(-2px);
        }
        /* Remember me */
        .forgetmenot {
            margin-bottom: 1rem !important;
        }
        .forgetmenot label {
            color: rgba(255,255,255,0.35) !important;
            font-size: 0.75rem !important;
        }
        .forgetmenot input[type="checkbox"] {
            accent-color: var(--gold);
        }
        /* Links */
        #login #nav a, #login #backtoblog a, .login .privacy-policy-page-link a {
            color: rgba(255,255,255,0.35) !important;
            font-family: 'DM Mono', monospace !important;
            font-size: 0.72rem !important;
            letter-spacing: 0.08em !important;
            transition: color 0.2s !important;
        }
        #login #nav a:hover, #login #backtoblog a:hover, .login .privacy-policy-page-link a:hover {
            color: var(--gold) !important;
        }
        #login #nav, #login #backtoblog {
            text-align: center !important;
            padding: 0 !important;
        }
        /* Error/Message boxes */
        #login .message, #login .success {
            background: rgba(200,168,75,0.08) !important;
            border-left: 4px solid var(--gold) !important;
            color: rgba(255,255,255,0.7) !important;
            border-radius: 8px !important;
            padding: 0.8rem 1rem !important;
            margin-bottom: 1.5rem !important;
            box-shadow: none !important;
        }
        #login_error {
            background: rgba(220,50,50,0.1) !important;
            border-left: 4px solid #ff6b6b !important;
            color: #ff8a8a !important;
            border-radius: 8px !important;
            padding: 0.8rem 1rem !important;
            margin-bottom: 1.5rem !important;
            box-shadow: none !important;
        }
        #login_error a { color: var(--gold) !important; }
        /* Hide unnecessary elements */
        .language-switcher { display: none !important; }
        .login .privacy-policy-page-link { margin-top: 1rem !important; }
    </style>
    <?php
} );

/* Custom login logo URL & title */
add_filter( 'login_headerurl', function () { return home_url(); } );
add_filter( 'login_headertext', function () { return 'Umang Boards Limited'; } );

/* ─── Remove unnecessary WP head bloat ─── */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
