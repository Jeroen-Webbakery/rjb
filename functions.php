<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


add_theme_support('title-tag');

function understrap_remove_scripts()
{
    wp_dequeue_style('understrap-styles');
    wp_deregister_style('understrap-styles');

    wp_dequeue_script('understrap-scripts');
    wp_deregister_script('understrap-scripts');

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}

add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    // Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/css/thebridge.min.css', array(), $the_theme->get('Version'));
    wp_enqueue_script('jquery');
    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/thebridge.min.js', array(), $the_theme->get('Version'), true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function my_register_script_method()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-3.6.0.min.js');
}


function add_child_theme_textdomain()
{
    load_child_theme_textdomain('webtheme', get_stylesheet_directory() . '/languages');
}

add_action('after_setup_theme', 'add_child_theme_textdomain');


function register_my_menus()
{
    register_nav_menus(
        array(
            'footer-menu' => __('Footer Menu'),
        )
    );
}

add_action('init', 'register_my_menus');

// Gutenberg uitschakelen
add_filter('use_block_editor_for_post', '__return_false', 10);
// Disable WordPress Admin Bar for all users
add_filter('show_admin_bar', '__return_false');


// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'links' => esc_html__('Menu Links', 'thebridge'),
        'rechts' => esc_html__('Menu rechts', 'thebridge'),
        'mobile' => esc_html__('Mobile menu', 'thebridge'),
    )
);

/** ACF Option pages */
require get_template_directory() . '/inc/acf.php';
/** Custom login */
require get_template_directory() . '/inc/custom-login.php';
/** Remove dashboard items  */
require get_template_directory() . '/inc/remove-dashboard-items.php';
/** Support dashboard items */
require get_template_directory() . '/inc/support-dashboard-item.php';
/** Custom dashboard items */
require get_template_directory() . '/inc/custom-dashboard-items.php';
/** Implement the Navwalker */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
/** Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';
/** SVG  Support. */
require get_template_directory() . '/inc/support-svg.php';


add_theme_support('post-thumbnails');


//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
}

add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);


remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is


