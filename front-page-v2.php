<?php get_header(); ?>

<!-- ═══ HERO ════════════════════════════════════════════ -->
<section class="hero">
  <div class="hero-inner">
    <span class="hero-badge">🌿 100% Natural &nbsp;|&nbsp; FSSAI Certified</span>
    <h1 class="hero-title">
      Taste the <span>Tradition.</span><br>Savour the Difference.
    </h1>
    <p class="hero-subtitle">Premium South Indian Foods — Crafted with Heritage, Rooted in Purity.</p>
    <p class="hero-desc">From the fragrant hills of Karnataka to your kitchen table, Hombisilu brings you authentic, handcrafted South Indian foods made without compromise — no artificial colours, no preservatives, no shortcuts.</p>
    <div class="hero-btns">
      <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn-primary">🛍️ Explore Our Collection</a>
      <a href="<?php echo home_url('/about-us'); ?>" class="btn-outline">Discover Our Story</a>
    </div>
    <div class="hero-trust">
      <span class="trust-item"><span class="trust-icon">✅</span>No Preservatives</span>
      <span class="trust-item"><span class="trust-icon">🏆</span>FSSAI Certified</span>
      <span class="trust-item"><span class="trust-icon">🌿</span>100% Natural</span>
      <span class="trust-item"><span class="trust-icon">🚚</span>Pan-India Delivery</span>
    </div>
  </div>
</section>

<!-- ═══ FEATURES STRIP ══════════════════════════════════ -->
<div class="features-strip">
  <div class="features-inner">
    <span class="feature-item">☕ Premium Filter Coffee</span>
    <span class="feature-item">🌿 Heritage Chutney Powders</span>
    <span class="feature-item">🫙 Traditional Pickles</span>
    <span class="feature-item">🍯 Pure Wild Honey</span>
    <span class="feature-item">🍬 Wellness Snacks</span>
    <span class="feature-item">🌱 Herbal Drinks</span>
  </div>
</div>

<!-- ═══ CATEGORIES ══════════════════════════════════════ -->
<section class="section section-alt">
  <div class="container">
    <span class="eyebrow" style="display:block;text-align:center;">Browse by Category</span>
    <h2 class="section-title">Our Product Families</h2>
    <p class="section-subtitle">Nine curated collections rooted in South Indian culinary tradition</p>
    <div class="categories-grid">
      <a href="<?php echo home_url('/product-category/coffee'); ?>" class="cat-card">
        <span class="cat-icon">☕</span>
        <div class="cat-name">Coffee</div>
        <div class="cat-desc">Premium filter coffee blends for the authentic South Indian brew</div>
        <span class="cat-link">Shop Coffee →</span>
      </a>
      <a href="<?php echo home_url('/product-category/chutney-powders'); ?>" class="cat-card">
        <span class="cat-icon">🌿</span>
        <div class="cat-name">Chutney Powders</div>
        <div class="cat-desc">Time-honoured blends to elevate every meal — 7 distinct varieties</div>
        <span class="cat-link">Shop Chutney Powders →</span>
      </a>
      <a href="<?php echo home_url('/product-category/spices-masalas'); ?>" class="cat-card">
        <span class="cat-icon">🟡</span>
        <div class="cat-name">Spices &amp; Masalas</div>
        <div class="cat-desc">Pure, aromatic spices including rare Black Turmeric from Karnataka</div>
        <span class="cat-link">Shop Spices →</span>
      </a>
      <a href="<?php echo home_url('/product-category/pickles'); ?>" class="cat-card">
        <span class="cat-icon">🫙</span>
        <div class="cat-name">Pickles</div>
        <div class="cat-desc">Traditional mango and amla pickles with bold, natural flavours</div>
        <span class="cat-link">Shop Pickles →</span>
      </a>
      <a href="<?php echo home_url('/product-category/honey-natural-sweeteners'); ?>" class="cat-card">
        <span class="cat-icon">🍯</span>
        <div class="cat-name">Honey &amp; Sweeteners</div>
        <div class="cat-desc">Wild-harvested raw honey and honey-soaked dry fruits</div>
        <span class="cat-link">Shop Honey →</span>
      </a>
      <a href="<?php echo home_url('/product-category/herbal-wellness'); ?>" class="cat-card">
        <span class="cat-icon">🌱</span>
        <div class="cat-name">Herbal &amp; Wellness</div>
        <div class="cat-desc">Kashaya, laddus, Jamun Bar and more for everyday wellness</div>
        <span class="cat-link">Shop Wellness →</span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ BEST SELLERS ═════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <span class="eyebrow" style="display:block;text-align:center;">Customer Favourites</span>
    <h2 class="section-title">Best Sellers</h2>
    <p class="section-subtitle">Our most loved products, trusted by thousands of families across India</p>
    <div class="best-sellers-grid">
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
      <div class="bs-card">
        <a href="<?php the_permalink(); ?>">
          <div class="bs-img-wrap">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium', ['loading' => 'lazy']); ?>
            <?php else : ?>
              🌿
            <?php endif; ?>
          </div>
        </a>
        <div class="bs-body">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p style="font-size:.8rem;color:#7A7A7A;line-height:1.5;margin-bottom:4px;"><?php echo wp_trim_words(get_the_excerpt(), 8, '...'); ?></p>
          <div class="bs-footer">
            <span class="bs-price"><?php echo $prod->get_price_html(); ?></span>
            <a href="<?php echo esc_url($prod->add_to_cart_url()); ?>" class="btn-atc">Add to Cart</a>
          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
    <div style="text-align:center;margin-top:44px;">
      <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn-outline">View All 26 Products →</a>
    </div>
  </div>
</section>

<!-- ═══ OUR PROMISE ══════════════════════════════════════ -->
<section class="section section-alt">
  <div class="container">
    <span class="eyebrow" style="display:block;text-align:center;">Why Choose Us</span>
    <h2 class="section-title">Clean. Pure. Honest.</h2>
    <p class="section-subtitle">Five pillars that guide everything we make</p>
    <div class="promise-grid">
      <div class="promise-item">
        <span class="promise-icon">🌿</span>
        <div class="promise-title">100% Natural</div>
        <div class="promise-desc">No artificial flavours, colours, or preservatives across our entire range</div>
      </div>
      <div class="promise-item">
        <span class="promise-icon">🏆</span>
        <div class="promise-title">FSSAI Certified</div>
        <div class="promise-desc">Every product meets the highest food safety standards in India</div>
      </div>
      <div class="promise-item">
        <span class="promise-icon">📜</span>
        <div class="promise-title">Heritage Recipes</div>
        <div class="promise-desc">Rooted in generations of Karnataka and South Indian culinary tradition</div>
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

<!-- ═══ TESTIMONIALS ═════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <span class="eyebrow" style="display:block;text-align:center;">Happy Customers</span>
    <h2 class="section-title">What Our Customers Say</h2>
    <p class="section-subtitle">Real stories from happy Hombisilu families across India</p>
    <div class="testimonials-grid">
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"Hombisilu's filter coffee powder is the closest I've come to the coffee my grandmother used to make. Absolutely authentic taste!"</p>
        <div class="testi-author">Priya S.</div>
        <div class="testi-role">Happy Customer, Bengaluru</div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"The Kashaya Powder has become a part of our evening ritual. Delicious, calming, and I love that it's completely natural."</p>
        <div class="testi-author">Meera R.</div>
        <div class="testi-role">Wellness Enthusiast, Chennai</div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"Best Appe Midi pickle I have had outside of my native village. The flavour is exactly as I remember from childhood."</p>
        <div class="testi-author">Suresh K.</div>
        <div class="testi-role">Food Lover, Mumbai</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ NEWSLETTER ════════════════════════════════════════ -->
<section class="newsletter-section">
  <div class="newsletter-inner">
    <span class="eyebrow">Stay Connected</span>
    <h2>Get Exclusive Deals &amp; New Arrivals</h2>
    <p>Join our community of food lovers and never miss a seasonal special, new product launch, or exclusive discount.</p>
    <form class="newsletter-form" onsubmit="handleNewsletter(event)">
      <input type="email" placeholder="Enter your email address" required aria-label="Email address">
      <button type="submit">Subscribe</button>
    </form>
    <p class="newsletter-note">No spam. Unsubscribe anytime.</p>
  </div>
</section>

<!-- ═══ CTA ═══════════════════════════════════════════════ -->
<section class="cta-section">
  <div class="cta-inner">
    <span class="eyebrow" style="color:rgba(255,255,255,.6);">Ready to Order?</span>
    <h2 class="cta-title">Taste the Tradition.<br>Savour the Difference.</h2>
    <p class="cta-desc">From our kitchen in Karnataka to your dining table — discover the authentic flavours of South India.</p>
    <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn-white">🛍️ Shop Now</a>
  </div>
</section>

<script>
function handleNewsletter(e) {
  e.preventDefault();
  var btn = e.target.querySelector('button');
  btn.textContent = '✓ Subscribed!';
  btn.style.background = '#1B5E20';
  e.target.querySelector('input').value = '';
  setTimeout(function() { btn.textContent = 'Subscribe'; btn.style.background = ''; }, 3500);
}
</script>

<?php get_footer(); ?>
