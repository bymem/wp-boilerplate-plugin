<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 *
 * @package    Boilerplate
 * @subpackage Boilerplate/Includes/Helpers
 */
namespace Boilerplate\Helpers;

defined('WPINC') or die("No direct access"); // Exit if accessed directly
class Language
{

    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {
        
        load_plugin_textdomain(
            'boilerplate',
            false,
            plugin_basename(BOILERPLATE_DIR) . '/languages/'
        );        

    }


}