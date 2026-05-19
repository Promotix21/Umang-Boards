<?php
/**
 * Template Name: Life at UBL
 * Description: Employer brand page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   LIFE AT UBL PAGE
   ============================================ */

/* --- HERO --- */
.lubl-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 6rem;
    overflow: hidden;
}
.lubl-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, var(--navy) 0%, #1a3a5c 50%, var(--navy) 100%);
}
.lubl-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.lubl-hero-pattern {
    position: absolute;
    inset: 0;
    opacity: 0.04;
    background-image:
        linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
}
.lubl-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.lubl-hero-breadcrumb {
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
.lubl-hero-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.lubl-hero-breadcrumb a:hover { color: var(--gold); }
.lubl-hero-breadcrumb .active { color: var(--gold); }
.lubl-hero-breadcrumb svg { width: 12px; height: 12px; }
.lubl-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.4rem 1rem;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
}
.lubl-hero-badge svg { width: 14px; height: 14px; fill: var(--gold); }
.lubl-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 2rem;
    max-width: 900px;
}
.lubl-hero-title em { font-style: normal; color: var(--gold); }
.lubl-hero-subtitle {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    color: rgba(255,255,255,0.7);
    max-width: 600px;
    line-height: 1.6;
    font-weight: 300;
}

/* --- INTRO --- */
.lubl-intro {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.lubl-intro-layout {
    display: flex;
    gap: clamp(3rem, 6vw, 6rem);
    align-items: flex-start;
}
.lubl-intro-left {
    width: 33%;
    flex-shrink: 0;
}
.lubl-intro-bar {
    width: 3px;
    height: 3rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.lubl-intro-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.lubl-intro-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
}
.lubl-intro-right {
    flex: 1;
    padding-top: 0.5rem;
}
.lubl-intro-quote {
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
.lubl-intro-text {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0 0 1.5rem;
}
.lubl-intro-text:last-child { margin-bottom: 0; }

/* --- CULTURE PILLARS --- */
.lubl-pillars {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.lubl-pillars-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.lubl-pillars-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 5rem);
}
.lubl-pillars-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.lubl-pillars-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.lubl-pillars-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0 0 1rem;
}
.lubl-pillars-subtitle {
    font-size: 1.1rem;
    color: var(--text-muted);
    font-weight: 300;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}
.lubl-pillars-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}
.lubl-pillar {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    padding: clamp(2rem, 3vw, 2.5rem);
    text-align: center;
    transition: all 0.5s var(--ease-out-expo);
    position: relative;
    overflow: hidden;
}
.lubl-pillar::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s var(--ease-out-expo);
}
.lubl-pillar:hover {
    border-color: var(--gold);
    transform: translateY(-4px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}
.lubl-pillar:hover::before { transform: scaleX(1); }
.lubl-pillar-icon {
    width: 64px;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(200,168,75,0.1);
    border-radius: 12px;
    margin: 0 auto 1.5rem;
}
.lubl-pillar-icon svg {
    width: 32px;
    height: 32px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.lubl-pillar-title {
    font-family: var(--font-body);
    font-size: clamp(1.2rem, 2vw, 1.4rem);
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 0.75rem;
    letter-spacing: -0.01em;
}
.lubl-pillar-desc {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0;
}

/* --- BENEFITS --- */
.lubl-benefits {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.lubl-benefits-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 5rem);
}
.lubl-benefits-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.lubl-benefits-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.lubl-benefits-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0 0 1rem;
}
.lubl-benefits-subtitle {
    font-size: 1.1rem;
    color: var(--text-muted);
    font-weight: 300;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}
.lubl-benefits-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}
.lubl-benefit {
    display: flex;
    align-items: flex-start;
    gap: 1.25rem;
    padding: 1.5rem;
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    transition: all 0.4s var(--ease-out-expo);
}
.lubl-benefit:hover {
    border-color: var(--gold);
    box-shadow: 0 8px 30px rgba(0,0,0,0.05);
}
.lubl-benefit-icon {
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(55,110,180,0.08);
    border-radius: 10px;
    flex-shrink: 0;
}
.lubl-benefit-icon svg {
    width: 22px;
    height: 22px;
    fill: none;
    stroke: var(--navy);
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.lubl-benefit-content {}
.lubl-benefit-name {
    font-family: var(--font-body);
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--text-primary);
    margin: 0 0 0.35rem;
}
.lubl-benefit-desc {
    font-size: 0.9rem;
    color: var(--text-secondary);
    line-height: 1.6;
    font-weight: 300;
    margin: 0;
}

/* --- CTA --- */
.lubl-cta {
    background: var(--navy);
    color: #fff;
    padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    position: relative;
    overflow: hidden;
}
.lubl-cta-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at center, rgba(212,168,67,0.1) 0%, transparent 60%);
    pointer-events: none;
}
.lubl-cta-inner {
    position: relative;
    z-index: 2;
    max-width: 700px;
    margin: 0 auto;
}
.lubl-cta-title {
    font-family: var(--font-body);
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}
.lubl-cta-subtitle {
    font-size: 1rem;
    color: rgba(255,255,255,0.7);
    margin-bottom: 2.5rem;
    line-height: 1.6;
}

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .lubl-intro-layout { flex-direction: column; }
    .lubl-intro-left { width: 100%; }
    .lubl-pillars-grid { grid-template-columns: repeat(2, 1fr); }
    .lubl-benefits-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .lubl-hero { padding-bottom: 4rem; }
    .lubl-pillars-grid { grid-template-columns: 1fr; }
    .lubl-benefits-grid { grid-template-columns: 1fr; }
}
</style>

<main class="page-life-ubl">

    <!-- ════ HERO ════ -->
    <section class="lubl-hero">
        <div class="lubl-hero-gradient"></div>
        <div class="lubl-hero-glow"></div>
        <div class="lubl-hero-pattern"></div>
        <div class="lubl-hero-inner">
            <nav class="lubl-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Careers</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">Life at UBL</span>
            </nav>
            <div class="lubl-hero-badge">
                <svg viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4-4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                Our People
            </div>
            <h1 class="lubl-hero-title">Life at <em>Umang Boards</em></h1>
            <p class="lubl-hero-subtitle">A workplace where growth is nurtured, safety is paramount, and every team member contributes to building something meaningful.</p>
        </div>
    </section>

    <!-- ════ INTRO ════ -->
    <section class="lubl-intro">
        <div class="lubl-intro-layout">
            <div class="lubl-intro-left">
                <div class="lubl-intro-bar"></div>
                <div class="lubl-intro-eyebrow">Who We Are</div>
                <h2 class="lubl-intro-heading">Our<br>Culture</h2>
            </div>
            <div class="lubl-intro-right">
                <p class="lubl-intro-quote">We believe our greatest strength lies in the people who bring their expertise, passion, and dedication to work every day.</p>
                <p class="lubl-intro-text">At Umang Boards, we foster an environment where every individual is empowered to grow, innovate, and make a difference. With over four decades of manufacturing excellence, our culture is built on the pillars of mutual respect, continuous learning, and a shared commitment to quality.</p>
                <p class="lubl-intro-text">From the factory floor to the boardroom, we maintain an open, collaborative culture that encourages ideas at every level. Our team of 400+ professionals works together as one family, driven by the shared goal of delivering world-class insulation solutions.</p>
            </div>
        </div>
    </section>

    <!-- ════ CULTURE PILLARS ════ -->
    <section class="lubl-pillars">
        <div class="lubl-pillars-inner">
            <div class="lubl-pillars-header">
                <div class="lubl-pillars-bar"></div>
                <div class="lubl-pillars-eyebrow">Our Values</div>
                <h2 class="lubl-pillars-title">Culture Pillars</h2>
                <p class="lubl-pillars-subtitle">The core values that define who we are and how we work together every day.</p>
            </div>

            <div class="lubl-pillars-grid">
                <div class="lubl-pillar">
                    <div class="lubl-pillar-icon">
                        <svg viewBox="0 0 24 24"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
                    </div>
                    <h3 class="lubl-pillar-title">Growth</h3>
                    <p class="lubl-pillar-desc">We invest in our people through continuous training, skill development, and clear career progression paths that help every team member reach their full potential.</p>
                </div>
                <div class="lubl-pillar">
                    <div class="lubl-pillar-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="lubl-pillar-title">Safety</h3>
                    <p class="lubl-pillar-desc">Safety is non-negotiable. Our ISO 45001-certified operations ensure that every employee returns home safely, every day. We maintain a zero-compromise stance on workplace safety.</p>
                </div>
                <div class="lubl-pillar">
                    <div class="lubl-pillar-icon">
                        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4-4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                    <h3 class="lubl-pillar-title">Teamwork</h3>
                    <p class="lubl-pillar-desc">Collaboration is at the heart of everything we do. Cross-functional teams work together seamlessly to solve problems, innovate, and deliver excellence.</p>
                </div>
                <div class="lubl-pillar">
                    <div class="lubl-pillar-icon">
                        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                    </div>
                    <h3 class="lubl-pillar-title">Innovation</h3>
                    <p class="lubl-pillar-desc">We encourage creative thinking and continuous improvement. Our R&amp;D team and factory floor workers alike are empowered to suggest and implement better ways of working.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ BENEFITS ════ -->
    <section class="lubl-benefits">
        <div class="lubl-benefits-header">
            <div class="lubl-benefits-bar"></div>
            <div class="lubl-benefits-eyebrow">Why Join Us</div>
            <h2 class="lubl-benefits-title">Employee Benefits</h2>
            <p class="lubl-benefits-subtitle">We offer a comprehensive benefits package that supports our employees' well-being and professional growth.</p>
        </div>

        <div class="lubl-benefits-grid">
            <div class="lubl-benefit">
                <div class="lubl-benefit-icon">
                    <svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                </div>
                <div class="lubl-benefit-content">
                    <div class="lubl-benefit-name">Health Insurance</div>
                    <p class="lubl-benefit-desc">Comprehensive medical coverage for employees and their families, including hospitalization and preventive care.</p>
                </div>
            </div>
            <div class="lubl-benefit">
                <div class="lubl-benefit-icon">
                    <svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
                </div>
                <div class="lubl-benefit-content">
                    <div class="lubl-benefit-name">Learning Programs</div>
                    <p class="lubl-benefit-desc">Regular technical training, leadership development workshops, and opportunities for higher education sponsorship.</p>
                </div>
            </div>
            <div class="lubl-benefit">
                <div class="lubl-benefit-icon">
                    <svg viewBox="0 0 24 24"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
                </div>
                <div class="lubl-benefit-content">
                    <div class="lubl-benefit-name">Career Growth</div>
                    <p class="lubl-benefit-desc">Clear career progression framework with regular performance reviews and promotion opportunities based on merit.</p>
                </div>
            </div>
            <div class="lubl-benefit">
                <div class="lubl-benefit-icon">
                    <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                </div>
                <div class="lubl-benefit-content">
                    <div class="lubl-benefit-name">Paid Time Off</div>
                    <p class="lubl-benefit-desc">Generous leave policy including earned leave, casual leave, sick leave, and national holidays.</p>
                </div>
            </div>
            <div class="lubl-benefit">
                <div class="lubl-benefit-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="lubl-benefit-content">
                    <div class="lubl-benefit-name">Safety Equipment</div>
                    <p class="lubl-benefit-desc">Full personal protective equipment, safety training, and regular health check-ups for all manufacturing staff.</p>
                </div>
            </div>
            <div class="lubl-benefit">
                <div class="lubl-benefit-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <div class="lubl-benefit-content">
                    <div class="lubl-benefit-name">Provident Fund &amp; Gratuity</div>
                    <p class="lubl-benefit-desc">Statutory benefits including EPF, gratuity, and ESI coverage ensuring long-term financial security.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ CTA ════ -->
    <section class="lubl-cta">
        <div class="lubl-cta-glow"></div>
        <div class="lubl-cta-inner">
            <h2 class="lubl-cta-title">Ready to Join Our Team?</h2>
            <p class="lubl-cta-subtitle">Explore current openings and take the next step in your career with Umang Boards Limited.</p>
            <a href="<?php echo home_url('/careers'); ?>" class="btn-gold">
                View Open Positions
                <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </section>

</main>

<!-- GSAP ScrollTrigger Animations -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    function fadeUp(el, opts) {
        var o = Object.assign({ y: 20, duration: 0.6, delay: 0, start: 'top 85%' }, opts || {});
        gsap.fromTo(el, { opacity: 0, y: o.y }, {
            opacity: 1, y: 0, duration: o.duration, ease: 'expo.out', delay: o.delay,
            scrollTrigger: { trigger: el, start: o.start }
        });
    }

    fadeUp('.lubl-hero-badge', { y: 15, delay: 0.1 });
    fadeUp('.lubl-hero-title', { y: 25, delay: 0.2 });
    fadeUp('.lubl-hero-subtitle', { y: 20, delay: 0.35 });

    fadeUp('.lubl-intro-bar', { y: 10 });
    fadeUp('.lubl-intro-eyebrow', { y: 10, delay: 0.1 });
    fadeUp('.lubl-intro-heading', { y: 15, delay: 0.2 });
    fadeUp('.lubl-intro-quote', { y: 20, delay: 0.15 });
    gsap.utils.toArray('.lubl-intro-text').forEach(function (el, i) {
        fadeUp(el, { y: 15, delay: 0.1 * (i + 1) });
    });

    fadeUp('.lubl-pillars-bar', { y: 10, start: 'top 80%' });
    fadeUp('.lubl-pillars-title', { y: 20, delay: 0.1, start: 'top 80%' });
    fadeUp('.lubl-pillars-subtitle', { y: 15, delay: 0.2, start: 'top 80%' });

    gsap.utils.toArray('.lubl-pillar').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 40 }, {
            opacity: 1, y: 0, duration: 0.7, ease: 'expo.out', delay: i * 0.12,
            scrollTrigger: { trigger: card, start: 'top 85%' }
        });
    });

    fadeUp('.lubl-benefits-bar', { y: 10, start: 'top 80%' });
    fadeUp('.lubl-benefits-title', { y: 20, delay: 0.1, start: 'top 80%' });
    fadeUp('.lubl-benefits-subtitle', { y: 15, delay: 0.2, start: 'top 80%' });

    gsap.utils.toArray('.lubl-benefit').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 30 }, {
            opacity: 1, y: 0, duration: 0.6, ease: 'expo.out', delay: i * 0.1,
            scrollTrigger: { trigger: card, start: 'top 88%' }
        });
    });

    fadeUp('.lubl-cta-title', { y: 15 });
    fadeUp('.lubl-cta-subtitle', { y: 15, delay: 0.1 });
    fadeUp('.lubl-cta .btn-gold', { y: 15, delay: 0.2 });
});
</script>

<?php get_footer(); ?>
