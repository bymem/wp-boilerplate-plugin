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
 * @subpackage Boilerplate/Includes/Admin/Helpers
 */
namespace Boilerplate\Admin\Helpers;

defined('WPINC') or die("No direct access"); // Exit if accessed directly
class UpdateClient
{
    public function register_with_support(): void
    {
        // This just fires once on 'init'
        if (has_action('sd_support/updater')) {
            do_action('sd_support/updater', [
                'type' => 'plugin',
                'slug' => 'boilerplate',
                'file' => BOILERPLATE_FILE,
            ]);
        }
    }
}