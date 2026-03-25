<?php
/**
 * Template Name: Downloads
 * Description: Downloads / E-Catalog page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   DOWNLOADS PAGE
   ============================================ */

/* --- HERO --- */
.dl-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 6rem;
    overflow: hidden;
}
.dl-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, var(--navy), rgba(11,31,58,0.95));
}
.dl-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.12) 0%, transparent 50%);
    pointer-events: none;
}
.dl-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.dl-breadcrumb {
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
.dl-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.dl-breadcrumb a:hover { color: var(--gold); }
.dl-breadcrumb .active { color: var(--gold); }
.dl-breadcrumb svg { width: 12px; height: 12px; }
.dl-badge {
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
.dl-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4rem);
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.03em;
    margin-bottom: 1.5rem;
    max-width: 700px;
}
.dl-hero-title em { font-style: normal; color: var(--gold); }
.dl-hero-subtitle {
    font-size: clamp(1rem, 1.8vw, 1.25rem);
    color: rgba(255,255,255,0.7);
    max-width: 560px;
    line-height: 1.65;
    font-weight: 300;
}

/* --- DOWNLOAD GRID SECTION --- */
.dl-section {
    max-width: 1400px;
    margin: 0 auto;
    padding: 5rem clamp(1.5rem, 4vw, 3.5rem) 6rem;
}
.dl-section-eyebrow {
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1rem;
}
.dl-section-title {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}
.dl-section-desc {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.65;
    font-weight: 300;
    max-width: 600px;
    margin-bottom: 3rem;
}
.dl-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 2rem;
}
.dl-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 12px;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    transition: all 0.4s var(--ease-out-expo);
}
.dl-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(11,31,58,0.08);
    border-color: rgba(212,168,67,0.3);
}
.dl-card-icon {
    width: 56px;
    height: 56px;
    border-radius: 12px;
    background: var(--bg-secondary);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.3s;
}
.dl-card:hover .dl-card-icon { background: rgba(212,168,67,0.1); }
.dl-card-icon svg { width: 28px; height: 28px; color: var(--navy); }
.dl-card:hover .dl-card-icon svg { color: var(--gold); }
.dl-card-name {
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--navy);
    line-height: 1.3;
}
.dl-card-meta {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    flex-wrap: wrap;
}
.dl-card-tag {
    display: inline-flex;
    padding: 0.25rem 0.75rem;
    background: var(--bg-secondary);
    border-radius: 100px;
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--text-secondary);
    text-transform: uppercase;
    letter-spacing: 0.08em;
}
.dl-card-size {
    font-size: 0.8rem;
    color: var(--text-muted);
    font-weight: 500;
}
.dl-card-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    height: 48px;
    padding: 0 1.5rem;
    background: var(--gold);
    color: var(--navy);
    border: none;
    border-radius: 8px;
    font-family: var(--font-body);
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s var(--ease-out-expo);
    margin-top: auto;
}
.dl-card-btn:hover {
    background: var(--navy);
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(11,31,58,0.12);
}
.dl-card-btn svg { width: 16px; height: 16px; }

/* --- NOTE --- */
.dl-note {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem) 6rem;
}
.dl-note-inner {
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 12px;
    padding: 2rem 2.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
}
.dl-note-icon { flex-shrink: 0; width: 24px; height: 24px; color: var(--gold); }
.dl-note-text {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.6;
    font-weight: 400;
}

/* --- RESPONSIVE --- */
@media (max-width: 768px) {
    .dl-grid { grid-template-columns: 1fr; }
    .dl-note-inner { flex-direction: column; text-align: center; }
}
</style>

<main>

    <!-- ─── HERO ─── -->
    <section class="dl-hero">
        <div class="dl-hero-gradient"></div>
        <div class="dl-hero-glow"></div>
        <div class="dl-hero-inner">
            <nav class="dl-breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                <a href="#">Resources</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                <span class="active">Downloads</span>
            </nav>
            <span class="dl-badge">RESOURCES</span>
            <h1 class="dl-hero-title">Download Our <em>Catalogues</em></h1>
            <p class="dl-hero-subtitle">Access our product catalogues and technical literature. Download detailed specifications for our complete range of transformer insulation products.</p>
        </div>
    </section>

    <!-- ─── DOWNLOAD GRID ─── -->
    <section class="dl-section">
        <div class="dl-section-eyebrow">01. Product Catalogues</div>
        <h2 class="dl-section-title">Technical Literature</h2>
        <p class="dl-section-desc">Browse and download our complete range of product catalogues covering transformer insulation, winding wires, and insulating chemicals.</p>

        <div class="dl-grid">

            <!-- Card 1 -->
            <div class="dl-card">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <div class="dl-card-name">Transformer Boards &amp; Insulation Products</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Insulation</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download
                </a>
            </div>

            <!-- Card 2 -->
            <div class="dl-card">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <div class="dl-card-name">Winding Wires &amp; Insulating Chemicals</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Wires &amp; Chemicals</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download
                </a>
            </div>

            <!-- Card 3 -->
            <div class="dl-card">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <div class="dl-card-name">Paper &amp; Board Catalogue</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Pressboard</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download
                </a>
            </div>

            <!-- Card 4 -->
            <div class="dl-card">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <div class="dl-card-name">Winding Wires Catalogue</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Winding Wires</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download
                </a>
            </div>

            <!-- Card 5 -->
            <div class="dl-card">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <div class="dl-card-name">Insulating Chemical Catalogue</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Chemicals</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download
                </a>
            </div>

        </div>
    </section>

    <!-- ─── NOTE ─── -->
    <div class="dl-note">
        <div class="dl-note-inner">
            <svg class="dl-note-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
            <p class="dl-note-text">PDF catalogues will be available for download shortly. For immediate product information, please <a href="/contact-us" style="color:var(--gold);font-weight:600;text-decoration:none;">contact our sales team</a> or email <a href="mailto:sales@umangboards.com" style="color:var(--gold);font-weight:600;text-decoration:none;">sales@umangboards.com</a>.</p>
        </div>
    </div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);
    var EASE = 'expo.out';

    /* Hero entrance */
    gsap.from('.dl-breadcrumb, .dl-badge, .dl-hero-title, .dl-hero-subtitle', {
        y: 30, opacity: 0, duration: 0.8, stagger: 0.12, delay: 0.3, ease: EASE
    });

    /* Download cards */
    gsap.from('.dl-card', {
        y: 40, opacity: 0, duration: 0.8, stagger: 0.1, ease: EASE,
        scrollTrigger: { trigger: '.dl-grid', start: 'top 85%', toggleActions: 'play none none none' }
    });

    /* Note */
    gsap.from('.dl-note-inner', {
        y: 30, opacity: 0, duration: 0.8, ease: EASE,
        scrollTrigger: { trigger: '.dl-note', start: 'top 90%', toggleActions: 'play none none none' }
    });
});
</script>

<?php get_footer(); ?>
