<?php get_header(); ?>

<style>
    .search-results .image {
        height: 100px;
    }
    .search-results ul {
        list-style: none;
        display: grid;
        grid-template-columns: 50%% 50%;
    }
</style>

<div class="search-results">

    <?php
    $s = get_search_query();
    $args = array( 's' => $s ); ?>

    <?php
    // The Query
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) { ?>

        <div class="header">
            <h2>Search Results for: "<?php echo $s; ?>"</h2>
        </div>

        <ul>
            <?php 
            while ( $the_query->have_posts() ) {

                $the_query->the_post();
                ?>
                    <li>
                        <!-- Image -->
                        <div class="image" style="background: url('<?php  echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center center;">
                            &nbsp;
                        </div>

                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>
            <?php
            } ?>
        </ul>

    <?php    
    } else { ?>

        <h2 style='font-weight:bold;color'>Nothing Found</h2>

        <div class="alert alert-info">
            <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>

    <?php } ?>

</div>

<?php get_footer(); ?>