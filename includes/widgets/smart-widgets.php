<?php
/**
 *
 * Netbee Widgets Config
 * @since 1.0.0
 * @version 1.0.0
 *
 */
$dir = plugin_dir_path( __FILE__ );
include_once( $dir . 'inc/smart-blog-posts-widget.php' );
include_once( $dir . 'inc/smart-custom-post-type-categories.php' );
include_once( $dir . 'inc/smart-custom-post-type-recent-posts.php' );
include_once( $dir . 'inc/smart-download-buttons-widget.php' );
include_once( $dir . 'inc/smart-flickr-widget.php' );
include_once( $dir . 'inc/smart-story-posts-widget.php' );
include_once( $dir . 'inc/smart-tab-widget.php' );
function smart_custom_widgets_init() {
	register_widget( 'smart_Blog_Posts_Widget' );
	register_widget( 'smart_Custom_Post_Type_Widgets_Categories' );
	register_widget( 'smart_Custom_Post_Type_Widgets_Recent_Posts' );
	register_widget( 'smart_Download_Buttons_Widget' );
	register_widget( 'smart_Flickr_Widget' );
	register_widget( 'smart_Story_Posts_Widget' );
	register_widget( 'smart_Tab_Widget' );
}
add_action( 'widgets_init', 'smart_custom_widgets_init', 2 );