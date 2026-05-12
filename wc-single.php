<?php
/**
 * The Template for displaying all single products
 */
defined('ABSPATH') || exit;
get_header();
?>

<main class="wc-single-product">
<?php while (have_posts()) : the_post(); ?>
<?php global $product; $product = wc_get_product(get_the_ID()); ?>

  <!-- Breadcrumb -->
  <div class="sp-breadcrumb" style="background:#F4F9F0;padding:14px 20px;border-bottom:1px solid #D6E8D8;font-size:.85rem;color:#888;overflow-x:auto;white-space:nowrap;">
    <div class="container" style="max-width:1200px;margin:0 auto;">
      <a href="<?php echo esc_url(home_url()); ?>" style="color:#2E6B3E;text-decoration:none;">Home</a>
      <span style="margin:0 8px;">›</span>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" style="color:#2E6B3E;text-decoration:none;">Shop</a>
      <?php
      $terms = get_the_terms(get_the_ID(), 'product_cat');
      if ($terms && !is_wp_error($terms)) {
        $term = array_filter($terms, fn($t) => $t->term_id != 15);
        $term = array_values($term);
        if (!empty($term)) {
          echo '<span style="margin:0 8px;">›</span>';
          echo '<a href="'.esc_url(get_term_link($term[0])).'" style="color:#2E6B3E;text-decoration:none;">'.esc_html($term[0]->name).'</a>';
        }
      }
      ?>
      <span style="margin:0 8px;">›</span>
      <span style="color:#333;"><?php the_title(); ?></span>
    </div>
  </div>

  <!-- Product Main Section -->
  <section class="wc-main-section">
    <div class="wc-product-layout container" style="max-width:1200px;margin:0 auto;">

      <!-- Product Images -->
      <div>
        <?php
        // Gallery images first (front of product), then featured image (back/nutritional)
        $featured_id  = has_post_thumbnail() ? get_post_thumbnail_id() : null;
        $gallery_meta = get_post_meta(get_the_ID(), '_product_image_gallery', true);
        $gallery_ids  = $gallery_meta ? array_map('intval', explode(',', $gallery_meta)) : [];
        if ($featured_id) $gallery_ids[] = $featured_id;
        $gallery_ids = array_values(array_unique($gallery_ids));
        ?>
        <?php if (!empty($gallery_ids)) : ?>
          <div class="wc-gallery-wrap">
            <?php if (count($gallery_ids) > 1) : ?>
            <div class="wc-gallery-thumbs">
              <?php foreach ($gallery_ids as $gid) : ?>
                <div class="wc-gallery-thumb <?php echo $gid === $gallery_ids[0] ? 'active' : ''; ?>" data-full="<?php echo esc_url(wp_get_attachment_url($gid)); ?>">
                  <?php echo wp_get_attachment_image($gid, 'thumbnail', false, ['style'=>'width:64px;aspect-ratio:1;object-fit:cover;display:block;border-radius:8px;']); ?>
                </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <div class="wc-gallery-main">
              <?php echo wp_get_attachment_image($gallery_ids[0], 'large', false, ['class'=>'wc-gallery-main-img','style'=>'width:100%;max-height:420px;object-fit:contain;display:block;background:#F4F9F0;']); ?>
            </div>
          </div>
        <?php else : ?>
          <div class="wc-img-wrap" style="aspect-ratio:1;background:linear-gradient(135deg,#F4F9F0,#E8F4EA);display:flex;align-items:center;justify-content:center;font-size:120px;">🌿</div>
        <?php endif; ?>

        <div class="wc-trust-badges">
          <div class="wc-trust-badge">
            <div class="wc-trust-badge-icon">✅</div>
            <p class="wc-trust-badge-text">FSSAI Certified</p>
          </div>
          <div class="wc-trust-badge">
            <div class="wc-trust-badge-icon">🌿</div>
            <p class="wc-trust-badge-text">100% Natural</p>
          </div>
          <div class="wc-trust-badge">
            <div class="wc-trust-badge-icon">🚚</div>
            <p class="wc-trust-badge-text">Free Shipping ₹499+</p>
          </div>
        </div>
      </div>

      <!-- Product Details -->
      <div>
        <?php
        $terms = get_the_terms(get_the_ID(), 'product_cat');
        if ($terms && !is_wp_error($terms)) {
          $term = array_filter($terms, fn($t) => $t->term_id != 15);
          $term = array_values($term);
          if (!empty($term)) echo '<p class="wc-cat-tag">'.esc_html($term[0]->name).'</p>';
        }
        ?>
        <h1 class="wc-title"><?php the_title(); ?></h1>

        <div class="wc-price"><?php echo $product->get_price_html(); ?></div>

        <?php if ($product->get_short_description()) : ?>
          <div class="wc-short-desc"><?php echo wp_kses_post($product->get_short_description()); ?></div>
        <?php endif; ?>

        <div class="wc-atc-wrap">
          <?php woocommerce_template_single_add_to_cart(); ?>
        </div>

        <div class="wc-meta-box">
          <div class="wc-meta-row">
            <span>🏷️</span>
            <span><strong>SKU:</strong> <?php echo $product->get_sku() ?: 'HMB-'.get_the_ID(); ?></span>
          </div>
          <div class="wc-meta-row">
            <span>🌱</span>
            <span><strong>Type:</strong> 100% Vegetarian</span>
          </div>
          <div class="wc-meta-row">
            <span>✅</span>
            <span><strong>Certification:</strong> FSSAI No. 11225332000490</span>
          </div>
        </div>

        <div class="wc-share-wrap">
          <span class="wc-share-label">Share:</span>
          <a href="https://wa.me/?text=<?php echo urlencode(get_the_title().' - '.get_permalink()); ?>" target="_blank" rel="noopener" style="background:#25D366;color:#fff;padding:6px 14px;border-radius:6px;text-decoration:none;font-size:.8rem;font-weight:600;">WhatsApp</a>
        </div>
      </div>

    </div>
  </section>

  <script>
  (function(){
    var thumbs = document.querySelectorAll('.wc-gallery-thumb');
    if (!thumbs.length) return;
    var wrap = document.querySelector('.wc-gallery-main');
    thumbs.forEach(function(t){
      t.addEventListener('click', function(){
        thumbs.forEach(function(el){ el.classList.remove('active'); });
        this.classList.add('active');
        if (!wrap) return;
        var newSrc = this.getAttribute('data-full');
        // Replace img element entirely — avoids stale srcset/sizes from WordPress
        var newImg = document.createElement('img');
        newImg.className = 'wc-gallery-main-img';
        newImg.src = newSrc;
        newImg.style.cssText = 'width:100%;max-height:420px;object-fit:contain;display:block;background:#F4F9F0;';
        var old = wrap.querySelector('img');
        if (old) wrap.replaceChild(newImg, old);
        else wrap.appendChild(newImg);
      });
    });
  })();
  </script>

  <!-- Full Description -->
  <?php if (get_the_content()) : ?>
  <section class="wc-desc-section">
    <div class="wc-desc-inner">
      <h2 class="wc-desc-heading">Product Details</h2>
      <div class="wc-desc-content">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- Related Products -->
  <?php
  $related = wc_get_related_products(get_the_ID(), 4);
  if (!empty($related)) :
  ?>
  <section class="wc-related-section">
    <div class="wc-related-inner">
      <h2 class="wc-related-heading">You May Also Like</h2>
      <div class="wc-related-grid">
        <?php foreach ($related as $related_id) :
          $related_product = wc_get_product($related_id);
          if (!$related_product) continue;
        ?>
        <div class="wc-related-card">
          <a href="<?php echo esc_url(get_permalink($related_id)); ?>">
            <?php
            $img = get_the_post_thumbnail($related_id, 'medium', ['style'=>'width:100%;aspect-ratio:1;object-fit:cover;display:block;']);
            echo $img ?: '<div style="aspect-ratio:1;background:linear-gradient(135deg,#F4F9F0,#E8F4EA);display:flex;align-items:center;justify-content:center;font-size:48px;">🌿</div>';
            ?>
          </a>
          <div class="wc-related-card-body">
            <h4><a href="<?php echo esc_url(get_permalink($related_id)); ?>"><?php echo esc_html($related_product->get_name()); ?></a></h4>
            <div class="wc-related-price"><?php echo $related_product->get_price_html(); ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>
