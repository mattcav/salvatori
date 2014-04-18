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
            <div class="entry__content entry__content--contacts">
                <?php the_content(); ?>
            </div>
            <a href="https://www.google.com/maps/place/Viale+Europa,+121/@41.8295723,12.4650903,15z/data=!4m2!3m1!1s0x13258ae1fbe33867:0xe2e42c8b07c5400e">
                <img src="<?php bloginfo('template_url'); ?>/images/mappa.jpg" alt="Viale Europa 121, Roma" class="entry__map">
            </a>
            <footer>
            </footer>
        </article>

    <?php endwhile; // End the loop ?>
<?php get_footer('contatti'); ?>