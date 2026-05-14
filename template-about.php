<?php
/*
 * Template Name: About Us
 */
get_header();
$img = get_stylesheet_directory_uri() . '/assets/images/';
?>

<main class="ab-page">

<!-- ══════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════ -->
<section class="ab-hero">
  <div class="ab-hero-bg" style="background-image:url('<?php echo $img; ?>about-hero.jpg');"></div>
  <div class="ab-hero-overlay"></div>
  <div class="ab-hero-inner">
    <div class="ab-hero-pills">
      <span class="ab-pill">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        FSSAI Certified
      </span>
      <span class="ab-pill">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        100% Natural
      </span>
      <span class="ab-pill">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        Made in Karnataka
      </span>
    </div>
    <h1 class="ab-hero-title">Born from the Heart<br>of <em>Karnataka</em></h1>
    <p class="ab-hero-sub">From fragrant spice fields to your kitchen table — authentic, pure, and crafted with generational love.</p>
    <a href="#ab-story" class="ab-hero-scroll" aria-label="Scroll down">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12l7 7 7-7"/></svg>
    </a>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     STATS
══════════════════════════════════════════════════ -->
<div class="ab-stats">
  <div class="ab-container">
    <div class="ab-stats-grid">
      <div class="ab-stat" data-target="26" data-suffix="">
        <span class="ab-stat-num">26</span>
        <span class="ab-stat-label">Products</span>
      </div>
      <div class="ab-stat" data-target="9" data-suffix="">
        <span class="ab-stat-num">9</span>
        <span class="ab-stat-label">Categories</span>
      </div>
      <div class="ab-stat" data-target="100" data-suffix="%">
        <span class="ab-stat-num">100%</span>
        <span class="ab-stat-label">Natural Ingredients</span>
      </div>
      <div class="ab-stat" data-target="0" data-suffix="">
        <span class="ab-stat-num">0</span>
        <span class="ab-stat-label">Preservatives Used</span>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════════════
     OUR STORY
══════════════════════════════════════════════════ -->
<section class="ab-story" id="ab-story">
  <div class="ab-container">
    <div class="ab-story-grid">

      <div class="ab-story-media">
        <div class="ab-story-img" style="background-image:url('<?php echo $img; ?>about-story.jpg');"></div>
        <div class="ab-story-float">
          <span class="ab-story-kannada">ಹೊಂಬಿಸಿಲು</span>
          <span class="ab-story-meaning">"Golden Sunshine"</span>
        </div>
      </div>

      <div class="ab-story-text">
        <span class="ab-eyebrow">Who We Are</span>
        <h2 class="ab-h2">What Does <em>Hombisilu</em> Mean?</h2>
        <p>Hombisilu was born from a deep-rooted love for South Indian food — not just as sustenance, but as culture, memory, and identity. The name reflects the warmth, nourishment, and brightness we bring to every household.</p>
        <p>We began with a simple idea: authentic South Indian pantry essentials that urban families could trust — products that taste like home, carry the goodness of tradition, and uphold the integrity of natural ingredients.</p>
        <p>Based in Bengaluru, Karnataka, we collaborate with skilled artisans, local farmers, and heritage recipe custodians to honour South India's rich culinary legacy.</p>

        <ul class="ab-feature-list">
          <li>
            <span class="ab-feat-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 13l4 4L19 7"/></svg>
            </span>
            Zero artificial preservatives or colours
          </li>
          <li>
            <span class="ab-feat-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 13l4 4L19 7"/></svg>
            </span>
            Heritage recipes with modern hygiene standards
          </li>
          <li>
            <span class="ab-feat-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 13l4 4L19 7"/></svg>
            </span>
            FSSAI License: 11225332000490
          </li>
          <li>
            <span class="ab-feat-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 13l4 4L19 7"/></svg>
            </span>
            Pan-India delivery from Bengaluru
          </li>
        </ul>

        <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="ab-btn-primary">
          Explore Our Products
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     MISSION & VISION
══════════════════════════════════════════════════ -->
<section class="ab-mv">
  <div class="ab-container">
    <span class="ab-eyebrow" style="display:block;text-align:center;">What Drives Us</span>
    <h2 class="ab-h2" style="text-align:center;margin-bottom:48px;">Mission &amp; Vision</h2>
    <div class="ab-mv-grid">

      <div class="ab-mv-card">
        <div class="ab-mv-accent ab-mv-accent--mission"></div>
        <div class="ab-mv-icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
        </div>
        <h3 class="ab-mv-title">Our Mission</h3>
        <div class="ab-mv-divider"></div>
        <p>To bring authentic, nourishing, and heritage-inspired South Indian foods to every home — without compromise on purity, quality, or tradition.</p>
        <ul class="ab-mv-list">
          <li>Zero artificial preservatives or colours</li>
          <li>Heritage recipes, modern hygiene standards</li>
          <li>Affordable premium quality for all families</li>
        </ul>
      </div>

      <div class="ab-mv-card">
        <div class="ab-mv-accent ab-mv-accent--vision"></div>
        <div class="ab-mv-icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </div>
        <h3 class="ab-mv-title">Our Vision</h3>
        <div class="ab-mv-divider"></div>
        <p>To become India's most trusted name in traditional South Indian food products — bridging generations through flavour and purpose.</p>
        <ul class="ab-mv-list">
          <li>Pan-India presence with local roots</li>
          <li>Preserving culinary traditions for generations</li>
          <li>Building lasting trust with every product</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     VALUES
══════════════════════════════════════════════════ -->
<section class="ab-values">
  <div class="ab-container">
    <span class="ab-eyebrow" style="display:block;text-align:center;">What We Stand For</span>
    <h2 class="ab-h2" style="text-align:center;margin-bottom:8px;">Our Core Values</h2>
    <p class="ab-section-sub">The principles that guide every product we make</p>

    <div class="ab-val-grid">

      <div class="ab-val-card">
        <div class="ab-val-card-header">
          <span class="ab-val-num">01</span>
          <div class="ab-val-icon-wrap">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
        </div>
        <div class="ab-val-card-body">
          <span class="ab-val-tag">Heritage</span>
          <h4>Authenticity</h4>
          <p>Every recipe honours its origins, made the way it has always been made — no shortcuts, no substitutes.</p>
        </div>
      </div>

      <div class="ab-val-card">
        <div class="ab-val-card-header">
          <span class="ab-val-num">02</span>
          <div class="ab-val-icon-wrap">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
          </div>
        </div>
        <div class="ab-val-card-body">
          <span class="ab-val-tag">Natural</span>
          <h4>Purity</h4>
          <p>No artificial additives, ever. What you see on the label is exactly what goes into the jar.</p>
        </div>
      </div>

      <div class="ab-val-card">
        <div class="ab-val-card-header">
          <span class="ab-val-num">03</span>
          <div class="ab-val-icon-wrap">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
        </div>
        <div class="ab-val-card-body">
          <span class="ab-val-tag">Honest</span>
          <h4>Integrity</h4>
          <p>Transparent ingredients, honest sourcing, and fair relationships with our farming community.</p>
        </div>
      </div>

      <div class="ab-val-card">
        <div class="ab-val-card-header">
          <span class="ab-val-num">04</span>
          <div class="ab-val-icon-wrap">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
          </div>
        </div>
        <div class="ab-val-card-body">
          <span class="ab-val-tag">Wellness</span>
          <h4>Nourishment</h4>
          <p>Every product is designed to support your health and wellbeing, not just your palate.</p>
        </div>
      </div>

      <div class="ab-val-card">
        <div class="ab-val-card-header">
          <span class="ab-val-num">05</span>
          <div class="ab-val-icon-wrap">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
          </div>
        </div>
        <div class="ab-val-card-body">
          <span class="ab-val-tag">Legacy</span>
          <h4>Heritage</h4>
          <p>We are guardians of South India's culinary legacy, one recipe at a time.</p>
        </div>
      </div>

      <div class="ab-val-card">
        <div class="ab-val-card-header">
          <span class="ab-val-num">06</span>
          <div class="ab-val-icon-wrap">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
        </div>
        <div class="ab-val-card-body">
          <span class="ab-val-tag">Local</span>
          <h4>Community</h4>
          <p>Supporting local farmers, artisans, and food makers who keep these traditions alive.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     PROCESS
══════════════════════════════════════════════════ -->
<section class="ab-process">
  <div class="ab-process-glow"></div>
  <div class="ab-container" style="position:relative;z-index:1;">
    <span class="ab-eyebrow" style="display:block;text-align:center;color:rgba(245,200,66,.75);">Our Process</span>
    <h2 class="ab-h2" style="text-align:center;color:#fff;margin-bottom:8px;">From Source to Your Table</h2>
    <p class="ab-section-sub" style="color:rgba(255,255,255,.6);">Every product goes through four carefully controlled steps</p>

    <div class="ab-process-grid">

      <div class="ab-proc-step">
        <div class="ab-proc-num">01</div>
        <div class="ab-proc-icon">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        </div>
        <h4>Source</h4>
        <p>Hand-picked ingredients from trusted local farmers and heritage suppliers across Karnataka and South India.</p>
      </div>

      <div class="ab-proc-arrow">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </div>

      <div class="ab-proc-step">
        <div class="ab-proc-num">02</div>
        <div class="ab-proc-icon">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
        </div>
        <h4>Quality Check</h4>
        <p>Every batch inspected for freshness, purity, and quality before any processing begins.</p>
      </div>

      <div class="ab-proc-arrow">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </div>

      <div class="ab-proc-step">
        <div class="ab-proc-num">03</div>
        <div class="ab-proc-icon">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2z"/><path d="M12 6v6l4 2"/></svg>
        </div>
        <h4>Craft</h4>
        <p>Made in small batches following heritage recipes — sun-dried, hand-ground, slow-cooked, never rushed.</p>
      </div>

      <div class="ab-proc-arrow">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </div>

      <div class="ab-proc-step">
        <div class="ab-proc-num">04</div>
        <div class="ab-proc-icon">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <h4>Packed &amp; Shipped</h4>
        <p>Hygienically packed and delivered pan-India — from our kitchen in Bengaluru to your doorstep.</p>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     CERTIFICATIONS
══════════════════════════════════════════════════ -->
<section class="ab-certs">
  <div class="ab-container">
    <span class="ab-eyebrow" style="display:block;text-align:center;">Trust &amp; Transparency</span>
    <h2 class="ab-h2" style="text-align:center;margin-bottom:8px;">Our Certifications</h2>
    <p class="ab-section-sub">Every product you buy is backed by these guarantees</p>

    <div class="ab-certs-grid">

      <div class="ab-cert-card">
        <div class="ab-cert-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <div class="ab-cert-title">FSSAI Licensed</div>
        <div class="ab-cert-num">11225332000490</div>
        <p class="ab-cert-desc">Certified by the Food Safety and Standards Authority of India</p>
      </div>

      <div class="ab-cert-card ab-cert-featured">
        <div class="ab-cert-badge">Primary</div>
        <div class="ab-cert-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s-8-4.5-8-11.8V4.5l8-2.5 8 2.5v5.7C20 17.5 12 22 12 22z"/><path d="M9 12l2 2 4-4"/></svg>
        </div>
        <div class="ab-cert-title">100% Natural</div>
        <div class="ab-cert-num">Zero Preservatives</div>
        <p class="ab-cert-desc">No artificial colours, flavours, or preservatives in any product</p>
      </div>

      <div class="ab-cert-card">
        <div class="ab-cert-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
        </div>
        <div class="ab-cert-title">Product of India</div>
        <div class="ab-cert-num">Made in Bengaluru</div>
        <p class="ab-cert-desc">Proudly manufactured in Karnataka, supporting local farmers</p>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     CTA
══════════════════════════════════════════════════ -->
<section class="ab-cta">
  <div class="ab-cta-inner">
    <span class="ab-eyebrow" style="color:rgba(245,200,66,.8);">Ready to Experience It?</span>
    <h2 class="ab-cta-title">Taste the Golden Sunshine</h2>
    <p class="ab-cta-desc">Explore our complete range of 26 authentic South Indian food products — crafted for your family's table.</p>
    <div class="ab-cta-btns">
      <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="ab-btn-white">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
        Shop Now
      </a>
      <a href="<?php echo home_url('/contact-us/'); ?>" class="ab-btn-outline">
        Contact Us
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

</main>

<style>
/* ═══════════════════════════════════════════════════
   ABOUT PAGE — DESIGN TOKENS
═══════════════════════════════════════════════════ */
:root {
  --ab-maroon:      #6B2737;
  --ab-maroon-dk:   #4A0E1A;
  --ab-gold:        #C9A055;
  --ab-gold-lt:     #F5C842;
  --ab-cream:       #FFF8F0;
  --ab-border:      #E8DDD0;
  --ab-text:        #3A2A20;
  --ab-muted:       #7A6A60;
}

.ab-page { font-family: 'Inter', 'Segoe UI', sans-serif; color: var(--ab-text); }
.ab-container { max-width: 1140px; margin: 0 auto; padding: 0 24px; }
.ab-eyebrow {
  font-size: .7rem; font-weight: 700; letter-spacing: 3px;
  text-transform: uppercase; color: var(--ab-gold); margin-bottom: 10px; display: block;
}
.ab-h2 {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: clamp(1.9rem, 3.5vw, 2.8rem);
  color: var(--ab-maroon); line-height: 1.22; margin-bottom: 24px;
}
.ab-h2 em { font-style: italic; color: var(--ab-gold); }
.ab-section-sub {
  text-align: center; color: var(--ab-muted); font-style: italic;
  margin-bottom: 52px; font-size: .97rem;
}

/* ── HERO ─────────────────────────────────────── */
.ab-hero {
  position: relative; min-height: 96vh;
  display: flex; align-items: center; justify-content: center;
  text-align: center; overflow: hidden;
}
.ab-hero-bg {
  position: absolute; inset: 0;
  background-size: cover; background-position: center;
  transform: scale(1.05);
  transition: transform 8s ease;
}
.ab-hero:hover .ab-hero-bg { transform: scale(1); }
.ab-hero-overlay {
  position: absolute; inset: 0;
  background: linear-gradient(
    160deg,
    rgba(74,14,26,.88) 0%,
    rgba(107,39,55,.72) 50%,
    rgba(74,14,26,.80) 100%
  );
}
.ab-hero-inner {
  position: relative; z-index: 2;
  max-width: 780px; padding: 0 24px;
}
.ab-hero-pills {
  display: flex; gap: 10px; justify-content: center;
  flex-wrap: wrap; margin-bottom: 32px;
}
.ab-pill {
  display: inline-flex; align-items: center; gap: 6px;
  background: rgba(201,160,85,.18);
  border: 1px solid rgba(201,160,85,.4);
  color: #F5C842; padding: 7px 16px; border-radius: 30px;
  font-size: .72rem; font-weight: 700; letter-spacing: 1.5px;
  text-transform: uppercase; backdrop-filter: blur(8px);
}
.ab-hero-title {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: clamp(2.8rem, 7vw, 5.4rem);
  color: #fff; line-height: 1.1; margin-bottom: 22px;
  font-weight: 700; text-shadow: 0 2px 24px rgba(0,0,0,.35);
}
.ab-hero-title em { font-style: italic; color: #F5C842; }
.ab-hero-sub {
  font-size: 1.1rem; color: rgba(255,255,255,.82);
  max-width: 540px; margin: 0 auto 44px;
  line-height: 1.8; font-style: italic;
}
.ab-hero-scroll {
  display: inline-flex; align-items: center; justify-content: center;
  width: 46px; height: 46px; border-radius: 50%;
  border: 1.5px solid rgba(255,255,255,.35);
  color: rgba(255,255,255,.7);
  animation: ab-bob 2.2s ease-in-out infinite;
  transition: background .25s;
}
.ab-hero-scroll:hover { background: rgba(255,255,255,.12); }
@keyframes ab-bob { 0%,100%{transform:translateY(0)} 50%{transform:translateY(7px)} }

/* ── STATS ────────────────────────────────────── */
.ab-stats {
  background: #fff;
  border-bottom: 1px solid var(--ab-border);
  box-shadow: 0 6px 32px rgba(0,0,0,.06);
}
.ab-stats-grid {
  display: grid; grid-template-columns: repeat(4,1fr);
  max-width: 880px; margin: 0 auto;
}
.ab-stat {
  padding: 36px 20px; text-align: center;
  border-right: 1px solid var(--ab-border);
  transition: background .28s; cursor: default;
}
.ab-stat:last-child { border-right: none; }
.ab-stat:hover { background: var(--ab-cream); }
.ab-stat-num {
  display: block;
  font-family: 'Playfair Display', Georgia, serif;
  font-size: 2.8rem; font-weight: 700;
  color: var(--ab-maroon); line-height: 1; margin-bottom: 8px;
}
.ab-stat-label {
  font-size: .78rem; color: var(--ab-muted);
  font-weight: 600; text-transform: uppercase; letter-spacing: 1px;
}

/* ── STORY ────────────────────────────────────── */
.ab-story { padding: 96px 0; background: #fff; }
.ab-story-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 72px; align-items: center;
}
.ab-story-media { position: relative; }
.ab-story-img {
  width: 100%; aspect-ratio: 4/5; border-radius: 24px;
  background-size: cover; background-position: center;
  box-shadow: 0 24px 72px rgba(74,14,26,.2);
}
.ab-story-float {
  position: absolute; bottom: -24px; right: -24px;
  background: var(--ab-maroon); color: #fff;
  padding: 20px 26px; border-radius: 18px;
  box-shadow: 0 10px 32px rgba(74,14,26,.35);
  text-align: center;
}
.ab-story-kannada {
  display: block; font-size: 1.7rem; font-weight: 700; line-height: 1.1;
}
.ab-story-meaning {
  display: block; font-size: .75rem; color: var(--ab-gold-lt);
  font-style: italic; margin-top: 4px;
}

.ab-story-text { padding-left: 8px; }
.ab-story-text p { color: #5A4A40; line-height: 1.9; margin-bottom: 16px; font-size: .97rem; }
.ab-feature-list { list-style: none; padding: 0; margin: 24px 0 32px; }
.ab-feature-list li {
  display: flex; align-items: center; gap: 12px;
  padding: 10px 0; border-bottom: 1px solid var(--ab-border);
  font-size: .9rem; color: var(--ab-text);
}
.ab-feature-list li:last-child { border-bottom: none; }
.ab-feat-icon {
  display: flex; align-items: center; justify-content: center;
  width: 28px; height: 28px; border-radius: 50%;
  background: rgba(201,160,85,.15); color: var(--ab-maroon); flex-shrink: 0;
}
.ab-btn-primary {
  display: inline-flex; align-items: center; gap: 10px;
  background: var(--ab-maroon); color: #fff !important;
  padding: 14px 30px; border-radius: 30px;
  font-weight: 700; font-size: .92rem;
  transition: all .28s; box-shadow: 0 6px 20px rgba(74,14,26,.3);
  cursor: pointer;
}
.ab-btn-primary:hover {
  background: var(--ab-maroon-dk); transform: translateY(-2px);
  box-shadow: 0 10px 28px rgba(74,14,26,.4);
}

/* ── MISSION & VISION ─────────────────────────── */
.ab-mv { padding: 88px 0; background: var(--ab-cream); }
.ab-mv-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 28px; max-width: 960px; margin: 0 auto;
}
.ab-mv-card {
  background: #fff; border-radius: 22px;
  padding: 48px 40px; position: relative; overflow: hidden;
  border: 1.5px solid var(--ab-border);
  box-shadow: 0 4px 24px rgba(0,0,0,.06);
  transition: transform .3s, box-shadow .3s;
}
.ab-mv-card:hover { transform: translateY(-7px); box-shadow: 0 20px 56px rgba(0,0,0,.11); }
.ab-mv-accent {
  position: absolute; top: 0; left: 0; right: 0; height: 4px; border-radius: 22px 22px 0 0;
}
.ab-mv-accent--mission { background: linear-gradient(90deg, var(--ab-maroon), var(--ab-gold)); }
.ab-mv-accent--vision  { background: linear-gradient(90deg, var(--ab-gold), var(--ab-maroon)); }
.ab-mv-icon {
  width: 60px; height: 60px; border-radius: 16px;
  background: rgba(201,160,85,.12);
  display: flex; align-items: center; justify-content: center;
  color: var(--ab-maroon); margin-bottom: 20px;
}
.ab-mv-title {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: 1.5rem; color: var(--ab-maroon);
  margin-bottom: 12px; font-weight: 700;
}
.ab-mv-divider {
  width: 40px; height: 3px; border-radius: 2px;
  background: var(--ab-gold); margin-bottom: 18px;
}
.ab-mv-card p { color: #5A4A40; line-height: 1.8; font-size: .95rem; margin-bottom: 20px; }
.ab-mv-list { list-style: none; padding: 0; }
.ab-mv-list li {
  padding: 9px 0 9px 24px; position: relative;
  border-bottom: 1px solid var(--ab-border);
  font-size: .87rem; color: #666;
}
.ab-mv-list li:last-child { border-bottom: none; }
.ab-mv-list li::before {
  content: '✓'; position: absolute; left: 0;
  color: var(--ab-gold); font-weight: 700;
}

/* ── VALUES ───────────────────────────────────── */
.ab-values { padding: 88px 0; background: var(--ab-cream); }

.ab-val-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 22px;
  max-width: 1020px;
  margin: 0 auto;
}
.ab-val-card {
  border-radius: 22px;
  overflow: hidden;
  background: #fff;
  border: 1.5px solid rgba(201,160,85,.22);
  box-shadow: 0 4px 22px rgba(74,14,26,.07);
  transition: transform .32s, box-shadow .32s, border-color .32s;
  cursor: default;
}
.ab-val-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 24px 64px rgba(74,14,26,.16);
  border-color: rgba(201,160,85,.55);
}
.ab-val-card-header {
  background: linear-gradient(160deg, #4A0E1A 0%, #6B2737 55%, #C9A055 100%);
  padding: 28px 26px 24px;
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  position: relative;
  overflow: hidden;
}
.ab-val-card-header::before {
  content: '';
  position: absolute; inset: 0;
  background: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Ccircle cx='20' cy='20' r='1.5'/%3E%3C/g%3E%3C/svg%3E");
  pointer-events: none;
}
.ab-val-num {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: 4.2rem; font-weight: 700; line-height: 1;
  color: rgba(255,255,255,.13);
  position: relative; z-index: 1;
  transition: color .3s;
  user-select: none;
}
.ab-val-card:hover .ab-val-num { color: rgba(255,255,255,.22); }
.ab-val-icon-wrap {
  width: 52px; height: 52px; border-radius: 14px;
  background: rgba(255,255,255,.15);
  border: 1px solid rgba(255,255,255,.25);
  display: flex; align-items: center; justify-content: center;
  color: #F5C842;
  position: relative; z-index: 1;
  transition: background .3s, transform .3s;
  flex-shrink: 0;
}
.ab-val-card:hover .ab-val-icon-wrap {
  background: rgba(255,255,255,.22);
  transform: scale(1.08) rotate(-4deg);
}
.ab-val-card-body {
  padding: 22px 26px 28px;
}
.ab-val-tag {
  display: inline-block;
  padding: 4px 12px; border-radius: 20px;
  font-size: .63rem; font-weight: 700; letter-spacing: 1.8px;
  text-transform: uppercase;
  background: rgba(201,160,85,.1);
  border: 1px solid rgba(201,160,85,.28);
  color: var(--ab-maroon);
  margin-bottom: 10px;
  transition: background .25s, color .25s, border-color .25s;
}
.ab-val-card:hover .ab-val-tag {
  background: var(--ab-maroon);
  color: #fff;
  border-color: var(--ab-maroon);
}
.ab-val-card-body h4 {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: 1.15rem; color: var(--ab-maroon);
  font-weight: 700; margin-bottom: 10px; line-height: 1.2;
}
.ab-val-card-body p {
  font-size: .85rem; color: var(--ab-muted);
  line-height: 1.75; margin: 0;
}

/* ── PROCESS ──────────────────────────────────── */
.ab-process {
  padding: 88px 0; position: relative; overflow: hidden;
  background: linear-gradient(135deg, var(--ab-maroon-dk) 0%, var(--ab-maroon) 100%);
}
.ab-process-glow {
  position: absolute; width: 600px; height: 600px; border-radius: 50%;
  background: radial-gradient(circle, rgba(201,160,85,.12) 0%, transparent 70%);
  top: -200px; right: -150px; pointer-events: none;
}
.ab-process-grid {
  display: flex; align-items: center; justify-content: center;
  gap: 0; flex-wrap: wrap; max-width: 1100px; margin: 0 auto;
}
.ab-proc-step {
  flex: 1; min-width: 190px; max-width: 230px;
  background: rgba(255,255,255,.07);
  border: 1px solid rgba(255,255,255,.13);
  border-radius: 18px; padding: 36px 22px; text-align: center; color: #fff;
  backdrop-filter: blur(10px);
  transition: background .28s, transform .28s;
}
.ab-proc-step:hover { background: rgba(255,255,255,.13); transform: translateY(-5px); }
.ab-proc-num {
  font-size: .68rem; font-weight: 700; letter-spacing: 3px;
  color: var(--ab-gold); margin-bottom: 12px;
}
.ab-proc-icon {
  width: 58px; height: 58px; border-radius: 14px;
  background: rgba(201,160,85,.15);
  border: 1px solid rgba(201,160,85,.25);
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto 16px; color: var(--ab-gold-lt);
}
.ab-proc-step h4 {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: 1.05rem; color: #fff; margin-bottom: 10px;
}
.ab-proc-step p { font-size: .8rem; color: rgba(255,255,255,.7); line-height: 1.65; }
.ab-proc-arrow {
  color: rgba(201,160,85,.5); padding: 0 8px; flex-shrink: 0;
}

/* ── CERTIFICATIONS ───────────────────────────── */
.ab-certs { padding: 88px 0; background: var(--ab-cream); }
.ab-certs-grid {
  display: grid; grid-template-columns: repeat(3,1fr);
  gap: 24px; max-width: 940px; margin: 0 auto;
  align-items: start;
}
.ab-cert-card {
  background: #fff; border-radius: 20px; padding: 42px 30px;
  text-align: center; position: relative;
  border: 1.5px solid var(--ab-border);
  box-shadow: 0 4px 20px rgba(0,0,0,.06);
  transition: transform .28s, box-shadow .28s;
}
.ab-cert-card:hover { transform: translateY(-6px); box-shadow: 0 18px 48px rgba(0,0,0,.1); }
.ab-cert-featured {
  background: linear-gradient(160deg, var(--ab-maroon) 0%, var(--ab-maroon-dk) 100%);
  border-color: transparent;
  transform: translateY(-10px);
  box-shadow: 0 20px 56px rgba(74,14,26,.35);
}
.ab-cert-featured:hover { transform: translateY(-16px); }
.ab-cert-badge {
  position: absolute; top: -14px; left: 50%; transform: translateX(-50%);
  background: var(--ab-gold); color: var(--ab-maroon-dk);
  padding: 5px 18px; border-radius: 20px;
  font-size: .68rem; font-weight: 800; letter-spacing: 1.5px; text-transform: uppercase;
}
.ab-cert-icon {
  width: 68px; height: 68px; border-radius: 18px;
  background: rgba(201,160,85,.1);
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto 16px; color: var(--ab-maroon);
}
.ab-cert-featured .ab-cert-icon {
  background: rgba(255,255,255,.15); color: var(--ab-gold-lt);
}
.ab-cert-title {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: 1.15rem; font-weight: 700; color: var(--ab-maroon); margin-bottom: 6px;
}
.ab-cert-featured .ab-cert-title { color: #fff; }
.ab-cert-num {
  font-size: .8rem; font-weight: 700; color: var(--ab-gold); margin-bottom: 12px; letter-spacing: .5px;
}
.ab-cert-featured .ab-cert-num { color: var(--ab-gold-lt); }
.ab-cert-desc { font-size: .82rem; color: var(--ab-muted); line-height: 1.6; }
.ab-cert-featured .ab-cert-desc { color: rgba(255,255,255,.72); }

/* ── CTA ──────────────────────────────────────── */
.ab-cta {
  padding: 96px 24px;
  background: linear-gradient(135deg, var(--ab-maroon-dk) 0%, var(--ab-maroon) 60%, #8B3045 100%);
  text-align: center; position: relative; overflow: hidden;
}
.ab-cta::before {
  content: ''; position: absolute; inset: 0;
  background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.ab-cta-inner { position: relative; z-index: 1; max-width: 680px; margin: 0 auto; }
.ab-cta-title {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: clamp(2.2rem, 5vw, 3.4rem);
  color: #fff; margin: 12px 0 20px; font-weight: 700;
  text-shadow: 0 2px 20px rgba(0,0,0,.25);
}
.ab-cta-desc { color: rgba(255,255,255,.8); font-size: 1rem; line-height: 1.75; margin-bottom: 40px; }
.ab-cta-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }
.ab-btn-white {
  display: inline-flex; align-items: center; gap: 10px;
  background: #fff; color: var(--ab-maroon);
  padding: 15px 34px; border-radius: 30px;
  font-weight: 700; font-size: .95rem;
  transition: all .28s; box-shadow: 0 8px 28px rgba(0,0,0,.2);
  cursor: pointer;
}
.ab-btn-white:hover { background: var(--ab-gold-lt); transform: translateY(-2px); box-shadow: 0 12px 36px rgba(0,0,0,.28); }
.ab-btn-outline {
  display: inline-flex; align-items: center; gap: 8px;
  border: 2px solid #C9A055 !important; color: #C9A055 !important;
  background: rgba(201,160,85,.12);
  padding: 14px 32px; border-radius: 30px;
  font-weight: 700; font-size: .95rem;
  transition: all .28s; cursor: pointer;
}
.ab-btn-outline:hover { background: rgba(201,160,85,.22) !important; border-color: #F5C842 !important; color: #F5C842 !important; transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,.2); }

/* ── RESPONSIVE ────────────────────────────────── */
@media (max-width: 960px) {
  .ab-story-grid { grid-template-columns: 1fr; gap: 48px; }
  .ab-story-img { aspect-ratio: 16/9; }
  .ab-story-float { bottom: -16px; right: 16px; }
  .ab-mv-grid { grid-template-columns: 1fr; }
  .ab-val-grid { grid-template-columns: repeat(2, 1fr); }
  .ab-certs-grid { grid-template-columns: 1fr; max-width: 420px; }
  .ab-cert-featured { transform: none; }
  .ab-cert-featured:hover { transform: translateY(-6px); }
  .ab-stats-grid { grid-template-columns: repeat(2,1fr); }
  .ab-stat:nth-child(2) { border-right: none; }
  .ab-stat:nth-child(3) { border-top: 1px solid var(--ab-border); }
  .ab-proc-arrow { display: none; }
  .ab-process-grid { gap: 16px; }
  .ab-proc-step { max-width: 100%; min-width: 150px; }
  .ab-story { padding: 72px 0; }
}
@media (max-width: 640px) {
  .ab-hero { min-height: 88vh; }
  .ab-hero-pills { gap: 7px; }
  .ab-pill { font-size: .65rem; padding: 6px 12px; }
  .ab-mv-card { padding: 32px 24px; }
  .ab-story-float { position: relative; bottom: auto; right: auto; margin-top: 16px; display: inline-block; }
  .ab-story-text { padding-left: 0; }
  .ab-mv-section, .ab-values, .ab-process, .ab-certs { padding: 60px 0; }
  .ab-val-grid { grid-template-columns: 1fr; max-width: 400px; }
  .ab-val-card:hover { transform: translateY(-5px); }
}
@media (prefers-reduced-motion: reduce) {
  .ab-hero-bg, .ab-hero-scroll { animation: none !important; transition: none !important; }
}
</style>

<script>
(function(){
  /* Smooth scroll for hero scroll button */
  var scrollBtn = document.querySelector('.ab-hero-scroll');
  if (scrollBtn) {
    scrollBtn.addEventListener('click', function(e){
      e.preventDefault();
      var target = document.getElementById('ab-story');
      if (target) target.scrollIntoView({ behavior: 'smooth' });
    });
  }

  /* Animated counters */
  var stats = document.querySelectorAll('.ab-stat');
  if (!stats.length || !('IntersectionObserver' in window)) return;

  var animated = false;
  var observer = new IntersectionObserver(function(entries){
    if (animated) return;
    var visible = entries.some(function(e){ return e.isIntersecting; });
    if (!visible) return;
    animated = true;
    observer.disconnect();

    stats.forEach(function(stat){
      var target = parseInt(stat.getAttribute('data-target'), 10);
      var suffix = stat.getAttribute('data-suffix') || '';
      var el = stat.querySelector('.ab-stat-num');
      if (!el || isNaN(target)) return;
      var duration = 1400;
      var start = performance.now();
      function tick(now){
        var elapsed = now - start;
        var progress = Math.min(elapsed / duration, 1);
        var ease = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.round(ease * target) + suffix;
        if (progress < 1) requestAnimationFrame(tick);
      }
      requestAnimationFrame(tick);
    });
  }, { threshold: 0.4 });

  observer.observe(stats[0]);
})();
</script>

<?php get_footer(); ?>
