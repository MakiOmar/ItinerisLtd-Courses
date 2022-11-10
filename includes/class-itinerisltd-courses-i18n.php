<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/MakiOmar
 * @since      1.0.0
 *
 * @package    Itinerisltd_Courses
 * @subpackage Itinerisltd_Courses/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Itinerisltd_Courses
 * @subpackage Itinerisltd_Courses/includes
 * @author     Makiomar <maki3omar@gmail.com>
 */
class Itinerisltd_Courses_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'itinerisltd-courses',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
