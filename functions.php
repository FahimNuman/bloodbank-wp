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

//Theme Functions

function logo_customizier_register($wp_customizier){
    $wp_customizier->add_section('fahim_header_area',array(
        'title' => __('Header Area','fahimnuman'),
        'description' => 'If you Update yopur logo,you can do it.'
    ));

    $wp_customizier->add_setting('fahim_logo',array(
        'default' => get_bloginfo('templete_directiory'). './img/bloodbank.png',
    ));

    $wp_customizier->add_control(new WP_Customize_Image_Control($wp_customizier,'fahim_logo',array(
        'label' => 'Logo Upload',
        'setting' => 'fahim_logo',
        'section' => 'fahim_header_area',
    )));

}

add_action('customize_register', 'logo_customizier_register');