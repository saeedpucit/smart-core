<?php
/*
 * @package     WBC_Importer - Extension for Importing demo content
 * @author      Webcreations907
 * @version     1.0
 */


/************************************************************************
* Importer will auto load, there is no settings required to put in your
* Reduxframework config file.
*
* BUT- If you want to put the demo importer in a different position on 
* the panel, use the below within your config for Redux.
*************************************************************************/


/************************************************************************
* Example functions/filters
*************************************************************************/
if ( !function_exists( 'wbc_after_content_import' ) ) {

	/**
	 * Function/action ran after import of content.xml file
	 *
	 * @param (array) $demo_active_import       Example below
	 * [wbc-import-1] => Array
	 *      (
	 *            [directory] => current demo data folder name
	 *            [content_file] => content.xml
	 *            [image] => screen-image.png
	 *            [theme_options] => theme-options.txt
	 *            [widgets] => widgets.json
	 *            [imported] => imported
	 *        )
	 * @param (string) $demo_data_directory_path path to current demo folder being imported.
	 *
	 */

	function wbc_after_content_import( $demo_active_import , $demo_data_directory_path ) {
		//Do something
	}

	
	
}

if ( !function_exists( 'wbc_filter_title' ) ) {

	/**
	 * Filter for changing demo title in options panel so it's not folder name.
	 *
	 * @param [string] $title name of demo data folder
	 *
	 * @return [string] return title for demo name.
	 */

	function wbc_filter_title( $title ) {
		return trim( ucfirst( str_replace( "-", " ", $title ) ) );
	}

	
}

if ( !function_exists( 'wbc_importer_description_text' ) ) {

	/**
	 * Filter for changing importer description info in options panel
	 * when not setting in Redux config file.
	 *
	 * @param [string] $title description above demos
	 *
	 * @return [string] return.
	 */

	function wbc_importer_description_text( $description ) {

		$message = '<p>'. esc_html__( 'Best if used on new WordPress install.', 'startup-pro' ) .'</p>';
		$message .= '<p>'. esc_html__( 'Images are for demo purpose only.', 'startup-pro' ) .'</p>';

		return $message;
	}

	
}

if ( !function_exists( 'wbc_importer_label_text' ) ) {

	/**
	 * Filter for changing importer label/tab for redux section in options panel
	 * when not setting in Redux config file.
	 *
	 * @param [string] $title label above demos
	 *
	 * @return [string] return no html
	 */

	function wbc_importer_label_text( $label_text ) {

		$label_text = 'WBC Importer';

		return $label_text;
	}

	
	
	
}

if ( !function_exists( 'wbc_change_demo_directory_path' ) ) {

	/**
	 * Change the path to the directory that contains demo data folders.
	 *
	 * @param [string] $demo_directory_path
	 *
	 * @return [string]
	 */

	function wbc_change_demo_directory_path( $demo_directory_path ) {

		

		return $demo_directory_path;

	}

	
}

if ( !function_exists( 'wbc_importer_before_widget' ) ) {

	/**
	 * Function/action ran before widgets get imported
	 *
	 * @param (array) $demo_active_import       Example below
	 * [wbc-import-1] => Array
	 *      (
	 *            [directory] => current demo data folder name
	 *            [content_file] => content.xml
	 *            [image] => screen-image.png
	 *            [theme_options] => theme-options.txt
	 *            [widgets] => widgets.json
	 *            [imported] => imported
	 *        )
	 * @param (string) $demo_data_directory_path path to current demo folder being imported.
	 *
	 * @return nothing
	 */

	function wbc_importer_before_widget( $demo_active_import , $demo_data_directory_path ) {

		//Do Something

	}

	
}

if ( !function_exists( 'wbc_after_theme_options' ) ) {

	/**
	 * Function/action ran after theme options set
	 *
	 * @param (array) $demo_active_import       Example below
	 * [wbc-import-1] => Array
	 *      (
	 *            [directory] => current demo data folder name
	 *            [content_file] => content.xml
	 *            [image] => screen-image.png
	 *            [theme_options] => theme-options.txt
	 *            [widgets] => widgets.json
	 *            [imported] => imported
	 *        )
	 * @param (string) $demo_data_directory_path path to current demo folder being imported.
	 *
	 * @return nothing
	 */

	function wbc_after_theme_options( $demo_active_import , $demo_data_directory_path ) {

		//Do Something

	}

	
}


/************************************************************************
* Extended Example:
* Way to set menu, import revolution slider, and set home page.
*************************************************************************/

if ( !function_exists( 'wbc_extended_example' ) ) {
	function wbc_extended_example( $demo_active_import , $demo_directory_path ) {

		reset( $demo_active_import );
		$current_key = key( $demo_active_import );

		/************************************************************************
		 * Import slider(s) for the current demo being imported
		 *************************************************************************/

		if ( class_exists( 'RevSlider' ) ) {

			$wbc_sliders_array = array(
					'demo' => array(
							'home.zip'
					)
			);

			if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_sliders_array ) ) {
				$sliders = $wbc_sliders_array[$demo_active_import[$current_key]['directory']];

				foreach($sliders as $slider_zip){
					if ( file_exists( $demo_directory_path.$slider_zip ) ) {
						$slider = new RevSlider();
						$slider->importSliderFromPost( true, true, $demo_directory_path.$slider_zip );
					}
				}

			}
		}

		/************************************************************************
		 * Setting Menus
		 *************************************************************************/

		$wbc_menu_array = array('demo');

		if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && in_array( $demo_active_import[$current_key]['directory'], $wbc_menu_array ) ) {
			$top_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
			if ( isset( $top_menu->term_id ) ) {
				set_theme_mod( 'nav_menu_locations', array(
								'primary' => $top_menu->term_id
						)
				);
			}

		}


		//
		// setting custom menu fields
		// -----------------------------------------------------------------------
		$menu_items = wp_get_nav_menu_items( 'main-menu' );
		if ( ! empty( $menu_items ) ) {
			$menu_fields = array(
				
			);
			if ( ! empty( $menu_fields ) ) {
				foreach ( $menu_items as $menu_key => $menu_item ) {
					foreach ( $menu_fields as $field_key => $field_data ) {
						if ( $field_key == $menu_item->title ) {
							foreach ( $field_data as $key => $value ) {
								update_post_meta( $menu_item->ID, '_menu_item_' . $key, $value );
							}
						}
					}
				}
			}
		}
		/************************************************************************
		 * Set HomePage
		 *************************************************************************/

		// array of demos/homepages to check/select from
		$wbc_home_pages = array(
				'demo' => 'Home',
		);

		if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_home_pages ) ) {
			$page = get_page_by_title( $wbc_home_pages[$demo_active_import[$current_key]['directory']] );
			if ( isset( $page->ID ) ) {
				update_option( 'page_on_front', $page->ID );
				update_option( 'show_on_front', 'page' );
			}
		}

	}

	add_action( 'wbc_importer_after_content_import', 'wbc_extended_example', 10, 2 );
}

?>
