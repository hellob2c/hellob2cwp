<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorWeatherIcoFont {

	/**
	 * Instance
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 */
	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	/**
	 * Constructor
	 */
	public function __construct() {		

		add_filter(  'elementor/icons_manager/additional_tabs', array( $this, 'elementor_icons_tab' ) );
	}
	
	public function elementor_icons_tab( $icon_tab = array() ) {

		$icons = [
			'icofont-breakdown',
			'icofont-celsius',
			'icofont-clouds',
			'icofont-cloudy',
			'icofont-dust',
			'icofont-eclipse',
			'icofont-fahrenheit',
			'icofont-forest-fire',
			'icofont-full-night',
			'icofont-full-sunny',
			'icofont-hail-night',
			'icofont-hail-rainy-night',
			'icofont-hail-rainy-sunny',
			'icofont-hail-rainy',
			'icofont-hail-sunny',
			'icofont-hail-thunder-night',
			'icofont-hail-thunder-sunny',
			'icofont-hail-thunder',
			'icofont-hail',
			'icofont-hill-night',
			'icofont-hill-sunny',
			'icofont-hurricane',
			'icofont-meteor',
			'icofont-night',
			'icofont-rainy-night',
			'icofont-rainy-sunny',
			'icofont-rainy-thunder',
			'icofont-rainy',
			'icofont-snow-alt',
			'icofont-snow-flake',
			'icofont-snow-temp',
			'icofont-snow',
			'icofont-snowy-hail',
			'icofont-snowy-night-hail',
			'icofont-snowy-night-rainy',
			'icofont-snowy-night',
			'icofont-snowy-rainy',
			'icofont-snowy-sunny-hail',
			'icofont-snowy-sunny-rainy',
			'icofont-snowy-sunny',
			'icofont-snowy-thunder-night',
			'icofont-snowy-thunder-sunny',
			'icofont-snowy-thunder',
			'icofont-snowy-windy-night',
			'icofont-snowy-windy-sunny',
			'icofont-snowy-windy',
			'icofont-snowy',
			'icofont-sun-alt',
			'icofont-sun-rise',
			'icofont-sun-set',
			'icofont-sun',
			'icofont-sunny-day-temp',
			'icofont-sunny',
			'icofont-thunder-light',
			'icofont-tornado',
			'icofont-umbrella-alt',
			'icofont-umbrella',
			'icofont-volcano',
			'icofont-wave',
			'icofont-wind-scale-0',
			'icofont-wind-scale-1',
			'icofont-wind-scale-10',
			'icofont-wind-scale-11',
			'icofont-wind-scale-12',
			'icofont-wind-scale-2',
			'icofont-wind-scale-3',
			'icofont-wind-scale-4',
			'icofont-wind-scale-5',
			'icofont-wind-scale-6',
			'icofont-wind-scale-7',
			'icofont-wind-scale-8',
			'icofont-wind-scale-9',
			'icofont-wind-waves',
			'icofont-wind',
			'icofont-windy-hail',
			'icofont-windy-night',
			'icofont-windy-raining',
			'icofont-windy-sunny',
			'icofont-windy-thunder-raining',
			'icofont-windy-thunder',
			'icofont-windy',
		];

		$icon_tab['dt-weather-icofont'] = array(
			'name'      => 'dt-weather-icofont',
			'label'     => esc_html__( 'Ico Font - Weather', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-celsius',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorWeatherIcoFont::instance();