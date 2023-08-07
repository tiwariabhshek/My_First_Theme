<?php

/** Functions and definitions.

 *
*/
// provide featured image support

add_theme_support('post-thumbnails');

// enable widgets support

add_theme_support('widgets');

// enable title support

add_theme_support('title-tag');

// removing wordpress generator code from site

remove_action('wp_head', 'wp_generator');


// register menus

add_action('init', 'register_menus');

function register_menus()
{

    register_nav_menus(
        array(

            'header-menu' => 'Side Menu',

            'footer-menu' => 'Footer Menu',

        )
    );

}
add_action('wp_enqueue_scripts', 'load_MyFirstTheme_scripts');

function load_MyFirstTheme_scripts()
{
    wp_enqueue_style('MyFirstTheme-style', get_stylesheet_uri());
}

register_sidebar(
    array(
        'name' => "sidebar Location",
        'id' => 'sidebar'
    )
);

function custom_excerpt_length($length)
{
    return 20; // Change the number to the desired length of the excerpt in words
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function custom_excerpt_more($more)
{
    return ' <a href="' . get_permalink() . '">Read more</a>'; // Change the ellipsis to the desired "read more" text or leave it as '...' for default
}
add_filter('excerpt_more', 'custom_excerpt_more');

function custom_category()
{
    $labels = array(
        'name' => 'Custom Category',
        'singular_name' => 'Custom Category',
        'menu_name' => 'Custom Categories'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'custom-category')
    );
    register_taxonomy('custom_category', 'post', $args);
}
add_action('init', 'custom_category');