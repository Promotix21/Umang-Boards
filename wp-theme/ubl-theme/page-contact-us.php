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
    background: var(--navy); color: #fff; display: flex; flex-direction: column;
    overflow: hidden; z-index: 10;
}
.ct-left-bg { position: absolute; inset: 0; }
.ct-left-bg img { width: 100%; height: 100%; object-fit: cover; opacity: 0.2; mix-blend-mode: luminosity; }
.ct-left-gradient { position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(11,31,58,0.5), rgba(11,31,58,0.8), var(--navy)); }
.ct-left-content {
    position: relative; z-index: 2; display: flex; flex-direction: column;
    height: 100%; padding: 2rem 4rem; overflow-y: auto;
}
.ct-right {
    width: 55%; margin-left: 45%; padding: clamp(2rem, 4vw, 6rem);
    background: var(--bg-primary); min-height: 100vh;
}

/* ── Left Pane Elements ── */
.ct-breadcrumb {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.72rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.15em; color: rgba(255,255,255,0.5);
    margin-top: calc(var(--utility-h) + var(--header-h) + 1rem);
    margin-bottom: 3rem;
}
.ct-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.ct-breadcrumb a:hover { color: var(--gold); }
.ct-breadcrumb .active { color: var(--gold); }
.ct-breadcrumb svg { width: 12px; height: 12px; }

.ct-badge {
    display: inline-flex; padding: 0.4rem 1rem;
    background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2);
    font-size: 0.75rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.15em; margin-bottom: 1.5rem;
}
.ct-left-title {
    font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 700;
    line-height: 1.1; letter-spacing: -0.02em; margin-bottom: 2rem;
}
.ct-left-title em { font-style: normal; color: var(--gold); }
.ct-left-subtitle {
    font-size: 1.15rem; color: rgba(255,255,255,0.7);
    line-height: 1.65; font-weight: 300; margin-bottom: 3rem;
}
.ct-left-info { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 3rem; }
.ct-info-group { margin-bottom: 2.5rem; }
.ct-info-heading {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.8rem; font-weight: 700; color: var(--gold);
    text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 1.5rem;
}
.ct-info-heading svg { width: 16px; height: 16px; }
.ct-phone { font-size: 1.5rem; font-weight: 700; color: #fff; text-decoration: none; display: block; margin-bottom: 0.5rem; }
.ct-phone:hover { color: var(--gold); }
.ct-email { font-size: 1.05rem; color: rgba(255,255,255,0.7); text-decoration: none; display: block; }
.ct-email:hover { color: var(--gold); }
.ct-address { color: rgba(255,255,255,0.7); line-height: 1.7; font-weight: 300; }

/* ── Right Pane Section Headers ── */
.ct-section { margin-bottom: 5rem; }
.ct-section-eyebrow {
    font-size: 0.8rem; font-weight: 700; color: var(--gold);
    text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 1rem;
}
.ct-section-title {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700;
    color: var(--navy); margin-bottom: 3rem; letter-spacing: -0.02em;
}

/* ── Floating Label Form ── */
.ct-form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
.ct-form-full { grid-column: 1 / -1; }
.ct-field { position: relative; }
.ct-input, .ct-textarea, .ct-select {
    width: 100%; height: 56px; background: transparent;
    border: none; border-bottom: 2px solid rgba(11,31,58,0.06);
    font-family: var(--font-body); font-size: 1.05rem;
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
    background: var(--navy); color: #fff; border: none;
    font-family: var(--font-body); font-size: 0.9rem;
    font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em;
    cursor: pointer; transition: all 0.4s var(--ease-out-expo);
}
.ct-submit:hover {
    background: var(--gold); color: var(--navy);
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
.ct-dept-icon svg { width: 20px; height: 20px; color: var(--navy); transition: color 0.3s; }
.ct-dept-card:hover .ct-dept-icon svg { color: var(--gold); }
.ct-dept-title { font-size: 1.3rem; font-weight: 700; color: var(--navy); margin-bottom: 0.75rem; }
.ct-dept-desc { font-size: 0.95rem; color: var(--text-secondary); line-height: 1.6; font-weight: 300; margin-bottom: 1.5rem; }
.ct-dept-email {
    font-size: 0.8rem; font-weight: 700; color: var(--gold);
    text-transform: uppercase; letter-spacing: 0.12em; text-decoration: none;
    transition: color 0.3s;
}
.ct-dept-email:hover { color: var(--navy); }

/* ── Manufacturing Units ── */
.ct-unit-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
.ct-unit-card { padding: 2rem; border: 1px solid rgba(11,31,58,0.06); }
.ct-unit-heading {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.8rem; font-weight: 700; color: var(--gold);
    text-transform: uppercase; letter-spacing: 0.12em; margin-bottom: 1rem;
}
.ct-unit-heading svg { width: 16px; height: 16px; }
.ct-unit-address { font-size: 0.95rem; color: var(--text-secondary); line-height: 1.7; font-weight: 300; }

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

        <!-- Section 03: Manufacturing Facilities -->
        <div class="ct-section">
            <div class="ct-section-eyebrow">03. Our Facilities</div>
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

    </div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
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
});
</script>

<?php get_footer(); ?>
