<?php
/**
 * Plugin Handler
 *
 * @package ${NAMESPACE}
 * @since 1.0.0
 * @author johnboland
 * @link http://johnboland.me
 * @license MIT
 */

namespace CollapsibleContent\Shortcode;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );

/**
 *  Enqueue the plugin assets (scripts and styles).
 *
 * @return void
 * @since 1.0.0
 *
 */
function enqueue_assets() {
	wp_enqueue_style('dashicons');
	wp_enqueue_script(
		'collapsible-content-plugin-script',
		COLLAPSIBLE_CONTENT_URL . 'assets/dist/js/jquery.plugin.min.js',
		array('jquery'),
		'1.0.0',
		true
	);
}
/**
 * Autoload plugin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'shortcodes.php',
	);
	foreach( $files as $file ) {
		include( __DIR__ . '/' . $file );
	}
}
autoload();
