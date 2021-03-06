<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorFoodIcoFont {

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
				'icofont-apple',
				'icofont-arabian-coffee',
				'icofont-artichoke',
				'icofont-asparagus',
				'icofont-avocado',
				'icofont-baby-food',
				'icofont-banana',
				'icofont-bbq',
				'icofont-beans',
				'icofont-beer',
				'icofont-bell-pepper-capsicum',
				'icofont-birthday-cake',
				'icofont-bread',
				'icofont-broccoli',
				'icofont-burger',
				'icofont-cabbage',
				'icofont-carrot',
				'icofont-cauli-flower',
				'icofont-cheese',
				'icofont-chef',
				'icofont-cherry',
				'icofont-chicken-fry',
				'icofont-chicken',
				'icofont-cocktail',
				'icofont-coconut-water',
				'icofont-coconut',
				'icofont-coffee-alt',
				'icofont-coffee-cup',
				'icofont-coffee-mug',
				'icofont-coffee-pot',
				'icofont-cola',
				'icofont-corn',
				'icofont-croissant',
				'icofont-crop-plant',
				'icofont-cucumber',
				'icofont-culinary',
				'icofont-cup-cake',
				'icofont-dining-table',
				'icofont-donut',
				'icofont-egg-plant',
				'icofont-egg-poached',
				'icofont-farmer-alt',
				'icofont-farmer',
				'icofont-fast-food',
				'icofont-food-basket',
				'icofont-food-cart',
				'icofont-fork-and-knife',
				'icofont-french-fries',
				'icofont-fruits',
				'icofont-grapes',
				'icofont-honey',
				'icofont-hot-dog',
				'icofont-ice-cream-alt',
				'icofont-ice-cream',
				'icofont-juice',
				'icofont-ketchup',
				'icofont-kiwi',
				'icofont-layered-cake',
				'icofont-lemon-alt',
				'icofont-lemon',
				'icofont-lobster',
				'icofont-mango',
				'icofont-milk',
				'icofont-mushroom',
				'icofont-noodles',
				'icofont-onion',
				'icofont-orange',
				'icofont-pear',
				'icofont-peas',
				'icofont-pepper',
				'icofont-pie-alt',
				'icofont-pie',
				'icofont-pineapple',
				'icofont-pizza-slice',
				'icofont-pizza',
				'icofont-plant',
				'icofont-popcorn',
				'icofont-potato',
				'icofont-pumpkin',
				'icofont-raddish',
				'icofont-restaurant-menu',
				'icofont-restaurant',
				'icofont-salt-and-pepper',
				'icofont-sandwich',
				'icofont-sausage',
				'icofont-soft-drinks',
				'icofont-soup-bowl',
				'icofont-spoon-and-fork',
				'icofont-steak',
				'icofont-strawberry',
				'icofont-sub-sandwich',
				'icofont-sushi',
				'icofont-taco',
				'icofont-tea-pot',
				'icofont-tea',
				'icofont-tomato',
				'icofont-watermelon',
				'icofont-wheat',				
			];

		$icon_tab['dt-food-icofont'] = array(
			'name'      => 'dt-food-icofont',
			'label'     => esc_html__( 'Ico Font - Food', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-steak',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0.1' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorFoodIcoFont::instance();