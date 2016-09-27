<?php

/**
 * Enqueue styles
 * @since 1.0.0
 * @version 1.0.0
 */

function smart_admin_scripts() {
	wp_enqueue_style( 'smart-framework', smart_core_plugin_url() . '/assets/css/smart-framework.css', array(), '1.0.0', 'all' );
}

add_action( 'admin_enqueue_scripts', 'smart_admin_scripts');