<?php
/**
 * Single Post Template
 */
get_header();
?>

<style>
/* ============================================
   SINGLE POST
   ============================================ */
.sp-hero {
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 3rem) 0 3rem;
}
.sp-hero-inner {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.sp-breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: rgba(255,255,255,0.5);
    margin-bottom: 2rem;
}
.sp-breadcrumb a {
    color: rgba(255,255,255,0.5);
    text-decoration: none;
    transition: color 0.3s;
}
.sp-breadcrumb a:hover { color: var(--gold); }
.sp-breadcrumb .sp-sep { color: rgba(255,255,255,0.25); }
.sp-meta {
    display: flex;
    align-items: center;
    gap: 1.25rem;
    margin-bottom: 1.25rem;
    flex-wrap: wrap;
}
.sp-date {
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.12em;
}
.sp-cat {
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    background: rgba(255,255,255,0.1);
    padding: 0.3rem 0.75rem;
    border-radius: 100px;
    color: rgba(255,255,255,0.7);
}
.sp-cat a { color: inherit; text-decoration: none; }
.sp-title {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    margin: 0;
}

/* Featured Image */
.sp-featured {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
    transform: translateY(-2rem);
}
.sp-featured img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.12);
    display: block;
}

/* Content */
.sp-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 1rem clamp(1.5rem, 4vw, 3.5rem) 3rem;
}
.sp-content h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--navy);
    margin: 2.5rem 0 1rem;
}
.sp-content h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--navy);
    margin: 2rem 0 0.75rem;
}
.sp-content h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--text-primary);
    margin: 1.5rem 0 0.5rem;
}
.sp-content p {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.85;
    margin-bottom: 1.5rem;
}
.sp-content img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 2rem 0;
}
.sp-content blockquote {
    border-left: 3px solid var(--gold);
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: var(--text-muted);
    font-size: 1.1rem;
    line-height: 1.8;
}
.sp-content ul, .sp-content ol {
    padding-left: 1.5rem;
    margin-bottom: 1.5rem;
}
.sp-content li {
    margin-bottom: 0.5rem;
    line-height: 1.7;
    color: var(--text-secondary);
}
.sp-content a {
    color: var(--navy);
    text-decoration: underline;
    text-decoration-color: var(--gold);
    text-underline-offset: 3px;
    transition: color 0.3s;
}
.sp-content a:hover { color: var(--gold); }
.sp-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 2rem 0;
}
.sp-content th, .sp-content td {
    padding: 0.75rem 1rem;
    border-bottom: 1px solid rgba(0,0,0,0.06);
    text-align: left;
    font-size: 0.95rem;
    color: var(--text-secondary);
}
.sp-content th {
    font-weight: 700;
    color: var(--navy);
    background: var(--bg-secondary);
}

/* Share */
.sp-share {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem) 2rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
}
.sp-share-label {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--text-muted);
}
.sp-share a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--bg-secondary);
    color: var(--text-muted);
    text-decoration: none;
    transition: all 0.3s;
}
.sp-share a:hover {
    background: var(--navy);
    color: #fff;
}
.sp-share svg { width: 16px; height: 16px; }

/* Post Navigation */
.sp-nav {
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem clamp(1.5rem, 4vw, 3.5rem);
    border-top: 1px solid rgba(11,31,58,0.06);
    display: flex;
    justify-content: space-between;
    gap: 2rem;
}
.sp-nav span a {
    color: var(--navy);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    transition: color 0.3s;
}
.sp-nav span a:hover { color: var(--gold); }

/* Related Posts */
.sp-related {
    background: var(--bg-secondary);
    padding: 4rem 0;
}
.sp-related-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.sp-related-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 2rem;
}
.sp-related-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}
.sp-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    transition: transform 0.4s var(--ease-out-expo), box-shadow 0.4s var(--ease-out-expo);
    text-decoration: none;
    display: block;
}
.sp-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}
.sp-card-img {
    aspect-ratio: 16/9;
    overflow: hidden;
}
.sp-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s var(--ease-out-expo);
}
.sp-card:hover .sp-card-img img { transform: scale(1.05); }
.sp-card-body { padding: 1.25rem 1.5rem; }
.sp-card-date {
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--gold);
    margin-bottom: 0.5rem;
}
.sp-card-title {
    font-size: 1rem;
    font-weight: 700;
    color: var(--text-primary);
    line-height: 1.4;
    margin: 0;
}

@media (max-width: 768px) {
    .sp-related-grid {
        grid-template-columns: 1fr;
        gap: 1.25rem;
    }
    .sp-nav {
        flex-direction: column;
        gap: 1rem;
    }
}
</style>

<?php while (have_posts()) : the_post(); ?>
<main id="main-content">
    <section class="sp-hero">
        <div class="sp-hero-inner">
            <nav class="sp-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span class="sp-sep">/</span>
                <a href="<?php echo esc_url(home_url('/news')); ?>">News</a>
                <span class="sp-sep">/</span>
                <span><?php the_title(); ?></span>
            </nav>
            <div class="sp-meta">
                <span class="sp-date"><?php echo get_the_date('F j, Y'); ?></span>
                <?php
                $cats = get_the_category();
                if ($cats) :
                    foreach ($cats as $cat) : ?>
                        <span class="sp-cat"><a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?></a></span>
                    <?php endforeach;
                endif; ?>
            </div>
            <h1 class="sp-title"><?php the_title(); ?></h1>
        </div>
    </section>

    <?php if (has_post_thumbnail()) : ?>
    <div class="sp-featured">
        <?php the_post_thumbnail('large'); ?>
    </div>
    <?php endif; ?>

    <article class="sp-content">
        <?php the_content(); ?>
    </article>

    <!-- Share Links -->
    <div class="sp-share">
        <span class="sp-share-label">Share</span>
        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener" aria-label="Share on LinkedIn">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener" aria-label="Share on X">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
        </a>
        <a href="mailto:?subject=<?php echo rawurlencode(get_the_title()); ?>&body=<?php echo rawurlencode(get_permalink()); ?>" aria-label="Share via Email">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        </a>
    </div>

    <!-- Post Navigation -->
    <nav class="sp-nav">
        <?php previous_post_link('<span>&larr; %link</span>'); ?>
        <?php next_post_link('<span>%link &rarr;</span>'); ?>
    </nav>

    <!-- Related Posts -->
    <?php
    $cats = get_the_category();
    $related = new WP_Query([
        'category__in'   => $cats ? wp_list_pluck($cats, 'term_id') : [],
        'post__not_in'   => [get_the_ID()],
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);
    if ($related->have_posts()) : ?>
    <section class="sp-related">
        <div class="sp-related-inner">
            <h2 class="sp-related-title">Related Articles</h2>
            <div class="sp-related-grid">
                <?php while ($related->have_posts()) : $related->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="sp-card">
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="sp-card-img"><?php the_post_thumbnail('medium_large'); ?></div>
                    <?php endif; ?>
                    <div class="sp-card-body">
                        <div class="sp-card-date"><?php echo get_the_date('M j, Y'); ?></div>
                        <h3 class="sp-card-title"><?php the_title(); ?></h3>
                    </div>
                </a>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; wp_reset_postdata(); ?>
</main>
<?php endwhile; ?>

<?php get_footer(); ?>
