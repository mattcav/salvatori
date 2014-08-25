<?php 
/*
Template name: Contatti
*/
get_header(); ?>
    <?php /* Start loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('entry') ?> id="post-<?php the_ID(); ?>">
            <header class="entry__header">
                <h1 class="entry__title"><?php the_title(); ?></h1>
            </header>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11890.855713928471!2d12.4761452!3d41.8344578!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13258ae1fbe33867%3A0xe2e42c8b07c5400e!2sViale+Europa%2C+121!5e0!3m2!1sit!2sit!4v1398161897317" width="800" height="600" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="entry__content entry__content--contacts">
                <?php the_content(); ?>
            </div>

           <!--  <a href="https://www.google.com/maps/place/Viale+Europa,+121/@41.8295723,12.4650903,15z/data=!4m2!3m1!1s0x13258ae1fbe33867:0xe2e42c8b07c5400e">
                <img src="<?php bloginfo('template_url'); ?>/images/mappa.jpg" alt="Viale Europa 121, Roma" class="entry__map">
            </a> -->

            <footer>
            </footer>
        </article>

    <?php endwhile; // End the loop ?>
<?php get_footer(); ?>