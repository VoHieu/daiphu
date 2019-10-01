<?php
//define ('THEME_URL', get_stylesheet_directory());

add_theme_support('post-thumbnails');

//CSS
function get_css_theme(){
    wp_enqueue_style( 'main-style', get_theme_file_uri()."/assets/css/main.css");

}
add_action('wp_enqueue_scripts','get_css_theme');

add_filter( 'wpcf7_load_js', '__return_false' );
//add_filter( 'wpcf7_load_css', '__return_false' );