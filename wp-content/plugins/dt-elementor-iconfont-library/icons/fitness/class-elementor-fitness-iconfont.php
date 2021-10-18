<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorFitnessIcoFont {

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
			'icofont-cycling-alt',
			'icofont-cycling',
			'icofont-dumbbell',
			'icofont-dumbbells',
			'icofont-gym-alt-1',
			'icofont-gym-alt-2',
			'icofont-gym-alt-3',
			'icofont-gym',
			'icofont-muscle-weight',
			'icofont-muscle',
 		];

		$icon_tab['dt-fitness-icofont'] = array(
			'name'      => 'dt-fitness-icofont',
			'label'     => esc_html__( 'Ico Font - Fitness', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-dumbbell',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorFitnessIcoFont::instance();