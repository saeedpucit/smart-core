<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.
// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.

$redux_opt_name = "smart_options";

if ( ! function_exists( "startup_pro_add_metaboxes" ) ) {
	function startup_pro_add_metaboxes( $metaboxes ) {
		$pageTitleImages = array(
			'left'   => array(
				'alt' => 'Left',
				'img' => smart_core_plugin_url() . '/assets/images/page-title/left.jpg'
			),
			'center' => array(
				'alt' => 'Center',
				'img' => smart_core_plugin_url() . '/assets/images/page-title/center.jpg'
			),
			'right'  => array(
				'alt' => 'Right',
				'img' => smart_core_plugin_url() . '/assets/images/page-title/right.jpg'
			),
		);

		$breadcrumbsImages = array(
			'left'  => array(
				'alt' => 'Left',
				'img' => smart_core_plugin_url() . '/assets/images/breadcrumbs/left.jpg'
			),
			'right' => array(
				'alt' => 'Right',
				'img' => smart_core_plugin_url() . '/assets/images/breadcrumbs/right.jpg'
			),
		);

		$boxSections[] = array(
			'title'    => esc_html__( 'General', 'startup-pro' ),



			'subtitle' => esc_html__( '', 'startup-pro' ),



			'icon'     => 'fa fa-cog',



			'fields'   => array(



				array(



					'id'             => 'container-spacing',



					'type'           => 'spacing',



					'mode'           => 'padding',



					'left'           => false,



					'right'          => false,



					'units'          => array(



						'px'



					),



					'units_extended' => 'false',



					'title'          => esc_html__( 'Content padding', 'startup-pro' ),



					'subtitle'       => esc_html__( 'This option will set top and bottom padding for the content', 'startup-pro' ),



					'output'         => array(



						'.cont-padding'



					)



				),







				array(



						'id'       => 'loader',



						'type'     => 'switch',



						'title'    => esc_html__( 'Use Page-Loader?', 'startup-pro' ),



						'subtitle' => esc_html__( '', 'startup-pro' ),



						'subtitle' => esc_html__( 'If you want to use a pre-loader for the pages select On.', 'startup-pro' ),



						'default'  => false



				)



			)



		);



		$boxSections[] = array(



			'title'    => esc_html__( 'Header options', 'startup-pro' ),



			'subtitle' => esc_html__( '', 'startup-pro' ),



			'icon'     => 'fa fa-list-alt',



			'fields'   => array(



				array(



					'id'       => 'header-layout',



					'type'     => 'select',



					'title'    => esc_html__( 'Select layout', 'startup-pro' ),



					'subtitle' => esc_html__( 'This will set the menu layout', 'startup-pro' ),



					'options'  => array(



						'startup-pro-header-1'  => '1. Menu Bellow - Logo Left',



						'startup-pro-header-2'  => '2. Menu Bellow - Logo Center',



						'startup-pro-header-3'  => '3. Menu Right - Logo Left ',



						'startup-pro-header-4'  => '4. Logo - Menu Center 1 line',



						'one-page-menu' => '5. One page menu'



					)



				),



				array(



					'id'       => 'logo-after',



					'type'     => 'text',



					'title'    => esc_html__( 'Menu items before logo', 'startup-pro' ),



					'subtitle' => esc_html__( 'Number of menu items before logo', 'startup-pro' ),



					'validate' => 'number',



					'required' => array(



						'header-layout',



						'equals',



						'startup-pro-header-4'



					)



				),



				array(



					'id'       => 'logo-image-height',



					'type'     => 'dimensions',



					'units'    => array(



							'px'



					),



					'subtitle' => esc_html__( 'From here you can select the height in pixels for the logo (e.g. 100). The width will be automatically calculated.', 'startup-pro' ),



					'title'    => esc_html__( 'Logo height', 'startup-pro' ),



					'width' => false,



					'compiler' => true



				),



				array(



					'id'             => 'select-menu-font-family-page',



					'type'           => 'typography',



					'title'          => esc_html__( 'Select Menu Font attributes', 'startup-pro' ),



					'subtitle'       => esc_html__( 'This option will set the menu font and color only for this page.', 'startup-pro' ),



					'output'         => array(



						'#top-menu .primary-menu .navbar-nav > li > a'



					),



					'text-transform' => true,



					'subsets'        => false,



					'text-align'     => false,



					'google'         => true,



				),



				array(



					'id'       => 'main-menu-list-item-hover-page',



					'type'     => 'color',



					'title'    => esc_html__( 'Main menu Item text color on hover', 'startup-pro' ),



					'subtitle' => esc_html__( 'From here you can set the hover color of this page in menu.', 'startup-pro' ),



					'output' => array(



						'.primary-menu > li > a:hover, .primary-menu .navbar-nav > li > a:hover, .primary-menu .navbar-nav > li.current-menu-item > a, #header-sticky .primary-menu .navbar-nav > li.current-menu-item > a , #header-sticky .primary-menu .navbar-nav > li > a:hover , .sticky-header.fixed .primary-menu .navbar-nav > li > a:hover'



					)



				),



				array(



					'id'       => 'transparent-header',



					'type'     => 'switch',



					'title'    => esc_html__( 'Transparent header', 'startup-pro' ),



					'subtitle' => esc_html__( 'When this option is ON, it eliminates the background behind the menu.', 'startup-pro' )



				),



				array(



					'id'       => 'content-offset-page',



					'type'     => 'dimensions',



					'units'    => array(



							'px'



					),



					'title'    => esc_html__( 'Content offset', 'startup-pro' ),



					'subtitle' => esc_html__( 'Put the content under the menu(used for transparent menu)', 'startup-pro' ),



					'width'    => false,



					'required' => array(



						'transparent-header',



						'equals',



						'1'



					)



				),



				array(



					'id'       => 'full-width-header',



					'type'     => 'switch',



					'title'    => esc_html__( 'Full width header', 'startup-pro' ),



					'subtitle' => esc_html__( 'This option allows you to set your header at full width.', 'startup-pro' ),



					'compiler' => true



				),







				array(



					'id'       => 'page-header-switch',



					'type'     => 'switch',



					'title'    => esc_html__( 'Page header', 'startup-pro' ),



					'subtitle' => esc_html__( '', 'startup-pro' ),



					'subtitle' => esc_html__( 'Switch off to disable the header', 'startup-pro' ),



					'default'  => true



				),



				array(



					'id'       => 'show-top-header',



					'type'     => 'switch',



					'title'    => esc_html__( 'Top header bar', 'startup-pro' ),



					'subtitle' => esc_html__( 'This options allows you to reveal or hide the top bar.', 'startup-pro' ),



					'required' => array(



						'header-layout',



						'not',



						'one-page-menu'



					)



				)



			)



		);



		$boxSections[] = array(



			'title'    => esc_html__( 'Sticky header options', 'startup-pro' ),



			'subtitle' => esc_html__( '', 'startup-pro' ),



			'icon'     => 'fa fa-list-alt',



			'fields'   => array(



				array(



					'id'       => 'sticky-header',



					'type'     => 'switch',



					'title'    => esc_html__( 'Enable Sticky Header', 'startup-pro' ),



					'subtitle' => esc_html__( 'This option enables the website menu, and it will be always visible on the page when you scroll down.', 'startup-pro' ),



					'compiler' => true



				),



					array(



							'id'       => 'sticky-header-bg-color',



							'type'     => 'color_rgba',



							'title'    => esc_html__( 'Sticky Header Background Color', 'startup-pro' ),



							'subtitle' => esc_html__( 'This option enables you to set the background color of the sticky menu', 'startup-pro' ),



							'compiler' => array(



									'#header-sticky'



							),



							'mode'     => 'background-color',



							'required' => array(



									'sticky-header',



									'equals',



									'1'



							)



					),



					array(



							'id'             => 'select-sticky-menu-font-family',



							'type'           => 'typography',



							'title'          => esc_html__( 'Sticky Menu Font attributes', 'startup-pro' ),



							'subtitle'       => esc_html__( 'From here you can set the font for the menu in the sticky header. When setting the color for the menu this will change the color for cart and search icon as well', 'startup-pro' ),



							'compiler'       => array(



									'#header-sticky .primary-menu .navbar-nav > li > a'



							),



							'text-transform' => true,



							'subsets'        => false,



							'text-align'     => false,



							'google'         => true,



							'required' => array(



									'sticky-header',



									'equals',



									'1'



							)



					),



			)



		);



		$boxSections[] = array(



			'title'    => esc_html__( 'Page title options', 'startup-pro' ),



			'subtitle' => esc_html__( '', 'startup-pro' ),



			'icon'     => 'fa fa-hand-o-down',



			'fields'   => array(



				array(



					'id'       => 'page-title-bar',



					'type'     => 'switch',



					'title'    => esc_html__( 'Page Title Bar', 'startup-pro' ),



					'subtitle' => esc_html__( 'This option will enable/disable the page title bar section.', 'startup-pro' ),



				),



				array(



					'id'       => 'page-title-font-atributes',



					'type'     => 'typography',



					'title'    => esc_html__( 'Page Title Color', 'startup-pro' ),



					'subtitle' => esc_html__( 'Change the font attributes and color of the page title.', 'startup-pro' ),



					'google'   => true,



					'output'   => array(



						'.page-header .title-wrapper h1'



					)



				),



				array(



					'id'       => 'page-title-bar-height',



					'type'     => 'dimensions',



					'width'    => false,



					'units'    => 'px',



					'title'    => esc_html__( 'Page Title Section Height', 'startup-pro' ),



					'subtitle' => esc_html__( 'This option will set the height of the page title section.', 'startup-pro' ),



					'output'   => array( '.page-header .title-wrapper' ),



				),



				array(



					'id'       => 'page-title-bar-align',



					'title'    => esc_html__( 'Page Title Alignment', 'startup-pro' ),



					'subtitle' => esc_html__( 'From here you can set the alignment for the page title section : left, centered and right.', 'startup-pro' ),



					'type'     => 'image_select',



					'options'  => $pageTitleImages,



					'compiler' => true,



				),



				array(
					'id'           	=> 'background-image-page-title',
					'type'          => 'background',
					'title'                 => esc_html__( 'Background Image For Page title', 'startup-pro' ),
					'subtitle'              => esc_html__( 'This allows you to set the background color or image for the page title bar', 'startup-pro' ),
					'preview_media' => true,
					'preview'       => false,
					'compiler'              => true,
					'required'              => array(
						'page-title-bar',
						'equals',
						'1'
					)
				),



				array(



					'id'       => 'page-title-stretch',



					'type'     => 'switch',



					'title'    => esc_html__( 'Backround stretch', 'startup-pro' ),



					'subtitle' => esc_html__( 'This option will stretch the background image for the page title section.', 'startup-pro' ),



					'required' => array(



						'page-title-bar',



						'equals',



						'1'



					)



				),



				array(



					'id'       => 'page-title-parallax',



					'type'     => 'switch',



					'title'    => esc_html__( 'Parallax', 'startup-pro' ),



					'subtitle' => esc_html__( 'This option will enable/disable the parallax scrolling effect for the page title section.', 'startup-pro' ),



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



					'subtitle' => esc_html__( 'This option will enable/disable a fade out effect for the page title section.', 'startup-pro' ),



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



					'subtitle' => esc_html__( 'This option will set the color overlay for the page title section.', 'startup-pro' )



				),



				array(



					'id'          => 'page-title-color-overlay',



					'type'        => 'color',



					'title'       => esc_html__( 'Color for the page title overlay', 'startup-pro' ),



					'subtitle'    => esc_html__( 'This option will set the color overlay.', 'startup-pro' ),



					'validate'    => 'color',



					'transparent' => false,



					'compiler'    => true,



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



					'subtitle' => esc_html__( 'This option will set the opacity for color overlay.', 'startup-pro' ),



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



					'subtitle' => esc_html__( 'This option will enable/disable a shadow for the page title section.', 'startup-pro' ),



					'compiler' => true



				),



				array(



					'id'       => 'display-breadcrumbs',



					'type'     => 'switch',



					'title'    => esc_html__( 'Display Breadcrumbs', 'startup-pro' ),



					'subtitle' => esc_html__( '', 'startup-pro' ),



					'subtitle' => esc_html__( ' ', 'startup-pro' )



				),



				array(



					'id'       => 'breadcrumbs-align',



					'title'    => esc_html__( 'Breadcrumbs align', 'startup-pro' ),



					'subtitle' => esc_html__( 'From here you can set the alignment for the breadcrumbs: left or right.', 'startup-pro' ),



					'type'     => 'image_select',



					'options'  => $breadcrumbsImages,



					'compiler' => true,



				),



				array(



					'id'       => 'page-title-switch',



					'type'     => 'switch',



					'title'    => esc_html__( 'Show page title', 'startup-pro' ),



					'subtitle' => esc_html__( 'This option allows you to enable/disable the page title.', 'startup-pro' ),



					'default'  => true



				),



				array(



					'id'       => 'custom-title-switch',



					'type'     => 'switch',



					'title'    => esc_html__( 'Add custom title', 'startup-pro' ),



					'subtitle' => esc_html__( 'This will rewrite the page title on your custom desires.', 'startup-pro' ),



					'default'  => false,



					'required' => array(



						'page-title-switch',



						'equals',



						'1'



					)



				),



				array(



					'id'       => 'custom-title',



					'type'     => 'editor',



					'title'    => esc_html__( 'Custom title', 'startup-pro' ),



					'subtitle' => esc_html__( 'Please enter your custom page title.', 'startup-pro' ),



					'default'  => '',



					'args'     => array(



						'teeny'         => false,



						'textarea_rows' => 3



					),



					'required' => array(



						'custom-title-switch',



						'equals',



						'1'



					)



				),



				array(



					'id'       => 'custom-slogan-switch',



					'type'     => 'switch',



					'title'    => esc_html__( 'Add custom slogan', 'startup-pro' ),



					'subtitle' => esc_html__( 'This will set the page slogan under the page title.', 'startup-pro' ),



					'default'  => false



				),



				array(



					'id'       => 'custom-slogan',



					'type'     => 'editor',



					'title'    => esc_html__( 'Add custom slogan', 'startup-pro' ),



					'subtitle' => esc_html__( 'Please enter your page slogan.', 'startup-pro' ),



					'default'  => '',



					'args'     => array(



						'teeny'         => false,



						'textarea_rows' => 5



					),



					'required' => array(



						'custom-slogan-switch',



						'equals',



						'1'



					)



				),



				array(



					'id'       => 'page-subheader-font-atributes',



					'type'     => 'typography',



					'title'    => esc_html__( 'Page Title Slogan', 'startup-pro' ),



					'subtitle' => esc_html__( 'Change the font attributes and color of the page title slogan.', 'startup-pro' ),



					'google'   => true,



					'output'   => array(



						'.page-header .title-wrapper span'



					),



					'required' => array(



						'custom-slogan-switch',



						'equals',



						'1'



					)



				)





			)



		);



		$boxSections[] = array(



			'title'    => esc_html__( 'Footer', 'startup-pro' ),



			'subtitle' => esc_html__( '', 'startup-pro' ),



			'icon'     => 'fa fa-hand-o-down',



			'fields'   => array(



				array(

					'id'       => 'show-footer-form',

					'type'     => 'switch',

					'title'    => esc_html__( 'Show Footer Contact Form?', 'startup-pro' ),

					'subtitle' => esc_html__( 'This option will enable/disable the contact form before the footer.', 'startup-pro' )

				),



				array(



					'id'       => 'show-footer',



					'type'     => 'switch',



					'title'    => esc_html__( 'Footer', 'startup-pro' ),



					'subtitle' => esc_html__( 'This will enable/disable the footer section.', 'startup-pro' )



				),



				array(



					'id'       => 'footer-fixed-effect',



					'type'     => 'switch',



					'title'    => esc_html__( 'Add footer fixed effect', 'startup-pro' ),



					'subtitle' => esc_html__( 'For this effect to work the footer should be on, and the footer form off.', 'startup-pro' ),



				),



				array(



					'id'       => 'copyright-bar',



					'type'     => 'switch',



					'title'    => esc_html__( 'Copyright Bar', 'startup-pro' ),



					'subtitle' => esc_html__( 'This option will enable/disable the Copyright bar.', 'startup-pro' )



				)



			)



		);



		$boxSections[] = array(



			'title'    => esc_html__( 'Slider', 'startup-pro' ),



			'subtitle' => esc_html__( '', 'startup-pro' ),



			'icon'     => 'fa fa-arrows-v',



			'fields'   => array(



				array(



					'id'       => 'slide-template',



					'type'     => 'select',



					'title'    => esc_html__( 'Choose Slide Template', 'startup-pro' ),



					'subtitle' => esc_html__( 'This option will let you chose the slider you want for this page.', 'startup-pro' ),



					'options'  => startup_pro_get_revsliders(),



					'default'  => 'no-slider'



				),



				array(



					'id'       => 'slider-position',



					'type'     => 'button_set',



					'title'    => esc_html__( 'Slider Position', 'startup-pro' ),



					'subtitle' => esc_html__( 'This option will let you chose the position of the slider , either above or below the menu.', 'startup-pro' ),



					'options'  => array(



						'below' => 'Below',



						'above' => 'Above'



					)



				)



			)



		);



		$boxSections[] = array(



			'title'    => esc_html__( 'Background', 'startup-pro' ),



			'subtitle' => esc_html__( '', 'startup-pro' ),



			'icon'     => 'fa fa-eyedropper',



			'fields'   => array(



				array(



					'id'            => 'container-background',



					'type'          => 'background',



					'title'         => esc_html__( 'Page content background', 'startup-pro' ),



					'subtitle'      => esc_html__( '', 'startup-pro' ),



					'subtitle'      => esc_html__( 'This option will change the content background for this page.', 'startup-pro' ),



					'preview_media' => true,



					'preview'       => false,



					//'background-size'       => false,



					//background-attachment' => false,



					'output'        => array(



						'#content-wrapper'



					)



				),



				array(



					'id'       => 'container-background-stretch',



					'type'     => 'switch',



					'title'    => esc_html__( 'Backround stretch', 'startup-pro' ),



					'subtitle' => esc_html__( 'This option will stretch the image chosen above for the content background.', 'startup-pro' ),



					'compiler' => true



				)



			)



		);



		$metaboxes = array();



		$metaboxes[] = array(



			'id'         => 'pro-page-options',



			'title'      => esc_html__( 'Page Options', 'startup-pro' ),



			'post_types' => array(



				'page',



				'post',



				'portfolio',

				'story',

				'event'

			),



			'position'   => 'normal', // normal, advanced, side



			'priority'   => 'high', // high, core, default, low



			'sidebar'    => false, // enable/disable the sidebar in the normal/advanced positions



			'sections'   => $boxSections



		);



		$sidebarSections = array();



		$sidebarImages = array(



			'full-100' => array(



				'alt' => 'Full width - no container',



				'img' => smart_core_plugin_url() . '/assets/images/sidebars/full-100.jpg'



			),



			'full'     => array(



				'alt' => 'Full width',



				'img' => smart_core_plugin_url() . '/assets/images/sidebars/full.jpg'



			),



			'right'    => array(



				'alt' => 'Right sidebar',



				'img' => smart_core_plugin_url() . '/assets/images/sidebars/right.jpg'



			),



			'left'     => array(



				'alt' => 'Left sidebar',



				'img' => smart_core_plugin_url() . '/assets/images/sidebars/left.jpg'



			),



			'both'     => array(



				'alt' => 'Both sidebars',



				'img' => smart_core_plugin_url() . '/assets/images/sidebars/both.jpg'



			)



		);



		$menus = get_nav_menu_locations();



		$sidebarSections[] = array(



			'icon_class' => 'icon-large',



			'icon'       => 'el-icon-home',



			'fields'     => array(



				array(



					'id'      => 'layout',



					'type'    => 'image_select',



					'options' => $sidebarImages



				),



				array(



					'id'       => 'sidebar-right',



					'title'    => esc_html__( 'Sidebar right', 'startup-pro' ),



					'subtitle' => '',



					'type'     => 'select',



					'data'     => 'sidebars',



				),



				array(



					'id'       => 'sidebar-left',



					'title'    => esc_html__( 'Sidebar left', 'startup-pro' ),



					'subtitle' => '',



					'type'     => 'select',



					'data'     => 'sidebars'



				),

				array(
					'id'       => 'logo-upload',
					'type'     => 'media',
					'title'    => esc_html__( 'Page Logo', 'startup-pro' ),
					'subtitle' => esc_html__( 'Upload Logo ', 'startup-pro' ),
					'subtitle' => esc_html__( '', 'startup-pro' ),
				),
				array(
					'id'       => 'logo-upload-retina',
					'type'     => 'media',
					'title'    => esc_html__( 'Page Logo (Retina Version @2x)', 'startup-pro' ),
					'subtitle' => esc_html__( 'Upload Logo(Retina Version @2x) ', 'startup-pro' ),
					'subtitle' => esc_html__( '', 'startup-pro' )
				),



				array(



					'id'       => 'page_menu',



					'type'     => 'select',



					'title'    => esc_html__( 'Page menu', 'startup-pro' ),



					'subtitle' => esc_html__( '', 'startup-pro' ),



					'subtitle' => esc_html__( '', 'startup-pro' ),



					'data'     => 'menus',



					'default'  => isset( $menus['primary'] ) ? $menus['primary'] : '',



				)



			)



		);



		$metaboxes[] = array(



			'id'         => 'page-layout',



			'title'      => esc_html__( 'Layout', 'startup-pro' ),



			'post_types' => array(



				'page',



				'post',



				'portfolio',



				'story',

				'event'

			),



			'position'   => 'side', // normal, advanced, side



			'priority'   => 'default', // high, core, default, low



			'sections'   => $sidebarSections



		);



		// Kind of overkill, but ahh well.  ;)



		$metaboxes = apply_filters( 'custom_post_type_meta_filter', $metaboxes );



		return $metaboxes;



	}







	add_action( 'redux/metaboxes/' . $redux_opt_name . '/boxes', 'startup_pro_add_metaboxes' );



};
