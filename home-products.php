 <?php 
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
    $pages = get_pages($args); 
 ?>
 <section class="homeblock homeproducts">
            <?php foreach( $pages as $page ) {      
              $title = $page->post_title;
              $permalink = get_page_link( $page->ID );
              $img = get_the_post_thumbnail($page->ID, 'full', array('class' => 'homeproduct__img'));
              $slug = $page->post_name;
            ?>
              <article class="homeproduct">
               <a href="<?php bloginfo('url'); ?>/prodotti/#<?php echo $slug ?>" class="homeproduct__link">
                  <?php echo $img; ?>
                  <h1 class="homeproduct__title">
                    <?php echo $title; ?>
                  </h1>
                </a>
              </article>
            <?php
            }   
        ?>
</section>

          