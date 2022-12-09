<?php

/**
 * Theme Patterns
 *
 * @package create-block-based-theme
 */

namespace jrBlockBasedTheme\inc;

/**
 * Register Pattern Category.
 *
 * @return void
 */
function register_pattern_categories() {
	register_block_pattern_category(
		'cbbt-patterns',
		array( 'label' => __( 'Example Category', 'example' ) )
	);
}

add_action( 'init', __NAMESPACE__ . '\register_pattern_categories', 9 );
