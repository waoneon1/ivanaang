<?php
add_action( 'init', 'course_init' );
/**
 * Register a Job post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function course_init() {
	$labels = array(
		'name'               => _x( 'Beauty Academy', 'post type general name', 'ivang' ),
		'singular_name'      => _x( 'Course', 'post type singular name', 'ivang' ),
		'menu_name'          => _x( 'Beauty Academy', 'admin menu', 'ivang' ),
		'name_admin_bar'     => _x( 'Course', 'add new on admin bar', 'ivang' ),
		'add_new'            => _x( 'Add New', 'Course', 'ivang' ),
		'add_new_item'       => __( 'Add New Course', 'ivang' ),
		'new_item'           => __( 'New Course', 'ivang' ),
		'edit_item'          => __( 'Edit Course', 'ivang' ),
		'view_item'          => __( 'View Course', 'ivang' ),
		'all_items'          => __( 'All Courses', 'ivang' ),
		'search_items'       => __( 'Search Courses', 'ivang' ),
		'parent_item_colon'  => __( 'Parent Course', 'ivang' ),
		'not_found'          => __( 'No Course found.', 'ivang' ),
		'not_found_in_trash' => __( 'No Course found in Trash.', 'ivang' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'ivang' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'course' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'menu_icon'					 => 'dashicons-welcome-learn-more',
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'course', $args );
}

function course_category(){

	//set the name of the taxonomy
	$taxonomy = 'course_category';
	//set the post types for the taxonomy
	$object_type = 'course';

	//populate our array of names for our taxonomy
	$labels = array(
		'name'               => 'Course Category',
		'singular_name'      => 'Course Category',
		'search_items'       => 'Search Course Category',
		'all_items'          => 'All Course Category',
		'parent_item'        => 'Parent Course Category',
		'parent_item_colon'  => 'Parent Course Category:',
		'update_item'        => 'Update Course Category',
		'edit_item'          => 'Edit Course Category',
		'add_new_item'       => 'Add New Course Category',
		'new_item_name'      => 'New Type Course Category',
		'menu_name'          => 'Course Category'
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
add_action('init','course_category');

?>