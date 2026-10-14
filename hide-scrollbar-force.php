<?php
/**
 * Plugin Name:       Hide Scrollbar Force
 * Plugin URI:        [https://wordpress.org/plugins/hide-scrollbar-force/](https://wordpress.org/plugins/hide-scrollbar-force/)
 * Description:       Hides the scrollbar on your WordPress site while keeping the scroll functionality intact.
 * Version:           1.4.1
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Author:            Saeed Tosifyan
 * Author URI:        [https://linkedin.com/in/saeedtx](https://linkedin.com/in/saeedtx)
 * License:           GPLv2 or later
 * License URI:       [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)
 * Text Domain:       hide-scrollbar-force
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'hide_scrollbar_force_enqueue_styles' ) ) {
	/**
	 * Enqueue inline CSS to hide browser scrollbars on the frontend.
	 */
	function hide_scrollbar_force_enqueue_styles() {
		// Allow developers to conditionally disable the scrollbar hiding.
		if ( ! apply_filters( 'hide_scrollbar_force_enabled', true ) ) {
			return;
		}

		wp_register_style( 'hide-scrollbar-force-style', false, array(), '1.4.1' );
		wp_enqueue_style( 'hide-scrollbar-force-style' );

		$custom_css = 'html,body{-ms-overflow-style:none!important;scrollbar-width:none!important}html::-webkit-scrollbar,body::-webkit-scrollbar{display:none!important;width:0!important;height:0!important}';

		wp_add_inline_style( 'hide-scrollbar-force-style', $custom_css );
	}
	add_action( 'wp_enqueue_scripts', 'hide_scrollbar_force_enqueue_styles', 999 );
}
