<?php
/**
 * Main file.
 *
 * @package CognioBlocks
 *
 * Plugin Name:       CognioBlocks
 * Plugin URI:        https://cognioblocks.com/
 * Description:       CognioBlocks includes all the essential Gutenberg blocks you need to create beautiful pages effortlessly.
 * Version:           0.0.1
 * Author:            CognioBlocks
 * Author URI:        https://cognioblocks.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cognio-blocks
 * Domain Path:       /languages
 * WordPress Available:  yes
 * Requires License:    no
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'COGNIO_BLOCKS_FILE', __FILE__ );
define( 'COGNIO_BLOCKS_URL', plugins_url( '/', COGNIO_BLOCKS_FILE ) );
define( 'COGNIO_BLOCKS_PATH', dirname( COGNIO_BLOCKS_FILE ) );
define( 'COGNIO_BLOCKS_VERSION', '0.0.1' );
define( 'COGNIO_BLOCKS_ROOT', dirname( plugin_basename( COGNIO_BLOCKS_FILE ) ) );
define( 'COGNIO_BLOCKS_PLUGIN_NAME', 'Cognio Blocks' );