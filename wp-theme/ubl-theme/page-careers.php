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

/* --- SUCCESS BANNER --- */
.cr-success {
    max-width: 1400px;
    margin: 2rem auto 0;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.cr-success-inner {
    background: #F0FDF4;
    border: 1px solid #BBF7D0;
    border-left: 4px solid #10B981;
    border-radius: 12px;
    padding: 1.5rem 2rem;
    display: flex;
    align-items: center;
    gap: 1rem;
}
.cr-success-inner svg { width: 28px; height: 28px; color: #10B981; flex-shrink: 0; }
.cr-success-inner h3 { font-size: 1.1rem; font-weight: 700; color: #065F46; margin: 0 0 0.25rem; }
.cr-success-inner p { font-size: 0.9rem; color: #047857; margin: 0; line-height: 1.5; }

/* --- APPLICATION MODAL --- */
.cr-modal-overlay {
    position: fixed; inset: 0; z-index: 9999;
    background: rgba(11,31,58,0.6);
    backdrop-filter: blur(4px);
    display: flex; align-items: center; justify-content: center;
    opacity: 0; visibility: hidden;
    transition: opacity 0.35s ease, visibility 0.35s ease;
}
.cr-modal-overlay.active { opacity: 1; visibility: visible; }
.cr-modal {
    background: #fff;
    border-radius: 16px;
    width: 90%;
    max-width: 560px;
    max-height: 90vh;
    overflow-y: auto;
    padding: 2.5rem;
    transform: translateY(40px);
    transition: transform 0.4s cubic-bezier(0.16,1,0.3,1);
    box-shadow: 0 24px 80px rgba(11,31,58,0.2);
}
.cr-modal-overlay.active .cr-modal { transform: translateY(0); }
.cr-modal-header {
    display: flex; justify-content: space-between; align-items: flex-start;
    margin-bottom: 2rem;
}
.cr-modal-header h2 {
    font-size: 1.5rem; font-weight: 700; color: var(--navy);
    margin: 0; letter-spacing: -0.02em;
}
.cr-modal-header p {
    font-size: 0.9rem; color: var(--text-secondary); margin: 0.5rem 0 0;
    font-weight: 300; line-height: 1.5;
}
.cr-modal-close {
    width: 36px; height: 36px; border-radius: 50%;
    border: 1px solid rgba(11,31,58,0.1); background: transparent;
    cursor: pointer; display: flex; align-items: center; justify-content: center;
    flex-shrink: 0; margin-left: 1rem;
    transition: all 0.3s;
}
.cr-modal-close:hover { background: #f5f5f7; border-color: rgba(11,31,58,0.2); }
.cr-modal-close svg { width: 16px; height: 16px; color: var(--navy); }
.cr-modal-field {
    margin-bottom: 1.25rem;
}
.cr-modal-field label {
    display: block;
    font-size: 0.78rem; font-weight: 700; color: var(--navy);
    text-transform: uppercase; letter-spacing: 0.1em;
    margin-bottom: 0.5rem;
}
.cr-modal-field input,
.cr-modal-field textarea {
    width: 100%; padding: 0.85rem 1rem;
    background: #F5F5F7; border: 1px solid rgba(11,31,58,0.08);
    border-radius: 8px; font-family: var(--font-body);
    font-size: 0.95rem; color: var(--navy);
    outline: none; transition: border-color 0.3s, box-shadow 0.3s;
    box-sizing: border-box;
}
.cr-modal-field input:focus,
.cr-modal-field textarea:focus {
    border-color: var(--gold);
    box-shadow: 0 0 0 3px rgba(200,168,75,0.12);
    background: #fff;
}
.cr-modal-field textarea { resize: none; height: 100px; }
.cr-modal-field input[type="file"] {
    padding: 0.7rem 1rem; cursor: pointer;
}
.cr-modal-field .cr-file-hint {
    font-size: 0.75rem; color: var(--text-muted);
    margin-top: 0.4rem;
}
.cr-modal-submit {
    display: flex; align-items: center; justify-content: center; gap: 0.75rem;
    width: 100%; height: 56px; margin-top: 1.5rem;
    background: var(--navy); color: #fff; border: none;
    border-radius: 8px; font-family: var(--font-body);
    font-size: 0.9rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.12em;
    cursor: pointer; transition: all 0.4s var(--ease-out-expo);
}
.cr-modal-submit:hover {
    background: var(--gold); color: var(--navy);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
}
.cr-modal-submit svg { width: 18px; height: 18px; }

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

    <!-- ─── SUCCESS MESSAGE ─── -->
    <?php if ( isset( $_GET['applied'] ) && $_GET['applied'] === 'success' ) : ?>
    <div class="cr-success">
        <div class="cr-success-inner">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <div>
                <h3>Application Submitted Successfully</h3>
                <p>Thank you for your interest in joining UBL. Our HR team will review your application and get back to you shortly.</p>
            </div>
        </div>
    </div>
    <?php endif; ?>

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
                <button type="button" class="job-apply" data-position="Chemical Engineer" onclick="openApplyModal(this)">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
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
                <button type="button" class="job-apply" data-position="GM — Sales &amp; Marketing" onclick="openApplyModal(this)">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
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
                <button type="button" class="job-apply" data-position="Mechanical Engineer" onclick="openApplyModal(this)">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
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
                <button type="button" class="job-apply" data-position="Sales Engineer (Jaipur)" onclick="openApplyModal(this)">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
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
                <button type="button" class="job-apply" data-position="Sr. Quality Manager" onclick="openApplyModal(this)">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
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
                <button type="button" class="job-apply" data-position="Sales Engineer (Baroda)" onclick="openApplyModal(this)">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
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
                <button type="button" class="job-apply" data-position="Sales Engineer (Hyderabad)" onclick="openApplyModal(this)">
                    Apply
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
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
            <button type="button" class="cr-cta-btn" onclick="openApplyModal(this)" data-position="General Application">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                Submit Your Application
            </button>
        </div>
    </section>

    <!-- ─── APPLICATION MODAL ─── -->
    <div class="cr-modal-overlay" id="applyModal">
        <div class="cr-modal">
            <div class="cr-modal-header">
                <div>
                    <h2>Apply for Position</h2>
                    <p id="applyModalPosition"></p>
                </div>
                <button type="button" class="cr-modal-close" onclick="closeApplyModal()">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
            </div>

            <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" enctype="multipart/form-data">
                <input type="hidden" name="action" value="ubl_apply">
                <input type="hidden" name="position" id="applyPositionField" value="">
                <?php wp_nonce_field( 'ubl_apply', 'ubl_apply_nonce' ); ?>

                <div class="cr-modal-field">
                    <label for="applicant_name">Full Name *</label>
                    <input type="text" id="applicant_name" name="applicant_name" required placeholder="Enter your full name">
                </div>

                <div class="cr-modal-field">
                    <label for="applicant_email">Email Address *</label>
                    <input type="email" id="applicant_email" name="applicant_email" required placeholder="your.email@example.com">
                </div>

                <div class="cr-modal-field">
                    <label for="applicant_phone">Phone Number *</label>
                    <input type="tel" id="applicant_phone" name="applicant_phone" required placeholder="+91-XXXXX-XXXXX">
                </div>

                <div class="cr-modal-field">
                    <label for="cover_letter">Cover Letter</label>
                    <textarea id="cover_letter" name="cover_letter" placeholder="Tell us about yourself and why you'd be a great fit..."></textarea>
                </div>

                <div class="cr-modal-field">
                    <label for="resume">Resume / CV *</label>
                    <input type="file" id="resume" name="resume" required accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    <div class="cr-file-hint">Accepted formats: PDF, DOC, DOCX (max 5 MB)</div>
                </div>

                <button type="submit" class="cr-modal-submit">
                    Submit Application
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
            </form>
        </div>
    </div>

</main>

<script>
/* ── Application Modal ── */
function openApplyModal(btn) {
    var position = btn.getAttribute('data-position') || '';
    document.getElementById('applyPositionField').value = position;
    document.getElementById('applyModalPosition').textContent = position;
    document.getElementById('applyModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeApplyModal() {
    document.getElementById('applyModal').classList.remove('active');
    document.body.style.overflow = '';
}
/* Close on overlay click */
document.addEventListener('click', function(e) {
    if (e.target && e.target.id === 'applyModal') closeApplyModal();
});
/* Close on Escape */
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeApplyModal();
});

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
