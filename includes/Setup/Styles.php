<?php
/**
 * Scripts and Styles Loader
 *
 * @package    Boilerplate
 * @subpackage Boilerplate/Includes/Setup
 */
namespace Boilerplate\Setup;

defined('WPINC') or die("No direct access"); // Exit if accessed directly

class Styles
{
    /**
     * Enqueue the styles for the plugin.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {
        
        // Enqueue the main style for the plugin
        wp_enqueue_style('boilerplate-style', BOILERPLATE_URL . 'assets/css/style.css', '', '1.0.0');

    }
}