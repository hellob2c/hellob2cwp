<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorTransportIcoFont {

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
            'icofont-air-balloon',
            'icofont-airplane-alt',
            'icofont-airplane',
            'icofont-articulated-truck',
            'icofont-auto-mobile',
            'icofont-auto-rickshaw',
            'icofont-bicycle-alt-1',
            'icofont-bicycle-alt-2',
            'icofont-bicycle',
            'icofont-bus-alt-1',
            'icofont-bus-alt-2',
            'icofont-bus-alt-3',
            'icofont-bus',
            'icofont-cab',
            'icofont-cable-car',
            'icofont-car-alt-1',
            'icofont-car-alt-2',
            'icofont-car-alt-3',
            'icofont-car-alt-4',
            'icofont-car',
            'icofont-delivery-time',
            'icofont-fast-delivery',
            'icofont-fire-truck-alt',
            'icofont-fire-truck',
            'icofont-free-delivery',
            'icofont-helicopter',
            'icofont-motor-bike-alt',
            'icofont-motor-bike',
            'icofont-motor-biker',
            'icofont-oil-truck',
            'icofont-rickshaw',
            'icofont-rocket-alt-1',
            'icofont-rocket-alt-2',
            'icofont-rocket',
            'icofont-sail-boat-alt-1',
            'icofont-sail-boat-alt-2',
            'icofont-sail-boat',
            'icofont-scooter',
            'icofont-sea-plane',
            'icofont-ship-alt',
            'icofont-ship',
            'icofont-speed-boat',
            'icofont-taxi',
            'icofont-tractor',
            'icofont-train-line',
            'icofont-train-steam',
            'icofont-tram',
            'icofont-truck-alt',
            'icofont-truck-loaded',
            'icofont-truck',
            'icofont-van-alt',
            'icofont-van',
            'icofont-yacht',                  
 		];

		$icon_tab['dt-transport-icofont'] = array(
			'name'      => 'dt-transport-icofont',
			'label'     => esc_html__( 'Ico Font - Transport', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-air-balloon',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorTransportIcoFont::instance();