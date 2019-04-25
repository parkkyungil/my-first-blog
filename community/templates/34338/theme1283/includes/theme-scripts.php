<?php
function my_script() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.6.min.js', false, '1.6');
		wp_enqueue_script('jquery');

		wp_enqueue_script('superfish', get_bloginfo('template_url').'/js/superfish.js', array('jquery'), '1.4.8');
		wp_enqueue_script('nivo', get_bloginfo('template_url').'/js/jquery.nivo.slider.pack.js', array('jquery'), '2.4');
		wp_enqueue_script('maxheight', get_bloginfo('template_url').'/js/maxheight.js', array('jquery'), '1.0');
		wp_enqueue_script('jcarousellite', get_bloginfo('template_url').'/js/jcarousellite.js', array('jquery'), '1.0');
		wp_enqueue_script('easing', get_bloginfo('template_url').'/js/jquery.easing.1.3.js', array('jquery'), '1.3');
	}
}
add_action('init', 'my_script');
?>