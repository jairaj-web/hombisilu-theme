<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="theme-color" content="#1F4D2E">
<script>document.documentElement.className+=' js';</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<a class="skip-link" href="#main-content">Skip to content</a>

<div class="ds-header-stack" id="header-stack">

  <!-- Announcement -->
  <div class="ds-announce" id="announce-bar">
    <div class="ds-wrap ds-announce-inner">
      <div class="ds-announce-items">
        <span><?php echo hb_icon( 'leaf', 14 ); ?> 100&#37; Natural</span>
        <span class="ds-announce-dot" aria-hidden="true">&#10022;</span>
        <span><?php echo hb_icon( 'shield', 14 ); ?> FSSAI Certified</span>
        <span class="ds-announce-dot" aria-hidden="true">&#10022;</span>
        <span><?php echo hb_icon( 'truck', 14 ); ?> Pan-India Delivery</span>
      </div>
      <button class="ds-announce-close" id="announce-close" aria-label="Dismiss announcement">&#x2715;</button>
    </div>
  </div>

  <!-- Header -->
  <header class="ds-header" id="site-header">
    <div class="ds-wrap ds-header-inner">

      <div class="ds-brand">
        <?php
        // The source logo.png is 1536x1024 (2.1MB) but renders ~54px tall, so
        // serve the resized WebP pair instead and keep the PNG as fallback.
        $logo_file = get_template_directory() . '/assets/images/logo.webp';
        if ( has_custom_logo() ) :
          the_custom_logo();
        elseif ( file_exists( $logo_file ) ) : ?>
          <?php $tpl_uri = get_template_directory_uri(); ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php echo esc_url( $tpl_uri ); ?>/assets/images/logo.webp"
                 srcset="<?php echo esc_url( $tpl_uri ); ?>/assets/images/logo.webp 1x,
                         <?php echo esc_url( $tpl_uri ); ?>/assets/images/logo@2x.webp 2x"
                 alt="Hombisilu" class="ds-logo"
                 fetchpriority="high" decoding="async">
          </a>
        <?php else : ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ds-wordmark" rel="home">
            <span class="ds-wordmark-name">Hombisilu</span>
            <span class="ds-wordmark-tag">Golden Sunshine</span>
          </a>
        <?php endif; ?>
      </div>

      <nav class="ds-nav" aria-label="Primary">
        <?php wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'items_wrap'     => '<ul>%3$s</ul>',
          'fallback_cb'    => false,
        ]); ?>
      </nav>

      <div class="ds-header-actions">
        <?php if ( function_exists( 'WC' ) ) :
          $count = WC()->cart ? WC()->cart->get_cart_contents_count() : 0; ?>
          <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="ds-icon-btn" aria-label="Shopping cart<?php echo $count ? ', ' . (int) $count . ' items' : ''; ?>">
            <?php echo hb_icon( 'bag', 20 ); ?>
            <?php if ( $count > 0 ) : ?><span class="ds-cart-count"><?php echo (int) $count; ?></span><?php endif; ?>
          </a>
        <?php endif; ?>

        <a href="<?php echo esc_url( hb_shop_url() ); ?>" class="ds-btn ds-btn--primary ds-header-cta">Shop Now <?php echo hb_icon( 'arrow', 14 ); ?></a>

        <button class="ds-burger" id="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav">
          <span></span><span></span><span></span>
        </button>
      </div>

    </div>
  </header>

</div><!-- /.ds-header-stack -->

<!-- Skip-link landing point. Templates own their own <main>, so this is a
     zero-height anchor rather than a wrapper that would nest them. -->
<div id="main-content" tabindex="-1"></div>

<div class="ds-drawer-scrim" id="mobile-nav-overlay" hidden></div>

<nav class="ds-drawer" id="mobile-nav" aria-label="Mobile navigation">
  <div class="ds-drawer-head">
    <span class="ds-wordmark">
      <span class="ds-wordmark-name">Hombisilu</span>
      <span class="ds-wordmark-tag">Golden Sunshine</span>
    </span>
    <button class="ds-icon-btn" id="mobile-close" aria-label="Close menu">&#x2715;</button>
  </div>

  <?php wp_nav_menu([
    'theme_location' => 'primary',
    'container'      => false,
    'items_wrap'     => '<ul>%3$s</ul>',
    'fallback_cb'    => false,
  ]); ?>

  <div class="ds-drawer-actions">
    <a href="<?php echo esc_url( hb_shop_url() ); ?>" class="ds-btn ds-btn--primary"><?php echo hb_icon( 'bag', 16 ); ?> Shop All Products</a>
    <?php if ( function_exists( 'WC' ) ) : ?>
      <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="ds-btn ds-btn--outline">Cart (<?php echo WC()->cart ? (int) WC()->cart->get_cart_contents_count() : 0; ?>)</a>
    <?php endif; ?>
  </div>

  <div class="ds-drawer-contact">
    <span class="ds-drawer-label">Contact</span>
    <a href="tel:+916362616933"><?php echo hb_icon( 'phone', 16 ); ?> +91 6362616933</a>
    <a href="https://wa.me/916362616933" class="ds-drawer-wa"><?php echo hb_icon( 'chat', 16 ); ?> Chat on WhatsApp</a>
  </div>
</nav>

<script>
(function () {
  var burger  = document.getElementById('hamburger');
  var drawer  = document.getElementById('mobile-nav');
  var scrim   = document.getElementById('mobile-nav-overlay');
  var closeEl = document.getElementById('mobile-close');
  var header  = document.getElementById('site-header');
  var announce      = document.getElementById('announce-bar');
  var announceClose = document.getElementById('announce-close');
  var lastFocus = null;

  /* Dismissible announcement bar — collapses with a height transition and
     stays dismissed for the tab session so it doesn't reappear on every
     internal navigation. */
  if (announce && announceClose) {
    if (sessionStorage.getItem('hbAnnounceDismissed') === '1') {
      announce.style.display = 'none';
    }
    announceClose.addEventListener('click', function () {
      announce.style.maxHeight = announce.offsetHeight + 'px';
      requestAnimationFrame(function () {
        announce.classList.add('is-collapsing');
        announce.style.maxHeight = '0px';
      });
      /* Several properties transition at once (max-height, padding, opacity)
         — wait for max-height specifically so a faster property finishing
         first doesn't cut the collapse short. */
      announce.addEventListener('transitionend', function onEnd(e) {
        if (e.propertyName !== 'max-height') return;
        announce.removeEventListener('transitionend', onEnd);
        announce.style.display = 'none';
      });
      try { sessionStorage.setItem('hbAnnounceDismissed', '1'); } catch (e) {}
    });
  }

  function openNav() {
    lastFocus = document.activeElement;
    burger.classList.add('is-active');
    drawer.classList.add('is-open');
    scrim.hidden = false;
    requestAnimationFrame(function () { scrim.classList.add('is-open'); });
    burger.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
    closeEl.focus();
  }

  function closeNav() {
    burger.classList.remove('is-active');
    drawer.classList.remove('is-open');
    scrim.classList.remove('is-open');
    burger.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
    setTimeout(function () { if (!drawer.classList.contains('is-open')) scrim.hidden = true; }, 300);
    if (lastFocus) lastFocus.focus();
  }

  if (burger)  burger.addEventListener('click', openNav);
  if (closeEl) closeEl.addEventListener('click', closeNav);
  if (scrim)   scrim.addEventListener('click', closeNav);

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && drawer.classList.contains('is-open')) closeNav();
  });

  /* Tapping any link inside the drawer should dismiss it. */
  if (drawer) {
    drawer.addEventListener('click', function (e) {
      if (e.target.closest('a')) closeNav();
    });
  }

  /* Condense the header once the page scrolls. rAF-throttled. */
  var ticking = false;
  function onScroll() {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(function () {
      header.classList.toggle('is-scrolled', window.scrollY > 40);
      ticking = false;
    });
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();
</script>
