<?php
/**
 * Template: Winding Wires Landing Page
 *
 * Loaded by taxonomy-dd_product_cat.php when slug = 'winding-wires'.
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$subcats = [
    [
        'name'   => 'Copper Winding Wires',
        'url'    => home_url( '/products/copper/' ),
        'image'  => UBL_URI . '/assets/images/prod-118.png',
        'desc'   => 'EC grade copper in enamelled round, enamelled flat, paper-covered, and kraft/crepe variants.',
        'count'  => '4 products',
    ],
    [
        'name'   => 'Aluminium Winding Wires',
        'url'    => home_url( '/products/aluminium/' ),
        'image'  => UBL_URI . '/assets/images/prod-126.png',
        'desc'   => 'EC grade aluminium in enamelled round, enamelled flat, paper-covered, and kraft/crepe variants.',
        'count'  => '4 products',
    ],
];
?>

<main>

<!-- ══════════════════════════════════════════
     HERO
     ══════════════════════════════════════════ -->
<section class="pc-header">
    <div class="pc-header-bg">
        <img src="<?php echo esc_url( UBL_URI . '/assets/images/product-winding-wire.png' ); ?>" alt="" loading="eager">
    </div>
    <div class="pc-header-overlay"></div>
    <div class="p-container">
        <div class="pc-header-content">
            <nav class="p-breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <span class="sep">/</span>
                <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Products</a>
                <span class="sep">/</span>
                <span class="current">Winding Wires</span>
            </nav>
            <div class="p-eyebrow">PRODUCT CATEGORY</div>
            <h1 class="pc-header-title">Winding Wires</h1>
            <p class="pc-header-desc" style="max-width:620px;">EC grade copper and aluminium winding wires with multiple insulation classes — engineered for power and distribution transformer windings.</p>
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
            <h2 class="p-section-title">Explore by Conductor</h2>
        </div>

        <div class="ww-grid" style="display:grid;grid-template-columns:repeat(2,1fr);gap:2rem;max-width:820px;margin:0 auto;">
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
            @media (max-width: 600px) { .ww-grid { grid-template-columns: 1fr !important; } }
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
                [ 'name' => 'Power Transformers',        'sub' => 'HV &amp; LV windings',          'icon' => '<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>' ],
                [ 'name' => 'Distribution Transformers', 'sub' => 'Compact winding design',        'icon' => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/>' ],
                [ 'name' => 'Electric Motors',           'sub' => 'Stator &amp; rotor coils',      'icon' => '<circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>' ],
                [ 'name' => 'Electronic Appliances',     'sub' => 'ACs, fans, refrigerators',      'icon' => '<rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><path d="M9 1v3M15 1v3M9 20v3M15 20v3M1 9h3M1 15h3M20 9h3M20 15h3"/>' ],
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
            <h2 class="pc-cta-title">Need winding wire specifications?</h2>
            <p class="pc-cta-text">Our team can help you select the right conductor, insulation class, and spool size for your winding design.</p>
            <div class="p-btn-row" style="justify-content:center;">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="p-btn p-btn-gold">Send Enquiry</a>
                <a href="mailto:<?php echo esc_attr( ubl_option( 'company_sales_email', 'sales@umangboards.com' ) ); ?>" class="p-btn p-btn-outline-white">Email Sales</a>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
