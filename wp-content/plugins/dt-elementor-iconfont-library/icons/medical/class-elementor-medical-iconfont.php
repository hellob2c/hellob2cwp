<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorMedicalIcoFont {

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
			'icofont-aids',
			'icofont-ambulance-crescent',
			'icofont-ambulance-cross',
			'icofont-ambulance',
			'icofont-autism',
			'icofont-bandage',
			'icofont-blind',
			'icofont-blood-drop',
			'icofont-blood-test',
			'icofont-blood',
			'icofont-brain-alt',
			'icofont-brain',
			'icofont-capsule',
			'icofont-crutch',
			'icofont-disabled',
			'icofont-dna-alt-1',
			'icofont-dna-alt-2',
			'icofont-dna',
			'icofont-doctor-alt',
			'icofont-doctor',
			'icofont-drug-pack',
			'icofont-drug',
			'icofont-first-aid-alt',
			'icofont-first-aid',
			'icofont-heart-beat-alt',
			'icofont-heart-beat',
			'icofont-heartbeat',
			'icofont-herbal',
			'icofont-hospital',
			'icofont-icu',
			'icofont-injection-syringe',
			'icofont-laboratory',
			'icofont-medical-sign-alt',
			'icofont-medical-sign',
			'icofont-nurse-alt',
			'icofont-nurse',
			'icofont-nursing-home',
			'icofont-operation-theater',
			'icofont-paralysis-disability',
			'icofont-patient-bed',
			'icofont-patient-file',
			'icofont-pills',
			'icofont-prescription',
			'icofont-pulse',
			'icofont-stethoscope-alt',
			'icofont-stethoscope',
			'icofont-stretcher',
			'icofont-surgeon-alt',
			'icofont-surgeon',
			'icofont-tablets',
			'icofont-test-bottle',
			'icofont-test-tube',
			'icofont-thermometer-alt',
			'icofont-thermometer',
			'icofont-tooth',
			'icofont-xray',            
 		];

		$icon_tab['dt-medical-icofont'] = array(
			'name'      => 'dt-medical-icofont',
			'label'     => esc_html__( 'Ico Font - Medical', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-first-aid',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorMedicalIcoFont::instance();