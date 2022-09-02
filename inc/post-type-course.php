<?php
add_action( 'init', 'likes_init' );
/**
 * Register a Job post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function likes_init() {
	$labels = array(
		'name'               => _x( 'What I Like', 'post type general name', 'aul' ),
		'singular_name'      => _x( 'Like', 'post type singular name', 'aul' ),
		'menu_name'          => _x( 'What I Like', 'admin menu', 'aul' ),
		'name_admin_bar'     => _x( 'Like', 'add new on admin bar', 'aul' ),
		'add_new'            => _x( 'Add New', 'Like', 'aul' ),
		'add_new_item'       => __( 'Add New Like', 'aul' ),
		'new_item'           => __( 'New Like', 'aul' ),
		'edit_item'          => __( 'Edit Like', 'aul' ),
		'view_item'          => __( 'View Like', 'aul' ),
		'all_items'          => __( 'All Likes', 'aul' ),
		'search_items'       => __( 'Search Likes', 'aul' ),
		'parent_item_colon'  => __( 'Parent Like', 'aul' ),
		'not_found'          => __( 'No Like found.', 'aul' ),
		'not_found_in_trash' => __( 'No Like found in Trash.', 'aul' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'aul' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'likes' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'menu_icon'					 => 'dashicons-heart',
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'likes', $args );
}

function likes_category(){

	//set the name of the taxonomy
	$taxonomy = 'likes_category';
	//set the post types for the taxonomy
	$object_type = 'likes';

	//populate our array of names for our taxonomy
	$labels = array(
		'name'               => 'Like Category',
		'singular_name'      => 'Like Category',
		'search_items'       => 'Search Like Category',
		'all_items'          => 'All Like Category',
		'parent_item'        => 'Parent Like Category',
		'parent_item_colon'  => 'Parent Like Category:',
		'update_item'        => 'Update Like Category',
		'edit_item'          => 'Edit Like Category',
		'add_new_item'       => 'Add New Like Category',
		'new_item_name'      => 'New Type Like Category',
		'menu_name'          => 'Like Category'
	);

	//define arguments to be used
	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_ui'           => true,
		'how_in_nav_menus'  => true,
		'public'            => true,
		'show_admin_column' => true,
		'query_var'         => true
	);

	//call the register_taxonomy function
	register_taxonomy($taxonomy, $object_type, $args);
}
add_action('init','likes_category');

?>