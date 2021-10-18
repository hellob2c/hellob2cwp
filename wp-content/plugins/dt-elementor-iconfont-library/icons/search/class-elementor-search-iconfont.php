<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorSearchIcoFont {

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
			'icofont-search-1',
			'icofont-search-2',
			'icofont-search-document',
			'icofont-search-folder',
			'icofont-search-job',
			'icofont-search-map',
			'icofont-search-property',
			'icofont-search-restaurant',
			'icofont-search-stock',
			'icofont-search-user',
			'icofont-search',
 		];

		$icon_tab['dt-search-icofont'] = array(
			'name'      => 'dt-search-icofont',
			'label'     => esc_html__( 'Ico Font - Search', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-search-1',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorSearchIcoFont::instance();