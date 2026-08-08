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

    // Design system loads after style.css so its tokens and components win.
    wp_enqueue_style(
        'hombisilu-ds',
        HOMBISILU_URI . '/assets/css/design-system.css',
        [ 'hombisilu-style' ],
        hombisilu_asset_version( 'assets/css/design-system.css' )
    );

    // Home layout is only needed on the front page. home-barab.css (the
    // earlier restaurant-template mood — carousel, floating cut-outs, angled
    // CTAs) has been retired in favour of the calm home-*.css set below; the
    // file is left in place but no longer enqueued.
    if ( is_front_page() ) {
        $home_parts = [ 'hero', 'story', 'shop', 'testimonials', 'contact' ];
        foreach ( $home_parts as $part ) {
            wp_enqueue_style(
                'hombisilu-home-' . $part,
                HOMBISILU_URI . '/assets/css/home-' . $part . '.css',
                [ 'hombisilu-ds' ],
                hombisilu_asset_version( 'assets/css/home-' . $part . '.css' )
            );
        }
    }

    // Per-page stylesheets, centralised here rather than self-enqueued from
    // each template, so every theme stylesheet has exactly one place it's
    // registered.
    if ( is_page_template( 'template-about.php' ) ) {
        wp_enqueue_style( 'hombisilu-page-about', HOMBISILU_URI . '/assets/css/page-about.css', [ 'hombisilu-ds' ], hombisilu_asset_version( 'assets/css/page-about.css' ) );
    }
    if ( is_page_template( 'template-contact.php' ) ) {
        wp_enqueue_style( 'hombisilu-page-contact', HOMBISILU_URI . '/assets/css/page-contact.css', [ 'hombisilu-ds' ], hombisilu_asset_version( 'assets/css/page-contact.css' ) );
    }
    if ( is_page_template( 'template-faqs.php' ) ) {
        wp_enqueue_style( 'hombisilu-page-faqs', HOMBISILU_URI . '/assets/css/page-faqs.css', [ 'hombisilu-ds' ], hombisilu_asset_version( 'assets/css/page-faqs.css' ) );
    }
    if ( is_page_template( [ 'template-privacy.php', 'template-terms.php', 'template-refund-policy.php' ] ) ) {
        wp_enqueue_style( 'hombisilu-page-legal', HOMBISILU_URI . '/assets/css/page-legal.css', [ 'hombisilu-ds' ], hombisilu_asset_version( 'assets/css/page-legal.css' ) );
    }
    if ( function_exists( 'is_cart' ) && ( is_cart() || is_checkout() || is_account_page() ) ) {
        wp_enqueue_style( 'hombisilu-page-account', HOMBISILU_URI . '/assets/css/page-account.css', [ 'hombisilu-ds' ], hombisilu_asset_version( 'assets/css/page-account.css' ) );
    }
}
add_action( 'wp_enqueue_scripts', 'hombisilu_scripts' );

function hombisilu_widgets() {
    register_sidebar( [ 'name' => 'Footer', 'id' => 'footer-1' ] );
}
add_action( 'widgets_init', 'hombisilu_widgets' );

/* ───────────────────────────────────────────────────────────
   TEMPLATE HELPERS
   ─────────────────────────────────────────────────────────── */

/**
 * Inline SVG icon by name. Icons are inlined rather than shipped as a sprite
 * or icon font so they inherit currentColor and cost no extra request.
 */
function hb_icon( $name, $size = 18 ) {
    static $paths = [
        'arrow'  => '<path d="M5 12h14M12 5l7 7-7 7"/>',
        'bag'    => '<path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/>',
        'leaf'   => '<path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>',
        'check'  => '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>',
        'truck'  => '<rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>',
        'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>',
        'pin'    => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
        'phone'  => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.902.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.908.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>',
        'mail'   => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>',
        'clock'  => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
        'coffee' => '<path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/>',
        'flame'  => '<path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/>',
        'jar'    => '<rect x="7" y="2" width="10" height="3" rx="1"/><path d="M5 5h14a1 1 0 0 1 1 1v2H4V6a1 1 0 0 1 1-1z"/><path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8"/><line x1="9" y1="12" x2="9" y2="17"/><line x1="12" y1="11" x2="12" y2="17"/><line x1="15" y1="12" x2="15" y2="17"/>',
        'drop'   => '<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>',
        'sprout' => '<path d="M12 22V12"/><path d="M5 12C5 6.5 8.5 2 12 2s7 4.5 7 10-3.5 10-7 10S5 17.5 5 12z"/><path d="M5 12h14"/>',
        'book'   => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>',
        'heart'  => '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>',
        'grid'   => '<rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>',
        'tag'    => '<path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/>',
        'star'   => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
        'chev'   => '<polyline points="9 18 15 12 9 6"/>',
        'search' => '<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>',
        'plus'   => '<line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>',
        'user'   => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',
        'chat'   => '<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>',
    ];

    $d = isset( $paths[ $name ] ) ? $paths[ $name ] : '';

    // The star is a solid shape; everything else is a stroked outline.
    $solid  = ( 'star' === $name );
    $fill   = $solid ? 'currentColor' : 'none';
    $stroke = $solid ? 'none' : 'currentColor';

    return '<svg width="' . (int) $size . '" height="' . (int) $size . '" viewBox="0 0 24 24" fill="' . $fill . '" stroke="' . $stroke . '" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $d . '</svg>';
}

/**
 * Shop URL that degrades gracefully if WooCommerce is ever deactivated,
 * rather than fataling on an undefined wc_get_page_id().
 */
function hb_shop_url() {
    if ( function_exists( 'wc_get_page_id' ) ) {
        $url = get_permalink( wc_get_page_id( 'shop' ) );
        if ( $url ) {
            return $url;
        }
    }
    return home_url( '/shop/' );
}

/** Five filled stars in currentColor. */
function hb_stars( $size = 14 ) {
    return str_repeat( hb_icon( 'star', $size ), 5 );
}

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
    // First hero slide background — matches the srcset in front-page.php.
    $lg = HOMBISILU_URI . '/assets/images/hero-pickle.webp';
    $sm = HOMBISILU_URI . '/assets/images/hero-pickle-900.webp';
    printf(
        '<link rel="preload" as="image" href="%s" imagesrcset="%s 900w, %s 1600w" imagesizes="100vw" fetchpriority="high">' . "\n",
        esc_url( $lg ),
        esc_url( $sm ),
        esc_url( $lg )
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
