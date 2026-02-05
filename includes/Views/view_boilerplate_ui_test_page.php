<?php
/**
 * The file that defines the view function
 *
 * @package    Boilerplate
 * @subpackage Boilerplate/Includes/Views
 */
namespace Boilerplate\Views;

defined('WPINC') or die("No direct access"); // Exit if accessed directly

function view_boilerplate_ui_test_page()
{

    /**
     * Define scripts that will be added to the page
     */
    // $scripts = array(
    //     'test-script' => dirname(plugin_dir_url(dirname(__FILE__))) . '/assets/scripts/boilerplate.js',
    // );

    /**
     * Include the template file, the function will deterinmin if
     * the call was made with ajax or regular
     */
    // include_template_file( BOILERPLATE_DIR . '/templates/page-boilerplate.php', $scripts);

    require_once BOILERPLATE_DIR . '/templates/view-boilerplate.php';
    die;

}