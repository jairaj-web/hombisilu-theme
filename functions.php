<?php
/**
 * Hombisilu theme functions.
 */

define( 'HOMBISILU_DIR', get_stylesheet_directory() );
define( 'HOMBISILU_URI', get_stylesheet_directory_uri() );

/**
 * Version assets by file modification time so browsers pick up changes
 * immediately while still caching aggressively between deploys.
 */
function hombisilu_asset_version( $relative_path ) {
    $file = HOMBISILU_DIR . '/' . ltrim( $relative_path, '/' );
    return file_exists( $file ) ? (string) filemtime( $file ) : '2.0';
}

function hombisilu_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'custom-logo', [
        'height'      => 80,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'html5', [ 'search-form', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'responsive-embeds' );
    register_nav_menus( [ 'primary' => 'Primary Menu' ] );
}
add_action( 'after_setup_theme', 'hombisilu_setup' );

function hombisilu_scripts() {
    // Fonts as a real stylesheet request, not a CSS @import — an @import inside
    // style.css serialises the download behind style.css and delays first paint.
    wp_enqueue_style(
        'hombisilu-fonts',
        // Variable-weight ranges: one woff2 per family covers 400–900 instead of
        // shipping a separate static file for every weight the CSS uses.
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400&family=Inter:wght@300..900&display=swap',
        [],
        null
    );
    wp_enqueue_style( 'hombisilu-style', get_stylesheet_uri(), [ 'hombisilu-fonts' ], hombisilu_asset_version( 'style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'hombisilu_scripts' );

function hombisilu_widgets() {
    register_sidebar( [ 'name' => 'Footer', 'id' => 'footer-1' ] );
}
add_action( 'widgets_init', 'hombisilu_widgets' );

/* ───────────────────────────────────────────────────────────
   PERFORMANCE
   ─────────────────────────────────────────────────────────── */

/**
 * Resource hints: warm up the font connections before the CSS asks for them.
 */
function hombisilu_resource_hints( $hints, $relation ) {
    if ( 'preconnect' === $relation ) {
        $hints[] = [ 'href' => 'https://fonts.googleapis.com' ];
        $hints[] = [ 'href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous' ];
    }
    return $hints;
}
add_filter( 'wp_resource_hints', 'hombisilu_resource_hints', 10, 2 );

/**
 * Preload the LCP hero image on the front page so it starts downloading
 * during HTML parse instead of after CSS + layout.
 */
function hombisilu_preload_lcp() {
    if ( ! is_front_page() ) {
        return;
    }
    $img = HOMBISILU_URI . '/assets/images/hero-pickle-cutout.webp';
    $sm  = HOMBISILU_URI . '/assets/images/hero-pickle-cutout-600.webp';
    printf(
        '<link rel="preload" as="image" href="%s" imagesrcset="%s 600w, %s 1000w" imagesizes="(max-width:768px) 80vw, 480px" fetchpriority="high">' . "\n",
        esc_url( $img ),
        esc_url( $sm ),
        esc_url( $img )
    );
}
add_action( 'wp_head', 'hombisilu_preload_lcp', 2 );

/**
 * Strip WordPress front-end bloat this theme never uses.
 */
function hombisilu_trim_head() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'rest_output_link_wp_head' );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
}
add_action( 'init', 'hombisilu_trim_head' );

add_filter( 'emoji_svg_url', '__return_false' );
add_filter( 'the_content_feed', 'wp_staticize_emoji' );

/**
 * Drop stylesheets that only exist for the block editor / classic themes.
 * Kept on any page that actually renders blocks so nothing breaks.
 */
function hombisilu_dequeue_unused_styles() {
    if ( is_admin() ) {
        return;
    }
    $has_blocks = is_singular() && has_blocks( get_queried_object_id() );
    if ( ! $has_blocks ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'global-styles' );
        wp_dequeue_style( 'classic-theme-styles' );
    }
    // WooCommerce block CSS is only needed on cart/checkout block pages.
    if ( function_exists( 'is_woocommerce' ) && ! is_cart() && ! is_checkout() ) {
        wp_dequeue_style( 'wc-blocks-style' );
    }
}
add_action( 'wp_enqueue_scripts', 'hombisilu_dequeue_unused_styles', 100 );

/**
 * jQuery Migrate is a dev-time shim; it costs ~10KB on every page.
 */
function hombisilu_remove_jquery_migrate( $scripts ) {
    if ( is_admin() || empty( $scripts->registered['jquery'] ) ) {
        return;
    }
    $scripts->registered['jquery']->deps = array_diff(
        $scripts->registered['jquery']->deps,
        [ 'jquery-migrate' ]
    );
}
add_action( 'wp_default_scripts', 'hombisilu_remove_jquery_migrate' );

/**
 * Defer non-critical scripts so they stop blocking first paint.
 * jQuery itself is left alone — inline handlers may depend on it synchronously.
 */
function hombisilu_defer_scripts( $tag, $handle ) {
    if ( is_admin() ) {
        return $tag;
    }
    // Cart and checkout are too script-order sensitive to be worth the risk.
    if ( function_exists( 'is_cart' ) && ( is_cart() || is_checkout() || is_account_page() ) ) {
        return $tag;
    }

    $never_defer = [ 'jquery-core', 'jquery', 'wp-hooks', 'wp-i18n' ];
    if ( in_array( $handle, $never_defer, true ) || false !== strpos( $tag, ' defer' ) || false !== strpos( $tag, ' async' ) ) {
        return $tag;
    }

    // A handle with an inline "after" script would have that inline code run
    // before the deferred file loads, so leave those synchronous.
    $wp_scripts = wp_scripts();
    if ( $wp_scripts && $wp_scripts->get_data( $handle, 'after' ) ) {
        return $tag;
    }

    return str_replace( ' src=', ' defer src=', $tag );
}
add_filter( 'script_loader_tag', 'hombisilu_defer_scripts', 10, 2 );

/**
 * Native lazy-loading + async decoding for content images, with the first
 * in-viewport image left eager so the LCP is not delayed.
 */
function hombisilu_image_attrs( $attr, $attachment, $size ) {
    if ( ! isset( $attr['loading'] ) ) {
        $attr['loading'] = 'lazy';
    }
    if ( ! isset( $attr['decoding'] ) ) {
        $attr['decoding'] = 'async';
    }
    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'hombisilu_image_attrs', 10, 3 );

/**
 * Serve reasonable JPEG quality instead of WordPress' default 82 on the
 * large product shots, and generate WebP alongside where supported.
 */
add_filter( 'jpeg_quality', function () { return 78; } );
add_filter( 'big_image_size_threshold', function () { return 1800; } );

/* ───────────────────────────────────────────────────────────
   WOOCOMMERCE
   ─────────────────────────────────────────────────────────── */

// Force disable WooCommerce coming soon mode completely
add_filter( 'woocommerce_coming_soon_exclude', '__return_true' );
add_filter( 'woocommerce_is_store_notice_showing', '__return_false' );

// Ensure store is live
add_action( 'init', function () {
    if ( get_option( 'woocommerce_coming_soon' ) === 'yes' ) {
        update_option( 'woocommerce_coming_soon', 'no' );
        update_option( 'woocommerce_store_pages_only', 'no' );
    }
} );

// Force our custom shop template - bypass WooCommerce block overrides
add_filter( 'template_include', function ( $template ) {
    if ( is_shop() || is_product_category() || is_product_tag() ) {
        $custom = HOMBISILU_DIR . '/woocommerce/archive-product.php';
        if ( file_exists( $custom ) ) {
            return $custom;
        }
    }
    if ( is_product() ) {
        $custom = HOMBISILU_DIR . '/woocommerce/single-product.php';
        if ( file_exists( $custom ) ) {
            return $custom;
        }
    }
    return $template;
}, 99 );

add_action( 'pre_get_posts', function ( $q ) {
    if ( ! is_admin() && $q->is_main_query() && ( is_shop() || is_product_category() ) ) {
        $q->set( 'posts_per_page', 12 );
    }
} );
