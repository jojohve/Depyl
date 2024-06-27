<?php
function depyl_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    register_nav_menus(
        array(
            'primary' => __('Menu Principale', 'depyl-theme'),
        )
    );
}
add_action('after_setup_theme', 'depyl_theme_setup');

function depyl_theme_scripts()
{
    wp_enqueue_style('depyl-theme-style', get_stylesheet_uri());
    wp_enqueue_style('depyl-theme-custom-style', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'depyl_theme_scripts');