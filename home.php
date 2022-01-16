<?php
/**
 * Culture
 *
 */

get_header(); ?>

<style>
    /* Hero */
    .culture-page .hero {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .culture-page .hero .row {
        width: 100%;
        max-width: 1200px;
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 80px 20px;
    }
    .culture-page .hero .head {
        color: var(--white);
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        padding: 0 0 16px 0px;
    }
    .culture-page .hero .head h1,
    .culture-page .hero .head p {
        margin: 0;
    }
    .culture-page .hero .head p {
        padding-left: 20px;
    }
    /* Blocks */
    .culture-page .hero .blocks {
        width: 100%;
        max-width: calc(100% - 20px);
        height: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
        align-items: stretch;
        min-height: 500px;
    }
    .culture-page .hero .blocks .item {
        display: flex;
        flex-direction: column;
        background: var(--white);
        color: var(--black);
        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        position: relative;
        margin: 0;
        width: 100%;
        height: 100%;
    }
    .culture-page .blocks .info a {
        color: inherit;
        text-decoration: none;
    }
    .culture-page .blocks .info p {
        margin: 0 0 4px 0;
        color: var(--grey);
    }
    .culture-page .blocks .info h2 {
        margin: 0 0 4px 0;
    }
    /* Block Tall */
    .culture-page .item.tall {
        display: grid;
        grid-auto-flow: column;
        grid-template-columns: 8fr 1fr;
    }
     /* Block Tall: Image */
     .culture-page .item.tall .image {
        height: 80%;
        width: 100%;
    }
    /* Block Tall: Info */
    .culture-page .item.tall .info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 20%;
        padding: 0px 40px;
    }

    /* Block Short */
    .culture-page .blocks .double {
        height: 100%;
        display: grid;
        grid-template-columns: 1fr;
        align-items: stretch;
        grid-gap: 20px;
    }
    .culture-page .hero .blocks .item.short {
        height: 100%;
        display: grid;
        grid-template-columns: 50% 50%;
        align-items: stretch;
    }
    .culture-page .item.short .image {
        height: 200px;
        margin: 20px;
    }
    .culture-page .item.short .info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 0 40px 0 0;
    }
    .culture-page .item.short .info h2 {
        font-size: 0.9rem;
    }

    /* Loop */
    .blog-section {
        padding: 10px 40px;
    }
    ul.posts {
        list-style: none;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        align-items: stretch;
        grid-gap: 40px;
        margin: 0 auto 0 auto;
        padding: 40px 0px;
        width: 100%;
        max-width: 1200px;
    }
    ul.posts li.post {
        display: flex;
        flex-direction: column;
        background: var(--white);
        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        height: 420px;
        position: relative;
        margin: 0;
        width: 100%;
        max-width: 400px;
    }
    /* Loop: Image */
    ul.posts li .image {
        height: 80%;
        width: 100%;
    }
    /* Loop: Info */
    ul.posts li .info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 20%;
        padding: 10px 40px 0px 40px;
        text-align: center;
    }
    ul.posts li .info a {
        color: inherit;
        text-decoration: none;
    }
    ul.posts li .info p.title {
        margin: 0 0 4px 0;
        font-size: 0.9rem;
        font-weight: bold;
        color: var(--black);
    }
    ul.posts li .info p.date {
        margin: 0 0 4px 0;
        font-size: 0.8rem;
        color: var(--black);
    }

    /* MEDIA QUERIES */
    @media (max-width: 1199.98px) {
        
    }

    @media (max-width: 991.98px) {

    }

    @media (max-width: 767.98px) {

        .culture-page .hero .head {
            flex-direction: column;
            align-items: flex-start;
        }
        .culture-page .hero .head p {
            padding-left: 0;
        }
        /* Blocks */
        .culture-page .hero .blocks {
            display: grid;
            grid-template-columns: 1fr;
            align-items: stretch;
        }
        .culture-page .item.tall .info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            width: 100%;
            height: 20%;
            padding: 0px 40px 0px 0px;
        }
        .culture-page .item.tall .info h2 {
            font-size: 0.9rem;
        }   
        .culture-page .hero .blocks .item.short,
        .culture-page .hero .blocks .item.tall {
            display: flex;
            padding: 10px;
        }
        .culture-page .hero .blocks .item.short .image,
        .culture-page .hero .blocks .item.tall .image {
            height: 200px;
        }
        .culture-page .hero .blocks .item.short .info,
        .culture-page .hero .blocks .item.tall .info {
            height: 20%;
        }
        /* Posts */
        ul.posts {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr;
            align-items: stretch;
            margin: 0 auto 0 auto;
            padding: 40px 0px;
            width: 100%;
            max-width: 1200px;
        }
        ul.posts li.post {
            min-height: 300px;
        }
    }

    @media (max-width: 575.98px) {

    }
</style>


<!-- Blog Page -->
<div id="single-page-container" class="culture-page black-background">

    <!-- Hero -->
    <section class="hero">
        <div class="row">

            <!-- Header -->
            <div class="head">
                <h1>Culture</h1>
                <p>Short description for culture</p>
            </div>

            <!-- Blocks -->
            <div class="blocks">

                <!-- Tall -->
                <div class="item tall">
                    <?php
                    $custom = get_theme_mod('main-post--id', '63'); 
                    $post = get_post( $custom );
                    $category_detail = get_the_category( $custom );//$post->ID
                    ?>
                    <div class="image" style="background: url('<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>'); background-size: cover; background-position: center;">
                        &nbsp;
                    </div>
                    <div class="info">
                        <small>
                            <?php
                            foreach($category_detail as $cd){
                                echo $cd->cat_name;
                            }
                            ?>
                        </small>
                        <h2 class="title"><?php echo $post->post_title; ?></h2>
                        <small><?php echo date("d M Y", strtotime($post->post_date)); ?></small>
                    </div>
                </div>

                <!-- Short -->
                <div class="double">
                    <div class="item short">
                        <?php
                        $custom = get_theme_mod('subpost-one--id', '63'); 
                        $post = get_post( $custom );
                        $category_detail = get_the_category( $custom );//$post->ID
                        ?>
                        <div class="image" style="background: url('<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>'); background-size: cover; background-position: center;">
                            &nbsp;
                        </div>
                        <div class="info">
                            <div>
                                <h2 class="title"><?php echo $post->post_title ?></h2>
                            </div>
                            <div>
                                <small><?php echo $post->post_content ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="item short">
                        <?php
                        $custom = get_theme_mod('subpost-two--id', '66'); 
                        $post = get_post( $custom );
                        $category_detail = get_the_category( $custom );//$post->ID
                        ?>
                        <div class="image" style="background: url('<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>'); background-size: cover; background-position: center;">
                            &nbsp;
                        </div>
                        <div class="info">
                            <h2 class="title"><?php echo $post->post_title ?></h2>
                            <small><?php echo $post->post_date ?></small>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Blog -->
    <section class="blog-section white-background">

        <div class="head" style="width: 100%; text-align: center;">
            <em style="font-weight: bold; text-transform: uppercase;">All Posts</em>
        </div>

        <div class="row">

            <!-- Loop -->
            <ul class="posts">
                <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>
                        <li class="post">
                            <div class="image" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
                                &nbsp;
                            </div>
                            <div class="info">
                                <p class="title"><?php the_title(); ?></p>
                                <p class="date"><?php the_date(); ?></p>
                            </div>
                        </li>
                    <?php
                    endwhile; 
                endif; 
                ?>
            </ul>

        </div>
    </section>
</div>


<?php get_footer();