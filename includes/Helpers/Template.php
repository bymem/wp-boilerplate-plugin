<?php
/**
 * The template loader class
 *
 * @package    Boilerplate
 * @subpackage Boilerplate/Includes/Helpers
 */
namespace Boilerplate\Helpers;

defined('WPINC') or die("No direct access"); // Exit if accessed directly

class Template
{

    /**
     * The post types that this template loader will handle.
     *
     * @since    1.0.0
     * @access   private
     * @var      array    $plugin_post_type    The post types that this template loader will handle.
     */
    private $plugin_post_type;

    /**
     * The name of the plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The name of the plugin.
     */
    private $plugin_name;

    /**
     * The directory of the plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_dir    The directory of the plugin.
     */
    private $plugin_dir;

    public function __construct($post_types, $plugin_name, $plugin_dir)
    {
        /*
         * Set the post types that this template loader will handle.
         * The post types should be passed in as an array.
         */
        $this->plugin_post_type = $post_types;

        /*
         * Set the name of the plugin.
         * The name should be passed in as a string.
         */
        $this->plugin_name = $plugin_name;

        /*
         * Set the directory of the plugin.
         * The directory should be passed in as a string.
         */
        $this->plugin_dir = $plugin_dir;

    }

    public function load_template($default_file)
    {

        $post_type = get_post_type();
        $template_file = '';

        if (array_key_exists($post_type, $this->plugin_post_type)) {
            if (is_singular($post_type) or is_post_type_archive($post_type) or is_tax(get_object_taxonomies($post_type))) {
                $template_file = $this->load_template_file($post_type);
            }
        }

        if ( file_exists($template_file) ) {
            $default_file = $template_file;
        }

        return $default_file;

    }

    private function load_template_file($post_type)
    {
        if (is_singular($post_type)) {
            $template_file = 'single-' . $post_type . '.php';
        } elseif (is_post_type_archive($post_type) or is_tax(get_object_taxonomies($post_type))) {
            $template_file = 'archive-' . $post_type . '.php';
        }

        $template_file = $this->load_template_part($template_file);

        return $template_file;

    }

    private function load_template_part($template_file)
    {
        if (file_exists(get_stylesheet_directory() . '/' . $this->plugin_name . '/' . $template_file)) {
            $file = get_stylesheet_directory() . '/' . $this->plugin_name . '/' . $template_file;
        } else {
            $file = $this->plugin_dir . 'templates/' . $template_file;
        }

        return $file;

    }

}