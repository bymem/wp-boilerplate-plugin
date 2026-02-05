<?php
/**
 * Endpoints setup, registering custom endpoints and query vars
 *
 * @package    Boilerplate
 * @subpackage Boilerplate/Includes/Setup
 */
namespace Boilerplate\Setup;

defined('WPINC') or die("No direct access"); // Exit if accessed directly

class Endpoints
{

    public function register_endpoints()
    {

        /**
         * Defining the custom endpoint.
         * If more variables are needed, add more like the function
         * remember to add to add_query_vars also
         * see https://codex.wordpress.org/Rewrite_API/add_rewrite_rule  
         */
        add_rewrite_rule('ui-test/?$', 'index.php?plugin_view=view_boilerplate_ui_test', 'top');

    }

    public function add_query_vars($vars)
    {

        /**
         * Defining the custom endpoint variables
         */
        $vars[] = 'plugin_view';
        return $vars;
    }

}