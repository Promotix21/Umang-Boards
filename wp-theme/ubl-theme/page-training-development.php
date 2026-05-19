<?php
/**
 * Template Name: Training & Development
 * Description: Employee training and development page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   TRAINING & DEVELOPMENT PAGE
   ============================================ */

/* --- HERO --- */
.td-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 6rem;
    overflow: hidden;
}
.td-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, var(--navy) 0%, #1a3a5c 50%, var(--navy) 100%);
}
.td-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.td-hero-pattern {
    position: absolute;
    inset: 0;
    opacity: 0.04;
    background-image:
        linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
}
.td-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.td-hero-breadcrumb {
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
.td-hero-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.td-hero-breadcrumb a:hover { color: var(--gold); }
.td-hero-breadcrumb .active { color: var(--gold); }
.td-hero-breadcrumb svg { width: 12px; height: 12px; }
.td-hero-badge {
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
.td-hero-badge svg { width: 14px; height: 14px; fill: var(--gold); }
.td-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 2rem;
    max-width: 900px;
}
.td-hero-title em { font-style: normal; color: var(--gold); }
.td-hero-subtitle {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    color: rgba(255,255,255,0.7);
    max-width: 600px;
    line-height: 1.6;
    font-weight: 300;
}

/* --- INTRO --- */
.td-intro {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.td-intro-layout {
    display: flex;
    gap: clamp(3rem, 6vw, 6rem);
    align-items: flex-start;
}
.td-intro-left {
    width: 33%;
    flex-shrink: 0;
}
.td-intro-bar {
    width: 3px;
    height: 3rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.td-intro-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.td-intro-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
}
.td-intro-right {
    flex: 1;
    padding-top: 0.5rem;
}
.td-intro-text {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0 0 1.5rem;
}
.td-intro-text:last-child { margin-bottom: 0; }

/* --- TRAINING AREAS --- */
.td-areas {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.td-areas-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.td-areas-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 5rem);
}
.td-areas-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.td-areas-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.td-areas-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0 0 1rem;
}
.td-areas-subtitle {
    font-size: 1.1rem;
    color: var(--text-muted);
    font-weight: 300;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}
.td-areas-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}
.td-area-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    padding: clamp(2rem, 3vw, 2.5rem);
    transition: all 0.5s var(--ease-out-expo);
    position: relative;
    overflow: hidden;
    display: flex;
    gap: 1.5rem;
    align-items: flex-start;
}
.td-area-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; bottom: 0;
    width: 3px;
    background: var(--gold);
    transform: scaleY(0);
    transform-origin: top;
    transition: transform 0.4s var(--ease-out-expo);
}
.td-area-card:hover {
    border-color: var(--gold);
    transform: translateY(-4px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}
.td-area-card:hover::before { transform: scaleY(1); }
.td-area-icon {
    width: 64px;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(200,168,75,0.1);
    border-radius: 12px;
    flex-shrink: 0;
}
.td-area-icon svg {
    width: 32px;
    height: 32px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.td-area-content {
    flex: 1;
}
.td-area-number {
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 0.5rem;
}
.td-area-title {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2vw, 1.6rem);
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 0.75rem;
    letter-spacing: -0.01em;
}
.td-area-desc {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0 0 1rem;
}
.td-area-topics {
    list-style: none;
    margin: 0;
    padding: 0;
}
.td-area-topics li {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.3rem 0;
    font-size: 0.88rem;
    color: var(--text-secondary);
    line-height: 1.5;
}
.td-area-topics li svg {
    width: 14px;
    height: 14px;
    flex-shrink: 0;
    fill: none;
    stroke: var(--gold);
    stroke-width: 2;
}

/* --- APPROACH --- */
.td-approach {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.td-approach-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 5rem);
}
.td-approach-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.td-approach-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.td-approach-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0;
}
.td-approach-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}
.td-approach-card {
    text-align: center;
    padding: clamp(2rem, 4vw, 3rem) 1.5rem;
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    transition: all 0.5s var(--ease-out-expo);
}
.td-approach-card:hover {
    border-color: var(--gold);
    transform: translateY(-2px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.06);
}
.td-approach-step {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    background: var(--navy);
    color: var(--gold);
    font-family: var(--font-body);
    font-size: 1.1rem;
    font-weight: 800;
    margin-bottom: 1.25rem;
}
.td-approach-card-title {
    font-family: var(--font-body);
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 0.75rem;
}
.td-approach-card-desc {
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0;
}

/* --- CTA --- */
.td-cta {
    background: var(--navy);
    color: #fff;
    padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    position: relative;
    overflow: hidden;
}
.td-cta-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at center, rgba(212,168,67,0.1) 0%, transparent 60%);
    pointer-events: none;
}
.td-cta-inner {
    position: relative;
    z-index: 2;
    max-width: 700px;
    margin: 0 auto;
}
.td-cta-title {
    font-family: var(--font-body);
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}
.td-cta-subtitle {
    font-size: 1rem;
    color: rgba(255,255,255,0.7);
    margin-bottom: 2.5rem;
    line-height: 1.6;
}

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .td-intro-layout { flex-direction: column; }
    .td-intro-left { width: 100%; }
    .td-areas-grid { grid-template-columns: 1fr; }
    .td-approach-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .td-hero { padding-bottom: 4rem; }
    .td-approach-grid { grid-template-columns: 1fr; }
    .td-area-card { flex-direction: column; }
}
</style>

<main class="page-training-development">

    <!-- ════ HERO ════ -->
    <section class="td-hero">
        <div class="td-hero-gradient"></div>
        <div class="td-hero-glow"></div>
        <div class="td-hero-pattern"></div>
        <div class="td-hero-inner">
            <nav class="td-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Careers</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">Training &amp; Development</span>
            </nav>
            <div class="td-hero-badge">
                <svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
                Continuous Learning
            </div>
            <h1 class="td-hero-title">Training &amp;<br><em>Development</em></h1>
            <p class="td-hero-subtitle">Investing in our people through structured training programs that build technical expertise, safety awareness, and leadership capabilities.</p>
        </div>
    </section>

    <!-- ════ INTRO ════ -->
    <section class="td-intro">
        <div class="td-intro-layout">
            <div class="td-intro-left">
                <div class="td-intro-bar"></div>
                <div class="td-intro-eyebrow">Our Approach</div>
                <h2 class="td-intro-heading">Investing in<br>Our People</h2>
            </div>
            <div class="td-intro-right">
                <p class="td-intro-text">At Umang Boards, we believe that our employees are our greatest asset. Our comprehensive training and development programs are designed to enhance skills, improve safety awareness, and prepare our workforce for the challenges of tomorrow.</p>
                <p class="td-intro-text">Every employee, from new hires to senior management, participates in regular training sessions tailored to their role and career aspirations. Our programs combine on-the-job training, classroom sessions, external certifications, and mentorship to create well-rounded professionals.</p>
            </div>
        </div>
    </section>

    <!-- ════ TRAINING AREAS ════ -->
    <section class="td-areas">
        <div class="td-areas-inner">
            <div class="td-areas-header">
                <div class="td-areas-bar"></div>
                <div class="td-areas-eyebrow">Programs</div>
                <h2 class="td-areas-title">Training Areas</h2>
                <p class="td-areas-subtitle">Our training curriculum covers four critical areas essential for manufacturing excellence and professional growth.</p>
            </div>

            <div class="td-areas-grid">

                <!-- Technical Skills -->
                <div class="td-area-card">
                    <div class="td-area-icon">
                        <svg viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
                    </div>
                    <div class="td-area-content">
                        <div class="td-area-number">Area 01</div>
                        <h3 class="td-area-title">Technical Skills</h3>
                        <p class="td-area-desc">Hands-on training in advanced manufacturing processes, machine operation, and process optimization specific to insulation board production.</p>
                        <ul class="td-area-topics">
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Machine operation and maintenance</li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Production process optimization</li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> New technology adoption</li>
                        </ul>
                    </div>
                </div>

                <!-- Safety Training -->
                <div class="td-area-card">
                    <div class="td-area-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <div class="td-area-content">
                        <div class="td-area-number">Area 02</div>
                        <h3 class="td-area-title">Safety &amp; EHS</h3>
                        <p class="td-area-desc">Comprehensive safety programs aligned with ISO 45001 standards, covering occupational health, environmental compliance, and emergency response.</p>
                        <ul class="td-area-topics">
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Fire safety and emergency drills</li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> PPE usage and hazard identification</li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Environmental compliance training</li>
                        </ul>
                    </div>
                </div>

                <!-- Quality -->
                <div class="td-area-card">
                    <div class="td-area-icon">
                        <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4"/><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
                    </div>
                    <div class="td-area-content">
                        <div class="td-area-number">Area 03</div>
                        <h3 class="td-area-title">Quality Management</h3>
                        <p class="td-area-desc">Training on quality control methodologies, testing procedures, and ISO 9001 quality management system requirements for all production staff.</p>
                        <ul class="td-area-topics">
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> ISO 9001 quality standards</li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> NABL laboratory testing protocols</li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Statistical process control</li>
                        </ul>
                    </div>
                </div>

                <!-- Leadership -->
                <div class="td-area-card">
                    <div class="td-area-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61z"/></svg>
                    </div>
                    <div class="td-area-content">
                        <div class="td-area-number">Area 04</div>
                        <h3 class="td-area-title">Leadership Development</h3>
                        <p class="td-area-desc">Programs designed to build management skills, strategic thinking, and team leadership capabilities for mid-level and senior professionals.</p>
                        <ul class="td-area-topics">
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Team management and communication</li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Decision-making and problem-solving</li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Strategic planning workshops</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ════ APPROACH ════ -->
    <section class="td-approach">
        <div class="td-approach-header">
            <div class="td-approach-bar"></div>
            <div class="td-approach-eyebrow">Methodology</div>
            <h2 class="td-approach-title">Our Training Approach</h2>
        </div>

        <div class="td-approach-grid">
            <div class="td-approach-card">
                <div class="td-approach-step">01</div>
                <h3 class="td-approach-card-title">Assess</h3>
                <p class="td-approach-card-desc">We begin by identifying skill gaps and training needs through regular assessments and performance reviews for every team member.</p>
            </div>
            <div class="td-approach-card">
                <div class="td-approach-step">02</div>
                <h3 class="td-approach-card-title">Design</h3>
                <p class="td-approach-card-desc">Customized training modules are developed in collaboration with department heads, subject experts, and external training partners.</p>
            </div>
            <div class="td-approach-card">
                <div class="td-approach-step">03</div>
                <h3 class="td-approach-card-title">Deliver</h3>
                <p class="td-approach-card-desc">Training is delivered through a blend of classroom sessions, on-the-job mentoring, workshops, and external certification programs.</p>
            </div>
        </div>
    </section>

    <!-- ════ CTA ════ -->
    <section class="td-cta">
        <div class="td-cta-glow"></div>
        <div class="td-cta-inner">
            <h2 class="td-cta-title">Grow Your Career With Us</h2>
            <p class="td-cta-subtitle">Join a company that invests in your development. Explore current openings and start your journey with Umang Boards.</p>
            <a href="<?php echo home_url('/careers'); ?>" class="btn-gold">
                View Careers
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

    fadeUp('.td-hero-badge', { y: 15, delay: 0.1 });
    fadeUp('.td-hero-title', { y: 25, delay: 0.2 });
    fadeUp('.td-hero-subtitle', { y: 20, delay: 0.35 });

    fadeUp('.td-intro-bar', { y: 10 });
    fadeUp('.td-intro-eyebrow', { y: 10, delay: 0.1 });
    fadeUp('.td-intro-heading', { y: 15, delay: 0.2 });
    gsap.utils.toArray('.td-intro-text').forEach(function (el, i) {
        fadeUp(el, { y: 15, delay: 0.1 * (i + 1) });
    });

    fadeUp('.td-areas-bar', { y: 10, start: 'top 80%' });
    fadeUp('.td-areas-title', { y: 20, delay: 0.1, start: 'top 80%' });
    fadeUp('.td-areas-subtitle', { y: 15, delay: 0.2, start: 'top 80%' });

    gsap.utils.toArray('.td-area-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 40 }, {
            opacity: 1, y: 0, duration: 0.7, ease: 'expo.out', delay: i * 0.15,
            scrollTrigger: { trigger: card, start: 'top 85%' }
        });
    });

    fadeUp('.td-approach-bar', { y: 10, start: 'top 80%' });
    fadeUp('.td-approach-title', { y: 20, delay: 0.1, start: 'top 80%' });

    gsap.utils.toArray('.td-approach-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 30 }, {
            opacity: 1, y: 0, duration: 0.6, ease: 'expo.out', delay: i * 0.12,
            scrollTrigger: { trigger: card, start: 'top 88%' }
        });
    });

    fadeUp('.td-cta-title', { y: 15 });
    fadeUp('.td-cta-subtitle', { y: 15, delay: 0.1 });
    fadeUp('.td-cta .btn-gold', { y: 15, delay: 0.2 });
});
</script>

<?php get_footer(); ?>
