<?php
/**
 * Template Name: Investor Documents
 * Description: Reusable template for all investor sub-pages — tabbed PDF downloads,
 *              year/quarter filtering, pagination, compliance tables, committee accordions.
 *              Modeled after Waaree Energies' investor portal.
 */
get_header();
$uri = UBL_URI;

// Page data from custom meta (JSON-based, no ACF Pro needed)
$subtitle          = get_post_meta( get_the_ID(), 'invdoc_subtitle', true );
$tabs              = json_decode( get_post_meta( get_the_ID(), 'invdoc_tabs_json', true ) ?: '[]', true );
$compliance_table  = json_decode( get_post_meta( get_the_ID(), 'invdoc_compliance_json', true ) ?: '[]', true );
$committees        = json_decode( get_post_meta( get_the_ID(), 'invdoc_committees_json', true ) ?: '[]', true );
$contacts          = json_decode( get_post_meta( get_the_ID(), 'invdoc_contacts_json', true ) ?: '[]', true );
$items_per_page    = 8;
if ( ! is_array( $tabs ) ) $tabs = [];
if ( ! is_array( $compliance_table ) ) $compliance_table = [];
if ( ! is_array( $committees ) ) $committees = [];
if ( ! is_array( $contacts ) ) $contacts = [];
?>

<style>
/* ============================================
   INVESTOR DOCUMENTS — Sub-Page Template
   ============================================ */

/* --- HERO (Slim) --- */
.ivd-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 3rem) 0 4rem;
    overflow: hidden;
}
.ivd-hero-gradient {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, var(--navy) 0%, #1a3a5c 50%, var(--navy) 100%);
}
.ivd-hero-glow {
    position: absolute; inset: 0;
    background: radial-gradient(circle at 70% 30%, rgba(212,168,67,0.1) 0%, transparent 50%);
    pointer-events: none;
}
.ivd-hero-pattern {
    position: absolute; inset: 0; opacity: 0.04;
    background-image: repeating-linear-gradient(0deg, transparent, transparent 60px, rgba(255,255,255,0.5) 60px, rgba(255,255,255,0.5) 61px),
                       repeating-linear-gradient(90deg, transparent, transparent 60px, rgba(255,255,255,0.5) 60px, rgba(255,255,255,0.5) 61px);
    pointer-events: none;
}
.ivd-hero-inner {
    position: relative; z-index: 2;
    max-width: 1400px; margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ivd-breadcrumb {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.72rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.15em;
    color: rgba(255,255,255,0.5); margin-bottom: 2rem;
    flex-wrap: wrap;
}
.ivd-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.ivd-breadcrumb a:hover { color: var(--gold); }
.ivd-breadcrumb .active { color: var(--gold); }
.ivd-breadcrumb svg { width: 12px; height: 12px; flex-shrink: 0; }
.ivd-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4.5vw, 3.2rem);
    font-weight: 700; line-height: 1.1;
    letter-spacing: -0.03em; max-width: 800px;
    margin-bottom: 1rem;
}
.ivd-hero-subtitle {
    font-size: clamp(0.95rem, 1.5vw, 1.1rem);
    color: rgba(255,255,255,0.6);
    max-width: 650px; line-height: 1.65; font-weight: 300;
}

/* --- MAIN CONTENT AREA --- */
.ivd-main {
    max-width: 1400px; margin: 0 auto;
    padding: clamp(3rem, 6vw, 5rem) clamp(1.5rem, 4vw, 3.5rem);
}

/* --- TAB BAR --- */
.ivd-tabs {
    display: flex; gap: 0;
    border-bottom: 2px solid rgba(11,31,58,0.08);
    margin-bottom: 2rem;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
}
.ivd-tabs::-webkit-scrollbar { display: none; }
.ivd-tab {
    padding: 1rem 1.5rem;
    font-size: 0.82rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.08em;
    color: var(--text-muted); cursor: pointer;
    border-bottom: 2px solid transparent;
    margin-bottom: -2px; white-space: nowrap;
    transition: all 0.3s; background: none; border-top: 0; border-left: 0; border-right: 0;
}
.ivd-tab:hover { color: var(--navy); }
.ivd-tab.active {
    color: var(--navy);
    border-bottom-color: var(--gold);
}

/* --- FILTERS --- */
.ivd-filters {
    display: flex; gap: 1rem; align-items: center;
    margin-bottom: 2rem; flex-wrap: wrap;
}
.ivd-filter-label {
    font-size: 0.75rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.1em;
    color: var(--text-muted);
}
.ivd-filter-select {
    padding: 0.55rem 2rem 0.55rem 1rem;
    font-size: 0.85rem; font-weight: 600;
    color: var(--text-primary);
    background: #fff;
    border: 1px solid rgba(11,31,58,0.12);
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%230B1F3A' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    cursor: pointer; transition: border-color 0.3s;
}
.ivd-filter-select:hover { border-color: var(--gold); }
.ivd-filter-reset {
    padding: 0.55rem 1rem;
    font-size: 0.78rem; font-weight: 700;
    color: var(--text-muted); cursor: pointer;
    background: none; border: 1px solid rgba(11,31,58,0.08);
    transition: all 0.3s; text-transform: uppercase; letter-spacing: 0.06em;
}
.ivd-filter-reset:hover { border-color: var(--gold); color: var(--navy); }

/* --- DOCUMENT LIST --- */
.ivd-tab-panel { display: none; }
.ivd-tab-panel.active { display: block; }

.ivd-doc-grid {
    display: grid; gap: 1px;
    background: rgba(11,31,58,0.06);
    border: 1px solid rgba(11,31,58,0.06);
}
.ivd-doc-item {
    display: flex; align-items: center; gap: 1.25rem;
    padding: 1.25rem 1.75rem; background: #fff;
    transition: all 0.3s var(--ease-out-expo);
    text-decoration: none; color: inherit;
}
.ivd-doc-item:hover {
    background: var(--bg-secondary);
}
.ivd-doc-item:hover .ivd-doc-dl { color: var(--gold); transform: translateY(-1px); }
.ivd-doc-icon {
    width: 42px; height: 42px; flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    background: rgba(200,50,50,0.08); border-radius: 6px;
    color: #c03;
}
.ivd-doc-icon svg { width: 22px; height: 22px; }
.ivd-doc-body { flex: 1; min-width: 0; }
.ivd-doc-title {
    font-size: 0.95rem; font-weight: 600;
    color: var(--text-primary); line-height: 1.35;
    margin-bottom: 0.2rem;
}
.ivd-doc-meta {
    display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;
}
.ivd-doc-date {
    font-size: 0.78rem; color: var(--text-muted);
}
.ivd-doc-badge {
    font-size: 0.65rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.06em;
    padding: 0.15rem 0.5rem;
    background: rgba(11,31,58,0.06);
    color: var(--text-muted); border-radius: 3px;
}
.ivd-doc-dl {
    flex-shrink: 0; color: var(--navy);
    transition: all 0.3s;
}
.ivd-doc-dl svg { width: 20px; height: 20px; }

/* Empty state */
.ivd-empty {
    padding: 4rem 2rem; text-align: center;
    background: var(--bg-secondary);
}
.ivd-empty-icon { color: var(--text-muted); margin-bottom: 1rem; }
.ivd-empty-icon svg { width: 48px; height: 48px; }
.ivd-empty-text {
    font-size: 0.95rem; color: var(--text-muted);
}

/* --- PAGINATION --- */
.ivd-pagination {
    display: flex; align-items: center; justify-content: center;
    gap: 0.4rem; margin-top: 2rem;
}
.ivd-page-btn {
    width: 38px; height: 38px;
    display: flex; align-items: center; justify-content: center;
    font-size: 0.85rem; font-weight: 600;
    color: var(--text-muted); background: #fff;
    border: 1px solid rgba(11,31,58,0.1);
    cursor: pointer; transition: all 0.3s;
}
.ivd-page-btn:hover { border-color: var(--gold); color: var(--navy); }
.ivd-page-btn.active {
    background: var(--navy); color: #fff;
    border-color: var(--navy);
}
.ivd-page-btn.disabled {
    opacity: 0.35; pointer-events: none;
}
.ivd-page-btn svg { width: 16px; height: 16px; }
.ivd-page-info {
    font-size: 0.78rem; color: var(--text-muted);
    margin-left: 1rem;
}

/* --- COMPLIANCE TABLE --- */
.ivd-compliance-table {
    width: 100%; border-collapse: collapse;
    margin-bottom: 3rem; font-size: 0.92rem;
}
.ivd-compliance-table th {
    background: var(--navy); color: #fff;
    padding: 0.9rem 1.5rem; text-align: left;
    font-size: 0.78rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.06em;
}
.ivd-compliance-table td {
    padding: 0.85rem 1.5rem;
    border-bottom: 1px solid rgba(11,31,58,0.06);
    color: var(--text-secondary);
}
.ivd-compliance-table tr:nth-child(even) td { background: var(--bg-secondary); }
.ivd-compliance-table tr:hover td { background: rgba(55,110,180,0.04); }
.ivd-compliance-table a {
    color: var(--navy); text-decoration: none;
    font-weight: 600; transition: color 0.3s;
    display: inline-flex; align-items: center; gap: 0.4rem;
}
.ivd-compliance-table a:hover { color: var(--gold); }
.ivd-compliance-table a svg { width: 14px; height: 14px; flex-shrink: 0; }

/* --- COMMITTEES --- */
.ivd-committees { margin-top: 3rem; }
.ivd-committees-title {
    font-size: clamp(1.3rem, 2.5vw, 1.8rem);
    font-weight: 700; color: var(--text-primary);
    letter-spacing: -0.02em; margin-bottom: 1.5rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid var(--gold);
}
.ivd-accordion {
    border: 1px solid rgba(11,31,58,0.08);
    margin-bottom: -1px;
}
.ivd-accordion-header {
    display: flex; align-items: center; justify-content: space-between;
    padding: 1.25rem 1.75rem;
    background: #fff; cursor: pointer;
    transition: background 0.3s;
    border: 0; width: 100%; text-align: left;
}
.ivd-accordion-header:hover { background: var(--bg-secondary); }
.ivd-accordion-name {
    font-size: 0.95rem; font-weight: 700;
    color: var(--text-primary);
    text-transform: uppercase; letter-spacing: 0.04em;
}
.ivd-accordion-chevron {
    width: 20px; height: 20px; color: var(--text-muted);
    transition: transform 0.3s;
}
.ivd-accordion.open .ivd-accordion-chevron { transform: rotate(180deg); }
.ivd-accordion-body {
    max-height: 0; overflow: hidden;
    transition: max-height 0.4s ease;
}
.ivd-accordion.open .ivd-accordion-body { max-height: 600px; }
.ivd-accordion-content {
    padding: 0 1.75rem 1.5rem;
}
.ivd-member {
    display: flex; align-items: center; gap: 1rem;
    padding: 0.75rem 0;
    border-bottom: 1px solid rgba(11,31,58,0.05);
}
.ivd-member:last-child { border-bottom: 0; }
.ivd-member-avatar {
    width: 36px; height: 36px; flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    background: var(--bg-secondary); border-radius: 50%;
    font-size: 0.75rem; font-weight: 700; color: var(--navy);
}
.ivd-member-info { flex: 1; }
.ivd-member-name {
    font-size: 0.9rem; font-weight: 600; color: var(--text-primary);
}
.ivd-member-role {
    font-size: 0.78rem; color: var(--text-muted);
}
.ivd-member-badge {
    font-size: 0.65rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.06em;
    padding: 0.2rem 0.6rem;
    border-radius: 3px;
}
.ivd-member-badge.chairman { background: rgba(212,168,67,0.15); color: #8a6d1b; }
.ivd-member-badge.member { background: rgba(11,31,58,0.06); color: var(--text-muted); }

/* --- CONTACTS --- */
.ivd-contacts { margin-top: 3rem; }
.ivd-contacts-title {
    font-size: clamp(1.3rem, 2.5vw, 1.8rem);
    font-weight: 700; color: var(--text-primary);
    letter-spacing: -0.02em; margin-bottom: 1.5rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid var(--gold);
}
.ivd-contacts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 1.5rem;
}
.ivd-contact-card {
    padding: 2rem; background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
}
.ivd-contact-tag {
    font-size: 0.7rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.1em;
    color: var(--gold); margin-bottom: 0.75rem;
}
.ivd-contact-name {
    font-size: 1.1rem; font-weight: 700;
    color: var(--text-primary); margin-bottom: 1.25rem;
}
.ivd-contact-detail {
    display: flex; align-items: flex-start; gap: 0.6rem;
    font-size: 0.88rem; color: var(--text-secondary);
    margin-bottom: 0.6rem; line-height: 1.5;
}
.ivd-contact-detail svg { width: 16px; height: 16px; flex-shrink: 0; margin-top: 0.15rem; color: var(--navy); }
.ivd-contact-detail a { color: var(--navy); text-decoration: none; transition: color 0.3s; }
.ivd-contact-detail a:hover { color: var(--gold); }

/* --- BACK + NAV --- */
.ivd-nav-bar {
    display: flex; align-items: center; justify-content: space-between;
    gap: 1rem; margin-top: 3rem; padding-top: 2rem;
    border-top: 1px solid rgba(11,31,58,0.08);
    flex-wrap: wrap;
}
.ivd-back-link {
    display: inline-flex; align-items: center; gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    font-size: 0.82rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.1em;
    color: var(--navy); text-decoration: none;
    border: 1px solid rgba(11,31,58,0.15);
    transition: all 0.3s var(--ease-out-expo);
}
.ivd-back-link:hover {
    border-color: var(--gold); color: var(--gold);
    transform: translateX(-3px);
}
.ivd-back-link svg { width: 16px; height: 16px; }

/* --- CTA BANNER --- */
.ivd-cta {
    background: var(--navy); color: #fff;
    padding: clamp(3rem, 6vw, 5rem) 0;
    text-align: center; position: relative; overflow: hidden;
}
.ivd-cta-glow {
    position: absolute; inset: 0;
    background: radial-gradient(circle at center, rgba(212,168,67,0.1) 0%, transparent 60%);
    pointer-events: none;
}
.ivd-cta-inner {
    position: relative; z-index: 2;
    max-width: 700px; margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ivd-cta-title {
    font-size: clamp(1.4rem, 2.5vw, 2rem);
    font-weight: 700; margin-bottom: 0.75rem;
    letter-spacing: -0.02em;
}
.ivd-cta-desc {
    font-size: 1rem; color: rgba(255,255,255,0.6);
    margin-bottom: 1.5rem; line-height: 1.6;
}

/* --- RESPONSIVE --- */
@media (max-width: 900px) {
    .ivd-contacts-grid { grid-template-columns: 1fr; }
    .ivd-tab { padding: 0.85rem 1rem; font-size: 0.75rem; }
}
@media (max-width: 600px) {
    .ivd-hero { padding-bottom: 3rem; }
    .ivd-main { padding: 2rem clamp(1.5rem, 4vw, 3.5rem); }
    .ivd-doc-item { padding: 1rem; gap: 1rem; flex-wrap: wrap; }
    .ivd-doc-icon { width: 36px; height: 36px; }
    .ivd-filters { gap: 0.5rem; }
    .ivd-compliance-table { font-size: 0.82rem; }
    .ivd-compliance-table th, .ivd-compliance-table td { padding: 0.6rem 0.75rem; }
    .ivd-accordion-header { padding: 1rem; }
    .ivd-nav-bar { flex-direction: column; align-items: flex-start; }
}
</style>

<!-- ═══════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════ -->
<section class="ivd-hero">
    <div class="ivd-hero-gradient"></div>
    <div class="ivd-hero-glow"></div>
    <div class="ivd-hero-pattern"></div>
    <div class="ivd-hero-inner">
        <nav class="ivd-breadcrumb" data-animate>
            <a href="/">Home</a>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            <a href="/investors/">Investors</a>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            <span class="active"><?php the_title(); ?></span>
        </nav>
        <h1 class="ivd-hero-title" data-animate><?php the_title(); ?></h1>
        <?php if ( $subtitle ) : ?>
            <p class="ivd-hero-subtitle" data-animate><?php echo esc_html( $subtitle ); ?></p>
        <?php endif; ?>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
     MAIN CONTENT
     ═══════════════════════════════════════════════ -->
<div class="ivd-main">

    <?php
    /* ─── COMPLIANCE TABLE (Regulation 46 etc.) ─── */
    if ( ! empty( $compliance_table ) ) : ?>
    <table class="ivd-compliance-table" data-animate>
        <thead>
            <tr>
                <th style="width:55%;">Particulars as per LODR</th>
                <th>Link / Document</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $compliance_table as $row ) :
                $url = ! empty( $row['file'] ) ? esc_url( $row['file'] ) : ( ! empty( $row['link_url'] ) ? esc_url( $row['link_url'] ) : '' );
                $text = ! empty( $row['link_text'] ) ? esc_html( $row['link_text'] ) : 'View';
            ?>
            <tr>
                <td><?php echo esc_html( $row['particular'] ?? '' ); ?></td>
                <td>
                    <?php if ( $url ) : ?>
                        <a href="<?php echo $url; ?>" target="_blank" rel="noopener">
                            <?php echo $text; ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        </a>
                    <?php else : ?>
                        <span style="color:var(--text-muted);">—</span>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>

    <?php
    /* ─── DOCUMENT TABS ─── */
    if ( ! empty( $tabs ) ) :
        // Collect all years for filter
        $all_years = [];
        foreach ( $tabs as $tab ) {
            if ( ! empty( $tab['documents'] ) ) {
                foreach ( $tab['documents'] as $doc ) {
                    if ( ! empty( $doc['year'] ) ) {
                        $all_years[ $doc['year'] ] = true;
                    }
                }
            }
        }
        krsort( $all_years );
    ?>

    <!-- Tab Bar -->
    <?php if ( count( $tabs ) > 1 ) : ?>
    <div class="ivd-tabs" data-animate>
        <?php foreach ( $tabs as $i => $tab ) : ?>
            <button class="ivd-tab<?php echo $i === 0 ? ' active' : ''; ?>"
                    data-tab="<?php echo $i; ?>"
                    type="button">
                <?php echo esc_html( $tab['title'] ); ?>
            </button>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <!-- Filters -->
    <?php if ( ! empty( $all_years ) ) : ?>
    <div class="ivd-filters" data-animate>
        <span class="ivd-filter-label">Filter by:</span>
        <select class="ivd-filter-select" id="ivdFilterYear">
            <option value="">All Years</option>
            <?php foreach ( $all_years as $y => $_) : ?>
                <option value="<?php echo esc_attr( $y ); ?>"><?php echo esc_html( $y ); ?></option>
            <?php endforeach; ?>
        </select>
        <select class="ivd-filter-select" id="ivdFilterQuarter">
            <option value="">All Quarters</option>
            <option value="Q1">Q1</option>
            <option value="Q2">Q2</option>
            <option value="Q3">Q3</option>
            <option value="Q4">Q4</option>
        </select>
        <button class="ivd-filter-reset" id="ivdFilterReset" type="button">Reset</button>
    </div>
    <?php endif; ?>

    <!-- Tab Panels -->
    <?php foreach ( $tabs as $i => $tab ) : ?>
    <div class="ivd-tab-panel<?php echo $i === 0 ? ' active' : ''; ?>" data-panel="<?php echo $i; ?>">
        <?php if ( ! empty( $tab['documents'] ) ) : ?>
        <div class="ivd-doc-grid" data-doc-grid="<?php echo $i; ?>">
            <?php foreach ( $tab['documents'] as $doc ) :
                $file_url = ! empty( $doc['file'] ) ? $doc['file'] : ( ! empty( $doc['url'] ) ? $doc['url'] : '' );
                $is_pdf   = ! empty( $doc['file'] );
                $date_str = '';
                if ( ! empty( $doc['date'] ) ) {
                    $date_str = date_i18n( 'd M, Y', strtotime( $doc['date'] ) );
                }
            ?>
            <a href="<?php echo esc_url( $file_url ); ?>"
               class="ivd-doc-item"
               target="_blank" rel="noopener"
               data-year="<?php echo esc_attr( $doc['year'] ?? '' ); ?>"
               data-quarter="<?php echo esc_attr( $doc['quarter'] ?? '' ); ?>">
                <div class="ivd-doc-icon">
                    <?php if ( $is_pdf ) : ?>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M10 13l-2 4h8l-2-4"/></svg>
                    <?php else : ?>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    <?php endif; ?>
                </div>
                <div class="ivd-doc-body">
                    <div class="ivd-doc-title"><?php echo esc_html( $doc['title'] ); ?></div>
                    <div class="ivd-doc-meta">
                        <?php if ( $date_str ) : ?>
                            <span class="ivd-doc-date"><?php echo $date_str; ?></span>
                        <?php endif; ?>
                        <?php if ( ! empty( $doc['year'] ) ) : ?>
                            <span class="ivd-doc-badge">FY <?php echo esc_html( $doc['year'] ); ?></span>
                        <?php endif; ?>
                        <?php if ( ! empty( $doc['quarter'] ) ) : ?>
                            <span class="ivd-doc-badge"><?php echo esc_html( $doc['quarter'] ); ?></span>
                        <?php endif; ?>
                        <?php if ( $is_pdf ) : ?>
                            <span class="ivd-doc-badge">PDF</span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="ivd-doc-dl">
                    <?php if ( $is_pdf ) : ?>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    <?php else : ?>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    <?php endif; ?>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="ivd-pagination" data-pagination="<?php echo $i; ?>"></div>

        <?php else : ?>
        <div class="ivd-empty">
            <div class="ivd-empty-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
            </div>
            <div class="ivd-empty-text">Documents will be uploaded shortly. Please check back later.</div>
        </div>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>

    <?php endif; /* end tabs */ ?>


    <?php
    /* ─── COMMITTEES ─── */
    if ( ! empty( $committees ) ) : ?>
    <div class="ivd-committees" data-animate>
        <h2 class="ivd-committees-title">Board Committees</h2>
        <?php foreach ( $committees as $comm ) : ?>
        <div class="ivd-accordion">
            <button class="ivd-accordion-header" type="button">
                <span class="ivd-accordion-name"><?php echo esc_html( $comm['name'] ); ?></span>
                <svg class="ivd-accordion-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="ivd-accordion-body">
                <div class="ivd-accordion-content">
                    <?php if ( ! empty( $comm['members'] ) ) :
                        foreach ( $comm['members'] as $m ) :
                            $initials = '';
                            $parts = explode( ' ', trim( $m['name'] ?? '' ) );
                            if ( count( $parts ) >= 2 ) {
                                $initials = strtoupper( $parts[0][0] . $parts[ count($parts)-1 ][0] );
                            } elseif ( count( $parts ) === 1 ) {
                                $initials = strtoupper( substr( $parts[0], 0, 2 ) );
                            }
                            $role_class = strtolower( $m['role'] ?? 'member' );
                    ?>
                    <div class="ivd-member">
                        <div class="ivd-member-avatar"><?php echo $initials; ?></div>
                        <div class="ivd-member-info">
                            <div class="ivd-member-name"><?php echo esc_html( $m['name'] ); ?></div>
                            <div class="ivd-member-role"><?php echo esc_html( $m['designation'] ?? '' ); ?></div>
                        </div>
                        <span class="ivd-member-badge <?php echo esc_attr( $role_class ); ?>"><?php echo esc_html( $m['role'] ); ?></span>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>


    <?php
    /* ─── CONTACTS ─── */
    if ( ! empty( $contacts ) ) : ?>
    <div class="ivd-contacts" data-animate>
        <h2 class="ivd-contacts-title">Key Contacts</h2>
        <div class="ivd-contacts-grid">
            <?php foreach ( $contacts as $c ) : ?>
            <div class="ivd-contact-card">
                <?php if ( ! empty( $c['title'] ) ) : ?>
                    <div class="ivd-contact-tag"><?php echo esc_html( $c['title'] ); ?></div>
                <?php endif; ?>
                <?php if ( ! empty( $c['name'] ) ) : ?>
                    <div class="ivd-contact-name"><?php echo esc_html( $c['name'] ); ?></div>
                <?php endif; ?>
                <?php if ( ! empty( $c['email'] ) ) : ?>
                <div class="ivd-contact-detail">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <a href="mailto:<?php echo esc_attr( $c['email'] ); ?>"><?php echo esc_html( $c['email'] ); ?></a>
                </div>
                <?php endif; ?>
                <?php if ( ! empty( $c['phone'] ) ) : ?>
                <div class="ivd-contact-detail">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    <a href="tel:<?php echo esc_attr( preg_replace('/[^0-9+]/', '', $c['phone']) ); ?>"><?php echo esc_html( $c['phone'] ); ?></a>
                </div>
                <?php endif; ?>
                <?php if ( ! empty( $c['address'] ) ) : ?>
                <div class="ivd-contact-detail">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span><?php echo esc_html( $c['address'] ); ?></span>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>


    <!-- Navigation -->
    <div class="ivd-nav-bar">
        <a href="/investors/" class="ivd-back-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Back to Investor Relations
        </a>
    </div>

</div>

<!-- ═══════════════════════════════════════════════
     CTA
     ═══════════════════════════════════════════════ -->
<section class="ivd-cta">
    <div class="ivd-cta-glow"></div>
    <div class="ivd-cta-inner">
        <h2 class="ivd-cta-title" data-animate>Have an investor query?</h2>
        <p class="ivd-cta-desc" data-animate>Our Company Secretary and Compliance Officer is available to address all investor concerns.</p>
        <a href="/investors/investor-grievance/" class="btn-gold" data-animate>
            Contact Investor Relations
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</section>

<?php get_footer(); ?>

<!-- ═══════════════════════════════════════════════
     JAVASCRIPT — Tabs, Filters, Pagination, Accordions
     ═══════════════════════════════════════════════ -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ITEMS_PER_PAGE = <?php echo $items_per_page; ?>;

    /* ─── TABS ─── */
    var tabBtns = document.querySelectorAll('.ivd-tab');
    var panels  = document.querySelectorAll('.ivd-tab-panel');

    tabBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var idx = this.getAttribute('data-tab');
            tabBtns.forEach(function(b) { b.classList.remove('active'); });
            panels.forEach(function(p) { p.classList.remove('active'); });
            this.classList.add('active');
            var target = document.querySelector('[data-panel="' + idx + '"]');
            if (target) target.classList.add('active');
            // Reset filters on tab switch
            resetFilters();
            paginate(idx);
        });
    });

    /* ─── FILTERS ─── */
    var filterYear    = document.getElementById('ivdFilterYear');
    var filterQuarter = document.getElementById('ivdFilterQuarter');
    var filterReset   = document.getElementById('ivdFilterReset');

    function getActivePanel() {
        var active = document.querySelector('.ivd-tab-panel.active');
        return active ? active.getAttribute('data-panel') : '0';
    }

    function applyFilters() {
        var year    = filterYear ? filterYear.value : '';
        var quarter = filterQuarter ? filterQuarter.value : '';
        var panelIdx = getActivePanel();
        var grid = document.querySelector('[data-doc-grid="' + panelIdx + '"]');
        if (!grid) return;

        var items = grid.querySelectorAll('.ivd-doc-item');
        items.forEach(function(item) {
            var show = true;
            if (year && item.getAttribute('data-year') !== year) show = false;
            if (quarter && item.getAttribute('data-quarter') !== quarter) show = false;
            item.setAttribute('data-filtered', show ? 'visible' : 'hidden');
        });
        paginate(panelIdx);
    }

    function resetFilters() {
        if (filterYear) filterYear.value = '';
        if (filterQuarter) filterQuarter.value = '';
        var panelIdx = getActivePanel();
        var grid = document.querySelector('[data-doc-grid="' + panelIdx + '"]');
        if (grid) {
            grid.querySelectorAll('.ivd-doc-item').forEach(function(item) {
                item.setAttribute('data-filtered', 'visible');
            });
        }
        paginate(panelIdx);
    }

    if (filterYear) filterYear.addEventListener('change', applyFilters);
    if (filterQuarter) filterQuarter.addEventListener('change', applyFilters);
    if (filterReset) filterReset.addEventListener('click', resetFilters);

    /* ─── PAGINATION ─── */
    function paginate(panelIdx, page) {
        page = page || 1;
        var grid = document.querySelector('[data-doc-grid="' + panelIdx + '"]');
        var pagEl = document.querySelector('[data-pagination="' + panelIdx + '"]');
        if (!grid || !pagEl) return;

        var items = Array.from(grid.querySelectorAll('.ivd-doc-item'));
        var visible = items.filter(function(item) {
            return item.getAttribute('data-filtered') !== 'hidden';
        });

        var totalPages = Math.ceil(visible.length / ITEMS_PER_PAGE) || 1;
        if (page > totalPages) page = totalPages;
        var start = (page - 1) * ITEMS_PER_PAGE;
        var end   = start + ITEMS_PER_PAGE;

        // Hide all, then show visible+paged
        items.forEach(function(item) { item.style.display = 'none'; });
        visible.forEach(function(item, i) {
            item.style.display = (i >= start && i < end) ? '' : 'none';
        });

        // Build pagination controls
        pagEl.innerHTML = '';
        if (totalPages <= 1) return;

        // Prev
        var prev = document.createElement('button');
        prev.className = 'ivd-page-btn' + (page <= 1 ? ' disabled' : '');
        prev.type = 'button';
        prev.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>';
        prev.addEventListener('click', function() { paginate(panelIdx, page - 1); });
        pagEl.appendChild(prev);

        // Page numbers
        for (var p = 1; p <= totalPages; p++) {
            (function(pageNum) {
                var btn = document.createElement('button');
                btn.className = 'ivd-page-btn' + (pageNum === page ? ' active' : '');
                btn.type = 'button';
                btn.textContent = pageNum;
                btn.addEventListener('click', function() { paginate(panelIdx, pageNum); });
                pagEl.appendChild(btn);
            })(p);
        }

        // Next
        var next = document.createElement('button');
        next.className = 'ivd-page-btn' + (page >= totalPages ? ' disabled' : '');
        next.type = 'button';
        next.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>';
        next.addEventListener('click', function() { paginate(panelIdx, page + 1); });
        pagEl.appendChild(next);

        // Info
        var info = document.createElement('span');
        info.className = 'ivd-page-info';
        info.textContent = 'Showing ' + (start + 1) + '–' + Math.min(end, visible.length) + ' of ' + visible.length;
        pagEl.appendChild(info);
    }

    // Initial pagination for all panels
    panels.forEach(function(panel) {
        var idx = panel.getAttribute('data-panel');
        var grid = document.querySelector('[data-doc-grid="' + idx + '"]');
        if (grid) {
            grid.querySelectorAll('.ivd-doc-item').forEach(function(item) {
                item.setAttribute('data-filtered', 'visible');
            });
        }
        paginate(idx);
    });

    /* ─── ACCORDIONS ─── */
    document.querySelectorAll('.ivd-accordion-header').forEach(function(header) {
        header.addEventListener('click', function() {
            var accordion = this.parentElement;
            accordion.classList.toggle('open');
        });
    });

    /* ─── GSAP ANIMATIONS ─── */
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        document.querySelectorAll('[data-animate]').forEach(function(el) {
            gsap.from(el, {
                y: 25, opacity: 0, duration: 0.7,
                ease: 'power2.out',
                scrollTrigger: { trigger: el, start: 'top 90%', once: true }
            });
        });
    }
});
</script>
