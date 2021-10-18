<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! class_exists( 'Icon_Element_Icons_Integration' ) ) {

	class Icon_Element_Icons_Integration {

		private static $instance = null;

		public function __construct() {
			add_filter( 'elementor/icons_manager/additional_tabs', array( $this, 'add_material_icons_tabs' ) );
		}

		public function add_material_icons_tabs( $tabs = array() ) {

			$tabs['captain'] = array(
				'name'          => 'captain',
				'label'         => esc_html__( 'Captain', 'icon-element' ),
				'labelIcon'     => 'xlcaptain-100',
				'prefix'        => 'xlcaptain-',
				'displayPrefix' => 'xlcpt',
				'url'           => ICON_ELEM_URL . 'assets/captain/captain.css',
				'fetchJson'     => ICON_ELEM_URL . 'assets/captain/fonts/captain.json',
				'ver'           => '3.0.1',
			);

			$tabs['dripicons-icons'] = array(
				'name'          => 'dripicons-icons',
				'label'         => esc_html__( 'Dripicons Icons', 'icon-element' ),
				'labelIcon'     => 'dripicons-alarm',
				'prefix'        => 'dripicons-',
				'displayPrefix' => 'dripicons',
				'url'           => ICON_ELEM_URL . 'assets/dripicons/dripicons.css',
				'fetchJson'     => ICON_ELEM_URL . 'assets/dripicons/fonts/dripicons.json',
				'ver'           => '3.0.1',
			);

			$tabs['ionicons'] = array(
				'name'          => 'ionicons',
				'label'         => esc_html__( 'Ionicons', 'icon-element' ),
				'labelIcon'     => 'ion-ios-appstore',
				'prefix'        => 'ion-',
				'displayPrefix' => 'xlio',
				'url'           => ICON_ELEM_URL . 'assets/ionicons/css/ionicons.css',
				'fetchJson'     => ICON_ELEM_URL . 'assets/ionicons/fonts/ionicons.json',
				'ver'           => '3.0.1',
			);

			$tabs['material-design'] = array(
				'name'          => 'material-design',
				'label'         => esc_html__( 'Material Design Icons', 'icon-element' ),
				'labelIcon'     => 'fab fa-google',
				'prefix'        => 'md-',
				'displayPrefix' => 'material-icons',
				'url'           => ICON_ELEM_URL . 'assets/material-icons/css/material-icons.css', 
				'fetchJson'     => ICON_ELEM_URL . 'assets/material-icons/fonts/material-icons.json',
				'ver'           => '3.0.1',
			);

			$tabs['metrize'] = array(
				'name'          => 'metrize',
				'label'         => esc_html__( 'Metrize', 'icon-element' ),
				'labelIcon'     => 'metriz-yen',
				'prefix'        => 'metriz-',
				'displayPrefix' => 'xlmetriz',
				'url'           => ICON_ELEM_URL . 'assets/metrize/metrize.css',
				'fetchJson'     => ICON_ELEM_URL . 'assets/metrize/fonts/metrize.json',
				'ver'           => '3.0.1',
			);

			$tabs['simpline'] = array(
				'name'          => 'simpline',
				'label'         => esc_html__( 'Simple Line', 'icon-element' ),
				'labelIcon'     => 'simpline-user',
				'prefix'        => 'simpline-',
				'displayPrefix' => 'xlsmpli',
				'url'           => ICON_ELEM_URL . 'assets/simple-line-icons/css/simple-line-icons.css',
				'fetchJson'     => ICON_ELEM_URL . 'assets/simple-line-icons/fonts/simple-line-icons.json',
				'ver'           => '3.0.1',
			);

			$tabs['wppagebuilder'] = array(
				'name'          => 'wppagebuilder',
				'label'         => esc_html__( 'Wp pagebuilder', 'icon-element' ),
				'labelIcon'     => 'wppb-font-balance',
				'prefix'        => 'wppb-font-',
				'displayPrefix' => 'xlwpf',
				'url'           => ICON_ELEM_URL . 'assets/wppagebuilder/wppagebuilder.css',
				'fetchJson'     => ICON_ELEM_URL . 'assets/wppagebuilder/fonts/wppagebuilder.json',
				'ver'           => '3.0.1',
			);

			return $tabs;
		}

		public static function get_instance() {

			if ( null == self::$instance ) {
				self::$instance = new self;
			}
			return self::$instance;
		}
	}

}
