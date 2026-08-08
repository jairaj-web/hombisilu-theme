<?php
/**
 * Front page - rebuilt on the ds-* design system (assets/css/design-system.css).
 * Copy, links and every WooCommerce query are carried over unchanged; only the
 * markup and presentation are new. Icon helpers hb_icon() / hb_stars() live in
 * functions.php.
 */
get_header();

$tpl  = get_template_directory_uri();
$shop = hb_shop_url();
?>

<!-- ═══════════ HERO ═══════════ -->
<section class="ds-hero">
  <div class="ds-wrap ds-hero-grid">

    <div class="ds-hero-copy">
      <span class="ds-eyebrow"><?php echo hb_icon( 'leaf', 14 ); ?> 100% Natural &middot; FSSAI Certified</span>

      <h1 class="ds-hero-title">Taste the Tradition.<br><em>Savour the Difference.</em></h1>

      <p class="ds-hero-lead">From the fragrant hills of Karnataka to your kitchen table — authentic, handcrafted South Indian foods made without compromise. No artificial colours, no preservatives, no shortcuts.</p>

      <div class="ds-hero-actions">
        <a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--primary"><?php echo hb_icon( 'bag', 17 ); ?> Order Now</a>
        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="ds-btn ds-btn--outline">Discover Our Story</a>
      </div>

      <div class="ds-hero-trust">
        <span class="ds-hero-trust-item"><?php echo hb_icon( 'check', 17 ); ?> No Preservatives</span>
        <span class="ds-hero-trust-item"><?php echo hb_icon( 'truck', 17 ); ?> Pan-India Delivery</span>
        <span class="ds-hero-trust-item"><?php echo hb_icon( 'tag', 17 ); ?> From &#8377;149</span>
      </div>
    </div>

    <div class="ds-hero-media">
      <div class="ds-hero-ring">
        <img src="<?php echo esc_url( $tpl ); ?>/assets/images/hero-pickle-cutout.webp"
             srcset="<?php echo esc_url( $tpl ); ?>/assets/images/hero-pickle-cutout-600.webp 600w,
                     <?php echo esc_url( $tpl ); ?>/assets/images/hero-pickle-cutout.webp 1000w"
             sizes="(max-width:900px) 70vw, 400px"
             width="1000" height="666"
             alt="Hombisilu authentic South Indian pickle"
             class="ds-hero-img" fetchpriority="high" decoding="async">

        <div class="ds-hero-badge ds-hero-badge--tl">
          <?php echo hb_icon( 'shield', 20 ); ?>
          <div><strong>FSSAI</strong><span>Certified</span></div>
        </div>

        <div class="ds-hero-badge ds-hero-badge--br">
          <div><strong>Free</strong><span>Delivery &#8377;499+</span></div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ═══════════ INFO BAR ═══════════ -->
<div class="ds-infobar">
  <div class="ds-wrap ds-infobar-inner">
    <div class="ds-infobar-item"><?php echo hb_icon( 'pin' ); ?> <span>#12, Somashetti Hall, Chikkabanavara, Bengaluru</span></div>
    <div class="ds-infobar-item"><?php echo hb_icon( 'phone' ); ?> <a href="tel:+916362616933">+91 6362616933</a></div>
    <div class="ds-infobar-item"><?php echo hb_icon( 'clock' ); ?> <span>Mon–Sat 9AM–6PM &middot; Sun 10AM–4PM</span></div>
  </div>
</div>

<!-- ═══════════ TICKER ═══════════ -->
<div class="ds-ticker" aria-hidden="true">
  <div class="ds-ticker-track">
    <?php
    $ticker = [ 'Premium Filter Coffee', 'Heritage Chutney Powders', 'Traditional Pickles', 'Pure Honey', 'Herbal &amp; Wellness', 'Spices &amp; Masalas', 'Candied Fruits' ];
    // Printed twice so the -50% marquee translate loops seamlessly.
    for ( $pass = 0; $pass < 2; $pass++ ) {
        foreach ( $ticker as $item ) {
            echo '<span class="ds-ticker-item">' . $item . '<span class="ds-ticker-star">&#10022;</span></span>';
        }
    }
    ?>
  </div>
</div>

<!-- ═══════════ OUR STORY ═══════════ -->
<section class="ds-section ds-section--white">
  <div class="ds-wrap ds-story">

    <figure class="ds-story-figure">
      <img src="<?php echo esc_url( $tpl ); ?>/assets/images/about-story.webp"
           srcset="<?php echo esc_url( $tpl ); ?>/assets/images/about-story-500.webp 500w,
                   <?php echo esc_url( $tpl ); ?>/assets/images/about-story.webp 800w"
           sizes="(max-width:900px) 90vw, 440px"
           width="800" height="1200"
           alt="Hombisilu heritage kitchen" loading="lazy" decoding="async">
      <figcaption class="ds-story-tag">
        <strong>15+</strong>
        <span>Years of Heritage</span>
      </figcaption>
    </figure>

    <div>
      <div class="ds-head">
        <span class="ds-eyebrow">Our Story</span>
        <h2 class="ds-title">Crafted with Love,<br>Rooted in Karnataka</h2>
        <p class="ds-sub">Hombisilu began with a simple idea — bring the authentic taste of South Indian tradition to every home, without shortcuts. Every jar of chutney powder, every pickle, every drop of honey is made the way our grandmothers made it: patiently, naturally, and with real ingredients sourced from Karnataka's own farms.</p>
      </div>

      <blockquote class="ds-quote">
        We don't just sell food — we bottle memories of home.
        <cite>— Founder, Hombisilu</cite>
      </blockquote>

      <div class="ds-stats">
        <div class="ds-stat"><strong>26</strong><span>Products</span></div>
        <div class="ds-stat"><strong>9</strong><span>Categories</span></div>
        <div class="ds-stat"><strong>1000+</strong><span>Happy Families</span></div>
      </div>

      <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="ds-btn ds-btn--primary">Discover Our Story <?php echo hb_icon( 'arrow', 16 ); ?></a>
    </div>

  </div>
</section>

<!-- ═══════════ CATEGORIES (bento) ═══════════ -->
<section class="ds-section ds-section--cream">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Our Collections</span>
      <h2 class="ds-title">Product Families</h2>
      <p class="ds-sub">Six curated collections rooted in South Indian culinary tradition</p>
    </div>

    <div class="ds-bento">
      <?php
      $categories = [
        [ 'coffee',                      'coffee', '☕ Coffee',              'Premium filter coffee blends for the authentic South Indian brew' ],
        [ 'chutney-powders',             'leaf',   '🌿 Chutney Powders',     'Time-honoured blends to elevate every meal — 7 distinct varieties' ],
        [ 'spices-masalas',              'flame',  '🌶️ Spices &amp; Masalas', 'Pure, aromatic spices from source to shelf — including rare Black Turmeric' ],
        [ 'pickles',                     'jar',    '🫙 Pickles',             'Traditional mango and amla pickles with bold, natural flavours' ],
        [ 'honey-natural-sweeteners',    'drop',   '🍯 Honey &amp; Sweeteners', 'Pure honey and honey-soaked dry fruits — liquid gold from nature' ],
        [ 'herbal-wellness',             'sprout', '🌱 Herbal &amp; Wellness',  'Kashaya, laddus, candied fruits and Jamun Bar for everyday wellness' ],
      ];
      foreach ( $categories as $cat ) :
        list( $slug, $icon, $name, $desc ) = $cat;
      ?>
      <a class="ds-bento-card" href="<?php echo esc_url( home_url( '/product-category/' . $slug . '/' ) ); ?>">
        <span class="ds-bento-icon"><?php echo hb_icon( $icon, 26 ); ?></span>
        <span class="ds-bento-name"><?php echo $name; ?></span>
        <span class="ds-bento-desc"><?php echo $desc; ?></span>
        <span class="ds-link">Shop now <?php echo hb_icon( 'arrow', 14 ); ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════ BEST SELLERS ═══════════ -->
<section class="ds-section ds-section--white">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Customer Favourites</span>
      <h2 class="ds-title">Best Sellers</h2>
      <p class="ds-sub">Our most loved products, trusted by thousands of families across India</p>
    </div>

    <div class="ds-grid ds-grid--4">
      <?php
      $bs_query = new WP_Query( [
        'post_type'      => 'product',
        'post_status'    => 'publish',
        'posts_per_page' => 4,
        'orderby'        => 'date',
        'order'          => 'DESC',
      ] );
      if ( $bs_query->have_posts() ) :
        while ( $bs_query->have_posts() ) : $bs_query->the_post();
          $prod = function_exists( 'wc_get_product' ) ? wc_get_product( get_the_ID() ) : null;
          if ( ! $prod ) { continue; }
          $terms = get_the_terms( get_the_ID(), 'product_cat' );
      ?>
      <article class="ds-prod">
        <a href="<?php the_permalink(); ?>" class="ds-prod-img" aria-label="<?php the_title_attribute(); ?>">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'medium' ); ?>
          <?php else : ?>
            <span class="ds-ph"><?php echo hb_icon( 'leaf', 46 ); ?></span>
          <?php endif; ?>
          <?php if ( $prod->is_on_sale() ) : ?>
            <span class="ds-prod-flag ds-prod-flag--sale">Sale</span>
          <?php else : ?>
            <span class="ds-prod-flag">New</span>
          <?php endif; ?>
        </a>
        <div class="ds-prod-body">
          <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
            <span class="ds-prod-cat"><?php echo esc_html( $terms[0]->name ); ?></span>
          <?php endif; ?>
          <h3 class="ds-prod-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="ds-prod-stars" aria-label="Rated 5 out of 5"><?php echo hb_stars( 13 ); ?></div>
          <div class="ds-prod-price"><?php echo $prod->get_price_html(); ?></div>
          <a href="<?php echo esc_url( $prod->add_to_cart_url() ); ?>" class="ds-btn ds-btn--primary ds-prod-cta"><?php echo hb_icon( 'bag', 15 ); ?> Add to Cart</a>
        </div>
      </article>
      <?php
        endwhile;
        wp_reset_postdata();
      else : ?>
        <p class="ds-sub" style="grid-column:1/-1;text-align:center;">Products loading…</p>
      <?php endif; ?>
    </div>

    <div style="text-align:center;margin-top:var(--ds-s4);">
      <a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--outline">View All Products <?php echo hb_icon( 'arrow', 16 ); ?></a>
    </div>
  </div>
</section>

<!-- ═══════════ DEAL OF THE DAY ═══════════ -->
<section class="ds-section ds-section--cream">
  <div class="ds-wrap">
    <?php
    $deal_ids   = function_exists( 'wc_get_product_ids_on_sale' ) ? wc_get_product_ids_on_sale() : [];
    $deal_query = new WP_Query( [
      'post_type'      => 'product',
      'post_status'    => 'publish',
      'posts_per_page' => 1,
      'post__in'       => ! empty( $deal_ids ) ? $deal_ids : [ 0 ],
      'orderby'        => ! empty( $deal_ids ) ? 'post__in' : 'date',
    ] );
    if ( ! $deal_query->have_posts() ) {
      $deal_query = new WP_Query( [ 'post_type' => 'product', 'post_status' => 'publish', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'ASC' ] );
    }
    if ( $deal_query->have_posts() ) : $deal_query->the_post();
      $deal_prod = function_exists( 'wc_get_product' ) ? wc_get_product( get_the_ID() ) : null;
      $deal_text = get_the_excerpt();
      if ( ! $deal_text && $deal_prod ) { $deal_text = $deal_prod->get_short_description(); }
    ?>
    <div class="ds-deal">
      <div class="ds-deal-figure">
        <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'large' ); else : ?>
          <span class="ds-ph"><?php echo hb_icon( 'leaf', 60 ); ?></span>
        <?php endif; ?>
      </div>
      <div>
        <span class="ds-eyebrow">Deal of the Day</span>
        <h2 class="ds-title"><?php the_title(); ?></h2>
        <p class="ds-deal-text"><?php echo esc_html( wp_trim_words( $deal_text, 26 ) ); ?></p>
        <div class="ds-deal-meta">
          <span class="ds-chip ds-chip--light"><?php echo hb_icon( 'check', 14 ); ?> In stock</span>
          <span class="ds-chip ds-chip--light"><?php echo hb_icon( 'truck', 14 ); ?> Ships in 24h</span>
        </div>
        <div class="ds-deal-price"><?php echo $deal_prod ? $deal_prod->get_price_html() : ''; ?></div>
        <a href="<?php echo $deal_prod ? esc_url( $deal_prod->add_to_cart_url() ) : esc_url( get_the_permalink() ); ?>" class="ds-btn ds-btn--gold"><?php echo hb_icon( 'bag', 16 ); ?> Order Now</a>
      </div>
    </div>
    <?php wp_reset_postdata(); endif; ?>
  </div>
</section>

<!-- ═══════════ HOT DEALS ═══════════ -->
<section class="ds-section ds-section--white">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Limited Time</span>
      <h2 class="ds-title">Hot Deals This Week</h2>
      <p class="ds-sub">Grab these favourites before they're gone</p>
    </div>

    <div class="ds-grid ds-grid--4">
      <?php
      $hot_badges = [ 'Hot', 'New', '-15%', 'Hot' ];
      $hot_query  = new WP_Query( [
        'post_type'      => 'product',
        'post_status'    => 'publish',
        'posts_per_page' => 4,
        'orderby'        => 'rand',
      ] );
      if ( $hot_query->have_posts() ) :
        $hi = 0;
        while ( $hot_query->have_posts() ) : $hot_query->the_post();
      ?>
      <a href="<?php the_permalink(); ?>" class="ds-prod">
        <span class="ds-prod-img">
          <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'medium' ); else : ?>
            <span class="ds-ph"><?php echo hb_icon( 'leaf', 40 ); ?></span>
          <?php endif; ?>
          <span class="ds-prod-flag ds-prod-flag--gold"><?php echo esc_html( $hot_badges[ $hi % count( $hot_badges ) ] ); ?></span>
        </span>
        <span class="ds-prod-body">
          <span class="ds-prod-title"><?php the_title(); ?></span>
          <span class="ds-link">Order now <?php echo hb_icon( 'arrow', 14 ); ?></span>
        </span>
      </a>
      <?php
          $hi++;
        endwhile;
        wp_reset_postdata();
      else : ?>
        <p class="ds-sub" style="grid-column:1/-1;text-align:center;">Deals loading…</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ═══════════ OUR PROMISE ═══════════ -->
<section class="ds-section ds-section--dark">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Our Commitment</span>
      <h2 class="ds-title">Clean. Pure. Honest.</h2>
      <p class="ds-sub">Five pillars that guide everything we make</p>
    </div>

    <div class="ds-promise-grid">
      <?php
      $promises = [
        [ 'leaf',   '🌿 100% Natural',        'No artificial flavours, colours, or preservatives across our entire range' ],
        [ 'shield', '🏆 FSSAI Certified',     'Every product meets the highest food safety standards in India' ],
        [ 'book',   '📜 Heritage Recipes',    'Rooted in Karnataka and South Indian culinary traditions for generations' ],
        [ 'heart',  '🤝 Thoughtfully Sourced','Premium, locally sourced ingredients from trusted Karnataka farmers' ],
        [ 'grid',   '🛍️ Wide Range',          '26 products across 9 categories for your complete South Indian pantry' ],
      ];
      foreach ( $promises as $p ) : ?>
      <div class="ds-promise-card">
        <span class="ds-promise-icon"><?php echo hb_icon( $p[0], 24 ); ?></span>
        <h3><?php echo $p[1]; ?></h3>
        <p><?php echo $p[2]; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════ TESTIMONIALS ═══════════ -->
<section class="ds-section ds-section--cream">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Happy Families</span>
      <h2 class="ds-title">What Our Customers Say</h2>
      <p class="ds-sub">Real stories from happy Hombisilu families across India</p>
    </div>

    <div class="ds-testi-grid">
      <?php
      $testimonials = [
        [ 'Priya S.',  'Bengaluru', "Hombisilu's filter coffee powder is the closest I've come to the coffee my grandmother used to make. Absolutely authentic taste!", false ],
        [ 'Meera R.',  'Chennai',   "The Kashaya Powder has become a part of our evening ritual. Delicious, calming, and I love that it's completely natural.", true ],
        [ 'Suresh K.', 'Mumbai',    "Best Appe Midi pickle I have had outside of my native village. The flavour is exactly as I remember from childhood.", false ],
      ];
      foreach ( $testimonials as $t ) :
        list( $name, $loc, $text, $featured ) = $t;
      ?>
      <figure class="ds-testi<?php echo $featured ? ' ds-testi--featured' : ''; ?>">
        <div class="ds-testi-stars" aria-label="Rated 5 out of 5"><?php echo hb_stars( 15 ); ?></div>
        <blockquote class="ds-testi-text"><?php echo esc_html( $text ); ?></blockquote>
        <figcaption class="ds-testi-who">
          <span class="ds-testi-avatar" aria-hidden="true"><?php echo esc_html( substr( $name, 0, 1 ) ); ?></span>
          <span>
            <span class="ds-testi-name"><?php echo esc_html( $name ); ?></span><br>
            <span class="ds-testi-loc"><?php echo esc_html( $loc ); ?></span>
          </span>
        </figcaption>
      </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════ NEWS & BLOG ═══════════ -->
<?php
$blog_query = new WP_Query( [
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'posts_per_page' => 3,
] );
if ( $blog_query->have_posts() ) : ?>
<section class="ds-section ds-section--white">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Stories &amp; Tips</span>
      <h2 class="ds-title">News &amp; Blog</h2>
      <p class="ds-sub">Recipes, wellness tips and stories from the Hombisilu kitchen</p>
    </div>

    <div class="ds-grid ds-grid--3">
      <?php while ( $blog_query->have_posts() ) : $blog_query->the_post();
        $cats = get_the_category(); ?>
      <a href="<?php the_permalink(); ?>" class="ds-card ds-blog-card">
        <span class="ds-blog-figure">
          <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'medium' ); else : ?>
            <span class="ds-ph"><?php echo hb_icon( 'leaf', 40 ); ?></span>
          <?php endif; ?>
        </span>
        <span class="ds-blog-body">
          <span class="ds-blog-meta">
            <span class="ds-blog-cat"><?php echo ! empty( $cats ) ? esc_html( $cats[0]->name ) : 'Wellness'; ?></span>
            <span>&middot;</span>
            <span><?php the_time( 'j M Y' ); ?></span>
          </span>
          <span class="ds-blog-title"><?php the_title(); ?></span>
          <span class="ds-link">Read more <?php echo hb_icon( 'arrow', 14 ); ?></span>
        </span>
      </a>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php else : wp_reset_postdata(); endif; ?>

<!-- ═══════════ GALLERY + NEWSLETTER ═══════════ -->
<?php
$gal_query = new WP_Query( [
  'post_type'      => 'product',
  'post_status'    => 'publish',
  'posts_per_page' => 8,
  'orderby'        => 'rand',
  'meta_query'     => [ [ 'key' => '_thumbnail_id', 'compare' => 'EXISTS' ] ],
] );
if ( $gal_query->have_posts() ) : ?>
<div class="ds-gallery">
  <?php while ( $gal_query->have_posts() ) : $gal_query->the_post(); ?>
    <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
  <?php endwhile; wp_reset_postdata(); ?>
</div>
<?php endif; ?>

<section class="ds-section ds-section--tight ds-section--dark">
  <div class="ds-wrap ds-wrap--narrow ds-newsletter">
    <span class="ds-promise-icon" style="margin-inline:auto;"><?php echo hb_icon( 'mail', 24 ); ?></span>
    <h2 class="ds-title">Get Exclusive Deals &amp; New Arrivals</h2>
    <p class="ds-sub">Join our community of food lovers. No spam — unsubscribe anytime.</p>
    <form class="ds-nl-form" onsubmit="hpNewsletter(event)">
      <label for="ds-nl-email" class="screen-reader-text">Email address</label>
      <input id="ds-nl-email" type="email" placeholder="Enter your email address" autocomplete="email" required>
      <button type="submit" class="ds-btn ds-btn--gold">Subscribe</button>
    </form>
  </div>
</section>

<!-- ═══════════ CTA ═══════════ -->
<section class="ds-section ds-section--dark ds-cta">
  <div class="ds-wrap ds-wrap--narrow">
    <span class="ds-eyebrow" style="justify-content:center;">Ready to Order?</span>
    <h2 class="ds-cta-title">Taste the Tradition.<br>Savour the Difference.</h2>
    <p class="ds-cta-desc">From our kitchen in Karnataka to your dining table — discover the authentic flavours of South India.</p>
    <div class="ds-cta-actions">
      <a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--white"><?php echo hb_icon( 'bag', 17 ); ?> Shop Now</a>
      <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="ds-btn ds-btn--ghost-light">Our Story <?php echo hb_icon( 'arrow', 16 ); ?></a>
    </div>
  </div>
</section>

<script>
function hpNewsletter(e) {
  e.preventDefault();
  var form = e.target;
  var btn  = form.querySelector('button');
  btn.textContent = 'Subscribed ✓';
  btn.disabled = true;
  form.querySelector('input').value = '';
  setTimeout(function () {
    btn.textContent = 'Subscribe';
    btn.disabled = false;
  }, 3200);
}
</script>

<?php get_footer(); ?>
