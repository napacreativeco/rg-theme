<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<style>
    .category-archive { min-height: 100vh; }
    /* Header */
    .category-archive .header {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 10px;
    }
    .category-archive .header .title {
        text-align: center;
        text-transform: uppercase;
    }
    .category-archive .header p.subhead {
        margin: 0;
        font-weight: 900;
        font-style: italic;
        text-transform: uppercase;
        font-size: 0.8rem;
    }
    .category-archive .header h1 {
        margin: 0;
    }
    /* Sorting */
    .category-archive .header .sorting {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 10px;
        align-items: stretch;
        width: 100%;
        max-width: 1200px;
        padding: 20px 0px;
        margin: 0 auto 0 auto;
    }
    .category-archive .header .sorting select {
        margin: 0;
    }

    .category-archive .header .searcher form {
        display: grid;
        grid-template-columns: 80% 20%;
    }
    .category-archive .header .searcher input[type="search"] {
        border-right: 0;
    }
    .category-archive .header .searcher button {
        border-right: 0;
        background: var(--black);
        color: var(--white);
    }
    .category-archive .header .sorting select {
        border: 3px solid var(--black);
        height: 100%;
    }
    .category-archive .header .sorting input,
    .category-archive .header .sorting button {
        border: 3px solid var(--black);
        padding: 10px;
        text-transform: uppercase;
    }

    /* Sort By */
    .category-archive .header .sorter {
        display: none;
        justify-content: center;      
    }

    /* Loop */
    .category-archive .product-loop {
        padding: 0px 20px;
    }
    .category-archive ul.products {
        list-style: none;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        align-items: stretch;
        grid-gap: 10px;
        margin: 0 auto 0 auto;
        padding: 0 0 100px 0;
        width: 100%;
        max-width: 1200px;
    }
    .category-archive ul.products li {
        display: flex;
        flex-direction: column;
        background: var(--white);
        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        height: 420px;
        position: relative;
        margin: 0 auto 40px auto;
        width: 100%;
        max-width: 400px;
    }
    /* Image */
    .category-archive ul.products li .image {
        height: 80%;
        width: 100%;
    }
    /* Info */
    .category-archive ul.products li .info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 20%;
        padding: 0px 40px;
        margin: 0px 0px 40px 0px;
    }
    .category-archive ul.products li .info a {
        color: inherit;
        text-decoration: none;
    }
    .category-archive ul.products li .info p {
        margin: 0 0 4px 0;
        font-size: 1.2rem;
    }
    /* Actions */
    .category-archive .actions {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 0 20px 0px 20px;
    }
    .category-archive .actions svg {
        width: 25px;
    }
    .category-archive .actions .cart-adder {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    .category-archive .actions a[title="View cart"] {
        position: absolute;
        top: -20px;
        text-decoration: none;
        color: inherit;
        font-size: 0.8rem;
    }

    /* 
    =================================
            MEDIA QUERIES
    =================================
     */

    @media (max-width: 1199.98px) {
        
    }

    @media (max-width: 991.98px) {
        /* Shop Loop */
        .category-archive ul.products {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 767.98px) {
        /* Nav */
        nav, .nav__container { display: none; }
        .mobile-nav { display: flex; }
        /* Shop Loop */
        .category-archive ul.products {
            grid-template-columns: 1fr;
        }
        .category-archive .products li {
            width: 100%;
        }
        /* Sorting */
        .category-archive .header .sorting {
            display: grid;
            grid-template-columns: 100%;
            align-items: center;
            width: 100%;
            max-width: 400px;
            padding: 20px 0px;
            margin: 0 auto 0 auto;
        }
        .category-archive .header .sorting form {
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .category-archive .header .sorter {
            margin-bottom: 10px;
        }
        .category-archive .searcher label {
            display: none;
        }
        .category-archive .searcher input[type="search"] {
            width: 80%;
        }
        .category-archive .searcher button[type="submit"] {
            width: 20%;
        }
        .category-archive select.orderby {
            width: 100%;
        }
    }

    @media (max-width: 575.98px) {
        .category-archive .searcher input[type="search"] {
            width: 60%;
        }
        .category-archive .searcher button[type="submit"] {
            width: 40%;
        }
    }
</style>

<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' ); ?>

<div class="category-archive white-background">

    <div class="header">
        
        <div class="notices">
            <?php woocommerce_output_all_notices(); ?>
        </div>

        <div class="title">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <p class="subhead">Category</p>
                <h1 class="woocommerce-products-header__title page-title">
                    <?php woocommerce_page_title(); ?>
                </h1>
            <?php endif; ?>
        </div>

        <div class="description">
            <?php
            /**
             * Hook: woocommerce_archive_description.
             *
             * @hooked woocommerce_taxonomy_archive_description - 10
             * @hooked woocommerce_product_archive_description - 10
             */
            do_action( 'woocommerce_archive_description' );
            ?>
        </div>

        <!-- Sorting -->
        <div class="sorting">

            <?php
            $args = array( 'type' => 'product', 'taxonomy' => 'product_cat' ); 
            $categories = get_categories( $args );
            ?>
            <select id="dynamic_select">
                <?php foreach ($categories as $cat) { ?>
                    <option value="<?php echo get_term_link($cat->slug, 'product_cat') ?>">
                        <i class="fa fa-chevron-right"></i><?php echo $cat->name; ?>
                    </option>
                <?php } ?>
            </select>

            <!-- Sorting -->
            <div class="sorter">
                <?php woocommerce_catalog_ordering(); ?>
            </div>

            <!-- Searching -->
            <div class="searcher">
                <?php get_product_search_form(); ?>
            </div>
        </div>

    </div><!-- /header -->

    <!-- PRODUCT LOOP -->
    <div class="product-loop">

        <?php 
        // Check if there are any posts to display
        if ( have_posts() ) : ?>

            <?php
            /**
             * Hook: woocommerce_before_shop_loop
             * @hooked woocommerce_output_all_notices - 10
             * @hooked woocommerce_result_count - 20
             * @hooked woocommerce_catalog_ordering - 30
             */
            do_action( 'woocommerce_before_shop_loop' ); ?>

            <?php woocommerce_product_loop_start(); ?>

            <?php
            // The Loop
            while ( have_posts() ) : the_post(); ?>

                <?php
                /* Hook: woocommerce_shop_loop. */
                do_action( 'woocommerce_shop_loop' ); ?>

                <!-- Item -->
                <li class="item">

                    <!-- Image -->
                    <div class="image" style="background: url('<?php  echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center center;">
                        &nbsp;
                    </div>

                    <div class="info">
                        <!-- Title -->
                        <div class="title">
                            <a href="<?php echo get_post_permalink(); ?>" title="<?php echo the_title(); ?>">
                                <p><?php the_title(); ?></p>
                            </a>
                        </div>

                        <!-- Price -->
                        <div class="price">
                            <?php echo $product->get_price_html(); ?>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="actions">
                        <div class="">
                            <a href="<?php echo get_post_permalink(); ?>" title="<?php echo the_title(); ?>">
                                <?php include( get_template_directory() . '/includes/info-circle.php' ); ?>
                            </a>
                        </div>
                        <div class="cart-adder">
                            <?php
                            /**
                             * Hook: woocommerce_after_shop_loop_item.
                             *
                             * @hooked woocommerce_template_loop_product_link_close - 5
                             * @hooked woocommerce_template_loop_add_to_cart - 10
                             */
                            do_action( 'woocommerce_after_shop_loop_item' );
                            ?>
                        </div>
                    </div>

                </li>
            
            <?php endwhile; 

            woocommerce_product_loop_end();
        
            /**
             * Hook: woocommerce_after_shop_loop
            * @hooked woocommerce_pagination - 10
            */
            do_action( 'woocommerce_after_shop_loop' );

        else: ?>

            <p>Sorry, no posts matched your criteria.</p>

        <?php endif; ?> 
    </div> <!-- /product-loop --> 
 
</div>

<?php get_footer( 'shop' ); ?>