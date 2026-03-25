<?php
/**
 * Template Name: Investors
 * Description: Investor Relations landing page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   INVESTOR RELATIONS — Landing Page
   ============================================ */

/* --- HERO --- */
.ir-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 10rem;
    overflow: hidden;
}
.ir-hero-gradient {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, var(--navy) 0%, #1a3a5c 50%, var(--navy) 100%);
}
.ir-hero-glow {
    position: absolute; inset: 0;
    background: radial-gradient(circle at 70% 30%, rgba(212,168,67,0.12) 0%, transparent 50%);
    pointer-events: none;
}
.ir-hero-pattern {
    position: absolute; inset: 0; opacity: 0.04;
    background-image: repeating-linear-gradient(0deg, transparent, transparent 60px, rgba(255,255,255,0.5) 60px, rgba(255,255,255,0.5) 61px),
                       repeating-linear-gradient(90deg, transparent, transparent 60px, rgba(255,255,255,0.5) 60px, rgba(255,255,255,0.5) 61px);
    pointer-events: none;
}
.ir-hero-inner {
    position: relative; z-index: 2;
    max-width: 1400px; margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ir-breadcrumb {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.72rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.15em; color: rgba(255,255,255,0.5);
    margin-bottom: 2rem;
}
.ir-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.ir-breadcrumb a:hover { color: var(--gold); }
.ir-breadcrumb .active { color: var(--gold); }
.ir-breadcrumb svg { width: 12px; height: 12px; }
.ir-hero-badge {
    display: inline-flex; align-items: center;
    padding: 0.4rem 1rem;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.15);
    font-size: 0.72rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
}
.ir-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700; line-height: 1.08;
    letter-spacing: -0.03em; margin-bottom: 1.5rem;
    max-width: 800px;
}
.ir-hero-title em { font-style: normal; color: var(--gold); }
.ir-hero-subtitle {
    font-size: clamp(1.05rem, 1.8vw, 1.3rem);
    color: rgba(255,255,255,0.65);
    max-width: 600px; line-height: 1.65; font-weight: 300;
}

/* --- QUICK INFO STRIP --- */
.ir-strip {
    position: relative; z-index: 20;
    max-width: 1400px; margin: -5rem auto 0;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ir-strip-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px; background: rgba(11,31,58,0.08);
    border: 1px solid rgba(11,31,58,0.08);
    box-shadow: 0 20px 60px rgba(11,31,58,0.12);
}
.ir-strip-item {
    background: #fff; padding: 1.8rem 2rem;
    text-align: center; transition: background 0.3s;
}
.ir-strip-item:hover { background: var(--bg-secondary); }
.ir-strip-label {
    font-size: 0.7rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.12em;
    color: var(--text-muted); margin-bottom: 0.5rem;
}
.ir-strip-value {
    font-size: 1.15rem; font-weight: 700;
    color: var(--navy); letter-spacing: 0.02em;
}

/* --- SECTIONS --- */
.ir-section {
    max-width: 1400px; margin: 0 auto;
    padding: clamp(4rem, 8vw, 7rem) clamp(1.5rem, 4vw, 3.5rem);
}
.ir-section + .ir-section { padding-top: 0; }
.ir-section-label {
    display: inline-flex; align-items: center; gap: 0.75rem;
    font-size: 0.72rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.15em;
    color: var(--text-muted); margin-bottom: 1rem;
}
.ir-section-label span {
    display: inline-block; width: 32px; height: 1px;
    background: var(--gold);
}
.ir-section-title {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700; color: var(--text-primary);
    letter-spacing: -0.02em; margin-bottom: 1rem;
    line-height: 1.15;
}
.ir-section-desc {
    font-size: 1.05rem; color: var(--text-secondary);
    line-height: 1.65; max-width: 600px; margin-bottom: 3rem;
}

/* --- QUICK LINKS GRID --- */
.ir-links-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 1.5rem;
}
.ir-link-card {
    display: flex; align-items: flex-start; gap: 1.25rem;
    padding: 2rem; background: #fff;
    border: 1px solid rgba(11,31,58,0.08);
    transition: all 0.4s var(--ease-out-expo);
    text-decoration: none; color: inherit;
    position: relative; overflow: hidden;
}
.ir-link-card:hover {
    border-color: var(--gold);
    transform: translateY(-3px);
    box-shadow: 0 12px 40px rgba(11,31,58,0.1);
}
.ir-link-card:hover .ir-link-arrow { transform: translate(3px, -3px); color: var(--gold); }
.ir-link-card:hover .ir-link-icon { color: var(--gold); }
.ir-link-icon {
    flex-shrink: 0; width: 44px; height: 44px;
    display: flex; align-items: center; justify-content: center;
    background: var(--bg-secondary); border-radius: 8px;
    color: var(--navy); transition: color 0.3s;
}
.ir-link-icon svg { width: 22px; height: 22px; }
.ir-link-body { flex: 1; min-width: 0; }
.ir-link-title {
    font-size: 1.05rem; font-weight: 700;
    color: var(--text-primary); margin-bottom: 0.4rem;
    line-height: 1.3;
}
.ir-link-desc {
    font-size: 0.85rem; color: var(--text-muted);
    line-height: 1.55;
}
.ir-link-arrow {
    flex-shrink: 0; color: var(--text-muted);
    transition: all 0.3s var(--ease-out-expo);
    margin-top: 0.2rem;
}
.ir-link-arrow svg { width: 18px; height: 18px; }

/* --- KEY CONTACTS --- */
.ir-contacts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
    gap: 2rem;
}
.ir-contact-card {
    padding: 2.5rem; background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
}
.ir-contact-tag {
    font-size: 0.7rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.12em;
    color: var(--gold); margin-bottom: 1rem;
}
.ir-contact-name {
    font-size: 1.15rem; font-weight: 700;
    color: var(--text-primary); margin-bottom: 0.3rem;
}
.ir-contact-role {
    font-size: 0.88rem; color: var(--text-muted);
    margin-bottom: 1.5rem; line-height: 1.5;
}
.ir-contact-detail {
    display: flex; align-items: center; gap: 0.75rem;
    font-size: 0.9rem; color: var(--text-secondary);
    margin-bottom: 0.75rem;
}
.ir-contact-detail svg { width: 16px; height: 16px; flex-shrink: 0; color: var(--navy); }
.ir-contact-detail a { color: var(--navy); text-decoration: none; transition: color 0.3s; }
.ir-contact-detail a:hover { color: var(--gold); }

/* --- DOWNLOADS SECTION --- */
.ir-downloads-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1rem;
}
.ir-download-item {
    display: flex; align-items: center; gap: 1rem;
    padding: 1.25rem 1.5rem; background: #fff;
    border: 1px solid rgba(11,31,58,0.08);
    transition: all 0.3s var(--ease-out-expo);
    text-decoration: none; color: inherit;
}
.ir-download-item:hover {
    border-color: var(--gold);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(11,31,58,0.08);
}
.ir-download-icon {
    width: 40px; height: 40px; flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    background: rgba(55,110,180,0.08); border-radius: 6px;
    color: var(--navy);
}
.ir-download-icon svg { width: 20px; height: 20px; }
.ir-download-label {
    flex: 1; font-size: 0.92rem; font-weight: 600;
    color: var(--text-primary); line-height: 1.35;
}
.ir-download-badge {
    font-size: 0.65rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.08em;
    color: var(--text-muted); background: var(--bg-secondary);
    padding: 0.25rem 0.6rem; border-radius: 3px;
}

/* --- CTA BANNER --- */
.ir-cta {
    background: var(--navy); color: #fff;
    padding: clamp(4rem, 8vw, 6rem) 0;
    text-align: center; position: relative; overflow: hidden;
}
.ir-cta-glow {
    position: absolute; inset: 0;
    background: radial-gradient(circle at center, rgba(212,168,67,0.1) 0%, transparent 60%);
    pointer-events: none;
}
.ir-cta-inner {
    position: relative; z-index: 2;
    max-width: 700px; margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ir-cta-title {
    font-size: clamp(1.6rem, 3vw, 2.4rem);
    font-weight: 700; margin-bottom: 1rem;
    letter-spacing: -0.02em;
}
.ir-cta-desc {
    font-size: 1.05rem; color: rgba(255,255,255,0.65);
    margin-bottom: 2rem; line-height: 1.6;
}
.ir-cta-btn {
    display: inline-flex; align-items: center; gap: 0.75rem;
    padding: 1rem 2.5rem; background: var(--gold);
    color: var(--navy); font-size: 0.85rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.1em;
    text-decoration: none; transition: all 0.3s var(--ease-out-expo);
    border: 2px solid var(--gold);
}
.ir-cta-btn:hover {
    background: transparent; color: var(--gold);
}
.ir-cta-btn svg { width: 18px; height: 18px; transition: transform 0.3s; }
.ir-cta-btn:hover svg { transform: translateX(4px); }

/* --- RESPONSIVE --- */
@media (max-width: 900px) {
    .ir-strip-grid { grid-template-columns: repeat(2, 1fr); }
    .ir-links-grid { grid-template-columns: 1fr; }
    .ir-contacts-grid { grid-template-columns: 1fr; }
    .ir-downloads-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
    .ir-hero { padding-bottom: 8rem; }
    .ir-strip-grid { grid-template-columns: 1fr 1fr; }
    .ir-strip-item { padding: 1.2rem 1rem; }
    .ir-strip-value { font-size: 1rem; }
    .ir-link-card { padding: 1.5rem; }
    .ir-contact-card { padding: 1.5rem; }
}
</style>

<!-- ═══════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════ -->
<section class="ir-hero">
    <div class="ir-hero-gradient"></div>
    <div class="ir-hero-glow"></div>
    <div class="ir-hero-pattern"></div>
    <div class="ir-hero-inner">
        <nav class="ir-breadcrumb" data-animate>
            <a href="/">Home</a>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            <span class="active">Investors</span>
        </nav>
        <div class="ir-hero-badge" data-animate>INVESTOR RELATIONS</div>
        <h1 class="ir-hero-title" data-animate>Investor <em>Relations</em></h1>
        <p class="ir-hero-subtitle" data-animate>Listed on NSE (UMANGBOARD) and BSE (539294). Access governance documents, financial results, and shareholder information.</p>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
     QUICK INFO STRIP
     ═══════════════════════════════════════════════ -->
<div class="ir-strip">
    <div class="ir-strip-grid">
        <div class="ir-strip-item" data-animate>
            <div class="ir-strip-label">NSE Symbol</div>
            <div class="ir-strip-value">UMANGBOARD</div>
        </div>
        <div class="ir-strip-item" data-animate>
            <div class="ir-strip-label">BSE Code</div>
            <div class="ir-strip-value">539294</div>
        </div>
        <div class="ir-strip-item" data-animate>
            <div class="ir-strip-label">CIN</div>
            <div class="ir-strip-value" style="font-size:0.82rem;">U20212RJ1999PLC015397</div>
        </div>
        <div class="ir-strip-item" data-animate>
            <div class="ir-strip-label">GSTIN</div>
            <div class="ir-strip-value">08AAACU3931H1ZE</div>
        </div>
    </div>
</div>

<!-- ═══════════════════════════════════════════════
     01 — QUICK LINKS
     ═══════════════════════════════════════════════ -->
<section class="ir-section">
    <div class="ir-section-label" data-animate><span></span> 01</div>
    <h2 class="ir-section-title" data-animate>Quick Links</h2>
    <p class="ir-section-desc" data-animate>Access all investor-related documents, governance information, and financial data.</p>

    <div class="ir-links-grid">

        <!-- Corporate Governance -->
        <a href="/investors/corporate-governance/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Corporate Governance</div>
                <div class="ir-link-desc">Board composition, committees, and governance framework</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Company Information -->
        <a href="/investors/company-information/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M3 7v14M21 7v14M6 21V10h4v11M14 21V10h4v11M10 7V4h4v3M8 7h8"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Company Information</div>
                <div class="ir-link-desc">CIN, GSTIN, registered office, and key identifiers</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Financial Results -->
        <a href="/investors/financial-results/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Financial Results</div>
                <div class="ir-link-desc">Quarterly and annual financial performance data</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Shareholding Pattern -->
        <a href="/investors/shareholding-pattern/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 2a10 10 0 0 1 0 20"/><path d="M12 12L12 2"/><path d="M12 12l7.07 7.07"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Shareholding Pattern</div>
                <div class="ir-link-desc">Promoter, institutional, and public shareholding details</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Annual Reports -->
        <a href="/investors/annual-reports/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8M16 17H8M10 9H8"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Annual Reports</div>
                <div class="ir-link-desc">Download yearly annual reports and financial statements</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Board Meetings -->
        <a href="/investors/board-meetings/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Board Meetings</div>
                <div class="ir-link-desc">Schedule and outcomes of board meetings</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Dividend History -->
        <a href="/investors/dividend-history/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Dividend History</div>
                <div class="ir-link-desc">Record of past dividend distributions to shareholders</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Investor Grievance -->
        <a href="/investors/investor-grievance/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Investor Grievance</div>
                <div class="ir-link-desc">Contact details for grievance redressal and compliance</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Policies -->
        <a href="/investors/code-of-conduct/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Policies &amp; Code of Conduct</div>
                <div class="ir-link-desc">Code of conduct, CSR policy, EHS policy, and more</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

    </div>
</section>

<!-- ═══════════════════════════════════════════════
     02 — KEY CONTACTS
     ═══════════════════════════════════════════════ -->
<section class="ir-section">
    <div class="ir-section-label" data-animate><span></span> 02</div>
    <h2 class="ir-section-title" data-animate>Key Contacts</h2>
    <p class="ir-section-desc" data-animate>For investor queries, grievance redressal, or share transfer matters.</p>

    <div class="ir-contacts-grid">

        <!-- Company Secretary -->
        <div class="ir-contact-card" data-animate>
            <div class="ir-contact-tag">Company Secretary &amp; Compliance Officer</div>
            <div class="ir-contact-name">Ayush Vijay</div>
            <div class="ir-contact-role">Investor Grievance Redressal</div>
            <div class="ir-contact-detail">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <a href="mailto:cs@umangboards.com">cs@umangboards.com</a>
            </div>
            <div class="ir-contact-detail">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                <a href="tel:+911412379414">+91-141-2379414</a>
            </div>
            <div class="ir-contact-detail">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>Umang House, 7-B Bharat Mata Path, C-Scheme, Jaipur 302001</span>
            </div>
        </div>

        <!-- Registrar -->
        <div class="ir-contact-card" data-animate>
            <div class="ir-contact-tag">Registrar &amp; Share Transfer Agent</div>
            <div class="ir-contact-name">Bigshare Services Private Limited</div>
            <div class="ir-contact-role">Share transfers, dematerialization, and related queries</div>
            <div class="ir-contact-detail">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                <a href="tel:02262638200">022-6263-8200</a>
            </div>
            <div class="ir-contact-detail">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                <a href="https://www.bigshareonline.com" target="_blank" rel="noopener">www.bigshareonline.com</a>
            </div>
            <div class="ir-contact-detail">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>Pinnacle Business Park, Office No. S6-2, 6th Floor, Mahakali Caves Road, Andheri East, Mumbai 400093</span>
            </div>
        </div>

    </div>
</section>

<!-- ═══════════════════════════════════════════════
     03 — FINANCIAL DOWNLOADS
     ═══════════════════════════════════════════════ -->
<section class="ir-section">
    <div class="ir-section-label" data-animate><span></span> 03</div>
    <h2 class="ir-section-title" data-animate>Financial Downloads</h2>
    <p class="ir-section-desc" data-animate>Download annual reports, quarterly results, and other financial documents.</p>

    <div class="ir-downloads-grid">
        <a href="/investors/annual-reports/" class="ir-download-item" data-animate>
            <div class="ir-download-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
            </div>
            <div class="ir-download-label">Annual Reports</div>
            <div class="ir-download-badge">PDF</div>
        </a>
        <a href="/investors/financial-results/" class="ir-download-item" data-animate>
            <div class="ir-download-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
            </div>
            <div class="ir-download-label">Quarterly Results</div>
            <div class="ir-download-badge">PDF</div>
        </a>
        <a href="/investors/shareholding-pattern/" class="ir-download-item" data-animate>
            <div class="ir-download-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
            </div>
            <div class="ir-download-label">Shareholding Pattern</div>
            <div class="ir-download-badge">PDF</div>
        </a>
        <a href="/investors/code-of-conduct/" class="ir-download-item" data-animate>
            <div class="ir-download-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
            </div>
            <div class="ir-download-label">Code of Conduct</div>
            <div class="ir-download-badge">PDF</div>
        </a>
        <a href="/investors/csr-policy/" class="ir-download-item" data-animate>
            <div class="ir-download-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
            </div>
            <div class="ir-download-label">CSR Policy</div>
            <div class="ir-download-badge">PDF</div>
        </a>
        <a href="/investors/ehs-policy/" class="ir-download-item" data-animate>
            <div class="ir-download-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
            </div>
            <div class="ir-download-label">EHS Policy</div>
            <div class="ir-download-badge">PDF</div>
        </a>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
     CTA BANNER
     ═══════════════════════════════════════════════ -->
<section class="ir-cta">
    <div class="ir-cta-glow"></div>
    <div class="ir-cta-inner">
        <h2 class="ir-cta-title" data-animate>Have an investor query?</h2>
        <p class="ir-cta-desc" data-animate>Our Company Secretary and Compliance Officer is available to address all investor concerns and grievances.</p>
        <a href="/investors/investor-grievance/" class="ir-cta-btn" data-animate>
            Contact Investor Relations
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</section>

<?php get_footer(); ?>

<!-- GSAP Animations -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined') return;

    gsap.registerPlugin(ScrollTrigger);

    // Simple fadeUp for all [data-animate] elements
    document.querySelectorAll('[data-animate]').forEach(function(el, i) {
        gsap.from(el, {
            y: 30,
            opacity: 0,
            duration: 0.8,
            delay: i < 4 ? i * 0.1 : 0,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 90%',
                once: true
            }
        });
    });
});
</script>
