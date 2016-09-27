<?php







// WooCommerce Options







// -----------------------------------------------------------------------------------------















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







	);







	Redux::setSection( $opt_name, array(







		'title'    => esc_html__( 'Woocommerce', 'startup-pro' ),







		'subtitle' => esc_html__( '', 'startup-pro' ),







		'icon'     => 'fa fa-shopping-cart',







		'fields'   => array(







			array(







				'id'     => 'woo-section-start',







				'type'   => 'section',







				'indent' => true







			),







			array(







				'id'       => 'show-woocommerce-cart',







				'type'     => 'switch',







				'title'    => 'Show Cart on Menu',







				'default'  => true,







				'subtitle' => esc_html__( 'When this option is ON, it allows the cart icon to be displayed on the menu.', 'startup-pro' ),







			),







			array(







				'id'       => 'woo-wishlist',







				'type'     => 'switch',







				'title'    => esc_html__( 'Enable YITH wishlist', 'startup-pro' ),







				'subtitle' => esc_html__( '', 'startup-pro' ),







				'subtitle' => esc_html__( 'You need the YITH WooCommerce Wishlist plugin activated for this to work.', 'startup-pro' ),







				'default'  => true







			),







			array(







				'id'       => 'woo-compare',







				'type'     => 'switch',







				'title'    => esc_html__( 'Enable YITH compare', 'startup-pro' ),







				'subtitle' => esc_html__( '', 'startup-pro' ),







				'subtitle' => esc_html__( 'You need the YITH Woocommerce Compare plugin activated for this to work.', 'startup-pro' ),







				'default'  => true







			),







			array(







				'id'       => 'woo-shop-layout',







				'title'    => esc_html__( 'Shop layout', 'startup-pro' ),







				'type'     => 'image_select',







				'options'  => $sidebarImages,







				'subtitle' => esc_html__( 'This option allows you to choose the layout of the shop.', 'startup-pro' ),







				'default'  => 'left'







			),







			array(







				'id'       => 'woo-sidebar',







				'title'    => esc_html__( 'Select sidebar', 'startup-pro' ),







				'subtitle' => esc_html__( 'From here you can choose the default shop sidebar.', 'startup-pro' ),







				'type'     => 'select',







				'data'     => 'sidebars',







				'default'  => 'shop-sidebar'







			),







			array(







				'id'       => 'woo-products-per-page',







				'type'     => 'spinner',







				'title'    => esc_html__( 'Products per page', 'startup-pro' ),







				'default'  => '15',







				'subtitle' => esc_html__( 'This option allows you to set the number of products you want to be displayed per page.', 'startup-pro' ),







				'min'      => '1',







				'step'     => '1',







				'max'      => '100',







			),







			array(







				'id'       => 'woo-loop-columns',







				'type'     => 'select',







				'title'    => 'Shop Columns',







				'subtitle' => esc_html__( 'This option allows you to set the number of products columns you want to have per page.', 'startup-pro' ),







				'options'  => array(







					2 => '2 Columns',







					3 => '3 Columns',







					4 => '4 Columns',







					6 => '6 Columns'







				),







				'default'  => 3







			),







			array(







				'id'       => 'woo-related-columns',







				'type'     => 'select',







				'title'    => 'Related Columns',







				'subtitle' => esc_html__( 'Here you can choose how many related products you want to display to be displayed per page.', 'startup-pro' ),







				'options'  => array(







					2 => '2 Columns',







					3 => '3 Columns',







					4 => '4 Columns',







					6 => '6 Columns'







				),







				'default'  => 4







			),







			array(







				'id'       => 'woo-upsells-columns',







				'type'     => 'select',







				'subtitle' => esc_html__( 'Here you can choose how many related products you want to display to be displayed on the product page.', 'startup-pro' ),







				'title'    => 'Up-Sells Columns',







				'options'  => array(







					2 => '2 Columns',







					3 => '3 Columns',







					4 => '4 Columns',







					6 => '6 Columns'







				),







				'default'  => 4







			),







			array(







				'id'     => 'woo-section-end',







				'type'   => 'section',







				'indent' => false







			),







		)







	) );







	Redux::setSection( $opt_name, array(







		'title'      => esc_html__( 'Item settings', 'startup-pro' ),







		'icon'       => 'fa fa-toggle-on',







		'subsection' => true,







		'fields'     => array(







			array(







				'id'     => 'item-settings-section-start',







				'type'   => 'section',







				'indent' => true







			),







			array(







				'id'       => 'woo-single-layout',







				'title'    => esc_html__( 'Single product layout', 'startup-pro' ),







				'type'     => 'image_select',







				'options'  => $sidebarImages,







				'subtitle' => esc_html__( 'This option allows you to select the layout of the single product page.', 'startup-pro' ),







				'default'  => 'full'







			),







			array(







				'id'       => 'woo-single-sidebar',







				'title'    => esc_html__( 'Select sidebar', 'startup-pro' ),







				'subtitle' => esc_html__( 'This option allows you to select the sidebar of the single product page.', 'startup-pro' ),







				'type'     => 'select',







				'data'     => 'sidebars',







				'defalt'   => ''







			),







			array(







				'id'       => 'woo-product-price',







				'type'     => 'switch',







				'subtitle' => esc_html__( 'This option allows you to choose if you want to show or hide the product price on the listing page.', 'startup-pro' ),







				'title'    => esc_html__( 'Product price', 'startup-pro' ),







				'default'  => true







			),







			array(







				'id'       => 'woo-product-reviews',







				'type'     => 'switch',







				'title'    => esc_html__( 'Reviews', 'startup-pro' ),







				'default'  => true,







				'subtitle' => esc_html__( 'This option allows you to choose if you want to show or hide the product reviews on the listing page', 'startup-pro' ),







			),







			array(







				'id'     => 'woo-section-end',







				'type'   => 'section',







				'indent' => false







			),







		)







	) );







