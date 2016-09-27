<?php







//STYLING







Redux::setSection( $opt_name, array(







	'title'    => esc_html__( 'Styling', 'startup-pro' ),







	'subtitle' => esc_html__( '', 'startup-pro' ),







	'icon'     => 'fa fa-eye',







	'fields'   => array(







		array(







			'id'       => 'primary-color',







			'type'     => 'color',







			'title'    => esc_html__( 'Primary Color', 'startup-pro' ),







			'subtitle' => esc_html__( 'This is where you can set the primary color of your website', 'startup-pro' ),







			'default'  => '#F92740',







			'validate' => 'color',







			'compiler' => true







		),







		array(







			'id'       => 'link-color-pick',







			'type'     => 'link_color',







			'title'    => esc_html__( 'Links Color Option', 'startup-pro' ),







			'subtitle' => esc_html__( 'This allows you to change the link color on the whole website.', 'startup-pro' ),







			'active'   => false,







			'visited'  => false,







			'default'  => array(







				'regular' => '#444444',







				'hover'   => '#F92740'







			),







			'compiler' => array(







				'body a'







			)







		),







		array(







			'id'       => 'button-color-pick',







			'type'     => 'link_color',







			'title'    => esc_html__( 'Buttons Color Option', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'From here you can change the button color on the website: eg: Sign in, Comment, Play now!, etc.', 'startup-pro' ),







			'active'   => false,







			'visited'  => false,







			'default'  => array(







				'regular' => '#444444',







				'hover'   => '#F92740'







			),







			'compiler' => array(







				'body a.pro-btn'







			)







		),







		array(







			'id'          => 'pagination-color',







			'type'        => 'color',







			'title'       => esc_html__( 'Pagination color', 'startup-pro' ),







			'subtitle'    => esc_html__( 'This option allows you to change the color of the pagination.', 'startup-pro' ),







			'default'     => '#F92740',







			'transparent' => false,







			'validate'    => 'color',







			'compiler'    => true







		),







	)







) );















// STYLING >> Background options







Redux::setSection( $opt_name, array(







	'title'      => esc_html__( 'Background', 'startup-pro' ),







	'subtitle'   => esc_html__( ' ', 'startup-pro' ),







	'icon'       => 'fa fa-eyedropper',







	'subsection' => true,







	'fields'     => array(







		array(







			'id'       => 'background-section-start',







			'type'     => 'section',







			'subtitle' => 'This section allows you to format the background of your website.',







			'indent'   => true







		),







		array(







			'id'       => 'layout-type',







			'type'     => 'button_set',







			'title'    => esc_html__( 'Choose website layout', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'From here you can select the style of the website layout: boxed or wide.', 'startup-pro' ),







			'options'  => array(







				'wide'  => 'Wide',







				'boxed' => 'Boxed'







			),







			'default'  => 'wide'







		),







		array(







			'id'            => 'boxed-background',







			'type'          => 'background',







			'title'         => esc_html__( 'Background Image For Outer Area', 'startup-pro' ),







			'subtitle'      => esc_html__( '', 'startup-pro' ),







			'subtitle'      => esc_html__( '', 'startup-pro' ),







			'preview_media' => true,







			'preview'       => false,







			'default'       => array(







				'background-color'      => '#ffffff',







				'background-repeat'     => 'repeat',







				'background-position'   => 'center center',







				'background-size'       => 'inherit',







				'background-attachment' => 'scroll'







			),







			'compiler'      => array(







				'body'







			),







			'required'      => array(







				'layout-type',







				'equals',







				'boxed'







			)







		),







		array(







			'id'             => 'container-spacing',







			'type'           => 'spacing',







			'mode'           => 'padding',







			'subtitle'       => esc_html__( 'From here you can set the distance between the content and the other elements. The default value is 80px.', 'startup-pro' ),







			'left'           => false,







			'right'          => false,







			'units'          => array( 'px' ),







			'units_extended' => 'false',







			'title'          => esc_html__( 'Content padding', 'startup-pro' ),







			'default'        => array(







				'padding-top'    => '60px',







				'padding-bottom' => '60px',







				'units'          => 'px',







			),







			'compiler'       => array( '.cont-padding' )







		),







		array(







			'id'       => 'container-width',







			'type'     => 'dimensions',







			'units'    => array(







				'px'







			),







			'title'    => esc_html__( 'Box width', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'height'   => false,







			'subtitle' => esc_html__( 'From here you can set the width of your website. The default value is 1200px.', 'startup-pro' ),







			'default'  => array(







				'width' => '1170px'







			),







			'compiler' => true







		),







		array(







			'id'       => 'content-width',







			'type'     => 'dimensions',







			'units'    => array(







				'px'







			),







			'title'    => esc_html__( 'Content width', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'height'   => false,







			'subtitle' => esc_html__( 'From here you can set the width of the content on your website. The default value is 1160px.', 'startup-pro' ),







			'default'  => array(







				'width' => '1200px',







				'units' => 'px'







			),







			'compiler' => true







		),







		array(







			'id'       => 'body-bg-color',







			'type'     => 'color',







			'title'    => esc_html__( 'Body background', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'default'  => '#ffffff',







			'validate' => 'color',







			'compiler' => array(







				'background-color' => 'body'







			),







			'required' => array(







				'layout-type',







				'equals',







				'boxed'







			)







		),







		array(







			'id'            => 'container-background',







			'type'          => 'background',







			'title'         => esc_html__( 'Content Container background', 'startup-pro' ),







			'subtitle'      => esc_html__( 'This allows you to choose a background color and/or image "under the box". This setting will only work if you selected boxed background.', 'startup-pro' ),







			'subtitle'      => esc_html__( '', 'startup-pro' ),







			'preview_media' => true,







			'preview'       => false,







			//'background-size'       => false,







			//'background-attachment' => false,







			'default'       => array(







				'background-color'    => '#ffffff',







				'background-repeat'   => 'repeat',







				'background-position' => 'center center',







				'media'               => array(







					'id'        => '',







					'height'    => '',







					'width'     => '',







					'thumbnail' => ''







				)







			),







			'compiler'      => array(







				'#content-wrapper'







			)







		),







		array(







			'id'     => 'background-section-end',







			'type'   => 'section',







			'indent' => false,







		),







	)







) );















// CUSTOM CSS















Redux::setSection( $opt_name, array(







	'title'      => esc_html__( 'Custom CSS', 'startup-pro' ),







	'subtitle'   => esc_html__( '', 'startup-pro' ),







	'icon'       => 'fa fa-css3',







	'subsection' => true,







	'fields'     => array(







		array(







			'id'       => 'pure-css-code',







			'type'     => 'ace_editor',







			'title'    => esc_html__( 'CSS Code', 'startup-pro' ),







			'subtitle' => esc_html__( 'Here you can add up your custom CSS rules in order to modify existing styles.', 'startup-pro' ),







			'mode'     => 'css',







			'theme'    => 'monokai',







			'default'  => ''







		),







	)







) );







?>