<?php 
/*
Template name: Gallery
*/
get_header(); ?>
    <?php /* Start loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('entry') ?> id="post-<?php the_ID(); ?>">
            <header class="entry__header">
                <h1 class="entry__title"><?php the_title(); ?></h1>
            </header>
            <div class="gallery__content">
                <?php the_content(); ?>
            </div>
            <footer>
            </footer>
        </article>

    <?php endwhile; // End the loop ?>
<?php get_footer(); ?>