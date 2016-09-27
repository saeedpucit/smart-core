<?php



//BLOG



Redux::setSection( $opt_name, array(



	'title'  => 'Page Loader',



	'icon'   => 'fa fa-dot-circle-o',



	'fields' => array(



		array(



			'id'       => 'page-loader-section-start',



			'type'     => 'section',



			'subtitle' => esc_html__( 'If the website loader is on, it will show a loading page and the whole website will be loading in the background. When all the elements of the page are loaded, the loader dissappears and the website will be shown.<br>In this area you can set the website loader on either ON or OFF and customize it to your needs.', 'startup-pro' ),



			'indent'   => true



		),



		array(



			'id'       => 'loader',



			'type'     => 'switch',



			'title'    => esc_html__( 'Use Page-Loader?', 'startup-pro' ),



			'subtitle' => esc_html__( '', 'startup-pro' ),



			'subtitle' => esc_html__( 'If you want to use a pre-loader for the pages select On.', 'startup-pro' ),



			'default'  => false



		),



		array(



			'id'            => 'load-bg',



			'type'          => 'background',



			'title'         => esc_html__( 'Loader background', 'startup-pro' ),



			'subtitle'      => esc_html__( 'Here you can set the loader background color or you can upload an image.', 'startup-pro' ),



			'preview_media' => true,



			'preview'       => false,



			'default'       => array(



				'background-color' => '#2e3957',



			),



			'required'      => array(



				'loader',



				'equals',



				'1'



			)



		),



		array(



			'id'            => 'loader-circle',



			'type'          => 'background',



			'title'         => esc_html__( 'Loader circle', 'startup-pro' ),



			'subtitle'      => esc_html__( 'Here you can upload the logo you want to be shown during your website loading time. You can also set the background color behind the logo.', 'startup-pro' ),



			'subtitle'      => esc_html__( '', 'startup-pro' ),



			'preview_media' => true,



			'preview'       => false,



			'default'       => array(



				'background-color' => '#27ad5f',



				'background-image' => '//mycoach.smart.co/wp-content/uploads/2016/02/loader.png'



			),



			'required'      => array(



				'loader',



				'equals',



				'1'



			)



		),



		array(



			'id'       => 'loader-border',



			'type'     => 'color',



			'title'    => esc_html__( 'Loader border', 'startup-pro' ),



			'default'  => '#eeeeee',



			'subtitle' => esc_html__( 'Here you can set the color of the animation element (Loading Line)', 'startup-pro' ),



			'validate' => 'color',



			'required' => array(



				'loader',



				'equals',



				'1'



			),



			'compiler' => true



		),



	)



) );



?>