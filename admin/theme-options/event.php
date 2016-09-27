<?php

// STORY

Redux::setSection( $opt_name, array(

	'title'    => esc_html__( 'Event', 'startup-pro' ),
	'subtitle' => esc_html__( '', 'startup-pro' ),
	'icon'     => 'fa fa-lightbulb-o',
	'fields'   => array(
		array(
			'id'     => 'event-section-start',
			'type'   => 'section',
			'indent' => true
		),
		array(
			'id'       => 'event-show-previous-next-pagination',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show Previous/Next Pagination', 'startup-pro' ),
			'subtitle' => esc_html__( '', 'startup-pro' ),
			'subtitle' => esc_html__( 'This option allows you to enable or disable the event navigation.', 'startup-pro' ),
			'default'  => true
		),
		array(
			'id'       => 'show-comments-event',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show Comments', 'startup-pro' ),
			'subtitle' => esc_html__( '', 'startup-pro' ),
			'subtitle' => esc_html__( 'This allows you to enable or disable the comments on the event section', 'startup-pro' ),
			'default'  => false
		),
		array(
			'id'       => 'event_recent_posts',
			'type'     => 'switch',
			'title'    => esc_html__( 'Recent posts', 'startup-pro' ),
			'subtitle' => esc_html__( 'This allows you to enable or disable the recent event posts.', 'startup-pro' ),
			'default'  => false
		),
		array(
			'id'       => 'event_single_recents',
			'type'     => 'select',
			'title'    => esc_html__( 'Single Recent Posts', 'startup-pro' ),
			'subtitle' => esc_html__( 'This allows you to select what you want to show on the single post page.', 'startup-pro' ),
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
			'id'       => 'event_single_recents_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Single Recent Title', 'startup-pro' ),
			'subtitle' => esc_html__( 'From here you can set the title for a certain section, only if you have previously set "Recent Posts" ON', 'startup-pro' ),
			'required' => array(
				'blog_recent_posts',
				'equals',
				'1'
			),
			'default'  => ''
		),
		array(
			'id'       => 'event_related_posts_number',
			'type'     => 'text',
			'title'    => esc_html__( 'Maximum number of related post', 'startup-pro' ),
			'subtitle' => esc_html__( 'This option allows you to set the related posts number you want to appear on the post page.Default value is 5 posts.', 'startup-pro' ),
			'validate' => 'number',
			'msg'      => esc_html__( 'Please enter a number', 'startup-pro' ),
			'default'  => '2',
			'required' => array(
				'blog_recent_posts',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'event-sidebar-right',
			'title'    => esc_html__( 'Sidebar right', 'startup-pro' ),
			'subtitle' => esc_html__( 'This allows you to set the sidebar that is displayed on the right of the single post page.', 'startup-pro' ),
			'type'     => 'select',
			'data'     => 'sidebars',
		),
		array(
			'id'       => 'event-sidebar-left',
			'title'    => esc_html__( 'Sidebar left', 'startup-pro' ),
			'subtitle' => esc_html__( 'This allows you to set the sidebar that is displayed on the left of the single post page.', 'startup-pro' ),
			'type'     => 'select',
			'data'     => 'sidebars'
		),
		array(
			'id'      => 'event-item-slug',
			'type'    => 'text',
			'title'   => esc_html__( 'Event Item Slug', 'startup-pro' ),
			'default' => 'event-item'
		),
		array(
			'id'      => 'event-category-slug',
			'type'    => 'text',
			'title'   => esc_html__( 'Event Category Slug', 'startup-pro' ),
			'default' => 'event-category'
		),
		array(
			'id'      => 'event-tag-slug',
			'type'    => 'text',
			'title'   => esc_html__( 'Event Tag Slug', 'startup-pro' ),
			'default' => 'event-tag'
		),
		array(
			'id'       => 'slug_info_critical',
			'type'     => 'info',
			'style'    => 'critical',
			'icon'     => 'el-icon-info-sign',
			'title'    => esc_html__( 'Avoid Conflict', 'startup-pro' ),
			'subtitle' => esc_html__( 'Please do not set slug name as a same page slug. Can not be same with a page slug name.', 'startup-pro' )
		),
		array(
			'id'     => 'sidebar-widgets-section-end',
			'type'   => 'section',
			'indent' => false
		),
	)
) );



?>