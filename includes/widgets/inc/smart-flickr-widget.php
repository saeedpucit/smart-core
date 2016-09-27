<?php
/**
 *
 * Flickr Widget
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class smart_Flickr_Widget extends WP_Widget {
	function __construct() {
		$widget_ops = array( 'classname' => 'smart_widget_flickr', 'description' => 'Flickr Photo Stream Widget' );
		parent::__construct( 'flickr_smart_widget', 'Netbee  Flickr Photo Stream', $widget_ops );
	}
	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		echo wp_kses_post( $before_widget );
		if ( ! empty( $title ) ) {
			echo wp_kses_post( $before_title . $title . $after_title );
		}
		echo '<div class="smart_flickr_widget">';
		$source = ( $instance['type'] == 'set' ) ? 'source=user_set&set=' : 'source=user&user=';
		echo '<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=' . $instance['count'] . '&display=' . $instance['ordering'] . '&size=' . $instance['size'] . '&' . $source . $instance['flickr_id'] . '"></script>';
		echo '</div><div class="clear"></div>';
		echo wp_kses_post( $after_widget );
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['type'] = $new_instance['type'];
		$instance['flickr_id'] = $new_instance['flickr_id'];
		$instance['count'] = $new_instance['count'];
		$instance['ordering'] = $new_instance['ordering'];
		$instance['size'] = $new_instance['size'];
		return $instance;
	}
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array(
			'title'     => '',
			'type'      => 'user',
			'flickr_id' => '52617155@N08',
			'count'     => '9',
			'ordering'  => 'random',
			'size'      => 's',
			)
		);
		$title = $instance['title'];
		$type = $instance['type'];
		$flickr_id = $instance['flickr_id'];
		$count = $instance['count'];
		$ordering = $instance['ordering'];
		$size = $instance['size'];
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'title' ),
			'name'  => $this->get_field_name( 'title' ),
			'type'  => 'text',
			'title' => 'Widget Title'
		), $title );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'flickr_id' ),
			'name'  => $this->get_field_name( 'flickr_id' ),
			'type'  => 'text',
			'title' => 'Flickr User ID',
			'info'  => 'Find your Flickr ID <a href="'.esc_url( __('http://idgettr.com/', 'startup-pro')).'" target="_blank">idGettr</a>'
		), $flickr_id );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'count' ),
			'name'  => $this->get_field_name( 'count' ),
			'type'  => 'text',
			'title' => 'Count'
		), $count );
		startup_pro_get_field( array(
			'id'      => $this->get_field_name( 'ordering' ),
			'name'    => $this->get_field_name( 'ordering' ),
			'type'    => 'select',
			'title'   => 'Ordering your images',
			'options' => array( 'latest' => 'Latest', 'random' => 'Random' )
		), $ordering );
		startup_pro_get_field( array(
			'id'      => $this->get_field_name( 'size' ),
			'name'    => $this->get_field_name( 'size' ),
			'type'    => 'select',
			'title'   => 'Size of your images',
			'options' => array(
				's' => 'Small square box',
				't' => 'Thumbnail size',
				'm' => 'Medium size'
			)
		), $size );
	}
}