<?php

function gs_widgets(){
	register_sidebar([
		'name' => __('My first theme Sidebar', 'udemy'),
		  'id' => 'gs_sidebar',
		  'description' => __('Sidebar for the udemy theme', 'udemy'),
		  'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
		  'after_widget' => '</div',
		  'before_title' =>'<h4>',
		  'after_title'  => '</h4>'
	]);
}

