<?php
/*
*Plugin Name: Recipe
*Description: A simple WordPress plugin that allows user to create recipes and rate those recipes
*Version:1.0
*Author:Gagan
*Text Domain: Recipe
*/
if(!function_exists('add_action'))
{
   echo "HI there";
   exit;
}

//Setup

//Includes

//Hooks
register_activation_hook(__FILE__,'r_activate_plugin');

//Shortcodes