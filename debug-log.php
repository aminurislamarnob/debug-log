<?php
/**
 * Plugin Name: Disable to show depricated log on debug
 * Plugin URI:  https://aiarnob.com
 * Description: Tiny plugin disable depricated log message
 * Version: 1.0.0
 * Author: Aminur Islam Arnob
 * Author URI: https://aiarnob.dev
 * Text Domain: debug-log
 * WC requires at least: 5.0.0
 * Domain Path: /languages/
 * License: GPL2
 */

/*Stop show deprecated message on debug log*/
add_filter( 'deprecated_constructor_trigger_error', '__return_false' );
add_filter( 'deprecated_function_trigger_error', '__return_false' );
add_filter( 'deprecated_file_trigger_error', '__return_false' );
add_filter( 'deprecated_argument_trigger_error', '__return_false' );
add_filter( 'deprecated_hook_trigger_error', '__return_false' );