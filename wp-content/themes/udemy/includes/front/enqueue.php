<?php

function gs_enqueue() {

  $uri = get_theme_file_uri();
  $ver = GS_DEV_MODE ? time() : false;

 wp_register_style( 'gs_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i',[],
 	$ver
);
 wp_register_style( 'gs_bootstrap',$uri . '/assests/css/bootstrap.css',[],$ver);
 wp_register_style( 'gs_style',$uri . '/assests/css/style.css',[],$ver);
 wp_register_style( 'gs_dark',$uri . '/assests/css/dark.css',[],$ver);
 wp_register_style( 'gs_font_icons',$uri . '/assests/css/font-icons.css',[],$ver);
 wp_register_style( 'gs_animate',$uri . '/assests/css/animate.css',[],$ver);
 wp_register_style( 'gs_magnific_popup',$uri . '/assests/css/magnific-popup.css',[],$ver);
 wp_register_style( 'gs_responsive',$uri . '/assests/css/responsive.css',[],$ver);
 wp_register_style( 'gs_custom',$uri . '/assests/css/custom.css',[],$ver);

	wp_enqueue_style('gs_google_fonts');
	wp_enqueue_style('gs_bootstrap');
	wp_enqueue_style('gs_style');
	wp_enqueue_style('gs_dark');
	wp_enqueue_style('gs_font_icons');
	wp_enqueue_style('gs_animate');
	wp_enqueue_style('gs_magnific_popup');
	wp_enqueue_style('gs_responsive');
	wp_enqueue_style('gs_custom');

	wp_register_script('gs_plugins', $uri . '/assests/js/plugins.js', [], false, true);
	wp_register_script('gs_functions', $uri . '/assests/js/functions.js', [], false, true);

	wp_enqueue_script('jquery');
	wp_enqueue_script('gs_plugins');
	wp_enqueue_script('gs_functions');
	}
