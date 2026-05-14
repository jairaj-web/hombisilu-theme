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
$page_title = $cat_slug ? single_term_title('', false) : 'Our Shop';
?>

<main class="sp-page">

<!-- ══════════════════════════════════════════
     SHOP HERO
══════════════════════════════════════════ -->
<div class="sp-hero">
  <div class="sp-hero-bg"></div>
  <div class="sp-hero-inner">
    <div class="sp-hero-pills">
      <span class="sp-pill">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        100% Natural
      </span>
      <span class="sp-pill">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        FSSAI Certified
      </span>
      <span class="sp-pill">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
        Pan-India Delivery
      </span>
    </div>
    <h1 class="sp-hero-title"><?php echo esc_html($page_title); ?></h1>
    <p class="sp-hero-sub">Authentic South Indian foods — crafted with heritage, rooted in purity</p>
  </div>
  <div class="sp-hero-wave">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,40 C360,80 1080,0 1440,40 L1440,60 L0,60 Z" fill="#FFF8F0"/></svg>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SHOP BODY
══════════════════════════════════════════ -->
<div class="sp-body">
  <div class="sp-container">

    <!-- Category Filter -->
    <div class="sp-filter-wrap">
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
         class="sp-filter-pill <?php echo !$cat_slug ? 'active' : ''; ?>">
        All Products
        <?php if (!$cat_slug) : ?><span class="sp-pill-count"><?php echo (new WP_Query(['post_type'=>'product','posts_per_page'=>-1]))->found_posts; ?></span><?php endif; ?>
      </a>
      <?php
      $cats = get_terms(['taxonomy' => 'product_cat', 'hide_empty' => true, 'exclude' => [15]]);
      foreach ($cats as $cat) :
        $is_active = ($cat_slug === $cat->slug);
      ?>
      <a href="<?php echo esc_url(get_term_link($cat)); ?>"
         class="sp-filter-pill <?php echo $is_active ? 'active' : ''; ?>">
        <?php echo esc_html($cat->name); ?>
        <?php if ($is_active) : ?><span class="sp-pill-count"><?php echo $cat->count; ?></span><?php endif; ?>
      </a>
      <?php endforeach; ?>
    </div>

    <!-- Results bar -->
    <div class="sp-results-bar">
      <p class="sp-results-count">
        Showing <strong><?php echo $shop_query->post_count; ?></strong> of <strong><?php echo $shop_query->found_posts; ?></strong> products
        <?php if ($cat_slug) : ?> in <em><?php echo esc_html($page_title); ?></em><?php endif; ?>
      </p>
    </div>

    <!-- Product Grid -->
    <?php if ($shop_query->have_posts()) : ?>
    <div class="sp-grid">
      <?php while ($shop_query->have_posts()) : $shop_query->the_post();
        $product   = wc_get_product(get_the_ID());
        if (!$product) continue;
        $permalink = get_permalink();
        $terms     = get_the_terms(get_the_ID(), 'product_cat');
        $cat_name  = '';
        if ($terms && !is_wp_error($terms)) {
          $vis = array_values(array_filter($terms, fn($t) => $t->term_id != 15));
          if (!empty($vis)) $cat_name = $vis[0]->name;
        }
      ?>
      <div class="sp-card">

        <a href="<?php echo esc_url($permalink); ?>" class="sp-card-img-wrap">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', ['class'=>'sp-card-img', 'loading'=>'lazy']); ?>
          <?php else : ?>
            <div class="sp-card-img-ph">
              <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="#C9A055" stroke-width="1.2"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
            </div>
          <?php endif; ?>
          <?php if ($cat_name) : ?>
          <span class="sp-card-cat"><?php echo esc_html($cat_name); ?></span>
          <?php endif; ?>
          <div class="sp-card-overlay">
            <span class="sp-card-view">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
              View Product
            </span>
          </div>
        </a>

        <div class="sp-card-body">
          <div class="sp-card-stars">
            <?php for($i=0;$i<5;$i++): ?>
            <svg width="13" height="13" viewBox="0 0 24 24" fill="#C9A055" stroke="#C9A055" stroke-width="0.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <?php endfor; ?>
          </div>
          <h3 class="sp-card-title">
            <a href="<?php echo esc_url($permalink); ?>"><?php the_title(); ?></a>
          </h3>
          <div class="sp-card-footer">
            <span class="sp-card-price"><?php echo $product->get_price_html(); ?></span>
            <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
               class="sp-atc add_to_cart_button ajax_add_to_cart"
               data-product_id="<?php echo get_the_ID(); ?>"
               data-product_type="<?php echo esc_attr($product->get_type()); ?>"
               rel="nofollow">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
              Add to Cart
            </a>
          </div>
        </div>

      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <!-- Pagination -->
    <?php if ($shop_query->max_num_pages > 1) : ?>
    <div class="sp-pagination">
      <?php
      $shop_base = trailingslashit(get_permalink(wc_get_page_id('shop')));
      echo paginate_links([
        'base'      => $shop_base . '%_%',
        'format'    => 'page/%#%/',
        'total'     => $shop_query->max_num_pages,
        'current'   => $paged,
        'prev_text' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg> Prev',
        'next_text' => 'Next <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>',
        'type'      => 'list',
      ]);
      ?>
    </div>
    <?php endif; ?>

    <?php else : ?>
    <div class="sp-empty">
      <div class="sp-empty-icon">
        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#C9A055" stroke-width="1.4"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
      </div>
      <h3>No products found</h3>
      <p>Try browsing all categories or check back soon for new arrivals.</p>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="sp-btn-primary">View All Products</a>
    </div>
    <?php endif; ?>

  </div>
</div>

</main>

<style>
/* ════════════════════════════════════════════
   SHOP PAGE STYLES
════════════════════════════════════════════ */
:root {
  --sp-maroon:    #6B2737;
  --sp-maroon-dk: #4A0E1A;
  --sp-gold:      #C9A055;
  --sp-gold-lt:   #F5C842;
  --sp-cream:     #FFF8F0;
  --sp-border:    #E8DDD0;
  --sp-text:      #3A2A20;
  --sp-muted:     #7A6A60;
}

.sp-page { background: var(--sp-cream); min-height: 60vh; }
.sp-container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

/* ── HERO ─────────────────────────────────── */
.sp-hero {
  position: relative; overflow: hidden;
  background: linear-gradient(160deg, #4A0E1A 0%, #6B2737 50%, #C9A055 100%);
  padding: 72px 24px 80px; text-align: center;
}
.sp-hero-bg {
  position: absolute; inset: 0;
  background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  pointer-events: none;
}
.sp-hero-inner { position: relative; z-index: 1; max-width: 640px; margin: 0 auto; }
.sp-hero-pills { display: flex; gap: 10px; justify-content: center; flex-wrap: wrap; margin-bottom: 24px; }
.sp-pill {
  display: inline-flex; align-items: center; gap: 6px;
  background: rgba(201,160,85,.18); border: 1px solid rgba(201,160,85,.4);
  color: #F5C842; padding: 6px 14px; border-radius: 30px;
  font-size: .68rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase;
  backdrop-filter: blur(6px);
}
.sp-hero-title {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: clamp(2.2rem, 5vw, 3.6rem);
  color: #fff; font-weight: 700; margin-bottom: 12px; line-height: 1.15;
  text-shadow: 0 2px 20px rgba(0,0,0,.25);
}
.sp-hero-sub { color: rgba(255,255,255,.75); font-size: 1rem; font-style: italic; }
.sp-hero-wave {
  position: absolute; bottom: -1px; left: 0; right: 0;
}
.sp-hero-wave svg { display: block; width: 100%; height: 50px; }

/* ── BODY ─────────────────────────────────── */
.sp-body { background: var(--sp-cream); padding: 40px 0 80px; }

/* ── FILTER BAR ───────────────────────────── */
.sp-filter-wrap {
  display: flex; gap: 10px; flex-wrap: wrap;
  margin-bottom: 28px; align-items: center;
}
.sp-filter-pill {
  display: inline-flex; align-items: center; gap: 7px;
  padding: 9px 20px; border-radius: 30px;
  border: 1.5px solid var(--sp-border);
  background: #fff; color: var(--sp-text);
  font-size: .82rem; font-weight: 600;
  transition: all .25s; cursor: pointer; white-space: nowrap;
}
.sp-filter-pill:hover { border-color: var(--sp-gold); color: var(--sp-maroon); background: rgba(201,160,85,.06); }
.sp-filter-pill.active {
  background: var(--sp-maroon); color: #fff !important;
  border-color: var(--sp-maroon);
  box-shadow: 0 4px 16px rgba(107,39,55,.25);
}
.sp-pill-count {
  background: rgba(255,255,255,.25); color: inherit;
  font-size: .68rem; font-weight: 700;
  padding: 2px 7px; border-radius: 12px;
}
.sp-filter-pill.active .sp-pill-count { background: rgba(255,255,255,.2); }

/* ── RESULTS BAR ──────────────────────────── */
.sp-results-bar { margin-bottom: 28px; }
.sp-results-count { font-size: .85rem; color: var(--sp-muted); }
.sp-results-count strong { color: var(--sp-maroon); }
.sp-results-count em { color: var(--sp-maroon); font-style: italic; }

/* ── PRODUCT GRID ─────────────────────────── */
.sp-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}
.sp-card {
  background: #fff; border-radius: 18px; overflow: hidden;
  border: 1.5px solid var(--sp-border);
  box-shadow: 0 4px 16px rgba(0,0,0,.05);
  transition: transform .3s, box-shadow .3s;
  display: flex; flex-direction: column;
}
.sp-card:hover { transform: translateY(-7px); box-shadow: 0 20px 52px rgba(107,39,55,.13); }

.sp-card-img-wrap {
  display: block; position: relative;
  aspect-ratio: 1; overflow: hidden;
  background: var(--sp-cream);
}
.sp-card-img { width: 100%; height: 100%; object-fit: cover; transition: transform .4s; display: block; }
.sp-card:hover .sp-card-img { transform: scale(1.06); }
.sp-card-img-ph {
  width: 100%; height: 100%;
  display: flex; align-items: center; justify-content: center;
  background: linear-gradient(135deg, var(--sp-cream), #F5E6D3);
}
.sp-card-cat {
  position: absolute; top: 12px; left: 12px;
  background: var(--sp-maroon); color: #fff;
  font-size: .63rem; font-weight: 700; letter-spacing: 1px;
  text-transform: uppercase; padding: 4px 10px; border-radius: 20px;
  pointer-events: none;
}
.sp-card-overlay {
  position: absolute; inset: 0;
  background: rgba(74,14,26,.55);
  display: flex; align-items: center; justify-content: center;
  opacity: 0; transition: opacity .3s;
}
.sp-card:hover .sp-card-overlay { opacity: 1; }
.sp-card-view {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(255,255,255,.15); backdrop-filter: blur(8px);
  border: 1.5px solid rgba(255,255,255,.5);
  color: #fff; padding: 10px 20px; border-radius: 30px;
  font-size: .82rem; font-weight: 700;
}

.sp-card-body { padding: 18px; flex: 1; display: flex; flex-direction: column; }
.sp-card-stars { display: flex; gap: 2px; margin-bottom: 8px; }
.sp-card-title {
  font-size: .93rem; font-weight: 700; color: var(--sp-text);
  line-height: 1.35; margin-bottom: 14px; flex: 1;
}
.sp-card-title a { color: inherit; text-decoration: none; }
.sp-card-title a:hover { color: var(--sp-maroon); }
.sp-card-footer { display: flex; align-items: center; justify-content: space-between; gap: 8px; margin-top: auto; }
.sp-card-price { font-size: 1.1rem; font-weight: 800; color: var(--sp-maroon); }
.sp-atc {
  display: inline-flex; align-items: center; gap: 6px;
  background: var(--sp-maroon); color: #fff !important;
  padding: 9px 14px; border-radius: 10px;
  font-size: .78rem; font-weight: 700;
  transition: background .25s, transform .2s;
  cursor: pointer; white-space: nowrap; border: none;
}
.sp-atc:hover { background: var(--sp-maroon-dk) !important; transform: scale(1.04); }

/* ── PAGINATION ───────────────────────────── */
.sp-pagination { margin-top: 56px; display: flex; justify-content: center; }
.sp-pagination .page-numbers {
  display: flex; align-items: center; gap: 8px; list-style: none; padding: 0; margin: 0; flex-wrap: wrap; justify-content: center;
}
.sp-pagination .page-numbers li {}
.sp-pagination .page-numbers a,
.sp-pagination .page-numbers span {
  display: inline-flex; align-items: center; gap: 6px;
  min-width: 42px; height: 42px; padding: 0 16px; border-radius: 10px;
  font-size: .85rem; font-weight: 600; border: 1.5px solid var(--sp-border);
  background: #fff; color: var(--sp-text);
  transition: all .25s; cursor: pointer; text-decoration: none;
}
.sp-pagination .page-numbers a:hover { border-color: var(--sp-gold); color: var(--sp-maroon); background: rgba(201,160,85,.06); }
.sp-pagination .page-numbers .current { background: var(--sp-maroon); color: #fff !important; border-color: var(--sp-maroon); }
.sp-pagination .page-numbers .prev,
.sp-pagination .page-numbers .next { padding: 0 20px; }

/* ── EMPTY STATE ──────────────────────────── */
.sp-empty {
  text-align: center; padding: 80px 24px;
  background: #fff; border-radius: 20px;
  border: 1.5px solid var(--sp-border);
}
.sp-empty-icon {
  width: 88px; height: 88px; border-radius: 24px;
  background: linear-gradient(135deg, rgba(201,160,85,.15), rgba(107,39,55,.08));
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto 24px;
}
.sp-empty h3 {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: 1.6rem; color: var(--sp-maroon); margin-bottom: 10px;
}
.sp-empty p { color: var(--sp-muted); margin-bottom: 28px; }
.sp-btn-primary {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--sp-maroon); color: #fff !important;
  padding: 13px 28px; border-radius: 30px;
  font-weight: 700; font-size: .92rem;
  transition: all .28s;
}
.sp-btn-primary:hover { background: var(--sp-maroon-dk); transform: translateY(-2px); }

/* ── RESPONSIVE ───────────────────────────── */
@media (max-width: 1024px) {
  .sp-grid { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 768px) {
  .sp-grid { grid-template-columns: repeat(2, 1fr); gap: 16px; }
  .sp-hero { padding: 56px 20px 72px; }
}
@media (max-width: 480px) {
  .sp-grid { grid-template-columns: 1fr; }
  .sp-filter-wrap { gap: 8px; }
  .sp-filter-pill { font-size: .76rem; padding: 8px 14px; }
}
@media (prefers-reduced-motion: reduce) {
  .sp-card, .sp-card-img, .sp-card-overlay { transition: none !important; }
}
</style>

<?php get_footer(); ?>
