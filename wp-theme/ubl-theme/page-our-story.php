<?php
/**
 * Template Name: Our Story - About Us
 * Description: About Us page for Umang Boards Limited
 */
get_header();
?>

<style>
/* ── Page About Scoped Styles ── */
.page-about {
  --card-radius: 16px;
  --section-pad: 100px 0;
}

/* Hero */
.about-hero {
  position: relative;
  height: 50vh;
  min-height: 380px;
  display: flex;
  align-items: flex-end;
  padding: 0 0 56px;
  overflow: hidden;
  background: var(--navy);
}
.about-hero__bg {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  z-index: 0;
}
.about-hero__bg::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(10,25,47,0.45) 0%, rgba(10,25,47,0.82) 100%);
}
.about-hero__inner {
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 40px;
}
.about-hero .breadcrumb {
  display: flex;
  gap: 8px;
  align-items: center;
  font-family: var(--font-mono, 'Inter', sans-serif);
  font-size: 13px;
  letter-spacing: 0.04em;
  color: rgba(255,255,255,0.55);
  margin-bottom: 20px;
}
.about-hero .breadcrumb a {
  color: rgba(255,255,255,0.55);
  text-decoration: none;
  transition: color 0.25s;
}
.about-hero .breadcrumb a:hover { color: var(--gold); }
.about-hero .breadcrumb span.sep { opacity: 0.4; }
.about-hero .breadcrumb span.current { color: rgba(255,255,255,0.85); }
.about-hero__eyebrow {
  font-family: var(--font-mono, 'Inter', sans-serif);
  font-size: 12px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--gold);
  margin-bottom: 14px;
}
.about-hero__title {
  font-family: var(--font-body, 'Poppins', sans-serif);
  font-size: clamp(30px, 4.2vw, 52px);
  font-weight: 700;
  line-height: 1.15;
  color: #fff;
  margin: 0 0 16px;
  max-width: 720px;
}
.about-hero__sub {
  font-size: clamp(15px, 1.4vw, 18px);
  color: rgba(255,255,255,0.72);
  line-height: 1.65;
  max-width: 600px;
  margin: 0;
}

/* Container util */
.about-container {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 40px;
}

/* ── Section 2: Company Overview ── */
.about-overview {
  padding: var(--section-pad);
  background: var(--bg-primary, #fff);
}
.about-overview__grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 64px;
  align-items: center;
}
.about-overview__img-wrap {
  position: relative;
  border-radius: var(--card-radius);
  overflow: hidden;
  aspect-ratio: 4/3;
}
.about-overview__img-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.about-overview__img-wrap.clip-reveal {
  clip-path: inset(0 100% 0 0);
  transition: clip-path 0s;
}
.about-overview__img-wrap.clip-reveal.revealed {
  clip-path: inset(0 0% 0 0);
}
.about-overview__text .section-eyebrow { margin-bottom: 12px; }
.about-overview__text .section-title { margin-bottom: 28px; }
.about-overview__text p {
  font-size: 16px;
  line-height: 1.75;
  color: var(--text-secondary, #555);
  margin: 0 0 18px;
}

/* ── Section 3: Vision & Mission ── */
.about-vm {
  padding: var(--section-pad);
  background: var(--bg-warm, #faf8f5);
}
.about-vm__grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
}
.about-vm__card {
  background: #fff;
  border-radius: var(--card-radius);
  padding: 48px 40px;
  box-shadow: 0 2px 24px rgba(0,0,0,0.05);
  opacity: 0;
  transform: translateY(30px);
}
.about-vm__icon {
  width: 56px;
  height: 56px;
  border-radius: 14px;
  background: rgba(10,25,47,0.06);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 24px;
  color: var(--navy, #0a192f);
}
.about-vm__icon svg { width: 28px; height: 28px; }
.about-vm__card h3 {
  font-family: var(--font-body, 'Poppins', sans-serif);
  font-size: 22px;
  font-weight: 700;
  color: var(--text-primary, #1a1a1a);
  margin: 0 0 16px;
}
.about-vm__card p {
  font-size: 15px;
  line-height: 1.75;
  color: var(--text-secondary, #555);
  margin: 0;
}

/* ── Section 4: Stats Band ── */
.about-stats {
  background: var(--navy, #0a192f);
  padding: 72px 0;
}
.about-stats__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 32px;
  text-align: center;
}
.about-stats__item { opacity: 0; transform: translateY(20px); }
.about-stats__num {
  font-family: var(--font-body, 'Poppins', sans-serif);
  font-size: clamp(32px, 3.6vw, 48px);
  font-weight: 700;
  color: var(--gold, #c9a84c);
  line-height: 1.1;
  margin-bottom: 8px;
}
.about-stats__label {
  font-size: 14px;
  color: rgba(255,255,255,0.6);
  letter-spacing: 0.02em;
}

/* ── Section 5: What We Do ── */
.about-pillars {
  padding: var(--section-pad);
  background: var(--bg-primary, #fff);
}
.about-pillars__header {
  text-align: center;
  max-width: 640px;
  margin: 0 auto 56px;
}
.about-pillars__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 32px;
}
.about-pillars__card {
  background: var(--bg-warm, #faf8f5);
  border-radius: var(--card-radius);
  padding: 40px 32px;
  text-align: center;
  opacity: 0;
  transform: translateY(30px);
  transition: box-shadow 0.3s;
}
.about-pillars__card:hover {
  box-shadow: 0 8px 32px rgba(0,0,0,0.08);
}
.about-pillars__card-icon {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: var(--navy, #0a192f);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 24px;
  color: var(--gold, #c9a84c);
}
.about-pillars__card-icon svg { width: 28px; height: 28px; }
.about-pillars__card h3 {
  font-family: var(--font-body, 'Poppins', sans-serif);
  font-size: 20px;
  font-weight: 700;
  color: var(--text-primary, #1a1a1a);
  margin: 0 0 14px;
}
.about-pillars__card p {
  font-size: 15px;
  line-height: 1.7;
  color: var(--text-secondary, #555);
  margin: 0 0 24px;
}

/* ── Section 6: Board of Directors ── */
.about-board {
  padding: var(--section-pad);
  background: var(--navy, #0a192f);
}
.about-board .section-eyebrow { color: var(--gold); }
.about-board .section-title { color: #fff; }
.about-board__header {
  text-align: center;
  margin-bottom: 56px;
}
.about-board__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 28px;
}
.about-board__card {
  text-align: center;
  opacity: 0;
  transform: translateY(24px);
}
.about-board__avatar {
  width: 110px;
  height: 110px;
  border-radius: 50%;
  background: rgba(255,255,255,0.07);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
  font-family: var(--font-body, 'Poppins', sans-serif);
  font-size: 26px;
  font-weight: 700;
  color: var(--gold, #c9a84c);
  letter-spacing: 0.04em;
  border: 2px solid rgba(201,168,76,0.2);
}
.about-board__card h4 {
  font-family: var(--font-body, 'Poppins', sans-serif);
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  margin: 0 0 6px;
}
.about-board__card span {
  font-size: 13px;
  color: rgba(255,255,255,0.5);
  line-height: 1.45;
  display: block;
}

/* ── Section 7: Extended Description ── */
.about-extended {
  padding: var(--section-pad);
  background: var(--bg-primary, #fff);
}
.about-extended__inner {
  max-width: 820px;
  margin: 0 auto;
  text-align: center;
}
.about-extended__inner p {
  font-size: 16px;
  line-height: 1.8;
  color: var(--text-secondary, #555);
  margin: 0 0 24px;
}
.about-extended__inner p:last-child { margin-bottom: 0; }

/* ── Section 8: CTA Band ── */
.about-cta {
  background: var(--gold, #c9a84c);
  padding: 64px 0;
}
.about-cta__inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 32px;
  flex-wrap: wrap;
}
.about-cta__inner h3 {
  font-family: var(--font-body, 'Poppins', sans-serif);
  font-size: clamp(20px, 2.2vw, 28px);
  font-weight: 700;
  color: var(--navy, #0a192f);
  margin: 0;
}
.about-cta__buttons {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}
.about-cta .btn-primary {
  background: var(--navy, #0a192f);
  color: #fff;
  border-color: var(--navy, #0a192f);
}
.about-cta .btn-primary:hover {
  background: transparent;
  color: var(--navy, #0a192f);
}
.about-cta .btn-text { color: var(--navy, #0a192f); }

/* ── Responsive ── */
@media (max-width: 900px) {
  .about-container { padding: 0 28px; }
  .about-hero__inner { padding: 0 28px; }
  .page-about { --section-pad: 72px 0; }
  .about-overview__grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  .about-vm__grid { grid-template-columns: 1fr; }
  .about-stats__grid { grid-template-columns: repeat(2, 1fr); gap: 40px 24px; }
  .about-pillars__grid { grid-template-columns: 1fr; max-width: 480px; margin: 0 auto; }
  .about-board__grid { grid-template-columns: repeat(2, 1fr); }
  .about-cta__inner { justify-content: center; text-align: center; }
}
@media (max-width: 600px) {
  .about-container { padding: 0 20px; }
  .about-hero__inner { padding: 0 20px; }
  .about-hero { min-height: 320px; padding-bottom: 40px; }
  .page-about { --section-pad: 56px 0; }
  .about-stats__grid { grid-template-columns: repeat(2, 1fr); gap: 32px 16px; }
  .about-board__grid { grid-template-columns: 1fr; max-width: 280px; margin: 0 auto; }
  .about-vm__card { padding: 32px 24px; }
  .about-pillars__card { padding: 32px 24px; }
  .about-cta__buttons { width: 100%; justify-content: center; }
}
</style>

<main class="page-about">

  <!-- ════ Section 1: Hero ════ -->
  <section class="about-hero">
    <div class="about-hero__bg" style="background-image:url('<?php echo UBL_URI; ?>/assets/images/Mfg Hero Background.jpg')"></div>
    <div class="about-hero__inner">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo home_url(); ?>">Home</a>
        <span class="sep">/</span>
        <span>Company</span>
        <span class="sep">/</span>
        <span class="current">About Us</span>
      </nav>
      <div class="about-hero__eyebrow">ABOUT US</div>
      <h1 class="about-hero__title">Building the Backbone of Electrical Infrastructure</h1>
      <p class="about-hero__sub">What began in 1999 as a focused manufacturing venture has grown into a trusted name in the power sector.</p>
    </div>
  </section>

  <!-- ════ Section 2: Company Overview ════ -->
  <section class="about-overview">
    <div class="about-container">
      <div class="about-overview__grid">
        <div class="about-overview__img-wrap clip-reveal" data-animate="clip-reveal">
          <img src="<?php echo UBL_URI; ?>/assets/images/factory-aerial-drone.jpg" alt="Umang Boards manufacturing facility aerial view" loading="lazy" />
        </div>
        <div class="about-overview__text" data-animate="fade-up">
          <div class="section-eyebrow">OUR STORY</div>
          <h2 class="section-title">From Jaipur to the World</h2>
          <p>At Umang Boards Limited, we build the components that quietly keep electrical systems running — from high-performance cellulose insulation materials to precision super enameled and paper-coated winding wires in copper and aluminium, along with specialized insulating chemicals.</p>
          <p>Headquartered in Jaipur, India, our journey has been shaped by continuous investment in advanced manufacturing, skilled people, and rigorous in-house testing. With two modern production facilities and globally recognized ISO certifications, we combine technical depth with disciplined quality systems.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ════ Section 3: Vision & Mission ════ -->
  <section class="about-vm">
    <div class="about-container">
      <div class="about-vm__grid">
        <div class="about-vm__card" data-animate="fade-up">
          <div class="about-vm__icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/>
            </svg>
          </div>
          <h3>Our Vision</h3>
          <p>To be a global leader in electrical power and distribution transformer sector through the use of cutting edge technology and developing high quality products and services.</p>
        </div>
        <div class="about-vm__card" data-animate="fade-up">
          <div class="about-vm__icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <polygon points="12 2 19 21 12 17 5 21 12 2"/>
            </svg>
          </div>
          <h3>Our Mission</h3>
          <p>We aim to achieve growth by providing economical and quality products to our customers. We leverage our relationships, distribution, cost leadership and can-do attitude to become a market leader in every business we do.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ════ Section 4: Stats Band ════ -->
  <section class="about-stats">
    <div class="about-container">
      <div class="about-stats__grid">
        <div class="about-stats__item" data-animate="fade-up">
          <div class="about-stats__num">25+</div>
          <div class="about-stats__label">Years of Excellence</div>
        </div>
        <div class="about-stats__item" data-animate="fade-up">
          <div class="about-stats__num">15+</div>
          <div class="about-stats__label">Export Countries</div>
        </div>
        <div class="about-stats__item" data-animate="fade-up">
          <div class="about-stats__num">400 kV</div>
          <div class="about-stats__label">PGCIL Approved Class</div>
        </div>
        <div class="about-stats__item" data-animate="fade-up">
          <div class="about-stats__num">2</div>
          <div class="about-stats__label">Manufacturing Facilities</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ════ Section 5: What We Do ════ -->
  <section class="about-pillars">
    <div class="about-container">
      <div class="about-pillars__header">
        <div class="section-eyebrow">INTEGRATED CAPABILITIES</div>
        <h2 class="section-title">Three Pillars of Excellence</h2>
      </div>
      <div class="about-pillars__grid">
        <div class="about-pillars__card" data-animate="fade-up">
          <div class="about-pillars__card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v3"/><line x1="12" y1="12" x2="12" y2="16"/>
            </svg>
          </div>
          <h3>Transformer Insulation</h3>
          <p>India's only manufacturer of non-metallic particle pressboards. Cellulose-based insulation range approved for transformers up to 400 kV class.</p>
          <a href="<?php echo home_url('/products/transformer-insulation/'); ?>" class="btn-text">Explore Products &rarr;</a>
        </div>
        <div class="about-pillars__card" data-animate="fade-up">
          <div class="about-pillars__card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 2v6l3-3"/><path d="M12 8l-3-3"/><circle cx="12" cy="16" r="6"/><path d="M8.5 13.5l3.5 2.5 3.5-2.5"/>
            </svg>
          </div>
          <h3>Winding Wires</h3>
          <p>Paper and film insulated copper and aluminium wires engineered for power and distribution transformers, motors, and electrical equipment.</p>
          <a href="<?php echo home_url('/products/winding-wires/'); ?>" class="btn-text">Explore Products &rarr;</a>
        </div>
        <div class="about-pillars__card" data-animate="fade-up">
          <div class="about-pillars__card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M10 2v8l-4-2"/><path d="M14 2v8l4-2"/><path d="M6 18h12"/><path d="M8 22h8"/><path d="M12 10v8"/>
            </svg>
          </div>
          <h3>Insulating Chemicals</h3>
          <p>Wire enamels, impregnating resins, and insulating varnishes formulated for superior dielectric performance.</p>
          <a href="<?php echo home_url('/products/insulating-chemicals/'); ?>" class="btn-text">Explore Products &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ════ Section 6: Board of Directors ════ -->
  <section class="about-board">
    <div class="about-container">
      <div class="about-board__header">
        <div class="section-eyebrow">LEADERSHIP</div>
        <h2 class="section-title">Board of Directors</h2>
      </div>
      <div class="about-board__grid">
        <div class="about-board__card" data-animate="fade-up">
          <div class="about-board__avatar">AKD</div>
          <h4>Anoop Kumar Dhanuka</h4>
          <span>Chairman &amp; Managing Director</span>
        </div>
        <div class="about-board__card" data-animate="fade-up">
          <div class="about-board__avatar">UD</div>
          <h4>Umang Dhanuka</h4>
          <span>Whole Time Director</span>
        </div>
        <div class="about-board__card" data-animate="fade-up">
          <div class="about-board__avatar">DD</div>
          <h4>Dhruv Dhanuka</h4>
          <span>Whole Time Director</span>
        </div>
        <div class="about-board__card" data-animate="fade-up">
          <div class="about-board__avatar">AKD</div>
          <h4>Alok Kumar Dhanuka</h4>
          <span>Whole Time Director &amp; CFO</span>
        </div>
        <div class="about-board__card" data-animate="fade-up">
          <div class="about-board__avatar">DK</div>
          <h4>Devendra Kumar</h4>
          <span>Independent Director</span>
        </div>
        <div class="about-board__card" data-animate="fade-up">
          <div class="about-board__avatar">AL</div>
          <h4>Avindar Laddha</h4>
          <span>Independent Director</span>
        </div>
        <div class="about-board__card" data-animate="fade-up">
          <div class="about-board__avatar">SG</div>
          <h4>Shruti Gupta</h4>
          <span>Independent Director</span>
        </div>
        <div class="about-board__card" data-animate="fade-up">
          <div class="about-board__avatar">NH</div>
          <h4>Nitin Ghanshyam Hotchandani</h4>
          <span>Independent Director</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ════ Section 7: Extended Description ════ -->
  <section class="about-extended">
    <div class="about-container">
      <div class="about-extended__inner" data-animate="fade-up">
        <p>Built on a technology-driven foundation, we continuously invest in innovation, advanced processes and product development to stay ahead of evolving electrical demands. Our insulation materials support critical transformer applications, while our winding wire division powers a wide spectrum of industries — from industrial motors to consumer and heavy electrical systems.</p>
        <p>Complemented by specialized insulating chemicals, our integrated capabilities allow us to deliver complete, high-performance electrical component solutions.</p>
        <p>Guided by committed leadership and a clear growth vision, Umang Boards has expanded steadily, strengthening its presence while maintaining operational rigor and financial discipline.</p>
      </div>
    </div>
  </section>

  <!-- ════ Section 8: CTA Band ════ -->
  <section class="about-cta">
    <div class="about-container">
      <div class="about-cta__inner">
        <h3>Want to learn more about our journey?</h3>
        <div class="about-cta__buttons">
          <a href="<?php echo home_url('/our-history/'); ?>" class="btn-primary">View Our History &rarr;</a>
          <a href="<?php echo home_url('/contact/'); ?>" class="btn-text">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- ── Page-level GSAP animations ── -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
  gsap.registerPlugin(ScrollTrigger);

  /* Fade-up elements */
  gsap.utils.toArray('[data-animate="fade-up"]').forEach(function (el) {
    gsap.fromTo(el,
      { opacity: 0, y: 30 },
      {
        opacity: 1, y: 0, duration: 0.8, ease: 'power2.out',
        scrollTrigger: { trigger: el, start: 'top 88%', once: true }
      }
    );
  });

  /* Stagger cards inside grids */
  ['.about-vm__grid', '.about-pillars__grid', '.about-board__grid', '.about-stats__grid'].forEach(function (sel) {
    var wrapper = document.querySelector(sel);
    if (!wrapper) return;
    var cards = wrapper.children;
    gsap.fromTo(cards,
      { opacity: 0, y: 30 },
      {
        opacity: 1, y: 0, duration: 0.7, ease: 'power2.out', stagger: 0.12,
        scrollTrigger: { trigger: wrapper, start: 'top 85%', once: true }
      }
    );
  });

  /* Clip-path image reveals */
  gsap.utils.toArray('[data-animate="clip-reveal"]').forEach(function (el) {
    gsap.fromTo(el,
      { clipPath: 'inset(0 100% 0 0)' },
      {
        clipPath: 'inset(0 0% 0 0)', duration: 1.1, ease: 'power3.inOut',
        scrollTrigger: { trigger: el, start: 'top 80%', once: true },
        onComplete: function () { el.classList.add('revealed'); }
      }
    );
  });
});
</script>

<?php get_footer(); ?>
