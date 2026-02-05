<?php
/**
 * Boilerplate Plugin 
 *
 * @package    Boilerplate
 * @subpackage Boilerplate\Includes
 */
namespace Boilerplate;

defined('WPINC') or die("No direct access"); // Exit if accessed directly

use Boilerplate\Helpers\Loader;
use Boilerplate\Helpers\Language;
use Boilerplate\Helpers\Template;
use Boilerplate\Helpers\Views;

use Boilerplate\Setup\Endpoints;
use Boilerplate\Setup\Plugin_SCSS;
use Boilerplate\Setup\Scripts;
use Boilerplate\Setup\Styles;

use Boilerplate\Admin\Setup\Post_Types;
use Boilerplate\Admin\Setup\Meta_Boxes;

class Plugin {

    /**
     * The loader that's responsible for maintaining and registering
     * all hooks that power the plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      Loader    $loader    Maintains and registers all hooks for the plugin.
     */

    private $loader;

    /**
     * The unique identifier of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The string used to uniquely identify this plugin.
     */    
    private $plugin_name;

    /**
     * The current version of the plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of the plugin.
     */
    private $version;

    /*
     *  
     * 
     */
    private $post_types;

    /**
     * Initialize the plugin by setting the plugin name, version, and loading the dependencies.
     *
     * @since    1.0.0
     */
    public function __construct() {

        $this->plugin_name = 'boilerplate';
        $this->version = '1.0.0';
        $this->post_types = array(
            'boilerplate' => 'Boilerplate',
        );

        /**
         * Load the dependencies for this plugin
         */
        $this->load_dependencies();

        /**
         * Define the locale for this plugin for internationalization.
         */
        $this->set_locale();

        /**
         * Register all of the hooks related to the functionality
         * of the plugin.
         */
        $this->define_frontend_hooks();

        /**
         * Register all of the hooks related to the admin functionality
         * of the plugin.
         */
        $this->define_admin_hooks();

    }

    /**
     * Load the required dependencies for this plugin.
     */
    private function load_dependencies()
    {

        /**
         * Load the loader class
         */
        $this->loader = new Loader();

        /*
         * Autoload View functions
         */
        // foreach (glob(BOILERPLATE_DIR . 'includes/Views/*.php') as $file) {
        //     require_once $file;
        // }

    }


    /**
     * Define the locale for this plugin for internationalization.
     * 
     * @since    1.0.0
     * @access   private
     */
    private function set_locale()
    {

        /**
         * Load the plugin text domain for translation.
         */
        $this->loader->add_action('plugins_loaded', new Language(), 'load_plugin_textdomain');

    }

    /**
     * Register all of the hooks related to the frontend functionality
     * 
     * @since    1.0.0
     */
    private function define_frontend_hooks()
    {

        // Resgistering plugin endpoints
        $Endpoints = new Endpoints();
        $this->loader->add_action('init', $Endpoints, 'register_endpoints');
        $this->loader->add_filter('query_vars', $Endpoints, 'add_query_vars');

        // SCSS injector, to inject plugin SCSS into main them generation
        $this->loader->add_filter('before_scss_compile', new Plugin_SCSS(), 'get_plugin_scss', 10, 1);

        // Enqueue the scripts and styles for the plugin
        // $this->loader->add_action('wp_enqueue_scripts', new Scripts(), 'enqueue_scripts');
        // $this->loader->add_action('wp_enqueue_scripts', new Styles(), 'enqueue_styles');

        // Loading template files from plugin folder overwieving the theme files for archive and single
        $Template = new Template($this->post_types, $this->plugin_name, BOILERPLATE_DIR);
        $this->loader->add_filter('template_include', $Template, 'load_template', 99);

        // The plugin Views, responding on query_vars from set endpoints
        $this->loader->add_action('template_include', new Views(), 'load_views', 10, 1);

    }

    /**
     * Register all of the hooks related to the admin functionality
     * 
     * @since    1.0.0
     */
    private function define_admin_hooks()
    {

        // Register Post Types, Admin Menu Change the priority if menu is not showing
        $Post_Types = new Post_Types($this->post_types, $this->menu_position);
        $this->loader->add_action('init', $Post_Types, 'register_post_types');
        $this->loader->add_filter('novaos_admin_menu', $Post_Types, 'add_admin_menu', 10, 1);

        $this->loader->add_action('rwmb_meta_boxes', new Meta_Boxes($this->post_types), 'register_meta_boxes', 10, 1);

    }

    /**
     * Run the loader to execute all of the hooks with WordPress.
     *
     * @since    1.0.0
     */
    public function run()
    {
        // Run the loader to execute all of the hooks with WordPress.     
        $this->loader->run();

    }





}