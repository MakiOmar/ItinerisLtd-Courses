<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/MakiOmar
 * @since             1.0.0
 * @package           Itinerisltd_Courses
 *
 * @wordpress-plugin
 * Plugin Name:       ItinerisLtd Courses
 * Plugin URI:        https://github.com/MakiOmar/ItinerisLtd-Courses
 * Description:       Adds simple course
 * Version:           1.0.0
 * Author:            Makiomar
 * Author URI:        https://github.com/MakiOmar
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       itinerisltd-courses
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ITINERISLTD_COURSES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-itinerisltd-courses-activator.php
 */
function activate_itinerisltd_courses() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-itinerisltd-courses-activator.php';
	Itinerisltd_Courses_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-itinerisltd-courses-deactivator.php
 */
function deactivate_itinerisltd_courses() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-itinerisltd-courses-deactivator.php';
	Itinerisltd_Courses_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_itinerisltd_courses' );
register_deactivation_hook( __FILE__, 'deactivate_itinerisltd_courses' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-itinerisltd-courses.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_itinerisltd_courses() {

	$plugin = new Itinerisltd_Courses();
	$plugin->run();

}
run_itinerisltd_courses();
