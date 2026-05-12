<?php
defined('ABSPATH') || exit;
get_header();

$paged    = get_query_var('paged') ? get_query_var('paged') : 1;
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
        ?>
        <div class="product-card">

          <!-- Product Image -->
          <a href="<?php the_permalink(); ?>">
            <div class="product-img-wrap">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium', ['loading' => 'lazy']); ?>
              <?php else : ?>
                🌿
              <?php endif; ?>
            </div>
          </a>

          <!-- Product Body -->
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
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="product-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></p>
            <div class="product-footer">
              <span class="product-price"><?php echo $product->get_price_html(); ?></span>
              <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="btn-atc">
                Add to Cart
              </a>
            </div>
          </div>

        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

      <!-- Pagination -->
      <?php if ($shop_query->max_num_pages > 1) : ?>
      <div style="margin-top:52px;text-align:center;">
        <?php echo paginate_links([
          'total'     => $shop_query->max_num_pages,
          'current'   => $paged,
          'format'    => '?paged=%#%',
          'prev_text' => '← Prev',
          'next_text' => 'Next →',
          'type'      => 'list',
        ]); ?>
      </div>
      <?php endif; ?>

      <?php else : ?>
      <!-- No products found -->
      <div style="text-align:center;padding:72px 20px;">
        <div style="font-size:3.5rem;margin-bottom:20px;">🌿</div>
        <h3 style="font-family:'Playfair Display',Georgia,serif;color:#8B4513;font-size:1.5rem;margin-bottom:12px;">No products found</h3>
        <p style="color:#7A7A7A;margin-bottom:28px;">Try browsing all categories or check back soon.</p>
        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="btn-primary">View All Products</a>
      </div>
      <?php endif; ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>
