<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorBrandIcoFont {

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
			'icofont-brand-acer',
			'icofont-brand-adidas',
			'icofont-brand-adobe',
			'icofont-brand-air-new-zealand',
			'icofont-brand-airbnb',
			'icofont-brand-aircell',
			'icofont-brand-airtel',
			'icofont-brand-alcatel',
			'icofont-brand-alibaba',
			'icofont-brand-aliexpress',
			'icofont-brand-alipay',
			'icofont-brand-amazon',
			'icofont-brand-amd',
			'icofont-brand-american-airlines',
			'icofont-brand-android-robot',
			'icofont-brand-android',
			'icofont-brand-aol',
			'icofont-brand-apple',
			'icofont-brand-appstore',
			'icofont-brand-asus',
			'icofont-brand-ati',
			'icofont-brand-att',
			'icofont-brand-audi',
			'icofont-brand-axiata',
			'icofont-brand-bada',
			'icofont-brand-bbc',
			'icofont-brand-bing',
			'icofont-brand-blackberry',
			'icofont-brand-bmw',
			'icofont-brand-box',
			'icofont-brand-burger-king',
			'icofont-brand-business-insider',
			'icofont-brand-buzzfeed',
			'icofont-brand-cannon',
			'icofont-brand-casio',
			'icofont-brand-china-mobile',
			'icofont-brand-china-telecom',
			'icofont-brand-china-unicom',
			'icofont-brand-cisco',
			'icofont-brand-citibank',
			'icofont-brand-cnet',
			'icofont-brand-cnn',
			'icofont-brand-cocal-cola',
			'icofont-brand-compaq',
			'icofont-brand-debian',
			'icofont-brand-delicious',
			'icofont-brand-dell',
			'icofont-brand-designbump',
			'icofont-brand-designfloat',
			'icofont-brand-disney',
			'icofont-brand-dodge',
			'icofont-brand-dove',
			'icofont-brand-drupal',
			'icofont-brand-ebay',
			'icofont-brand-eleven',
			'icofont-brand-emirates',
			'icofont-brand-espn',
			'icofont-brand-etihad-airways',
			'icofont-brand-etisalat',
			'icofont-brand-etsy',
			'icofont-brand-fastrack',
			'icofont-brand-fedex',
			'icofont-brand-ferrari',
			'icofont-brand-fitbit',
			'icofont-brand-flikr',
			'icofont-brand-forbes',
			'icofont-brand-foursquare',
			'icofont-brand-foxconn',
			'icofont-brand-fujitsu',
			'icofont-brand-general-electric',
			'icofont-brand-gillette',
			'icofont-brand-gizmodo',
			'icofont-brand-gnome',
			'icofont-brand-google',
			'icofont-brand-gopro',
			'icofont-brand-gucci',
			'icofont-brand-hallmark',
			'icofont-brand-hi5',
			'icofont-brand-honda',
			'icofont-brand-hp',
			'icofont-brand-hsbc',
			'icofont-brand-htc',
			'icofont-brand-huawei',
			'icofont-brand-hulu',
			'icofont-brand-hyundai',
			'icofont-brand-ibm',
			'icofont-brand-icofont',
			'icofont-brand-icq',
			'icofont-brand-ikea',
			'icofont-brand-imdb',
			'icofont-brand-indiegogo',
			'icofont-brand-intel',
			'icofont-brand-ipair',
			'icofont-brand-jaguar',
			'icofont-brand-java',
			'icofont-brand-joomla',
			'icofont-brand-kickstarter',
			'icofont-brand-kik',
			'icofont-brand-lastfm',
			'icofont-brand-lego',
			'icofont-brand-lenovo',
			'icofont-brand-levis',
			'icofont-brand-lexus',
			'icofont-brand-lg',
			'icofont-brand-life-hacker',
			'icofont-brand-linux-mint',
			'icofont-brand-linux',
			'icofont-brand-lionix',
			'icofont-brand-loreal',
			'icofont-brand-louis-vuitton',
			'icofont-brand-mac-os',
			'icofont-brand-marvel-app',
			'icofont-brand-mashable',
			'icofont-brand-mazda',
			'icofont-brand-mcdonals',
			'icofont-brand-mercedes',
			'icofont-brand-micromax',
			'icofont-brand-microsoft',
			'icofont-brand-mobileme',
			'icofont-brand-mobily',
			'icofont-brand-motorola',
			'icofont-brand-msi',
			'icofont-brand-mts',
			'icofont-brand-myspace',
			'icofont-brand-mytv',
			'icofont-brand-nasa',
			'icofont-brand-natgeo',
			'icofont-brand-nbc',
			'icofont-brand-nescafe',
			'icofont-brand-nestle',
			'icofont-brand-netflix',
			'icofont-brand-nexus',
			'icofont-brand-nike',
			'icofont-brand-nokia',
			'icofont-brand-nvidia',
			'icofont-brand-omega',
			'icofont-brand-opensuse',
			'icofont-brand-oracle',
			'icofont-brand-panasonic',
			'icofont-brand-paypal',
			'icofont-brand-pepsi',
			'icofont-brand-philips',
			'icofont-brand-pizza-hut',
			'icofont-brand-playstation',
			'icofont-brand-puma',
			'icofont-brand-qatar-air',
			'icofont-brand-qvc',
			'icofont-brand-readernaut',
			'icofont-brand-redbull',
			'icofont-brand-reebok',
			'icofont-brand-reuters',
			'icofont-brand-samsung',
			'icofont-brand-sap',
			'icofont-brand-saudia-airlines',
			'icofont-brand-scribd',
			'icofont-brand-shell',
			'icofont-brand-siemens',
			'icofont-brand-sk-telecom',
			'icofont-brand-slideshare',
			'icofont-brand-smashing-magazine',
			'icofont-brand-snapchat',
			'icofont-brand-sony-ericsson',
			'icofont-brand-sony',
			'icofont-brand-soundcloud',
			'icofont-brand-sprint',
			'icofont-brand-squidoo',
			'icofont-brand-starbucks',
			'icofont-brand-stc',
			'icofont-brand-steam',
			'icofont-brand-suzuki',
			'icofont-brand-symbian',
			'icofont-brand-t-mobile',
			'icofont-brand-tango',
			'icofont-brand-target',
			'icofont-brand-tata-indicom',
			'icofont-brand-techcrunch',
			'icofont-brand-telenor',
			'icofont-brand-teliasonera',
			'icofont-brand-tesla',
			'icofont-brand-the-verge',
			'icofont-brand-thenextweb',
			'icofont-brand-toshiba',
			'icofont-brand-toyota',
			'icofont-brand-tribenet',
			'icofont-brand-ubuntu',
			'icofont-brand-unilever',
			'icofont-brand-vaio',
			'icofont-brand-verizon',
			'icofont-brand-viber',
			'icofont-brand-vodafone',
			'icofont-brand-volkswagen',
			'icofont-brand-walmart',
			'icofont-brand-warnerbros',
			'icofont-brand-whatsapp',
			'icofont-brand-wikipedia',
			'icofont-brand-windows',
			'icofont-brand-wire',
			'icofont-brand-wordpress',
			'icofont-brand-xiaomi',
			'icofont-brand-yahoobuzz',
			'icofont-brand-yamaha',
			'icofont-brand-youtube',
			'icofont-brand-zain',                  
		];

		$icon_tab['dt-brand-icofont'] = array(
			'name'      => 'dt-brand-icofont',
			'label'     => esc_html__( 'Ico Font - Brand', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-brand-wordpress',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorBrandIcoFont::instance();