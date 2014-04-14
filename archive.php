<?php get_header(); ?>
<div class="container row archive bg">
<article class="homeblock updates">

    <header class="archive__header">
        <h1 class="archive__title entry__title"> <?php single_cat_title(); ?></h1>
    </header>

    <?php if ( have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'component', 'update' ); ?>
        <?php endwhile; ?>
        
        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; // end have_posts() check ?>
</article>
</div>

        
<?php get_footer(); ?>