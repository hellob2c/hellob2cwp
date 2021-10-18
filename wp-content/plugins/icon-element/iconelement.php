<?php
/**
 * Plugin Name: Icon Element
 * Plugin URI:  https://codecanyon.net/user/xldevelopment
 * Description: Google Material Design Icons for Elementor Icons Control
 * Version:     1.0.0
 * Author:      Ashraf
 * Author URI:  http://webangon.com/
 * Text Domain: icon-element
 * License:     GPL-3.0+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die();
}

if ( ! class_exists( 'Icon_Element_Icons' ) ) {

	class Icon_Element_Icons {

		private static $instance = null;

		private $version = '1.0.0';

		private $plugin_url = null;

		private $plugin_path = null;

		public function __construct() {

			// Internationalize the text strings used.
			add_action( 'init', array( $this, 'lang' ), -999 );

			// Init required modules.
			add_action( 'init', array( $this, 'init' ), -999 );
		}

		public function get_version() {
			return $this->version;
		}

		public function init() {
			if ( ! $this->has_elementor() ) {
				return;
			}

			Icon_Element_Icons_Integration::get_instance();
		}

		public function has_elementor() {
			return did_action( 'elementor/loaded' );
		}

		public function elementor() {
			return \Elementor\Plugin::instance();
		}

		public function lang() {
			load_plugin_textdomain( 'icon-element', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
		}

		public static function get_instance() {
			// If the single instance hasn't been set, set it now.
			if ( null == self::$instance ) {
				self::$instance = new self;
				self::$instance->icon_element_constant();
			}
			return self::$instance;
		}

        private function icon_element_constant() {

            // Plugin Folder Path
            if (!defined('ICON_ELEM_DIR')) {
                define('ICON_ELEM_DIR', plugin_dir_path(__FILE__));
            }

            // Plugin Folder URL
            if (!defined('ICON_ELEM_URL')) {
                define('ICON_ELEM_URL', plugin_dir_url(__FILE__));
            }

            require_once ICON_ELEM_DIR . 'admin/options.php';
            require_once ICON_ELEM_DIR . 'admin/inc/sunrise.php';
            require_once ICON_ELEM_DIR . 'includes/integration.php';

        }		

	}
}

if ( ! function_exists( 'Icon_Element_Icons' ) ) {

	/**
	 * Returns instance of the plugin class.
	 *
	 * @since  1.0.0
	 * @return Icon_Element_Icons
	 */
	function Icon_Element_Icons() {
		return Icon_Element_Icons::get_instance();
	}
}

Icon_Element_Icons();
