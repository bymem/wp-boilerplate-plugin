<?php
/**
 * The class defining the post type meta boxes.
 *
 * @package    Boilerplate
 * @subpackage Boilerplate/Includes/Admin/Setup
 */
namespace Boilerplate\Admin\Setup;

defined('WPINC') or die("No direct access"); // Exit if accessed directly

class Meta_Boxes
{

    private $post_types;

    public function __construct($post_type)
    {
        $this->post_types = is_array($post_type) ? $post_type : [$post_type];
    }

    public function register_meta_boxes()
    {
        $meta_boxes = array();

        foreach ($this->post_types as $post_type) {

            $get_meta_fields = "get_{$post_type}_meta_fields";

            $meta_boxes = array_merge($meta_boxes, $this->$get_meta_fields($post_type));

        }

        return $meta_boxes;

    }

    /**
     * Get the labels for the post type.
     */
    public function get_boilerplate_meta_fields($post_type)
    {

        $fields = array();

        return $fields;

    }

}