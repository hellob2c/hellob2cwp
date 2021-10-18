<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorEmoticonIcoFont {

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
			'icofont-angry',
			'icofont-astonished',
			'icofont-confounded',
			'icofont-confused',
			'icofont-crying',
			'icofont-dizzy',
			'icofont-expressionless',
			'icofont-heart-eyes',
			'icofont-laughing',
			'icofont-nerd-smile',
			'icofont-open-mouth',
			'icofont-rage',
			'icofont-rolling-eyes',
			'icofont-sad',
			'icofont-simple-smile',
			'icofont-slightly-smile',
			'icofont-smirk',
			'icofont-stuck-out-tongue',
			'icofont-wink-smile',
			'icofont-worried',			
 		];

		$icon_tab['dt-emoticon-icofont'] = array(
			'name'      => 'dt-emoticon-icofont',
			'label'     => esc_html__( 'Ico Font - Emoticon', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-simple-smile',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorEmoticonIcoFont::instance();