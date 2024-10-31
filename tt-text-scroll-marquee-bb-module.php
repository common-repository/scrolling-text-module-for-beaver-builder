<?php
/**
 * Plugin Name: Scrolling Text Module for Beaver Builder
 * Plugin URI: https://wordpress.org/plugins/scrolling-text-module-for-beaver-builder/
 * Description: Custom Beaver Builder module to create a scrolling text area or marquee.
 * Version: 2.0
 * Author: Terrier Tenacity
 * Author URI: https://terriertenacity.com
 */

define( 'TT_MODULE_SCROLL_DIR', plugin_dir_path( __FILE__ ) );
define( 'TT_MODULE_SCROLL_URL', plugins_url( '/', __FILE__ ) );

require_once TT_MODULE_SCROLL_DIR . 'classes/tt-text-scroll-marquee-bb-module.php';