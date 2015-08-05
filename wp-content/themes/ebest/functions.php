<?php

add_theme_support( 'post-thumbnails' );

add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
});

add_action('init', function(){
	register_nav_menu('main', '主菜单');
});
