<?php
/**
 * Shared Catalog Page Renderer
 *
 * Renders a full product catalog page from a $catalog data array.
 * Requires $catalog and $sales_email to be set by the calling template.
 *
 * Supported types: 'rolls' | 'components' | 'wires' | 'chemicals'
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$type         = $catalog['type']           ?? 'rolls';
$products     = $catalog['products']       ?? [];
$applications = $catalog['applications']   ?? [];
$term_id      = $catalog['term_id']        ?? 0;
$parent_id    = $catalog['parent_term_id'] ?? 0;
$bc_parent    = $catalog['breadcrumb_parent'] ?? null;
$hero_img     = $catalog['hero_image']     ?? ( UBL_URI . '/assets/images/product-transformer-insulation.jpg' );
$is_chemicals = ( $type === 'chemicals' );

get_header();
?>

<main class="tb-page">

<!-- ══════════════════════════════════════════
     HERO
     ══════════════════════════════════════════ -->
<section class="pc-header">
    <div class="pc-header-bg">
        <img src="<?php echo esc_url( $hero_img ); ?>" alt="" loading="eager">
    </div>
    <div class="pc-header-overlay"></div>
    <div class="p-container">
        <div class="pc-header-content">
            <nav class="p-breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
                <span class="sep">/</span>
                <a href="<?php echo esc_url( home_url('/products/') ); ?>">Products</a>
                <?php if ( $bc_parent ) : ?>
                    <span class="sep">/</span>
                    <a href="<?php echo esc_url( home_url( $bc_parent['url'] ) ); ?>"><?php echo esc_html( $bc_parent['name'] ); ?></a>
                <?php endif; ?>
                <span class="sep">/</span>
                <span class="current"><?php echo esc_html( $catalog['name'] ); ?></span>
            </nav>
            <div class="p-eyebrow">PRODUCT CATALOG</div>
            <h1 class="pc-header-title"><?php echo esc_html( $catalog['name'] ); ?></h1>
            <div class="p-btn-row" style="margin-top:2rem;">
                <a href="#tb-enquiry" class="p-btn p-btn-gold">Request Technical Sheet</a>
                <a href="<?php echo esc_url( home_url('/downloads/') ); ?>" class="p-btn p-btn-outline-white">Download Catalog</a>
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
                [ 'img' => 'cert-iso-9001.png',    'name' => 'ISO 9001:2015',      'sub' => 'Quality Management',       'title' => 'ISO 9001:2015',          'desc' => 'Quality Management System, ensuring consistent product quality across all manufacturing operations.' ],
                [ 'img' => 'cert-iso-14001.png',   'name' => 'ISO 14001:2015',     'sub' => 'Environmental Management', 'title' => 'ISO 14001:2015',         'desc' => 'Environmental Management System, reflecting our commitment to responsible and sustainable manufacturing.' ],
                [ 'img' => 'cert-iso-45001.png',   'name' => 'ISO 45001:2018',     'sub' => 'Health &amp; Safety',      'title' => 'ISO 45001:2018',         'desc' => 'Occupational Health &amp; Safety Management, prioritising the wellbeing of every member of our workforce.' ],
                [ 'img' => 'cert-nabl.png',        'name' => 'NABL Accredited',    'sub' => 'In-house Testing Lab',     'title' => 'NABL Accredited Laboratory', 'desc' => 'In-house testing laboratory accredited under IEC/ISO 17025 for dielectric and mechanical testing.' ],
                [ 'img' => 'cert-pgcil-400kv.png', 'name' => 'Approved by PGCIL', 'sub' => '400 kV Class',             'title' => 'Approved by PGCIL',      'desc' => 'Approved by Power Grid Corporation of India Ltd for 400 kV class insulation materials.' ],
            ];
            foreach ( $certs as $c ) : ?>
            <div class="ab2-cert-item"
                 data-img="<?php echo esc_url( UBL_URI . '/assets/images/' . $c['img'] ); ?>"
                 data-title="<?php echo esc_attr( $c['title'] ); ?>"
                 data-desc="<?php echo esc_attr( $c['desc'] ); ?>">
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
     APPLICATIONS STRIP
     ══════════════════════════════════════════ -->
<?php if ( ! empty( $applications ) ) : ?>
<div class="tb-apps">
    <div class="p-container">
        <div class="p-eyebrow" style="margin-bottom:1.25rem;">Applications</div>
        <div class="tb-apps-grid">
            <?php foreach ( $applications as $app ) : ?>
            <div class="tb-app-card">
                <div class="tb-app-icon">
                    <?php echo $app['svg']; ?>
                </div>
                <div>
                    <div class="tb-app-name"><?php echo esc_html( $app['name'] ); ?></div>
                    <?php if ( ! empty( $app['sub'] ) ) : ?>
                    <div class="tb-app-sub"><?php echo esc_html( $app['sub'] ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>


<?php if ( ! $is_chemicals ) : ?>
<!-- ══════════════════════════════════════════
     COMPARISON MATRIX
     ══════════════════════════════════════════ -->
<div class="tb-matrix">
    <div class="p-container">
        <div class="p-section-header">
            <div class="p-eyebrow">Quick Reference</div>
            <h2 class="p-section-title">Compare All <?php echo esc_html( $catalog['name'] ); ?></h2>
        </div>
        <div class="tb-matrix-scroll">
            <table class="tb-matrix-table" id="tb-matrix">
                <thead>
                    <tr>
                        <?php
                        if ( $type === 'rolls' ) {
                            echo '<th>Paper Type</th><th>Grade Code</th><th>IEC Standard</th><th>Thickness Range</th><th>Max Roll Width</th>';
                        } elseif ( $type === 'wires' ) {
                            echo '<th>Wire Type</th><th>Conductor</th><th>Size / Diameter</th><th>Insulation Class</th><th>Form</th>';
                        } elseif ( $type === 'components' ) {
                            echo '<th>Component</th><th>Material</th><th>Insulation Class</th><th>Key Variants</th>';
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $products as $i => $p ) :
                        $row_data = $p['matrix_row'] ?? [];
                    ?>
                    <tr data-panel="<?php echo esc_attr( $p['id'] ); ?>"
                        class="tb-matrix-row<?php echo $i === 0 ? ' is-active' : ''; ?>">
                        <td><?php echo esc_html( $p['tab'] ); ?></td>
                        <?php foreach ( $row_data as $cell ) : ?>
                        <td><?php
                            if ( isset( $cell['chip'] ) ) {
                                echo '<span class="tb-matrix-grade-chip">' . esc_html( $cell['chip'] ) . '</span>';
                            } else {
                                echo esc_html( $cell );
                            }
                        ?></td>
                        <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <p class="tb-matrix-hint">Click any row to explore that product in detail below.</p>
    </div>
</div>


<!-- ══════════════════════════════════════════
     TAB NAVIGATION
     ══════════════════════════════════════════ -->
<div class="tb-tabs" id="tb-tabs">
    <div class="p-container">
        <nav class="tb-tab-nav" role="tablist" aria-label="<?php echo esc_attr( $catalog['name'] ); ?>">
            <?php foreach ( $products as $i => $p ) : ?>
            <button class="tb-tab-pill<?php echo $i === 0 ? ' is-active' : ''; ?>"
                    role="tab"
                    aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                    aria-controls="tb-panel-<?php echo esc_attr( $p['id'] ); ?>"
                    data-panel="<?php echo esc_attr( $p['id'] ); ?>">
                <?php echo esc_html( $p['tab'] ); ?>
            </button>
            <?php endforeach; ?>
        </nav>
    </div>
</div>


<!-- ══════════════════════════════════════════
     PANELS
     ══════════════════════════════════════════ -->
<div class="tb-panels p-container">
    <?php foreach ( $products as $i => $p ) : ?>
    <div class="tb-panel<?php echo $i === 0 ? ' is-active' : ''; ?>"
         id="tb-panel-<?php echo esc_attr( $p['id'] ); ?>"
         role="tabpanel">

        <div class="tb-panel-layout">

            <!-- Image -->
            <div class="tb-panel-image">
                <?php if ( ! empty( $p['image_id'] ) ) : ?>
                    <?php echo wp_get_attachment_image( $p['image_id'], 'large', false, [ 'alt' => esc_attr( $p['name'] ), 'loading' => 'lazy' ] ); ?>
                <?php elseif ( ! empty( $p['image'] ) ) : ?>
                    <img src="<?php echo esc_url( $p['image'] ); ?>" alt="<?php echo esc_attr( $p['name'] ); ?>" loading="lazy">
                <?php else : ?>
                    <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:var(--bg-secondary);">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="rgba(11,31,58,0.15)" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Info -->
            <div class="tb-panel-info">
                <div class="tb-panel-meta">
                    <?php if ( ! empty( $p['grade'] ) ) : ?>
                    <span class="tb-grade-chip"><?php echo esc_html( $p['grade'] ); ?></span>
                    <?php endif; ?>
                    <?php if ( ! empty( $p['iec'] ) ) : ?>
                    <span class="tb-iec-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        <?php echo esc_html( $p['iec'] ); ?>
                    </span>
                    <?php endif; ?>
                </div>

                <h2 class="tb-panel-title"><?php echo esc_html( $p['name'] ); ?></h2>

                <?php if ( ! empty( $p['intro'] ) ) : ?>
                <p class="tb-panel-intro"><?php echo esc_html( $p['intro'] ); ?></p>
                <?php endif; ?>

            </div>
        </div>

        <?php
        /* ── BOTTOM SECTION: varies by type ── */

        /* ROLLS / SHEETS — dimension table */
        if ( ( $type === 'rolls' || $type === 'sheets' ) && ! empty( $p['sizes'] ) ) : ?>
        <div class="tb-table-wrap">
            <div class="tb-table-label"><?php echo $type === 'rolls' ? 'Dimensions &amp; Roll Specifications' : 'Dimensions &amp; Available Sizes'; ?></div>
            <div class="tb-table-scroll">
                <table class="tb-table">
                    <thead>
                        <tr>
                            <?php if ( $type === 'rolls' ) : ?>
                            <th>Grade</th><th>Thickness Range</th><th>Master Roll Width (mm)</th><th>Tolerance (mm)</th>
                            <?php else : ?>
                            <th>Type / Grade</th><th>Thickness</th><th>Length (mm)</th><th>Width (mm)</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ( $p['sizes'] as $sr ) :
                            if ( $type === 'rolls' ) : ?>
                            <tr>
                                <td><?php echo esc_html( $sr['grade'] ); ?></td>
                                <td><?php echo esc_html( $sr['thickness'] ); ?></td>
                                <td><?php echo esc_html( $sr['max_width'] ); ?></td>
                                <td><?php echo esc_html( $sr['tolerance'] ); ?></td>
                            </tr>
                            <?php else :
                                $sheet_count = count( $sr['sheets'] );
                                $is_first    = true;
                                foreach ( $sr['sheets'] as $sh ) : ?>
                                <tr>
                                    <?php if ( $is_first ) : $is_first = false; ?>
                                    <td rowspan="<?php echo (int) $sheet_count; ?>"><?php echo esc_html( $sr['type'] ); ?></td>
                                    <td rowspan="<?php echo (int) $sheet_count; ?>"><?php echo esc_html( $sr['thickness'] ); ?></td>
                                    <?php endif; ?>
                                    <td><?php echo esc_html( $sh['length'] ); ?></td>
                                    <td><?php echo esc_html( $sh['width'] ); ?></td>
                                </tr>
                                <?php endforeach;
                            endif;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php /* WIRES — key:value spec table */
        elseif ( $type === 'wires' && ! empty( $p['specs'] ) ) : ?>
        <div class="tb-table-wrap">
            <div class="tb-table-label">Technical Specifications</div>
            <div class="tb-table-scroll">
                <table class="tb-table">
                    <thead><tr><th>Specification</th><th>Details</th></tr></thead>
                    <tbody>
                        <?php foreach ( $p['specs'] as $spec ) : ?>
                        <tr>
                            <td style="font-weight:600;color:var(--navy);width:35%;"><?php echo esc_html( $spec['label'] ); ?></td>
                            <td><?php echo esc_html( $spec['value'] ); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php /* COMPONENTS — variants section */
        elseif ( $type === 'components' && ! empty( $p['variants'] ) ) : ?>
        <div class="tb-table-wrap">
            <div class="tb-table-label">Available Variants</div>
            <div style="display:flex;flex-wrap:wrap;gap:0.6rem;padding-top:0.25rem;">
                <?php foreach ( $p['variants'] as $v ) : ?>
                <span style="display:inline-block;padding:0.4rem 0.9rem;background:var(--bg-secondary);border:1px solid var(--border-subtle);border-radius:4px;font-size:0.82rem;font-weight:500;color:var(--navy);"><?php echo esc_html( $v ); ?></span>
                <?php endforeach; ?>
            </div>
            <?php if ( ! empty( $p['applications_text'] ) ) : ?>
            <div style="margin-top:1.25rem;">
                <div class="tb-table-label">Applications</div>
                <p style="font-size:0.92rem;color:var(--text-secondary);line-height:1.65;"><?php echo esc_html( $p['applications_text'] ); ?></p>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

    </div>
    <?php endforeach; ?>
</div>

<?php else : /* CHEMICALS — no tabs, product listing table */ ?>
<div class="tb-matrix" style="border-bottom:none;">
    <div class="p-container">
        <?php if ( ! empty( $catalog['category_intro'] ) ) : ?>
        <div style="max-width:760px;margin-bottom:2.5rem;">
            <div class="p-section-header">
                <div class="p-eyebrow">Overview</div>
                <h2 class="p-section-title"><?php echo esc_html( $catalog['name'] ); ?></h2>
            </div>
            <p style="font-size:0.98rem;color:var(--text-secondary);line-height:1.7;"><?php echo esc_html( $catalog['category_intro'] ); ?></p>
            <?php if ( ! empty( $catalog['thermal_class'] ) ) : ?>
            <div style="margin-top:1.25rem;display:flex;gap:1rem;flex-wrap:wrap;">
                <span class="tb-grade-chip"><?php echo esc_html( $catalog['thermal_class'] ); ?></span>
                <?php if ( ! empty( $catalog['viscosity'] ) ) : ?>
                <span style="display:inline-flex;align-items:center;gap:0.4rem;padding:0.35rem 0.9rem;background:rgba(200,168,75,0.08);border:1px solid rgba(200,168,75,0.3);color:var(--gold-dark);font-size:0.78rem;font-weight:600;border-radius:4px;"><?php echo esc_html( $catalog['viscosity'] ); ?></span>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="p-section-header" style="margin-bottom:1rem;">
            <div class="p-eyebrow">Product Range</div>
            <h2 class="p-section-title">Available Grades</h2>
        </div>
        <div class="tb-matrix-scroll">
            <table class="tb-matrix-table">
                <thead>
                    <tr>
                        <th>Product Code</th>
                        <th>Thermal Class</th>
                        <th>Wire Range</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $products as $p ) : ?>
                    <tr class="tb-matrix-row" style="cursor:default;">
                        <td><span class="tb-matrix-grade-chip"><?php echo esc_html( $p['grade'] ); ?></span></td>
                        <td><?php echo esc_html( $p['thermal_class'] ?? '—' ); ?></td>
                        <td><?php echo esc_html( $p['wire_range'] ?? '—' ); ?></td>
                        <td style="font-size:0.82rem;color:var(--text-secondary);max-width:360px;"><?php echo esc_html( $p['description'] ?? '' ); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php if ( ! empty( $catalog['key_properties'] ) ) : ?>
        <div style="margin-top:2.5rem;display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1rem;">
            <?php foreach ( $catalog['key_properties'] as $kp ) : ?>
            <div style="padding:1.25rem 1.5rem;background:var(--bg-secondary);border:1px solid var(--border-subtle);border-radius:8px;">
                <div style="font-size:0.78rem;font-weight:700;color:var(--gold-dark);text-transform:uppercase;letter-spacing:0.08em;margin-bottom:0.4rem;"><?php echo esc_html( $kp['label'] ); ?></div>
                <div style="font-size:0.92rem;color:var(--text-secondary);"><?php echo esc_html( $kp['value'] ); ?></div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; /* end chemicals / tabs split */ ?>


<!-- ══════════════════════════════════════════
     ENQUIRY FORM
     ══════════════════════════════════════════ -->
<section class="tb-enquiry" id="tb-enquiry">
    <div class="p-container">
        <div class="tb-enquiry-inner">

            <?php if ( isset( $_GET['enquiry'] ) && $_GET['enquiry'] === 'sent' ) : ?>
            <div style="background:#F0FDF4;border:1px solid #BBF7D0;border-radius:8px;padding:1.25rem 1.5rem;margin-bottom:2rem;display:flex;align-items:center;gap:0.75rem;color:#065F46;font-weight:600;font-size:0.95rem;">
                <svg style="width:20px;height:20px;color:#10B981;flex-shrink:0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                Enquiry sent. Our team will be in touch shortly.
            </div>
            <?php endif; ?>

            <div class="tb-enquiry-eyebrow">Get Technical Data</div>
            <h2 class="tb-enquiry-title">Request a Technical Sheet</h2>
            <p class="tb-enquiry-desc">Share your application requirements and our engineering team will provide the relevant grade datasheet, tolerances, and pricing guidance.</p>

            <?php if ( ! $is_chemicals && ! empty( $products ) ) : ?>
            <div class="tb-active-grade-display" id="tb-active-grade-display">
                Enquiring about: <strong id="tb-active-grade-label"><?php echo esc_html( $catalog['name'] . ' — ' . ( $products[0]['grade'] ?? $products[0]['tab'] ) ); ?></strong>
                <span style="margin-left:0.75rem;font-size:0.75rem;color:var(--text-faint);">(switches with selected tab above)</span>
            </div>
            <?php endif; ?>

            <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                <input type="hidden" name="action"       value="ubl_product_enquiry">
                <input type="hidden" name="product_url"  value="<?php echo esc_url( get_permalink() ?: home_url( $_SERVER['REQUEST_URI'] ) ); ?>">
                <input type="hidden" id="tb-grade-input" name="product_name" value="<?php echo esc_attr( $catalog['name'] . ( ! empty( $products[0]['grade'] ) ? ' — ' . $products[0]['grade'] : '' ) ); ?>">
                <?php wp_nonce_field( 'ubl_product_enquiry', 'ubl_enq_nonce' ); ?>
                <div class="tb-form-grid">
                    <input class="tb-form-input"             type="text"  name="enq_name"        placeholder="Full Name"     required>
                    <input class="tb-form-input"             type="email" name="enq_email"        placeholder="Work Email"    required>
                    <input class="tb-form-input tb-form-full" type="text" name="enq_company"      placeholder="Company Name">
                    <textarea class="tb-form-textarea tb-form-full" name="enq_requirement"        placeholder="Project requirements, quantities, or specific grade needed"></textarea>
                    <button type="submit" class="p-btn p-btn-gold tb-form-full" style="justify-content:center;">Submit Enquiry</button>
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
    'parent'     => $parent_id,
    'hide_empty' => false,
    'exclude'    => [ $term_id ],
] );
if ( ! empty( $siblings ) && ! is_wp_error( $siblings ) ) : ?>
<section class="pc-related">
    <div class="p-container">
        <div class="p-section-header" style="text-align:center;">
            <div class="p-eyebrow">Explore More</div>
            <h2 class="p-section-title">Related Product Categories</h2>
        </div>
        <div class="pc-related-grid" style="grid-template-columns:repeat(<?php echo min( count( $siblings ), 4 ); ?>,1fr);">
            <?php foreach ( $siblings as $sib ) : ?>
            <a href="<?php echo esc_url( get_term_link( $sib ) ); ?>" class="pc-related-card">
                <div>
                    <div class="pc-related-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2h5l2 3h9a2 2 0 012 2z"/></svg>
                    </div>
                    <div class="pc-related-name"><?php echo esc_html( $sib->name ); ?></div>
                    <div class="pc-related-count"><?php echo (int) $sib->count; ?> Products</div>
                </div>
                <svg class="pc-related-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
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
    <?php if ( ! $is_chemicals ) : ?>
    /* ── Tabs ── */
    var pills  = document.querySelectorAll('.tb-tab-pill');
    var panels = document.querySelectorAll('.tb-panel');
    var gradeInput   = document.getElementById('tb-grade-input');
    var gradeDisplay = document.getElementById('tb-active-grade-label');

    function activate(id) {
        pills.forEach(function (p) {
            var on = p.getAttribute('data-panel') === id;
            p.classList.toggle('is-active', on);
            p.setAttribute('aria-selected', on ? 'true' : 'false');
        });
        panels.forEach(function (p) {
            p.classList.toggle('is-active', p.id === 'tb-panel-' + id);
        });
        var activePanel = document.getElementById('tb-panel-' + id);
        var chip = activePanel ? activePanel.querySelector('.tb-grade-chip') : null;
        var label = chip ? '<?php echo esc_js( $catalog['name'] ); ?> — ' + chip.textContent.trim() : '<?php echo esc_js( $catalog['name'] ); ?>';
        if (gradeInput)   gradeInput.value   = label;
        if (gradeDisplay) gradeDisplay.textContent = label;
        document.querySelectorAll('.tb-matrix-row').forEach(function (r) {
            r.classList.toggle('is-active', r.getAttribute('data-panel') === id);
        });
    }

    pills.forEach(function (p) { p.addEventListener('click', function () { activate(this.getAttribute('data-panel')); }); });

    document.querySelectorAll('.tb-matrix-row').forEach(function (r) {
        r.addEventListener('click', function () {
            activate(this.getAttribute('data-panel'));
            var tabs = document.getElementById('tb-tabs');
            if (tabs) tabs.scrollIntoView({ behavior:'smooth', block:'start' });
        });
    });

    var nav = document.querySelector('.tb-tab-nav');
    if (nav) nav.addEventListener('keydown', function (e) {
        if (e.key !== 'ArrowLeft' && e.key !== 'ArrowRight') return;
        var all = Array.from(pills), active = document.querySelector('.tb-tab-pill.is-active');
        var idx = all.indexOf(active);
        var next = e.key === 'ArrowRight' ? all[(idx+1) % all.length] : all[(idx-1+all.length) % all.length];
        next.focus();
        activate(next.getAttribute('data-panel'));
    });
    <?php endif; ?>

    /* ── Cert lightbox ── */
    var lb = document.getElementById('ab2Lightbox');
    var lbImg = document.getElementById('ab2LbImg');
    var lbTtl = document.getElementById('ab2LbTitle');
    var lbDsc = document.getElementById('ab2LbDesc');
    function closeLb() { lb.classList.remove('open'); document.body.style.overflow = ''; }
    document.querySelectorAll('.ab2-cert-item').forEach(function (el) {
        el.addEventListener('click', function () {
            lbImg.src = el.dataset.img; lbImg.alt = el.dataset.title;
            lbTtl.textContent = el.dataset.title; lbDsc.innerHTML = el.dataset.desc;
            lb.classList.add('open'); document.body.style.overflow = 'hidden';
        });
    });
    document.getElementById('ab2LbClose').addEventListener('click', closeLb);
    lb.addEventListener('click', function (e) { if (e.target === lb) closeLb(); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeLb(); });
}());
</script>

<?php get_footer(); ?>
