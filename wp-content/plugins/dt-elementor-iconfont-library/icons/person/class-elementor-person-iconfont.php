<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorPersonIcoFont {

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
			'icofont-boy',
			'icofont-business-man-alt-1',
			'icofont-business-man-alt-2',
			'icofont-business-man-alt-3',
			'icofont-business-man',
			'icofont-female',
			'icofont-funky-man',
			'icofont-girl-alt',
			'icofont-girl',
			'icofont-group',
			'icofont-hotel-boy-alt',
			'icofont-hotel-boy',
			'icofont-kid',
			'icofont-man-in-glasses',
			'icofont-people',
			'icofont-support',
			'icofont-user-alt-1',
			'icofont-user-alt-2',
			'icofont-user-alt-3',
			'icofont-user-alt-4',
			'icofont-user-alt-5',
			'icofont-user-alt-6',
			'icofont-user-alt-7',
			'icofont-user-female',
			'icofont-user-male',
			'icofont-user-suited',
			'icofont-user',
			'icofont-users-alt-1',
			'icofont-users-alt-2',
			'icofont-users-alt-3',
			'icofont-users-alt-4',
			'icofont-users-alt-5',
			'icofont-users-alt-6',
			'icofont-users-social',
			'icofont-users',
			'icofont-waiter-alt',
			'icofont-waiter',
			'icofont-woman-in-glasses',
 		];

		$icon_tab['dt-person-icofont'] = array(
			'name'      => 'dt-person-icofont',
			'label'     => esc_html__( 'Ico Font - Person', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-boy',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorPersonIcoFont::instance();