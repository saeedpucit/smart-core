<?php
// Metaboxes Functions
//include_once get_template_directory() . '/pro-framework/page-options/class-apro-metaboxes.php' ;
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_client_custom_posts', 0 );
//create a custom taxonomy name it topics for your posts
function create_client_custom_posts() {
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
	$labels4 = array(
		'name'          => esc_html__( 'Clients Categories', 'startup-pro' ),
		'singular_name' => esc_html__( 'Clients Category', 'startup-pro' ),
		'all_items'     => esc_html__( 'All Clients Categories', 'startup-pro' ),
		'edit_item'     => esc_html__( 'Edit Category', 'startup-pro' ),
		'update_item'   => esc_html__( 'Update Category', 'startup-pro' ),
		'add_new_item'  => esc_html__( 'Add New Category', 'startup-pro' ),
		'new_item_name' => esc_html__( 'New Category Name', 'startup-pro' ),
		'menu_name'     => esc_html__( 'Clients Categories', 'startup-pro' ),
	);
	// Now register the taxonomy
	register_taxonomy( 'clients-categories', array( 'startup_pro_clients' ), array(
		'hierarchical'      => true,
		'labels'            => $labels4,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true
	) );
}
function register_client_post_type() {
	register_post_type( 'startup_pro_clients',
		array(
			'labels'        => array(
				"name"          => esc_html__( 'Clients', 'startup-pro' ),
				"singular_name" => esc_html__( 'Client', 'startup-pro' )
			),
			"public"        => true,
			'menu_position' => 5,
			'taxonomies'    => array( 'clients-categories' ),
			"rewrite"       => array( 'slug' => 'startup_pro_clients' ),
			"supports"      => array( 'title', 'thumbnail' )
		)
	);
}
function startup_pro_client_posts_type_meta_filter( $metaboxes ) {
	$clients_fields   = array();
	$clients_fields[] = array(
		'title'    => esc_html__( 'Client', 'startup-pro' ),
		'subtitle' => esc_html__( '', 'startup-pro' ),
		'fields'   => array(
			array(
				'id'    => 'client_link',
				'type'  => 'text',
				'title' => esc_html__( 'Client Link', 'startup-pro' )
			)
		)
	);
	$metaboxes[] = array(
		'id'         => 'webuild-client-meta',
		'title'      => esc_html__( 'Client info', 'startup-pro' ),
		'post_types' => array(
			'startup_pro_clients'
		),
		'position'   => 'normal', // normal, advanced, side
		'priority'   => 'high', // high, core, default, low
		'sidebar'    => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'   => $clients_fields
	);
	return $metaboxes;
}
add_action( 'init', 'register_client_post_type' );
add_filter( 'custom_post_type_meta_filter', 'startup_pro_client_posts_type_meta_filter', 10, 1 );