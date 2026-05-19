<?php
/**
 * Template Name: CSR
 * Description: Corporate Social Responsibility page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   CSR — Corporate Social Responsibility
   ============================================ */

/* --- HERO --- */
.csr-hero {
    position: relative;
    background: #fdf9f4;
    color: #0b1f3a;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 12rem;
    overflow: hidden;
}
.csr-hero-bg {
    position: absolute;
    inset: 0;
    background: url('<?php echo $uri; ?>/assets/images/csr-community.jpg') center/cover no-repeat;
    opacity: 0.08;
    mix-blend-mode: luminosity;
}
.csr-hero-gradient {
    position: absolute;
    inset: 0;
    background: none;
}
.csr-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.csr-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.csr-hero-breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: rgba(11,31,58,0.6);
    margin-bottom: 2rem;
}
.csr-hero-breadcrumb a { color: rgba(11,31,58,0.6); text-decoration: none; transition: color 0.3s; }
.csr-hero-breadcrumb a:hover { color: var(--gold); }
.csr-hero-breadcrumb .active { color: var(--gold); }
.csr-hero-breadcrumb svg { width: 12px; height: 12px; }
.csr-hero-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.4rem 1rem;
    background: rgba(212,168,67,0.1);
    border: 1px solid rgba(212,168,67,0.25);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
    color: #0b1f3a;
}
.csr-hero-accent {
    position: absolute;
    left: clamp(1.5rem, 4vw, 3.5rem);
    top: calc(var(--utility-h) + var(--header-h) + 2rem);
    bottom: 2rem;
    width: 4px;
    background: linear-gradient(to bottom, var(--gold), rgba(212,168,67,0.2));
    z-index: 1;
}
.csr-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 2rem;
    max-width: 900px;
}
.csr-hero-title em { font-style: normal; color: var(--gold); }
.csr-hero-subtitle {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    color: var(--text-secondary);
    max-width: 600px;
    line-height: 1.6;
    font-weight: 400;
}

/* --- OVERLAPPING FEATURE IMAGE --- */
.csr-feature {
    position: relative;
    z-index: 20;
    max-width: 1400px;
    margin: -6rem auto 0;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.csr-feature-img {
    position: relative;
    width: 100%;
    height: clamp(300px, 45vw, 700px);
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    border: 1px solid rgba(11,31,58,0.08);
}
.csr-feature-img img {
    width: 100%; height: 100%; object-fit: cover;
    filter: grayscale(100%);
    transition: filter 1s ease, transform 1s ease;
}
.csr-feature-img:hover img { filter: grayscale(0%); transform: scale(1.02); }
.csr-feature-label {
    position: absolute;
    bottom: 0;
    left: 0;
    background: rgba(11,31,58,0.9);
    backdrop-filter: blur(8px);
    padding: 1rem 1.5rem;
    border-top: 2px solid var(--gold);
    color: #fff;
    font-size: 0.85rem;
    font-weight: 500;
    letter-spacing: 0.05em;
}

/* --- COMMITMENT SECTION --- */
.csr-commitment {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.csr-commitment-layout {
    display: flex;
    gap: clamp(3rem, 6vw, 6rem);
    align-items: flex-start;
}
.csr-commitment-left {
    width: 33%;
    flex-shrink: 0;
}
.csr-commitment-bar {
    width: 3px;
    height: 3rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.csr-commitment-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.csr-commitment-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
}
.csr-commitment-right {
    flex: 1;
    padding-top: 0.5rem;
}
.csr-commitment-quote {
    font-family: var(--font-body);
    font-size: clamp(1.2rem, 2vw, 1.6rem);
    font-weight: 400;
    line-height: 1.7;
    color: var(--text-secondary);
    font-style: italic;
    margin: 0 0 2rem;
    position: relative;
    padding-left: 2rem;
    border-left: 3px solid var(--gold);
}
.csr-commitment-text {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin: 0 0 1.5rem;
}
.csr-commitment-text:last-child { margin-bottom: 0; }

/* --- INITIATIVES SECTION --- */
.csr-initiatives {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.csr-initiatives-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.csr-initiatives-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 5rem);
}
.csr-initiatives-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.csr-initiatives-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.csr-initiatives-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0 0 1rem;
}
.csr-initiatives-subtitle {
    font-size: 1rem;
    color: var(--text-muted);
    font-weight: 400;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}
.csr-initiatives-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}

/* --- INITIATIVE CARDS --- */
.csr-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    overflow: hidden;
    transition: all 0.5s var(--ease-out-expo);
}
.csr-card:hover {
    border-color: var(--gold);
    transform: translateY(-4px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}
.csr-card-img {
    position: relative;
    height: 240px;
    overflow: hidden;
}
.csr-card-img img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform 0.7s var(--ease-out-expo);
}
.csr-card:hover .csr-card-img img {
    transform: scale(1.05);
}
.csr-card-number {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: rgba(11,31,58,0.85);
    backdrop-filter: blur(8px);
    color: var(--gold);
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    padding: 0.35rem 0.8rem;
}
.csr-card-body {
    padding: clamp(1.5rem, 3vw, 2rem);
}
.csr-card-title {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2vw, 1.6rem);
    font-weight: 700;
    color: #0b1f3a;
    margin: 0 0 1rem;
    letter-spacing: -0.01em;
}
.csr-card-desc {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin: 0 0 1.5rem;
}
.csr-card-partner {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.8rem;
    font-weight: 600;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding-top: 1rem;
    border-top: 1px solid rgba(11,31,58,0.06);
}
.csr-card-partner svg {
    width: 16px; height: 16px; flex-shrink: 0;
}

/* --- PARTNERS SECTION --- */
.csr-partners {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.csr-partners-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 4rem);
}
.csr-partners-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.csr-partners-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.csr-partners-title {
    font-family: var(--font-body);
    font-size: clamp(1.8rem, 3vw, 2.5rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0;
}
.csr-partners-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
    align-items: center;
}
.csr-partner-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: clamp(2rem, 4vw, 3rem);
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    text-align: center;
    transition: all 0.5s var(--ease-out-expo);
    min-height: 200px;
}
.csr-partner-card:hover {
    border-color: var(--gold);
    transform: translateY(-2px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.06);
}
.csr-partner-card img {
    max-width: 140px;
    max-height: 80px;
    object-fit: contain;
    margin-bottom: 1.5rem;
    filter: grayscale(30%);
    transition: filter 0.5s ease;
}
.csr-partner-card:hover img { filter: grayscale(0%); }
.csr-partner-name {
    font-family: var(--font-body);
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--text-primary);
    margin: 0 0 0.25rem;
}
.csr-partner-focus {
    font-size: 0.8rem;
    color: var(--text-muted);
    font-weight: 400;
}

/* --- CTA --- */
.csr-cta {
    background: linear-gradient(145deg, #f2e0c8 0%, #e8caa4 45%, #ddb880 100%);
    color: #0b1f3a;
    padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
}
.csr-cta p {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2.5vw, 2rem);
    font-weight: 400;
    color: var(--text-secondary);
    margin: 0 0 2rem;
}

/* --- EXPANDABLE CARD DETAILS --- */
.csr-card-expand-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-family: var(--font-body);
    font-size: 0.82rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--gold);
    background: none;
    border: none;
    cursor: pointer;
    padding: 0.6rem 0 0;
    transition: color 0.3s ease;
}
.csr-card-expand-btn:hover { color: #0b1f3a; }
.csr-card-expand-btn svg {
    width: 14px; height: 14px;
    transition: transform 0.4s var(--ease-out-expo);
}
.csr-card-expand-btn.active svg { transform: rotate(180deg); }
.csr-card-detail {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.6s var(--ease-out-expo), opacity 0.4s ease;
    opacity: 0;
}
.csr-card-detail.open {
    opacity: 1;
}
.csr-card-detail-inner {
    padding: 1.25rem 0 0.5rem;
    margin-top: 1rem;
    border-left: 3px solid var(--gold);
    padding-left: 1.25rem;
}
.csr-card-detail-inner p {
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin: 0 0 1rem;
}
.csr-card-detail-inner p:last-child { margin-bottom: 0; }
.csr-card-detail-inner ul {
    list-style: none;
    padding: 0;
    margin: 0 0 1rem;
}
.csr-card-detail-inner ul li {
    position: relative;
    padding-left: 1.2rem;
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin-bottom: 0.4rem;
}
.csr-card-detail-inner ul li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0.6rem;
    width: 5px;
    height: 5px;
    background: var(--gold);
    border-radius: 50%;
}

/* --- PHILOSOPHY SECTION --- */
.csr-philosophy {
    background: linear-gradient(145deg, #f2e0c8 0%, #e8caa4 45%, #ddb880 100%);
    color: #0b1f3a;
    padding: 6rem clamp(1.5rem, 4vw, 3.5rem);
    position: relative;
    overflow: hidden;
}
.csr-philosophy::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 80% 50%, rgba(200,168,75,0.12) 0%, transparent 60%);
    pointer-events: none;
}
.csr-philosophy-inner {
    max-width: 1400px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}
.csr-philosophy-header {
    margin-bottom: 3.5rem;
}
.csr-philosophy-bar {
    width: 40px;
    height: 3px;
    background: var(--gold);
    margin-bottom: 1rem;
}
.csr-philosophy-eyebrow {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: var(--gold);
    margin-bottom: 1.2rem;
}
.csr-philosophy-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3.2rem);
    font-weight: 700;
    letter-spacing: -0.03em;
    line-height: 1.1;
    margin-bottom: 1.5rem;
}
.csr-philosophy-title em { font-style: normal; color: var(--gold); }
.csr-philosophy-lead {
    font-size: clamp(1rem, 1.6vw, 1.2rem);
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    max-width: 820px;
    margin-bottom: 1rem;
}
.csr-philosophy-sub {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    max-width: 820px;
}
.csr-pillars-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
    margin-top: 3rem;
}
.csr-pillar {
    background: rgba(255,255,255,0.35);
    border: 1px solid rgba(11,31,58,0.08);
    padding: 2.5rem 2rem;
    position: relative;
    transition: background 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
}
.csr-pillar:hover {
    background: rgba(255,255,255,0.55);
    border-color: rgba(212,168,67,0.4);
    transform: translateY(-4px);
}
.csr-pillar-number {
    font-size: 0.68rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: var(--gold);
    margin-bottom: 1.2rem;
    display: block;
}
.csr-pillar-name {
    font-family: var(--font-body);
    font-size: 1.25rem;
    font-weight: 700;
    color: #0b1f3a;
    margin-bottom: 1rem;
    line-height: 1.3;
}
.csr-pillar-desc {
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin: 0;
}
.csr-pillar-icon {
    width: 120px;
    height: 120px;
    margin: 0 auto 1.8rem;
    display: flex;
    align-items: center;
    justify-content: center;
}
.csr-pillar-icon img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    filter: drop-shadow(0 0 16px rgba(200,168,75,0.5));
    transition: filter 0.4s ease, transform 0.4s ease;
}
.csr-pillar:hover .csr-pillar-icon img {
    filter: drop-shadow(0 0 28px rgba(200,168,75,0.85));
    transform: scale(1.08);
}
.csr-pillar-accent {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 3px;
    background: var(--gold);
    transition: width 0.4s ease;
}
.csr-pillar:hover .csr-pillar-accent { width: 100%; }
.csr-pillar { text-align: center; }

/* --- MOVING FORWARD SECTION --- */
.csr-forward {
    background: #fff;
    padding: 6rem clamp(1.5rem, 4vw, 3.5rem);
}
.csr-forward-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.csr-forward-header {
    margin-bottom: 3.5rem;
}
.csr-forward-bar {
    width: 40px;
    height: 3px;
    background: var(--gold);
    margin-bottom: 1rem;
}
.csr-forward-eyebrow {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: var(--gold);
    margin-bottom: 1.2rem;
}
.csr-forward-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3.2rem);
    font-weight: 700;
    letter-spacing: -0.03em;
    line-height: 1.1;
    color: #0b1f3a;
    margin-bottom: 1.5rem;
}
.csr-forward-title em { font-style: normal; color: var(--gold); }
.csr-forward-lead {
    font-size: clamp(1rem, 1.6vw, 1.2rem);
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    max-width: 820px;
}
.csr-forward-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    margin-top: 3.5rem;
}
.csr-forward-col-title {
    font-family: var(--font-body);
    font-size: 1.1rem;
    font-weight: 700;
    color: #0b1f3a;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid var(--gold);
}
.csr-future-item {
    display: flex;
    gap: 1.25rem;
    padding: 1.25rem 0;
    border-bottom: 1px solid rgba(0,0,0,0.07);
}
.csr-future-item:last-child { border-bottom: none; }
.csr-future-icon {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #0b1f3a;
    border-radius: 4px;
    overflow: hidden;
}
.csr-future-icon img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
}
.csr-future-item:hover .csr-future-icon img {
    transform: scale(1.1);
}
.csr-future-content {}
.csr-future-name {
    font-size: 0.95rem;
    font-weight: 700;
    color: #0b1f3a;
    margin-bottom: 0.3rem;
}
.csr-future-desc {
    font-size: 0.9rem;
    color: var(--text-secondary);
    line-height: 1.6;
    font-weight: 400;
    margin: 0;
}
.csr-forward-right-block {
    margin-bottom: 2rem;
}
.csr-forward-right-block:last-child { margin-bottom: 0; }
.csr-forward-block-title {
    font-size: 1rem;
    font-weight: 700;
    color: #0b1f3a;
    margin-bottom: 0.6rem;
}
.csr-forward-block-text {
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin: 0;
}

/* --- JOIN US SECTION --- */
.csr-join {
    background: linear-gradient(145deg, #f2e0c8 0%, #e8caa4 45%, #ddb880 100%);
    color: #0b1f3a;
    padding: 5rem clamp(1.5rem, 4vw, 3.5rem);
    position: relative;
    overflow: hidden;
}
.csr-join::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 20% 50%, rgba(200,168,75,0.15) 0%, transparent 55%);
    pointer-events: none;
}
.csr-join-inner {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    z-index: 1;
}
.csr-join-bar {
    width: 40px;
    height: 3px;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.csr-join-title {
    font-family: var(--font-body);
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700;
    letter-spacing: -0.03em;
    margin-bottom: 1.5rem;
}
.csr-join-title em { font-style: normal; color: var(--gold); }
.csr-join-text {
    font-size: clamp(1rem, 1.5vw, 1.15rem);
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin-bottom: 1rem;
}
.csr-join-tagline {
    font-size: 1rem;
    color: var(--text-secondary);
    font-style: italic;
    font-weight: 400;
    margin: 0;
}

@media (max-width: 1024px) {
    .csr-pillars-grid { grid-template-columns: repeat(2, 1fr); }
    .csr-forward-layout { grid-template-columns: 1fr; gap: 2.5rem; }
}
@media (max-width: 768px) {
    .csr-pillars-grid { grid-template-columns: 1fr; }
}

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .csr-commitment-layout { flex-direction: column; }
    .csr-commitment-left { width: 100%; }
    .csr-initiatives-grid { grid-template-columns: repeat(2, 1fr); }
    .csr-partners-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .csr-hero { padding: calc(var(--utility-h) + var(--header-h) + 2rem) 0 8rem; }
    .csr-feature { margin-top: -4rem; }
    .csr-feature-img { height: clamp(200px, 50vw, 400px); }
    .csr-initiatives-grid { grid-template-columns: 1fr; }
    .csr-partners-grid { grid-template-columns: 1fr; }
}
</style>

<main class="page-csr">

    <!-- ════ HERO ════ -->
    <section class="csr-hero">
        <div class="csr-hero-bg"></div>
        <div class="csr-hero-gradient"></div>
        <div class="csr-hero-glow"></div>
        <div class="csr-hero-accent"></div>
        <div class="csr-hero-inner">
            <nav class="csr-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Company</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">CSR</span>
            </nav>
            <div class="csr-hero-badge">Dhanuka Foundation</div>
            <h1 class="csr-hero-title">Beyond Business: Creating<br><em>Communities That Thrive</em></h1>
            <p class="csr-hero-subtitle">Through Dhanuka Foundation, we extend our commitment beyond excellence in manufacturing to build stronger communities. Discover how we're making meaningful impact in education, healthcare, and sustainable livelihood—creating lasting change for society.</p>
        </div>
    </section>

    <!-- ════ OVERLAPPING IMAGE ════ -->
    <section class="csr-feature">
        <div class="csr-feature-img">
            <img src="<?php echo $uri; ?>/assets/images/csr-community.jpg" alt="Umang Boards community engagement" loading="eager">
            <div class="csr-feature-label">Through Dhanuka Foundation</div>
        </div>
    </section>

    <!-- ════ OUR COMMITMENT ════ -->
    <section class="csr-commitment">
        <div class="csr-commitment-layout">
            <div class="csr-commitment-left">
                <div class="csr-commitment-bar"></div>
                <div class="csr-commitment-eyebrow">Section 01</div>
                <h2 class="csr-commitment-heading">Our Commitment<br>to Society</h2>
            </div>
            <div class="csr-commitment-right">
                <p class="csr-commitment-quote">At Umang Boards Limited, we recognize that true business success extends far beyond financial performance—it encompasses our responsibility to the communities we serve and the society we're part of. Our commitment to Corporate Social Responsibility is deeply embedded in our organizational values and manifests through Dhanuka Foundation, our wholly-owned subsidiary dedicated to creating sustainable social impact.</p>
                <p class="csr-commitment-text">We firmly believe that businesses have a fundamental obligation to contribute to the welfare of local communities and society at large. Our approach to CSR is rooted in the principle of sustainable development—ensuring that our interventions create lasting positive change while fostering long-term community resilience. Through strategic partnerships and carefully designed programs, we strive to be catalysts for meaningful social transformation.</p>
            </div>
        </div>
    </section>

    <!-- ════ OUR PHILOSOPHY ════ -->
    <section class="csr-philosophy">
        <div class="csr-philosophy-inner">
            <div class="csr-philosophy-header">
                <div class="csr-philosophy-bar"></div>
                <div class="csr-philosophy-eyebrow">Section 02</div>
                <h2 class="csr-philosophy-title">Our Philosophy:<br><em>Creating Lasting Impact</em></h2>
                <p class="csr-philosophy-lead">Dhanuka Foundation operates on the principle that effective social intervention requires thoughtful planning, strategic execution, and sustained commitment. We take utmost care in the selection of community initiatives we support, ensuring that every program aligns with our core mission of creating long-term societal welfare.</p>
                <p class="csr-philosophy-sub">Rather than spreading resources across numerous shallow initiatives, we focus our efforts on fewer, high-impact programs where we can make a genuine difference. This focused approach allows us to build deeper relationships with partner organizations and communities, ultimately leading to more meaningful outcomes.</p>
            </div>

            <div class="csr-pillars-grid">
                <div class="csr-pillar">
                    <div class="csr-pillar-icon">
                        <img src="<?php echo $uri; ?>/assets/images/csr-icon-pillar1.png" alt="Purposeful Selection">
                    </div>
                    <span class="csr-pillar-number">Pillar 01</span>
                    <div class="csr-pillar-name">Purposeful Selection</div>
                    <p class="csr-pillar-desc">We carefully evaluate potential initiatives based on their capacity to create sustainable, measurable impact.</p>
                    <div class="csr-pillar-accent"></div>
                </div>
                <div class="csr-pillar">
                    <div class="csr-pillar-icon">
                        <img src="<?php echo $uri; ?>/assets/images/csr-icon-pillar2.png" alt="Community-Centric Approach">
                    </div>
                    <span class="csr-pillar-number">Pillar 02</span>
                    <div class="csr-pillar-name">Community-Centric Approach</div>
                    <p class="csr-pillar-desc">All our programs are designed with deep understanding of local needs and community dynamics.</p>
                    <div class="csr-pillar-accent"></div>
                </div>
                <div class="csr-pillar">
                    <div class="csr-pillar-icon">
                        <img src="<?php echo $uri; ?>/assets/images/csr-icon-pillar3.png" alt="Long-term Commitment">
                    </div>
                    <span class="csr-pillar-number">Pillar 03</span>
                    <div class="csr-pillar-name">Long-term Commitment</div>
                    <p class="csr-pillar-desc">We believe in building lasting partnerships rather than one-time interventions, ensuring continuity and sustained benefits.</p>
                    <div class="csr-pillar-accent"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ INITIATIVES ════ -->
    <section class="csr-initiatives">
        <div class="csr-initiatives-inner">
            <div class="csr-initiatives-header">
                <div class="csr-initiatives-bar"></div>
                <div class="csr-initiatives-eyebrow">Section 03</div>
                <h2 class="csr-initiatives-title">Our Initiatives</h2>
                <p class="csr-initiatives-subtitle">Through Dhanuka Foundation, we focus on three core areas that create lasting impact in our communities.</p>
            </div>

            <div class="csr-initiatives-grid">

                <!-- Sustainable Livelihood -->
                <div class="csr-card">
                    <div class="csr-card-img">
                        <img src="<?php echo $uri; ?>/assets/images/csr-community.jpg" alt="Sustainable livelihood initiative — feeding underprivileged communities" loading="lazy">
                        <span class="csr-card-number">Initiative 01</span>
                    </div>
                    <div class="csr-card-body">
                        <h3 class="csr-card-title">Sustainable Livelihood</h3>
                        <p class="csr-card-desc">Through our strategic partnership with the Akshaya Patra Foundation, we contribute to addressing food security challenges while supporting educational access and retention. The Foundation operates one of the world's largest school meal programs, serving millions of nutritious meals to children across India.</p>
                        <button class="csr-card-expand-btn" onclick="toggleCsrDetail(this)" aria-expanded="false">
                            Read More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                        </button>
                        <div class="csr-card-detail">
                            <div class="csr-card-detail-inner">
                                <p>Food security remains one of the most pressing challenges facing underprivileged communities across India. Through our strategic partnership with the Akshaya Patra Foundation, we contribute to addressing this fundamental need while supporting the broader goal of educational access and retention.</p>
                                <p>The Akshaya Patra Foundation operates one of the world's largest school meal programs, serving millions of nutritious meals to children across India.</p>
                                <p>Our support enables the foundation to:</p>
                                <ul>
                                    <li>Expand meal distribution networks to reach more underserved communities</li>
                                    <li>Enhance nutritional quality through improved ingredients and preparation methods</li>
                                    <li>Implement technology-driven solutions for efficient meal preparation and distribution</li>
                                    <li>Create employment opportunities within local communities through kitchen operations and logistics</li>
                                </ul>
                                <p>By partnering with Akshaya Patra, we're not just addressing hunger — we're investing in a comprehensive solution that supports education, health, and community development.</p>
                            </div>
                        </div>
                        <div class="csr-card-partner">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4-4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                            Akshaya Patra Foundation
                        </div>
                    </div>
                </div>

                <!-- Education -->
                <div class="csr-card">
                    <div class="csr-card-img">
                        <img src="<?php echo $uri; ?>/assets/images/csr-environmental.jpg" alt="Education initiative — merit scholarships for students" loading="lazy">
                        <span class="csr-card-number">Initiative 02</span>
                    </div>
                    <div class="csr-card-body">
                        <h3 class="csr-card-title">Education</h3>
                        <p class="csr-card-desc">Aligned with our vision of 'Education for All,' Dhanuka Foundation operates a comprehensive merit scholarship program. We provide financial support to meritorious students who demonstrate academic excellence but lack economic resources — covering tuition, books, and educational materials.</p>
                        <button class="csr-card-expand-btn" onclick="toggleCsrDetail(this)" aria-expanded="false">
                            Read More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                        </button>
                        <div class="csr-card-detail">
                            <div class="csr-card-detail-inner">
                                <p>Education serves as the cornerstone of individual empowerment and societal progress. Our scholarship initiative recognizes that intellectual potential exists across all socioeconomic backgrounds, but financial constraints often limit educational opportunities.</p>
                                <p>Key Features of Our Scholarship Program:</p>
                                <ul>
                                    <li>Merit-Based Selection: Scholarships are awarded based on academic performance</li>
                                    <li>Comprehensive Coverage: Financial assistance covers tuition fees, books, and educational materials</li>
                                    <li>Mentorship Component: Beyond financial support, we provide guidance and mentoring</li>
                                    <li>Progressive Support: Multi-year commitments ensure students can complete their programs</li>
                                </ul>
                                <p>We believe that for sustainable and steady societal growth, education plays the most critical role. Every student we support represents an investment in India's future.</p>
                            </div>
                        </div>
                        <div class="csr-card-partner">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
                            Education For All
                        </div>
                    </div>
                </div>

                <!-- Healthcare -->
                <div class="csr-card">
                    <div class="csr-card-img">
                        <img src="<?php echo $uri; ?>/assets/images/csr-safety.jpg" alt="Healthcare initiative — supporting elderly and terminally ill patients" loading="lazy">
                        <span class="csr-card-number">Initiative 03</span>
                    </div>
                    <div class="csr-card-body">
                        <h3 class="csr-card-title">Healthcare</h3>
                        <p class="csr-card-desc">Through partnerships with Mother Teresa Foundation, Jaipur and SDMH Avedna Ashram, we support comprehensive care for elderly and physically challenged individuals, and provide palliative care services for patients facing terminal illnesses — focusing on comfort, dignity, and emotional support.</p>
                        <button class="csr-card-expand-btn" onclick="toggleCsrDetail(this)" aria-expanded="false">
                            Read More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                        </button>
                        <div class="csr-card-detail">
                            <div class="csr-card-detail-inner">
                                <p>Healthcare accessibility remains a significant challenge for many communities, particularly for elderly citizens, physically challenged individuals, and those facing terminal illnesses.</p>
                                <p>Partnership with Mother Teresa Foundation, Jaipur — Our collaboration enables the foundation to:</p>
                                <ul>
                                    <li>Provide residential care facilities with professional medical supervision</li>
                                    <li>Offer physiotherapy and rehabilitation services for physically challenged individuals</li>
                                    <li>Ensure nutritious meals and essential medications for residents</li>
                                    <li>Create a dignified living environment that prioritizes comfort, care, and respect</li>
                                    <li>Implement recreational and therapeutic activities that enhance quality of life</li>
                                </ul>
                                <p>Partnership with SDMH Avedna Ashram — Our support enables the ashram to:</p>
                                <ul>
                                    <li>Provide palliative care services that focus on comfort and pain management</li>
                                    <li>Offer psychological counseling and emotional support for patients and families</li>
                                    <li>Maintain facilities that prioritize dignity and peace during challenging times</li>
                                    <li>Ensure access to necessary medications and medical equipment</li>
                                    <li>Create a supportive community environment where patients and families find solace</li>
                                </ul>
                            </div>
                        </div>
                        <div class="csr-card-partner">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                            Mother Teresa Foundation &amp; SDMH Avedna Ashram
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ════ PARTNERS ════ -->
    <section class="csr-partners">
        <div class="csr-partners-header">
            <div class="csr-partners-bar"></div>
            <div class="csr-partners-eyebrow">Section 04</div>
            <h2 class="csr-partners-title">Our Partner Organizations</h2>
        </div>

        <div class="csr-partners-grid">

            <div class="csr-partner-card">
                <img src="<?php echo $uri; ?>/assets/images/csr-logo-1.png" alt="Akshaya Patra Foundation logo">
                <div class="csr-partner-name">Akshaya Patra Foundation</div>
                <div class="csr-partner-focus">Sustainable Livelihood</div>
            </div>

            <div class="csr-partner-card">
                <img src="<?php echo $uri; ?>/assets/images/csr-logo-2.png" alt="Mother Teresa Foundation logo">
                <div class="csr-partner-name">Mother Teresa Foundation, Jaipur</div>
                <div class="csr-partner-focus">Healthcare &amp; Elderly Care</div>
            </div>

            <div class="csr-partner-card">
                <img src="<?php echo $uri; ?>/assets/images/csr-logo-3-small.png" alt="SDMH Avedna Ashram logo">
                <div class="csr-partner-name">SDMH Avedna Ashram</div>
                <div class="csr-partner-focus">Terminal Illness Care</div>
            </div>

        </div>
    </section>

    <!-- ════ MOVING FORWARD ════ -->
    <section class="csr-forward">
        <div class="csr-forward-inner">
            <div class="csr-forward-header">
                <div class="csr-forward-bar"></div>
                <div class="csr-forward-eyebrow">Section 05</div>
                <h2 class="csr-forward-title">Our Commitment<br><em>Moving Forward</em></h2>
                <p class="csr-forward-lead">As Umang Boards Limited continues to grow and expand our global presence, our commitment to social responsibility grows proportionally. We view our CSR initiatives not as separate activities, but as integral components of our business philosophy and long-term strategy.</p>
            </div>

            <div class="csr-forward-layout">
                <div class="csr-forward-left">
                    <div class="csr-forward-col-title">Future Initiatives Under Consideration</div>
                    <div class="csr-future-item">
                        <div class="csr-future-icon">
                            <img src="<?php echo $uri; ?>/assets/images/csr-icon-skill.png" alt="Skill Development">
                        </div>
                        <div class="csr-future-content">
                            <div class="csr-future-name">Skill Development Programs</div>
                            <p class="csr-future-desc">Partnering with vocational training institutes to provide technical skills training for unemployed youth.</p>
                        </div>
                    </div>
                    <div class="csr-future-item">
                        <div class="csr-future-icon">
                            <img src="<?php echo $uri; ?>/assets/images/csr-icon-environment.png" alt="Environmental Conservation">
                        </div>
                        <div class="csr-future-content">
                            <div class="csr-future-name">Environmental Conservation</div>
                            <p class="csr-future-desc">Community-based initiatives focused on water conservation, afforestation, and sustainable agricultural practices.</p>
                        </div>
                    </div>
                    <div class="csr-future-item">
                        <div class="csr-future-icon">
                            <img src="<?php echo $uri; ?>/assets/images/csr-icon-women.png" alt="Women's Empowerment">
                        </div>
                        <div class="csr-future-content">
                            <div class="csr-future-name">Women's Empowerment</div>
                            <p class="csr-future-desc">Programs designed to support female entrepreneurship and economic independence.</p>
                        </div>
                    </div>
                    <div class="csr-future-item">
                        <div class="csr-future-icon">
                            <img src="<?php echo $uri; ?>/assets/images/csr-icon-digital.png" alt="Digital Literacy">
                        </div>
                        <div class="csr-future-content">
                            <div class="csr-future-name">Digital Literacy</div>
                            <p class="csr-future-desc">Bridging the digital divide through computer education and internet access programs.</p>
                        </div>
                    </div>
                </div>
                <div class="csr-forward-right">
                    <div class="csr-forward-col-title">Our Ongoing Commitments</div>
                    <div class="csr-forward-right-block">
                        <div class="csr-forward-block-title">Measuring Impact</div>
                        <p class="csr-forward-block-text">We are committed to implementing robust monitoring and evaluation systems to measure the effectiveness of our CSR initiatives. This includes regular impact assessments, beneficiary feedback mechanisms, and transparent reporting on program outcomes.</p>
                    </div>
                    <div class="csr-forward-right-block">
                        <div class="csr-forward-block-title">Community Engagement</div>
                        <p class="csr-forward-block-text">Moving forward, we will increase direct community engagement to ensure our programs remain responsive to local needs and priorities. This includes regular community consultations and participatory planning processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ JOIN US ════ -->
    <section class="csr-join">
        <div class="csr-join-inner">
            <div class="csr-join-bar"></div>
            <h2 class="csr-join-title">Join Us in<br><em>Making a Difference</em></h2>
            <p class="csr-join-text">At Dhanuka Foundation, we believe that sustainable social change requires collective effort. While we remain committed to expanding our direct contributions, we also encourage our employees, customers, and partners to join us in our mission to create positive social impact.</p>
            <p class="csr-join-text">For more information about our CSR initiatives or partnership opportunities, please contact us.</p>
            <p class="csr-join-tagline">Together, we can build stronger communities, transform lives, and contribute to India's journey toward inclusive and sustainable development.</p>
        </div>
    </section>

    <!-- ════ CTA ════ -->
    <section class="csr-cta">
        <p>Want to learn more about Dhanuka Foundation's initiatives?</p>
        <a href="<?php echo home_url('/contact-us'); ?>" class="btn-gold">
            Get in Touch
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </section>

</main>

<!-- Expandable Card Toggle -->
<script>
function toggleCsrDetail(btn) {
    var detail = btn.nextElementSibling;
    var isOpen = detail.classList.contains('open');
    if (isOpen) {
        detail.style.maxHeight = '0';
        detail.classList.remove('open');
        btn.classList.remove('active');
        btn.setAttribute('aria-expanded', 'false');
        btn.childNodes[0].textContent = 'Read More';
    } else {
        detail.style.maxHeight = detail.scrollHeight + 'px';
        detail.classList.add('open');
        btn.classList.add('active');
        btn.setAttribute('aria-expanded', 'true');
        btn.childNodes[0].textContent = 'Read Less';
    }
}
</script>

<!-- GSAP ScrollTrigger Animations -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        return;
    }
    gsap.registerPlugin(ScrollTrigger);

    function fadeUp(el, opts) {
        var o = Object.assign({ y: 20, duration: 0.6, delay: 0, start: 'top 85%' }, opts || {});
        gsap.fromTo(el, { opacity: 0, y: o.y }, {
            opacity: 1, y: 0, duration: o.duration, ease: 'expo.out', delay: o.delay,
            scrollTrigger: { trigger: el, start: o.start }
        });
    }

    /* Hero elements */
    fadeUp('.csr-hero-badge', { y: 15, delay: 0.1 });
    fadeUp('.csr-hero-title', { y: 25, delay: 0.2 });
    fadeUp('.csr-hero-subtitle', { y: 20, delay: 0.35 });

    /* Feature image */
    gsap.fromTo('.csr-feature-img', { opacity: 0, y: 40 }, {
        opacity: 1, y: 0, duration: 0.8, ease: 'expo.out',
        scrollTrigger: { trigger: '.csr-feature', start: 'top 80%' }
    });

    /* Commitment section */
    fadeUp('.csr-commitment-bar', { y: 10 });
    fadeUp('.csr-commitment-eyebrow', { y: 10, delay: 0.1 });
    UBL.wipeIn('.csr-commitment-heading', { delay: 0.15 });
    fadeUp('.csr-commitment-quote', { y: 20, delay: 0.3 });
    gsap.utils.toArray('.csr-commitment-text').forEach(function (el, i) {
        fadeUp(el, { y: 15, delay: 0.1 * (i + 1) });
    });

    /* Initiatives header */
    fadeUp('.csr-initiatives-bar', { y: 10, start: 'top 80%' });
    UBL.wipeIn('.csr-initiatives-title', { delay: 0.1, start: 'top 80%' });
    fadeUp('.csr-initiatives-subtitle', { y: 15, delay: 0.3, start: 'top 80%' });

    /* Initiative cards */
    gsap.utils.toArray('.csr-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 40 }, {
            opacity: 1, y: 0, duration: 0.7, ease: 'expo.out', delay: i * 0.15,
            scrollTrigger: { trigger: card, start: 'top 85%' }
        });
    });

    /* Philosophy */
    fadeUp('.csr-philosophy-bar', { y: 10, start: 'top 80%' });
    fadeUp('.csr-philosophy-eyebrow', { y: 10, delay: 0.1, start: 'top 80%' });
    UBL.wipeIn('.csr-philosophy-title', { delay: 0.15, start: 'top 80%' });
    fadeUp('.csr-philosophy-lead', { y: 20, delay: 0.3, start: 'top 80%' });
    fadeUp('.csr-philosophy-sub', { y: 15, delay: 0.45, start: 'top 80%' });
    gsap.utils.toArray('.csr-pillar').forEach(function (el, i) {
        gsap.fromTo(el, { opacity: 0, y: 40 }, {
            opacity: 1, y: 0, duration: 0.7, ease: 'expo.out', delay: i * 0.15,
            scrollTrigger: { trigger: el, start: 'top 88%' }
        });
    });

    /* Partners */
    fadeUp('.csr-partners-bar', { y: 10, start: 'top 80%' });
    UBL.wipeIn('.csr-partners-title', { delay: 0.1, start: 'top 80%' });
    gsap.utils.toArray('.csr-partner-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 30 }, {
            opacity: 1, y: 0, duration: 0.6, ease: 'expo.out', delay: i * 0.12,
            scrollTrigger: { trigger: card, start: 'top 88%' }
        });
    });

    /* Moving Forward */
    fadeUp('.csr-forward-bar', { y: 10, start: 'top 80%' });
    fadeUp('.csr-forward-eyebrow', { y: 10, delay: 0.1, start: 'top 80%' });
    UBL.wipeIn('.csr-forward-title', { delay: 0.15, start: 'top 80%' });
    fadeUp('.csr-forward-lead', { y: 20, delay: 0.3, start: 'top 80%' });
    gsap.utils.toArray('.csr-future-item').forEach(function (el, i) {
        gsap.fromTo(el, { opacity: 0, x: -20 }, {
            opacity: 1, x: 0, duration: 0.6, ease: 'expo.out', delay: i * 0.1,
            scrollTrigger: { trigger: el, start: 'top 88%' }
        });
    });
    gsap.utils.toArray('.csr-forward-right-block').forEach(function (el, i) {
        fadeUp(el, { y: 20, delay: i * 0.15 });
    });

    /* Join Us */
    fadeUp('.csr-join-bar', { y: 10, start: 'top 80%' });
    UBL.wipeIn('.csr-join-title', { delay: 0.1, start: 'top 80%' });
    gsap.utils.toArray('.csr-join-text').forEach(function (el, i) {
        fadeUp(el, { y: 15, delay: 0.2 + i * 0.12 });
    });
    fadeUp('.csr-join-tagline', { y: 10, delay: 0.5 });

    /* CTA */
    fadeUp('.csr-cta p', { y: 15 });
    fadeUp('.csr-cta-btn', { y: 15, delay: 0.15 });
});
</script>

<?php get_footer(); ?>
