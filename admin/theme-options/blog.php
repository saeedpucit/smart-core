<?php

//BLOG

$blogImages = array(
	'full'  => array(
		'alt' => 'Full width - no container',
		'img' => smart_core_plugin_url() . '/assets/images/sidebars/full.jpg'
	),
	'right' => array(
		'alt' => 'Right sidebar',
		'img' => smart_core_plugin_url() . '/assets/images/sidebars/right.jpg'
	),
	'left'  => array(
		'alt' => 'Left sidebar',
		'img' => smart_core_plugin_url() . '/assets/images/sidebars/left.jpg'
	)
);

Redux::setSection( $opt_name, array(
	'title'  => 'Blog',
	'icon'   => 'fa fa-cog',
	'fields' => array(
		array(
			'id'       => 'blog-section-start',
			'type'     => 'section',
			'subtitle' => esc_html__( 'From this section you can manage the overall appearance of your Blog.', 'startup-pro' ),
			'indent'   => true
		),
		array(
			'id'       => 'blog_layout',
			'type'     => 'select',
			'title'    => esc_html__( 'Blog Layout', 'startup-pro' ),
			'subtitle' => esc_html__( 'This option allows you to set the default layout for your blog.', 'startup-pro' ),
			'options'  => array(
				'default' => 'Blog Large Image',
				'medium'  => 'Blog Medium Image',
				'small'   => 'Blog Small Image',
				'masonry' => 'Blog Masonry',
				'grid'    => 'Blog Grid'
			),
			'default'  => 'medium'
		),
		array(
			'id'       => 'blog_column',
			'type'     => 'select',
			'title'    => esc_html__( 'Blog Columns', 'startup-pro' ),
			'subtitle' => esc_html__( 'From here you can set the default columns for your blog.', 'startup-pro' ),
			'options'  => array(
				2 => '2 Columns',
				3 => '3 Columns',
				4 => '4 Columns',
				6 => '6 Columns'
			),
			'default'  => 2,
			'required' => array(
				array(
					'blog_layout',
					'not',
					'default'
				),
				array(
					'blog_layout',
					'not',
					'medium'
				),
				array(
					'blog_layout',
					'not',
					'small'
				)
			)
		),
		array(
			'id'       => 'blog_sidebar',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Blog Sidebar', 'startup-pro' ),
			'subtitle' => esc_html__( 'This option allows you to set the default position for your blog sidebar.', 'startup-pro' ),
			'default'  => 'right',
			'options'  => $blogImages
		),
		array(
			'id'       => 'sidebar-id',
			'title'    => esc_html__( 'Select Sidebar', 'startup-pro' ),
			'subtitle' => '',
			'type'     => 'select',
			'subtitle' => esc_html__( 'This option allows you to set the default position for your blog sidebar.', 'startup-pro' ),
			'data'     => 'sidebars',
			'default'  => 'None'
		),
		array(
			'id'             => 'blog_widget',
			'type'           => 'select',
			'title'          => esc_html__( 'Blog Sidebar Widget', 'startup-pro' ),
			'data'           => 'sidebars',
			'default_option' => 'Select a sidebar (default primary)',
			'required'       => array(
				'blog_sidebar',
				'contains',
				'right left'
			)
		),
		array(
			'id'       => 'blog_image_size',
			'type'     => 'select',
			'title'    => esc_html__( 'Blog Featured Image Size', 'startup-pro' ),
			'options'  => startup_pro_get_image_sizes( true, false ),  /* startup_pro_get_image_sizes( true, false ), */
			'subtitle' => esc_html__( 'This option allows you to set the default blog featured image size. The default value is medium.', 'startup-pro' ),
			'default'  => 'blog-small'
		),
		array(
			'id'       => 'blog_pagination',
			'type'     => 'select',
			'title'    => esc_html__( 'Blog Pagination', 'startup-pro' ),
			'subtitle' => esc_html__( 'From here you can set the default pagination style, eg: pagination or load more.', 'startup-pro' ),
			'options'  => array(
				'pagination' => 'Pagination (default)',
				'load'       => 'Load More',
				'hide'       => 'Hide'
			),
			'default'  => 'load'
		),
		array(
			'id'       => 'excerpt-length',
			'type'     => 'text',
			'title'    => esc_html__( 'Excerpt Length', 'startup-pro' ),
			'subtitle' => esc_html__( 'This option enables you to choose how many words the excerpt should have: eg:77', 'startup-pro' ),
			'validate' => 'numeric',
			'default'  => '15'
		),

		array(
			'id'       => 'blog-read-more-color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Read more buttons', 'startup-pro' ),
			'subtitle' => esc_html__( 'This option will change the read more button colors.', 'startup-pro' ),
			'active'   => false,
			'visited'  => false,
			'default'  => array(
				'regular' => '#F92740',
				'hover'   => '#00d149'
			),
			'compiler' => true
		),
		array(
			'id'     => 'blog-section-end',
			'type'   => 'section',
			'indent' => false
		),
	)
) );

Redux::setSection( $opt_name, array(
	'title'      => esc_html__( 'Blog post', 'startup-pro' ),
	'subtitle'   => esc_html__( ' ', 'startup-pro' ),
	'subsection' => true,
	'icon'       => 'fa fa-gears',
	'fields'     => array(
		array(
			'id'     => 'blog-single-section-start',
			'type'   => 'section',
			'indent' => true
		),
		array(
			'id'       => 'single-layout',
			'title'    => esc_html__( 'Layout on single post page', 'startup-pro' ),
			'subtitle' => esc_html__( 'This allows you to set the layout on single post page.', 'startup-pro' ),
			'default'  => 'right',
			'type'     => 'image_select',
			'options'  => $blogImages
		),
		array(
			'id'       => 'single-sidebar-right',
			'title'    => esc_html__( 'Sidebar right', 'startup-pro' ),
			'subtitle' => esc_html__( 'This allows you to set the sidebar that is displayed on the right of the single post page.', 'startup-pro' ),
			'type'     => 'select',
			'data'     => 'sidebars',
		),
		array(
			'id'       => 'single-sidebar-left',
			'title'    => esc_html__( 'Sidebar left', 'startup-pro' ),
			'subtitle' => esc_html__( 'This allows you to set the sidebar that is displayed on the left of the single post page.', 'startup-pro' ),
			'type'     => 'select',
			'data'     => 'sidebars'
		),
		array(
			'id'       => 'blog_featured_image',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show Featured Image in Blog Single', 'startup-pro' ),
			'subtitle' => esc_html__( 'This option shows the "featured image" on the single post page', 'startup-pro' ),
			'default'  => true
		),
		array(
			'id'       => 'blog_recent_posts',
			'type'     => 'switch',
			'title'    => esc_html__( 'Recent posts', 'startup-pro' ),
			'subtitle' => esc_html__( 'This option enables you to show or hide the "recent posts" on the post page', 'startup-pro' ),
			'default'  => true
		),
		array(
			'id'       => 'single_recents',
			'type'     => 'select',
			'title'    => esc_html__( 'Single Recent Posts', 'startup-pro' ),
			'subtitle' => esc_html__( 'This option allows you to choose what you wish to show on the single post page', 'startup-pro' ),
			'options'  => array(
				'recent'    => 'Recent Posts',
				'related'   => 'Related Posts',
				'random'    => 'Random Posts',
				'commented' => 'Most Commented Posts'
			),
			'default'  => 'recent',
			'required' => array(
				'blog_recent_posts',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'single_recents_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Single Recent Title', 'startup-pro' ),
			'subtitle' => esc_html__( 'From here you can select the title of the section, in case you have set the "Recent Posts" ON.', 'startup-pro' ),
			'required' => array(
				'blog_recent_posts',
				'equals',
				'1'
			),
			'default'  => 'Recent Posts'
		),
		array(
			'id'       => 'related_posts_number',
			'type'     => 'text',
			'title'    => esc_html__( 'Maximum number of related post', 'startup-pro' ),
			'subtitle' => esc_html__( 'From here you can select the number of related posts that you wish to show on the post page. Default value is 6 posts.', 'startup-pro' ),
			'validate' => 'number',
			'msg'      => esc_html__( 'Please enter a number', 'startup-pro' ),
			'default'  => '6',
			'required' => array(
				'blog_recent_posts',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'blog_author_info',
			'type'     => 'switch',
			'title'    => esc_html__( 'About author', 'startup-pro' ),
			'subtitle' => esc_html__( 'When this option is enabled, it will display the author of the post information.', 'startup-pro' ),
			'default'  => true
		),
		array(
			'id'       => 'blog_single_nav',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post navigation', 'startup-pro' ),
			'subtitle' => esc_html__( 'When this option is enabled, it will show the post navigation.', 'startup-pro' ),
			'default'  => true
		),
		array(
			'id'       => 'blog_comments',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show Comments in Blog Single', 'startup-pro' ),
			'subtitle' => esc_html__( 'When this option is enabled, it will show the comments.', 'startup-pro' ),
			'default'  => true
		),
	)
) );

?>