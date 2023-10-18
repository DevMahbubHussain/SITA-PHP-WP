<?php 


// function medi_plus_slider(){

//  register_post_type('medislider',array(
//    'labels'=>array(
//      'name' => __('Sliders', 'mediplus'),
//      'singular_name' => __('Slider', 'textdomain'),
//    ),
//    'public'      => true,
//    'has_archive' => true,
//    'menu_icon'=>'dashicons-cover-image',
//    'show_in_menu'    => true,
//    'menu_position'    => 3,
//    'publicly_queryable' => true,
//    'supports'   => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

//  ));

// }

// add_action('init','medi_plus_slider');



/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function medi_plus_slider() {

	$labels = array(
		'name'               => __( 'Sliders', 'mediplus' ),
		'singular_name'      => __( 'Slider', 'mediplus' ),
		'add_new'            => _x( 'Add New Slider', 'mediplus', 'mediplus' ),
		'add_new_item'       => __( 'Add New Slider', 'mediplus' ),
		'edit_item'          => __( 'Edit Slider', 'mediplus' ),
		'new_item'           => __( 'New Slider', 'mediplus' ),
		'view_item'          => __( 'View Slider', 'mediplus' ),
		'search_items'       => __( 'Search Sliders', 'mediplus' ),
		'not_found'          => __( 'No Sliders found', 'mediplus' ),
		'not_found_in_trash' => __( 'No Sliders found in Trash', 'mediplus' ),
		'parent_item_colon'  => __( 'Parent Slider:', 'mediplus' ),
		'menu_name'          => __( 'Sliders', 'mediplus' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'menu_icon'=>'dashicons-cover-image',
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'medislider', $args );
}

add_action( 'init', 'medi_plus_slider' );
