<?php
/**
 * Template Name: Events
 * Description: Events & Exhibitions page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   EVENTS PAGE
   ============================================ */

/* --- HERO --- */
.ev-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 6rem;
    overflow: hidden;
}
.ev-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, var(--navy), rgba(11,31,58,0.95));
}
.ev-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.12) 0%, transparent 50%);
    pointer-events: none;
}
.ev-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ev-breadcrumb {
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
.ev-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.ev-breadcrumb a:hover { color: var(--gold); }
.ev-breadcrumb .active { color: var(--gold); }
.ev-breadcrumb svg { width: 12px; height: 12px; }
.ev-badge {
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
.ev-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4rem);
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.03em;
    margin-bottom: 1.5rem;
    max-width: 700px;
}
.ev-hero-title em { font-style: normal; color: var(--gold); }
.ev-hero-subtitle {
    font-size: clamp(1rem, 1.8vw, 1.25rem);
    color: rgba(255,255,255,0.7);
    max-width: 560px;
    line-height: 1.65;
    font-weight: 300;
}

/* --- SECTIONS --- */
.ev-section {
    max-width: 1400px;
    margin: 0 auto;
    padding: 5rem clamp(1.5rem, 4vw, 3.5rem) 0;
}
.ev-section:last-of-type { padding-bottom: 6rem; }
.ev-eyebrow {
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1rem;
}
.ev-title {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}

/* --- UPCOMING EMPTY STATE --- */
.ev-empty {
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 12px;
    padding: 3.5rem;
    text-align: center;
    margin-top: 2rem;
}
.ev-empty-icon {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}
.ev-empty-icon svg { width: 28px; height: 28px; color: var(--text-muted); }
.ev-empty-heading {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 0.75rem;
}
.ev-empty-text {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.65;
    font-weight: 300;
    max-width: 480px;
    margin: 0 auto;
}

/* --- PAST PARTICIPATION --- */
.ev-past-block {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 12px;
    padding: 3rem;
    border-left: 4px solid var(--gold);
    margin-top: 2rem;
}
.ev-past-text {
    font-size: 1.1rem;
    color: var(--text-primary);
    line-height: 1.7;
    font-weight: 400;
    margin-bottom: 1.5rem;
}
.ev-past-text:last-child { margin-bottom: 0; }

/* --- TRADE SHOW PRESENCE --- */
.ev-presence-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}
.ev-presence-card {
    padding: 2rem;
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 10px;
    transition: all 0.3s var(--ease-out-expo);
}
.ev-presence-card:hover {
    border-color: rgba(212,168,67,0.3);
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(11,31,58,0.05);
}
.ev-presence-icon {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
}
.ev-presence-icon svg { width: 22px; height: 22px; color: var(--gold); }
.ev-presence-label {
    font-size: 1rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 0.5rem;
}
.ev-presence-desc {
    font-size: 0.9rem;
    color: var(--text-secondary);
    line-height: 1.6;
    font-weight: 300;
}

/* --- CTA --- */
.ev-cta {
    background: var(--navy);
    padding: 5rem 0;
    text-align: center;
    color: #fff;
}
.ev-cta-inner {
    max-width: 700px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ev-cta-title {
    font-size: clamp(1.8rem, 3.5vw, 2.5rem);
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}
.ev-cta-desc {
    font-size: 1.1rem;
    color: rgba(255,255,255,0.7);
    line-height: 1.65;
    font-weight: 300;
    margin-bottom: 2rem;
}
.ev-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    height: 56px;
    padding: 0 2.5rem;
    background: var(--gold);
    color: var(--navy);
    border: none;
    border-radius: 8px;
    font-family: var(--font-body);
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    text-decoration: none;
    transition: all 0.4s var(--ease-out-expo);
}
.ev-cta-btn:hover {
    background: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}
.ev-cta-btn svg { width: 18px; height: 18px; }

/* --- RESPONSIVE --- */
@media (max-width: 768px) {
    .ev-presence-grid { grid-template-columns: 1fr; }
    .ev-past-block { padding: 2rem; }
}
</style>

<main>

    <!-- ─── HERO ─── -->
    <section class="ev-hero">
        <div class="ev-hero-gradient"></div>
        <div class="ev-hero-glow"></div>
        <div class="ev-hero-inner">
            <nav class="ev-breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                <a href="#">Newsroom</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                <span class="active">Events</span>
            </nav>
            <span class="ev-badge">EVENTS</span>
            <h1 class="ev-hero-title">Events &amp; <em>Exhibitions</em></h1>
            <p class="ev-hero-subtitle">Meet our team at industry events and trade shows worldwide.</p>
        </div>
    </section>

    <!-- ─── SECTION 01: UPCOMING EVENTS ─── -->
    <section class="ev-section">
        <div class="ev-eyebrow">01. Upcoming Events</div>
        <h2 class="ev-title">Scheduled Events</h2>

        <div class="ev-empty">
            <div class="ev-empty-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            </div>
            <div class="ev-empty-heading">No Upcoming Events</div>
            <p class="ev-empty-text">There are no upcoming events scheduled at this time. Check back soon for updates on trade shows and exhibitions where you can meet the UBL team.</p>
        </div>
    </section>

    <!-- ─── SECTION 02: PAST PARTICIPATION ─── -->
    <section class="ev-section">
        <div class="ev-eyebrow">02. Industry Presence</div>
        <h2 class="ev-title">Our Participation</h2>

        <div class="ev-past-block">
            <p class="ev-past-text">Umang Boards Limited regularly participates in national and international power sector exhibitions and industry trade shows. Our presence at these events allows us to showcase our product innovations, connect with customers and partners, and stay at the forefront of industry developments.</p>
            <p class="ev-past-text">As an NSE &amp; BSE listed company exporting to over 61 countries, we maintain an active presence in key markets across Asia, the Middle East, Africa, and beyond.</p>
        </div>
    </section>

    <!-- ─── SECTION 03: TRADE SHOW PRESENCE ─── -->
    <section class="ev-section">
        <div class="ev-eyebrow">03. Focus Areas</div>
        <h2 class="ev-title">Trade Show Presence</h2>

        <div class="ev-presence-grid">

            <div class="ev-presence-card">
                <div class="ev-presence-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                </div>
                <div class="ev-presence-label">Power &amp; Energy</div>
                <p class="ev-presence-desc">Transformer insulation and power sector exhibitions across India and international markets.</p>
            </div>

            <div class="ev-presence-card">
                <div class="ev-presence-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10A15.3 15.3 0 0112 2z"/></svg>
                </div>
                <div class="ev-presence-label">International Trade</div>
                <p class="ev-presence-desc">Global exhibitions to strengthen our export network spanning 61+ countries.</p>
            </div>

            <div class="ev-presence-card">
                <div class="ev-presence-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="ev-presence-label">Quality &amp; Standards</div>
                <p class="ev-presence-desc">Industry conferences focused on insulation standards, testing, and quality assurance.</p>
            </div>

        </div>
    </section>

    <!-- ─── CTA ─── -->
    <section class="ev-cta">
        <div class="ev-cta-inner">
            <h2 class="ev-cta-title">Want to Meet Us at an Event?</h2>
            <p class="ev-cta-desc">Get in touch with our team to learn about our upcoming exhibition schedule or to arrange a meeting.</p>
            <a href="/contact-us" class="ev-cta-btn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Contact Our Team
            </a>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);
    var EASE = 'expo.out';

    /* Hero entrance */
    gsap.from('.ev-breadcrumb, .ev-badge, .ev-hero-title, .ev-hero-subtitle', {
        y: 30, opacity: 0, duration: 0.8, stagger: 0.12, delay: 0.3, ease: EASE
    });

    /* Sections */
    document.querySelectorAll('.ev-section').forEach(function(sec) {
        gsap.from(sec, {
            y: 40, opacity: 0, duration: 1, ease: EASE,
            scrollTrigger: { trigger: sec, start: 'top 85%', toggleActions: 'play none none none' }
        });
    });

    /* Presence cards */
    gsap.from('.ev-presence-card', {
        y: 20, opacity: 0, duration: 0.6, stagger: 0.1, ease: EASE,
        scrollTrigger: { trigger: '.ev-presence-grid', start: 'top 85%', toggleActions: 'play none none none' }
    });

    /* CTA */
    gsap.from('.ev-cta-inner', {
        y: 30, opacity: 0, duration: 0.8, ease: EASE,
        scrollTrigger: { trigger: '.ev-cta', start: 'top 85%', toggleActions: 'play none none none' }
    });
});
</script>

<?php get_footer(); ?>
