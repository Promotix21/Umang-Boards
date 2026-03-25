<?php
/**
 * Template Name: Solutions
 * Dynamic solutions page — renders based on page slug
 *
 * @package UBL_Theme
 */
get_header();
$uri  = UBL_URI;
$slug = get_post_field( 'post_name', get_post() );

$solutions = [
    'power-transformers' => [
        'title'     => 'Power Transformers',
        'eyebrow'   => 'Solutions',
        'hero_desc' => 'Comprehensive insulation solutions for power transformers up to 400 kV class. From pressboards to machined components and winding wires.',
        'products'  => [ 'High Density Pressboards', 'Medium Density Pressboards', 'Calendered Pressboards', 'Laminated Pressboards', 'Insulation Cylinders', 'Machined Spacers &amp; Strips', 'Paper Covered Copper Flat Wire' ],
        'features'  => [ 'PGCIL approved up to 400 kV class', 'Non-metallic particle pressboards', 'Custom machined components', 'Complete insulation kits available' ],
        'image'     => 'app-power-transformers.jpg',
    ],
    'distribution-transformers' => [
        'title'     => 'Distribution Transformers',
        'eyebrow'   => 'Solutions',
        'hero_desc' => 'Cost-effective insulation and winding wire solutions optimized for distribution transformer manufacturing.',
        'products'  => [ 'Medium Density Pressboards', 'Calendered Pressboards', 'Insulation Papers', 'Super Enamelled Aluminium Wire', 'Paper Covered Aluminium Flat Wire' ],
        'features'  => [ 'Optimized for cost-efficiency', 'High volume manufacturing capability', 'Consistent quality across batches', 'Short lead times' ],
        'image'     => 'app-distribution-transformers.jpg',
    ],
    'instrument-transformers' => [
        'title'     => 'Instrument Transformers',
        'eyebrow'   => 'Solutions',
        'hero_desc' => 'Precision insulation components for current and potential transformers requiring exact dimensional tolerances.',
        'products'  => [ 'Calendered Pressboards', 'Moulded Components', 'Super Enamelled Copper Round Wire', 'Insulation Papers' ],
        'features'  => [ 'Tight dimensional tolerances', 'High dielectric strength', 'Custom moulded shapes', 'Precision machining available' ],
        'image'     => 'app-instrument-transformers.jpg',
    ],
    'electric-motors' => [
        'title'     => 'Electric Motors',
        'eyebrow'   => 'Solutions',
        'hero_desc' => 'Enamelled wires and insulating varnishes engineered for industrial motor manufacturing.',
        'products'  => [ 'Super Enamelled Copper Round Wire', 'Super Enamelled Aluminium Round Wire', 'Wire Enamels', 'Impregnating Resins', 'Insulating Varnishes' ],
        'features'  => [ 'Temperature class F and H rated', 'Excellent mechanical strength', 'Superior winding properties', 'Complete chemical solutions' ],
        'image'     => 'app-electric-motors.jpg',
    ],
    'renewables' => [
        'title'     => 'Renewables',
        'eyebrow'   => 'Solutions',
        'hero_desc' => 'Wind and solar transformer insulation solutions built for reliability in demanding renewable energy environments.',
        'products'  => [ 'High Density Pressboards', 'Laminated Pressboards', 'Insulation Cylinders', 'Paper Covered Copper Flat Wire', 'Machined Spacers' ],
        'features'  => [ 'Designed for harsh environments', 'Long operational life', 'Vibration resistant', 'UV and moisture tolerant' ],
        'image'     => 'app-renewables.jpg',
    ],
    'data-centers' => [
        'title'     => 'Data Centers',
        'eyebrow'   => 'Solutions',
        'hero_desc' => 'High-reliability transformer insulation for mission-critical data center power infrastructure.',
        'products'  => [ 'High Density Pressboards', 'Medium Density Pressboards', 'Insulation Papers', 'Super Enamelled Copper Wire' ],
        'features'  => [ 'Ultra-high reliability', '24/7 operational demands', 'Low partial discharge', 'Extended service life' ],
        'image'     => 'app-data-centers.jpg',
    ],
    'home-appliances' => [
        'title'     => 'Home Appliances',
        'eyebrow'   => 'Solutions',
        'hero_desc' => 'Enamelled copper and aluminium wires for household appliance motors and small transformers.',
        'products'  => [ 'Super Enamelled Copper Round Wire', 'Super Enamelled Aluminium Round Wire', 'Wire Enamels' ],
        'features'  => [ 'Cost-optimized for consumer products', 'Consistent quality at scale', 'Multiple gauge options', 'Fast delivery cycles' ],
        'image'     => 'app-home-appliances.jpg',
    ],
    'ev-motors' => [
        'title'     => 'EV Motors',
        'eyebrow'   => 'Solutions',
        'hero_desc' => 'High-performance enamelled wires for electric vehicle motor applications demanding peak efficiency.',
        'products'  => [ 'Super Enamelled Copper Round Wire', 'Super Enamelled Copper Flat Wire', 'Wire Enamels', 'Impregnating Resins' ],
        'features'  => [ 'High thermal class ratings', 'Excellent partial discharge resistance', 'Optimized for high-speed motors', 'Lightweight conductor options' ],
        'image'     => 'app-ev-motors.jpg',
    ],
    'stabilizers' => [
        'title'     => 'Stabilizers',
        'eyebrow'   => 'Solutions',
        'hero_desc' => 'Enamelled copper and aluminium round and flat wires for voltage stabilizer manufacturing.',
        'products'  => [ 'Super Enamelled Copper Round Wire', 'Super Enamelled Aluminium Round Wire', 'Super Enamelled Aluminium Flat Wire' ],
        'features'  => [ 'Wide gauge range available', 'Consistent enamel thickness', 'Good solderability', 'High production volumes' ],
        'image'     => 'app-stabilizers.jpg',
    ],
];

$solution = $solutions[ $slug ] ?? null;
if ( ! $solution ) {
    $solution = [
        'title'     => get_the_title(),
        'eyebrow'   => 'Solutions',
        'hero_desc' => get_the_excerpt(),
        'products'  => [],
        'features'  => [],
        'image'     => '',
    ];
}
?>

<style>
/* ============================================
   SOLUTIONS PAGE — Template-Integrated Design
   ============================================ */

/* --- HERO --- */
.sol-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h, 36px) + var(--header-h, 72px) + 4rem) 0 6rem;
    overflow: hidden;
    min-height: 480px;
    display: flex;
    align-items: flex-end;
}
.sol-hero-bg {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0.18;
    mix-blend-mode: luminosity;
}
.sol-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, var(--navy), rgba(11,31,58,0.85), var(--navy));
}
.sol-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.12) 0%, transparent 50%);
    pointer-events: none;
}
.sol-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
    width: 100%;
}
.sol-breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: rgba(255,255,255,0.5);
    margin-bottom: 2rem;
}
.sol-breadcrumb a {
    color: rgba(255,255,255,0.5);
    text-decoration: none;
    transition: color 0.3s;
}
.sol-breadcrumb a:hover { color: var(--gold); }
.sol-breadcrumb .sep { opacity: 0.3; }
.sol-breadcrumb .current { color: var(--gold); }

.sol-eyebrow {
    display: inline-flex;
    align-items: center;
    padding: 0.4rem 1rem;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.15);
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
    color: var(--gold);
}
.sol-hero-title {
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: clamp(2.2rem, 5vw, 4rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 1.5rem;
    max-width: 800px;
}
.sol-hero-desc {
    font-size: clamp(1rem, 1.8vw, 1.25rem);
    color: rgba(255,255,255,0.7);
    max-width: 620px;
    line-height: 1.7;
    font-weight: 300;
    margin-bottom: 2.5rem;
}
.sol-hero-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}
.sol-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.85rem 2rem;
    font-size: 0.85rem;
    font-weight: 600;
    text-decoration: none;
    border-radius: 0;
    transition: all 0.35s var(--ease-out-expo, cubic-bezier(0.16, 1, 0.3, 1));
    letter-spacing: 0.02em;
}
.sol-btn-gold {
    background: var(--gold);
    color: #1A1D24;
}
.sol-btn-gold:hover {
    background: #c49b38;
    transform: translateY(-2px);
}
.sol-btn-outline {
    background: transparent;
    color: #fff;
    border: 1px solid rgba(255,255,255,0.3);
}
.sol-btn-outline:hover {
    border-color: #fff;
    background: rgba(255,255,255,0.06);
    transform: translateY(-2px);
}
.sol-btn svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
}

/* --- FEATURES --- */
.sol-features {
    padding: 5rem 0;
    background: var(--bg-secondary, #F5F5F7);
}
.sol-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.sol-section-label {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 0.75rem;
}
.sol-section-title {
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: clamp(1.6rem, 3vw, 2.4rem);
    font-weight: 700;
    color: var(--text-primary, #1A1D24);
    letter-spacing: -0.02em;
    margin-bottom: 3rem;
}
.sol-features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
}
.sol-feature-card {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1.75rem;
    background: #fff;
    border: 1px solid rgba(0,0,0,0.06);
    transition: all 0.4s var(--ease-out-expo, cubic-bezier(0.16, 1, 0.3, 1));
}
.sol-feature-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.08);
}
.sol-feature-icon {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    background: var(--navy);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}
.sol-feature-icon svg {
    width: 18px;
    height: 18px;
    color: var(--gold);
}
.sol-feature-text {
    font-size: 0.95rem;
    font-weight: 500;
    color: var(--text-primary, #1A1D24);
    line-height: 1.5;
}

/* --- PRODUCTS --- */
.sol-products {
    padding: 5rem 0;
    background: var(--bg-primary, #fff);
}
.sol-products-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 1rem;
}
.sol-product-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.25rem 1.5rem;
    background: var(--bg-secondary, #F5F5F7);
    text-decoration: none;
    color: var(--text-primary, #1A1D24);
    transition: all 0.35s var(--ease-out-expo, cubic-bezier(0.16, 1, 0.3, 1));
    border: 1px solid transparent;
}
.sol-product-item:hover {
    border-color: var(--navy);
    background: #fff;
    transform: translateX(4px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
}
.sol-product-item:hover .sol-product-arrow { opacity: 1; transform: translateX(0); }
.sol-product-name {
    flex: 1;
    font-size: 0.92rem;
    font-weight: 600;
}
.sol-product-arrow {
    opacity: 0;
    transform: translateX(-8px);
    transition: all 0.35s var(--ease-out-expo, cubic-bezier(0.16, 1, 0.3, 1));
    color: var(--navy);
}
.sol-product-arrow svg { width: 18px; height: 18px; }

/* --- CTA --- */
.sol-cta {
    padding: 5rem 0;
    background: var(--navy);
    color: #fff;
    text-align: center;
}
.sol-cta-title {
    font-family: var(--font-body, 'Poppins', sans-serif);
    font-size: clamp(1.6rem, 3vw, 2.4rem);
    font-weight: 700;
    letter-spacing: -0.02em;
    margin-bottom: 1rem;
}
.sol-cta-desc {
    font-size: 1.05rem;
    color: rgba(255,255,255,0.65);
    max-width: 540px;
    margin: 0 auto 2.5rem;
    line-height: 1.7;
    font-weight: 300;
}
.sol-cta-actions {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

/* --- RESPONSIVE --- */
@media (max-width: 768px) {
    .sol-hero { padding-top: calc(var(--utility-h, 36px) + var(--header-h, 72px) + 2.5rem); padding-bottom: 4rem; min-height: auto; }
    .sol-features-grid { grid-template-columns: 1fr; }
    .sol-products-list { grid-template-columns: 1fr; }
    .sol-hero-actions { flex-direction: column; }
    .sol-btn { width: 100%; justify-content: center; }
    .sol-cta-actions { flex-direction: column; align-items: center; }
}
</style>

<main class="page-solution">

    <!-- ══════════════════════════════════════════
         HERO
         ══════════════════════════════════════════ -->
    <section class="sol-hero">
        <?php if ( $solution['image'] ) : ?>
            <div class="sol-hero-bg" style="background-image:url('<?php echo esc_url( $uri . '/assets/images/' . $solution['image'] ); ?>');"></div>
        <?php endif; ?>
        <div class="sol-hero-gradient"></div>
        <div class="sol-hero-glow"></div>

        <div class="sol-hero-inner">
            <nav class="sol-breadcrumb" data-sol-anim>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <span class="sep">/</span>
                <a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>">Solutions</a>
                <span class="sep">/</span>
                <span class="current"><?php echo esc_html( $solution['title'] ); ?></span>
            </nav>

            <div class="sol-eyebrow" data-sol-anim><?php echo esc_html( strtoupper( $solution['eyebrow'] ) ); ?></div>
            <h1 class="sol-hero-title" data-sol-anim><?php echo esc_html( $solution['title'] ); ?></h1>
            <p class="sol-hero-desc" data-sol-anim><?php echo esc_html( $solution['hero_desc'] ); ?></p>

            <div class="sol-hero-actions" data-sol-anim>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="sol-btn sol-btn-gold">
                    Request a Quote
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="sol-btn sol-btn-outline">
                    Browse All Products
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>


    <!-- ══════════════════════════════════════════
         KEY FEATURES
         ══════════════════════════════════════════ -->
    <?php if ( ! empty( $solution['features'] ) ) : ?>
    <section class="sol-features">
        <div class="sol-container">
            <div class="sol-section-label" data-sol-anim>Why Choose Us</div>
            <h2 class="sol-section-title" data-sol-anim>Key Advantages</h2>

            <div class="sol-features-grid">
                <?php foreach ( $solution['features'] as $i => $feat ) : ?>
                    <div class="sol-feature-card" data-sol-anim>
                        <div class="sol-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div class="sol-feature-text"><?php echo esc_html( $feat ); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>


    <!-- ══════════════════════════════════════════
         RECOMMENDED PRODUCTS
         ══════════════════════════════════════════ -->
    <?php if ( ! empty( $solution['products'] ) ) : ?>
    <section class="sol-products">
        <div class="sol-container">
            <div class="sol-section-label" data-sol-anim>Our Products</div>
            <h2 class="sol-section-title" data-sol-anim>Recommended Products</h2>

            <div class="sol-products-list">
                <?php foreach ( $solution['products'] as $prod ) : ?>
                    <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="sol-product-item" data-sol-anim>
                        <span class="sol-product-name"><?php echo esc_html( $prod ); ?></span>
                        <span class="sol-product-arrow">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>


    <!-- ══════════════════════════════════════════
         CTA
         ══════════════════════════════════════════ -->
    <section class="sol-cta">
        <div class="sol-container">
            <h2 class="sol-cta-title" data-sol-anim>Need a Custom Solution?</h2>
            <p class="sol-cta-desc" data-sol-anim>Our engineering team can develop tailored insulation solutions for your specific <?php echo esc_html( strtolower( $solution['title'] ) ); ?> requirements.</p>
            <div class="sol-cta-actions" data-sol-anim>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="sol-btn sol-btn-gold">
                    Contact Engineering
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="tel:+911412395845" class="sol-btn sol-btn-outline">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    Call Sales
                </a>
            </div>
        </div>
    </section>

</main>

<script>
/* GSAP ScrollTrigger animations for Solutions page */
(function() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    /* Staggered entrance for all [data-sol-anim] elements */
    const items = document.querySelectorAll('[data-sol-anim]');
    items.forEach(function(el, i) {
        gsap.from(el, {
            y: 30,
            opacity: 0,
            duration: 0.8,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 88%',
                once: true
            }
        });
    });
})();
</script>

<?php get_footer(); ?>
