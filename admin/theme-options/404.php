<?php



//BLOG



Redux::setSection( $opt_name, array(



	'title'  => 'Page 404 options',



	'icon'   => 'fa fa-close',



	'fields' => array(



		array(



			'id'       => 'blog-section-start',



			'type'     => 'section',



			'subtitle' => esc_html__( 'From this section you can manage the 404 page', 'startup-pro' ),



			'indent'   => true



		),



		array(



			'id'       => 'page-404-title',



			'type'     => 'text',



			'title'    => esc_html__( 'Page 404 Title', 'startup-pro' ),



			'desc'     => esc_html__( '', 'startup-pro' ),



			'validate' => 'number',



			'subtitle' => esc_html__( 'Insert the 404 page Title', 'startup-pro' ),



			'default'  => '404',



		),



		array(



			'id'       => 'page-404-error-text',



			'type'     => 'editor',



			'title'    => esc_html__( 'Page 404 Error Text', 'startup-pro' ),



			'desc'     => esc_html__( '', 'startup-pro' ),



			'validate' => 'number',



			'subtitle' => esc_html__( 'Insert the Error text to show', 'startup-pro' ),



			'default'  => 'NOT FOUND!',



		),



		array(



			'id'       => 'page-404-sub-text',



			'type'     => 'editor',



			'title'    => esc_html__( 'Page 404 Error Sub-Text', 'startup-pro' ),



			'desc'     => esc_html__( '', 'startup-pro' ),



			'validate' => 'number',



			'subtitle' => esc_html__( 'Insert the second Error text to show', 'startup-pro' ),



			'default'  => 'It looks like nothing was found at this location. Maybe try a search?',



		),



		array(



			'id'       => 'page-404-image',



			'type'     => 'media',



			'title'    => esc_html__( 'Page 404 image', 'startup-pro' ),



			'subtitle' => esc_html__( 'Upload a image to replace the title', 'startup-pro' ),



			'default'  => '//mycoach.smart.co/wp-content/uploads/2016/04/404.jpg',



		),



	)



) );



?>