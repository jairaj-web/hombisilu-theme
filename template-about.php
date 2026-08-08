<?php
/*
 * Template Name: About Us
 */
get_header();
$img = get_stylesheet_directory_uri() . '/assets/images/';
$shop_url = hb_shop_url();
?>

<main class="ab-about">

<!-- ══════════════════════════════════════════════════
     PAGE HEAD
══════════════════════════════════════════════════ -->
<section class="ds-pagehead ab-pagehead">
  <img class="ab-pagehead-img" src="<?php echo esc_url( $img . 'about-hero.jpg' ); ?>" alt="" loading="eager" decoding="async">
  <div class="ds-wrap">

    <nav class="ds-crumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <?php echo hb_icon( 'chev', 12 ); ?>
      <span aria-current="page">About Us</span>
    </nav>

    <div class="ab-pagehead-pills">
      <span class="ds-chip ds-chip--gold"><?php echo hb_icon( 'shield', 13 ); ?> FSSAI Certified</span>
      <span class="ds-chip ds-chip--gold"><?php echo hb_icon( 'leaf', 13 ); ?> 100% Natural</span>
      <span class="ds-chip ds-chip--gold"><?php echo hb_icon( 'pin', 13 ); ?> Made in Karnataka</span>
    </div>

    <span class="ds-eyebrow">Our Story</span>
    <h1 class="ds-pagehead-title">Born from the Heart<br>of <em>Karnataka</em></h1>
    <p class="ds-sub">From fragrant spice fields to your kitchen table — authentic, pure, and crafted with generational love.</p>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     STATS
══════════════════════════════════════════════════ -->
<section class="ds-section ds-section--tight ds-section--white">
  <div class="ds-wrap ds-wrap--narrow">
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
</section>

<!-- ══════════════════════════════════════════════════
     OUR STORY
══════════════════════════════════════════════════ -->
<section class="ds-section ds-section--white">
  <div class="ds-wrap">
    <div class="ds-story">

      <div class="ds-story-figure">
        <img src="<?php echo esc_url( $img . 'about-story.jpg' ); ?>" alt="Hombisilu heritage food being prepared by hand" loading="lazy" decoding="async">
        <div class="ds-story-tag">
          <strong>ಹೊಂಬಿಸಿಲು</strong>
          <span>"Golden Sunshine"</span>
        </div>
      </div>

      <div>
        <span class="ds-eyebrow">Who We Are</span>
        <h2 class="ds-title">What Does <em>Hombisilu</em> Mean?</h2>

        <div class="ds-prose">
          <p>Hombisilu was born from a deep-rooted love for South Indian food — not just as sustenance, but as culture, memory, and identity. The name reflects the warmth, nourishment, and brightness we bring to every household.</p>
          <p>We began with a simple idea: authentic South Indian pantry essentials that urban families could trust — products that taste like home, carry the goodness of tradition, and uphold the integrity of natural ingredients.</p>
          <p>Based in Bengaluru, Karnataka, we collaborate with skilled artisans, local farmers, and heritage recipe custodians to honour South India's rich culinary legacy.</p>
        </div>

        <ul class="ab-feature-list">
          <li>
            <span class="ab-feat-icon"><?php echo hb_icon( 'check', 16 ); ?></span>
            Zero artificial preservatives or colours
          </li>
          <li>
            <span class="ab-feat-icon"><?php echo hb_icon( 'check', 16 ); ?></span>
            Heritage recipes with modern hygiene standards
          </li>
          <li>
            <span class="ab-feat-icon"><?php echo hb_icon( 'check', 16 ); ?></span>
            FSSAI License: 11225332000490
          </li>
          <li>
            <span class="ab-feat-icon"><?php echo hb_icon( 'check', 16 ); ?></span>
            Pan-India delivery from Bengaluru
          </li>
        </ul>

        <a href="<?php echo esc_url( $shop_url ); ?>" class="ds-btn ds-btn--primary">
          Explore Our Products
          <?php echo hb_icon( 'arrow', 16 ); ?>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     MISSION & VISION
══════════════════════════════════════════════════ -->
<section class="ds-section ds-section--cream">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">What Drives Us</span>
      <h2 class="ds-title">Mission &amp; Vision</h2>
    </div>

    <div class="ds-grid ds-grid--2">

      <div class="ds-card ab-mv-card">
        <div class="ab-mv-icon"><?php echo hb_icon( 'sprout', 28 ); ?></div>
        <h3 class="ab-mv-title">Our Mission</h3>
        <p>To bring authentic, nourishing, and heritage-inspired South Indian foods to every home — without compromise on purity, quality, or tradition.</p>
        <ul class="ab-mv-list">
          <li>Zero artificial preservatives or colours</li>
          <li>Heritage recipes, modern hygiene standards</li>
          <li>Affordable premium quality for all families</li>
        </ul>
      </div>

      <div class="ds-card ab-mv-card">
        <div class="ab-mv-icon"><?php echo hb_icon( 'book', 28 ); ?></div>
        <h3 class="ab-mv-title">Our Vision</h3>
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
<section class="ds-section ds-section--white">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">What We Stand For</span>
      <h2 class="ds-title">Our Core Values</h2>
      <p class="ds-sub">The principles that guide every product we make</p>
    </div>

    <div class="ds-grid ds-grid--3">

      <div class="ab-val-card">
        <span class="ab-val-num">01</span>
        <div class="ab-val-icon"><?php echo hb_icon( 'shield', 26 ); ?></div>
        <h3>Authenticity</h3>
        <p>Every recipe honours its origins — no shortcuts, no substitutes, ever.</p>
        <span class="ab-val-tag">Heritage</span>
      </div>

      <div class="ab-val-card">
        <span class="ab-val-num">02</span>
        <div class="ab-val-icon"><?php echo hb_icon( 'drop', 26 ); ?></div>
        <h3>Purity</h3>
        <p>No artificial additives — label honesty guaranteed in every jar.</p>
        <span class="ab-val-tag">Natural</span>
      </div>

      <div class="ab-val-card">
        <span class="ab-val-num">03</span>
        <div class="ab-val-icon"><?php echo hb_icon( 'check', 26 ); ?></div>
        <h3>Integrity</h3>
        <p>Transparent sourcing, fair relationships with our farming community.</p>
        <span class="ab-val-tag">Honest</span>
      </div>

      <div class="ab-val-card">
        <span class="ab-val-num">04</span>
        <div class="ab-val-icon"><?php echo hb_icon( 'heart', 26 ); ?></div>
        <h3>Nourishment</h3>
        <p>Products that nourish your health and wellbeing, not just taste.</p>
        <span class="ab-val-tag">Wellness</span>
      </div>

      <div class="ab-val-card">
        <span class="ab-val-num">05</span>
        <div class="ab-val-icon"><?php echo hb_icon( 'book', 26 ); ?></div>
        <h3>Heritage</h3>
        <p>Guardians of South India's rich culinary legacy, recipe by recipe.</p>
        <span class="ab-val-tag">Legacy</span>
      </div>

      <div class="ab-val-card">
        <span class="ab-val-num">06</span>
        <div class="ab-val-icon"><?php echo hb_icon( 'user', 26 ); ?></div>
        <h3>Community</h3>
        <p>Supporting local farmers and artisans who keep traditions alive.</p>
        <span class="ab-val-tag">Local</span>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     PROCESS
══════════════════════════════════════════════════ -->
<section class="ds-section ds-section--dark">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Our Process</span>
      <h2 class="ds-title">From Source to Your Table</h2>
      <p class="ds-sub">Every product goes through four carefully controlled steps</p>
    </div>

    <div class="ab-process-grid">

      <div class="ab-proc-step">
        <div class="ab-proc-num">01</div>
        <div class="ab-proc-icon"><?php echo hb_icon( 'sprout', 26 ); ?></div>
        <h3>Source</h3>
        <p>Hand-picked ingredients from trusted local farmers and heritage suppliers across Karnataka and South India.</p>
      </div>

      <div class="ab-proc-step">
        <div class="ab-proc-num">02</div>
        <div class="ab-proc-icon"><?php echo hb_icon( 'check', 26 ); ?></div>
        <h3>Quality Check</h3>
        <p>Every batch inspected for freshness, purity, and quality before any processing begins.</p>
      </div>

      <div class="ab-proc-step">
        <div class="ab-proc-num">03</div>
        <div class="ab-proc-icon"><?php echo hb_icon( 'clock', 26 ); ?></div>
        <h3>Craft</h3>
        <p>Made in small batches following heritage recipes — sun-dried, hand-ground, slow-cooked, never rushed.</p>
      </div>

      <div class="ab-proc-step">
        <div class="ab-proc-num">04</div>
        <div class="ab-proc-icon"><?php echo hb_icon( 'truck', 26 ); ?></div>
        <h3>Packed &amp; Shipped</h3>
        <p>Hygienically packed and delivered pan-India — from our kitchen in Bengaluru to your doorstep.</p>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     CERTIFICATIONS
══════════════════════════════════════════════════ -->
<section class="ds-section ds-section--cream">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Trust &amp; Transparency</span>
      <h2 class="ds-title">Our Certifications</h2>
      <p class="ds-sub">Every product you buy is backed by these guarantees</p>
    </div>

    <div class="ds-grid ds-grid--3">

      <div class="ds-card ab-cert-card">
        <div class="ab-cert-icon"><?php echo hb_icon( 'shield', 30 ); ?></div>
        <div class="ab-cert-title">FSSAI Licensed</div>
        <span class="ab-cert-num">11225332000490</span>
        <p class="ab-cert-desc">Certified by the Food Safety and Standards Authority of India</p>
      </div>

      <div class="ds-card ab-cert-card ab-cert-card--featured">
        <span class="ab-cert-badge">Primary</span>
        <div class="ab-cert-icon"><?php echo hb_icon( 'check', 30 ); ?></div>
        <div class="ab-cert-title">100% Natural</div>
        <span class="ab-cert-num">Zero Preservatives</span>
        <p class="ab-cert-desc">No artificial colours, flavours, or preservatives in any product</p>
      </div>

      <div class="ds-card ab-cert-card">
        <div class="ab-cert-icon"><?php echo hb_icon( 'pin', 30 ); ?></div>
        <div class="ab-cert-title">Product of India</div>
        <span class="ab-cert-num">Made in Bengaluru</span>
        <p class="ab-cert-desc">Proudly manufactured in Karnataka, supporting local farmers</p>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     CTA
══════════════════════════════════════════════════ -->
<section class="ds-section ds-section--dark ds-cta">
  <div class="ds-wrap ds-wrap--narrow">
    <span class="ds-eyebrow">Ready to Experience It?</span>
    <h2 class="ds-cta-title">Taste the Golden Sunshine</h2>
    <p class="ds-cta-desc">Explore our complete range of 26 authentic South Indian food products — crafted for your family's table.</p>
    <div class="ds-cta-actions">
      <a href="<?php echo esc_url( $shop_url ); ?>" class="ds-btn ds-btn--white">
        <?php echo hb_icon( 'bag', 18 ); ?> Shop Now
      </a>
      <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="ds-btn ds-btn--ghost-light">
        Contact Us
        <?php echo hb_icon( 'arrow', 16 ); ?>
      </a>
    </div>
  </div>
</section>

</main>

<script>
(function(){
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
