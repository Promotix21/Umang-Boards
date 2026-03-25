<?php
/**
 * Default page template
 * Uses standard WordPress editor (Gutenberg) for content
 */
get_header();
?>

<main id="main-content" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="page-content-wrap" style="max-width:1200px;margin:0 auto;padding:6rem 2rem 4rem;">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
