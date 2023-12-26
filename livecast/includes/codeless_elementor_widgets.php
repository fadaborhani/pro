<?php

namespace CODELESS\WidgetsManager;

use Elementor\Plugin;

defined( 'ABSPATH' ) or exit;

/**
 * Set up Widgets Loader class
 */
class Codeless_Widgets_Theme_Loader {

	/**
	 * Instance of Widgets_Loader.
	 *
	 * @since  1.2.0
	 * @var null
	 */
	private static $_instance = null;

	/**
	 * Get instance of Widgets_Loader
	 *
	 * @since  1.2.0
	 * @return Widgets_Loader
	 */
	public static function instance() {
		if ( ! isset( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Setup actions and filters.
	 *
	 * @since  1.2.0
	 */
	private function __construct() {
		// Register widgets.
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );

		// Add svg support.
		add_filter( 'upload_mimes', [ $this, 'svg_mime_types' ] );
	}

	/**
	 * Returns Script array.
	 *
	 * @return array()
	 * @since 1.0.0
	 */
	public static function get_widget_script() {
		$js_files = [
			/*
			Sample Code
			'ce-nav-menu' => [
				'path'      => 'inc/js/ce-nav-menu.js',
				'dep'       => [ 'jquery' ],
				'in_footer' => true,
			],*/
		];

		return $js_files;
	}

	public static function get_widget_styles() {
		$css_files = [
			/*
			Sample code
			'tiny-slider' => [
				'path'      => 'assets/css/lib/tiny-slider.css',
			],*/
		];

		return $css_files;
	}

	/**
	 * Returns Script array.
	 *
	 * @return array()
	 * @since 1.0.0
	 */
	public static function get_widget_list() {
		$header_widget_list = [
			'search',
		];

		$content_widget_list = [
			'player'
		];

		$widget_list = [
			'header' => $header_widget_list,
			'content' => $content_widget_list,
		];

		return $widget_list;
	}

	/**
	 * Include Widgets files
	 *
	 * Load widgets files
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function include_widgets_files() {
		$js_files    = $this->get_widget_script();
		$css_files    = $this->get_widget_styles();
		$widget_list = $this->get_widget_list();

		$header_widget_list = $widget_list['header'];
		$content_widget_list = $widget_list['content'];

		if ( ! empty( $header_widget_list ) ) {
			foreach ( $header_widget_list as $handle => $data ) {
				require_once( get_template_directory() . '/includes/codeless_elementor_widgets/codeless_class_' . $data . '_widget.php');
			}
		}

		if ( ! empty( $content_widget_list ) ) {
			foreach ( $content_widget_list as $handle => $data ) {
				require_once get_template_directory() . '/includes/codeless_elementor_widgets/codeless_class_' . $data . '_widget.php';
			}
		}
	}

	/**
	 * Provide the SVG support for Retina Logo widget.
	 *
	 * @param array $mimes which return mime type.
	 *
	 * @since  1.2.0
	 * @return $mimes.
	 */
	public function svg_mime_types( $mimes ) {
		// New allowed mime types.
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}

	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function register_widgets() {
		// Its is now safe to include Widgets files.
		$this->include_widgets_files();
		//Register Search
		Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Codeless_Search_Widget() );

		Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Codeless_Player_Widget() );
	}
}

/**
 * Initiate the class.
 */
Codeless_Widgets_Theme_Loader::instance();
