<?php
/**
 * Template Name: Company History
 * Description: Company history timeline page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   COMPANY HISTORY — Editorial Timeline Design
   ============================================ */

/* --- HERO --- */
.ch-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 12rem;
    overflow: hidden;
}
.ch-hero-bg {
    position: absolute;
    inset: 0;
    background: url('<?php echo $uri; ?>/assets/images/facility-aerial.jpg') center/cover no-repeat;
    opacity: 0.2;
    mix-blend-mode: luminosity;
}
.ch-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, var(--navy), rgba(11,31,58,0.9), var(--navy));
}
.ch-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.ch-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ch-hero-breadcrumb {
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
.ch-hero-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.ch-hero-breadcrumb a:hover { color: var(--gold); }
.ch-hero-breadcrumb .active { color: var(--gold); }
.ch-hero-breadcrumb svg { width: 12px; height: 12px; }
.ch-hero-badge {
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
.ch-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 2rem;
    max-width: 900px;
}
.ch-hero-title em { font-style: normal; color: var(--gold); }
.ch-hero-subtitle {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    color: rgba(255,255,255,0.7);
    max-width: 600px;
    line-height: 1.6;
    font-weight: 300;
}

/* --- OVERLAPPING FEATURE IMAGE --- */
.ch-feature {
    position: relative;
    z-index: 20;
    max-width: 1400px;
    margin: -6rem auto 0;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ch-feature-img {
    position: relative;
    width: 100%;
    height: clamp(300px, 45vw, 700px);
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    border: 1px solid rgba(255,255,255,0.1);
}
.ch-feature-img img {
    width: 100%; height: 100%; object-fit: cover;
    filter: grayscale(100%);
    transition: filter 1s ease, transform 1s ease;
}
.ch-feature-img:hover img { filter: grayscale(0%); transform: scale(1.02); }
.ch-feature-label {
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

/* --- STICKY SCROLL TIMELINE --- */
.ch-timeline {
    padding: clamp(3rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.ch-tl-layout {
    display: flex;
    gap: clamp(2rem, 5vw, 4rem);
}
.ch-tl-left {
    width: 33%;
    flex-shrink: 0;
}
.ch-tl-sticky {
    position: sticky;
    top: calc(var(--utility-h) + var(--header-h) + 2rem);
}
.ch-tl-bar {
    width: 3px;
    height: 3rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.ch-tl-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.ch-tl-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
}
.ch-tl-right {
    flex: 1;
}

/* Timeline entries */
.ch-tl-entry {
    position: relative;
    padding: clamp(3rem, 5vh, 5rem) 0;
    border-top: 1px solid rgba(11,31,58,0.06);
    display: flex;
    gap: clamp(2rem, 3vw, 4rem);
}
.ch-tl-entry:first-child { border-top: none; padding-top: 0; }
.ch-tl-year {
    position: absolute;
    top: 2rem;
    left: -0.5rem;
    font-size: clamp(4rem, 8vw, 6rem);
    font-weight: 900;
    color: var(--bg-secondary);
    line-height: 1;
    letter-spacing: -0.05em;
    z-index: 0;
    transition: color 0.5s;
    pointer-events: none;
    user-select: none;
}
.ch-tl-entry:first-child .ch-tl-year { top: -0.5rem; }
.ch-tl-entry:hover .ch-tl-year { color: rgba(212, 168, 67, 0.1); }
.ch-tl-content {
    position: relative;
    z-index: 1;
    width: 50%;
    padding-top: 1rem;
}
.ch-tl-content h4 {
    font-family: var(--font-body);
    font-size: clamp(1.5rem, 2.5vw, 2.2rem);
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 1.5rem;
    letter-spacing: -0.01em;
}
.ch-tl-content p {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0;
}
.ch-tl-img-wrap {
    width: 50%;
}
.ch-tl-img {
    position: relative;
    height: clamp(200px, 20vw, 300px);
    overflow: hidden;
    border-radius: 8px;
    border: 1px solid rgba(11,31,58,0.06);
    background: var(--navy);
}
.ch-tl-img img {
    width: 100%; height: 100%; object-fit: cover;
    filter: grayscale(100%);
    transition: all 0.7s ease;
}
.ch-tl-entry:hover .ch-tl-img img {
    filter: grayscale(0%);
    transform: scale(1.05);
}
/* Placeholder when no image — navy tile with year */
.ch-tl-img-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--navy) 0%, #1a3a6a 100%);
    color: rgba(255,255,255,0.08);
    font-size: clamp(3rem, 5vw, 5rem);
    font-weight: 900;
    letter-spacing: -0.05em;
}

/* --- QUOTE BAND --- */
.ch-quote {
    background: var(--navy);
    color: #fff;
    padding: clamp(6rem, 12vh, 12rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    position: relative;
    overflow: hidden;
}
.ch-quote-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at center, rgba(200,168,75,0.08) 0%, transparent 60%);
    pointer-events: none;
}
.ch-quote-inner {
    position: relative;
    z-index: 1;
    max-width: 900px;
    margin: 0 auto;
}
.ch-quote-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 2rem;
}
.ch-quote blockquote {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2.5vw, 2rem);
    font-weight: 300;
    line-height: 1.6;
    margin: 0 0 2rem;
    font-style: italic;
    color: rgba(255,255,255,0.9);
}
.ch-quote cite {
    display: block;
    font-style: normal;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
}

/* --- CTA --- */
.ch-cta {
    background: var(--navy);
    color: #fff;
    padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    border-top: 1px solid rgba(255,255,255,0.08);
}
.ch-cta p {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2.5vw, 2rem);
    font-weight: 300;
    color: rgba(255,255,255,0.7);
    margin: 0 0 2rem;
}
.ch-cta-btn {
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
.ch-cta-btn:hover {
    background: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.2);
}
.ch-cta-btn svg {
    width: 18px; height: 18px;
    transition: transform 0.4s var(--ease-out-expo);
}
.ch-cta-btn:hover svg { transform: translateX(4px); }

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .ch-tl-layout { flex-direction: column; }
    .ch-tl-left { width: 100%; }
    .ch-tl-sticky { position: static; }
}
@media (max-width: 768px) {
    .ch-hero { padding: calc(var(--utility-h) + var(--header-h) + 2rem) 0 8rem; }
    .ch-feature { margin-top: -4rem; }
    .ch-feature-img { height: clamp(200px, 50vw, 400px); }
    .ch-tl-entry { flex-direction: column; }
    .ch-tl-content, .ch-tl-img-wrap { width: 100%; }
    .ch-tl-year { font-size: clamp(3rem, 15vw, 4.5rem); }
    .ch-quote { padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem); }
}
</style>

<main class="page-history">

    <!-- ════ HERO ════ -->
    <section class="ch-hero">
        <div class="ch-hero-bg"></div>
        <div class="ch-hero-gradient"></div>
        <div class="ch-hero-glow"></div>
        <div class="ch-hero-inner">
            <nav class="ch-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Company</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">Our History</span>
            </nav>
            <div class="ch-hero-badge">OUR HISTORY</div>
            <h1 class="ch-hero-title">A Legacy of<br><em>Innovation</em></h1>
            <p class="ch-hero-subtitle">From a trading venture in 1978 to a global insulation leader — four decades of steady growth, relentless quality, and unwavering commitment.</p>
        </div>
    </section>

    <!-- ════ OVERLAPPING IMAGE ════ -->
    <section class="ch-feature">
        <div class="ch-feature-img">
            <img src="<?php echo $uri; ?>/assets/images/facility-aerial.jpg" alt="Umang Boards manufacturing facility aerial view" loading="eager">
            <div class="ch-feature-label">Since 1978</div>
        </div>
    </section>

    <!-- ════ STICKY SCROLL TIMELINE ════ -->
    <section class="ch-timeline">
        <div class="ch-tl-layout">
            <div class="ch-tl-left">
                <div class="ch-tl-sticky">
                    <div class="ch-tl-bar"></div>
                    <div class="ch-tl-eyebrow">The Journey</div>
                    <h2 class="ch-tl-heading">Four Decades<br>of Excellence</h2>
                </div>
            </div>
            <div class="ch-tl-right">

                <?php
                $milestones = [
                    [
                        'year'  => '1978',
                        'title' => 'The Beginning',
                        'desc'  => 'Mr. S.K. Dhanuka commenced business of trading electrical items catering to the various needs of OEMs in the power sector.',
                    ],
                    [
                        'year'  => '1995',
                        'title' => 'Market Leadership',
                        'desc'  => 'Sincere business policies with quality products earned goodwill amongst power sector OEMs, resulting in increased market share across India.',
                    ],
                    [
                        'year'  => '2001',
                        'title' => 'Umang Boards Incorporated',
                        'desc'  => 'Umang Boards Private Limited incorporated to manufacture cellulose-based insulation pre-compressed pressboards for distribution transformer manufacturers.',
                    ],
                    [
                        'year'  => '2004',
                        'title' => 'International Expansion',
                        'desc'  => 'Set up office and warehouse in Bangkok, Thailand to extend reach to South East Asian customers and cater to increasing demand for cellulose insulation pressboards.',
                    ],
                    [
                        'year'  => '2005',
                        'title' => 'Umang House HQ',
                        'desc'  => "Corporate headquarters 'Umang House' established in Jaipur with fully equipped meeting spaces and professional working environment.",
                    ],
                    [
                        'year'  => '2007',
                        'title' => 'Anup Insulations Founded',
                        'desc'  => 'Anup Insulations Pvt. Ltd. incorporated to manufacture super enameled and paper covered copper and aluminium round wires and strips.',
                    ],
                    [
                        'year'  => '2008',
                        'title' => 'Major Expansion',
                        'desc'  => 'Expansion into power transformer cellulose insulation pressboards, calendered boards, and machined & moulded components.',
                    ],
                    [
                        'year'  => '2009',
                        'title' => 'Thailand Operations',
                        'desc'  => 'Umang Boards Thailand Co. Ltd. set up as a service center for CRGO and insulating materials for power and distribution transformers.',
                    ],
                    [
                        'year'  => '2011',
                        'title' => 'Paper Division',
                        'desc'  => 'Expansion into crepe paper tapes, tubes, and diamond dotted paper manufacturing.',
                    ],
                    [
                        'year'  => '2017',
                        'title' => 'Unit 2 Land Acquired',
                        'desc'  => 'Purchased 51,000 sq. mtrs land for further expansion, designated as Unit 2.',
                    ],
                    [
                        'year'  => '2018',
                        'title' => 'Winding Wire &amp; Chemicals',
                        'desc'  => 'Unit 2 commissioned with aluminium and copper enameled wire plant and insulating varnish manufacturing facility.',
                    ],
                    [
                        'year'  => '2024',
                        'title' => 'Listed &amp; Growing',
                        'desc'  => 'Continuing to strengthen global presence with exports to 15+ countries, PGCIL approval for 400 kV class, and ongoing capacity expansion.',
                    ],
                ];

                foreach ($milestones as $i => $m) : ?>
                <div class="ch-tl-entry">
                    <span class="ch-tl-year"><?php echo esc_html($m['year']); ?></span>
                    <div class="ch-tl-content">
                        <h4><?php echo $m['title']; ?></h4>
                        <p><?php echo esc_html($m['desc']); ?></p>
                    </div>
                    <div class="ch-tl-img-wrap">
                        <div class="ch-tl-img">
                            <div class="ch-tl-img-placeholder"><?php echo esc_html($m['year']); ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- ════ QUOTE BAND ════ -->
    <section class="ch-quote">
        <div class="ch-quote-glow"></div>
        <div class="ch-quote-inner">
            <div class="ch-quote-bar"></div>
            <blockquote>
                All functions including supply chain, value chain, project scheduling, manufacturing, services and spares, technology, R&amp;D — integrated to deliver a complete solutions package.
            </blockquote>
            <cite>— Umang Boards Limited</cite>
        </div>
    </section>

    <!-- ════ CTA ════ -->
    <section class="ch-cta">
        <p>Explore who leads us forward</p>
        <a href="<?php echo home_url('/leadership'); ?>" class="ch-cta-btn">
            Meet Our Leadership
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
    fadeUp('.ch-hero-badge', { y: 15, delay: 0.1 });
    fadeUp('.ch-hero-title', { y: 25, delay: 0.2 });
    fadeUp('.ch-hero-subtitle', { y: 20, delay: 0.35 });

    /* Feature image */
    gsap.fromTo('.ch-feature-img', { opacity: 0, y: 40 }, {
        opacity: 1, y: 0, duration: 0.8, ease: 'expo.out',
        scrollTrigger: { trigger: '.ch-feature', start: 'top 80%' }
    });

    /* Sticky heading */
    fadeUp('.ch-tl-bar', { y: 10 });
    fadeUp('.ch-tl-eyebrow', { y: 10, delay: 0.1 });
    fadeUp('.ch-tl-heading', { y: 15, delay: 0.2 });

    /* Timeline entries */
    gsap.utils.toArray('.ch-tl-entry').forEach(function (entry, i) {
        gsap.fromTo(entry, { opacity: 0, y: 30 }, {
            opacity: 1, y: 0, duration: 0.7, ease: 'expo.out',
            scrollTrigger: { trigger: entry, start: 'top 85%' }
        });
    });

    /* Quote */
    fadeUp('.ch-quote-bar', { y: 10, start: 'top 80%' });
    fadeUp('.ch-quote blockquote', { y: 25, delay: 0.15, start: 'top 80%' });
    fadeUp('.ch-quote cite', { y: 15, delay: 0.3, start: 'top 80%' });

    /* CTA */
    fadeUp('.ch-cta p', { y: 15 });
    fadeUp('.ch-cta-btn', { y: 15, delay: 0.15 });
});
</script>

<?php get_footer(); ?>
