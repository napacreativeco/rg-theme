<?php

if ( ! function_exists( 'rebelgrown_setup' ) ) :


function rebelgrown_setup() {

        // CSS
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        // JS
        wp_enqueue_script('custom', get_stylesheet_directory_uri().'/js/scripts.js', array('jquery'), false, true);

        // LANGUAGE SUPPORT
        load_theme_textdomain( 'rebelgrown', get_template_directory() . '/languages' );

        // NAVIGATION
        register_nav_menus( array(
            'footer_one'    => __( 'Footer 1', 'rebelgrown'),
            'footer_two'    => __( 'Footer 2', 'rebelgrown'),
            'footer_three'    => __( 'Footer 3', 'rebelgrown'),
            'hero_menu'    => __( 'Hero Menu', 'rebelgrown'),
            'overlay_menu'    => __( 'Overlay Menu', 'rebelgrown'),
        ) );
    
        // FEATURED IMAGE
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'woocommerce' );

        // Register our sidebars and widgetized areas.
        register_sidebar( array(
            'name'          => 'Shop Sidebar',
            'id'            => 'shop_sidebar',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="rounded">',
            'after_title'   => '</h2>',
        ) );

        // Disable WooCommerce CSS
        add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}

endif;

add_action( 'after_setup_theme', 'rebelgrown_setup' );

/* Customizer Imports */
function rebelgrown_customize_register( $wp_customize ) {

    /* Example Customizer */
    include get_template_directory() . '/customizer/example-customizer.php';

    /* Dual Square Links */
    include get_template_directory() . '/customizer/dual-square-customizer.php';
}
add_action( 'customize_register', 'rebelgrown_customize_register' );


/* Trim zeros in price decimals */
add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

/* Remove Sidebar on Single Products */
add_action( 'wp', 'remove_sidebar_product_pages' );
 
function remove_sidebar_product_pages() {
    if ( is_product() ) {
        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
    }
}

// remove_action('woocommerce_output_content_wrapper', 'woocommerce_output_content_wrapper', 30, 0);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10, 0 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs');

/**
 * This function modifies the main WordPress query to include an array of 
 * post types instead of the default 'post' post type.
 *
 * @param object $query The main WordPress query.
 */
function tg_include_custom_post_types_in_search_results( $query ) {
    if ( $query->is_main_query() && $query->is_search() && ! is_admin() ) {
        $query->set( 'post_type', array( 'post', 'movies', 'products', 'portfolio' ) );
    }
}
add_action( 'pre_get_posts', 'tg_include_custom_post_types_in_search_results' );

