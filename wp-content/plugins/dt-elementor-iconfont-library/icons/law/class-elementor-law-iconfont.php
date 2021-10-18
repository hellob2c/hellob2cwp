<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorLawIcoFont {

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
			'icofont-burglar',
			'icofont-cannon-firing',
			'icofont-cc-camera',
			'icofont-cop-badge',
			'icofont-cop',
			'icofont-court-hammer',
			'icofont-court',
			'icofont-finger-print',
			'icofont-gavel',
			'icofont-handcuff-alt',
			'icofont-handcuff',
			'icofont-investigation',
			'icofont-investigator',
			'icofont-jail',
			'icofont-judge',
			'icofont-law-alt-1',
			'icofont-law-alt-2',
			'icofont-law-alt-3',
			'icofont-law-book',
			'icofont-law-document',
			'icofont-law-order',
			'icofont-law-protect',
			'icofont-law-scales',
			'icofont-law',
			'icofont-lawyer-alt-1',
			'icofont-lawyer-alt-2',
			'icofont-lawyer',
			'icofont-legal',
			'icofont-pistol',
			'icofont-police-badge',
			'icofont-police-cap',
			'icofont-police-car-alt-1',
			'icofont-police-car-alt-2',
			'icofont-police-car',
			'icofont-police-hat',
			'icofont-police-van',
			'icofont-police',
			'icofont-thief-alt',
			'icofont-thief',			
 		];

		$icon_tab['dt-law-icofont'] = array(
			'name'      => 'dt-law-icofont',
			'label'     => esc_html__( 'Ico Font - Law', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-law-alt-3',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorLawIcoFont::instance();