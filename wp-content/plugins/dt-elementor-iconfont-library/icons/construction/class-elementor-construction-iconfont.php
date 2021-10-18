<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorConstructionIcoFont {

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
			'icofont-architecture-alt',
			'icofont-architecture',
			'icofont-barricade',
			'icofont-bolt',
			'icofont-bricks',
			'icofont-building-alt',
			'icofont-bull-dozer',
			'icofont-calculations',
			'icofont-cement-mix',
			'icofont-cement-mixer',
			'icofont-concrete-mixer',
			'icofont-danger-zone',
			'icofont-drill',
			'icofont-eco-energy',
			'icofont-eco-environmen',
			'icofont-energy-air',
			'icofont-energy-oil',
			'icofont-energy-savings',
			'icofont-energy-solar',
			'icofont-energy-water',
			'icofont-engineer',
			'icofont-fire-extinguisher-alt',
			'icofont-fire-extinguisher',
			'icofont-fix-tools',
			'icofont-fork-lift',
			'icofont-glue-oil',
			'icofont-hammer-alt',
			'icofont-hammer',
			'icofont-help-robot',
			'icofont-industries-1',
			'icofont-industries-2',
			'icofont-industries-3',
			'icofont-industries-4',
			'icofont-industries-5',
			'icofont-industries',
			'icofont-labour',
			'icofont-mining',
			'icofont-paint-brush',
			'icofont-pollution',
			'icofont-power-zone',
			'icofont-radio-active',
			'icofont-recycle-alt',
			'icofont-recycling-man',
			'icofont-safety-hat-light',
			'icofont-safety-hat',
			'icofont-saw',
			'icofont-screw-driver',
			'icofont-tools-1',
			'icofont-tools-bag',
			'icofont-tow-truck',
			'icofont-trolley',
			'icofont-trowel',
			'icofont-under-construction-alt',
			'icofont-under-construction',
			'icofont-vehicle-cement',
			'icofont-vehicle-crane',
			'icofont-vehicle-delivery-van',
			'icofont-vehicle-dozer',
			'icofont-vehicle-excavator',
			'icofont-vehicle-trucktor',
			'icofont-vehicle-wrecking',
			'icofont-worker',
			'icofont-workers-group',
			'icofont-wrench',
		];

		$icon_tab['dt-construction-icofont'] = array(
			'name'      => 'dt-construction-icofont',
			'label'     => esc_html__( 'Ico Font - Construction', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-barricade',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorConstructionIcoFont::instance();