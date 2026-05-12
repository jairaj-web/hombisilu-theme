<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Sticky Header Wrap (announcement + nav stick together on desktop) -->
<div class="sticky-header-wrap">

<!-- Announcement Bar -->
<div class="announcement-bar">
  🚚 Free Shipping on Orders Above ₹499 &nbsp;|&nbsp; 100% Natural &nbsp;|&nbsp; FSSAI Certified
</div>

<!-- Site Header -->
<header class="site-header" id="site-header">
  <div class="header-inner">

    <!-- Brand -->
    <div class="site-brand">
      <a href="<?php echo home_url('/'); ?>">
        <span class="brand-name">Hombisilu</span>
        <span class="brand-tagline">Golden Sunshine — Taste the Tradition</span>
      </a>
    </div>

    <!-- Desktop Navigation -->
    <nav class="main-nav" aria-label="Primary Navigation">
      <?php wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'items_wrap'     => '<ul>%3$s</ul>',
        'fallback_cb'    => false,
      ]); ?>
    </nav>

    <!-- Header Actions -->
    <div class="header-actions">
      <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn-shop">Shop Now</a>
      <?php if (function_exists('WC')) : ?>
      <a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon" aria-label="Shopping Cart">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/>
          <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
        </svg>
        <?php $count = WC()->cart ? WC()->cart->get_cart_contents_count() : 0; ?>
        <?php if ($count > 0) : ?>
        <span class="cart-count"><?php echo $count; ?></span>
        <?php endif; ?>
      </a>
      <?php endif; ?>

      <!-- Hamburger (Mobile) -->
      <button class="hamburger" id="hamburger" aria-label="Toggle Menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>
</header>

</div><!-- /.sticky-header-wrap -->

<!-- Mobile Nav Overlay -->
<div class="mobile-nav-overlay" id="mobile-nav-overlay"></div>

<!-- Mobile Nav Drawer -->
<nav class="mobile-nav" id="mobile-nav" aria-label="Mobile Navigation">
  <div class="mobile-nav-header">
    <div>
      <div style="font-family:'Playfair Display',Georgia,serif;font-size:1.3rem;font-weight:700;color:#8B4513;line-height:1.1;">Hombisilu</div>
      <div style="font-size:.62rem;color:#999;letter-spacing:1.5px;text-transform:uppercase;margin-top:2px;">Golden Sunshine</div>
    </div>
    <button class="mobile-close" id="mobile-close" aria-label="Close Menu" style="font-size:1.25rem;width:34px;height:34px;border-radius:50%;background:#FFF8F0;border:1.5px solid #E8DDD0;color:#444;display:flex;align-items:center;justify-content:center;cursor:pointer;line-height:1;">&#x2715;</button>
  </div>

  <?php wp_nav_menu([
    'theme_location' => 'primary',
    'container'      => false,
    'items_wrap'     => '<ul>%3$s</ul>',
    'fallback_cb'    => false,
  ]); ?>

  <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn-shop" style="display:block;text-align:center;margin-top:24px;padding:14px;border-radius:14px;font-size:1rem;">
    🛍️ Shop All Products
  </a>

  <?php if (function_exists('WC')) : ?>
  <a href="<?php echo wc_get_cart_url(); ?>" style="display:flex;align-items:center;justify-content:center;gap:8px;margin-top:12px;padding:12px;border-radius:10px;background:#FFF8F0;color:#8B4513;font-weight:600;font-size:.9rem;">
    🛒 Cart (<?php echo WC()->cart ? WC()->cart->get_cart_contents_count() : 0; ?> items)
  </a>
  <?php endif; ?>

  <div style="margin-top:32px;padding-top:24px;border-top:1px solid #E8DDD0;">
    <div style="font-size:.78rem;color:#999;margin-bottom:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;">Contact</div>
    <a href="tel:+916362616933" style="display:block;font-size:.9rem;color:#555;padding:6px 0;">📞 +91 6362616933</a>
    <a href="https://wa.me/916362616933" style="display:block;font-size:.9rem;color:#25D366;padding:6px 0;font-weight:600;">💬 Chat on WhatsApp</a>
  </div>
</nav>

<script>
(function() {
  var hamburger = document.getElementById('hamburger');
  var mobileNav = document.getElementById('mobile-nav');
  var overlay   = document.getElementById('mobile-nav-overlay');
  var closeBtn  = document.getElementById('mobile-close');
  var header    = document.getElementById('site-header');

  function openNav() {
    hamburger.classList.add('active');
    mobileNav.classList.add('open');
    overlay.classList.add('open');
    hamburger.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }
  function closeNav() {
    hamburger.classList.remove('active');
    mobileNav.classList.remove('open');
    overlay.classList.remove('open');
    hamburger.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  if (hamburger) hamburger.addEventListener('click', openNav);
  if (closeBtn)  closeBtn.addEventListener('click', closeNav);
  if (overlay)   overlay.addEventListener('click', closeNav);

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeNav();
  });

  /* Sticky header scroll effect */
  window.addEventListener('scroll', function() {
    if (window.scrollY > 60) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }, { passive: true });
})();
</script>
