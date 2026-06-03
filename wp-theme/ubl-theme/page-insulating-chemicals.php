<?php
/**
 * Template: Insulating Chemicals Landing Page
 *
 * Loaded by taxonomy-dd_product_cat.php when slug = 'insulating-chemicals'.
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$subcats = [
    [
        'name'   => 'Polyester',
        'url'    => home_url( '/products/polyester/' ),
        'image'  => UBL_URI . '/assets/images/product-insulating-chemicals.png',
        'desc'   => 'Polyester-based impregnating varnishes and enamels for winding insulation and coil coating.',
        'count'  => '10 products',
    ],
    [
        'name'   => 'Modified Polyester',
        'url'    => home_url( '/products/modified-polyester/' ),
        'image'  => UBL_URI . '/assets/images/product-insulating-chemicals.png',
        'desc'   => 'Modified polyester resins offering enhanced thermal performance and improved adhesion.',
        'count'  => '7 products',
    ],
    [
        'name'   => 'Polyurethane',
        'url'    => home_url( '/products/polyurethane/' ),
        'image'  => UBL_URI . '/assets/images/product-insulating-chemicals.png',
        'desc'   => 'Polyurethane enamels for self-bonding and direct soldering applications.',
        'count'  => '3 products',
    ],
    [
        'name'   => 'Polyestermide',
        'url'    => home_url( '/products/polyestermide/' ),
        'image'  => UBL_URI . '/assets/images/product-insulating-chemicals.png',
        'desc'   => 'Polyestermide enamels combining polyester flexibility with polyamide thermal stability.',
        'count'  => '7 products',
    ],
    [
        'name'   => 'Polyamide-imide',
        'url'    => home_url( '/products/polyamide-imide/' ),
        'image'  => UBL_URI . '/assets/images/product-insulating-chemicals.png',
        'desc'   => 'High-performance polyamide-imide topcoats for Class 200+ wire insulation.',
        'count'  => '2 products',
    ],
];
?>

<main>

<!-- ══════════════════════════════════════════
     HERO
     ══════════════════════════════════════════ -->
<section class="pc-header">
    <div class="pc-header-bg">
        <img src="<?php echo esc_url( UBL_URI . '/assets/images/product-insulating-chemicals.png' ); ?>" alt="" loading="eager">
    </div>
    <div class="pc-header-overlay"></div>
    <div class="p-container">
        <div class="pc-header-content">
            <nav class="p-breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <span class="sep">/</span>
                <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Products</a>
                <span class="sep">/</span>
                <span class="current">Insulating Chemicals</span>
            </nav>
            <div class="p-eyebrow">PRODUCT CATEGORY</div>
            <h1 class="pc-header-title">Insulating Chemicals</h1>
            <p class="pc-header-desc" style="max-width:620px;">Specialty enamels, varnishes, and resins for winding wire insulation — covering Polyester, Modified Polyester, Polyurethane, Polyestermide, and Polyamide-imide chemistries.</p>
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
            <h2 class="p-section-title">Explore by Chemistry</h2>
        </div>

        <div class="ic-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;">
            <?php foreach ( $subcats as $cat ) : ?>
            <a href="<?php echo esc_url( $cat['url'] ); ?>"
               style="display:flex;flex-direction:column;background:var(--bg-secondary);border:1px solid var(--border-subtle);border-radius:12px;overflow:hidden;text-decoration:none;color:inherit;transition:box-shadow 0.2s,transform 0.2s;"
               onmouseover="this.style.boxShadow='0 8px 32px rgba(11,31,58,0.12)';this.style.transform='translateY(-3px)'"
               onmouseout="this.style.boxShadow='none';this.style.transform='translateY(0)'">

                <div style="width:100%;aspect-ratio:4/3;overflow:hidden;background:var(--bg-secondary);">
                    <img src="<?php echo esc_url( $cat['image'] ); ?>"
                         alt="<?php echo esc_attr( $cat['name'] ); ?>"
                         loading="lazy"
                         style="width:100%;height:100%;object-fit:cover;transition:transform 0.4s;"
                         onmouseover="this.style.transform='scale(1.04)'"
                         onmouseout="this.style.transform='scale(1)'">
                </div>

                <div style="padding:1.5rem 1.5rem 1.75rem;flex:1;display:flex;flex-direction:column;gap:0.5rem;">
                    <div style="font-size:0.75rem;font-weight:700;color:var(--gold-dark);text-transform:uppercase;letter-spacing:0.08em;"><?php echo $cat['count']; ?></div>
                    <h3 style="font-size:1.05rem;font-weight:700;color:var(--navy);margin:0;line-height:1.35;"><?php echo esc_html( $cat['name'] ); ?></h3>
                    <p style="font-size:0.85rem;color:var(--text-secondary);line-height:1.6;margin:0;flex:1;"><?php echo esc_html( $cat['desc'] ); ?></p>
                    <div style="margin-top:1rem;display:flex;align-items:center;gap:0.4rem;font-size:0.82rem;font-weight:600;color:var(--gold-dark);">
                        Explore range
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <style>
            @media (max-width: 900px) { .ic-grid { grid-template-columns: repeat(2,1fr) !important; } }
            @media (max-width: 540px) { .ic-grid { grid-template-columns: 1fr !important; } }
        </style>
    </div>
</section>


<!-- ══════════════════════════════════════════
     CTA
     ══════════════════════════════════════════ -->
<section class="pc-grid-section">
    <div class="p-container">
        <div class="pc-cta">
            <h2 class="pc-cta-title">Need a chemical specification?</h2>
            <p class="pc-cta-text">Our team can recommend the right enamel or varnish chemistry for your wire type, insulation class, and application.</p>
            <div class="p-btn-row" style="justify-content:center;">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="p-btn p-btn-gold">Send Enquiry</a>
                <a href="mailto:<?php echo esc_attr( ubl_option( 'company_sales_email', 'sales@umangboards.com' ) ); ?>" class="p-btn p-btn-outline-white">Email Sales</a>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
