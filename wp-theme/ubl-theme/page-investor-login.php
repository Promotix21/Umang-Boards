<?php
/**
 * Template Name: Investor Login
 * Slug: investor-login
 *
 * Custom investor login page — not tied to WordPress auth.
 * Approved investors log in with email/password and can download financial reports.
 */
get_header();

// Handle login / session
if ( ! session_id() ) {
    session_start();
}

$is_logged_in  = ! empty( $_SESSION['ubl_investor_logged_in'] );
$login_error   = '';

// Process login form
if ( isset( $_POST['ubl_investor_login_nonce'] ) && wp_verify_nonce( $_POST['ubl_investor_login_nonce'], 'ubl_investor_login' ) ) {
    $email    = sanitize_email( $_POST['investor_email'] ?? '' );
    $password = $_POST['investor_password'] ?? '';

    // Demo credentials — replace with database lookup in production
    $approved_investors = [
        'investor@umangboards.com' => 'UBL@2024',
        'admin@umangboards.com'    => 'UBL@2024',
    ];

    if ( isset( $approved_investors[ $email ] ) && $approved_investors[ $email ] === $password ) {
        $_SESSION['ubl_investor_logged_in'] = true;
        $_SESSION['ubl_investor_email']     = $email;
        $is_logged_in = true;
    } else {
        $login_error = 'Invalid email or password. Please contact cs@umangboards.com for access.';
    }
}

// Handle logout
if ( isset( $_GET['logout'] ) && $_GET['logout'] === '1' ) {
    unset( $_SESSION['ubl_investor_logged_in'], $_SESSION['ubl_investor_email'] );
    $is_logged_in = false;
}

// Handle file download
if ( $is_logged_in && isset( $_GET['download'] ) ) {
    $allowed_files = [
        'financial-2018-19' => 'Financial_Report_2018-19.pdf',
        'financial-2019-20' => 'Financial_Report_2019-20.pdf',
    ];
    $file_key = sanitize_text_field( $_GET['download'] );
    if ( isset( $allowed_files[ $file_key ] ) ) {
        $file_path = UBL_DIR . '/assets/downloads/' . $allowed_files[ $file_key ];
        if ( file_exists( $file_path ) ) {
            header( 'Content-Type: application/pdf' );
            header( 'Content-Disposition: attachment; filename="' . $allowed_files[ $file_key ] . '"' );
            header( 'Content-Length: ' . filesize( $file_path ) );
            readfile( $file_path );
            exit;
        }
    }
}
?>

<main class="investor-login-page">
    <div class="inv-login-bg">
        <div class="inv-login-watermark" aria-hidden="true">INVESTORS</div>
    </div>

    <div class="inv-login-container">

        <?php if ( ! $is_logged_in ) : ?>
        <!-- LOGIN FORM -->
        <div class="inv-login-card" id="invLoginCard">
            <div class="inv-login-icon">
                <svg viewBox="0 0 24 24" width="40" height="40" fill="none" stroke="var(--gold)" stroke-width="1.5">
                    <rect x="3" y="11" width="18" height="11" rx="2"/>
                    <path d="M7 11V7a5 5 0 0110 0v4"/>
                </svg>
            </div>
            <h1 class="inv-login-title">Investor Portal</h1>
            <p class="inv-login-desc">Access financial reports and investor documents. This portal is restricted to approved investors only.</p>

            <?php if ( $login_error ) : ?>
                <div class="inv-login-error">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M15 9l-6 6M9 9l6 6"/></svg>
                    <?php echo esc_html( $login_error ); ?>
                </div>
            <?php endif; ?>

            <form method="POST" class="inv-login-form" autocomplete="off">
                <?php wp_nonce_field( 'ubl_investor_login', 'ubl_investor_login_nonce' ); ?>

                <div class="inv-form-group">
                    <label for="investor_email">Email Address</label>
                    <input type="email" id="investor_email" name="investor_email" placeholder="your@email.com" required autocomplete="email">
                </div>

                <div class="inv-form-group">
                    <label for="investor_password">Password</label>
                    <input type="password" id="investor_password" name="investor_password" placeholder="Enter your password" required>
                </div>

                <button type="submit" class="inv-login-btn">
                    <span>Sign In</span>
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </form>

            <div class="inv-login-footer">
                <p>Don't have access? Contact our Compliance Officer:</p>
                <a href="mailto:cs@umangboards.com">cs@umangboards.com</a>
                <span>|</span>
                <a href="tel:+911412379414">+91-141-2379414</a>
            </div>
        </div>

        <?php else : ?>
        <!-- DOWNLOADS PANEL -->
        <div class="inv-downloads-card" id="invDownloadsCard">
            <div class="inv-downloads-header">
                <div>
                    <h1 class="inv-login-title">Investor Downloads</h1>
                    <p class="inv-login-desc">Welcome back. Access your financial documents below.</p>
                </div>
                <a href="?logout=1" class="inv-logout-btn" data-cursor="hover">
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg>
                    Logout
                </a>
            </div>

            <div class="inv-dl-grid">
                <a href="?download=financial-2018-19" class="inv-dl-card" data-cursor="hover">
                    <div class="inv-dl-icon">
                        <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="var(--gold)" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                        </svg>
                    </div>
                    <div class="inv-dl-info">
                        <h3>Financial Report 2018-19</h3>
                        <span>Annual Report &middot; PDF</span>
                    </div>
                    <div class="inv-dl-action">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/>
                            <polyline points="7 10 12 15 17 10"/>
                            <line x1="12" y1="15" x2="12" y2="3"/>
                        </svg>
                    </div>
                </a>

                <a href="?download=financial-2019-20" class="inv-dl-card" data-cursor="hover">
                    <div class="inv-dl-icon">
                        <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="var(--gold)" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                        </svg>
                    </div>
                    <div class="inv-dl-info">
                        <h3>Financial Report 2019-20</h3>
                        <span>Annual Report &middot; PDF</span>
                    </div>
                    <div class="inv-dl-action">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/>
                            <polyline points="7 10 12 15 17 10"/>
                            <line x1="12" y1="15" x2="12" y2="3"/>
                        </svg>
                    </div>
                </a>
            </div>

            <div class="inv-contact-block">
                <h3>Need Help?</h3>
                <p>Contact our Company Secretary &amp; Compliance Officer</p>
                <div class="inv-contact-details">
                    <span><strong>Ayush Vijay</strong></span>
                    <a href="mailto:cs@umangboards.com">cs@umangboards.com</a>
                    <a href="tel:+911412379414">+91-141-2379414</a>
                </div>
            </div>
        </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
