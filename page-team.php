<?php 
/*
Template name: Team
*/
get_header(); 
$args = array(
        'sort_order' => 'ASC',
        'sort_column' => 'post_title',
        'hierarchical' => 1,
        'exclude' => '',
        'include' => '',
        'meta_key' => '',
        'meta_value' => '',
        'authors' => '',
        'child_of' => 8,
        'parent' => -1,
        'exclude_tree' => '',
        'number' => '',
        'offset' => 0,
        'post_type' => 'page',
        'post_status' => 'publish'
    ); 
    $team = get_pages($args); 
?>

<!-- Row for main content area -->
    <div class="entry row" id="content" role="main">
    
        <?php /* Start loop */ ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <header class="entry__header">
                    <h1 class="entry__title"><?php the_title(); ?></h1>
                    <?php //reverie_entry_meta(); ?>
                </header>
                <div class="entry__content">
                    <?php the_content(); ?>
                </div>
                
                <?php 
                foreach( $team as $member ) {      
                    $title = $member->post_title;
                    $img = get_the_post_thumbnail($page->ID, 'full', array('class' => 'member__img'));
                    $content = $page->post_content;
                    ?>
                    <article class="member">
                          <?php echo $img; ?>
                          <h1 class="member__title">
                            <?php echo $title; ?>
                          </h1>
                          <p class="member__content"><?php echo $content; ?></p>
                        </a>
                    </article>
                    <?php
                }   
                ?>

                ?>
            </article>
        <?php endwhile; // End the loop ?>

    </div>
    <?php get_sidebar(); ?>
        
<?php get_footer(); ?>