<?php
/**
 * The SCSS injector class
 *
 * @package    Boilerplate
 * @subpackage Boilerplate/Includes/Setup
 */
namespace Boilerplate\Setup;

defined('WPINC') or die("No direct access"); // Exit if accessed directly

class Plugin_SCSS
{

    public function get_plugin_scss($scss_args)
    {

        $scss_args['dirs'][] = BOILERPLATE_DIR . '/assets/scss/';
        $scss_args['files'][] = BOILERPLATE_DIR . '/assets/scss/_imports.scss';

        return $scss_args;

    }

}