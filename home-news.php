<section class="homeblock updates">
 <?php 
    $args = array(
                'posts_per_page'=>2
            );
    // The Query
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part('component', 'update');
      }
    } else {
      // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
 ?>

</section>