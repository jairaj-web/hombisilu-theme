<?php
/**
 * Front page — calm, corporate-clean layout (structural language modelled on
 * gnanajyothi.in, content and brand identity entirely Hombisilu's own).
 *
 * Replaces the earlier "Barab" restaurant-template mood (photo carousel,
 * floating product cut-outs, angled clip-path CTAs, auto-scrolling marquee)
 * per explicit client direction. Each section below is a self-contained
 * template-part with its own dedicated stylesheet — see
 * template-parts/home/*.php and assets/css/home-*.css, enqueued from
 * functions.php on is_front_page().
 */
get_header();

get_template_part( 'template-parts/home/hero' );
get_template_part( 'template-parts/home/story' );
get_template_part( 'template-parts/home/shop' );
get_template_part( 'template-parts/home/testimonials' );
get_template_part( 'template-parts/home/contact' );

get_footer();
