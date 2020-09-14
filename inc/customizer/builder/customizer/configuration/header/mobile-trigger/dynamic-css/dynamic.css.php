<?php
/**
 * Mobile Trigger - Dynamic CSS
 *
 * @package astra-builder
 * @since x.x.x
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Mobile Trigger.
 */
add_filter( 'astra_dynamic_theme_css', 'astra_mobile_trigger_row_setting', 11 );

/**
 * Mobile Trigger - Dynamic CSS
 *
 * @param  string $dynamic_css          Astra Dynamic CSS.
 * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
 * @return String Generated dynamic CSS for Heading Colors.
 *
 * @since x.x.x
 */
function astra_mobile_trigger_row_setting( $dynamic_css, $dynamic_css_filtered = '' ) {

	$parse_css = '';

	$_section = 'section-header-mobile-trigger';

	$selector = '[data-section="section-header-mobile-trigger"]';

	$icon_size              = astra_get_option( 'mobile-header-toggle-icon-size' );
	$off_canvas_close_color = astra_get_option( 'off-canvas-close-color' );
	$icon_color             = astra_get_option( 'mobile-header-toggle-btn-color' );
	$trigger_bg             = astra_get_option( 'mobile-header-toggle-btn-bg-color' );
	$trigger_border_width   = astra_get_option( 'mobile-header-toggle-btn-border-size' );
	$trigger_border_color   = astra_get_option( 'mobile-header-toggle-border-color' );
	$trigger_border_radius  = astra_get_option( 'mobile-header-toggle-border-radius' );
	$font_family            = astra_get_option( 'mobile-header-label-font-family' );
	$font_weight            = astra_get_option( 'mobile-header-label-font-weight' );
	$font_size              = astra_get_option( 'mobile-header-label-font-size' );
	$text_transform         = astra_get_option( 'mobile-header-label-text-transform' );
	$line_height            = astra_get_option( 'mobile-header-label-line-height' );

	// Border.
	$trigger_border_width_top = ( isset( $trigger_border_width ) && isset( $trigger_border_width['top'] ) ) ? $trigger_border_width['top'] : 0;

	$trigger_border_width_bottom = ( isset( $trigger_border_width ) && isset( $trigger_border_width['bottom'] ) ) ? $trigger_border_width['bottom'] : 0;

	$trigger_border_width_right = ( isset( $trigger_border_width ) && isset( $trigger_border_width['right'] ) ) ? $trigger_border_width['right'] : 0;

	$trigger_border_width_left = ( isset( $trigger_border_width ) && isset( $trigger_border_width['left'] ) ) ? $trigger_border_width['left'] : 0;

	/**
	 * Off-Canvas CSS.
	 */
	$css_output = array(

		$selector . ' .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg' => array(
			'width'  => astra_get_css_value( $icon_size, 'px' ),
			'height' => astra_get_css_value( $icon_size, 'px' ),
			'fill'   => $icon_color,
		),
		$selector . ' .ast-button-wrap .mobile-menu-wrap .mobile-menu' => array(
			// Color.
			'color'          => $icon_color,

			// Typography.
			'font-family'    => astra_get_css_value( $font_family, 'font' ),
			'font-weight'    => astra_get_css_value( $font_weight, 'font' ),
			'font-size'      => astra_get_css_value( $font_size, 'px' ),
			'line-height'    => esc_attr( $line_height ),
			'text-transform' => esc_attr( $text_transform ),
		),
		$selector . ' .ast-button-wrap .ast-mobile-menu-trigger-fill, ' . $selector . ' .ast-button-wrap .ast-mobile-menu-trigger-minimal' => array(
			// Color & Border.
			'color'  => esc_attr( $icon_color ),
			'border' => 'none',
		),
		$selector . ' .ast-button-wrap .ast-mobile-menu-trigger-outline' => array(
			// Background.
			'background'          => 'transparent',
			'color'               => esc_attr( $icon_color ),
			'border-top-width'    => astra_get_css_value( $trigger_border_width_top, 'px' ),
			'border-bottom-width' => astra_get_css_value( $trigger_border_width_bottom, 'px' ),
			'border-right-width'  => astra_get_css_value( $trigger_border_width_right, 'px' ),
			'border-left-width'   => astra_get_css_value( $trigger_border_width_left, 'px' ),
			'border-style'        => 'solid',
			'border-color'        => $trigger_border_color,
			'border-radius'       => astra_get_css_value( $trigger_border_radius, 'px' ),
		),
		$selector . ' .ast-button-wrap .ast-mobile-menu-trigger-fill' => array(
			'background'    => esc_attr( $trigger_bg ),
			'border-radius' => astra_get_css_value( $trigger_border_radius, 'px' ),
		),
		$selector . ' .ast-button-wrap .ast-mobile-menu-trigger-minimal' => array(
			'background' => 'transparent',
		),
	);

	/* Parse CSS from array() */
	$css_output = astra_parse_css( $css_output );

	$dynamic_css .= $css_output;

	$dynamic_css .= Astra_Builder_Base_Dynamic_CSS::prepare_advanced_margin_css( $_section, $selector . ' .ast-button-wrap .menu-toggle' );

	return $dynamic_css;
}
