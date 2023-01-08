<?php

/**
 * Theme scripts and styles.
 *
 * @package create-block-based-theme
 */

namespace jrBlockBasedTheme\inc;

/**
 * Enqueue scripts and styles.
 */
function scripts() {

		$asset_file_time = get_theme_file_path( '/build/index.asset.php' );

		$asset_file = [ // phpcs:ignore
			'version'      => filemtime( $asset_file_time ),
			'dependencies' => [
				'wp-polyfill',
				'wp-i18n',
				'wp-blocks',
				'wp-dom-ready',
			], // phpcs:ignore
		];

		if( file_exists( $asset_file_time) ) {
			// Enqueue theme custom styles.
			wp_enqueue_style(
				'jr-styles', get_template_directory_uri() . '/build/index.css',
				[],
				filemtime( $asset_file_time )
			);

			// Enqueue scripts.
			wp_enqueue_script(
				'jr-scripts', get_template_directory_uri() . '/build/index.js',
				$asset_file['dependencies'],
				filemtime( $asset_file_time ),
				true
			);
		}
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\scripts' );
