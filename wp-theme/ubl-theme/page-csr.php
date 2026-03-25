<?php
/**
 * Template Name: CSR
 * Description: Corporate Social Responsibility page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   CSR — Corporate Social Responsibility
   ============================================ */

/* --- HERO --- */
.csr-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 12rem;
    overflow: hidden;
}
.csr-hero-bg {
    position: absolute;
    inset: 0;
    background: url('<?php echo $uri; ?>/assets/images/csr-community.jpg') center/cover no-repeat;
    opacity: 0.2;
    mix-blend-mode: luminosity;
}
.csr-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, var(--navy), rgba(11,31,58,0.9), var(--navy));
}
.csr-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.csr-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.csr-hero-breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: rgba(255,255,255,0.5);
    margin-bottom: 2rem;
}
.csr-hero-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.csr-hero-breadcrumb a:hover { color: var(--gold); }
.csr-hero-breadcrumb .active { color: var(--gold); }
.csr-hero-breadcrumb svg { width: 12px; height: 12px; }
.csr-hero-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.4rem 1rem;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
}
.csr-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 2rem;
    max-width: 900px;
}
.csr-hero-title em { font-style: normal; color: var(--gold); }
.csr-hero-subtitle {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    color: rgba(255,255,255,0.7);
    max-width: 600px;
    line-height: 1.6;
    font-weight: 300;
}

/* --- OVERLAPPING FEATURE IMAGE --- */
.csr-feature {
    position: relative;
    z-index: 20;
    max-width: 1400px;
    margin: -6rem auto 0;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.csr-feature-img {
    position: relative;
    width: 100%;
    height: clamp(300px, 45vw, 700px);
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    border: 1px solid rgba(255,255,255,0.1);
}
.csr-feature-img img {
    width: 100%; height: 100%; object-fit: cover;
    filter: grayscale(100%);
    transition: filter 1s ease, transform 1s ease;
}
.csr-feature-img:hover img { filter: grayscale(0%); transform: scale(1.02); }
.csr-feature-label {
    position: absolute;
    bottom: 0;
    left: 0;
    background: rgba(11,31,58,0.9);
    backdrop-filter: blur(8px);
    padding: 1rem 1.5rem;
    border-top: 2px solid var(--gold);
    color: #fff;
    font-size: 0.85rem;
    font-weight: 500;
    letter-spacing: 0.05em;
}

/* --- COMMITMENT SECTION --- */
.csr-commitment {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.csr-commitment-layout {
    display: flex;
    gap: clamp(3rem, 6vw, 6rem);
    align-items: flex-start;
}
.csr-commitment-left {
    width: 33%;
    flex-shrink: 0;
}
.csr-commitment-bar {
    width: 3px;
    height: 3rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.csr-commitment-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.csr-commitment-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
}
.csr-commitment-right {
    flex: 1;
    padding-top: 0.5rem;
}
.csr-commitment-quote {
    font-family: var(--font-body);
    font-size: clamp(1.2rem, 2vw, 1.6rem);
    font-weight: 300;
    line-height: 1.7;
    color: var(--text-secondary);
    font-style: italic;
    margin: 0 0 2rem;
    position: relative;
    padding-left: 2rem;
    border-left: 3px solid var(--gold);
}
.csr-commitment-text {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0 0 1.5rem;
}
.csr-commitment-text:last-child { margin-bottom: 0; }

/* --- INITIATIVES SECTION --- */
.csr-initiatives {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.csr-initiatives-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.csr-initiatives-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 5rem);
}
.csr-initiatives-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.csr-initiatives-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.csr-initiatives-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0 0 1rem;
}
.csr-initiatives-subtitle {
    font-size: 1.1rem;
    color: var(--text-muted);
    font-weight: 300;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}
.csr-initiatives-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}

/* --- INITIATIVE CARDS --- */
.csr-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    overflow: hidden;
    transition: all 0.5s var(--ease-out-expo);
}
.csr-card:hover {
    border-color: var(--gold);
    transform: translateY(-4px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}
.csr-card-img {
    position: relative;
    height: 240px;
    overflow: hidden;
}
.csr-card-img img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform 0.7s var(--ease-out-expo);
}
.csr-card:hover .csr-card-img img {
    transform: scale(1.05);
}
.csr-card-number {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: rgba(11,31,58,0.85);
    backdrop-filter: blur(8px);
    color: var(--gold);
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    padding: 0.35rem 0.8rem;
}
.csr-card-body {
    padding: clamp(1.5rem, 3vw, 2rem);
}
.csr-card-title {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2vw, 1.6rem);
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 1rem;
    letter-spacing: -0.01em;
}
.csr-card-desc {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0 0 1.5rem;
}
.csr-card-partner {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.8rem;
    font-weight: 600;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding-top: 1rem;
    border-top: 1px solid rgba(11,31,58,0.06);
}
.csr-card-partner svg {
    width: 16px; height: 16px; flex-shrink: 0;
}

/* --- PARTNERS SECTION --- */
.csr-partners {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.csr-partners-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 4rem);
}
.csr-partners-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.csr-partners-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.csr-partners-title {
    font-family: var(--font-body);
    font-size: clamp(1.8rem, 3vw, 2.5rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0;
}
.csr-partners-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
    align-items: center;
}
.csr-partner-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: clamp(2rem, 4vw, 3rem);
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    text-align: center;
    transition: all 0.5s var(--ease-out-expo);
    min-height: 200px;
}
.csr-partner-card:hover {
    border-color: var(--gold);
    transform: translateY(-2px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.06);
}
.csr-partner-card img {
    max-width: 140px;
    max-height: 80px;
    object-fit: contain;
    margin-bottom: 1.5rem;
    filter: grayscale(30%);
    transition: filter 0.5s ease;
}
.csr-partner-card:hover img { filter: grayscale(0%); }
.csr-partner-name {
    font-family: var(--font-body);
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--text-primary);
    margin: 0 0 0.25rem;
}
.csr-partner-focus {
    font-size: 0.8rem;
    color: var(--text-muted);
    font-weight: 400;
}

/* --- CTA --- */
.csr-cta {
    background: var(--navy);
    color: #fff;
    padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
}
.csr-cta p {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2.5vw, 2rem);
    font-weight: 300;
    color: rgba(255,255,255,0.7);
    margin: 0 0 2rem;
}
.csr-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    font-family: var(--font-body);
    font-size: 1rem;
    font-weight: 600;
    color: var(--navy);
    background: var(--gold);
    padding: 1rem 2.5rem;
    border-radius: 0;
    text-decoration: none;
    letter-spacing: 0.02em;
    transition: all 0.4s var(--ease-out-expo);
}
.csr-cta-btn:hover {
    background: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.2);
}
.csr-cta-btn svg {
    width: 18px; height: 18px;
    transition: transform 0.4s var(--ease-out-expo);
}
.csr-cta-btn:hover svg { transform: translateX(4px); }

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .csr-commitment-layout { flex-direction: column; }
    .csr-commitment-left { width: 100%; }
    .csr-initiatives-grid { grid-template-columns: repeat(2, 1fr); }
    .csr-partners-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .csr-hero { padding: calc(var(--utility-h) + var(--header-h) + 2rem) 0 8rem; }
    .csr-feature { margin-top: -4rem; }
    .csr-feature-img { height: clamp(200px, 50vw, 400px); }
    .csr-initiatives-grid { grid-template-columns: 1fr; }
    .csr-partners-grid { grid-template-columns: 1fr; }
}
</style>

<main class="page-csr">

    <!-- ════ HERO ════ -->
    <section class="csr-hero">
        <div class="csr-hero-bg"></div>
        <div class="csr-hero-gradient"></div>
        <div class="csr-hero-glow"></div>
        <div class="csr-hero-inner">
            <nav class="csr-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Company</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">CSR</span>
            </nav>
            <div class="csr-hero-badge">Corporate Social Responsibility</div>
            <h1 class="csr-hero-title">Committed to<br>Community &amp; <em>Sustainability</em></h1>
            <p class="csr-hero-subtitle">At Umang Boards, we firmly believe in our commitment to local communities and society for ensuring sustainable development.</p>
        </div>
    </section>

    <!-- ════ OVERLAPPING IMAGE ════ -->
    <section class="csr-feature">
        <div class="csr-feature-img">
            <img src="<?php echo $uri; ?>/assets/images/csr-community.jpg" alt="Umang Boards community engagement" loading="eager">
            <div class="csr-feature-label">Through Dhanuka Charitable Trust</div>
        </div>
    </section>

    <!-- ════ OUR COMMITMENT ════ -->
    <section class="csr-commitment">
        <div class="csr-commitment-layout">
            <div class="csr-commitment-left">
                <div class="csr-commitment-bar"></div>
                <div class="csr-commitment-eyebrow">Section 01</div>
                <h2 class="csr-commitment-heading">Our<br>Commitment</h2>
            </div>
            <div class="csr-commitment-right">
                <p class="csr-commitment-quote">Our prime endeavour is to remain dedicated towards wealth creation for the society.</p>
                <p class="csr-commitment-text">At Umang Boards, we firmly believe in our commitment to local communities and society for ensuring sustainable development. We take utmost care in the selection of community interventions we initiate.</p>
                <p class="csr-commitment-text">Our prime endeavour is to remain focused on creating long term welfare of society. Through the Dhanuka Charitable Trust, we channel our CSR efforts into three core areas — sustainable livelihood, education, and healthcare.</p>
            </div>
        </div>
    </section>

    <!-- ════ INITIATIVES ════ -->
    <section class="csr-initiatives">
        <div class="csr-initiatives-inner">
            <div class="csr-initiatives-header">
                <div class="csr-initiatives-bar"></div>
                <div class="csr-initiatives-eyebrow">Section 02</div>
                <h2 class="csr-initiatives-title">Our Initiatives</h2>
                <p class="csr-initiatives-subtitle">Through Dhanuka Charitable Trust, we focus on three pillars that create lasting impact in our communities.</p>
            </div>

            <div class="csr-initiatives-grid">

                <!-- Sustainable Livelihood -->
                <div class="csr-card">
                    <div class="csr-card-img">
                        <img src="<?php echo $uri; ?>/assets/images/csr-community.jpg" alt="Sustainable livelihood initiative — feeding underprivileged communities" loading="lazy">
                        <span class="csr-card-number">Initiative 01</span>
                    </div>
                    <div class="csr-card-body">
                        <h3 class="csr-card-title">Sustainable Livelihood</h3>
                        <p class="csr-card-desc">In association with Akshaya Patra Foundation, we help feed food to underprivileged people in society, working towards a hunger-free India.</p>
                        <div class="csr-card-partner">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4-4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                            Akshaya Patra Foundation
                        </div>
                    </div>
                </div>

                <!-- Education -->
                <div class="csr-card">
                    <div class="csr-card-img">
                        <img src="<?php echo $uri; ?>/assets/images/csr-environmental.jpg" alt="Education initiative — merit scholarships for students" loading="lazy">
                        <span class="csr-card-number">Initiative 02</span>
                    </div>
                    <div class="csr-card-body">
                        <h3 class="csr-card-title">Education</h3>
                        <p class="csr-card-desc">We provide merit scholarships to students with a vision aligned to "education for all." We believe education is the key for sustainable and steady growth of our nation.</p>
                        <div class="csr-card-partner">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
                            Education For All
                        </div>
                    </div>
                </div>

                <!-- Healthcare -->
                <div class="csr-card">
                    <div class="csr-card-img">
                        <img src="<?php echo $uri; ?>/assets/images/csr-safety.jpg" alt="Healthcare initiative — supporting elderly and terminally ill patients" loading="lazy">
                        <span class="csr-card-number">Initiative 03</span>
                    </div>
                    <div class="csr-card-body">
                        <h3 class="csr-card-title">Healthcare</h3>
                        <p class="csr-card-desc">Through our associations with Mother Teresa Foundation, Jaipur and SDMH Avedna Ashram, we support the elderly, physically challenged, and provide shelter for patients with terminal illness.</p>
                        <div class="csr-card-partner">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                            Mother Teresa Foundation &amp; SDMH Avedna Ashram
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ════ PARTNERS ════ -->
    <section class="csr-partners">
        <div class="csr-partners-header">
            <div class="csr-partners-bar"></div>
            <div class="csr-partners-eyebrow">Section 03</div>
            <h2 class="csr-partners-title">Our Partner Organizations</h2>
        </div>

        <div class="csr-partners-grid">

            <div class="csr-partner-card">
                <img src="<?php echo $uri; ?>/assets/images/csr-logo-1.png" alt="Akshaya Patra Foundation logo">
                <div class="csr-partner-name">Akshaya Patra Foundation</div>
                <div class="csr-partner-focus">Sustainable Livelihood</div>
            </div>

            <div class="csr-partner-card">
                <img src="<?php echo $uri; ?>/assets/images/csr-logo-2.png" alt="Mother Teresa Foundation logo">
                <div class="csr-partner-name">Mother Teresa Foundation, Jaipur</div>
                <div class="csr-partner-focus">Healthcare &amp; Elderly Care</div>
            </div>

            <div class="csr-partner-card">
                <img src="<?php echo $uri; ?>/assets/images/csr-logo-3-small.png" alt="SDMH Avedna Ashram logo">
                <div class="csr-partner-name">SDMH Avedna Ashram</div>
                <div class="csr-partner-focus">Terminal Illness Care</div>
            </div>

        </div>
    </section>

    <!-- ════ CTA ════ -->
    <section class="csr-cta">
        <p>Want to learn more about our social initiatives?</p>
        <a href="<?php echo home_url('/contact-us'); ?>" class="csr-cta-btn">
            Get in Touch
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </section>

</main>

<!-- GSAP ScrollTrigger Animations -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        return;
    }
    gsap.registerPlugin(ScrollTrigger);

    function fadeUp(el, opts) {
        var o = Object.assign({ y: 20, duration: 0.6, delay: 0, start: 'top 85%' }, opts || {});
        gsap.fromTo(el, { opacity: 0, y: o.y }, {
            opacity: 1, y: 0, duration: o.duration, ease: 'expo.out', delay: o.delay,
            scrollTrigger: { trigger: el, start: o.start }
        });
    }

    /* Hero elements */
    fadeUp('.csr-hero-badge', { y: 15, delay: 0.1 });
    fadeUp('.csr-hero-title', { y: 25, delay: 0.2 });
    fadeUp('.csr-hero-subtitle', { y: 20, delay: 0.35 });

    /* Feature image */
    gsap.fromTo('.csr-feature-img', { opacity: 0, y: 40 }, {
        opacity: 1, y: 0, duration: 0.8, ease: 'expo.out',
        scrollTrigger: { trigger: '.csr-feature', start: 'top 80%' }
    });

    /* Commitment section */
    fadeUp('.csr-commitment-bar', { y: 10 });
    fadeUp('.csr-commitment-eyebrow', { y: 10, delay: 0.1 });
    fadeUp('.csr-commitment-heading', { y: 15, delay: 0.2 });
    fadeUp('.csr-commitment-quote', { y: 20, delay: 0.15 });
    gsap.utils.toArray('.csr-commitment-text').forEach(function (el, i) {
        fadeUp(el, { y: 15, delay: 0.1 * (i + 1) });
    });

    /* Initiatives header */
    fadeUp('.csr-initiatives-bar', { y: 10, start: 'top 80%' });
    fadeUp('.csr-initiatives-title', { y: 20, delay: 0.1, start: 'top 80%' });
    fadeUp('.csr-initiatives-subtitle', { y: 15, delay: 0.2, start: 'top 80%' });

    /* Initiative cards */
    gsap.utils.toArray('.csr-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 40 }, {
            opacity: 1, y: 0, duration: 0.7, ease: 'expo.out', delay: i * 0.15,
            scrollTrigger: { trigger: card, start: 'top 85%' }
        });
    });

    /* Partners */
    fadeUp('.csr-partners-bar', { y: 10, start: 'top 80%' });
    fadeUp('.csr-partners-title', { y: 20, delay: 0.1, start: 'top 80%' });
    gsap.utils.toArray('.csr-partner-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 30 }, {
            opacity: 1, y: 0, duration: 0.6, ease: 'expo.out', delay: i * 0.12,
            scrollTrigger: { trigger: card, start: 'top 88%' }
        });
    });

    /* CTA */
    fadeUp('.csr-cta p', { y: 15 });
    fadeUp('.csr-cta-btn', { y: 15, delay: 0.15 });
});
</script>

<?php get_footer(); ?>
