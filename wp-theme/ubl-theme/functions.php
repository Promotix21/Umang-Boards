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

/* ─── Remove unnecessary WP head bloat ─── */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
