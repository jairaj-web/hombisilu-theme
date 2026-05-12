<?php
/**
 * Single Product Template — Hombisilu
 */
defined('ABSPATH') || exit;
get_header();
?>

<style>
.sp-breadcrumb { background:#F4F9F0; padding:12px 20px; border-bottom:1px solid #D6E8D8; font-size:.84rem; color:#888; overflow-x:auto; white-space:nowrap; }
.sp-breadcrumb a { color:#2E6B3E; text-decoration:none; }
.sp-breadcrumb span { margin:0 6px; }

.sp-main { padding:48px 20px; background:#fff; }
.sp-grid { display:grid; grid-template-columns:1fr 1fr; gap:52px; align-items:start; max-width:1200px; margin:0 auto; }

.sp-img-wrap { border-radius:20px; overflow:hidden; box-shadow:0 8px 32px rgba(0,0,0,.12); max-width:420px; margin:0 auto; }
.sp-img-wrap img { width:100%; max-height:420px; object-fit:contain; display:block; background:#F4F9F0; }
.sp-img-placeholder { aspect-ratio:1; background:linear-gradient(135deg,#F4F9F0,#E8F4EA); display:flex; align-items:center; justify-content:center; font-size:100px; }

.sp-badges { display:grid; grid-template-columns:repeat(3,1fr); gap:10px; margin-top:20px; }
.sp-badge { background:#F4F9F0; border-radius:10px; padding:12px 8px; text-align:center; border:1px solid #D6E8D8; }
.sp-badge-icon { font-size:20px; display:block; margin-bottom:4px; }
.sp-badge-text { font-size:.68rem; color:#555; font-weight:600; line-height:1.3; }

.sp-cat-tag { color:#D4A017; font-size:.78rem; font-weight:700; text-transform:uppercase; letter-spacing:2px; margin-bottom:10px; }
.sp-title { font-family:'Playfair Display',Georgia,serif; font-size:clamp(1.5rem,3vw,2.2rem); color:#1A2B1C; margin-bottom:14px; line-height:1.25; }
.sp-price { font-size:1.9rem; font-weight:800; color:#2E6B3E; margin-bottom:18px; }
.sp-short-desc { color:#555; font-size:.97rem; line-height:1.75; margin-bottom:24px; padding-bottom:24px; border-bottom:1px solid #D6E8D8; }
.sp-atc-wrap { margin-bottom:24px; }
.sp-meta { background:#F4F9F0; border-radius:12px; padding:18px 20px; margin-bottom:22px; border:1px solid #D6E8D8; }
.sp-meta-row { display:flex; align-items:center; gap:10px; margin-bottom:10px; font-size:.88rem; color:#555; }
.sp-meta-row:last-child { margin-bottom:0; }
.sp-meta-row strong { color:#1A2B1C; }
.sp-share { display:flex; align-items:center; gap:10px; flex-wrap:wrap; font-size:.85rem; color:#888; }
.sp-share a { background:#25D366; color:#fff; padding:6px 14px; border-radius:6px; text-decoration:none; font-size:.8rem; font-weight:600; }

.sp-desc-section { padding:48px 20px; background:#F4F9F0; }
.sp-desc-inner { max-width:900px; margin:0 auto; }
.sp-desc-inner h2 { font-family:'Playfair Display',Georgia,serif; font-size:1.7rem; color:#2E6B3E; margin-bottom:24px; text-align:center; }
.sp-desc-content { background:#fff; border-radius:16px; padding:32px; box-shadow:0 4px 16px rgba(0,0,0,.06); line-height:1.8; color:#444; }

.sp-related { padding:48px 20px; background:#fff; }
.sp-related-inner { max-width:1200px; margin:0 auto; }
.sp-related-inner h2 { font-family:'Playfair Display',Georgia,serif; font-size:1.7rem; color:#2E6B3E; margin-bottom:28px; text-align:center; }
.sp-related-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(200px,1fr)); gap:20px; }
.sp-related-card { background:#F4F9F0; border-radius:14px; overflow:hidden; box-shadow:0 3px 12px rgba(0,0,0,.07); transition:transform .3s; border:1px solid #D6E8D8; }
.sp-related-card:hover { transform:translateY(-4px); }
.sp-related-card img { width:100%; aspect-ratio:1; object-fit:cover; display:block; }
.sp-related-card-body { padding:14px; }
.sp-related-card-body h4 { font-size:.9rem; margin:0 0 6px; }
.sp-related-card-body h4 a { text-decoration:none; color:#1A2B1C; }
.sp-related-card-price { font-weight:800; color:#2E6B3E; font-size:.95rem; }

/* WooCommerce add to cart */
.wc-single-product .quantity { display:inline-flex; align-items:center; gap:8px; margin-right:10px; }
.wc-single-product .quantity input { width:60px; padding:10px; border:2px solid #D6E8D8; border-radius:8px; text-align:center; font-size:1rem; }
.wc-single-product .single_add_to_cart_button { background:linear-gradient(135deg,#2E6B3E,#1E5030) !important; color:#fff !important; border:none !important; padding:12px 28px !important; border-radius:30px !important; font-size:.95rem !important; font-weight:700 !important; cursor:pointer !important; transition:all .28s !important; }
.wc-single-product .single_add_to_cart_button:hover { transform:translateY(-2px) !important; box-shadow:0 6px 20px rgba(46,107,62,.35) !important; }

/* ── MOBILE ── */
@media (max-width: 768px) {
  .sp-grid { grid-template-columns:1fr; gap:28px; }
  .sp-main { padding:24px 16px; }
  .sp-img-wrap { max-width:320px; margin:0 auto; }
  .sp-title { font-size:1.4rem; }
  .sp-price { font-size:1.6rem; }
  .sp-desc-content { padding:20px; }
  .sp-desc-section { padding:32px 16px; }
  .sp-related { padding:32px 16px; }
  .sp-related-grid { grid-template-columns:repeat(2,1fr); gap:14px; }
  .sp-badges { grid-template-columns:repeat(3,1fr); gap:8px; }
  .sp-badge { padding:10px 6px; }
  .sp-badge-text { font-size:.62rem; }
}

@media (max-width: 400px) {
  .sp-related-grid { grid-template-columns:1fr 1fr; }
  .sp-badges { gap:6px; }
}
</style>

<main class="wc-single-product">
<?php while (have_posts()) : the_post(); ?>
<?php global $product; $product = wc_get_product(get_the_ID()); ?>

  <!-- Breadcrumb -->
  <div class="sp-breadcrumb">
    <a href="<?php echo esc_url(home_url()); ?>">Home</a>
    <span>›</span>
    <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>">Shop</a>
    <?php
    $terms = get_the_terms(get_the_ID(), 'product_cat');
    if ($terms && !is_wp_error($terms)) {
      $term = array_values(array_filter($terms, fn($t) => $t->term_id != 15));
      if (!empty($term)) {
        echo '<span>›</span><a href="'.esc_url(get_term_link($term[0])).'">'.esc_html($term[0]->name).'</a>';
      }
    }
    ?>
    <span>›</span>
    <span style="color:#333;"><?php the_title(); ?></span>
  </div>

  <!-- Product Main -->
  <section class="sp-main">
    <div class="sp-grid">

      <!-- Image Column -->
      <div>
        <?php if (has_post_thumbnail()) : ?>
          <div class="sp-img-wrap">
            <?php the_post_thumbnail('large', ['style'=>'width:100%;height:auto;display:block;']); ?>
          </div>
        <?php else : ?>
          <div class="sp-img-wrap">
            <div class="sp-img-placeholder">🌿</div>
          </div>
        <?php endif; ?>

        <div class="sp-badges">
          <div class="sp-badge"><span class="sp-badge-icon">✅</span><span class="sp-badge-text">FSSAI Certified</span></div>
          <div class="sp-badge"><span class="sp-badge-icon">🌿</span><span class="sp-badge-text">100% Natural</span></div>
          <div class="sp-badge"><span class="sp-badge-icon">🚚</span><span class="sp-badge-text">Free Shipping ₹499+</span></div>
        </div>
      </div>

      <!-- Details Column -->
      <div>
        <?php
        $terms = get_the_terms(get_the_ID(), 'product_cat');
        if ($terms && !is_wp_error($terms)) {
          $term = array_values(array_filter($terms, fn($t) => $t->term_id != 15));
          if (!empty($term)) echo '<p class="sp-cat-tag">'.esc_html($term[0]->name).'</p>';
        }
        ?>
        <h1 class="sp-title"><?php the_title(); ?></h1>

        <div class="sp-price"><?php echo $product->get_price_html(); ?></div>

        <?php if ($product->get_short_description()) : ?>
          <div class="sp-short-desc"><?php echo wp_kses_post($product->get_short_description()); ?></div>
        <?php endif; ?>

        <div class="sp-atc-wrap">
          <?php woocommerce_template_single_add_to_cart(); ?>
        </div>

        <div class="sp-meta">
          <div class="sp-meta-row"><span>🏷️</span><span><strong>SKU:</strong> <?php echo $product->get_sku() ?: 'HMB-'.get_the_ID(); ?></span></div>
          <div class="sp-meta-row"><span>🌱</span><span><strong>Type:</strong> 100% Vegetarian</span></div>
          <div class="sp-meta-row"><span>✅</span><span><strong>Certification:</strong> FSSAI No. 11225332000490</span></div>
        </div>

        <div class="sp-share">
          <span>Share:</span>
          <a href="https://wa.me/?text=<?php echo urlencode(get_the_title().' - '.get_permalink()); ?>" target="_blank" rel="noopener">💬 WhatsApp</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Full Description -->
  <?php if (get_the_content()) : ?>
  <section class="sp-desc-section">
    <div class="sp-desc-inner">
      <h2>Product Details</h2>
      <div class="sp-desc-content">
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
  <section class="sp-related">
    <div class="sp-related-inner">
      <h2>You May Also Like</h2>
      <div class="sp-related-grid">
        <?php foreach ($related as $related_id) :
          $rp = wc_get_product($related_id);
          if (!$rp) continue;
        ?>
        <div class="sp-related-card">
          <a href="<?php echo esc_url(get_permalink($related_id)); ?>">
            <?php
            $rimg = get_the_post_thumbnail($related_id, 'medium', ['style'=>'width:100%;aspect-ratio:1;object-fit:cover;display:block;']);
            echo $rimg ?: '<div style="aspect-ratio:1;background:#E8F4EA;display:flex;align-items:center;justify-content:center;font-size:48px;">🌿</div>';
            ?>
          </a>
          <div class="sp-related-card-body">
            <h4><a href="<?php echo esc_url(get_permalink($related_id)); ?>"><?php echo esc_html($rp->get_name()); ?></a></h4>
            <div class="sp-related-card-price"><?php echo $rp->get_price_html(); ?></div>
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
