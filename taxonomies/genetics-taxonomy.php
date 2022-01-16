<?php
/*
* Plugin Name: Course Taxonomy
* Description: A short example showing how to add a taxonomy called Course.
* Version: 1.0
* Author: developer.wordpress.org
* Author URI: https://codex.wordpress.org/User:Aternus
*/
 
function rg_register_taxonomy() {
     $labels = array(
         'name'              => _x( 'Genetics', 'taxonomy general name' ),
         'singular_name'     => _x( 'Genetic', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Genetics' ),
         'all_items'         => __( 'All Genetics' ),
         'parent_item'       => __( 'Parent Genetic' ),
         'parent_item_colon' => __( 'Parent Genetic:' ),
         'edit_item'         => __( 'Edit Genetic' ),
         'update_item'       => __( 'Update Genetic' ),
         'add_new_item'      => __( 'Add New Genetic' ),
         'new_item_name'     => __( 'New Genetic Name' ),
         'menu_name'         => __( 'Genetics' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'genetics' ],
     );
     register_taxonomy( 'Genetics', [ 'post' ], $args );
}
add_action( 'init', 'rg_register_taxonomy' );