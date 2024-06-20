<?php
/**
 * Theme Functions.
 * 
 * @package Atila
 */

//  echo '<pre>';
//  print_r(filemtime(get_template_directory(). '/style.css'));
//  wp_die();

 //adding a style sheet
function atila_enqueue_scripts(){
    //loadidng custom style 
   // wp_enqueue_style('stylesheet', get_template_directory_uri(). '/style.css');
    
   wp_enqueue_style( 'style-css',  get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
   wp_enqueue_script('main-js',get_template_directory_uri(). '/assets/main.js', [],filemtime( get_template_directory() . '/assets/main.js'), true );

}
 
add_action('wp_enqueue_scripts', 'atila_enqueue_scripts');

//endidng tags
?>