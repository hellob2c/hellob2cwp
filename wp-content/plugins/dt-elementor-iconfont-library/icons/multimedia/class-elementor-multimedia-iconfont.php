<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorMultimediaIcoFont {

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
			'icofont-cassette-player',
			'icofont-cassette',
			'icofont-forward',
			'icofont-guiter',
			'icofont-movie',
			'icofont-multimedia',
			'icofont-music-alt',
			'icofont-music-disk',
			'icofont-music-note',
			'icofont-music-notes',
			'icofont-music',
			'icofont-mute-volume',
			'icofont-pause',
			'icofont-play-alt-1',
			'icofont-play-alt-2',
			'icofont-play-alt-3',
			'icofont-play-pause',
			'icofont-play',
			'icofont-record',
			'icofont-retro-music-disk',
			'icofont-rewind',
			'icofont-song-notes',
			'icofont-sound-wave-alt',
			'icofont-sound-wave',
			'icofont-stop',
			'icofont-video-alt',
			'icofont-video-cam',
			'icofont-video-clapper',
			'icofont-video',
			'icofont-volume-bar',
			'icofont-volume-down',
			'icofont-volume-mute',
			'icofont-volume-off',
			'icofont-volume-up',
			'icofont-youtube-play',			
 		];

		$icon_tab['dt-multimedia-icofont'] = array(
			'name'      => 'dt-multimedia-icofont',
			'label'     => esc_html__( 'Ico Font - Multimedia', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-guiter',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorMultimediaIcoFont::instance();