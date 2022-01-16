<?php
/*
Template Name: Home
*/
get_header(); ?>

<style>
    /* Hero */
    .homepage .hero {
        background: url('<?php echo get_stylesheet_directory_uri() ."/assets/placeholders/hero--lg.jpg" ?>');
        background-size: cover;
        height: 100vh;
    }
    .homepage .row { display: flex; justify-content: center; }
    .homepage .hero ul {
        list-style: none;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        margin: 0 auto 0 auto;
        padding: 10px;
    }
    .homepage .hero li { margin: 0 14px 0 0; }
    .homepage .hero li:last-of-type { margin: 0; }
    .homepage .hero li a { text-decoration: none; color: var(--white); text-transform: uppercase; }

    /* Choose Your Path */
    .cyp .header {
        display: flex;
        justify-content: center;
    }
    .cyp .links {
        padding: 80px 10px;
    }
    .cyp .links ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        grid-template-columns: 25% 25% 25% 25%;
        align-items: flex-end;
        padding: 60px 0px;
    }
    .cyp .links li {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        object-fit: contain;
        text-transform: uppercase;
    }
    .cyp .links svg {
        width: 50px;
        height: 50px;
    }

    /* Intro */
    .intro {
        color: var(--white);
        text-align: center;
        padding-top: 4px;
    }
    .intro .container {
        position: relative;
    }
    .intro .tape-1 {
        position: absolute; 
        width: 40px;
        height: 300px;
        left: 0;
        background: #737142;
        top: 50%;
        transform: translateY(-50%);
        border-top-right-radius: 14px;
        border-bottom-right-radius: 14px;
    }
    .intro .tape-2 {
        position: absolute; 
        width: 40px;
        height: 300px;
        right: 0;
        background: #737142;
        top: 50%;
        transform: translateY(-50%);
        border-top-left-radius: 14px;
        border-bottom-left-radius: 14px;
    }
    .intro .row {
        display: grid;
        grid-template-columns: 50% 50%;
        align-items: center;
        max-width: 900px;
        margin: 0 auto 0 auto;
        padding: 60px 10px;
    }
    .intro .row.one {
        
    }
    .intro .row.two {
        
    }
    .intro .row.one img {
        max-width: 500px;
        position: absolute;
        left: -25px;
    }
    .intro .row.two img {
        max-width: 500px;
        position: absolute;
        right: -25px;
    }
    .intro .row .cell {
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        min-height: 500px;
    }
    /* One */
    .intro .row.one .left {
        z-index: 3;
        text-align: right;
    }
    .intro .row.one .right {

    }
    /* Two */
    .intro .row.two .left {

    }
    .intro .row.two .right {
        z-index: 3;
        text-align: left;
    }

    /* Stickers */
    .stickers {
        text-align: center;
        padding: 10px 40px;
    }
    .stickers .row {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 600px;
        min-height: 600px;
        margin: 0 auto 0 auto;
    }
    .stickers .table {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }
    .stickers h2 {
        text-transform: uppercase;
    }
    .stickers a.button {
        background: var(--black);
        color: var(--white);
        padding: 10px 20px;
        text-transform: uppercase;
    }

    /* Products */
    .home-products--container {
        padding: 10px 40px;
    }
    .home-products--container .row {
        padding: 10px;
    }
    .home-products--container p {
        color: #fff;
        text-align: center;
        width: 100%;
        height: 100%;
        text-transform: uppercase;
    }
    .home-products--container a.button {
        color: var(--black);
        text-transform: uppercase;
        text-decoration: none;
    }
</style>

<div class="homepage">
    <!-- Hero -->
    <div class="hero">
        <div class="row">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'hero_menu',
                    'menu_class'      => '',
                    'container_class' => '',
                    'items_wrap'      => '<ul>%3$s</ul>',
                    'fallback_cb'     => false,
                )
            );
            ?>
        </div>
    </div>

    <!-- Choose Your Path -->
    <div class="cyp white-background">
        <div class="header">
            <p>Choose Your Path</p>
        </div>
        <div class="links">
            <ul>
                <li>
                    <?php include( get_template_directory() . '/includes/stickers.php' ); ?>
                    <p>Stickers / Seeds</p>
                </li>
                <li>
                    <?php include( get_template_directory() . '/includes/shirt.php' ); ?>
                    <p>Apparel</p>
                </li>
                <li>

                    <p>Culture</p>
                </li>
                <li>
                    <?php include( get_template_directory() . '/includes/right-arrow.php' ); ?>
                    <p>Everything</p>
                </li>
            </ul>
        </div>
    </div>

    <!-- Intro -->
    <section class="intro black-background">

        <p>Rebel Grown Genetics</p>

        <div class="container">

            <div class="tape-1">
                &nbsp;
            </div>

            <!-- One -->
            <div class="row one">

                <div class="cell left">
                    <h2>Award Winning Genetics</h2>
                    <p>Our seeds are born from the elements — natural, pure, and full of character. Grow them with love.</p>
                </div>

                <div class="cell right">
                    <img src="http://localhost/rebel-grown/wp-content/uploads/2022/01/rebel-sour.jpg" alt="Rebel Grown" />
                </div>

            </div>
        </div>

        <div class="container">
            <div class="tape-2">
                &nbsp;
            </div>

            <!-- Two -->
            <div class="row two">

                <div class="cell left">
                    <img src="http://localhost/rebel-grown/wp-content/uploads/2022/01/rebel-sour.jpg" alt="Rebel Grown" />
                </div>

                <div class="cell right">
                    <h2>Quality Apparel for All Settings</h2>
                    <p>Each sticker comes with a Free Seed Pack of your choice.</p>
                </div>
            </div>
        </div>

    </section>

    <section class="stickers white-background">
        <p>EXCLUSIVE OFFER</p>
        <div class="row">
            <h2>Try the Stickers</h2>
            <p>We are offering exclusive Rebel Grown stickers. Each sticker comes with a gift of a free pack of seeds.</p>
            <a class="button" title="Shop now" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ) .'/category/stickers/'; ?>">Shop now</a>
        </div>
        <div class="table">
            <div style="text-align: left">
                <p>Get Stickers</p>
            </div>
            <div>
                <p>Pick Your Strain</p>
            </div>
            <div style="text-align: right">
                <p>Get Seeds</p>
            </div>
        </div>
    </section>

    <section class="home-products--container black-background">
        <div>
            <p>Recent Products</p>
        </div>

        <?php get_template_part('template-parts/home--products'); ?>

        <div style="display: flex; justify-content: center; padding-bottom: 16px;">
            <a class="button" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ) ?>" title="Shop All">
                All Products
            </a>
        </div>
    </section>

    <!-- Newsletter -->
    <?php get_template_part('template-parts/newsletter'); ?>
</div>

<?php get_footer(); ?>