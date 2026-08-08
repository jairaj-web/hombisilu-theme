<?php
/**
 * Homepage section: customer testimonials + FAQ teaser.
 *
 * Testimonials copied verbatim from the original front-page.php (Priya S.,
 * Meera R., Suresh K.). FAQ Q&A copied verbatim from template-faqs.php.
 *
 * Self-contained: computes its own helpers, relies on nothing set by
 * front-page.php.
 */

$tpl = get_template_directory_uri();

$hb_testimonials = [
	[ 'Priya S.',  'Bengaluru', "Hombisilu's filter coffee powder is the closest I've come to the coffee my grandmother used to make. Absolutely authentic taste!" ],
	[ 'Meera R.',  'Chennai',   "The Kashaya Powder has become a part of our evening ritual. Delicious, calming, and I love that it's completely natural." ],
	[ 'Suresh K.', 'Mumbai',    "Best Appe Midi pickle I have had outside of my native village. The flavour is exactly as I remember from childhood." ],
];

$hb_faq_teaser = [
	[
		'q' => 'Do you offer pan-India delivery?',
		'a' => 'Yes. We ship across India. Delivery timelines and charges will be communicated at checkout.',
	],
	[
		'q' => 'Are your products FSSAI certified?',
		'a' => 'Absolutely. All Hombisilu products carry valid FSSAI certification. Our primary license number is <strong>11225332000490</strong>.',
	],
	[
		'q' => 'What is your return policy?',
		'a' => 'We accept returns only for damaged, defective, or wrong items. As food products, we cannot accept returns for change of mind. Report issues within 48 hours with photographs.',
	],
	[
		'q' => 'How long does delivery take?',
		'a' => '<strong>Within Bengaluru:</strong> 1&ndash;2 business days<br><strong>Other Karnataka cities:</strong> 2&ndash;4 business days<br><strong>Rest of India:</strong> 4&ndash;7 business days',
	],
];
?>

<!-- ══════════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════════ -->
<section class="ds-section ds-section--cream ht-testi-section" aria-labelledby="ht-testi-heading">
	<div class="ds-wrap">
		<div class="ds-head ds-head--center">
			<span class="ds-eyebrow">Customer Love</span>
			<h2 class="ds-title" id="ht-testi-heading">What Our Customers Say</h2>
			<p class="ds-sub">Real words from real families who bring Hombisilu into their kitchens.</p>
		</div>

		<div class="ds-grid ds-grid--3 ht-testi-grid">
			<?php foreach ( $hb_testimonials as $t ) :
				$initial = esc_html( mb_substr( $t[0], 0, 1 ) );
				?>
				<article class="ht-testi">
					<div class="ht-testi-top">
						<span class="ht-testi-avatar" aria-hidden="true"><?php echo $initial; ?></span>
						<div class="ht-testi-stars" aria-label="Rated 5 out of 5"><?php echo hb_stars( 14 ); ?></div>
					</div>
					<blockquote class="ht-testi-quote">&ldquo;<?php echo esc_html( $t[2] ); ?>&rdquo;</blockquote>
					<footer class="ht-testi-name"><?php echo esc_html( $t[0] ); ?><span class="ht-testi-loc"><?php echo esc_html( $t[1] ); ?></span></footer>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ══════════════════════════════════════════
     FAQ TEASER
══════════════════════════════════════════ -->
<section class="ds-section ds-section--white ht-faq-section" aria-labelledby="ht-faq-heading">
	<div class="ds-wrap ds-wrap--narrow">
		<div class="ds-head ds-head--center">
			<span class="ds-eyebrow">Quick Answers</span>
			<h2 class="ds-title" id="ht-faq-heading">Frequently Asked</h2>
			<p class="ds-sub">A few common questions before you order &mdash; see all answers on our FAQ page.</p>
		</div>

		<div class="ht-faq-accordion">
			<?php foreach ( $hb_faq_teaser as $item ) : ?>
				<details class="ht-faq-item">
					<summary class="ht-faq-q">
						<span><?php echo esc_html( $item['q'] ); ?></span>
						<span class="ht-faq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
					</summary>
					<div class="ht-faq-a"><?php echo wp_kses_post( $item['a'] ); ?></div>
				</details>
			<?php endforeach; ?>
		</div>

		<div class="ht-faq-cta">
			<a href="<?php echo esc_url( home_url( '/faqs' ) ); ?>" class="ds-btn ds-btn--outline">
				View All FAQs
				<?php echo hb_icon( 'arrow', 16 ); ?>
			</a>
		</div>
	</div>
</section>
