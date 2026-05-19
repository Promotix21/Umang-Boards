<?php
/**
 * Template Name: Newsroom
 * Description: Newsroom / Press Releases landing page
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   NEWSROOM — Press Releases & Media
   ============================================ */

/* --- HERO --- */
.nr-hero {
    position: relative;
    background: #fdf9f4;
    color: #0b1f3a;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 6rem;
    overflow: hidden;
}
.nr-hero-gradient {
    position: absolute;
    inset: 0;
    background: none;
}
.nr-hero-accent {
    position: absolute;
    left: clamp(1.5rem, 4vw, 3.5rem);
    top: calc(var(--utility-h) + var(--header-h) + 2rem);
    bottom: 2rem;
    width: 4px;
    background: linear-gradient(to bottom, var(--gold), rgba(212,168,67,0.2));
    z-index: 1;
}
.nr-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.nr-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.nr-hero-breadcrumb {
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
.nr-hero-breadcrumb a { color: rgba(11,31,58,0.6); text-decoration: none; transition: color 0.3s; }
.nr-hero-breadcrumb a:hover { color: var(--gold); }
.nr-hero-breadcrumb .active { color: var(--gold); }
.nr-hero-breadcrumb svg { width: 12px; height: 12px; }
.nr-hero-badge {
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
.nr-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 1.5rem;
}
.nr-hero-title em { font-style: normal; color: var(--gold); }
.nr-hero-subtitle {
    font-size: clamp(1rem, 1.5vw, 1.25rem);
    color: var(--text-secondary);
    line-height: 1.65;
    font-weight: 400;
    max-width: 640px;
}

/* --- FEATURED NEWS --- */
.nr-featured {
    padding: 5rem 0 3rem;
    background: var(--bg-primary);
}
.nr-wrap {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.nr-section-eyebrow {
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1rem;
}
.nr-section-title {
    font-size: clamp(1.8rem, 3.5vw, 2.5rem);
    font-weight: 700;
    color: var(--text-primary);
    letter-spacing: -0.02em;
    margin-bottom: 3rem;
}
.nr-featured-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.4s var(--ease-out-expo);
}
.nr-featured-card:hover {
    box-shadow: 0 20px 50px rgba(11,31,58,0.1);
    border-color: rgba(212,168,67,0.3);
}
.nr-featured-img {
    width: 100%;
    height: 100%;
    min-height: 360px;
    object-fit: cover;
}
.nr-featured-body {
    padding: clamp(2rem, 4vw, 3.5rem);
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.nr-featured-tag {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 0.75rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.12em;
    margin-bottom: 1rem;
}
.nr-featured-tag svg { width: 14px; height: 14px; }
.nr-featured-title {
    font-size: clamp(1.5rem, 2.5vw, 2rem);
    font-weight: 700;
    color: var(--text-primary);
    line-height: 1.25;
    letter-spacing: -0.02em;
    margin-bottom: 1rem;
}
.nr-featured-excerpt {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin-bottom: 2rem;
}
.nr-featured-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 0.8rem;
    color: var(--text-muted);
}
.nr-featured-meta-tag {
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    padding: 0.25rem 0.6rem;
    background: rgba(11,31,58,0.06);
    border-radius: 4px;
    font-weight: 600;
    color: #0b1f3a;
    font-size: 0.72rem;
    text-transform: uppercase;
    letter-spacing: 0.06em;
}

/* --- NEWS GRID --- */
.nr-grid-section {
    padding: 3rem 0 5rem;
    background: var(--bg-primary);
}
.nr-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
}
.nr-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 8px;
    overflow: hidden;
    transition: all 0.4s var(--ease-out-expo);
}
.nr-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(11,31,58,0.08);
    border-color: rgba(212,168,67,0.3);
}
.nr-card-img {
    width: 100%;
    aspect-ratio: 16/9;
    object-fit: cover;
}
.nr-card-body { padding: 1.5rem; }
.nr-card-date {
    font-size: 0.75rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.12em;
    margin-bottom: 0.75rem;
}
.nr-card-title {
    font-size: 1.15rem;
    font-weight: 700;
    color: #0b1f3a;
    line-height: 1.3;
    margin-bottom: 0.75rem;
}
.nr-card-excerpt {
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.65;
    font-weight: 400;
    margin-bottom: 1.25rem;
}
.nr-card-link {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 0.8rem;
    font-weight: 700;
    color: #0b1f3a;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    transition: color 0.3s;
    border-bottom: 2px solid var(--gold);
    padding-bottom: 2px;
}
.nr-card-link svg { width: 14px; height: 14px; transition: transform 0.3s var(--ease-out-expo); }
.nr-card-link:hover { color: var(--gold); }
.nr-card-link:hover svg { transform: translateX(4px); }

/* --- MEDIA RESOURCES --- */
.nr-media {
    padding: 5rem 0;
    background: var(--bg-secondary);
}
.nr-media-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}
.nr-media-card {
    display: flex;
    align-items: center;
    gap: 1.25rem;
    padding: 1.5rem;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s var(--ease-out-expo);
}
.nr-media-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 24px rgba(11,31,58,0.06);
    border-color: rgba(212,168,67,0.3);
}
.nr-media-icon {
    flex-shrink: 0;
    width: 52px;
    height: 52px;
    border-radius: 10px;
    background: rgba(11,31,58,0.06);
    display: flex;
    align-items: center;
    justify-content: center;
}
.nr-media-icon svg { width: 24px; height: 24px; color: #0b1f3a; }
.nr-media-info { flex: 1; }
.nr-media-name {
    font-size: 0.95rem;
    font-weight: 700;
    color: #0b1f3a;
    margin-bottom: 0.2rem;
}
.nr-media-detail {
    font-size: 0.78rem;
    color: var(--text-muted);
    font-weight: 400;
}

/* --- MEDIA KIT BANNER --- */
.nr-media-banner {
    padding: 5rem 0;
    background: linear-gradient(145deg, #f2e0c8 0%, #e8caa4 45%, #ddb880 100%);
    position: relative;
    overflow: hidden;
}
.nr-media-banner::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 80% 50%, rgba(200,168,75,0.15) 0%, transparent 55%);
    pointer-events: none;
}
.nr-media-banner-inner {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
    flex-wrap: wrap;
}
.nr-media-banner-content { max-width: 640px; }
.nr-media-banner-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.nr-media-banner-eyebrow svg { width: 16px; height: 16px; }
.nr-media-banner-title {
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700;
    color: #0b1f3a;
    line-height: 1.2;
    letter-spacing: -0.02em;
    margin-bottom: 1rem;
}
.nr-media-banner-desc {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
}

/* --- EVENTS SECTION --- */
.nr-events {
    padding: 5rem 0;
    background: var(--bg-secondary);
}
.nr-events-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}
.nr-event-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.4s var(--ease-out-expo);
}
.nr-event-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(11,31,58,0.08);
    border-color: rgba(212,168,67,0.3);
}
.nr-event-date-banner {
    background: #f8f9fb;
    padding: 1.25rem 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    border-bottom: 1px solid rgba(11,31,58,0.06);
}
.nr-event-date-badge {
    width: 60px;
    height: 60px;
    background: var(--gold);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.nr-event-date-day {
    font-size: 1.5rem;
    font-weight: 800;
    color: #0b1f3a;
    line-height: 1;
}
.nr-event-date-month {
    font-size: 0.65rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: #0b1f3a;
    line-height: 1;
    margin-top: 2px;
}
.nr-event-date-info {
    flex: 1;
}
.nr-event-date-label {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: rgba(11,31,58,0.4);
    margin-bottom: 0.25rem;
}
.nr-event-date-range {
    font-size: 0.95rem;
    font-weight: 600;
    color: #0b1f3a;
}
.nr-event-body {
    padding: 1.5rem;
}
.nr-event-type {
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: var(--gold);
    margin-bottom: 0.75rem;
}
.nr-event-type svg { width: 12px; height: 12px; }
.nr-event-title {
    font-size: 1.1rem;
    font-weight: 700;
    color: #0b1f3a;
    line-height: 1.3;
    margin-bottom: 0.75rem;
}
.nr-event-location {
    display: flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 0.85rem;
    color: var(--text-muted);
    font-weight: 400;
}
.nr-event-location svg { width: 14px; height: 14px; flex-shrink: 0; }
.nr-event-status {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    margin-top: 1rem;
    padding: 0.3rem 0.9rem;
    border-radius: 100px;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
}
.nr-event-status--upcoming {
    background: rgba(212,168,67,0.12);
    color: var(--gold-dark);
}
.nr-event-status--past {
    background: rgba(11,31,58,0.06);
    color: var(--text-muted);
}

/* --- PRESS RELEASES SECTION --- */
.nr-press-releases {
    padding: 5rem 0;
    background: var(--bg-primary);
}
.nr-pr-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}
.nr-pr-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 12px;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    transition: all 0.4s var(--ease-out-expo);
    position: relative;
}
.nr-pr-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(11,31,58,0.08);
    border-color: rgba(212,168,67,0.3);
}
.nr-pr-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--gold);
    border-radius: 12px 12px 0 0;
    opacity: 0;
    transition: opacity 0.3s;
}
.nr-pr-card:hover::before { opacity: 1; }
.nr-pr-date {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.78rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 1rem;
}
.nr-pr-date svg { width: 14px; height: 14px; }
.nr-pr-title {
    font-size: 1.15rem;
    font-weight: 700;
    color: #0b1f3a;
    line-height: 1.35;
    margin-bottom: 0.75rem;
}
.nr-pr-excerpt {
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.65;
    font-weight: 400;
    margin-bottom: 1.5rem;
    flex: 1;
}
.nr-pr-link {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 0.8rem;
    font-weight: 700;
    color: #0b1f3a;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    transition: color 0.3s;
    border-bottom: 2px solid var(--gold);
    padding-bottom: 2px;
    align-self: flex-start;
}
.nr-pr-link svg { width: 14px; height: 14px; transition: transform 0.3s var(--ease-out-expo); }
.nr-pr-link:hover { color: var(--gold); }
.nr-pr-link:hover svg { transform: translateX(4px); }

/* --- RESPONSIVE ADDITIONS --- */
@media (max-width: 900px) {
    .nr-events-grid { grid-template-columns: 1fr; }
    .nr-pr-grid { grid-template-columns: 1fr; }
    .nr-media-banner-inner { flex-direction: column; text-align: center; align-items: center; }
}
@media (max-width: 600px) {
    .nr-media-banner { padding: 3rem 0; }
    .nr-events { padding: 3rem 0; }
    .nr-press-releases { padding: 3rem 0; }
}

/* --- PRESS CONTACT --- */
.nr-contact {
    padding: 5rem 0;
    background: var(--bg-primary);
}
.nr-contact-card {
    max-width: 700px;
    padding: 2.5rem;
    border: 1px solid rgba(11,31,58,0.08);
    border-radius: 12px;
    background: #fff;
}
.nr-contact-heading {
    font-size: 1.25rem;
    font-weight: 700;
    color: #0b1f3a;
    margin-bottom: 0.5rem;
}
.nr-contact-subtitle {
    font-size: 0.95rem;
    color: var(--text-muted);
    line-height: 1.6;
    margin-bottom: 2rem;
}
.nr-contact-rows { display: flex; flex-direction: column; gap: 1.25rem; }
.nr-contact-row {
    display: flex;
    align-items: center;
    gap: 1rem;
}
.nr-contact-row-icon {
    width: 42px;
    height: 42px;
    border-radius: 10px;
    background: rgba(11,31,58,0.06);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.nr-contact-row-icon svg { width: 18px; height: 18px; color: #0b1f3a; }
.nr-contact-row-label {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: var(--text-muted);
    margin-bottom: 0.15rem;
}
.nr-contact-row-value {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-primary);
}
.nr-contact-row-value a {
    color: #0b1f3a;
    text-decoration: none;
    transition: color 0.3s;
}
.nr-contact-row-value a:hover { color: var(--gold); }

/* --- RESPONSIVE --- */
@media (max-width: 900px) {
    .nr-featured-card { grid-template-columns: 1fr; }
    .nr-featured-img { min-height: 240px; }
    .nr-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
    .nr-hero { padding: calc(var(--utility-h) + var(--header-h) + 2.5rem) 0 3.5rem; }
    .nr-featured { padding: 3rem 0 2rem; }
    .nr-grid-section { padding: 2rem 0 3rem; }
    .nr-media { padding: 3rem 0; }
    .nr-contact { padding: 3rem 0; }
    .nr-contact-card { padding: 1.5rem; }
}
</style>

<main class="page-newsroom">

    <!-- ═══════════ HERO ═══════════ -->
    <section class="nr-hero">
        <div class="nr-hero-gradient"></div>
        <div class="nr-hero-glow"></div>
        <div class="nr-hero-accent"></div>
        <div class="nr-hero-inner">
            <nav class="nr-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="/">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                <span class="active">Newsroom</span>
            </nav>
            <div class="nr-hero-badge">Media &amp; Press</div>
            <h1 class="nr-hero-title">News<em>room</em></h1>
            <p class="nr-hero-subtitle">Latest news, announcements, and press releases from Umang Boards Limited.</p>
        </div>
    </section>

    <!-- ═══════════ FEATURED NEWS ═══════════ -->
    <section class="nr-featured">
        <div class="nr-wrap">
            <div class="nr-section-eyebrow">Featured</div>
            <h2 class="nr-section-title">Latest Announcement</h2>

            <div class="nr-featured-card">
                <img class="nr-featured-img" src="<?php echo $uri; ?>/assets/images/news-pgcil-approval.jpg" alt="PGCIL 400 kV Approval" loading="lazy">
                <div class="nr-featured-body">
                    <div class="nr-featured-tag">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        Milestone
                    </div>
                    <h3 class="nr-featured-title">PGCIL Approval for 400 kV Class Insulation</h3>
                    <p class="nr-featured-excerpt">Umang Boards receives PGCIL approval for cellulose insulation pressboards up to 400 kV voltage class, enabling supply to India's largest power transmission projects.</p>
                    <div class="nr-featured-meta">
                        <span class="nr-featured-meta-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:12px;height:12px;"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            Certification
                        </span>
                        <span>Power Grid Corporation of India Ltd.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════ NEWS GRID ═══════════ -->
    <section class="nr-grid-section">
        <div class="nr-wrap">
            <div class="nr-section-eyebrow">Press Releases</div>
            <h2 class="nr-section-title">Company News</h2>

            <div class="nr-grid">

                <!-- Card: CRISIL SME Rating -->
                <article class="nr-card">
                    <img class="nr-card-img" src="<?php echo $uri; ?>/assets/images/news-crisil-rating.jpg" alt="CRISIL SME Rating" loading="lazy">
                    <div class="nr-card-body">
                        <div class="nr-card-date">Recognition</div>
                        <h3 class="nr-card-title">CRISIL SME Rating</h3>
                        <p class="nr-card-excerpt">Umang Boards Limited has been rated by CRISIL for its credit standing and business performance in the SME category.</p>
                        <span class="nr-card-link">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </article>

                <!-- Card: Star Export House -->
                <article class="nr-card">
                    <img class="nr-card-img" src="<?php echo $uri; ?>/assets/images/news-export-house.jpg" alt="Star Export House Recognition" loading="lazy">
                    <div class="nr-card-body">
                        <div class="nr-card-date">Achievement</div>
                        <h3 class="nr-card-title">Star Export House</h3>
                        <p class="nr-card-excerpt">Recognized as a Star Export House by the Government of India for consistent export performance across international markets.</p>
                        <span class="nr-card-link">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ═══════════ MEDIA KIT BANNER ═══════════ -->
    <section class="nr-media-banner">
        <div class="nr-wrap nr-media-banner-inner">
            <div class="nr-media-banner-content">
                <div class="nr-media-banner-eyebrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                    Media Kit
                </div>
                <h2 class="nr-media-banner-title">Press Assets &amp; Media Resources</h2>
                <p class="nr-media-banner-desc">For media inquiries and press assets, contact our communications team. We provide logos, facility photography, executive headshots, and corporate fact sheets for editorial use.</p>
            </div>
            <a href="/contact-us" class="btn-gold">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Contact Us
            </a>
        </div>
    </section>

    <!-- ═══════════ EVENTS ═══════════ -->
    <section class="nr-events">
        <div class="nr-wrap">
            <div class="nr-section-eyebrow">Events</div>
            <h2 class="nr-section-title">Industry Events &amp; Exhibitions</h2>

            <div class="nr-events-grid">

                <!-- Event 1 -->
                <article class="nr-event-card">
                    <div class="nr-event-date-banner">
                        <div class="nr-event-date-badge">
                            <span class="nr-event-date-day">15</span>
                            <span class="nr-event-date-month">May</span>
                        </div>
                        <div class="nr-event-date-info">
                            <div class="nr-event-date-label">Date</div>
                            <div class="nr-event-date-range">15 &ndash; 18 May 2026</div>
                        </div>
                    </div>
                    <div class="nr-event-body">
                        <div class="nr-event-type">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            Exhibition
                        </div>
                        <h3 class="nr-event-title">ELECRAMA 2026 &mdash; International Electrical Equipment Exhibition</h3>
                        <div class="nr-event-location">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            India Expo Centre, Greater Noida, India
                        </div>
                        <span class="nr-event-status nr-event-status--upcoming">Upcoming</span>
                    </div>
                </article>

                <!-- Event 2 -->
                <article class="nr-event-card">
                    <div class="nr-event-date-banner">
                        <div class="nr-event-date-badge">
                            <span class="nr-event-date-day">08</span>
                            <span class="nr-event-date-month">Sep</span>
                        </div>
                        <div class="nr-event-date-info">
                            <div class="nr-event-date-label">Date</div>
                            <div class="nr-event-date-range">08 &ndash; 10 Sep 2026</div>
                        </div>
                    </div>
                    <div class="nr-event-body">
                        <div class="nr-event-type">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            Trade Fair
                        </div>
                        <h3 class="nr-event-title">Power &amp; Energy Africa &mdash; International Trade Exhibition</h3>
                        <div class="nr-event-location">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Kenyatta International Convention Centre, Nairobi
                        </div>
                        <span class="nr-event-status nr-event-status--upcoming">Upcoming</span>
                    </div>
                </article>

                <!-- Event 3 -->
                <article class="nr-event-card">
                    <div class="nr-event-date-banner">
                        <div class="nr-event-date-badge">
                            <span class="nr-event-date-day">22</span>
                            <span class="nr-event-date-month">Nov</span>
                        </div>
                        <div class="nr-event-date-info">
                            <div class="nr-event-date-label">Date</div>
                            <div class="nr-event-date-range">22 &ndash; 24 Nov 2026</div>
                        </div>
                    </div>
                    <div class="nr-event-body">
                        <div class="nr-event-type">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            Conference
                        </div>
                        <h3 class="nr-event-title">Transformer Technology Conference &amp; Exhibition</h3>
                        <div class="nr-event-location">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Messe N&uuml;rnberg, Nuremberg, Germany
                        </div>
                        <span class="nr-event-status nr-event-status--upcoming">Upcoming</span>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ═══════════ PRESS RELEASES ═══════════ -->
    <section class="nr-press-releases">
        <div class="nr-wrap">
            <div class="nr-section-eyebrow">Press Releases</div>
            <h2 class="nr-section-title">Official Announcements</h2>

            <div class="nr-pr-grid">

                <!-- PR 1 -->
                <article class="nr-pr-card">
                    <div class="nr-pr-date">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        March 2026
                    </div>
                    <h3 class="nr-pr-title">Umang Boards Receives PGCIL Approval for 400 kV Class Insulation</h3>
                    <p class="nr-pr-excerpt">Power Grid Corporation of India Ltd. has approved Umang Boards Limited for supply of cellulose-based insulation pressboards for transformers rated up to 400 kV voltage class.</p>
                    <a href="#" class="nr-pr-link">
                        Read Full Release
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                    </a>
                </article>

                <!-- PR 2 -->
                <article class="nr-pr-card">
                    <div class="nr-pr-date">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        January 2026
                    </div>
                    <h3 class="nr-pr-title">Star Export House Recognition by Government of India</h3>
                    <p class="nr-pr-excerpt">Umang Boards Limited has been recognized as a Star Export House by the Government of India for its consistent export performance and contribution to international trade.</p>
                    <a href="#" class="nr-pr-link">
                        Read Full Release
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                    </a>
                </article>

                <!-- PR 3 -->
                <article class="nr-pr-card">
                    <div class="nr-pr-date">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        November 2025
                    </div>
                    <h3 class="nr-pr-title">NABL Accreditation for In-House Testing Laboratory</h3>
                    <p class="nr-pr-excerpt">The company's in-house testing laboratory has received NABL accreditation, affirming world-class testing capabilities for electrical insulation materials.</p>
                    <a href="#" class="nr-pr-link">
                        Read Full Release
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                    </a>
                </article>

                <!-- PR 4 -->
                <article class="nr-pr-card">
                    <div class="nr-pr-date">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        September 2025
                    </div>
                    <h3 class="nr-pr-title">CRISIL SME Rating Affirmed for Business Excellence</h3>
                    <p class="nr-pr-excerpt">CRISIL has reaffirmed Umang Boards Limited's SME rating, recognising its strong financial performance, operational efficiency, and market leadership in transformer insulation.</p>
                    <a href="#" class="nr-pr-link">
                        Read Full Release
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                    </a>
                </article>

                <!-- PR 5 -->
                <article class="nr-pr-card">
                    <div class="nr-pr-date">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        July 2025
                    </div>
                    <h3 class="nr-pr-title">Expansion of Manufacturing Capacity at Jaipur Facility</h3>
                    <p class="nr-pr-excerpt">Umang Boards announces a significant expansion of its Jaipur manufacturing facility to meet growing domestic and international demand for transformer insulation products.</p>
                    <a href="#" class="nr-pr-link">
                        Read Full Release
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                    </a>
                </article>

                <!-- PR 6 -->
                <article class="nr-pr-card">
                    <div class="nr-pr-date">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        April 2025
                    </div>
                    <h3 class="nr-pr-title">ISO 45001 Certification for Occupational Health &amp; Safety</h3>
                    <p class="nr-pr-excerpt">Umang Boards Limited has achieved ISO 45001:2018 certification, demonstrating its commitment to maintaining the highest standards of occupational health and safety management.</p>
                    <a href="#" class="nr-pr-link">
                        Read Full Release
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                    </a>
                </article>

            </div>
        </div>
    </section>

    <!-- ═══════════ MEDIA RESOURCES ═══════════ -->
    <section class="nr-media" id="media-kit">
        <div class="nr-wrap">
            <div class="nr-section-eyebrow">Media Kit</div>
            <h2 class="nr-section-title">Media Resources</h2>

            <div class="nr-media-grid">

                <a href="<?php echo $uri; ?>/assets/images/UBL_LOGO.png" class="nr-media-card" download>
                    <div class="nr-media-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                    </div>
                    <div class="nr-media-info">
                        <div class="nr-media-name">Company Logo (PNG)</div>
                        <div class="nr-media-detail">High-resolution PNG format</div>
                    </div>
                </a>

                <a href="<?php echo $uri; ?>/assets/images/UBL_LOGO.svg" class="nr-media-card" download>
                    <div class="nr-media-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                    </div>
                    <div class="nr-media-info">
                        <div class="nr-media-name">Company Logo (SVG)</div>
                        <div class="nr-media-detail">Scalable vector format</div>
                    </div>
                </a>

                <a href="<?php echo $uri; ?>/assets/images/facility-aerial.jpg" class="nr-media-card" download>
                    <div class="nr-media-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                    </div>
                    <div class="nr-media-info">
                        <div class="nr-media-name">Facility Aerial Photo</div>
                        <div class="nr-media-detail">Manufacturing facility overview</div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- ═══════════ PRESS CONTACT ═══════════ -->
    <section class="nr-contact">
        <div class="nr-wrap">
            <div class="nr-section-eyebrow">Get in Touch</div>
            <h2 class="nr-section-title">Press Contact</h2>

            <div class="nr-contact-card">
                <div class="nr-contact-heading">Media Inquiries</div>
                <p class="nr-contact-subtitle">For press releases, interview requests, or media-related questions, please reach out to our communications team.</p>

                <div class="nr-contact-rows">
                    <div class="nr-contact-row">
                        <div class="nr-contact-row-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <div class="nr-contact-row-label">Email</div>
                            <div class="nr-contact-row-value"><a href="mailto:info@umangboards.com">info@umangboards.com</a></div>
                        </div>
                    </div>
                    <div class="nr-contact-row">
                        <div class="nr-contact-row-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        </div>
                        <div>
                            <div class="nr-contact-row-label">Phone</div>
                            <div class="nr-contact-row-value"><a href="tel:+911412395845">+91 141 239 5845</a></div>
                        </div>
                    </div>
                    <div class="nr-contact-row">
                        <div class="nr-contact-row-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <div class="nr-contact-row-label">Registered Office</div>
                            <div class="nr-contact-row-value">"Umang House", D-40/A, RIICO Industrial Area, Mansarovar, Jaipur — 302020, India</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined') return;

    /* Hero animations */
    gsap.from('.nr-hero-breadcrumb', { opacity: 0, y: 20, duration: 0.6, delay: 0.2 });
    gsap.from('.nr-hero-badge', { opacity: 0, y: 20, duration: 0.6, delay: 0.3 });
    gsap.from('.nr-hero-title', { opacity: 0, y: 30, duration: 0.8, delay: 0.4 });
    gsap.from('.nr-hero-subtitle', { opacity: 0, y: 20, duration: 0.6, delay: 0.55 });

    /* Featured card */
    if (typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        UBL.wipeIn('.nr-featured-title', { delay: 0.05 });
        UBL.wipeIn('.nr-section-title', { delay: 0.05 });
        UBL.wipeIn('.nr-media-banner-title', { delay: 0.05 });
        UBL.wipeIn('.nr-events-title', { delay: 0.05 });
        UBL.wipeIn('.nr-pr-title', { delay: 0.05 });

        gsap.fromTo('.nr-featured-card', { opacity: 0, y: 40 }, {
            scrollTrigger: { trigger: '.nr-featured-card', start: 'top 85%' },
            opacity: 1, y: 0, duration: 0.8
        });

        /* Grid cards stagger */
        gsap.fromTo('.nr-card', { opacity: 0, y: 30 }, {
            scrollTrigger: { trigger: '.nr-grid', start: 'top 85%' },
            opacity: 1, y: 0, duration: 0.6, stagger: 0.15
        });

        /* Media cards stagger */
        gsap.fromTo('.nr-media-card', { opacity: 0, y: 20 }, {
            scrollTrigger: { trigger: '.nr-media-grid', start: 'top 85%' },
            opacity: 1, y: 0, duration: 0.5, stagger: 0.1
        });

        /* Media Kit Banner */
        gsap.fromTo('.nr-media-banner-content', { opacity: 0, x: -40 }, {
            scrollTrigger: { trigger: '.nr-media-banner', start: 'top 85%' },
            opacity: 1, x: 0, duration: 0.8
        });
        gsap.fromTo('.nr-media-banner-cta', { opacity: 0, x: 40 }, {
            scrollTrigger: { trigger: '.nr-media-banner', start: 'top 85%' },
            opacity: 1, x: 0, duration: 0.8, delay: 0.2
        });

        /* Events cards stagger */
        gsap.fromTo('.nr-event-card', { opacity: 0, y: 40 }, {
            scrollTrigger: { trigger: '.nr-events-grid', start: 'top 85%' },
            opacity: 1, y: 0, duration: 0.7, stagger: 0.15
        });

        /* Press Releases cards stagger */
        gsap.fromTo('.nr-pr-card', { opacity: 0, y: 40 }, {
            scrollTrigger: { trigger: '.nr-pr-grid', start: 'top 85%' },
            opacity: 1, y: 0, duration: 0.7, stagger: 0.12
        });

        /* Contact card */
        gsap.fromTo('.nr-contact-card', { opacity: 0, y: 30 }, {
            scrollTrigger: { trigger: '.nr-contact-card', start: 'top 85%' },
            opacity: 1, y: 0, duration: 0.7
        });

        /* Fallback: ensure content visible after 4s */
        setTimeout(function() {
            document.querySelectorAll('.nr-featured-card, .nr-card, .nr-media-card, .nr-contact-card, .nr-event-card, .nr-pr-card, .nr-media-banner-content, .nr-media-banner-cta').forEach(function(el) { el.style.opacity = '1'; el.style.transform = 'none'; });
        }, 4000);
    }
});
</script>

<?php get_footer(); ?>
