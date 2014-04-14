<?php
// remove <p> around <img>
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

// thumbnails
add_theme_support( 'post-thumbnails', array( 'page' ) );

// excerpts for pages
add_action( 'init', 'salvatori_add_excerpts_to_pages' );
function salvatori_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

// excerpt limit
function new_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

// menu
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'salvatori') 
    ));
// menu walkers
    class salvatoriWalker extends Walker_Nav_Menu
    {
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="menu__item navigation__item navigation--home '. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="navigation-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ' class="navigation__link"';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '';
           $append = '';
           

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
    }

// end
?>