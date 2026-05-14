<?php get_header(); ?>

<!-- HERO SECTION — UNTOUCHED -->
<section class="hero">

  <!-- Background Slides -->
  <div class="hero-slides" aria-hidden="true">
    <div class="hero-slide active" style="background-image:url('/wp-content/themes/hombisilu-theme/assets/images/hero-bg.jpg');"></div>
    <div class="hero-slide" style="background-image:url('/wp-content/themes/hombisilu-theme/assets/images/hero-candied.jpg');"></div>
    <div class="hero-slide" style="background-image:url('/wp-content/themes/hombisilu-theme/assets/images/hero-bg-karnataka.jpg');"></div>
  </div>

  <!-- Slide Dots -->
  <div class="hero-dots" aria-hidden="true">
    <span class="hero-dot active"></span>
    <span class="hero-dot"></span>
    <span class="hero-dot"></span>
  </div>

  <div class="hero-inner">
    <span class="hero-badge">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline;vertical-align:middle;margin-right:4px;"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
      100% Natural | FSSAI Certified
    </span>
    <h1 class="hero-title">Taste the Tradition.<br>Savour the Difference.</h1>
    <p class="hero-subtitle">Premium South Indian Foods — Crafted with Heritage, Rooted in Purity.</p>
    <p class="hero-desc">From the fragrant hills of Karnataka to your kitchen table, Hombisilu brings you authentic, handcrafted South Indian foods made without compromise. Every product honours centuries-old recipes using the finest natural ingredients — no artificial colours, no preservatives, no shortcuts.</p>
    <div class="hero-btns">
      <a href="/shop" class="btn-primary">Explore Our Collection</a>
      <a href="/about-us" class="btn-outline">Discover Our Story</a>
    </div>
    <div class="hero-trust">
      <span class="trust-item">
        <span class="trust-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </span>
        No Preservatives
      </span>
      <span class="trust-item">
        <span class="trust-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
        </span>
        FSSAI Certified
      </span>
      <span class="trust-item">
        <span class="trust-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
        </span>
        100% Natural
      </span>
      <span class="trust-item">
        <span class="trust-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
        </span>
        Pan-India Delivery
      </span>
    </div>
  </div>

  <script>
  (function(){
    var slides = document.querySelectorAll('.hero-slide');
    var dots   = document.querySelectorAll('.hero-dot');
    if (!slides.length) return;
    var cur = 0;
    function goTo(n) {
      slides[cur].classList.remove('active');
      dots[cur].classList.remove('active');
      cur = (n + slides.length) % slides.length;
      slides[cur].classList.add('active');
      dots[cur].classList.add('active');
    }
    dots.forEach(function(d, i){ d.addEventListener('click', function(){ goTo(i); }); });
    setInterval(function(){ goTo(cur + 1); }, 5000);
  })();
  </script>

</section>

<!-- ══════════════════════════════════════════
     MARQUEE STRIP
══════════════════════════════════════════ -->
<div class="hp-marquee-wrap">
  <div class="hp-marquee-track">
    <?php
    $items = ['☕ Premium Filter Coffee','🌿 Heritage Chutney Powders','🫙 Traditional Pickles','🍯 Pure Honey','🌱 Herbal &amp; Wellness','🌶️ Spices &amp; Masalas','🍊 Candied Fruits'];
    for ($r = 0; $r < 3; $r++) foreach ($items as $item) {
      echo '<span class="hp-marquee-item">' . $item . '</span><span class="hp-marquee-dot">✦</span>';
    }
    ?>
  </div>
</div>

<!-- ══════════════════════════════════════════
     CATEGORIES
══════════════════════════════════════════ -->
<section class="hp-section hp-section--cream">
  <div class="hp-container">
    <div class="hp-section-head">
      <span class="hp-eyebrow">Our Collections</span>
      <h2 class="hp-h2">Product Families</h2>
      <p class="hp-sub">Six curated collections rooted in South Indian culinary tradition</p>
    </div>
    <div class="hp-cats-grid">

      <a href="/product-category/coffee/" class="hp-cat-card">
        <div class="hp-cat-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#C9A055" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
        </div>
        <div class="hp-cat-name">☕ Coffee</div>
        <div class="hp-cat-desc">Premium filter coffee blends for the authentic South Indian brew</div>
        <span class="hp-cat-link">Shop Coffee <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
      </a>

      <a href="/product-category/chutney-powders/" class="hp-cat-card">
        <div class="hp-cat-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#C9A055" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
        </div>
        <div class="hp-cat-name">🌿 Chutney Powders</div>
        <div class="hp-cat-desc">Time-honoured blends to elevate every meal — 7 distinct varieties</div>
        <span class="hp-cat-link">Shop Chutney <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
      </a>

      <a href="/product-category/spices-masalas/" class="hp-cat-card">
        <div class="hp-cat-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#C9A055" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>
        </div>
        <div class="hp-cat-name">🌶️ Spices & Masalas</div>
        <div class="hp-cat-desc">Pure, aromatic spices from source to shelf — including rare Black Turmeric</div>
        <span class="hp-cat-link">Shop Spices <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
      </a>

      <a href="/product-category/pickles/" class="hp-cat-card">
        <div class="hp-cat-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#C9A055" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="7" y="2" width="10" height="3" rx="1"/><path d="M5 5h14a1 1 0 0 1 1 1v2H4V6a1 1 0 0 1 1-1z"/><path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8"/><line x1="9" y1="12" x2="9" y2="17"/><line x1="12" y1="11" x2="12" y2="17"/><line x1="15" y1="12" x2="15" y2="17"/></svg>
        </div>
        <div class="hp-cat-name">🫙 Pickles</div>
        <div class="hp-cat-desc">Traditional mango and amla pickles with bold, natural flavours</div>
        <span class="hp-cat-link">Shop Pickles <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
      </a>

      <a href="/product-category/honey-natural-sweeteners/" class="hp-cat-card">
        <div class="hp-cat-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#C9A055" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
        </div>
        <div class="hp-cat-name">🍯 Honey & Sweeteners</div>
        <div class="hp-cat-desc">Pure honey and honey-soaked dry fruits — liquid gold from nature</div>
        <span class="hp-cat-link">Shop Honey <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
      </a>

      <a href="/product-category/herbal-wellness/" class="hp-cat-card">
        <div class="hp-cat-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#C9A055" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22V12"/><path d="M5 12C5 6.5 8.5 2 12 2s7 4.5 7 10-3.5 10-7 10S5 17.5 5 12z"/><path d="M5 12h14"/></svg>
        </div>
        <div class="hp-cat-name">🌱 Herbal & Wellness</div>
        <div class="hp-cat-desc">Kashaya, laddus, candied fruits and Jamun Bar for everyday wellness</div>
        <span class="hp-cat-link">Shop Wellness <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
      </a>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     BEST SELLERS
══════════════════════════════════════════ -->
<section class="hp-section hp-section--white">
  <div class="hp-container">
    <div class="hp-section-head">
      <span class="hp-eyebrow">Customer Favourites</span>
      <h2 class="hp-h2">Best Sellers</h2>
      <p class="hp-sub">Our most loved products, trusted by thousands of families across India</p>
    </div>
    <div class="hp-products-grid">
      <?php
      $bs_query = new WP_Query([
        'post_type'      => 'product',
        'post_status'    => 'publish',
        'posts_per_page' => 4,
        'orderby'        => 'date',
        'order'          => 'DESC',
      ]);
      if ($bs_query->have_posts()) :
        while ($bs_query->have_posts()) : $bs_query->the_post();
        $prod = function_exists('wc_get_product') ? wc_get_product(get_the_ID()) : null;
        if (!$prod) continue;
      ?>
      <div class="hp-prod-card">
        <a href="<?php the_permalink(); ?>" class="hp-prod-img-wrap">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', ['class'=>'hp-prod-img']); ?>
          <?php else : ?>
            <div class="hp-prod-img-placeholder">
              <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="#C9A055" stroke-width="1.2"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
            </div>
          <?php endif; ?>
          <div class="hp-prod-badge">New</div>
        </a>
        <div class="hp-prod-body">
          <h3 class="hp-prod-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <div class="hp-prod-stars">
            <?php for($i=0;$i<5;$i++): ?>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="#C9A055" stroke="#C9A055" stroke-width="0.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <?php endfor; ?>
          </div>
          <div class="hp-prod-footer">
            <span class="hp-prod-price"><?php echo $prod->get_price_html(); ?></span>
            <a href="<?php echo esc_url($prod->add_to_cart_url()); ?>" class="hp-prod-btn">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
              Add to Cart
            </a>
          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); else : ?>
        <p style="text-align:center;color:#888;grid-column:1/-1;padding:40px 0;">Products loading...</p>
      <?php endif; ?>
    </div>
    <div style="text-align:center;margin-top:44px;">
      <a href="/shop/" class="hp-btn-primary">
        View All Products
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     OUR PROMISE
══════════════════════════════════════════ -->
<section class="hp-section hp-promise-section">
  <div class="hp-promise-glow"></div>
  <div class="hp-container" style="position:relative;z-index:1;">
    <div class="hp-section-head">
      <span class="hp-eyebrow" style="color:rgba(245,200,66,.8);">Our Commitment</span>
      <h2 class="hp-h2" style="color:#fff;">Clean. Pure. Honest.</h2>
      <p class="hp-sub" style="color:rgba(255,255,255,.65);">Five pillars that guide everything we make</p>
    </div>
    <div class="hp-promise-grid">

      <div class="hp-promise-card">
        <div class="hp-promise-icon">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
        </div>
        <h4>🌿 100% Natural</h4>
        <p>No artificial flavours, colours, or preservatives across our entire range</p>
      </div>

      <div class="hp-promise-card">
        <div class="hp-promise-icon">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        </div>
        <h4>🏆 FSSAI Certified</h4>
        <p>Every product meets the highest food safety standards in India</p>
      </div>

      <div class="hp-promise-card">
        <div class="hp-promise-icon">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
        </div>
        <h4>📜 Heritage Recipes</h4>
        <p>Rooted in Karnataka and South Indian culinary traditions for generations</p>
      </div>

      <div class="hp-promise-card">
        <div class="hp-promise-icon">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        </div>
        <h4>🤝 Thoughtfully Sourced</h4>
        <p>Premium, locally sourced ingredients from trusted Karnataka farmers</p>
      </div>

      <div class="hp-promise-card">
        <div class="hp-promise-icon">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </div>
        <h4>🛍️ Wide Range</h4>
        <p>26 products across 9 categories for your complete South Indian pantry</p>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════════ -->
<section class="hp-section hp-section--cream">
  <div class="hp-container">
    <div class="hp-section-head">
      <span class="hp-eyebrow">Happy Families</span>
      <h2 class="hp-h2">What Our Customers Say</h2>
      <p class="hp-sub">Real stories from happy Hombisilu families across India</p>
    </div>
    <div class="hp-testi-grid">

      <div class="hp-testi-card">
        <div class="hp-testi-quote">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="rgba(201,160,85,.2)" stroke="#C9A055" stroke-width="1.2"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
        </div>
        <div class="hp-testi-stars">
          <?php for($i=0;$i<5;$i++): ?>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="#C9A055" stroke="#C9A055" stroke-width="0.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <?php endfor; ?>
        </div>
        <p class="hp-testi-text">"Hombisilu's filter coffee powder is the closest I've come to the coffee my grandmother used to make. Absolutely authentic taste!"</p>
        <div class="hp-testi-footer">
          <div class="hp-testi-avatar">P</div>
          <div>
            <div class="hp-testi-name">Priya S.</div>
            <div class="hp-testi-loc">Bengaluru</div>
          </div>
        </div>
      </div>

      <div class="hp-testi-card hp-testi-featured">
        <div class="hp-testi-quote">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="rgba(255,255,255,.15)" stroke="rgba(255,255,255,.6)" stroke-width="1.2"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
        </div>
        <div class="hp-testi-stars">
          <?php for($i=0;$i<5;$i++): ?>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="#F5C842" stroke="#F5C842" stroke-width="0.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <?php endfor; ?>
        </div>
        <p class="hp-testi-text">"The Kashaya Powder has become a part of our evening ritual. Delicious, calming, and I love that it's completely natural."</p>
        <div class="hp-testi-footer">
          <div class="hp-testi-avatar" style="background:rgba(255,255,255,.2);color:#fff;">M</div>
          <div>
            <div class="hp-testi-name" style="color:#fff;">Meera R.</div>
            <div class="hp-testi-loc" style="color:rgba(255,255,255,.65);">Chennai</div>
          </div>
        </div>
      </div>

      <div class="hp-testi-card">
        <div class="hp-testi-quote">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="rgba(201,160,85,.2)" stroke="#C9A055" stroke-width="1.2"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
        </div>
        <div class="hp-testi-stars">
          <?php for($i=0;$i<5;$i++): ?>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="#C9A055" stroke="#C9A055" stroke-width="0.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <?php endfor; ?>
        </div>
        <p class="hp-testi-text">"Best Appe Midi pickle I have had outside of my native village. The flavour is exactly as I remember from childhood."</p>
        <div class="hp-testi-footer">
          <div class="hp-testi-avatar">S</div>
          <div>
            <div class="hp-testi-name">Suresh K.</div>
            <div class="hp-testi-loc">Mumbai</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     NEWSLETTER
══════════════════════════════════════════ -->
<section class="hp-newsletter">
  <div class="hp-newsletter-inner">
    <div class="hp-newsletter-icon">
      <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
    </div>
    <h2 class="hp-newsletter-title">Get Exclusive Deals &amp; New Arrivals</h2>
    <p class="hp-newsletter-sub">Join our community of food lovers. No spam — unsubscribe anytime.</p>
    <form class="hp-nl-form" onsubmit="hpNewsletter(event)">
      <input type="email" class="hp-nl-input" placeholder="Enter your email address" required>
      <button type="submit" class="hp-nl-btn">Subscribe</button>
    </form>
  </div>
</section>

<!-- ══════════════════════════════════════════
     CTA BANNER
══════════════════════════════════════════ -->
<section class="hp-cta">
  <div class="hp-cta-glow"></div>
  <div class="hp-container" style="position:relative;z-index:1;text-align:center;">
    <span class="hp-eyebrow" style="color:rgba(245,200,66,.8);">Ready to Order?</span>
    <h2 class="hp-cta-title">Taste the Tradition.<br>Savour the Difference.</h2>
    <p class="hp-cta-desc">From our kitchen in Karnataka to your dining table — discover the authentic flavours of South India.</p>
    <div class="hp-cta-btns">
      <a href="/shop/" class="hp-btn-white">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
        Shop Now
      </a>
      <a href="/about-us/" class="hp-btn-gold-outline">
        Our Story
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

<style>
/* ════════════════════════════════════════════
   HOMEPAGE — DESIGN SYSTEM
════════════════════════════════════════════ */
:root {
  --hp-maroon:    #6B2737;
  --hp-maroon-dk: #4A0E1A;
  --hp-gold:      #C9A055;
  --hp-gold-lt:   #F5C842;
  --hp-cream:     #FFF8F0;
  --hp-border:    #E8DDD0;
  --hp-text:      #3A2A20;
  --hp-muted:     #7A6A60;
}

.hp-container { max-width: 1160px; margin: 0 auto; padding: 0 24px; }
.hp-section { padding: 88px 0; }
.hp-section--white { background: #fff; }
.hp-section--cream { background: var(--hp-cream); }
.hp-eyebrow {
  display: block; font-size: .7rem; font-weight: 700; letter-spacing: 3px;
  text-transform: uppercase; color: var(--hp-gold); margin-bottom: 10px;
}
.hp-h2 {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: clamp(1.9rem, 3.5vw, 2.7rem);
  color: var(--hp-maroon); line-height: 1.2; margin-bottom: 14px;
}
.hp-sub { color: var(--hp-muted); font-size: .97rem; max-width: 520px; margin: 0 auto; }
.hp-section-head { text-align: center; margin-bottom: 56px; }

/* ── MARQUEE ──────────────────────────────── */
.hp-marquee-wrap {
  background: var(--hp-maroon); overflow: hidden;
  border-top: 1px solid rgba(255,255,255,.08);
  border-bottom: 1px solid rgba(255,255,255,.08);
}
.hp-marquee-track {
  display: flex; align-items: center; gap: 0;
  white-space: nowrap;
  animation: hp-marquee 32s linear infinite;
}
.hp-marquee-item {
  display: inline-block; padding: 14px 28px;
  font-size: .82rem; font-weight: 600; color: rgba(255,255,255,.88);
  letter-spacing: .5px;
}
.hp-marquee-dot {
  color: var(--hp-gold); font-size: .6rem; opacity: .6; padding: 0 4px;
}
@keyframes hp-marquee { 0%{transform:translateX(0)} 100%{transform:translateX(-33.333%)} }
.hp-marquee-wrap:hover .hp-marquee-track { animation-play-state: paused; }

/* ── CATEGORIES ───────────────────────────── */
.hp-cats-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}
.hp-cat-card {
  background: #fff; border: 1.5px solid var(--hp-border);
  border-radius: 20px; padding: 36px 28px;
  text-align: center; display: block;
  transition: transform .3s, box-shadow .3s, border-color .3s;
  cursor: pointer; position: relative; overflow: hidden;
}
.hp-cat-card::after {
  content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);
  width: 0; height: 3px; background: var(--hp-maroon); border-radius: 2px;
  transition: width .35s;
}
.hp-cat-card:hover { transform: translateY(-8px); box-shadow: 0 20px 56px rgba(107,39,55,.14); border-color: var(--hp-gold); }
.hp-cat-card:hover::after { width: 55%; }
.hp-cat-icon {
  width: 76px; height: 76px; border-radius: 20px; margin: 0 auto 20px;
  background: linear-gradient(135deg, rgba(201,160,85,.14), rgba(107,39,55,.07));
  border: 1.5px solid rgba(201,160,85,.25);
  display: flex; align-items: center; justify-content: center;
  transition: transform .3s, background .3s;
}
.hp-cat-card:hover .hp-cat-icon { transform: scale(1.08); background: linear-gradient(135deg, rgba(201,160,85,.24), rgba(107,39,55,.12)); }
.hp-cat-name {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: 1.1rem; font-weight: 700; color: var(--hp-maroon); margin-bottom: 10px;
}
.hp-cat-desc { font-size: .83rem; color: var(--hp-muted); line-height: 1.65; margin-bottom: 18px; }
.hp-cat-link {
  display: inline-flex; align-items: center; gap: 6px;
  font-size: .8rem; font-weight: 700; color: var(--hp-gold);
  text-transform: uppercase; letter-spacing: 1px;
  transition: gap .25s;
}
.hp-cat-card:hover .hp-cat-link { gap: 10px; }

/* ── BEST SELLERS ─────────────────────────── */
.hp-products-grid {
  display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px;
}
.hp-prod-card {
  background: #fff; border-radius: 18px; overflow: hidden;
  border: 1.5px solid var(--hp-border);
  box-shadow: 0 4px 16px rgba(0,0,0,.06);
  transition: transform .3s, box-shadow .3s;
}
.hp-prod-card:hover { transform: translateY(-7px); box-shadow: 0 18px 48px rgba(107,39,55,.14); }
.hp-prod-img-wrap {
  display: block; position: relative; overflow: hidden;
  aspect-ratio: 1; background: var(--hp-cream);
}
.hp-prod-img { width: 100%; height: 100%; object-fit: cover; transition: transform .4s; }
.hp-prod-card:hover .hp-prod-img { transform: scale(1.06); }
.hp-prod-img-placeholder {
  width: 100%; height: 100%;
  display: flex; align-items: center; justify-content: center;
  background: linear-gradient(135deg, var(--hp-cream), #F5E6D3);
}
.hp-prod-badge {
  position: absolute; top: 12px; left: 12px;
  background: var(--hp-maroon); color: #fff;
  font-size: .65rem; font-weight: 700; letter-spacing: 1px;
  text-transform: uppercase; padding: 4px 10px; border-radius: 20px;
}
.hp-prod-body { padding: 18px; }
.hp-prod-title { font-size: .93rem; font-weight: 700; color: var(--hp-text); margin-bottom: 8px; line-height: 1.35; }
.hp-prod-title a { color: inherit; text-decoration: none; }
.hp-prod-title a:hover { color: var(--hp-maroon); }
.hp-prod-stars { display: flex; gap: 2px; margin-bottom: 14px; }
.hp-prod-footer { display: flex; align-items: center; justify-content: space-between; gap: 8px; }
.hp-prod-price { font-size: 1.1rem; font-weight: 800; color: var(--hp-maroon); }
.hp-prod-btn {
  display: inline-flex; align-items: center; gap: 6px;
  background: var(--hp-maroon); color: #fff !important;
  padding: 8px 14px; border-radius: 8px;
  font-size: .78rem; font-weight: 700;
  transition: background .25s, transform .2s;
  cursor: pointer; white-space: nowrap;
}
.hp-prod-btn:hover { background: var(--hp-maroon-dk); transform: scale(1.04); }

/* ── PROMISE ──────────────────────────────── */
.hp-promise-section {
  padding: 56px 0; position: relative; overflow: hidden;
  background: linear-gradient(160deg, #4A0E1A 0%, #6B2737 50%, #C9A055 100%);
}
.hp-promise-glow {
  position: absolute; width: 500px; height: 500px; border-radius: 50%;
  background: radial-gradient(circle, rgba(201,160,85,.1) 0%, transparent 70%);
  top: -150px; right: -150px; pointer-events: none;
}
.hp-promise-grid {
  display: grid; grid-template-columns: repeat(5, 1fr); gap: 16px;
}
.hp-promise-card {
  background: rgba(255,255,255,.08);
  border: 1.5px solid rgba(255,255,255,.35);
  border-radius: 14px; padding: 22px 16px; text-align: center;
  backdrop-filter: blur(10px);
  box-shadow: 0 2px 16px rgba(0,0,0,.15), inset 0 1px 0 rgba(255,255,255,.2);
  transition: background .28s, transform .28s;
}
.hp-promise-card:hover { background: rgba(255,255,255,.12); transform: translateY(-4px); }
.hp-promise-icon {
  width: 48px; height: 48px; border-radius: 12px;
  background: rgba(201,160,85,.15); border: 1px solid rgba(201,160,85,.25);
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto 12px; color: var(--hp-gold-lt);
}
.hp-promise-card h4 {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: .9rem; color: #fff; margin-bottom: 8px; font-weight: 700;
}
.hp-promise-card p { font-size: .75rem; color: rgba(255,255,255,.7); line-height: 1.6; }

/* ── TESTIMONIALS ─────────────────────────── */
.hp-testi-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 24px; align-items: start;
}
.hp-testi-card {
  background: #fff; border-radius: 20px; padding: 36px 30px;
  border: 1.5px solid var(--hp-border);
  box-shadow: 0 4px 20px rgba(0,0,0,.06);
  transition: transform .3s, box-shadow .3s;
}
.hp-testi-card:hover { transform: translateY(-6px); box-shadow: 0 18px 48px rgba(0,0,0,.1); }
.hp-testi-featured {
  background: linear-gradient(160deg, var(--hp-maroon) 0%, var(--hp-maroon-dk) 100%);
  border-color: transparent;
  transform: translateY(-10px);
  box-shadow: 0 20px 56px rgba(74,14,26,.3);
}
.hp-testi-featured:hover { transform: translateY(-15px); }
.hp-testi-quote { margin-bottom: 14px; }
.hp-testi-stars { display: flex; gap: 3px; margin-bottom: 16px; }
.hp-testi-text {
  font-size: .92rem; color: #4A3A30; line-height: 1.8;
  font-style: italic; margin-bottom: 24px;
}
.hp-testi-featured .hp-testi-text { color: rgba(255,255,255,.85); }
.hp-testi-footer { display: flex; align-items: center; gap: 12px; }
.hp-testi-avatar {
  width: 42px; height: 42px; border-radius: 50%;
  background: linear-gradient(135deg, var(--hp-maroon), var(--hp-gold));
  color: #fff; font-weight: 700; font-size: 1.1rem;
  display: flex; align-items: center; justify-content: center; flex-shrink: 0;
}
.hp-testi-name { font-weight: 700; color: var(--hp-maroon); font-size: .9rem; }
.hp-testi-loc { font-size: .78rem; color: var(--hp-muted); margin-top: 2px; }

/* ── NEWSLETTER ───────────────────────────── */
.hp-newsletter {
  padding: 72px 24px;
  background: var(--hp-cream);
  border-top: 1px solid var(--hp-border);
  border-bottom: 1px solid var(--hp-border);
  text-align: center;
}
.hp-newsletter-inner { max-width: 620px; margin: 0 auto; }
.hp-newsletter-icon {
  width: 64px; height: 64px; border-radius: 18px;
  background: var(--hp-maroon); color: #fff;
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto 20px;
  box-shadow: 0 8px 24px rgba(74,14,26,.3);
}
.hp-newsletter-title {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: clamp(1.6rem, 3vw, 2.2rem);
  color: var(--hp-maroon); margin-bottom: 10px;
}
.hp-newsletter-sub { color: var(--hp-muted); font-size: .92rem; margin-bottom: 28px; }
.hp-nl-form {
  display: flex; gap: 0; max-width: 480px; margin: 0 auto;
  border: 2px solid var(--hp-border); border-radius: 50px; overflow: hidden;
  background: #fff; box-shadow: 0 4px 20px rgba(0,0,0,.07);
  transition: border-color .25s, box-shadow .25s;
}
.hp-nl-form:focus-within { border-color: var(--hp-maroon); box-shadow: 0 4px 24px rgba(107,39,55,.15); }
.hp-nl-input {
  flex: 1; border: none; outline: none; padding: 14px 22px;
  font-size: .92rem; background: transparent; color: var(--hp-text);
}
.hp-nl-btn {
  background: var(--hp-maroon); color: #fff;
  border: none; padding: 14px 26px; cursor: pointer;
  font-weight: 700; font-size: .88rem; border-radius: 0 50px 50px 0;
  transition: background .25s; white-space: nowrap;
}
.hp-nl-btn:hover { background: var(--hp-maroon-dk); }

/* ── CTA BANNER ───────────────────────────── */
.hp-cta {
  padding: 100px 24px; position: relative; overflow: hidden;
  background: linear-gradient(135deg, var(--hp-maroon-dk) 0%, var(--hp-maroon) 60%, #8B3045 100%);
}
.hp-cta-glow {
  position: absolute; inset: 0;
  background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  pointer-events: none;
}
.hp-cta-title {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: clamp(2rem, 5vw, 3.2rem);
  color: #fff; margin: 12px 0 18px; font-weight: 700;
  text-shadow: 0 2px 20px rgba(0,0,0,.25); line-height: 1.2;
}
.hp-cta-desc { color: rgba(255,255,255,.8); font-size: 1rem; line-height: 1.75; margin-bottom: 40px; max-width: 540px; margin-left: auto; margin-right: auto; }
.hp-cta-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }
.hp-btn-primary {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--hp-maroon); color: #fff !important;
  padding: 14px 30px; border-radius: 30px;
  font-weight: 700; font-size: .92rem;
  box-shadow: 0 6px 20px rgba(74,14,26,.3);
  transition: all .28s; cursor: pointer;
}
.hp-btn-primary:hover { background: var(--hp-maroon-dk); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(74,14,26,.4); }
.hp-btn-white {
  display: inline-flex; align-items: center; gap: 10px;
  background: #fff; color: var(--hp-maroon) !important;
  padding: 15px 34px; border-radius: 30px;
  font-weight: 700; font-size: .95rem;
  box-shadow: 0 8px 28px rgba(0,0,0,.2);
  transition: all .28s; cursor: pointer;
}
.hp-btn-white:hover { background: var(--hp-gold-lt); transform: translateY(-2px); box-shadow: 0 12px 36px rgba(0,0,0,.28); }
.hp-btn-gold-outline {
  display: inline-flex; align-items: center; gap: 8px;
  border: 2px solid #C9A055; color: #C9A055 !important;
  background: rgba(201,160,85,.1);
  padding: 14px 30px; border-radius: 30px;
  font-weight: 700; font-size: .95rem;
  transition: all .28s; cursor: pointer;
}
.hp-btn-gold-outline:hover { background: rgba(201,160,85,.2); border-color: var(--hp-gold-lt); color: var(--hp-gold-lt) !important; transform: translateY(-2px); }

/* ── RESPONSIVE ───────────────────────────── */
@media (max-width: 1024px) {
  .hp-promise-grid { grid-template-columns: repeat(3, 1fr); gap: 16px; }
  .hp-products-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .hp-cats-grid { grid-template-columns: repeat(2, 1fr); }
  .hp-testi-grid { grid-template-columns: 1fr; }
  .hp-testi-featured { transform: none; }
  .hp-promise-grid { grid-template-columns: repeat(2, 1fr); }
  .hp-section { padding: 64px 0; }
}
@media (max-width: 540px) {
  .hp-cats-grid { grid-template-columns: 1fr; }
  .hp-products-grid { grid-template-columns: 1fr; }
  .hp-promise-grid { grid-template-columns: 1fr; }
  .hp-nl-form { flex-direction: column; border-radius: 16px; }
  .hp-nl-btn { border-radius: 0 0 14px 14px; }
  .hp-cta-btns { flex-direction: column; align-items: center; }
}
@media (prefers-reduced-motion: reduce) {
  .hp-marquee-track { animation: none; }
}
</style>

<script>
function hpNewsletter(e) {
  e.preventDefault();
  var btn = e.target.querySelector('.hp-nl-btn');
  var input = e.target.querySelector('.hp-nl-input');
  btn.textContent = 'Subscribed!';
  btn.style.background = '#C9A055';
  input.value = '';
  setTimeout(function(){ btn.textContent = 'Subscribe'; btn.style.background = ''; }, 3000);
}
</script>

<?php get_footer(); ?>
