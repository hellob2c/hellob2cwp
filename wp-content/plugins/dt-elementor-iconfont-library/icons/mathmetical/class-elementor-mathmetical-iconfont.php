<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorMathmeticalIcoFont {

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
			'icofont-abacus-alt',
			'icofont-abacus',
			'icofont-angle-180',
			'icofont-angle-45',
			'icofont-angle-90',
			'icofont-angle',
			'icofont-calculator-alt-1',
			'icofont-calculator-alt-2',
			'icofont-calculator',
			'icofont-circle-ruler-alt',
			'icofont-circle-ruler',
			'icofont-compass-alt-1',
			'icofont-compass-alt-2',
			'icofont-compass-alt-3',
			'icofont-compass-alt-4',
			'icofont-golden-ratio',
			'icofont-marker-alt-1',
			'icofont-marker-alt-2',
			'icofont-marker-alt-3',
			'icofont-marker',
			'icofont-math',
			'icofont-mathematical-alt-1',
			'icofont-mathematical-alt-2',
			'icofont-mathematical',
			'icofont-pen-alt-1',
			'icofont-pen-alt-2',
			'icofont-pen-alt-3',
			'icofont-pen-holder-alt-1',
			'icofont-pen-holder',
			'icofont-pen',
			'icofont-pencil-alt-1',
			'icofont-pencil-alt-2',
			'icofont-pencil-alt-3',
			'icofont-pencil-alt-4',
			'icofont-pencil',
			'icofont-ruler-alt-1',
			'icofont-ruler-alt-2',
			'icofont-ruler-compass-alt',
			'icofont-ruler-compass',
			'icofont-ruler-pencil-alt-1',
			'icofont-ruler-pencil-alt-2',
			'icofont-ruler-pencil',
			'icofont-ruler',
			'icofont-rulers-alt',
			'icofont-rulers',
			'icofont-square-root',
			'icofont-ui-calculator',            
 		];

		$icon_tab['dt-mathmetical-icofont'] = array(
			'name'      => 'dt-mathmetical-icofont',
			'label'     => esc_html__( 'Ico Font - Mathmetical', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-abacus',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorMathmeticalIcoFont::instance();