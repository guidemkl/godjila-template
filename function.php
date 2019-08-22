<?php
  function godjila_scripts();{

	wp_enqueue_style('gcamera-,main', get_template_directory_uri().'/js/main.js');
	wp_enqueue_style('gcamera-minjquery', get_template_directory_uri().'/js/jquery-3.3.1.min.js');
	wp_enqueue_style('gcamera-ui', get_template_directory_uri().'/js/jquery-ui.js');
	wp_enqueue_style('gcamera-popper', get_template_directory_uri().'js/popper.min.js');
	wp_enqueue_style('gcamera-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js');
	wp_enqueue_style('gcamera-owl', get_template_directory_uri().'/js/owl.carousel.min.js');
	wp_enqueue_style('gcamera-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js');
	wp_enqueue_style('gcamera-aos', get_template_directory_uri().'/js/aos.js');
  	}
  add_action ('wp_enqueue_scripts','godjila_scripts');
  
function owl_carousel_script() {
  wp_enqueue_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array( 'jquery' ), '1.0', true);
  wp_enqueue_script('owl-carousel', get_template_directory_uri().'/js/slider.js');
}
add_action('wp_enqueue_scripts', 'owl_carousel_style');
add_action('wp_enqueue_scripts', 'owl_carousel_script');



    