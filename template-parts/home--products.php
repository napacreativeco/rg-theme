<style>
    ul.home-products {
        list-style: none;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        align-items: stretch;
        grid-gap: 10px;
        margin: 0 auto 0 auto;
        padding: 0;
        width: 100%;
        max-width: 1200px;
    }
    .home-products li.product {
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
    ul.home-products li .image {
        height: 80%;
        width: 100%;
    }
    /* Info */
    ul.home-products li .info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 20%;
        padding: 0px 40px;
    }
    ul.home-products li .info a {
        color: inherit;
        text-decoration: none;
    }
    ul.home-products li .info p {
        margin: 0 0 4px 0;
        font-size: 1.2rem;
        color: var(--black);
    }
    .home-products .actions {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 0 20px 0px 20px;
    }
    .home-products .actions svg {
        width: 25px;
    }
    .home-products .actions .cart-adder {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    .home-products .actions a[title="View cart"] {
        position: absolute;
        top: -20px;
        text-decoration: none;
        color: inherit;
        font-size: 0.8rem;
    }
    
    /* MEDIA QUERIES */
    @media (max-width: 1199.98px) {
        
    }

    @media (max-width: 991.98px) {
        /* Loop */
        ul.home-products {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 767.98px) {
        /* Loop */
        ul.home-products {
            grid-template-columns: 1fr;
        }
        ul.home-products li {
            width: 100%;
        }
    }

    @media (max-width: 575.98px) {

    }
</style>

<div class="row">

    <ul class="home-products">
        <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => 8, 'product_cat' => '', 'orderby' => 'rand' );
            $loop = new WP_Query( $args );


            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
            $featured_img_url = get_the_post_thumbnail_url($loop->post->ID,'full');
            ?>
                    <li class="product">  

                        <div class="image" style="background: url('<?php echo $featured_img_url ?>'); background-size: cover;">
                            <div class="sale">
                                <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                            </div>
                        </div>

                        <!-- Title and Price -->
                        <div class="info">
                            <div>
                                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                                    <p><?php the_title(); ?></p>
                                </a>
                            </div>
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
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </ul><!--/.products-->
</div>