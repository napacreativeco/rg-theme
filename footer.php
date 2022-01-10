<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 * */
?>

<?php wp_footer(); ?>

<style>
    footer {
        background: var(--black);
        color: var(--white);
    }
    footer .row {
        display: grid;
        grid-template-columns: 25% 25% 25% 25%;
        width: 100%;
        padding: 40px;
    }
    footer ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    footer svg {
        fill: var(--white);
    }
    footer .logo {
        margin-bottom: 10px;
    }
    footer .logo svg {
        width: 100px;
        fill: var(--white) !important;
    }
    footer .social-icons {
        margin-bottom: 10px;
    }
    footer .social-icons ul {
        display: flex;
        flex-direction: row;
    }
    footer a {
        color: var(--white);
        text-decoration: none;
    }

    /* MEDIA QUERIES */

    @media (max-width: 1199.98px) {
        
    }
    @media (max-width: 991.98px) {

    }
    @media (max-width: 767.98px) {
        /* Footer */
        footer .row {
            grid-template-columns: 60% 40%;
            align-items: center;
        }
    }
    @media (max-width: 575.98px) {
        footer .row { padding: 40px 20px 40px 40px; }
    }


</style>



<footer>
    <div class="row">

        <div class="cell">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <?php include( get_template_directory() . '/includes/text-logo.php' ); ?>
                </a>
            </div>
            </li>
            <div class="social-icons">
                <?php get_template_part('template-parts/social-icons'); ?>
            </div>
        </div>

        <div class="cell">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'footer_one',
                        'menu_class'      => '',
                        'container_class' => 'footer__nav__left',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
            ?>
        </div>
        <div class="cell">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'footer_two',
                        'menu_class'      => '',
                        'container_class' => 'footer__nav__left',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
            ?>
        </div>

        <div class="cell">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'footer_three',
                        'menu_class'      => '',
                        'container_class' => 'footer__nav__left',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
            ?>
        </div>

    </div>
</footer>

</div><!-- #page -->

</body>
</html>