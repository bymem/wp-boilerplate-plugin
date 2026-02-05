<?php
/**
 * The file that defines the pages class
 * And loads the view functions
 *
 * @package    Boilerplate
 * @subpackage Boilerplate/Includes/Helpers
 */
namespace Boilerplate\Helpers;

defined('WPINC') or die("No direct access"); // Exit if accessed directly

use function Boilerplate\Views\view_boilerplate_ui_test_page;

class Views
{

    public function load_views($original_template)
    {

        /**
         * Switch based on the function passed in the endpoint  
         */
        switch (get_query_var('plugin_view')) {
            case 'view_boilerplate_ui_test':
                require_once BOILERPLATE_DIR . 'includes/Views/view_boilerplate_ui_test_page.php';

                view_boilerplate_ui_test_page();
                break;

            // Always return the original template
            default:
                return $original_template;
                break;
                
        }

    }

}