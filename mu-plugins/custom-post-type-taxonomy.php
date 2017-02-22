<?php
// TODO

/* Company Post Type */
function register_post_type_company() {
	register_post_type( 'company', array(
			'label' => 'Company',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'companies', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-feedback',
			'taxonomies'  => array( 'category' ),
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author' ),
			'labels' => array (
					'name' => 'Companies',
					'singular_name' => 'Company',
					'menu_name' => 'Companies',
					'add_new' => 'Add Company',
					'add_new_item' => 'Add New Company',
					'edit' => 'Edit',
					'edit_item' => 'Edit Company',
					'new_item' => 'New Company',
					'view' => 'View Company',
					'view_item' => 'View Company',
					'search_items' => 'Search Companies',
					'not_found' => 'No Companies Found',
					'not_found_in_trash' => 'No Companies Found in Trash',
					'parent' => 'Parent Company',
			)
		)
	);
}
add_action( 'init', 'register_post_type_company' );

function register_post_type_manufacturer() {
	register_post_type( 'manufacturer', array(
			'label' => 'Manufacturer',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'manufacturers', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-feedback',
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author', 'category' ),
			'labels' => array (
					'name' => 'Manufacturers',
					'singular_name' => 'Manufacturer',
					'menu_name' => 'Manufacturers',
					'add_new' => 'Add Manufacturer',
					'add_new_item' => 'Add New Manufacturer',
					'edit' => 'Edit',
					'edit_item' => 'Edit Manufacturer',
					'new_item' => 'New Manufacturer',
					'view' => 'View Manufacturer',
					'view_item' => 'View Manufacturer',
					'search_items' => 'Search Manufacturers',
					'not_found' => 'No Manufacturers Found',
					'not_found_in_trash' => 'No Manufacturers Found in Trash',
					'parent' => 'Parent Manufacturer',
			)
		)
	);
}
add_action( 'init', 'register_post_type_manufacturer' );

?>
