<?php
/**
 * Primary Footer control - Dynamic CSS
 *
 * @package Astra Builder
 * @since x.x.x
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Primary Footer CSS
 */
add_filter( 'astra_dynamic_theme_css', 'astra_fb_primary_footer_dynamic_css' );

/**
 * Dynamic CSS
 *
 * @param  string $dynamic_css          Astra Dynamic CSS.
 * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
 * @return String Generated dynamic CSS for Primary Footer.
 *
 * @since x.x.x
 */
function astra_fb_primary_footer_dynamic_css( $dynamic_css, $dynamic_css_filtered = '' ) {

	if ( ! Astra_Builder_Helper::is_footer_row_empty( 'primary' ) ) {
		return $dynamic_css;
	}

	$_section = 'section-primary-footer-builder';

	$selector = '.site-primary-footer-wrap[data-section="section-primary-footer-builder"]';

	$footer_bg                  = astra_get_option( 'hb-footer-bg-obj-responsive' );
	$global_footer_bg           = astra_get_option( 'footer-bg-obj-responsive' );
	$footer_bottom_border_size  = astra_get_option( 'hb-footer-main-sep' );
	$footer_bottom_border_color = astra_get_option( 'hb-footer-main-sep-color' );
	$footer_width               = astra_get_option( 'hb-footer-main-layout-width' );
	$content_width              = astra_get_option( 'site-content-width' );

	$css_output_desktop = array(

		$selector               => astra_get_responsive_background_obj( $footer_bg, 'desktop' ),
		'.ast-main-footer-wrap' => astra_get_responsive_background_obj( $global_footer_bg, 'desktop' ),
	);

	if ( isset( $footer_bottom_border_size ) && 1 <= $footer_bottom_border_size ) {

		$css_output_desktop[ $selector ]['border-style'] = 'solid';

		$css_output_desktop[ $selector ]['border-bottom-width'] = astra_get_css_value( $footer_bottom_border_size, 'px' );

		$css_output_desktop[ $selector ]['border-bottom-color'] = $footer_bottom_border_color;
	}

	if ( isset( $footer_width ) && 'content' === $footer_width ) {

		$css_output_desktop['.ast-site-footer .site-container']['max-width']    = astra_get_css_value( $content_width, 'px' );
		$css_output_desktop['.ast-site-footer .site-container']['margin-left']  = 'auto';
		$css_output_desktop['.ast-site-footer .site-container']['margin-right'] = 'auto';
	}
	$css_output_tablet = array(

		$selector               => astra_get_responsive_background_obj( $footer_bg, 'tablet' ),
		'.ast-main-footer-wrap' => astra_get_responsive_background_obj( $global_footer_bg, 'tablet' ),
	);
	$css_output_mobile = array(

		$selector               => astra_get_responsive_background_obj( $footer_bg, 'mobile' ),
		'.ast-main-footer-wrap' => astra_get_responsive_background_obj( $global_footer_bg, 'mobile' ),
	);

	/* Parse CSS from array() */
	$css_output  = astra_parse_css( $css_output_desktop );
	$css_output .= astra_parse_css( $css_output_tablet, '', astra_get_tablet_breakpoint() );
	$css_output .= astra_parse_css( $css_output_mobile, '', astra_get_mobile_breakpoint() );

	$dynamic_css .= $css_output;

	$dynamic_css .= Astra_Builder_Base_Dynamic_CSS::prepare_advanced_margin_padding_css( $_section, $selector );

	// Advanced CSS for Header Builder.
	$dynamic_css .= Astra_Builder_Base_Dynamic_CSS::prepare_advanced_margin_padding_css( 'section-footer-builder-layout', '.astra-hfb-header .ast-main-footer-wrap' );

	return $dynamic_css;
}
