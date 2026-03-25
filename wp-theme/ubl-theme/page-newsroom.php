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
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 6rem;
    overflow: hidden;
}
.nr-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, var(--navy), rgba(11,31,58,0.95));
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
    color: rgba(255,255,255,0.5);
    margin-bottom: 2rem;
}
.nr-hero-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.nr-hero-breadcrumb a:hover { color: var(--gold); }
.nr-hero-breadcrumb .active { color: var(--gold); }
.nr-hero-breadcrumb svg { width: 12px; height: 12px; }
.nr-hero-badge {
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
    color: rgba(255,255,255,0.7);
    line-height: 1.65;
    font-weight: 300;
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
    color: var(--navy);
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
    color: var(--navy);
    line-height: 1.25;
    letter-spacing: -0.02em;
    margin-bottom: 1rem;
}
.nr-featured-excerpt {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
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
    background: rgba(55,110,180,0.08);
    border-radius: 4px;
    font-weight: 600;
    color: var(--navy);
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
    color: var(--navy);
    line-height: 1.3;
    margin-bottom: 0.75rem;
}
.nr-card-excerpt {
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.65;
    font-weight: 300;
    margin-bottom: 1.25rem;
}
.nr-card-link {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--navy);
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
    background: rgba(55,110,180,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
}
.nr-media-icon svg { width: 24px; height: 24px; color: var(--navy); }
.nr-media-info { flex: 1; }
.nr-media-name {
    font-size: 0.95rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 0.2rem;
}
.nr-media-detail {
    font-size: 0.78rem;
    color: var(--text-muted);
    font-weight: 400;
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
    color: var(--navy);
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
    background: rgba(55,110,180,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.nr-contact-row-icon svg { width: 18px; height: 18px; color: var(--navy); }
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
    color: var(--navy);
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

    <!-- ═══════════ MEDIA RESOURCES ═══════════ -->
    <section class="nr-media">
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

        gsap.from('.nr-featured-card', {
            scrollTrigger: { trigger: '.nr-featured-card', start: 'top 85%' },
            opacity: 0, y: 40, duration: 0.8
        });

        /* Grid cards stagger */
        gsap.from('.nr-card', {
            scrollTrigger: { trigger: '.nr-grid', start: 'top 85%' },
            opacity: 0, y: 30, duration: 0.6, stagger: 0.15
        });

        /* Media cards stagger */
        gsap.from('.nr-media-card', {
            scrollTrigger: { trigger: '.nr-media-grid', start: 'top 85%' },
            opacity: 0, y: 20, duration: 0.5, stagger: 0.1
        });

        /* Contact card */
        gsap.from('.nr-contact-card', {
            scrollTrigger: { trigger: '.nr-contact-card', start: 'top 85%' },
            opacity: 0, y: 30, duration: 0.7
        });
    }
});
</script>

<?php get_footer(); ?>
