<?php
function elegance_widgets_init() {
	// Content Widget
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Left Column',
		'id' 						=> 'cont-sidebar-left',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Content Widget
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Center Column',
		'id' 						=> 'cont-sidebar-center',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Content Widget
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Right Column',
		'id' 						=> 'cont-sidebar-right',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%2$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Sidebar',
		'id' 						=> 'main-sidebar',
		'description'   => __( 'Located at the right side of pages.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Latest News Widget
	// Location: About Us page
	register_sidebar(array(
		'name'					=> 'Latest News',
		'id' 						=> 'latest-news',
		'description'   => __( 'Located at the bottom of About page.'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Our Team Widget
	// Location: About Us page
	register_sidebar(array(
		'name'					=> 'Our Team',
		'id' 						=> 'team',
		'description'   => __( 'Located at the bottom of About page.'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Testimonials Widget
	// Location: at the bottom of the content
	register_sidebar(array(
		'name'					=> 'Testimonials',
		'id' 						=> 'testimonials',
		'description'   => __( 'Located at the bottom of the content.'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Address Widget
	// Location: at the bottom of the content
	register_sidebar(array(
		'name'					=> 'Address',
		'id' 						=> 'address',
		'description'   => __( 'Located at the bottom of the content.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Footer Widget
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'					=> 'First footer widget area',
		'id' 						=> 'footer-sidebar1',
		'description'   => __( 'Located at the bottom of pages.'),
		'before_widget' => '<li id="%1$s" class="widget-area">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// Footer Widget
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'					=> 'Second footer widget area',
		'id' 						=> 'footer-sidebar2',
		'description'   => __( 'Located at the bottom of pages.'),
		'before_widget' => '<li id="%1$s" class="widget-area">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// Footer Widget
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'					=> 'Third footer widget area',
		'id' 						=> 'footer-sidebar3',
		'description'   => __( 'Located at the bottom of pages.'),
		'before_widget' => '<li id="%1$s" class="widget-area">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// Footer Widget
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'					=> 'Fourth footer widget area',
		'id' 						=> 'footer-sidebar4',
		'description'   => __( 'Located at the bottom of pages.'),
		'before_widget' => '<li id="%1$s" class="widget-area">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// Social Widget
	// Location: at the bottom of the footer, before the copyright
	register_sidebar(array(
		'name'					=> 'Social',
		'id' 						=> 'social-sidebar',
		'description'   => __( 'Located at the bottom of pages.'),
		'before_widget' => '<div id="%1$s" class="widget-area %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>