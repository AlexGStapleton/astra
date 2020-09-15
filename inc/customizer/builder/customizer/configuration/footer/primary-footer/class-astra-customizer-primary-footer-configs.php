<?php
/**
 * Astra Theme Customizer Configuration Builder.
 *
 * @package     astra-builder
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       x.x.x
 */

// No direct access, please.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'Astra_Customizer_Config_Base' ) ) {

	/**
	 * Register Builder Customizer Configurations.
	 *
	 * @since x.x.x
	 */
	class Astra_Customizer_Primary_Footer_Configs extends Astra_Customizer_Config_Base {

		/**
		 * Register Builder Customizer Configurations.
		 *
		 * @param Array                $configurations Astra Customizer Configurations.
		 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
		 * @since x.x.x
		 * @return Array Astra Customizer Configurations with updated configurations.
		 */
		public function register_configuration( $configurations, $wp_customize ) {

			$defaults = Astra_Theme_Options::defaults();

			$_section = 'section-primary-footer-builder';

			$_configs = array(

				// Section: Primary Footer.
				array(
					'name'     => $_section,
					'type'     => 'section',
					'title'    => __( 'Primary Footer', 'astra-builder', 'astra' ),
					'panel'    => 'panel-footer-builder-group',
					'priority' => 20,
				),

				/**
				 * Option: Footer Builder Tabs
				 */
				array(
					'name'        => ASTRA_THEME_SETTINGS . '[builder-footer-primary-tabs]',
					'section'     => $_section,
					'type'        => 'control',
					'control'     => 'ast-builder-header-control',
					'priority'    => 0,
					'description' => '',
				),

				/**
				 * Option: Column count
				 */
				array(
					'name'      => ASTRA_THEME_SETTINGS . '[hb-footer-column]',
					'default'   => astra_get_option( 'hb-footer-column' ),
					'type'      => 'control',
					'control'   => 'select',
					'section'   => $_section,
					'priority'  => 2,
					'title'     => __( 'Column', 'astra-builder', 'astra' ),
					'choices'   => array(
						'1' => __( '1', 'astra-builder', 'astra' ),
						'2' => __( '2', 'astra-builder', 'astra' ),
						'3' => __( '3', 'astra-builder', 'astra' ),
						'4' => __( '4', 'astra-builder', 'astra' ),
						'5' => __( '5', 'astra-builder', 'astra' ),
					),
					'context'   => array(
						array(
							'setting' => 'ast_selected_tab',
							'value'   => 'general',
						),
					),
					'transport' => 'postMessage',
					'partial'   => array(
						'selector'            => '.site-primary-footer-wrap',
						'container_inclusive' => false,
						'render_callback'     => array( Astra_Builder_Footer::get_instance(), 'primary_footer' ),
					),
				),

				/**
				 * Option: Row Layout
				 */
				array(
					'name'        => ASTRA_THEME_SETTINGS . '[hb-footer-layout]',
					'section'     => $_section,
					'default'     => astra_get_option( 'hb-footer-layout' ),
					'priority'    => 3,
					'title'       => __( 'Layout', 'astra-builder', 'astra' ),
					'type'        => 'control',
					'control'     => 'ast-row-layout',
					'context'     => array(
						array(
							'setting' => 'ast_selected_tab',
							'value'   => 'general',
						),
					),
					'input_attrs' => array(
						'responsive' => true,
						'footer'     => 'primary',
					),
					'transport'   => 'postMessage',
				),

				// Section: Primary Footer Layout Divider.
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[hb-footer-layout-options-separator-divider]',
					'section'  => $_section,
					'priority' => 20,
					'type'     => 'control',
					'control'  => 'ast-divider',
					'settings' => array(),
					'context'  => array(
						array(
							'setting' => 'ast_selected_tab',
							'value'   => 'general',
						),
					),
				),

				/**
				 * Option: Layout Width
				 */
				array(
					'name'      => ASTRA_THEME_SETTINGS . '[hb-footer-layout-width]',
					'default'   => astra_get_option( 'hb-footer-layout-width' ),
					'type'      => 'control',
					'control'   => 'select',
					'section'   => $_section,
					'priority'  => 25,
					'title'     => __( 'Width', 'astra-builder', 'astra' ),
					'choices'   => array(
						'full'    => __( 'Full Width', 'astra-builder', 'astra' ),
						'content' => __( 'Content Width', 'astra-builder', 'astra' ),
					),
					'context'   => array(
						array(
							'setting' => 'ast_selected_tab',
							'value'   => 'general',
						),
					),
					'transport' => 'postMessage',
				),

				/**
				 * Option: Vertical Alignment
				 */
				array(
					'name'      => ASTRA_THEME_SETTINGS . '[hb-footer-vertical-alignment]',
					'default'   => astra_get_option( 'hb-footer-vertical-alignment' ),
					'type'      => 'control',
					'control'   => 'select',
					'section'   => $_section,
					'priority'  => 30,
					'title'     => __( 'Vertical Alignment', 'astra-builder', 'astra' ),
					'choices'   => array(
						'flex-start' => __( 'Top', 'astra-builder', 'astra' ),
						'center'     => __( 'Middle', 'astra-builder', 'astra' ),
						'flex-end'   => __( 'Bottom', 'astra-builder', 'astra' ),
					),
					'context'   => array(
						array(
							'setting' => 'ast_selected_tab',
							'value'   => 'general',
						),
					),
					'transport' => 'postMessage',
				),

				// Option: Footer Separator.
				array(
					'name'        => ASTRA_THEME_SETTINGS . '[hb-footer-main-sep]',
					'transport'   => 'postMessage',
					'default'     => astra_get_option( 'hb-footer-main-sep' ),
					'type'        => 'control',
					'control'     => 'ast-slider',
					'section'     => $_section,
					'priority'    => 4,
					'title'       => __( 'Bottom Border', 'astra-builder', 'astra' ),
					'input_attrs' => array(
						'min'  => 0,
						'step' => 1,
						'max'  => 600,
					),
					'context'     => array(
						array(
							'setting' => 'ast_selected_tab',
							'value'   => 'design',
						),
					),
				),

				// Option: Footer Bottom Boder Color.
				array(
					'name'      => ASTRA_THEME_SETTINGS . '[hb-footer-main-sep-color]',
					'transport' => 'postMessage',
					'default'   => astra_get_option( 'hb-footer-main-sep-color' ),
					'type'      => 'control',
					'required'  => array( ASTRA_THEME_SETTINGS . '[hb-footer-main-sep]', '>=', 1 ),
					'control'   => 'ast-color',
					'section'   => $_section,
					'priority'  => 5,
					'title'     => __( 'Bottom Border Color', 'astra-builder', 'astra' ),
					'context'   => array(
						array(
							'setting' => 'ast_selected_tab',
							'value'   => 'design',
						),
					),
				),

				// Option: Primary Footer color and background divider.
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[hb-footer-colors-and-background-divider]',
					'type'     => 'control',
					'control'  => 'ast-heading',
					'section'  => $_section,
					'title'    => __( 'Background Color & Image', 'astra-builder', 'astra' ),
					'priority' => 6,
					'settings' => array(),
					'context'  => array(
						array(
							'setting' => 'ast_selected_tab',
							'value'   => 'design',
						),
					),
				),

				// Group Option: Footer Background.
				array(
					'name'      => ASTRA_THEME_SETTINGS . '[hb-footer-background-group]',
					'default'   => astra_get_option( 'hb-footer-background-group' ),
					'type'      => 'control',
					'control'   => 'ast-settings-group',
					'title'     => __( 'Background', 'astra-builder', 'astra' ),
					'section'   => $_section,
					'transport' => 'postMessage',
					'priority'  => 7,
					'context'   => array(
						array(
							'setting' => 'ast_selected_tab',
							'value'   => 'design',
						),
					),
				),

				// Sub Option: Footer Background.
				array(
					'name'       => 'hb-footer-bg-obj-responsive',
					'parent'     => ASTRA_THEME_SETTINGS . '[hb-footer-background-group]',
					'section'    => $_section,
					'type'       => 'sub-control',
					'control'    => 'ast-responsive-background',
					'transport'  => 'postMessage',
					'data_attrs' => array(
						'name' => 'hb-footer-bg-obj-responsive',
					),
					'default'    => $defaults['hb-footer-bg-obj-responsive'],
					'label'      => __( 'Background', 'astra-builder', 'astra' ),
					'context'    => array(
						array(
							'setting' => 'ast_selected_tab',
							'value'   => 'design',
						),
					),
				),
			);

			$_configs = array_merge( $_configs, Astra_Builder_Base_Configuration::prepare_advanced_tab( $_section ) );

			return array_merge( $configurations, $_configs );
		}
	}

	/**
	 * Kicking this off by creating object of this class.
	 */
	new Astra_Customizer_Primary_Footer_Configs();
}
