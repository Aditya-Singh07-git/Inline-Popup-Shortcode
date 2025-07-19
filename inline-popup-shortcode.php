<?php
/*
Plugin Name: Inline Popup Shortcode
Description: A simple shortcode to show popup modals inline on your WordPress pages.
Version: 1.0
Author: Aditya Singh
*/

function ips_enqueue_assets() {
    wp_enqueue_style('ips-style', plugin_dir_url(__FILE__) . 'assets/style.css');
    wp_enqueue_script('ips-script', plugin_dir_url(__FILE__) . 'assets/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ips_enqueue_assets');

function ips_popup_shortcode($atts, $content = null) {
    return '<div class="ips-popup-container"><button class="ips-trigger">Open Popup</button><div class="ips-popup"><span class="ips-close">&times;</span>' . do_shortcode($content) . '</div></div>';
}
add_shortcode('inline_popup', 'ips_popup_shortcode');
