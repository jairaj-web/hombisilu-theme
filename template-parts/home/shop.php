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
          $desc = $term->description ? $term->description : sprintf( '%d item%s in this category.', (int) $term->count, 1 === (int) $term->count ? '' : 's' );
      ?>
        <a class="hs-cat-card" href="<?php echo esc_url( get_term_link( $term ) ); ?>">
          <span class="hs-cat-icon" aria-hidden="true"><?php echo hb_icon( $icon, 26 ); ?></span>
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

    <div class="ds-grid ds-grid--4 ds-grid--prods">
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
          if ( function_exists( 'wc_get_product' ) ) {
            hb_product_card( wc_get_product( get_the_ID() ), $si++ );
          }
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>

    <div class="hs-shop-more">
      <a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--outline">Browse All Products <?php echo hb_icon( 'arrow', 16 ); ?></a>
    </div>
  </div>
</section>
