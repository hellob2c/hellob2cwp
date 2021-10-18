<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorTravelIcoFont {

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
			'icofont-5-star-hotel',
			'icofont-air-ticket',
			'icofont-beach-bed',
			'icofont-beach',
			'icofont-camping-vest',
			'icofont-direction-sign',
			'icofont-hill-side',
			'icofont-hill',
			'icofont-hotel',
			'icofont-island-alt',
			'icofont-island',
			'icofont-sandals-female',
			'icofont-sandals-male',
			'icofont-travelling',			
 		];

		$icon_tab['dt-travel-icofont'] = array(
			'name'      => 'dt-travel-icofont',
			'label'     => esc_html__( 'Ico Font - Travel', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-beach-bed',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorTravelIcoFont::instance();