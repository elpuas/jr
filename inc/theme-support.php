<?php
/**
 * Theme support.
 *
 * @package create-block-based-theme
 */

namespace jrBlockBasedTheme\inc;

/**
 * Add Page Excerpt support.
 */
add_post_type_support('page', 'excerpt');

/**
 * Add Align Wide support.
 */
add_theme_support( 'align-wide' );