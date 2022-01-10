<?php
/**
 * The main template file
 *
 */

get_header(); ?>


<!-- Single Page -->
<div id="single-page-container">
    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
            the_content();
        endwhile; 
    endif; 
    ?>
</div>


<?php get_footer();