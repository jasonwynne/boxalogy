<?php
if ( function_exists( 'add_theme_support' ) ):
  add_theme_support( 'menus' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
endif;

if ( function_exists('register_sidebars') ):
  register_sidebar(array(
    'name'=>'Sidebar',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>'
  ));
endif;

add_editor_style( 'editor-style.css' );

function my_init_method() {
  if (is_admin() == false ):
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script( 'bootstrap' );
  endif;
}
add_action('init', 'my_init_method');
?>
