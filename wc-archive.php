<?php
/**
 * The Template for displaying product archives (shop page)
 */
defined('ABSPATH') || exit;
get_header();
?>

<main class="wc-shop-page">

  <!-- Shop Hero -->
  <section style="background:linear-gradient(135deg,#8B4513 0%,#D4A017 100%);color:#fff;padding:60px 20px;text-align:center;">
    <div class="container">
      <h1 style="font-family:Georgia,serif;font-size:clamp(2rem,4vw,3rem);margin-bottom:12px;">
        <?php woocommerce_page_title(); ?>
      </h1>
      <p style="opacity:0.9;font-size:1rem;">100% Natural • No Preservatives • FSSAI Certified</p>
    </div>
  </section>

  <section style="padding:60px 20px;background:#FFF8F0;">
    <div class="container" style="max-width:1200px;margin:0 auto;">

      <!-- Category Filter Bar -->
      <div style="display:flex;flex-wrap:wrap;gap:10px;margin-bottom:40px;justify-content:center;">
        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
          style="padding:8px 20px;border-radius:25px;text-decoration:none;font-weight:600;font-size:0.85rem;border:2px solid #8B4513;<?php echo !is_product_category() ? 'background:#8B4513;color:#fff;' : 'background:#fff;color:#8B4513;'; ?>">
          All Products
        </a>
        <?php
        $cats = get_terms(['taxonomy'=>'product_cat','hide_empty'=>true,'exclude'=>[15]]);
        foreach($cats as $cat):
          $active = is_product_category($cat->slug);
        ?>
        <a href="<?php echo esc_url(get_term_link($cat)); ?>"
          style="padding:8px 20px;border-radius:25px;text-decoration:none;font-weight:600;font-size:0.85rem;border:2px solid #8B4513;<?php echo $active ? 'background:#8B4513;color:#fff;' : 'background:#fff;color:#8B4513;'; ?>">
          <?php echo esc_html($cat->name); ?>
        </a>
        <?php endforeach; ?>
      </div>

      <?php if (woocommerce_product_loop()) : ?>

        <p style="color:#888;font-size:0.9rem;margin-bottom:24px;">
          Showing <?php woocommerce_result_count(); ?>
        </p>

        <!-- Product Grid -->
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:28px;">
          <?php while (have_posts()) : the_post(); ?>
            <?php global $product; $product = wc_get_product(get_the_ID()); ?>
            <div style="background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 16px rgba(0,0,0,0.08);transition:transform 0.3s,box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 12px 32px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='none';this.style.boxShadow='0 4px 16px rgba(0,0,0,0.08)'">

              <!-- Product Image -->
              <a href="<?php the_permalink(); ?>" style="display:block;overflow:hidden;">
                <?php if (has_post_thumbnail()) : ?>
                  <div style="aspect-ratio:1;overflow:hidden;">
                    <?php the_post_thumbnail('medium', ['style'=>'width:100%;height:100%;object-fit:cover;transition:transform 0.4s;', 'onmouseover'=>"this.style.transform='scale(1.05)'", 'onmouseout'=>"this.style.transform='scale(1)'"]); ?>
                  </div>
                <?php else : ?>
                  <div style="aspect-ratio:1;background:linear-gradient(135deg,#FFF8F0,#F5E6D3);display:flex;align-items:center;justify-content:center;font-size:60px;">🌿</div>
                <?php endif; ?>
              </a>

              <!-- Product Info -->
              <div style="padding:20px;">
                <?php
                $terms = get_the_terms(get_the_ID(), 'product_cat');
                if ($terms && !is_wp_error($terms)) {
                  $term = array_filter($terms, fn($t) => $t->term_id != 15);
                  $term = array_values($term);
                  if (!empty($term)) echo '<p style="color:#D4A017;font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;margin-bottom:6px;">'.esc_html($term[0]->name).'</p>';
                }
                ?>
                <h3 style="margin:0 0 8px;font-size:1rem;font-weight:700;color:#222;line-height:1.3;">
                  <a href="<?php the_permalink(); ?>" style="text-decoration:none;color:inherit;"><?php the_title(); ?></a>
                </h3>
                <p style="color:#666;font-size:0.85rem;line-height:1.5;margin-bottom:16px;"><?php echo wp_trim_words(get_the_excerpt(), 12, '...'); ?></p>

                <div style="display:flex;align-items:center;justify-content:space-between;">
                  <div style="font-size:1.2rem;font-weight:800;color:#8B4513;">
                    <?php echo $product->get_price_html(); ?>
                  </div>
                  <?php
                  echo apply_filters('woocommerce_loop_add_to_cart_link',
                    sprintf('<a href="%s" data-quantity="1" class="add-to-cart-btn" data-product_id="%s" data-product_sku="%s" aria-label="%s" rel="nofollow" style="background:#8B4513;color:#fff;padding:8px 16px;border-radius:6px;text-decoration:none;font-size:0.85rem;font-weight:600;transition:background 0.3s;" onmouseover="this.style.background=\'#A0522D\'" onmouseout="this.style.background=\'#8B4513\'">%s</a>',
                      esc_url($product->add_to_cart_url()),
                      esc_attr($product->get_id()),
                      esc_attr($product->get_sku()),
                      esc_attr($product->add_to_cart_description()),
                      esc_html($product->add_to_cart_text())
                    ),
                    $product
                  );
                  ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div style="margin-top:50px;text-align:center;">
          <?php woocommerce_pagination(); ?>
        </div>

      <?php else : ?>
        <?php wc_no_products_found(); ?>
      <?php endif; ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>
