<?php
/**
 * Template: Transformer Insulation Landing Page
 *
 * Shows the 4 sub-categories of Transformer Insulation as clickable cards.
 * Loaded by taxonomy-dd_product_cat.php when slug = 'transformer-insulation'.
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$subcats = [
    [
        'name'   => 'Transformer Boards',
        'url'    => home_url( '/products/cellulose-transformer-insulation-boards/' ),
        'image'  => UBL_URI . '/assets/images/board-hd-grade.png',
        'desc'   => 'IEC-certified pressboards in six grades — HD, DT, Laminated, Calendered, PSP 3050, and Mouldable.',
        'count'  => '6 grades',
    ],
    [
        'name'   => 'Insulation Papers',
        'url'    => home_url( '/products/insulation-papers/' ),
        'image'  => wp_get_attachment_url( 28 ),
        'desc'   => 'Kraft, press, diamond dotted, crepe, and thermally upgraded papers for winding insulation.',
        'count'  => '5 products',
    ],
    [
        'name'   => 'Machined &amp; Milled Components',
        'url'    => home_url( '/products/machined-and-milled-components/' ),
        'image'  => wp_get_attachment_url( 50 ),
        'desc'   => 'Precision-machined spacers, strips, rings, L-profiles, and structural pressboard components.',
        'count'  => '8 products',
    ],
    [
        'name'   => 'Moulded Components',
        'url'    => home_url( '/products/moulded-components-and-other-components/' ),
        'image'  => wp_get_attachment_url( 36 ),
        'desc'   => 'Angle rings, cap rings, end collars, corner collars, and high-voltage terminal leads.',
        'count'  => '8 products',
    ],
];
?>

<main>

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
                <span class="current">Transformer Insulation</span>
            </nav>
            <div class="p-eyebrow">PRODUCT CATEGORY</div>
            <h1 class="pc-header-title">Transformer Insulation</h1>
            <p class="pc-header-desc" style="max-width:620px;">IEC-compliant cellulose insulation materials for power, distribution, and instrument transformers — manufactured to the highest quality standards.</p>
            <div class="p-btn-row" style="margin-top:2rem;">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="p-btn p-btn-gold">Talk to Engineering</a>
                <a href="<?php echo esc_url( home_url( '/downloads/' ) ); ?>" class="p-btn p-btn-outline-white">Download Catalog</a>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════
     CERT STRIP
     ══════════════════════════════════════════ -->
<div class="ab2-cert-strip">
    <div class="ab2-cert-inner">
        <div class="ab2-cert-label">Built on Trust.<br><em>Certified for Excellence.</em></div>
        <div class="ab2-cert-items">
            <?php
            $certs = [
                [ 'img' => 'cert-iso-9001.png',    'name' => 'ISO 9001:2015',      'sub' => 'Quality Management' ],
                [ 'img' => 'cert-iso-14001.png',   'name' => 'ISO 14001:2015',     'sub' => 'Environmental Management' ],
                [ 'img' => 'cert-iso-45001.png',   'name' => 'ISO 45001:2018',     'sub' => 'Health &amp; Safety' ],
                [ 'img' => 'cert-nabl.png',        'name' => 'NABL Accredited',    'sub' => 'In-house Testing Lab' ],
                [ 'img' => 'cert-pgcil-400kv.png', 'name' => 'Approved by PGCIL', 'sub' => '400 kV Class' ],
            ];
            foreach ( $certs as $c ) : ?>
            <div class="ab2-cert-item">
                <img src="<?php echo esc_url( UBL_URI . '/assets/images/' . $c['img'] ); ?>" alt="<?php echo esc_attr( $c['name'] ); ?>" loading="lazy">
                <div class="ab2-cert-item-text">
                    <div class="ab2-cert-item-name"><?php echo $c['name']; ?></div>
                    <div class="ab2-cert-item-sub"><?php echo $c['sub']; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════
     SUB-CATEGORY CARDS
     ══════════════════════════════════════════ -->
<section style="padding:5rem 0;background:var(--bg-primary);">
    <div class="p-container">
        <div class="p-section-header" style="text-align:center;margin-bottom:3rem;">
            <div class="p-eyebrow">Product Range</div>
            <h2 class="p-section-title">Explore by Category</h2>
        </div>

        <div class="ti-grid" style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;">
            <?php foreach ( $subcats as $cat ) : ?>
            <a href="<?php echo esc_url( $cat['url'] ); ?>"
               style="display:flex;flex-direction:column;background:var(--bg-secondary);border:1px solid var(--border-subtle);border-radius:12px;overflow:hidden;text-decoration:none;color:inherit;transition:box-shadow 0.2s,transform 0.2s;"
               onmouseover="this.style.boxShadow='0 8px 32px rgba(11,31,58,0.12)';this.style.transform='translateY(-3px)'"
               onmouseout="this.style.boxShadow='none';this.style.transform='translateY(0)'">

                <!-- Image -->
                <div style="width:100%;aspect-ratio:4/3;overflow:hidden;background:var(--bg-secondary);">
                    <img src="<?php echo esc_url( $cat['image'] ); ?>"
                         alt="<?php echo esc_attr( html_entity_decode( $cat['name'] ) ); ?>"
                         loading="lazy"
                         style="width:100%;height:100%;object-fit:cover;transition:transform 0.4s;"
                         onmouseover="this.style.transform='scale(1.04)'"
                         onmouseout="this.style.transform='scale(1)'">
                </div>

                <!-- Body -->
                <div style="padding:1.5rem 1.5rem 1.75rem;flex:1;display:flex;flex-direction:column;gap:0.5rem;">
                    <div style="font-size:0.75rem;font-weight:700;color:var(--gold-dark);text-transform:uppercase;letter-spacing:0.08em;"><?php echo $cat['count']; ?></div>
                    <h3 style="font-size:1.05rem;font-weight:700;color:var(--navy);margin:0;line-height:1.35;"><?php echo $cat['name']; ?></h3>
                    <p style="font-size:0.85rem;color:var(--text-secondary);line-height:1.6;margin:0;flex:1;"><?php echo esc_html( $cat['desc'] ); ?></p>
                    <div style="margin-top:1rem;display:flex;align-items:center;gap:0.4rem;font-size:0.82rem;font-weight:600;color:var(--gold-dark);">
                        Explore range
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <!-- Mobile: 2-col grid -->
        <style>
            @media (max-width: 900px) {
                .ti-grid { grid-template-columns: repeat(2, 1fr) !important; }
            }
            @media (max-width: 540px) {
                .ti-grid { grid-template-columns: 1fr !important; }
            }
        </style>
    </div>
</section>


<!-- ══════════════════════════════════════════
     APPLICATIONS
     ══════════════════════════════════════════ -->
<div class="tb-apps">
    <div class="p-container">
        <div class="p-eyebrow" style="margin-bottom:1.25rem;">Applications</div>
        <div class="tb-apps-grid">
            <?php
            $apps = [
                [ 'name' => 'Power Transformers',        'sub' => 'Up to 400 kV class',    'icon' => '<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>' ],
                [ 'name' => 'Distribution Transformers', 'sub' => '11 kV – 33 kV class',   'icon' => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/>' ],
                [ 'name' => 'Instrument Transformers',   'sub' => 'CTs &amp; PTs',          'icon' => '<circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>' ],
                [ 'name' => 'Traction Transformers',     'sub' => 'Rail &amp; metro systems', 'icon' => '<rect x="2" y="8" width="20" height="8" rx="2"/><circle cx="6" cy="16" r="2"/><circle cx="18" cy="16" r="2"/><path d="M2 12h20"/>' ],
            ];
            foreach ( $apps as $app ) : ?>
            <div class="tb-app-card">
                <div class="tb-app-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><?php echo $app['icon']; ?></svg>
                </div>
                <div>
                    <div class="tb-app-name"><?php echo esc_html( $app['name'] ); ?></div>
                    <div class="tb-app-sub"><?php echo $app['sub']; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════
     CTA
     ══════════════════════════════════════════ -->
<section class="pc-grid-section">
    <div class="p-container">
        <div class="pc-cta">
            <h2 class="pc-cta-title">Need an insulation specification?</h2>
            <p class="pc-cta-text">Our engineering team can recommend the right grade, standard, and dimensions for your transformer design.</p>
            <div class="p-btn-row" style="justify-content:center;">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="p-btn p-btn-gold">Send Enquiry</a>
                <a href="mailto:<?php echo esc_attr( ubl_option( 'company_sales_email', 'sales@umangboards.com' ) ); ?>" class="p-btn p-btn-outline-white">Email Sales</a>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
