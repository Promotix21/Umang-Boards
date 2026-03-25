<?php
/**
 * Search Results Template
 */
get_header();
?>

<style>
/* ============================================
   SEARCH RESULTS
   ============================================ */
.sr-hero {
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 3rem) 0 3rem;
}
.sr-hero-inner {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.sr-breadcrumb {
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
.sr-breadcrumb a {
    color: rgba(255,255,255,0.5);
    text-decoration: none;
    transition: color 0.3s;
}
.sr-breadcrumb a:hover { color: var(--gold); }
.sr-eyebrow {
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.12em;
    margin-bottom: 0.75rem;
}
.sr-title {
    font-size: clamp(1.75rem, 3.5vw, 2.5rem);
    font-weight: 700;
    line-height: 1.2;
    margin: 0 0 1.5rem;
}
.sr-title em {
    font-style: normal;
    color: var(--gold);
}
.sr-count {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.5);
}

/* Search form in hero */
.sr-form {
    margin-top: 1.5rem;
    display: flex;
    gap: 0.75rem;
    max-width: 500px;
}
.sr-form input[type="search"] {
    flex: 1;
    padding: 0.75rem 1rem;
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 8px;
    background: rgba(255,255,255,0.08);
    color: #fff;
    font-size: 0.95rem;
    font-family: inherit;
    outline: none;
    transition: border-color 0.3s;
}
.sr-form input[type="search"]::placeholder { color: rgba(255,255,255,0.4); }
.sr-form input[type="search"]:focus { border-color: var(--gold); }
.sr-form button {
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 8px;
    background: var(--gold);
    color: #fff;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    cursor: pointer;
    font-family: inherit;
    transition: background 0.3s;
}
.sr-form button:hover { background: #c49b38; }

/* Results */
.sr-results {
    max-width: 900px;
    margin: 0 auto;
    padding: 2rem clamp(1.5rem, 4vw, 3.5rem) 4rem;
}
.sr-item {
    padding: 1.5rem 0;
    border-bottom: 1px solid rgba(0,0,0,0.06);
}
.sr-item:first-child { padding-top: 0; }
.sr-item-type {
    font-size: 0.65rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--text-muted);
    background: var(--bg-secondary);
    padding: 0.2rem 0.6rem;
    border-radius: 4px;
    display: inline-block;
    margin-bottom: 0.5rem;
}
.sr-item-title {
    font-size: 1.15rem;
    font-weight: 700;
    margin: 0 0 0.5rem;
    line-height: 1.4;
}
.sr-item-title a {
    color: var(--navy);
    text-decoration: none;
    transition: color 0.3s;
}
.sr-item-title a:hover { color: var(--gold); }
.sr-item-excerpt {
    font-size: 0.92rem;
    color: var(--text-muted);
    line-height: 1.65;
    margin: 0;
}
.sr-item-meta {
    margin-top: 0.5rem;
    font-size: 0.75rem;
    color: var(--text-muted);
}

/* No results */
.sr-empty {
    text-align: center;
    padding: 4rem 2rem;
}
.sr-empty-icon {
    width: 64px;
    height: 64px;
    color: var(--text-muted);
    opacity: 0.3;
    margin-bottom: 1.5rem;
}
.sr-empty-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin: 0 0 0.75rem;
}
.sr-empty-desc {
    font-size: 1rem;
    color: var(--text-muted);
    max-width: 400px;
    margin: 0 auto 2rem;
    line-height: 1.6;
}
.sr-empty-form {
    display: flex;
    gap: 0.75rem;
    max-width: 400px;
    margin: 0 auto;
}
.sr-empty-form input[type="search"] {
    flex: 1;
    padding: 0.75rem 1rem;
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 8px;
    background: var(--bg-secondary);
    color: var(--text-primary);
    font-size: 0.95rem;
    font-family: inherit;
    outline: none;
    transition: border-color 0.3s;
}
.sr-empty-form input[type="search"]:focus { border-color: var(--navy); }
.sr-empty-form button {
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 8px;
    background: var(--navy);
    color: #fff;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    cursor: pointer;
    font-family: inherit;
    transition: background 0.3s;
}
.sr-empty-form button:hover { background: #2a5a96; }

/* Pagination */
.sr-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
    padding: 2rem 0 0;
}
.sr-pagination a,
.sr-pagination span {
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
.sr-pagination a {
    background: var(--bg-secondary);
    color: var(--text-secondary);
}
.sr-pagination a:hover {
    background: var(--navy);
    color: #fff;
}
.sr-pagination .current {
    background: var(--navy);
    color: #fff;
}

@media (max-width: 600px) {
    .sr-form, .sr-empty-form { flex-direction: column; }
}
</style>

<main id="main-content">
    <section class="sr-hero">
        <div class="sr-hero-inner">
            <nav class="sr-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span style="color:rgba(255,255,255,0.25);">/</span>
                <span>Search Results</span>
            </nav>
            <div class="sr-eyebrow">Search</div>
            <h1 class="sr-title">Results for <em>&ldquo;<?php echo esc_html(get_search_query()); ?>&rdquo;</em></h1>
            <div class="sr-count"><?php
                global $wp_query;
                printf('%d %s found', $wp_query->found_posts, $wp_query->found_posts === 1 ? 'result' : 'results');
            ?></div>
            <form class="sr-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="search" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="Search again...">
                <button type="submit">Search</button>
            </form>
        </div>
    </section>

    <div class="sr-results">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="sr-item">
                <span class="sr-item-type"><?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name); ?></span>
                <h2 class="sr-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="sr-item-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
                <?php if (get_post_type() === 'post') : ?>
                <div class="sr-item-meta"><?php echo get_the_date('M j, Y'); ?></div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>

            <nav class="sr-pagination">
                <?php
                echo paginate_links([
                    'prev_text' => '&larr; Prev',
                    'next_text' => 'Next &rarr;',
                    'type'      => 'plain',
                ]);
                ?>
            </nav>
        <?php else : ?>
            <div class="sr-empty">
                <svg class="sr-empty-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                <h2 class="sr-empty-title">No Results Found</h2>
                <p class="sr-empty-desc">We couldn't find anything matching your search. Try different keywords or browse our pages below.</p>
                <form class="sr-empty-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="search" name="s" placeholder="Try a different search...">
                    <button type="submit">Search</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
