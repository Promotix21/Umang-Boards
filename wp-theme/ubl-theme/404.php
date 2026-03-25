<?php
/**
 * 404 Error Page Template
 */
get_header();
?>

<style>
/* ============================================
   404 ERROR PAGE
   ============================================ */
.e404 {
    min-height: 100vh;
    background: var(--navy);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    padding: calc(var(--utility-h) + var(--header-h)) 0 0;
}
.e404-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 50% 40%, rgba(212,168,67,0.08) 0%, transparent 60%);
    pointer-events: none;
}
.e404-inner {
    position: relative;
    z-index: 2;
    text-align: center;
    padding: 2rem clamp(1.5rem, 4vw, 3.5rem);
    max-width: 700px;
}
.e404-num {
    font-size: clamp(8rem, 20vw, 16rem);
    font-weight: 800;
    line-height: 1;
    color: transparent;
    -webkit-text-stroke: 2px rgba(255,255,255,0.06);
    letter-spacing: -0.02em;
    margin-bottom: -1rem;
    user-select: none;
    position: relative;
}
.e404-num::after {
    content: '404';
    position: absolute;
    inset: 0;
    -webkit-text-stroke: 1px rgba(212,168,67,0.15);
    transform: translate(3px, 3px);
}
.e404-title {
    font-size: clamp(1.75rem, 3.5vw, 2.5rem);
    font-weight: 700;
    margin: 0 0 1rem;
    line-height: 1.2;
}
.e404-desc {
    font-size: 1.05rem;
    color: rgba(255,255,255,0.55);
    line-height: 1.7;
    margin: 0 0 2.5rem;
    max-width: 480px;
    margin-left: auto;
    margin-right: auto;
}
.e404-actions {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}
.e404-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.9rem 2rem;
    background: var(--gold);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    text-decoration: none;
    transition: background 0.3s, transform 0.3s;
    font-family: inherit;
}
.e404-btn-primary:hover {
    background: #c49b38;
    transform: translateY(-2px);
}
.e404-btn-outline {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.9rem 2rem;
    background: transparent;
    color: #fff;
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 8px;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    text-decoration: none;
    transition: all 0.3s;
    font-family: inherit;
}
.e404-btn-outline:hover {
    border-color: rgba(255,255,255,0.5);
    background: rgba(255,255,255,0.05);
    transform: translateY(-2px);
}

@media (max-width: 480px) {
    .e404-actions { flex-direction: column; }
    .e404-btn-primary, .e404-btn-outline { width: 100%; justify-content: center; }
}
</style>

<main id="main-content">
    <section class="e404">
        <div class="e404-glow"></div>
        <div class="e404-inner">
            <div class="e404-num">404</div>
            <h1 class="e404-title">Page Not Found</h1>
            <p class="e404-desc">The page you're looking for doesn't exist or has been moved. Let us help you find your way back.</p>
            <div class="e404-actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="e404-btn-primary">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Go Home
                </a>
                <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="e404-btn-outline">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    Contact Us
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
