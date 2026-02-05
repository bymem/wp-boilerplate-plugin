<?php
/**
* Plugin Name: WP Boilerplate
* Plugin URI: https://simpledigital.dk
* Description: A Boilerplate plugin
* Version: 4.0.0
* Author: Simple Digital ApS - Mikkel Erbs-Madsen
* Author URI: https://simpledigital.dk
* Text Domain: boilerplate
* Domain Path: /languages
* Requires at least: 6.0
* Requires PHP: 8.0
* Requires Plugins: configuration
*
* @package Boilerplate
*/
defined('WPINC') or die("No direct access"); // Exit if accessed directly

// Define constants
define('BOILERPLATE_DIR', plugin_dir_path(__FILE__));
define('BOILERPLATE_URL', plugin_dir_url(__FILE__));

// Load the autoloader
require_once BOILERPLATE_DIR . 'autoloader.php';

use Boilerplate\Plugin;

// Initialize the plugin
if (class_exists('Boilerplate\Plugin')) {
    $plugin = new Plugin();
    $plugin->run();
} else {
    // Handle the error if the class does not exist
    echo 'Boilerplate plugin class not found, cannot initialize.';
}