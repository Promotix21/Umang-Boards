<?php
/**
 * Template Name: Transformer Boards
 *
 * All-in-one catalog for 6 IEC-compliant transformer board grades.
 * Replaces the old Pressboards category listing — no sub-product links needed.
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$sales_email = ubl_option( 'company_sales_email', 'sales@umangboards.com' );

/* ── Board data ─────────────────────────────────────────── */
$boards = [
    [
        'id'         => 'hd-grade',
        'tab'        => 'HD Grade',
        'name'       => 'High Density Pressboard — HD Grade',
        'grade'      => 'UB-HD-3.1',
        'iec'        => 'IEC 60641-3-1 Type B 3.1A',
        'image_id'   => 136,
        'intro'      => 'The most widely specified grade for transformer barriers, rings, and cylindrical spacers — combining the highest mechanical strength with precise dimensional control from 0.8 to 6.4 mm.',
        'properties' => [
            'High mechanical strength and compressive resistance',
            'Excellent dimensional stability under operating conditions',
            'Low shrinkage and consistent flatness',
            'Strong electrical insulation characteristics',
            'Uniform density and dependable quality',
        ],
        'sizes' => [
            [
                'type'      => 'UB-HD-3.1',
                'thickness' => '0.8 mm to 6.4 mm',
                'sheets'    => [
                    [ 'length' => 4000, 'width' => 2100 ],
                    [ 'length' => 3200, 'width' => 2100 ],
                    [ 'length' => 2200, 'width' => 1100 ],
                    [ 'length' => 2000, 'width' => 1050 ],
                ],
            ],
        ],
    ],
    [
        'id'         => 'dt-grade',
        'tab'        => 'DT Grade',
        'name'       => 'High Density Pressboard — DT Grade',
        'grade'      => 'UB-DT-3.1',
        'iec'        => 'IEC 60641-3-1 Type B 3.1B',
        'image_id'   => 134,
        'intro'      => 'A DT-class high-density board for thinner cross-sections — delivers the mechanical integrity of HD Grade in reduced thickness profiles from 1.0 to 3.0 mm.',
        'properties' => [
            'High mechanical strength and compressive resistance',
            'Excellent dimensional stability under operating conditions',
        ],
        'sizes' => [
            [
                'type'      => 'UB-DT-3.1',
                'thickness' => '1.0 mm to 3.0 mm',
                'sheets'    => [
                    [ 'length' => 2000, 'width' => 1050 ],
                    [ 'length' => 2200, 'width' => 1100 ],
                ],
            ],
        ],
    ],
    [
        'id'         => 'laminated',
        'tab'        => 'Laminated',
        'name'       => 'Laminated Pressboards',
        'grade'      => 'UB-HD-3.1 Laminated',
        'iec'        => 'IEC 60763-3-1 Type LB 3.1A',
        'image_id'   => 130,
        'intro'      => 'Multiple pressboard layers bonded under controlled pressure — Casein glue for standard structural applications up to 120 mm, Polyester glue for heavy-duty components up to 200 mm.',
        'properties' => [
            'High mechanical strength and load-bearing capability',
            'Excellent dimensional stability during service',
            'Strong electrical insulation performance',
            'Low shrinkage with durable bonded construction',
            'Suitable for heavy structural applications',
        ],
        'sizes' => [
            [
                'type'      => 'Casein Glue — LB 3.1A.1',
                'thickness' => '7.0 mm to 120.0 mm',
                'sheets'    => [
                    [ 'length' => 2000, 'width' => 1000 ],
                    [ 'length' => 2100, 'width' => 1050 ],
                ],
            ],
            [
                'type'      => 'Polyester Glue — LB 3.1A.2',
                'thickness' => '7.0 mm to 200.0 mm',
                'sheets'    => [
                    [ 'length' => 3000, 'width' => 2000 ],
                    [ 'length' => 3100, 'width' => 2100 ],
                ],
            ],
        ],
    ],
    [
        'id'         => 'calendered',
        'tab'        => 'Calendered',
        'name'       => 'Calendered Pressboards',
        'grade'      => 'UB-LD-2.1',
        'iec'        => 'IEC 60641-3-1 Type B 2.1A',
        'image_id'   => 132,
        'intro'      => 'Smooth-surface board with good pliability — the standard choice for barriers and spacers in distribution transformers where surface finish and ease of processing matter.',
        'properties' => [
            'Good mechanical strength for standard applications',
            'Reliable electrical insulation characteristics',
            'Smooth calendered surface for easy processing',
            'Good elongation and pliability',
            'Consistent thickness and dimensional stability',
        ],
        'sizes' => [
            [
                'type'      => 'UB-LD-2.1',
                'thickness' => '1.0 mm to 6.0 mm',
                'sheets'    => [
                    [ 'length' => 2000, 'width' => 1000 ],
                    [ 'length' => 3000, 'width' => 2000 ],
                ],
            ],
        ],
    ],
    [
        'id'         => 'psp-3050',
        'tab'        => 'PSP 3050',
        'name'       => 'PSP 3050 Pressboard',
        'grade'      => 'UB 3050',
        'iec'        => 'IEC 60641-3-1 Type B 2.1B',
        'image_id'   => 0,
        'image'      => UBL_URI . '/assets/images/board-psp3050.png',
        'intro'      => 'Press-drying compatible calendered board with enhanced oil absorption — delivers consistent density and dimensional stability through transformer assembly processes.',
        'properties' => [
            'Good mechanical strength and rigidity',
            'Reliable electrical insulation characteristics',
            'Smooth calendered surface for clean processing',
            'Consistent density and thickness control',
            'Low shrinkage with stable performance',
            'Good oil absorption and compatibility with insulating liquids',
        ],
        'sizes' => [
            [
                'type'      => 'UB 3050',
                'thickness' => '1 mm to 3 mm',
                'sheets'    => [
                    [ 'length' => 2000, 'width' => 1000 ],
                    [ 'length' => 2200, 'width' => 1100 ],
                ],
            ],
        ],
    ],
    [
        'id'         => 'mouldable',
        'tab'        => 'Mouldable',
        'name'       => 'Mouldable Pressboard',
        'grade'      => 'UB-M-4.1',
        'iec'        => 'IEC 60641-3-1 Type B 4.1',
        'image_id'   => 128,
        'intro'      => 'Formable under heat and pressure into complex three-dimensional profiles — used where flat sheets cannot serve, including end collars, rings, and custom insulation barriers.',
        'properties' => [
            'Excellent flexibility and formability',
            'Suitable for tight radii and intricate shapes',
            'Good mechanical strength for formed components',
            'Reliable electrical insulation performance',
            'Good oil absorption and compatibility with insulating liquids',
            'Stable and consistent material quality',
        ],
        'sizes' => [
            [
                'type'      => 'UB-M-4.1',
                'thickness' => '1.5 mm to 3.0 mm',
                'sheets'    => [
                    [ 'length' => 2000, 'width' => 1000 ],
                ],
            ],
        ],
    ],
];
?>

<main class="tb-page">

<!-- ══════════════════════════════════════════
     HERO
     ══════════════════════════════════════════ -->
<section class="pc-header">
    <div class="pc-header-bg">
        <img src="<?php echo esc_url( UBL_URI . '/assets/images/product-transformer-insulation.jpg' ); ?>" alt="" loading="eager">
    </div>
    <div class="pc-header-overlay"></div>
    <div class="p-container">
        <div class="pc-header-content">
            <nav class="p-breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <span class="sep">/</span>
                <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Products</a>
                <span class="sep">/</span>
                <a href="<?php echo esc_url( home_url( '/products/transformer-insulation/' ) ); ?>">Transformer Insulation</a>
                <span class="sep">/</span>
                <span class="current">Transformer Boards</span>
            </nav>
            <div class="p-eyebrow">PRODUCT CATALOG</div>
            <h1 class="pc-header-title">Transformer Boards</h1>
            <div class="p-btn-row" style="margin-top:2rem;">
                <a href="#tb-enquiry" class="p-btn p-btn-gold">Request Technical Sheet</a>
                <a href="<?php echo esc_url( home_url( '/downloads/' ) ); ?>" class="p-btn p-btn-outline-white">Download Catalog</a>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════
     CERTIFICATIONS STRIP
     ══════════════════════════════════════════ -->
<div class="ab2-cert-strip">
    <div class="ab2-cert-inner">
        <div class="ab2-cert-label">
            Built on Trust.<br><em>Certified for Excellence.</em>
        </div>
        <div class="ab2-cert-items">
            <div class="ab2-cert-item"
                 data-img="<?php echo esc_url( UBL_URI ); ?>/assets/images/cert-iso-9001.png"
                 data-title="ISO 9001:2015"
                 data-desc="Quality Management System, ensuring consistent product quality across all manufacturing operations.">
                <img src="<?php echo esc_url( UBL_URI ); ?>/assets/images/cert-iso-9001.png" alt="ISO 9001:2015" loading="lazy">
                <div class="ab2-cert-item-text">
                    <div class="ab2-cert-item-name">ISO 9001:2015</div>
                    <div class="ab2-cert-item-sub">Quality Management</div>
                </div>
            </div>
            <div class="ab2-cert-item"
                 data-img="<?php echo esc_url( UBL_URI ); ?>/assets/images/cert-iso-14001.png"
                 data-title="ISO 14001:2015"
                 data-desc="Environmental Management System, reflecting our commitment to responsible and sustainable manufacturing.">
                <img src="<?php echo esc_url( UBL_URI ); ?>/assets/images/cert-iso-14001.png" alt="ISO 14001:2015" loading="lazy">
                <div class="ab2-cert-item-text">
                    <div class="ab2-cert-item-name">ISO 14001:2015</div>
                    <div class="ab2-cert-item-sub">Environmental Management</div>
                </div>
            </div>
            <div class="ab2-cert-item"
                 data-img="<?php echo esc_url( UBL_URI ); ?>/assets/images/cert-iso-45001.png"
                 data-title="ISO 45001:2018"
                 data-desc="Occupational Health &amp; Safety Management, prioritising the wellbeing of every member of our workforce.">
                <img src="<?php echo esc_url( UBL_URI ); ?>/assets/images/cert-iso-45001.png" alt="ISO 45001:2018" loading="lazy">
                <div class="ab2-cert-item-text">
                    <div class="ab2-cert-item-name">ISO 45001:2018</div>
                    <div class="ab2-cert-item-sub">Occupational Health &amp; Safety</div>
                </div>
            </div>
            <div class="ab2-cert-item"
                 data-img="<?php echo esc_url( UBL_URI ); ?>/assets/images/cert-nabl.png"
                 data-title="NABL Accredited Laboratory"
                 data-desc="In-house testing laboratory accredited under IEC/ISO 17025 for dielectric and mechanical testing of insulation materials.">
                <img src="<?php echo esc_url( UBL_URI ); ?>/assets/images/cert-nabl.png" alt="NABL Accredited" loading="lazy">
                <div class="ab2-cert-item-text">
                    <div class="ab2-cert-item-name">NABL Accredited</div>
                    <div class="ab2-cert-item-sub">In-house Testing Laboratory</div>
                </div>
            </div>
            <div class="ab2-cert-item"
                 data-img="<?php echo esc_url( UBL_URI ); ?>/assets/images/cert-pgcil-400kv.png"
                 data-title="Approved by PGCIL"
                 data-desc="Approved by Power Grid Corporation of India Ltd for 400 kV class, India's highest voltage class approval for insulation manufacturers.">
                <img src="<?php echo esc_url( UBL_URI ); ?>/assets/images/cert-pgcil-400kv.png" alt="Approved by PGCIL" loading="lazy">
                <div class="ab2-cert-item-text">
                    <div class="ab2-cert-item-name">Approved by PGCIL</div>
                    <div class="ab2-cert-item-sub">400 kV Class</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════
     APPLICATIONS STRIP
     ══════════════════════════════════════════ -->
<div class="tb-apps">
    <div class="p-container">
        <div class="p-eyebrow" style="margin-bottom:1.25rem;">Applications</div>
        <div class="tb-apps-grid">
            <div class="tb-app-card">
                <div class="tb-app-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <div>
                    <div class="tb-app-name">Power Transformers</div>
                    <div class="tb-app-sub">Up to 400 kV class</div>
                </div>
            </div>
            <div class="tb-app-card">
                <div class="tb-app-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>
                </div>
                <div>
                    <div class="tb-app-name">Distribution Transformers</div>
                    <div class="tb-app-sub">11 kV – 33 kV class</div>
                </div>
            </div>
            <div class="tb-app-card">
                <div class="tb-app-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>
                </div>
                <div>
                    <div class="tb-app-name">Instrument Transformers</div>
                    <div class="tb-app-sub">CTs &amp; PTs</div>
                </div>
            </div>
            <div class="tb-app-card">
                <div class="tb-app-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6"/><path d="M10 12c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6"/></svg>
                </div>
                <div>
                    <div class="tb-app-name">Reactors &amp; Inductors</div>
                    <div class="tb-app-sub">Shunt &amp; series</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════
     GRADE COMPARISON MATRIX
     ══════════════════════════════════════════ -->
<div class="tb-matrix">
    <div class="p-container">
        <div class="p-section-header">
            <div class="p-eyebrow">Quick Reference</div>
            <h2 class="p-section-title">Compare All Grades</h2>
        </div>
        <div class="tb-matrix-scroll">
            <table class="tb-matrix-table" id="tb-matrix">
                <thead>
                    <tr>
                        <th>Grade</th>
                        <th>Grade Code</th>
                        <th>IEC Standard</th>
                        <th>Thickness Range</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $boards as $b ) :
                        $thickness = $b['sizes'][0]['thickness'] ?? '';
                    ?>
                    <tr data-panel="<?php echo esc_attr( $b['id'] ); ?>" class="tb-matrix-row<?php echo $b['id'] === 'hd-grade' ? ' is-active' : ''; ?>">
                        <td><?php echo esc_html( $b['tab'] ); ?></td>
                        <td><span class="tb-matrix-grade-chip"><?php echo esc_html( $b['grade'] ); ?></span></td>
                        <td><?php echo esc_html( $b['iec'] ); ?></td>
                        <td><?php echo esc_html( $thickness ); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <p class="tb-matrix-hint">Click any row to explore that grade in detail below.</p>
    </div>
</div>


<!-- ══════════════════════════════════════════
     TAB NAVIGATION
     ══════════════════════════════════════════ -->
<div class="tb-tabs" id="tb-tabs">
    <div class="p-container">
        <nav class="tb-tab-nav" role="tablist" aria-label="Board Grades">
            <?php foreach ( $boards as $i => $b ) : ?>
            <button
                class="tb-tab-pill<?php echo $i === 0 ? ' is-active' : ''; ?>"
                role="tab"
                aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                aria-controls="tb-panel-<?php echo esc_attr( $b['id'] ); ?>"
                data-panel="<?php echo esc_attr( $b['id'] ); ?>">
                <?php echo esc_html( $b['tab'] ); ?>
            </button>
            <?php endforeach; ?>
        </nav>
    </div>
</div>


<!-- ══════════════════════════════════════════
     PANELS
     ══════════════════════════════════════════ -->
<div class="tb-panels p-container">

    <?php foreach ( $boards as $i => $b ) : ?>
    <div class="tb-panel<?php echo $i === 0 ? ' is-active' : ''; ?>"
         id="tb-panel-<?php echo esc_attr( $b['id'] ); ?>"
         role="tabpanel"
         aria-labelledby="tb-tab-<?php echo esc_attr( $b['id'] ); ?>">

        <!-- Photo + Info row -->
        <div class="tb-panel-layout">

            <div class="tb-panel-image">
                <?php
                // Local transparent-background PNGs (id → filename; psp-3050 has no hyphen in file)
                $tb_img_files = [
                    'hd-grade'   => 'board-hd-grade.png',
                    'dt-grade'   => 'board-dt-grade.png',
                    'laminated'  => 'board-laminated.png',
                    'calendered' => 'board-calendered.png',
                    'psp-3050'   => 'board-psp3050.png',
                    'mouldable'  => 'board-mouldable.png',
                ];
                $tb_img = UBL_URI . '/assets/images/' . ( $tb_img_files[ $b['id'] ] ?? 'board-hd-grade.png' );
                ?>
                <img src="<?php echo esc_url( $tb_img ); ?>" alt="<?php echo esc_attr( $b['name'] ); ?>" loading="lazy">
            </div>

            <div class="tb-panel-info">
                <div class="tb-panel-meta">
                    <span class="tb-grade-chip"><?php echo esc_html( $b['grade'] ); ?></span>
                    <span class="tb-iec-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <?php echo esc_html( $b['iec'] ); ?>
                    </span>
                </div>

                <h2 class="tb-panel-title"><?php echo esc_html( $b['name'] ); ?></h2>

                <?php if ( ! empty( $b['intro'] ) ) : ?>
                <p class="tb-panel-intro"><?php echo esc_html( $b['intro'] ); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Dimensions table -->
        <div class="tb-table-wrap">
            <div class="tb-table-label">Dimensions &amp; Available Sizes</div>
            <div class="tb-table-scroll">
                <table class="tb-table">
                    <thead>
                        <tr>
                            <th>Type / Grade</th>
                            <th>Thickness</th>
                            <th>Length (mm)</th>
                            <th>Width (mm)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ( $b['sizes'] as $size_row ) :
                            $sheet_count = count( $size_row['sheets'] );
                            $is_first    = true;
                            foreach ( $size_row['sheets'] as $sheet ) : ?>
                            <tr>
                                <?php if ( $is_first ) :
                                    $is_first = false; ?>
                                    <td rowspan="<?php echo (int) $sheet_count; ?>"><?php echo esc_html( $size_row['type'] ); ?></td>
                                    <td rowspan="<?php echo (int) $sheet_count; ?>"><?php echo esc_html( $size_row['thickness'] ); ?></td>
                                <?php endif; ?>
                                <td><?php echo esc_html( $sheet['length'] ); ?></td>
                                <td><?php echo esc_html( $sheet['width'] ); ?></td>
                            </tr>
                            <?php endforeach;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <?php endforeach; ?>

</div>


<!-- ══════════════════════════════════════════
     ENQUIRY FORM
     ══════════════════════════════════════════ -->
<section class="tb-enquiry" id="tb-enquiry">
    <div class="p-container">
        <div class="tb-enquiry-inner">

            <?php if ( isset( $_GET['enquiry'] ) && $_GET['enquiry'] === 'sent' ) : ?>
            <div style="background:#F0FDF4;border:1px solid #BBF7D0;border-radius:8px;padding:1.25rem 1.5rem;margin-bottom:2rem;display:flex;align-items:center;gap:0.75rem;color:#065F46;font-weight:600;font-size:0.95rem;">
                <svg style="width:20px;height:20px;color:#10B981;flex-shrink:0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                Enquiry sent successfully. Our team will be in touch shortly.
            </div>
            <?php endif; ?>

            <div class="tb-enquiry-eyebrow">Get Technical Data</div>
            <h2 class="tb-enquiry-title">Request a Technical Sheet</h2>
            <p class="tb-enquiry-desc">Share your application requirements and our engineering team will provide the relevant grade datasheet, dimensional tolerances, and pricing guidance.</p>

            <div class="tb-active-grade-display" id="tb-active-grade-display">
                Enquiring about: <strong id="tb-active-grade-label">Transformer Boards — <?php echo esc_html( $boards[0]['grade'] ); ?></strong>
                <span style="margin-left:0.75rem;font-size:0.75rem;color:var(--text-faint);">(switches with selected tab above)</span>
            </div>

            <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                <input type="hidden" name="action"       value="ubl_product_enquiry">
                <input type="hidden" name="product_url"  value="<?php echo esc_url( get_permalink() ); ?>">
                <input type="hidden" id="tb-grade-input" name="product_name" value="Transformer Boards — <?php echo esc_attr( $boards[0]['grade'] ); ?>">
                <?php wp_nonce_field( 'ubl_product_enquiry', 'ubl_enq_nonce' ); ?>

                <div class="tb-form-grid">
                    <input class="tb-form-input"          type="text"  name="enq_name"        placeholder="Full Name"     required>
                    <input class="tb-form-input"          type="email" name="enq_email"        placeholder="Work Email"    required>
                    <input class="tb-form-input tb-form-full" type="text" name="enq_company"   placeholder="Company Name">
                    <textarea class="tb-form-textarea tb-form-full" name="enq_requirement"     placeholder="Project requirements, quantities, or any specific grade you need"></textarea>
                    <button type="submit" class="p-btn p-btn-gold tb-form-full" style="justify-content:center;">
                        Submit Enquiry
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     RELATED CATEGORIES
     ══════════════════════════════════════════ -->
<?php
$siblings = get_terms( [
    'taxonomy'   => 'dd_product_cat',
    'parent'     => 2,
    'hide_empty' => false,
    'exclude'    => [ 3 ],
] );
if ( ! empty( $siblings ) && ! is_wp_error( $siblings ) ) : ?>
<section class="pc-related">
    <div class="p-container">
        <div class="p-section-header" style="text-align:center;">
            <div class="p-eyebrow">Explore More</div>
            <h2 class="p-section-title">Other Transformer Insulation Products</h2>
        </div>
        <div class="pc-related-grid" style="grid-template-columns:repeat(<?php echo count($siblings); ?>,1fr);">
            <?php foreach ( $siblings as $sib ) : ?>
            <a href="<?php echo esc_url( get_term_link( $sib ) ); ?>" class="pc-related-card">
                <div>
                    <div class="pc-related-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2h5l2 3h9a2 2 0 012 2z"/></svg>
                    </div>
                    <div class="pc-related-name"><?php echo esc_html( $sib->name ); ?></div>
                    <div class="pc-related-count"><?php echo (int) $sib->count; ?> Products</div>
                </div>
                <svg class="pc-related-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

</main>

<!-- CERT LIGHTBOX -->
<div class="ab2-lightbox" id="ab2Lightbox" role="dialog" aria-modal="true">
    <div class="ab2-lb-box">
        <button class="ab2-lb-close" id="ab2LbClose" aria-label="Close">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:14px;height:14px;"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
        <img class="ab2-lb-img" id="ab2LbImg" src="" alt="">
        <div class="ab2-lb-title" id="ab2LbTitle"></div>
        <div class="ab2-lb-desc" id="ab2LbDesc"></div>
    </div>
</div>

<script>
(function () {
    var pills  = document.querySelectorAll('.tb-tab-pill');
    var panels = document.querySelectorAll('.tb-panel');
    var gradeInput = document.getElementById('tb-grade-input');

    function activate(id) {
        pills.forEach(function (p) {
            var on = p.getAttribute('data-panel') === id;
            p.classList.toggle('is-active', on);
            p.setAttribute('aria-selected', on ? 'true' : 'false');
        });
        panels.forEach(function (p) {
            p.classList.toggle('is-active', p.id === 'tb-panel-' + id);
        });
        // Sync hidden grade input + visible grade label + matrix highlight
        var activePanel = document.getElementById('tb-panel-' + id);
        var gradeLabel  = '';
        if (activePanel) {
            var metaChip = activePanel.querySelector('.tb-grade-chip');
            if (metaChip) gradeLabel = 'Transformer Boards — ' + metaChip.textContent.trim();
        }
        if (gradeInput)  gradeInput.value = gradeLabel;
        var gradeDisplay = document.getElementById('tb-active-grade-label');
        if (gradeDisplay) gradeDisplay.textContent = gradeLabel;

        // Highlight matching matrix row
        document.querySelectorAll('.tb-matrix-row').forEach(function (r) {
            r.classList.toggle('is-active', r.getAttribute('data-panel') === id);
        });
    }

    pills.forEach(function (pill) {
        pill.addEventListener('click', function () {
            activate(this.getAttribute('data-panel'));
        });
    });

    // Cert lightbox
    (function () {
        var lb    = document.getElementById('ab2Lightbox');
        var lbImg = document.getElementById('ab2LbImg');
        var lbTtl = document.getElementById('ab2LbTitle');
        var lbDsc = document.getElementById('ab2LbDesc');
        function closeLb() { lb.classList.remove('open'); document.body.style.overflow = ''; }
        document.querySelectorAll('.ab2-cert-item').forEach(function (el) {
            el.addEventListener('click', function () {
                lbImg.src         = el.dataset.img;
                lbImg.alt         = el.dataset.title;
                lbTtl.textContent = el.dataset.title;
                lbDsc.innerHTML   = el.dataset.desc;
                lb.classList.add('open');
                document.body.style.overflow = 'hidden';
            });
        });
        document.getElementById('ab2LbClose').addEventListener('click', closeLb);
        lb.addEventListener('click', function (e) { if (e.target === lb) closeLb(); });
        document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeLb(); });
    }());

    // Matrix row click → switch tab + scroll to panels
    document.querySelectorAll('.tb-matrix-row').forEach(function (row) {
        row.addEventListener('click', function () {
            activate(this.getAttribute('data-panel'));
            var panels = document.getElementById('tb-tabs');
            if (panels) panels.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

    // Keyboard: left/right arrow navigation on tab bar
    document.querySelector('.tb-tab-nav').addEventListener('keydown', function (e) {
        if (e.key !== 'ArrowLeft' && e.key !== 'ArrowRight') return;
        var active = document.querySelector('.tb-tab-pill.is-active');
        var all    = Array.from(pills);
        var idx    = all.indexOf(active);
        var next   = e.key === 'ArrowRight'
            ? all[(idx + 1) % all.length]
            : all[(idx - 1 + all.length) % all.length];
        next.focus();
        activate(next.getAttribute('data-panel'));
    });
}());
</script>

<?php get_footer(); ?>
