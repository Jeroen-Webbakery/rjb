<?php

// Register Custom Post Type
function portfolio()
{

    $labels = array(
        'name' => _x('Portfolio\'s', 'Post Type General Name', 'rjp'),
        'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'rjp'),
        'menu_name' => __('Portfolio', 'rjp'),
        'name_admin_bar' => __('Portfolio', 'rjp'),
        'archives' => __('Item Archives', 'rjp'),
        'attributes' => __('Item Attributes', 'rjp'),
        'parent_item_colon' => __('Parent Item:', 'rjp'),
        'all_items' => __('All Items', 'rjp'),
        'add_new_item' => __('Add New Item', 'rjp'),
        'add_new' => __('Voeg nieuwe portfolio item toe', 'rjp'),
        'new_item' => __('Voeg nieuwe portfolio item toe', 'rjp'),
        'edit_item' => __('Wijzig portfolio item', 'rjp'),
        'update_item' => __('Update portfolio item', 'rjp'),
        'view_item' => __('Bekijk portfolio item', 'rjp'),
        'view_items' => __('Bekijk portfolio items', 'rjp'),
        'search_items' => __('Zoek portfolio item', 'rjp'),
        'not_found' => __('Not found', 'rjp'),
        'not_found_in_trash' => __('Not found in Trash', 'rjp'),
        'featured_image' => __('Featured Image', 'rjp'),
        'set_featured_image' => __('Set featured image', 'rjp'),
        'remove_featured_image' => __('Remove featured image', 'rjp'),
        'use_featured_image' => __('Use as featured image', 'rjp'),
        'insert_into_item' => __('Insert into item', 'rjp'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'rjp'),
        'items_list' => __('Items list', 'rjp'),
        'items_list_navigation' => __('Items list navigation', 'rjp'),
        'filter_items_list' => __('Filter items list', 'rjp'),
    );
    $args = array(
        'label' => __('Portfolio', 'rjp'),
        'description' => __('Portfolio items', 'rjp'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('portfolio-category'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-building',
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('portfolio', $args);

}

add_action('init', 'portfolio', 0);

if ( ! function_exists( 'portfolio_category' ) ) {

// Register Custom Taxonomy
    function portfolio_category() {

        $labels = array(
            'name'                       => _x( 'Portfolio categorieën', 'Taxonomy General Name', 'rjb' ),
            'singular_name'              => _x( 'Portfolio category', 'Taxonomy Singular Name', 'rjb' ),
            'menu_name'                  => __( 'Portfolio category', 'rjb' ),
            'all_items'                  => __( 'Portfolio categorieën', 'rjb' ),
            'parent_item'                => __( 'Parent Item', 'rjb' ),
            'parent_item_colon'          => __( 'Parent Item:', 'rjb' ),
            'new_item_name'              => __( 'Voeg nieuwe portfolio category toe', 'rjb' ),
            'add_new_item'               => __( 'Voeg nieuwe portfolio category toe', 'rjb' ),
            'edit_item'                  => __( 'Wijzig portfolio category', 'rjb' ),
            'update_item'                => __( 'Update portfolio category', 'rjb' ),
            'view_item'                  => __( 'Bekijk portfolio category', 'rjb' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'rjb' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'rjb' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'rjb' ),
            'popular_items'              => __( 'Popular Items', 'rjb' ),
            'search_items'               => __( 'Search Items', 'rjb' ),
            'not_found'                  => __( 'Not Found', 'rjb' ),
            'no_terms'                   => __( 'No items', 'rjb' ),
            'items_list'                 => __( 'Items list', 'rjb' ),
            'items_list_navigation'      => __( 'Items list navigation', 'rjb' ),
        );
//        $rewrite = array(
//            'slug'              => 'portfolio/category',
//            'with_front'        => true,
//            'hierarchical'       => true
//        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
//            'rewrite'                   => $rewrite,
        );
        register_taxonomy( 'portfolio-category', array( 'portfolio' ), $args );

    }
    add_action( 'init', 'portfolio_category', 0 );

}