<?php

/**
 *
 * Get Registered Sidebars
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if ( ! function_exists( 'startup_pro_wp_registered_sidebars' ) ) {
	function startup_pro_wp_registered_sidebars() {
		global $wp_registered_sidebars;
		$widgets = array();
		if ( ! empty( $wp_registered_sidebars ) ) {
			foreach ( $wp_registered_sidebars as $key => $value ) {
				$widgets[ $key ] = $value['name'];
			}
		}
		return array_reverse( $widgets );
	}

	add_action( 'admin_init', 'startup_pro_wp_registered_sidebars' );
}

/**
 *
 * Get Image Sizes
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if ( ! function_exists( 'startup_pro_get_image_sizes' ) ) {
	function startup_pro_get_image_sizes( $force = false, $flip = true ) {
		$current_image_sizes = get_intermediate_image_sizes();
		foreach ( $current_image_sizes as $image_size ) {
			$dimenssion = ( in_array( $image_size, array(
				'thumbnail',
				'medium',
				'large'
			) ) ) ? ' - (' . get_option( $image_size . '_size_w' ) . 'x' . get_option( $image_size . '_size_h' ) . ')' : '';

			$image_sizes[ $image_size ] = $image_size . $dimenssion;
		}

		if ( $force ) {
			$get_custom_image_sizes = startup_pro_get_images_custom_sizes();

			if ( ! empty( $get_custom_image_sizes ) ) {
				foreach ( $get_custom_image_sizes as $custom_size ) {
					$name = sanitize_title( $custom_size['name'] );

					$custom_image_sizes[ $name ] = $name . ' - (' . $custom_size['size']['width'] . 'x' . $custom_size['size']['height'] . ')';
				}

				$image_sizes = array_filter( array_merge( $image_sizes, $custom_image_sizes ) );
			}
		}

		$image_sizes['full'] = 'full (orginal size)';

		$image_sizes = ( $flip ) ? array_flip( $image_sizes ) : $image_sizes;

		return apply_filters( 'startup_pro_custom_image_sizes', $image_sizes );
	}
}

/**
 *
 * CSS for redux bg field
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if ( ! function_exists( 'startup_pro_get_images_custom_sizes' ) ) {
	function startup_pro_get_images_custom_sizes() {
		return array(
			array(
				'crop' => true,
				'name' => 'Startup PRO Blog Large',
				'size' => array(
					'width'  => 1140,
					'height' => 400
				)
			),
			array(
				'crop' => true,
				'name' => 'Startup PRO Blog Small',
				'size' => array(
					'width'  => 262,
					'height' => 230
				)
			),
			array(



				'crop' => true,



				'name' => 'Startup PRO Tiny',



				'size' => array(



					'width'  => 60,



					'height' => 60



				)



			)



		);



	}



}



/**



 *



 * Get revsliders



 * @since 1.0.0



 * @version 1.0.0



 *



 */



if ( ! function_exists( 'startup_pro_get_revsliders' ) ) {



	function startup_pro_get_revsliders() {



		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );



		$revsliders = array();



		if (  function_exists( 'rev_slider_shortcode' ) ) {



			global $wpdb;



			$get_sliders = $wpdb->get_results( 'SELECT * FROM ' . $wpdb->prefix . 'revslider_sliders' );



			if ( $get_sliders ) {



				$revsliders['no-slider'] = 'No slider';



				foreach ( $get_sliders as $slider ) {



					$revsliders[ $slider->alias ] = $slider->title;



				}



			}



		} else {



			$revsliders[0] = 'Revolution slider is not active';



		}







		return $revsliders;



	}



}







if ( ! function_exists( 'startup_pro_get_animations' ) ) {



	function startup_pro_get_animations() {



		$animations = array(



			'',



			// fading_entrances



			'fadeIn',



			'fadeInLeft',



			'fadeInRight',



			'fadeInUp',



			'fadeInDown',



			// attention_seekers



			'bounce',



			'flash',



			'pulse',



			'shake',



			'swing',



			'tada',



			'wobble',



			// bouncing_entrances



			'bounceIn',



			'bounceInLeft',



			'bounceInRight',



			'bounceInUp',



			'bounceInDown',



		);



		$animations = apply_filters( 'startup_pro_animations', $animations );







		return $animations;



	}



}



if ( ! function_exists( 'startup_pro_add_inline_style' ) ) {
	global $startup_pro_inline_styles;
	$startup_pro_inline_styles = array();
	function startup_pro_add_inline_style( $style ) {
		global $startup_pro_inline_styles;
		array_push( $startup_pro_inline_styles, $style );
	}
}




function addPanelCSS() {
    wp_register_style(
        'redux-custom-css',
        smart_core_plugin_url() . '/assets/css/redux-custom.css',
        array( 'redux-admin-css' ), // Be sure to include redux-admin-css so it's appended after the core css is applied
        time(),
        'all'
    );
    wp_enqueue_style('redux-custom-css');
}
// This example assumes your opt_name is set to redux_demo, replace with your opt_name value
add_action( 'redux/page/smart_options/enqueue', 'addPanelCSS' );
