<?php
/**
 * Home — Video hero + Why Choose Us feature grid.
 *
 * Split hero (copy left, looping product film right) followed by a
 * light 5-tile "Our Promise" feature grid, reusing the exact copy from
 * the previous homepage builds (front-page-v2.php / homepage.html).
 *
 * Styles: assets/css/home-hero.css (tokens from design-system.css).
 */

$tpl  = get_template_directory_uri();
$shop = hb_shop_url();

$hh_features = [
	[
		'icon'  => 'leaf',
		'title' => '100% Natural',
		'desc'  => 'No artificial flavours, colours, or preservatives across our entire range.',
	],
	[
		'icon'  => 'shield',
		'title' => 'FSSAI Certified',
		'desc'  => 'Every product meets the highest food safety standards in India.',
	],
	[
		'icon'  => 'book',
		'title' => 'Heritage Recipes',
		'desc'  => 'Rooted in generations of Karnataka and South Indian culinary tradition.',
	],
	[
		'icon'  => 'heart',
		'title' => 'Thoughtfully Sourced',
		'desc'  => 'Premium, locally sourced ingredients from trusted farmers.',
	],
	[
		'icon'  => 'grid',
		'title' => 'Wide Range',
		'desc'  => '26 products across 9 categories for your complete pantry.',
	],
];
?>

<!-- ═══════════ VIDEO HERO ═══════════ -->
<section class="hh-hero">
  <div class="ds-wrap hh-hero-grid">
  <div class="hh-hero-inner">
    <span class="ds-chip ds-chip--light hh-hero-chip"><?php echo hb_icon( 'leaf', 14 ); ?> Heritage Recipes, Made Fresh</span>
    <h1 class="hh-hero-title">Taste the Tradition.<br>Savour the Difference.</h1>
    <p class="hh-hero-lead">Small-batch pickles, chutney powders, honey and filter coffee made the way South Indian kitchens have always made them — natural, FSSAI certified, and shipped fresh to your door.</p>

    <div class="hh-hero-actions">
      <a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--gold"><?php echo hb_icon( 'bag', 16 ); ?> Shop Now</a>
      <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="ds-btn ds-btn--ghost-light">Discover Our Story <?php echo hb_icon( 'arrow', 16 ); ?></a>
    </div>
  </div>

  <?php
  // Muted, looping product film. The poster is the LCP image (preloaded in
  // functions.php) so the frame is on screen before the video arrives; phones
  // get a 720p encode. Reduced-motion visitors keep the still poster.
  ?>
  <figure class="hh-hero-media">
    <video class="hh-hero-video"
           autoplay muted loop playsinline preload="metadata"
           poster="<?php echo esc_url( $tpl ); ?>/assets/images/hero-video-poster.webp"
           width="1280" height="720"
           aria-label="Hombisilu pickles, honey, spices and filter coffee">
      <source src="<?php echo esc_url( $tpl ); ?>/assets/video/hero-720.mp4" type="video/mp4" media="(max-width: 767px)">
      <source src="<?php echo esc_url( $tpl ); ?>/assets/video/hero.mp4" type="video/mp4">
    </video>
  </figure>
  </div>
</section>

<script>
(function () {
  var v = document.querySelector('.hh-hero-video');
  if (!v) return;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    v.removeAttribute('autoplay');
    v.pause();
    return;
  }
  /* Pause while scrolled out of view — no point decoding frames nobody sees. */
  if ('IntersectionObserver' in window) {
    new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { var p = v.play(); if (p && p.catch) p.catch(function () {}); }
        else { v.pause(); }
      });
    }).observe(v);
  }
})();
</script>

<!-- ═══════════ WHY CHOOSE US ═══════════ -->
<section class="ds-section ds-section--cream">
  <div class="ds-wrap">
    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Why Choose Us</span>
      <h2 class="ds-title">Clean. Pure. Honest.</h2>
      <p class="ds-sub">Five pillars that guide everything we make.</p>
    </div>

    <div class="hh-features">
      <?php foreach ( $hh_features as $f ) : ?>
        <div class="hh-feature-card">
          <span class="hh-feature-icon"><?php echo hb_icon( $f['icon'], 26 ); ?></span>
          <h3 class="hh-feature-title"><?php echo esc_html( $f['title'] ); ?></h3>
          <p class="hh-feature-desc"><?php echo esc_html( $f['desc'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
