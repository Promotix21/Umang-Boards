<?php
/**
 * Template Name: Quality
 * Description: Quality & R&D page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   QUALITY & R&D — Editorial Design
   ============================================ */

/* --- HERO --- */
.qa-hero {
    position: relative;
    background: #fdf9f4;
    color: #0b1f3a;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 12rem;
    overflow: hidden;
}
.qa-hero-bg {
    position: absolute;
    inset: 0;
    background: url('<?php echo $uri; ?>/assets/images/facility-aerial.jpg') center/cover no-repeat;
    opacity: 0.2;
    mix-blend-mode: luminosity;
}
.qa-hero-gradient {
    position: absolute;
    inset: 0;
    background: none;
}
.qa-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.qa-hero-grid-overlay {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle, rgba(11,31,58,0.06) 1px, transparent 1px);
    background-size: 24px 24px;
    opacity: 1;
    pointer-events: none;
}
.qa-hero-accent {
    position: absolute;
    left: clamp(1.5rem, 4vw, 3.5rem);
    top: calc(var(--utility-h) + var(--header-h) + 2rem);
    bottom: 2rem;
    width: 4px;
    background: linear-gradient(to bottom, var(--gold), rgba(212,168,67,0.2));
    z-index: 1;
}
.qa-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.qa-hero-breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: rgba(11,31,58,0.6);
    margin-bottom: 2rem;
}
.qa-hero-breadcrumb a { color: rgba(11,31,58,0.6); text-decoration: none; transition: color 0.3s; }
.qa-hero-breadcrumb a:hover { color: var(--gold); }
.qa-hero-breadcrumb .active { color: var(--gold); }
.qa-hero-breadcrumb svg { width: 12px; height: 12px; }
.qa-hero-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.4rem 1rem;
    background: rgba(212,168,67,0.1);
    border: 1px solid rgba(212,168,67,0.25);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
}
.qa-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 2rem;
    max-width: 900px;
}
.qa-hero-title em { font-style: normal; color: var(--gold); }
.qa-hero-subtitle {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    color: var(--text-secondary);
    max-width: 600px;
    line-height: 1.6;
    font-weight: 400;
}

/* --- OVERLAPPING STATS BAND --- */
.qa-stats {
    position: relative;
    z-index: 20;
    max-width: 1400px;
    margin: -5rem auto 0;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.qa-stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1px;
    background: rgba(11,31,58,0.06);
    border: 1px solid rgba(11,31,58,0.06);
    box-shadow: 0 20px 60px rgba(11,31,58,0.15);
}
.qa-stat {
    background: #fff;
    padding: 2.5rem 2rem;
    text-align: center;
    transition: background 0.3s;
}
.qa-stat:hover { background: var(--bg-secondary); }
.qa-stat-icon {
    width: 40px;
    height: 40px;
    color: var(--gold);
    margin: 0 auto 1rem;
}
.qa-stat-label {
    font-family: var(--font-body);
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    font-weight: 700;
    color: #0b1f3a;
    letter-spacing: -0.01em;
    line-height: 1.2;
    margin-bottom: 0.5rem;
}
.qa-stat-desc {
    font-size: 0.78rem;
    font-weight: 600;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

/* --- SECTION SHARED --- */
.qa-section {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.qa-section-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.qa-section-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--text-primary);
    letter-spacing: -0.02em;
    line-height: 1.15;
    margin-bottom: 2rem;
}
.qa-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}

/* --- SECTION 01: QUALITY PHILOSOPHY (split) --- */
.qa-philosophy {
    border-top: 1px solid rgba(11,31,58,0.06);
}
.qa-split {
    display: flex;
    gap: clamp(3rem, 5vw, 6rem);
    align-items: flex-start;
}
.qa-split-text {
    flex: 1;
}
.qa-split-text p {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.75;
    font-weight: 400;
    margin: 0 0 1.5rem;
}
.qa-split-text p:last-child { margin-bottom: 0; }
.qa-split-img {
    width: 45%;
    flex-shrink: 0;
}
.qa-split-img-wrap {
    position: relative;
    width: 100%;
    height: clamp(280px, 30vw, 450px);
    overflow: hidden;
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
}
.qa-split-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: grayscale(100%);
    transition: filter 1s ease, transform 1s ease;
}
.qa-split-img-wrap:hover img {
    filter: grayscale(0%);
    transform: scale(1.03);
}
.qa-split-img-label {
    position: absolute;
    bottom: 0;
    left: 0;
    background: rgba(11,31,58,0.9);
    backdrop-filter: blur(8px);
    padding: 0.75rem 1.25rem;
    border-top: 2px solid var(--gold);
    color: #fff;
    font-size: 0.78rem;
    font-weight: 600;
    letter-spacing: 0.05em;
    text-transform: uppercase;
}

/* --- SECTION 02: TESTING LABS (3 cards) --- */
.qa-labs {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.qa-labs-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.qa-labs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
    margin-top: 3rem;
}
.qa-lab-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    padding: clamp(2rem, 3vw, 3rem);
    transition: border-color 0.4s, box-shadow 0.4s;
}
.qa-lab-card:hover {
    border-color: var(--gold);
    box-shadow: 0 12px 40px rgba(11,31,58,0.08);
}
.qa-lab-card-icon {
    width: 48px;
    height: 48px;
    color: #0b1f3a;
    margin-bottom: 1.5rem;
    transition: color 0.3s;
}
.qa-lab-card:hover .qa-lab-card-icon { color: var(--gold); }
.qa-lab-card h4 {
    font-family: var(--font-body);
    font-size: 1.3rem;
    font-weight: 700;
    color: #0b1f3a;
    margin: 0 0 1rem;
    letter-spacing: -0.01em;
}
.qa-lab-card p {
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin: 0;
}

/* --- SECTION 03: R&D (text section on navy) --- */
.qa-rnd {
    background: linear-gradient(145deg, #f2e0c8 0%, #e8caa4 45%, #ddb880 100%);
    color: #0b1f3a;
    padding: clamp(6rem, 12vh, 10rem) clamp(1.5rem, 4vw, 3.5rem);
    position: relative;
    overflow: hidden;
}
.qa-rnd-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at bottom left, rgba(200,168,75,0.1) 0%, transparent 60%);
    pointer-events: none;
}
.qa-rnd-inner {
    position: relative;
    z-index: 1;
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    gap: clamp(3rem, 5vw, 6rem);
    align-items: flex-start;
}
.qa-rnd-left {
    width: 40%;
    flex-shrink: 0;
}
.qa-rnd-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.qa-rnd-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.qa-rnd-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
}
.qa-rnd-heading em { font-style: normal; color: var(--gold); }
.qa-rnd-right {
    flex: 1;
    padding-top: 1rem;
}
.qa-rnd-right p {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.75;
    font-weight: 400;
    margin: 0 0 1.5rem;
}
.qa-rnd-right p:last-child { margin-bottom: 0; }
.qa-rnd-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    margin-top: 2.5rem;
}
.qa-rnd-feat {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
}
.qa-rnd-feat-icon {
    width: 20px;
    height: 20px;
    color: var(--gold);
    flex-shrink: 0;
    margin-top: 2px;
}
.qa-rnd-feat span {
    font-size: 0.9rem;
    color: var(--text-primary);
    line-height: 1.5;
    font-weight: 400;
}

/* --- SECTION 04: STANDARDS COMPLIANCE --- */
.qa-standards {
    border-top: 1px solid rgba(11,31,58,0.06);
}
.qa-tags-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-top: 2rem;
}
.qa-tag {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.08);
    font-size: 0.85rem;
    font-weight: 600;
    color: #0b1f3a;
    letter-spacing: 0.02em;
    transition: all 0.3s;
}
.qa-tag:hover {
    border-color: var(--gold);
    background: var(--bg-secondary);
}
.qa-tag svg {
    width: 16px;
    height: 16px;
    color: var(--gold);
}

/* --- CTA --- */
.qa-cta {
    background: linear-gradient(145deg, #f2e0c8 0%, #e8caa4 45%, #ddb880 100%);
    color: #0b1f3a;
    padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    border-top: 1px solid rgba(11,31,58,0.06);
}
.qa-cta p {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2.5vw, 2rem);
    font-weight: 400;
    color: var(--text-secondary);
    margin: 0 0 2rem;
}
.qa-cta-btns {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}
.qa-cta .btn-outline { color: #0b1f3a; border-color: rgba(11,31,58,0.25); }
.qa-cta .btn-outline:hover { border-color: var(--gold); color: var(--gold); }

/* --- SECTION 05: SUSTAINABILITY --- */
.qa-sustainability {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    border-top: 1px solid rgba(11,31,58,0.06);
}
.qa-sustainability-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.qa-sustainability-split {
    display: flex;
    gap: clamp(3rem, 5vw, 6rem);
    align-items: flex-start;
    margin-top: 2.5rem;
}
.qa-sustainability-text {
    flex: 1;
}
.qa-sustainability-text p {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.75;
    font-weight: 400;
    margin: 0 0 1.5rem;
}
.qa-sustainability-text p:last-child { margin-bottom: 0; }
.qa-sustainability-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 1.5rem;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.08);
    border-left: 3px solid var(--gold);
    margin-top: 2rem;
}
.qa-sustainability-badge svg {
    width: 24px; height: 24px;
    color: var(--gold);
    flex-shrink: 0;
}
.qa-sustainability-badge span {
    font-size: 0.9rem;
    font-weight: 600;
    color: #0b1f3a;
    letter-spacing: 0.02em;
}
.qa-sustainability-highlights {
    width: 40%;
    flex-shrink: 0;
}
.qa-sustainability-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    padding: 1.5rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    transition: border-color 0.3s, box-shadow 0.3s;
}
.qa-sustainability-card:last-child { margin-bottom: 0; }
.qa-sustainability-card:hover {
    border-color: var(--gold);
    box-shadow: 0 8px 30px rgba(11,31,58,0.06);
}
.qa-sustainability-card svg {
    width: 28px; height: 28px;
    color: var(--gold);
    flex-shrink: 0;
    margin-top: 2px;
}
.qa-sustainability-card-text h5 {
    font-family: var(--font-body);
    font-size: 0.95rem;
    font-weight: 700;
    color: #0b1f3a;
    margin: 0 0 0.35rem;
}
.qa-sustainability-card-text p {
    font-size: 0.85rem;
    color: var(--text-secondary);
    line-height: 1.5;
    font-weight: 400;
    margin: 0;
}

/* --- DETAILED LAB SECTIONS --- */
.qa-lab-detail {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    border-top: 1px solid rgba(11,31,58,0.06);
}
.qa-lab-detail:nth-child(even) {
    background: var(--bg-secondary);
}
.qa-lab-detail-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.qa-lab-detail-text {
    max-width: 800px;
    margin-bottom: 3rem;
}
.qa-lab-detail-text p {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.75;
    font-weight: 400;
    margin: 0;
}
.qa-capabilities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 1rem;
}
.qa-capability-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    padding: 1.25rem 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.85rem;
    transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
}
.qa-capability-card:hover {
    border-color: var(--gold);
    box-shadow: 0 8px 25px rgba(11,31,58,0.06);
    transform: translateY(-2px);
}
.qa-capability-card svg {
    width: 22px; height: 22px;
    color: var(--gold);
    flex-shrink: 0;
}
.qa-capability-card span {
    font-size: 0.88rem;
    font-weight: 600;
    color: #0b1f3a;
    letter-spacing: 0.01em;
    line-height: 1.3;
}

/* --- SECTION: EXPANDED R&D --- */
.qa-rnd-expanded {
    background: linear-gradient(145deg, #f2e0c8 0%, #e8caa4 45%, #ddb880 100%);
    color: #0b1f3a;
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    position: relative;
    overflow: hidden;
}
.qa-rnd-expanded-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.12) 0%, transparent 55%);
    pointer-events: none;
}
.qa-rnd-expanded-inner {
    position: relative;
    z-index: 1;
    max-width: 1400px;
    margin: 0 auto;
}
.qa-rnd-expanded .qa-bar { background: var(--gold); }
.qa-rnd-expanded .qa-section-eyebrow { color: var(--gold); }
.qa-rnd-expanded .qa-section-heading { color: #0b1f3a; }
.qa-rnd-expanded .qa-section-heading em { font-style: normal; color: var(--gold); }
.qa-rnd-expanded-text {
    max-width: 800px;
    margin-bottom: 3rem;
}
.qa-rnd-expanded-text p {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.75;
    font-weight: 400;
    margin: 0;
}
.qa-focus-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    gap: 1.25rem;
}
.qa-focus-card {
    background: rgba(255,255,255,0.3);
    border: 1px solid rgba(11,31,58,0.08);
    padding: 1.5rem;
    display: flex;
    align-items: flex-start;
    gap: 0.85rem;
    transition: border-color 0.4s, background 0.4s;
}
.qa-focus-card:hover {
    border-color: var(--gold);
    background: rgba(255,255,255,0.5);
}
.qa-focus-card svg {
    width: 22px; height: 22px;
    color: var(--gold);
    flex-shrink: 0;
    margin-top: 2px;
}
.qa-focus-card span {
    font-size: 0.9rem;
    font-weight: 500;
    color: var(--text-primary);
    line-height: 1.4;
}

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .qa-stats-grid { grid-template-columns: repeat(3, 1fr); }
    .qa-split { flex-direction: column; }
    .qa-split-img { width: 100%; }
    .qa-rnd-inner { flex-direction: column; }
    .qa-rnd-left { width: 100%; }
    .qa-rnd-features { grid-template-columns: 1fr 1fr; }
    .qa-sustainability-split { flex-direction: column; }
    .qa-sustainability-highlights { width: 100%; }
}
@media (max-width: 768px) {
    .qa-hero { padding: calc(var(--utility-h) + var(--header-h) + 2rem) 0 8rem; }
    .qa-stats { margin-top: -3rem; }
    .qa-stats-grid { grid-template-columns: 1fr; }
    .qa-labs-grid { grid-template-columns: 1fr; }
    .qa-rnd-features { grid-template-columns: 1fr; }
    .qa-cta-btns { flex-direction: column; align-items: center; }
    .qa-capabilities-grid { grid-template-columns: 1fr 1fr; }
    .qa-focus-grid { grid-template-columns: 1fr; }
}
</style>

<main class="page-quality">

    <!-- ════ HERO ════ -->
    <section class="qa-hero">
        <div class="qa-hero-bg"></div>
        <div class="qa-hero-gradient"></div>
        <div class="qa-hero-grid-overlay"></div>
        <div class="qa-hero-glow"></div>
        <div class="qa-hero-accent"></div>
        <div class="qa-hero-inner">
            <nav class="qa-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Company</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">Quality &amp; R&amp;D</span>
            </nav>
            <div class="qa-hero-badge">QUALITY &amp; R&amp;D</div>
            <h1 class="qa-hero-title">Unmatched Quality<br><em>Precision</em></h1>
            <p class="qa-hero-subtitle">An integrated quality approach spanning rigorous testing, NABL-accredited laboratories, and continuous improvement across every division.</p>
        </div>
    </section>

    <!-- ════ OVERLAPPING STATS ════ -->
    <section class="qa-stats">
        <div class="qa-stats-grid">
            <div class="qa-stat">
                <svg class="qa-stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                <div class="qa-stat-label">NABL Accredited</div>
                <div class="qa-stat-desc">Laboratory Certification</div>
            </div>
            <div class="qa-stat">
                <svg class="qa-stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                </svg>
                <div class="qa-stat-label">ISO/IEC 17025</div>
                <div class="qa-stat-desc">Testing Standard</div>
            </div>
            <div class="qa-stat">
                <svg class="qa-stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                </svg>
                <div class="qa-stat-label">400 kV PGCIL</div>
                <div class="qa-stat-desc">Approved Class</div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 01: QUALITY PHILOSOPHY ════ -->
    <section class="qa-section qa-philosophy">
        <div class="qa-split">
            <div class="qa-split-text">
                <div class="qa-bar"></div>
                <div class="qa-section-eyebrow">01 &mdash; Quality Philosophy</div>
                <h2 class="qa-section-heading">Quality at the Core<br>of Everything We Do</h2>
                <p>At Umang Boards, quality plays a very important role. Our rigorous quality control procedures ensure the production of superior quality products across all divisions.</p>
                <p>Our insulation solutions are manufactured to be free from metal and other impurities. Winding wires are produced free from dust particles, enabling them to attain high BDV values. Our chemical division aims for the highest quality with good solid content values.</p>
                <p>Strict quality control is maintained across all operations, with ongoing refinements driven through continuous feedback. Our continuous improvement process runs from top management to ground level, ensuring every stage of production meets the highest standards.</p>
            </div>
            <div class="qa-split-img">
                <div class="qa-split-img-wrap">
                    <img src="<?php echo $uri; ?>/assets/images/facility-aerial.jpg" alt="Quality testing at Umang Boards laboratory" loading="lazy">
                    <div class="qa-split-img-label">Quality Control</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 02: TESTING LABORATORIES ════ -->
    <section class="qa-labs">
        <div class="qa-labs-inner">
            <div class="qa-bar"></div>
            <div class="qa-section-eyebrow">02 &mdash; Testing Laboratories</div>
            <h2 class="qa-section-heading">Three Dedicated Testing Facilities</h2>

            <div class="qa-labs-grid">
                <!-- Lab 1 -->
                <div class="qa-lab-card" id="insulation-lab">
                    <svg class="qa-lab-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5"/>
                    </svg>
                    <h4>Transformer Insulation Laboratory</h4>
                    <p>Comprehensive mechanical, electrical, and chemical testing of cellulose-based insulation pressboards, crepe papers, and moulded components ensuring defect-free products.</p>
                </div>
                <!-- Lab 2 -->
                <div class="qa-lab-card" id="winding-wire-lab">
                    <svg class="qa-lab-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                    <h4>Winding Wire Laboratory</h4>
                    <p>Precision testing of super enameled and paper covered copper and aluminium wires, ensuring products are free from dust particles and attain high BDV values.</p>
                </div>
                <!-- Lab 3 -->
                <div class="qa-lab-card" id="chemical-lab">
                    <svg class="qa-lab-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19 14.5M14.25 3.104c.251.023.501.05.75.082M19 14.5l-1.434 4.303A2.25 2.25 0 0115.43 20.5H8.57a2.25 2.25 0 01-2.136-1.697L5 14.5m14 0H5"/>
                    </svg>
                    <h4>Chemical Laboratory</h4>
                    <p>Quality analysis of insulating varnishes and chemicals, verifying solid content values, viscosity, and chemical properties to meet the highest quality standards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 03: RESEARCH & DEVELOPMENT ════ -->
    <section class="qa-rnd">
        <div class="qa-rnd-glow"></div>
        <div class="qa-rnd-inner">
            <div class="qa-rnd-left">
                <div class="qa-rnd-bar"></div>
                <div class="qa-rnd-eyebrow">03 &mdash; Research &amp; Development</div>
                <h2 class="qa-rnd-heading">Continuous<br><em>Improvement</em></h2>
            </div>
            <div class="qa-rnd-right">
                <p>Umang Boards operates a fully NABL accredited laboratory for all divisions, equipped with state-of-the-art instruments for complete quality testing with precision and accuracy.</p>
                <p>A variety of quality control tests &mdash; mechanical, electrical, and chemical &mdash; are conducted by a highly qualified technical team that ensures defect-free products reach our customers.</p>
                <p>Our Total Quality Management System incorporates a customer feedback loop, driving continuous improvement across all processes and product lines.</p>

                <div class="qa-rnd-features">
                    <div class="qa-rnd-feat">
                        <svg class="qa-rnd-feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                        <span>NABL accredited laboratory for all divisions</span>
                    </div>
                    <div class="qa-rnd-feat">
                        <svg class="qa-rnd-feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                        <span>Mechanical, electrical &amp; chemical testing</span>
                    </div>
                    <div class="qa-rnd-feat">
                        <svg class="qa-rnd-feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                        <span>Highly qualified technical team</span>
                    </div>
                    <div class="qa-rnd-feat">
                        <svg class="qa-rnd-feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                        <span>Total Quality Management System</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 04: STANDARDS COMPLIANCE ════ -->
    <section class="qa-section qa-standards">
        <div class="qa-bar"></div>
        <div class="qa-section-eyebrow">04 &mdash; Standards &amp; Compliance</div>
        <h2 class="qa-section-heading">Guided by International Standards</h2>
        <p style="font-size:1rem;color:var(--text-secondary);line-height:1.7;font-weight:400;max-width:700px;margin:0 0 2rem;">Our operations strictly follow internationally recognized guidelines and quality frameworks, ensuring every product meets global benchmarks.</p>

        <div class="qa-tags-grid">
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                ISO 9001
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                ISO 14001
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                OHSAS 45001
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                NABL (ISO/IEC 17025)
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                IEC Standards
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                ASTM Standards
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                BIS Standards
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                IEEE Guidelines
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                PGCIL Approved (400 kV)
            </div>
        </div>
    </section>

    <!-- ════ SECTION 05: SUSTAINABILITY ════ -->
    <section class="qa-sustainability">
        <div class="qa-sustainability-inner">
            <div class="qa-bar"></div>
            <div class="qa-section-eyebrow">05 &mdash; Sustainability</div>
            <h2 class="qa-section-heading">Environmental Responsibility<br>Built Into Every Process</h2>

            <div class="qa-sustainability-split">
                <div class="qa-sustainability-text">
                    <p>At Umang Boards Limited, sustainability is integrated into every aspect of our operations. We maintain zero liquid discharge (ZLD) systems, utilize solar energy and biomass fuels, and implement energy-efficient practices across all manufacturing processes.</p>
                    <p>Our commitment to environmental stewardship is reflected in our certified environmental management systems, responsible waste management, and continuous investment in cleaner production technologies.</p>
                    <div class="qa-sustainability-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <span>ISO 14001 Certified Environmental Management</span>
                    </div>
                </div>
                <div class="qa-sustainability-highlights">
                    <div class="qa-sustainability-card">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                        </svg>
                        <div class="qa-sustainability-card-text">
                            <h5>Solar Energy</h5>
                            <p>On-site solar installations powering manufacturing operations</p>
                        </div>
                    </div>
                    <div class="qa-sustainability-card">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3"/>
                        </svg>
                        <div class="qa-sustainability-card-text">
                            <h5>Zero Liquid Discharge</h5>
                            <p>Complete wastewater recycling through advanced ZLD systems</p>
                        </div>
                    </div>
                    <div class="qa-sustainability-card">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"/>
                            <path d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1.001A3.75 3.75 0 0012 18z"/>
                        </svg>
                        <div class="qa-sustainability-card-text">
                            <h5>Biomass Fuels</h5>
                            <p>Renewable biomass energy reducing carbon footprint</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 06: TRANSFORMER INSULATION LABORATORY (DETAIL) ════ -->
    <section class="qa-lab-detail" id="transformer-insulation-lab">
        <div class="qa-lab-detail-inner">
            <div class="qa-bar"></div>
            <div class="qa-section-eyebrow">06 &mdash; Transformer Insulation Laboratory</div>
            <h2 class="qa-section-heading">NABL-Accredited Insulation Testing</h2>
            <div class="qa-lab-detail-text">
                <p>Our NABL-accredited transformer insulation laboratory conducts rigorous mechanical, electrical, and chemical testing on all cellulose-based insulation products. Every batch is validated against international standards including IEC and IS specifications.</p>
            </div>
            <div class="qa-capabilities-grid">
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/></svg>
                    <span>Tensile Strength</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859"/></svg>
                    <span>Compression</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    <span>Dielectric Strength</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5"/></svg>
                    <span>Moisture Content</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19 14.5M14.25 3.104c.251.023.501.05.75.082M19 14.5l-1.434 4.303A2.25 2.25 0 0115.43 20.5H8.57a2.25 2.25 0 01-2.136-1.697L5 14.5m14 0H5"/></svg>
                    <span>Oil Absorption</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z"/></svg>
                    <span>Density</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 07: WINDING WIRE LABORATORY (DETAIL) ════ -->
    <section class="qa-lab-detail" id="winding-wire-lab-detail">
        <div class="qa-lab-detail-inner">
            <div class="qa-bar"></div>
            <div class="qa-section-eyebrow">07 &mdash; Winding Wire Laboratory</div>
            <h2 class="qa-section-heading">Precision Wire Testing Facility</h2>
            <div class="qa-lab-detail-text">
                <p>Our winding wire testing facility ensures every wire product meets stringent quality parameters for conductivity, insulation integrity, and thermal performance.</p>
            </div>
            <div class="qa-capabilities-grid">
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/></svg>
                    <span>Enamel Adhesion</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    <span>Breakdown Voltage</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5.636 5.636a9 9 0 1012.728 0M12 3v9"/></svg>
                    <span>Continuity</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5"/></svg>
                    <span>Dimensional Accuracy</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3"/></svg>
                    <span>Flexibility</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 08: CHEMICAL LABORATORY (DETAIL) ════ -->
    <section class="qa-lab-detail" id="chemical-lab-detail">
        <div class="qa-lab-detail-inner">
            <div class="qa-bar"></div>
            <div class="qa-section-eyebrow">08 &mdash; Chemical Laboratory</div>
            <h2 class="qa-section-heading">Insulating Chemicals Testing</h2>
            <div class="qa-lab-detail-text">
                <p>Our chemical laboratory tests all insulating varnishes, enamels, and resins for dielectric performance, viscosity, cure time, and thermal stability.</p>
            </div>
            <div class="qa-capabilities-grid">
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19 14.5M14.25 3.104c.251.023.501.05.75.082M19 14.5l-1.434 4.303A2.25 2.25 0 0115.43 20.5H8.57a2.25 2.25 0 01-2.136-1.697L5 14.5m14 0H5"/></svg>
                    <span>Viscosity</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>Gel Time</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    <span>Dielectric Strength</span>
                </div>
                <div class="qa-capability-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"/><path d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1.001A3.75 3.75 0 0012 18z"/></svg>
                    <span>Thermal Class Verification</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 09: RESEARCH & DEVELOPMENT (EXPANDED) ════ -->
    <section class="qa-rnd-expanded">
        <div class="qa-rnd-expanded-glow"></div>
        <div class="qa-rnd-expanded-inner">
            <div class="qa-bar"></div>
            <div class="qa-section-eyebrow">09 &mdash; Research &amp; Development</div>
            <h2 class="qa-section-heading">Next-Generation<br><em>Insulation Solutions</em></h2>
            <div class="qa-rnd-expanded-text">
                <p>Our dedicated R&amp;D team works closely with customers to develop next-generation insulation solutions. We invest continuously in product development to anticipate market needs and solve complex technical challenges.</p>
            </div>
            <div class="qa-focus-grid">
                <div class="qa-focus-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    <span>EHV-Grade Materials</span>
                </div>
                <div class="qa-focus-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 10-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m-5.276-6.118a1.875 1.875 0 01-1.948-2.806L8.17 9.122a2.25 2.25 0 00.399-1.267V8.25"/></svg>
                    <span>Sustainable Insulation Alternatives</span>
                </div>
                <div class="qa-focus-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M11.42 15.17l-5.648-3.014a.75.75 0 01-.169-1.236l8.244-7.29a.75.75 0 011.292.553L14.28 11.19l5.648 3.014a.75.75 0 01.169 1.236l-8.244 7.29a.75.75 0 01-1.292-.553l.858-7.008z"/></svg>
                    <span>Process Optimization</span>
                </div>
                <div class="qa-focus-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/></svg>
                    <span>Customer Co-Development</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ CTA ════ -->
    <section class="qa-cta">
        <p>Need quality documentation or certifications?</p>
        <div class="qa-cta-btns">
            <a href="<?php echo home_url('/contact-us'); ?>" class="btn-gold">
                Contact Us
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo home_url('/about-us'); ?>" class="btn-outline">
                About Umang Boards
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
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

    /* Hero */
    fadeUp('.qa-hero-badge', { y: 15, delay: 0.1 });
    fadeUp('.qa-hero-title', { y: 25, delay: 0.2 });
    fadeUp('.qa-hero-subtitle', { y: 20, delay: 0.35 });

    /* Stats */
    gsap.utils.toArray('.qa-stat').forEach(function (stat, i) {
        gsap.fromTo(stat, { opacity: 0, y: 30 }, {
            opacity: 1, y: 0, duration: 0.6, ease: 'expo.out', delay: i * 0.1,
            scrollTrigger: { trigger: '.qa-stats-grid', start: 'top 85%' }
        });
    });

    /* Quality Philosophy */
    fadeUp('.qa-philosophy .qa-bar', { y: 10 });
    fadeUp('.qa-philosophy .qa-section-eyebrow', { y: 10, delay: 0.1 });
    UBL.wipeIn('.qa-philosophy .qa-section-heading', { delay: 0.15 });
    gsap.utils.toArray('.qa-split-text p').forEach(function (p, i) {
        fadeUp(p, { y: 15, delay: 0.2 + i * 0.1 });
    });
    gsap.fromTo('.qa-split-img-wrap', { opacity: 0, y: 40 }, {
        opacity: 1, y: 0, duration: 0.8, ease: 'expo.out',
        scrollTrigger: { trigger: '.qa-split-img-wrap', start: 'top 80%' }
    });

    /* Labs */
    fadeUp('.qa-labs .qa-bar', { y: 10 });
    fadeUp('.qa-labs .qa-section-eyebrow', { y: 10, delay: 0.1 });
    UBL.wipeIn('.qa-labs .qa-section-heading', { delay: 0.15 });
    gsap.utils.toArray('.qa-lab-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 30 }, {
            opacity: 1, y: 0, duration: 0.6, ease: 'expo.out', delay: i * 0.12,
            scrollTrigger: { trigger: card, start: 'top 85%' }
        });
    });

    /* R&D */
    fadeUp('.qa-rnd-bar', { y: 10, start: 'top 80%' });
    fadeUp('.qa-rnd-eyebrow', { y: 10, delay: 0.1, start: 'top 80%' });
    UBL.wipeIn('.qa-rnd-heading', { delay: 0.15, start: 'top 80%' });
    gsap.utils.toArray('.qa-rnd-right p').forEach(function (p, i) {
        fadeUp(p, { y: 15, delay: 0.1 + i * 0.1, start: 'top 80%' });
    });
    gsap.utils.toArray('.qa-rnd-feat').forEach(function (feat, i) {
        fadeUp(feat, { y: 15, delay: i * 0.08, start: 'top 90%' });
    });

    /* Standards */
    fadeUp('.qa-standards .qa-bar', { y: 10 });
    fadeUp('.qa-standards .qa-section-eyebrow', { y: 10, delay: 0.1 });
    UBL.wipeIn('.qa-standards .qa-section-heading', { delay: 0.15 });
    gsap.utils.toArray('.qa-tag').forEach(function (tag, i) {
        gsap.fromTo(tag, { opacity: 0, y: 15 }, {
            opacity: 1, y: 0, duration: 0.4, ease: 'expo.out', delay: i * 0.05,
            scrollTrigger: { trigger: '.qa-tags-grid', start: 'top 85%' }
        });
    });

    /* Sustainability */
    fadeUp('.qa-sustainability .qa-bar', { y: 10 });
    fadeUp('.qa-sustainability .qa-section-eyebrow', { y: 10, delay: 0.1 });
    UBL.wipeIn('.qa-sustainability .qa-section-heading', { delay: 0.15 });
    gsap.utils.toArray('.qa-sustainability-text p').forEach(function (p, i) {
        fadeUp(p, { y: 15, delay: 0.2 + i * 0.1 });
    });
    fadeUp('.qa-sustainability-badge', { y: 15, delay: 0.3 });
    gsap.utils.toArray('.qa-sustainability-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, x: 30 }, {
            opacity: 1, x: 0, duration: 0.6, ease: 'expo.out', delay: i * 0.12,
            scrollTrigger: { trigger: card, start: 'top 88%' }
        });
    });

    /* Detailed Lab Sections */
    gsap.utils.toArray('.qa-lab-detail').forEach(function (section) {
        fadeUp(section.querySelector('.qa-bar'), { y: 10 });
        fadeUp(section.querySelector('.qa-section-eyebrow'), { y: 10, delay: 0.1 });
        var heading = section.querySelector('.qa-section-heading');
        if (heading) gsap.fromTo(heading, { opacity: 0, y: 40, clipPath: 'inset(0 0 100% 0)' }, { opacity: 1, y: 0, clipPath: 'inset(0 0 0% 0)', duration: 1, delay: 0.15, ease: 'power3.out', scrollTrigger: { trigger: heading, start: 'top 75%', once: true } });
        fadeUp(section.querySelector('.qa-lab-detail-text'), { y: 15, delay: 0.2 });
        gsap.utils.toArray(section.querySelectorAll('.qa-capability-card')).forEach(function (card, i) {
            gsap.fromTo(card, { opacity: 0, y: 20 }, {
                opacity: 1, y: 0, duration: 0.5, ease: 'expo.out', delay: i * 0.08,
                scrollTrigger: { trigger: card, start: 'top 90%' }
            });
        });
    });

    /* R&D Expanded */
    fadeUp('.qa-rnd-expanded .qa-bar', { y: 10, start: 'top 80%' });
    fadeUp('.qa-rnd-expanded .qa-section-eyebrow', { y: 10, delay: 0.1, start: 'top 80%' });
    UBL.wipeIn('.qa-rnd-expanded .qa-section-heading', { delay: 0.15, start: 'top 80%' });
    fadeUp('.qa-rnd-expanded-text', { y: 15, delay: 0.25, start: 'top 80%' });
    gsap.utils.toArray('.qa-focus-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 20 }, {
            opacity: 1, y: 0, duration: 0.5, ease: 'expo.out', delay: i * 0.1,
            scrollTrigger: { trigger: card, start: 'top 90%' }
        });
    });

    /* CTA */
    fadeUp('.qa-cta p', { y: 15 });
    fadeUp('.qa-cta-btns', { y: 15, delay: 0.15 });
});
</script>

<?php get_footer(); ?>
