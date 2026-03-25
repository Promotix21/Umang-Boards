<?php
/**
 * Template Name: Careers
 * Description: Careers page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   CAREERS PAGE
   ============================================ */

/* --- HERO --- */
.cr-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 6rem;
    overflow: hidden;
}
.cr-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, var(--navy), rgba(11,31,58,0.95));
}
.cr-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.12) 0%, transparent 50%);
    pointer-events: none;
}
.cr-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.cr-breadcrumb {
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
.cr-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.cr-breadcrumb a:hover { color: var(--gold); }
.cr-breadcrumb .active { color: var(--gold); }
.cr-breadcrumb svg { width: 12px; height: 12px; }
.cr-badge {
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
.cr-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4rem);
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.03em;
    margin-bottom: 1.5rem;
    max-width: 700px;
}
.cr-hero-title em { font-style: normal; color: var(--gold); }
.cr-hero-subtitle {
    font-size: clamp(1rem, 1.8vw, 1.25rem);
    color: rgba(255,255,255,0.7);
    max-width: 560px;
    line-height: 1.65;
    font-weight: 300;
}

/* --- SECTIONS --- */
.cr-section {
    max-width: 1400px;
    margin: 0 auto;
    padding: 5rem clamp(1.5rem, 4vw, 3.5rem) 0;
}
.cr-section:last-of-type { padding-bottom: 6rem; }
.cr-eyebrow {
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1rem;
}
.cr-title {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}
.cr-desc {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.65;
    font-weight: 300;
    max-width: 700px;
    margin-bottom: 3rem;
}

/* --- LIFE @ UBL --- */
.cr-life-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: start;
}
.cr-life-text {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.75;
    font-weight: 300;
}
.cr-life-text p { margin-bottom: 1.5rem; }
.cr-culture-cards {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.25rem;
}
.cr-culture-card {
    padding: 1.5rem;
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 10px;
    transition: all 0.3s var(--ease-out-expo);
}
.cr-culture-card:hover {
    border-color: rgba(212,168,67,0.3);
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(11,31,58,0.05);
}
.cr-culture-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
}
.cr-culture-icon svg { width: 20px; height: 20px; color: var(--gold); }
.cr-culture-label {
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--navy);
    line-height: 1.3;
}

/* --- JOB CARDS --- */
.cr-jobs-list { margin-top: 0; }
.job-card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem 2rem;
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 8px;
    margin-bottom: 1rem;
    transition: all 0.3s var(--ease-out-expo);
    background: #fff;
}
.job-card:hover {
    border-color: rgba(212,168,67,0.3);
    box-shadow: 0 8px 24px rgba(11,31,58,0.05);
}
.job-info { flex: 1; min-width: 0; }
.job-title {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 0.5rem;
}
.job-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 1.25rem;
    font-size: 0.85rem;
    color: var(--text-muted);
}
.job-meta-item {
    display: flex;
    align-items: center;
    gap: 0.35rem;
}
.job-meta-item svg { width: 14px; height: 14px; flex-shrink: 0; }
.job-apply {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    height: 42px;
    padding: 0 1.5rem;
    background: var(--gold);
    color: var(--navy);
    border: none;
    border-radius: 6px;
    font-family: var(--font-body);
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    text-decoration: none;
    white-space: nowrap;
    transition: all 0.3s var(--ease-out-expo);
    flex-shrink: 0;
    margin-left: 2rem;
}
.job-apply:hover {
    background: var(--navy);
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(11,31,58,0.12);
}
.job-apply svg { width: 14px; height: 14px; }

/* --- GROWTH BLOCK --- */
.cr-growth-block {
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 12px;
    padding: 3rem;
    border-left: 4px solid var(--gold);
}
.cr-growth-quote {
    font-size: 1.15rem;
    color: var(--text-primary);
    line-height: 1.7;
    font-weight: 400;
    margin-bottom: 1.5rem;
}
.cr-growth-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0.75rem;
}
.cr-growth-list li {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.95rem;
    color: var(--text-secondary);
    font-weight: 400;
}
.cr-growth-list li svg {
    width: 16px;
    height: 16px;
    color: var(--gold);
    flex-shrink: 0;
}

/* --- CTA --- */
.cr-cta {
    background: var(--navy);
    padding: 5rem 0;
    text-align: center;
    color: #fff;
}
.cr-cta-inner {
    max-width: 700px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.cr-cta-title {
    font-size: clamp(1.8rem, 3.5vw, 2.5rem);
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}
.cr-cta-desc {
    font-size: 1.1rem;
    color: rgba(255,255,255,0.7);
    line-height: 1.65;
    font-weight: 300;
    margin-bottom: 2rem;
}
.cr-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    height: 56px;
    padding: 0 2.5rem;
    background: var(--gold);
    color: var(--navy);
    border: none;
    border-radius: 8px;
    font-family: var(--font-body);
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    text-decoration: none;
    transition: all 0.4s var(--ease-out-expo);
}
.cr-cta-btn:hover {
    background: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}
.cr-cta-btn svg { width: 18px; height: 18px; }

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .cr-life-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    .job-card { flex-direction: column; align-items: flex-start; gap: 1rem; }
    .job-apply { margin-left: 0; width: 100%; justify-content: center; }
    .cr-culture-cards { grid-template-columns: 1fr; }
    .cr-growth-list { grid-template-columns: 1fr; }
}
</style>

<main>

    <!-- ─── HERO ─── -->
    <section class="cr-hero">
        <div class="cr-hero-gradient"></div>
        <div class="cr-hero-glow"></div>
        <div class="cr-hero-inner">
            <nav class="cr-breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                <a href="#">Company</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                <span class="active">Careers</span>
            </nav>
            <span class="cr-badge">CAREERS</span>
            <h1 class="cr-hero-title">Build Your Career at <em>UBL</em></h1>
            <p class="cr-hero-subtitle">Join a vibrant, growing organisation that rewards hard work, invests in people, and shapes the future of electrical insulation.</p>
        </div>
    </section>

    <!-- ─── SECTION 01: LIFE @ UBL ─── -->
    <section class="cr-section">
        <div class="cr-eyebrow">01. Life @ UBL</div>
        <h2 class="cr-title">A Vibrant Workplace</h2>

        <div class="cr-life-grid">
            <div class="cr-life-text">
                <p>Umang Boards Limited is a vibrant and dynamic organisation which thrives on working hard. We believe in motivating our employees, recognising their efforts, and rewarding their achievements to create a growth-oriented work environment.</p>
                <p>We place equal emphasis on work-life balance. From birthday celebrations and family picnics to yoga sessions and social events, life at UBL goes well beyond the factory floor.</p>
            </div>
            <div class="cr-culture-cards">
                <div class="cr-culture-card">
                    <div class="cr-culture-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                    </div>
                    <div class="cr-culture-label">Growth &amp; Recognition</div>
                </div>
                <div class="cr-culture-card">
                    <div class="cr-culture-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                    <div class="cr-culture-label">Team Spirit</div>
                </div>
                <div class="cr-culture-card">
                    <div class="cr-culture-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
                    </div>
                    <div class="cr-culture-label">Work-Life Balance</div>
                </div>
                <div class="cr-culture-card">
                    <div class="cr-culture-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <div class="cr-culture-label">Social Events &amp; Wellness</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ─── SECTION 02: OPEN POSITIONS ─── -->
    <section class="cr-section">
        <div class="cr-eyebrow">02. Open Positions</div>
        <h2 class="cr-title">Current Opportunities</h2>
        <p class="cr-desc">Explore current openings across our manufacturing and sales teams. Click "Apply" to send your resume directly to our HR team.</p>

        <div class="cr-jobs-list">

            <!-- Job 1 -->
            <div class="job-card">
                <div class="job-info">
                    <div class="job-title">Chemical Engineer</div>
                    <div class="job-meta">
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            BTech Chemical Engineering
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            3&ndash;5 Years
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Jaipur
                        </span>
                    </div>
                </div>
                <a href="mailto:hr@umangboards.com?subject=Application%20-%20Chemical%20Engineer" class="job-apply">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>

            <!-- Job 2 -->
            <div class="job-card">
                <div class="job-info">
                    <div class="job-title">GM &mdash; Sales &amp; Marketing</div>
                    <div class="job-meta">
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            BE Electrical/Mechanical + MBA
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            10+ Years
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Jaipur
                        </span>
                    </div>
                </div>
                <a href="mailto:hr@umangboards.com?subject=Application%20-%20GM%20Sales%20%26%20Marketing" class="job-apply">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>

            <!-- Job 3 -->
            <div class="job-card">
                <div class="job-info">
                    <div class="job-title">Mechanical Engineer</div>
                    <div class="job-meta">
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            MTech
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            3&ndash;5 Years
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Jaipur
                        </span>
                    </div>
                </div>
                <a href="mailto:hr@umangboards.com?subject=Application%20-%20Mechanical%20Engineer" class="job-apply">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>

            <!-- Job 4 -->
            <div class="job-card">
                <div class="job-info">
                    <div class="job-title">Sales Engineer</div>
                    <div class="job-meta">
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            Diploma Electrical + MBA
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            4 Years
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Jaipur
                        </span>
                    </div>
                </div>
                <a href="mailto:hr@umangboards.com?subject=Application%20-%20Sales%20Engineer%20(Jaipur)" class="job-apply">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>

            <!-- Job 5 -->
            <div class="job-card">
                <div class="job-info">
                    <div class="job-title">Sr. Quality Manager</div>
                    <div class="job-meta">
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            MTech
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            10&ndash;15 Years
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Jaipur
                        </span>
                    </div>
                </div>
                <a href="mailto:hr@umangboards.com?subject=Application%20-%20Sr.%20Quality%20Manager" class="job-apply">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>

            <!-- Job 6 -->
            <div class="job-card">
                <div class="job-info">
                    <div class="job-title">Sales Engineer</div>
                    <div class="job-meta">
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            Diploma Electrical + MBA
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            4+ Years
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Baroda (Gujarat)
                        </span>
                    </div>
                </div>
                <a href="mailto:hr@umangboards.com?subject=Application%20-%20Sales%20Engineer%20(Baroda)" class="job-apply">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>

            <!-- Job 7 -->
            <div class="job-card">
                <div class="job-info">
                    <div class="job-title">Sales Engineer</div>
                    <div class="job-meta">
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            Diploma Electrical + MBA
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            4+ Years
                        </span>
                        <span class="job-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Hyderabad
                        </span>
                    </div>
                </div>
                <a href="mailto:hr@umangboards.com?subject=Application%20-%20Sales%20Engineer%20(Hyderabad)" class="job-apply">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>

        </div>
    </section>

    <!-- ─── SECTION 03: GROWTH & DEVELOPMENT ─── -->
    <section class="cr-section">
        <div class="cr-eyebrow">03. Growth &amp; Development</div>
        <h2 class="cr-title">Training &amp; Development</h2>

        <div class="cr-growth-block">
            <p class="cr-growth-quote">At Umang Boards, we recruit from top engineering and MBA colleges across India. Every new member undergoes a thorough induction programme designed to provide a comprehensive introduction to our work, processes, and culture &mdash; integrating global best practices from day one.</p>
            <ul class="cr-growth-list">
                <li>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Recruitment from premier institutes
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Comprehensive induction programmes
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Hands-on introduction to work
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Integration of global practices
                </li>
            </ul>
        </div>
    </section>

    <!-- ─── CTA ─── -->
    <section class="cr-cta">
        <div class="cr-cta-inner">
            <h2 class="cr-cta-title">Interested in Joining Us?</h2>
            <p class="cr-cta-desc">Send your resume to our HR team and we'll get back to you. We're always looking for talented individuals who share our passion for quality and innovation.</p>
            <a href="mailto:hr@umangboards.com?subject=Career%20Inquiry" class="cr-cta-btn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email hr@umangboards.com
            </a>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);
    var EASE = 'expo.out';

    /* Hero entrance */
    gsap.from('.cr-breadcrumb, .cr-badge, .cr-hero-title, .cr-hero-subtitle', {
        y: 30, opacity: 0, duration: 0.8, stagger: 0.12, delay: 0.3, ease: EASE
    });

    /* Sections */
    document.querySelectorAll('.cr-section').forEach(function(sec) {
        gsap.from(sec, {
            y: 40, opacity: 0, duration: 1, ease: EASE,
            scrollTrigger: { trigger: sec, start: 'top 85%', toggleActions: 'play none none none' }
        });
    });

    /* Job cards */
    gsap.from('.job-card', {
        y: 30, opacity: 0, duration: 0.7, stagger: 0.08, ease: EASE,
        scrollTrigger: { trigger: '.cr-jobs-list', start: 'top 85%', toggleActions: 'play none none none' }
    });

    /* Culture cards */
    gsap.from('.cr-culture-card', {
        y: 20, opacity: 0, duration: 0.6, stagger: 0.1, ease: EASE,
        scrollTrigger: { trigger: '.cr-culture-cards', start: 'top 85%', toggleActions: 'play none none none' }
    });

    /* CTA */
    gsap.from('.cr-cta-inner', {
        y: 30, opacity: 0, duration: 0.8, ease: EASE,
        scrollTrigger: { trigger: '.cr-cta', start: 'top 85%', toggleActions: 'play none none none' }
    });
});
</script>

<?php get_footer(); ?>
