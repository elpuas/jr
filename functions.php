<?php
/**
 * Functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package create-block-based-theme
 */

/**
 * Get all the include files for the theme.
 *
 * @author Alfredo Navas <elpuas@gmail.com>
 */
function get_theme_include_files() {
    return [
        'inc/enqueue-assets.php', // Load styles and scripts.
        'inc/register-patterns-categories.php', // Gutenberg category patterns for this theme.
        'inc/theme-support.php', // Theme support.
    ];
}

foreach ( get_theme_include_files() as $include ) {
    require trailingslashit( get_template_directory() ) . $include;
}
