<?php
// Metaboxes Functions
//include_once get_template_directory() . '/pro-framework/page-options/class-apro-metaboxes.php' ;
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_staff_custom_posts', 0 );
//create a custom taxonomy name it topics for your posts
function create_staff_custom_posts() {
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
	$labels1 = array(
		'name'          => esc_html__( 'Groups', 'startup-pro' ),
		'singular_name' => esc_html__( 'Group', 'startup-pro' ),
		'all_items'     => esc_html__( 'All Groups', 'startup-pro' ),
		'edit_item'     => esc_html__( 'Edit Group', 'startup-pro' ),
		'update_item'   => esc_html__( 'Update Group', 'startup-pro' ),
		'add_new_item'  => esc_html__( 'Add New Group', 'startup-pro' ),
		'new_item_name' => esc_html__( 'New Group Name', 'startup-pro' ),
		'menu_name'     => esc_html__( 'Staff Groups', 'startup-pro' ),
	);
	$labels2 = array(
		'name'          => esc_html__( 'Staff Categories', 'startup-pro' ),
		'singular_name' => esc_html__( 'Staff Category', 'startup-pro' ),
		'all_items'     => esc_html__( 'All Categories', 'startup-pro' ),
		'edit_item'     => esc_html__( 'Edit Category', 'startup-pro' ),
		'update_item'   => esc_html__( 'Update Category', 'startup-pro' ),
		'add_new_item'  => esc_html__( 'Add New Category', 'startup-pro' ),
		'new_item_name' => esc_html__( 'New Category Name', 'startup-pro' ),
		'menu_name'     => esc_html__( 'Staff Categories', 'startup-pro' ),
	);
	// Now register the taxonomy
	register_taxonomy( 'groups', array( 'startup_pro_staff' ), array(
		'hierarchical'      => true,
		'labels'            => $labels1,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true
	) );
	register_taxonomy( 'staff-categories', array( 'startup_pro_staff' ), array(
		'hierarchical'      => true,
		'labels'            => $labels2,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true
	) );
}
function register_staff_post_type() {
	register_post_type( 'startup_pro_staff',
		array(
			'labels'        => array(
				'name'          => esc_html__( 'Staff members', 'startup-pro' ),
				'singular_name' => esc_html__( 'Staff member', 'startup-pro' )
			),
			'public'        => true,
			'menu_position' => 5,
			'taxonomies'    => array( 'groups', 'staff-categories' ),
			'rewrite'       => array( 'slug' => 'staff' ),
			'supports'      => array( 'title', 'thumbnail', 'editor' ),
			'has_archive' => true,
		)
	);
}
function startup_pro_staff_posts_type_meta_filter( $metaboxes ) {
	$staff_fields   = array();
	$staff_fields[] = array(
		'title'    => esc_html__( 'Staff', 'startup-pro' ),
		'subtitle' => esc_html__( '', 'startup-pro' ),
		'fields'   => array(
			array(
				'id'          => 'staff_member_description',
				'type'        => 'textarea',
				'title'       => esc_html__( 'Staff Member Description ( this is the text that will show up in the auto generated section and in shortcodes )', 'startup-pro' ),
				'placeholder' => 'Description here'
			),
			array(
				'id'          => 'staff_member_website_url',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member website url ( use http:// )', 'startup-pro' ),
				'placeholder' => ''
			),
			array(
				'id'          => 'staff_member_email_adress',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member email adress', 'startup-pro' ),
				'placeholder' => '',
				'validate'    => 'email',
			),
			array(
				'id'          => 'staff_member_facebook_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Facebook link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_twitter_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Twitter link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_linkedin_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Linkedin link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_skype_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Skype link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_blogger_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Blogger link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_vimeo_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Vimeo link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_youtube_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Youtube link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_dribbble_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Dribbble link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_deviantart_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Deviantart link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_reddit_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Reddit link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_behance_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Behance link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_digg_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Digg link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_flickr_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Flickr link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_instagram_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Instagram link', 'startup-pro' ),
				'placeholder' => '',
			),
			array(
				'id'          => 'staff_member_google_plus_link',
				'type'        => 'text',
				'title'       => esc_html__( 'Staff Member Google Plus link', 'startup-pro' ),
				'placeholder' => '',
			),
		)
	);
	$metaboxes[] = array(
		'id'         => 'webuild-staff-meta',
		'title'      => esc_html__( 'Staff info', 'startup-pro' ),
		'post_types' => array(
			'startup_pro_staff'
		),
		'position'   => 'normal', // normal, advanced, side
		'priority'   => 'high', // high, core, default, low
		'sidebar'    => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'   => $staff_fields
	);
	return $metaboxes;
}
add_action( 'init', 'register_staff_post_type' );
add_filter( 'custom_post_type_meta_filter', 'startup_pro_staff_posts_type_meta_filter', 10, 1 );
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( class_exists( 'acf' ) ) {
	include_once(WP_PLUGIN_DIR . '/advanced-custom-fields/acf.php');
	define( 'ACF_LITE', true );
	if ( function_exists( "register_field_group" ) ) {
		register_field_group( array(
			'id'         => 'acf_staff',
			'title'      => 'Staff',
			'fields'     => array(
				array(
					'key'           => 'field_559d3ac3d0592',
					'label'         => 'Staff Member Description ( this is the text that will show up in the auto generated section and in shortcodes )',
					'name'          => 'staff_member_description',
					'type'          => 'textarea',
					'default_value' => '',
					'placeholder'   => 'Description here',
					'maxlength'     => '',
					'rows'          => '',
					'formatting'    => 'br',
				),
				array(
					'key'           => 'field_559d425007b30',
					'label'         => 'Staff Member website url ( use http:// )',
					'name'          => 'staff_member_website_url',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d428221a98',
					'label'         => 'Staff Member email adress',
					'name'          => 'staff_member_email_adress',
					'type'          => 'email',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
				),
				array(
					'key'           => 'field_559d4364f975a',
					'label'         => 'Staff Member Facebook link',
					'name'          => 'staff_member_facebook_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d43c11c01f',
					'label'         => 'Staff Member Twitter link',
					'name'          => 'staff_member_twitter_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d45da4366b',
					'label'         => 'Staff Member Linkedin link',
					'name'          => 'staff_member_linkedin_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d46978660b',
					'label'         => 'Staff Member Skype link',
					'name'          => 'staff_member_skype_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d46ae8660c',
					'label'         => 'Staff Member Blogger link',
					'name'          => 'staff_member_blogger_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d46b88660d',
					'label'         => 'Staff Member Vimeo link',
					'name'          => 'staff_member_vimeo_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d46c28660e',
					'label'         => 'Staff Member Youtube link',
					'name'          => 'staff_member_youtube_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d46cc8660f',
					'label'         => 'Staff Member Dribbble link',
					'name'          => 'staff_member_dribbble_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d46d486610',
					'label'         => 'Staff Member Deviantart link',
					'name'          => 'staff_member_deviantart_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d46e286611',
					'label'         => 'Staff Member Reddit link',
					'name'          => 'staff_member_reddit_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d46eb86612',
					'label'         => 'Staff Member Behance link',
					'name'          => 'staff_member_behance_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d46f886613',
					'label'         => 'Staff Member Digg link',
					'name'          => 'staff_member_digg_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d470186614',
					'label'         => 'Staff Member Flickr link',
					'name'          => 'staff_member_flickr_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d470e86615',
					'label'         => 'Staff Member Instagram link',
					'name'          => 'staff_member_instagram_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
				array(
					'key'           => 'field_559d471886616',
					'label'         => 'Staff Member Google Plus link',
					'name'          => 'staff_member_google_plus_link',
					'type'          => 'text',
					'default_value' => '',
					'placeholder'   => '',
					'prepend'       => '',
					'append'        => '',
					'formatting'    => 'html',
					'maxlength'     => '',
				),
			),
			'location'   => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'startup_pro_staff',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options'    => array(
				'position'       => 'normal',
				'layout'         => 'no_box',
				'hide_on_screen' => array(),
			),
			'menu_order' => 0,
		) );
	}
}
?>