<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorMobileUIIcoFont {

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
				'icofont-ui-add',
				'icofont-ui-alarm',
				'icofont-ui-battery',
				'icofont-ui-block',
				'icofont-ui-bluetooth',
				'icofont-ui-brightness',
				'icofont-ui-browser',
				'icofont-ui-calendar',
				'icofont-ui-call',
				'icofont-ui-camera',
				'icofont-ui-cart',
				'icofont-ui-cell-phone',
				'icofont-ui-chat',
				'icofont-ui-check',
				'icofont-ui-clip-board',
				'icofont-ui-clip',
				'icofont-ui-clock',
				'icofont-ui-close',
				'icofont-ui-contact-list',
				'icofont-ui-copy',
				'icofont-ui-cut',
				'icofont-ui-delete',
				'icofont-ui-dial-phone',
				'icofont-ui-edit',
				'icofont-ui-email',
				'icofont-ui-file',
				'icofont-ui-fire-wall',
				'icofont-ui-flash-light',
				'icofont-ui-flight',
				'icofont-ui-folder',
				'icofont-ui-game',
				'icofont-ui-handicapped',
				'icofont-ui-home',
				'icofont-ui-image',
				'icofont-ui-laoding',
				'icofont-ui-lock',
				'icofont-ui-love-add',
				'icofont-ui-love-broken',
				'icofont-ui-love-remove',
				'icofont-ui-love',
				'icofont-ui-map',
				'icofont-ui-message',
				'icofont-ui-messaging',
				'icofont-ui-movie',
				'icofont-ui-music-player',
				'icofont-ui-music',
				'icofont-ui-mute',
				'icofont-ui-network',
				'icofont-ui-next',
				'icofont-ui-note',
				'icofont-ui-office',
				'icofont-ui-password',
				'icofont-ui-pause',
				'icofont-ui-play-stop',
				'icofont-ui-play',
				'icofont-ui-pointer',
				'icofont-ui-power',
				'icofont-ui-press',
				'icofont-ui-previous',
				'icofont-ui-rate-add',
				'icofont-ui-rate-blank',
				'icofont-ui-rate-remove',
				'icofont-ui-rating',
				'icofont-ui-record',
				'icofont-ui-remove',
				'icofont-ui-reply',
				'icofont-ui-rotation',
				'icofont-ui-rss',
				'icofont-ui-search',
				'icofont-ui-settings',
				'icofont-ui-social-link',
				'icofont-ui-tag',
				'icofont-ui-text-chat',
				'icofont-ui-text-loading',
				'icofont-ui-theme',
				'icofont-ui-timer',
				'icofont-ui-touch-phone',
				'icofont-ui-travel',
				'icofont-ui-unlock',
				'icofont-ui-user-group',
				'icofont-ui-user',
				'icofont-ui-v-card',
				'icofont-ui-video-chat',
				'icofont-ui-video-message',
				'icofont-ui-video-play',
				'icofont-ui-video',
				'icofont-ui-volume',
				'icofont-ui-weather',
				'icofont-ui-wifi',
				'icofont-ui-zoom-in',
				'icofont-ui-zoom-out',				
			];

		$icon_tab['dt-mobile-ui-icofont'] = array(
			'name'      => 'dt-mobile-ui-icofont',
			'label'     => esc_html__( 'Ico Font - Mobile UI', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-ui-cell-phone',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0.1' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorMobileUIIcoFont::instance();