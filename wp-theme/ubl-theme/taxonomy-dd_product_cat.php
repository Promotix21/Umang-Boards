<?php
/**
 * Product Category Archive — Collection Page
 *
 * 5 Sections: Editorial Hero, Sidebar + Product List, CTA Panel, Related Categories
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$term         = get_queried_object();
$term_id      = $term->term_id;
$cat_name     = $term->name;
$cat_desc     = ubl_field( 'category_description_long', '', 'dd_product_cat_' . $term_id );
if ( empty( $cat_desc ) ) {
    $cat_desc = $term->description;
}
$cat_eyebrow  = ubl_field( 'category_eyebrow', 'Product Category', 'dd_product_cat_' . $term_id );
$cat_image    = ubl_field( 'category_image', '', 'dd_product_cat_' . $term_id );

// Child categories for sidebar filter
$child_terms = get_terms( [
    'taxonomy'   => 'dd_product_cat',
    'parent'     => $term_id,
    'hide_empty' => true,
] );

// Product count
$product_count = $term->count;

// Ancestors for breadcrumb
$ancestors = get_ancestors( $term_id, 'dd_product_cat', 'taxonomy' );
$ancestors = array_reverse( $ancestors );
?>

<main class="pc-page">

<!-- ══════════════════════════════════════════
     SECTION 1 — EDITORIAL HERO
     ══════════════════════════════════════════ -->
<section class="pc-header">
    <div class="pc-header-bg">
        <?php if ( $cat_image ) : ?>
            <img src="<?php echo esc_url( $cat_image ); ?>" alt="" loading="lazy">
        <?php else :
            $thumb_id = get_term_meta( $term_id, 'thumbnail_id', true );
            if ( $thumb_id ) :
                echo wp_get_attachment_image( $thumb_id, 'large', false, [ 'loading' => 'lazy' ] );
            endif;
        endif; ?>
    </div>
    <div class="pc-header-overlay"></div>
    <div class="p-container" style="position:relative;z-index:2;">
        <div class="pc-header-content">
            <nav class="p-breadcrumb" data-anim="fade-up">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <span class="sep">/</span>
                <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Products</a>
                <?php foreach ( $ancestors as $anc_id ) :
                    $anc = get_term( $anc_id, 'dd_product_cat' );
                ?>
                    <span class="sep">/</span>
                    <a href="<?php echo esc_url( get_term_link( $anc ) ); ?>"><?php echo esc_html( $anc->name ); ?></a>
                <?php endforeach; ?>
                <span class="sep">/</span>
                <span class="current"><?php echo esc_html( $cat_name ); ?></span>
            </nav>

            <div class="p-eyebrow" data-anim="fade-up"><?php echo esc_html( strtoupper( $cat_eyebrow ) ); ?></div>
            <h1 class="pc-header-title" data-anim="clip-reveal"><?php echo esc_html( $cat_name ); ?></h1>

            <?php if ( $cat_desc ) : ?>
                <p class="pc-header-desc" data-anim="fade-up"><?php echo wp_kses_post( $cat_desc ); ?></p>
            <?php endif; ?>

            <div class="pc-product-count" data-anim="fade-up">
                <?php printf( '%d %s', $product_count, _n( 'Product', 'Products', $product_count, 'ubl-theme' ) ); ?>
            </div>

            <div class="p-btn-row" data-anim="fade-up" style="margin-top:2rem;">
                <a href="#" class="p-btn p-btn-gold">Download Catalog</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="p-btn p-btn-outline-white">Contact Engineering</a>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════
     SECTION 2 — SIDEBAR + PRODUCT LIST
     ══════════════════════════════════════════ -->
<section class="pc-grid-section">
    <div class="p-container">
        <?php
        $products = new WP_Query( [
            'post_type'      => 'dd_product',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'title',
            'order'          => 'ASC',
            'tax_query'      => [ [
                'taxonomy'         => 'dd_product_cat',
                'field'            => 'term_id',
                'terms'            => $term_id,
                'include_children' => true,
            ] ],
        ] );

        if ( $products->have_posts() ) : ?>
            <div class="pc-layout">

                <!-- SIDEBAR -->
                <?php if ( ! empty( $child_terms ) && ! is_wp_error( $child_terms ) ) : ?>
                <aside class="pc-sidebar">
                    <div class="pc-sidebar-inner">
                        <div class="pc-sidebar-heading">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
                            <h2>Filter Products</h2>
                        </div>

                        <div class="pc-sidebar-group">
                            <h3 class="pc-sidebar-group-title">Product Category</h3>
                            <button class="pc-sidebar-cat active" data-filter="all">
                                <span>All Products</span>
                                <span class="pc-sidebar-count"><?php echo $product_count; ?></span>
                            </button>
                            <?php foreach ( $child_terms as $ct ) : ?>
                                <button class="pc-sidebar-cat" data-filter="<?php echo esc_attr( $ct->slug ); ?>">
                                    <span><?php echo esc_html( $ct->name ); ?></span>
                                    <span class="pc-sidebar-count"><?php echo $ct->count; ?></span>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </aside>
                <?php endif; ?>

                <!-- PRODUCT LIST -->
                <div class="pc-product-list" id="pc-product-grid">
                    <div class="pc-list-header">
                        <h2 class="pc-list-heading">Showing <?php echo esc_html( $cat_name ); ?></h2>
                        <span class="pc-list-count"><?php echo $product_count; ?> Products</span>
                    </div>

                    <?php while ( $products->have_posts() ) : $products->the_post();
                        $p_terms = wp_get_post_terms( get_the_ID(), 'dd_product_cat' );
                        $p_cat   = '';
                        $p_slugs = [];
                        foreach ( $p_terms as $pt ) {
                            if ( $pt->term_id !== $term_id ) {
                                $p_cat = $pt->name;
                            }
                            $p_slugs[] = $pt->slug;
                        }
                        if ( empty( $p_cat ) && ! empty( $p_terms ) ) {
                            $p_cat = $p_terms[0]->name;
                        }
                    ?>
                        <a href="<?php the_permalink(); ?>"
                           class="pc-product-row"
                           data-anim="fade-up-stagger"
                           data-cats="<?php echo esc_attr( implode( ' ', $p_slugs ) ); ?>"
                           data-title="<?php echo esc_attr( get_the_title() ); ?>"
                           data-date="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>">

                            <div class="pc-product-row-img">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium' ); ?>
                                <?php else : ?>
                                    <div style="width:100%;height:100%;background:var(--bg-secondary);display:flex;align-items:center;justify-content:center;">
                                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="rgba(11,31,58,0.12)" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="pc-product-row-content">
                                <h3 class="pc-product-row-title"><?php the_title(); ?></h3>
                                <p class="pc-product-row-desc"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
                                <?php
                                $quick_specs = function_exists( 'get_field' ) ? get_field( 'quick_specs' ) : [];
                                if ( ! empty( $quick_specs ) ) : ?>
                                    <div class="pc-product-row-tags">
                                        <?php foreach ( array_slice( $quick_specs, 0, 3 ) as $qs ) : ?>
                                            <span class="p-card-tag"><?php echo esc_html( $qs['spec_label'] ); ?>: <?php echo esc_html( $qs['spec_value'] ); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="pc-product-row-arrow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </div>
                        </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>

            </div>
        <?php else : ?>
            <p style="text-align:center;padding:60px 0;color:var(--text-muted);font-size:15px;">No products found in this category.</p>
        <?php endif; ?>
    </div>
</section>


<!-- ══════════════════════════════════════════
     SECTION 3 — CTA PANEL
     ══════════════════════════════════════════ -->
<section class="pc-grid-section">
    <div class="p-container">
        <div class="pc-cta" data-anim="fade-up">
            <h2 class="pc-cta-title">Need technical guidance?</h2>
            <p class="pc-cta-text">Our engineering team can help you select the right insulation solution for your application.</p>
            <div class="p-btn-row" style="justify-content:center;">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="p-btn p-btn-gold">Send Enquiry</a>
                <a href="mailto:<?php echo esc_attr( ubl_option( 'company_sales_email', 'sales@umangboards.com' ) ); ?>" class="p-btn p-btn-outline-white">Email Sales</a>
                <a href="#" class="p-btn p-btn-ghost">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download Catalog
                </a>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════
     SECTION 4 — RELATED CATEGORIES
     ══════════════════════════════════════════ -->
<?php
// Get sibling categories (same parent) or top-level if this is top-level
$parent_id = $term->parent ?: 0;
$siblings  = get_terms( [
    'taxonomy'   => 'dd_product_cat',
    'parent'     => $parent_id,
    'hide_empty' => true,
    'exclude'    => [ $term_id ],
    'number'     => 4,
] );

if ( ! empty( $siblings ) && ! is_wp_error( $siblings ) ) : ?>
<section class="pc-related">
    <div class="p-container">
        <div class="p-section-header" data-anim="fade-up">
            <div class="p-eyebrow">Explore More</div>
            <h2 class="p-section-title">Related Product Categories</h2>
        </div>
        <div class="pc-related-grid">
            <?php foreach ( $siblings as $sib ) : ?>
                <a href="<?php echo esc_url( get_term_link( $sib ) ); ?>" class="pc-related-card" data-anim="fade-up-stagger">
                    <div>
                        <div class="pc-related-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2h5l2 3h9a2 2 0 012 2z"/></svg>
                        </div>
                        <div class="pc-related-name"><?php echo esc_html( $sib->name ); ?></div>
                        <div class="pc-related-count"><?php echo esc_html( $sib->count ); ?> Products</div>
                    </div>
                    <svg class="pc-related-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

</main>

<?php get_footer(); ?>
