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

    <?php if ( function_exists('salvatori_pagination') ) { salvatori_pagination(); } else if ( is_paged() ) { ?>
        <nav id="post-nav">
            <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'salvatori' ) ); ?></div>
            <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'salvatori' ) ); ?></div>
        </nav>
    <?php } ?>
    
</article>
</div>

        
<?php get_footer(); ?>