<?php

// Our custom post type function

add_theme_support('post-thumbnails');
add_post_type_support( 'teams', 'thumbnail' );    
// Our custom post type function
function create_posttype_team() {
 
    register_post_type( 'teams',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'teams' ),
                'singular_name' => __( 'team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'teams'),
            'supports' => array( 'title', 'editor',  'excerpt','custom-fields','page-attributes' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_team' );
add_action( 'init', 'create_teams_hierarchical_taxonomy_teams', 0 );
function create_teams_hierarchical_taxonomy_teams() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'tags', 'taxonomy general name' ),
    'singular_name' => _x( 'tags', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search tagss' ),
    'all_items' => __( 'All tagss' ),
    'parent_item' => __( 'Parent tags' ),
    'parent_item_colon' => __( 'Parent tags:' ),
    'edit_item' => __( 'Edit tags' ), 
    'update_item' => __( 'Update tags' ),
    'add_new_item' => __( 'Add New tags' ),
    'new_item_name' => __( 'New tags Name' ),
    'menu_name' => __( 'tags' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('categoriesa',array('teams'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categories' ),
  ));
 
}



require_once dirname( __FILE__ ) . '/includes/theme-support.php';

