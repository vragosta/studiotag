<?php

// TODO

/**
 * TODO
 */
function register_post_type_system() {
	register_post_type( 'system', array(
			'label' => 'System',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'systems', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-feedback',
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author' ),
			'labels' => array (
					'name' => 'Systems',
					'singular_name' => 'System',
					'menu_name' => 'Systems',
					'add_new' => 'Add System',
					'add_new_item' => 'Add New System',
					'edit' => 'Edit',
					'edit_item' => 'Edit System',
					'new_item' => 'New System',
					'view' => 'View System',
					'view_item' => 'View System',
					'search_items' => 'Search Systems',
					'not_found' => 'No Systems Found',
					'not_found_in_trash' => 'No Systems Found in Trash',
					'parent' => 'Parent System',
			)
		)
	);
}
add_action( 'init', 'register_post_type_system' );

/**
 * TODO
 */
function register_post_type_technical() {
	register_post_type( 'technical', array(
			'label' => 'Technical',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'technicals', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-feedback',
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author' ),
			'labels' => array (
					'name' => 'Technicals',
					'singular_name' => 'Technical',
					'menu_name' => 'Technicals',
					'add_new' => 'Add Technical',
					'add_new_item' => 'Add New Technical',
					'edit' => 'Edit',
					'edit_item' => 'Edit Technical',
					'new_item' => 'New Technical',
					'view' => 'View Technical',
					'view_item' => 'View Technical',
					'search_items' => 'Search Technicals',
					'not_found' => 'No Technicals Found',
					'not_found_in_trash' => 'No Technicals Found in Trash',
					'parent' => 'Parent Technical',
			)
		)
	);
}
add_action( 'init', 'register_post_type_technical' );

/**
 * TODO
 */
function register_post_type_applied_details() {
	register_post_type( 'applied-detail', array(
			'label' => 'Applied Details',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'applied-details', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-feedback',
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author' ),
			'labels' => array(
					'name' => 'Applied Details',
					'singular_name' => 'Applied Detail',
					'menu_name' => 'Applied Details',
					'add_new' => 'Add Applied Detail',
					'add_new_item' => 'Add New Applied Detail',
					'edit' => 'Edit',
					'edit_item' => 'Edit Applied Detail',
					'new_item' => 'New Applied Detail',
					'view' => 'View Applied Detail',
					'view_item' => 'View Applied Detail',
					'search_items' => 'Search Applied Details',
					'not_found' => 'No Applied Details Found',
					'not_found_in_trash' => 'No Applied Details Found in Trash',
					'parent' => 'Parent Applied Detail',
			)
		)
	);
}
add_action( 'init', 'register_post_type_applied_details' );

/**
 * TODO
 */
function register_post_type_door() {
	register_post_type( 'door', array(
			'label' => 'Door',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'doors', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-feedback',
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author' ),
			'labels' => array (
					'name' => 'Doors',
					'singular_name' => 'Door',
					'menu_name' => 'Doors',
					'add_new' => 'Add Door',
					'add_new_item' => 'Add New Door',
					'edit' => 'Edit',
					'edit_item' => 'Edit Door',
					'new_item' => 'New Door',
					'view' => 'View Door',
					'view_item' => 'View Door',
					'search_items' => 'Search Doors',
					'not_found' => 'No Doors Found',
					'not_found_in_trash' => 'No Doors Found in Trash',
					'parent' => 'Parent Door',
			)
		)
	);
}
add_action( 'init', 'register_post_type_door' );

/**
 * TODO
 */
function register_taxonomy_panel() {
    $post_types = array( 'door' );
    register_taxonomy( 'panel', $post_types, array(
        'hierarchical'      => true,
        'label'             => 'Panels',
        'show_ui'           => true,
        'query_var'         => true,
        'show_admin_column' => false,
        'rewrite'           => array( 'with_front' => false ),
        'labels'            => array(
            'search_items'               => 'Search Panels',
            'popular_items'              => '',
            'all_items'                  => 'All',
            'parent_item'                => '',
            'parent_item_colon'          => '',
            'edit_item'                  => '',
            'update_item'                => '',
            'add_new_item'               => 'Add New Panel',
            'new_item_name'              => '',
            'separate_items_with_commas' => '',
            'add_or_remove_items'        => '',
            'choose_from_most_used'      => '',
        )
    ));
}
add_action( 'init', 'register_taxonomy_panel' );

/**
 * TODO
 */
function register_post_type_hardware() {
	register_post_type( 'hardware', array(
			'label' => 'Hardware',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'hardware', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-feedback',
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author' ),
			'labels' => array (
					'name' => 'Hardware',
					'singular_name' => 'Hardware',
					'menu_name' => 'Hardware',
					'add_new' => 'Add Hardware',
					'add_new_item' => 'Add New Hardware',
					'edit' => 'Edit',
					'edit_item' => 'Edit Hardware',
					'new_item' => 'New Hardware',
					'view' => 'View Hardware',
					'view_item' => 'View Hardware',
					'search_items' => 'Search Hardwares',
					'not_found' => 'No Hardwares Found',
					'not_found_in_trash' => 'No Hardwares Found in Trash',
					'parent' => 'Parent Hardware',
			)
		)
	);
}
add_action( 'init', 'register_post_type_hardware' );

/**
 * TODO
 */
function register_taxonomy_hardware_type() {
    $post_types = array( 'hardware' );
    register_taxonomy( 'hardware_type', $post_types, array(
        'hierarchical'      => true,
        'label'             => 'Hardware Types',
        'show_ui'           => true,
        'query_var'         => true,
        'show_admin_column' => false,
        'rewrite'           => array( 'with_front' => false ),
        'labels'            => array(
            'search_items'               => 'Search Hardware Types',
            'popular_items'              => '',
            'all_items'                  => 'All',
            'parent_item'                => '',
            'parent_item_colon'          => '',
            'edit_item'                  => '',
            'update_item'                => '',
            'add_new_item'               => 'Add New Hardware Type',
            'new_item_name'              => '',
            'separate_items_with_commas' => '',
            'add_or_remove_items'        => '',
            'choose_from_most_used'      => '',
        )
    ));
}
add_action( 'init', 'register_taxonomy_hardware_type' );

/**
 * TODO
 */
function register_post_type_glass() {
	register_post_type( 'glass', array(
			'label' => 'Glass',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'glass', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-feedback',
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author' ),
			'labels' => array (
					'name' => 'Tagwall Glass',
					'singular_name' => 'Glass',
					'menu_name' => 'Glass',
					'add_new' => 'Add Glass',
					'add_new_item' => 'Add New Glass',
					'edit' => 'Edit',
					'edit_item' => 'Edit Glass',
					'new_item' => 'New Glass',
					'view' => 'View Glass',
					'view_item' => 'View Glass',
					'search_items' => 'Search Glass',
					'not_found' => 'No Glass Found',
					'not_found_in_trash' => 'No Glass Found in Trash',
					'parent' => 'Parent Glass',
			)
		)
	);
}
add_action( 'init', 'register_post_type_glass' );

/**
 * TODO
 */
function register_taxonomy_glass_type() {
    $post_types = array( 'glass' );
    register_taxonomy( 'glass_type', $post_types, array(
        'hierarchical'      => true,
        'label'             => 'Glass Types',
        'show_ui'           => true,
        'query_var'         => true,
        'show_admin_column' => false,
        'rewrite'           => array( 'with_front' => false ),
        'labels'            => array(
            'search_items'               => 'Search Glass Types',
            'popular_items'              => '',
            'all_items'                  => 'All',
            'parent_item'                => '',
            'parent_item_colon'          => '',
            'edit_item'                  => '',
            'update_item'                => '',
            'add_new_item'               => 'Add New Glass Type',
            'new_item_name'              => '',
            'separate_items_with_commas' => '',
            'add_or_remove_items'        => '',
            'choose_from_most_used'      => '',
        )
    ));
}
add_action( 'init', 'register_taxonomy_glass_type' );

/**
 * TODO
 */
function register_post_type_film() {
	register_post_type( 'film', array(
			'label' => 'Film',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'film', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-feedback',
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author' ),
			'labels' => array (
					'name' => 'Film',
					'singular_name' => 'Film',
					'menu_name' => 'Film',
					'add_new' => 'Add Film',
					'add_new_item' => 'Add New Film',
					'edit' => 'Edit',
					'edit_item' => 'Edit Film',
					'new_item' => 'New Film',
					'view' => 'View Film',
					'view_item' => 'View Film',
					'search_items' => 'Search Film',
					'not_found' => 'No Film Found',
					'not_found_in_trash' => 'No Film Found in Trash',
					'parent' => 'Parent Film',
			)
		)
	);
}
add_action( 'init', 'register_post_type_film' );

/**
 * TODO
 */
function register_taxonomy_film_type() {
    $post_types = array( 'film' );
    register_taxonomy( 'film_type', $post_types, array(
        'hierarchical'      => true,
        'label'             => 'Film Types',
        'show_ui'           => true,
        'query_var'         => true,
        'show_admin_column' => false,
        'rewrite'           => array( 'with_front' => false ),
        'labels'            => array(
            'search_items'               => 'Search Film Types',
            'popular_items'              => '',
            'all_items'                  => 'All',
            'parent_item'                => '',
            'parent_item_colon'          => '',
            'edit_item'                  => '',
            'update_item'                => '',
            'add_new_item'               => 'Add New Film Type',
            'new_item_name'              => '',
            'separate_items_with_commas' => '',
            'add_or_remove_items'        => '',
            'choose_from_most_used'      => '',
        )
    ));
}
add_action( 'init', 'register_taxonomy_film_type' );

/**
 * TODO
 */
function register_post_type_finish() {
	register_post_type( 'finish', array(
			'label' => 'Finishes',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'finish', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-feedback',
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author' ),
			'labels' => array (
					'name' => 'Finishes',
					'singular_name' => 'Finishes',
					'menu_name' => 'Finishes',
					'add_new' => 'Add Finishes',
					'add_new_item' => 'Add New Finish',
					'edit' => 'Edit',
					'edit_item' => 'Edit Finishes',
					'new_item' => 'New Finish',
					'view' => 'View Finishes',
					'view_item' => 'View Finishes',
					'search_items' => 'Search Finishes',
					'not_found' => 'No Finishes Found',
					'not_found_in_trash' => 'No Finishes Found in Trash',
					'parent' => 'Parent Finish',
			)
		)
	);
}
add_action( 'init', 'register_post_type_finish' );

/**
 * TODO
 */
function register_taxonomy_finish_type() {
    $post_types = array( 'finish' );
    register_taxonomy( 'finish_type', $post_types, array(
        'hierarchical'      => true,
        'label'             => 'Finish Types',
        'show_ui'           => true,
        'query_var'         => true,
        'show_admin_column' => false,
        'rewrite'           => array( 'with_front' => false ),
        'labels'            => array(
            'search_items'               => 'Search Finish Types',
            'popular_items'              => '',
            'all_items'                  => 'All',
            'parent_item'                => '',
            'parent_item_colon'          => '',
            'edit_item'                  => '',
            'update_item'                => '',
            'add_new_item'               => 'Add New Finish Type',
            'new_item_name'              => '',
            'separate_items_with_commas' => '',
            'add_or_remove_items'        => '',
            'choose_from_most_used'      => '',
        )
    ));
}
add_action( 'init', 'register_taxonomy_finish_type' );
