<?php
/**
 * Plugin Name: DT Elementor Ico Icon Library
 * Description: Adds Ico Icon library to default Icon Library of Elementor Page Builder.
 * Version: 1.1
 * Author: the DesignThemes team
 * Author URI: https://profiles.wordpress.org/designthemes/
 * License: GPL3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 * Text Domain: dt-elementor-iconfont-library
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * The main class that initiates and runs the plugin.
 */
final class DTElementorIcoIconfontLibrary {

	/**
	 * Minimum Elementor Version
	 */
	const MINIMUM_ELEMENTOR_VERSION = '2.9.0';

	/**
	 * Minimum PHP Version
	 */
	const MINIMUM_PHP_VERSION = '7.0';

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

		add_action( 'init', array( $this, 'i18n' ) );
        add_action( 'plugins_loaded', array( $this, 'init' ) );

        add_action( 'elementor/editor/after_enqueue_styles', array( $this, 'enqueue_styles' ), 999 );

        register_activation_hook( __FILE__ , array( $this , 'activation' ) );
        register_deactivation_hook( __FILE__ , array( $this , 'deactivation' ) );
    }

    public function enqueue_styles() {
        wp_add_inline_style( 'elementor-editor', ".elementor-templates-modal__sidebar { overflow:auto; }");
    }

	/**
	 * Load Textdomain
	 */
	public function i18n() {

        load_plugin_textdomain( 'dt-elementor-iconfont-library', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Initialize the plugin
	 */
	public function init() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', array( $this, 'missing_elementor_plugin' ) );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'minimum_php_version' ) );
			return;
        }
        
        $this->init_icon_set();
    }

	/**
	 * Admin notice
	 * Warning when the site doesn't have Elementor installed or activated.
	 */
	public function missing_elementor_plugin() {

		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'dt-elementor-iconfont-library' ),
			'<strong>' . esc_html__( 'DT Elementor Ico Icon Library', 'dt-elementor-iconfont-library' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'dt-elementor-iconfont-library' ) . '</strong>'			
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	/**
	 * Admin notice
	 * Warning when the site doesn't have a minimum required Elementor version.
	 */
	public function minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'dt-elementor-iconfont-library' ),
			'<strong>' . esc_html__( 'DT Elementor Ico Icon Library', 'dt-elementor-iconfont-library' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'dt-elementor-iconfont-library' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );		
	}

	/**
	 * Admin notice
	 * Warning when the site doesn't have a minimum required PHP version.
	 */
	public function minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'dt-elementor-iconfont-library' ),
			'<strong>' . esc_html__( 'DT Elementor Ico Icon Library', 'dt-elementor-iconfont-library' ) . '</strong>',
            '<strong>' . esc_html__( 'PHP', 'dt-elementor-iconfont-library' ) . '</strong>',
            self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
    }
    
    /**
     * Activation Hook
     */
    public function activation() {}

    /**
     * Deactivation Hook
     */
    public function deactivation() {}

    /**
     * Init Icon Set
     */
    public function init_icon_set() {

		require_once __DIR__ . '/icons/web-app/class-elementor-web-app-iconfont.php';
      	require_once __DIR__ . '/icons/brand/class-elementor-brand-iconfont.php';
      	require_once __DIR__ . '/icons/directional/class-elementor-directional-iconfont.php';
      	require_once __DIR__ . '/icons/social/class-elementor-social-iconfont.php';
      	require_once __DIR__ . '/icons/animal/class-elementor-animal-iconfont.php';
      	require_once __DIR__ . '/icons/currency/class-elementor-currency-iconfont.php';
      	require_once __DIR__ . '/icons/food/class-elementor-food-iconfont.php';
      	require_once __DIR__ . '/icons/mobile-ui/class-elementor-mobile-ui-iconfont.php';
      	require_once __DIR__ . '/icons/sport/class-elementor-sport-iconfont.php';
      	require_once __DIR__ . '/icons/weather/class-elementor-weather-iconfont.php';
      	require_once __DIR__ . '/icons/construction/class-elementor-construction-iconfont.php';
      	require_once __DIR__ . '/icons/medical/class-elementor-medical-iconfont.php';
      	require_once __DIR__ . '/icons/transport/class-elementor-transport-iconfont.php';
      	require_once __DIR__ . '/icons/device/class-elementor-device-iconfont.php';
      	require_once __DIR__ . '/icons/payment/class-elementor-payment-iconfont.php';
      	require_once __DIR__ . '/icons/mathmetical/class-elementor-mathmetical-iconfont.php';
      	require_once __DIR__ . '/icons/text-editor/class-elementor-text-editor-iconfont.php';
      	require_once __DIR__ . '/icons/abstract/class-elementor-abstract-iconfont.php';
	  	require_once __DIR__ . '/icons/file-type/class-elementor-file-type-iconfont.php';
		require_once __DIR__ . '/icons/education/class-elementor-education-iconfont.php';
		require_once __DIR__ . '/icons/law/class-elementor-law-iconfont.php';
		require_once __DIR__ . '/icons/person/class-elementor-person-iconfont.php';
		require_once __DIR__ . '/icons/multimedia/class-elementor-multimedia-iconfont.php';
		require_once __DIR__ . '/icons/business/class-elementor-business-iconfont.php';
		require_once __DIR__ . '/icons/emoticon/class-elementor-emoticon-iconfont.php';
		require_once __DIR__ . '/icons/kids/class-elementor-kids-iconfont.php';
		require_once __DIR__ . '/icons/travel/class-elementor-travel-iconfont.php';
		require_once __DIR__ . '/icons/chart/class-elementor-chart-iconfont.php';
		require_once __DIR__ . '/icons/search/class-elementor-search-iconfont.php';
		require_once __DIR__ . '/icons/fitness/class-elementor-fitness-iconfont.php';
		  
    }
}

DTElementorIcoIconfontLibrary::instance();