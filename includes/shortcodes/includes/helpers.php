<?php
/**
 * PRO Functions
 * WPBakery Visual Composer Custom Params
 * @package VPBakeryVisualComposer
 *
 */
if ( ! function_exists( 'startup_pro_vc_enqueue_scripts' ) ) {
	function startup_pro_vc_enqueue_scripts() {
		wp_enqueue_style( 'vc-style', smart_core_plugin_url().'/includes/shortcodes/includes/assets/vc-style.css', array(), '1.0.0', 'all');
		wp_enqueue_script( 'vc-script', smart_core_plugin_url().'/includes/shortcodes/includes/assets/vc-script.js', array('jquery'), '1.0.0', true);
	}	
	add_action( 'admin_print_scripts-post.php', 'startup_pro_vc_enqueue_scripts', 99 );
	add_action( 'admin_print_scripts-post-new.php', 'startup_pro_vc_enqueue_scripts', 99 );
}
if ( ! function_exists( 'startup_pro_vc_js_plugins' ) ) {
	
	wp_enqueue_script( 'pro-framework', startup_pro_shortcodes_plugin_url('/admin/js/pro-framework.js'), array( 'jquery' ), '1.0.0', true );
  	function startup_pro_vc_js_plugins() {
    	echo '<script type="text/javascript">(function($){ $(document).ready( function(){ $.reloadJSPlugins(); }); })(jQuery);</script>';
  	}
  	add_action( 'vc_load_default_params', 'startup_pro_vc_js_plugins' );
}
if ( ! function_exists( 'startup_pro_element_values' ) ) {
	function startup_pro_element_values( $type = '', $query_args = array() ) {
		$options = array();
		switch ( $type ) {
			case 'pages':
			case 'page':
				$pages = get_pages( $query_args );
				if ( ! empty( $pages ) ) {
					foreach ( $pages as $page ) {
						$options[ $page->post_title ] = $page->ID;
					}
				}
				break;
			case 'posts':
			case 'post':
				$posts = get_posts( $query_args );
				if ( ! empty( $posts ) ) {
					foreach ( $posts as $post ) {
						$options[ $post->post_title ] = $post->ID;
					}
				}
				break;
			case 'tags':
			case 'tag':
				$tags = get_terms( $query_args['taxonomies'], $query_args['args'] );
				if ( ! empty( $tags ) ) {
					foreach ( $tags as $tag ) {
						$options[ $tag->name ] = $tag->term_id;
					}
				}
				break;
			case 'categories':
			case 'category':
				$categories = get_categories( $query_args );
				if ( ! empty( $categories ) && empty($categories['errors'])) {
					foreach ( $categories as $category ) {
						$options[ $category->name ] = $category->term_id;
					}
				}
				break;
			case 'custom':
			case 'callback':
				if ( is_callable( $query_args['function'] ) ) {
					$options = call_user_func( $query_args['function'], $query_args['args'] );
				}
				break;
		}
		return $options;
	}
}