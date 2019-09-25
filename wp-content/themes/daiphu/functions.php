<?php
define ('THEME_URL', get_stylesheet_directory());

add_theme_support('post-formats',
    array(
        'image',
        'link',
        'gallery'
    ));

//CSS
function get_css_theme(){
    wp_enqueue_style( 'main-style', get_theme_file_uri()."/assets/css/main.css");

}
add_action('wp_enqueue_scripts','get_css_theme');
