<?php
/**
 * Shop archive — rebuilt on the ds-* design system.
 * Query, sorting and pagination behaviour are unchanged from the previous
 * template; only the markup and presentation are new.
 */
defined( 'ABSPATH' ) || exit;
get_header();

$paged    = get_query_var( 'page' ) ? (int) get_query_var( 'page' ) : ( get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1 );
$cat_slug = get_query_var( 'product_cat' );
$tag_slug = is_product_tag() ? get_query_var( 'product_tag' ) : '';
$shop_url = hb_shop_url();

$sort        = isset( $_GET['orderby'] ) ? sanitize_text_field( wp_unslash( $_GET['orderby'] ) ) : 'date';
$orderby_map = [
  'date'       => [ 'orderby' => 'date', 'order' => 'DESC' ],
  'price'      => [ 'orderby' => 'meta_value_num', 'order' => 'ASC',  'meta_key' => '_price' ],
  'price-desc' => [ 'orderby' => 'meta_value_num', 'order' => 'DESC', 'meta_key' => '_price' ],
  'rating'     => [ 'orderby' => 'meta_value_num', 'order' => 'DESC', 'meta_key' => '_wc_average_rating' ],
  'title'      => [ 'orderby' => 'title', 'order' => 'ASC' ],
];
if ( ! isset( $orderby_map[ $sort ] ) ) {
  $sort = 'date';
}

$args = array_merge( [
  'post_type'      => 'product',
  'post_status'    => 'publish',
  'posts_per_page' => 12,
  'paged'          => $paged,
], $orderby_map[ $sort ] );

if ( $cat_slug ) {
  $args['tax_query'] = [ [
    'taxonomy' => 'product_cat',
    'field'    => 'slug',
    'terms'    => $cat_slug,
  ] ];
}
// Tag archives are routed to this template too (see functions.php), so they
// must filter by the tag or every /product-tag/ page lists the whole shop.
if ( $tag_slug ) {
  $args['tax_query'] = [ [
    'taxonomy' => 'product_tag',
    'field'    => 'slug',
    'terms'    => $tag_slug,
  ] ];
}

// A product search (?s=…&post_type=product) is a shop archive as far as
// WordPress is concerned, so it lands here too and must keep the term.
if ( is_search() ) {
  $args['s'] = get_search_query( false );
}

$shop_query = new WP_Query( $args );
if ( is_search() ) {
  $page_title = sprintf( 'Results for “%s”', get_search_query( false ) );
} else {
  $page_title = ( $cat_slug || $tag_slug ) ? single_term_title( '', false ) : 'Our Shop';
}
?>

<main class="ds-shop">

  <!-- ═══ PAGE HEAD ═══ -->
  <section class="ds-pagehead">
    <div class="ds-wrap">
      <nav class="ds-crumbs" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <?php echo hb_icon( 'chev', 12 ); ?>
        <a href="<?php echo esc_url( $shop_url ); ?>">Shop</a>
        <?php if ( $cat_slug || $tag_slug ) : ?>
          <?php echo hb_icon( 'chev', 12 ); ?>
          <span aria-current="page"><?php echo esc_html( $page_title ); ?></span>
        <?php endif; ?>
      </nav>

      <span class="ds-eyebrow">100% Natural &middot; No Preservatives &middot; FSSAI Certified</span>
      <h1 class="ds-pagehead-title"><?php echo esc_html( $page_title ); ?></h1>
      <?php if ( ( $cat_slug || $tag_slug ) && term_description() ) : ?>
        <div class="ds-sub"><?php echo wp_kses_post( term_description() ); ?></div>
      <?php endif; ?>
    </div>
  </section>

  <section class="ds-section ds-section--tight ds-section--cream">
    <div class="ds-wrap">

      <div class="ds-notices"><?php woocommerce_output_all_notices(); ?></div>

      <!-- ═══ CATEGORY FILTER ═══ -->
      <div class="ds-filterbar" role="navigation" aria-label="Product categories">
        <a href="<?php echo esc_url( $shop_url ); ?>" class="ds-filter<?php echo ! $cat_slug ? ' is-active' : ''; ?>">All Products</a>
        <?php
        $cats = get_terms( [ 'taxonomy' => 'product_cat', 'hide_empty' => true, 'exclude' => [ 15 ] ] );
        if ( $cats && ! is_wp_error( $cats ) ) :
          foreach ( $cats as $cat ) : ?>
            <a href="<?php echo esc_url( get_term_link( $cat ) ); ?>" class="ds-filter<?php echo ( $cat_slug === $cat->slug ) ? ' is-active' : ''; ?>">
              <?php echo esc_html( $cat->name ); ?>
              <span class="ds-filter-count"><?php echo (int) $cat->count; ?></span>
            </a>
          <?php endforeach;
        endif; ?>
      </div>

      <!-- ═══ TOOLBAR ═══ -->
      <div class="ds-toolbar">
        <p class="ds-toolbar-count">
          Showing <strong><?php echo (int) $shop_query->post_count; ?></strong> of
          <strong><?php echo (int) $shop_query->found_posts; ?></strong> products
        </p>
        <form class="ds-sort" method="get">
          <label for="shop-sort-select">Sort by</label>
          <select name="orderby" id="shop-sort-select" onchange="this.form.submit()">
            <option value="date"       <?php selected( $sort, 'date' ); ?>>Latest</option>
            <option value="price"      <?php selected( $sort, 'price' ); ?>>Price: Low to High</option>
            <option value="price-desc" <?php selected( $sort, 'price-desc' ); ?>>Price: High to Low</option>
            <option value="rating"     <?php selected( $sort, 'rating' ); ?>>Avg. Rating</option>
            <option value="title"      <?php selected( $sort, 'title' ); ?>>Name: A–Z</option>
          </select>
          <?php if ( is_search() ) : ?>
            <input type="hidden" name="s" value="<?php echo esc_attr( get_search_query( false ) ); ?>">
            <input type="hidden" name="post_type" value="product">
          <?php endif; ?>
          <noscript><button type="submit" class="ds-btn ds-btn--outline">Apply</button></noscript>
        </form>
      </div>

      <!-- ═══ GRID ═══ -->
      <?php if ( $shop_query->have_posts() ) : ?>
        <div class="ds-grid ds-grid--4">
          <?php
          $card_index = 0;
          while ( $shop_query->have_posts() ) : $shop_query->the_post();
            $product = wc_get_product( get_the_ID() );
            if ( ! $product ) { continue; }

            $permalink = get_permalink();
            $rating    = (float) $product->get_average_rating();
            $terms     = get_the_terms( get_the_ID(), 'product_cat' );
            $cat_name  = '';
            if ( $terms && ! is_wp_error( $terms ) ) {
              $visible = array_values( array_filter( $terms, function ( $t ) { return 15 != $t->term_id; } ) );
              if ( ! empty( $visible ) ) { $cat_name = $visible[0]->name; }
            }
          ?>
          <article class="ds-prod">
            <a href="<?php echo esc_url( $permalink ); ?>" class="ds-prod-img" aria-label="<?php the_title_attribute(); ?>">
              <?php if ( has_post_thumbnail() ) :
                // First row is above the fold on every viewport — lazy-loading it
                // would push the LCP back by a full round-trip.
                the_post_thumbnail( 'medium', [
                  'loading'       => $card_index < 4 ? 'eager' : 'lazy',
                  'decoding'      => 'async',
                  'fetchpriority' => 0 === $card_index ? 'high' : 'auto',
                ] );
              else : ?>
                <span class="ds-ph"><?php echo hb_icon( 'leaf', 44 ); ?></span>
              <?php endif; ?>

              <?php
              if ( $product->is_on_sale() ) {
                $regular = (float) $product->get_regular_price();
                $sale    = (float) $product->get_sale_price();
                $pct     = $regular > 0 ? round( ( ( $regular - $sale ) / $regular ) * 100 ) : 0;
                if ( $pct > 0 ) {
                  echo '<span class="ds-prod-flag ds-prod-flag--sale">-' . esc_html( $pct ) . '%</span>';
                }
              }
              if ( ! $product->is_in_stock() ) {
                echo '<span class="ds-prod-flag ds-prod-flag--out">Sold out</span>';
              }
              ?>
            </a>

            <div class="ds-prod-body">
              <?php if ( $cat_name ) : ?>
                <span class="ds-prod-cat"><?php echo esc_html( $cat_name ); ?></span>
              <?php endif; ?>

              <h2 class="ds-prod-title"><a href="<?php echo esc_url( $permalink ); ?>"><?php the_title(); ?></a></h2>

              <div class="ds-prod-stars" aria-label="Rated <?php echo esc_attr( $rating ); ?> out of 5">
                <?php for ( $s = 1; $s <= 5; $s++ ) : ?>
                  <span class="<?php echo $s <= round( $rating ) ? 'is-on' : 'is-off'; ?>"><?php echo hb_icon( 'star', 13 ); ?></span>
                <?php endfor; ?>
              </div>

              <div class="ds-prod-price"><?php echo $product->get_price_html(); ?></div>

              <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>"
                 class="ds-btn ds-btn--primary ds-prod-cta add_to_cart_button ajax_add_to_cart"
                 data-product_id="<?php echo (int) get_the_ID(); ?>"
                 data-product_type="<?php echo esc_attr( $product->get_type() ); ?>"
                 rel="nofollow">
                <?php echo hb_icon( 'bag', 15 ); ?> Add to Cart
              </a>
            </div>
          </article>
          <?php
            $card_index++;
          endwhile;
          wp_reset_postdata();
          ?>
        </div>

        <?php if ( $shop_query->max_num_pages > 1 ) : ?>
        <nav class="ds-pagination" aria-label="Products pagination">
          <?php
          // Paginate the current archive (shop, category or tag), not always
          // /shop/ — otherwise page 2 of a category jumped to the full shop.
          $big = 999999999;
          echo paginate_links( [
            'base'      => esc_url_raw( str_replace( $big, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( $big, false ) ) ) ),
            'format'    => '',
            'total'     => $shop_query->max_num_pages,
            'current'   => $paged,
            'prev_text' => '&larr; Prev',
            'next_text' => 'Next &rarr;',
            'type'      => 'list',
          ] );
          ?>
        </nav>
        <?php endif; ?>

      <?php else : ?>
        <div class="ds-empty">
          <span class="ds-empty-icon"><?php echo hb_icon( 'leaf', 44 ); ?></span>
          <h2 class="ds-title">No products found</h2>
          <p class="ds-sub">Try browsing all categories or check back soon.</p>
          <a href="<?php echo esc_url( $shop_url ); ?>" class="ds-btn ds-btn--primary">View All Products</a>
        </div>
      <?php endif; ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>
