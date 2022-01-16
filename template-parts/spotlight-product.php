<style>
    .spotlight-product {
        width: 100%;
        padding: 10px 40px;
    }
    .spotlight-product em {
        color: var(--white);
        text-transform: uppercase;
        margin: 16px 0px;
    }
    .spotlight-product .row {
        background: var(--white);
        max-width: 900px;
        margin: 80px auto 110px auto;
        padding: 20px;
    }
    .spotlight-product .product {
        display: grid;
        grid-template-columns: 50% 50%;
        align-items: center;
        padding: 10px 40px;
    }
    .spotlight-product .image {
        width: 100%;
        height: 400px;
    }
    .spotlight-product .add_to_cart_button {
        position: relative;
        display: inline-block;
    }
    .spotlight-product .action {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .spotlight-product .action a {

    }
    .spotlight-product .add_to_cart_button svg {
        width: 20px;
        fill: var(--black);
        margin-right: 10px;
    }
</style>

<section class="spotlight-product black-background">
    <div style="width: 100%; display: flex; justify-content: center;">
        <em>Spotlight</em>
    </div>
    <div class="row">
            <?php
            $args = array( 
                'post_type' => 'product',
                'posts_per_page' => 1,
                'product_cat' => 'spotlight',
                'orderby' => 'rand'
            );
            $loop = new WP_Query( $args );


            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
                $featured_img_url = get_the_post_thumbnail_url($loop->post->ID,'full');
                ?>
                    <div class="product">  

                        <div class="image" style="background: url('<?php echo $featured_img_url ?>'); background-size: contain; background-repeat: no-repeat; background-position: center;">
                            <div class="sale">
                                <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                            </div>
                        </div>

                        <!-- Title and Price -->
                        <div class="info">
                            <div>
                                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                <p><?php the_excerpt(); ?></p>
                                <p><?php echo $product->get_price_html(); ?></p>

                                <div class="action">
                                    <?php
                                    /**
                                     * Hook: woocommerce_after_shop_loop_item.
                                     *
                                     * @hooked woocommerce_template_loop_product_link_close - 5
                                     * @hooked woocommerce_template_loop_add_to_cart - 10
                                     */
                                    do_action( 'woocommerce_after_shop_loop_item' );
                                    ?>
                                    <p>Add to cart</p>
                                </div>
                            </div>
                        </div>

                    </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>  

    </div>
</section>