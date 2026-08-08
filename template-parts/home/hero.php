<?php
/**
 * Home — Static hero + Why Choose Us feature grid.
 *
 * Calm, static hero (single photo, no slider/carousel) followed by a
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

<!-- ═══════════ STATIC HERO ═══════════ -->
<section class="hh-hero">
  <img
    class="hh-hero-bg"
    src="<?php echo esc_url( $tpl ); ?>/assets/images/hero-bg.webp"
    srcset="<?php echo esc_url( $tpl ); ?>/assets/images/hero-bg-900.webp 900w,
            <?php echo esc_url( $tpl ); ?>/assets/images/hero-bg.webp 1600w"
    sizes="100vw"
    alt="Hombisilu heritage pickles and spices, freshly prepared"
    fetchpriority="high"
    decoding="async"
  >
  <span class="hh-hero-overlay" aria-hidden="true"></span>

  <div class="ds-wrap hh-hero-inner">
    <span class="ds-chip ds-chip--light hh-hero-chip"><?php echo hb_icon( 'leaf', 14 ); ?> Heritage Recipes, Made Fresh</span>
    <h1 class="hh-hero-title">Taste the Tradition.<br>Savour the Difference.</h1>
    <p class="hh-hero-lead">Small-batch pickles, chutney powders, honey and filter coffee made the way South Indian kitchens have always made them — natural, FSSAI certified, and shipped fresh to your door.</p>

    <div class="hh-hero-actions">
      <a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--gold"><?php echo hb_icon( 'bag', 16 ); ?> Shop Now</a>
      <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="ds-btn ds-btn--ghost-light">Discover Our Story <?php echo hb_icon( 'arrow', 16 ); ?></a>
    </div>
  </div>
</section>

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
