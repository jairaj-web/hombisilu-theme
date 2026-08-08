<?php
/**
 * Home — Shop by Category + Best Sellers.
 *
 * Calm, uniform card grids (Gnanajyothi structural language): equal-size
 * category cards with icon + name + one-line description + text link, and
 * a plain wrapping product grid for best sellers (no rails, no carousels).
 *
 * Category list, icon map and the best-sellers query are reused verbatim
 * from the previous front-page.php.
 *
 * Styles: assets/css/home-shop.css (tokens from design-system.css).
 */

$tpl  = get_template_directory_uri();
$shop = hb_shop_url();
?>

<!-- ═══════════ SHOP BY CATEGORY ═══════════ -->
<section class="ds-section ds-section--white">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Browse the Pantry</span>
      <h2 class="ds-title">Shop by Category</h2>
      <p class="ds-sub">Everything we make, sorted the way you shop for it.</p>
    </div>

    <div class="hs-cat-grid">
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
          $icon = isset( $cat_icons[ $term->slug ] ) ? $cat_icons[ $term->slug ] : 'leaf';
          $desc = $term->description ? $term->description : sprintf( '%d items in this category.', (int) $term->count );
      ?>
        <a class="hs-cat-card" href="<?php echo esc_url( get_term_link( $term ) ); ?>">
          <span class="hs-cat-icon" aria-hidden="true"><?php echo hb_icon( $icon, 30 ); ?></span>
          <h3 class="hs-cat-name"><?php echo esc_html( $term->name ); ?></h3>
          <p class="hs-cat-desc"><?php echo esc_html( wp_trim_words( $desc, 14 ) ); ?></p>
          <span class="ds-link hs-cat-link">Shop Now <?php echo hb_icon( 'arrow', 14 ); ?></span>
        </a>
      <?php endforeach; endif; ?>
    </div>
  </div>
</section>

<!-- ═══════════ BEST SELLERS ═══════════ -->
<section class="ds-section ds-section--cream">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Customer Favourites</span>
      <h2 class="ds-title">Our Signature Range</h2>
      <p class="ds-sub">The jars that keep coming back to the same kitchens, month after month.</p>
    </div>

    <div class="ds-grid ds-grid--4">
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

    <div class="hs-shop-more">
      <a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--outline">Browse All Products <?php echo hb_icon( 'arrow', 16 ); ?></a>
    </div>
  </div>
</section>
