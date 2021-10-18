<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorFileTypeIcoFont {

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
			'icofont-file-alt',
			'icofont-file-audio',
			'icofont-file-avi-mp4',
			'icofont-file-bmp',
			'icofont-file-code',
			'icofont-file-css',
			'icofont-file-document',
			'icofont-file-eps',
			'icofont-file-excel',
			'icofont-file-exe',
			'icofont-file-file',
			'icofont-file-flv',
			'icofont-file-gif',
			'icofont-file-html5',
			'icofont-file-image',
			'icofont-file-iso',
			'icofont-file-java',
			'icofont-file-javascript',
			'icofont-file-jpg',
			'icofont-file-midi',
			'icofont-file-mov',
			'icofont-file-mp3',
			'icofont-file-pdf',
			'icofont-file-php',
			'icofont-file-png',
			'icofont-file-powerpoint',
			'icofont-file-presentation',
			'icofont-file-psb',
			'icofont-file-psd',
			'icofont-file-python',
			'icofont-file-ruby',
			'icofont-file-spreadsheet',
			'icofont-file-sql',
			'icofont-file-svg',
			'icofont-file-text',
			'icofont-file-tiff',
			'icofont-file-video',
			'icofont-file-wave',
			'icofont-file-wmv',
			'icofont-file-word',
			'icofont-file-zip',                  
        ];

		$icon_tab['dt-file-type-icofont'] = array(
			'name'      => 'dt-file-type-icofont',
			'label'     => esc_html__( 'Ico Font - File Type', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-file-java',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorFileTypeIcoFont::instance();