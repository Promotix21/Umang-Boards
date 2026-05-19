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
    background: #fdf9f4;
    color: var(--navy);
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 10rem;
    overflow: hidden;
}
.ir-hero-gradient {
    position: absolute; inset: 0;
    background: none;
}
.ir-hero-glow {
    position: absolute; inset: 0;
    background: radial-gradient(circle at 70% 30%, rgba(212,168,67,0.12) 0%, transparent 50%);
    pointer-events: none;
}
.ir-hero-pattern {
    position: absolute; inset: 0; opacity: 1;
    background-image: radial-gradient(circle, rgba(11,31,58,0.06) 1px, transparent 1px);
    background-size: 24px 24px;
    pointer-events: none;
}
.ir-hero-accent {
    position: absolute;
    left: clamp(1.5rem, 4vw, 3.5rem);
    top: calc(var(--utility-h) + var(--header-h) + 2rem);
    bottom: 2rem;
    width: 4px;
    background: linear-gradient(to bottom, var(--gold), rgba(212,168,67,0.2));
    z-index: 1;
}
.ir-hero-inner {
    position: relative; z-index: 2;
    max-width: 1400px; margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ir-breadcrumb {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.72rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.15em; color: rgba(11,31,58,0.4);
    margin-bottom: 2rem;
}
.ir-breadcrumb a { color: rgba(11,31,58,0.4); text-decoration: none; transition: color 0.3s; }
.ir-breadcrumb a:hover { color: var(--gold); }
.ir-breadcrumb .active { color: var(--gold); }
.ir-breadcrumb svg { width: 12px; height: 12px; }
.ir-hero-badge {
    display: inline-flex; align-items: center;
    padding: 0.4rem 1rem;
    background: rgba(212,168,67,0.1);
    border: 1px solid rgba(212,168,67,0.25);
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
    color: var(--text-secondary);
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
    background: linear-gradient(145deg, #f2e0c8 0%, #e8caa4 45%, #ddb880 100%); color: var(--navy);
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
    font-size: 1.05rem; color: var(--text-secondary);
    margin-bottom: 2rem; line-height: 1.6;
}

/* ============================================
   REGULATION 46 DISCLOSURE TABLE
   ============================================ */
.inv-reg46-section {
    max-width: 1400px; margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem) clamp(4rem, 8vw, 7rem);
}
.inv-reg46-header {
    margin-bottom: 2.5rem;
}
.inv-reg46-label {
    display: inline-flex; align-items: center; gap: 0.75rem;
    font-size: 0.72rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.15em;
    color: var(--text-muted); margin-bottom: 1rem;
}
.inv-reg46-label span {
    display: inline-block; width: 32px; height: 1px;
    background: var(--gold);
}
.inv-reg46-title {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700; color: var(--text-primary);
    letter-spacing: -0.02em; margin-bottom: 1rem;
    line-height: 1.15;
}
.inv-reg46-desc {
    font-size: 1.05rem; color: var(--text-secondary);
    line-height: 1.65; max-width: 700px;
}
.inv-reg46-table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid rgba(11,31,58,0.08);
    background: #fff;
    box-shadow: 0 4px 24px rgba(11,31,58,0.04);
}
.inv-reg46-table thead th {
    background: var(--navy);
    color: #fff;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    padding: 1rem 1.5rem;
    text-align: left;
    border-bottom: 2px solid var(--gold);
}
.inv-reg46-table thead th:first-child {
    width: 60px; text-align: center;
}
.inv-reg46-table thead th:last-child {
    width: 180px; text-align: center;
}
.inv-reg46-table tbody tr {
    border-bottom: 1px solid rgba(11,31,58,0.06);
    transition: background 0.25s;
}
.inv-reg46-table tbody tr:nth-child(even) {
    background: rgba(11,31,58,0.02);
}
.inv-reg46-table tbody tr:hover {
    background: rgba(200,168,75,0.06);
}
.inv-reg46-table tbody td {
    padding: 0.9rem 1.5rem;
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.45;
    vertical-align: middle;
}
.inv-reg46-table tbody td:first-child {
    text-align: center;
    font-weight: 700;
    color: var(--navy);
    font-size: 0.82rem;
}
.inv-reg46-table tbody td:last-child {
    text-align: center;
}
.inv-reg46-link {
    display: inline-flex; align-items: center; gap: 0.4rem;
    padding: 0.35rem 0.9rem;
    font-size: 0.75rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.08em;
    text-decoration: none;
    border-radius: 3px;
    transition: all 0.3s;
}
.inv-reg46-link--doc {
    color: var(--navy);
    background: rgba(11,31,58,0.06);
    border: 1px solid rgba(11,31,58,0.1);
}
.inv-reg46-link--doc:hover {
    background: var(--navy); color: #fff;
}
.inv-reg46-link--page {
    color: var(--gold-dark);
    background: rgba(200,168,75,0.1);
    border: 1px solid rgba(200,168,75,0.2);
}
.inv-reg46-link--page:hover {
    background: var(--gold); color: var(--navy);
}
.inv-reg46-link svg {
    width: 14px; height: 14px;
}
.inv-reg46-na {
    font-size: 0.78rem;
    color: var(--text-faint);
    font-weight: 600;
    font-style: italic;
}

/* ============================================
   INVESTOR SUB-SECTION ACCORDIONS
   ============================================ */
.inv-sections {
    max-width: 1400px; margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem) clamp(4rem, 8vw, 7rem);
}
.inv-sections-header {
    margin-bottom: 2.5rem;
}
.inv-sections-label {
    display: inline-flex; align-items: center; gap: 0.75rem;
    font-size: 0.72rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.15em;
    color: var(--text-muted); margin-bottom: 1rem;
}
.inv-sections-label span {
    display: inline-block; width: 32px; height: 1px;
    background: var(--gold);
}
.inv-sections-title {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700; color: var(--text-primary);
    letter-spacing: -0.02em; margin-bottom: 1rem;
    line-height: 1.15;
}
.inv-sections-desc {
    font-size: 1.05rem; color: var(--text-secondary);
    line-height: 1.65; max-width: 700px;
}
.inv-accordion {
    display: flex; flex-direction: column;
    gap: 0;
    border: 1px solid rgba(11,31,58,0.12);
    background: #fff;
    box-shadow: 0 8px 32px rgba(11,31,58,0.08);
    border-radius: 4px;
    overflow: hidden;
}
.inv-accordion-item {
    border-bottom: none;
}
.inv-accordion-item:last-child {
    border-bottom: none;
}
.inv-accordion-item:last-child .inv-accordion-trigger {
    border-bottom: none;
}
.inv-accordion-trigger {
    width: 100%;
    display: flex; align-items: center; gap: 1rem;
    padding: 1.15rem 1.5rem;
    background: var(--navy); border: none;
    cursor: pointer;
    font-family: var(--font-body);
    text-align: left;
    transition: background 0.3s;
    position: relative;
    border-bottom: 1px solid rgba(255,255,255,0.08);
}
.inv-accordion-trigger:hover {
    background: var(--navy-light);
}
.inv-accordion-item.is-open .inv-accordion-trigger {
    background: var(--navy-light);
    border-bottom-color: var(--gold);
}
.inv-accordion-icon {
    flex-shrink: 0;
    width: 38px; height: 38px;
    display: flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.08);
    border-radius: 6px;
    color: rgba(255,255,255,0.7);
    transition: all 0.3s;
}
.inv-accordion-item.is-open .inv-accordion-icon {
    background: rgba(200,168,75,0.15);
    color: var(--gold);
}
.inv-accordion-icon svg {
    width: 18px; height: 18px;
}
.inv-accordion-title {
    flex: 1;
    font-size: 0.95rem; font-weight: 700;
    color: #fff;
    line-height: 1.35;
}
.inv-accordion-item.is-open .inv-accordion-title {
    color: var(--gold-light);
}
.inv-accordion-chevron {
    flex-shrink: 0;
    width: 24px; height: 24px;
    color: var(--gold);
    transition: transform 0.4s var(--ease-out-expo), color 0.3s;
}
.inv-accordion-item.is-open .inv-accordion-chevron {
    transform: rotate(180deg);
    color: var(--gold-light);
}
.inv-accordion-panel {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.45s var(--ease-out-expo);
}
.inv-accordion-content {
    padding: 1.25rem 1.5rem 1.5rem 4.75rem;
    background: #fff;
    border-bottom: 1px solid rgba(11,31,58,0.06);
}
.inv-accordion-placeholder {
    display: flex; align-items: center; gap: 0.75rem;
    padding: 1rem 1.25rem;
    background: var(--bg-secondary);
    border-left: 3px solid var(--gold);
    font-size: 0.88rem;
    color: var(--text-muted);
    line-height: 1.5;
}
.inv-accordion-placeholder svg {
    width: 18px; height: 18px; flex-shrink: 0;
    color: var(--gold);
}
.inv-accordion-subitems {
    list-style: none;
    padding: 0; margin: 0;
    display: flex; flex-direction: column;
    gap: 0.5rem;
}
.inv-accordion-subitems li {
    display: flex; align-items: center; gap: 0.6rem;
    padding: 0.5rem 0;
    font-size: 0.88rem;
    color: var(--text-secondary);
    border-bottom: 1px solid rgba(11,31,58,0.04);
}
.inv-accordion-subitems li:last-child { border-bottom: none; }
.inv-accordion-subitems li svg {
    width: 15px; height: 15px; flex-shrink: 0;
    color: var(--gold);
}
.inv-accordion-download {
    display: inline-flex; align-items: center; gap: 0.4rem;
    padding: 0.3rem 0.8rem;
    font-size: 0.72rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.06em;
    color: var(--navy);
    background: rgba(11,31,58,0.05);
    border: 1px solid rgba(11,31,58,0.1);
    border-radius: 3px;
    text-decoration: none;
    transition: all 0.3s;
    margin-left: auto;
}
.inv-accordion-download:hover {
    background: var(--navy); color: #fff;
}
.inv-accordion-download svg {
    width: 12px; height: 12px;
}

/* --- RESPONSIVE --- */
@media (max-width: 900px) {
    .ir-strip-grid { grid-template-columns: repeat(2, 1fr); }
    .ir-links-grid { grid-template-columns: 1fr; }
    .ir-contacts-grid { grid-template-columns: 1fr; }
    .ir-downloads-grid { grid-template-columns: 1fr; }
    .inv-reg46-table thead th:last-child { width: 140px; }
    .inv-accordion-content { padding-left: 1.5rem; }
}
@media (max-width: 600px) {
    .ir-hero { padding-bottom: 8rem; }
    .ir-strip-grid { grid-template-columns: 1fr 1fr; }
    .ir-strip-item { padding: 1.2rem 1rem; }
    .ir-strip-value { font-size: 1rem; }
    .ir-link-card { padding: 1.5rem; }
    .ir-contact-card { padding: 1.5rem; }
    .inv-reg46-table { display: block; overflow-x: auto; -webkit-overflow-scrolling: touch; }
    .inv-reg46-table thead th,
    .inv-reg46-table tbody td { padding: 0.7rem 1rem; font-size: 0.82rem; }
    .inv-accordion-trigger { padding: 1rem; gap: 0.75rem; }
    .inv-accordion-icon { width: 32px; height: 32px; }
    .inv-accordion-title { font-size: 0.88rem; }
    .inv-accordion-content { padding-left: 1rem; padding-right: 1rem; }
}
</style>

<!-- ═══════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════ -->
<section class="ir-hero">
    <div class="ir-hero-gradient"></div>
    <div class="ir-hero-glow"></div>
    <div class="ir-hero-pattern"></div>
    <div class="ir-hero-accent"></div>
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

        <!-- Shareholding Pattern -->
        <a href="/investors/shareholding-pattern/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 2a10 10 0 0 1 0 20"/><path d="M12 12L12 2"/><path d="M12 12l7.07 7.07"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Shareholding Pattern</div>
                <div class="ir-link-desc">Quarterly promoter, institutional, and public shareholding details</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Disclosure under Regulation 46 -->
        <a href="/investors/disclosure-regulation-46/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 14l2 2 4-4"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Disclosure under Regulation 46</div>
                <div class="ir-link-desc">SEBI LODR compliance disclosures and regulatory documents</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Corporate Social Responsibility -->
        <a href="/investors/corporate-social-responsibility/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Corporate Social Responsibility</div>
                <div class="ir-link-desc">CSR expense reports, policies, and community initiatives</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Stock Exchange Disclosures -->
        <a href="/investors/stock-exchange-disclosures/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Stock Exchange Disclosures</div>
                <div class="ir-link-desc">Board meeting outcomes, press releases, and regulatory filings</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Material Documents & Contracts -->
        <a href="/investors/material-documents/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8M16 17H8"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Material Documents &amp; Contracts</div>
                <div class="ir-link-desc">MOA, AOA, board resolutions, and key corporate documents</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Board of Directors & Committees -->
        <a href="/investors/board-and-committees/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Board of Directors &amp; Committees</div>
                <div class="ir-link-desc">Board composition, committee structure, and member profiles</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Company Financial Information -->
        <a href="/investors/company-financial-information/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M3 7v14M21 7v14M6 21V10h4v11M14 21V10h4v11M10 7V4h4v3M8 7h8"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Company Financial Information</div>
                <div class="ir-link-desc">Trading window notices, board meeting outcomes, and financial results</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Group Company Financial Information -->
        <a href="/investors/group-company-financials/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="8" height="14" rx="1"/><rect x="14" y="3" width="8" height="18" rx="1"/><path d="M5 11h2M5 14h2M5 17h2M17 7h2M17 10h2M17 13h2M17 16h2"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Group Company Financials</div>
                <div class="ir-link-desc">Financial statements for subsidiary and group companies</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Annual Reports -->
        <a href="/investors/annual-reports/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8M16 17H8M10 9H8"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Annual Reports</div>
                <div class="ir-link-desc">Annual reports, AGM notices, returns, and compliance certificates</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Schedule of Analyst/Investor Meets -->
        <a href="/investors/analyst-investor-meets/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Analyst / Investor Meets</div>
                <div class="ir-link-desc">Schedules, presentations, earnings call recordings, and transcripts</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Policies -->
        <a href="/investors/policies/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Policies</div>
                <div class="ir-link-desc">Code of conduct, insider trading, related party, dividend, and more</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Shareholders Meeting -->
        <a href="/investors/shareholders-meeting/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Shareholders Meeting</div>
                <div class="ir-link-desc">AGM, EGM notices, voting results, and postal ballot documents</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Corporate Governance -->
        <a href="/investors/corporate-governance/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Corporate Governance</div>
                <div class="ir-link-desc">Quarterly filings, share capital audit, compliance reports, and contacts</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- IPO Documents -->
        <a href="/investors/ipo-documents/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 11v6M9 14h6"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">IPO Documents</div>
                <div class="ir-link-desc">Red Herring Prospectus, Final Prospectus, and listing documents</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Newspaper Advertisements -->
        <a href="/investors/newspaper-advertisements/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 22h16a2 2 0 002-2V4a2 2 0 00-2-2H8a2 2 0 00-2 2v16a2 2 0 01-2 2zm0 0a2 2 0 01-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8M18 18h-8M18 10h-8"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Newspaper Advertisements</div>
                <div class="ir-link-desc">Published newspaper notices, financial result advertisements</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Credit Ratings -->
        <a href="/investors/credit-ratings/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Credit Ratings</div>
                <div class="ir-link-desc">Outstanding instrument credit ratings and rating reports</div>
            </div>
            <div class="ir-link-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
        </a>

        <!-- Investor Grievance -->
        <a href="/investors/investor-grievance/" class="ir-link-card" data-animate>
            <div class="ir-link-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
            </div>
            <div class="ir-link-body">
                <div class="ir-link-title">Investor Grievance</div>
                <div class="ir-link-desc">Contact details for grievance redressal and compliance officer</div>
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
        <a href="/investors/company-financial-information/" class="ir-download-item" data-animate>
            <div class="ir-download-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
            </div>
            <div class="ir-download-label">Financial Results</div>
            <div class="ir-download-badge">PDF</div>
        </a>
        <a href="/investors/shareholding-pattern/" class="ir-download-item" data-animate>
            <div class="ir-download-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
            </div>
            <div class="ir-download-label">Shareholding Pattern</div>
            <div class="ir-download-badge">PDF</div>
        </a>
        <a href="/investors/policies/" class="ir-download-item" data-animate>
            <div class="ir-download-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
            </div>
            <div class="ir-download-label">Policies &amp; Code of Conduct</div>
            <div class="ir-download-badge">PDF</div>
        </a>
        <a href="/investors/corporate-governance/" class="ir-download-item" data-animate>
            <div class="ir-download-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
            </div>
            <div class="ir-download-label">Corporate Governance</div>
            <div class="ir-download-badge">PDF</div>
        </a>
        <a href="/investors/corporate-social-responsibility/" class="ir-download-item" data-animate>
            <div class="ir-download-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
            </div>
            <div class="ir-download-label">CSR Reports</div>
            <div class="ir-download-badge">PDF</div>
        </a>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
     04 — DISCLOSURE UNDER REGULATION 46
     ═══════════════════════════════════════════════ -->
<section class="inv-reg46-section">
    <div class="inv-reg46-header" data-animate>
        <div class="inv-reg46-label"><span></span> 04</div>
        <h2 class="inv-reg46-title">Disclosure under Regulation 46</h2>
        <p class="inv-reg46-desc">Disclosures as required under Regulation 46 of the SEBI (Listing Obligations and Disclosure Requirements) Regulations, 2015.</p>
    </div>

    <table class="inv-reg46-table" data-animate>
        <thead>
            <tr>
                <th>Sr.</th>
                <th>Particulars</th>
                <th>Link / Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Details of Business</td>
                <td><a href="/about/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Memorandum of Association and Articles of Association</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg> Download</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Brief profile of Board of Directors</td>
                <td><a href="/leadership/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Terms &amp; Conditions of Appointment of Independent Director</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg> Download</a></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Composition of Committees of Board of Directors</td>
                <td><a href="/investors/board-and-committees/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Code of Conduct for Directors and Senior Management</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg> Download</a></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Vigil mechanism / Whistle Blower policy</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg> Download</a></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Criteria of making payments to Non-Executive Directors</td>
                <td><span class="inv-reg46-na">N/A</span></td>
            </tr>
            <tr>
                <td>9</td>
                <td>Policy on dealing with Related Party Transactions</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg> Download</a></td>
            </tr>
            <tr>
                <td>10</td>
                <td>Policy for determining Material Subsidiaries</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg> Download</a></td>
            </tr>
            <tr>
                <td>11</td>
                <td>Details of Familiarization Programmes imparted to Independent Directors</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg> Download</a></td>
            </tr>
            <tr>
                <td>12</td>
                <td>Contact details for Grievance Redressal</td>
                <td><a href="/investors/corporate-governance/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>13</td>
                <td>Notice of meeting of the board of directors where financial results shall be discussed</td>
                <td><a href="/investors/company-financial-information/#notice-trading-window" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>14</td>
                <td>Financial results (post Board Meeting)</td>
                <td><a href="/investors/company-financial-information/#outcome-board-meeting" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>15</td>
                <td>Annual Report</td>
                <td><a href="/investors/newspaper-advertisements/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>16</td>
                <td>Shareholding Pattern</td>
                <td><a href="/investors/shareholding-pattern/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>17</td>
                <td>Agreements with media companies and/or their associates</td>
                <td><span class="inv-reg46-na">Not Applicable</span></td>
            </tr>
            <tr>
                <td>18</td>
                <td>Schedule of analysts / institutional investors meet</td>
                <td><a href="/investors/analyst-investor-meets/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>19</td>
                <td>Audio/video recordings of quarterly earnings calls</td>
                <td><a href="/investors/analyst-investor-meets/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>20</td>
                <td>New / Old name of the listed entity</td>
                <td><span class="inv-reg46-na">Not Applicable</span></td>
            </tr>
            <tr>
                <td>21</td>
                <td>Newspaper Publications</td>
                <td><a href="/investors/newspaper-advertisements/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>22</td>
                <td>Credit ratings (outstanding instruments)</td>
                <td><span class="inv-reg46-na">—</span></td>
            </tr>
            <tr>
                <td>23</td>
                <td>Subsidiary Financial Statements</td>
                <td><a href="/investors/group-company-financials/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>24</td>
                <td>Secretarial Compliance Report</td>
                <td><a href="/investors/corporate-governance/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>25</td>
                <td>Policy for materiality of events/information</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg> Download</a></td>
            </tr>
            <tr>
                <td>26</td>
                <td>Authorised Personnel for Stock Exchange disclosure</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg> Download</a></td>
            </tr>
            <tr>
                <td>27</td>
                <td>Disclosures under Reg. 30(8)</td>
                <td><a href="/investors/stock-exchange-disclosures/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>28</td>
                <td>Statements of deviation/variation (Reg. 32)</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>29</td>
                <td>Dividend Distribution Policy</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg> Download</a></td>
            </tr>
            <tr>
                <td>30</td>
                <td>Annual Return (Section 92, Companies Act 2013)</td>
                <td><a href="/investors/annual-reports/" class="inv-reg46-link inv-reg46-link--page"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
            <tr>
                <td>31</td>
                <td>Employee Benefit Scheme &mdash; ESOP 2021</td>
                <td><a href="#" class="inv-reg46-link inv-reg46-link--doc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg> View</a></td>
            </tr>
        </tbody>
    </table>
</section>

<!-- ═══════════════════════════════════════════════
     05 — INVESTOR DOCUMENT SECTIONS
     ═══════════════════════════════════════════════ -->
<section class="inv-sections">
    <div class="inv-sections-header" data-animate>
        <div class="inv-sections-label"><span></span> 05</div>
        <h2 class="inv-sections-title">Investor Documents &amp; Information</h2>
        <p class="inv-sections-desc">Browse all investor-related documents, filings, and disclosures organized by category.</p>
    </div>

    <div class="inv-accordion" data-animate>

        <!-- 1. Shareholding Pattern -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 2a10 10 0 0 1 0 20"/><path d="M12 12L12 2"/><path d="M12 12l7.07 7.07"/></svg></div>
                <div class="inv-accordion-title">Shareholding Pattern</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Stock Exchange Disclosures -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 20V10M12 20V4M6 20v-6"/></svg></div>
                <div class="inv-accordion-title">Stock Exchange Disclosures</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Material Documents and Contracts -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8M16 17H8"/></svg></div>
                <div class="inv-accordion-title">Material Documents and Contracts</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Red Herring Prospectus / Prospectus / IPO Documents -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 11v6M9 14h6"/></svg></div>
                <div class="inv-accordion-title">Red Herring Prospectus / Prospectus / IPO Documents</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. Company Financial Information -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M3 7v14M21 7v14M6 21V10h4v11M14 21V10h4v11M10 7V4h4v3M8 7h8"/></svg></div>
                <div class="inv-accordion-title">Company Financial Information</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. Notice of Trading Window Closure -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                <div class="inv-accordion-title">Notice of Trading Window Closure</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 7. Notice of Board Meeting -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <div class="inv-accordion-title">Notice of Board Meeting</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 8. Outcome of Board Meeting -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 14l2 2 4-4"/></svg></div>
                <div class="inv-accordion-title">Outcome of Board Meeting</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 9. Newspaper Advertisement -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 22h16a2 2 0 002-2V4a2 2 0 00-2-2H8a2 2 0 00-2 2v16a2 2 0 01-2 2zm0 0a2 2 0 01-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8M18 18h-8M18 10h-8"/></svg></div>
                <div class="inv-accordion-title">Newspaper Advertisement</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 10. Group Company Financial Information -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="8" height="14" rx="1"/><rect x="14" y="3" width="8" height="18" rx="1"/><path d="M5 11h2M5 14h2M5 17h2M17 7h2M17 10h2M17 13h2M17 16h2"/></svg></div>
                <div class="inv-accordion-title">Group Company Financial Information</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 11. Annual Report -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8M16 17H8M10 9H8"/></svg></div>
                <div class="inv-accordion-title">Annual Report</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 12. Schedule of Analyst/Investor Meets -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <div class="inv-accordion-title">Schedule of Analyst / Investor Meets</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <ul class="inv-accordion-subitems">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            Intimations of Schedule of Analysts or Institutional Meet Post Earnings call
                            <span style="flex:1"></span>
                            <span class="inv-reg46-na">Coming soon</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                            Presentations prepared
                            <span style="flex:1"></span>
                            <span class="inv-reg46-na">Coming soon</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>
                            Outcome of Investors Meet (Audio/Video Recordings)
                            <span style="flex:1"></span>
                            <span class="inv-reg46-na">Coming soon</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8M16 17H8M10 9H8"/></svg>
                            Transcripts of calls
                            <span style="flex:1"></span>
                            <span class="inv-reg46-na">Coming soon</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 13. Policies -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <div class="inv-accordion-title">Policies</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <div class="inv-accordion-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                        Documents will be uploaded soon.
                    </div>
                </div>
            </div>
        </div>

        <!-- 14. Share Holders Meeting -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <div class="inv-accordion-title">Share Holders Meeting</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <ul class="inv-accordion-subitems">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                            AGM (Annual General Meeting)
                            <span style="flex:1"></span>
                            <span class="inv-reg46-na">Coming soon</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                            EGM (Extraordinary General Meeting)
                            <span style="flex:1"></span>
                            <span class="inv-reg46-na">Coming soon</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            Postal Ballot
                            <span style="flex:1"></span>
                            <span class="inv-reg46-na">Coming soon</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 15. Corporate Governance -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div>
                <div class="inv-accordion-title">Corporate Governance</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <ul class="inv-accordion-subitems">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            Quarterly Integrated Filing (Governance)
                            <span style="flex:1"></span>
                            <span class="inv-reg46-na">Coming soon</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 14l2 2 4-4"/></svg>
                            Reconciliation of Share Capital Audit
                            <span style="flex:1"></span>
                            <span class="inv-reg46-na">Coming soon</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                            RTA Certificate under Reg 74(5) of DP Regulations
                            <span style="flex:1"></span>
                            <span class="inv-reg46-na">Coming soon</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            Annual secretarial Compliance Report (Regulation 24 A)
                            <span style="flex:1"></span>
                            <span class="inv-reg46-na">Coming soon</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 16. Corporate Social Responsibility -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></div>
                <div class="inv-accordion-title">Corporate Social Responsibility</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <ul class="inv-accordion-subitems">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15l3 3 3-3"/></svg>
                            CSR Expenses
                            <a href="#" class="inv-accordion-download">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 18v-6M9 15l3 3 3-3"/><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/></svg>
                                Download
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 17. Contact -->
        <div class="inv-accordion-item">
            <button class="inv-accordion-trigger" aria-expanded="false">
                <div class="inv-accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                <div class="inv-accordion-title">Contact</div>
                <svg class="inv-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="inv-accordion-panel">
                <div class="inv-accordion-content">
                    <ul class="inv-accordion-subitems">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            Company Secretary &amp; Compliance Officer: <a href="mailto:cs@umangboards.com" style="color:var(--navy);text-decoration:none;font-weight:600;">cs@umangboards.com</a>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                            Phone: <a href="tel:+911412379414" style="color:var(--navy);text-decoration:none;font-weight:600;">+91-141-2379414</a>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Umang House, 7-B Bharat Mata Path, C-Scheme, Jaipur 302001
                        </li>
                    </ul>
                </div>
            </div>
        </div>

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
        <a href="/investors/investor-grievance/" class="btn-gold" data-animate>
            Contact Investor Relations
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</section>

<?php get_footer(); ?>

<!-- Accordion Toggle JS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Accordion toggle
    document.querySelectorAll('.inv-accordion-trigger').forEach(function(trigger) {
        trigger.addEventListener('click', function() {
            var item = this.closest('.inv-accordion-item');
            var isOpen = item.classList.contains('is-open');
            var panel = item.querySelector('.inv-accordion-panel');

            // Close all siblings
            item.parentElement.querySelectorAll('.inv-accordion-item.is-open').forEach(function(openItem) {
                if (openItem !== item) {
                    openItem.classList.remove('is-open');
                    openItem.querySelector('.inv-accordion-trigger').setAttribute('aria-expanded', 'false');
                    openItem.querySelector('.inv-accordion-panel').style.maxHeight = null;
                }
            });

            // Toggle current
            if (isOpen) {
                item.classList.remove('is-open');
                this.setAttribute('aria-expanded', 'false');
                panel.style.maxHeight = null;
            } else {
                item.classList.add('is-open');
                this.setAttribute('aria-expanded', 'true');
                panel.style.maxHeight = panel.scrollHeight + 'px';
            }
        });
    });
});
</script>

<!-- GSAP Animations -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined') return;

    gsap.registerPlugin(ScrollTrigger);

    // clipPath wipe for section-level title headings
    UBL.wipeIn('.ir-section-title', { delay: 0.1 });
    UBL.wipeIn('.inv-reg46-title', { delay: 0.1 });
    UBL.wipeIn('.inv-sections-title', { delay: 0.1 });
    UBL.wipeIn('.ir-cta-title', { delay: 0.1 });

    // Simple fadeUp for all other [data-animate] elements
    document.querySelectorAll('[data-animate]').forEach(function(el, i) {
        if (el.matches('.ir-section-title, .inv-reg46-title, .inv-sections-title, .ir-cta-title')) return;
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
