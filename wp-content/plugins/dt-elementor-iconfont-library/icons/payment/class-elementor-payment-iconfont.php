<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class DTElementorPaymentIcoFont {

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
            'icofont-2checkout-alt',
            'icofont-2checkout',
            'icofont-amazon-alt',
            'icofont-amazon',
            'icofont-american-express-alt',
            'icofont-american-express',
            'icofont-apple-pay-alt',
            'icofont-apple-pay',
            'icofont-bank-transfer-alt',
            'icofont-bank-transfer',
            'icofont-braintree-alt',
            'icofont-braintree',
            'icofont-cash-on-delivery-alt',
            'icofont-cash-on-delivery',
            'icofont-diners-club-alt-1',
            'icofont-diners-club-alt-2',
            'icofont-diners-club-alt-3',
            'icofont-diners-club',
            'icofont-discover-alt',
            'icofont-discover',
            'icofont-eway-alt',
            'icofont-eway',
            'icofont-google-wallet-alt-1',
            'icofont-google-wallet-alt-2',
            'icofont-google-wallet-alt-3',
            'icofont-google-wallet',
            'icofont-jcb-alt',
            'icofont-jcb',
            'icofont-maestro-alt',
            'icofont-maestro',
            'icofont-mastercard-alt',
            'icofont-mastercard',
            'icofont-payoneer-alt',
            'icofont-payoneer',
            'icofont-paypal-alt',
            'icofont-paypal',
            'icofont-sage-alt',
            'icofont-sage',
            'icofont-skrill-alt',
            'icofont-skrill',
            'icofont-stripe-alt',
            'icofont-stripe',
            'icofont-visa-alt',
            'icofont-visa-electron',
            'icofont-visa',
            'icofont-western-union-alt',
            'icofont-western-union',
 		];

		$icon_tab['dt-payment-icofont'] = array(
			'name'      => 'dt-payment-icofont',
			'label'     => esc_html__( 'Ico Font - Payment', 'dt-elementor-iconfont-library' ),
			'labelIcon' => 'icofont-paypal',
			'prefix'    => '',
			'url'       => plugin_dir_url( __FILE__ ). 'css/icofont.min.css',
			'icons'     => $icons,
			'ver'       => '1.0' //https://icofont.com/icons
		);

		return $icon_tab;
	}

}

DTElementorPaymentIcoFont::instance();