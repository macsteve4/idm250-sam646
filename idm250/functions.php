<?php
// Check Server PHP Version

// echo '<pre>';
// var_dump(phpversion());
// echo '</pre>';

if (version_compare('7.4', phpversion(), '>')) {

    die('You must be using THIS PHP version or greater.');
}

//Check WP Version



require get_template_directory() . '/includes/required.php';

/**
 * Theme initialization
 */
require get_template_directory() . '/includes/setup.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/includes/post-types.php';

/**
 * Custom Taxonomies
 */
require get_template_directory() . '/includes/taxonomies.php';
/**
 * Helper functions
 */
require get_template_directory() . '/includes/helpers.php';

?>