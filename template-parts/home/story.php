<?php
/**
 * Front page — Our Story (two-column about + credential chips) and the
 * plain 4-column stat row directly beneath it.
 *
 * Calm, static structure per the Gnanajyothi reference: no floating
 * cut-outs, no angled tags — a photo, a caption badge, prose, a row of
 * small credential chips, then a simple centred stat strip.
 *
 * Story copy is reused verbatim from template-about.php's "Who We Are"
 * section (the same narrative already live on /about-us/); the four
 * headline stats reuse the exact figures from that page's stats grid
 * (26 Products / 9 Categories / 100% Natural / 0 Preservatives).
 *
 * Styles: assets/css/home-story.css (tokens from design-system.css).
 */

$tpl  = get_template_directory_uri();
$shop = hb_shop_url();

$hs_chips = [
	[ 'shield', 'FSSAI Certified' ],
	[ 'leaf',   '100% Natural' ],
	[ 'truck',  'Pan-India Delivery' ],
	[ 'pin',    'Made in Karnataka' ],
	[ 'check',  'No Preservatives' ],
];

$hs_stats = [
	[ 'bag',   '26',   'Products' ],
	[ 'grid',  '9',    'Categories' ],
	[ 'leaf',  '100%', 'Natural Ingredients' ],
	[ 'check', '0',    'Preservatives Used' ],
];
?>

<!-- ═══════════ OUR STORY ═══════════ -->
<section class="ds-section ds-section--white">
	<div class="ds-wrap hs-story">

		<figure class="hs-story-figure">
			<img src="<?php echo esc_url( $tpl ); ?>/assets/images/about-family-1000.webp"
				srcset="<?php echo esc_url( $tpl ); ?>/assets/images/about-family-560.webp 560w,
						<?php echo esc_url( $tpl ); ?>/assets/images/about-family-1000.webp 1000w"
				sizes="(max-width:900px) 90vw, 480px"
				width="1000" height="1250"
				alt="A South Indian family sharing a traditional home-cooked meal on banana leaves, served from brass vessels" loading="lazy" decoding="async">
			<figcaption class="hs-story-badge">
				<strong>15+</strong>
				<span>Years of Heritage</span>
			</figcaption>
		</figure>

		<div class="hs-story-copy">
			<div class="ds-head">
				<span class="ds-eyebrow">Who We Are</span>
				<h2 class="ds-title">What Does <em>Hombisilu</em> Mean?</h2>
			</div>

			<div class="ds-prose hs-story-prose">
				<p>Hombisilu was born from a deep-rooted love for South Indian food — not just as sustenance, but as culture, memory, and identity. The name reflects the warmth, nourishment, and brightness we bring to every household.</p>
				<p>We began with a simple idea: authentic South Indian pantry essentials that urban families could trust — products that taste like home, carry the goodness of tradition, and uphold the integrity of natural ingredients.</p>
				<p>Based in Bengaluru, Karnataka, we collaborate with skilled artisans, local farmers, and heritage recipe custodians to honour South India's rich culinary legacy.</p>
			</div>

			<blockquote class="hs-quote">
				&ldquo;We don&rsquo;t just sell food &mdash; we bottle memories of home.&rdquo;
			</blockquote>

			<ul class="hs-chips">
				<?php foreach ( $hs_chips as $chip ) : ?>
					<li class="ds-chip"><?php echo hb_icon( $chip[0], 14 ); ?> <?php echo esc_html( $chip[1] ); ?></li>
				<?php endforeach; ?>
			</ul>

			<a href="<?php echo esc_url( $shop ); ?>" class="ds-btn ds-btn--primary hs-story-cta">
				Explore Our Products <?php echo hb_icon( 'arrow', 16 ); ?>
			</a>
		</div>

	</div>
</section>

<!-- ═══════════ STAT ROW ═══════════ -->
<section class="ds-section ds-section--tight ds-section--cream">
	<div class="ds-wrap">
		<div class="hs-stats">
			<?php foreach ( $hs_stats as $stat ) :
				list( $hs_target, $hs_suffix ) = hb_stat_target_suffix( $stat[1] );
			?>
				<div class="hs-stat" data-target="<?php echo (int) $hs_target; ?>" data-suffix="<?php echo esc_attr( $hs_suffix ); ?>">
					<span class="hs-stat-icon"><?php echo hb_icon( $stat[0], 26 ); ?></span>
					<strong class="hs-stat-num"><?php echo esc_html( $stat[1] ); ?></strong>
					<span class="hs-stat-label"><?php echo esc_html( $stat[2] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<script>
(function () {
	var stats = document.querySelectorAll('.hs-stat');
	if (!stats.length || !('IntersectionObserver' in window)) return;
	if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

	var animated = false;
	var observer = new IntersectionObserver(function (entries) {
		if (animated) return;
		var visible = entries.some(function (e) { return e.isIntersecting; });
		if (!visible) return;
		animated = true;
		observer.disconnect();

		stats.forEach(function (stat) {
			var target = parseInt(stat.getAttribute('data-target'), 10);
			var suffix = stat.getAttribute('data-suffix') || '';
			var el = stat.querySelector('.hs-stat-num');
			if (!el || isNaN(target)) return;
			/* The real value is server-rendered so it's correct with no JS;
			   only reset to 0 right here, immediately before animating,
			   so there's no flash of "0" for JS users either. */
			el.textContent = '0' + suffix;
			var duration = 1400;
			var start = performance.now();
			function tick(now) {
				var elapsed = now - start;
				var progress = Math.min(elapsed / duration, 1);
				var ease = 1 - Math.pow(1 - progress, 3);
				el.textContent = Math.round(ease * target) + suffix;
				if (progress < 1) requestAnimationFrame(tick);
			}
			requestAnimationFrame(tick);
		});
	}, { threshold: 0.4 });

	observer.observe(stats[0]);
})();
</script>
