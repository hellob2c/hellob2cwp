<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorSportIcoFont {

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
			'icofont-badminton-birdie',
			'icofont-baseball',
			'icofont-baseballer',
			'icofont-basketball-hoop',
			'icofont-basketball',
			'icofont-billiard-ball',
			'icofont-boot-alt-1',
			'icofont-boot-alt-2',
			'icofont-boot',
			'icofont-bowling-alt',
			'icofont-bowling',
			'icofont-canoe',
			'icofont-cheer-leader',
			'icofont-climbing',
			'icofont-corner',
			'icofont-field-alt',
			'icofont-field',
			'icofont-football-alt',
			'icofont-football-american',
			'icofont-football',
			'icofont-foul',
			'icofont-goal-keeper',
			'icofont-goal',
			'icofont-golf-alt',
			'icofont-golf-bag',
			'icofont-golf-cart',
			'icofont-golf-field',
			'icofont-golf',
			'icofont-golfer',
			'icofont-helmet',
			'icofont-hockey-alt',
			'icofont-hockey',
			'icofont-ice-skate',
			'icofont-jersey-alt',
			'icofont-jersey',
			'icofont-jumping',
			'icofont-kick',
			'icofont-leg',
			'icofont-match-review',
			'icofont-medal-sport',
			'icofont-offside',
			'icofont-olympic-logo',
			'icofont-olympic',
			'icofont-padding',
			'icofont-penalty-card',
			'icofont-racer',
			'icofont-racing-car',
			'icofont-racing-flag-alt',
			'icofont-racing-flag',
			'icofont-racings-wheel',
			'icofont-referee',
			'icofont-refree-jersey',
			'icofont-result-sport',
			'icofont-rugby-ball',
			'icofont-rugby-player',
			'icofont-rugby',
			'icofont-runner-alt-1',
			'icofont-runner-alt-2',
			'icofont-runner',
			'icofont-score-board',
			'icofont-skiing-man',
			'icofont-skydiving-goggles',
			'icofont-snow-mobile',
			'icofont-steering',
			'icofont-stopwatch',
			'icofont-substitute',
			'icofont-swimmer',
			'icofont-table-tennis',
			'icofont-team-alt',
			'icofont-team',
			'icofont-tennis-player',
			'icofont-tennis',
			'icofont-tracking',
			'icofont-trophy-alt',
			'icofont-trophy',
			'icofont-volleyball-alt',
			'icofont-volleyball-fire',
			'icofont-volleyball',
			'icofont-water-bottle',
			'icofont-whistle-alt',
			'icofont-whistle',
			'icofont-win-trophy',                  
		];

		$icon_tab['dt-sport-icofont'] = array(
			'name'      => 'dt-sport-icofont',
			'label'     => esc_html__( 'Ico Font - Sport', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-bowling-alt',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorSportIcoFont::instance();