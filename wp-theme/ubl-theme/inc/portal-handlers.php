<?php
/**
 * Customer Portal — AJAX Handlers
 * Login, Registration, Forgot Password
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ─── Registration Handler ─── */
add_action( 'wp_ajax_nopriv_ubl_register', 'ubl_handle_register' );
function ubl_handle_register() {
    check_ajax_referer( 'ubl_portal_nonce', 'nonce' );

    $name     = sanitize_text_field( $_POST['name'] ?? '' );
    $email    = sanitize_email( $_POST['email'] ?? '' );
    $company  = sanitize_text_field( $_POST['company'] ?? '' );
    $phone    = sanitize_text_field( $_POST['phone'] ?? '' );
    $password = $_POST['password'] ?? '';
    $confirm  = $_POST['confirm_password'] ?? '';

    // Validate required fields
    if ( empty( $name ) || empty( $email ) || empty( $password ) ) {
        wp_send_json_error( [ 'message' => 'Name, email and password are required.' ] );
    }

    // Validate email format
    if ( ! is_email( $email ) ) {
        wp_send_json_error( [ 'message' => 'Please enter a valid email address.' ] );
    }

    // Check if email already exists
    if ( email_exists( $email ) ) {
        wp_send_json_error( [ 'message' => 'An account with this email already exists.' ] );
    }

    // Password strength
    if ( strlen( $password ) < 8 ) {
        wp_send_json_error( [ 'message' => 'Password must be at least 8 characters.' ] );
    }

    // Confirm password
    if ( $password !== $confirm ) {
        wp_send_json_error( [ 'message' => 'Passwords do not match.' ] );
    }

    // Create user with 'subscriber' role
    $user_id = wp_create_user( sanitize_user( $email ), $password, $email );
    if ( is_wp_error( $user_id ) ) {
        wp_send_json_error( [ 'message' => $user_id->get_error_message() ] );
    }

    // Set display name and meta
    wp_update_user( [
        'ID'           => $user_id,
        'display_name' => $name,
        'first_name'   => $name,
        'role'         => 'subscriber',
    ] );
    update_user_meta( $user_id, 'company', $company );
    update_user_meta( $user_id, 'phone', $phone );

    // Auto-login
    wp_set_current_user( $user_id );
    wp_set_auth_cookie( $user_id );

    wp_send_json_success( [
        'message'  => 'Account created successfully!',
        'redirect' => get_permalink(),
    ] );
}

/* ─── Login Handler ─── */
add_action( 'wp_ajax_nopriv_ubl_login', 'ubl_handle_login' );
function ubl_handle_login() {
    check_ajax_referer( 'ubl_portal_nonce', 'nonce' );

    $email    = sanitize_email( $_POST['email'] ?? '' );
    $password = $_POST['password'] ?? '';

    if ( empty( $email ) || empty( $password ) ) {
        wp_send_json_error( [ 'message' => 'Email and password are required.' ] );
    }

    $user = wp_signon( [
        'user_login'    => $email,
        'user_password' => $password,
        'remember'      => true,
    ] );

    if ( is_wp_error( $user ) ) {
        wp_send_json_error( [ 'message' => 'Invalid email or password.' ] );
    }

    wp_send_json_success( [
        'message'  => 'Login successful!',
        'redirect' => get_permalink(),
    ] );
}

/* ─── Forgot Password Handler ─── */
add_action( 'wp_ajax_nopriv_ubl_forgot_password', 'ubl_handle_forgot_password' );
function ubl_handle_forgot_password() {
    check_ajax_referer( 'ubl_portal_nonce', 'nonce' );

    $email = sanitize_email( $_POST['email'] ?? '' );

    if ( empty( $email ) ) {
        wp_send_json_error( [ 'message' => 'Please enter your email address.' ] );
    }

    $user = get_user_by( 'email', $email );

    if ( $user ) {
        retrieve_password( $email );
    }

    // Always return success to avoid revealing if email exists
    wp_send_json_success( [
        'message' => 'If an account exists with this email, a password reset link has been sent.',
    ] );
}
