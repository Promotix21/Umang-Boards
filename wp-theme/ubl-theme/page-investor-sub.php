<?php
/**
 * Template Name: Investor Sub Page
 * Description: Generic template for investor sub-pages (policies, governance, etc.)
 */
get_header();
$uri = UBL_URI;
$parent = get_post(wp_get_post_parent_id(get_the_ID()));
?>

<style>
/* ============================================
   INVESTOR SUB-PAGE — Document Template
   ============================================ */

/* --- HERO (Slim) --- */
.is-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 3rem) 0 5rem;
    overflow: hidden;
}
.is-hero-gradient {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, var(--navy) 0%, #1a3a5c 50%, var(--navy) 100%);
}
.is-hero-glow {
    position: absolute; inset: 0;
    background: radial-gradient(circle at 70% 30%, rgba(212,168,67,0.1) 0%, transparent 50%);
    pointer-events: none;
}
.is-hero-pattern {
    position: absolute; inset: 0; opacity: 0.04;
    background-image: repeating-linear-gradient(0deg, transparent, transparent 60px, rgba(255,255,255,0.5) 60px, rgba(255,255,255,0.5) 61px),
                       repeating-linear-gradient(90deg, transparent, transparent 60px, rgba(255,255,255,0.5) 60px, rgba(255,255,255,0.5) 61px);
    pointer-events: none;
}
.is-hero-inner {
    position: relative; z-index: 2;
    max-width: 1400px; margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.is-breadcrumb {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.72rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.15em;
    color: rgba(255,255,255,0.5); margin-bottom: 2rem;
    flex-wrap: wrap;
}
.is-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.is-breadcrumb a:hover { color: var(--gold); }
.is-breadcrumb .active { color: var(--gold); }
.is-breadcrumb svg { width: 12px; height: 12px; flex-shrink: 0; }
.is-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4.5vw, 3.5rem);
    font-weight: 700; line-height: 1.1;
    letter-spacing: -0.03em; max-width: 800px;
}

/* --- CONTENT AREA --- */
.is-content-wrap {
    max-width: 1400px; margin: 0 auto;
    padding: clamp(3rem, 6vw, 5rem) clamp(1.5rem, 4vw, 3.5rem);
    display: flex; gap: 4rem; align-items: flex-start;
}
.is-content {
    flex: 1; min-width: 0;
    max-width: 900px;
}

/* --- Document Typography --- */
.is-content h2 {
    font-size: clamp(1.4rem, 2.5vw, 1.8rem);
    font-weight: 700; color: var(--text-primary);
    letter-spacing: -0.02em; margin: 2.5rem 0 1rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid var(--gold);
    line-height: 1.25;
}
.is-content h2:first-child { margin-top: 0; }
.is-content h3 {
    font-size: clamp(1.1rem, 2vw, 1.35rem);
    font-weight: 700; color: var(--text-primary);
    margin: 2rem 0 0.75rem; line-height: 1.3;
}
.is-content h4 {
    font-size: 1.05rem; font-weight: 700;
    color: var(--navy); margin: 1.5rem 0 0.5rem;
}
.is-content h5 {
    font-size: 0.95rem; font-weight: 700;
    color: var(--navy); margin: 1.5rem 0 0.5rem;
    text-transform: uppercase; letter-spacing: 0.05em;
}
.is-content p {
    font-size: 1rem; line-height: 1.75;
    color: var(--text-secondary); margin-bottom: 1.25rem;
}
.is-content ul, .is-content ol {
    margin: 1rem 0 1.5rem 1.5rem;
    color: var(--text-secondary);
}
.is-content li {
    font-size: 0.95rem; line-height: 1.7;
    margin-bottom: 0.5rem; padding-left: 0.25rem;
}
.is-content ul li { list-style-type: disc; }
.is-content ol li { list-style-type: decimal; }
.is-content strong { color: var(--text-primary); }
.is-content a {
    color: var(--navy); text-decoration: underline;
    text-underline-offset: 3px; transition: color 0.3s;
}
.is-content a:hover { color: var(--gold); }

/* --- Tables --- */
.is-content table {
    width: 100%; border-collapse: collapse;
    margin: 1.5rem 0 2rem; font-size: 0.92rem;
}
.is-content th {
    background: var(--navy); color: #fff;
    padding: 0.85rem 1.25rem; text-align: left;
    font-weight: 700; font-size: 0.8rem;
    text-transform: uppercase; letter-spacing: 0.06em;
}
.is-content td {
    padding: 0.8rem 1.25rem;
    border-bottom: 1px solid rgba(11,31,58,0.08);
    color: var(--text-secondary);
}
.is-content tr:nth-child(even) td { background: var(--bg-secondary); }
.is-content tr:hover td { background: rgba(55,110,180,0.05); }

/* --- SIDEBAR TOC --- */
.is-sidebar {
    width: 260px; flex-shrink: 0;
    position: sticky; top: calc(var(--utility-h) + var(--header-h) + 2rem);
}
.is-toc-title {
    font-size: 0.7rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.12em;
    color: var(--text-muted); margin-bottom: 1rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid rgba(11,31,58,0.08);
}
.is-toc-list { list-style: none; margin: 0; padding: 0; }
.is-toc-list li { margin-bottom: 0; }
.is-toc-list a {
    display: block; padding: 0.45rem 0;
    font-size: 0.82rem; color: var(--text-muted);
    text-decoration: none; transition: all 0.3s;
    line-height: 1.4; border-left: 2px solid transparent;
    padding-left: 0.75rem;
}
.is-toc-list a:hover, .is-toc-list a.active {
    color: var(--navy); border-left-color: var(--gold);
}
.is-toc-list .is-toc-h3 { padding-left: 1.5rem; font-size: 0.78rem; }

/* --- BACK LINK --- */
.is-back-link {
    display: inline-flex; align-items: center; gap: 0.5rem;
    margin-top: 3rem; padding: 0.75rem 1.5rem;
    font-size: 0.82rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.1em;
    color: var(--navy); text-decoration: none;
    border: 1px solid rgba(11,31,58,0.15);
    transition: all 0.3s var(--ease-out-expo);
}
.is-back-link:hover {
    border-color: var(--gold); color: var(--gold);
    transform: translateX(-3px);
}
.is-back-link svg { width: 16px; height: 16px; }

/* --- POLICY LINKS --- */
.is-policy-links {
    display: flex; flex-wrap: wrap; gap: 0.75rem;
    margin-top: 3rem; padding-top: 2rem;
    border-top: 1px solid rgba(11,31,58,0.08);
}
.is-policy-link {
    display: inline-flex; align-items: center; gap: 0.5rem;
    padding: 0.6rem 1.25rem; font-size: 0.82rem;
    font-weight: 600; color: var(--text-secondary);
    text-decoration: none; background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    transition: all 0.3s var(--ease-out-expo);
}
.is-policy-link:hover {
    border-color: var(--gold); color: var(--navy);
}
.is-policy-link svg { width: 14px; height: 14px; }

/* --- Responsive --- */
@media (max-width: 900px) {
    .is-sidebar { display: none; }
    .is-content { max-width: 100%; }
}
@media (max-width: 600px) {
    .is-hero { padding-bottom: 3rem; }
    .is-content-wrap { padding: 2rem clamp(1.5rem, 4vw, 3.5rem); }
    .is-content table { font-size: 0.82rem; }
    .is-content th, .is-content td { padding: 0.6rem 0.75rem; }
}
</style>

<!-- ═══════════════════════════════════════════════
     HERO (Slim)
     ═══════════════════════════════════════════════ -->
<section class="is-hero">
    <div class="is-hero-gradient"></div>
    <div class="is-hero-glow"></div>
    <div class="is-hero-pattern"></div>
    <div class="is-hero-inner">
        <nav class="is-breadcrumb" data-animate>
            <a href="/">Home</a>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            <a href="/investors/">Investors</a>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            <span class="active"><?php the_title(); ?></span>
        </nav>
        <h1 class="is-hero-title" data-animate><?php the_title(); ?></h1>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
     CONTENT
     ═══════════════════════════════════════════════ -->
<div class="is-content-wrap">
    <article class="is-content" data-animate>
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>

        <!-- Related Policy Links -->
        <div class="is-policy-links">
            <a href="/investors/corporate-governance/" class="is-policy-link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                Corporate Governance
            </a>
            <a href="/investors/code-of-conduct/" class="is-policy-link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                Code of Conduct
            </a>
            <a href="/investors/csr-policy/" class="is-policy-link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                CSR Policy
            </a>
            <a href="/investors/ehs-policy/" class="is-policy-link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                EHS Policy
            </a>
        </div>

        <!-- Back Link -->
        <a href="/investors/" class="is-back-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Back to Investor Relations
        </a>
    </article>

    <!-- Sidebar TOC (auto-populated via JS) -->
    <aside class="is-sidebar" id="isSidebar">
        <div class="is-toc-title">On This Page</div>
        <ul class="is-toc-list" id="isTocList"></ul>
    </aside>
</div>

<?php get_footer(); ?>

<!-- TOC + GSAP Animations -->
<script>
document.addEventListener('DOMContentLoaded', function() {

    // Auto-generate TOC from headings
    var content = document.querySelector('.is-content');
    var tocList = document.getElementById('isTocList');
    var sidebar = document.getElementById('isSidebar');

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
                if (h.tagName === 'H3') a.classList.add('is-toc-h3');
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
    if (typeof gsap !== 'undefined') {
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
