<?php
add_action( 'after_setup_theme', 'theme_slug_setup' );

function theme_slug_setup() {
	add_theme_support( 'wp-block-styles' );
}



add_action( 'wp_enqueue_scripts', 'is_enqueue_styles' );

function is_enqueue_styles()  {
    wp_enqueue_style("is_main_css", get_stylesheet_uri());

    wp_add_inline_style( 
		'theme-slug-primary', 
		'body { background: red; }'
	);

    wp_enqueue_script('is_main_script', get_theme_file_uri( 'assets/js/main.js' ), array(), '1.0.0' );
}