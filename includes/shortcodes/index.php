<?php
define( 'SMART_SHORTCODES_VERSION', '1.0.1' );
define( 'SMART_SHORTCODES_PLUGIN_DIR',untrailingslashit( dirname( SMART_CORE_PLUGIN ) ).'/includes/shortcodes' );

define( 'SMART_SHORTCODES_PLUGIN_URL',  plugins_url().'/smart-core/includes/shortcodes' );

require_once SMART_SHORTCODES_PLUGIN_DIR . '/admin/admin.php';
require_once SMART_SHORTCODES_PLUGIN_DIR . '/admin/functions.php';
require_once SMART_SHORTCODES_PLUGIN_DIR . '/includes/init.php';
?>
