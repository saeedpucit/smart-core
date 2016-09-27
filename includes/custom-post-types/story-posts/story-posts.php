<?php
add_action( 'init', 'create_smart_stories_posts', 0 );
function create_smart_stories_posts() {
	global $smart_options;
	$smart_story_item_slug = ( isset( $smart_options['story-item-slug'] ) && $smart_options['story-item-slug'] ) ? $smart_options['story-item-slug'] : 'story-item';
	$smart_story_category_slug = ( isset( $smart_options['story-category-slug'] ) && $smart_options['story-category-slug'] ) ? $smart_options['story-category-slug'] : 'story-category';
	$smart_story_tag_slug = ( isset( $smart_options['story-tag-slug'] ) && $smart_options['story-tag-slug'] ) ? $smart_options['story-tag-slug'] : 'story-tag';
	$smart_story_post_type_labels = array(
			'name'               => 'Stories',
			'singular_name'      => 'Story',
			'menu_name'          => 'Story',
			'parent_item_colon'  => 'Parent Item:',
			'all_items'          => 'All Stories',
			'view_item'          => 'View Story',
			'add_new_item'       => 'Add New Story',
			'add_new'            => 'Add New Story',
			'edit_item'          => 'Edit Story',
			'update_item'        => 'Update Story',
			'search_items'       => 'Search stories',
			'not_found'          => 'No stories found',
			'not_found_in_trash' => 'No stories found in Trash',
		);
		$smart_story_post_type_rewrite = array(
			'slug'       => $smart_story_item_slug,
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		);
		$smart_post_type_args = array(
			'label'               => 'story',
			'description'         => 'Story information pages',
			'labels'              => $smart_story_post_type_labels,
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
			'rewrite'             => $smart_story_post_type_rewrite,
			'capability_type'     => 'post',
		);
		register_post_type( 'story', $smart_post_type_args );
		$smart_story_taxonomy_labels = array(
			'name'                       => 'Story',
			'singular_name'              => 'Story',
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
		$smart_story_taxonomy_rewrite = array(
			'slug'         => $smart_story_category_slug,
			'with_front'   => true,
			'hierarchical' => true,
		);
		$smart_taxonomy_args = array(
			'labels'            => $smart_story_taxonomy_labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'rewrite'           => $smart_story_taxonomy_rewrite,
		);
		register_taxonomy( 'story-category', 'story', $smart_taxonomy_args );
	$smart_taxonomy_tags_args = array(
		'hierarchical'      => false,
		'show_admin_column' => true,
		'rewrite'           => $smart_story_tag_slug,
		'label'             => 'Tags',
		'singular_label'    => 'Tags',
	);
	register_taxonomy( 'story-tag', array( 'story' ), $smart_taxonomy_tags_args );
}
add_action( 'init', 'create_smart_stories_posts' );