<?php
// Metaboxes Functions
//include_once get_template_directory() . '/pro-framework/page-options/class-apro-metaboxes.php' ;
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_smart_event_posts', 0 );
//create a custom taxonomy name it topics for your posts
function create_smart_event_posts() {
		global $smart_options;
		$event_item_slug = ( isset( $smart_options['event-item-slug'] ) && $smart_options['event-item-slug'] ) ? $smart_options['event-item-slug'] : 'event-item';
		$event_category_slug = ( isset( $smart_options['event-category-slug'] ) && $smart_options['event-category-slug'] ) ? $smart_options['event-category-slug'] : 'event-category';
		$event_tag_slug = ( isset( $smart_options['event-tag-slug'] ) && $smart_options['event-tag-slug'] ) ? $smart_options['event-tag-slug'] : 'event-tag';
		$post_type_labels = array(
			'name'               => 'Events',
			'singular_name'      => 'Event',
			'menu_name'          => 'Event',
			'parent_item_colon'  => 'Parent Event:',
			'all_items'          => 'All Events',
			'view_item'          => 'View Event',
			'add_new_item'       => 'Add New Event',
			'add_new'            => 'Add New',
			'edit_item'          => 'Edit Event',
			'update_item'        => 'Update Event',
			'search_items'       => 'Search events',
			'not_found'          => 'No events found',
			'not_found_in_trash' => 'No events found in Trash',
		);
		$post_type_rewrite = array(
			'slug'       => $event_item_slug,
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		);
		$post_type_args = array(
			'label'               => 'event',
			'description'         => 'Event information pages',
			'labels'              => $post_type_labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments' ),
			'taxonomies'          => array( 'post' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'rewrite'             => $post_type_rewrite,
			'capability_type'     => 'post',
		);
		register_post_type( 'event', $post_type_args );
		$taxonomy_labels = array(
			'name'                       => 'Event',
			'singular_name'              => 'Event',
			'menu_name'                  => 'Categories',
			'all_items'                  => 'All Categories',
			'parent_item'                => 'Parent Category',
			'parent_item_colon'          => 'Parent Category:',
			'new_item_name'              => 'New Category Name',
			'add_new_item'               => 'Add New Category',
			'edit_item'                  => 'Edit Category',
			'update_item'                => 'Update Category',
			'separate_items_with_commas' => 'Separate categories with commas',
			'search_items'               => 'Search categories',
			'add_or_remove_items'        => 'Add or remove categories',
			'choose_from_most_used'      => 'Choose from the most used categories',
		);
		$taxonomy_rewrite = array(
			'slug'         => $event_category_slug,
			'with_front'   => true,
			'hierarchical' => true,
		);
		$taxonomy_args = array(
			'labels'            => $taxonomy_labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'rewrite'           => $taxonomy_rewrite,
		);
		register_taxonomy( 'event-category', 'event', $taxonomy_args );
		$taxonomy_tags_args = array(
			'hierarchical'      => false,
			'show_admin_column' => true,
			'rewrite'           => $event_tag_slug,
			'label'             => 'Tags',
			'singular_label'    => 'Tags',
		);
		register_taxonomy( 'event-tag', array( 'event' ), $taxonomy_tags_args );
}
add_action( 'init', 'create_smart_event_posts' );
add_filter( 'rwmb_meta_boxes', 'startup_pro_register_meta_boxes' );
function startup_pro_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'event',
        'title'      => __( 'Event Information', 'startup-pro' ),
        'post_types' => array( 'event'),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
        	array(
				'name'  => __( 'Subtitle page', 'startup-pro' ),
				'id'    => "startup_pro_subtitle_page_event",
				'desc'  => __( '', 'startup-pro' ),
				'type'  => 'textarea',
			),
			array(
				'type' => 'heading',
				'name' => __( 'General information', 'startup-pro' ),
				'desc' => __( '', 'startup-pro' ),
			),
			array(
				'name'       => __( 'Date event', 'startup-pro' ),
				'id'         => "startup_pro_date_event",
				'type'       => 'date',
				// jQuery date picker options. See here http://api.jqueryui.com/datepicker
				'js_options' => array(
					'appendText'      => __( '', 'startup-pro' ),
					'dateFormat'      => __( 'dd M yy', 'startup-pro' ),
					'changeMonth'     => true,
					'changeYear'      => true,
					'showButtonPanel' => true,
				),
			),
			array(
				'name'       => __( 'Start time event', 'startup-pro' ),
				'id'         => 'startup_pro_start_time_event',
				'type'       => 'time',
				'js_options' => array(
					'stepMinute' => 5,
					'showSecond' => true,
					'stepSecond' => 10,
				),
			),
			array(
				'name'        => __( 'Time format', 'startup-pro' ),
				'id'          => "startup_pro_select_start_hour_event",
				'type'        => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'AM' => __( 'AM', 'startup-pro' ),
					'PM' => __( 'PM', 'startup-pro' ),
					'' => __( 'None', 'startup-pro' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => 'value3',
				'placeholder' => __( 'Select the time format', 'startup-pro' ),
			),
			array(
				'name' => __( 'Finish time event', 'startup-pro' ),
				'id'   => "startup_pro_finish_time_number_event",
				'type'       => 'time',
				'js_options' => array(
					'stepMinute' => 5,
					'showSecond' => true,
					'stepSecond' => 10,
				),
			),
			array(
				'name'        => __( 'Finish hour', 'startup-pro' ),
				'id'          => "startup_pro_finish_start_hour_event",
				'type'        => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'AM' => __( 'AM', 'startup-pro' ),
					'PM' => __( 'PM', 'startup-pro' ),
					'None' => __( 'None', 'startup-pro' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => 'value3',
				'placeholder' => __( 'Select the time format', 'startup-pro' ),
			),
			array(
				'name' => __( 'Price event', 'startup-pro' ),
				'id'   => "startup_pro_price_event",
				'type' => 'number',
				'min'  => 0,
				'step' => 1.00,
			),
			array(
				'name'        => __( 'Currency price', 'startup-pro' ),
				'id'          => "startup_pro_currency_price_event",
				'type'        => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'$' => __( 'Dollar', 'startup-pro' ),
					'&cent;' => __( 'Cent', 'startup-pro' ),
					'&#163;' => __( 'Pound', 'startup-pro' ),
					'&#165;' => __( 'Yen', 'startup-pro' ),
					'&#8355;' => __( 'Franc', 'startup-pro' ),
					'&#8356;' => __( 'Lira', 'startup-pro' ),
					'&#8359;' => __( 'Peseta', 'startup-pro' ),
					'&#8361;' => __( 'Won', 'startup-pro' ),
					'&#8372;' => __( 'Hryvnia', 'startup-pro' ),
					'&#8367;' => __( 'Drachma', 'startup-pro' ),
					'&#8366;' => __( 'Tugrik', 'startup-pro' ),
					'&#8368;' => __( 'German Penny', 'startup-pro' ),
					'&#8370;' => __( 'Guarani', 'startup-pro' ),
					'&#8369;' => __( 'Peso', 'startup-pro' ),
					'&#8371;' => __( 'Austral', 'startup-pro' ),
					'&#8373;' => __( 'Cedi', 'startup-pro' ),
					'&#8365;' => __( 'Kip', 'startup-pro' ),
					'&#8362;' => __( 'New Sheqel', 'startup-pro' ),
					'&#8363;' => __( 'Dong', 'startup-pro' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => 'value1',
				'placeholder' => __( 'Select the currency', 'startup-pro' ),
			),
			array(
				'name' => __( 'URL Ticket', 'startup-pro' ),
				'id'   => "startup_pro_url_ticket_event",
				'desc' => __( '', 'startup-pro' ),
				'type' => 'url',
				'std'  => 'http://www.website.com',
			),
			array(
				'name'  => __( 'Contact number', 'startup-pro' ),
				'id'    => "startup_pro_contact_number_event",
				'desc'  => __( '', 'startup-pro' ),
				'type'  => 'text',
			),
			array(
				'name' => __( 'Contact email', 'startup-pro' ),
				'id'   => "startup_pro_contact_email_event",
				'desc' => __( '', 'startup-pro' ),
				'type' => 'email',
				'std'  => 'contact@yourwebsite.com',
			),
			array(
				'name'       => __( 'Sign ups date event', 'startup-pro' ),
				'id'         => "startup_pro_sign_ups_date_event",
				'type'       => 'date',
				// jQuery date picker options. See here http://api.jqueryui.com/datepicker
				'js_options' => array(
					'appendText'      => __( '', 'startup-pro' ),
					'dateFormat'      => __( 'dd M yy', 'startup-pro' ),
					'changeMonth'     => true,
					'changeYear'      => true,
					'showButtonPanel' => true,
				),
			),
			array(
				'name' => __( 'Contact website', 'startup-pro' ),
				'id'   => "startup_pro_contact_website_event",
				'desc' => __( '', 'startup-pro' ),
				'type' => 'url',
				'std'  => 'http://www.website.com',
			),
			array(
				'name' => __( 'Limits', 'startup-pro' ),
				'id'   => "startup_pro_limits_event",
				'type' => 'number',
				'min'  => 0,
				'step' => 1,
			),
			array(
				'type' => 'heading',
				'name' => __( 'Location', 'startup-pro' ),
				'desc' => __( '', 'startup-pro' ),
			),
			array(
				'id'   => 'startup_pro_address_event',
				'name' => __( 'Address', 'startup-pro' ),
				'type' => 'text',
				'std'  => __( 'London', 'startup-pro' ),
			),
			array(
				'id'            => 'map',
				'name'          => __( 'Location', 'startup-pro' ),
				'type'          => 'map',
				'std'           => '51.492366, -0.119584,15',
				'address_field' => 'startup_pro_address_event',
			),
        )
    );
    
    return $meta_boxes;
}
