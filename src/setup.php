<?php
function starthreading_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus([
        'primary' => 'Primary'
    ]);
    if (function_exists('add_image_size')) {
        add_image_size('category-thumb', 350, 450, true);
        add_image_size('thumb-crazy', 292, 376, true);
        add_image_size('thumb', 400, 267, true);
    }
}

add_action('after_setup_theme', 'starthreading_setup');

function starthreading_scripts()
{

    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');

    wp_enqueue_style('font-icons-style', get_template_directory_uri() . '/assets/css/font-icons.css');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('magnific-popup-style', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('spa-icons-style', get_template_directory_uri() . '/demos/spa/css/fonts/spa-icons.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('dark-style', get_template_directory_uri() . '/assets/css/dark.css');
    wp_enqueue_style('fonts-style', get_template_directory_uri() . '/demos/therapy/css/fonts.css');
    
    wp_enqueue_style('flatpickr-css', get_template_directory_uri() . '/demos/therapy/css/flatpickr.css');
    wp_enqueue_style('therapy-style', get_template_directory_uri() . '/demos/therapy/therapy.css');



    wp_enqueue_script('jquery_scripts', get_template_directory_uri() . '/assets/js/jquery.js', [], '1.0', true);
    
    wp_enqueue_script('plugins-script', get_template_directory_uri() . '/assets/js/plugins.min.js', [], '1.0', true);
    wp_enqueue_script('function-script', get_template_directory_uri() . '/assets/js/functions.js', [], '1.0', true);
    

}

add_action('wp_enqueue_scripts', 'starthreading_scripts');
