<?php get_header(); ?>

<!-- HERO SECTION -->
<section class="hero">

  <!-- Background Slides -->
  <div class="hero-slides" aria-hidden="true">
    <div class="hero-slide active" style="background-image:url('/wp-content/themes/hombisilu-theme/assets/images/hero-bg.jpg');"></div>
    <div class="hero-slide" style="background-image:url('/wp-content/themes/hombisilu-theme/assets/images/hero-candied.jpg');"></div>
  </div>

  <!-- Slide Dots -->
  <div class="hero-dots" aria-hidden="true">
    <span class="hero-dot active"></span>
    <span class="hero-dot"></span>
  </div>

  <div class="hero-inner">
    <span class="hero-badge">🌿 100% Natural | FSSAI Certified</span>
    <h1 class="hero-title">Taste the Tradition.<br>Savour the Difference.</h1>
    <p class="hero-subtitle">Premium South Indian Foods — Crafted with Heritage, Rooted in Purity.</p>
    <p class="hero-desc">From the fragrant hills of Karnataka to your kitchen table, Hombisilu brings you authentic, handcrafted South Indian foods made without compromise. Every product honours centuries-old recipes using the finest natural ingredients — no artificial colours, no preservatives, no shortcuts.</p>
    <div class="hero-btns">
      <a href="/shop" class="btn-primary">🛍️ Explore Our Collection</a>
      <a href="/about-us" class="btn-outline">Discover Our Story</a>
    </div>
    <div class="hero-trust">
      <span class="trust-item"><span class="trust-icon">✅</span> No Preservatives</span>
      <span class="trust-item"><span class="trust-icon">🏆</span> FSSAI Certified</span>
      <span class="trust-item"><span class="trust-icon">🌿</span> 100% Natural</span>
      <span class="trust-item"><span class="trust-icon">🚚</span> Pan-India Delivery</span>
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

<!-- FEATURES STRIP -->
<div class="features-strip">
  <div class="features-inner">
    <span class="feature-item">☕ Premium Filter Coffee</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🌿 Heritage Chutney Powders</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🫙 Traditional Pickles</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🍯 Pure Honey</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🌱 Herbal &amp; Wellness</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🟡 Spices &amp; Masalas</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🍊 Candied Fruits</span>
    <span class="feature-item">✦</span>
    <!-- Duplicate for seamless loop -->
    <span class="feature-item">☕ Premium Filter Coffee</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🌿 Heritage Chutney Powders</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🫙 Traditional Pickles</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🍯 Pure Honey</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🌱 Herbal &amp; Wellness</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🟡 Spices &amp; Masalas</span>
    <span class="feature-item">✦</span>
    <span class="feature-item">🍊 Candied Fruits</span>
    <span class="feature-item">✦</span>
  </div>
</div>

<!-- CATEGORIES SECTION -->
<section class="section section-alt">
  <div class="container">
    <h2 class="section-title">Our Product Families</h2>
    <p class="section-subtitle">Six curated collections rooted in South Indian culinary tradition</p>
    <div class="categories-grid">
      <a href="/product-category/coffee" class="cat-card">
        <span class="cat-icon">☕</span>
        <div class="cat-name">Coffee</div>
        <div class="cat-desc">Premium filter coffee blends for the authentic South Indian brew</div>
        <span class="cat-link">Shop Coffee →</span>
      </a>
      <a href="/product-category/chutney-powders" class="cat-card">
        <span class="cat-icon">🌿</span>
        <div class="cat-name">Chutney Powders</div>
        <div class="cat-desc">Time-honoured blends to elevate every meal — 7 distinct varieties</div>
        <span class="cat-link">Shop Chutney Powders →</span>
      </a>
      <a href="/product-category/spices-masalas" class="cat-card">
        <span class="cat-icon">🟡</span>
        <div class="cat-name">Spices & Masalas</div>
        <div class="cat-desc">Pure, aromatic spices from source to shelf — including rare Black Turmeric</div>
        <span class="cat-link">Shop Spices →</span>
      </a>
      <a href="/product-category/pickles" class="cat-card">
        <span class="cat-icon">🫙</span>
        <div class="cat-name">Pickles</div>
        <div class="cat-desc">Traditional mango and amla pickles with bold, natural flavours</div>
        <span class="cat-link">Shop Pickles →</span>
      </a>
      <a href="/product-category/honey-natural-sweeteners" class="cat-card">
        <span class="cat-icon">🍯</span>
        <div class="cat-name">Honey & Sweeteners</div>
        <div class="cat-desc">Pure honey and honey-soaked dry fruits — liquid gold from nature</div>
        <span class="cat-link">Shop Honey →</span>
      </a>
      <a href="/product-category/herbal-wellness" class="cat-card">
        <span class="cat-icon">🌱</span>
        <div class="cat-name">Herbal & Wellness</div>
        <div class="cat-desc">Kashaya, laddus, candied fruits and Jamun Bar for everyday wellness</div>
        <span class="cat-link">Shop Wellness →</span>
      </a>
    </div>
  </div>
</section>

<!-- OUR PROMISE -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Clean. Pure. Honest.</h2>
    <p class="section-subtitle">Five pillars that guide everything we make</p>
    <div class="promise-grid">
      <div class="promise-item">
        <span class="promise-icon">🌿</span>
        <div class="promise-title">100% Natural</div>
        <div class="promise-desc">No artificial flavours, colours, or preservatives across our range</div>
      </div>
      <div class="promise-item">
        <span class="promise-icon">🏆</span>
        <div class="promise-title">FSSAI Certified</div>
        <div class="promise-desc">Every product meets the highest food safety standards</div>
      </div>
      <div class="promise-item">
        <span class="promise-icon">📜</span>
        <div class="promise-title">Heritage Recipes</div>
        <div class="promise-desc">Rooted in Karnataka and South Indian culinary traditions</div>
      </div>
      <div class="promise-item">
        <span class="promise-icon">🤝</span>
        <div class="promise-title">Thoughtfully Sourced</div>
        <div class="promise-desc">Premium, locally sourced ingredients from trusted farmers</div>
      </div>
      <div class="promise-item">
        <span class="promise-icon">🛒</span>
        <div class="promise-title">Wide Range</div>
        <div class="promise-desc">26 products across 9 categories for your complete pantry</div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section section-alt">
  <div class="container">
    <h2 class="section-title">What Our Customers Say</h2>
    <p class="section-subtitle">Real stories from happy Hombisilu families</p>
    <div class="testimonials-grid">
      <div class="testi-card">
        <div class="testi-stars">⭐⭐⭐⭐⭐</div>
        <p class="testi-text">"Hombisilu's filter coffee powder is the closest I've come to the coffee my grandmother used to make. Absolutely authentic taste!"</p>
        <div class="testi-author">Priya S.</div>
        <div class="testi-role">Happy Customer, Bengaluru</div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">⭐⭐⭐⭐⭐</div>
        <p class="testi-text">"The Kashaya Powder has become a part of our evening ritual. Delicious, calming, and I love that it's completely natural."</p>
        <div class="testi-author">Meera R.</div>
        <div class="testi-role">Wellness Enthusiast, Chennai</div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">⭐⭐⭐⭐⭐</div>
        <p class="testi-text">"Best Appe Midi pickle I have had outside of my native village. The flavour is exactly as I remember from childhood."</p>
        <div class="testi-author">Suresh K.</div>
        <div class="testi-role">Food Lover, Mumbai</div>
      </div>
    </div>
  </div>
</section>

<!-- Best Sellers Section -->
<section style="padding:80px 20px;background:#fff;">
  <div class="container" style="max-width:1200px;margin:0 auto;">
    <div style="text-align:center;margin-bottom:48px;">
      <p style="color:#D4A017;font-size:0.8rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;margin-bottom:12px;">Customer Favourites</p>
      <h2 style="font-family:Georgia,serif;font-size:clamp(1.8rem,4vw,2.8rem);color:#222;margin-bottom:16px;">Best Sellers</h2>
      <p style="color:#666;max-width:520px;margin:0 auto;">Our most loved products, trusted by thousands of families across India.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:28px;">
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
      <div style="background:#FFF8F0;border-radius:16px;overflow:hidden;box-shadow:0 4px 16px rgba(0,0,0,0.07);transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-6px)'" onmouseout="this.style.transform='none'">
        <a href="<?php the_permalink(); ?>" style="display:block;">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', ['style'=>'width:100%;aspect-ratio:1;object-fit:cover;display:block;']); ?>
          <?php else : ?>
            <div style="aspect-ratio:1;background:linear-gradient(135deg,#FFF8F0,#F5E6D3);display:flex;align-items:center;justify-content:center;font-size:56px;">🌿</div>
          <?php endif; ?>
        </a>
        <div style="padding:18px;">
          <h3 style="font-size:0.95rem;font-weight:700;color:#222;margin:0 0 8px;line-height:1.3;">
            <a href="<?php the_permalink(); ?>" style="text-decoration:none;color:inherit;"><?php the_title(); ?></a>
          </h3>
          <div style="display:flex;align-items:center;justify-content:space-between;margin-top:14px;">
            <span style="font-size:1.15rem;font-weight:800;color:#8B4513;"><?php echo $prod->get_price_html(); ?></span>
            <a href="<?php echo esc_url($prod->add_to_cart_url()); ?>" style="background:#8B4513;color:#fff;padding:7px 14px;border-radius:6px;text-decoration:none;font-size:0.8rem;font-weight:600;">Add to Cart</a>
          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); else : ?>
        <p style="text-align:center;color:#888;grid-column:1/-1;">Products loading...</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-section">
  <div class="container" style="max-width:700px;margin:0 auto;">
    <p style="display:inline-block;background:rgba(255,255,255,0.2);padding:6px 18px;border-radius:20px;font-size:13px;letter-spacing:2px;text-transform:uppercase;margin-bottom:16px;">Stay Connected</p>
    <h2>Get Exclusive Deals &amp; New Arrivals</h2>
    <p>Join our community of food lovers and never miss a seasonal special, new product launch, or exclusive discount.</p>
    <form class="newsletter-form" onsubmit="handleNewsletter(event)">
      <input type="email" placeholder="Enter your email address" required>
      <button type="submit">Subscribe</button>
    </form>
    <p style="font-size:0.8rem;opacity:0.7;margin-top:14px;">No spam. Unsubscribe anytime.</p>
  </div>
</section>

<!-- Dark CTA Section -->
<section class="cta-section">
  <div class="container">
    <h2 class="cta-title">Taste the Tradition. Savour the Difference.</h2>
    <p class="cta-desc">From our kitchen in Karnataka to your dining table — discover the authentic flavours of South India.</p>
    <a href="/shop" class="btn-white">Shop Now</a>
  </div>
</section>

<script>
function handleNewsletter(e) {
  e.preventDefault();
  var btn = e.target.querySelector('button');
  btn.textContent = 'Subscribed!';
  btn.style.background = '#D4A017';
  e.target.querySelector('input').value = '';
  setTimeout(function(){ btn.textContent = 'Subscribe'; btn.style.background = ''; }, 3000);
}
</script>

<?php get_footer(); ?>
