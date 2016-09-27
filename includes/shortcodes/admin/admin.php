<?php
add_action( 'wp_enqueue_scripts', 'startup_pro_admin_enqueue_scripts' );
function startup_pro_admin_enqueue_scripts() {
	wp_enqueue_style( 'shortcodes', startup_pro_shortcodes_plugin_url('/admin/css/shortcodes.css'), array(), SMART_SHORTCODES_VERSION, 'all' );
	wp_enqueue_style( 'royalslider', startup_pro_shortcodes_plugin_url('/admin/css/royalslider.css'), array(), SMART_SHORTCODES_VERSION, 'all' );
	wp_enqueue_style( 'fancybox', startup_pro_shortcodes_plugin_url('/admin/css/fancybox.css'), array(), SMART_SHORTCODES_VERSION, 'all' );
	wp_enqueue_style( 'slick', startup_pro_shortcodes_plugin_url('/admin/css/slick.css'), array(), SMART_SHORTCODES_VERSION, 'all' );
	wp_enqueue_script( 'royalslider', startup_pro_shortcodes_plugin_url('/admin/js/jquery.royalslider.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'slick', startup_pro_shortcodes_plugin_url('/admin/js/slick.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'waypoints', startup_pro_shortcodes_plugin_url('/admin/js/waypoints.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'waypoints', startup_pro_shortcodes_plugin_url('/admin/js/fancybox.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'isotope', startup_pro_shortcodes_plugin_url('/admin/js/isotope.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'tooltip', startup_pro_shortcodes_plugin_url('/admin/js/tooltip.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'scrollto', startup_pro_shortcodes_plugin_url('/admin/js/jquery.scrollTo.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'localScroll', startup_pro_shortcodes_plugin_url('/admin/js/jquery.localScroll.min.js'), array( 'jquery', 'scrollto' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'imagesloaded', startup_pro_shortcodes_plugin_url('/admin/js/images-loaded.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'exists', startup_pro_shortcodes_plugin_url('/admin/js/exists.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'hoverIntent', startup_pro_shortcodes_plugin_url('/admin/js/hoverIntent.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'superfish', startup_pro_shortcodes_plugin_url('/admin/js/custom.superfish.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'stellar', startup_pro_shortcodes_plugin_url('/admin/js/jquery.stellar.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'transit', startup_pro_shortcodes_plugin_url('/admin/js/jquery.transit.min.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'customSelect', startup_pro_shortcodes_plugin_url('/admin/js/customSelect.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'throttledresize', startup_pro_shortcodes_plugin_url('/admin/js/jquery.throttledresize.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'debouncedresize', startup_pro_shortcodes_plugin_url('/admin/js/jquery.debouncedresize.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
	wp_enqueue_script( 'match-height', startup_pro_shortcodes_plugin_url('/admin/js/jquery-match-height.js'), array( 'jquery' ), SMART_SHORTCODES_VERSION, true );
}
