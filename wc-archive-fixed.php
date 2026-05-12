<?php
/**
 * The Template for displaying product archives (shop page)
 */
defined('ABSPATH') || exit;
get_header();

// Build the product query
$paged     = get_query_var('paged') ? get_query_var('paged') : 1;
$cat_slug  = get_query_var('product_cat');

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
  <section style="background:linear-gradient(135deg,#8B4513 0%,#D4A017 100%);color:#fff;padding:60px 20px;text-align:center;">
    <div class="container">
      <h1 style="font-family:Georgia,serif;font-size:clamp(2rem,4vw,3rem);margin-bottom:12px;">
        <?php echo $cat_slug ? single_term_title('', false) : 'Our Shop'; ?>
      </h1>
      <p style="opacity:0.9;font-size:1rem;">100% Natural &bull; No Preservatives &bull; FSSAI Certified</p>
    </div>
  </section>

  <section style="padding:50px 20px;background:#FFF8F0;">
    <div class="container" style="max-width:1200px;margin:0 auto;">

      <!-- Category Filter Bar -->
      <div style="display:flex;flex-wrap:wrap;gap:10px;margin-bottom:40px;justify-content:center;">
        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
           style="padding:8px 20px;border-radius:25px;text-decoration:none;font-weight:600;font-size:0.85rem;border:2px solid #8B4513;<?php echo !$cat_slug ? 'background:#8B4513;color:#fff;' : 'background:#fff;color:#8B4513;'; ?>">
          All Products
        </a>
        <?php
        $cats = get_terms(['taxonomy' => 'product_cat', 'hide_empty' => true, 'exclude' => [15]]);
        foreach ($cats as $cat) :
            $is_active = ($cat_slug === $cat->slug);
        ?>
        <a href="<?php echo esc_url(get_term_link($cat)); ?>"
           style="padding:8px 20px;border-radius:25px;text-decoration:none;font-weight:600;font-size:0.85rem;border:2px solid #8B4513;<?php echo $is_active ? 'background:#8B4513;color:#fff;' : 'background:#fff;color:#8B4513;'; ?>">
          <?php echo esc_html($cat->name); ?>
        </a>
        <?php endforeach; ?>
      </div>

      <!-- Results count -->
      <p style="color:#888;font-size:0.9rem;margin-bottom:24px;">
        Showing <?php echo $shop_query->post_count; ?> of <?php echo $shop_query->found_posts; ?> products
      </p>

      <!-- Product Grid -->
      <?php if ($shop_query->have_posts()) : ?>
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:28px;">
        <?php while ($shop_query->have_posts()) : $shop_query->the_post();
              $product = wc_get_product(get_the_ID());
              if (!$product) continue;
        ?>
        <div style="background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 16px rgba(0,0,0,0.08);transition:transform 0.3s,box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 12px 32px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='none';this.style.boxShadow='0 4px 16px rgba(0,0,0,0.08)'">

          <!-- Product Image -->
          <a href="<?php the_permalink(); ?>" style="display:block;">
            <?php if (has_post_thumbnail()) : ?>
              <div style="aspect-ratio:1;overflow:hidden;">
                <?php the_post_thumbnail('medium', ['style' => 'width:100%;height:100%;object-fit:cover;display:block;']); ?>
              </div>
            <?php else : ?>
              <div style="aspect-ratio:1;background:linear-gradient(135deg,#FFF8F0,#F5E6D3);display:flex;align-items:center;justify-content:center;font-size:64px;">🌿</div>
            <?php endif; ?>
          </a>

          <!-- Product Info -->
          <div style="padding:20px;">
            <?php
            $terms = get_the_terms(get_the_ID(), 'product_cat');
            if ($terms && !is_wp_error($terms)) {
                $visible = array_values(array_filter($terms, fn($t) => $t->term_id != 15));
                if (!empty($visible)) {
                    echo '<p style="color:#D4A017;font-size:0.72rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;margin-bottom:6px;">'.esc_html($visible[0]->name).'</p>';
                }
            }
            ?>
            <h3 style="margin:0 0 8px;font-size:1rem;font-weight:700;color:#222;line-height:1.3;">
              <a href="<?php the_permalink(); ?>" style="text-decoration:none;color:inherit;"><?php the_title(); ?></a>
            </h3>
            <p style="color:#666;font-size:0.85rem;line-height:1.5;margin-bottom:16px;min-height:40px;">
              <?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?>
            </p>
            <div style="display:flex;align-items:center;justify-content:space-between;">
              <div style="font-size:1.2rem;font-weight:800;color:#8B4513;">
                <?php echo $product->get_price_html(); ?>
              </div>
              <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
                 style="background:#8B4513;color:#fff;padding:8px 16px;border-radius:6px;text-decoration:none;font-size:0.85rem;font-weight:600;transition:background 0.3s;"
                 onmouseover="this.style.background='#A0522D'" onmouseout="this.style.background='#8B4513'">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

      <!-- Pagination -->
      <?php if ($shop_query->max_num_pages > 1) : ?>
      <div style="margin-top:50px;text-align:center;">
        <?php
        echo paginate_links([
            'total'   => $shop_query->max_num_pages,
            'current' => $paged,
            'format'  => '?paged=%#%',
            'prev_text' => '&laquo; Prev',
            'next_text' => 'Next &raquo;',
        ]);
        ?>
      </div>
      <?php endif; ?>

      <?php else : ?>
      <div style="text-align:center;padding:60px 20px;">
        <div style="font-size:60px;margin-bottom:20px;">🌿</div>
        <h3 style="color:#8B4513;font-family:Georgia,serif;margin-bottom:12px;">No products found</h3>
        <p style="color:#888;margin-bottom:24px;">Try browsing all categories.</p>
        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" style="background:#8B4513;color:#fff;padding:12px 28px;border-radius:8px;text-decoration:none;font-weight:700;">View All Products</a>
      </div>
      <?php endif; ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>
