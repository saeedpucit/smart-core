<?php







$pageTitleImages = array(







	'left'   => array(







		'alt' => 'Left',







		'img' =>  smart_core_plugin_url() . '/assets/images/page-title/left.jpg'







	),







	'center' => array(







		'alt' => 'Center',







		'img' =>  smart_core_plugin_url() . '/assets/images/page-title/center.jpg'







	),







	'right'  => array(







		'alt' => 'Right',







		'img' =>  smart_core_plugin_url() . '/assets/images/page-title/right.jpg'







	),







);







$breadcrumbsImages = array(







	'left'  => array(







		'alt' => 'Left',







		'img' =>  smart_core_plugin_url() . '/assets/images/breadcrumbs/left.jpg'







	),







	'right' => array(







		'alt' => 'Right',







		'img' => smart_core_plugin_url() . '/assets/images/breadcrumbs/right.jpg'







	),







);







//PAGE TITLE BAR







Redux::setSection( $opt_name, array(







	'title'    => esc_html__( 'Page title', 'startup-pro' ),







	'subtitle' => esc_html__( '', 'startup-pro' ),







	'icon'     => 'fa fa-text-width',







	'fields'   => array(







		array(







			'id'       => 'page-title-section-start',







			'type'     => 'section',







			'subtitle' => 'This option enables you to set default settings for the pages title area.',







			'indent'   => true







		),







		array(







			'id'       => 'page-title-bar',







			'type'     => 'switch',







			'title'    => esc_html__( 'Page Title Bar', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to enable/disable the page title bar on all pages.', 'startup-pro' ),







			'default'  => true







		),







		array(







			'id'       => 'page-title-bar-height',







			'type'     => 'dimensions',







			'width'    => false,







			'units'    => 'px',







			'title'    => esc_html__( 'Page Title Bar Height', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to set the height of the page title bar. The default value is 150px.', 'startup-pro' ),







			'default'  => array(







				'height' => '250px',







				'units'  => 'px'







			),







			'compiler' => array(







				'.page-header .title-wrapper'







			),







			'required' => array(







				'page-title-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'page-title-bar-align',







			'title'    => esc_html__( 'Page Title Bar Alignment', 'startup-pro' ),







			'subtitle' => esc_html__( 'From here you can set the alignment for the page title bar : left, centered and right.', 'startup-pro' ),







			'default'  => 'left',







			'type'     => 'image_select',







			'options'  => $pageTitleImages,







			'compiler' => true,







			'required' => array(







				'page-title-bar',







				'equals',







				'1'







			)







		),




		array(         
		    'id'       => 'background-image-page-title',
		    'type'     => 'background',
		    'title'    => __( 'Background Image For Page title', 'startup-pro' ),
		    'subtitle' => __( 'This allows you to set the background color or image for the page title bar', 'startup-pro' ),
		    'default'               => array(
				'background-color'    => '#F92740',
				'background-repeat'   => 'repeat',
				'background-position' => 'center center',
				'background-size'     => 'cover',
				'media'               => array(
					'id'        => '',
					'height'    => '',
					'width'     => '',
					'thumbnail' => ''
				)
			),
			'compiler'              => true,
			'required'              => array(
				'page-title-bar',
				'equals',
				'1'
			)
		),


		array(
			'id'       => 'page-title-parallax',
			'type'     => 'switch',
			'title'    => esc_html__( 'Parallax', 'startup-pro' ),
			'subtitle' => esc_html__( '', 'startup-pro' ),
			'subtitle' => esc_html__( 'Add in a parallax effect to the image you have set for the page title.', 'startup-pro' ),
			'default'  => false,
			'compiler' => true,
			'required' => array(
				'page-title-bar',
				'equals',
				'1'
			)
		),







		array(







			'id'       => 'page-title-fading',







			'type'     => 'switch',







			'title'    => esc_html__( 'Fade out effect', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This adds up a fancy effect for the page title bar.', 'startup-pro' ),







			'default'  => true,







			'required' => array(







				'page-title-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'show-page-title-color-overlay',







			'type'     => 'switch',







			'title'    => esc_html__( 'Color overlay', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to add a layer of color to display it on top of the selected image in the Background Image For Page title section.', 'startup-pro' ),







			'default'  => false,







			'required' => array(







				'page-title-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'          => 'page-title-color-overlay',







			'type'        => 'color',







			'title'       => esc_html__( 'Color for the page title overlay', 'startup-pro' ),







			'subtitle'    => esc_html__( '', 'startup-pro' ),







			'default'     => '#000000',







			'validate'    => 'color',







			'transparent' => false,







			'compiler'    => array(







				'.page-header .overlay'







			),







			'mode'        => 'background',







			'required'    => array(







				'show-page-title-color-overlay',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'page-title-color-overlay-opacity',







			'type'     => 'spinner',







			'title'    => esc_html__( 'Opacity for the page title overlay', 'startup-pro' ),







			'subtitle' => esc_html__( 'You can select the opacity levels of the overlay color in the Background Image For Page title section.', 'startup-pro' ),







			'default'  => '25',







			'min'      => '0',







			'step'     => '1',







			'max'      => '100',







			'compiler' => true,







			'required' => array(







				'show-page-title-color-overlay',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'add-page-title-shadow',







			'type'     => 'switch',







			'title'    => esc_html__( 'Page title shadow', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to add up a shadow effect on the title bar section.', 'startup-pro' ),







			'default'  => false,







			'compiler' => true,







			'required' => array(







				'page-title-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'page-title-font-atributes',







			'type'     => 'typography',







			'title'    => esc_html__( 'Page Title Font attributes', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option enables you to format the text for the page title', 'startup-pro' ),







			'google'   => true,







			'default'  => array(







				'color'        => '#ffffff',







				'font-size'    => '48px',







				'font-weight'  => '800',







				'font-family'  => 'Open Sans',







				'line-height'  => '48px',







				'font-options' => '',







				'google'       => 1,







				'font-style'   => '',







				'subsets'      => '',







				'text-align'   => ''







			),







			'compiler' => array(







				'.page-header .title-wrapper h1'







			),







			'required' => array(







				'page-title-bar',







				'equals',







				'1'







			)







		),









		array(







			'id'       => 'breadcrumbs-section-start',







			'type'     => 'section',







			'title'    => esc_html__( 'Breadcrumbs', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option enables you to set default settings for the pages title area', 'startup-pro' ),







			'indent'   => true,







			'required' => array(







				'page-title-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'display-breadcrumbs',







			'type'     => 'switch',







			'title'    => esc_html__( 'Display Breadcrumbs', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to enable/disable the breadcrumbs on all pages.', 'startup-pro' ),







			'default'  => true,







			'required' => array(







				'page-title-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'breadcrumbs-align',







			'title'    => esc_html__( 'Breadcrumbs align', 'startup-pro' ),







			'subtitle' => esc_html__( 'From here you can set the alignment for the breadcrumbs: left or right.', 'startup-pro' ),







			'default'  => 'right',







			'type'     => 'image_select',







			'options'  => $breadcrumbsImages,







			'compiler' => true,







			'required' => array(







				'display-breadcrumbs',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'hide-breadcrumbs-mobile',







			'type'     => 'switch',







			'title'    => esc_html__( 'Hide Breadcrumbs on Mobile Devices', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to hide breadcrumbs on mobile devices.', 'startup-pro' ),







			'default'  => true,







			'required' => array(







				'display-breadcrumbs',







				'equals',







				'1'







			)







		),







		



		array(
		    'id'          => 'breadcrumbs-font-atributes',
		    'type'        => 'typography', 
		    'title'       => __( 'Breadcrumbs Font attributes', 'startup-pro' ),
		    'google'      => true, 
		    'font-backup' => true,
		    'compiler'      => array('.page-header .pro-breadcrumb span a'),
		    'units'       =>'px',
		    'subtitle'    => __( 'This option enables you to format the text from the breadcrumbs for the active page', 'startup-pro' ),
		    'default'     => array(
		        'color'       => '#FFFFFF', 
		        'font-weight'  => '400', 
		        'font-family' => 'Open Sans', 
		        'google'      => true,
		        'font-size'   => '13px', 
		        'line-height' => '16px'
		    ),
		    'required' => array(
				'display-breadcrumbs',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'breadcrumbs-font-atributes-current',
			'type'     => 'typography',
			'title'    => __( 'Breadcrumbs font attributes for current page', 'startup-pro' ),
			'google'      => true, 
		    'font-backup' => true,
			'subtitle' => esc_html__( ' ', 'startup-pro' ),
			'compiler'      => array(
				'.page-header .pro-breadcrumb span:last-child span',
				'.page-header .pro-breadcrumb span a:hover'
			),
			'units'       =>'px',
			'subtitle' => __( 'The default breadcrumb mark-up should not be changed.', 'startup-pro' ),
			'default'  => array(
				'color'       => '#F92740',
				'font-weight' => '400',
				'font-family' => 'Open Sans',
				'google'      => true,
				'font-size'   => '13px',
				'line-height' => '16px',
			),
			'required' => array(
				'display-breadcrumbs',
				'equals',
				'1'
			)
		),


		array(







			'id'     => 'page-title-section-end',







			'type'   => 'section',







			'indent' => false,







		),







	)







) );







?>