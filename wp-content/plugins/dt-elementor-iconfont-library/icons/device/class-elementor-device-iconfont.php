<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorDeviceIcoFont {

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
            'icofont-android-nexus',
            'icofont-android-tablet',
            'icofont-apple-watch',
            'icofont-drawing-tablet',
            'icofont-earphone',
            'icofont-flash-drive',
            'icofont-game-console',
            'icofont-game-controller',
            'icofont-game-pad',
            'icofont-game',
            'icofont-headphone-alt-1',
            'icofont-headphone-alt-2',
            'icofont-headphone-alt-3',
            'icofont-headphone-alt',
            'icofont-headphone',
            'icofont-htc-one',
            'icofont-imac',
            'icofont-ipad',
            'icofont-iphone',
            'icofont-ipod-nano',
            'icofont-ipod-touch',
            'icofont-keyboard-alt',
            'icofont-keyboard-wireless',
            'icofont-keyboard',
            'icofont-laptop-alt',
            'icofont-laptop',
            'icofont-macbook',
            'icofont-magic-mouse',
            'icofont-micro-chip',
            'icofont-microphone-alt',
            'icofont-microphone',
            'icofont-monitor',
            'icofont-mouse',
            'icofont-mp3-player',
            'icofont-nintendo',
            'icofont-playstation-alt',
            'icofont-psvita',
            'icofont-radio-mic',
            'icofont-radio',
            'icofont-refrigerator',
            'icofont-samsung-galaxy',
            'icofont-surface-tablet',
            'icofont-ui-head-phone',
            'icofont-ui-keyboard',
            'icofont-washing-machine',
            'icofont-wifi-router',
            'icofont-wii-u',
            'icofont-windows-lumia',
            'icofont-wireless-mouse',
            'icofont-xbox-360',
 		];

		$icon_tab['dt-device-icofont'] = array(
			'name'      => 'dt-device-icofont',
			'label'     => esc_html__( 'Ico Font - Device', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-flash-drive',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorDeviceIcoFont::instance();