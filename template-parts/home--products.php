<?php include( get_template_directory() . '/includes/css--product-tile.php' ); ?>

<div class="row">

    <ul class="products">
        <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => '', 'orderby' => 'rand' );
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
                        <div class="actions left">
                            <div class="cart-info">
                                <a class="button" href="<?php echo get_post_permalink(); ?>" title="<?php echo the_title(); ?>">
                                    <?php include( get_template_directory() . '/includes/info-circle.php' ); ?>
                                </a>
                            </div>
                        </div>

                        <div class="actions right">
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