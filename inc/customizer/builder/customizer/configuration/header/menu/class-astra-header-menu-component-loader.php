<?php
/**
 * Menu Styling Loader for Astra theme.
 *
 * @package     astra-builder
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       x.x.x
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Customizer Initialization
 *
 * @since x.x.x
 */
class Astra_Header_Menu_Component_Loader {

	/**
	 * Constructor
	 *
	 * @since x.x.x
	 */
	public function __construct() {

		add_action( 'customize_register', array( $this, 'customize_register' ), 2 );
		add_action( 'customize_preview_init', array( $this, 'preview_scripts' ), 110 );
		// Load Google fonts.
		add_action( 'astra_get_fonts', array( $this, 'add_fonts' ), 1 );
	}

	/**
	 * Enqueue google fonts.
	 *
	 * @since x.x.x
	 */
	public function add_fonts() {

		for ( $index = 1; $index <= Astra_Constants::$num_of_header_menu; $index++ ) {

			$_prefix = 'menu' . $index;

			$menu_font_family = astra_get_option( 'header-' . $_prefix . '-font-family' );
			$menu_font_weight = astra_get_option( 'header-' . $_prefix . '-font-weight' );
		}

		Astra_Fonts::add_font( $menu_font_family, $menu_font_weight );
	}

	/**
	 * Load color configs for the Heading Colors.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 *
	 * @since x.x.x
	 */
	public function customize_register( $wp_customize ) {

		/**
		 * Register Panel & Sections
		 */
		require_once ASTRA_HEADER_MENU_DIR . '/class-astra-header-menu-component-configs.php';
	}

	/**
	 * Customizer Preview
	 *
	 * @since x.x.x
	 */
	public function preview_scripts() {
		/**
		 * Load unminified if SCRIPT_DEBUG is true.
		 */
		/* Directory and Extension */
		$dir_name    = ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';
		$file_prefix = ( SCRIPT_DEBUG ) ? '' : '.min';
		wp_enqueue_script( 'astra-heading-menu-customizer-preview-js', ASTRA_HEADER_MENU_URI . '/assets/js/customizer-preview.js', array( 'customize-preview', 'astra-customizer-preview-js' ), ASTRA_THEME_VERSION, true );

		// Localize variables for Menu JS.
		wp_localize_script(
			'astra-heading-menu-customizer-preview-js',
			'AstraBuilderMenuData',
			array(
				'header_menu_count' => Astra_Constants::$num_of_header_menu,
			)
		);
	}
}

/**
*  Kicking this off by creating the object of the class.
*/
new Astra_Header_Menu_Component_Loader();
