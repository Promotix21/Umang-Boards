<?php
/**
 * Template Name: Contact Us
 * Description: Contact page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ── Split Layout ── */
.ct-page { display: flex; min-height: 100vh; }
.ct-left {
    width: 45%; position: fixed; top: 0; left: 0; height: 100vh;
    background: linear-gradient(165deg, #f5f8fc, #edf2f9, #f0f5fb); color: #0b1f3a; display: flex; flex-direction: column;
    overflow: hidden; z-index: 10;
}
.ct-left-bg { position: absolute; inset: 0; }
.ct-left-bg img { width: 100%; height: 100%; object-fit: cover; opacity: 0.08; mix-blend-mode: luminosity; }
.ct-left-gradient { position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(245,248,252,0.3), rgba(237,242,249,0.5), rgba(240,245,251,0.4)); }
.ct-left-content {
    position: relative; z-index: 2; display: flex; flex-direction: column;
    height: 100%; padding: 2rem 4rem; overflow-y: auto;
}
.ct-right {
    width: 55%; margin-left: 45%; padding: clamp(2rem, 4vw, 6rem);
    padding-top: calc(var(--utility-h, 36px) + var(--header-h, 80px) + 3rem);
    background: var(--bg-primary); min-height: 100vh;
}

/* ── Left Pane Elements ── */
.ct-breadcrumb {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.72rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.15em; color: rgba(11,31,58,0.6);
    margin-top: calc(var(--utility-h) + var(--header-h) + 1rem);
    margin-bottom: 3rem;
}
.ct-breadcrumb a { color: rgba(11,31,58,0.6); text-decoration: none; transition: color 0.3s; }
.ct-breadcrumb a:hover { color: var(--gold); }
.ct-breadcrumb .active { color: var(--gold); }
.ct-breadcrumb svg { width: 12px; height: 12px; }

.ct-badge {
    display: inline-flex; padding: 0.4rem 1rem;
    background: rgba(212,168,67,0.1); border: 1px solid rgba(212,168,67,0.25);
    font-size: 0.75rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.15em; margin-bottom: 1.5rem;
}
.ct-left-title {
    font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 700;
    line-height: 1.1; letter-spacing: -0.02em; margin-bottom: 2rem; color: #0b1f3a;
}
.ct-left-title em { font-style: normal; color: var(--gold); }
.ct-left-subtitle {
    font-size: 1.15rem; color: rgba(11,31,58,0.75);
    line-height: 1.65; font-weight: 400; margin-bottom: 3rem;
}
.ct-left-info { border-top: 1px solid rgba(11,31,58,0.1); padding-top: 3rem; }
.ct-info-group { margin-bottom: 2.5rem; }
.ct-info-heading {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.8rem; font-weight: 700; color: var(--gold);
    text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 1.5rem;
}
.ct-info-heading svg { width: 16px; height: 16px; }
.ct-phone { font-size: 1.5rem; font-weight: 700; color: #0b1f3a; text-decoration: none; display: block; margin-bottom: 0.5rem; }
.ct-phone:hover { color: var(--gold); }
.ct-email { font-size: 1rem; color: rgba(11,31,58,0.75); text-decoration: none; display: block; }
.ct-email:hover { color: var(--gold); }
.ct-address { color: rgba(11,31,58,0.75); line-height: 1.7; font-weight: 400; }

/* ── Right Pane Section Headers ── */
.ct-section { margin-bottom: 5rem; }
.ct-section-eyebrow {
    font-size: 0.8rem; font-weight: 700; color: var(--gold);
    text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 1rem;
}
.ct-section-title {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700;
    color: var(--text-primary); margin-bottom: 3rem; letter-spacing: -0.02em;
}

/* ── Floating Label Form ── */
.ct-form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
.ct-form-full { grid-column: 1 / -1; }
.ct-field { position: relative; }
.ct-input, .ct-textarea, .ct-select {
    width: 100%; height: 56px; background: transparent;
    border: none; border-bottom: 2px solid rgba(11,31,58,0.06);
    font-family: var(--font-body); font-size: 1rem;
    color: var(--text-primary); padding: 1rem 0 0; outline: none;
    transition: border-color 0.3s;
}
.ct-input:focus, .ct-textarea:focus, .ct-select:focus {
    border-bottom-color: var(--gold);
}
.ct-textarea { height: 120px; resize: none; padding-top: 1.5rem; }
.ct-select { appearance: none; cursor: pointer; }
.ct-label {
    position: absolute; left: 0; top: 1rem;
    font-size: 1rem; color: var(--text-secondary);
    pointer-events: none; transition: all 0.3s ease;
}
.ct-input:focus ~ .ct-label,
.ct-input:not(:placeholder-shown) ~ .ct-label,
.ct-textarea:focus ~ .ct-label,
.ct-textarea:not(:placeholder-shown) ~ .ct-label,
.ct-select:focus ~ .ct-label,
.ct-select:not([data-empty]) ~ .ct-label {
    top: -0.25rem; font-size: 0.75rem; font-weight: 700;
    color: var(--gold); text-transform: uppercase; letter-spacing: 0.12em;
}
.ct-select-arrow {
    position: absolute; right: 0; top: 1rem;
    width: 20px; height: 20px; color: var(--text-muted);
    pointer-events: none; transform: rotate(90deg);
}
.ct-submit {
    display: inline-flex; align-items: center; gap: 0.75rem;
    height: 64px; padding: 0 3rem; margin-top: 2rem;
    background: #0b1f3a; color: #fff; border: none;
    font-family: var(--font-body); font-size: 0.9rem;
    font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em;
    cursor: pointer; transition: all 0.4s var(--ease-out-expo);
}
.ct-submit:hover {
    background: var(--gold); color: #0b1f3a;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
}
.ct-submit svg { width: 20px; height: 20px; }

/* ── Department Cards ── */
.ct-dept-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
.ct-dept-card {
    padding: 2rem; background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06); transition: border-color 0.3s;
}
.ct-dept-card:hover { border-color: rgba(212,168,67,0.3); }
.ct-dept-icon {
    width: 48px; height: 48px; border-radius: 50%; background: #fff;
    border: 1px solid rgba(11,31,58,0.06); display: flex;
    align-items: center; justify-content: center; margin-bottom: 1.5rem;
    transition: border-color 0.3s;
}
.ct-dept-card:hover .ct-dept-icon { border-color: rgba(212,168,67,0.3); }
.ct-dept-icon svg { width: 20px; height: 20px; color: #0b1f3a; transition: color 0.3s; }
.ct-dept-card:hover .ct-dept-icon svg { color: var(--gold); }
.ct-dept-title { font-size: 1.3rem; font-weight: 700; color: #0b1f3a; margin-bottom: 0.75rem; }
.ct-dept-desc { font-size: 0.92rem; color: var(--text-secondary); line-height: 1.6; font-weight: 400; margin-bottom: 1.5rem; }
.ct-dept-email {
    font-size: 0.8rem; font-weight: 700; color: var(--gold);
    text-transform: uppercase; letter-spacing: 0.12em; text-decoration: none;
    transition: color 0.3s;
}
.ct-dept-email:hover { color: #0b1f3a; }

/* ── Manufacturing Units ── */
.ct-unit-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
.ct-unit-card { padding: 2rem; border: 1px solid rgba(11,31,58,0.06); }
.ct-unit-heading {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.8rem; font-weight: 700; color: var(--gold);
    text-transform: uppercase; letter-spacing: 0.12em; margin-bottom: 1rem;
}
.ct-unit-heading svg { width: 16px; height: 16px; }
.ct-unit-address { font-size: 0.92rem; color: var(--text-secondary); line-height: 1.7; font-weight: 400; }

/* ── Google Map ── */
.ct-map { margin-bottom: 5rem; }
.ct-map iframe {
    width: 100%; height: 360px; border: 1px solid rgba(11,31,58,0.06);
    filter: grayscale(0.3); transition: filter 0.4s;
}
.ct-map iframe:hover { filter: grayscale(0); }

/* ── Office Hours ── */
.ct-hours { margin-bottom: 5rem; }
.ct-hours-card-standalone {
    padding: 2.5rem; background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06); border-left: 4px solid var(--gold);
    margin-bottom: 3rem;
}
.ct-hours-card-header {
    display: flex; align-items: center; gap: 1rem; margin-bottom: 2rem;
}
.ct-hours-clock-icon {
    width: 52px; height: 52px; border-radius: 50%; background: #0b1f3a;
    display: flex; align-items: center; justify-content: center; flex-shrink: 0;
}
.ct-hours-clock-icon svg { width: 24px; height: 24px; color: var(--gold); }
.ct-hours-card-heading {
    font-size: 1.3rem; font-weight: 700; color: #0b1f3a; margin: 0;
}
.ct-hours-card-sub {
    font-size: 0.85rem; color: var(--text-secondary); font-weight: 400; margin-top: 0.2rem;
}
.ct-hours-grid-rows { }
.ct-hours-row {
    display: flex; justify-content: space-between; align-items: center;
    padding: 0.8rem 0; border-bottom: 1px solid rgba(11,31,58,0.06);
    font-size: 0.95rem; color: var(--text-secondary);
}
.ct-hours-row:last-child { border-bottom: none; }
.ct-hours-row strong { color: #0b1f3a; font-weight: 600; }
.ct-hours-row .ct-closed-badge {
    display: inline-flex; align-items: center; gap: 0.35rem;
    color: #9B1C1C; font-weight: 600; font-size: 0.85rem;
}
.ct-hours-row .ct-closed-badge::before {
    content: ''; width: 8px; height: 8px; border-radius: 50%;
    background: #EF4444; flex-shrink: 0;
}
.ct-hours-row .ct-open-badge {
    display: inline-flex; align-items: center; gap: 0.35rem;
    color: #065F46; font-weight: 600;
}
.ct-hours-row .ct-open-badge::before {
    content: ''; width: 8px; height: 8px; border-radius: 50%;
    background: #10B981; flex-shrink: 0;
}

/* ── Response Times ── */
.ct-response-grid {
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.25rem;
}
.ct-response-card {
    padding: 1.75rem 1.25rem; background: #fff;
    border: 1px solid rgba(11,31,58,0.06); text-align: center;
    transition: all 0.4s var(--ease-out-expo);
}
.ct-response-card:hover {
    border-color: rgba(200,168,75,0.3);
    transform: translateY(-3px);
    box-shadow: 0 8px 24px rgba(11,31,58,0.06);
}
.ct-response-icon {
    width: 48px; height: 48px; border-radius: 50%;
    background: var(--bg-secondary); border: 1px solid rgba(11,31,58,0.06);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 1.25rem; transition: all 0.3s;
}
.ct-response-card:hover .ct-response-icon {
    background: #0b1f3a; border-color: #0b1f3a;
}
.ct-response-icon svg { width: 20px; height: 20px; color: #0b1f3a; transition: color 0.3s; }
.ct-response-card:hover .ct-response-icon svg { color: var(--gold); }
.ct-response-channel {
    font-size: 0.95rem; font-weight: 700; color: #0b1f3a; margin-bottom: 0.5rem;
}
.ct-response-time {
    font-size: 0.85rem; color: var(--text-secondary); line-height: 1.5; font-weight: 400;
}
@media (max-width: 1024px) {
    .ct-response-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 768px) {
    .ct-response-grid { grid-template-columns: 1fr; }
}

/* ── FAQ ── */
.ct-faq { margin-bottom: 5rem; }
.ct-faq-item {
    border: 1px solid rgba(11,31,58,0.06); margin-bottom: 0.75rem;
    transition: border-color 0.3s;
}
.ct-faq-item:hover { border-color: rgba(212,168,67,0.3); }
.ct-faq-q {
    display: flex; justify-content: space-between; align-items: center;
    padding: 1.25rem 1.5rem; cursor: pointer; background: transparent; border: none;
    width: 100%; text-align: left; font-family: var(--font-body);
    font-size: 1.05rem; font-weight: 600; color: #0b1f3a;
}
.ct-faq-q svg {
    width: 20px; height: 20px; flex-shrink: 0; color: var(--gold);
    transition: transform 0.3s;
}
.ct-faq-item.open .ct-faq-q svg { transform: rotate(45deg); }
.ct-faq-a {
    max-height: 0; overflow: hidden; transition: max-height 0.4s ease;
}
.ct-faq-a-inner {
    padding: 0 1.5rem 1.25rem;
    font-size: 0.92rem; color: var(--text-secondary); line-height: 1.7; font-weight: 400;
}
.ct-faq-item.open .ct-faq-a { max-height: 300px; }

/* ── CTA Buttons ── */
.ct-cta-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; }
.ct-cta-card {
    display: flex; flex-direction: column; align-items: center; gap: 1rem;
    padding: 2rem 1.5rem; background: #fff; color: #0b1f3a;
    text-decoration: none; text-align: center;
    border: 1px solid rgba(11,31,58,0.06); border-top: 3px solid var(--gold);
    transition: all 0.4s var(--ease-out-expo);
}
.ct-cta-card:hover {
    background: #f8f9fb; color: #0b1f3a;
    transform: translateY(-4px); box-shadow: 0 12px 32px rgba(11,31,58,0.12);
    border-color: rgba(212,168,67,0.3); border-top-color: var(--gold);
}
.ct-cta-card svg { width: 32px; height: 32px; }
.ct-cta-card-title { font-size: 0.9rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; }
.ct-cta-card-desc { font-size: 0.82rem; color: rgba(11,31,58,0.75); font-weight: 400; line-height: 1.5; }

/* ── Responsive ── */
@media (max-width: 1024px) {
    .ct-page { flex-direction: column; }
    .ct-left { position: relative; width: 100%; height: auto; min-height: 70vh; }
    .ct-right { width: 100%; margin-left: 0; }
    .ct-form-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    .ct-left-content { padding: 1.5rem; }
    .ct-right { padding: 1.5rem; }
    .ct-dept-grid { grid-template-columns: 1fr; }
    .ct-unit-grid { grid-template-columns: 1fr; }
    .ct-response-grid { grid-template-columns: 1fr 1fr; }
    .ct-cta-grid { grid-template-columns: 1fr; }
}
</style>

<main class="ct-page">

    <!-- ─── LEFT PANE ─── -->
    <div class="ct-left">
        <div class="ct-left-bg">
            <img src="<?php echo $uri; ?>/assets/images/facility-aerial.jpg" alt="" loading="lazy">
        </div>
        <div class="ct-left-gradient"></div>
        <div class="ct-left-content">

            <!-- Breadcrumb -->
            <nav class="ct-breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                <span class="active">Contact Us</span>
            </nav>

            <!-- Badge -->
            <span class="ct-badge">GET IN TOUCH</span>

            <!-- Title -->
            <h1 class="ct-left-title">Let's Build<br><em>Together</em></h1>

            <!-- Subtitle -->
            <p class="ct-left-subtitle">Whether you're an OEM, distributor, or project engineer &mdash; we'd love to hear from you.</p>

            <!-- Contact Info -->
            <div class="ct-left-info">

                <!-- Phone & Email -->
                <div class="ct-info-group">
                    <div class="ct-info-heading">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        Contact
                    </div>
                    <a href="tel:+911412363845" class="ct-phone">+91-141-2363845</a>
                    <a href="mailto:info@umangboards.com" class="ct-email">info@umangboards.com</a>
                </div>

                <!-- Registered Office -->
                <div class="ct-info-group">
                    <div class="ct-info-heading">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Registered Office
                    </div>
                    <p class="ct-address">Umang House, Mahaveer Marg,<br>C-Scheme, Jaipur - 302001<br>Rajasthan, India</p>
                </div>

            </div>

        </div>
    </div>

    <!-- ─── RIGHT PANE ─── -->
    <div class="ct-right">

        <!-- Success Message -->
        <?php if ( isset( $_GET['contact'] ) && $_GET['contact'] === 'sent' ) : ?>
        <div class="ct-success" style="background:#F0FDF4;border:1px solid #BBF7D0;border-left:4px solid #10B981;border-radius:12px;padding:2rem 2.5rem;margin-bottom:3rem;display:flex;align-items:flex-start;gap:1rem;">
            <svg style="width:28px;height:28px;color:#10B981;flex-shrink:0;margin-top:2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <div>
                <h3 style="font-size:1.2rem;font-weight:700;color:#065F46;margin:0 0 0.5rem;">Message Sent Successfully</h3>
                <p style="font-size:0.95rem;color:#047857;line-height:1.6;margin:0;">Thank you for contacting us. Our team will respond within 24 hours.</p>
            </div>
        </div>
        <?php endif; ?>

        <!-- Section 01: Contact Form -->
        <div class="ct-section">
            <div class="ct-section-eyebrow">01. Send a Message</div>
            <h2 class="ct-section-title">How can we help?</h2>

            <form class="ct-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                <input type="hidden" name="action" value="ubl_contact">
                <?php wp_nonce_field('ubl_contact', 'ubl_contact_nonce'); ?>

                <div class="ct-form-grid">

                    <!-- Full Name -->
                    <div class="ct-field">
                        <input class="ct-input" type="text" name="full_name" placeholder=" " required>
                        <label class="ct-label">Full Name</label>
                    </div>

                    <!-- Email -->
                    <div class="ct-field">
                        <input class="ct-input" type="email" name="email" placeholder=" " required>
                        <label class="ct-label">Email Address</label>
                    </div>

                    <!-- Phone -->
                    <div class="ct-field">
                        <input class="ct-input" type="tel" name="phone" placeholder=" ">
                        <label class="ct-label">Phone Number</label>
                    </div>

                    <!-- Company -->
                    <div class="ct-field">
                        <input class="ct-input" type="text" name="company" placeholder=" ">
                        <label class="ct-label">Company Name</label>
                    </div>

                    <!-- Subject (Select) -->
                    <div class="ct-field ct-form-full">
                        <select class="ct-select" name="subject" data-empty required>
                            <option value="" disabled selected></option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Product Information">Product Information</option>
                            <option value="Export Inquiry">Export Inquiry</option>
                            <option value="Partnership">Partnership</option>
                            <option value="Careers">Careers</option>
                            <option value="Other">Other</option>
                        </select>
                        <label class="ct-label">Subject</label>
                        <svg class="ct-select-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                    </div>

                    <!-- Message -->
                    <div class="ct-field ct-form-full">
                        <textarea class="ct-textarea" name="message" placeholder=" " required></textarea>
                        <label class="ct-label">Your Message</label>
                    </div>

                </div>

                <button type="submit" class="ct-submit">
                    Submit Message
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
            </form>
        </div>

        <!-- Section 02: Departments -->
        <div class="ct-section">
            <div class="ct-section-eyebrow">02. Direct Lines</div>
            <h2 class="ct-section-title">Reach the Right Team</h2>

            <div class="ct-dept-grid">

                <!-- Sales & Exports -->
                <div class="ct-dept-card">
                    <div class="ct-dept-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z"/></svg>
                    </div>
                    <div class="ct-dept-title">Sales &amp; Exports</div>
                    <p class="ct-dept-desc">For product inquiries, pricing, and samples</p>
                    <a href="mailto:sales@umangboards.com" class="ct-dept-email">sales@umangboards.com</a>
                </div>

                <!-- Investor Relations -->
                <div class="ct-dept-card">
                    <div class="ct-dept-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <div class="ct-dept-title">Investor Relations</div>
                    <p class="ct-dept-desc">For financial information and shareholder queries</p>
                    <a href="mailto:investor@umangboards.com" class="ct-dept-email">investor@umangboards.com</a>
                </div>

                <!-- Careers -->
                <div class="ct-dept-card">
                    <div class="ct-dept-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <div class="ct-dept-title">Careers</div>
                    <p class="ct-dept-desc">Join our growing team of professionals</p>
                    <a href="mailto:hr@umangboards.com" class="ct-dept-email">hr@umangboards.com</a>
                </div>

            </div>
        </div>

        <!-- Section 03: Google Maps -->
        <div class="ct-section ct-map">
            <div class="ct-section-eyebrow">03. Our Location</div>
            <h2 class="ct-section-title">Find Us</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.2!2d75.7873!3d26.8554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db40be3f0b26d%3A0x93c0b3e3e7a6c3c!2sUmang+Boards+Limited!5e0!3m2!1sen!2sin!4v1"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                title="Umang Boards Limited - Location"></iframe>
        </div>

        <!-- Section 04: Office Hours -->
        <div class="ct-section ct-hours">
            <div class="ct-section-eyebrow">04. Availability</div>
            <h2 class="ct-section-title">Office Hours</h2>

            <div class="ct-hours-card-standalone">
                <div class="ct-hours-card-header">
                    <div class="ct-hours-clock-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div>
                        <h3 class="ct-hours-card-heading">Business Hours</h3>
                        <p class="ct-hours-card-sub">Indian Standard Time (IST / UTC+5:30)</p>
                    </div>
                </div>
                <div class="ct-hours-grid-rows">
                    <div class="ct-hours-row"><span>Monday &ndash; Friday</span><span class="ct-open-badge">9:00 AM &ndash; 6:00 PM IST</span></div>
                    <div class="ct-hours-row"><span>Saturday &amp; Sunday</span><span class="ct-closed-badge">Closed</span></div>
                </div>
            </div>

            <!-- Response Times -->
            <h3 style="font-size:1.15rem; font-weight:700; color:#0b1f3a; margin-bottom:1.5rem;">Expected Response Times</h3>
            <div class="ct-response-grid">

                <!-- WhatsApp / Chat -->
                <div class="ct-response-card">
                    <div class="ct-response-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    </div>
                    <div class="ct-response-channel">WhatsApp / Chat</div>
                    <div class="ct-response-time">Within 2 hours<br>(business hours)</div>
                </div>

                <!-- Email -->
                <div class="ct-response-card">
                    <div class="ct-response-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <div class="ct-response-channel">Email</div>
                    <div class="ct-response-time">Within 24 hours<br>(business hours)</div>
                </div>

                <!-- Phone -->
                <div class="ct-response-card">
                    <div class="ct-response-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                    <div class="ct-response-channel">Phone</div>
                    <div class="ct-response-time">Answered live<br>during office hours</div>
                </div>

                <!-- Weekend -->
                <div class="ct-response-card">
                    <div class="ct-response-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    </div>
                    <div class="ct-response-channel">Weekend Inquiries</div>
                    <div class="ct-response-time">Responded to by<br>Monday 9:00 AM</div>
                </div>

            </div>
        </div>

        <!-- Section 05: Manufacturing Facilities -->
        <div class="ct-section">
            <div class="ct-section-eyebrow">05. Our Facilities</div>
            <h2 class="ct-section-title">Manufacturing Units</h2>

            <div class="ct-unit-grid">

                <!-- Unit 1 -->
                <div class="ct-unit-card">
                    <div class="ct-unit-heading">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Unit 1 &mdash; Udaipur
                    </div>
                    <p class="ct-unit-address">SP-38-39, RIICO Industrial Area,<br>Kaladwas, Udaipur - 313001,<br>Rajasthan, India</p>
                </div>

                <!-- Unit 2 -->
                <div class="ct-unit-card">
                    <div class="ct-unit-heading">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Unit 2 &mdash; Bhilwara
                    </div>
                    <p class="ct-unit-address">Plot No. E-451-452, RIICO Industrial Area,<br>Bhilwara - 311001,<br>Rajasthan, India</p>
                </div>

            </div>
        </div>

        <!-- Section 06: FAQ -->
        <div class="ct-section ct-faq">
            <div class="ct-section-eyebrow">06. FAQ</div>
            <h2 class="ct-section-title">Frequently Asked Questions</h2>

            <div class="ct-faq-item">
                <button class="ct-faq-q" type="button">
                    What products does Umang Boards manufacture?
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                </button>
                <div class="ct-faq-a"><div class="ct-faq-a-inner">We manufacture transformer insulation products (pressboards, machined components, moulded components, papers), winding wires (aluminium and copper), and insulating chemicals (polyester, modified polyester, polyurethane, polyester imide, polyimide amide).</div></div>
            </div>

            <div class="ct-faq-item">
                <button class="ct-faq-q" type="button">
                    Do you export internationally?
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                </button>
                <div class="ct-faq-a"><div class="ct-faq-a-inner">Yes. We export to 28+ countries across Asia, Europe, North America, and the Middle East. We are a recognized Star Export House by the Government of India.</div></div>
            </div>

            <div class="ct-faq-item">
                <button class="ct-faq-q" type="button">
                    What certifications do you hold?
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                </button>
                <div class="ct-faq-a"><div class="ct-faq-a-inner">We hold ISO 9001:2015, ISO 14001:2015, and ISO 45001:2018 certifications. Our laboratories are NABL accredited, and our products are PGCIL approved for up to 400 kV class applications.</div></div>
            </div>

            <div class="ct-faq-item">
                <button class="ct-faq-q" type="button">
                    How can I request product samples?
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                </button>
                <div class="ct-faq-a"><div class="ct-faq-a-inner">Please contact our sales team at sales@umangboards.com or use the contact form above. Our team will work with you to understand your requirements and arrange samples.</div></div>
            </div>

            <div class="ct-faq-item">
                <button class="ct-faq-q" type="button">
                    Can I visit your manufacturing facility?
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                </button>
                <div class="ct-faq-a"><div class="ct-faq-a-inner">We welcome factory visits from customers and partners. Please schedule a visit by contacting our sales team or using the "Schedule Factory Visit" button below. Visits are available Monday through Friday during business hours.</div></div>
            </div>

            <div class="ct-faq-item">
                <button class="ct-faq-q" type="button">
                    What is your minimum order quantity (MOQ)?
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                </button>
                <div class="ct-faq-a"><div class="ct-faq-a-inner">Minimum order quantities vary by product category and specifications. Please contact our sales team at sales@umangboards.com with your requirements for a detailed quote.</div></div>
            </div>

            <div class="ct-faq-item">
                <button class="ct-faq-q" type="button">
                    What are your payment terms?
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                </button>
                <div class="ct-faq-a"><div class="ct-faq-a-inner">Payment terms are discussed on a case-by-case basis depending on order size and customer relationship. Please reach out to our sales team for specific terms applicable to your order.</div></div>
            </div>

            <div class="ct-faq-item">
                <button class="ct-faq-q" type="button">
                    Do you offer custom or OEM manufacturing?
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                </button>
                <div class="ct-faq-a"><div class="ct-faq-a-inner">Yes. We offer custom manufacturing and OEM solutions tailored to your exact specifications. Our engineering team works closely with clients to develop products that meet their precise technical requirements.</div></div>
            </div>
        </div>

        <!-- Section 07: Call to Action -->
        <div class="ct-section">
            <div class="ct-section-eyebrow">07. Quick Actions</div>
            <h2 class="ct-section-title">What Would You Like to Do?</h2>
            <div class="ct-cta-grid">
                <a href="/downloads" class="ct-cta-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    <span class="ct-cta-card-title">Download Catalogue</span>
                    <span class="ct-cta-card-desc">Browse our full product range</span>
                </a>
                <a href="/investors" class="ct-cta-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                    <span class="ct-cta-card-title">Invest in Us</span>
                    <span class="ct-cta-card-desc">Financial reports and shareholder info</span>
                </a>
                <a href="mailto:sales@umangboards.com?subject=Factory%20Visit%20Request&body=Dear%20Sales%20Team%2C%0A%0AI%20would%20like%20to%20schedule%20a%20visit%20to%20your%20manufacturing%20facility.%0A%0APlease%20let%20me%20know%20the%20available%20dates.%0A%0AThank%20you." class="ct-cta-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    <span class="ct-cta-card-title">Schedule Factory Visit</span>
                    <span class="ct-cta-card-desc">See our facilities in person</span>
                </a>
            </div>
        </div>

    </div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    /* ── FAQ accordion ── */
    document.querySelectorAll('.ct-faq-q').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item = this.closest('.ct-faq-item');
            var wasOpen = item.classList.contains('open');
            document.querySelectorAll('.ct-faq-item.open').forEach(function(el) { el.classList.remove('open'); });
            if (!wasOpen) item.classList.add('open');
        });
    });

    /* ── Select floating label: data-empty toggle ── */
    var selects = document.querySelectorAll('.ct-select');
    selects.forEach(function(sel) {
        sel.addEventListener('change', function() {
            if (this.value) {
                this.removeAttribute('data-empty');
            } else {
                this.setAttribute('data-empty', '');
            }
        });
    });

    /* ── GSAP animations ── */
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    var EASE = 'expo.out';

    function fadeUp(els, opts) {
        opts = opts || {};
        gsap.from(els, {
            y: 40,
            opacity: 0,
            duration: opts.duration || 1,
            stagger: opts.stagger || 0.1,
            ease: EASE,
            scrollTrigger: {
                trigger: opts.trigger || els,
                start: opts.start || 'top 85%',
                toggleActions: 'play none none none'
            }
        });
    }

    /* Left pane entrance */
    var leftEls = document.querySelectorAll('.ct-breadcrumb, .ct-badge, .ct-left-title, .ct-left-subtitle, .ct-info-group');
    gsap.from(leftEls, {
        y: 30,
        opacity: 0,
        duration: 0.8,
        stagger: 0.12,
        delay: 0.3,
        ease: EASE
    });

    /* Right pane sections */
    var sections = document.querySelectorAll('.ct-section');
    sections.forEach(function(sec) {
        fadeUp(sec, { trigger: sec });
    });

    /* Department cards */
    var deptCards = document.querySelectorAll('.ct-dept-card');
    if (deptCards.length) {
        fadeUp(deptCards, { trigger: deptCards[0], stagger: 0.15 });
    }

    /* Unit cards */
    var unitCards = document.querySelectorAll('.ct-unit-card');
    if (unitCards.length) {
        fadeUp(unitCards, { trigger: unitCards[0], stagger: 0.15 });
    }

    /* Office hours card */
    var hoursCard = document.querySelector('.ct-hours-card-standalone');
    if (hoursCard) {
        fadeUp(hoursCard, { trigger: hoursCard });
    }

    /* Response time cards */
    var responseCards = document.querySelectorAll('.ct-response-card');
    if (responseCards.length) {
        fadeUp(responseCards, { trigger: responseCards[0], stagger: 0.12 });
    }

    /* CTA cards */
    var ctaCards = document.querySelectorAll('.ct-cta-card');
    if (ctaCards.length) {
        fadeUp(ctaCards, { trigger: ctaCards[0], stagger: 0.15 });
    }

    /* FAQ items */
    var faqItems = document.querySelectorAll('.ct-faq-item');
    if (faqItems.length) {
        fadeUp(faqItems, { trigger: faqItems[0], stagger: 0.1 });
    }
});
</script>

<script>
(function(){
    var lp = document.querySelector('.ct-left');
    var ft = document.querySelector('.s-footer');
    if (!lp || !ft) return;
    window.addEventListener('scroll', function() {
        var r = ft.getBoundingClientRect();
        lp.style.clipPath = r.top < window.innerHeight ? 'inset(0 0 ' + (window.innerHeight - r.top) + 'px 0)' : '';
    }, { passive: true });
})();
</script>

<?php get_footer(); ?>
