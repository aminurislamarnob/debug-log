<?php
/**
 * Plugin Name: WP Debug Log
 * Plugin URI:  https://aiarnob.com
 * Description: Tiny plugin to enable debug log during developing theme or plugin
 * Version: 1.0.0
 * Author: Aminur Islam Arnob
 * Author URI: https://aiarnob.dev
 * Text Domain: debug-log
 * WC requires at least: 5.0.0
 * Domain Path: /languages/
 * License: GPL2
 */


// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/*Stop show deprecated message on debug log*/
add_filter( 'deprecated_constructor_trigger_error', '__return_false' );
add_filter( 'deprecated_function_trigger_error', '__return_false' );
add_filter( 'deprecated_file_trigger_error', '__return_false' );
add_filter( 'deprecated_argument_trigger_error', '__return_false' );
add_filter( 'deprecated_hook_trigger_error', '__return_false' );