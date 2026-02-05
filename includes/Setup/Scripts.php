<?php
/**
 * Scripts and Styles Loader
 *
 * @package    Boilerplate
 * @subpackage Boilerplate/Includes/Setup
 */
namespace Boilerplate\Setup;

defined('WPINC') or die("No direct access"); // Exit if accessed directly

class Scripts
{
    /**
     * Enqueue the scripts and styles for the plugin.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {
        
        // Enqueue the main script for the plugin
        wp_enqueue_script('boilerplate-script', BOILERPLATE_URL . '/assets/js/script.js', array('jquery'), '1.0.0', false);

    }
}