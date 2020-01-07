<?php
/**
* Recipes custom post type and all related functionality
*
* @package gatsbywp
*/

if( !function_exists( 'gatsbywp_recipes_register' ) ) :
/**
 * Register the menu options
 *
 */
function gatsbywp_recipes_register() {

    // Recipe Tip Categories
    register_taxonomy( 'recipes_types', 'recipes', array(
        'labels'             => array(
            'name'               => _x( 'Recipe Types', 'post type general name' ),
            'singular_name'      => _x( 'Recipe Type', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'recipes' ),
            'add_new_item'       => __( 'Add New Recipe Type' ),
            'edit_item'          => __( 'Edit Recipe Type' ),
            'new_item'           => __( 'New Recipe Type' ),
            'view_item'          => __( 'View Recipe Type' ),
            'search_items'       => __( 'Search Recipe Types' ),
            'not_found'          => __( 'Nothing found' ),
            'not_found_in_trash' => __( 'Nothing found in Trash' ),
            'parent_item_colon'  => ''
        ),
        'public'             => false,
        'show_in_rest'       => true, // this is important to show up in GraphQl
        'publicly_queryable' => true,
        'show_ui'            => true,
        'query_var'          => true,
        'menu_icon'          => 'dashicons-portfolio',
        'capability_type'    => 'post',
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    ));

    // Recipe Post Type
    $args = array(
        'labels'             => array(
            'name'               => _x( 'Recipes', 'post type general name' ),
            'singular_name'      => _x( 'Recipe', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'recipes' ),
            'add_new_item'       => __( 'Add New Recipe' ),
            'edit_item'          => __( 'Edit Recipe' ),
            'new_item'           => __( 'New Recipe' ),
            'view_item'          => __( 'View Recipe' ),
            'search_items'       => __( 'Search Recipe' ),
            'not_found'          => __( 'Nothing found' ),
            'not_found_in_trash' => __( 'Nothing found in Trash' ),
            'parent_item_colon'  => ''
        ),
        'public'             => true,
        'show_in_rest'       => true, // this is important to show up in GraphQl
        'publicly_queryable' => true,
        'show_ui'            => true,
        'query_var'          => true,
        'menu_icon'          => 'dashicons-admin-post',
        'rewrite'            => array(
            'slug'       => 'recipes',
            'with_front' => false
        ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => null,
        'has_archive'        => true,
        'supports'           => array( 'title', 'author', 'editor', 'thumbnail', 'excerpt' )
    );
    register_post_type( 'recipes', $args );
}
add_action( 'init', 'gatsbywp_recipes_register' );
endif;