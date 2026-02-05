<?php
/**
 * The class defining the custom post types.
 *
 * @package    Boilerplate
 * @subpackage Boilerplate/Includes/Admin/Setup
 */
namespace Boilerplate\Admin\Setup;

defined('WPINC') or die("No direct access"); // Exit if accessed directly

class Post_Types
{

    private $post_types = array();

    // Key needs to be same as post type key.
    // Add custom order to value.
    private $admin_position = 10;

    public function __construct($post_type, $admin_menu_position = 10)
    {

        $this->post_types = is_array($post_type) ? $post_type : [$post_type];
        $this->admin_position = $admin_menu_position;

    }

    public function register_post_types()
    {

        foreach ($this->post_types as $post_type => $label) {

            register_post_type($post_type, $this->get_args($post_type, $label));

        }

    }

    public function add_admin_menu($admin_menu)
    {

        foreach ($this->post_types as $post_type => $label) {

            $admin_menu[$post_type] = $this->admin_position++;

        }

        // $admin_menu[ $this->post_type ] = $this->admin_position;

        return $admin_menu;

    }

    private function get_args($post_type, $label)
    {

        $labels = "get_{$post_type}_labels";

        $args = array(
            'label' => $label,
            'labels' => $this->$labels(),
            'description' => '',
            'public' => true,
            'hierarchical' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'show_in_rest' => false,
            'query_var' => true,
            'can_export' => true,
            'delete_with_user' => true,
            'has_archive' => true,
            'rest_base' => '',
            'show_in_menu' => true,
            'menu_position' => 55555,
            'menu_icon' => 'dashicons-awards',
            'capability_type' => 'post',
            // If custom capabilities are needed, add them here.
            // 'capabilities'          => $this->get_capabilities()[ $post_type ],
            'supports' => array('title', 'thumbnail', 'editor', 'author'),
            'taxonomies' => array(),
        );

        return $args;

    }

    /**
     * Get the labels for the post type.
     */
    private function get_boilerplate_labels()
    {

        $labels = array(
            'name' => esc_html__('boilerplate_label', 'boilerplate'),
            'singular_name' => esc_html__('boilerplate_label', 'boilerplate'),
            'add_new' => esc_html__('Add New', 'boilerplate'),
            'add_new_item' => esc_html__('Add New boilerplate_label', 'boilerplate'),
            'edit_item' => esc_html__('Edit boilerplate_label', 'boilerplate'),
            'new_item' => esc_html__('New boilerplate_label', 'boilerplate'),
            'view_item' => esc_html__('View boilerplate_label', 'boilerplate'),
            'view_items' => esc_html__('View boilerplate_label', 'boilerplate'),
            'search_items' => esc_html__('Search boilerplate_label', 'boilerplate'),
            'not_found' => esc_html__('No boilerplate_label found.', 'boilerplate'),
            'not_found_in_trash' => esc_html__('No boilerplate_label found in Trash.', 'boilerplate'),
            'parent_item_colon' => esc_html__('Parent boilerplate_label:', 'boilerplate'),
            'all_items' => esc_html__('All boilerplate_label', 'boilerplate'),
            'archives' => esc_html__('boilerplate_label Archives', 'boilerplate'),
            'attributes' => esc_html__('boilerplate_label Attributes', 'boilerplate'),
            'insert_into_item' => esc_html__('Insert into boilerplate_label', 'boilerplate'),
            'uploaded_to_this_item' => esc_html__('Uploaded to this boilerplate_label', 'boilerplate'),
            'featured_image' => esc_html__('boilerplate_label image', 'boilerplate'),
            'set_featured_image' => esc_html__('Set boilerplate_label image', 'boilerplate'),
            'remove_featured_image' => esc_html__('Remove boilerplate_label image', 'boilerplate'),
            'use_featured_image' => esc_html__('Use as boilerplate_label image', 'boilerplate'),
            'menu_name' => esc_html__('boilerplate_label', 'boilerplate'),
            'filter_items_list' => esc_html__('Filter boilerplate_label list', 'boilerplate'),
            'filter_by_date' => esc_html__('', 'boilerplate'),
            'items_list_navigation' => esc_html__('boilerplate_label list navigation', 'boilerplate'),
            'items_list' => esc_html__('boilerplate_label list', 'boilerplate'),
            'item_published' => esc_html__('boilerplate_label published.', 'boilerplate'),
            'item_published_privately' => esc_html__('boilerplate_label published privately.', 'boilerplate'),
            'item_reverted_to_draft' => esc_html__('boilerplate_label reverted to draft.', 'boilerplate'),
            'item_scheduled' => esc_html__('boilerplate_label scheduled.', 'boilerplate'),
            'item_updated' => esc_html__('boilerplate_label updated.', 'boilerplate'),
        );

        return $labels;

    }

    /**
     * Get custom capabilities for the post type.
     */
    public function get_capabilities()
    {

        $capabilities = array();

        foreach ($this->post_types as $post_type => $label) {

            $capabilities[$post_type] = array(
                'edit_post' => 'edit_' . $post_type,
                'read_post' => 'read_' . $post_type,
                'delete_post' => 'delete_' . $post_type,
                'edit_posts' => 'edit_' . $post_type . 's',
                'edit_others_posts' => 'edit_others_' . $post_type . 's',
                'publish_posts' => 'publish_' . $post_type . 's',
                'read_private_posts' => 'read_private_' . $post_type . 's',
                'create_posts' => 'create_' . $post_type . 's',
            );

        }

        return $capabilities;

    }

}