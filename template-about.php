<?php
/*
 * Template Name: About Us
 */
get_header();
$img = get_stylesheet_directory_uri() . '/assets/images/';
?>

<main class="about-page">

<!-- ════════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════ -->
<section class="about-hero">
  <div class="about-hero-overlay"></div>
  <div class="container about-hero-inner">
    <span class="about-eyebrow">Our Story</span>
    <h1 class="about-hero-title">Born from the Heart<br>of Karnataka</h1>
    <p class="about-hero-sub">From the fragrant hills of Coorg to your kitchen table — authentic, pure, and made with love.</p>
    <div class="about-hero-scroll">
      <span>Scroll to explore</span>
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12l7 7 7-7"/></svg>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════
     STATS STRIP
════════════════════════════════════════════════════ -->
<div class="about-stats-strip">
  <div class="container">
    <div class="about-stats-grid">
      <div class="about-stat">
        <span class="stat-number">26</span>
        <span class="stat-label">Products</span>
      </div>
      <div class="about-stat">
        <span class="stat-number">9</span>
        <span class="stat-label">Categories</span>
      </div>
      <div class="about-stat">
        <span class="stat-number">100%</span>
        <span class="stat-label">Natural Ingredients</span>
      </div>
      <div class="about-stat">
        <span class="stat-number">0</span>
        <span class="stat-label">Preservatives Used</span>
      </div>
    </div>
  </div>
</div>

<!-- ════════════════════════════════════════════════════
     OUR STORY — SPLIT LAYOUT
════════════════════════════════════════════════════ -->
<section class="about-story-section">
  <div class="container">
    <div class="about-story-grid">

      <!-- Image side -->
      <div class="about-story-img-wrap">
        <div class="about-story-img" style="background-image:url('<?php echo $img; ?>about-story.jpg');"></div>
        <div class="about-story-badge">
          <span class="badge-icon">🌿</span>
          <span class="badge-text">Crafted with Heritage</span>
        </div>
      </div>

      <!-- Text side -->
      <div class="about-story-text">
        <span class="about-label">Who We Are</span>
        <h2 class="about-h2">What Does <em>Hombisilu</em> Mean?</h2>
        <div class="about-kannada-block">
          <span class="kannada-word">ಹೊಂಬಿಸಿಲು</span>
          <span class="kannada-meaning">"Golden Sunshine" in Kannada</span>
        </div>
        <p>Hombisilu was born from a deep-rooted love for South Indian food — not just as sustenance, but as culture, memory, and identity. The name reflects the warmth, nourishment, and brightness we aim to bring into every household.</p>
        <p>We began with a simple idea: to offer authentic South Indian pantry essentials that urban families could trust — products that taste like home, carry the goodness of tradition, and uphold the integrity of natural ingredients.</p>
        <p>Based in Bengaluru, Karnataka, we collaborate with skilled artisans, local farmers, and heritage recipe custodians to craft foods that honour South India's rich culinary legacy.</p>
        <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="about-story-cta">
          Explore Our Products
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════
     MISSION & VISION
════════════════════════════════════════════════════ -->
<section class="about-mv-section">
  <div class="container">
    <div class="about-mv-grid">

      <div class="about-mv-card mission">
        <div class="mv-icon">🎯</div>
        <h3 class="mv-title">Our Mission</h3>
        <div class="mv-divider"></div>
        <p class="mv-text">To bring authentic, nourishing, and heritage-inspired South Indian foods to every home — without compromise on purity, quality, or tradition.</p>
        <ul class="mv-list">
          <li>Zero artificial preservatives or colours</li>
          <li>Heritage recipes, modern hygiene standards</li>
          <li>Affordable premium quality for all families</li>
        </ul>
      </div>

      <div class="about-mv-card vision">
        <div class="mv-icon">🔭</div>
        <h3 class="mv-title">Our Vision</h3>
        <div class="mv-divider"></div>
        <p class="mv-text">To become India's most trusted name in traditional South Indian food products — bridging generations through flavour and purpose.</p>
        <ul class="mv-list">
          <li>Pan-India presence with local roots</li>
          <li>Preserving culinary traditions for generations</li>
          <li>Building lasting trust with every product</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════
     OUR VALUES
════════════════════════════════════════════════════ -->
<section class="about-values-section">
  <div class="container">
    <span class="about-label" style="display:block;text-align:center;">What We Stand For</span>
    <h2 class="about-h2" style="text-align:center;margin-bottom:12px;">Our Core Values</h2>
    <p style="text-align:center;color:#7A7A7A;font-style:italic;margin-bottom:52px;">The principles that guide every product we make</p>

    <div class="about-values-grid">
      <?php
      $values = [
        ['icon'=>'🌿','title'=>'Authenticity',  'desc'=>'Every recipe honours its origins, made the way it has always been made — no shortcuts, no substitutes.'],
        ['icon'=>'✨','title'=>'Purity',         'desc'=>'No artificial additives, ever. What you see on the label is exactly what goes into the jar.'],
        ['icon'=>'🤝','title'=>'Integrity',      'desc'=>'Transparent ingredients, honest sourcing, and fair relationships with our farming community.'],
        ['icon'=>'💪','title'=>'Nourishment',    'desc'=>'Every product is designed to support your health and wellbeing, not just your palate.'],
        ['icon'=>'📜','title'=>'Heritage',       'desc'=>'We are guardians of South India\'s culinary legacy, one recipe at a time.'],
        ['icon'=>'🌾','title'=>'Community',      'desc'=>'Supporting local farmers, artisans, and food makers who keep these traditions alive.'],
      ];
      foreach ($values as $v) :
      ?>
      <div class="about-value-card">
        <div class="value-icon-wrap"><span><?php echo $v['icon']; ?></span></div>
        <h4 class="value-title"><?php echo $v['title']; ?></h4>
        <p class="value-desc"><?php echo $v['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════
     HOW WE MAKE IT — PROCESS
════════════════════════════════════════════════════ -->
<section class="about-process-section">
  <div class="container">
    <span class="about-label" style="display:block;text-align:center;color:rgba(255,255,255,.6);">Our Process</span>
    <h2 class="about-h2" style="text-align:center;color:#fff;margin-bottom:12px;">From Source to Your Table</h2>
    <p style="text-align:center;color:rgba(255,255,255,.75);font-style:italic;margin-bottom:52px;">Every product goes through four carefully controlled steps</p>

    <div class="about-process-grid">
      <div class="process-step">
        <div class="process-num">01</div>
        <div class="process-icon">🌾</div>
        <h4>Source</h4>
        <p>We hand-pick ingredients from trusted local farmers and heritage suppliers across Karnataka and South India.</p>
      </div>
      <div class="process-arrow">→</div>
      <div class="process-step">
        <div class="process-num">02</div>
        <div class="process-icon">🔬</div>
        <h4>Quality Check</h4>
        <p>Every batch is inspected for freshness, purity, and quality before any processing begins.</p>
      </div>
      <div class="process-arrow">→</div>
      <div class="process-step">
        <div class="process-num">03</div>
        <div class="process-icon">👩‍🍳</div>
        <h4>Craft</h4>
        <p>Made in small batches following heritage recipes — sun-dried, hand-ground, slow-cooked, never rushed.</p>
      </div>
      <div class="process-arrow">→</div>
      <div class="process-step">
        <div class="process-num">04</div>
        <div class="process-icon">📦</div>
        <h4>Packed & Shipped</h4>
        <p>Hygienically packed and delivered pan-India — from our kitchen in Bengaluru to your doorstep.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════
     CERTIFICATIONS
════════════════════════════════════════════════════ -->
<section class="about-certs-section">
  <div class="container">
    <span class="about-label" style="display:block;text-align:center;">Trust &amp; Transparency</span>
    <h2 class="about-h2" style="text-align:center;margin-bottom:12px;">Our Certifications</h2>
    <p style="text-align:center;color:#7A7A7A;font-style:italic;margin-bottom:48px;">Every product you buy is backed by these guarantees</p>

    <div class="about-certs-grid">
      <div class="cert-card">
        <div class="cert-icon">🏆</div>
        <div class="cert-title">FSSAI Licensed</div>
        <div class="cert-number">11225332000490</div>
        <div class="cert-desc">Certified by the Food Safety and Standards Authority of India</div>
      </div>
      <div class="cert-card featured">
        <div class="cert-badge">Primary</div>
        <div class="cert-icon">🌿</div>
        <div class="cert-title">100% Natural</div>
        <div class="cert-number">Zero Preservatives</div>
        <div class="cert-desc">No artificial colours, flavours, or preservatives in any product</div>
      </div>
      <div class="cert-card">
        <div class="cert-icon">🇮🇳</div>
        <div class="cert-title">Product of India</div>
        <div class="cert-number">Made in Bengaluru</div>
        <div class="cert-desc">Proudly manufactured in Karnataka, supporting local farmers</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════
     CTA
════════════════════════════════════════════════════ -->
<section class="cta-section">
  <div class="cta-inner">
    <span class="eyebrow" style="color:rgba(255,255,255,.6);">Ready to Experience It?</span>
    <h2 class="cta-title">Taste the Golden Sunshine</h2>
    <p class="cta-desc">Explore our complete range of 26 authentic South Indian food products — crafted for your family's table.</p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn-white">🛍️ Shop Now</a>
      <a href="<?php echo home_url('/contact-us'); ?>" style="display:inline-block;border:2px solid rgba(255,255,255,.5);color:#fff;padding:15px 36px;border-radius:24px;font-weight:700;font-size:.97rem;transition:all .28s;">Contact Us</a>
    </div>
  </div>
</section>

</main>

<style>
/* ── About Page Styles ─────────────────────────────── */
.about-page { font-family:var(--font-sans,Inter,sans-serif); }

/* Hero */
.about-hero {
  min-height: 92vh;
  background:
    linear-gradient(160deg, rgba(5,20,10,.78) 0%, rgba(20,68,36,.65) 60%, rgba(30,80,48,.52) 100%),
    url('<?php echo $img; ?>about-hero.jpg') center/cover no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.about-hero-overlay {
  position:absolute;inset:0;
  background: radial-gradient(ellipse at center bottom, rgba(212,160,23,.12) 0%, transparent 65%);
}
.about-hero-inner { position:relative; z-index:1; max-width:760px; padding:0 24px; }
.about-eyebrow {
  display:inline-block;
  background:rgba(212,160,23,.25);
  border:1px solid rgba(212,160,23,.4);
  color:#F5C842;
  padding:7px 22px;
  border-radius:30px;
  font-size:.72rem;
  font-weight:700;
  letter-spacing:3px;
  text-transform:uppercase;
  margin-bottom:28px;
}
.about-hero-title {
  font-family:var(--font-serif,'Playfair Display',Georgia,serif);
  font-size:clamp(2.8rem,7vw,5.2rem);
  color:#fff;
  line-height:1.1;
  margin-bottom:22px;
  font-weight:700;
  text-shadow:0 2px 20px rgba(0,0,0,.3);
}
.about-hero-sub {
  font-size:1.1rem;
  color:rgba(255,255,255,.82);
  max-width:520px;
  margin:0 auto 40px;
  line-height:1.75;
  font-style:italic;
}
.about-hero-scroll {
  display:inline-flex;
  align-items:center;
  gap:8px;
  color:rgba(255,255,255,.55);
  font-size:.8rem;
  letter-spacing:2px;
  text-transform:uppercase;
  animation: bob 2s ease-in-out infinite;
}
@keyframes bob { 0%,100%{transform:translateY(0)} 50%{transform:translateY(6px)} }

/* Stats strip */
.about-stats-strip {
  background:#fff;
  border-bottom:1px solid var(--border,#E8DDD0);
  box-shadow:0 4px 24px rgba(0,0,0,.06);
}
.about-stats-grid {
  display:grid;
  grid-template-columns:repeat(4,1fr);
  max-width:900px;
  margin:0 auto;
}
.about-stat {
  padding:32px 20px;
  text-align:center;
  border-right:1px solid var(--border,#E8DDD0);
  transition:background .28s;
}
.about-stat:last-child { border-right:none; }
.about-stat:hover { background:var(--light,#FFF8F0); }
.stat-number {
  display:block;
  font-family:var(--font-serif,'Playfair Display',Georgia,serif);
  font-size:2.6rem;
  font-weight:700;
  color:var(--primary,#8B4513);
  line-height:1;
  margin-bottom:8px;
}
.stat-label {
  font-size:.8rem;
  color:var(--muted,#7A7A7A);
  font-weight:600;
  text-transform:uppercase;
  letter-spacing:1px;
}

/* Story section */
.about-story-section { padding:88px 24px; background:#fff; }
.about-story-grid {
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:64px;
  align-items:center;
  max-width:1100px;
  margin:0 auto;
}
.about-story-img-wrap { position:relative; }
.about-story-img {
  width:100%;
  aspect-ratio:4/5;
  border-radius:20px;
  background-size:cover;
  background-position:center;
  box-shadow:0 20px 60px rgba(0,0,0,.18);
}
.about-story-badge {
  position:absolute;
  bottom:-20px; right:-20px;
  background:var(--primary,#8B4513);
  color:#fff;
  padding:16px 22px;
  border-radius:14px;
  display:flex;
  align-items:center;
  gap:10px;
  box-shadow:0 8px 24px rgba(46,107,62,.35);
}
.badge-icon { font-size:1.4rem; }
.badge-text { font-size:.82rem; font-weight:700; line-height:1.3; }

.about-label {
  font-size:.72rem;
  font-weight:700;
  letter-spacing:3px;
  text-transform:uppercase;
  color:var(--secondary,#D4A017);
  margin-bottom:10px;
  display:block;
}
.about-h2 {
  font-family:var(--font-serif,'Playfair Display',Georgia,serif);
  font-size:clamp(1.8rem,3.5vw,2.8rem);
  color:var(--primary,#8B4513);
  line-height:1.25;
  margin-bottom:24px;
}
.about-h2 em { font-style:italic; color:var(--secondary,#D4A017); }
.about-kannada-block {
  display:inline-flex;
  align-items:center;
  gap:14px;
  background:var(--light,#FFF8F0);
  border:1.5px solid var(--border,#E8DDD0);
  border-left:4px solid var(--secondary,#D4A017);
  padding:14px 20px;
  border-radius:10px;
  margin-bottom:24px;
}
.kannada-word {
  font-size:1.5rem;
  color:var(--primary,#8B4513);
  font-weight:700;
}
.kannada-meaning { font-size:.82rem; color:var(--muted,#7A7A7A); font-style:italic; }
.about-story-text p {
  color:#555;
  line-height:1.85;
  margin-bottom:16px;
  font-size:.97rem;
}
.about-story-cta {
  display:inline-flex;
  align-items:center;
  gap:8px;
  margin-top:12px;
  background:var(--primary,#8B4513);
  color:#fff;
  padding:13px 28px;
  border-radius:30px;
  font-weight:700;
  font-size:.9rem;
  transition:all .28s;
  box-shadow:0 4px 16px rgba(46,107,62,.3);
}
.about-story-cta:hover { background:var(--secondary,#D4A017); transform:translateY(-2px); }

/* Mission & Vision */
.about-mv-section { padding:80px 24px; background:var(--light,#FFF8F0); }
.about-mv-grid {
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:28px;
  max-width:960px;
  margin:0 auto;
}
.about-mv-card {
  background:#fff;
  border-radius:20px;
  padding:44px 38px;
  box-shadow:0 4px 24px rgba(0,0,0,.07);
  border:1.5px solid var(--border,#E8DDD0);
  position:relative;
  overflow:hidden;
  transition:transform .28s, box-shadow .28s;
}
.about-mv-card::before {
  content:'';
  position:absolute;
  top:0; left:0; right:0;
  height:4px;
}
.about-mv-card.mission::before { background:linear-gradient(90deg,#2E6B3E,#D4A017); }
.about-mv-card.vision::before  { background:linear-gradient(90deg,#D4A017,#2E6B3E); }
.about-mv-card:hover { transform:translateY(-6px); box-shadow:0 16px 48px rgba(0,0,0,.12); }
.mv-icon { font-size:2.4rem; margin-bottom:18px; }
.mv-title {
  font-family:var(--font-serif,'Playfair Display',Georgia,serif);
  font-size:1.5rem;
  color:var(--primary,#8B4513);
  margin-bottom:14px;
  font-weight:700;
}
.mv-divider {
  width:40px; height:3px;
  background:var(--secondary,#D4A017);
  border-radius:2px;
  margin-bottom:18px;
}
.mv-text { color:#555; line-height:1.8; font-size:.95rem; margin-bottom:20px; }
.mv-list { list-style:none; padding:0; }
.mv-list li {
  padding:8px 0;
  border-bottom:1px solid var(--border,#E8DDD0);
  font-size:.88rem;
  color:#666;
  padding-left:22px;
  position:relative;
}
.mv-list li:last-child { border-bottom:none; }
.mv-list li::before {
  content:'✓';
  position:absolute;
  left:0;
  color:var(--secondary,#D4A017);
  font-weight:700;
}

/* Values */
.about-values-section { padding:80px 24px; background:#fff; }
.about-values-grid {
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:22px;
  max-width:1100px;
  margin:0 auto;
}
.about-value-card {
  background:var(--light,#FFF8F0);
  border:1.5px solid var(--border,#E8DDD0);
  border-radius:16px;
  padding:32px 26px;
  text-align:center;
  transition:transform .28s, box-shadow .28s, background .28s, border-color .28s;
}
.about-value-card:hover {
  transform:translateY(-8px);
  box-shadow:0 16px 40px rgba(0,0,0,.1);
  background:#fff;
  border-color:var(--secondary,#D4A017);
}
.value-icon-wrap {
  width:64px; height:64px;
  background:#fff;
  border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  margin:0 auto 18px;
  font-size:1.8rem;
  box-shadow:0 4px 16px rgba(0,0,0,.08);
  border:1.5px solid var(--border,#E8DDD0);
  transition:box-shadow .28s;
}
.about-value-card:hover .value-icon-wrap { box-shadow:0 6px 20px rgba(46,107,62,.2); border-color:var(--secondary,#D4A017); }
.value-title {
  font-family:var(--font-serif,'Playfair Display',Georgia,serif);
  font-size:1.1rem;
  color:var(--primary,#8B4513);
  margin-bottom:10px;
  font-weight:700;
}
.value-desc { font-size:.84rem; color:var(--muted,#7A7A7A); line-height:1.65; }

/* Process */
.about-process-section {
  padding:80px 24px;
  background:linear-gradient(135deg,#2E6B3E 0%,#1E5030 100%);
  position:relative;
  overflow:hidden;
}
.about-process-section::before {
  content:'';
  position:absolute;
  width:500px; height:500px;
  border-radius:50%;
  background:rgba(255,255,255,.04);
  top:-200px; right:-100px;
}
.about-process-grid {
  display:flex;
  align-items:center;
  justify-content:center;
  gap:0;
  max-width:1100px;
  margin:0 auto;
  flex-wrap:wrap;
}
.process-step {
  flex:1;
  min-width:180px;
  max-width:220px;
  background:rgba(255,255,255,.08);
  border:1px solid rgba(255,255,255,.14);
  border-radius:16px;
  padding:32px 22px;
  text-align:center;
  color:#fff;
  backdrop-filter:blur(8px);
  transition:background .28s, transform .28s;
}
.process-step:hover { background:rgba(255,255,255,.13); transform:translateY(-4px); }
.process-num {
  font-size:.7rem;
  font-weight:700;
  letter-spacing:3px;
  color:var(--secondary,#D4A017);
  margin-bottom:10px;
}
.process-icon { font-size:2rem; margin-bottom:12px; display:block; }
.process-step h4 {
  font-family:var(--font-serif,'Playfair Display',Georgia,serif);
  font-size:1.05rem;
  margin-bottom:10px;
  color:#fff;
}
.process-step p { font-size:.8rem; color:rgba(255,255,255,.72); line-height:1.6; }
.process-arrow {
  font-size:1.5rem;
  color:rgba(212,160,23,.6);
  padding:0 6px;
  flex-shrink:0;
  align-self:center;
}

/* Certifications */
.about-certs-section { padding:80px 24px; background:var(--light,#FFF8F0); }
.about-certs-grid {
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:24px;
  max-width:900px;
  margin:0 auto;
}
.cert-card {
  background:#fff;
  border-radius:18px;
  padding:38px 28px;
  text-align:center;
  box-shadow:0 4px 20px rgba(0,0,0,.07);
  border:1.5px solid var(--border,#E8DDD0);
  position:relative;
  transition:transform .28s, box-shadow .28s;
}
.cert-card:hover { transform:translateY(-6px); box-shadow:0 16px 40px rgba(0,0,0,.11); }
.cert-card.featured {
  background:linear-gradient(160deg,var(--primary,#2E6B3E),#1E5030);
  color:#fff;
  border-color:transparent;
  transform:translateY(-8px);
  box-shadow:0 16px 48px rgba(46,107,62,.35);
}
.cert-card.featured:hover { transform:translateY(-14px); }
.cert-badge {
  position:absolute;
  top:-12px; left:50%; transform:translateX(-50%);
  background:var(--secondary,#D4A017);
  color:#fff;
  padding:4px 16px;
  border-radius:20px;
  font-size:.7rem;
  font-weight:700;
  letter-spacing:1px;
  text-transform:uppercase;
}
.cert-icon { font-size:2.4rem; margin-bottom:14px; display:block; }
.cert-title {
  font-family:var(--font-serif,'Playfair Display',Georgia,serif);
  font-size:1.15rem;
  font-weight:700;
  color:var(--primary,#8B4513);
  margin-bottom:4px;
}
.cert-card.featured .cert-title { color:#fff; }
.cert-number {
  font-size:.8rem;
  font-weight:700;
  color:var(--secondary,#D4A017);
  margin-bottom:10px;
  letter-spacing:.5px;
}
.cert-card.featured .cert-number { color:#F5C842; }
.cert-desc { font-size:.82rem; color:var(--muted,#7A7A7A); line-height:1.6; }
.cert-card.featured .cert-desc { color:rgba(255,255,255,.75); }

/* ── RESPONSIVE ───────────────────────────────────── */
@media (max-width:900px) {
  .about-story-grid { grid-template-columns:1fr; gap:40px; }
  .about-story-img { aspect-ratio:16/9; }
  .about-story-badge { bottom:-14px; right:14px; }
  .about-mv-grid { grid-template-columns:1fr; }
  .about-values-grid { grid-template-columns:repeat(2,1fr); }
  .about-certs-grid { grid-template-columns:1fr; max-width:400px; }
  .cert-card.featured { transform:none; }
  .about-stats-grid { grid-template-columns:repeat(2,1fr); }
  .about-stat:nth-child(2) { border-right:none; }
  .about-stat:nth-child(3) { border-top:1px solid var(--border,#E8DDD0); }
  .process-arrow { display:none; }
  .about-process-grid { gap:14px; }
  .process-step { max-width:100%; min-width:140px; }
}
@media (max-width:600px) {
  .about-hero { min-height:85vh; }
  .about-hero-title { font-size:clamp(2rem,8vw,3.2rem); }
  .about-values-grid { grid-template-columns:1fr; }
  .about-stats-grid { grid-template-columns:repeat(2,1fr); }
  .about-mv-card { padding:30px 22px; }
  .about-story-section { padding:56px 20px; }
  .about-process-section, .about-values-section,
  .about-certs-section, .about-mv-section { padding:56px 20px; }
}
</style>

<?php get_footer(); ?>
