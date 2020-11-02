<?php
add_action( 'wp_enqueue_scripts', 'storemax_theme_css',999);
function storemax_theme_css() {
    wp_enqueue_style( 'storemax-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'storemax-child-style', get_stylesheet_uri(), array( 'storemax-parent-style' ) );
	wp_enqueue_style( 'storemax-default-css', get_stylesheet_directory_uri()."/css/colors/default.css" );
	wp_dequeue_style( 'default',get_template_directory_uri() .'/css/colors/default.css');
}
?>