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

// Bail if Customizer config base class does not exist.
if ( ! class_exists( 'Astra_Customizer_Config_Base' ) ) {
	return;
}

/**
 * Register Builder Customizer Configurations.
 *
 * @since x.x.x
 */
class Astra_Customizer_Header_Builder_Configs extends Astra_Customizer_Config_Base {

	/**
	 * Header desktop components.
	 *
	 * @var array
	 * @since x.x.x
	 */
	public static $header_desktop_items = array(
		'logo'     => array(
			'name'    => 'Logo',
			'icon'    => 'admin-appearance',
			'section' => 'title_tagline',
		),
		'menu-1'   => array(
			'name'    => 'Primary Menu',
			'icon'    => 'menu',
			'section' => 'section-hb-menu-1',
		),
		'menu-2'   => array(
			'name'    => 'Secondary Menu',
			'icon'    => 'menu',
			'section' => 'section-hb-menu-2',
		),
		'search'   => array(
			'name'    => 'Search',
			'icon'    => 'search',
			'section' => 'section-hb-search',
		),
		'button-1' => array(
			'name'    => 'Button 1',
			'icon'    => 'admin-links',
			'section' => 'section-hb-button-1',
		),
		'social'   => array(
			'name'    => 'Social',
			'icon'    => 'share',
			'section' => 'section-header-social-icons',
		),
		'html-1'   => array(
			'name'    => 'HTML 1',
			'icon'    => 'text',
			'section' => 'section-hb-html-1',
		),
		'html-2'   => array(
			'name'    => 'HTML 2',
			'icon'    => 'text',
			'section' => 'section-hb-html-2',
		),
	);

	/**
	 * Header mobile components.
	 *
	 * @var array
	 * @since x.x.x
	 */
	public static $header_mobile_items = array(
		'logo'           => array(
			'name'    => 'Logo',
			'icon'    => 'admin-appearance',
			'section' => 'title_tagline',
		),
		'menu-1'         => array(
			'name'    => 'Mobile Menu',
			'icon'    => 'menu',
			'section' => 'section-hb-menu-1',
		),
		'menu-2'         => array(
			'name'    => 'Mobile Navigation',
			'icon'    => 'menu',
			'section' => 'section-hb-menu-2',
		),
		'search'         => array(
			'name'    => 'Search',
			'icon'    => 'search',
			'section' => 'section-hb-search',
		),
		'button-1'       => array(
			'name'    => 'Button 1',
			'icon'    => 'admin-links',
			'section' => 'section-hb-button-1',
		),
		'social'         => array(
			'name'    => 'Social',
			'icon'    => 'share',
			'section' => 'section-header-social-icons',
		),
		'html-1'         => array(
			'name'    => 'HTML 1',
			'icon'    => 'text',
			'section' => 'section-hb-html-1',
		),
		'html-2'         => array(
			'name'    => 'HTML 2',
			'icon'    => 'text',
			'section' => 'section-hb-html-2',
		),
		'mobile-trigger' => array(
			'name'    => 'Trigger',
			'icon'    => 'menu-alt',
			'section' => 'section-header-mobile-trigger',
		),
	);


	/**
	 * Register Builder Customizer Configurations.
	 *
	 * @param Array                $configurations Astra Customizer Configurations.
	 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
	 * @since x.x.x
	 * @return Array Astra Customizer Configurations with updated configurations.
	 */
	public function register_configuration( $configurations, $wp_customize ) {

		$pro_header_desktop_items = array(
			'button-2' => array(
				'name'    => 'Button 2',
				'icon'    => 'admin-links',
				'section' => 'section-hb-button-2',
			),
			'html-3'   => array(
				'name'    => 'HTML 3',
				'icon'    => 'text',
				'section' => 'section-hb-html-3',
			),
			'html-4'   => array(
				'name'    => 'HTML 4',
				'icon'    => 'text',
				'section' => 'section-hb-html-4',
			),
			'widget-1' => array(
				'name'    => 'Widget 1',
				'icon'    => 'wordpress',
				'section' => 'sidebar-widgets-header-widget-1',
			),
			'widget-2' => array(
				'name'    => 'Widget 2',
				'icon'    => 'wordpress',
				'section' => 'sidebar-widgets-header-widget-2',
			),
			'widget-3' => array(
				'name'    => 'Widget 3',
				'icon'    => 'wordpress',
				'section' => 'sidebar-widgets-header-widget-3',
			),
			'widget-4' => array(
				'name'    => 'Widget 4',
				'icon'    => 'wordpress',
				'section' => 'sidebar-widgets-header-widget-4',
			),
		);

		$pro_header_mobile_items = array(
			'button-2' => array(
				'name'    => 'Button 2',
				'icon'    => 'admin-links',
				'section' => 'section-hb-button-2',
			),
			'html-3'   => array(
				'name'    => 'HTML 3',
				'icon'    => 'text',
				'section' => 'section-hb-html-3',
			),
			'html-4'   => array(
				'name'    => 'HTML 4',
				'icon'    => 'text',
				'section' => 'section-hb-html-4',
			),
			'widget-1' => array(
				'name'    => 'Widget 1',
				'icon'    => 'wordpress',
				'section' => 'sidebar-widgets-header-widget-1',
			),
			'widget-2' => array(
				'name'    => 'Widget 2',
				'icon'    => 'wordpress',
				'section' => 'sidebar-widgets-header-widget-2',
			),
			'widget-3' => array(
				'name'    => 'Widget 3',
				'icon'    => 'wordpress',
				'section' => 'sidebar-widgets-header-widget-3',
			),
			'widget-4' => array(
				'name'    => 'Widget 4',
				'icon'    => 'wordpress',
				'section' => 'sidebar-widgets-header-widget-4',
			),
		);

		self::$header_desktop_items = array_merge( self::$header_desktop_items, $pro_header_desktop_items );

		self::$header_mobile_items = array_merge( self::$header_mobile_items, $pro_header_mobile_items );

		$_configs = array(

			/*
			* Header Builder section
			*/
			array(
				'name'     => 'section-header-builder',
				'type'     => 'section',
				'priority' => 5,
				'title'    => __( 'Header Builder', 'astra-builder' ),
				'panel'    => 'panel-header-builder-group',
			),

			/**
			 * Option: Header Layout
			 */
			array(
				'name'     => 'section-header-builder-layout',
				'type'     => 'section',
				'priority' => 0,
				'title'    => __( 'Header Layout', 'astra-builder' ),
				'panel'    => 'panel-header-builder-group',
			),

			/**
			 * Option: Header Builder Tabs
			 */
			array(
				'name'        => ASTRA_THEME_SETTINGS . '[builder-header-tabs]',
				'section'     => 'section-header-builder-layout',
				'type'        => 'control',
				'control'     => 'ast-builder-header-control',
				'priority'    => 0,
				'description' => '',
			),

			/**
			 * Option: Header Builder
			 */
			array(
				'name'        => ASTRA_THEME_SETTINGS . '[builder-header]',
				'section'     => 'section-header-builder',
				'type'        => 'control',
				'control'     => 'ast-builder-header-control',
				'priority'    => 10,
				'description' => '',
			),

			/**
			 * Option: Header Desktop Items.
			 */
			array(
				'name'            => ASTRA_THEME_SETTINGS . '[header-desktop-items]',
				'section'         => 'section-header-builder',
				'type'            => 'control',
				'control'         => 'ast-builder',
				'title'           => __( 'Header Builder', 'astra-builder' ),
				'priority'        => 25,
				'default'         => astra_get_option( 'header-desktop-items' ),
				'choices'         => self::$header_desktop_items,
				'transport'       => 'postMessage',
				'partial'         => array(
					'selector'            => '#masthead',
					'container_inclusive' => false,
					'render_callback'     => array( Astra_Builder_Header::get_instance(), 'header_builder_markup' ),
				),
				'input_attrs'     => array(
					'group'  => ASTRA_THEME_SETTINGS . '[header-desktop-items]',
					'rows'   => array( 'above', 'primary', 'below' ),
					'zones'  => array(
						'above'   => array(
							'above_left'         => 'Top - Left',
							'above_left_center'  => 'Top - Left Center',
							'above_center'       => 'Top - Center',
							'above_right_center' => 'Top - Right Center',
							'above_right'        => 'Top - Right',
						),
						'primary' => array(
							'primary_left'         => 'Main - Left',
							'primary_left_center'  => 'Main - Left Center',
							'primary_center'       => 'Main - Center',
							'primary_right_center' => 'Main - Right Center',
							'primary_right'        => 'Main - Right',
						),
						'below'   => array(
							'below_left'         => 'Bottom - Left',
							'below_left_center'  => 'Bottom - Left Center',
							'below_center'       => 'Bottom - Center',
							'below_right_center' => 'Bottom - Right Center',
							'below_right'        => 'Bottom - Right',
						),
					),
					'status' => array(
						'above'   => true,
						'primary' => true,
						'below'   => true,
					),
				),
				'active_callback' => '__return_true',
				'context'         => array(
					array(
						'setting' => 'ast_selected_device',
						'value'   => 'desktop',
					),
				),
			),

			/**
			 * Header Desktop Available draggable items.
			 */
			array(
				'name'        => ASTRA_THEME_SETTINGS . '[header-desktop-draggable-items]',
				'section'     => 'section-header-builder-layout',
				'type'        => 'control',
				'control'     => 'ast-draggable-items',
				'priority'    => 30,
				'input_attrs' => array(
					'group' => ASTRA_THEME_SETTINGS . '[header-desktop-items]',
					'zones' => array( 'above', 'primary', 'below' ),
				),
				'context'     => array(
					array(
						'setting' => 'ast_selected_device',
						'value'   => 'desktop',
					),
					array(
						'setting' => 'ast_selected_tab',
						'value'   => 'general',
					),
				),
			),

			/**
			 * Option: Header Mobile Items.
			 */
			array(
				'name'            => ASTRA_THEME_SETTINGS . '[header-mobile-items]',
				'section'         => 'section-header-builder',
				'type'            => 'control',
				'control'         => 'ast-builder',
				'title'           => __( 'Header Builder', 'astra-builder' ),
				'priority'        => 35,
				'default'         => astra_get_option( 'header-mobile-items' ),
				'choices'         => self::$header_mobile_items,
				'transport'       => 'postMessage',
				'partial'         => array(
					'selector'            => '#main-header',
					'container_inclusive' => false,
					'render_callback'     => array( 'Astra_Builder_Header', 'mobile_header' ),
				),
				'input_attrs'     => array(
					'group'  => ASTRA_THEME_SETTINGS . '[header-mobile-items]',
					'rows'   =>
						array( 'popup', 'above', 'primary', 'below' ),
					'zones'  =>
						array(
							'popup'   =>
								array(
									'popup_content' => 'Popup Content',
								),
							'above'   =>
								array(
									'above_left'   => 'Top - Left',
									'above_center' => 'Top - Center',
									'above_right'  => 'Top - Right',
								),
							'primary' =>
								array(
									'primary_left'   => 'Main - Left',
									'primary_center' => 'Main - Center',
									'primary_right'  => 'Main - Right',
								),
							'below'   =>
								array(
									'below_left'   => 'Bottom - Left',
									'below_center' => 'Bottom - Center',
									'below_right'  => 'Bottom - Right',
								),
						),
					'status' => array(
						'above'   => true,
						'primary' => true,
						'below'   => true,
					),
				),
				'active_callback' => '__return_true',
				'context'         => array(
					array(
						'setting'  => 'ast_selected_device',
						'operator' => 'in',
						'value'    => array( 'tablet', 'mobile' ),
					),
				),
			),

			/**
			 * Header Mobile Available draggable items.
			 */
			array(
				'name'        => ASTRA_THEME_SETTINGS . '[header-mobile-draggable-items]',
				'section'     => 'section-header-builder-layout',
				'type'        => 'control',
				'control'     => 'ast-draggable-items',
				'input_attrs' => array(
					'group' => ASTRA_THEME_SETTINGS . '[header-mobile-items]',
					'zones' => array( 'popup', 'above', 'primary', 'below' ),
				),
				'priority'    => 43,
				'context'     => array(
					array(
						'setting'  => 'ast_selected_device',
						'operator' => 'in',
						'value'    => array( 'tablet', 'mobile' ),
					),
					array(
						'setting' => 'ast_selected_tab',
						'value'   => 'general',
					),
				),
			),

			/**
			 * Option: Blog Color Section heading
			 */
			array(
				'name'     => ASTRA_THEME_SETTINGS . '[header-transparent-link-heading]',
				'type'     => 'control',
				'control'  => 'ast-heading',
				'section'  => 'section-header-builder-layout',
				'title'    => __( 'Header Types', 'astra-builder' ),
				'priority' => 44,
				'settings' => array(),
				'context'  => array(
					array(
						'setting' => 'ast_selected_tab',
						'value'   => 'general',
					),
				),
			),

			/**
			 * Option: Header Transparant
			 */
			array(
				'name'        => ASTRA_THEME_SETTINGS . '[header-transparant-link]',
				'section'     => 'section-header-builder-layout',
				'type'        => 'control',
				'control'     => 'ast-header-type-button',
				'input_attrs' => array(
					'section' => 'section-transparent-header',
					'label'   => esc_html__( 'Transparent Header', 'astra-builder' ),
				),
				'priority'    => 45,
				'context'     => array(
					array(
						'setting' => 'ast_selected_tab',
						'value'   => 'general',
					),
				),
				'settings'    => false,
			),

			// Option: Header Width.
			array(
				'name'      => ASTRA_THEME_SETTINGS . '[hb-header-main-layout-width]',
				'default'   => astra_get_option( 'hb-header-main-layout-width' ),
				'type'      => 'control',
				'control'   => 'select',
				'section'   => 'section-header-builder-layout',
				'priority'  => 4,
				'title'     => __( 'Width', 'astra-builder' ),
				'choices'   => array(
					'full'    => __( 'Full Width', 'astra-builder' ),
					'content' => __( 'Content Width', 'astra-builder' ),
				),
				'context'   => array(
					array(
						'setting' => 'ast_selected_tab',
						'value'   => 'design',
					),
					array(
						'setting' => 'ast_selected_device',
						'value'   => 'desktop',
					),
				),
				'transport' => 'postMessage',
			),
		);

		$_configs = array_merge( $_configs, Astra_Builder_Base_Configuration::prepare_advanced_tab( 'section-header-builder-layout' ) );

		if ( defined( 'ASTRA_EXT_VER' ) ) {
			/**
			 * Option: Header Transparant
			 */
			$_configs[] = array(
				'name'        => ASTRA_THEME_SETTINGS . '[header-sticky-link]',
				'section'     => 'section-header-builder-layout',
				'type'        => 'control',
				'control'     => 'ast-header-type-button',
				'input_attrs' => array(
					'section' => 'section-sticky-header',
					'label'   => esc_html__( 'Sticky Header', 'astra-builder' ),
				),
				'priority'    => 45,
				'context'     => array(
					array(
						'setting' => 'ast_selected_tab',
						'value'   => 'general',
					),
				),
				'settings'    => false,
			);
		}

		return array_merge( $configurations, $_configs );
	}
}

/**
 * Kicking this off by creating object of this class.
 */
if ( class_exists( 'Astra_Customizer_Config_Base' ) ) {
	new Astra_Customizer_Header_Builder_Configs();
}
