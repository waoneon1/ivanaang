<?php
add_action( 'init', 'works_init' );
/**
 * Register a Job post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function works_init() {
	$labels = array(
		'name'               => _x( 'Work List', 'post type general name', 'aul' ),
		'singular_name'      => _x( 'Work', 'post type singular name', 'aul' ),
		'menu_name'          => _x( 'Work', 'admin menu', 'aul' ),
		'name_admin_bar'     => _x( 'Work', 'add new on admin bar', 'aul' ),
		'add_new'            => _x( 'Add New', 'Work', 'aul' ),
		'add_new_item'       => __( 'Add New Work', 'aul' ),
		'new_item'           => __( 'New Work', 'aul' ),
		'edit_item'          => __( 'Edit Work', 'aul' ),
		'view_item'          => __( 'View Work', 'aul' ),
		'all_items'          => __( 'All Works', 'aul' ),
		'search_items'       => __( 'Search Works', 'aul' ),
		'parent_item_colon'  => __( 'Parent Work', 'aul' ),
		'not_found'          => __( 'No Work found.', 'aul' ),
		'not_found_in_trash' => __( 'No Work found in Trash.', 'aul' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'aul' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'works' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'					 => 'dashicons-welcome-write-blog',
		'supports'           => array( 'title', 'thumbnail' , 'editor')
	);
	register_post_type( 'works', $args );
}

function works_category(){

	//set the name of the taxonomy
	$taxonomy = 'works_category';
	//set the post types for the taxonomy
	$object_type = 'works';

	//populate our array of names for our taxonomy
	$labels = array(
		'name'               => 'Work Category',
		'singular_name'      => 'Work Category',
		'search_items'       => 'Search Work Category',
		'all_items'          => 'All Work Category',
		'parent_item'        => 'Parent Work Category',
		'parent_item_colon'  => 'Parent Work Category:',
		'update_item'        => 'Update Work Category',
		'edit_item'          => 'Edit Work Category',
		'add_new_item'       => 'Add New Work Category',
		'new_item_name'      => 'New Type Work Category',
		'menu_name'          => 'Work Category'
	);

	//define arguments to be used
	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_ui'           => true,
		'how_in_nav_menus'  => true,
		'public'            => false,
		'show_admin_column' => true,
		'query_var'         => true
	);

	//call the register_taxonomy function
	register_taxonomy($taxonomy, $object_type, $args);
}
add_action('init','works_category');

?>