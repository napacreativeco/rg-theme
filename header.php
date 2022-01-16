<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 */

?>
<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<style>

/* Variables */
:root {
    /* Colors */
    --black: #000000;
    --white: #ffffff;
    --grey: #888888;

    /* Border */
    --border-blk: 3px solid var(--black);
    --border-wht: 3px solid var(--white);

    /* Black BG */
    --lg-black: url('<?php echo get_template_directory_uri() ."/assets/blk-texture--lg.jpg" ?>');
    --md-black: url('<?php echo get_template_directory_uri() ."/assets/blk-texture--md.jpg" ?>');
    --sm-black: url('<?php echo get_template_directory_uri() ."/assets/blk-texture--sm.jpg" ?>');

    /* White BG */
    --lg-white: url('<?php echo get_template_directory_uri() ."/assets/wht-texture--lg.jpg" ?>');
    --md-white: url('<?php echo get_template_directory_uri() ."/assets/wht-texture--md.jpg" ?>');
    --sm-white: url('<?php echo get_template_directory_uri() ."/assets/wht-texture--sm.jpg" ?>');
}

/* Nav */
.nav__container {
    width: 100%;
    max-width: 100vw;
    display: flex;
    align-items: center;
}
.nav__row {
    display: grid;
    grid-template-columns: 1fr 2fr 1fr;
    padding: 10px 4px;
    align-items: center;
    width: 100%;
    max-width: 80%;
    margin: 0 auto 0 auto;
}
.nav__row ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: row;
}
.nav__row ul li {
    margin: 0 30px 0 0;
    padding: 0;
    font-size: 0.9rem;
}
.nav__row ul li:last-of-type { 
    margin: 0 0 0 0;
    padding: 0;
}
.nav__row a {
    display: block;
    text-decoration: none;
    white-space: nowrap;
}
.nav__row a:hover {
    text-decoration: underline;
}

/* Nav Left */
.nav__row .left {
    display: flex;
    justify-content: flex-start;
}
.nav__row .left svg { 
    width: 40px;
}
/* Nav Center */
.nav__row .center {
    display: flex;
    justify-content: center;
}
.nav__row .center .logo svg {
    width: 50px;
    fill: var(--black);
    stroke: none;
}
/* Nav Right */
.nav__row .right { 
    display: flex;
    align-items: center;
    justify-content: flex-end;
}
.nav__row .right svg { 
    width: 25px;
}
.nav__row .right .cart-icon a {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.nav__row .hamburger { margin: 0 0 0 20px; }
.nav__row .cart-icon { display: flex; align-items: center; }
.nav__row .cart-icon p { margin: 0 0 0 10px; }

/* Search */
.nav__container .search-bar { 
    display: none;
    position: relative;
}
.nav__row form {
    display: grid;
    grid-template-columns: 60% 40%;
    align-items: stretch;
}
.nav__row form#searchform input {
    border: var(--border-blk);
    padding: 10px 4px;
    width: 100%;
}
.nav__row form#searchform button {
    background: var(--black);
    color: var(--white);
    border: 0;
    padding: 10px 4px;
    text-transform: uppercase;
    width: 100%;
}
.nav__row .search-close { 
    /* display: none; */
    position: absolute;
    left: -20px;
    top: 40%;
    transform: translate(50%,-50%);
    cursor: pointer;
}

/* Overlay */
.nav-overlay .close {
    position: absolute;
    top: 0;
    left: 0;
    padding: 20px 0 0 20px;
    cursor: pointer;
}
.nav-overlay .close svg {
    width: 40px;
    stroke: var(--white) !important;
}

/* Backgrounds */
.black-background {
        background: var(--lg-black);
        background-size: cover;
}
.white-background {
    background: var(--lg-white);
    background-size: cover;
}

@media (max-width: 767.98px) {
    .black-background {
        background: var(--sm-black);
        background-size: cover;
    }
    .white-background {
        background: var(--sm-white);
        background-size: cover;
    }
}
@media (max-width: 991.98px) {
    .black-background {
        background: var(--md-black);
        background-size: cover;
    }
    .white-background {
        background: var(--md-white);
        background-size: cover;
    }
}
@media (max-width: 1199.98px) {
    .black-background {
        background: var(--lg-black);
        background-size: cover;
    }
    .white-background {
        background: var(--lg-white);
        background-size: cover;
    }
}
</style>

<body <?php body_class('public'); ?>>

<!-- PAGE CONTAINER -->
<div id="page" class="site">

    <!-- HEADER -->
    <nav class="nav__container">
        <div class="nav__row">

            <!-- Left -->
            <div class="left">
                <div class="search-container">
                    <?php include( get_template_directory() . '/includes/search-icon.php' ); ?>
                </div>
                <div class="search-bar">
                    <div class="search-close">
                        x
                    </div>
                    <?php get_search_form(); ?>
                </div>
            </div>

            <!-- Center -->
            <div class="center">
                <a class="logo" href="<?php echo home_url(); ?>">
                    <?php include( get_template_directory() . '/includes/leaf.php' ); ?>
                </a>
            </div>

            <!-- Right -->
            <div class="right">
                <div class="cart-icon">
                    <a href="<?php echo wc_get_cart_url(); ?>" title="Cart">
                        <?php include( get_template_directory() . '/includes/cart-icon.php' ); ?>
                        <?php $count = WC()->cart->cart_contents_count; ?>
                        <p><?php echo $count; ?></p>
                    </a>
                </div>
                <div class="hamburger">
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                </div>
            </div>

        </div><!-- /row -->
    </nav>

    <!-- Nav: Overlay -->
    <div class="nav-overlay">
        <div class="row">

            <!-- Close -->
            <div class="close">
                <?php include( get_template_directory() . '/includes/arrow-left.php' ); ?>
            </div>

            <!-- Menu -->
            <div class="menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'overlay_menu',
                        'menu_class'      => '',
                        'container_class' => '',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
                ?>
            </div>

            <!-- Accents -->
            <div class="accent accent-left">
                <span>Rebel Grown</span>
            </div>
            <div class="accent accent-right">
                <span>Quality Genetics</span>
            </div>
            
        </div>
    </div><!-- /nav-overlay -->