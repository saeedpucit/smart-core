<?php
/**
 *
 * Download Button Widget
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class smart_Download_Buttons_Widget extends WP_Widget {
	function __construct() {
		$widget_ops = array( 'classname' => 'smart_widget_download_btns', 'description' => 'Download buttons' );
		parent::__construct( 'download_btns_smart_widget', 'Netbee Download Buttons', $widget_ops );
	}
	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$uniqid = uniqid();
		$custom_style = '';
		$custom_style .= '.brochure-box-' . $uniqid . '{';
		$custom_style .= ( $instance['btn_color'] ) ? 'background-color:' . $instance['btn_color'] . ';' : '';
		$custom_style .= '}';
		
		$custom_style .= '.brochure-box-' . $uniqid . ':hover{';
		$custom_style .= ( $instance['btn_color_hover'] ) ? 'background-color:' . $instance['btn_color_hover'] . ';' : '';
		$custom_style .= '}';
		$custom_style .= '.brochure-box__text' . $uniqid . '{';
		$custom_style .= 'color:' . $instance['icon_bg_color'] . ';';
		$custom_style .= '}';
		$custom_style .= '.brochure-box-' . $uniqid . ':hover .brochure-box__text' . $uniqid . '{';
		$custom_style .= 'color:' . $instance['icon_bg_color_hover'] . '!important;';
		$custom_style .= '}';
		$custom_style .= '.brochure-box-' . $uniqid . ' i{';
		$custom_style .= ( $instance['icon_color'] ) ? 'color:' . $instance['icon_color'] . ';' : '';
		$custom_style .= '}';
		$custom_style .= '.brochure-box-' . $uniqid . ':hover i{';
		$custom_style .= 'color:' . $instance['icon_color_hover'] . '!important;';
		$custom_style .= '}';
		
		startup_pro_add_inline_style( $custom_style );
		echo wp_kses_post( $before_widget );
		if ( ! empty( $title ) ) {
			echo wp_kses_post( $before_title . $title . $after_title );
		}
		echo '<div class="startup_pro_download_btns_widget">';
		echo '<div class="brochure-box-cont">';
		echo '<a class="brochure-box brochure-box-' . $uniqid . '" href="' . $instance['link'] . '" target="_blank">';
		if ( $instance['icon_class'] ) {
			echo '<i class="fa  ' . $instance['icon_class'] . '"></i>';
		};
		if ( $instance['btn_text'] ) {
			echo '<h5 class="brochure-box__text brochure-box__text' . $uniqid . '">' . $instance['btn_text'] . '</h5>';
		}
		echo '</a>';
		echo '</div>';
		echo '</div><div class="clear"></div>';
		echo wp_kses_post( $after_widget );
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['link'] = $new_instance['link'];
		$instance['btn_text'] = $new_instance['btn_text'];
		$instance['icon_class'] = $new_instance['icon_class'];
		$instance['icon_color'] = $new_instance['icon_color'];
		$instance['icon_color_hover'] = $new_instance['icon_color_hover'];
		$instance['icon_bg_color']       = $new_instance['icon_bg_color'];
		$instance['icon_bg_color_hover'] = $new_instance['icon_bg_color_hover'];
		$instance['btn_color'] = $new_instance['btn_color'];
		$instance['btn_color_hover'] = $new_instance['btn_color_hover'];
		return $instance;
	}
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array(
				'title'               => '',
				'link'                => '',
				'btn_text'            => 'Download',
				'icon_class'          => 'fa-cloud-download',
				'icon_color'          => '#ffffff',
				'icon_color_hover'    => '#ffffff',
				'icon_bg_color'       => '#ffffff',
				'icon_bg_color_hover' => '#ffffff',
				'btn_color'           => '#ffffff',
				'btn_color_hover'     => '#ffffff',
			)
		);
		$title = $instance['title'];
		$link = $instance['link'];
		$btn_text = $instance['btn_text'];
		$icon_class = $instance['icon_class'];
		$icon_color       = $instance['icon_color'];
		$icon_color_hover = $instance['icon_color_hover'];
		$icon_bg_color = $instance['icon_bg_color'];
		$icon_bg_color_hover = $instance['icon_bg_color_hover'];
		$btn_color = $instance['btn_color'];
		$btn_color_hover = $instance['btn_color_hover'];
		echo
		"<script>
			( function( $ ){
				function initColorPicker( widget ) {
					widget.find( '.widget-color-picker > input' ).wpColorPicker( {
						change: _.throttle( function() { // For Customizer
							$(this).trigger( 'change' );
						}, 3000 )
					});
				}
				function onFormUpdate( event, widget ) {
					initColorPicker( widget );
				}
				$( document ).on( 'widget-added widget-updated', onFormUpdate );
				$( document ).ready( function() {
					$( '#widgets-right .widget:has(.color-picker)' ).each( function () {
						initColorPicker( $( this ) );
					} );
				} );
			}( jQuery ) );
		</script>";
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'title' ),
			'name'  => $this->get_field_name( 'title' ),
			'type'  => 'text',
			'title' => 'Widget Title'
		), $title );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'link' ),
			'name'  => $this->get_field_name( 'link' ),
			'type'  => 'text',
			'title' => 'Download link'
		), $link );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'btn_text' ),
			'name'  => $this->get_field_name( 'btn_text' ),
			'type'  => 'text',
			'title' => 'Button text'
		), $btn_text );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'icon_class' ),
			'name'  => $this->get_field_name( 'icon_class' ),
			'type'  => 'text',
			'title' => 'Font awesome icon class'
		), $icon_class );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'icon_color' ),
			'name'  => $this->get_field_name( 'icon_color' ),
			'type'  => 'text',
			'title' => 'Icon color',
			'class' => 'widget-color-picker'
		), $icon_color );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'icon_color_hover' ),
			'name'  => $this->get_field_name( 'icon_color_hover' ),
			'type'  => 'text',
			'title' => 'Icon color hover',
			'class' => 'widget-color-picker'
		), $icon_color_hover );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'icon_bg_color' ),
			'name'  => $this->get_field_name( 'icon_bg_color' ),
			'type'  => 'text',
			'title' => 'Text color',
			'class' => 'widget-color-picker'
		), $icon_bg_color );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'icon_bg_color_hover' ),
			'name'  => $this->get_field_name( 'icon_bg_color_hover' ),
			'type'  => 'text',
			'title' => 'Text color hover',
			'class' => 'widget-color-picker'
		), $icon_bg_color_hover );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'btn_color' ),
			'name'  => $this->get_field_name( 'btn_color' ),
			'type'  => 'text',
			'title' => 'Button color',
			'class' => 'widget-color-picker'
		), $btn_color );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'btn_color_hover' ),
			'name'  => $this->get_field_name( 'btn_color_hover' ),
			'type'  => 'text',
			'title' => 'Button hover color',
			'class' => 'widget-color-picker'
		), $btn_color_hover );
	}
}