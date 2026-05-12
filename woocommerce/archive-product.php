<?php
defined('ABSPATH') || exit;
get_header();

$paged    = get_query_var('page') ? (int) get_query_var('page') : (get_query_var('paged') ? (int) get_query_var('paged') : 1);
$cat_slug = get_query_var('product_cat');

$args = [
  'post_type'      => 'product',
  'post_status'    => 'publish',
  'posts_per_page' => 12,
  'paged'          => $paged,
  'orderby'        => 'date',
  'order'          => 'DESC',
];
if ($cat_slug) {
  $args['tax_query'] = [[
    'taxonomy' => 'product_cat',
    'field'    => 'slug',
    'terms'    => $cat_slug,
  ]];
}
$shop_query = new WP_Query($args);
?>

<main class="wc-shop-page">

  <!-- Shop Hero -->
  <div class="shop-hero">
    <div class="container">
      <span style="display:inline-block;background:rgba(255,255,255,.15);color:rgba(255,255,255,.9);padding:5px 16px;border-radius:20px;font-size:.72rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:14px;">
        100% Natural &bull; No Preservatives &bull; FSSAI Certified
      </span>
      <h1 style="font-family:'Playfair Display',Georgia,serif;font-size:clamp(1.8rem,4vw,3rem);margin-bottom:0;font-weight:700;">
        <?php echo $cat_slug ? single_term_title('', false) : 'Our Shop'; ?>
      </h1>
    </div>
  </div>

  <div class="shop-body">
    <div class="container" style="max-width:1200px;margin:0 auto;">

      <!-- Category Filter -->
      <div class="cat-filter-bar">
        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
           class="cat-filter-pill <?php echo !$cat_slug ? 'active' : ''; ?>">
          All Products
        </a>
        <?php
        $cats = get_terms(['taxonomy' => 'product_cat', 'hide_empty' => true, 'exclude' => [15]]);
        foreach ($cats as $cat) :
          $is_active = ($cat_slug === $cat->slug);
        ?>
        <a href="<?php echo esc_url(get_term_link($cat)); ?>"
           class="cat-filter-pill <?php echo $is_active ? 'active' : ''; ?>">
          <?php echo esc_html($cat->name); ?>
        </a>
        <?php endforeach; ?>
      </div>

      <!-- Results count -->
      <p class="results-count">
        Showing <?php echo $shop_query->post_count; ?> of <?php echo $shop_query->found_posts; ?> products
      </p>

      <!-- Product Grid -->
      <?php if ($shop_query->have_posts()) : ?>
      <div class="products-grid">
        <?php while ($shop_query->have_posts()) : $shop_query->the_post();
          $product = wc_get_product(get_the_ID());
          if (!$product) continue;
          $permalink = get_permalink();
        ?>
        <div class="product-card">

          <!-- Entire top area is one big link to product page -->
          <a href="<?php echo esc_url($permalink); ?>" class="product-card-link">

            <div class="product-img-wrap">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium', ['loading' => 'lazy']); ?>
              <?php else : ?>
                <span style="font-size:3.5rem;">🌿</span>
              <?php endif; ?>
            </div>

            <div class="product-body">
              <?php
              $terms = get_the_terms(get_the_ID(), 'product_cat');
              if ($terms && !is_wp_error($terms)) {
                $visible = array_values(array_filter($terms, fn($t) => $t->term_id != 15));
                if (!empty($visible)) {
                  echo '<div class="product-cat-tag">' . esc_html($visible[0]->name) . '</div>';
                }
              }
              ?>
              <h3><?php the_title(); ?></h3>
              <div class="product-price"><?php echo $product->get_price_html(); ?></div>
            </div>

          </a><!-- /.product-card-link -->

          <!-- Add to Cart — outside the link -->
          <div class="product-card-action">
            <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
               class="btn-atc add_to_cart_button ajax_add_to_cart"
               data-product_id="<?php echo get_the_ID(); ?>"
               data-product_type="<?php echo esc_attr($product->get_type()); ?>"
               rel="nofollow">
              Add to Cart
            </a>
          </div>

        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

      <!-- Pagination -->
      <?php if ($shop_query->max_num_pages > 1) : ?>
      <div style="margin-top:52px;text-align:center;">
        <?php
        $shop_base = trailingslashit(get_permalink(wc_get_page_id('shop')));
        echo paginate_links([
          'base'      => $shop_base . '%_%',
          'format'    => 'page/%#%/',
          'total'     => $shop_query->max_num_pages,
          'current'   => $paged,
          'prev_text' => '&larr; Prev',
          'next_text' => 'Next &rarr;',
          'type'      => 'list',
        ]);
        ?>
      </div>
      <?php endif; ?>

      <?php else : ?>
      <div style="text-align:center;padding:72px 20px;">
        <div style="font-size:3.5rem;margin-bottom:20px;">🌿</div>
        <h3 style="font-family:'Playfair Display',Georgia,serif;color:#2E6B3E;font-size:1.5rem;margin-bottom:12px;">No products found</h3>
        <p style="color:#7A7A7A;margin-bottom:28px;">Try browsing all categories or check back soon.</p>
        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="btn-primary">View All Products</a>
      </div>
      <?php endif; ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>
