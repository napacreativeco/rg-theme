<?php
/*
Template Name: About us
*/
get_header(); ?>

<style>
    .about {
        width: 100%;
    }
    .about .hero {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        justify-content: center;
        position: relative;
        height: 100vh;
    }
    .about .hero .text {
        position: absolute;
        width: 50%;
        max-width: 400px;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background: var(--black);
        margin: 0 auto 0 auto;
        color: var(--white);
        display: flex;
        align-items: stretch;
        justify-content: center;
        padding: 40px;
        text-align: center;
    }
    .about .hero .image {
        height: 100%;
    }
    /* Bio */
    .about .bio {
        display: grid;
        grid-template-columns: 50% 50%;
        padding: 80px 40px;
    }
    .about .bio .text {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px 40px;
        text-align: center;
    }
    .about .bio .image img {
        width: 100%;
    }
    /* Gallery */
    .gallery-container {
        text-align: center;
        color: var(--white);
        padding: 40px;
    }
    .gallery-container p {
        max-width: 800px;
        margin: 30px auto 80px auto;
    }
    .gallery-container .gallery {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .gallery-container .gallery-item {
        margin-bottom: 100px;
        float: none;
        margin-top: 10px;
        text-align: center;
        width: 50vw;
    }
    .gallery-container .gallery img {
        border: 0px !important;
        width: 100%;
        height: auto;
    }
</style>

<div class="about">
    <section class="hero">
        <div class="image" style="background: url('http://localhost/rebel-grown/wp-content/uploads/2022/01/silhouette-sm.jpg');">&nbsp;</div>
        <div class="image" style="background: url('http://localhost/rebel-grown/wp-content/uploads/2022/01/plant-leafs-sm.jpg');">&nbsp;</div>

        <div class="text">
            <p>Carrying on the traditions of growers past, we strive to improve lives and be a positive influence to the universe by helping to cultivate and share some of the best cannabis and genetics on the planet.</p>
        </div>
    </section>

    <section class="bio white-background">
        <div class="text">
            <h2><em>Rebel Grown is an authentic multi-faceted genetics and lifestyle cannabis brand.</em></h2>
            <p>It was one of the first emerging brands from the famed Emerald Triangle region of Northern California (est 2015, originally Ganja Rebel Seeds est 2011).</p>
        </div>

        <div class="image">
            <img src="http://localhost/rebel-grown/wp-content/uploads/2022/01/farm-dudes-sm.jpg" alt="Rebel Grown" />
        </div>
    </section>

    <section class="gallery-container black-background">
        <p>Based in Southern Humboldt County, in the legendary Palo Verde Appellation. Palo Verde is one of the geographical and cultural places of origin of California cannabis, as well as one of the best suited micro climates for producing true connoisseur quality cannabis in North America.</p>
        <div>
            <?php /* echo do_shortcode('[gallery ids="75, 73, 47" size="large"]'); */ ?>
            <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                    the_content();
                endwhile; 
            endif; 
            ?>
        </div>
    </section>
</div>



<?php get_footer(); ?>