<?php
/**
 * Single Product Template — Hombisilu Modern Redesign
 */
defined('ABSPATH') || exit;

get_header();
while (have_posts()) : the_post();
global $product;
$imgs       = $product->get_gallery_image_ids();
$main_id    = $product->get_image_id();
$main_url   = wp_get_attachment_image_url($main_id, 'woocommerce_single');
$thumb_url  = wp_get_attachment_image_url($main_id, 'woocommerce_thumbnail');
$cats       = wc_get_product_category_list($product->get_id(), ', ');
$sku        = $product->get_sku();
$price_html = $product->get_price_html();
?>

<style>
:root{
  --sp-maroon:#6B2737;--sp-maroon-dk:#4A0E1A;--sp-gold:#C9A055;
  --sp-cream:#FFF8F0;--sp-border:#E8DDD0;--sp-text:#333;
}
*,*::before,*::after{box-sizing:border-box}
.sp-wrap{max-width:1200px;margin:0 auto;padding:32px 20px 80px;}

/* Breadcrumb */
.sp-breadcrumb{display:flex;align-items:center;gap:6px;font-size:.82rem;color:#888;margin-bottom:28px;flex-wrap:wrap;}
.sp-breadcrumb a{color:var(--sp-maroon);text-decoration:none;font-weight:500;}
.sp-breadcrumb a:hover{text-decoration:underline;}
.sp-breadcrumb svg{width:12px;height:12px;color:#bbb;flex-shrink:0;}

/* Main layout */
.sp-main{display:grid;grid-template-columns:1fr 1fr;gap:52px;align-items:start;}
@media(max-width:768px){.sp-main{grid-template-columns:1fr;gap:28px;}}

/* Gallery */
.sp-gallery{}
.sp-img-main-wrap{position:relative;border-radius:20px;overflow:hidden;background:#f9f5ef;aspect-ratio:1/1;cursor:zoom-in;border:2px solid var(--sp-border);}
.sp-img-main-wrap img{width:100%;height:100%;object-fit:cover;transition:transform .5s ease;}
.sp-img-main-wrap:hover img{transform:scale(1.05);}
.sp-zoom-icon{position:absolute;top:14px;right:14px;width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.85);backdrop-filter:blur(6px);display:flex;align-items:center;justify-content:center;box-shadow:0 2px 8px rgba(0,0,0,.12);}
.sp-zoom-icon svg{width:16px;height:16px;color:var(--sp-maroon);}

.sp-thumbs{display:flex;gap:10px;margin-top:12px;flex-wrap:wrap;}
.sp-thumb{width:70px;height:70px;border-radius:10px;overflow:hidden;border:2px solid transparent;cursor:pointer;transition:border-color .2s;flex-shrink:0;}
.sp-thumb.active,.sp-thumb:hover{border-color:var(--sp-gold);}
.sp-thumb img{width:100%;height:100%;object-fit:cover;}

/* Trust badges */
.sp-trust{display:flex;gap:10px;flex-wrap:wrap;margin-top:18px;}
.sp-badge{display:flex;align-items:center;gap:6px;background:#fff;border:1.5px solid var(--sp-border);border-radius:30px;padding:7px 14px;font-size:.75rem;color:var(--sp-text);font-weight:600;}
.sp-badge svg{width:16px;height:16px;color:var(--sp-gold);flex-shrink:0;}

/* Product info */
.sp-info{}
.sp-cat-badge{display:inline-block;background:rgba(107,39,55,.08);color:var(--sp-maroon);font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:4px 12px;border-radius:20px;margin-bottom:12px;}
.sp-title{font-family:'Playfair Display',Georgia,serif;font-size:2.1rem;font-weight:700;color:var(--sp-maroon-dk);line-height:1.2;margin:0 0 12px;}
@media(max-width:480px){.sp-title{font-size:1.6rem;}}
.sp-stars{display:flex;align-items:center;gap:8px;margin-bottom:14px;}
.sp-stars svg{width:18px;height:18px;}
.sp-stars span{font-size:.82rem;color:#888;}
.sp-price{font-family:'Playfair Display',Georgia,serif;font-size:2rem;font-weight:700;color:var(--sp-maroon);margin-bottom:4px;}
.sp-price del{font-size:1.2rem;color:#aaa;margin-right:10px;font-weight:400;}
.sp-price ins{text-decoration:none;}
.sp-tax-note{font-size:.75rem;color:#888;margin-bottom:16px;}
.sp-short-desc{font-size:.92rem;color:#555;line-height:1.7;margin-bottom:18px;border-left:3px solid var(--sp-gold);padding-left:14px;}
.sp-divider{border:none;border-top:1px solid var(--sp-border);margin:18px 0;}

/* WC cart */
.sp-info .cart{display:flex;flex-direction:row;align-items:center;gap:12px;flex-wrap:wrap;}
.sp-info .quantity{display:flex;align-items:center;gap:0;}
.sp-info .qty{width:80px;padding:10px 12px;border:1.5px solid var(--sp-border);border-radius:10px;font-size:1rem;text-align:center;outline:none;}
.sp-info .qty:focus{border-color:var(--sp-gold);}
.sp-info .single_add_to_cart_button,
.woocommerce .sp-info .single_add_to_cart_button,
.woocommerce-page .sp-info .single_add_to_cart_button{background:var(--sp-maroon)!important;color:#fff!important;border:none!important;border-radius:14px!important;padding:12px 36px!important;font-size:.95rem!important;font-weight:700!important;letter-spacing:.5px!important;cursor:pointer!important;transition:background .2s!important;width:auto!important;max-width:none!important;display:inline-block!important;}
.sp-info .single_add_to_cart_button:hover{background:var(--sp-maroon-dk)!important;}
.sp-info .woocommerce-variation-add-to-cart{display:flex;flex-direction:column;gap:10px;}
.sp-info .variations td,.sp-info .variations th{padding:4px 8px;font-size:.9rem;}
.sp-info .variations select{border:1.5px solid var(--sp-border);border-radius:8px;padding:8px 12px;font-size:.9rem;outline:none;width:100%;}

/* Highlights */
.sp-highlights{margin:20px 0;}
.sp-highlights-title{font-weight:700;font-size:.85rem;text-transform:uppercase;letter-spacing:1px;color:var(--sp-maroon);margin-bottom:10px;}
.sp-hl-list{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px;}
.sp-hl-list li{display:flex;align-items:flex-start;gap:10px;font-size:.88rem;color:#444;}
.sp-hl-list svg{width:16px;height:16px;color:var(--sp-gold);flex-shrink:0;margin-top:2px;}

/* Meta box */
.sp-meta-box{background:#fff;border:1.5px solid var(--sp-border);border-radius:14px;padding:16px 18px;margin:18px 0;display:flex;flex-direction:column;gap:8px;}
.sp-meta-row{display:flex;align-items:center;gap:10px;font-size:.82rem;}
.sp-meta-row strong{color:var(--sp-maroon);min-width:90px;font-weight:700;}
.sp-meta-row span{color:#555;}

/* Share */
.sp-share{display:flex;align-items:center;gap:10px;margin-top:14px;flex-wrap:wrap;}
.sp-share-label{font-size:.8rem;font-weight:600;color:#888;text-transform:uppercase;letter-spacing:1px;}
.sp-share-btn{display:flex;align-items:center;gap:6px;padding:8px 16px;border-radius:30px;font-size:.82rem;font-weight:700;text-decoration:none;transition:opacity .2s;}
.sp-share-btn:hover{opacity:.85;}
.sp-share-btn.wa{background:#25D366;color:#fff;}
.sp-share-btn.fb{background:#1877F2;color:#fff;}
.sp-share-btn svg{width:16px;height:16px;}

/* Description tab */
.sp-desc-section{margin-top:60px;}
.sp-desc-section h2{font-family:'Playfair Display',Georgia,serif;font-size:1.6rem;font-weight:700;color:var(--sp-maroon-dk);margin-bottom:6px;}
.sp-desc-underline{width:50px;height:3px;background:var(--sp-gold);border-radius:2px;margin-bottom:24px;}
.sp-desc-body{font-size:.95rem;color:#555;line-height:1.8;position:relative;}
.sp-desc-body p{margin-bottom:1em;}
.sp-desc-collapsed{max-height:160px;overflow:hidden;}
.sp-desc-collapsed::after{content:'';position:absolute;bottom:0;left:0;right:0;height:70px;background:linear-gradient(to bottom,transparent,#fff);}
.sp-read-more-btn{display:inline-flex;align-items:center;gap:7px;margin-top:14px;background:none;border:1.5px solid var(--sp-maroon);color:var(--sp-maroon);font-size:.85rem;font-weight:700;padding:8px 22px;border-radius:30px;cursor:pointer;transition:background .2s,color .2s;}
.sp-read-more-btn:hover{background:var(--sp-maroon);color:#fff;}
.sp-read-more-btn svg{width:14px;height:14px;transition:transform .3s;}
.sp-read-more-btn.expanded svg{transform:rotate(180deg);}

/* Related products */
.sp-related{margin-top:70px;}
.sp-related h2{font-family:'Playfair Display',Georgia,serif;font-size:1.6rem;font-weight:700;color:var(--sp-maroon-dk);margin-bottom:6px;}
.sp-related-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:24px;}
@media(max-width:900px){.sp-related-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:480px){.sp-related-grid{grid-template-columns:1fr 1fr;gap:12px;}}
.sp-rel-card{background:#fff;border-radius:16px;overflow:hidden;border:1.5px solid var(--sp-border);transition:box-shadow .25s,transform .25s;display:flex;flex-direction:column;}
.sp-rel-card:hover{box-shadow:0 8px 28px rgba(107,39,55,.13);transform:translateY(-4px);}
.sp-rel-img{position:relative;overflow:hidden;aspect-ratio:1/1;background:#f9f5ef;}
.sp-rel-img img{width:100%;height:100%;object-fit:cover;transition:transform .4s;}
.sp-rel-card:hover .sp-rel-img img{transform:scale(1.08);}
.sp-rel-overlay{position:absolute;inset:0;background:rgba(107,39,55,.55);display:flex;align-items:center;justify-content:center;opacity:0;transition:opacity .25s;}
.sp-rel-card:hover .sp-rel-overlay{opacity:1;}
.sp-rel-overlay a{background:#fff;color:var(--sp-maroon);font-size:.8rem;font-weight:700;padding:8px 18px;border-radius:30px;text-decoration:none;}
.sp-rel-body{padding:14px 14px 18px;flex:1;display:flex;flex-direction:column;gap:6px;}
.sp-rel-name{font-size:.9rem;font-weight:700;color:var(--sp-text);line-height:1.3;}
.sp-rel-name a{color:inherit;text-decoration:none;}
.sp-rel-price{font-size:.95rem;font-weight:700;color:var(--sp-maroon);}
.sp-rel-stars{display:flex;gap:2px;}
.sp-rel-stars svg{width:12px;height:12px;}

/* Lightbox */
.sp-lightbox{position:fixed;inset:0;background:rgba(0,0,0,.88);z-index:9999;display:none;align-items:center;justify-content:center;}
.sp-lightbox.open{display:flex;}
.sp-lightbox-img{max-width:90vw;max-height:90vh;border-radius:12px;object-fit:contain;}
.sp-lightbox-close{position:absolute;top:18px;right:22px;font-size:2.2rem;color:#fff;cursor:pointer;line-height:1;background:rgba(255,255,255,.15);width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;}
.sp-lightbox-close:hover{background:rgba(255,255,255,.3);}

/* ── Mobile Responsive ── */
@media(max-width:768px){
  .sp-wrap{padding:20px 14px 60px;}
  .sp-breadcrumb{font-size:.76rem;margin-bottom:18px;}

  /* Gallery */
  .sp-img-main-wrap{border-radius:14px;}
  .sp-thumb{width:56px;height:56px;border-radius:8px;}
  .sp-thumbs{gap:8px;margin-top:10px;}
  .sp-trust{gap:8px;margin-top:14px;}
  .sp-badge{font-size:.7rem;padding:6px 10px;}

  /* Info */
  .sp-title{font-size:1.5rem;margin-bottom:10px;}
  .sp-price{font-size:1.6rem;}
  .sp-price del{font-size:1rem;}
  .sp-stars svg{width:16px;height:16px;}
  .sp-short-desc{font-size:.88rem;}

  /* Cart — quantity + button inline */
  .sp-info .cart{flex-wrap:nowrap!important;align-items:center!important;}
  .sp-info .qty{width:68px;padding:10px 8px;font-size:.95rem;}
  .sp-info .single_add_to_cart_button,
  .woocommerce .sp-info .single_add_to_cart_button,
  .woocommerce-page .sp-info .single_add_to_cart_button{padding:12px 28px!important;font-size:.9rem!important;width:auto!important;max-width:none!important;flex:unset!important;display:inline-block!important;}

  /* Highlights */
  .sp-hl-list li{font-size:.85rem;}

  /* Meta box */
  .sp-meta-box{padding:14px 14px;border-radius:12px;}
  .sp-meta-row{font-size:.8rem;}
  .sp-meta-row strong{min-width:80px;}

  /* Share */
  .sp-share{gap:8px;}
  .sp-share-btn{padding:7px 14px;font-size:.78rem;}

  /* Description */
  .sp-desc-section{margin-top:40px;}
  .sp-desc-section h2{font-size:1.3rem;}
  .sp-desc-body{font-size:.88rem;}
  .sp-read-more-btn{font-size:.8rem;padding:7px 18px;}

  /* Related */
  .sp-related{margin-top:48px;}
  .sp-related h2{font-size:1.3rem;}
  .sp-related-grid{grid-template-columns:1fr 1fr;gap:12px;margin-top:18px;}
  .sp-rel-body{padding:10px 10px 14px;}
  .sp-rel-name{font-size:.82rem;}
  .sp-rel-price{font-size:.85rem;}
}

@media(max-width:400px){
  .sp-title{font-size:1.3rem;}
  .sp-price{font-size:1.4rem;}
  .sp-trust{flex-wrap:wrap;}
  .sp-info .cart{flex-wrap:nowrap!important;}
  .sp-info .single_add_to_cart_button,
  .woocommerce .sp-info .single_add_to_cart_button,
  .woocommerce-page .sp-info .single_add_to_cart_button{width:auto!important;max-width:none!important;padding:11px 22px!important;display:inline-block!important;}
  .sp-related-grid{gap:10px;}
}
</style>

<div class="sp-wrap">

  <!-- Breadcrumb -->
  <nav class="sp-breadcrumb" aria-label="Breadcrumb">
    <a href="<?php echo home_url('/'); ?>">Home</a>
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
    <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>">Shop</a>
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
    <span><?php the_title(); ?></span>
  </nav>

  <!-- Main Grid -->
  <div class="sp-main">

    <!-- Gallery Column -->
    <div class="sp-gallery">
      <div class="sp-img-main-wrap" id="sp-main-img-wrap">
        <img src="<?php echo esc_url($main_url); ?>" alt="<?php the_title_attribute(); ?>" id="sp-main-img">
        <div class="sp-zoom-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
        </div>
      </div>

      <!-- Thumbnails -->
      <?php if ($main_id || !empty($imgs)) : ?>
      <div class="sp-thumbs" id="sp-thumbs">
        <?php
        $all_ids = array_merge([$main_id], $imgs);
        foreach ($all_ids as $i => $img_id) :
          $t_url = wp_get_attachment_image_url($img_id, 'woocommerce_thumbnail');
          $f_url = wp_get_attachment_image_url($img_id, 'woocommerce_single');
        ?>
        <div class="sp-thumb <?php echo $i === 0 ? 'active' : ''; ?>"
             data-full="<?php echo esc_url($f_url); ?>"
             onclick="spSwitchImg(this)">
          <img src="<?php echo esc_url($t_url); ?>" alt="<?php the_title_attribute(); ?> thumbnail">
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <!-- Trust Badges -->
      <div class="sp-trust">
        <div class="sp-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          FSSAI Certified
        </div>
        <div class="sp-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M8 12l2.5 2.5L16 9"/></svg>
          100% Natural
        </div>
        <div class="sp-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          Fast Delivery
        </div>
        <div class="sp-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg>
          Easy Returns
        </div>
      </div>
    </div>

    <!-- Info Column -->
    <div class="sp-info">

      <?php if ($cats) : ?>
      <div class="sp-cat-badge"><?php echo wp_strip_all_tags($cats); ?></div>
      <?php endif; ?>

      <h1 class="sp-title"><?php the_title(); ?></h1>

      <!-- Stars -->
      <div class="sp-stars">
        <?php for($s=1;$s<=5;$s++) : ?>
        <svg viewBox="0 0 24 24" fill="<?php echo $s<=4?'#C9A055':'#E8DDD0'; ?>" xmlns="http://www.w3.org/2000/svg">
          <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
        </svg>
        <?php endfor; ?>
        <span>(4.8 / 5 rating)</span>
      </div>

      <!-- Price -->
      <div class="sp-price"><?php echo $price_html; ?></div>
      <div class="sp-tax-note">Inclusive of all taxes</div>

      <!-- Short description -->
      <?php if ($product->get_short_description()) : ?>
      <div class="sp-short-desc"><?php echo wp_kses_post($product->get_short_description()); ?></div>
      <?php endif; ?>

      <hr class="sp-divider">

      <!-- WooCommerce Add to Cart -->
      <?php woocommerce_template_single_add_to_cart(); ?>

      <!-- Highlights -->
      <div class="sp-highlights">
        <div class="sp-highlights-title">Why You'll Love It</div>
        <ul class="sp-hl-list">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
            Sourced directly from South Indian farms
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
            No artificial preservatives or additives
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
            Sealed for freshness — shelf life 12 months
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
            FSSAI approved, pan-India delivery available
          </li>
        </ul>
      </div>

      <!-- Meta box -->
      <div class="sp-meta-box">
        <?php if ($sku) : ?>
        <div class="sp-meta-row">
          <strong>SKU</strong>
          <span><?php echo esc_html($sku); ?></span>
        </div>
        <?php endif; ?>
        <?php if ($cats) : ?>
        <div class="sp-meta-row">
          <strong>Category</strong>
          <span><?php echo wp_strip_all_tags($cats); ?></span>
        </div>
        <?php endif; ?>
        <div class="sp-meta-row">
          <strong>FSSAI No.</strong>
          <span>11224999000302</span>
        </div>
        <div class="sp-meta-row">
          <strong>Origin</strong>
          <span>South India</span>
        </div>
      </div>

      <!-- Share buttons -->
      <div class="sp-share">
        <span class="sp-share-label">Share</span>
        <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' — ' . get_permalink()); ?>"
           class="sp-share-btn wa" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
          WhatsApp
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
           class="sp-share-btn fb" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          Facebook
        </a>
      </div>

    </div><!-- /.sp-info -->
  </div><!-- /.sp-main -->

  <!-- Product Description -->
  <?php $desc = $product->get_description(); if ($desc) : ?>
  <div class="sp-desc-section">
    <h2>Product Description</h2>
    <div class="sp-desc-underline"></div>
    <div class="sp-desc-body sp-desc-collapsed" id="sp-desc-body"><?php echo wp_kses_post($desc); ?></div>
    <button class="sp-read-more-btn" id="sp-read-more-btn" aria-expanded="false">
      Read More
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="6 9 12 15 18 9"/></svg>
    </button>
  </div>
  <?php endif; ?>

  <!-- Related Products -->
  <?php
  $related_ids = wc_get_related_products($product->get_id(), 4);
  if (!empty($related_ids)) :
    $related_products = array_map('wc_get_product', $related_ids);
  ?>
  <div class="sp-related">
    <h2>You May Also Like</h2>
    <div class="sp-desc-underline"></div>
    <div class="sp-related-grid">
      <?php foreach ($related_products as $rp) :
        if (!$rp || !$rp->is_visible()) continue;
        $r_img = get_the_post_thumbnail_url($rp->get_id(), 'woocommerce_thumbnail') ?: wc_placeholder_img_src();
      ?>
      <div class="sp-rel-card">
        <div class="sp-rel-img">
          <img src="<?php echo esc_url($r_img); ?>" alt="<?php echo esc_attr($rp->get_name()); ?>" loading="lazy">
          <div class="sp-rel-overlay">
            <a href="<?php echo esc_url($rp->get_permalink()); ?>">View Product</a>
          </div>
        </div>
        <div class="sp-rel-body">
          <div class="sp-rel-stars">
            <?php for($s=1;$s<=5;$s++) : ?>
            <svg viewBox="0 0 24 24" fill="<?php echo $s<=4?'#C9A055':'#E8DDD0'; ?>">
              <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
            </svg>
            <?php endfor; ?>
          </div>
          <div class="sp-rel-name"><a href="<?php echo esc_url($rp->get_permalink()); ?>"><?php echo esc_html($rp->get_name()); ?></a></div>
          <div class="sp-rel-price"><?php echo $rp->get_price_html(); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php endif; ?>

</div><!-- /.sp-wrap -->

<!-- Lightbox -->
<div class="sp-lightbox" id="sp-lightbox" role="dialog" aria-modal="true">
  <span class="sp-lightbox-close" id="sp-lightbox-close" aria-label="Close lightbox">&#x2715;</span>
  <img src="" alt="" class="sp-lightbox-img" id="sp-lightbox-img">
</div>

<script>
(function(){
  var mainImg  = document.getElementById('sp-main-img');
  var lightbox = document.getElementById('sp-lightbox');
  var lbImg    = document.getElementById('sp-lightbox-img');
  var lbClose  = document.getElementById('sp-lightbox-close');
  var wrap     = document.getElementById('sp-main-img-wrap');
  var currentSrc = mainImg ? mainImg.src : '';

  function spSwitchImg(el) {
    var full = el.getAttribute('data-full');
    mainImg.src = full;
    currentSrc = full;
    document.querySelectorAll('.sp-thumb').forEach(function(t){ t.classList.remove('active'); });
    el.classList.add('active');
  }
  window.spSwitchImg = spSwitchImg;

  function openLightbox() {
    lbImg.src = currentSrc;
    lightbox.classList.add('open');
    document.body.style.overflow = 'hidden';
  }
  function closeLightbox() {
    lightbox.classList.remove('open');
    document.body.style.overflow = '';
    lbImg.src = '';
  }

  if (wrap)    wrap.addEventListener('click', openLightbox);
  if (lbClose) lbClose.addEventListener('click', closeLightbox);
  if (lightbox) lightbox.addEventListener('click', function(e){ if(e.target===lightbox) closeLightbox(); });
  document.addEventListener('keydown', function(e){ if(e.key==='Escape') closeLightbox(); });

  /* Read more / Read less toggle */
  var descBody = document.getElementById('sp-desc-body');
  var readBtn  = document.getElementById('sp-read-more-btn');
  if (descBody && readBtn) {
    readBtn.addEventListener('click', function() {
      var expanded = descBody.classList.toggle('sp-desc-collapsed');
      if (!expanded) {
        readBtn.innerHTML = 'Read Less <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="14" height="14"><polyline points="6 9 12 15 18 9"/></svg>';
        readBtn.classList.add('expanded');
        readBtn.setAttribute('aria-expanded','true');
      } else {
        readBtn.innerHTML = 'Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="14" height="14"><polyline points="6 9 12 15 18 9"/></svg>';
        readBtn.classList.remove('expanded');
        readBtn.setAttribute('aria-expanded','false');
      }
    });
  }
})();
</script>

<?php endwhile; ?>
<?php get_footer(); ?>
