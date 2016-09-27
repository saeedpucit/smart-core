<?php

//MENU

Redux::setSection( $opt_name, array(
	'title'    => esc_html__( 'Menu', 'startup-pro' ),
	'subtitle' => esc_html__( '', 'startup-pro' ),
	'icon'     => 'fa fa-reorder',







	'fields'   => array(







		array(







			'id'       => 'menu-section-start',







			'type'     => 'section',







			'subtitle' => 'Here you will find both the website menu settings as well as the drop down.',







			'indent'   => true







		),







		array(







			'id'       => 'show-search-icon',







			'type'     => 'switch',







			'title'    => esc_html__( 'Show Search Icon in Main Nav?', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option shows or hides the search icon in the navigation menu', 'startup-pro' ),







			'default'  => true







		),







		array(







			'id'             => 'menu-spacing',







			'type'           => 'spacing',







			'compiler'       => array(







				'.primary-menu .navbar-nav > li > a'







			),







			'mode'           => 'padding',







			'units'          => array(







				'px'







			),







			'top'            => false,







			'bottom'         => false,







			'units_extended' => 'false',







			'title'          => esc_html__( 'Padding option', 'startup-pro' ),







			'subtitle'       => esc_html__( '', 'startup-pro' ),







			'subtitle'       => esc_html__( 'This option enables you to set the distance before and after the pages in the menu', 'startup-pro' ),







			'default'        => array(
				'padding-right' => '20px',
				'padding-left'  => '20px',
				'units'         => 'px'
			)







		),







		array(







			'id'       => 'menu-dropdown-icon',







			'type'     => 'switch',







			'title'    => esc_html__( 'Show dropdown icon', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option shows or hides the drop down icon.', 'startup-pro' ),







			'default'  => true







		),







		array(







			'id'             => 'select-menu-font-family',







			'type'           => 'typography',







			'title'          => esc_html__( 'Select Menu Font attributes', 'startup-pro' ),







			'subtitle'       => esc_html__( 'From here you can format the menu font. The color you set for the font, will be the same color for the cart and the search icon also.', 'startup-pro' ),







			'compiler'       => array(







				'.primary-menu .navbar-nav > li > a'







			),







			'text-transform' => true,







			'subsets'        => false,







			'text-align'     => false,







			'google'         => true,







			'default'        => array(







				'color'          => '#444444',







				'font-size'      => '14px',







				'font-family'    => 'Open Sans',







				'font-weight'    => '700',







				'line-height'    => '24px',







				'text-transform' => 'uppercase',







				'google'         => 1,







				'font-options'   => '',







				'font-style'     => '',







			)







		),







		array(







			'id'       => 'main-menu-dropdown-font',







			'type'     => 'typography',







			'title'    => esc_html__( 'Main Menu Dropdown Font attributes', 'startup-pro' ),







			'subtitle' => esc_html__( 'From here you can format the drop down font from the menu.', 'startup-pro' ),







			'google'   => true,







			'default'  => array(







				'color'       => '#bfbfbf',







				'font-size'   => '14px',







				'font-family' => 'Open Sans',







				'font-weight' => '400',







				'text-align'  => 'left',







				'line-height' => '45px',







				'subsets'     => 'latin'







			),







			'compiler' => array(







				'.primary-menu .dropdown-menu > li > a'







			)







		),







		array(







			'id'       => 'column-list-item-hover',







			'type'     => 'color',







			'title'    => esc_html__( 'Top item color on hover', 'startup-pro' ),







			'subtitle' => esc_html__( 'From here you can set the hover color of the main pages in the menu.', 'startup-pro' ),







			'default'  => '#ffffff',







			'compiler' => array(







				'.primary-menu .navbar-nav > li > a:hover'







			)







		),







		array(







			'id'       => 'main-menu-list-item-hover',







			'type'     => 'color',







			'title'    => esc_html__( 'Main menu Item text color on hover', 'startup-pro' ),







			'subtitle' => esc_html__( 'From here you can set the hover color of the pages in menu.', 'startup-pro' ),







			'default'  => '#F92740',







			'compiler' => array(







				'#top-menu .primary-menu > li > a:hover, .primary-menu .navbar-nav > li > a:hover, #top-menu .primary-menu .navbar-nav > li.current-menu-item > a, #top-menu .primary-menu .navbar-nav > li.current-menu-parent > a, #top-menu .open-search:hover, #top-menu .cart-info .shopping-cart:hover, #header-sticky .primary-menu .navbar-nav > li.current-menu-item > a, #header-sticky .primary-menu .navbar-nav > li.current-menu-parent > a, .sticky-header.fixed .primary-menu .navbar-nav > li > a:hover'







			)







		),







		array(







			'id'       => 'column-list-item-hover',







			'type'     => 'color',







			'title'    => esc_html__( 'Submenu Item text color on hover', 'startup-pro' ),







			'subtitle' => esc_html__( 'From here you can set the hover color of the pages in the dropdown menu.', 'startup-pro' ),







			'default'  => '#ffffff',







			'compiler' => array(







				'.primary-menu .dropdown-menu > li > a:hover'







			)







		),







		array(







			'id'       => 'secondary-menu-top-font',







			'type'     => 'typography',







			'title'    => esc_html__( 'Dropdown menu subtitleription text', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option enables you to format the text within the drop down subtitleription', 'startup-pro' ),







			'google'   => true,







			'default'  => array(







				'color'       => '#ffffff',







				'font-size'   => '13px',







				'font-family' => 'Roboto Condensed',







				'font-weight' => '400',







				'line-height' => '19px',







				'subsets'     => 'latin'







			),







			'compiler' => array(







				'.primary-menu span.pro-content'







			)







		),







		array(







			'id'       => 'submenu-bg-color',







			'type'     => 'color_rgba',







			'title'    => esc_html__( 'Sub menu background color', 'startup-pro' ),







			'subtitle' => esc_html__( 'You can set the color and the background transparency of the whole container within the mega menu', 'startup-pro' ),







			'default'  => array(







				'color' => '#000000',







				'alpha' => '0.82',







				'rgba'  => 'rgba(26, 28, 39, 0.8)'







			),







			'compiler' => array(







				'.primary-menu .dropdown-menu'







			),







			'mode'     => 'background-color'







		),







		array(







			'id'       => 'sub-menu-top-line',







			'type'     => 'color',







			'title'    => esc_html__( 'Sub menu top line color', 'startup-pro' ),







			'subtitle' => esc_html__( 'You can set the color of the top liner within the mega menu and/or the drop down.', 'startup-pro' ),







			'google'   => true,







			'default'  => '#F92740',







			'compiler' => array(







				'border-top-color' => '.primary-menu .dropdown-menu'







			)







		),







		array(







			'id'       => 'mega-column-item-divider',







			'type'     => 'color',







			'title'    => esc_html__( 'Column item devider', 'startup-pro' ),







			'subtitle' => esc_html__( 'You can set the color of the dividers between the items of the menu', 'startup-pro' ),







			'google'   => true,







			'default'  => 'transparent',







			'compiler' => array(







				'border-color' => '.primary-menu .dropdown-menu li'







			)







		),







		array(







			'id'     => 'menu-section-end',







			'type'   => 'section',







			'indent' => false,







		),







	)







) );







Redux::setSection( $opt_name, array(







	'title'      => esc_html__( 'Mega menu', 'startup-pro' ),







	'subtitle'   => esc_html__( ' ', 'startup-pro' ),







	'icon'       => 'fa fa-angle-double-down',







	'subsection' => true,







	'fields'     => array(







		array(







			'id'       => 'mega-section-start',







			'type'     => 'section',







			'indent'   => true,







			'subtitle' => 'The Startup PRO theme has a built-in Mega Menu functionality. You can add subtitles, subtitleriptions and icons to the first 3 level of the menu.'







		),







		array(







			'id'             => 'mega-column-title',







			'type'           => 'typography',







			'title'          => esc_html__( 'Column title style', 'startup-pro' ),







			'subtitle'       => esc_html__( 'This option allows you to format the font within the column title from the mega menu', 'startup-pro' ),







			'google'         => true,







			'subsets'        => false,







			'default'        => array(







				'color'          => '#ffffff',







				'font-size'      => '18px',







				'font-family'    => 'Open Sans',







				'font-weight'    => '400',







				'line-height'    => '24px',







				'text-transform' => 'uppercase'







			),







			'text-transform' => true,







			'compiler'       => array(







				'.primary-menu .pro-mega-menu > ul > li .pro-title'







			)







		),







		array(







			'id'       => 'mega-column-title-bg',







			'type'     => 'color_rgba',







			'title'    => esc_html__( 'Column title background color', 'startup-pro' ),







			'subtitle' => esc_html__( 'You can set the color and the transparency level of the background from the column title within the mega menu.', 'startup-pro' ),







			'default'  => array(







				'color' => '#444444',







				'alpha' => '0',







				'rgba'  => 'rgba(38, 40, 57, 0)'







			),







			'mode'     => 'background-color',







			'compiler' => array(







				'.primary-menu .pro-mega-menu > ul > li .pro-column-title.pro-title, .primary-menu .dropdown-menu > li > a.pro-column-title.pro-title'







			)







		),







		array(







			'id'       => 'mega-column-list-item-typography',







			'type'     => 'typography',







			'title'    => esc_html__( 'Column item style', 'startup-pro' ),







			'compiler' => array(







				'.primary-menu .pro-mega-menu > ul > li > ul a'







			),







			'subtitle' => esc_html__( 'This option enables you to format the font within the pages from the mega menu', 'startup-pro' ),







			'google'   => true,







			'subsets'  => false,







			'default'  => array(







				'color'       => '#ffffff',







				'font-size'   => '14px',







				'font-family' => 'Open Sans',







				'font-weight' => '300',







				'line-height' => '35px',







				'google'      => 1







			)







		),







		array(







			'id'       => 'mega-column-list-item-hover',







			'type'     => 'color',







			'title'    => esc_html__( 'Item text color on hover', 'startup-pro' ),







			'subtitle' => esc_html__( 'From here you can set the hover color of the pages in the mega menu.', 'startup-pro' ),







			'default'  => '#F92740',







			'compiler' => array(







				'.primary-menu .pro-mega-menu > ul > li > ul a:hover'







			)







		),







		array(







			'id'       => 'mega-column-list-bg',







			'type'     => 'color_rgba',







			'title'    => esc_html__( 'Column item background color', 'startup-pro' ),







			'subtitle' => esc_html__( 'You can set the color and the transparency level of the background from the items within the mega menu.', 'startup-pro' ),







			'default'  => array(







				'color' => '#444444',







				'alpha' => '0.75',







				'rgba'  => 'rgba(37, 37, 37, 0.75)'







			),







			'mode'     => 'background-color',







			'compiler' => array(







				'.primary-menu .dropdown-menu > li > a.pro-link'







			)







		),







		array(







			'id'       => 'mega-column-list-bg-hover',







			'type'     => 'color_rgba',







			'title'    => esc_html__( 'Column item background color on hover', 'startup-pro' ),







			'subtitle' => esc_html__( 'You can set the color and the transparency level of the background from the items within the mega menu when hovering.', 'startup-pro' ),







			'default'  => array(







				'color' => '#444444',







				'alpha' => '1.00',







				'rgba'  => 'rgba(247,197,30,1)'







			),







			'mode'     => 'background-color',







			'compiler' => array(







				'.primary-menu .dropdown-menu > li > a.pro-link.with-hover:hover'







			)







		),







		array(







			'id'     => 'mega-section-start',







			'type'   => 'section',







			'indent' => true







		)







	)







) );







Redux::setSection( $opt_name, array(







	'title'      => 'Mobile Menu',







	'icon'       => 'fa fa-mobile',







	'subsection' => true,







	'fields'     => array(







		array(







			'id'       => 'menu-mobile-section-start',







			'type'     => 'section',







			'subtitle' => 'Here you will find the settings for the mobile menu.',







			'indent'   => true







		),







		array(







			'id'       => 'mobile-menu-slide-outs',







			'type'     => 'switch',







			'title'    => esc_html__( 'Mobile Menu  Slide Outs', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This allows you to choose the display style of the menu onto mobile devices', 'startup-pro' ),







			'default'  => false







		),







		array(







			'id'       => 'mobile-parents-clickable',







			'type'     => 'switch',







			'title'    => esc_html__( 'Make mobile menu parent items clickable', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This will make the parent items clickable, instead of showing the submenu', 'startup-pro' ),







			'default'  => true







		),







		array(







			'id'       => 'mobile-menu-bg',







			'type'     => 'color',







			'title'    => esc_html__( 'Mobile menu background color', 'startup-pro' ),







			'default'  => '#2c2c2c',







			'compiler' => array(







				'background-color' => '.navbar.mobile-menu-cont'







			)







		),







		array(







			'id'       => 'mobile-menu-icon',







			'type'     => 'color',







			'title'    => esc_html__( 'Mobile menu icon color', 'startup-pro' ),







			'default'  => '#999999',







			'compiler' => array(







				'color' => '.navbar .menu-compact-btn-toggle'







			)







		),







		array(







			'id'       => 'mobile-menu-border-color',







			'type'     => 'color',







			'title'    => esc_html__( 'Mobile menu border color', 'startup-pro' ),







			'default'  => '#353535',







			'compiler' => array(







				'border-color' => '.menu-compact-btn-toggle'







			)







		),







		array(







			'id'     => 'menu-mobile-section-end',







			'type'   => 'section',







			'indent' => false,







		),







	)







) );







?>
