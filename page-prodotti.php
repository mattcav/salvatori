<?php
/* 
Template name: Prodotti
*/
    $args = array(
        'sort_order' => 'ASC',
        'sort_column' => 'post_title',
        'hierarchical' => 1,
        'exclude' => '',
        'include' => '',
        'meta_key' => '',
        'meta_value' => '',
        'authors' => '',
        'child_of' => $post->ID,
        'parent' => -1,
        'exclude_tree' => '',
        'number' => '',
        'offset' => 0,
        'post_type' => 'page',
        'post_status' => 'publish'
    ); 
    $pages = get_pages($args); 

    get_header(); ?>

    <article class="entry entry--prodotti">
        <header class="entry__header">
            <h1 class="entry__title">Prodotti</h1>
        </header>

        <?php foreach( $pages as $page ) {      
                $title = $page->post_title;
                $content = $page->post_content;
                $slug = $page->post_name;
            ?>
                <article id="<?php echo $slug; ?>" class="prodotti">
                    <img src="<?php bloginfo('template_directory'); ?>/images/<?php echo $slug; ?>.png" alt="<?php echo $slug; ?>" class="prodotti__img">
                    <h1 class="prodotti__title">
                        <?php echo $title; ?>
                    </h1>
                    <p><?php echo wpautop($content); ?></p>
                </article>
            <?php
            }   
        ?>
    </article>



<?php get_footer(); ?>