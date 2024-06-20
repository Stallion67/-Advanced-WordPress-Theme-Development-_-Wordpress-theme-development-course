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
    
  //registering the styles and scripts
   wp_register_style( 'style-css',  get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
   wp_register_script('main-js',get_template_directory_uri(). '/assets/main.js', [],filemtime( get_template_directory() . '/assets/main.js'), true );

   //enqueindg the style and scripts
   wp_enqueue_style( 'style-css');
   wp_enqueue_script('main-js');



}
 
add_action('wp_enqueue_scripts', 'atila_enqueue_scripts');

//endidng tags
?>