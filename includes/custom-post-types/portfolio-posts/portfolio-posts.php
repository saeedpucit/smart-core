<?php
// Metaboxes Functions
//include_once get_template_directory() . '/pro-framework/page-options/class-apro-metaboxes.php' ;
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_startup_pro_portfolio_posts', 0 );
//create a custom taxonomy name it topics for your posts
function create_startup_pro_portfolio_posts() {
		global $smart_options;
		$portfolio_item_slug = ( isset( $smart_options['portfolio-item-slug'] ) && $smart_options['portfolio-item-slug'] ) ? $smart_options['portfolio-item-slug'] : 'portfolio-item';
		$portfolio_category_slug = ( isset( $smart_options['portfolio-category-slug'] ) && $smart_options['portfolio-category-slug'] ) ? $smart_options['portfolio-category-slug'] : 'portfolio-category';
		$portfolio_tag_slug = ( isset( $smart_options['portfolio-tag-slug'] ) && $smart_options['portfolio-tag-slug'] ) ? $smart_options['portfolio-tag-slug'] : 'portfolio-tag';
		$post_type_labels = array(
			'name'               => 'Portfolios',
			'singular_name'      => 'Portfolio',
			'menu_name'          => 'Portfolio',
			'parent_item_colon'  => 'Parent Item:',
			'all_items'          => 'All Portfolios',
			'view_item'          => 'View Item',
			'add_new_item'       => 'Add New Item',
			'add_new'            => 'Add New',
			'edit_item'          => 'Edit Item',
			'update_item'        => 'Update Item',
			'search_items'       => 'Search portfolios',
			'not_found'          => 'No portfolios found',
			'not_found_in_trash' => 'No portfolios found in Trash',
		);
		$post_type_rewrite = array(
			'slug'       => $portfolio_item_slug,
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		);
		$post_type_args = array(
			'label'               => 'portfolio',
			'description'         => 'Portfolio information pages',
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
		register_post_type( 'portfolio', $post_type_args );
		$taxonomy_labels = array(
			'name'                       => 'Portfolio',
			'singular_name'              => 'Portfolio',
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
			'slug'         => $portfolio_category_slug,
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
		register_taxonomy( 'portfolio-category', 'portfolio', $taxonomy_args );
		$taxonomy_tags_args = array(
			'hierarchical'      => false,
			'show_admin_column' => true,
			'rewrite'           => $portfolio_tag_slug,
			'label'             => 'Tags',
			'singular_label'    => 'Tags',
		);
		register_taxonomy( 'portfolio-tag', array( 'portfolio' ), $taxonomy_tags_args );
	}
	add_action( 'init', 'create_startup_pro_portfolio_posts' );
