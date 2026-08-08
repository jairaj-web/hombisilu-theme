<?php
/**
 * Front page — section architecture modelled on the Barab home-2 reference,
 * built with the Hombisilu palette, copy and catalogue.
 *
 * Reference order: hero slider, category circles, process steps, signature
 * product rail, deals split, ordering features, promo pair, enquiry form,
 * testimonials, blog rail, gallery grid, location.
 *
 * Three reference sections are dine-in specific and map onto this business:
 *   table reservation -> bulk & corporate order enquiry
 *   app store badges  -> WhatsApp ordering
 *   Instagram feed    -> product gallery
 *
 * Styles: assets/css/home-barab.css (tokens from design-system.css).
 */
get_header();

$tpl  = get_template_directory_uri();
$shop = hb_shop_url();
?>

<!-- ═══════════ 1. HERO SLIDER ═══════════ -->
<section class="bb-hero" aria-roledescription="carousel" aria-label="Featured">
  <div class="bb-hero-track" id="bb-hero-track">
    <?php
    $slides = [
      [
        'welcome' => 'Welcome to Hombisilu',
        'title'   => 'Authentic <em>Pickles</em> from Karnataka',
        'text'    => 'Hand-cut, sun-cured and packed the way our grandmothers did it. No artificial colours, no preservatives, no shortcuts.',
        'price'   => '149',
        'img'     => 'hero-pickle',
      ],
      [
        'welcome' => 'Freshly Roasted',
        'title'   => 'Premium <em>Filter Coffee</em> Blends',
        'text'    => 'Estate-grown beans roasted in small batches and ground for the perfect South Indian decoction every morning.',
        'price'   => '199',
        'img'     => 'hero-bg',
      ],
      [
        'welcome' => 'Heritage Recipes',
        'title'   => 'Chutney Powders &amp; <em>Masalas</em>',
        'text'    => 'Seven distinct varieties, stone-ground in small batches from spices sourced direct from Karnataka farms.',
        'price'   => '129',
        'img'     => 'hero-candied',
      ],
    ];
    foreach ( $slides as $i => $s ) : ?>
      <article class="bb-slide" aria-label="Slide <?php echo (int) $i + 1; ?> of <?php echo count( $slides ); ?>">
        <img class="bb-slide-bg"
             src="<?php echo esc_url( $tpl . '/assets/images/' . $s['img'] . '.webp' ); ?>"
             srcset="<?php echo esc_url( $tpl . '/assets/images/' . $s['img'] . '-900.webp' ); ?> 900w,
                     <?php echo esc_url( $tpl . '/assets/images/' . $s['img'] . '.webp' ); ?> 1600w"
             sizes="100vw"
             alt=""
             width="1600" height="900"
             <?php echo 0 === $i ? 'fetchpriority="high"' : 'loading="lazy"'; ?>
             decoding="async">
        <div class="ds-wrap">
          <div class="bb-slide-inner">
            <span class="bb-slide-welcome"><?php echo hb_icon( 'leaf', 14 ); ?> <?php echo esc_html( $s['welcome'] ); ?></span>
            <h<?php echo 0 === $i ? '1' : '2'; ?> class="bb-slide-title"><?php echo $s['title']; ?></h<?php echo 0 === $i ? '1' : '2'; ?>>
            <p class="bb-slide-text"><?php echo esc_html( $s['text'] ); ?></p>
            <span class="bb-slide-price">Starting at <strong>&#8377;<?php echo esc_html( $s['price'] ); ?></strong></span>
            <div class="bb-slide-actions">
              <a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--gold"><?php echo hb_icon( 'bag', 17 ); ?> Shop Now</a>
              <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="ds-btn ds-btn--ghost-light">Our Story <?php echo hb_icon( 'arrow', 16 ); ?></a>
            </div>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>

  <div class="bb-hero-controls">
    <button class="bb-arrow bb-arrow--prev" data-hero="prev" aria-label="Previous slide"><?php echo hb_icon( 'arrow', 18 ); ?></button>
    <div class="bb-hero-dots" id="bb-hero-dots" role="tablist" aria-label="Choose slide">
      <?php foreach ( $slides as $i => $s ) : ?>
        <button class="bb-hero-dot<?php echo 0 === $i ? ' is-active' : ''; ?>" data-slide="<?php echo (int) $i; ?>" role="tab" aria-label="Slide <?php echo (int) $i + 1; ?>" aria-selected="<?php echo 0 === $i ? 'true' : 'false'; ?>"></button>
      <?php endforeach; ?>
    </div>
    <button class="bb-arrow" data-hero="next" aria-label="Next slide"><?php echo hb_icon( 'arrow', 18 ); ?></button>
  </div>
</section>

<!-- ═══════════ 2. CATEGORY CIRCLES ═══════════ -->
<section class="ds-section ds-section--tight ds-section--white">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Browse the Pantry</span>
      <h2 class="ds-title">Shop by Category</h2>
    </div>

    <div class="bb-cats">
      <?php
      $cat_icons = [
        'coffee'                   => 'coffee',
        'chutney-powders'          => 'leaf',
        'spices-masalas'           => 'flame',
        'pickles'                  => 'jar',
        'honey-natural-sweeteners' => 'drop',
        'herbal-wellness'          => 'sprout',
        'candied-fruits'           => 'heart',
      ];
      $terms = get_terms( [ 'taxonomy' => 'product_cat', 'hide_empty' => true, 'exclude' => [ 15 ] ] );
      if ( $terms && ! is_wp_error( $terms ) ) :
        foreach ( $terms as $term ) :
          $icon  = isset( $cat_icons[ $term->slug ] ) ? $cat_icons[ $term->slug ] : 'leaf';
          $thumb = get_term_meta( $term->term_id, 'thumbnail_id', true );
      ?>
        <a class="bb-cat" href="<?php echo esc_url( get_term_link( $term ) ); ?>">
          <span class="bb-cat-ring">
            <?php
            if ( $thumb ) {
              echo wp_get_attachment_image( $thumb, 'medium', false, [ 'loading' => 'lazy', 'decoding' => 'async', 'alt' => '' ] );
            } else {
              echo hb_icon( $icon, 44 );
            }
            ?>
          </span>
          <span class="bb-cat-name"><?php echo esc_html( $term->name ); ?></span>
          <span class="bb-cat-count"><?php echo (int) $term->count; ?> items</span>
        </a>
      <?php endforeach; endif; ?>
    </div>
  </div>
</section>

<!-- ═══════════ 3. PROCESS STEPS ═══════════ -->
<section class="ds-section ds-section--cream">
  <div class="ds-wrap bb-process">

    <figure class="bb-process-figure">
      <img src="<?php echo esc_url( $tpl ); ?>/assets/images/about-story.webp"
           srcset="<?php echo esc_url( $tpl ); ?>/assets/images/about-story-500.webp 500w,
                   <?php echo esc_url( $tpl ); ?>/assets/images/about-story.webp 800w"
           sizes="(max-width:900px) 90vw, 460px"
           width="800" height="1200"
           alt="Hombisilu heritage kitchen" loading="lazy" decoding="async">
      <figcaption class="bb-process-stat">
        <strong>15+</strong>
        <span>Years of Heritage</span>
      </figcaption>
    </figure>

    <div>
      <div class="ds-head">
        <span class="ds-eyebrow">How We Make It</span>
        <h2 class="ds-title">From Karnataka Farms to Your Kitchen</h2>
        <p class="ds-sub">Every jar takes the long route. Three stages, no shortcuts, exactly as it has been done for generations.</p>
      </div>

      <div class="bb-steps">
        <?php
        $steps = [
          [ 'Sourced Direct', 'Spices, mangoes and coffee cherries bought straight from trusted Karnataka growers — never through a commodity market.' ],
          [ 'Small-Batch Made', 'Stone-ground, sun-cured and slow-roasted in batches small enough to taste and correct at every stage.' ],
          [ 'Sealed & Shipped', 'Packed the same week it is made, sealed for freshness, and dispatched pan-India within 24 hours.' ],
        ];
        foreach ( $steps as $n => $step ) : ?>
          <div class="bb-step">
            <span class="bb-step-num"><?php echo esc_html( sprintf( '%02d', $n + 1 ) ); ?></span>
            <div>
              <h3><?php echo esc_html( $step[0] ); ?></h3>
              <p><?php echo esc_html( $step[1] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="ds-btn ds-btn--primary" style="margin-top:var(--ds-s3);">Read Our Story <?php echo hb_icon( 'arrow', 16 ); ?></a>
    </div>

  </div>
</section>

<!-- ═══════════ 4. SIGNATURE PRODUCT RAIL ═══════════ -->
<section class="ds-section ds-section--white">
  <div class="ds-wrap">
    <div class="bb-rail-head">
      <div class="ds-head">
        <span class="ds-eyebrow">Customer Favourites</span>
        <h2 class="ds-title">Our Signature Range</h2>
        <p class="ds-sub">The jars that keep coming back to the same kitchens, month after month.</p>
      </div>
      <div class="bb-arrows" data-rail-controls="signature">
        <button class="bb-arrow bb-arrow--prev" data-dir="-1" aria-label="Scroll left"><?php echo hb_icon( 'arrow', 18 ); ?></button>
        <button class="bb-arrow" data-dir="1" aria-label="Scroll right"><?php echo hb_icon( 'arrow', 18 ); ?></button>
      </div>
    </div>

    <div class="bb-rail" data-rail="signature">
      <?php
      $sig = new WP_Query( [
        'post_type'      => 'product',
        'post_status'    => 'publish',
        'posts_per_page' => 8,
        'orderby'        => 'date',
        'order'          => 'DESC',
      ] );
      if ( $sig->have_posts() ) :
        $si = 0;
        while ( $sig->have_posts() ) : $sig->the_post();
          $prod = function_exists( 'wc_get_product' ) ? wc_get_product( get_the_ID() ) : null;
          if ( ! $prod ) { continue; }
          $rating = (float) $prod->get_average_rating();
          $pterms = get_the_terms( get_the_ID(), 'product_cat' );
      ?>
      <article class="ds-prod">
        <a href="<?php the_permalink(); ?>" class="ds-prod-img" aria-label="<?php the_title_attribute(); ?>">
          <?php if ( has_post_thumbnail() ) :
            the_post_thumbnail( 'medium', [
              'loading'  => $si < 4 ? 'eager' : 'lazy',
              'decoding' => 'async',
            ] );
          else : ?>
            <span class="ds-ph"><?php echo hb_icon( 'leaf', 44 ); ?></span>
          <?php endif; ?>
          <?php if ( $prod->is_on_sale() ) : ?>
            <span class="ds-prod-flag ds-prod-flag--sale">Sale</span>
          <?php endif; ?>
        </a>
        <div class="ds-prod-body">
          <?php if ( $pterms && ! is_wp_error( $pterms ) ) : ?>
            <span class="ds-prod-cat"><?php echo esc_html( $pterms[0]->name ); ?></span>
          <?php endif; ?>
          <h3 class="ds-prod-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="ds-prod-stars" aria-label="Rated <?php echo esc_attr( $rating ? $rating : 5 ); ?> out of 5">
            <?php for ( $s = 1; $s <= 5; $s++ ) : ?>
              <span class="<?php echo ( ! $rating || $s <= round( $rating ) ) ? 'is-on' : 'is-off'; ?>"><?php echo hb_icon( 'star', 13 ); ?></span>
            <?php endfor; ?>
          </div>
          <div class="ds-prod-price"><?php echo $prod->get_price_html(); ?></div>
          <a href="<?php echo esc_url( $prod->add_to_cart_url() ); ?>" class="ds-btn ds-btn--primary ds-prod-cta add_to_cart_button ajax_add_to_cart"
             data-product_id="<?php echo (int) get_the_ID(); ?>"
             data-product_type="<?php echo esc_attr( $prod->get_type() ); ?>"
             rel="nofollow"><?php echo hb_icon( 'bag', 15 ); ?> Add to Cart</a>
        </div>
      </article>
      <?php $si++; endwhile; wp_reset_postdata(); endif; ?>
    </div>

    <div style="text-align:center;margin-top:var(--ds-s4);">
      <a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--outline">Browse All Products <?php echo hb_icon( 'arrow', 16 ); ?></a>
    </div>
  </div>
</section>

<!-- ═══════════ 5. DEALS SPLIT ═══════════ -->
<section class="ds-section ds-section--cream">
  <div class="ds-wrap bb-deals">

    <figure class="bb-deals-figure">
      <img src="<?php echo esc_url( $tpl ); ?>/assets/images/hero-candied.webp" alt="Hombisilu combo hampers" width="1000" height="1250" loading="lazy" decoding="async">
      <figcaption>Best Value Combos &amp; Hampers</figcaption>
    </figure>

    <div>
      <div class="ds-head">
        <span class="ds-eyebrow">Save More</span>
        <h2 class="ds-title">Pantry Packs Built for Real Kitchens</h2>
        <p class="ds-sub">Three ways to stock up — priced below buying each jar on its own.</p>
      </div>

      <div class="bb-combos">
        <?php
        $combos = [
          [ 'jar',    'Starter Jar Pack',   'Any two chutney powders plus one pickle — the easiest place to begin.', '449' ],
          [ 'grid',   'Family Pantry Box',  'Six essentials: coffee, two masalas, two chutney powders and a pickle.', '1,299' ],
          [ 'heart',  'Gifting Hamper',     'Presentation box with honey, candied fruits and a heritage chutney set.', '899' ],
        ];
        foreach ( $combos as $c ) : ?>
          <div class="bb-combo">
            <span class="bb-combo-icon"><?php echo hb_icon( $c[0], 26 ); ?></span>
            <div>
              <h3><?php echo esc_html( $c[1] ); ?></h3>
              <p><?php echo esc_html( $c[2] ); ?></p>
            </div>
            <span class="bb-combo-price">&#8377;<?php echo esc_html( $c[3] ); ?></span>
          </div>
        <?php endforeach; ?>
      </div>

      <a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--gold" style="margin-top:var(--ds-s3);"><?php echo hb_icon( 'bag', 16 ); ?> Order Now</a>
    </div>

  </div>
</section>

<!-- ═══════════ 6. ORDERING FEATURES ═══════════ -->
<section class="ds-section ds-section--dark">
  <div class="ds-wrap bb-order">

    <div>
      <div class="ds-head">
        <span class="ds-eyebrow">Ordering Made Simple</span>
        <h2 class="ds-title">Packed This Week. Shipped Tomorrow.</h2>
        <p class="ds-sub">No warehouses full of year-old stock — we make to order and dispatch fast.</p>
      </div>

      <div class="bb-features">
        <?php
        $feats = [
          [ 'truck', 'Dispatch in 24 Hours',   'Orders placed before 4PM leave our kitchen the next working day.' ],
          [ 'tag',   'Free Shipping ₹499+',    'Flat pan-India delivery, free on every order above ₹499.' ],
          [ 'chat',  'Order on WhatsApp',      'Prefer to talk? Send us a message and we will build the order for you.' ],
        ];
        foreach ( $feats as $f ) : ?>
          <div class="bb-feature">
            <span class="bb-feature-icon"><?php echo hb_icon( $f[0], 24 ); ?></span>
            <div>
              <h3><?php echo esc_html( $f[1] ); ?></h3>
              <p><?php echo esc_html( $f[2] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="ds-cta-actions" style="justify-content:flex-start;margin-top:var(--ds-s3);">
        <a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--gold"><?php echo hb_icon( 'bag', 16 ); ?> Start an Order</a>
        <a href="https://wa.me/916362616933" target="_blank" rel="noopener" class="ds-btn ds-btn--ghost-light"><?php echo hb_icon( 'chat', 16 ); ?> WhatsApp Us</a>
      </div>
    </div>

    <figure class="bb-order-figure">
      <img src="<?php echo esc_url( $tpl ); ?>/assets/images/hero-pickle.webp" alt="Hombisilu pickles ready to ship" width="1000" height="1000" loading="lazy" decoding="async">
    </figure>

  </div>
</section>

<!-- ═══════════ 7. PROMO PAIR ═══════════ -->
<section class="ds-section ds-section--tight ds-section--white">
  <div class="ds-wrap bb-promos">

    <article class="bb-promo">
      <img src="<?php echo esc_url( $tpl ); ?>/assets/images/hero-bg-new.webp" alt="" width="1200" height="800" loading="lazy" decoding="async">
      <span class="bb-promo-kicker">This Season</span>
      <h3>Fresh Mango Pickle</h3>
      <p>Cut and cured this harvest. Once the season's batch is gone, it is gone.</p>
      <a href="<?php echo esc_url( home_url( '/product-category/pickles/' ) ); ?>" class="ds-btn ds-btn--gold">Order Now <?php echo hb_icon( 'arrow', 16 ); ?></a>
    </article>

    <article class="bb-promo">
      <img src="<?php echo esc_url( $tpl ); ?>/assets/images/about-hero-spices.webp" alt="" width="1200" height="800" loading="lazy" decoding="async">
      <span class="bb-promo-kicker">Everyday Essential</span>
      <h3>Filter Coffee Blends</h3>
      <p>Small-batch roasted and ground for the perfect morning decoction.</p>
      <a href="<?php echo esc_url( home_url( '/product-category/coffee/' ) ); ?>" class="ds-btn ds-btn--gold">Order Now <?php echo hb_icon( 'arrow', 16 ); ?></a>
    </article>

  </div>
</section>

<!-- ═══════════ 8. BULK ENQUIRY (reservation equivalent) ═══════════ -->
<section class="ds-section ds-section--cream">
  <div class="ds-wrap">
    <div class="bb-enquiry">

      <figure class="bb-enquiry-figure">
        <img src="<?php echo esc_url( $tpl ); ?>/assets/images/about-hero.webp" alt="Hombisilu bulk orders" width="1000" height="1000" loading="lazy" decoding="async">
      </figure>

      <div class="bb-enquiry-body">
        <span class="ds-eyebrow">Bulk &amp; Corporate</span>
        <h2 class="ds-title">Ordering for an Office or Event?</h2>
        <p class="ds-sub">Festival hampers, wedding returns, corporate gifting — tell us the size and we will quote within a day.</p>

        <form class="bb-enquiry-form" action="https://wa.me/916362616933" method="get" target="_blank" rel="noopener">
          <div class="bb-field-row">
            <div class="bb-field">
              <label for="bb-qty">Quantity</label>
              <select id="bb-qty" name="qty">
                <option>10 – 25 units</option>
                <option>25 – 50 units</option>
                <option>50 – 100 units</option>
                <option>100 – 250 units</option>
                <option>250+ units</option>
              </select>
            </div>
            <div class="bb-field">
              <label for="bb-type">Order type</label>
              <select id="bb-type" name="type">
                <option>Corporate gifting</option>
                <option>Wedding / event returns</option>
                <option>Festival hampers</option>
                <option>Reseller / stockist</option>
              </select>
            </div>
          </div>
          <div class="bb-field">
            <label for="bb-note">Anything else?</label>
            <textarea id="bb-note" name="text" placeholder="Tell us the products, timeline and delivery city."></textarea>
          </div>
          <button type="submit" class="ds-btn ds-btn--primary"><?php echo hb_icon( 'chat', 16 ); ?> Send Enquiry on WhatsApp</button>
        </form>

        <p class="bb-enquiry-note">*Quotes issued within one working day &middot; Minimum order 10 units</p>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════ 9. TESTIMONIALS ═══════════ -->
<section class="ds-section ds-section--white">
  <div class="ds-wrap bb-testi-wrap">

    <figure class="bb-testi-figure">
      <img src="<?php echo esc_url( $tpl ); ?>/assets/images/about-story.webp" alt="A Hombisilu customer kitchen" width="800" height="1067" loading="lazy" decoding="async">
    </figure>

    <div>
      <div class="bb-rail-head">
        <div class="ds-head">
          <span class="ds-eyebrow">Happy Families</span>
          <h2 class="ds-title">What Our Customers Say</h2>
        </div>
        <div class="bb-arrows" data-rail-controls="testi">
          <button class="bb-arrow bb-arrow--prev" data-dir="-1" aria-label="Previous testimonial"><?php echo hb_icon( 'arrow', 18 ); ?></button>
          <button class="bb-arrow" data-dir="1" aria-label="Next testimonial"><?php echo hb_icon( 'arrow', 18 ); ?></button>
        </div>
      </div>

      <div class="bb-rail" data-rail="testi" style="grid-auto-columns:minmax(0,100%);">
        <?php
        $testimonials = [
          [ 'Priya S.',  'Bengaluru', "Hombisilu's filter coffee powder is the closest I've come to the coffee my grandmother used to make. Absolutely authentic taste!" ],
          [ 'Meera R.',  'Chennai',   "The Kashaya Powder has become a part of our evening ritual. Delicious, calming, and I love that it's completely natural." ],
          [ 'Suresh K.', 'Mumbai',    "Best Appe Midi pickle I have had outside of my native village. The flavour is exactly as I remember from childhood." ],
          [ 'Anitha D.', 'Hyderabad', "Ordered a festival hamper for twenty colleagues. Packed beautifully and every single person asked where it came from." ],
        ];
        foreach ( $testimonials as $t ) : ?>
          <figure class="ds-testi">
            <div class="ds-testi-stars" aria-label="Rated 5 out of 5"><?php echo hb_stars( 15 ); ?></div>
            <blockquote class="ds-testi-text"><?php echo esc_html( $t[2] ); ?></blockquote>
            <figcaption class="ds-testi-who">
              <span class="ds-testi-avatar" aria-hidden="true"><?php echo esc_html( substr( $t[0], 0, 1 ) ); ?></span>
              <span>
                <span class="ds-testi-name"><?php echo esc_html( $t[0] ); ?></span><br>
                <span class="ds-testi-loc">Customer of Hombisilu &middot; <?php echo esc_html( $t[1] ); ?></span>
              </span>
            </figcaption>
          </figure>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<!-- ═══════════ 10. NEWS & BLOG ═══════════ -->
<?php
$blog = new WP_Query( [ 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 6 ] );
if ( $blog->have_posts() ) : ?>
<section class="ds-section ds-section--cream">
  <div class="ds-wrap">
    <div class="bb-rail-head">
      <div class="ds-head">
        <span class="ds-eyebrow">Stories &amp; Tips</span>
        <h2 class="ds-title">News &amp; Blog</h2>
      </div>
      <div class="bb-arrows" data-rail-controls="blog">
        <button class="bb-arrow bb-arrow--prev" data-dir="-1" aria-label="Scroll left"><?php echo hb_icon( 'arrow', 18 ); ?></button>
        <button class="bb-arrow" data-dir="1" aria-label="Scroll right"><?php echo hb_icon( 'arrow', 18 ); ?></button>
      </div>
    </div>

    <div class="bb-rail" data-rail="blog">
      <?php while ( $blog->have_posts() ) : $blog->the_post();
        $cats = get_the_category(); ?>
        <a href="<?php the_permalink(); ?>" class="ds-card ds-blog-card">
          <span class="ds-blog-figure">
            <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'medium', [ 'loading' => 'lazy', 'decoding' => 'async' ] ); else : ?>
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

<!-- ═══════════ 11. GALLERY (Instagram equivalent) ═══════════ -->
<?php
$gal = new WP_Query( [
  'post_type'      => 'product',
  'post_status'    => 'publish',
  'posts_per_page' => 10,
  'orderby'        => 'rand',
  'meta_query'     => [ [ 'key' => '_thumbnail_id', 'compare' => 'EXISTS' ] ],
] );
if ( $gal->have_posts() ) : ?>
<section class="ds-section ds-section--tight ds-section--white">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Connect with Us</span>
      <h2 class="ds-title">From Our Kitchen</h2>
    </div>
  </div>
  <div class="bb-gallery">
    <?php while ( $gal->have_posts() ) : $gal->the_post(); ?>
      <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail( 'thumbnail', [ 'loading' => 'lazy', 'decoding' => 'async' ] ); ?>
      </a>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
<?php endif; ?>

<!-- ═══════════ 12. LOCATION ═══════════ -->
<section class="ds-section ds-section--dark">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Find Us</span>
      <h2 class="ds-title">Visit the Hombisilu Kitchen</h2>
    </div>

    <div class="bb-location">
      <div class="bb-location-card">
        <span class="bb-feature-icon"><?php echo hb_icon( 'pin', 22 ); ?></span>
        <h3>Address</h3>
        <p>#12, Somashetti Hall,<br>Chikkabanavara,<br>Bengaluru – 560090</p>
      </div>
      <div class="bb-location-card">
        <span class="bb-feature-icon"><?php echo hb_icon( 'clock', 22 ); ?></span>
        <h3>Opening Hours</h3>
        <p>Mon – Sat: 9AM – 6PM<br>Sunday: 10AM – 4PM</p>
      </div>
      <div class="bb-location-card">
        <span class="bb-feature-icon"><?php echo hb_icon( 'phone', 22 ); ?></span>
        <h3>Talk to Us</h3>
        <p><a href="tel:+916362616933">+91 6362616933</a><br><a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a></p>
      </div>
      <div class="bb-location-card">
        <span class="bb-feature-icon"><?php echo hb_icon( 'shield', 22 ); ?></span>
        <h3>Certification</h3>
        <p>FSSAI No. 11225332000490<br>100% vegetarian, no preservatives</p>
      </div>
    </div>
  </div>
</section>

<script>
(function () {
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ── Hero slider ─────────────────────────────────────── */
  var track = document.getElementById('bb-hero-track');
  if (track) {
    var slides = track.children;
    var dots   = Array.prototype.slice.call(document.querySelectorAll('.bb-hero-dot'));

    function slideIndex() {
      return Math.round(track.scrollLeft / track.clientWidth);
    }
    function goTo(i) {
      var n = slides.length;
      var target = ((i % n) + n) % n;   /* wrap in both directions */
      track.scrollTo({ left: target * track.clientWidth, behavior: reduced ? 'auto' : 'smooth' });
    }
    function syncDots() {
      var current = slideIndex();
      dots.forEach(function (d, i) {
        d.classList.toggle('is-active', i === current);
        d.setAttribute('aria-selected', i === current ? 'true' : 'false');
      });
    }

    document.querySelectorAll('[data-hero]').forEach(function (btn) {
      btn.addEventListener('click', function () {
        goTo(slideIndex() + (btn.dataset.hero === 'next' ? 1 : -1));
      });
    });
    dots.forEach(function (d) {
      d.addEventListener('click', function () { goTo(parseInt(d.dataset.slide, 10)); });
    });

    var scrollTick;
    track.addEventListener('scroll', function () {
      clearTimeout(scrollTick);
      scrollTick = setTimeout(syncDots, 90);
    }, { passive: true });

    /* Autoplay, paused while hovered, focused, or off-screen. */
    if (!reduced && slides.length > 1) {
      var timer = null;
      function play()  { if (!timer) timer = setInterval(function () { goTo(slideIndex() + 1); }, 6500); }
      function pause() { clearInterval(timer); timer = null; }

      track.addEventListener('mouseenter', pause);
      track.addEventListener('mouseleave', play);
      track.addEventListener('focusin', pause);
      track.addEventListener('focusout', play);

      if ('IntersectionObserver' in window) {
        new IntersectionObserver(function (entries) {
          entries[0].isIntersecting ? play() : pause();
        }, { threshold: 0.25 }).observe(track);
      } else {
        play();
      }
    }
  }

  /* ── Content rails ───────────────────────────────────── */
  document.querySelectorAll('[data-rail-controls]').forEach(function (controls) {
    var rail = document.querySelector('[data-rail="' + controls.dataset.railControls + '"]');
    if (!rail) return;

    function step() {
      var first = rail.firstElementChild;
      if (!first) return rail.clientWidth;
      var gap = parseFloat(getComputedStyle(rail).columnGap) || 0;
      return first.getBoundingClientRect().width + gap;
    }
    function syncArrows() {
      var maxScroll = rail.scrollWidth - rail.clientWidth - 2;
      controls.querySelectorAll('.bb-arrow').forEach(function (btn) {
        var forward = btn.dataset.dir === '1';
        btn.disabled = forward ? rail.scrollLeft >= maxScroll : rail.scrollLeft <= 2;
      });
    }

    controls.querySelectorAll('.bb-arrow').forEach(function (btn) {
      btn.addEventListener('click', function () {
        rail.scrollBy({ left: step() * parseInt(btn.dataset.dir, 10), behavior: reduced ? 'auto' : 'smooth' });
      });
    });

    var tick;
    rail.addEventListener('scroll', function () {
      clearTimeout(tick);
      tick = setTimeout(syncArrows, 90);
    }, { passive: true });
    window.addEventListener('resize', syncArrows, { passive: true });
    syncArrows();
  });
})();
</script>

<?php get_footer(); ?>
