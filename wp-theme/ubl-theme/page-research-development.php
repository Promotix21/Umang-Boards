<?php
/**
 * Template Name: Research & Development
 * Description: R&D capabilities page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   RESEARCH & DEVELOPMENT PAGE
   ============================================ */

/* --- HERO --- */
.rd-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 6rem;
    overflow: hidden;
}
.rd-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, var(--navy) 0%, #1a3a5c 50%, var(--navy) 100%);
}
.rd-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.rd-hero-pattern {
    position: absolute;
    inset: 0;
    opacity: 0.04;
    background-image:
        linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
}
.rd-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.rd-hero-breadcrumb {
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
.rd-hero-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.rd-hero-breadcrumb a:hover { color: var(--gold); }
.rd-hero-breadcrumb .active { color: var(--gold); }
.rd-hero-breadcrumb svg { width: 12px; height: 12px; }
.rd-hero-badge {
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
.rd-hero-badge svg { width: 14px; height: 14px; fill: var(--gold); }
.rd-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 2rem;
    max-width: 900px;
}
.rd-hero-title em { font-style: normal; color: var(--gold); }
.rd-hero-subtitle {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    color: rgba(255,255,255,0.7);
    max-width: 600px;
    line-height: 1.6;
    font-weight: 300;
}

/* --- OVERVIEW --- */
.rd-overview {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.rd-overview-layout {
    display: flex;
    gap: clamp(3rem, 6vw, 6rem);
    align-items: flex-start;
}
.rd-overview-left {
    width: 33%;
    flex-shrink: 0;
}
.rd-overview-bar {
    width: 3px;
    height: 3rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.rd-overview-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.rd-overview-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
}
.rd-overview-right {
    flex: 1;
    padding-top: 0.5rem;
}
.rd-overview-quote {
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
.rd-overview-text {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0 0 1.5rem;
}
.rd-overview-text:last-child { margin-bottom: 0; }

/* --- FOCUS AREAS --- */
.rd-focus {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.rd-focus-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.rd-focus-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 5rem);
}
.rd-focus-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.rd-focus-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.rd-focus-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0 0 1rem;
}
.rd-focus-subtitle {
    font-size: 1.1rem;
    color: var(--text-muted);
    font-weight: 300;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}
.rd-focus-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}
.rd-focus-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    padding: clamp(2rem, 3vw, 2.5rem);
    transition: all 0.5s var(--ease-out-expo);
    position: relative;
    overflow: hidden;
}
.rd-focus-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s var(--ease-out-expo);
}
.rd-focus-card:hover {
    border-color: var(--gold);
    transform: translateY(-4px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}
.rd-focus-card:hover::before { transform: scaleX(1); }
.rd-focus-card-icon {
    width: 64px;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(200,168,75,0.1);
    border-radius: 12px;
    margin-bottom: 1.5rem;
}
.rd-focus-card-icon svg {
    width: 32px;
    height: 32px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.rd-focus-card-number {
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 0.5rem;
}
.rd-focus-card-title {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2vw, 1.6rem);
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 0.75rem;
    letter-spacing: -0.01em;
}
.rd-focus-card-desc {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0;
}

/* --- LAB HIGHLIGHT --- */
.rd-lab {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.rd-lab-wrap {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: clamp(3rem, 6vw, 5rem);
    align-items: center;
}
.rd-lab-content {}
.rd-lab-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.rd-lab-title {
    font-family: var(--font-body);
    font-size: clamp(1.6rem, 3vw, 2.4rem);
    font-weight: 700;
    color: var(--text-primary);
    letter-spacing: -0.02em;
    line-height: 1.15;
    margin: 0 0 1.5rem;
}
.rd-lab-text {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0 0 1.5rem;
}
.rd-lab-points {
    list-style: none;
    padding: 0;
    margin: 0;
}
.rd-lab-points li {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    padding: 0.6rem 0;
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.5;
}
.rd-lab-points li svg {
    width: 18px;
    height: 18px;
    flex-shrink: 0;
    margin-top: 2px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 2;
}
.rd-lab-visual {
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    padding: 3rem;
    min-height: 360px;
}
.rd-lab-visual img {
    max-width: 280px;
    width: 100%;
    height: auto;
    object-fit: contain;
}

/* --- CTA --- */
.rd-cta {
    background: var(--navy);
    color: #fff;
    padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    position: relative;
    overflow: hidden;
}
.rd-cta-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at center, rgba(212,168,67,0.1) 0%, transparent 60%);
    pointer-events: none;
}
.rd-cta-inner {
    position: relative;
    z-index: 2;
    max-width: 700px;
    margin: 0 auto;
}
.rd-cta-title {
    font-family: var(--font-body);
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}
.rd-cta-subtitle {
    font-size: 1rem;
    color: rgba(255,255,255,0.7);
    margin-bottom: 2.5rem;
    line-height: 1.6;
}
.rd-cta-btns {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .rd-overview-layout { flex-direction: column; }
    .rd-overview-left { width: 100%; }
    .rd-focus-grid { grid-template-columns: 1fr; }
    .rd-lab-wrap { grid-template-columns: 1fr; }
    .rd-lab-visual { order: -1; }
}
@media (max-width: 768px) {
    .rd-hero { padding-bottom: 4rem; }
    .rd-lab-visual { min-height: 250px; padding: 2rem; }
}
</style>

<main class="page-research-development">

    <!-- ════ HERO ════ -->
    <section class="rd-hero">
        <div class="rd-hero-gradient"></div>
        <div class="rd-hero-glow"></div>
        <div class="rd-hero-pattern"></div>
        <div class="rd-hero-inner">
            <nav class="rd-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Company</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">Research &amp; Development</span>
            </nav>
            <div class="rd-hero-badge">
                <svg viewBox="0 0 24 24"><path d="M9 3h6v11l-3 3-3-3V3z"/><path d="M6 21h12"/><path d="M12 17v4"/></svg>
                Innovation Hub
            </div>
            <h1 class="rd-hero-title">Research &amp;<br><em>Development</em></h1>
            <p class="rd-hero-subtitle">Driving innovation in electrical insulation through cutting-edge research, advanced materials science, and rigorous testing methodologies.</p>
        </div>
    </section>

    <!-- ════ R&D OVERVIEW ════ -->
    <section class="rd-overview">
        <div class="rd-overview-layout">
            <div class="rd-overview-left">
                <div class="rd-overview-bar"></div>
                <div class="rd-overview-eyebrow">Innovation at Core</div>
                <h2 class="rd-overview-heading">Pioneering<br>Insulation Science</h2>
            </div>
            <div class="rd-overview-right">
                <p class="rd-overview-quote">Our R&amp;D efforts are focused on pushing the boundaries of insulation technology to meet the evolving demands of the global electrical industry.</p>
                <p class="rd-overview-text">Umang Boards' Research and Development division is the engine of innovation that drives our product excellence. Our dedicated team of scientists, engineers, and quality specialists works continuously to develop new formulations, improve existing products, and pioneer next-generation insulation solutions.</p>
                <p class="rd-overview-text">Backed by our NABL-accredited in-house laboratory and state-of-the-art testing equipment, our R&amp;D team has the tools and expertise to conduct comprehensive research across mechanical, electrical, chemical, and thermal properties of insulation materials.</p>
            </div>
        </div>
    </section>

    <!-- ════ FOCUS AREAS ════ -->
    <section class="rd-focus">
        <div class="rd-focus-inner">
            <div class="rd-focus-header">
                <div class="rd-focus-bar"></div>
                <div class="rd-focus-eyebrow">Our Focus</div>
                <h2 class="rd-focus-title">R&amp;D Focus Areas</h2>
                <p class="rd-focus-subtitle">Our research efforts span four critical domains that drive product innovation and manufacturing excellence.</p>
            </div>

            <div class="rd-focus-grid">

                <!-- New Materials -->
                <div class="rd-focus-card">
                    <div class="rd-focus-card-icon">
                        <svg viewBox="0 0 24 24"><path d="M9 3h6v11l-3 3-3-3V3z"/><path d="M6 21h12"/><path d="M12 17v4"/></svg>
                    </div>
                    <div class="rd-focus-card-number">Focus Area 01</div>
                    <h3 class="rd-focus-card-title">New Materials Research</h3>
                    <p class="rd-focus-card-desc">Exploring advanced raw materials, composite formulations, and nano-technology applications to develop insulation products with superior dielectric strength, thermal resistance, and mechanical durability for next-generation transformers.</p>
                </div>

                <!-- Process Optimization -->
                <div class="rd-focus-card">
                    <div class="rd-focus-card-icon">
                        <svg viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
                    </div>
                    <div class="rd-focus-card-number">Focus Area 02</div>
                    <h3 class="rd-focus-card-title">Process Optimization</h3>
                    <p class="rd-focus-card-desc">Continuous refinement of manufacturing processes to enhance production efficiency, reduce energy consumption, minimize waste, and improve product consistency across all production batches and grades.</p>
                </div>

                <!-- Quality Improvement -->
                <div class="rd-focus-card">
                    <div class="rd-focus-card-icon">
                        <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4"/><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
                    </div>
                    <div class="rd-focus-card-number">Focus Area 03</div>
                    <h3 class="rd-focus-card-title">Quality Improvement</h3>
                    <p class="rd-focus-card-desc">Developing enhanced quality control methodologies, tighter tolerances, and advanced statistical process control techniques that ensure every product consistently exceeds international quality benchmarks.</p>
                </div>

                <!-- Testing Innovation -->
                <div class="rd-focus-card">
                    <div class="rd-focus-card-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <div class="rd-focus-card-number">Focus Area 04</div>
                    <h3 class="rd-focus-card-title">Testing Innovation</h3>
                    <p class="rd-focus-card-desc">Advancing testing capabilities and methodologies in our NABL-accredited laboratory, including developing new test protocols for emerging insulation applications in EV motors, renewable energy, and high-voltage power systems.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ════ LAB HIGHLIGHT ════ -->
    <section class="rd-lab">
        <div class="rd-lab-wrap">
            <div class="rd-lab-content">
                <div class="rd-lab-eyebrow">Our Lab</div>
                <h2 class="rd-lab-title">NABL-Accredited Testing Laboratory</h2>
                <p class="rd-lab-text">Our in-house testing laboratory, accredited under ISO/IEC 17025 by the National Accreditation Board for Testing and Calibration Laboratories, is the backbone of our R&amp;D capabilities. It enables us to perform comprehensive testing and validation at every stage of development.</p>
                <ul class="rd-lab-points">
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Full mechanical testing -- tensile, flexural, and compressive strength
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Electrical testing -- dielectric strength, insulation resistance, and breakdown voltage
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Chemical and thermal analysis capabilities
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Compliance testing for IEC 60641, IS 1076, and other international standards
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Test reports accepted internationally without retesting
                    </li>
                </ul>
            </div>
            <div class="rd-lab-visual">
                <img src="<?php echo $uri; ?>/assets/images/NABL_Official_LOGO_Registered.png" alt="NABL Accreditation Logo" loading="lazy">
            </div>
        </div>
    </section>

    <!-- ════ CTA ════ -->
    <section class="rd-cta">
        <div class="rd-cta-glow"></div>
        <div class="rd-cta-inner">
            <h2 class="rd-cta-title">Looking for Custom Insulation Solutions?</h2>
            <p class="rd-cta-subtitle">Our R&amp;D team can develop custom formulations and specifications to meet your unique application requirements. Let's discuss your needs.</p>
            <div class="rd-cta-btns">
                <a href="<?php echo home_url('/contact-us'); ?>" class="btn-gold">
                    <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                    Contact R&amp;D Team
                </a>
                <a href="<?php echo home_url('/products'); ?>" class="btn-outline-light">
                    <svg viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg>
                    View Products
                </a>
            </div>
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

    fadeUp('.rd-hero-badge', { y: 15, delay: 0.1 });
    fadeUp('.rd-hero-title', { y: 25, delay: 0.2 });
    fadeUp('.rd-hero-subtitle', { y: 20, delay: 0.35 });

    fadeUp('.rd-overview-bar', { y: 10 });
    fadeUp('.rd-overview-eyebrow', { y: 10, delay: 0.1 });
    fadeUp('.rd-overview-heading', { y: 15, delay: 0.2 });
    fadeUp('.rd-overview-quote', { y: 20, delay: 0.15 });
    gsap.utils.toArray('.rd-overview-text').forEach(function (el, i) {
        fadeUp(el, { y: 15, delay: 0.1 * (i + 1) });
    });

    fadeUp('.rd-focus-bar', { y: 10, start: 'top 80%' });
    fadeUp('.rd-focus-title', { y: 20, delay: 0.1, start: 'top 80%' });
    fadeUp('.rd-focus-subtitle', { y: 15, delay: 0.2, start: 'top 80%' });

    gsap.utils.toArray('.rd-focus-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 40 }, {
            opacity: 1, y: 0, duration: 0.7, ease: 'expo.out', delay: i * 0.15,
            scrollTrigger: { trigger: card, start: 'top 85%' }
        });
    });

    gsap.from('.rd-lab-content', {
        scrollTrigger: { trigger: '.rd-lab', start: 'top 75%', once: true },
        opacity: 0, x: -30, duration: 0.8, ease: 'power3.out'
    });
    gsap.from('.rd-lab-visual', {
        scrollTrigger: { trigger: '.rd-lab', start: 'top 75%', once: true },
        opacity: 0, x: 30, duration: 0.8, delay: 0.15, ease: 'power3.out'
    });

    fadeUp('.rd-cta-title', { y: 15 });
    fadeUp('.rd-cta-subtitle', { y: 15, delay: 0.1 });
    gsap.fromTo('.rd-cta-btns', { opacity: 0, y: 15 }, {
        opacity: 1, y: 0, duration: 0.6, ease: 'expo.out', delay: 0.2,
        scrollTrigger: { trigger: '.rd-cta', start: 'top 85%' }
    });
});
</script>

<?php get_footer(); ?>
