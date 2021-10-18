<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorTextEditorIcoFont {

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
            'icofont-align-center',
            'icofont-align-left',
            'icofont-align-right',
            'icofont-all-caps',
            'icofont-bold',
            'icofont-brush',
            'icofont-clip-board',
            'icofont-code-alt',
            'icofont-color-bucket',
            'icofont-color-picker',
            'icofont-copy-invert',
            'icofont-copy',
            'icofont-cut',
            'icofont-delete-alt',
            'icofont-edit-alt',
            'icofont-eraser-alt',
            'icofont-font',
            'icofont-heading',
            'icofont-indent',
            'icofont-italic-alt',
            'icofont-italic',
            'icofont-justify-all',
            'icofont-justify-center',
            'icofont-justify-left',
            'icofont-justify-right',
            'icofont-link-broken',
            'icofont-outdent',
            'icofont-paper-clip',
            'icofont-paragraph',
            'icofont-pin',
            'icofont-printer',
            'icofont-redo',
            'icofont-rotation',
            'icofont-save',
            'icofont-small-cap',
            'icofont-strike-through',
            'icofont-sub-listing',
            'icofont-subscript',
            'icofont-superscript',
            'icofont-table',
            'icofont-text-height',
            'icofont-text-width',
            'icofont-trash',
            'icofont-underline',
            'icofont-undo',
 		];

		$icon_tab['dt-text-editor-icofont'] = array(
			'name'      => 'dt-text-editor-icofont',
			'label'     => esc_html__( 'Ico Font - Text Editor', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-text-height',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorTextEditorIcoFont::instance();