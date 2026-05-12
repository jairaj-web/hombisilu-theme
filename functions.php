<?php
function hombisilu_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    register_nav_menus(['primary' => 'Primary Menu']);
}
add_action('after_setup_theme', 'hombisilu_setup');

function hombisilu_scripts() {
    wp_enqueue_style('hombisilu-style', get_stylesheet_uri(), [], '1.0');
}
add_action('wp_enqueue_scripts', 'hombisilu_scripts');

function hombisilu_widgets() {
    register_sidebar(['name' => 'Footer', 'id' => 'footer-1']);
}
add_action('widgets_init', 'hombisilu_widgets');

// Force disable WooCommerce coming soon mode completely
add_filter( 'woocommerce_coming_soon_exclude', '__return_true' );
add_filter( 'woocommerce_is_store_notice_showing', '__return_false' );

// Ensure store is live
add_action( 'init', function() {
    if ( get_option( 'woocommerce_coming_soon' ) === 'yes' ) {
        update_option( 'woocommerce_coming_soon', 'no' );
        update_option( 'woocommerce_store_pages_only', 'no' );
    }
});

// Force our custom shop template - bypass WooCommerce block overrides
add_filter( 'template_include', function( $template ) {
    if ( is_shop() || is_product_category() || is_product_tag() ) {
        $custom = get_stylesheet_directory() . '/woocommerce/archive-product.php';
        if ( file_exists( $custom ) ) {
            return $custom;
        }
    }
    if ( is_product() ) {
        $custom = get_stylesheet_directory() . '/woocommerce/single-product.php';
        if ( file_exists( $custom ) ) {
            return $custom;
        }
    }
    return $template;
}, 99 );



add_action("pre_get_posts", function($q) {
    if (!is_admin() && $q->is_main_query() && (is_shop() || is_product_category())) {
        $q->set("posts_per_page", 12);
    }
});
