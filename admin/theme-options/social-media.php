<?php



//SOCIAL MEDIA



global $allowed_html;



Redux::setSection( $opt_name, array(



	'title'    => esc_html__( 'Social', 'startup-pro' ),



	'subtitle' => esc_html__( '', 'startup-pro' ),



	'icon'     => 'fa fa-share-alt',



	'fields'   => array(



		array(



			'id'       => 'social-media-section-start',



			'type'     => 'section',



			'subtitle' => esc_html__( 'This is where you can select how the social media pages of your business will be displayed. One you have inserted the page link, they will be displayed in the top bar section or the copyright bar section.', 'startup-pro' ),



			'indent'   => true



		),



		array(



			'id'       => 'open-social-icons-window',



			'type'     => 'switch',



			'title'    => esc_html__( 'Open Social Icons in a New Window', 'startup-pro' ),



			'subtitle' => esc_html__( '', 'startup-pro' ),



			'subtitle' => esc_html__( 'When this option is turned ON, it will open all the social media pages you have in a new window of the browser.', 'startup-pro' ),



			'default'  => true



		),



		array(



			'id'       => 'fa-facebook',



			'type'     => 'text',



			'title'    => esc_html__( 'Facebook', 'startup-pro' ),



			'default'  => '#',



			'subtitle' => esc_html__( 'Please enter in your Facebook URL', 'startup-pro' )



		),



		array(



			'id'       => 'fa-flickr',



			'type'     => 'text',



			'title'    => esc_html__( 'Flickr', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Flickr URL', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-rss',



			'type'     => 'text',



			'title'    => esc_html__( 'RSS', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your RSS URL', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-twitter',



			'type'     => 'text',



			'title'    => esc_html__( 'Twitter', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'default'  => '',



			'subtitle' => esc_html__( 'Please enter in your Twitter URL', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-vimeo',



			'type'     => 'text',



			'title'    => esc_html__( 'Vimeo', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Vimeo URL ', 'startup-pro' ),



			'default'  => '#',



		),



		array(



			'id'       => 'fa-youtube',



			'type'     => 'text',



			'title'    => esc_html__( 'Youtube', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'default'  => '#',



			'subtitle' => esc_html__( 'Please enter in your Youtube URL ', 'startup-pro' )



		),



		array(



			'id'       => 'fa-instagram',



			'type'     => 'text',



			'title'    => esc_html__( 'Instagram', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Instagram URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-pinterest',



			'type'     => 'text',



			'title'    => esc_html__( 'Pinterest', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Pinterest URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-tumblr',



			'type'     => 'text',



			'title'    => esc_html__( 'Tumblr', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Tumblr URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-google-plus',



			'type'     => 'text',



			'title'    => esc_html__( 'Google+', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'default'  => '#',



			'subtitle' => esc_html__( 'Please enter in your Google+ URL ', 'startup-pro' )



		),



		array(



			'id'       => 'fa-dribbble',



			'type'     => 'text',



			'title'    => esc_html__( 'Dribbble', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Dribbble URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-digg',



			'type'     => 'text',



			'title'    => esc_html__( 'Digg', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Digg URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-linkedin',



			'type'     => 'text',



			'title'    => esc_html__( 'LinkedIn', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your LinkedIn URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-skype',



			'type'     => 'text',



			'title'    => esc_html__( 'Skype', 'startup-pro' ),



			'default'  => 'skype:your.id',



			'subtitle' => esc_html__( 'In order to add skype on your website, enter "skype:" followed by your Skype id. eg: skype:your.id', 'startup-pro' )



		),



		array(



			'id'       => 'myspace-social',



			'type'     => 'text',



			'title'    => esc_html__( 'Myspace', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Myspace URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-deviantart',



			'type'     => 'text',



			'title'    => esc_html__( 'Deviantart', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Deviantart URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-yahoo',



			'type'     => 'text',



			'title'    => esc_html__( 'Yahoo', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Yahoo URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-reddit',



			'type'     => 'text',



			'title'    => esc_html__( 'Reddit', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Reddit URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-paypal',



			'type'     => 'text',



			'title'    => esc_html__( 'Paypal', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Paypal URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-dropbox',



			'type'     => 'text',



			'title'    => esc_html__( 'Dropbox', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Dropbox URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'soundclound-social',



			'type'     => 'text',



			'title'    => esc_html__( 'Soundcloud', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'subtitle' => esc_html__( 'Please enter in your Soundcloud URL ', 'startup-pro' ),



			'default'  => ''



		),



		array(



			'id'       => 'fa-envelope-o',



			'type'     => 'text',



			'title'    => esc_html__( 'Email address', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'default'  => 'mailto:you@yourwebsite.com',



			'subtitle' => esc_html__( 'Please enter "mailto:" followed by your email address. eg. mailto:contact@yourwebsite.com 



				This way it will open the default mail from your computer when you click on the link.', 'startup-pro' )



		),



		array(



			'id'     => 'social-media-section-end',



			'type'   => 'section',



			'indent' => false



		),



	)



) );



Redux::setSection( $opt_name, array(



	'title'      => esc_html__( 'Social Sharing', 'startup-pro' ),



	'subtitle'   => esc_html__( '', 'startup-pro' ),



	'icon'       => 'fa fa-cloud-download',



	'subsection' => true,



	'fields'     => array(



		array(



			'id'       => 'enable-share',



			'type'     => 'switch',



			'title'    => esc_html__( 'Enable share', 'startup-pro' ),



			'subtitle' => esc_html__( '', 'startup-pro' ),



			'subtitle' => esc_html__( ' ', 'startup-pro' ),



			'default'  => false



		),



		array(



			'id'       => 'addthis-id',



			'type'     => 'text',



			'subtitle' => wp_kses(__( 'You can find a list of your profile IDs at <a href="'.esc_url( __('http://www.addthis.com/settings/publisher', 'startup-pro')).'">here</a>', 'startup-pro' ),$allowed_html),



			'title'    => esc_html__( 'Add This user id', 'startup-pro' ),



			'required' => array(



				'enable-share',



				'equals',



				'1'



			),



			'default'  => ''



		),



		array(



			'id'       => 'addthis-html',



			'type'     => 'ace_editor',



			'title'    => esc_html__( 'Add This mark-up', 'startup-pro' ),



			'subtitle' => esc_html__( 'Paste the html received in step 2.', 'startup-pro' ),



			'mode'     => 'html',



			'theme'    => 'chrome',



			'required' => array(



				'enable-share',



				'equals',



				'1'



			),



			'default'  => '<!-- Go to www.addthis.com/dashboard to customize your tools -->



<div class="addthis_sharing_toolbox"></div>'



		)



	)



) );



?>