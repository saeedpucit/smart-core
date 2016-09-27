<?php
/**
 *
 * Visual Composer Plugin before init
 *
 */
if( ! function_exists( 'startup_pro_vc_before_init' ) ) {
  function startup_pro_vc_before_init() {
    vc_set_as_theme(true);
    vc_set_default_editor_post_types( array( 'page', 'post', 'portfolio' ) );
    include_once( 'map.php' );
  }
  add_action( 'vc_before_init', 'startup_pro_vc_before_init' );
}
/**
 *
 * Visual Composer Plugin after init
 *
 */
if( ! function_exists( 'startup_pro_vc_after_init' ) ) {
  function startup_pro_vc_after_init() {
    if( ! vc_license()->isActivated() ) {
      remove_action( 'upgrader_pre_download', array( vc_updater(), 'preUpgradeFilter' ) );
    }
  }
  add_action( 'vc_after_init', 'startup_pro_vc_after_init' );
}