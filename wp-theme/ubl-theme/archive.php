<?php
/**
 * Archive Template — Blog listing, category, tag, date archives
 */
get_header();
?>

<style>
/* ============================================
   ARCHIVE / BLOG LISTING
   ============================================ */
.ar-hero {
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 3rem) 0 3rem;
}
.ar-hero-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ar-breadcrumb {
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
.ar-breadcrumb a {
    color: rgba(255,255,255,0.5);
    text-decoration: none;
    transition: color 0.3s;
}
.ar-breadcrumb a:hover { color: var(--gold); }
.ar-breadcrumb .ar-sep { color: rgba(255,255,255,0.25); }
.ar-eyebrow {
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.12em;
    margin-bottom: 0.75rem;
}
.ar-title {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    margin: 0 0 0.75rem;
}
.ar-desc {
    font-size: 1.05rem;
    color: rgba(255,255,255,0.6);
    max-width: 600px;
    line-height: 1.6;
    margin: 0;
}

/* Grid */
.ar-grid-wrap {
    max-width: 1200px;
    margin: 0 auto;
    padding: 3rem clamp(1.5rem, 4vw, 3.5rem) 4rem;
}
.ar-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}
.ar-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    transition: transform 0.4s var(--ease-out-expo), box-shadow 0.4s var(--ease-out-expo);
    text-decoration: none;
    display: flex;
    flex-direction: column;
}
.ar-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}
.ar-card-img {
    aspect-ratio: 16/9;
    overflow: hidden;
    background: var(--bg-secondary);
}
.ar-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s var(--ease-out-expo);
}
.ar-card:hover .ar-card-img img { transform: scale(1.05); }
.ar-card-body {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    flex: 1;
}
.ar-card-date {
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--gold);
    margin-bottom: 0.5rem;
}
.ar-card-title {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--text-primary);
    line-height: 1.4;
    margin: 0 0 0.75rem;
}
.ar-card-excerpt {
    font-size: 0.9rem;
    color: var(--text-muted);
    line-height: 1.6;
    margin: 0 0 1.25rem;
    flex: 1;
}
.ar-card-link {
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: var(--navy);
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    transition: color 0.3s, gap 0.3s;
}
.ar-card:hover .ar-card-link { color: var(--gold); gap: 0.65rem; }

/* No results */
.ar-empty {
    text-align: center;
    padding: 4rem 2rem;
    color: var(--text-muted);
    font-size: 1.1rem;
}

/* Pagination */
.ar-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
    padding: 2rem 0 0;
}
.ar-pagination a,
.ar-pagination span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    height: 40px;
    padding: 0 0.75rem;
    border-radius: 8px;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
}
.ar-pagination a {
    background: var(--bg-secondary);
    color: var(--text-secondary);
}
.ar-pagination a:hover {
    background: var(--navy);
    color: #fff;
}
.ar-pagination .current {
    background: var(--navy);
    color: #fff;
}

@media (max-width: 900px) {
    .ar-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 600px) {
    .ar-grid { grid-template-columns: 1fr; gap: 1.25rem; }
}
</style>

<main id="main-content">
    <section class="ar-hero">
        <div class="ar-hero-inner">
            <nav class="ar-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span class="ar-sep">/</span>
                <span><?php
                    if (is_category()) echo single_cat_title('', false);
                    elseif (is_tag()) echo single_tag_title('', false);
                    elseif (is_date()) echo get_the_date('F Y');
                    elseif (is_author()) echo get_the_author();
                    else echo 'News & Insights';
                ?></span>
            </nav>
            <div class="ar-eyebrow"><?php
                if (is_category()) echo 'Category';
                elseif (is_tag()) echo 'Tag';
                elseif (is_date()) echo 'Archive';
                elseif (is_author()) echo 'Author';
                else echo 'Newsroom';
            ?></div>
            <h1 class="ar-title"><?php
                if (is_category()) single_cat_title();
                elseif (is_tag()) single_tag_title();
                elseif (is_year()) echo get_the_date('Y');
                elseif (is_month()) echo get_the_date('F Y');
                elseif (is_day()) echo get_the_date('F j, Y');
                elseif (is_author()) echo get_the_author();
                else echo 'News & Insights';
            ?></h1>
            <?php if (is_category() && category_description()) : ?>
                <p class="ar-desc"><?php echo strip_tags(category_description()); ?></p>
            <?php elseif (is_tag() && tag_description()) : ?>
                <p class="ar-desc"><?php echo strip_tags(tag_description()); ?></p>
            <?php else : ?>
                <p class="ar-desc">Latest updates, press releases, and industry insights from Umang Boards Limited.</p>
            <?php endif; ?>
        </div>
    </section>

    <div class="ar-grid-wrap">
        <?php if (have_posts()) : ?>
        <div class="ar-grid">
            <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="ar-card">
                <?php if (has_post_thumbnail()) : ?>
                <div class="ar-card-img"><?php the_post_thumbnail('medium_large'); ?></div>
                <?php else : ?>
                <div class="ar-card-img" style="background:var(--navy);display:flex;align-items:center;justify-content:center;">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.2)" stroke-width="1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <?php endif; ?>
                <div class="ar-card-body">
                    <div class="ar-card-date"><?php echo get_the_date('M j, Y'); ?></div>
                    <h2 class="ar-card-title"><?php the_title(); ?></h2>
                    <p class="ar-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                    <span class="ar-card-link">Read More &rarr;</span>
                </div>
            </a>
            <?php endwhile; ?>
        </div>

        <nav class="ar-pagination">
            <?php
            echo paginate_links([
                'prev_text' => '&larr; Prev',
                'next_text' => 'Next &rarr;',
                'type'      => 'plain',
            ]);
            ?>
        </nav>
        <?php else : ?>
        <div class="ar-empty">
            <p>No posts found in this archive.</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" style="color:var(--navy);font-weight:600;text-decoration:none;">&larr; Back to Home</a>
        </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
