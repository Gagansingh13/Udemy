<?php


//Setup
define('GS_DEV_MODE', true);


//Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
include(get_theme_file_path('/includes/widgets.php'));

//Hooks
add_action('wp_enqueue_scripts','gs_enqueue');
add_action('after_setup_theme', 'gs_setup_theme');
add_action('widgets_init', 'gs_widgets');



//Shortcodes