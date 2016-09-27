<?php







//FOOTER







Redux::setSection( $opt_name, array(







	'title'    => esc_html__( 'Footer', 'startup-pro' ),







	'subtitle' => esc_html__( '', 'startup-pro' ),







	'icon'     => 'fa fa-hand-o-down',







	'fields'   => array(







		array(







			'id'       => 'footer-section-start',







			'type'     => 'section',







			'subtitle' => 'This option will show the footer from the page',







			'indent'   => true







		),







		array(







			'id'       => 'show-footer',







			'type'     => 'switch',







			'title'    => esc_html__( 'Show footer', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option will show the footer from the page', 'startup-pro' ),







			'default'  => true







		),







		array(







			'id'       => 'footer-widgets',







			'type'     => 'image_select',







			'title'    => esc_html__( 'Footer widgets', 'startup-pro' ),







			'subtitle' => esc_html__( 'This allows you to select the number of widgets that you want included in the footer. To add the widgets, please go to Appearance - > Widgets', 'startup-pro' ),







			'options'  => array(







				'1'  => array(







					'alt' => '',







					'img' => smart_core_plugin_url() . '/assets/images/widgets/model1.png'







				),







				'2'  => array(







					'alt' => '',







					'img' => smart_core_plugin_url() . '/assets/images/widgets/model2.png'







				),







				'3'  => array(







					'alt' => '',







					'img' => smart_core_plugin_url() . '/assets/images/widgets/model3.png'







				),







				'4'  => array(







					'alt' => '',







					'img' => smart_core_plugin_url() . '/assets/images/widgets/model4.png'







				),







				'5'  => array(







					'alt' => '',







					'img' => smart_core_plugin_url() . '/assets/images/widgets/model5.png'







				),







				'6'  => array(







					'alt' => '',







					'img' => smart_core_plugin_url() . '/assets/images/widgets/model6.png'







				),







				'7'  => array(







					'alt' => '',







					'img' => smart_core_plugin_url() . '/assets/images/widgets/model7.png'







				),







				'8'  => array(







					'alt' => '',







					'img' => smart_core_plugin_url() . '/assets/images/widgets/model8.png'







				),







				'9'  => array(







					'alt' => '',







					'img' => smart_core_plugin_url() . '/assets/images/widgets/model9.png'







				),







				'10' => array(







					'alt' => '',







					'img' => smart_core_plugin_url() . '/assets/images/widgets/model10.png'







				)







			),







			'default'  => 4,







			'required' => array(







				'show-footer',







				'equals',







				'1'







			)







		),







		array(







			'id'                    => 'background-image-footer-area',







			'type'                  => 'background',







			'title'                 => esc_html__( 'Background Image', 'startup-pro' ),







			'subtitle'              => esc_html__( 'This option enables you to change the background color in the footer or add an image.', 'startup-pro' ),







			'subtitle'              => esc_html__( '', 'startup-pro' ),







			'preview_media'         => true,







			'background-attachment' => false,







			'preview'               => false,







			'default'               => array(







				'background-color'    => '#F92740',







				'background-repeat'   => 'repeat',







				'background-position' => 'center center'







			),







			'compiler'              => true,







			'required'              => array(







				'show-footer',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'footer-background-parallax',







			'type'     => 'switch',







			'title'    => esc_html__( 'Parallax', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to add a parallax effect for the image in the footer', 'startup-pro' ),







			'default'  => true,







			'required' => array(







				'show-footer',







				'equals',







				'1'







			)







		),







		array(
			'id'            => 'footer-padding',
			'type'          => 'spacing',
			'title'         => esc_html__( 'Footer Padding', 'startup-pro' ),
			'subtitle'      => esc_html__( '', 'startup-pro' ),
			'subtitle'      => esc_html__( 'This option allows you to set the distance before and after the footer. The default value is 60px', 'startup-pro' ),
			'units'         => 'px',
			'display_units' => false,
			'left'          => false,
			'right'         => false,
			'compiler'      => array(
				'footer .widgets'
			),
			'default'       => array(
				'padding-top'    => '90px',
				'padding-bottom' => '70px',
				'units'          => 'px'
			),
			'required'      => array(
				'show-footer',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'footer-fixed-effect',
			'type'     => 'switch',
			'title'    => esc_html__( 'Add footer fixed effect', 'startup-pro' ),
			'subtitle' => esc_html__( '', 'startup-pro' ),
			'subtitle' => esc_html__( 'You can add up a fixed footer effect from here. For this effect to work, the footer should be ON and the footer form should be OFF.', 'startup-pro' ),
			'default'  => false,
			'required' => array(
				'show-footer',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'select-footer-font-family',







			'type'     => 'typography',







			'title'    => esc_html__( 'Select Footer Headings Font attributes', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to format the Headings in the footer widgets.', 'startup-pro' ),







			'google'   => true,







			'default'  => array(







				'color'          => '#a4a8bc',







				'font-size'      => '22px',







				'font-family'    => 'Open Sans',







				'font-weight'    => '100',







				'subsets'        => 'latin',







				'line-height'    => '30px',







				'text-transform' => 'uppercase',







				'text-align'     => 'center'







			),







			'compiler' => array(







				'.footer-form h2'







			),







			'required' => array(







				'show-footer',







				'equals',







				'1'







			)







		),







		array(







			'id'     => 'footer-section-end',







			'type'   => 'section',







			'indent' => false,







		),







	)







) );







//FOOTER >> Copyright Bar



//FOOTER >> Footer form

Redux::setSection( $opt_name, array(

	'title'      => esc_html__( 'Footer form', 'startup-pro' ),

	'subtitle'   => esc_html__( ' ', 'startup-pro' ),

	'icon'       => 'fa fa-file-text-o',

	'subsection' => true,

	'fields'     => array(

		array(

			'id'     => 'footer-form-section-start',

			'type'   => 'section',

			'indent' => true

		),

		array(

			'id'       => 'show-footer-form',

			'type'     => 'switch',

			'title'    => esc_html__( 'Show Footer Contact Form?', 'startup-pro' ),

			'subtitle' => esc_html__( '', 'startup-pro' ),

			'subtitle' => esc_html__( 'This option will show the contact form before the footer.', 'startup-pro' ),

			'default'  => false

		),

		array(

			'id'       => 'footer-form-shortcode',

			'type'     => 'text',

			'title'    => esc_html__( 'Footer Contact Form Shortcode', 'startup-pro' ),

			'subtitle' => esc_html__( '', 'startup-pro' ),

			'subtitle' => esc_html__( 'To use this option, please select the shortcode from Contact form 7.', 'startup-pro' ),

			'required' => array(

				'show-footer-form',

				'equals',

				'1'

			),

			'default'  => '[contact-form-7 id="6" title="Contact form 1"]'

		),

		array(

			'id'       => 'before-footer-form',

			'type'     => 'editor',

			'title'    => esc_html__( 'Before form', 'startup-pro' ),

			'subtitle' => esc_html__( 'This is the top section of the contact form: Eg: Lets Talk!', 'startup-pro' ),

			'default'  => '<h1 style="text-align: center; color: #fff; font-weight: 900;">LETS TALK</h1>
<h3 style="text-align: center; margin-bottom: 35px;"><span style="color: #fff; font-weight: 300; letter-spacing: 4px; font-size: 16px; line-height: 54px;">TELL ME YOUR STORY OR JUST SAY HELLO.</span></h3>',

			'args'     => array(

				'teeny'         => false,

				'textarea_rows' => 10

			)

		),

		array(

			'id'       => 'show-footer-contact-details',

			'type'     => 'switch',

			'title'    => esc_html__( 'Display footer contact details', 'startup-pro' ),

			'subtitle' => esc_html__( '', 'startup-pro' ),

			'subtitle' => esc_html__( 'From here, you can show/hide the contact details form the footer form.', 'startup-pro' ),

			'default'  => true

		),

		array(

			'id'          => 'contact-details',

			'type'        => 'slides',

			'title'       => esc_html__( 'Contact details', 'startup-pro' ),

			'subtitle'    => esc_html__( 'This allows you to add up to 6 informational columns.', 'startup-pro' ),

			'placeholder' => array(

				'title'           => esc_html__( 'This is a title', 'startup-pro' ),

				'subtitleription' => esc_html__( 'subtitleription Here', 'startup-pro' ),

				'url'             => esc_html__( 'Give us a link!', 'startup-pro' )

			),

			'required'    => array(

				'show-footer-contact-details',

				'equals',

				'1'

			)

		),

		array(

			'id'       => 'contact-details-color',

			'type'     => 'color',

			'title'    => esc_html__( 'Contact Details Color', 'startup-pro' ),

			'subtitle' => esc_html__( '', 'startup-pro' ),

			'default'  => '#ffffff',

			'validate' => 'color',

			'compiler' => array(

				'.footer-form .footer-contact-details .widget *'

			)

		),

		array(

			'id'            => 'footer-form-padding',

			'type'          => 'spacing',

			'title'         => esc_html__( 'Footer Padding', 'startup-pro' ),

			'subtitle'      => esc_html__( 'This option enables you to set the distance before and after the footer. The default value is 100px', 'startup-pro' ),

			'units'         => 'px',

			'display_units' => false,

			'left'          => false,

			'right'         => false,

			'compiler'      => array(

				'.top-footer'

			),

			'default'       => array(

				'padding-top'    => '100px',

				'padding-bottom' => '100px',

				'units'          => 'px'

			)

		),

		array(

			'id'                    => 'background-image-form-area',

			'type'                  => 'background',

			'title'                 => esc_html__( 'Background Image', 'startup-pro' ),

			'subtitle'              => esc_html__( 'This option allows you to change the background color in the footer or add an image.', 'startup-pro' ),

			'subtitle'              => esc_html__( '', 'startup-pro' ),

			'preview_media'         => true,

			'background-attachment' => false,

			'preview'               => false,

			'default'               => array(

				'background-color'    => '#000000',

				'background-repeat'   => 'no-repeat',

				'background-position' => 'center center',

				'background-image'    => '//mycoach.smart.co/wp-content/uploads/2016/04/footer-form.jpg'

			),

			'compiler'              => true

		),

		array(

			'id'       => 'footer-form-background-parallax',

			'type'     => 'switch',

			'title'    => esc_html__( 'Parallax', 'startup-pro' ),

			'subtitle' => esc_html__( '', 'startup-pro' ),

			'subtitle' => esc_html__( 'This option allows you to add a parallax effect for the image in the footer form.', 'startup-pro' ),

			'default'  => true

		),

		array(

			'id'     => 'footer-form-section-end',

			'type'   => 'section',

			'indent' => false,

		),

	)

) );



Redux::setSection( $opt_name, array(







	'title'      => esc_html__( 'Copyright Bar', 'startup-pro' ),







	'subtitle'   => esc_html__( ' ', 'startup-pro' ),







	'icon'       => 'fa fa-copyright',







	'subsection' => true,







	'fields'     => array(







		array(







			'id'     => 'copyright-section-start',







			'type'   => 'section',







			'indent' => true







		),







		array(







			'id'       => 'copyright-bar',







			'type'     => 'switch',







			'title'    => esc_html__( 'Copyright Bar', 'startup-pro' ),







			'subtitle' => esc_html__( ' ', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option will show/hide the Copyright bar.', 'startup-pro' ),







			'default'  => true







		),







		array(







			'id'       => 'copyright-text',







			'type'     => 'editor',







			'title'    => esc_html__( 'Copyright text', 'startup-pro' ),







			'subtitle' => esc_html__( 'Write your copyright information or anything you would like.', 'startup-pro' ),







			'default'  => 'Copyright 2016 Startup PRO. Theme designed by <a href="//smart.co" target="_blank">CodeSmart</a>',







			'required' => array(







				'copyright-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'footer-right-content',







			'type'     => 'select',







			'title'    => esc_html__( 'Footer Right Content', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option enables you to select the content from the right side of the Copyright bar.', 'startup-pro' ),







			'options'  => array(







				'contact-info'   => 'Contact info',







				'navigation'     => 'Navigation',







				'custom-content' => 'Custom content',







				'social-icons'   => 'Social icons',







				'leave-empty'    => 'Leave empty'







			),







			'default'  => 'navigation',







			'required' => array(







				'copyright-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'copyright-custom-content',







			'type'     => 'editor',







			'title'    => esc_html__( 'Custom content', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'In case you have the selected "Custom content" in the "Footer Right Content", you can introduce your content here', 'startup-pro' ),







			'args'     => array(







				'textarea_rows' => 5







			),







			'default'  => '',







			'required' => array(







				'copyright-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'          => 'footer-socials-style',







			'type'        => 'typography',







			'title'       => esc_html__( 'Footer socials', 'startup-pro' ),







			'subtitle'    => esc_html__( 'From here you can alter the size in px of the social icons in the Copyright bar.', 'startup-pro' ),







			'google'      => true,







			'subsets'     => false,







			'font-family' => false,







			'font-weight' => false,







			'font-style'  => false,







			'line-height' => false,







			'text-align'  => false,







			'color'       => false,







			'default'     => array(







				'font-size' => '14px'







			),







			'compiler'    => array(







				'footer ul.footer-socials li a'







			),







			'required'    => array(







				'footer-right-content',







				'equals',







				'social-icons'







			),







			'required'    => array(







				'copyright-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'footer-socials-color',







			'type'     => 'link_color',







			'title'    => esc_html__( 'Footer Social Icons Custom Color', 'startup-pro' ),







			'subtitle' => esc_html__( 'From here you can choose the color of the social icons in the Copyright bar, as well as their hovering color.', 'startup-pro' ),







			'default'  => array(







				'regular' => '#5e5e5e',







				'hover'   => '#F92740'







			),







			'visited'  => false,







			'active'   => false,







			'compiler' => array(







				'footer ul.footer-socials li a'







			),







			'required' => array(







				'footer-right-content',







				'equals',







				'social-icons'







			),







			'required' => array(







				'copyright-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'            => 'copyright-padding',







			'type'          => 'spacing',







			'title'         => esc_html__( 'Copyright Padding', 'startup-pro' ),







			'subtitle'      => esc_html__( '', 'startup-pro' ),







			'subtitle'      => esc_html__( 'This option allows you to set the padding for the Copyright bar. The default value is 5px.', 'startup-pro' ),







			'units'         => 'px',







			'display_units' => false,







			'left'          => false,







			'right'         => false,







			'compiler'      => array(







				'.bott-footer'







			),







			'default'       => array(







				'padding-top'    => '20px',







				'padding-bottom' => '20px',







				'units'          => 'px'







			),







			'required'      => array(







				'copyright-bar',







				'equals',







				'1'







			),







			'required'      => array(







				'copyright-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'copyright-bg-color',







			'type'     => 'color',







			'title'    => esc_html__( 'Copyright Background Color', 'startup-pro' ),







			'subtitle' => esc_html__( 'This enables you to select the background color of the Copyright bar, as well as set the transparency levels.', 'startup-pro' ),







			'default'  => '#1c1c1c',







			'validate' => 'color',







			'compiler' => array(







				'background-color' => '.copyright'







			),







			'required' => array(







				'copyright-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'copyright-border-color',







			'type'     => 'color',







			'title'    => esc_html__( 'Copyright Border Color', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to select the color for the top border of the Copyright bar or set transparency levels if you want it hidden.', 'startup-pro' ),







			'default'  => 'transparent',







			'compiler' => array(







				'border-color' => 'footer .bott-footer'







			),







			'required' => array(







				'copyright-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'copyright-font-atributes',







			'type'     => 'typography',







			'title'    => esc_html__( 'Copyright Font attributes', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option enables you to format the text within the Copyright bar.', 'startup-pro' ),







			'google'   => true,







			'default'  => array(







				'font-size'   => '13px',







				'line-height' => '23px',







				'font-family' => 'Open Sans',







				'font-weight' => '400',







				'color'       => '#5e5e5e'







			),







			'compiler' => array(







				'.copyright .copyright-text, .copyright .copyright-text span, .copyright .copyright-text p, .copyright .copyright-text a, .copyright .footer-menu a'







			),







			'required' => array(







				'copyright-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'copyright-font-atributes-a',







			'type'     => 'link_color',







			'title'    => esc_html__( 'Copyright Link Font Color', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option enables you to set the color of the links within the Copyright bar, as well as the hover effect color.', 'startup-pro' ),







			'active'   => false,







			'focus'    => false,







			'default'  => array(







				'regular' => '#6d6d6d',







				'hover'   => '#F92740'







			),







			'compiler' => array(







				'.copyright .footer-menu a, .copyright .copyright-text a'







			),







			'required' => array(







				'copyright-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'enable-to-top-script',







			'type'     => 'switch',







			'title'    => esc_html__( 'Enable To Top Script', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to show or hide the "Back to top" button in the Copyright bar.', 'startup-pro' ),







			'default'  => false,







			'required' => array(







				'copyright-bar',







				'equals',







				'1'







			)







		),







		array(







			'id'     => 'copyright-section-end',







			'type'   => 'section',







			'indent' => false,







		),







	)







) );







Redux::setSection( $opt_name, array(







	'title'      => esc_html__( 'Footer widgets', 'startup-pro' ),







	'subtitle'   => esc_html__( ' ', 'startup-pro' ),







	'subsection' => true,







	'icon'       => 'fa fa-th-large',







	'fields'     => array(







		array(







			'id'     => 'footer-widgets-section-start',







			'type'   => 'section',







			'indent' => true







		),







		array(







			'id'             => 'footer-widget-heading-atributes',







			'type'           => 'typography',







			'title'          => esc_html__( 'Footer Widget Heading attributes', 'startup-pro' ),







			'subtitle'       => esc_html__( 'This option allows you to format the text in the heading of the footer widgets.', 'startup-pro' ),







			'google'         => true,







			'text-transform' => true,







			'default'        => array(







				'color'          => '#ffffff',







				'font-size'      => '22px',







				'line-height'    => '24px',







				'font-family'    => 'Open Sans',







				'font-weight'    => '700',







				'text-transform' => 'uppercase'







			),







			'compiler'       => array(







				'footer .widget-title h4'







			)







		),







		array(







			'id'       => 'footer-widget-heading-border-color',







			'type'     => 'color',







			'title'    => esc_html__( 'Footer Widget Heading Line color', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to choose the line color for the heading from the footer widget, or make it transparent.', 'startup-pro' ),







			'default'  => 'transparent',







			'validate' => 'color',







			'compiler' => true







		),







		array(

			'id'             => 'footer-widget-text-atributes',

			'type'           => 'typography',

			'title'          => esc_html__( 'Footer Widget Text attributes', 'startup-pro' ),

			'subtitle'       => esc_html__( 'This option allows you to format the text in the content of the footer widgets.', 'startup-pro' ),

			'google'         => true,

			'text-transform' => true,

			'default'        => array(

				'color'          => '#ffffff',

				'font-size'      => '14px',

				'line-height'    => '24px',

				'font-family'    => 'Open Sans',

				'font-weight'    => '400'

			),

			'compiler'       => array(

				'footer .smart_widget .textwidget',

				'footer .smart_widget .post-date',

				'footer .smart_widget .post-category'

			)

		),

		array(







			'id'       => 'footer-widget-heading-border-height',







			'type'     => 'text',







			'title'    => esc_html__( 'Footer Widget Heading Line Height', 'startup-pro' ),







			'subtitle' => esc_html__( 'From here you can set the height of the heading line of the footer widget. The default value is 1px.', 'startup-pro' ),







			'validate' => 'number',







			'default'  => '1',







			'compiler' => true







		),







		array(







			'id'       => 'footer-widget-delimiter',







			'type'     => 'switch',







			'title'    => esc_html__( 'Widget delimiter', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to enable the element delimiters of the widgets.', 'startup-pro' ),







			'default'  => true,







			'compiler' => true







		),







		array(







			'id'          => 'footer-widget-border-color',







			'type'        => 'color',







			'title'       => esc_html__( 'Color for the post delimiter', 'startup-pro' ),







			'subtitle'    => esc_html__( 'This option allows you to set a color for the delimiter of the footer widget.', 'startup-pro' ),







			'default'     => '#4b5778',







			'validate'    => 'color',







			'transparent' => false,







			'compiler'    => array(







				'border-color' => 'footer .smart_widget ul li'







			),







			'required'    => array(







				'footer-widget-delimiter',







				'equals',







				'1'







			)







		),







		array(







			'id'       => 'footer-widgets-links',







			'type'     => 'link_color',







			'title'    => esc_html__( 'Footer widgets links', 'startup-pro' ),







			'subtitle' => esc_html__( '', 'startup-pro' ),







			'subtitle' => esc_html__( 'This option allows you to change the link colors of the footer widgets.', 'startup-pro' ),







			'active'   => false,







			'visited'  => false,







			'default'  => array(







				'regular' => '#ffffff',







				'hover'   => '#F92740'







			),







			'compiler' => array(







				'footer .smart_widget ul li a'







			)







		),







		array(







			'id'     => 'footer-widgets-section-end',







			'type'   => 'section',







			'indent' => false







		),







	)







) );







?>
