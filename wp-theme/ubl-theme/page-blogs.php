<?php
/**
 * Template Name: Blogs
 * Description: Blog listing page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;

// Query blog posts
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$blog_query = new WP_Query( [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 9,
    'paged'          => $paged,
] );
?>

<style>
/* ============================================
   BLOGS PAGE
   ============================================ */

/* --- HERO --- */
.bl-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 6rem;
    overflow: hidden;
}
.bl-hero-gradient {
    position: absolute; inset: 0;
    background: linear-gradient(to bottom, var(--navy), rgba(11,31,58,0.95));
}
.bl-hero-glow {
    position: absolute; inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.12) 0%, transparent 50%);
    pointer-events: none;
}
.bl-hero-inner {
    position: relative; z-index: 2;
    max-width: 1400px; margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.bl-breadcrumb {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.72rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.15em; color: rgba(255,255,255,0.5); margin-bottom: 2rem;
}
.bl-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.bl-breadcrumb a:hover { color: var(--gold); }
.bl-breadcrumb .active { color: var(--gold); }
.bl-breadcrumb svg { width: 12px; height: 12px; }
.bl-badge {
    display: inline-flex; padding: 0.4rem 1rem;
    background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2);
    font-size: 0.75rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.15em; margin-bottom: 1.5rem;
}
.bl-hero-title {
    font-size: clamp(2.5rem, 5.5vw, 4rem); font-weight: 700;
    line-height: 1.1; letter-spacing: -0.03em; margin-bottom: 1.5rem;
}
.bl-hero-title em { font-style: normal; color: var(--gold); }
.bl-hero-subtitle {
    font-size: clamp(1rem, 1.8vw, 1.25rem);
    color: rgba(255,255,255,0.7); max-width: 560px;
    line-height: 1.65; font-weight: 300;
}

/* --- BLOG GRID --- */
.bl-section {
    max-width: 1400px; margin: 0 auto;
    padding: 5rem clamp(1.5rem, 4vw, 3.5rem) 6rem;
}
.bl-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}
.bl-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    border-radius: 12px;
    overflow: hidden;
    text-decoration: none;
    display: flex; flex-direction: column;
    transition: all 0.4s var(--ease-out-expo);
}
.bl-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(11,31,58,0.08);
    border-color: rgba(212,168,67,0.3);
}
.bl-card-img {
    width: 100%; aspect-ratio: 16/10; object-fit: cover;
    background: var(--bg-secondary);
}
.bl-card-body { padding: 1.5rem; flex: 1; display: flex; flex-direction: column; }
.bl-card-meta {
    display: flex; align-items: center; gap: 0.75rem;
    font-size: 0.75rem; font-weight: 700; color: var(--gold);
    text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.75rem;
}
.bl-card-title {
    font-size: 1.15rem; font-weight: 700; color: var(--navy);
    line-height: 1.3; margin-bottom: 0.75rem;
}
.bl-card-excerpt {
    font-size: 0.92rem; color: var(--text-secondary);
    line-height: 1.65; font-weight: 300; margin-bottom: 1.5rem; flex: 1;
}
.bl-card-link {
    display: inline-flex; align-items: center; gap: 0.4rem;
    font-size: 0.8rem; font-weight: 700; color: var(--navy);
    text-transform: uppercase; letter-spacing: 0.08em;
    border-bottom: 2px solid var(--gold); padding-bottom: 2px;
    transition: color 0.3s;
}
.bl-card-link:hover { color: var(--gold); }
.bl-card-link svg { width: 14px; height: 14px; transition: transform 0.3s; }
.bl-card-link:hover svg { transform: translateX(4px); }

/* --- EMPTY STATE --- */
.bl-empty {
    text-align: center; padding: 4rem 2rem;
    background: var(--bg-secondary); border-radius: 12px;
}
.bl-empty-title { font-size: 1.5rem; font-weight: 700; color: var(--navy); margin-bottom: 0.75rem; }
.bl-empty-text { font-size: 1rem; color: var(--text-secondary); font-weight: 300; }

/* --- PAGINATION --- */
.bl-pagination {
    display: flex; justify-content: center; align-items: center;
    gap: 0.5rem; margin-top: 3rem;
}
.bl-pagination a, .bl-pagination span {
    display: inline-flex; align-items: center; justify-content: center;
    width: 44px; height: 44px; border-radius: 8px;
    font-size: 0.9rem; font-weight: 600; text-decoration: none;
    border: 1px solid rgba(11,31,58,0.1); color: var(--navy);
    transition: all 0.3s;
}
.bl-pagination a:hover { border-color: var(--gold); color: var(--gold); }
.bl-pagination .current {
    background: var(--navy); color: #fff; border-color: var(--navy);
}

/* --- RESPONSIVE --- */
@media (max-width: 1024px) { .bl-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 600px) { .bl-grid { grid-template-columns: 1fr; } }
</style>

<main>

    <!-- HERO -->
    <section class="bl-hero">
        <div class="bl-hero-gradient"></div>
        <div class="bl-hero-glow"></div>
        <div class="bl-hero-inner">
            <nav class="bl-breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                <span class="active">Blog</span>
            </nav>
            <span class="bl-badge">INSIGHTS</span>
            <h1 class="bl-hero-title">Our <em>Blog</em></h1>
            <p class="bl-hero-subtitle">Industry insights, company updates, and thought leadership from the Umang Boards team.</p>
        </div>
    </section>

    <!-- BLOG GRID -->
    <section class="bl-section">

        <?php if ( $blog_query->have_posts() ) : ?>
        <div class="bl-grid">
            <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="bl-card">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium_large', [ 'class' => 'bl-card-img', 'loading' => 'lazy' ] ); ?>
                <?php else : ?>
                    <div class="bl-card-img" style="display:flex;align-items:center;justify-content:center;">
                        <svg style="width:48px;height:48px;color:var(--text-muted);opacity:0.3;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                    </div>
                <?php endif; ?>
                <div class="bl-card-body">
                    <div class="bl-card-meta">
                        <span><?php echo get_the_date( 'M j, Y' ); ?></span>
                        <?php
                        $cats = get_the_category();
                        if ( ! empty( $cats ) ) :
                        ?>
                            <span>&middot;</span>
                            <span><?php echo esc_html( $cats[0]->name ); ?></span>
                        <?php endif; ?>
                    </div>
                    <h3 class="bl-card-title"><?php the_title(); ?></h3>
                    <p class="bl-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
                    <span class="bl-card-link">
                        Read More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                    </span>
                </div>
            </a>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <?php if ( $blog_query->max_num_pages > 1 ) : ?>
        <div class="bl-pagination">
            <?php
            echo paginate_links( [
                'total'   => $blog_query->max_num_pages,
                'current' => $paged,
                'format'  => '?paged=%#%',
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;',
            ] );
            ?>
        </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <div class="bl-empty">
            <h2 class="bl-empty-title">Coming Soon</h2>
            <p class="bl-empty-text">We're preparing our first articles. Check back soon for industry insights and company updates.</p>
        </div>
        <?php endif; ?>

    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    gsap.from('.bl-breadcrumb, .bl-badge, .bl-hero-title, .bl-hero-subtitle', {
        y: 30, opacity: 0, duration: 0.8, stagger: 0.12, delay: 0.3, ease: 'expo.out'
    });

    gsap.fromTo('.bl-card', { y: 40, opacity: 0 }, {
        y: 0, opacity: 1, duration: 0.7, stagger: 0.1, ease: 'expo.out',
        scrollTrigger: { trigger: '.bl-grid', start: 'top 85%' }
    });
});
</script>

<?php get_footer(); ?>
