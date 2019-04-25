<?php

add_action( 'after_setup_theme', 'my_setup' );

if ( ! function_exists( 'my_setup' ) ):

function my_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 247, 141, true ); // Normal post thumbnails
		add_image_size( 'slider-post-thumbnail', 629, 438, true ); // Slider Thumbnail
		add_image_size( 'medium-post-thumbnail', 150, 150, true ); // Medium Thumbnail
		add_image_size( 'small-post-thumbnail', 100, 100, true ); // Small Thumbnail
	}

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// custom menu support
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
	  		  'header_menu' => 'Header Menu',
	  		  'footer_menu' => 'Footer Menu'
	  		)
	  	);
	}
}
endif;


/* Slider */
function my_post_type_slider() {
	register_post_type( 'slider',
                array( 
				'label' => __('Slider'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'custom-fields',
            				'thumbnail')
					) 
				);
}

add_action('init', 'my_post_type_slider');



/* Testimonial */
function my_post_type_testi() {
	register_post_type( 'testi',
                array( 
				'label' => __('Testimonial'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'custom-fields',
						'editor',
						'excerpt')
					) 
				);
}

add_action('init', 'my_post_type_testi');


/* Team */
function my_post_type_team() {
	register_post_type( 'team',
                array( 
				'label' => __('Our team'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'editor',
						'custom-fields',
						'thumbnail')
					) 
				);
}

add_action('init', 'my_post_type_team');



?>