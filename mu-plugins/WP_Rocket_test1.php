<?php
/**
 * Plugin Name: WP Rocket Test1
 * Description: disable the static file cache creation
 * Author:      Vinroy Stennett
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Basic security, prevents file from being loaded directly.
defined( 'ABSPATH' ) or die( 'Cheatin’ uh?' );

// Load WordPress.
( 'wp-load.php' );

/* Prefix your custom functions!
 *
 * Function names must be unique in PHP.
 * In order to make sure the name of your function does not
 * exist anywhere else in WordPress, or in other plugins,
 * give your function a unique custom prefix.
 * Example prefix: wpr20151231
 * Example function name: wpr20151231__do_something
 *
 * For the rest of your function name after the prefix,
 * make sure it is as brief and descriptive as possible.
 * When in doubt, do not fear a longer function name if it
 * is going to remind you at once of what the function does.
 * Imagine you’ll be reading your own code in some years, so
 * treat your future self with descriptive naming. ;)
 */

/**
 * Pass your custom function to the wp_rocket_loaded action hook.
 *
 * Note: wp_rocket_loaded itself is hooked into WordPress’ own
 * plugins_loaded hook.
 * Depending what kind of functionality your custom plugin
 * should implement, you can/should hook your function(s) into
 * different action hooks, such as for example
 * init, after_setup_theme, or template_redirect.
 * 
 * Learn more about WordPress actions and filters here:
 * https://developer.wordpress.org/plugins/hooks/
 *
 * @param string 'do_rocket_generate_caching_file'         Hook name to hook function into
 * @param string '$generate' Function name to be hooked
 */

/**  
* Controls the generation of the static cache file
*
* Parameters
* $generate: (boolean) Generate or not the cache file. Default to true
*/
apply_filters( 'do_rocket_generate_caching_file', $generate =false);

// Clear cache.
if ( function_exists( 'rocket_clean_domain' ) ) {
	rocket_clean_domain();
}

// Preload cache.
if ( function_exists( 'managed_clear_cache' ) ) {
	managed_clear_cache();
}

