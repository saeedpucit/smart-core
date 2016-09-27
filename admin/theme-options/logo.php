<?php







//LOGO



$assets_folder = get_template_directory_uri() . '/assets/images/';




Redux::setSection( $opt_name, array(







	'title'    => esc_html__( 'Logo', 'startup-pro' ),







	'subtitle' => esc_html__( '', 'startup-pro' ),







	'icon'     => 'fa fa-magic',







	'fields'   => array(
		array(

			'id'       => 'logo-upload-section-start',
			'type'     => 'section',
			'subtitle' => 'This enables you to upload both a regular and a retina version of your logo onto your website. You can set the logo size, alignment, position and margins.
When uploading a normal version, please upload the image within the Logo field. When uploading a retina version, use the 2x Logo file within the Logo (Retina Version @2x) field.',
			'indent'   => true
		),

		array(
			'id' 		=> 'logo-upload',
			'type' 		=> 'media',
			'title' 	=> esc_html__('Logo', 'startup-pro'),

			'default' 	=> array(
								'url' =>  $assets_folder .'logo.png'
							),
		),

		array(
			'id' 		=> 'logo-upload-retina',
			'type' 		=> 'media',
			'title' 	=> esc_html__('Logo for Retina Displays', 'startup-pro'),

			'default' 	=> array(
								'url' => $assets_folder . 'logox2.png'
							),
		),

		array(
			'id'             => 'logo-margin',
			'type'           => 'spacing',
			'compiler'       => array(
									'.header-top .logo'
								),
			'mode'           => 'margin',
			'units'          => array(
									'px'
								),
			'top'            => false,
			'bottom'         => false,
			'units_extended' => false,
			'display_units'  => false,
			'title'          => esc_html__( 'Logo Margin', 'startup-pro' ),
			'subtitle'       => esc_html__( 'Set the margins on your logo', 'startup-pro' ),
			'default'        => array(
									'margin-right' => '2px',
									'margin-left'  => '0px',
									'units'        => 'px'
								)
		),
		array(







			'id'       => 'logo-background-color',







			'type'     => 'color',







			'title'    => esc_html__( 'Logo background color (for header 1)', 'startup-pro' ),







			'subtitle' => esc_html__( 'Pick a Logo background color for the header 1 (default: #dd9933).', 'startup-pro' ),







			'default'  => 'transparent',







			'validate' => 'color',







			'compiler' => array(







				'background-color' => '.logo'







			)







		),







		array(







			'id'       => 'logo-background-dimensions',







			'type'     => 'dimensions',







			'units'    => array(







				'px'







			),







			'title'    => esc_html__( 'Logo background width and height', 'startup-pro' ),







			'subtitle' => esc_html__( 'Set the height and the width of the logo background.', 'startup-pro' ),







			'default'  => array(

				'units'  => 'px'







			),







			'compiler' => array(







				'.logo a'







			)







		),





		array(







			'id'     => 'logo-section-end',







			'type'   => 'section',







			'indent' => false,







		),







	)







) );







?>
