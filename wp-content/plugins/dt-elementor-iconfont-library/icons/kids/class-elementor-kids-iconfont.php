<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorKidsIcoFont {

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
			'icofont-baby-backpack',
			'icofont-baby-cloth',
			'icofont-baby-milk-bottle',
			'icofont-baby-trolley',
			'icofont-baby',
			'icofont-candy',
			'icofont-holding-hands',
			'icofont-infant-nipple',
			'icofont-kids-scooter',
			'icofont-safety-pin',
			'icofont-teddy-bear',
			'icofont-toy-ball',
			'icofont-toy-cat',
			'icofont-toy-duck',
			'icofont-toy-elephant',
			'icofont-toy-hand',
			'icofont-toy-horse',
			'icofont-toy-lattu',
			'icofont-toy-train',			
 		];

		$icon_tab['dt-kids-icofont'] = array(
			'name'      => 'dt-kids-icofont',
			'label'     => esc_html__( 'Ico Font - Kids', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-baby-backpack',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorKidsIcoFont::instance();