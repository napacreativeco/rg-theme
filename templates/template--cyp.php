<?php
/*
Template Name: Choose Your Path
*/
get_header(); ?>

<style>
    .cyp .header {
        width: 100%;
        height: 200px;
        background: #000;
    }
    /* Short */
    .cyp .paths.short {
        width: 100%;
        height: 100%;
        padding: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .cyp .paths.short .link-row {
        display: grid;
        grid-template-columns: 33.33% 33.33% 33.33%;
        grid-gap: 20px;
        align-items: stretch;
        width: 100%;
        max-width: 1200px;
        height: 100%;
        margin: 0 auto 0 auto;
        padding: 100px 10px;
    }
    .cyp .paths.short .item {
        display: flex;
        flex-direction: column;
        background: var(--white);
        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        height: 420px;
        position: relative;
        margin: 0 auto 0 auto;
        width: 100%;
        max-width: 400px;
    }
    /* Image */
    .paths.short .image {
        height: 80%;
        width: 100%;
    }
    /* Info */
    .paths.short .info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 20%;
        padding: 0px 40px;
    }

    /* =========== Long */
    .paths.long .link-row {
        width: 100%;
    }
    .paths.long .link-row .item {
        display: grid;
        grid-template-columns: 40% 60%;
        align-items: center;
        width: 100%;
        min-height: 600px;
    }
    .paths.long .links h2 {
        font-size: 0.8rem;
    }
    .paths.long .links a {
        font-size: 0.8rem;
        text-decoration: none;
        color: inherit;
    }
    
    /* Info */
    .paths.long .info {
        padding: 40px;
    }
    .paths.long em {
        font-weight: 900;
        text-transform: uppercase;
        font-size: 0.8rem;
        margin: 0 0 10px 0;
    }
    .paths.long .info h2 {
        font-size: 1.8rem;
        font-weight: normal;
        margin: 0 0 20px 0;
    }
    .paths.long .info mark {
        font-weight: normal;
    }
    .paths.long .info p {
        margin: 0 0 40px 0;
        font-size: 1rem;
        color: var(--black);
    }
    .paths.long .info a.button {
        color: inherit;
        text-decoration: none;
        border: 3px solid var(--black);
        padding: 10px 20px;
        cursor: pointer;
        font-size: 0.8rem;
    }
    .paths.long .woocommerce ul.products {
        margin: 0;
        padding: 0;
        display: grid;
        grid-template-columns: 50% 50%;
        align-items: stretch;
        list-style: none;
    }
    .paths.long .woocommerce ul.products img {
        object-fit: cover;
        width: 100%;
        height: 400px;
    }
    .paths.long .woocommerce li.product {
        position: relative;
    }
    .paths.long .woocommerce li.product a {
        text-decoration: none;
        color: inherit;
    }
    .paths.long h2.woocommerce-loop-category__title {
        font-size: 0.8rem;
    }
    .paths.long span.price {
        display: none;
    }
    .paths.long span.onsale {
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0;
    }
    .paths.long .woocommerce li.product a.button {
        display: none;
    }
    /* Culture */
    .paths.long .culture .links ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        grid-template-columns: 50% 50%;
        align-items: stretch;
    }
    
    .paths.long .culture li.post img {
        object-fit: cover;
        width: 100%;
        height: 400px;
    }
</style>

<div class="cyp">
    <div class="row">

        <!-- Header -->
        <div class="header">
            &nbsp;
        </div>

        <!-- Paths -->
        <div class="paths short black-background">
            <p style="color: var(--white); text-transform: uppercase;">Choose Your Path</p>
            <div class="link-row">

                <!-- Stickers -->
                <div class="item stickers">
                    <div class="image" style="background: url('<?php echo get_template_directory_uri() ."/assets/blk-texture--sm.jpg" ?>'); background-size: cover; background-position: center center;">&nbsp;</div>
                    <div class="info">
                        <p>Stickers / Seeds</p>
                    </div>
                </div>

                <!-- Apparel -->
                <div class="item apparel">
                    <div class="image" style="background: url('<?php echo get_template_directory_uri() ."/assets/blk-texture--sm.jpg" ?>'); background-size: cover; background-position: center center;">&nbsp;</div>
                    <div class="info">
                        <p>Apparel</p>
                    </div>
                </div>

                <!-- Culture -->
                <div class="item culture">
                    <div class="image" style="background: url('<?php echo get_template_directory_uri() ."/assets/blk-texture--sm.jpg" ?>'); background-size: cover; background-position: center center;">&nbsp;</div>
                    <div class="info">
                        <p>Culture</p>
                    </div>
                </div>

            </div>
        </div><!-- /short -->

        <!-- Paths: Longform -->
        <div class="paths long white-background">
            <div class="link-row">

                <!-- Stickers -->
                <div class="item stickers">
                    <div class="info">
                        <em>Exclusive</em>
                        <h2>Rebel Grown Stickers</h2>
                        <p>We are offering exclusive Rebel Grown stickers. Each sticker comes with a gift of a free pack of seeds.</p>
                        <a class="button" title="Stickers">Shop Stickers</a>
                    </div>
                    <div class="links">
                        <?php echo do_shortcode('[products category="stickers" limit="2" columns="2"]'); ?>
                    </div>
                </div>

                <!-- Apparel -->
                <div class="item apparel">
                    <div class="info">
                        <em>Lifestyle</em>
                        <h2>Apparel</h2>
                        <p>Rebel Grown apparel represents a day in the life of the cannabis lifestyle, whether you’re a daily smoker, farm worker, or trimmer. Our products are made custom with you in mind.</p>
                        <a class="button" title="Apparel">Shop Apparel</a>
                    </div>
                    <div class="links">
                        <?php echo do_shortcode('[product_categories limit="2" columns="2"]'); ?>
                    </div>
                </div>

                <!-- Culture -->
                <div class="item culture">
                    <div class="info">
                        <em>Cultivate</em>
                        <h2>Culture</h2>
                        <p>We are offering exclusive Rebel Grown stickers. Each sticker comes with a gift of a free pack of seeds.</p>
                        <a class="button" title="Culture">View Culture</a>
                    </div>
                    <div class="links">
                        <ul>
                            <?php 
                            $postslist = get_posts( array(
                                'posts_per_page' => 2,
                                'order'          => 'ASC',
                                'orderby'        => 'title'
                            ) );
                            
                            if ( $postslist ) {
                                foreach ( $postslist as $post ) :
                                    setup_postdata( $post );
                                    ?>
                                    <li class="post">
                                        <div class="image">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                        </div>
                                        <div>
                                            <a href="<?php echo the_permalink(); ?>">
                                                <h2><?php the_title(); ?></h2>
                                            </a>
                                        </div>
                                    </li>
                                <?php
                                endforeach; 
                                wp_reset_postdata();
                            }
                            ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div><!-- /long -->

    </div>
</div>

<?php get_footer(); ?>