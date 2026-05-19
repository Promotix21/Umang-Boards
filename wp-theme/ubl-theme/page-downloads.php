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
    background: #376eb4;
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

/* --- FILTER BAR --- */
.dl-filters {
    max-width: 1400px;
    margin: 0 auto;
    padding: 3rem clamp(1.5rem, 4vw, 3.5rem) 0;
}
.dl-filters-inner {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    flex-wrap: wrap;
    padding-bottom: 2rem;
    border-bottom: 1px solid rgba(11,31,58,0.08);
}
.dl-filters-label {
    font-size: 0.78rem;
    font-weight: 700;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.12em;
    margin-right: 0.5rem;
}
.dl-filter-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    height: 40px;
    padding: 0 1.25rem;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.1);
    border-radius: 100px;
    font-family: var(--font-body);
    font-size: 0.8rem;
    font-weight: 600;
    color: var(--text-secondary);
    cursor: pointer;
    transition: all 0.3s var(--ease-out-expo);
    white-space: nowrap;
}
.dl-filter-btn:hover {
    border-color: var(--gold);
    color: var(--navy);
    background: rgba(212,168,67,0.06);
}
.dl-filter-btn.active {
    background: var(--navy);
    color: #fff;
    border-color: var(--navy);
}
.dl-filter-btn svg { width: 14px; height: 14px; }

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
    color: var(--text-primary);
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
.dl-card-desc {
    font-size: 0.88rem;
    color: var(--text-secondary);
    line-height: 1.6;
    font-weight: 300;
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
.dl-card-btn--soon {
    background: rgba(11,31,58,0.06);
    color: var(--text-muted);
    cursor: default;
    pointer-events: none;
}
.dl-coming-soon-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    padding: 0.3rem 0.9rem;
    background: rgba(212,168,67,0.12);
    color: var(--gold);
    border-radius: 100px;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}
.dl-coming-soon-pill svg { width: 12px; height: 12px; }

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

/* Filtering hide/show */
.dl-card[data-category].dl-hidden { display: none; }

/* --- RESPONSIVE --- */
@media (max-width: 768px) {
    .dl-grid { grid-template-columns: 1fr; }
    .dl-note-inner { flex-direction: column; text-align: center; }
    .dl-filters-inner { gap: 0.5rem; }
    .dl-filter-btn { height: 36px; padding: 0 1rem; font-size: 0.75rem; }
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
            <h1 class="dl-hero-title">Download Our <em>Resources</em></h1>
            <p class="dl-hero-subtitle">Access certifications, product catalogues, technical data sheets, and corporate documents. Everything you need in one place.</p>
        </div>
    </section>

    <!-- ─── FILTER BAR ─── -->
    <div class="dl-filters">
        <div class="dl-filters-inner">
            <span class="dl-filters-label">Filter by:</span>
            <button class="dl-filter-btn active" data-filter="all">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                All Documents
            </button>
            <button class="dl-filter-btn" data-filter="certifications">Certifications</button>
            <button class="dl-filter-btn" data-filter="catalogues">Catalogues</button>
            <button class="dl-filter-btn" data-filter="tds">Technical Data Sheets</button>
            <button class="dl-filter-btn" data-filter="terms-sales">T&amp;C Sales</button>
            <button class="dl-filter-btn" data-filter="terms-purchase">T&amp;C Purchase</button>
            <button class="dl-filter-btn" data-filter="policy">Policies</button>
            <button class="dl-filter-btn" data-filter="governance">Governance</button>
        </div>
    </div>

    <!-- ─── CERTIFICATIONS ─── -->
    <section class="dl-section" id="certifications">
        <div class="dl-section-eyebrow">01. Certifications</div>
        <h2 class="dl-section-title">Accreditations &amp; Approvals</h2>
        <p class="dl-section-desc">Download our quality certifications, accreditations, and regulatory approval documents.</p>

        <div class="dl-grid">

            <div class="dl-card" data-category="certifications">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <div class="dl-card-name">ISO 9001 Certification</div>
                <div class="dl-card-desc">Quality Management System certification demonstrating our commitment to consistent quality standards.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Certification</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

            <div class="dl-card" data-category="certifications">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <div class="dl-card-name">ISO 14001 Certification</div>
                <div class="dl-card-desc">Environmental Management System certification ensuring responsible environmental practices across our operations.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Certification</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

            <div class="dl-card" data-category="certifications">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <div class="dl-card-name">ISO 45001 Certification</div>
                <div class="dl-card-desc">Occupational Health &amp; Safety Management System certification for workplace safety excellence.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Certification</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

            <div class="dl-card" data-category="certifications">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="dl-card-name">NABL Accreditation</div>
                <div class="dl-card-desc">National Accreditation Board for Testing and Calibration Laboratories accreditation for our in-house testing lab.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Accreditation</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

            <div class="dl-card" data-category="certifications">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <div class="dl-card-name">PGCIL Approval Certificates</div>
                <div class="dl-card-desc">Power Grid Corporation of India Ltd. approval certificates for cellulose insulation pressboards up to 400 kV class.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Approval</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

        </div>
    </section>

    <!-- ─── PRODUCT CATALOGUES ─── -->
    <section class="dl-section" style="padding-top:0;" id="catalogues">
        <div class="dl-section-eyebrow">02. Product Catalogues</div>
        <h2 class="dl-section-title">Technical Literature</h2>
        <p class="dl-section-desc">Browse and download our complete range of product catalogues covering transformer insulation, winding wires, and insulating chemicals.</p>

        <div class="dl-grid">

            <div class="dl-card" data-category="catalogues">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <div class="dl-card-name">Transformer Boards &amp; Insulation Products</div>
                <div class="dl-card-desc">Complete catalogue covering pressboard, pre-compressed board, cylinders, spacers, and all transformer insulation components.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Insulation</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

            <div class="dl-card" data-category="catalogues">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <div class="dl-card-name">Winding Wires Catalogue</div>
                <div class="dl-card-desc">Paper-covered and enamelled copper conductors for power and distribution transformers.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Winding Wires</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

            <div class="dl-card" data-category="catalogues">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <div class="dl-card-name">Insulating Chemicals Catalogue</div>
                <div class="dl-card-desc">Transformer oils, varnishes, adhesives, and specialty chemical formulations for electrical insulation.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Chemicals</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

            <div class="dl-card" data-category="catalogues">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <div class="dl-card-name">Paper &amp; Board Catalogue</div>
                <div class="dl-card-desc">Kraft paper, crepe paper, and speciality pressboard products for the electrical insulation industry.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Pressboard</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

        </div>
    </section>

    <!-- ─── TECHNICAL DATA SHEETS ─── -->
    <section class="dl-section" style="padding-top:0;" id="tech-datasheets">
        <div class="dl-section-eyebrow">03. Technical Data Sheets</div>
        <h2 class="dl-section-title">Product Specifications</h2>
        <p class="dl-section-desc">Download detailed technical data sheets for individual products with full specifications, tolerances, and performance data.</p>

        <div class="dl-grid">
            <div class="dl-card" data-category="tds">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </div>
                <div class="dl-card-name">Pressboard Technical Data Sheet</div>
                <div class="dl-card-desc">Electrical, mechanical, and physical properties of cellulose-based pressboard insulation materials.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">TDS</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

            <div class="dl-card" data-category="tds">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </div>
                <div class="dl-card-name">Winding Wire Technical Data Sheet</div>
                <div class="dl-card-desc">Conductor dimensions, paper wrap thickness, dielectric strength, and resistance values for winding wires.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">TDS</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

            <div class="dl-card" data-category="tds">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </div>
                <div class="dl-card-name">Insulating Chemicals Technical Data Sheet</div>
                <div class="dl-card-desc">Chemical compositions, viscosity, flash points, and application guidelines for insulating chemical products.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">TDS</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>
        </div>
    </section>

    <!-- ─── TERMS & CONDITIONS — SALES ─── -->
    <section class="dl-section" style="padding-top:0;" id="terms-sales">
        <div class="dl-section-eyebrow">04. Terms &amp; Conditions &mdash; Sales</div>
        <h2 class="dl-section-title">Sales Terms</h2>
        <p class="dl-section-desc">Standard terms and conditions governing the sale of our products.</p>

        <div class="dl-grid">
            <div class="dl-card" data-category="terms-sales">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="dl-card-name">Terms &amp; Conditions &mdash; Sales</div>
                <div class="dl-card-desc">Standard terms governing pricing, delivery, warranties, liability, and dispute resolution for all product sales.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Legal</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>
        </div>
    </section>

    <!-- ─── TERMS & CONDITIONS — PURCHASE ─── -->
    <section class="dl-section" style="padding-top:0;" id="terms-purchase">
        <div class="dl-section-eyebrow">05. Terms &amp; Conditions &mdash; Purchase</div>
        <h2 class="dl-section-title">Procurement Terms</h2>
        <p class="dl-section-desc">Standard terms and conditions governing our procurement and purchasing activities.</p>

        <div class="dl-grid">
            <div class="dl-card" data-category="terms-purchase">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="dl-card-name">Terms &amp; Conditions &mdash; Purchase</div>
                <div class="dl-card-desc">Standard terms for procurement covering vendor requirements, payment schedules, quality expectations, and delivery obligations.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Legal</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>
        </div>
    </section>

    <!-- ─── POLICIES & GOVERNANCE ─── -->
    <section class="dl-section" style="padding-top:0;" id="policies">
        <div class="dl-section-eyebrow">06. Policies &amp; Governance</div>
        <h2 class="dl-section-title">Corporate Documents</h2>
        <p class="dl-section-desc">Access our corporate governance documents, privacy policy, and code of conduct.</p>

        <div class="dl-grid">
            <div class="dl-card" data-category="policy">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                </div>
                <div class="dl-card-name">Privacy Policy</div>
                <div class="dl-card-desc">Our commitment to protecting your personal information and how we collect, use, and safeguard data.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Policy</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </div>

            <div class="dl-card" data-category="governance">
                <div class="dl-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg>
                </div>
                <div class="dl-card-name">Code of Conduct</div>
                <div class="dl-card-desc">Our corporate code of conduct outlining ethical standards, business integrity, and expected behaviour for all stakeholders.</div>
                <div class="dl-card-meta">
                    <span class="dl-card-tag">Governance</span>
                    <span class="dl-card-size">PDF</span>
                </div>
                <a href="#" class="dl-card-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
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

    /* ── Category Filter Logic ── */
    var filterBtns = document.querySelectorAll('.dl-filter-btn');
    var allCards = document.querySelectorAll('.dl-card[data-category]');
    var allSections = document.querySelectorAll('.dl-section');

    filterBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var filter = this.getAttribute('data-filter');

            /* Update active button */
            filterBtns.forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');

            if (filter === 'all') {
                /* Show everything */
                allCards.forEach(function(card) { card.classList.remove('dl-hidden'); });
                allSections.forEach(function(sec) { sec.style.display = ''; });
            } else {
                /* Show only matching category */
                allCards.forEach(function(card) {
                    if (card.getAttribute('data-category') === filter) {
                        card.classList.remove('dl-hidden');
                    } else {
                        card.classList.add('dl-hidden');
                    }
                });

                /* Hide sections with no visible cards */
                allSections.forEach(function(sec) {
                    var visibleCards = sec.querySelectorAll('.dl-card[data-category]:not(.dl-hidden)');
                    sec.style.display = visibleCards.length === 0 ? 'none' : '';
                });
            }
        });
    });

    /* ── GSAP ScrollTrigger Animations ── */
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);
    var EASE = 'expo.out';

    /* Hero entrance */
    gsap.from('.dl-breadcrumb, .dl-badge, .dl-hero-title, .dl-hero-subtitle', {
        y: 30, opacity: 0, duration: 0.8, stagger: 0.12, delay: 0.3, ease: EASE
    });

    /* Filter bar */
    gsap.fromTo('.dl-filters-inner',
        { y: 20, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.6, delay: 0.6, ease: EASE }
    );

    /* Section headers */
    document.querySelectorAll('.dl-section').forEach(function(section) {
        var eyebrow = section.querySelector('.dl-section-eyebrow');
        var title = section.querySelector('.dl-section-title');
        var desc = section.querySelector('.dl-section-desc');
        var nonTitles = [eyebrow, desc].filter(Boolean);
        if (nonTitles.length) gsap.fromTo(nonTitles, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: EASE, scrollTrigger: { trigger: section, start: 'top 85%', toggleActions: 'play none none none' } });
        if (title) gsap.fromTo(title, { opacity: 0, y: 40, clipPath: 'inset(0 0 100% 0)' }, { opacity: 1, y: 0, clipPath: 'inset(0 0 0% 0)', duration: 1, delay: 0.1, ease: 'power3.out', scrollTrigger: { trigger: section, start: 'top 85%', once: true } });
    });

    /* Download cards — staggered per grid */
    document.querySelectorAll('.dl-grid').forEach(function(grid) {
        var cards = grid.querySelectorAll('.dl-card');
        gsap.fromTo(cards,
            { y: 40, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: EASE,
              scrollTrigger: { trigger: grid, start: 'top 85%', toggleActions: 'play none none none' }
            }
        );
    });

    /* Note */
    gsap.fromTo('.dl-note-inner',
        { y: 30, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.8, ease: EASE,
          scrollTrigger: { trigger: '.dl-note', start: 'top 90%', toggleActions: 'play none none none' }
        }
    );

    /* Fallback: ensure content visible after 4s */
    setTimeout(function() {
        document.querySelectorAll('.dl-card, .dl-note-inner, .dl-filters-inner').forEach(function(el) { el.style.opacity = '1'; el.style.transform = 'none'; });
    }, 4000);
});
</script>

<?php get_footer(); ?>
