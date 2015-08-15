<?php

add_theme_support( 'post-thumbnails' );

add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script('jquery');
});

/**
 * add several common post type supports to  attachment
 */
add_action('init', function(){
	register_taxonomy_for_object_type( 'category', 'attachment' );
	register_taxonomy_for_object_type( 'post_tag', 'attachment' );
	add_post_type_support( 'attachment', 'thumbnail' );
	add_image_size('home-cloud-info', 1171, 601, true);
});
