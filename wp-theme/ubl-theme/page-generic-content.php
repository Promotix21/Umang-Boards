<?php
/**
 * Template Name: Generic Content Page
 * Description: Generic content template for WP editor pages (catalogues, policies, legal, investor docs, etc.)
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   GENERIC CONTENT PAGE — Document Template
   ============================================ */

/* --- HERO (Slim) --- */
.gc-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 3rem) 0 5rem;
    overflow: hidden;
}
.gc-hero-gradient {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, var(--navy) 0%, #1a3a5c 50%, var(--navy) 100%);
}
.gc-hero-glow {
    position: absolute; inset: 0;
    background: radial-gradient(circle at 70% 30%, rgba(212,168,67,0.1) 0%, transparent 50%);
    pointer-events: none;
}
.gc-hero-pattern {
    position: absolute; inset: 0; opacity: 0.04;
    background-image: repeating-linear-gradient(0deg, transparent, transparent 60px, rgba(255,255,255,0.5) 60px, rgba(255,255,255,0.5) 61px),
                       repeating-linear-gradient(90deg, transparent, transparent 60px, rgba(255,255,255,0.5) 60px, rgba(255,255,255,0.5) 61px);
    pointer-events: none;
}
.gc-hero-inner {
    position: relative; z-index: 2;
    max-width: 1400px; margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.gc-breadcrumb {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.72rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.15em;
    color: rgba(255,255,255,0.5); margin-bottom: 2rem;
    flex-wrap: wrap;
}
.gc-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.gc-breadcrumb a:hover { color: var(--gold); }
.gc-breadcrumb .active { color: var(--gold); }
.gc-breadcrumb svg { width: 12px; height: 12px; flex-shrink: 0; }
.gc-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4.5vw, 3.5rem);
    font-weight: 700; line-height: 1.1;
    letter-spacing: -0.03em; max-width: 800px;
}

/* --- CONTENT AREA --- */
.gc-content-wrap {
    max-width: 1400px; margin: 0 auto;
    padding: clamp(3rem, 6vw, 5rem) clamp(1.5rem, 4vw, 3.5rem);
    display: flex; gap: 4rem; align-items: flex-start;
}
.gc-content {
    flex: 1; min-width: 0;
    max-width: 900px;
}

/* --- Document Typography (matches page-investor-sub.php) --- */
.gc-content h2 {
    font-size: clamp(1.4rem, 2.5vw, 1.8rem);
    font-weight: 700; color: var(--text-primary);
    letter-spacing: -0.02em; margin: 2.5rem 0 1rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid var(--gold);
    line-height: 1.25;
}
.gc-content h2:first-child { margin-top: 0; }
.gc-content h3 {
    font-size: clamp(1.1rem, 2vw, 1.35rem);
    font-weight: 700; color: var(--text-primary);
    margin: 2rem 0 0.75rem; line-height: 1.3;
}
.gc-content h4 {
    font-size: 1.05rem; font-weight: 700;
    color: var(--navy); margin: 1.5rem 0 0.5rem;
}
.gc-content h5 {
    font-size: 0.95rem; font-weight: 700;
    color: var(--navy); margin: 1.5rem 0 0.5rem;
    text-transform: uppercase; letter-spacing: 0.05em;
}
.gc-content p {
    font-size: 1rem; line-height: 1.75;
    color: var(--text-secondary); margin-bottom: 1.25rem;
}
.gc-content ul, .gc-content ol {
    margin: 1rem 0 1.5rem 1.5rem;
    color: var(--text-secondary);
}
.gc-content li {
    font-size: 0.95rem; line-height: 1.7;
    margin-bottom: 0.5rem; padding-left: 0.25rem;
}
.gc-content ul li { list-style-type: disc; }
.gc-content ol li { list-style-type: decimal; }
.gc-content strong { color: var(--text-primary); }
.gc-content a {
    color: var(--navy); text-decoration: underline;
    text-underline-offset: 3px; transition: color 0.3s;
}
.gc-content a:hover { color: var(--gold); }
.gc-content blockquote {
    margin: 1.5rem 0;
    padding: 1.25rem 1.5rem;
    border-left: 3px solid var(--gold);
    background: var(--bg-secondary);
    font-style: italic;
    color: var(--text-secondary);
}
.gc-content blockquote p { margin-bottom: 0; }
.gc-content img {
    max-width: 100%;
    height: auto;
    margin: 1.5rem 0;
}
.gc-content hr {
    border: none;
    border-top: 1px solid rgba(11,31,58,0.08);
    margin: 2rem 0;
}

/* --- Tables --- */
.gc-content table {
    width: 100%; border-collapse: collapse;
    margin: 1.5rem 0 2rem; font-size: 0.92rem;
}
.gc-content th {
    background: var(--navy); color: #fff;
    padding: 0.85rem 1.25rem; text-align: left;
    font-weight: 700; font-size: 0.8rem;
    text-transform: uppercase; letter-spacing: 0.06em;
}
.gc-content td {
    padding: 0.8rem 1.25rem;
    border-bottom: 1px solid rgba(11,31,58,0.08);
    color: var(--text-secondary);
}
.gc-content tr:nth-child(even) td { background: var(--bg-secondary); }
.gc-content tr:hover td { background: rgba(55,110,180,0.05); }

/* --- WP Block Styles --- */
.gc-content .wp-block-buttons { margin: 1.5rem 0; }
.gc-content .wp-block-button__link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.8rem 1.75rem;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    text-decoration: none;
    background: var(--gold);
    color: var(--navy);
    border: 2px solid var(--gold);
    transition: all 0.3s var(--ease-out-expo);
}
.gc-content .wp-block-button__link:hover {
    background: transparent;
    color: var(--gold);
}
.gc-content .wp-block-file {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem 1.25rem;
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    margin: 1rem 0;
    transition: border-color 0.3s;
}
.gc-content .wp-block-file:hover { border-color: var(--gold); }
.gc-content .wp-block-file a {
    text-decoration: none;
    font-weight: 600;
    color: var(--navy);
}
.gc-content .wp-block-file .wp-block-file__button {
    padding: 0.5rem 1rem;
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    background: var(--navy);
    color: #fff;
    text-decoration: none;
    transition: background 0.3s;
}
.gc-content .wp-block-file .wp-block-file__button:hover { background: var(--gold); color: var(--navy); }
.gc-content .wp-block-gallery { margin: 1.5rem 0; }
.gc-content .wp-block-embed { margin: 1.5rem 0; }

/* --- SIDEBAR TOC --- */
.gc-sidebar {
    width: 260px; flex-shrink: 0;
    position: sticky; top: calc(var(--utility-h) + var(--header-h) + 2rem);
}
.gc-toc-title {
    font-size: 0.7rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.12em;
    color: var(--text-muted); margin-bottom: 1rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid rgba(11,31,58,0.08);
}
.gc-toc-list { list-style: none; margin: 0; padding: 0; }
.gc-toc-list li { margin-bottom: 0; }
.gc-toc-list a {
    display: block; padding: 0.45rem 0;
    font-size: 0.82rem; color: var(--text-muted);
    text-decoration: none; transition: all 0.3s;
    line-height: 1.4; border-left: 2px solid transparent;
    padding-left: 0.75rem;
}
.gc-toc-list a:hover, .gc-toc-list a.active {
    color: var(--navy); border-left-color: var(--gold);
}
.gc-toc-list .gc-toc-h3 { padding-left: 1.5rem; font-size: 0.78rem; }

/* --- BACK LINK --- */
.gc-back-link {
    display: inline-flex; align-items: center; gap: 0.5rem;
    margin-top: 3rem; padding: 0.75rem 1.5rem;
    font-size: 0.82rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.1em;
    color: var(--navy); text-decoration: none;
    border: 1px solid rgba(11,31,58,0.15);
    transition: all 0.3s var(--ease-out-expo);
}
.gc-back-link:hover {
    border-color: var(--gold); color: var(--gold);
    transform: translateX(-3px);
}
.gc-back-link svg { width: 16px; height: 16px; }

/* --- Responsive --- */
@media (max-width: 900px) {
    .gc-sidebar { display: none; }
    .gc-content { max-width: 100%; }
}
@media (max-width: 600px) {
    .gc-hero { padding-bottom: 3rem; }
    .gc-content-wrap { padding: 2rem clamp(1.5rem, 4vw, 3.5rem); }
    .gc-content table { font-size: 0.82rem; }
    .gc-content th, .gc-content td { padding: 0.6rem 0.75rem; }
}
</style>

<!-- ═══════════════════════════════════════════════
     HERO (Slim)
     ═══════════════════════════════════════════════ -->
<section class="gc-hero">
    <div class="gc-hero-gradient"></div>
    <div class="gc-hero-glow"></div>
    <div class="gc-hero-pattern"></div>
    <div class="gc-hero-inner">
        <nav class="gc-breadcrumb" data-animate>
            <a href="<?php echo home_url(); ?>">Home</a>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            <?php
            // Show parent page in breadcrumb if available
            $parent_id = wp_get_post_parent_id(get_the_ID());
            if ($parent_id) :
                $parent = get_post($parent_id);
            ?>
                <a href="<?php echo get_permalink($parent_id); ?>"><?php echo esc_html($parent->post_title); ?></a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            <?php endif; ?>
            <span class="active"><?php the_title(); ?></span>
        </nav>
        <h1 class="gc-hero-title" data-animate><?php the_title(); ?></h1>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
     CONTENT
     ═══════════════════════════════════════════════ -->
<div class="gc-content-wrap">
    <article class="gc-content" data-animate>
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>

        <!-- Back Link -->
        <a href="<?php echo home_url(); ?>" class="gc-back-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Back to Home
        </a>
    </article>

    <!-- Sidebar TOC (auto-populated via JS) -->
    <aside class="gc-sidebar" id="gcSidebar">
        <div class="gc-toc-title">On This Page</div>
        <ul class="gc-toc-list" id="gcTocList"></ul>
    </aside>
</div>

<?php get_footer(); ?>

<!-- TOC + GSAP Animations -->
<script>
document.addEventListener('DOMContentLoaded', function() {

    // Auto-generate TOC from headings
    var content = document.querySelector('.gc-content');
    var tocList = document.getElementById('gcTocList');
    var sidebar = document.getElementById('gcSidebar');

    if (content && tocList) {
        var headings = content.querySelectorAll('h2, h3');
        if (headings.length < 2) {
            // Hide sidebar if not enough headings
            if (sidebar) sidebar.style.display = 'none';
        } else {
            headings.forEach(function(h, i) {
                var id = 'section-' + i;
                h.id = id;
                var li = document.createElement('li');
                var a = document.createElement('a');
                a.href = '#' + id;
                a.textContent = h.textContent;
                if (h.tagName === 'H3') a.classList.add('gc-toc-h3');
                a.addEventListener('click', function(e) {
                    e.preventDefault();
                    h.scrollIntoView({ behavior: 'smooth', block: 'start' });
                });
                li.appendChild(a);
                tocList.appendChild(li);
            });

            // Active state on scroll
            var tocLinks = tocList.querySelectorAll('a');
            window.addEventListener('scroll', function() {
                var scrollPos = window.scrollY + 200;
                headings.forEach(function(h, i) {
                    if (h.offsetTop <= scrollPos) {
                        tocLinks.forEach(function(l) { l.classList.remove('active'); });
                        tocLinks[i].classList.add('active');
                    }
                });
            });
        }
    }

    // GSAP fadeUp
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        document.querySelectorAll('[data-animate]').forEach(function(el) {
            gsap.from(el, {
                y: 25, opacity: 0, duration: 0.7,
                ease: 'power2.out',
                scrollTrigger: { trigger: el, start: 'top 90%', once: true }
            });
        });
    }
});
</script>
