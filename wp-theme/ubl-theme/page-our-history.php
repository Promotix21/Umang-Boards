<?php
/**
 * Template Name: Our History
 * Description: Company history timeline page for Umang Boards Limited
 */
get_header();
?>

<style>
/* ── History Page Styles ── */
.page-history {
    --timeline-line: 2px;
    --timeline-dot: 12px;
}

/* Hero */
.history-hero {
    min-height: 40vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: linear-gradient(160deg, #0a0e1a 0%, var(--navy) 50%, #0d1933 100%);
    color: #fff;
    padding: 100px 24px 60px;
    position: relative;
    overflow: hidden;
}

.history-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 50% 80%, rgba(191,155,48,0.08) 0%, transparent 65%);
    pointer-events: none;
}

.history-hero .breadcrumb {
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: 0.85rem;
    color: rgba(255,255,255,0.5);
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.history-hero .breadcrumb a {
    color: rgba(255,255,255,0.5);
    text-decoration: none;
    transition: color 0.3s;
}

.history-hero .breadcrumb a:hover {
    color: var(--gold);
}

.history-hero .breadcrumb span {
    color: rgba(255,255,255,0.75);
}

.history-hero .eyebrow {
    font-family: var(--font-mono, 'Inter', sans-serif);
    font-size: 0.75rem;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 16px;
    position: relative;
    z-index: 1;
}

.history-hero h1 {
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: clamp(2.2rem, 5vw, 3.6rem);
    font-weight: 700;
    line-height: 1.15;
    margin: 0 0 18px;
    color: #fff;
    position: relative;
    z-index: 1;
}

.history-hero .subtitle {
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: clamp(1rem, 2vw, 1.2rem);
    color: rgba(255,255,255,0.65);
    max-width: 620px;
    line-height: 1.7;
    margin: 0;
    position: relative;
    z-index: 1;
}

/* Timeline Section */
.history-timeline-section {
    background: var(--bg-warm, #faf9f6);
    padding: 100px 24px;
}

.timeline-container {
    max-width: 1100px;
    margin: 0 auto;
    position: relative;
}

.timeline-container .section-label {
    text-align: center;
    margin-bottom: 60px;
}

.timeline-container .section-label .eyebrow {
    font-family: var(--font-mono, 'Inter', sans-serif);
    font-size: 0.75rem;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 10px;
}

.timeline-container .section-label h2 {
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700;
    color: var(--text-primary, #1a1a2e);
    margin: 0;
}

/* The vertical center line */
.timeline {
    position: relative;
    padding: 20px 0;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: var(--timeline-line);
    background: var(--gold);
    transform: translateX(-50%);
}

/* Each milestone row */
.timeline-item {
    display: flex;
    align-items: flex-start;
    position: relative;
    margin-bottom: 60px;
    opacity: 0;
}

.timeline-item:last-child {
    margin-bottom: 0;
}

/* Dot on the line */
.timeline-item .dot {
    position: absolute;
    left: 50%;
    top: 28px;
    width: var(--timeline-dot);
    height: var(--timeline-dot);
    background: var(--gold);
    border-radius: 50%;
    transform: translateX(-50%);
    z-index: 2;
    box-shadow: 0 0 0 4px var(--bg-warm, #faf9f6), 0 0 0 6px var(--gold);
}

/* Card positioning – left side */
.timeline-item.left .timeline-card {
    width: calc(50% - 50px);
    margin-right: auto;
    text-align: right;
}

.timeline-item.left {
    justify-content: flex-start;
    transform: translateX(-40px);
}

/* Card positioning – right side */
.timeline-item.right .timeline-card {
    width: calc(50% - 50px);
    margin-left: auto;
    text-align: left;
}

.timeline-item.right {
    justify-content: flex-end;
    transform: translateX(40px);
}

/* The card itself */
.timeline-card {
    background: #fff;
    border: 1px solid rgba(0,0,0,0.06);
    border-radius: 12px;
    padding: 32px 28px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.06);
    transition: box-shadow 0.3s, transform 0.3s;
}

.timeline-card:hover {
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    transform: translateY(-2px);
}

.timeline-card .year {
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--gold);
    line-height: 1;
    margin-bottom: 8px;
}

.timeline-card h3 {
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: 1.15rem;
    font-weight: 600;
    color: var(--text-primary, #1a1a2e);
    margin: 0 0 10px;
}

.timeline-card p {
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: 0.95rem;
    line-height: 1.7;
    color: var(--text-secondary, #555);
    margin: 0;
}

/* Animated-in state */
.timeline-item.is-visible {
    opacity: 1;
    transform: translateX(0);
    transition: opacity 0.7s ease, transform 0.7s ease;
}

/* Quote Band */
.history-quote {
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark, #a07c1c) 100%);
    padding: 80px 24px;
    text-align: center;
}

.history-quote blockquote {
    max-width: 860px;
    margin: 0 auto;
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: clamp(1.1rem, 2.2vw, 1.45rem);
    font-style: italic;
    line-height: 1.8;
    color: #fff;
    position: relative;
    padding: 0 20px;
}

.history-quote blockquote::before {
    content: '\201C';
    font-size: 5rem;
    color: rgba(255,255,255,0.25);
    position: absolute;
    top: -40px;
    left: -10px;
    line-height: 1;
    font-style: normal;
}

.history-quote cite {
    display: block;
    margin-top: 24px;
    font-family: var(--font-mono, 'Inter', sans-serif);
    font-size: 0.85rem;
    font-style: normal;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.75);
}

/* CTA */
.history-cta {
    background: var(--bg-primary, #fff);
    padding: 80px 24px;
    text-align: center;
}

.history-cta p {
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: clamp(1.1rem, 2vw, 1.35rem);
    color: var(--text-muted, #777);
    margin: 0 0 28px;
}


/* ── Responsive ── */
@media (max-width: 768px) {
    .timeline::before {
        left: 20px;
    }

    .timeline-item .dot {
        left: 20px;
        top: 20px;
    }

    .timeline-item.left,
    .timeline-item.right {
        justify-content: flex-start;
        padding-left: 52px;
        transform: translateX(30px);
    }

    .timeline-item.left .timeline-card,
    .timeline-item.right .timeline-card {
        width: 100%;
        text-align: left;
        margin: 0;
    }

    .timeline-card {
        padding: 24px 20px;
    }

    .timeline-card .year {
        font-size: 2rem;
    }

    .history-hero {
        min-height: auto;
        padding: 90px 20px 50px;
    }

    .history-timeline-section {
        padding: 60px 16px;
    }

    .timeline-item {
        margin-bottom: 40px;
    }

    .history-quote {
        padding: 50px 20px;
    }

    .history-quote blockquote::before {
        font-size: 3.5rem;
        top: -28px;
        left: 0;
    }
}
</style>

<main class="page-history">

    <!-- ════ Hero ════ -->
    <section class="history-hero">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo home_url(); ?>">Home</a> &rsaquo; Company &rsaquo; <span>Our History</span>
        </nav>
        <div class="eyebrow">OUR HISTORY</div>
        <h1>A Legacy of Innovation</h1>
        <p class="subtitle">From a trading venture in 1978 to a global insulation leader — four decades of steady growth.</p>
    </section>

    <!-- ════ Interactive Timeline ════ -->
    <section class="history-timeline-section">
        <div class="timeline-container">
            <div class="section-label">
                <div class="eyebrow">Milestones</div>
                <h2>Our Journey Through the Decades</h2>
            </div>

            <div class="timeline">

                <?php
                $milestones = [
                    [
                        'year'  => '1978',
                        'title' => 'The Beginning',
                        'desc'  => 'Mr. S.K. Dhanuka commenced the business of trading electrical items catering to the various needs of OEMs in the power sector.',
                    ],
                    [
                        'year'  => '1995',
                        'title' => 'Market Leadership',
                        'desc'  => 'Sincere business policies with quality products earned goodwill amongst power sector OEMs, resulting in increased market share across India.',
                    ],
                    [
                        'year'  => '2001',
                        'title' => 'Umang Boards Incorporated',
                        'desc'  => 'Umang Boards Private Limited was incorporated to manufacture cellulose-based insulation pre-compressed pressboards for distribution transformer manufacturers.',
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
                        'title' => 'Winding Wire & Chemicals',
                        'desc'  => 'Unit 2 commissioned with aluminium and copper enameled wire plant and insulating varnish manufacturing facility.',
                    ],
                    [
                        'year'  => '2024',
                        'title' => 'Listed & Growing',
                        'desc'  => 'Continuing to strengthen global presence with exports to 15+ countries, PGCIL approval for 400 kV class, and ongoing capacity expansion.',
                    ],
                ];

                foreach ($milestones as $i => $m) :
                    $side = ($i % 2 === 0) ? 'left' : 'right';
                ?>
                <div class="timeline-item <?php echo $side; ?>">
                    <span class="dot"></span>
                    <div class="timeline-card">
                        <div class="year"><?php echo esc_html($m['year']); ?></div>
                        <h3><?php echo esc_html($m['title']); ?></h3>
                        <p><?php echo esc_html($m['desc']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- ════ Quote Band ════ -->
    <section class="history-quote">
        <blockquote>
            All functions including supply chain, value chain, project scheduling, manufacturing, services and spares, technology, R&amp;D — integrated to deliver a complete solutions package.
            <cite>— Umang Boards Limited</cite>
        </blockquote>
    </section>

    <!-- ════ CTA ════ -->
    <section class="history-cta">
        <p>Explore who leads us forward</p>
        <a href="/leadership" class="btn-primary">Meet Our Leadership <span>&rarr;</span></a>
    </section>

</main>

<!-- GSAP ScrollTrigger Animations -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        // Fallback: just show everything if GSAP didn't load
        document.querySelectorAll('.timeline-item').forEach(function (el) {
            el.style.opacity = '1';
            el.style.transform = 'none';
        });
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray('.timeline-item').forEach(function (item) {
        var isLeft = item.classList.contains('left');
        var xStart = isLeft ? -60 : 60;

        gsap.fromTo(item,
            { opacity: 0, x: xStart },
            {
                opacity: 1,
                x: 0,
                duration: 0.8,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: item,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                },
            }
        );
    });

    // Animate the quote section
    gsap.fromTo('.history-quote blockquote',
        { opacity: 0, y: 30 },
        {
            opacity: 1,
            y: 0,
            duration: 0.9,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: '.history-quote',
                start: 'top 80%',
                toggleActions: 'play none none none',
            },
        }
    );
});
</script>

<?php get_footer(); ?>
