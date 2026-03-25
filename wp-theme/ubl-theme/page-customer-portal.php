<?php
/**
 * Template Name: Customer Portal
 * Login / Register / Forgot Password + Catalogue Downloads
 *
 * @package UBL_Theme
 */

// No header/footer — full-screen portal experience
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Customer Portal — Umang Boards Limited</title>
<link rel="icon" href="<?php echo UBL_URI; ?>/assets/images/ubl-favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body class="portal-body">
<?php
$uri         = UBL_URI;
$is_logged   = is_user_logged_in();
$current     = wp_get_current_user();
$company     = $is_logged ? get_user_meta( $current->ID, 'company', true ) : '';
$ajax_url    = admin_url( 'admin-ajax.php' );
$nonce       = wp_create_nonce( 'ubl_portal_nonce' );

// Catalogue data (hardcoded — can be converted to ACF later)
$catalogues = [
    [ 'name' => 'Transformer Insulation Catalogue', 'icon' => 'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z', 'size' => '12.5 MB', 'updated' => 'January 2025', 'file' => '#' ],
    [ 'name' => 'Winding Wires Catalogue',          'icon' => 'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z', 'size' => '8.2 MB',  'updated' => 'January 2025', 'file' => '#' ],
    [ 'name' => 'Insulating Chemicals Catalogue',    'icon' => 'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z', 'size' => '5.1 MB',  'updated' => 'January 2025', 'file' => '#' ],
    [ 'name' => 'Complete Product Catalogue 2025',   'icon' => 'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z', 'size' => '28.4 MB', 'updated' => 'January 2025', 'file' => '#' ],
];
?>

<style>
/* ============================================
   CUSTOMER PORTAL — Premium Split Layout
   ============================================ */

/* --- VARIABLES (fallbacks if not already set) --- */
:root {
    --portal-navy: #376eb4;
    --portal-gold: #D4A843;
    --portal-bg: #FFFFFF;
    --portal-bg2: #F5F5F7;
    --portal-text: #1A1D24;
    --portal-text2: #3A3D48;
    --portal-muted: #6B6F7A;
    --portal-ease: cubic-bezier(0.16, 1, 0.3, 1);
}

/* --- RESET page-specific --- */
.portal-page { margin: 0; padding: 0; }
.portal-page * { box-sizing: border-box; }

/* ─── AUTH LAYOUT (Not logged in) ─── */
.portal-auth {
    display: flex;
    min-height: 100vh;
    padding-top: calc(var(--utility-h, 0px) + var(--header-h, 80px));
}

/* Left Branding Pane */
.portal-brand {
    width: 45%;
    background: var(--portal-navy);
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 4rem;
    position: relative;
    overflow: hidden;
}
.portal-brand::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 30% 50%, rgba(212, 168, 67, 0.08) 0%, transparent 60%),
                radial-gradient(ellipse at 80% 20%, rgba(255,255,255,0.04) 0%, transparent 50%);
    pointer-events: none;
}
.portal-brand::after {
    content: '';
    position: absolute;
    bottom: -80px;
    right: -80px;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    border: 1px solid rgba(255,255,255,0.06);
    pointer-events: none;
}
.portal-brand-inner {
    position: relative;
    z-index: 1;
}
.portal-brand-logo {
    width: 56px;
    height: 56px;
    margin-bottom: 2rem;
}
.portal-brand h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 2.2rem;
    font-weight: 700;
    line-height: 1.2;
    margin: 0 0 1rem;
    letter-spacing: -0.02em;
}
.portal-brand h1 span {
    color: var(--portal-gold);
}
.portal-brand-desc {
    font-size: 1rem;
    line-height: 1.7;
    opacity: 0.75;
    margin: 0 0 3rem;
    max-width: 380px;
}
.portal-stats {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
}
.portal-stat {
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 0.9rem;
    opacity: 0.7;
}
.portal-stat-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: rgba(255,255,255,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.portal-stat-icon svg {
    width: 18px;
    height: 18px;
    stroke: var(--portal-gold);
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

/* Right Form Pane */
.portal-form-pane {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 3rem;
    background: #fff;
    position: relative;
}
.portal-form-container {
    width: 100%;
    max-width: 440px;
}

/* Tab navigation */
.portal-tabs {
    display: flex;
    gap: 0;
    margin-bottom: 2rem;
    border-bottom: 2px solid rgba(11,31,58,0.06);
}
.portal-tab {
    padding: 1rem 1.5rem;
    font-family: 'Poppins', sans-serif;
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--portal-muted);
    border: none;
    background: none;
    cursor: pointer;
    position: relative;
    transition: color 0.3s;
}
.portal-tab:hover {
    color: var(--portal-text2);
}
.portal-tab.active {
    color: var(--portal-navy);
}
.portal-tab.active::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    right: 0;
    height: 2px;
    background: var(--portal-navy);
    border-radius: 2px 2px 0 0;
}

/* Form panels */
.portal-panel {
    display: none;
    animation: portalFadeIn 0.35s var(--portal-ease);
}
.portal-panel.active {
    display: block;
}
@keyframes portalFadeIn {
    from { opacity: 0; transform: translateY(8px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* Form heading */
.portal-form-title {
    font-family: 'Poppins', sans-serif;
    font-size: 1.6rem;
    font-weight: 700;
    color: var(--portal-text);
    margin: 0 0 0.5rem;
}
.portal-form-subtitle {
    font-size: 0.9rem;
    color: var(--portal-muted);
    margin: 0 0 2rem;
    line-height: 1.6;
}

/* Form groups */
.portal-field {
    margin-bottom: 1.25rem;
}
.portal-label {
    display: block;
    font-family: 'Poppins', sans-serif;
    font-size: 0.82rem;
    font-weight: 600;
    color: var(--portal-text2);
    margin-bottom: 0.4rem;
}
.portal-input-wrap {
    position: relative;
}
.portal-input {
    width: 100%;
    height: 52px;
    padding: 0 1.25rem;
    border: 1px solid rgba(11, 31, 58, 0.12);
    border-radius: 8px;
    font-family: 'Poppins', sans-serif;
    font-size: 0.92rem;
    color: var(--portal-text);
    background: #fff;
    transition: border-color 0.3s, box-shadow 0.3s;
    outline: none;
}
.portal-input:focus {
    border-color: var(--portal-navy);
    box-shadow: 0 0 0 3px rgba(55, 110, 180, 0.1);
}
.portal-input::placeholder {
    color: #B0B4BC;
}
.portal-input.error {
    border-color: #EF4444;
    box-shadow: 0 0 0 3px rgba(239,68,68,0.08);
}

/* Password toggle */
.portal-pw-toggle {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    cursor: pointer;
    padding: 4px;
    color: var(--portal-muted);
    transition: color 0.2s;
}
.portal-pw-toggle:hover {
    color: var(--portal-navy);
}
.portal-pw-toggle svg {
    width: 18px;
    height: 18px;
    display: block;
}

/* Submit button */
.portal-submit {
    width: 100%;
    height: 52px;
    background: var(--portal-navy);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-family: 'Poppins', sans-serif;
    font-size: 0.92rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
    margin-top: 0.5rem;
}
.portal-submit:hover:not(:disabled) {
    background: var(--portal-gold);
    color: var(--portal-navy);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
}
.portal-submit:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}
.portal-submit .spinner {
    display: none;
    width: 20px;
    height: 20px;
    border: 2px solid rgba(255,255,255,0.3);
    border-top-color: #fff;
    border-radius: 50%;
    animation: portalSpin 0.6s linear infinite;
    margin: 0 auto;
}
.portal-submit.loading .btn-text { display: none; }
.portal-submit.loading .spinner { display: block; }
.portal-submit.loading:hover {
    background: var(--portal-navy);
    color: #fff;
    transform: none;
    box-shadow: none;
}
@keyframes portalSpin {
    to { transform: rotate(360deg); }
}

/* Alert messages */
.portal-alert {
    padding: 0.85rem 1rem;
    border-radius: 8px;
    font-size: 0.85rem;
    margin-bottom: 1.25rem;
    display: none;
    line-height: 1.5;
}
.portal-alert.show { display: block; animation: portalFadeIn 0.3s; }
.portal-alert.success {
    background: #ECFDF5;
    border: 1px solid #A7F3D0;
    color: #065F46;
}
.portal-alert.error {
    background: #FEF2F2;
    border: 1px solid #FECACA;
    color: #991B1B;
}

/* Divider */
.portal-divider {
    display: flex;
    align-items: center;
    margin: 1.75rem 0;
    gap: 1rem;
}
.portal-divider::before,
.portal-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: rgba(11,31,58,0.08);
}
.portal-divider span {
    font-size: 0.8rem;
    color: var(--portal-muted);
}

/* Switch links */
.portal-switch {
    text-align: center;
    font-size: 0.88rem;
    color: var(--portal-muted);
}
.portal-switch a,
.portal-link {
    color: var(--portal-navy);
    font-weight: 600;
    text-decoration: none;
    cursor: pointer;
    transition: color 0.2s;
}
.portal-switch a:hover,
.portal-link:hover {
    color: var(--portal-gold);
}
.portal-back-link {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 0.88rem;
    color: var(--portal-navy);
    font-weight: 600;
    text-decoration: none;
    cursor: pointer;
    transition: color 0.2s;
    margin-top: 1.5rem;
}
.portal-back-link:hover { color: var(--portal-gold); }
.portal-back-link svg { width: 16px; height: 16px; }

.portal-forgot {
    text-align: right;
    margin-top: -0.5rem;
    margin-bottom: 1rem;
}
.portal-forgot a {
    font-size: 0.82rem;
    color: var(--portal-muted);
    text-decoration: none;
    cursor: pointer;
    transition: color 0.2s;
}
.portal-forgot a:hover {
    color: var(--portal-navy);
}

/* ─── DASHBOARD LAYOUT (Logged in) ─── */
.portal-dashboard {
    padding: calc(var(--utility-h, 0px) + var(--header-h, 80px) + 3rem) 0 6rem;
    background: var(--portal-bg2);
    min-height: 100vh;
}
.portal-dash-inner {
    max-width: 960px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* Welcome header */
.portal-welcome {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fff;
    border-radius: 16px;
    padding: 2rem 2.5rem;
    margin-bottom: 2rem;
    border: 1px solid rgba(11,31,58,0.06);
    box-shadow: 0 4px 20px rgba(11,31,58,0.04);
}
.portal-welcome-info h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--portal-text);
    margin: 0 0 0.25rem;
}
.portal-welcome-info p {
    font-size: 0.9rem;
    color: var(--portal-muted);
    margin: 0;
}
.portal-logout {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.65rem 1.5rem;
    border: 1px solid rgba(11,31,58,0.12);
    border-radius: 8px;
    font-family: 'Poppins', sans-serif;
    font-size: 0.85rem;
    font-weight: 500;
    color: var(--portal-muted);
    text-decoration: none;
    transition: all 0.3s;
    background: none;
}
.portal-logout:hover {
    border-color: #EF4444;
    color: #EF4444;
    background: #FEF2F2;
}
.portal-logout svg {
    width: 16px;
    height: 16px;
}

/* Section title */
.portal-section-title {
    font-family: 'Poppins', sans-serif;
    font-size: 1.15rem;
    font-weight: 600;
    color: var(--portal-text);
    margin: 0 0 1.25rem;
    display: flex;
    align-items: center;
    gap: 0.6rem;
}
.portal-section-title svg {
    width: 22px;
    height: 22px;
    stroke: var(--portal-navy);
    fill: none;
    stroke-width: 2;
}

/* Catalogue cards */
.portal-cat-grid {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}
.cat-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.5rem 1.75rem;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 12px;
    transition: all 0.35s var(--portal-ease);
}
.cat-card:hover {
    border-color: rgba(55,110,180,0.25);
    box-shadow: 0 12px 30px rgba(11,31,58,0.06);
    transform: translateY(-2px);
}
.cat-card-left {
    display: flex;
    align-items: center;
    gap: 1.25rem;
}
.cat-card-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: rgba(55,110,180,0.06);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.cat-card-icon svg {
    width: 22px;
    height: 22px;
    stroke: var(--portal-navy);
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.cat-card-name {
    font-family: 'Poppins', sans-serif;
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--portal-text);
    margin: 0 0 0.25rem;
}
.cat-card-meta {
    font-size: 0.8rem;
    color: var(--portal-muted);
}
.cat-card-meta span + span::before {
    content: '\00b7';
    margin: 0 0.5rem;
}
.cat-card-dl {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.6rem 1.4rem;
    background: var(--portal-navy);
    color: #fff;
    border-radius: 8px;
    font-family: 'Poppins', sans-serif;
    font-size: 0.82rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
    flex-shrink: 0;
}
.cat-card-dl:hover {
    background: var(--portal-gold);
    color: var(--portal-navy);
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
.cat-card-dl svg {
    width: 16px;
    height: 16px;
}

/* ─── RESPONSIVE ─── */
@media (max-width: 768px) {
    .portal-auth {
        flex-direction: column;
    }
    .portal-brand {
        width: 100%;
        min-height: auto;
        padding: 3rem 2rem 2rem;
    }
    .portal-brand h1 {
        font-size: 1.6rem;
    }
    .portal-brand-desc {
        font-size: 0.88rem;
        margin-bottom: 1.5rem;
    }
    .portal-stats {
        flex-direction: row;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .portal-stat { font-size: 0.8rem; }
    .portal-form-pane {
        padding: 2rem 1.5rem;
    }
    .portal-form-container {
        max-width: 100%;
    }
    .portal-welcome {
        flex-direction: column;
        align-items: flex-start;
        gap: 1.25rem;
        padding: 1.5rem;
    }
    .cat-card {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
        padding: 1.25rem;
    }
    .cat-card-dl {
        width: 100%;
        justify-content: center;
    }
    .portal-dash-inner {
        padding: 0 1rem;
    }
}
@media (max-width: 480px) {
    .portal-brand {
        padding: 2.5rem 1.25rem 1.5rem;
    }
    .portal-form-pane {
        padding: 1.5rem 1.25rem;
    }
    .portal-tab {
        padding: 0.85rem 1rem;
        font-size: 0.82rem;
    }
    .portal-form-title {
        font-size: 1.3rem;
    }
}
</style>

<div class="portal-page">

<?php if ( ! $is_logged ) : ?>
<!-- ═══════════════════════════════════════════════════
     AUTH LAYOUT — Login / Register / Forgot Password
     ═══════════════════════════════════════════════════ -->
<div class="portal-auth">

    <!-- Left Branding Pane -->
    <div class="portal-brand">
        <div class="portal-brand-inner">
            <div class="portal-brand-logo">
                <svg viewBox="0 0 596 596" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:100%;">
                    <g><path fill="#566066" d="M 98.82 71.21 C 165.21 71.32 231.60 71.22 298.00 71.26 C 336.33 70.73 374.67 71.12 413.00 71.00 C 425.16 71.17 437.34 70.64 449.48 71.28 C 449.22 75.62 450.52 80.25 449.31 84.41 C 400.67 137.71 352.05 191.06 303.30 244.27 C 296.83 251.80 289.68 258.73 283.48 266.49 C 280.09 262.08 275.00 259.61 270.57 256.45 C 260.14 249.23 249.81 241.86 239.42 234.59 C 235.78 231.99 231.78 229.80 228.71 226.49 C 237.99 225.70 247.39 226.23 256.60 224.76 C 256.71 222.90 256.84 221.05 257.01 219.20 C 238.16 203.59 218.70 188.71 199.65 173.35 C 196.08 170.38 192.15 167.84 188.84 164.57 C 197.38 163.58 205.98 163.29 214.53 162.43 C 214.61 160.09 214.67 157.75 214.69 155.42 C 207.31 149.69 199.54 144.48 192.02 138.95 C 177.12 127.84 162.01 117.03 146.95 106.14 C 144.06 108.44 141.46 111.08 139.12 113.94 C 156.94 127.96 174.99 141.72 193.10 155.37 C 190.78 156.03 188.39 156.48 185.97 156.51 C 178.84 156.67 171.75 157.50 164.63 157.73 C 164.53 159.68 164.42 161.63 164.30 163.59 C 183.40 178.90 202.88 193.75 222.14 208.87 C 225.21 211.55 229.51 213.32 231.07 217.35 C 222.08 217.60 213.04 217.19 204.08 218.12 C 204.48 221.00 203.88 224.55 206.31 226.70 C 209.66 229.75 213.58 232.08 217.21 234.79 C 232.05 245.62 246.93 256.38 261.76 267.22 C 265.79 270.10 269.64 273.25 273.96 275.70 C 275.33 274.48 276.71 273.27 278.05 272.03 C 276.11 275.63 272.53 277.86 269.94 280.94 C 235.99 317.98 202.23 355.18 168.27 392.22 C 155.44 406.75 141.96 420.70 129.18 435.28 C 128.61 436.29 127.54 436.55 126.49 436.74 C 120.65 423.01 113.46 409.85 108.49 395.76 C 98.79 365.53 98.75 333.43 98.31 302.01 C 98.32 265.67 98.31 229.34 98.31 193.00 C 98.76 157.34 98.43 121.67 98.54 86.00 C 98.64 81.07 98.22 76.12 98.82 71.21 Z"/><path fill="#566066" d="M 440.45 242.46 C 443.53 239.25 446.08 235.50 449.67 232.82 C 449.96 253.88 449.30 274.95 449.60 296.01 C 449.91 300.05 448.48 303.95 448.71 307.98 C 448.71 326.66 448.98 345.35 448.35 364.02 C 445.66 383.94 442.34 404.24 433.35 422.43 C 429.88 429.88 424.07 435.77 419.36 442.40 C 413.34 450.63 407.90 459.39 400.57 466.58 C 386.28 481.22 367.23 489.77 348.58 497.42 C 325.77 505.81 301.09 507.10 277.01 506.54 C 269.63 506.65 262.35 505.24 254.97 505.17 C 239.27 503.20 223.43 501.54 208.05 497.74 C 210.57 494.10 214.17 491.38 217.01 488.00 C 292.03 406.64 366.07 324.40 440.45 242.46 Z"/></g>
                    <g><path fill="#C4A961" d="M 410.66 145.66 C 429.81 124.83 448.59 103.65 467.95 83.03 C 478.11 106.25 487.65 129.75 497.71 153.02 C 498.18 154.66 499.80 156.73 498.19 158.24 C 387.62 279.96 277.20 401.85 166.61 523.58 C 166.30 523.59 165.70 523.60 165.40 523.61 C 151.25 504.06 137.26 484.39 123.11 464.85 C 122.43 464.02 121.93 462.59 122.81 461.73 C 218.83 356.43 314.70 250.99 410.66 145.66 Z"/></g>
                    <g><path fill="#E8E4D9" d="M 139.12 113.94 C 141.46 111.08 144.06 108.44 146.95 106.14 C 162.01 117.03 177.12 127.84 192.02 138.95 C 199.54 144.48 207.31 149.69 214.69 155.42 C 214.67 157.75 214.61 160.09 214.53 162.43 C 205.98 163.29 197.38 163.58 188.84 164.57 C 192.15 167.84 196.08 170.38 199.65 173.35 C 218.70 188.71 238.16 203.59 257.01 219.20 C 256.84 221.05 256.71 222.90 256.60 224.76 C 247.39 226.23 237.99 225.70 228.71 226.49 C 231.78 229.80 235.78 231.99 239.42 234.59 C 249.81 241.86 260.14 249.23 270.57 256.45 C 275.00 259.61 280.09 262.08 283.48 266.49 C 281.63 268.30 279.88 270.20 278.05 272.03 C 276.71 273.27 275.33 274.48 273.96 275.70 C 269.64 273.25 265.79 270.10 261.76 267.22 C 246.93 256.38 232.05 245.62 217.21 234.79 C 213.58 232.08 209.66 229.75 206.31 226.70 C 203.88 224.55 204.48 221.00 204.08 218.12 C 213.04 217.19 222.08 217.60 231.07 217.35 C 229.51 213.32 225.21 211.55 222.14 208.87 C 202.88 193.75 183.40 178.90 164.30 163.59 C 164.42 161.63 164.53 159.68 164.63 157.73 C 171.75 157.50 178.84 156.67 185.97 156.51 C 188.39 156.48 190.78 156.03 193.10 155.37 C 174.99 141.72 156.94 127.96 139.12 113.94 Z"/></g>
                </svg>
            </div>
            <h1>Welcome to the<br><span>Customer Portal</span></h1>
            <p class="portal-brand-desc">Access product catalogues, technical documents, and exclusive resources for Umang Boards customers.</p>

            <div class="portal-stats">
                <div class="portal-stat">
                    <div class="portal-stat-icon">
                        <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                    </div>
                    <span>500+ Technical Documents</span>
                </div>
                <div class="portal-stat">
                    <div class="portal-stat-icon">
                        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <span>24/7 Instant Access</span>
                </div>
                <div class="portal-stat">
                    <div class="portal-stat-icon">
                        <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    </div>
                    <span>Instant Downloads</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Form Pane -->
    <div class="portal-form-pane">
        <div class="portal-form-container">

            <!-- Tabs -->
            <div class="portal-tabs" id="portalTabs">
                <button class="portal-tab active" data-tab="login">Sign In</button>
                <button class="portal-tab" data-tab="register">Register</button>
            </div>

            <!-- ── LOGIN PANEL ── -->
            <div class="portal-panel active" id="panel-login">
                <h2 class="portal-form-title">Welcome back</h2>
                <p class="portal-form-subtitle">Sign in to access your catalogues and downloads.</p>

                <div class="portal-alert" id="login-alert"></div>

                <form id="loginForm" novalidate>
                    <div class="portal-field">
                        <label class="portal-label" for="login-email">Email Address</label>
                        <input type="email" id="login-email" name="email" class="portal-input" placeholder="you@company.com" required>
                    </div>
                    <div class="portal-field">
                        <label class="portal-label" for="login-password">Password</label>
                        <div class="portal-input-wrap">
                            <input type="password" id="login-password" name="password" class="portal-input" placeholder="Enter your password" required>
                            <button type="button" class="portal-pw-toggle" data-target="login-password" aria-label="Toggle password visibility">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            </button>
                        </div>
                    </div>

                    <div class="portal-forgot">
                        <a onclick="showPanel('forgot')">Forgot password?</a>
                    </div>

                    <button type="submit" class="portal-submit" id="login-btn">
                        <span class="btn-text">Sign In</span>
                        <span class="spinner"></span>
                    </button>
                </form>

                <div class="portal-divider"><span>or</span></div>

                <p class="portal-switch">Don't have an account? <a onclick="switchTab('register')">Create one</a></p>
            </div>

            <!-- ── REGISTER PANEL ── -->
            <div class="portal-panel" id="panel-register">
                <h2 class="portal-form-title">Create Account</h2>
                <p class="portal-form-subtitle">Register to access product catalogues and technical resources.</p>

                <div class="portal-alert" id="register-alert"></div>

                <form id="registerForm" novalidate>
                    <div class="portal-field">
                        <label class="portal-label" for="reg-name">Full Name *</label>
                        <input type="text" id="reg-name" name="name" class="portal-input" placeholder="John Doe" required>
                    </div>
                    <div class="portal-field">
                        <label class="portal-label" for="reg-company">Company</label>
                        <input type="text" id="reg-company" name="company" class="portal-input" placeholder="Your company name">
                    </div>
                    <div class="portal-field">
                        <label class="portal-label" for="reg-email">Email Address *</label>
                        <input type="email" id="reg-email" name="email" class="portal-input" placeholder="you@company.com" required>
                    </div>
                    <div class="portal-field">
                        <label class="portal-label" for="reg-phone">Phone Number</label>
                        <input type="tel" id="reg-phone" name="phone" class="portal-input" placeholder="+91 98765 43210">
                    </div>
                    <div class="portal-field">
                        <label class="portal-label" for="reg-password">Password *</label>
                        <div class="portal-input-wrap">
                            <input type="password" id="reg-password" name="password" class="portal-input" placeholder="Min. 8 characters" required minlength="8">
                            <button type="button" class="portal-pw-toggle" data-target="reg-password" aria-label="Toggle password visibility">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            </button>
                        </div>
                    </div>
                    <div class="portal-field">
                        <label class="portal-label" for="reg-confirm">Confirm Password *</label>
                        <div class="portal-input-wrap">
                            <input type="password" id="reg-confirm" name="confirm_password" class="portal-input" placeholder="Re-enter your password" required>
                            <button type="button" class="portal-pw-toggle" data-target="reg-confirm" aria-label="Toggle password visibility">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="portal-submit" id="register-btn">
                        <span class="btn-text">Create Account</span>
                        <span class="spinner"></span>
                    </button>
                </form>

                <div class="portal-divider"><span>or</span></div>

                <p class="portal-switch">Already have an account? <a onclick="switchTab('login')">Sign In</a></p>
            </div>

            <!-- ── FORGOT PASSWORD PANEL ── -->
            <div class="portal-panel" id="panel-forgot">
                <h2 class="portal-form-title">Reset Password</h2>
                <p class="portal-form-subtitle">Enter your email address and we'll send you a link to reset your password.</p>

                <div class="portal-alert" id="forgot-alert"></div>

                <form id="forgotForm" novalidate>
                    <div class="portal-field">
                        <label class="portal-label" for="forgot-email">Email Address</label>
                        <input type="email" id="forgot-email" name="email" class="portal-input" placeholder="you@company.com" required>
                    </div>

                    <button type="submit" class="portal-submit" id="forgot-btn">
                        <span class="btn-text">Send Reset Link</span>
                        <span class="spinner"></span>
                    </button>
                </form>

                <a class="portal-back-link" onclick="switchTab('login')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                    Back to Sign In
                </a>
            </div>

        </div>
    </div>

</div>

<?php else : ?>
<!-- ═══════════════════════════════════════════════════
     DASHBOARD LAYOUT — Logged In
     ═══════════════════════════════════════════════════ -->
<div class="portal-dashboard">
    <div class="portal-dash-inner">

        <!-- Welcome bar -->
        <div class="portal-welcome">
            <div class="portal-welcome-info">
                <h2>Welcome back, <?php echo esc_html( $current->display_name ); ?></h2>
                <?php if ( $company ) : ?>
                    <p><?php echo esc_html( $company ); ?></p>
                <?php else : ?>
                    <p>Your product catalogues and resources</p>
                <?php endif; ?>
            </div>
            <a href="<?php echo wp_logout_url( get_permalink() ); ?>" class="portal-logout">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                Logout
            </a>
        </div>

        <!-- Catalogue Downloads -->
        <h3 class="portal-section-title">
            <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Catalogue Downloads
        </h3>

        <div class="portal-cat-grid">
            <?php foreach ( $catalogues as $cat ) : ?>
            <div class="cat-card">
                <div class="cat-card-left">
                    <div class="cat-card-icon">
                        <svg viewBox="0 0 24 24"><path d="<?php echo esc_attr( $cat['icon'] ); ?>"/><polyline points="14 2 14 8 20 8"/></svg>
                    </div>
                    <div>
                        <div class="cat-card-name"><?php echo esc_html( $cat['name'] ); ?></div>
                        <div class="cat-card-meta">
                            <span>PDF</span>
                            <span><?php echo esc_html( $cat['size'] ); ?></span>
                            <span>Updated <?php echo esc_html( $cat['updated'] ); ?></span>
                        </div>
                    </div>
                </div>
                <a href="<?php echo esc_url( $cat['file'] ); ?>" class="cat-card-dl" download>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download
                </a>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<?php endif; ?>

</div><!-- .portal-page -->

<script>
(function() {
    'use strict';

    const AJAX_URL = '<?php echo esc_js( $ajax_url ); ?>';
    const NONCE    = '<?php echo esc_js( $nonce ); ?>';

    /* ─── Tab / Panel switching ─── */
    window.switchTab = function(tab) {
        // Update tabs
        document.querySelectorAll('.portal-tab').forEach(t => {
            t.classList.toggle('active', t.dataset.tab === tab);
        });
        // Update panels
        document.querySelectorAll('.portal-panel').forEach(p => {
            p.classList.toggle('active', p.id === 'panel-' + tab);
        });
        // Clear alerts
        document.querySelectorAll('.portal-alert').forEach(a => {
            a.classList.remove('show');
        });
    };

    window.showPanel = function(panel) {
        // Hide tabs for forgot password
        const tabs = document.getElementById('portalTabs');
        if (panel === 'forgot') {
            tabs.style.display = 'none';
        } else {
            tabs.style.display = 'flex';
        }
        document.querySelectorAll('.portal-panel').forEach(p => {
            p.classList.toggle('active', p.id === 'panel-' + panel);
        });
        document.querySelectorAll('.portal-alert').forEach(a => {
            a.classList.remove('show');
        });
    };

    // Tab clicks
    document.querySelectorAll('.portal-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            const tabName = tab.dataset.tab;
            const tabs = document.getElementById('portalTabs');
            tabs.style.display = 'flex';
            switchTab(tabName);
        });
    });

    /* ─── Password visibility toggle ─── */
    document.querySelectorAll('.portal-pw-toggle').forEach(btn => {
        btn.addEventListener('click', () => {
            const input = document.getElementById(btn.dataset.target);
            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';
            // Swap icon
            btn.innerHTML = isPassword
                ? '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>'
                : '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>';
        });
    });

    /* ─── Alert helper ─── */
    function showAlert(id, type, message) {
        const el = document.getElementById(id);
        el.className = 'portal-alert ' + type + ' show';
        el.textContent = message;
    }

    function clearAlerts() {
        document.querySelectorAll('.portal-alert').forEach(a => a.classList.remove('show'));
    }

    /* ─── AJAX helper ─── */
    async function portalAjax(action, data, btnId, alertId) {
        const btn = document.getElementById(btnId);
        btn.classList.add('loading');
        btn.disabled = true;
        clearAlerts();

        const formData = new FormData();
        formData.append('action', action);
        formData.append('nonce', NONCE);
        Object.keys(data).forEach(k => formData.append(k, data[k]));

        try {
            const res = await fetch(AJAX_URL, { method: 'POST', body: formData, credentials: 'same-origin' });
            const json = await res.json();

            if (json.success) {
                showAlert(alertId, 'success', json.data.message);
                if (json.data.redirect) {
                    setTimeout(() => { window.location.reload(); }, 800);
                }
            } else {
                showAlert(alertId, 'error', json.data.message || 'Something went wrong. Please try again.');
            }
        } catch (err) {
            showAlert(alertId, 'error', 'Network error. Please check your connection and try again.');
        } finally {
            btn.classList.remove('loading');
            btn.disabled = false;
        }
    }

    /* ─── Client-side validation ─── */
    function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function clearErrors() {
        document.querySelectorAll('.portal-input.error').forEach(i => i.classList.remove('error'));
    }

    function setError(id) {
        document.getElementById(id).classList.add('error');
    }

    /* ─── LOGIN ─── */
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            clearErrors();

            const email = document.getElementById('login-email').value.trim();
            const password = document.getElementById('login-password').value;

            if (!email) { setError('login-email'); showAlert('login-alert', 'error', 'Please enter your email address.'); return; }
            if (!validateEmail(email)) { setError('login-email'); showAlert('login-alert', 'error', 'Please enter a valid email address.'); return; }
            if (!password) { setError('login-password'); showAlert('login-alert', 'error', 'Please enter your password.'); return; }

            portalAjax('ubl_login', { email, password }, 'login-btn', 'login-alert');
        });
    }

    /* ─── REGISTER ─── */
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            clearErrors();

            const name     = document.getElementById('reg-name').value.trim();
            const company  = document.getElementById('reg-company').value.trim();
            const email    = document.getElementById('reg-email').value.trim();
            const phone    = document.getElementById('reg-phone').value.trim();
            const password = document.getElementById('reg-password').value;
            const confirm  = document.getElementById('reg-confirm').value;

            if (!name) { setError('reg-name'); showAlert('register-alert', 'error', 'Please enter your full name.'); return; }
            if (!email) { setError('reg-email'); showAlert('register-alert', 'error', 'Please enter your email address.'); return; }
            if (!validateEmail(email)) { setError('reg-email'); showAlert('register-alert', 'error', 'Please enter a valid email address.'); return; }
            if (!password) { setError('reg-password'); showAlert('register-alert', 'error', 'Please enter a password.'); return; }
            if (password.length < 8) { setError('reg-password'); showAlert('register-alert', 'error', 'Password must be at least 8 characters.'); return; }
            if (password !== confirm) { setError('reg-confirm'); showAlert('register-alert', 'error', 'Passwords do not match.'); return; }

            portalAjax('ubl_register', { name, company, email, phone, password, confirm_password: confirm }, 'register-btn', 'register-alert');
        });
    }

    /* ─── FORGOT PASSWORD ─── */
    const forgotForm = document.getElementById('forgotForm');
    if (forgotForm) {
        forgotForm.addEventListener('submit', function(e) {
            e.preventDefault();
            clearErrors();

            const email = document.getElementById('forgot-email').value.trim();
            if (!email) { setError('forgot-email'); showAlert('forgot-alert', 'error', 'Please enter your email address.'); return; }
            if (!validateEmail(email)) { setError('forgot-email'); showAlert('forgot-alert', 'error', 'Please enter a valid email address.'); return; }

            portalAjax('ubl_forgot_password', { email }, 'forgot-btn', 'forgot-alert');
        });
    }

})();
</script>

<?php wp_footer(); ?>
</body>
</html>
