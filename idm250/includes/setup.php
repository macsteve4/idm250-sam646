<?php

/**
* Include any styles into the site the proper way
*
* @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
*/
function include_styles()
{
    // Example of including an external link
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,700');

    // Example of including a style local to your theme root
    wp_enqueue_style(
        'idm250-css',
        get_template_directory_uri() . '/dist/styles/main.css',
        [],
        time() // Force Cache. Do not keep when on production
    );
}
// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_styles');

/**
* Register the menus on my site
*
* @link https://developer.wordpress.org/reference/functions/register_nav_menus/
* @return void
*/
function register_theme_navigation()
{
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        'footer_menu' => 'Footer Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');


/*
 * Enable support for Post Thumbnails on posts and pages.
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
function add_post_thumbnails_support()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');

?>