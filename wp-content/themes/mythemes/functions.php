<?php
//add_action( 'after_setup_theme', 'theme_slug_setup' );

// function theme_slug_setup() {
// 	add_theme_support( 'wp-block-styles' );
// }



add_action( 'wp_enqueue_scripts', 'is_enqueue_styles' );

function is_enqueue_styles()  {
    wp_enqueue_style("is_wp_css", get_stylesheet_uri());

   // custom add css
  wp_enqueue_style('is_body_css', get_parent_theme_file_uri( '/assets/css/body.css?t='. time() ) ,array() , '1.0.0', 'all');
  wp_enqueue_style('is_menu_css', get_parent_theme_file_uri( '/assets/css/menu.css?t='. time() ) ,array() , '1.0.0', 'all');
//   wp_add_inline_style( 'is_bosy_css', 'body { background: #895; }');
// Enqueue jQuery
    wp_enqueue_script('jquery');
  wp_enqueue_script('is_main_script', get_theme_file_uri( 'assets/js/main.js?t='. time()), array(), '1.0.0' );
    
}

// Afet setup theme thumbnails suppots
add_action('after_setup_theme', 'is_theme_customize');

if (!function_exists('is_theme_customize')) {
    
    function is_theme_customize(){

        // Afet setup theme thumbnails suppots
        //add_theme_support('post-thumbnails');

        add_theme_support('post-thumbnails', array('post', 'service','page'));

    }
}


