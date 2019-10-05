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

function mod_contact7_form_title( $template ) {
    $template->set_title( 'Contact us now' );
  return $template;
}
add_filter(
    'wpcf7_contact_form_default_pack',
    'mod_contact7_form_title');
function add_form_contact(){
        $args = array('category_name' => 'form' );
        query_posts($args);
        if (have_posts()) : while (have_posts()) : the_post();
             echo do_shortcode(strip_tags(get_the_content()));
        endwhile;
        endif;
}

