<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorSocialIcoFont {

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
			'icofont-500px',
			'icofont-aim',
			'icofont-badoo',
			'icofont-baidu-tieba',
			'icofont-bbm-messenger',
			'icofont-bebo',
			'icofont-behance',
			'icofont-blogger',
			'icofont-bootstrap',
			'icofont-brightkite',
			'icofont-cloudapp',
			'icofont-concrete5',
			'icofont-delicious',
			'icofont-designbump',
			'icofont-designfloat',
			'icofont-deviantart',
			'icofont-digg',
			'icofont-dotcms',
			'icofont-dribbble',
			'icofont-dribble',
			'icofont-dropbox',
			'icofont-ebuddy',
			'icofont-ello',
			'icofont-ember',
			'icofont-envato',
			'icofont-evernote',
			'icofont-facebook-messenger',
			'icofont-facebook',
			'icofont-feedburner',
			'icofont-flikr',
			'icofont-folkd',
			'icofont-foursquare',
			'icofont-friendfeed',
			'icofont-ghost',
			'icofont-github',
			'icofont-gnome',
			'icofont-google-buzz',
			'icofont-google-hangouts',
			'icofont-google-map',
			'icofont-google-plus',
			'icofont-google-talk',
			'icofont-hype-machine',
			'icofont-instagram',
			'icofont-kakaotalk',
			'icofont-kickstarter',
			'icofont-kik',
			'icofont-kiwibox',
			'icofont-line-messenger',
			'icofont-line',
			'icofont-linkedin',
			'icofont-linux-mint',
			'icofont-live-messenger',
			'icofont-livejournal',
			'icofont-magento',
			'icofont-meetme',
			'icofont-meetup',
			'icofont-mixx',
			'icofont-newsvine',
			'icofont-nimbuss',
			'icofont-odnoklassniki',
			'icofont-opencart',
			'icofont-oscommerce',
			'icofont-pandora',
			'icofont-photobucket',
			'icofont-picasa',
			'icofont-pinterest',
			'icofont-prestashop',
			'icofont-qik',
			'icofont-qq',
			'icofont-readernaut',
			'icofont-reddit',
			'icofont-renren',
			'icofont-rss',
			'icofont-shopify',
			'icofont-silverstripe',
			'icofont-skype',
			'icofont-slack',
			'icofont-slashdot',
			'icofont-slidshare',
			'icofont-smugmug',
			'icofont-snapchat',
			'icofont-soundcloud',
			'icofont-spotify',
			'icofont-stack-exchange',
			'icofont-stack-overflow',
			'icofont-steam',
			'icofont-stumbleupon',
			'icofont-tagged',
			'icofont-technorati',
			'icofont-telegram',
			'icofont-tinder',
			'icofont-trello',
			'icofont-tumblr',
			'icofont-twitch',
			'icofont-twitter',
			'icofont-typo3',
			'icofont-ubercart',
			'icofont-viber',
			'icofont-viddler',
			'icofont-vimeo',
			'icofont-vine',
			'icofont-virb',
			'icofont-virtuemart',
			'icofont-vk',
			'icofont-wechat',
			'icofont-weibo',
			'icofont-whatsapp',
			'icofont-xing',
			'icofont-yahoo',
			'icofont-yelp',
			'icofont-youku',
			'icofont-youtube',
			'icofont-zencart',                  
		];

		$icon_tab['dt-social-icofont'] = array(
			'name'      => 'dt-social-icofont',
			'label'     => esc_html__( 'Ico Font - Social', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-wechat',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0.1' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorSocialIcoFont::instance();