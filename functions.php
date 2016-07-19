<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

 function add_search_form($items, $args) {
          if( $args->theme_location == 'primary' )
          $items .= '<li class="search"><form role="search" method="get" id="searchform" action="'
      .home_url( '/' ).'"><input type="text" value="search" name="s" id="s" /><input type="submit" id="searchsubmit" value="'
      . __('Submit') .'" /></form></li>';
     return $items;
}

?>