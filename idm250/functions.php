<?php
// Check Server PHP Version

// echo '<pre>';
// var_dump(phpversion());
// echo '</pre>';

if (version_compare('7.4', phpversion(), '>')) {

    die('You must be using THIS PHP version or greater.');
}

//Check WP Version

// Add the WP check code from about 24ish minutes into the recording

function include_styles() {

wp_enqueue_style('google-fonts', 'google fonts link here');

wp_enqueue_style(
    'idm250-css',
    get_template_directory_uri() . '/dist/styles/main.css');


}

add_action('wp_enqueue_scripts', 'include_styles');

function include_js_files() {
    wp_enqueue_script('idm-js', get_template_directoryuri() . '/dist/scipts/app.js',
   [],
   false,
   true 
);
}

function register_theme_navigation()
{ register_nav_menus([
    'primary_menu' => 'Primary Menu',
    'footer_menu' => 'Footer Menu',

]);

}

add_action('after_setup_theme', 'register_theme_navigation');