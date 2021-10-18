<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorCurrencyIcoFont {

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
			'icofont-afghani-false',
			'icofont-afghani-minus',
			'icofont-afghani-plus',
			'icofont-afghani-true',
			'icofont-afghani',
			'icofont-baht-false',
			'icofont-baht-minus',
			'icofont-baht-plus',
			'icofont-baht-true',
			'icofont-baht',
			'icofont-bitcoin-false',
			'icofont-bitcoin-minus',
			'icofont-bitcoin-plus',
			'icofont-bitcoin-true',
			'icofont-bitcoin',
			'icofont-dollar-flase',
			'icofont-dollar-minus',
			'icofont-dollar-plus',
			'icofont-dollar-true',
			'icofont-dollar',
			'icofont-dong-false',
			'icofont-dong-minus',
			'icofont-dong-plus',
			'icofont-dong-true',
			'icofont-dong',
			'icofont-euro-false',
			'icofont-euro-minus',
			'icofont-euro-plus',
			'icofont-euro-true',
			'icofont-euro',
			'icofont-frank-false',
			'icofont-frank-minus',
			'icofont-frank-plus',
			'icofont-frank-true',
			'icofont-frank',
			'icofont-hryvnia-false',
			'icofont-hryvnia-minus',
			'icofont-hryvnia-plus',
			'icofont-hryvnia-true',
			'icofont-hryvnia',
			'icofont-lira-false',
			'icofont-lira-minus',
			'icofont-lira-plus',
			'icofont-lira-true',
			'icofont-lira',
			'icofont-peseta-false',
			'icofont-peseta-minus',
			'icofont-peseta-plus',
			'icofont-peseta-true',
			'icofont-peseta',
			'icofont-peso-false',
			'icofont-peso-minus',
			'icofont-peso-plus',
			'icofont-peso-true',
			'icofont-peso',
			'icofont-pound-false',
			'icofont-pound-minus',
			'icofont-pound-plus',
			'icofont-pound-true',
			'icofont-pound',
			'icofont-renminbi-false',
			'icofont-renminbi-minus',
			'icofont-renminbi-plus',
			'icofont-renminbi-true',
			'icofont-renminbi',
			'icofont-riyal-false',
			'icofont-riyal-minus',
			'icofont-riyal-plus',
			'icofont-riyal-true',
			'icofont-riyal',
			'icofont-rouble-false',
			'icofont-rouble-minus',
			'icofont-rouble-plus',
			'icofont-rouble-true',
			'icofont-rouble',
			'icofont-rupee-false',
			'icofont-rupee-minus',
			'icofont-rupee-plus',
			'icofont-rupee-true',
			'icofont-rupee',
			'icofont-taka-false',
			'icofont-taka-minus',
			'icofont-taka-plus',
			'icofont-taka-true',
			'icofont-taka',
			'icofont-turkish-lira-false',
			'icofont-turkish-lira-minus',
			'icofont-turkish-lira-plus',
			'icofont-turkish-lira-true',
			'icofont-turkish-lira',
			'icofont-won-false',
			'icofont-won-minus',
			'icofont-won-plus',
			'icofont-won-true',
			'icofont-won',
			'icofont-yen-false',
			'icofont-yen-minus',
			'icofont-yen-plus',
			'icofont-yen-true',
			'icofont-yen',            
		];

		$icon_tab['dt-currency-icofont'] = array(
			'name'      => 'dt-currency-icofont',
			'label'     => esc_html__( 'Ico Font - Currency', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-rupee',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorCurrencyIcoFont::instance();