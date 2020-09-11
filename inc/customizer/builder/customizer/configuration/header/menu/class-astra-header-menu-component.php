<?php
/**
 * Menu for Astra theme.
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

define( 'ASTRA_HEADER_MENU_DIR', ASTRA_THEME_DIR . 'inc/customizer/builder/customizer/configuration/header/menu' );
define( 'ASTRA_HEADER_MENU_URI', ASTRA_THEME_URI . 'inc/builder/customizer/configuration/header/menu' );



if ( ! class_exists( 'Astra_Header_Menu_Component' ) ) {

	/**
	 * Heading Initial Setup
	 *
	 * @since x.x.x
	 */
	class Astra_Header_Menu_Component {

		/**
		 * Constructor function that initializes required actions and hooks
		 */
		public function __construct() {

			require_once ASTRA_HEADER_MENU_DIR . '/class-astra-header-menu-component-loader.php';

			// Include front end files.
			if ( ! is_admin() ) {
				require_once ASTRA_HEADER_MENU_DIR . '/dynamic-css/dynamic.css.php';
			}
		}

		/**
		 * Secondary navigation markup
		 *
		 * @param int $index index.
		 */
		public static function menu_markup( $index ) {

			$theme_location = ( 1 === $index ) ? 'primary' : 'secondary_menu';

			$submenu_class = apply_filters( 'secondary_submenu_border_class', ' submenu-with-border' );

			// Menu Animation.
			$menu_animation = astra_get_option( 'hs-menu' . $index . '-submenu-container-animation' );
			if ( ! empty( $menu_animation ) ) {
				$submenu_class .= ' astra-menu-animation-' . esc_attr( $menu_animation ) . ' ';
			}

			/**
			 * Filter the classes(array) for Menu (<ul>).
			 *
			 * @since  x.x.x
			 * @var Array
			 */
			$menu_classes = apply_filters( 'astra_primary_menu_classes', array( 'main-header-menu', 'ast-nav-menu', 'ast-flex', 'ast-justify-content-flex-end', $submenu_class ) );

			$items_wrap  = '<nav ';
			$items_wrap .= astra_attr(
				'site-navigation',
				array(
					'id'         => 'site-navigation',
					'class'      => 'ast-flex-grow-1 navigation-accessibility site-header-focus-item',
					'aria-label' => esc_attr__( 'Site Navigation', 'astra-builder' ),
				)
			);
			$items_wrap .= '>';
			$items_wrap .= '<div class="main-navigation">';
			$items_wrap .= '<ul id="%1$s" class="%2$s">%3$s</ul>';
			$items_wrap .= '</div>';
			$items_wrap .= '</nav>';

			// Secondary Menu.
			$menu_args = array(
				'menu_id'         => 'ast-hs-menu-' . $index,
				'menu_class'      => esc_attr( implode( ' ', $menu_classes ) ),
				'container'       => 'div',
				'container_class' => 'main-header-bar-navigation',
				'items_wrap'      => $items_wrap,
				'theme_location'  => $theme_location,
			);

			// Fallback Menu if primary menu not set.
			$fallback_menu_args = array(
				'theme_location' => $theme_location,
				'menu_id'        => 'ast-hs-menu-' . $index,
				'menu_class'     => 'main-navigation',
				'container'      => 'div',
				'before'         => '<ul class="' . esc_attr( implode( ' ', $menu_classes ) ) . '">',
				'after'          => '</ul>',
				'walker'         => new Astra_Walker_Page(),
			);

			// To add default alignment for navigation which can be added through any third party plugin.
			// Do not add any CSS from theme except header alignment.
			echo '<div ' . astra_attr( 'ast-main-header-bar-alignment' ) . '>';

			if ( is_customize_preview() ) {
				Astra_Builder_UI_Controller::render_customizer_edit_button();
			}
			if ( has_nav_menu( $theme_location ) ) {
				wp_nav_menu( $menu_args );
			} else {
				echo '<div ' . astra_attr( 'ast-main-header-bar-alignment' ) . '>';
					echo '<div class="main-header-bar-navigation">';
						echo '<nav ';
						echo astra_attr(
							'site-navigation',
							array(
								'id' => 'site-navigation',
							)
						);
						echo ' class="ast-flex-grow-1 navigation-accessibility" aria-label="' . esc_attr__( 'Site Navigation', 'astra' ) . '">';
							wp_page_menu( $fallback_menu_args );
						echo '</nav>';
					echo '</div>';
				echo '</div>';
			}
			echo '</div>';
		}
	}

	/**
	 *  Kicking this off by creating an object.
	 */
	new Astra_Header_Menu_Component();

}
