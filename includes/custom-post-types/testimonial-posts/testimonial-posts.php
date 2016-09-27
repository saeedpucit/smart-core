<?php
// Metaboxes Functions
//include_once get_template_directory() . '/pro-framework/page-options/class-apro-metaboxes.php' ;
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_testimonial_custom_posts', 0 );
//create a custom taxonomy name it topics for your posts
function create_testimonial_custom_posts() {
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
	$labels = array(
		'name'          => esc_html__( 'Testiomonials Categories', 'startup-pro' ),
		'singular_name' => esc_html__( 'Testiomonials Category', 'startup-pro' ),
		'all_items'     => esc_html__( 'All Testimonials Categories', 'startup-pro' ),
		'edit_item'     => esc_html__( 'Edit Category', 'startup-pro' ),
		'update_item'   => esc_html__( 'Update Category', 'startup-pro' ),
		'add_new_item'  => esc_html__( 'Add New Category', 'startup-pro' ),
		'new_item_name' => esc_html__( 'New Category Name', 'startup-pro' ),
		'menu_name'     => esc_html__( 'Testimonials Categories', 'startup-pro' ),
	);
	// Now register the taxonomy
	register_taxonomy( 'testimonials-categories', array( 'startup_pro_reviews' ), array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true
	) );
}
function register_testimonial_post_type() {
	register_post_type( 'startup_pro_reviews',
		array(
			'labels'        => array(
				"name"          => esc_html__( 'Testimonials', 'startup-pro' ),
				"singular_name" => esc_html__( 'Testimonial', 'startup-pro' )
			),
			"public"        => true,
			'menu_position' => 5,
			'taxonomies'    => array( 'testimonials-categories' ),
			"rewrite"       => array( 'slug' => 'startup_pro_reviews' ),
			"supports"      => array( 'title', 'thumbnail', 'editor' )
		)
	);
}
function startup_pro_testimonial_posts_type_meta_filter( $metaboxes ) {
	$testimonials_fields   = array();
	$testimonials_fields[] = array(
		'title'    => esc_html__( 'Testimonials', 'startup-pro' ),
		'subtitle' => esc_html__( '', 'startup-pro' ),
		'fields'   => array(
			array(
				'id'      => 'job_reference',
				'type'    => 'text',
				'title'   => esc_html__( 'Job reference', 'startup-pro' ),
				'default' => esc_html__( 'Job reference', 'startup-pro' )
			),
			array(
				'id'    => 'external_link',
				'type'  => 'text',
				'title' => esc_html__( 'External link', 'startup-pro' )
			)
		)
	);
	$metaboxes[] = array(
		'id'         => 'webuild-testimonial-meta',
		'title'      => esc_html__( 'Testimonial info', 'startup-pro' ),
		'post_types' => array(
			'startup_pro_reviews'
		),
		'position'   => 'normal', // normal, advanced, side
		'priority'   => 'high', // high, core, default, low
		'sidebar'    => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'   => $testimonials_fields
	);
	return $metaboxes;
}
add_action( 'init', 'register_testimonial_post_type' );
add_filter( 'custom_post_type_meta_filter', 'startup_pro_testimonial_posts_type_meta_filter', 10, 1 );
?>