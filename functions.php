<?php
add_theme_support('title-tag');



//theme css and jquery calling

function fahim_css_js_file_calling(){
    wp_enqueue_style( 'fahim-style', get_stylesheet_uri(  ));
    wp_register_style( 'boostrap', get_template_directory_uri().'/css/boostrap.css', array(), '5.0.2', 'all');
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    //jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_register_style( 'boostrap', get_template_directory_uri().'/js/boostrap.js', array(), '5.0.2', 'true');
    wp_register_style( 'main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');
}
add_action('wp_enqueue_scripts' ,'fahim_css_js_file_calling');