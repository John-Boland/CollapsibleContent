<?php
/**
 * Collapsible Content plugin
 * Description.
 *
 * @package CollapsibleContent
 * @since 1.0.0
 * @author johnboland
 * @link http://johnboland.me
 * @license MIT
 *
 *
 * Plugin Name:       CollapsibleContent
 * Plugin URI:
 * Description:       Collapsible Content is a Wordpress Plugin that shows and hides content.
 * Author:            John Boland
 * Version:           1.0.0
 */

namespace CollapsibleContent;

if ( ! defined( 'ABSPATH' ) ) {
	die( "Oh, silly, there's nothing to see here." );
}
define( 'COLLAPSIBLE_CONTENT_PLUGIN', __FILE__ );
define( 'COLLAPSIBLE_CONTENT_DIR', plugin_dir_path( __FILE__ ) );
$plugin_url = plugin_dir_url( __FILE__ );
if ( is_ssl() ) {
	$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
}
define( 'COLLAPSIBLE_CONTENT_URL', $plugin_url );
define( 'COLLAPSIBLE_CONTENT_TEXT_DOMAIN', 'collapsible_content' );
include( __DIR__ . '/src/shortcode/plugin.php' );

