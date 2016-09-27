<?php


//GENERAL


Redux::setSection( $opt_name, array(


	'title'  => esc_html__( 'General', 'startup-pro' ),


	'desc'   => esc_html__( '', 'startup-pro' ),


	'icon'   => 'fa fa-cog',


	'fields' => array(


		array(


			'id'       => 'general-section-start',


			'type'     => 'section',


			'subtitle' => esc_html__( 'The following options enable you to import demo contents, add tracking codes to your website and choose from various responsiveness options.', 'startup-pro' ),


			'indent'   => true


		),


		array(


			'id'       => 'space-before-head',


			'type'     => 'ace_editor',


			'title'    => esc_html__( 'Space before closing head tag', 'startup-pro' ),


			'subtitle' => esc_html__( 'Add in a code line before </head>', 'startup-pro' ),


			'mode'     => 'plain_text',


			'theme'    => 'monokai',


			'default'  => ''


		),


		array(


			'id'       => 'space-before-body',


			'type'     => 'ace_editor',


			'title'    => esc_html__( 'Space before closing body tag', 'startup-pro' ),


			'subtitle' => esc_html__( 'Add in a code line before  </body>', 'startup-pro' ),


			'mode'     => 'plain_text',


			'theme'    => 'monokai',


			'default'  => ''


		),


	),


	array(


		'id'     => 'general-section-end',


		'type'   => 'section',


		'indent' => false,


	),


) );


//GENERAL >> IMPORT / EXPORT


Redux::setSection( $opt_name, array(


	'title'      => esc_html__( 'Import Export', 'startup-pro' ),


	'desc'       => '<p class="description">'.__("*NOTE: If you import demo content. It will overwrite the existing data and settings. It's not included revolution slider and Essential Grid. So you have to configure that settings once it's done.", 'startup-pro' ).'</p><p class="description">'. esc_html__( 'Works best to import on a new install of WordPress', 'startup-pro' ).'</p>',


	'icon'       => 'fa fa-cloud-download',


	'subsection' => true,


	'fields'     => array(


		array(


			'id'         => 'opt-import-demo-content',


			'type'       => 'import_demo_content',


			'title'      => '',


			'subtitle'   => '',


			'full_width' => false


		),


		array(


			'id'         => 'opt-import-export',


			'type'       => 'import_export',


			'title'      => 'Import / Export theme settings',


			'subtitle'   => 'Import and Export your theme settings from file, text or URL.',


			'full_width' => false


		),


	)


) );


?>