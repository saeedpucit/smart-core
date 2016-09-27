<?php
/**
 *
 * Blog Posts
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class smart_Story_Posts_Widget extends WP_Widget {
	function __construct() {
		$widget_ops = array(
			'classname'   => 'smart_widget_custom_posts',
			'description' => 'Recent, Popular, Related Stories'
		);
		parent::__construct( 'story_posts_smart_widget', 'Netbee Stories Posts', $widget_ops );
	}
	function widget( $args, $instance ) {
		global $wp_query, $paged, $post;
		extract( $args );
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		echo wp_kses_post( $before_widget );
		if ( ! empty( $title ) ) {
			echo wp_kses_post( $before_title . $title . $after_title );
		}
		echo '<div class="smart_blog_posts_widget">';
		// Query
		$args = array(
			'posts_per_page' => $instance['limit'],
			'post_type'      => 'story',
		);
		if ( $instance['cats'] ) {
			$args['cat'] = $instance['cats'];
		}
		switch ( $instance['type'] ) {
			case 'commented':
				$args['orderby'] = 'comment_count';
				break;
			case 'random':
				$args['orderby'] = 'rand';
				break;
			case 'related':
				$tags = wp_get_post_tags( $post->ID );
				$ids = array();
				if ( ! empty( $tags ) ) {
					foreach ( $tags as $term ) {
						$ids[] = $term->term_id;
					}
				} else {
					$operation = false;
				}
				$args['tag__in'] = $ids;
				$args['post__not_in'] = array( $post->ID );
				$args['orderby'] = 'rand';
				break;
			default:
				$args['orderby'] = 'date';
				break;
		}
		$tmp_query = $wp_query;
		$wp_query = new WP_Query( $args );
		if ( have_posts() ) :
			$with_image = ( ! empty( $instance['display_image'] ) ) ? ' class="with-image"' : '';
			echo '<ul' . $with_image . '>';
			while( have_posts() ) : the_post();
				$format = ( get_post_format() ) ? get_post_format() : 'standard';
				$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'tiny' );
				$image = ( ! empty( $image ) ) ? '<img src="' . esc_url($image[0]) . '" alt="' . get_the_title() . '" />' : '';
				$image = ( $instance['display_image'] ) ? $image : '';
				$categories = get_the_category();
				$post_cats = array();
				if ( ! empty( $categories ) ) {
					foreach ( $categories as $category ) {
						$post_cats[] = $category->name;
					}
				}
				$post_cats = implode( ' &bull; ', $post_cats );
				$li_class = '';
				if ( empty( $image ) ) {
					$li_class = 'class="no-image"';
				}
				echo '<li ' . $li_class . '>';
				echo '<a href="' . esc_url(get_permalink()) . '" title="' . get_the_title() . '">' . $image . get_the_title() . '</a>';
				echo ( $instance['display_date'] ) ? '<span class="post-date"><i class="fa fa-clock-o"></i> ' . get_the_date() . '</span>' : '';
				echo ( $instance['display_category'] ) ? '<span class="post-category"><i class="fa fa-folder-o"></i> ' . $post_cats . '</span>' : '';
				echo '</li>';
			endwhile;
			echo '</ul>';
		endif;
		
		wp_reset_postdata();
		$wp_query = $tmp_query;
		echo '</div><div class="clear"></div>';
		echo wp_kses_post( $after_widget );
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['type'] = $new_instance['type'];
		$instance['cats'] = $new_instance['cats'];
		$instance['limit'] = $new_instance['limit'];
		$instance['display_image'] = $new_instance['display_image'];
		$instance['display_date'] = $new_instance['display_date'];
		$instance['display_category'] = $new_instance['display_category'];
		return $instance;
	}
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array(
			'title'            => '',
			'type'             => 'random',
			'cats'             => 0,
			'limit'            => 5,
			'display_image'    => 1,
			'display_date'     => 1,
			'display_category' => 0,
		) );
		$title = $instance['title'];
		$type = $instance['type'];
		$cats = $instance['cats'];
		$limit = $instance['limit'];
		$display_image = $instance['display_image'];
		$display_date = $instance['display_date'];
		$display_category = $instance['display_category'];
		// WIDGET TITLE
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'title' ),
			'name'  => $this->get_field_name( 'title' ),
			'type'  => 'text',
			'title' => 'Widget Title',
			'class' => 'widefat'
		), $title );
		startup_pro_get_field( array(
			'id'      => $this->get_field_name( 'type' ),
			'name'    => $this->get_field_name( 'type' ),
			'type'    => 'select',
			'title'   => 'Type',
			'options' => array(
				'recent'    => 'Recent Posts',
				'related'   => 'Related Posts',
				'random'    => 'Random Posts',
				'commented' => 'Most Commented Posts',
				'loved'     => 'Most Loved Posts'
			),
			'class' => 'widefat'
		), $type );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'limit' ),
			'name'  => $this->get_field_name( 'limit' ),
			'type'  => 'text',
			'title' => 'Number of posts to show:',
			'class' => 'widefat'
		), $limit );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'display_image' ),
			'name'  => $this->get_field_name( 'display_image' ),
			'type'  => 'checkbox',
			'label' => 'Display post image ?',
			'class' => 'widefat'
		), $display_image );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'display_date' ),
			'name'  => $this->get_field_name( 'display_date' ),
			'type'  => 'checkbox',
			'label' => 'Display post date ?',
			'class' => 'widefat'
		), $display_date );
		startup_pro_get_field( array(
			'id'    => $this->get_field_name( 'display_category' ),
			'name'  => $this->get_field_name( 'display_category' ),
			'type'  => 'checkbox',
			'label' => 'Display post category ?',
			'class' => 'widefat'
		), $display_category );
	}
}