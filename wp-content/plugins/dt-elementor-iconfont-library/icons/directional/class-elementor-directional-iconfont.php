<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorDirectionalIcoFont {

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
			'icofont-arrow-down',
			'icofont-arrow-left',
			'icofont-arrow-right',
			'icofont-arrow-up',
			'icofont-block-down',
			'icofont-block-left',
			'icofont-block-right',
			'icofont-block-up',
			'icofont-bubble-down',
			'icofont-bubble-left',
			'icofont-bubble-right',
			'icofont-bubble-up',
			'icofont-caret-down',
			'icofont-caret-left',
			'icofont-caret-right',
			'icofont-caret-up',
			'icofont-circled-down',
			'icofont-circled-left',
			'icofont-circled-right',
			'icofont-circled-up',
			'icofont-collapse',
			'icofont-cursor-drag',
			'icofont-curved-double-left',
			'icofont-curved-double-right',
			'icofont-curved-down',
			'icofont-curved-left',
			'icofont-curved-right',
			'icofont-curved-up',
			'icofont-dotted-down',
			'icofont-dotted-left',
			'icofont-dotted-right',
			'icofont-dotted-up',
			'icofont-double-left',
			'icofont-double-right',
			'icofont-expand-alt',
			'icofont-hand-down',
			'icofont-hand-drag',
			'icofont-hand-drag1',
			'icofont-hand-drag2',
			'icofont-hand-drawn-alt-down',
			'icofont-hand-drawn-alt-left',
			'icofont-hand-drawn-alt-right',
			'icofont-hand-drawn-alt-up',
			'icofont-hand-drawn-down',
			'icofont-hand-drawn-left',
			'icofont-hand-drawn-right',
			'icofont-hand-drawn-up',
			'icofont-hand-grippers',
			'icofont-hand-left',
			'icofont-hand-right',
			'icofont-hand-up',
			'icofont-line-block-down',
			'icofont-line-block-left',
			'icofont-line-block-right',
			'icofont-line-block-up',
			'icofont-long-arrow-down',
			'icofont-long-arrow-left',
			'icofont-long-arrow-right',
			'icofont-long-arrow-up',
			'icofont-rounded-collapse',
			'icofont-rounded-double-left',
			'icofont-rounded-double-right',
			'icofont-rounded-down',
			'icofont-rounded-expand',
			'icofont-rounded-left-down',
			'icofont-rounded-left-up',
			'icofont-rounded-left',
			'icofont-rounded-right-down',
			'icofont-rounded-right-up',
			'icofont-rounded-right',
			'icofont-rounded-up',
			'icofont-scroll-bubble-down',
			'icofont-scroll-bubble-left',
			'icofont-scroll-bubble-right',
			'icofont-scroll-bubble-up',
			'icofont-scroll-double-down',
			'icofont-scroll-double-left',
			'icofont-scroll-double-right',
			'icofont-scroll-double-up',
			'icofont-scroll-down',
			'icofont-scroll-left',
			'icofont-scroll-long-down',
			'icofont-scroll-long-left',
			'icofont-scroll-long-right',
			'icofont-scroll-long-up',
			'icofont-scroll-right',
			'icofont-scroll-up',
			'icofont-simple-down',
			'icofont-simple-left-down',
			'icofont-simple-left-up',
			'icofont-simple-left',
			'icofont-simple-right-down',
			'icofont-simple-right-up',
			'icofont-simple-right',
			'icofont-simple-up',
			'icofont-square-down',
			'icofont-square-left',
			'icofont-square-right',
			'icofont-square-up',
			'icofont-stylish-down',
			'icofont-stylish-left',
			'icofont-stylish-right',
			'icofont-stylish-up',
			'icofont-swoosh-down',
			'icofont-swoosh-left',
			'icofont-swoosh-right',
			'icofont-swoosh-up',
			'icofont-thin-double-left',
			'icofont-thin-double-right',
			'icofont-thin-down',
			'icofont-thin-left',
			'icofont-thin-right',
			'icofont-thin-up',
		];

		$icon_tab['dt-directional-icofont'] = array(
			'name'      => 'dt-directional-icofont',
			'label'     => esc_html__( 'Ico Font - Directional', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-hand-up',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorDirectionalIcoFont::instance();