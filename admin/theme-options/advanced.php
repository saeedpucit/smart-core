<?php


//ADVANCED


Redux::setSection( $opt_name, array(


	'title'  => esc_html__( 'Advanced', 'startup-pro' ),


	'desc'   => esc_html__( '', 'startup-pro' ),


	'icon'   => 'el-icon-cogs',


	'fields' => array(


		array(


			'id'       => 'allow-comments',


			'type'     => 'switch',


			'title'    => esc_html__( 'Allow Comments/Reviews', 'startup-pro' ),


			'subtitle' => esc_html__( 'This option will allow you to enable or disable the comments or reviews option on the products page.', 'startup-pro' ),


			'default'  => true


		),


	)


) );


?>