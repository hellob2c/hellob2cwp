<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorEducationIcoFont {

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
			'icofont-abc',
			'icofont-atom',
			'icofont-award',
			'icofont-bell-alt',
			'icofont-black-board',
			'icofont-book-alt',
			'icofont-book',
			'icofont-brainstorming',
			'icofont-certificate-alt-1',
			'icofont-certificate-alt-2',
			'icofont-certificate',
			'icofont-education',
			'icofont-electron',
			'icofont-fountain-pen',
			'icofont-globe-alt',
			'icofont-graduate-alt',
			'icofont-graduate',
			'icofont-group-students',
			'icofont-hat-alt',
			'icofont-hat',
			'icofont-instrument',
			'icofont-lamp-light',
			'icofont-medal',
			'icofont-microscope-alt',
			'icofont-microscope',
			'icofont-paper',
			'icofont-pen-alt-4',
			'icofont-pen-nib',
			'icofont-pencil-alt-5',
			'icofont-quill-pen',
			'icofont-read-book-alt',
			'icofont-read-book',
			'icofont-school-bag',
			'icofont-school-bus',
			'icofont-student-alt',
			'icofont-student',
			'icofont-teacher',
			'icofont-test-bulb',
			'icofont-test-tube-alt',
			'icofont-university',
 		];

		$icon_tab['dt-education-icofont'] = array(
			'name'      => 'dt-education-icofont',
			'label'     => esc_html__( 'Ico Font - Education', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-group-students',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorEducationIcoFont::instance();