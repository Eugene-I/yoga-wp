<?php
add_action('wp_enqueue_scripts', 'styles_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'myMenu');

function styles_theme() {
	wp_enqueue_style('style', get_stylesheet_uri());
	// wp_enqueue_style('main_styles', get_template_directory_uri() . '/style.css');
}

function scripts_theme() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/jquery.main.js');
}

function myMenu() {
	register_nav_menu('Left menu', 'Левое меню');
	register_nav_menu('Right menu', 'Правое меню');
}