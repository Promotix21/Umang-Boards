<?php
/**
 * Template Name: Leadership
 * Description: Leadership team page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ─── Leadership Split Layout ─── */
.ld-page {
  display: flex;
  min-height: 100vh;
  font-family: var(--font-body, 'Poppins', -apple-system, sans-serif);
}

/* ─── Left Fixed Pane ─── */
.ld-left {
  width: 45%;
  position: fixed;
  top: 0;
  left: 0;
  height: 100vh;
  background: var(--navy, #376eb4);
  color: #fff;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  z-index: 10;
}
.ld-left-bg {
  position: absolute;
  inset: 0;
}
.ld-left-bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.3;
  mix-blend-mode: luminosity;
}
.ld-left-gradient {
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom,
    rgba(55,110,180,0.5),
    rgba(55,110,180,0.8),
    var(--navy, #376eb4));
}
.ld-left-content {
  position: relative;
  z-index: 2;
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
  padding: 2rem 4rem;
  padding-top: calc(var(--header-h, 80px) + var(--utility-h, 36px) + 2rem);
  overflow-y: auto;
}

/* Breadcrumb */
.ld-breadcrumb {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.8rem;
  color: rgba(255,255,255,0.5);
  margin-bottom: 2rem;
  letter-spacing: 0.5px;
}
.ld-breadcrumb a {
  color: rgba(255,255,255,0.5);
  text-decoration: none;
  transition: color 0.3s;
}
.ld-breadcrumb a:hover {
  color: var(--gold, #D4A843);
}
.ld-breadcrumb .sep {
  font-size: 0.65rem;
}

/* Badge */
.ld-badge {
  display: inline-block;
  font-size: 0.65rem;
  font-weight: 700;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--gold, #D4A843);
  border: 1px solid rgba(212,168,67,0.3);
  padding: 0.4rem 1.2rem;
  margin-bottom: 2rem;
  width: fit-content;
}

/* Title */
.ld-title {
  font-size: clamp(2rem, 3.5vw, 3.2rem);
  font-weight: 700;
  line-height: 1.15;
  color: #fff;
  margin: 0 0 1.5rem;
  letter-spacing: -0.02em;
}
.ld-title .gold {
  color: var(--gold, #D4A843);
}

/* Subtitle */
.ld-subtitle {
  font-size: 1.05rem;
  color: rgba(255,255,255,0.6);
  line-height: 1.7;
  margin: 0 0 3rem;
  max-width: 420px;
  font-weight: 300;
}

/* CTA Button */
.ld-cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 14px 32px;
  background: var(--gold, #D4A843);
  color: var(--navy, #376eb4);
  font-size: 0.85rem;
  font-weight: 600;
  text-decoration: none;
  letter-spacing: 0.03em;
  transition: all 0.4s var(--ease-out-expo, cubic-bezier(0.16, 1, 0.3, 1));
  width: fit-content;
}
.ld-cta-btn:hover {
  background: #fff;
  color: var(--navy, #376eb4);
  transform: translateY(-2px);
}
.ld-cta-btn svg {
  width: 16px;
  height: 16px;
  stroke: currentColor;
  fill: none;
  stroke-width: 2;
  transition: transform 0.3s ease;
}
.ld-cta-btn:hover svg {
  transform: translateX(4px);
}

/* ─── Right Scrollable Pane ─── */
.ld-right {
  width: 55%;
  margin-left: 45%;
  padding: clamp(2rem, 4vw, 6rem);
  padding-top: calc(var(--header-h, 80px) + var(--utility-h, 36px) + clamp(2rem, 4vw, 6rem));
  background: var(--bg-primary, #FFFFFF);
  min-height: 100vh;
}

/* Section headers */
.ld-section {
  margin-bottom: 5rem;
}
.ld-section-num {
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.2em;
  color: var(--gold, #D4A843);
  text-transform: uppercase;
  margin-bottom: 0.5rem;
  display: block;
}
.ld-section-label {
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.2em;
  color: var(--text-muted, #6B6F7A);
  text-transform: uppercase;
  margin-bottom: 2rem;
  display: block;
}
.ld-section-title {
  font-size: clamp(1.6rem, 2.5vw, 2rem);
  font-weight: 700;
  color: var(--text-primary, #1A1D24);
  margin: 0 0 3rem;
  line-height: 1.3;
  letter-spacing: -0.01em;
}
.ld-divider {
  width: 40px;
  height: 2px;
  background: var(--gold, #D4A843);
  margin-bottom: 3rem;
}

/* ─── Executive Portraits ─── */
.ld-exec {
  margin-bottom: 6rem;
  cursor: default;
}
.ld-exec-img {
  position: relative;
  width: 100%;
  height: clamp(350px, 40vw, 600px);
  overflow: hidden;
  border: 1px solid rgba(11,31,58,0.06);
  margin-bottom: 2rem;
}
.ld-exec-img img,
.ld-exec-img .ld-exec-placeholder {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: grayscale(100%);
  transition: all 1s ease;
}
.ld-exec:hover .ld-exec-img img,
.ld-exec:hover .ld-exec-img .ld-exec-placeholder {
  filter: grayscale(0%);
  transform: scale(1.05);
}
.ld-exec-img::after {
  content: '';
  position: absolute;
  inset: 0;
  background: rgba(55,110,180,0.1);
  mix-blend-mode: multiply;
  transition: opacity 0.5s;
}
.ld-exec:hover .ld-exec-img::after {
  opacity: 0;
}
.ld-exec-placeholder {
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--navy, #376eb4);
  transition: all 1s ease;
}
.ld-exec-placeholder span {
  font-size: 6rem;
  font-weight: 800;
  color: var(--gold, #D4A843);
  opacity: 0.15;
}
.ld-exec-name {
  font-size: 2.2rem;
  font-weight: 700;
  color: var(--navy, #376eb4);
  margin: 0 0 0.5rem;
  letter-spacing: -0.01em;
}
.ld-exec-title {
  font-size: 0.8rem;
  font-weight: 700;
  color: var(--gold, #D4A843);
  text-transform: uppercase;
  letter-spacing: 0.15em;
  margin: 0 0 1.5rem;
}
.ld-exec-bio {
  font-size: 1.05rem;
  color: var(--text-secondary, #3A3D48);
  line-height: 1.7;
  font-weight: 300;
  max-width: 600px;
  margin: 0;
}

/* ─── Independent Directors Grid ─── */
.ld-ind-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2rem;
  margin-top: 3rem;
}
.ld-ind-card {
  display: flex;
  align-items: center;
  gap: 1.5rem;
  padding: 1.5rem;
  border: 1px solid rgba(11,31,58,0.06);
  transition: border-color 0.3s;
}
.ld-ind-card:hover {
  border-color: rgba(212,168,67,0.5);
}
.ld-ind-avatar {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  flex-shrink: 0;
  background: var(--navy, #376eb4);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
  font-weight: 700;
  color: var(--gold, #D4A843);
  border: 1px solid rgba(212,168,67,0.2);
}
.ld-ind-name {
  font-size: 1.05rem;
  font-weight: 700;
  color: var(--text-primary, #1A1D24);
  margin: 0 0 0.25rem;
}
.ld-ind-title {
  font-size: 0.8rem;
  color: var(--text-muted, #6B6F7A);
  margin: 0;
  letter-spacing: 0.03em;
}

/* ─── Values Grid ─── */
.ld-val-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2rem;
  margin-top: 3rem;
}
.ld-val-card {
  padding: 2rem;
  background: var(--bg-secondary, #F5F5F7);
  border: 1px solid rgba(11,31,58,0.06);
  transition: border-color 0.3s;
}
.ld-val-card:hover {
  border-color: rgba(212,168,67,0.3);
}
.ld-val-icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: #fff;
  border: 1px solid rgba(11,31,58,0.06);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.5rem;
  transition: border-color 0.3s;
}
.ld-val-card:hover .ld-val-icon {
  border-color: rgba(212,168,67,0.3);
}
.ld-val-icon svg {
  width: 20px;
  height: 20px;
  color: var(--navy, #376eb4);
  stroke: currentColor;
  fill: none;
  stroke-width: 1.5;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition: color 0.3s;
}
.ld-val-card:hover .ld-val-icon svg {
  color: var(--gold, #D4A843);
}
.ld-val-title {
  font-size: 1.05rem;
  font-weight: 700;
  color: var(--text-primary, #1A1D24);
  margin: 0 0 0.5rem;
}
.ld-val-desc {
  font-size: 0.9rem;
  color: var(--text-secondary, #3A3D48);
  line-height: 1.6;
  margin: 0;
  font-weight: 300;
}

/* ─── Responsive ─── */
@media (max-width: 1024px) {
  .ld-page {
    flex-direction: column;
  }
  .ld-left {
    position: relative;
    width: 100%;
    height: auto;
    min-height: 70vh;
  }
  .ld-left-content {
    padding-top: calc(var(--header-h, 80px) + var(--utility-h, 36px) + 1.5rem);
  }
  .ld-right {
    width: 100%;
    margin-left: 0;
    padding-top: clamp(2rem, 4vw, 6rem);
  }
}
@media (max-width: 768px) {
  .ld-left-content {
    padding: 1.5rem;
    padding-top: calc(var(--header-h, 80px) + var(--utility-h, 36px) + 1.5rem);
  }
  .ld-right {
    padding: 1.5rem;
    padding-top: 1.5rem;
  }
  .ld-ind-grid {
    grid-template-columns: 1fr;
  }
  .ld-val-grid {
    grid-template-columns: 1fr;
  }
  .ld-exec-name {
    font-size: 1.6rem;
  }
  .ld-exec-img {
    height: clamp(250px, 60vw, 400px);
  }
  .ld-exec {
    margin-bottom: 4rem;
  }
  .ld-title {
    font-size: clamp(1.6rem, 6vw, 2.4rem);
  }
}
</style>

<main class="ld-page">

  <!-- ━━━ Left Fixed Pane ━━━ -->
  <div class="ld-left">
    <div class="ld-left-bg">
      <img src="<?php echo $uri; ?>/assets/images/boardroom.jpg" alt="Boardroom">
    </div>
    <div class="ld-left-gradient"></div>
    <div class="ld-left-content">
      <nav class="ld-breadcrumb">
        <a href="<?php echo home_url(); ?>">Home</a>
        <span class="sep">&#9656;</span>
        <a href="#">Company</a>
        <span class="sep">&#9656;</span>
        <span style="color:rgba(255,255,255,0.8)">Leadership</span>
      </nav>

      <div class="ld-badge">LEADERSHIP</div>

      <h1 class="ld-title">Guided by Experience,<br>Driven by <span class="gold">Vision</span></h1>

      <p class="ld-subtitle">Meet the team steering Umang Boards towards global leadership in electrical insulation manufacturing.</p>

      <a href="#" class="ld-cta-btn">
        Dhanuka Foundation
        <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>

  <!-- ━━━ Right Scrollable Pane ━━━ -->
  <div class="ld-right">

    <!-- Section 01: Executive Management -->
    <section class="ld-section" id="executives">
      <span class="ld-section-num">01</span>
      <span class="ld-section-label">Executive Management</span>
      <div class="ld-divider"></div>

      <!-- Anoop Kumar Dhanuka -->
      <div class="ld-exec" data-anim="exec">
        <div class="ld-exec-img">
          <div class="ld-exec-placeholder">
            <span>AKD</span>
          </div>
        </div>
        <h3 class="ld-exec-name">Anoop Kumar Dhanuka</h3>
        <p class="ld-exec-title">Chairman &amp; Managing Director</p>
        <p class="ld-exec-bio">Visionary leader who founded the company and has been instrumental in transforming Umang Boards from a trading venture to a leading insulation manufacturer. Over four decades of experience in the electrical components industry.</p>
      </div>

      <!-- Umang Dhanuka -->
      <div class="ld-exec" data-anim="exec">
        <div class="ld-exec-img">
          <div class="ld-exec-placeholder">
            <span>UD</span>
          </div>
        </div>
        <h3 class="ld-exec-name">Umang Dhanuka</h3>
        <p class="ld-exec-title">Whole Time Director</p>
        <p class="ld-exec-bio">Driving operational excellence and business development across domestic and international markets. Leading the expansion of manufacturing capabilities and new product development.</p>
      </div>

      <!-- Dhruv Dhanuka -->
      <div class="ld-exec" data-anim="exec">
        <div class="ld-exec-img">
          <div class="ld-exec-placeholder">
            <span>DD</span>
          </div>
        </div>
        <h3 class="ld-exec-name">Dhruv Dhanuka</h3>
        <p class="ld-exec-title">Whole Time Director</p>
        <p class="ld-exec-bio">Spearheading strategic growth initiatives and technology adoption. Focused on modernizing manufacturing processes and strengthening the company's global footprint.</p>
      </div>

      <!-- Alok Kumar Dhanuka -->
      <div class="ld-exec" data-anim="exec">
        <div class="ld-exec-img">
          <div class="ld-exec-placeholder">
            <span>AKD</span>
          </div>
        </div>
        <h3 class="ld-exec-name">Alok Kumar Dhanuka</h3>
        <p class="ld-exec-title">Whole Time Director &amp; CFO</p>
        <p class="ld-exec-bio">Overseeing financial strategy, corporate governance, and investor relations. Ensuring fiscal discipline while supporting aggressive growth plans.</p>
      </div>
    </section>

    <!-- Section 02: Independent Directors -->
    <section class="ld-section" id="directors">
      <span class="ld-section-num">02</span>
      <span class="ld-section-label">Independent Directors</span>
      <div class="ld-divider"></div>

      <div class="ld-ind-grid">
        <div class="ld-ind-card" data-anim="ind">
          <div class="ld-ind-avatar">DK</div>
          <div>
            <h4 class="ld-ind-name">Devendra Kumar</h4>
            <p class="ld-ind-title">Independent Director</p>
          </div>
        </div>

        <div class="ld-ind-card" data-anim="ind">
          <div class="ld-ind-avatar">AL</div>
          <div>
            <h4 class="ld-ind-name">Avindar Laddha</h4>
            <p class="ld-ind-title">Independent Director</p>
          </div>
        </div>

        <div class="ld-ind-card" data-anim="ind">
          <div class="ld-ind-avatar">SG</div>
          <div>
            <h4 class="ld-ind-name">Shruti Gupta</h4>
            <p class="ld-ind-title">Independent Director</p>
          </div>
        </div>

        <div class="ld-ind-card" data-anim="ind">
          <div class="ld-ind-avatar">NH</div>
          <div>
            <h4 class="ld-ind-name">Nitin Ghanshyam Hotchandani</h4>
            <p class="ld-ind-title">Independent Director</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 03: Core Values -->
    <section class="ld-section" id="values">
      <span class="ld-section-num">03</span>
      <span class="ld-section-label">Core Values</span>
      <div class="ld-divider"></div>

      <div class="ld-val-grid">
        <div class="ld-val-card" data-anim="val">
          <div class="ld-val-icon">
            <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h4 class="ld-val-title">Integrity</h4>
          <p class="ld-val-desc">Transparent governance and ethical business practices across all levels of the organization.</p>
        </div>

        <div class="ld-val-card" data-anim="val">
          <div class="ld-val-icon">
            <svg viewBox="0 0 24 24"><path d="M9 18h6M10 22h4M12 2v1M4.22 4.22l.71.71M1 12h1M21 12h1M18.36 4.22l-.71.71"/><path d="M18 12a6 6 0 1 0-12 0 6.5 6.5 0 0 0 3 5.5V19a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.5A6.5 6.5 0 0 0 18 12z"/></svg>
          </div>
          <h4 class="ld-val-title">Innovation</h4>
          <p class="ld-val-desc">Continuous investment in R&amp;D and advanced manufacturing technologies.</p>
        </div>

        <div class="ld-val-card" data-anim="val">
          <div class="ld-val-icon">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
          </div>
          <h4 class="ld-val-title">Excellence</h4>
          <p class="ld-val-desc">Uncompromising quality standards across all operations and products.</p>
        </div>

        <div class="ld-val-card" data-anim="val">
          <div class="ld-val-icon">
            <svg viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66.95-2.67c.19-.53.76-.82 1.3-.63A14.4 14.4 0 0 0 14 20c4.5 0 8.27-2.67 10-6.5C22.22 9.5 19.5 7 17 8z"/><path d="M2 2l20 20"/></svg>
          </div>
          <h4 class="ld-val-title">Sustainability</h4>
          <p class="ld-val-desc">Responsible growth benefiting communities and the environment for future generations.</p>
        </div>
      </div>
    </section>

  </div>

</main>

<!-- ━━━ GSAP ScrollTrigger Animations ━━━ -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
  gsap.registerPlugin(ScrollTrigger);

  var ease = 'power3.out';

  // Left pane content fade-in
  gsap.from('.ld-left-content > *', {
    opacity: 0,
    y: 30,
    duration: 0.8,
    stagger: 0.12,
    ease: ease,
    delay: 0.3
  });

  // Executive cards
  gsap.utils.toArray('.ld-exec').forEach(function(el, i) {
    gsap.from(el, {
      opacity: 0,
      y: 60,
      duration: 0.9,
      ease: ease,
      scrollTrigger: {
        trigger: el,
        start: 'top 85%',
        scroller: '.ld-right',
        once: true
      }
    });
  });

  // Independent director cards
  gsap.utils.toArray('.ld-ind-card').forEach(function(el, i) {
    gsap.from(el, {
      opacity: 0,
      y: 40,
      duration: 0.7,
      delay: i * 0.1,
      ease: ease,
      scrollTrigger: {
        trigger: el,
        start: 'top 90%',
        scroller: '.ld-right',
        once: true
      }
    });
  });

  // Value cards
  gsap.utils.toArray('.ld-val-card').forEach(function(el, i) {
    gsap.from(el, {
      opacity: 0,
      y: 40,
      duration: 0.7,
      delay: i * 0.1,
      ease: ease,
      scrollTrigger: {
        trigger: el,
        start: 'top 90%',
        scroller: '.ld-right',
        once: true
      }
    });
  });

  // Section headers
  gsap.utils.toArray('.ld-section-num, .ld-section-label, .ld-divider').forEach(function(el) {
    gsap.from(el, {
      opacity: 0,
      x: -20,
      duration: 0.6,
      ease: ease,
      scrollTrigger: {
        trigger: el,
        start: 'top 90%',
        scroller: '.ld-right',
        once: true
      }
    });
  });
});
</script>

<?php get_footer(); ?>
