<?php
/**
 * Plugin Name: Backdrop Custom Theme
 * Author: Benjamin Lu
 * Author URI: https://benjlu.com
 * Description: Backdrop Custom Theme
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path: /languages
 * Text Domain: backdrop-custom-theme
 * Requires PHP: 7.4
 * Requires CP: 1.4
 * Version: 1.0.0
 *
 * @package     Backdrop Post Types
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( file_exists( plugin_dir_path( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once plugin_dir_path( __FILE__ ) . '/vendor/autoload.php';
}

require_once plugin_dir_path( __FILE__ ) . '/src/framework.php';
require_once plugin_dir_path( __FILE__ ) . '/src/functions-update.php';
