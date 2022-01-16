<?php
/* Template for Single Genetic page */
get_header();?>

<style>
    .single-genetic .hero {
        background: var(--black);
        color: var(--white);
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        min-height: 100vh;
        text-transform: uppercase;
        position: relative;
    }
    .single-genetic .hero h1 {
        margin: 0;
    }
    .single-genetic .hero p.type {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translate(-50%);
    }

    /* Content */
    .single-genetic .content .row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: stretch;
        min-height: 100vh;
    }
    .single-genetic .content .row ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    /* Disclaimer */
    .single-genetic .disclaimer {
        color: var(--white);
        padding: 80px 20px;
        text-align: center;
    }
    .single-genetic .disclaimer p {
        max-width: 600px;
        margin: 0 auto 0 auto;
    }

    /* Pagination */
    .single-genetic .pagination {
        padding: 80px 20px;
    }
    .single-genetic .pagination {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }
    .single-genetic .pagination .archive-link a {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .single-genetic .pagination svg {
        width: 60px;
        stroke: var(--black) !important;
    }
    .single-genetic .pagination p {
        margin: 20px 0 0 0;
    }
    .single-genetic .pagination a {
        color: var(--black);
        text-decoration: none;
        margin: 10px 0 0 0;
    }
    .single-genetic .pagination div {
        width: 33.33%;
    }
    .single-genetic .pagination .previous {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-end;
    }
    .single-genetic .pagination .archive-link {
        display: flex;
        justify-content: center;
        align-items: flex-end;
    }
    .single-genetic .pagination .next {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: flex-end;
    }
</style>

<div class="single-genetic">
<?php
while (have_posts()) : the_post(); ?>
<?php $featured_img_url = get_the_post_thumbnail_url(); ?>

    <!-- Hero -->
    <section class="hero">
        <em>Rebel Grown</em>
        <h1><?php the_title(); ?></h1>
        <p class="type">
        <?php echo get_post_meta( get_the_ID($post->ID), 'lineage', true); ?>
        </p>
    </section>

    <section class="content">
        <div class="row">
            <div class="image" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
                &nbsp;
            </div>
            <div class="info">
                <ul>
                    <li><?php the_title(); ?>
                    <li><?php echo get_post_meta( get_the_ID(), 'lineage', true); ?></li>
                    <li><?php echo get_post_meta( get_the_ID(), 'flowering_time', true); ?></li>
                </ul>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </section>

    <section class="disclaimer black-background">
        <p>Seeds from our personal collection are for sourvinir and novelty purposes only and contain less than .3% THC</p>
    </section>


<?php    
endwhile; // End of the loop.

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}
?>
    <section class="pagination white-background">

        <div class="previous">
            <?php
            $prev_post = get_previous_post();

            if ( ! empty( $prev_post ) ) { ?>
                <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
                    <?php include( get_template_directory() . '/includes/arrow-left.php' ); ?>
                    <p><?php echo apply_filters( 'the_title', $prev_post->post_title ); ?></p>
                </a><?php
            } ?>
        </div>

        <div class="archive-link">
            <a href="<?php echo home_url() .'/shop/category/stickers/' ?>" title="Grow Your Own">
                <?php include( get_template_directory() . '/includes/plant.php' ); ?>
                <p style="display: block">Grow Your Own</p>
            </a>
        </div>

        <div class="next">
            <?php
            $next_post = get_next_post();

            if ( ! empty( $next_post ) ) { ?>
                <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                    <?php include( get_template_directory() . '/includes/right-arrow.php' ); ?>
                    <p><?php echo apply_filters( 'the_title', $next_post->post_title ); ?></p>
                </a><?php
            } ?>
        </div>

    </section>


</div>

<?php get_footer(); ?>