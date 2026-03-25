<?php
/**
 * Single Product — Engineering Catalog Detail Page (Split Layout)
 *
 * Split sticky/scroll layout: left pane (fixed, navy + product image),
 * right pane (scrollable content sections).
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$product_id = get_the_ID();

// Category data (dd_product_cat taxonomy)
$terms        = wp_get_post_terms( $product_id, 'dd_product_cat', [ 'orderby' => 'parent', 'order' => 'ASC' ] );
$primary_term = ! empty( $terms ) ? $terms[0] : null;
$cat_name     = $primary_term ? $primary_term->name : '';
$cat_link     = $primary_term ? get_term_link( $primary_term ) : '';

// ACF fields
$quick_specs      = ubl_field( 'quick_specs', [] );
$long_desc        = ubl_field( 'product_description_long', '' );
$key_features     = ubl_field( 'key_features', [] );
$tech_specs       = ubl_field( 'tech_specs', [] );
$characteristics  = ubl_field( 'characteristics', [] );
$applications     = ubl_field( 'applications', [] );
$downloads        = ubl_field( 'downloads', [] );

// Fallback description
$short_desc = get_the_excerpt();
if ( empty( $long_desc ) ) {
    $long_desc = get_the_content();
}

// Sales email
$sales_email = ubl_option( 'company_sales_email', 'sales@umangboards.com' );

// Section counter
$section_num = 1;
?>

<main class="pd-page">

    <!-- LEFT STICKY PANE -->
    <div class="pd-left">
        <div class="pd-left-bg">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>
        </div>
        <div class="pd-left-gradient"></div>
        <div class="pd-left-content">
            <a href="<?php echo esc_url( $cat_link ?: home_url( '/products/' ) ); ?>" class="pd-back">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                Back to Catalog
            </a>

            <div class="pd-left-tags">
                <?php if ( $cat_name ) : ?>
                    <span class="pd-left-tag"><?php echo esc_html( strtoupper( $cat_name ) ); ?></span>
                <?php endif; ?>
                <?php if ( ! empty( $quick_specs ) ) :
                    foreach ( array_slice( $quick_specs, 0, 2 ) as $qs ) : ?>
                        <span class="pd-left-tag"><?php echo esc_html( $qs['spec_value'] ); ?></span>
                    <?php endforeach;
                endif; ?>
            </div>

            <h1 class="pd-left-title"><?php the_title(); ?></h1>

            <?php if ( $short_desc ) : ?>
                <p class="pd-left-desc"><?php echo wp_kses_post( $short_desc ); ?></p>
            <?php endif; ?>

            <div class="pd-left-footer">
                <a href="#pd-enquiry" class="p-btn p-btn-gold">Request Technical Details</a>
                <div class="pd-left-cert">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    ISO 9001 Certified Manufacturing
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT SCROLLABLE PANE -->
    <div class="pd-right">

        <!-- 01. Overview -->
        <?php if ( $long_desc || ! empty( $key_features ) ) : ?>
        <div class="pd-section" data-anim="fade-up">
            <div class="pd-section-eyebrow"><?php echo str_pad( $section_num++, 2, '0', STR_PAD_LEFT ); ?>. Overview</div>
            <h2 class="pd-section-title">Product Description</h2>
            <?php if ( $long_desc ) : ?>
                <div class="pd-overview-text"><?php echo wp_kses_post( $long_desc ); ?></div>
            <?php endif; ?>
            <?php if ( ! empty( $key_features ) ) : ?>
                <div class="pd-chars-grid">
                    <?php foreach ( $key_features as $f ) : ?>
                        <div class="pd-char-card">
                            <svg class="pd-char-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span class="pd-char-text"><?php echo esc_html( $f['feature_text'] ); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <!-- 02. Technical Specifications -->
        <?php if ( ! empty( $tech_specs ) ) : ?>
        <div class="pd-section" data-anim="fade-up">
            <div class="pd-section-eyebrow"><?php echo str_pad( $section_num++, 2, '0', STR_PAD_LEFT ); ?>. Technical Specifications</div>
            <div class="pd-spec-rows">
                <?php foreach ( $tech_specs as $ts ) : ?>
                    <div class="pd-spec-row">
                        <div class="pd-spec-prop"><?php echo esc_html( $ts['property'] ); ?></div>
                        <div class="pd-spec-val"><?php echo esc_html( $ts['value'] ); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- 03. Key Characteristics -->
        <?php if ( ! empty( $characteristics ) ) : ?>
        <div class="pd-section" data-anim="fade-up">
            <div class="pd-section-eyebrow"><?php echo str_pad( $section_num++, 2, '0', STR_PAD_LEFT ); ?>. Key Characteristics</div>
            <div class="pd-chars-grid">
                <?php foreach ( $characteristics as $c ) : ?>
                    <div class="pd-char-card">
                        <svg class="pd-char-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        <span class="pd-char-text"><?php echo esc_html( $c['characteristic_text'] ); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- 04. Applications -->
        <?php if ( ! empty( $applications ) ) : ?>
        <div class="pd-section" data-anim="fade-up">
            <div class="pd-section-eyebrow"><?php echo str_pad( $section_num++, 2, '0', STR_PAD_LEFT ); ?>. Applications</div>
            <div class="pd-chars-grid">
                <?php foreach ( $applications as $app ) : ?>
                    <div class="pd-char-card">
                        <svg class="pd-char-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>
                        <span class="pd-char-text">
                            <strong><?php echo esc_html( $app['app_name'] ); ?></strong>
                            <?php if ( ! empty( $app['app_description'] ) ) : ?>
                                <br><span style="font-size:0.9rem;color:var(--text-muted);"><?php echo esc_html( $app['app_description'] ); ?></span>
                            <?php endif; ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- 05. Documentation -->
        <?php if ( ! empty( $downloads ) ) : ?>
        <div class="pd-section" data-anim="fade-up">
            <div class="pd-section-eyebrow"><?php echo str_pad( $section_num++, 2, '0', STR_PAD_LEFT ); ?>. Documentation</div>
            <?php foreach ( $downloads as $dl ) :
                $file = $dl['doc_file'] ?? null;
                if ( ! $file ) continue;
                $file_url  = $file['url'] ?? '';
                $file_size = isset( $file['filesize'] ) ? size_format( $file['filesize'] ) : '';
                $file_type = strtoupper( $dl['doc_type'] ?? 'PDF' );
            ?>
                <a href="<?php echo esc_url( $file_url ); ?>" class="pd-doc-row" target="_blank" download>
                    <div class="pd-doc-row-left">
                        <div class="pd-doc-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                        </div>
                        <div>
                            <div class="pd-doc-name"><?php echo esc_html( $dl['doc_name'] ); ?></div>
                            <div class="pd-doc-meta"><?php echo esc_html( $file_type ); ?><?php if ( $file_size ) echo ' &middot; ' . esc_html( $file_size ); ?></div>
                        </div>
                    </div>
                    <svg class="pd-doc-dl" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- ENQUIRY FORM -->
        <div class="pd-enquiry-panel" id="pd-enquiry" data-anim="fade-up">
            <div class="pd-enquiry-inner">
                <?php if ( isset( $_GET['enquiry'] ) && $_GET['enquiry'] === 'sent' ) : ?>
                <div class="pd-success" style="background:#F0FDF4;border:1px solid #BBF7D0;border-radius:8px;padding:1.25rem 1.5rem;margin-bottom:1.5rem;display:flex;align-items:center;gap:0.75rem;color:#065F46;font-weight:600;font-size:0.95rem;">
                    <svg style="width:22px;height:22px;color:#10B981;flex-shrink:0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    Your enquiry has been sent successfully. Our team will respond shortly.
                </div>
                <?php endif; ?>
                <h2 class="pd-enquiry-title">Request a Quote</h2>
                <p class="pd-enquiry-text">Our engineering team is available to discuss custom specifications and material tolerances for your application.</p>

                <form class="pd-enquiry-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                    <input type="hidden" name="action" value="ubl_product_enquiry">
                    <input type="hidden" name="product_name" value="<?php echo esc_attr( get_the_title() ); ?>">
                    <input type="hidden" name="product_url" value="<?php echo esc_url( get_permalink() ); ?>">
                    <?php wp_nonce_field( 'ubl_product_enquiry', 'ubl_enq_nonce' ); ?>

                    <div class="pd-form-grid">
                        <input class="pd-form-input" type="text" name="enq_name" placeholder="Full Name" required>
                        <input class="pd-form-input" type="email" name="enq_email" placeholder="Work Email" required>
                        <input class="pd-form-input pd-form-full" type="text" name="enq_company" placeholder="Company Name">
                        <textarea class="pd-form-textarea pd-form-full" name="enq_requirement" placeholder="Project Requirements"></textarea>
                        <button type="submit" class="p-btn p-btn-gold pd-form-submit pd-form-full">Submit Enquiry</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- RELATED PRODUCTS -->
        <?php
        $related_args = [
            'post_type'      => 'dd_product',
            'posts_per_page' => 3,
            'post__not_in'   => [ $product_id ],
            'post_status'    => 'publish',
            'orderby'        => 'rand',
        ];
        if ( $primary_term ) {
            $related_args['tax_query'] = [ [
                'taxonomy' => 'dd_product_cat',
                'field'    => 'term_id',
                'terms'    => $primary_term->term_id,
            ] ];
        }
        $related = new WP_Query( $related_args );

        if ( $related->have_posts() ) : ?>
        <section class="pd-related">
            <div class="pd-related-header">
                <div class="pd-related-header-left">
                    <div class="p-eyebrow">From This Category</div>
                    <h2 class="p-section-title">Related Products</h2>
                </div>
                <?php if ( $primary_term ) : ?>
                    <a href="<?php echo esc_url( $cat_link ); ?>" class="pd-view-all">
                        View All
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                <?php endif; ?>
            </div>

            <div class="pd-related-grid">
                <?php while ( $related->have_posts() ) : $related->the_post();
                    $r_terms = wp_get_post_terms( get_the_ID(), 'dd_product_cat' );
                    $r_cat   = ! empty( $r_terms ) ? $r_terms[0]->name : '';
                ?>
                    <a href="<?php the_permalink(); ?>" class="p-card" data-anim="fade-up-stagger">
                        <?php if ( $r_cat ) : ?>
                            <span class="p-card-eyebrow"><?php echo esc_html( $r_cat ); ?></span>
                        <?php endif; ?>
                        <h3 class="p-card-title"><?php the_title(); ?></h3>
                        <p class="p-card-desc"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
                        <span class="p-card-link">
                            View Product
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </span>
                    </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </section>
        <?php endif; ?>

    </div>
</main>

<script>
// Hide left pane when user scrolls to footer area
(function() {
    var leftPane = document.querySelector('.pd-left');
    var footer = document.querySelector('.site-footer');
    if (!leftPane || !footer) return;

    function checkFooterOverlap() {
        var footerRect = footer.getBoundingClientRect();
        if (footerRect.top < window.innerHeight) {
            var overlap = window.innerHeight - footerRect.top;
            leftPane.style.clipPath = 'inset(0 0 ' + overlap + 'px 0)';
        } else {
            leftPane.style.clipPath = '';
        }
    }

    window.addEventListener('scroll', checkFooterOverlap, { passive: true });
    checkFooterOverlap();
})();
</script>

<?php get_footer(); ?>
