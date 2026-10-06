<?php
/*
Plugin Name: Hide Scrollbar Force
Description: Hides the scrollbar on your WordPress site while keeping the scroll functionality intact.
Version: 1.4
Author: Saeed Tosifyan
Author URI: https://linkedin.com/in/saeedtx
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: hide-scrollbar
Requires at least: 5.0
Requires PHP: 7.0
*/

if (!defined('ABSPATH')) {
    exit;
}

function hide_scrollbar_enqueue_styles() {
    wp_register_style('hide-scrollbar-style', false, array(), '1.4');
    wp_enqueue_style('hide-scrollbar-style');

    $custom_css = "
        html, body {
            -ms-overflow-style: none !important; /* IE & Edge */
            scrollbar-width: none !important;    /* Firefox */
        }
        
        html::-webkit-scrollbar, body::-webkit-scrollbar {
            display: none !important;            /* Chrome, Safari, Opera */
            width: 0 !important;
            height: 0 !important;
        }
    ";
    
    wp_add_inline_style('hide-scrollbar-style', $custom_css);
}

add_action('wp_enqueue_scripts', 'hide_scrollbar_enqueue_styles', 999);