<?php
get_header();
/* Start the Loop */ ?>
archive genetics:
<?php
while (have_posts()) : the_post(); ?>
    
    <a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_title(); ?>
    </a>

<?php    
endwhile; // End of the loop.
get_footer();
?>