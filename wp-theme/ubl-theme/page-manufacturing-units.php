<?php
/**
 * Template Name: Manufacturing Units
 * Description: Manufacturing facilities page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   MANUFACTURING UNITS PAGE
   ============================================ */

/* --- HERO --- */
.mu-hero {
    position: relative;
    background: #fdf9f4;
    color: #0b1f3a;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 12rem;
    overflow: hidden;
}
.mu-hero-bg {
    position: absolute;
    inset: 0;
    background: url('<?php echo $uri; ?>/assets/images/facility-aerial.jpg') center/cover no-repeat;
    opacity: 0.07;
    mix-blend-mode: luminosity;
}
.mu-hero-gradient {
    position: absolute;
    inset: 0;
    background: none;
}
.mu-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.mu-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.mu-hero-breadcrumb {
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
.mu-hero-breadcrumb a { color: rgba(11,31,58,0.6); text-decoration: none; transition: color 0.3s; }
.mu-hero-breadcrumb a:hover { color: var(--gold); }
.mu-hero-breadcrumb .active { color: var(--gold); }
.mu-hero-breadcrumb svg { width: 12px; height: 12px; }
.mu-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.4rem 1rem;
    background: rgba(11,31,58,0.04);
    border: 1px solid rgba(11,31,58,0.1);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
}
.mu-hero-badge svg { width: 14px; height: 14px; fill: var(--gold); color: var(--gold); }
.mu-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 2rem;
    max-width: 900px;
}
.mu-hero-title em { font-style: normal; color: var(--gold); }
.mu-hero-subtitle {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    color: rgba(11,31,58,0.65);
    max-width: 600px;
    line-height: 1.6;
    font-weight: 300;
}

/* --- OVERLAPPING FEATURE IMAGE --- */
.mu-feature {
    position: relative;
    z-index: 20;
    max-width: 1400px;
    margin: -6rem auto 0;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.mu-feature-img {
    position: relative;
    width: 100%;
    height: clamp(300px, 45vw, 700px);
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    border: 1px solid rgba(255,255,255,0.1);
}
.mu-feature-img img {
    width: 100%; height: 100%; object-fit: cover;
    filter: grayscale(100%);
    transition: filter 1s ease, transform 1s ease;
}
.mu-feature-img:hover img { filter: grayscale(0%); transform: scale(1.02); }
.mu-feature-label {
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

/* --- BADGES STRIP --- */
.mu-badges {
    padding: clamp(2.5rem, 5vh, 3.5rem) clamp(1.5rem, 4vw, 3.5rem);
    background: var(--bg-secondary);
    border-bottom: 1px solid rgba(11,31,58,0.05);
}
.mu-badges-inner {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 0.75rem;
}
.mu-badges-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    padding: 0.5rem 1.15rem;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.1);
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: #0b1f3a;
    white-space: nowrap;
    transition: all 0.35s var(--ease-out-expo);
}
.mu-badges-pill:hover {
    border-color: var(--gold);
    background: rgba(200,168,75,0.06);
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.05);
}
.mu-badges-pill svg {
    width: 14px;
    height: 14px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    flex-shrink: 0;
}

/* --- CORE PRINCIPLES --- */
.mu-principles {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.mu-principles-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 4.5rem);
}
.mu-principles-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.mu-principles-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.mu-principles-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0;
}
.mu-principles-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}
.mu-principles-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    padding: clamp(2rem, 3vw, 2.5rem);
    position: relative;
    overflow: hidden;
    transition: all 0.5s var(--ease-out-expo);
}
.mu-principles-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.5s var(--ease-out-expo);
}
.mu-principles-card:hover {
    border-color: var(--gold);
    transform: translateY(-4px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.07);
}
.mu-principles-card:hover::before { transform: scaleX(1); }
.mu-principles-number {
    font-family: var(--font-body);
    font-size: clamp(2.8rem, 5vw, 3.5rem);
    font-weight: 800;
    color: var(--gold);
    letter-spacing: -0.04em;
    line-height: 1;
    margin-bottom: 1.25rem;
    opacity: 0.85;
}
.mu-principles-icon {
    width: 52px;
    height: 52px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(200,168,75,0.08);
    border-radius: 12px;
    margin-bottom: 1.25rem;
}
.mu-principles-icon svg {
    width: 26px;
    height: 26px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.mu-principles-card-title {
    font-family: var(--font-body);
    font-size: clamp(1.15rem, 1.8vw, 1.35rem);
    font-weight: 700;
    color: #0b1f3a;
    margin: 0 0 0.75rem;
    letter-spacing: -0.01em;
}
.mu-principles-card-desc {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0;
}

/* Learn More expandable */
.mu-principles-expand {
    margin-top: clamp(2rem, 4vh, 3rem);
    text-align: center;
}
.mu-principles-expand-toggle {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: none;
    border: 1px solid rgba(11,31,58,0.12);
    padding: 0.6rem 1.5rem;
    font-family: var(--font-body);
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: #0b1f3a;
    cursor: pointer;
    transition: all 0.35s var(--ease-out-expo);
}
.mu-principles-expand-toggle:hover {
    border-color: var(--gold);
    color: var(--gold);
}
.mu-principles-expand-toggle svg {
    width: 14px;
    height: 14px;
    fill: none;
    stroke: currentColor;
    stroke-width: 2;
    transition: transform 0.35s var(--ease-out-expo);
}
.mu-principles-expand-toggle.active svg {
    transform: rotate(180deg);
}
.mu-principles-expand-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s var(--ease-out-expo), opacity 0.4s ease;
    opacity: 0;
}
.mu-principles-expand-content.open {
    max-height: 300px;
    opacity: 1;
}
.mu-principles-expand-text {
    max-width: 860px;
    margin: 1.5rem auto 0;
    padding: 1.5rem 2rem;
    background: var(--bg-secondary);
    border-left: 3px solid var(--gold);
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.75;
    font-weight: 300;
    text-align: left;
}

/* --- FACILITY OVERVIEW --- */
.mu-overview {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.mu-overview-layout {
    display: flex;
    gap: clamp(3rem, 6vw, 6rem);
    align-items: flex-start;
}
.mu-overview-left {
    width: 33%;
    flex-shrink: 0;
}
.mu-overview-bar {
    width: 3px;
    height: 3rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.mu-overview-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.mu-overview-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
}
.mu-overview-right {
    flex: 1;
    padding-top: 0.5rem;
}
.mu-overview-text {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0 0 1.5rem;
}
.mu-overview-text:last-child { margin-bottom: 0; }

/* --- STATS --- */
.mu-stats {
    background: var(--bg-secondary);
    padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
}
.mu-stats-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.mu-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}
.mu-stat-card {
    text-align: center;
    padding: clamp(2rem, 4vw, 3rem) 1.5rem;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    transition: all 0.5s var(--ease-out-expo);
}
.mu-stat-card:hover {
    border-color: var(--gold);
    transform: translateY(-2px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.06);
}
.mu-stat-icon {
    width: 56px;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(55,110,180,0.06);
    border-radius: 12px;
    margin: 0 auto 1.25rem;
}
.mu-stat-icon svg {
    width: 28px;
    height: 28px;
    fill: none;
    stroke: #0b1f3a;
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.mu-stat-number {
    font-family: var(--font-body);
    font-size: clamp(1.8rem, 3.5vw, 2.5rem);
    font-weight: 800;
    color: #0b1f3a;
    letter-spacing: -0.03em;
    line-height: 1;
    margin-bottom: 0.5rem;
}
.mu-stat-number span { color: var(--gold); }
.mu-stat-label {
    font-size: 0.85rem;
    font-weight: 500;
    color: var(--text-muted);
    line-height: 1.4;
}

/* --- KEY FEATURES --- */
.mu-features {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.mu-features-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 5rem);
}
.mu-features-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.mu-features-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.mu-features-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0 0 1rem;
}
.mu-features-subtitle {
    font-size: 1.1rem;
    color: var(--text-muted);
    font-weight: 300;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}
.mu-features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}
.mu-fcard {
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    padding: clamp(2rem, 3vw, 2.5rem);
    transition: all 0.5s var(--ease-out-expo);
    position: relative;
    overflow: hidden;
}
.mu-fcard::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s var(--ease-out-expo);
}
.mu-fcard:hover {
    border-color: var(--gold);
    transform: translateY(-4px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}
.mu-fcard:hover::before { transform: scaleX(1); }
.mu-fcard-icon {
    width: 56px;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(200,168,75,0.1);
    border-radius: 12px;
    margin-bottom: 1.5rem;
}
.mu-fcard-icon svg {
    width: 28px;
    height: 28px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.mu-fcard-title {
    font-family: var(--font-body);
    font-size: clamp(1.2rem, 2vw, 1.4rem);
    font-weight: 700;
    color: #0b1f3a;
    margin: 0 0 0.75rem;
    letter-spacing: -0.01em;
}
.mu-fcard-desc {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0;
}

/* --- LOCATION --- */
.mu-location {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.mu-location-inner {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: clamp(3rem, 6vw, 5rem);
    align-items: center;
}
.mu-location-content {}
.mu-location-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.mu-location-title {
    font-family: var(--font-body);
    font-size: clamp(1.6rem, 3vw, 2.4rem);
    font-weight: 700;
    color: var(--text-primary);
    letter-spacing: -0.02em;
    line-height: 1.15;
    margin: 0 0 1.5rem;
}
.mu-location-text {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0 0 1.5rem;
}
.mu-location-address {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    padding: 1.25rem;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    margin-top: 1.5rem;
}
.mu-location-address svg {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
    fill: none;
    stroke: var(--gold);
    stroke-width: 2;
    margin-top: 2px;
}
.mu-location-address-text {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.6;
}
.mu-location-address-text strong {
    display: block;
    color: var(--text-primary);
    font-weight: 700;
    margin-bottom: 0.25rem;
}
.mu-location-map {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.mu-location-map iframe {
    width: 100%;
    height: 100%;
    border: 0;
}

/* --- CTA — Two-column with parallax image --- */
.mu-cta {
    position: relative;
    overflow: hidden;
    z-index: 2;
}
.mu-cta-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 480px;
}
.mu-cta-content {
    background: linear-gradient(145deg, #f2e0c8 0%, #e8caa4 45%, #ddb880 100%);
    padding: clamp(4rem, 6vh, 6rem) clamp(2rem, 4vw, 4rem);
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
}
.mu-cta-eyebrow {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.18em;
    color: rgba(11,31,58,0.5);
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}
.mu-cta-eyebrow::before {
    content: '';
    width: 28px;
    height: 2px;
    background: var(--gold);
    flex-shrink: 0;
}
.mu-cta-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: #0b1f3a;
    letter-spacing: -0.02em;
    line-height: 1.1;
    margin-bottom: 1.25rem;
}
.mu-cta-title em {
    font-style: normal;
    color: var(--gold);
}
.mu-cta-subtitle {
    font-size: 1rem;
    color: rgba(11,31,58,0.75);
    line-height: 1.7;
    margin-bottom: 2.5rem;
    max-width: 440px;
    font-weight: 400;
}
.mu-cta-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}
.mu-cta-image {
    position: relative;
    overflow: hidden;
}
.mu-cta-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform 1.2s ease;
}
.mu-cta:hover .mu-cta-image img {
    transform: scale(1.04);
}
.mu-cta-image-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(242,224,200,0.4) 0%, transparent 40%);
    pointer-events: none;
}
@media (max-width: 768px) {
    .mu-cta-grid { grid-template-columns: 1fr; }
    .mu-cta-image { height: 280px; order: -1; }
}

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .mu-overview-layout { flex-direction: column; }
    .mu-overview-left { width: 100%; }
    .mu-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .mu-features-grid { grid-template-columns: repeat(2, 1fr); }
    .mu-principles-grid { grid-template-columns: repeat(2, 1fr); }
    .mu-location-inner { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    .mu-hero { padding: calc(var(--utility-h) + var(--header-h) + 2rem) 0 8rem; }
    .mu-feature { margin-top: -4rem; }
    .mu-feature-img { height: clamp(200px, 50vw, 400px); }
    .mu-stats-grid { grid-template-columns: 1fr 1fr; }
    .mu-features-grid { grid-template-columns: 1fr; }
    .mu-principles-grid { grid-template-columns: 1fr; }
    .mu-badges-inner { gap: 0.5rem; }
    .mu-badges-pill { font-size: 0.65rem; padding: 0.4rem 0.9rem; }
    .mu-principles-expand-text { padding: 1.25rem 1.25rem; }
    .mu-location-map { height: 300px; }
}
@media (max-width: 480px) {
    .mu-stats-grid { grid-template-columns: 1fr; }
}
</style>

<main class="page-manufacturing-units">

    <!-- ════ HERO ════ -->
    <section class="mu-hero">
        <div class="mu-hero-bg"></div>
        <div class="mu-hero-gradient"></div>
        <div class="mu-hero-glow"></div>
        <div class="mu-hero-inner">
            <nav class="mu-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Company</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">Manufacturing Units</span>
            </nav>
            <div class="mu-hero-badge">
                <svg viewBox="0 0 24 24"><path d="M2 20h20M4 20V8l8-6 8 6v12M9 20v-6h6v6"/></svg>
                Our Facilities
            </div>
            <h1 class="mu-hero-title">From Vision to Reality:<br><em>Manufacturing</em> at Global Standards</h1>
            <p class="mu-hero-subtitle">Strategically designed facilities delivering exceptional manufacturing capabilities — featuring state-of-the-art automated production lines, energy-efficient sustainable systems, and world-class engineering teams.</p>
        </div>
    </section>

    <!-- ════ OVERLAPPING IMAGE ════ -->
    <section class="mu-feature">
        <div class="mu-feature-img">
            <img src="<?php echo $uri; ?>/assets/images/facility-aerial.jpg" alt="Umang Boards manufacturing facility aerial view" loading="eager">
            <div class="mu-feature-label">RIICO Industrial Area, Mansarovar, Jaipur</div>
        </div>
    </section>

    <!-- ════ HIGHLIGHTER BADGES ════ -->
    <section class="mu-badges">
        <div class="mu-badges-inner">
            <span class="mu-badges-pill">
                <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4"/><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
                ISO Certified
            </span>
            <span class="mu-badges-pill">
                <svg viewBox="0 0 24 24"><path d="M9 3h6v11l-3 3-3-3V3z"/><path d="M6 21h12"/><path d="M12 17v4"/></svg>
                NABL Accredited
            </span>
            <span class="mu-badges-pill">
                <svg viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4-4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                500+ Workers
            </span>
            <span class="mu-badges-pill">
                <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                525 KV Class Compliant
            </span>
            <span class="mu-badges-pill">
                <svg viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14v7"/><path d="M3 9v7l9 5 9-5V9"/></svg>
                Qualified Team
            </span>
            <span class="mu-badges-pill">
                <svg viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
                State of the Art Manufacturing
            </span>
            <span class="mu-badges-pill">
                <svg viewBox="0 0 24 24"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><path d="M4 22v-7"/></svg>
                MAKE IN INDIA
            </span>
        </div>
    </section>


    <!-- ════ CORE PRINCIPLES ════ -->
    <section class="mu-principles">
        <div class="mu-principles-header">
            <div class="mu-principles-bar"></div>
            <div class="mu-principles-eyebrow">Our Philosophy</div>
            <h2 class="mu-principles-title">Three Core Principles</h2>
        </div>

        <div class="mu-principles-grid">
            <div class="mu-principles-card">
                <div class="mu-principles-number">01</div>
                <div class="mu-principles-icon">
                    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
                </div>
                <h3 class="mu-principles-card-title">Precision Engineering</h3>
                <p class="mu-principles-card-desc">Every product manufactured to exacting international standards with tolerances measured in fractions of millimeters.</p>
            </div>
            <div class="mu-principles-card">
                <div class="mu-principles-number">02</div>
                <div class="mu-principles-icon">
                    <svg viewBox="0 0 24 24"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
                </div>
                <h3 class="mu-principles-card-title">Scalable Excellence</h3>
                <p class="mu-principles-card-desc">Flexible production capabilities that grow with market demands while maintaining uncompromising quality standards.</p>
            </div>
            <div class="mu-principles-card">
                <div class="mu-principles-number">03</div>
                <div class="mu-principles-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="M7 12l3-8M14 12l3-8M7.5 20L10 12M14.5 20L17 12"/></svg>
                </div>
                <h3 class="mu-principles-card-title">Sustainable Innovation</h3>
                <p class="mu-principles-card-desc">Environmental responsibility integrated into every process, from energy-efficient systems to zero-waste initiatives.</p>
            </div>
        </div>

        <div class="mu-principles-expand">
            <button class="mu-principles-expand-toggle" aria-expanded="false" onclick="this.classList.toggle('active');this.setAttribute('aria-expanded',this.classList.contains('active'));this.nextElementSibling.classList.toggle('open');">
                Learn More
                <svg viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="mu-principles-expand-content">
                <p class="mu-principles-expand-text">Our manufacturing approach combines traditional engineering expertise with cutting-edge technology. We employ statistical process control, real-time monitoring, and predictive maintenance to ensure consistent output quality. Every operator undergoes extensive training, and every process is validated against international standards.</p>
            </div>
        </div>
    </section>



    <!-- ════ LOCATION ════ -->
    <section class="mu-location">
        <div class="mu-location-inner">
            <div class="mu-location-content">
                <div class="mu-location-eyebrow">Location</div>
                <h2 class="mu-location-title">Strategically Located in Jaipur</h2>
                <p class="mu-location-text">Our manufacturing facilities span two strategic locations — Unit I at RIICO Industrial Area, Mansarovar, Jaipur for insulation products, and Unit II at Kaladera, Jaipur for winding wires and chemicals. Both feature state-of-the-art machinery sourced from leading global manufacturers.</p>
                <p class="mu-location-text">The locations provide seamless access to national highways, rail networks, and air freight, enabling efficient supply chain management for both domestic and international customers across 15+ countries.</p>
                <div class="mu-location-address">
                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <div class="mu-location-address-text">
                        <strong>Umang Boards Limited</strong>
                        SP-30/A, RIICO Industrial Area,<br>
                        Mansarovar, Jaipur - 302020,<br>
                        Rajasthan, India
                    </div>
                </div>
            </div>
            <div class="mu-location-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.8!2d75.76!3d26.87!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDUyJzEyLjAiTiA3NcKwNDUnMzYuMCJF!5e0!3m2!1sen!2sin!4v1" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Umang Boards Limited factory location"></iframe>
            </div>
        </div>
    </section>

    <!-- ════ CTA ════ -->
    <section class="mu-cta">
        <div class="mu-cta-grid">
            <div class="mu-cta-content">
                <div class="mu-cta-eyebrow">Get in Touch</div>
                <h2 class="mu-cta-title">Visit Our<br>Manufacturing <em>Facility</em></h2>
                <p class="mu-cta-subtitle">Interested in a factory tour or want to learn more about our manufacturing capabilities? Our team is ready to walk you through our production lines, quality labs, and testing infrastructure.</p>
                <div class="mu-cta-actions">
                    <a href="<?php echo home_url('/contact-us'); ?>" class="btn-gold">
                        Schedule a Visit
                        <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="<?php echo home_url('/contact-us'); ?>" class="btn-outline">
                        Contact Sales
                        <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
            <div class="mu-cta-image">
                <img src="<?php echo $uri; ?>/assets/images/facility-aerial.jpg" alt="Umang Boards Manufacturing Facility — Jaipur, Rajasthan">
                <div class="mu-cta-image-overlay"></div>
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

    fadeUp('.mu-hero-badge', { y: 15, delay: 0.1 });
    fadeUp('.mu-hero-title', { y: 25, delay: 0.2 });
    fadeUp('.mu-hero-subtitle', { y: 20, delay: 0.35 });

    gsap.fromTo('.mu-feature-img', { opacity: 0, y: 40 }, {
        opacity: 1, y: 0, duration: 0.8, ease: 'expo.out',
        scrollTrigger: { trigger: '.mu-feature', start: 'top 80%' }
    });

    /* Badges strip */
    gsap.utils.toArray('.mu-badges-pill').forEach(function (pill, i) {
        gsap.fromTo(pill, { opacity: 0, y: 15 }, {
            opacity: 1, y: 0, duration: 0.5, ease: 'expo.out', delay: i * 0.06,
            scrollTrigger: { trigger: '.mu-badges', start: 'top 88%' }
        });
    });

    /* Core Principles */
    fadeUp('.mu-principles-bar', { y: 10, start: 'top 80%' });
    fadeUp('.mu-principles-eyebrow', { y: 10, delay: 0.1, start: 'top 80%' });
    fadeUp('.mu-principles-title', { y: 20, delay: 0.15, start: 'top 80%' });
    gsap.utils.toArray('.mu-principles-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 40 }, {
            opacity: 1, y: 0, duration: 0.7, ease: 'expo.out', delay: i * 0.12,
            scrollTrigger: { trigger: card, start: 'top 88%' }
        });
    });
    fadeUp('.mu-principles-expand', { y: 15, delay: 0.3 });

    gsap.from('.mu-location-content', {
        scrollTrigger: { trigger: '.mu-location', start: 'top 75%', once: true },
        opacity: 0, x: -30, duration: 0.8, ease: 'power3.out'
    });
    gsap.from('.mu-location-map', {
        scrollTrigger: { trigger: '.mu-location', start: 'top 75%', once: true },
        opacity: 0, x: 30, duration: 0.8, delay: 0.15, ease: 'power3.out'
    });

    fadeUp('.mu-cta-title', { y: 15 });
    fadeUp('.mu-cta-subtitle', { y: 15, delay: 0.1 });
    fadeUp('.mu-cta .btn-gold', { y: 15, delay: 0.2 });
});
</script>

<?php get_footer(); ?>
