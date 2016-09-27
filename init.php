<?php
/**

 * Plugin Name: Smart Core

 * Plugin URI:

 * Description: Smart Core is WordPress plugin that provides main functions for theme.

 * Version: 1.0.0

 * Author: SmartCode

 * Author URI: https://smart.co/

 * License: GPL2

 * Text Domain: smart

 * Domain Path: /languages/

 */

define( 'SMART_CORE_VERSION', '1.0.0' );
define( 'SMART_CORE_PLUGIN', __FILE__ );
define( 'SMART_CORE_PLUGIN_BASENAME', 'smart-core/init.php'  );
define( 'SMART_CORE_PLUGIN_NAME','smart-core' );
define( 'SMART_CORE_PLUGIN_DIR', untrailingslashit( dirname( SMART_CORE_PLUGIN ) ) );
define( 'SMART_CORE_PLUGIN_CUSTOM_POSTS_DIR', SMART_CORE_PLUGIN_DIR . '/includes/custom-post-types' );

function smart_core_plugin_path( $path = '' ) {
	return path_join( SMART_CORE_PLUGIN_DIR, trim( $path, '/' ) );
}

function smart_core_plugin_url( $path = '' ) {
	if($path == '')
	$url = plugins_url().'/smart-core';
else
	$url = plugins_url().'/smart-core'.$path;


	if ( is_ssl() && 'http:' == substr( $url, 0, 5 ) ) {
		$url = 'https:' . substr( $url, 5 );
	}
	return $url;
}

// Load meta box
require_once SMART_CORE_PLUGIN_DIR . '/assets/meta-box/meta-box.php';

require_once SMART_CORE_PLUGIN_DIR . '/includes/shortcodes/index.php';

include_once SMART_CORE_PLUGIN_DIR . '/includes/widgets/smart-widgets.php';

require_once SMART_CORE_PLUGIN_DIR . '/config/smart-redux-helpers.php';
require_once SMART_CORE_PLUGIN_DIR . '/config/smart-enqueue.php';
// Load the embedded Redux Framework
require_once SMART_CORE_PLUGIN_DIR . '/admin/redux-framework/framework.php';

// Load the theme/plugin options
require_once SMART_CORE_PLUGIN_DIR . '/admin/options-init.php';

// Load Redux extensions
require_once SMART_CORE_PLUGIN_DIR . '/admin/redux-extensions/extensions-init.php';

// Load Client Custom Posts
require_once SMART_CORE_PLUGIN_CUSTOM_POSTS_DIR . '/client-posts/client-posts.php';

// Load Portfolio Custom Posts
require_once SMART_CORE_PLUGIN_CUSTOM_POSTS_DIR . '/portfolio-posts/portfolio-posts.php';

// Load Staff Custom Posts
require_once SMART_CORE_PLUGIN_CUSTOM_POSTS_DIR . '/staff-posts/staff-posts.php';

// Load Testimonial Custom Posts
require_once SMART_CORE_PLUGIN_CUSTOM_POSTS_DIR . '/testimonial-posts/testimonial-posts.php';

// Load Portfolio Custom Posts
require_once SMART_CORE_PLUGIN_CUSTOM_POSTS_DIR . '/story-posts/story-posts.php';

// Load Event Custom Posts
require_once SMART_CORE_PLUGIN_CUSTOM_POSTS_DIR . '/event-posts/event-posts.php';
