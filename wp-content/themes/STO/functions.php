<?php
add_action( 'wp_enqueue_scripts', 'jquery_add' );
function jquery_add() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'sto_themes_ss' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function sto_themes_ss() {
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slick-t-css', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'jquery-ui', '//code.jquery.com/ui/1.12.1/jquery-ui.js', array(), '1.0.0', true );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.js', array(), '1.0.0', true );
	wp_enqueue_script( 'datapicker-js', get_template_directory_uri() . '/js/datapicker-ru.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}