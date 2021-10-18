<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorAnimalIcoFont {

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
			'icofont-bat',
			'icofont-bear-face',
			'icofont-bear-tracks',
			'icofont-bear',
			'icofont-bird-alt',
			'icofont-bird-flying',
			'icofont-bird',
			'icofont-birds',
			'icofont-bone',
			'icofont-bull',
			'icofont-butterfly-alt',
			'icofont-butterfly',
			'icofont-camel-alt',
			'icofont-camel-head',
			'icofont-camel',
			'icofont-cat-alt-1',
			'icofont-cat-alt-2',
			'icofont-cat-alt-3',
			'icofont-cat-dog',
			'icofont-cat-face',
			'icofont-cat',
			'icofont-cow-head',
			'icofont-cow',
			'icofont-crab',
			'icofont-crocodile',
			'icofont-deer-head',
			'icofont-dog-alt',
			'icofont-dog-barking',
			'icofont-dog',
			'icofont-dolphin',
			'icofont-duck-tracks',
			'icofont-eagle-head',
			'icofont-eaten-fish',
			'icofont-elephant-alt',
			'icofont-elephant-head-alt',
			'icofont-elephant-head',
			'icofont-elephant',
			'icofont-elk',
			'icofont-fish-1',
			'icofont-fish-2',
			'icofont-fish-3',
			'icofont-fish-4',
			'icofont-fish-5',
			'icofont-fish',
			'icofont-fox-alt',
			'icofont-fox',
			'icofont-frog-tracks',
			'icofont-frog',
			'icofont-froggy',
			'icofont-giraffe-head-1',
			'icofont-giraffe-head-2',
			'icofont-giraffe-head',
			'icofont-giraffe',
			'icofont-goat-head',
			'icofont-gorilla',
			'icofont-hen-tracks',
			'icofont-horse-head-1',
			'icofont-horse-head-2',
			'icofont-horse-head',
			'icofont-horse-tracks',
			'icofont-jellyfish',
			'icofont-kangaroo',
			'icofont-lemur',
			'icofont-lion-head-1',
			'icofont-lion-head-2',
			'icofont-lion-head',
			'icofont-lion',
			'icofont-monkey-2',
			'icofont-monkey-3',
			'icofont-monkey-face',
			'icofont-monkey',
			'icofont-octopus-alt',
			'icofont-octopus',
			'icofont-owl',
			'icofont-panda-face',
			'icofont-panda',
			'icofont-panther',
			'icofont-parrot-lip',
			'icofont-parrot',
			'icofont-paw',
			'icofont-pelican',
			'icofont-penguin',
			'icofont-pig-face',
			'icofont-pig',
			'icofont-pigeon-1',
			'icofont-pigeon-2',
			'icofont-pigeon',
			'icofont-rabbit',
			'icofont-rat',
			'icofont-rhino-head',
			'icofont-rhino',
			'icofont-rooster',
			'icofont-seahorse',
			'icofont-seal',
			'icofont-shrimp-alt',
			'icofont-shrimp',
			'icofont-snail-1',
			'icofont-snail-2',
			'icofont-snail-3',
			'icofont-snail',
			'icofont-snake',
			'icofont-squid',
			'icofont-squirrel',
			'icofont-tiger-face',
			'icofont-tiger',
			'icofont-turtle',
			'icofont-whale',
			'icofont-woodpecker',
			'icofont-zebra',                  
		];

		$icon_tab['dt-animal-icofont'] = array(
			'name'      => 'dt-animal-icofont',
			'label'     => esc_html__( 'Ico Font - Animal', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-paw',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0.1' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorAnimalIcoFont::instance();