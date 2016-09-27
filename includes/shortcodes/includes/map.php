<?php
/**
  * WPBakery Visual Composer Shortcodes settings
  *
  * @package VPBakeryVisualComposer
  *
 */
// Include Helpers
include_once( 'helpers.php' );
include_once( 'params.php' );
include_once( 'extends.php' );
include_once( 'templates.php' );
if ( ! function_exists( 'is_plugin_active' ) ) {
  include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); // Require plugin.php to use is_plugin_active() below
}
// Column width
// ------------------------------------------------------------------------------------------

$column_width_list = array(
	esc_html__( '1 column - 1/12', 'startup-pro' )    => '1/12',
	esc_html__( '2 columns - 1/6', 'startup-pro' )    => '1/6',
	esc_html__( '3 columns - 1/4', 'startup-pro' )    => '1/4',
	esc_html__( '4 columns - 1/3', 'startup-pro' )    => '1/3',
	esc_html__( '5 columns - 5/12', 'startup-pro' )   => '5/12',
	esc_html__( '6 columns - 1/2', 'startup-pro' )    => '1/2',
	esc_html__( '7 columns - 7/12', 'startup-pro' )   => '7/12',
	esc_html__( '8 columns - 2/3', 'startup-pro' )    => '2/3',
	esc_html__( '9 columns - 3/4', 'startup-pro' )    => '3/4',
	esc_html__( '10 columns - 5/6', 'startup-pro' )   => '5/6',
	esc_html__( '11 columns - 11/12', 'startup-pro' ) => '11/12',
	esc_html__( '12 columns - 1/1', 'startup-pro' )   => '1/1'
);
// Animation
// ------------------------------------------------------------------------------------------
$vc_map_animation = array(
	'type'        => 'dropdown',
	'heading'     => 'Animation',
	'param_name'  => 'animation',
	'admin_label' => true,
	'value'       => startup_pro_get_animations(),
);
$vc_map_animation_delay = array(
	'type'             => 'vc_startup_pro_textfield',
	'heading'          => 'Animation Delay',
	'param_name'       => 'animation_delay',
	'edit_field_class' => 'vc_col-md-6 vc_column',
	'placeholder'      => 0.1,
	'dependency'       => array( 'element' => 'animation', 'not_empty' => true )
);
$vc_map_animation_duration = array(
	'type'             => 'vc_startup_pro_textfield',
	'heading'          => 'Animation Duration',
	'param_name'       => 'animation_duration',
	'edit_field_class' => 'vc_col-md-6 vc_column',
	'placeholder'      => 0.7,
	'dependency'       => array( 'element' => 'animation', 'not_empty' => true )
);
$vc_params_button_size = array(
	'XX Small' => 'xxs',
	'X Small'  => 'xs',
	'Small'    => 'sm',
	'Medium'   => 'md',
	'Large'    => 'lg',
	'X Large'  => 'xl',
	'XX Large' => 'xxl',
);
$vc_params_button_shape = array(
	'Square'  => 'square',
	'Rounded' => 'rounded',
	'Pill'    => 'pill',
	'Circle'  => 'circle',
);
$vc_params_button_type = array(
	'Flat'     => 'flat',
	'Outlined' => 'outlined',
	'3D'       => '3d',
);
$vc_params_button_align = array(
	'Select align' => '',
	'Left'         => 'left',
	'Center'       => 'center',
	'Right'        => 'right',
);
// Extras
// ------------------------------------------------------------------------------------------
$vc_map_id = array(
	'type'       => 'textfield',
	'heading'    => 'Extra ID',
	'param_name' => 'id'
);
$vc_map_class = array(
	'type'       => 'textfield',
	'heading'    => 'Extra Class',
	'param_name' => 'class'
);
$vc_map_style = array(
	'type'       => 'vc_startup_pro_style_textarea',
	'heading'    => 'Extra Inline Style',
	'param_name' => 'in_style'
);
// Extras
// ------------------------------------------------------------------------------------------
$vc_map_extra_id = array(
	'type'       => 'textfield',
	'heading'    => 'Extra ID',
	'param_name' => 'id',
	'group'      => 'Extras'
);
$vc_map_extra_class = array(
	'type'       => 'textfield',
	'heading'    => 'Extra Class',
	'param_name' => 'class',
	'group'      => 'Extras'
);
$vc_map_extra_style = array(
	'type'       => 'vc_startup_pro_style_textarea',
	'heading'    => 'Extra Inline Style',
	'param_name' => 'in_style',
	'group'      => 'Extras'
);
// Extras
// ------------------------------------------------------------------------------------------
$vc_map_defaults = array( $vc_map_id, $vc_map_class, $vc_map_style );
$vc_map_extra_defaults = array( $vc_map_extra_id, $vc_map_extra_class, $vc_map_extra_style );
// Used in "Button", "Call esc_html__( 'Blue', 'startup-pro' )to Action", "Pie chart" blocks
$colors_arr = array(
	esc_html__( 'Grey', 'startup-pro' )      => 'wpb_button',
	esc_html__( 'Blue', 'startup-pro' )      => 'btn-primary',
	esc_html__( 'Turquoise', 'startup-pro' ) => 'btn-info',
	esc_html__( 'Green', 'startup-pro' )     => 'btn-success',
	esc_html__( 'Orange', 'startup-pro' )    => 'btn-warning',
	esc_html__( 'Red', 'startup-pro' )       => 'btn-danger',
	esc_html__( 'Black', 'startup-pro' )     => "btn-inverse"
);
// Used in "Button" and "Call to Action" blocks
$size_arr = array(
	esc_html__( 'Regular size', 'startup-pro' ) => 'wpb_regularsize',
	esc_html__( 'Large', 'startup-pro' )        => 'btn-large',
	esc_html__( 'Small', 'startup-pro' )        => 'btn-small',
	esc_html__( 'Mini', 'startup-pro' )         => "btn-mini"
);
$target_arr = array(
	esc_html__( 'Same window', 'startup-pro' ) => '_self',
	esc_html__( 'New window', 'startup-pro' )  => "_blank"
);
$add_css_animation = array(
	'type'        => 'dropdown',
	'heading'     => esc_html__( 'CSS Animation', 'startup-pro' ),
	'param_name'  => 'css_animation',
	'admin_label' => true,
	'value'       => array(
		esc_html__( 'No', 'startup-pro' )                 => '',
		esc_html__( 'Top to bottom', 'startup-pro' )      => 'top-to-bottom',
		esc_html__( 'Bottom to top', 'startup-pro' )      => 'bottom-to-top',
		esc_html__( 'Left to right', 'startup-pro' )      => 'left-to-right',
		esc_html__( 'Right to left', 'startup-pro' )      => 'right-to-left',
		esc_html__( 'Appear from center', 'startup-pro' ) => "appear"
	),
	'description' => esc_html__( 'Select type of animation if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.', 'startup-pro' )
);
vc_map( array(
	'name'                    => esc_html__( 'Row', 'startup-pro' ), //Inner Row
	'base'                    => 'vc_row_inner',
	'content_element'         => false,
	'is_container'            => true,
	'icon'                    => 'icon-wpb-row',
	'weight'                  => 1000,
	'show_settings_on_create' => false,
	'description'             => esc_html__( 'Place content elements inside the row', 'startup-pro' ),
	'params'                  => array(
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Font Color', 'startup-pro' ),
			'param_name'       => 'font_color',
			'description'      => esc_html__( 'Select font color', 'startup-pro' ),
			'edit_field_class' => 'vc_col-md-6 vc_column'
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		),
		array(
			'type'       => 'css_editor',
			'heading'    => esc_html__( 'Css', 'startup-pro' ),
			'param_name' => 'css',
			// 'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' ),
			'group'      => esc_html__( 'Design options', 'startup-pro' )
		)
	),
	'js_view'                 => 'VcRowView'
) );
vc_map( array(
	'name'            => esc_html__( 'Column', 'startup-pro' ),
	'base'            => 'vc_column',
	'is_container'    => true,
	'content_element' => false,
	'params'          => array(
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Font Color', 'startup-pro' ),
			'param_name'       => 'font_color',
			'description'      => esc_html__( 'Select font color', 'startup-pro' ),
			'edit_field_class' => 'vc_col-md-6 vc_column'
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		),
		array(
			'type'       => 'css_editor',
			'heading'    => esc_html__( 'Css', 'startup-pro' ),
			'param_name' => 'css',
			
			'group'      => esc_html__( 'Design options', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Width', 'startup-pro' ),
			'param_name'  => 'width',
			'value'       => $column_width_list,
			'group'       => esc_html__( 'Width & Responsiveness', 'startup-pro' ),
			'description' => esc_html__( 'Select column width.', 'startup-pro' ),
			'std'         => '1/1'
		),
		array(
			'type'        => 'column_offset',
			'heading'     => esc_html__( 'Responsiveness', 'startup-pro' ),
			'param_name'  => 'offset',
			'group'       => esc_html__( 'Width & Responsiveness', 'startup-pro' ),
			'description' => esc_html__( 'Adjust column for different screen sizes. Control width, offset and visibility settings.', 'startup-pro' )
		)
	),
	'js_view'         => 'VcColumnView'
) );
vc_map( array(
	"name"                      => esc_html__( "Column", "startup-pro" ),
	"base"                      => "vc_column_inner",
	"class"                     => "",
	"icon"                      => "",
	"wrapper_class"             => "",
	"controls"                  => "full",
	"allowed_container_element" => false,
	"content_element"           => false,
	"is_container"              => true,
	"params"                    => array(
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Font Color', 'startup-pro' ),
			'param_name'       => 'font_color',
			'description'      => esc_html__( 'Select font color', 'startup-pro' ),
			'edit_field_class' => 'vc_col-md-6 vc_column'
		),
		array(
			"type"        => "textfield",
			"heading"     => esc_html__( "Extra class name", "startup-pro" ),
			"param_name"  => "el_class",
			"value"       => "",
			"description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "startup-pro" )
		),
		array(
			"type" => "css_editor",
			"heading" => esc_html__( 'CSS box', "startup-pro" ),
			"param_name" => "css",
			"group" => esc_html__( 'Design Options', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Width', 'startup-pro' ),
			'param_name'  => 'width',
			'value'       => $column_width_list,
			'group'       => esc_html__( 'Width & Responsiveness', 'startup-pro' ),
			'description' => esc_html__( 'Select column width.', 'startup-pro' ),
			'std'         => '1/1'
		),
		array(
			'type' => 'column_offset',
			'heading' => esc_html__( 'Responsiveness', 'startup-pro' ),
			'param_name' => 'offset',
			'group' => esc_html__( 'Responsive Options', 'startup-pro' ),
			'description' => esc_html__( 'Adjust column for different screen sizes. Control width, offset and visibility settings.', 'startup-pro' )
		)
	),
	"js_view"                   => 'VcColumnView'
) );
// ==========================================================================================
// SMART ACCORDION
// ==========================================================================================
vc_map( array(
	'name'            => 'Custom Accordion',
	'base'            => 'vc_accordion',
	'is_container'    => true,
	'icon'            => SMART_SHORTCODES_PLUGIN_URL .'/admin/images/accordions.png',
	'description'     => 'jQuery accordion',
	'category' 		  => 'Theme shortcodes',
	'params'          => array(
		array(
			'type'       => 'textfield',
			'heading'    => 'Active tab',
			'param_name' => 'active_tab',
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Class',
			'param_name' => 'class',
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'No section icons',
			'param_name' => 'no_icons',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Icons Colors',
			'param_name' => 'icon_color',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Title Colors',
			'param_name' => 'title_color',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Border Colors',
			'param_name' => 'border_color',
			'group'      => 'Custom Colors',
		)
	),
	'custom_markup'   => '<div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">%content%</div><div class="tab_controls"><a class="add_tab" title="Add section"><span class="vc_icon"></span> <span class="tab-label">Add section</span></a></div>',
	'default_content' => '
    	[vc_accordion_tab title="Section 1"][/vc_accordion_tab]
    	[vc_accordion_tab title="Section 2"][/vc_accordion_tab]
  	',
	'js_view'         => 'VcAccordionView'
) );
// ==========================================================================================
// SMART ACCORDION TAB
// ==========================================================================================
vc_map( array(
	'name'                      => 'Accordion Section',
	'base'                      => 'vc_accordion_tab',
	'allowed_container_element' => 'vc_row',
	'is_container'              => true,
	'content_element'           => false,
	'params'                    => array(
		array(
			'type'       => 'textfield',
			'heading'    => 'Title',
			'param_name' => 'title',
		),
		array(
			'type'       => 'vc_startup_pro_icon',
			'heading'    => 'Icon',
			'param_name' => 'icon',
		)
	),
	'js_view'                   => 'VcAccordionTabView'
) );
// ==========================================================================================
// PRO ALERT
// ==========================================================================================
vc_map( array(
	'name'        => 'Alert',
	'base'        => 'startup_pro_alert',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/alert.png',
	'description' => 'Alert box',
	'category' => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'       => 'dropdown',
			'param_name' => 'type',
			'heading'    => 'Type',
			'value'      => array(
				'Success' => 'success',
				'Info'    => 'info',
				'Warning' => 'warning',
				'Danger'  => 'danger',
				'Note'    => 'note',
			),
		),
		array(
			'type'       => 'vc_startup_pro_icon',
			'param_name' => 'icon',
			'heading'    => 'Icon',
		),
		array(
			'type'       => 'textarea_html',
			'holder'     => 'div',
			'heading'    => 'Content',
			'param_name' => 'content',
			'value'      => '<p>I am alert box. Click edit button to change this text.</p>',
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'Outlined',
			'param_name' => 'outlined',
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'Close Button',
			'param_name' => 'close',
		),
		$vc_map_animation,
		$vc_map_animation_delay,
		$vc_map_animation_duration,
		// Custom Colors
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Background Color',
			'param_name' => 'bgcolor',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Border Color',
			'param_name' => 'border_color',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Text Color',
			'param_name' => 'text_color',
			'group'      => 'Custom Colors',
		),
		// Extars
		$vc_map_extra_id,
		$vc_map_extra_class,
		$vc_map_extra_style,
	),
) );
// ==========================================================================================
// PRO BLOCKQUOTE
// ==========================================================================================
vc_map( array(
	'name'        => 'BlockQuote',
	'base'        => 'startup_pro_blockquote',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/quote.png',
	'description' => 'Create a blockquote',
	'category' => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'       => 'textarea_html',
			'holder'     => 'div',
			'heading'    => 'Text',
			'param_name' => 'content',
			'value'      => '<p>I am text block. Click edit button to change this text.</p>',
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Cite',
			'param_name' => 'cite',
		),
		// Extras
		array(
			'type'       => 'dropdown',
			'heading'    => 'Type',
			'param_name' => 'type',
			'value'      => array(
				'Select a type'    => '',
				'Quote Left Half'  => 'left',
				'Quote Right Half' => 'right',
			),
			'group'      => 'Extras',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Border Color',
			'param_name' => 'border_color',
			'group'      => 'Extras',
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'Use Quote Icon',
			'param_name' => 'icon',
			'group'      => 'Extras',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Icon Color',
			'param_name' => 'icon_color',
			'dependency' => array( 'element' => 'icon', 'not_empty' => true ),
			'group'      => 'Extras',
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Icon Size',
			'param_name' => 'icon_size',
			'dependency' => array( 'element' => 'icon', 'not_empty' => true ),
			'group'      => 'Extras',
		),
		$vc_map_extra_id,
		$vc_map_extra_class,
		$vc_map_extra_style,
	)
) );
// ==========================================================================================
// PRO BLOG
// ==========================================================================================
vc_map( array(
	'name'        => 'Blog',
	'base'        => 'startup_pro_blog',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/blog.png',
	'description' => 'Create a blog',
	'category' => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'        => 'checkbox',
			'heading'     => 'Custom Categories',
			'param_name'  => 'cats',
			'placeholder' => 'Choose category (optional)',
			'value'       => startup_pro_element_values( 'categories', array(
        			'sort_order'  => 'ASC',
        			'hide_empty'  => 0,
      			) ),
		    'description' => 'you can choose spesific categories for blog, default is all categories',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Type',
			'param_name' => 'type',
			'value'      => array(
				'Blog Large Image' => 'default',
				'Blog Small Image' => 'small',
				'Blog Masonry'     => 'masonry',
				'Blog Grid'        => 'grid',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Image Size',
			'param_name' => 'size',
			'value'      => startup_pro_get_image_sizes( true ),
			'std'        => 'blog-large-image',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Columns',
			'param_name' => 'columns',
			'value'      => array(
				'3 Columns' => '',
				'4 Columns' => 4,
				'6 Columns' => 6,
				'2 Columns' => 2,
			),
			'dependency' => array( 'element' => 'type', 'value' => array( 'masonry', 'grid' ) ),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Pagination',
			'param_name' => 'nav',
			'value'      => array(
				'Pagination' => 'paging',
				'Load More'  => 'load',
				'Hide'       => 'hide',
			),
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Posts Per Page',
			'param_name' => 'limit',
			'value'      => get_option( 'posts_per_page' ),
		),
		$vc_map_extra_id,
		$vc_map_extra_class,
	)
) );
// ==========================================================================================
// PRO BUTTON
// ==========================================================================================
vc_map( array(
	'name'        => 'Button',
	'base'        => 'startup_pro_button',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/button.png',
	'description' => 'Create Sweetly Button',
	'category' => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'       => 'vc_link',
			'heading'    => 'Link',
			'param_name' => 'href',
		),
		array(
			'type'       => 'vc_startup_pro_icon',
			'heading'    => 'Icon',
			'param_name' => 'icon',
		),
		array(
			'type'        => 'textarea',
			'heading'     => 'Content',
			'param_name'  => 'content',
			'value'       => 'Click',
			'admin_label' => true,
		),
		// Types
		array(
			'type'             => 'dropdown',
			'heading'          => 'Type',
			'param_name'       => 'type',
			'edit_field_class' => 'vc_col-md-five vc_column',
			'value'            => $vc_params_button_type,
		),
		array(
			'type'             => 'dropdown',
			'heading'          => 'Shape',
			'param_name'       => 'shape',
			'edit_field_class' => 'vc_col-md-five vc_column',
			'value'            => $vc_params_button_shape,
		),
		array(
			'type'             => 'dropdown',
			'heading'          => 'Size',
			'param_name'       => 'size',
			'edit_field_class' => 'vc_col-md-five vc_column',
			'value'            => $vc_params_button_size,
			'std'              => 'sm',
		),
		array(
			'type'             => 'dropdown',
			'heading'          => 'Color',
			'param_name'       => 'color',
			'edit_field_class' => 'vc_col-md-five vc_column',
			'value'            => array(
				'Accent' => 'accent',
				'Blue'   => 'blue',
				'Green'  => 'green',
				'Red'    => 'red',
				'Yellow' => 'yellow',
				'Black'  => 'black',
				'White'  => 'white',
			),
		),
		array(
			'type'             => 'dropdown',
			'heading'          => 'Align',
			'param_name'       => 'align',
			'edit_field_class' => 'vc_col-md-five vc_column',
			'value'            => $vc_params_button_align,
		),
		// Helpful
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'Full Block',
			'param_name'       => 'block',
			'edit_field_class' => 'vc_col-md-five vc_column',
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'Text Shadow',
			'param_name'       => 'textshadow',
			'edit_field_class' => 'vc_col-md-five vc_column',
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'No Uppercase',
			'param_name'       => 'no_uppercase',
			'edit_field_class' => 'vc_col-md-five vc_column',
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'No Bold',
			'param_name'       => 'no_bold',
			'edit_field_class' => 'vc_col-md-five vc_column',
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'No Transition',
			'param_name'       => 'no_transition',
			'edit_field_class' => 'vc_col-md-five vc_column',
		),
		// Customize
		array(
			'type'             => 'vc_startup_pro_content',
			'content'          => '<h2>Custom Colors</h2>',
			'param_name'       => 'notice-colors',
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'group'            => 'Custom Colors',
		),
		array(
			'type'             => 'vc_startup_pro_content',
			'content'          => '<h2>Custom Hover Colors</h2>',
			'param_name'       => 'notice-hover-colors',
			'edit_field_class' => 'vc_col-md-6 vc_column vc_no_top_padding',
			'group'            => 'Custom Colors',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => 'Background Color',
			'param_name'       => 'bgcolor',
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'group'            => 'Custom Colors',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => 'Background Hover Color',
			'param_name'       => 'bghovercolor',
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'group'            => 'Custom Colors'
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => 'Text Color',
			'param_name'       => 'textcolor',
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'group'            => 'Custom Colors'
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => 'Text Hover Color',
			'param_name'       => 'texthovercolor',
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'group'            => 'Custom Colors'
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => 'Border Color',
			'param_name'       => 'bordercolor',
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'group'            => 'Custom Colors'
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => 'Border Hover Color',
			'param_name'       => 'borderhovercolor',
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'group'            => 'Custom Colors'
		),
		array(
			'type'             => 'vc_startup_pro_style_textarea',
			'heading'          => 'Custom CSS',
			'param_name'       => 'in_style',
			'placeholder'      => 'eg. border-radius: 0;',
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'group'            => 'Custom Colors'
		),
		array(
			'type'             => 'vc_startup_pro_style_textarea',
			'heading'          => 'Custom Hover CSS',
			'param_name'       => 'in_style_hover',
			'placeholder'      => 'eg. border-radius: 10px;',
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'group'            => 'Custom Colors'
		),
		$vc_map_animation,
		$vc_map_animation_delay,
		$vc_map_animation_duration,
		// Extras
		$vc_map_extra_id,
		$vc_map_extra_class,
	)
) );
// ==========================================================================================
// PRO BUTTON GROUP
// ==========================================================================================
vc_map( array(
	'name'                    => 'Button Group',
	'base'                    => 'startup_pro_button_group',
	'icon'                    => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/dual-button.png',
	'description'             => 'Create sweetly button group',
	'params'                  => $vc_map_defaults,
	'as_parent'               => array( 'only' => 'startup_pro_button' ),
	'content_element'         => true,
	'show_settings_on_create' => false,
	'category'					=> 'Theme shortcodes',
	'js_view'                 => 'VcColumnView',
) );
// ==========================================================================================
// PRO Clients 
// ==========================================================================================
vc_map( array(
	'name'        => 'Clients',
	'base'        => 'startup_pro_clients',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/clients.png',
	'description' => 'Load clients',
	'category' => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'       => 'dropdown',
			'heading'    => 'Clients groups',
			'param_name' => 'clients_groups',
			'value'      => startup_pro_element_values( 'categories', array(
				'sort_order' => 'ASC',
				'taxonomy'   => 'clients-categories',
				'hide_empty' => 0
			) )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Columns',
			'param_name' => 'columns',
			'value'      => array(
				'1'  => '1',
				'2'  => '2',
				'3'  => '3',
				'4'  => '4',
				'5'  => '5',
				'6'  => '6',
				'7'  => '7',
				'8'  => '8',
				'9'  => '9',
				'10' => '10'
			)
		),
		array(
			"type"        => "dropdown",
			"class"       => "",
			"heading"     => esc_html__( "Hover effect?", 'startup-pro' ),
			"param_name"  => "hover_effect",
			'value'       => array( esc_html__( "No", 'startup-pro' ) => "no", esc_html__( "Yes", 'startup-pro' ) => "yes", ),
			"description" => esc_html__( "Select if you want the carousel to rotate automatically.", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Border color", 'startup-pro' ),
			"param_name"  => "border_color",
			"value"       => '#fff', //Default Red color
			"description" => esc_html__( "Choose border color (optional)", 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// PRO Clients carousel
// ==========================================================================================
vc_map( array(
	'name'        => 'Clients carousel',
	'base'        => 'startup_pro_clients_carousel',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/clients-carousel.png',
	'description' => 'Load clients into a carousel',
	'category' => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'       => 'dropdown',
			'heading'    => 'Clients groups',
			'param_name' => 'clients_groups',
			'value'      => startup_pro_element_values( 'categories', array(
				'sort_order' => 'ASC',
				'taxonomy'   => 'clients-categories',
				'hide_empty' => 0
			) )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Columns',
			'param_name' => 'columns',
			'value'      => array(
				'1'  => '1',
				'2'  => '2',
				'3'  => '3',
				'4'  => '4',
				'5'  => '5',
				'6'  => '6',
				'7'  => '7',
				'8'  => '8',
				'9'  => '9',
				'10' => '10'
			)
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Border color", 'startup-pro' ),
			"param_name"  => "border_color",
			"value"       => '#fff', //Default Red color
			"description" => esc_html__( "Choose border color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Arrow color", 'startup-pro' ),
			"param_name"  => "arrow_color",
			"value"       => '#fff', //Default Red color
			"description" => esc_html__( "Choose arrow color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Arrow background color", 'startup-pro' ),
			"param_name"  => "arrow_bg_color",
			"value"       => '#F92740', //Default Red color
			"description" => esc_html__( "Choose arrow background color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Arrow background hover color", 'startup-pro' ),
			"param_name"  => "arrow_bg_hover_color",
			"value"       => '#4DB261', //Default Red color
			"description" => esc_html__( "Choose arrow hover color (optional)", 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// SMART CTA
// ==========================================================================================
$cta_unique_id_1 = time() . '-1-' . rand( 0, 100 );
$cta_unique_id_2 = time() . '-2-' . rand( 0, 100 );
vc_map( array(
	"name"            => 'Call to Action',
	'base'            => 'smart_cta',
	'is_container'    => true,
	'icon'            => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/call-to-action.png',
	'class'           => 'wpb_vc_tabs',
	'description'     => 'Call to action content',
	'category' 		  => 'Theme shortcodes',
	'params'          => array(
		array(
			'type'       => 'dropdown',
			'heading'    => 'Color Type',
			'param_name' => 'type',
			'value'      => array(
				'Outlined'           => 'outlined',
				'Background Colored' => 'bgcolor',
			)
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'Highlight Top',
			'param_name'       => 'top',
			'edit_field_class' => 'vc_col-md-3 vc_column',
			'dependency'       => array( 'element' => 'type', 'value' => array( 'outlined' ) ),
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'Highlight Right',
			'param_name'       => 'right',
			'edit_field_class' => 'vc_col-md-3 vc_column',
			'dependency'       => array( 'element' => 'type', 'value' => array( 'outlined' ) ),
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'Highlight Bottom',
			'param_name'       => 'bottom',
			'edit_field_class' => 'vc_col-md-3 vc_column',
			'dependency'       => array( 'element' => 'type', 'value' => array( 'outlined' ) ),
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'Highlight Left',
			'param_name'       => 'left',
			'edit_field_class' => 'vc_col-md-3 vc_column',
			'dependency'       => array( 'element' => 'type', 'value' => array( 'outlined' ) ),
		),
		// Custom Colors
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Background Color',
			'param_name' => 'bgcolor',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Border Color',
			'param_name' => 'border_color',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Border Highlight Color',
			'param_name' => 'border_hcolor',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Text Color',
			'param_name' => 'text_color',
			'group'      => 'Custom Colors',
		),
		// Extars
		$vc_map_extra_id,
		$vc_map_extra_class,
		$vc_map_extra_style,
	),
	'custom_markup'   => '<div class="wpb_tabs_holder wpb_holder vc_container_for_children"><ul class="tabs_controls"></ul>%content%</div>',
	'default_content' => '
    [smart_cta_block title="CTA Block Primary" tab_id="' . $cta_unique_id_1 . '"][/smart_cta_block]
    [smart_cta_block title="CTA Block Secondary" tab_id="' . $cta_unique_id_2 . '"][/smart_cta_block]',
	'js_view'         => 'VcTabsView'
) );
// ==========================================================================================
// SMART CTA BLOCK
// ==========================================================================================
vc_map( array(
	'name'                      => 'Call to Action Block',
	'base'                      => 'smart_cta_block',
	'allowed_container_element' => 'vc_row',
	'as_parent'                 => array( 'only' => 'startup_pro_button, startup_pro_button_group ,vc_column_text,vc_ultimate_spacer' ),
	'is_container'              => true,
	'content_element'           => false,
	'params'                    => array(
		array(
			'type'       => 'tab_id',
			'heading'    => 'Tab Unique ID',
			'param_name' => 'tab_id'
		)
	),
	'js_view'                   => 'VcTabViewFix'
) );
// ==========================================================================================
// PRO Divider with Icon
// ==========================================================================================
vc_map( array(
	'name'        => 'Divider with Icon',
	'base'        => 'startup_pro_divider_icon',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/divider-with-icon.png',
	'description' => 'Create a divider with icon or text',
	'category' => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'       => 'vc_startup_pro_icon',
			'heading'    => 'Icon',
			'param_name' => 'icon',
		),
		array(
			'type'        => 'textfield',
			'heading'     => 'Text',
			'param_name'  => 'text',
			'admin_label' => true,
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Icon & Text Align',
			'param_name' => 'align',
			'value'      => array(
				'Center' => 'center',
				'Left'   => 'left',
				'Right'  => 'right',
			),
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Icon & Text Size',
			'param_name' => 'size',
		),
		// Custom Colors
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Icon & Text Color',
			'param_name' => 'color',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Border Color',
			'param_name' => 'border_color',
			'group'      => 'Custom Colors',
		),
		// Extras
		array(
			'type'       => 'dropdown',
			'heading'    => 'Border Type',
			'param_name' => 'border_type',
			'value'      => array(
				'Solid'  => '',
				'Dashed' => 'dashed',
				'Dotted' => 'dotted',
				'Double' => 'double',
			),
			'group'      => 'Extras',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Width',
			'param_name' => 'width',
			'value'      => array(
				'100%'   => '',
				'75%'    => '75%',
				'50%'    => '50%',
				'25%'    => '25%',
				'10%'    => '10%',
				'5%'     => '5%',
				'custom' => 'custom',
			),
			'group'      => 'Extras',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Margin (spacing)',
			'param_name' => 'margin',
			'value'      => array(
				'sm'     => '',
				'xs'     => 'xs',
				'md'     => 'md',
				'lg'     => 'lg',
				'xl'     => 'xl',
				'custom' => 'custom',
			),
			'group'      => 'Extras',
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Margin Top',
			'param_name' => 'margin_top',
			'dependency' => array( 'element' => 'margin', 'value' => array( 'custom' ) ),
			'group'      => 'Extras',
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Margin Bottom',
			'param_name' => 'margin_bottom',
			'dependency' => array( 'element' => 'margin', 'value' => array( 'custom' ) ),
			'group'      => 'Extras',
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'No Border Space',
			'param_name' => 'no_space',
			'group'      => 'Extras',
		),
		array(
			'type'       => 'vc_startup_pro_shortcode_textarea',
			'heading'    => 'Custom Content',
			'param_name' => 'content',
			'group'      => 'Extras',
		),
		$vc_map_extra_id,
		$vc_map_extra_class,
		$vc_map_extra_style,
	)
) );
// ==========================================================================================
// PRO ICONBOX
// ==========================================================================================
vc_map( array(
	'name'        => 'Icon Box',
	'base'        => 'startup_pro_iconbox',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/icon-box.png',
	'description' => 'Create an iconbox',
	'category' => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'       => 'textfield',
			'heading'    => 'Box Title',
			'param_name' => 'title',
		),
		array(
			'type'        => 'textarea_html',
			'heading'     => 'Box Content',
			'param_name'  => 'content',
			'admin_label' => true,
		),
		$vc_map_animation,
		$vc_map_animation_delay,
		$vc_map_animation_duration,
		// icon tab
		array(
			'type'       => 'vc_startup_pro_icon',
			'heading'    => 'Select box icon',
			'param_name' => 'icon',
			'group'      => 'Box Icon',
		),
		array(
			'type'        => 'dropdown',
			'heading'     => 'Icon and Text Align',
			'param_name'  => 'align',
			'description' => 'Set icon position, also this is text align',
			'value'       => array(
				'Box Left'      => 'left',
				'Box Center'    => 'center',
				'Box Right'     => 'right',
				'Heading Left'  => 'heading-left',
				'Heading Right' => 'heading-right',
			),
			'group'       => 'Box Icon',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Icon Type',
			'param_name' => 'icon_type',
			'value'      => array(
				'Background Color' => 'bgcolor',
				'Outlined'         => 'outlined',
				'Bordered'         => 'bordered',
				'No Colors'        => 'nocolor',
			),
			'group'      => 'Box Icon',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Icon Shape',
			'param_name' => 'icon_shape',
			'value'      => array(
				'Square'  => 'square',
				'Circle'  => 'circle',
				'Rounded' => 'rounded',
			),
			'group'      => 'Box Icon',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Icon Size',
			'param_name' => 'icon_size',
			'value'      => array(
				'XX Small' => 'xxs',
				'X Small'  => 'xs',
				'Small'    => 'sm',
				'Medium'   => 'md',
				'Large'    => 'lg',
				'X Large'  => 'xl',
				'XX Large' => 'xxl',
				'Custom'   => 'custom',
			),
			'std'        => 'sm',
			'group'      => 'Box Icon',
		),
		array(
			'type'             => 'textfield',
			'heading'          => 'Icon Size',
			'param_name'       => 'custom_icon_size',
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'dependency'       => array( 'element' => 'icon_size', 'value' => array( 'custom' ) ),
			'group'            => 'Box Icon',
		),
		array(
			'type'             => 'textfield',
			'heading'          => 'Icon Spacing',
			'param_name'       => 'custom_icon_spacing',
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'dependency'       => array( 'element' => 'icon_size', 'value' => array( 'custom' ) ),
			'group'            => 'Box Icon',
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Icon Border Width',
			'param_name' => 'icon_border_width',
			'group'      => 'Box Icon',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Icon Border Style',
			'param_name' => 'icon_border_style',
			'value'      => array(
				'Solid'  => '',
				'Dashed' => 'dashed',
				'Dotted' => 'dotted',
				'Double' => 'double',
				'Groove' => 'groove',
				'Ridge'  => 'ridge',
				'Inset'  => 'inset',
				'Outset' => 'outset',
			),
			'group'      => 'Box Icon',
		),
		// Customize
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Icon Background Color',
			'param_name' => 'icon_background',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Icon Border Color',
			'param_name' => 'icon_border',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Icon Color',
			'param_name' => 'icon_color',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Title Color',
			'param_name' => 'title_color',
			'group'      => 'Custom Colors',
		),
		// Box Extras
		array(
			'type'       => 'vc_link',
			'heading'    => 'Box Link',
			'param_name' => 'link',
			'group'      => 'Extras',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Apply link to',
			'param_name' => 'apply_link',
			'value'      => array(
				'Box'   => '',
				'Title' => 'Title',
			),
			'group'      => 'Extras',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Box Title Size',
			'param_name' => 'title_size',
			'value'      => array(
				'Select a heading' => '',
				'h1'               => 'h1',
				'h2'               => 'h2',
				'h3'               => 'h3',
				'h4'               => 'h4',
				'h5'               => 'h5',
				'h6'               => 'h6',
				'custom'           => 'custom',
			),
			'group'      => 'Extras',
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Custom Title Size',
			'param_name' => 'custom_title_size',
			'dependency' => array( 'element' => 'title_size', 'value' => array( 'custom' ) ),
			'group'      => 'Extras',
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'Icon Hover Effect',
			'param_name' => 'effect',
			'group'      => 'Extras',
		),
		$vc_map_extra_id,
		$vc_map_extra_class,
		$vc_map_extra_style,
	),
) );
// ==========================================================================================
// PRO PORTFOLIO
// ==========================================================================================
vc_map( array(
	'name'        => 'Portfolio',
	'base'        => 'startup_pro_portfolio',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/portfolio.png',
	'description' => 'Create a portfolio',
	'category' => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'        => 'checkbox',
			'heading'     => 'Custom Categories',
			'param_name'  => 'cats',
			'placeholder' => 'Choose category (optional)',
			'value'       => startup_pro_element_values( 'categories', array(
				'sort_order' => 'ASC',
				'taxonomy'   => 'portfolio-category',
				'hide_empty' => 0,
			) ),
			'std'         => '',
			'description' => 'you can choose spesific categories for portfolio, default is all categories',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Style',
			'param_name' => 'style',
			'value'      => array(
				'Default'       => 'default',
				'Without Space' => 'without-space',
				'With 1px'      => 'with-one-px',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Layout',
			'param_name' => 'layout',
			'value'      => array(
				'Masonry' => 'masonry',
				'Grid'    => 'fitRows',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Model',
			'param_name' => 'model',
			'value'      => array(
				'Default'          => 'default',
				'Lightbox Gallery' => 'gallery',
				'Text'             => 'text',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Columns',
			'param_name' => 'columns',
			'value'      => array(
				'1 Column'   => 1,
				'2 Columns'  => 2,
				'3 Columns'  => 3,
				'4 Columns'  => 4,
				'5 Columns'  => 5,
				'6 Columns'  => 6,
				'7 Columns'  => 7,
				'8 Columns'  => 8,
				'9 Columns'  => 9,
				'10 Columns' => 10,
				'11 Columns' => 11,
				'12 Columns' => 12,
			),
			'std'        => 3,
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Thumbnail Size (optional)',
			'param_name' => 'size',
			'value'      => startup_pro_get_image_sizes( true ),
			'std'        => 'large',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Pagination Type',
			'param_name' => 'nav',
			'value'      => array(
				'Pagination' => 'paging',
				'Load More'  => 'load',
				'Hide'       => 'hide',
			),
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Posts Per Page',
			'param_name' => 'limit',
			'value'      => 9,
		),
		// Customize Filter
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'No Filterable',
			'param_name' => 'no_filter',
			'group'      => 'Customize Filter',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Filter Color',
			'param_name' => 'filter_color',
			'group'      => 'Customize Filter',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Filter Active Color',
			'param_name' => 'filter_hover_color',
			'group'      => 'Customize Filter',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Filter Align',
			'param_name' => 'filter_align',
			'value'      => array(
				'Left'   => 'left',
				'Center' => 'center',
				'Right'  => 'right',
			),
			'std'        => 'center',
			'group'      => 'Customize Filter',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Filter Shape',
			'param_name' => 'filter_shape',
			'value'      => array(
				'pill'    => 'pill',
				'rounded' => 'rounded',
				'square'  => 'square',
			),
			'group'      => 'Customize Filter',
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Filter Border Width',
			'param_name' => 'filter_border_width',
			'group'      => 'Customize Filter',
		),
		// Extras
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'No Love Button',
			'param_name' => 'no_love',
			'group'      => 'Extras',
		),
		$vc_map_extra_id,
		$vc_map_extra_class,
		$vc_map_extra_style,
	)
) );
// ==========================================================================================
// PRO PORTFOLIO
// ==========================================================================================
vc_map( array(
	'name'        => 'Story',
	'base'        => 'startup_pro_story',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/portfolio.png',
	'description' => 'Create a story',
	'category' => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'        => 'checkbox',
			'heading'     => 'Custom Categories',
			'param_name'  => 'cats',
			'placeholder' => 'Choose category (optional)',
			'value'       => startup_pro_element_values( 'categories', array(
				'sort_order' => 'ASC',
				'taxonomy'   => 'story-category',
				'hide_empty' => 0,
			) ),
			'std'         => '',
			'description' => 'you can choose spesific categories for story, default is all categories',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Style',
			'param_name' => 'style',
			'value'      => array(
				'Default'       => 'default',
				'Without Space' => 'without-space',
				'With 1px'      => 'with-one-px',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Layout',
			'param_name' => 'layout',
			'value'      => array(
				'Masonry' => 'masonry',
				'Grid'    => 'fitRows',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Model',
			'param_name' => 'model',
			'value'      => array(
				'Default'          => 'default',
				'Lightbox Gallery' => 'gallery',
				'Text'             => 'text',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Columns',
			'param_name' => 'columns',
			'value'      => array(
				'1 Column'   => 1,
				'2 Columns'  => 2,
				'3 Columns'  => 3,
				'4 Columns'  => 4,
				'5 Columns'  => 5,
				'6 Columns'  => 6,
				'7 Columns'  => 7,
				'8 Columns'  => 8,
				'9 Columns'  => 9,
				'10 Columns' => 10,
				'11 Columns' => 11,
				'12 Columns' => 12,
			),
			'std'        => 3,
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Thumbnail Size (optional)',
			'param_name' => 'size',
			'value'      => startup_pro_get_image_sizes( true ),
			'std'        => 'large',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Pagination Type',
			'param_name' => 'nav',
			'value'      => array(
				'Pagination' => 'paging',
				'Load More'  => 'load',
				'Hide'       => 'hide',
			),
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Posts Per Page',
			'param_name' => 'limit',
			'value'      => 9,
		),
		// Customize Filter
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'No Filterable',
			'param_name' => 'no_filter',
			'group'      => 'Customize Filter',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Filter Color',
			'param_name' => 'filter_color',
			'group'      => 'Customize Filter',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Filter Active Color',
			'param_name' => 'filter_hover_color',
			'group'      => 'Customize Filter',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Filter Align',
			'param_name' => 'filter_align',
			'value'      => array(
				'Left'   => 'left',
				'Center' => 'center',
				'Right'  => 'right',
			),
			'std'        => 'center',
			'group'      => 'Customize Filter',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Filter Shape',
			'param_name' => 'filter_shape',
			'value'      => array(
				'pill'    => 'pill',
				'rounded' => 'rounded',
				'square'  => 'square',
			),
			'group'      => 'Customize Filter',
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Filter Border Width',
			'param_name' => 'filter_border_width',
			'group'      => 'Customize Filter',
		),
		// Extras
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'No Love Button',
			'param_name' => 'no_love',
			'group'      => 'Extras',
		),
		$vc_map_extra_id,
		$vc_map_extra_class,
		$vc_map_extra_style,
	)
) );
// ==========================================================================================
// PRO PRICING
// ==========================================================================================
vc_map( array(
	'name'                    => 'Pricing Table',
	'base'                    => 'startup_pro_pricing_table',
	'icon'                    => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/pricing-table.png',
	'description'             => 'Create a pricing table',
	'params'                  => $vc_map_defaults,
	'as_parent'               => array( 'only' => 'startup_pro_pricing_column' ),
	'show_settings_on_create' => false,
	'category'				  => 'Theme shortcodes',
	'js_view'                 => 'VcColumnView',
) );
vc_map( array(
	'name'        => 'Pricing Column',
	'base'        => 'startup_pro_pricing_column',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/pricing-table.png',
	'description' => 'Create a pricing column',
	'as_child'    => array( 'only' => 'startup_pro_pricing_table' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => 'Title',
			'param_name'  => 'title',
			'admin_label' => true,
		),
		array(
			'type'             => 'vc_startup_pro_textfield',
			'heading'          => 'Price',
			'param_name'       => 'price',
			'placeholder'      => 99,
			'edit_field_class' => 'vc_col-md-3 vc_column',
		),
		array(
			'type'             => 'vc_startup_pro_textfield',
			'heading'          => 'Price Subtitle',
			'param_name'       => 'subtitle',
			'placeholder'      => 'BEST SELLER',
			'edit_field_class' => 'vc_col-md-3 vc_column',
		),
		array(
			'type'             => 'vc_startup_pro_textfield',
			'heading'          => 'Currency',
			'param_name'       => 'currency',
			'placeholder'      => '$',
			'edit_field_class' => 'vc_col-md-3 vc_column',
		),
		array(
			'type'             => 'vc_startup_pro_textfield',
			'heading'          => 'Interval',
			'param_name'       => 'interval',
			'placeholder'      => 'per year',
			'edit_field_class' => 'vc_col-md-3 vc_column',
		),
		array(
			'type'        => 'vc_startup_pro_exploded_textarea',
			'heading'     => 'Features',
			'param_name'  => 'content',
			'value'       => 'some~feature~here',
			'description' => 'textarea, where each line will be imploded with vertical bar ( | )',
		),
		// Custom Colors
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'Featured Column',
			'param_name' => 'featured',
			'label'      => 'Set this column as featured!',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Predefined Colors',
			'param_name' => 'color',
			'value'      => array(
				'Accent' => 'accent',
				'Blue'   => 'blue',
				'Green'  => 'green',
				'Red'    => 'red',
				'Yellow' => 'yellow',
				'Gray'   => 'gray',
				'Black'  => 'black',
				'Custom' => 'custom',
			),
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Title Background Color',
			'param_name' => 'title_bgcolor',
			'dependency' => array( 'element' => 'color', 'value' => array( 'custom' ) ),
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Title Color',
			'param_name' => 'title_color',
			'dependency' => array( 'element' => 'color', 'value' => array( 'custom' ) ),
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Price Background Color',
			'param_name' => 'price_bgcolor',
			'dependency' => array( 'element' => 'color', 'value' => array( 'custom' ) ),
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Price Color',
			'param_name' => 'price_color',
			'dependency' => array( 'element' => 'color', 'value' => array( 'custom' ) ),
			'group'      => 'Custom Colors',
		),
		// Price Button
		array(
			'type'       => 'textfield',
			'heading'    => 'Button Text',
			'param_name' => 'button_content',
			'value'      => '',
			'group'      => 'Button',
		),
		array(
			'type'       => 'vc_link',
			'heading'    => 'Link',
			'param_name' => 'button_link',
			'group'      => 'Button',
		),
		array(
			'type'       => 'vc_startup_pro_icon',
			'heading'    => 'Icon',
			'param_name' => 'button_icon',
			'group'      => 'Button',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Type',
			'param_name' => 'button_type',
			'value'      => $vc_params_button_type,
			'group'      => 'Button',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Shape',
			'param_name' => 'button_shape',
			'value'      => $vc_params_button_shape,
			'group'      => 'Button',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Size',
			'param_name' => 'button_size',
			'value'      => $vc_params_button_size,
			'std'        => 'sm',
			'group'      => 'Button',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Color',
			'param_name' => 'button_color',
			'value'      => array(
				'Accent' => 'accent',
				'Blue'   => 'blue',
				'Green'  => 'green',
				'Red'    => 'red',
				'Yellow' => 'yellow',
				'Gray'   => 'gray',
				'Black'  => 'black',
			),
			'group'      => 'Button',
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'Full Width Block Button',
			'param_name' => 'button_block',
			'group'      => 'Button',
		),
		// Extras
		$vc_map_extra_id,
		$vc_map_extra_class,
		$vc_map_extra_style,
	)
) );
// ==========================================================================================
// PRO RESPONSIVE SLIDER
// ==========================================================================================
vc_map( array(
	'name'        => 'Responsive Slider or Gallery',
	'base'        => 'startup_pro_responsive_slider',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/responsive-slider.png',
	'description' => 'Create a responsive slider',
	'category'	  => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'       => 'attach_images',
			'heading'    => 'Images',
			'param_name' => 'ids',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Type',
			'param_name' => 'protype',
			'value'      => array(
				'Slideshow'               => 'slideshow',
				'Gallery with Thumbnails' => 'gallery_thumb',
				'Gallery visibleNearby'   => 'gallery_nearby',
				'Gallery with Lightbox'   => 'gallery_lightbox',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Image Scale',
			'param_name' => 'scale',
			'value'      => array(
				'Default'        => '',
				'Fill'           => 'fill',
				'Fit'            => 'fit',
				'Fit if smaller' => 'fit-if-smaller',
				'None'           => 'none',
			),
			'dependency' => array(
				'element' => 'protype',
				'value'   => array( 'slideshow', 'gallery_thumb', 'gallery_nearby' )
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Image Size',
			'param_name' => 'size',
			'value'      => startup_pro_get_image_sizes( true ),
			'std'        => 'large',
		),
		array(
			'type'             => 'vc_startup_pro_textfield',
			'heading'          => 'Width (optional)',
			'param_name'       => 'width',
			'placeholder'      => 850,
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'dependency'       => array(
				'element' => 'protype',
				'value'   => array( 'slideshow', 'gallery_thumb', 'gallery_nearby' )
			),
		),
		array(
			'type'             => 'vc_startup_pro_textfield',
			'heading'          => 'Height (optional)',
			'param_name'       => 'height',
			'placeholder'      => 400,
			'edit_field_class' => 'vc_col-md-6 vc_column',
			'dependency'       => array(
				'element' => 'protype',
				'value'   => array( 'slideshow', 'gallery_thumb', 'gallery_nearby' )
			),
		),
		array(
			'type'        => 'vc_startup_pro_textfield',
			'heading'     => 'Columns (optional)',
			'param_name'  => 'columns',
			'placeholder' => 3,
			'dependency'  => array( 'element' => 'protype', 'value' => array( 'gallery_lightbox' ) ),
		),
		// extra settings
		array(
			'type'       => 'vc_startup_pro_content',
			'param_name' => 'notice-responsive-slider',
			'content'    => '<p class="pro-alert pro-alert-info">This settings is <strong>optional</strong>.</p>',
			'group'      => 'Extra Settings',
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'Border',
			'param_name' => 'border',
			'group'      => 'Extra Settings',
		),
		array(
			'type'        => 'vc_startup_pro_textfield',
			'heading'     => 'Autoplay',
			'param_name'  => 'autoplay',
			'placeholder' => '5000 = 5ms for each slide',
			'group'       => 'Extra Settings',
		),
		array(
			'type'        => 'vc_startup_pro_textfield',
			'heading'     => 'Transition',
			'param_name'  => 'transition',
			'placeholder' => 'move or fade',
			'group'       => 'Extra Settings',
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'Loop Slides',
			'param_name' => 'loop',
			'group'      => 'Extra Settings',
		),
		// extras
		$vc_map_extra_id,
		$vc_map_extra_class,
		$vc_map_extra_style,
	),
) );
// ==========================================================================================
// PRO Staff
// ==========================================================================================
vc_map( array(
	"name"        => "Staff",
	"base"        => "startup_pro_staff",
	"class"       => "",
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/staff.png',
	'category' => 'Theme shortcodes',
	"description" => "Show your team members",
	"params"      => array(
		array(
			"type"        => "dropdown",
			"class"       => "",
			"heading"     => esc_html__( "Hover effect?", 'startup-pro' ),
			"param_name"  => "hover_effect",
			'value'       => array( esc_html__( "No", 'startup-pro' ) => "no", esc_html__( "Yes", 'startup-pro' ) => "yes", ),
			"description" => esc_html__( "Select if you want the carousel to rotate automatically.", 'startup-pro' )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Staff groups',
			'param_name' => 'staff_groups',
			'value'      => startup_pro_element_values( 'categories', array(
				'sort_order' => 'ASC',
				'taxonomy'   => 'groups',
				'hide_empty' => 0
			) )
		),
		array(
			"type"        => "textfield",
			"class"       => "",
			"heading"     => esc_html__( "Number of staff member to load", 'startup-pro' ),
			"param_name"  => "to_show",
			"value"       => esc_html__( "5", 'startup-pro' ),
			"description" => esc_html__( "Number of staff member to load", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Heading color", 'startup-pro' ),
			"param_name"  => "heading_color",
			"value"       => '#2c3e50', //Default Red color
			"description" => esc_html__( "Choose heading color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Text color", 'startup-pro' ),
			"param_name"  => "text_color",
			"value"       => '#647886', //Default Red color
			"description" => esc_html__( "Choose text color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Job color", 'startup-pro' ),
			"param_name"  => "job_color",
			"value"       => '#647886', //Default Red color
			"description" => esc_html__( "Choose high light color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Border color", 'startup-pro' ),
			"param_name"  => "border_color",
			"value"       => '#f7c605', //Default Red color 
			"description" => esc_html__( "Choose border color (optional)", 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// PRO Staff carousel
// ==========================================================================================
vc_map( array(
	"name"        => "Staff Carousel",
	"base"        => "startup_pro_staff_carousel",
	"class"       => "",
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/staff-carousel.png',
	"description" => "Show your team members inside a carousel",
	'category' => 'Theme shortcodes',
	"params"      => array(
		array(
			"type"        => "dropdown",
			"class"       => "",
			"heading"     => esc_html__( "Hover effect?", 'startup-pro' ),
			"param_name"  => "hover_effect",
			'value'       => array( esc_html__( "No", 'startup-pro' ) => "no", esc_html__( "Yes", 'startup-pro' ) => "yes", ),
			"description" => esc_html__( "Select if you want the carousel to rotate automatically.", 'startup-pro' )
		),
		array(
			'type'        => 'vc_startup_pro_chosen',
			'heading'     => 'Staff groups',
			'param_name'  => 'staff_groups',
			'placeholder' => 'Choose category (optional)',
			'value'       => startup_pro_element_values( 'categories', array(
				'sort_order' => 'ASC',
				'taxonomy'   => 'groups',
				'hide_empty' => 0
			) ),
			'std'         => ''
		),
		array(
			"type"        => "dropdown",
			"class"       => "",
			"heading"     => esc_html__( "Posts per line", 'startup-pro' ),
			"param_name"  => "posts_per_line",
			"value"       => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'5' => '5',
				'6' => '6'
			),
			'std'         => '4',
			"description" => esc_html__( "Number of staff per line.", 'startup-pro' )
		),
		array(
			"type"        => "dropdown",
			"class"       => "",
			"heading"     => esc_html__( "Auto Rotate?", 'startup-pro' ),
			"param_name"  => "scroll",
			'value'       => array( esc_html__( "Yes", 'startup-pro' ) => "yes", esc_html__( "No", 'startup-pro' ) => "no", ),
			"description" => esc_html__( "Select if you want the carousel to rotate automatically.", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Heading color", 'startup-pro' ),
			"param_name"  => "heading_color",
			"value"       => '#2c3e50', //Default Red color
			"description" => esc_html__( "Choose heading color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Text color", 'startup-pro' ),
			"param_name"  => "text_color",
			"value"       => '#647886', //Default Red color
			"description" => esc_html__( "Choose text color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Job color", 'startup-pro' ),
			"param_name"  => "job_color",
			"value"       => '#647886', //Default Red color
			"description" => esc_html__( "Choose high light color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Border color", 'startup-pro' ),
			"param_name"  => "border_color",
			"value"       => '#f7c605', //Default Red color
			"description" => esc_html__( "Choose border color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Arrows color", 'startup-pro' ),
			"param_name"  => "arrow_color",
			"value"       => '#fff', //Default Red color
			"description" => esc_html__( "Choose arrow color for carousel (default is white)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Arrows background color", 'startup-pro' ),
			"param_name"  => "arrow_bg_color",
			"value"       => '#2c3e50', //Default Red color
			"description" => esc_html__( "Choose background color for arrows (default is white)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Arrows background hover color", 'startup-pro' ),
			"param_name"  => "arrow_bg_hover_color",
			"value"       => '#f7c605',
			"description" => esc_html__( "Choose background color for arrows on hover (default is white)", 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// PRO TABLE
// ==========================================================================================
vc_map( array(
	'name'        => 'Table',
	'base'        => 'startup_pro_table',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/table.png',
	'description' => 'Create a table',
	'category'    => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'Striped rows',
			'param_name'       => 'striped',
			'edit_field_class' => 'vc_col-md-five',
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'Bordered',
			'edit_field_class' => 'vc_col-md-five',
			'param_name'       => 'bordered',
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'Hover rows',
			'param_name'       => 'hover',
			'edit_field_class' => 'vc_col-md-five',
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'Condensed',
			'param_name'       => 'condensed',
			'edit_field_class' => 'vc_col-md-five',
		),
		array(
			'type'             => 'vc_smart_on_off',
			'heading'          => 'Responsive',
			'param_name'       => 'responsive',
			'edit_field_class' => 'vc_col-md-five',
		),
		array(
			'holder'     => 'div',
			'type'       => 'textarea_html',
			'heading'    => 'Content',
			'param_name' => 'content',
			'value'      => '<table><thead><tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr></thead><tbody><tr><td>1</td><td>Mark</td><td>Otto</td><td>@mdo</td></tr><tr><td>2</td><td>Jacob</td><td>Thornton</td><td>@fat</td></tr></tbody></table>',
		),
		// Extras
		$vc_map_extra_id,
		$vc_map_extra_class,
		$vc_map_extra_style,
	)
) );
// ==========================================================================================
// PRO Testimonials 
// ==========================================================================================
vc_map( array(
	'name'        => 'Testimonials',
	'base'        => 'startup_pro_reviews',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/testimonials.png',
	'description' => 'Load testimonials',
	'category'    => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'        => 'vc_startup_pro_chosen',
			'heading'     => 'Testimonials groups',
			'param_name'  => 'testimonial_groups',
			'placeholder' => 'Choose category (optional)',
			'value'       => startup_pro_element_values( 'categories', array(
				'sort_order' => 'ASC',
				'taxonomy'   => 'testimonials-categories',
				'hide_empty' => 0
			) )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Text color", 'startup-pro' ),
			"param_name"  => "text_color",
			"value"       => '#647886', //Default Red color
			"description" => esc_html__( "Choose text color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Job color", 'startup-pro' ),
			"param_name"  => "job_color",
			"value"       => '#8b9ba6', //Default Red color
			"description" => esc_html__( "Choose job title color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Name color", 'startup-pro' ),
			"param_name"  => "name_color",
			"value"       => '#2c3e50', //Default Red color
			"description" => esc_html__( "Choose text color (optional)", 'startup-pro' )
		),
		array(
			"type"        => "colorpicker",
			"class"       => "",
			"heading"     => esc_html__( "Line color", 'startup-pro' ),
			"param_name"  => "line_color",
			"value"       => '#4DB261', //Default Red color
			"description" => esc_html__( "Choose line color (optional)", 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// PRO Tooltip
// ==========================================================================================
vc_map( array(
	'name'        => 'ToolTip',
	'base'        => 'startup_pro_tooltip',
	'icon'        => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/tooltip.png',
	// Simply pass url to your icon here
	'description' => 'Create a tooltip',
	'category' => 'Theme shortcodes',
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => 'Unique ID',
			'param_name'  => 'selector',
			'value'       => 'tooltip_' . uniqid(),
			'description' => 'Copy-paste this unique id for any element class attribute',
		),
		array(
			'type'        => 'dropdown',
			'heading'     => 'Placement',
			'param_name'  => 'placement',
			'value'       => array(
				'Top'    => 'top',
				'Bottom' => 'bottom',
				'Left'   => 'left',
				'Right'  => 'right',
				'Auto'   => 'auto',
			),
			'description' => 'how to position the tooltip - top | bottom | left | right | auto. When "auto" is specified, it will dynamically reorient the tooltip.',
		),
		array(
			'type'        => 'dropdown',
			'heading'     => 'Trigger',
			'param_name'  => 'trigger',
			'value'       => array(
				'Hover' => 'hover',
				'Focus' => 'focus',
				'Click' => 'click',
			),
			'description' => 'how tooltip is triggered - click | hover | focus | manual',
		),
		array(
			'holder'     => 'div',
			'type'       => 'textarea',
			'heading'    => 'Tooltip Content',
			'param_name' => 'content',
		),
	)
) );
// ==========================================================================================
// VC Text block
// ==========================================================================================
vc_map( array(
	'name'          => 'Text Block',
	'base'          => 'vc_column_text',
	'icon'          => 'icon-wpb-layer-shape-text',
	'wrapper_class' => 'clearfix',
	'category'      => 'Content',
	'params'        => array(
		array(
			'holder'     => 'div',
			'type'       => 'textarea_html',
			'heading'    => 'Text',
			'param_name' => 'content',
			'value'      => '<p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>'
		),
		
		array(
			'type'        => 'textfield',
			'heading'     => 'Extra class name',
			'param_name'  => 'el_class',
			'description' => 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.'
		),
		array(
	        'type'       => 'css_editor',
	        'heading'    => 'CSS box',
	        'param_name' => 'css',
	        'group'      => 'Design Options',
      	),
		$add_css_animation,
	)
) );
// ==========================================================================================
// VC TOGGLE
// ==========================================================================================
vc_map( array(
	'name'        => 'Toggle',
	'base'        => 'vc_toggle',
	'icon'        => 'fa fa-unsorted',
	'description' => 'Toggle element for Q&A block',
	'params'      => array(
		array(
			'type'       => 'textfield',
			'holder'     => 'h4',
			'class'      => 'toggle_title',
			'heading'    => 'Toggle title',
			'param_name' => 'title',
			'value'      => 'Toggle title',
		),
		array(
			'type'       => 'vc_startup_pro_icon',
			'heading'    => 'Custom Toggle icon',
			'param_name' => 'icon',
		),
		array(
			'type'       => 'textarea_html',
			'holder'     => 'div',
			'class'      => 'toggle_content',
			'heading'    => 'Toggle content',
			'param_name' => 'content',
			'value'      => '<p>Toggle content goes here, click edit button to change this text.</p>',
		),
		array(
			'type'        => 'dropdown',
			'heading'     => 'Default state',
			'param_name'  => 'open',
			'value'       => array(
				'Closed' => '',
				'Open'   => 'true'
			),
			'description' => 'Select "Open" if you want toggle to be open by default.',
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'No any icon',
			'param_name' => 'no_icon',
		),
		// Custom Colors
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Icons Color',
			'param_name' => 'icon_color',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Title Color',
			'param_name' => 'title_color',
			'group'      => 'Custom Colors',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Border Color',
			'param_name' => 'border_color',
			'group'      => 'Custom Colors',
		),
		$vc_map_extra_id,
		$vc_map_extra_class,
		$vc_map_extra_style,
	),
	'js_view'     => 'VcToggleView'
) );
// ==========================================================================================
// VC TABS
// ==========================================================================================
$tab_unique_id_1 = time() . '-1-' . rand( 0, 100 );
$tab_unique_id_2 = time() . '-2-' . rand( 0, 100 );
$tab_unique_id_3 = time() . '-3-' . rand( 0, 100 );
vc_map( array(
	"name"            => 'Tabs',
	'base'            => 'vc_tabs',
	'is_container'    => true,
	'icon'            => SMART_SHORTCODES_PLUGIN_URL . '/admin/images/tabs.png',
	'description'     => 'Custom tabbed content',
	'params'          => array(
		array(
			'type'       => 'dropdown',
			'heading'    => 'Tab Nav Block',
			'param_name' => 'type',
			'value'      => array(
				'Default' => 'default',
				'Left'    => 'left',
				'Right'   => 'right',
			),
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'Tab Nav Center',
			'param_name' => 'center',
			'dependency' => array( 'element' => 'type', 'value' => array( 'default' ) ),
		),
		array(
			'type'       => 'vc_smart_on_off',
			'heading'    => 'Tab Nav Fit',
			'param_name' => 'fit',
			'dependency' => array( 'element' => 'type', 'value' => array( 'default' ) ),
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => 'Custom Color',
			'param_name' => 'color',
		),
		array(
			'type'        => 'textfield',
			'heading'     => 'Active Tab Nav',
			'param_name'  => 'active',
			'description' => 'You can active any tab as default. Eg. 1 or 2 or 3'
		),
	),
	'custom_markup'   => '<div class="wpb_tabs_holder wpb_holder vc_container_for_children"><ul class="tabs_controls"></ul>%content%</div>',
	'default_content' => '
    [vc_tab title="Tab 1" tab_id="' . $tab_unique_id_1 . '"][/vc_tab]
    [vc_tab title="Tab 2" tab_id="' . $tab_unique_id_2 . '"][/vc_tab]
    [vc_tab title="Tab 3" tab_id="' . $tab_unique_id_3 . '"][/vc_tab]',
	'js_view'         => 'VcTabsView'
) );
// ==========================================================================================
// VC Separator
// ==========================================================================================
vc_map( array(
	'name'                    => esc_html__( 'Separator', 'startup-pro' ),
	'base'                    => 'vc_separator',
	'icon'                    => 'icon-wpb-ui-separator',
	'show_settings_on_create' => true,
	'category'                => esc_html__( 'Content', 'startup-pro' ),
	//"controls"	=> 'popup_delete',
	'description'             => esc_html__( 'Horizontal separator line', 'startup-pro' ),
	'params'                  => array(
		array(
			'type'               => 'dropdown',
			'heading'            => esc_html__( 'Color', 'startup-pro' ),
			'param_name'         => 'color',
			'value'              => array_merge( startup_pro_getVcShared( 'colors' ), array( esc_html__( 'Custom color', 'startup-pro' ) => 'custom' ) ),
			'std'                => 'grey',
			'description'        => esc_html__( 'Separator color.', 'startup-pro' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Custom Border Color', 'startup-pro' ),
			'param_name'  => 'accent_color',
			'description' => esc_html__( 'Select border color for your element.', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'color',
				'value'   => array( 'custom' )
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Style', 'startup-pro' ),
			'param_name'  => 'style',
			'value'       => startup_pro_getVcShared( 'separator styles' ),
			'description' => esc_html__( 'Separator style.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Element width', 'startup-pro' ),
			'param_name'  => 'el_width',
			'value'       => startup_pro_getVcShared( 'separator widths' ),
			'description' => esc_html__( 'Separator element width in percents.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// VC Text separator
// ==========================================================================================
vc_map( array(
	'name'        => esc_html__( 'Separator with Text', 'startup-pro' ),
	'base'        => 'vc_text_separator',
	'icon'        => 'icon-wpb-ui-separator-label',
	'category'    => esc_html__( 'Content', 'startup-pro' ),
	'description' => esc_html__( 'Horizontal separator line with heading', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Title', 'startup-pro' ),
			'param_name'  => 'title',
			'holder'      => 'div',
			'value'       => esc_html__( 'Title', 'startup-pro' ),
			'description' => esc_html__( 'Separator title.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Title position', 'startup-pro' ),
			'param_name'  => 'title_align',
			'value'       => array(
				esc_html__( 'Align center', 'startup-pro' ) => 'separator_align_center',
				esc_html__( 'Align left', 'startup-pro' )   => 'separator_align_left',
				esc_html__( 'Align right', 'startup-pro' )  => "separator_align_right"
			),
			'description' => esc_html__( 'Select title location.', 'startup-pro' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Separator alignment', 'startup-pro' ),
			'param_name' => 'align',
			'value' => array(
				esc_html__( 'Center', 'startup-pro' ) => 'align_center',
				esc_html__( 'Left', 'startup-pro' ) => 'align_left',
				esc_html__( 'Right', 'startup-pro' ) => "align_right"
			),
			'description' => esc_html__( 'Select separator alignment.', 'startup-pro' )
		),
		array(
			'type'               => 'dropdown',
			'heading'            => esc_html__( 'Color', 'startup-pro' ),
			'param_name'         => 'color',
			'value'              => array_merge( startup_pro_getVcShared( 'colors' ), array( esc_html__( 'Custom color', 'startup-pro' ) => 'custom' ) ),
			'std'                => 'grey',
			'description'        => esc_html__( 'Separator color.', 'startup-pro' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Custom Color', 'startup-pro' ),
			'param_name'  => 'accent_color',
			'description' => esc_html__( 'Custom separator color for your element.', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'color',
				'value'   => array( 'custom' )
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Style', 'startup-pro' ),
			'param_name'  => 'style',
			'value'       => startup_pro_getVcShared( 'separator styles' ),
			'description' => esc_html__( 'Separator style.', 'startup-pro' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Border width', 'startup-pro' ),
			'param_name' => 'border_width',
			'value' => startup_pro_getVcShared( 'separator border widths' ),
			'description' => esc_html__( 'Select border width (pixels).', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Element width', 'startup-pro' ),
			'param_name'  => 'el_width',
			'value'       => startup_pro_getVcShared( 'separator widths' ),
			'description' => esc_html__( 'Separator element width in percents.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		),
		array(
			'type' => 'hidden',
			'param_name' => 'layout',
			'value' => 'separator_with_text',
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'startup-pro' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'startup-pro' )
		)
	),
	'js_view'     => 'VcTextSeparatorView'
) );
// ==========================================================================================
// VC Message box
// ==========================================================================================
vc_map( array(
	'name'          => esc_html__( 'Message Box', 'startup-pro' ),
	'base'          => 'vc_message',
	'icon'          => 'icon-wpb-information-white',
	'wrapper_class' => 'alert',
	'category'      => esc_html__( 'Content', 'startup-pro' ),
	'description'   => esc_html__( 'Notification box', 'startup-pro' ),
	'params'        => array(
		array(
			'type'               => 'dropdown',
			'heading'            => esc_html__( 'Message box type', 'startup-pro' ),
			'param_name'         => 'color',
			'value'              => array(
				esc_html__( 'Informational', 'startup-pro' ) => 'alert-info',
				esc_html__( 'Warning', 'startup-pro' )       => 'alert-warning',
				esc_html__( 'Success', 'startup-pro' )       => 'alert-success',
				esc_html__( 'Error', 'startup-pro' )         => "alert-danger"
			),
			'description'        => esc_html__( 'Select message type.', 'startup-pro' ),
			'param_holder_class' => 'vc_message-type'
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Style', 'startup-pro' ),
			'param_name'  => 'style',
			'value'       => startup_pro_getVcShared( 'alert styles' ),
			'description' => esc_html__( 'Alert style.', 'startup-pro' )
		),
		array(
			'type'       => 'textarea_html',
			'holder'     => 'div',
			'class'      => 'messagebox_text',
			'heading'    => esc_html__( 'Message text', 'startup-pro' ),
			'param_name' => 'content',
			'value'      => esc_html__( '<p>I am message box. Click edit button to change this text.</p>', 'startup-pro' )
		),
		$add_css_animation,
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	),
	'js_view'       => 'VcMessageView'
) );
// ==========================================================================================
// VC Facebook like
// ==========================================================================================
vc_map( array(
	'name'        => esc_html__( 'Facebook Like', 'startup-pro' ),
	'base'        => 'vc_facebook',
	'icon'        => 'icon-wpb-balloon-facebook-left',
	'category'    => esc_html__( 'Social', 'startup-pro' ),
	'description' => esc_html__( 'Facebook like button', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Button type', 'startup-pro' ),
			'param_name'  => 'type',
			'admin_label' => true,
			'value'       => array(
				esc_html__( 'Standard', 'startup-pro' )     => 'standard',
				esc_html__( 'Button count', 'startup-pro' ) => 'button_count',
				esc_html__( 'Box count', 'startup-pro' )    => 'box_count'
			),
			'description' => esc_html__( 'Select button type.', 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// VC Tweetmeme button
// ==========================================================================================
vc_map( array(
	'name'        => esc_html__( 'Tweetmeme Button', 'startup-pro' ),
	'base'        => 'vc_tweetmeme',
	'icon'        => 'icon-wpb-tweetme',
	'category'    => esc_html__( 'Social', 'startup-pro' ),
	'description' => esc_html__( 'Share on twitter button', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Button type', 'startup-pro' ),
			'param_name'  => 'type',
			'admin_label' => true,
			'value'       => array(
				esc_html__( 'Horizontal', 'startup-pro' ) => 'horizontal',
				esc_html__( 'Vertical', 'startup-pro' )   => 'vertical',
				esc_html__( 'None', 'startup-pro' )       => 'none'
			),
			'description' => esc_html__( 'Select button type.', 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// VC Google+ button
// ==========================================================================================
vc_map( array(
	'name'        => esc_html__( 'Google+ Button', 'startup-pro' ),
	'base'        => 'vc_googleplus',
	'icon'        => 'icon-wpb-application-plus',
	'category'    => esc_html__( 'Social', 'startup-pro' ),
	'description' => esc_html__( 'Recommend on Google', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Button size', 'startup-pro' ),
			'param_name'  => 'type',
			'admin_label' => true,
			'value'       => array(
				esc_html__( 'Standard', 'startup-pro' ) => '',
				esc_html__( 'Small', 'startup-pro' )    => 'small',
				esc_html__( 'Medium', 'startup-pro' )   => 'medium',
				esc_html__( 'Tall', 'startup-pro' )     => 'tall'
			),
			'description' => esc_html__( 'Select button size.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Annotation', 'startup-pro' ),
			'param_name'  => 'annotation',
			'admin_label' => true,
			'value'       => array(
				esc_html__( 'Inline', 'startup-pro' ) => 'inline',
				esc_html__( 'Bubble', 'startup-pro' ) => '',
				esc_html__( 'None', 'startup-pro' )   => 'none'
			),
			'description' => esc_html__( 'Select type of annotation', 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// VC Pinterest
// ==========================================================================================
vc_map( array(
	'name'        => esc_html__( 'Pinterest', 'startup-pro' ),
	'base'        => 'vc_pinterest',
	'icon'        => 'icon-wpb-pinterest',
	'category'    => esc_html__( 'Social', 'startup-pro' ),
	'description' => esc_html__( 'Pinterest button', 'startup-pro' ),
	"params"      => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Button layout', 'startup-pro' ),
			'param_name'  => 'type',
			'admin_label' => true,
			'value'       => array(
				esc_html__( 'Horizontal', 'startup-pro' ) => '',
				esc_html__( 'Vertical', 'startup-pro' )   => 'vertical',
				esc_html__( 'No count', 'startup-pro' )   => 'none'
			),
			'description' => esc_html__( 'Select button layout.', 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// VC Single image
// ==========================================================================================
vc_map( array(
	'name'        => esc_html__( 'Single Image', 'startup-pro' ),
	'base'        => 'vc_single_image',
	'icon'        => 'icon-wpb-single-image',
	'category'    => esc_html__( 'Content', 'startup-pro' ),
	'description' => esc_html__( 'Simple image with CSS animation', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Image source', 'startup-pro' ),
			'param_name'  => 'source',
			'value'       => array(
				esc_html__( 'Media library', 'startup-pro' )  => 'media_library',
				esc_html__( 'External link', 'startup-pro' )  => 'external_link',
				esc_html__( 'Featured Image', 'startup-pro' ) => 'featured_image'
			),
			'std'         => 'media_library',
			'description' => esc_html__( 'Select image source.', 'startup-pro' )
		),
		array(
			'type'        => 'attach_image',
			'heading'     => esc_html__( 'Image', 'startup-pro' ),
			'param_name'  => 'image',
			'value'       => '',
			'description' => esc_html__( 'Select image from media library.', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'source',
				'value'   => 'media_library'
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'External link', 'startup-pro' ),
			'param_name'  => 'custom_src',
			'description' => esc_html__( 'Select external link.', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'source',
				'value'   => 'external_link'
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Image size', 'startup-pro' ),
			'param_name'  => 'img_size',
			'value'       => 'thumbnail',
			'description' => esc_html__( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)).', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'source',
				'value'   => array( 'media_library', 'featured_image' )
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Image size', 'startup-pro' ),
			'param_name'  => 'external_img_size',
			'value'       => '',
			'description' => esc_html__( 'Enter image size in pixels. Example: 200x100 (Width x Height).', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'source',
				'value'   => 'external_link'
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Caption', 'startup-pro' ),
			'param_name'  => 'caption',
			'description' => esc_html__( 'Enter text for image caption.', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'source',
				'value'   => 'external_link'
			),
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Add caption?', 'startup-pro' ),
			'param_name'  => 'add_caption',
			'description' => esc_html__( 'Add image caption.', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes', 'startup-pro' ) => 'yes' ),
			'dependency'  => array(
				'element' => 'source',
				'value'   => array( 'media_library', 'featured_image' )
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Image alignment', 'startup-pro' ),
			'param_name'  => 'alignment',
			'value'       => array(
				esc_html__( 'Left', 'startup-pro' )   => 'left',
				esc_html__( 'Right', 'startup-pro' )  => 'right',
				esc_html__( 'Center', 'startup-pro' ) => 'center'
			),
			'description' => esc_html__( 'Select image alignment.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Image style', 'startup-pro' ),
			'param_name'  => 'style',
			'value'       => startup_pro_getVcShared( 'single image styles' ),
			'description' => esc_html__( 'Select image display style.', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'source',
				'value'   => array( 'media_library', 'featured_image' )
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Image style', 'startup-pro' ),
			'param_name'  => 'external_style',
			'value'       => startup_pro_getVcShared( 'single image external styles' ),
			'description' => esc_html__( 'Select image display style.', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'source',
				'value'   => 'external_link'
			),
		),
		array(
			'type'               => 'dropdown',
			'heading'            => esc_html__( 'Border color', 'startup-pro' ),
			'param_name'         => 'border_color',
			'value'              => startup_pro_getVcShared( 'colors' ),
			'std'                => 'grey',
			'dependency'         => array(
				'element' => 'style',
				'value'   => array( 'vc_box_border', 'vc_box_border_circle', 'vc_box_outline', 'vc_box_outline_circle' )
			),
			'description'        => esc_html__( 'Border color.', 'startup-pro' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'On click action', 'startup-pro' ),
			'param_name'  => 'onclick',
			'value'       => array(
				esc_html__( 'None', 'startup-pro' )                => '',
				esc_html__( 'Link to large image', 'startup-pro' ) => 'img_link_large',
				esc_html__( 'Open prettyPhoto', 'startup-pro' )    => 'link_image',
				esc_html__( 'Open custom link', 'startup-pro' )    => 'custom_link',
				esc_html__( 'Zoom', 'startup-pro' )                => 'zoom',
			),
			'description' => esc_html__( 'Select action for click action.', 'startup-pro' ),
			'std'         => ''
		),
		array(
			'type'        => 'href',
			'heading'     => esc_html__( 'Image link', 'startup-pro' ),
			'param_name'  => 'link',
			'description' => esc_html__( 'Enter URL if you want this image to have a link (Note: parameters like "mailto:" are also accepted).', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'onclick',
				'value'   => 'custom_link',
			)
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Link Target', 'startup-pro' ),
			'param_name' => 'img_link_target',
			'value'      => $target_arr,
			'dependency' => array(
				'element' => 'onclick',
				'value'   => array( 'custom_link', 'img_link_large' ),
			),
		),
		$add_css_animation,
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'startup-pro' )
		),
		array(
			'type'       => 'css_editor',
			'heading'    => esc_html__( 'CSS box', 'startup-pro' ),
			'param_name' => 'css',
			'group'      => esc_html__( 'Design Options', 'startup-pro' )
		),
		// backward compatibility. since 4.6
		array(
			'type'       => 'hidden',
			'param_name' => 'img_link_large'
		)
	)
) );
// ==========================================================================================
// ==========================================================================================
// VC Image Carousel
// ==========================================================================================
vc_map( array(
	'name'        => esc_html__( 'Image Carousel', 'startup-pro' ),
	'base'        => 'vc_images_carousel',
	'icon'        => 'icon-wpb-images-carousel',
	'category'    => esc_html__( 'Content', 'startup-pro' ),
	'description' => esc_html__( 'Animated carousel with images', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'startup-pro' )
		),
		array(
			'type'        => 'attach_images',
			'heading'     => esc_html__( 'Images', 'startup-pro' ),
			'param_name'  => 'images',
			'value'       => '',
			'description' => esc_html__( 'Select images from media library.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Image size', 'startup-pro' ),
			'param_name'  => 'img_size',
			'description' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'On click', 'startup-pro' ),
			'param_name'  => 'onclick',
			'value'       => array(
				esc_html__( 'Open prettyPhoto', 'startup-pro' ) => 'link_image',
				esc_html__( 'Do nothing', 'startup-pro' )       => 'link_no',
				esc_html__( 'Open custom link', 'startup-pro' ) => 'custom_link'
			),
			'description' => esc_html__( 'What to do when slide is clicked?', 'startup-pro' )
		),
		array(
			'type'        => 'exploded_textarea',
			'heading'     => esc_html__( 'Custom links', 'startup-pro' ),
			'param_name'  => 'custom_links',
			'description' => esc_html__( 'Enter links for each slide here. Divide links with linebreaks (Enter) . ', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'onclick',
				'value'   => array( 'custom_link' )
			)
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Custom link target', 'startup-pro' ),
			'param_name'  => 'custom_links_target',
			'description' => esc_html__( 'Select where to open  custom links.', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'onclick',
				'value'   => array( 'custom_link' )
			),
			'value'       => $target_arr
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Slider mode', 'startup-pro' ),
			'param_name'  => 'mode',
			'value'       => array(
				esc_html__( 'Horizontal', 'startup-pro' ) => 'horizontal',
				esc_html__( 'Vertical', 'startup-pro' )   => 'vertical'
			),
			'description' => esc_html__( 'Slides will be positioned horizontally (for horizontal swipes) or vertically (for vertical swipes)', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Slider speed', 'startup-pro' ),
			'param_name'  => 'speed',
			'value'       => '5000',
			'description' => esc_html__( 'Duration of animation between slides (in ms)', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Slides per view', 'startup-pro' ),
			'param_name'  => 'slides_per_view',
			'value'       => '1',
			'description' => esc_html__( 'Set numbers of slides you want to display at the same time on slider\'s container for carousel mode. Supports also "auto" value, in this case it will fit slides depending on container\'s width. "auto" mode isn\'t compatible with loop mode.', 'startup-pro' )
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Slider autoplay', 'startup-pro' ),
			'param_name'  => 'autoplay',
			'description' => esc_html__( 'Enables autoplay mode.', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => 'yes' )
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Hide pagination control', 'startup-pro' ),
			'param_name'  => 'hide_pagination_control',
			'description' => esc_html__( 'If YES pagination control will be removed.', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => 'yes' )
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Hide prev/next buttons', 'startup-pro' ),
			'param_name'  => 'hide_prev_next_buttons',
			'description' => esc_html__( 'If "YES" prev/next control will be removed.', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => 'yes' )
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Partial view', 'startup-pro' ),
			'param_name'  => 'partial_view',
			'description' => esc_html__( 'If "YES" part of the next slide will be visible on the right side.', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => 'yes' )
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Slider loop', 'startup-pro' ),
			'param_name'  => 'wrap',
			'description' => esc_html__( 'Enables loop mode.', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => 'yes' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// VC Tab
// ==========================================================================================
vc_map( array(
	'name'                      => 'Tab',
	'base'                      => 'vc_tab',
	'allowed_container_element' => 'vc_row',
	'is_container'              => true,
	'content_element'           => false,
	'params'                    => array(
		array(
			'type'       => 'tab_id',
			'heading'    => 'Tab Unique ID',
			'param_name' => 'tab_id'
		),
		array(
			'type'       => 'textfield',
			'heading'    => 'Tab Title',
			'param_name' => 'title',
		),
		array(
			'type'       => 'vc_startup_pro_icon',
			'heading'    => 'Tab Icon',
			'param_name' => 'icon',
		),
	),
	'js_view'                   => 'VcTabView'
) );
// ==========================================================================================
// VC Teaser Grid
// ==========================================================================================
//* @deprecated please use vc_posts_grid
vc_map( array(
	'name'            => esc_html__( 'Teaser (posts) Grid', 'startup-pro' ),
	'base'            => 'vc_teaser_grid',
	'content_element' => false,
	'icon'            => 'icon-wpb-application-icon-large',
	'category'        => esc_html__( 'Content', 'startup-pro' ),
	'params'          => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Columns count', 'startup-pro' ),
			'param_name'  => 'grid_columns_count',
			'value'       => array( 4, 3, 2, 1 ),
			'admin_label' => true,
			'description' => esc_html__( 'Select columns count.', 'startup-pro' )
		),
		array(
			'type'        => 'posttypes',
			'heading'     => esc_html__( 'Post types', 'startup-pro' ),
			'param_name'  => 'grid_posttypes',
			'description' => esc_html__( 'Select post types to populate posts from.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Teasers count', 'startup-pro' ),
			'param_name'  => 'grid_teasers_count',
			'description' => esc_html__( 'How many teasers to show? Enter number or word "All".', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Content', 'startup-pro' ),
			'param_name'  => 'grid_content',
			'value'       => array(
				esc_html__( 'Teaser (Excerpt)', 'startup-pro' ) => 'teaser',
				esc_html__( 'Full Content', 'startup-pro' )     => 'content'
			),
			'description' => esc_html__( 'Teaser layout template.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Layout', 'startup-pro' ),
			'param_name'  => 'grid_layout',
			'value'       => array(
				esc_html__( 'Title + Thumbnail + Text', 'startup-pro' ) => 'title_thumbnail_text',
				esc_html__( 'Thumbnail + Title + Text', 'startup-pro' ) => 'thumbnail_title_text',
				esc_html__( 'Thumbnail + Text', 'startup-pro' )         => 'thumbnail_text',
				esc_html__( 'Thumbnail + Title', 'startup-pro' )        => 'thumbnail_title',
				esc_html__( 'Thumbnail only', 'startup-pro' )           => 'thumbnail',
				esc_html__( 'Title + Text', 'startup-pro' )             => 'title_text'
			),
			'description' => esc_html__( 'Teaser layout.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Link', 'startup-pro' ),
			'param_name'  => 'grid_link',
			'value'       => array(
				esc_html__( 'Link to post', 'startup-pro' )                             => 'link_post',
				esc_html__( 'Link to bigger image', 'startup-pro' )                     => 'link_image',
				esc_html__( 'Thumbnail to bigger image, title to post', 'startup-pro' ) => 'link_image_post',
				esc_html__( 'No link', 'startup-pro' )                                  => 'link_no'
			),
			'description' => esc_html__( 'Link type.', 'startup-pro' )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Link target', 'startup-pro' ),
			'param_name' => 'grid_link_target',
			'value'      => $target_arr,
			'dependency' => array(
				'element' => 'grid_link',
				'value'   => array( 'link_post', 'link_image_post' )
			)
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Teaser grid layout', 'startup-pro' ),
			'param_name'  => 'grid_template',
			'value'       => array(
				esc_html__( 'Grid', 'startup-pro' )             => 'grid',
				esc_html__( 'Grid with filter', 'startup-pro' ) => 'filtered_grid',
				esc_html__( 'Carousel', 'startup-pro' )         => 'carousel'
			),
			'description' => esc_html__( 'Teaser layout template.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Layout mode', 'startup-pro' ),
			'param_name'  => 'grid_layout_mode',
			'value'       => array(
				esc_html__( 'Fit rows', 'startup-pro' ) => 'fitRows',
				esc_html__( 'Masonry', 'startup-pro' )  => 'masonry'
			),
			'dependency'  => array(
				'element' => 'grid_template',
				'value'   => array( 'filtered_grid', 'grid' )
			),
			'description' => esc_html__( 'Teaser layout template.', 'startup-pro' )
		),
		array(
			'type'        => 'taxonomies',
			'heading'     => esc_html__( 'Taxonomies', 'startup-pro' ),
			'param_name'  => 'grid_taxomonies',
			'dependency'  => array(
				'element'  => 'grid_template',
				// 'not_empty' => true,
				'value'    => array( 'filtered_grid' ),
				'callback' => 'wpb_grid_post_types_for_taxonomies_handler'
			),
			'description' => esc_html__( 'Select taxonomies.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Thumbnail size', 'startup-pro' ),
			'param_name'  => 'grid_thumb_size',
			'description' => esc_html__( 'Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height) . ', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Post/Page IDs', 'startup-pro' ),
			'param_name'  => 'posts_in',
			'description' => esc_html__( 'Fill this field with page/posts IDs separated by commas (,) to retrieve only them. Use this in conjunction with "Post types" field.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Exclude Post/Page IDs', 'startup-pro' ),
			'param_name'  => 'posts_not_in',
			'description' => esc_html__( 'Fill this field with page/posts IDs separated by commas (,) to exclude them from query.', 'startup-pro' )
		),
		array(
			'type'        => 'exploded_textarea',
			'heading'     => esc_html__( 'Categories', 'startup-pro' ),
			'param_name'  => 'grid_categories',
			'description' => esc_html__( 'If you want to narrow output, enter category names here. Note: Only listed categories will be included. Divide categories with linebreaks (Enter) . ', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Order by', 'startup-pro' ),
			'param_name'  => 'orderby',
			'value'       => array(
				'',
				esc_html__( 'Date', 'startup-pro' )          => 'date',
				esc_html__( 'ID', 'startup-pro' )            => 'ID',
				esc_html__( 'Author', 'startup-pro' )        => 'author',
				esc_html__( 'Title', 'startup-pro' )         => 'title',
				esc_html__( 'Modified', 'startup-pro' )      => 'modified',
				esc_html__( 'Random', 'startup-pro' )        => 'rand',
				esc_html__( 'Comment count', 'startup-pro' ) => 'comment_count',
				esc_html__( 'Menu order', 'startup-pro' )    => 'menu_order'
			),
			'description' => sprintf( esc_html__( 'Select how to sort retrieved posts. More at %s.', 'startup-pro' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Order way', 'startup-pro' ),
			'param_name'  => 'order',
			'value'       => array(
				esc_html__( 'Descending', 'startup-pro' ) => 'DESC',
				esc_html__( 'Ascending', 'startup-pro' )  => 'ASC'
			),
			'description' => sprintf( esc_html__( 'Designates the ascending or descending order. More at %s.', 'startup-pro' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
$vc_layout_sub_controls = array(
	array( 'link_post', esc_html__( 'Link to post', 'startup-pro' ) ),
	array( 'no_link', esc_html__( 'No link', 'startup-pro' ) ),
	array( 'link_image', esc_html__( 'Link to bigger image', 'startup-pro' ) )
);
// ==========================================================================================
// VC Teaser Grid
// ==========================================================================================
vc_map( array(
	'name'        => esc_html__( 'Posts Grid', 'startup-pro' ),
	'base'        => 'vc_posts_grid',
	'icon'        => 'icon-wpb-application-icon-large',
	'description' => esc_html__( 'Posts in grid view', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'startup-pro' )
		),
		array(
			'type'        => 'loop',
			'heading'     => esc_html__( 'Grids content', 'startup-pro' ),
			'param_name'  => 'loop',
			'settings'    => array(
				'size'     => array( 'hidden' => false, 'value' => 10 ),
				'order_by' => array( 'value' => 'date' ),
			),
			'description' => esc_html__( 'Create WordPress loop, to populate content from your site.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Columns count', 'startup-pro' ),
			'param_name'  => 'grid_columns_count',
			'value'       => array( 6, 4, 3, 2, 1 ),
			'std'         => 3,
			'admin_label' => true,
			'description' => esc_html__( 'Select columns count.', 'startup-pro' )
		),
		array(
			'type'        => 'sorted_list',
			'heading'     => esc_html__( 'Teaser layout', 'startup-pro' ),
			'param_name'  => 'grid_layout',
			'description' => esc_html__( 'Control teasers look. Enable blocks and place them in desired order. Note: This setting can be overrriden on post to post basis.', 'startup-pro' ),
			'value'       => 'title,image,text',
			'options'     => array(
				array( 'image', esc_html__( 'Thumbnail', 'startup-pro' ), $vc_layout_sub_controls ),
				array( 'title', esc_html__( 'Title', 'startup-pro' ), $vc_layout_sub_controls ),
				array(
					'text',
					esc_html__( 'Text', 'startup-pro' ),
					array(
						array( 'excerpt', esc_html__( 'Teaser/Excerpt', 'startup-pro' ) ),
						array( 'text', esc_html__( 'Full content', 'startup-pro' ) )
					)
				),
				array( 'link', esc_html__( 'Read more link', 'startup-pro' ) )
			)
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Link target', 'startup-pro' ),
			'param_name' => 'grid_link_target',
			'value'      => $target_arr,
			
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Show filter', 'startup-pro' ),
			'param_name'  => 'filter',
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => 'yes' ),
			'description' => esc_html__( 'Select to add animated category filter to your posts grid.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Layout mode', 'startup-pro' ),
			'param_name'  => 'grid_layout_mode',
			'value'       => array(
				esc_html__( 'Fit rows', 'startup-pro' ) => 'fitRows',
				esc_html__( 'Masonry', 'startup-pro' )  => 'masonry'
			),
			'description' => esc_html__( 'Teaser layout template.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Thumbnail size', 'startup-pro' ),
			'param_name'  => 'grid_thumb_size',
			'description' => esc_html__( 'Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height) . ', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
/* Post Carousel
---------------------------------------------------------- */
vc_map( array(
	'name'        => esc_html__( 'Post Carousel', 'startup-pro' ),
	'base'        => 'vc_carousel',
	'class'       => '',
	'icon'        => 'icon-wpb-vc_carousel',
	'category'    => esc_html__( 'Content', 'startup-pro' ),
	'description' => esc_html__( 'Animated carousel with posts', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'startup-pro' )
		),
		array(
			'type'        => 'loop',
			'heading'     => esc_html__( 'Carousel content', 'startup-pro' ),
			'param_name'  => 'posts_query',
			'settings'    => array(
				'size'     => array( 'hidden' => false, 'value' => 10 ),
				'order_by' => array( 'value' => 'date' )
			),
			'description' => esc_html__( 'Create WordPress loop, to populate content from your site.', 'startup-pro' )
		),
		array(
			'type'        => 'sorted_list',
			'heading'     => esc_html__( 'Teaser layout', 'startup-pro' ),
			'param_name'  => 'layout',
			'description' => esc_html__( 'Control teasers look. Enable blocks and place them in desired order. Note: This setting can be overrriden on post to post basis.', 'startup-pro' ),
			'value'       => 'title,image,text',
			'options'     => array(
				array( 'image', esc_html__( 'Thumbnail', 'startup-pro' ), $vc_layout_sub_controls ),
				array( 'title', esc_html__( 'Title', 'startup-pro' ), $vc_layout_sub_controls ),
				array(
					'text',
					esc_html__( 'Text', 'startup-pro' ),
					array(
						array( 'excerpt', esc_html__( 'Teaser/Excerpt', 'startup-pro' ) ),
						array( 'text', esc_html__( 'Full content', 'startup-pro' ) )
					)
				),
				array( 'link', esc_html__( 'Read more link', 'startup-pro' ) )
			)
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Link target', 'startup-pro' ),
			'param_name' => 'link_target',
			'value'      => $target_arr,
			
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Thumbnail size', 'startup-pro' ),
			'param_name'  => 'thumb_size',
			'description' => esc_html__( 'Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height) . ', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Slider speed', 'startup-pro' ),
			'param_name'  => 'speed',
			'value'       => '5000',
			'description' => esc_html__( 'Duration of animation between slides (in ms)', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Slider mode', 'startup-pro' ),
			'param_name'  => 'mode',
			'value'       => array(
				esc_html__( 'Horizontal', 'startup-pro' ) => 'horizontal',
				esc_html__( 'Vertical', 'startup-pro' )   => 'vertical'
			),
			'description' => esc_html__( 'Slides will be positioned horizontally (for horizontal swipes) or vertically (for vertical swipes)', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Slides per view', 'startup-pro' ),
			'param_name'  => 'slides_per_view',
			'value'       => '1',
			'description' => esc_html__( 'Set numbers of slides you want to display at the same time on slider\'s container for carousel mode. Also supports for "auto" value, in this case it will fit slides depending on container\'s width. "auto" mode doesn\'t compatible with loop mode.', 'startup-pro' )
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Slider autoplay', 'startup-pro' ),
			'param_name'  => 'autoplay',
			'description' => esc_html__( 'Enables autoplay mode.', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => 'yes' )
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Hide pagination control', 'startup-pro' ),
			'param_name'  => 'hide_pagination_control',
			'description' => esc_html__( 'If "YES" pagination control will be removed', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => 'yes' )
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Hide prev/next buttons', 'startup-pro' ),
			'param_name'  => 'hide_prev_next_buttons',
			'description' => esc_html__( 'If "YES" prev/next control will be removed', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => 'yes' )
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Partial view', 'startup-pro' ),
			'param_name'  => 'partial_view',
			'description' => esc_html__( 'If "YES" part of the next slide will be visible on the right side', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => 'yes' )
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Slider loop', 'startup-pro' ),
			'param_name'  => 'wrap',
			'description' => esc_html__( 'Enables loop mode.', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => 'yes' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
// ==========================================================================================
// SMART FAQ
// ==========================================================================================
$faq_unique_id_1 = time() . '-1-' . rand( 0, 100 );
$faq_unique_id_2 = time() . '-2-' . rand( 0, 100 );
$faq_unique_id_3 = time() . '-3-' . rand( 0, 100 );
vc_map( array(
  'name'                    => 'FAQ',
  'base'                    => 'smart_faq',
  'icon'                    => 'fa fa-question-circle',
  'description'             => 'Create a faq',
  'class'                   => 'wpb_vc_tabs',
  'is_container'            => true,
  'show_settings_on_create' => false,
  'category'                => 'Theme shortcodes',
  'params'                  => $vc_map_defaults,
  'custom_markup'           => '<div class="wpb_tabs_holder wpb_holder vc_container_for_children"><ul class="tabs_controls"></ul>%content%</div>',
  'default_content'         => '
    [smart_faq_block title="FAQ 1" tab_id="' . $faq_unique_id_1 . '"][vc_toggle title="Question"]Answer[/vc_toggle][/smart_faq_block]
    [smart_faq_block title="FAQ 2" tab_id="' . $faq_unique_id_2 . '"][vc_toggle title="Question"]Answer[/vc_toggle][/smart_faq_block]
    [smart_faq_block title="FAQ 3" tab_id="' . $faq_unique_id_3 . '"][vc_toggle title="Question"]Answer[/vc_toggle][/smart_faq_block]',
  'js_view'                 => 'SMARTFAQSView'
) );
// ==========================================================================================
// SMART FAQ BLOCK
// ==========================================================================================
vc_map( array(
  'name'                      => 'FAQ Block',
  'base'                      => 'smart_faq_block',
  'allowed_container_element' => 'vc_row',
  'as_parent'                 => array('only' => 'vc_toggle'),
  'is_container'              => true,
  'content_element'           => false,
  'category'                  => 'Route Theme',
  'params'                    => array(
    array(
      'type'                  => 'tab_id',
      'heading'               => 'Tab Unique ID',
      'param_name'            => 'tab_id'
    ),
    array(
      'type'                  => 'textfield',
      'heading'               => 'Title',
      'param_name'            => 'title',
    ),
  ),
  'js_view'                   => 'SMARTFAQView'
) );
/* Posts slider
---------------------------------------------------------- */
vc_map( array(
	'name'        => esc_html__( 'Posts Slider', 'startup-pro' ),
	'base'        => 'vc_posts_slider',
	'icon'        => 'icon-wpb-slideshow',
	'category'    => esc_html__( 'Content', 'startup-pro' ),
	'description' => esc_html__( 'Slider with WP Posts', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Slider type', 'startup-pro' ),
			'param_name'  => 'type',
			'admin_label' => true,
			'value'       => array(
				esc_html__( 'Flex slider fade', 'startup-pro' )  => 'flexslider_fade',
				esc_html__( 'Flex slider slide', 'startup-pro' ) => 'flexslider_slide',
				esc_html__( 'Nivo slider', 'startup-pro' )       => 'nivo'
			),
			'description' => esc_html__( 'Select slider type.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Slides count', 'startup-pro' ),
			'param_name'  => 'count',
			'description' => esc_html__( 'How many slides to show? Enter number or word "All".', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Auto rotate slides', 'startup-pro' ),
			'param_name'  => 'interval',
			'value'       => array( 3, 5, 10, 15, esc_html__( 'Disable', 'startup-pro' ) => 0 ),
			'description' => esc_html__( 'Auto rotate slides each X seconds.', 'startup-pro' )
		),
		array(
			'type'        => 'posttypes',
			'heading'     => esc_html__( 'Post types', 'startup-pro' ),
			'param_name'  => 'posttypes',
			'description' => esc_html__( 'Select post types to populate posts from.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Description', 'startup-pro' ),
			'param_name'  => 'slides_content',
			'value'       => array(
				esc_html__( 'No description', 'startup-pro' )   => '',
				esc_html__( 'Teaser (Excerpt)', 'startup-pro' ) => 'teaser'
			),
			'description' => esc_html__( 'Some sliders support description text, what content use for it?', 'startup-pro' ),
			'dependency'  => array(
				'element' => 'type',
				'value'   => array( 'flexslider_fade', 'flexslider_slide' )
			),
		),
		array(
			'type'        => 'checkbox',
			'heading'     => esc_html__( 'Output post title?', 'startup-pro' ),
			'param_name'  => 'slides_title',
			'description' => esc_html__( 'If selected, title will be printed before the teaser text.', 'startup-pro' ),
			'value'       => array( esc_html__( 'Yes, please', 'startup-pro' ) => true ),
			'dependency'  => array(
				'element' => 'slides_content',
				'value'   => array( 'teaser' )
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Link', 'startup-pro' ),
			'param_name'  => 'link',
			'value'       => array(
				esc_html__( 'Link to post', 'startup-pro' )         => 'link_post',
				esc_html__( 'Link to bigger image', 'startup-pro' ) => 'link_image',
				esc_html__( 'Open custom link', 'startup-pro' )     => 'custom_link',
				esc_html__( 'No link', 'startup-pro' )              => 'link_no'
			),
			'description' => esc_html__( 'Link type.', 'startup-pro' )
		),
		array(
			'type'        => 'exploded_textarea',
			'heading'     => esc_html__( 'Custom links', 'startup-pro' ),
			'param_name'  => 'custom_links',
			'dependency'  => array( 'element' => 'link', 'value' => 'custom_link' ),
			'description' => esc_html__( 'Enter links for each slide here. Divide links with linebreaks (Enter).', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Thumbnail size', 'startup-pro' ),
			'param_name'  => 'thumb_size',
			'description' => esc_html__( 'Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height) . ', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Post/Page IDs', 'startup-pro' ),
			'param_name'  => 'posts_in',
			'description' => esc_html__( 'Fill this field with page/posts IDs separated by commas (,), to retrieve only them. Use this in conjunction with "Post types" field.', 'startup-pro' )
		),
		array(
			'type'        => 'exploded_textarea',
			'heading'     => esc_html__( 'Categories', 'startup-pro' ),
			'param_name'  => 'categories',
			'description' => esc_html__( 'If you want to narrow output, enter category names here. Note: Only listed categories will be included. Divide categories with linebreaks (Enter) . ', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Order by', 'startup-pro' ),
			'param_name'  => 'orderby',
			'value'       => array(
				'',
				esc_html__( 'Date', 'startup-pro' )          => 'date',
				esc_html__( 'ID', 'startup-pro' )            => 'ID',
				esc_html__( 'Author', 'startup-pro' )        => 'author',
				esc_html__( 'Title', 'startup-pro' )         => 'title',
				esc_html__( 'Modified', 'startup-pro' )      => 'modified',
				esc_html__( 'Random', 'startup-pro' )        => 'rand',
				esc_html__( 'Comment count', 'startup-pro' ) => 'comment_count',
				esc_html__( 'Menu order', 'startup-pro' )    => 'menu_order'
			),
			'description' => sprintf( esc_html__( 'Select how to sort retrieved posts. More at %s.', 'startup-pro' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Order by', 'startup-pro' ),
			'param_name'  => 'order',
			'value'       => array(
				esc_html__( 'Descending', 'startup-pro' ) => 'DESC',
				esc_html__( 'Ascending', 'startup-pro' )  => 'ASC'
			),
			'description' => sprintf( esc_html__( 'Designates the ascending or descending order. More at %s.', 'startup-pro' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
/* Widgetised sidebar
---------------------------------------------------------- */
vc_map( array(
	'name'        => esc_html__( 'Widgetised Sidebar', 'startup-pro' ),
	'base'        => 'vc_widget_sidebar',
	'class'       => 'wpb_widget_sidebar_widget',
	'icon'        => 'icon-wpb-layout_sidebar',
	'category'    => esc_html__( 'Structure', 'startup-pro' ),
	'description' => esc_html__( 'Place widgetised sidebar', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'startup-pro' )
		),
		array(
			'type'        => 'widgetised_sidebars',
			'heading'     => esc_html__( 'Sidebar', 'startup-pro' ),
			'param_name'  => 'sidebar_id',
			'description' => esc_html__( 'Select which widget area output.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
/* Button
---------------------------------------------------------- */
$icons_arr = array(
	esc_html__( 'None', 'startup-pro' )                     => 'none',
	esc_html__( 'Address book icon', 'startup-pro' )        => 'wpb_address_book',
	esc_html__( 'Alarm clock icon', 'startup-pro' )         => 'wpb_alarm_clock',
	esc_html__( 'Anchor icon', 'startup-pro' )              => 'wpb_anchor',
	esc_html__( 'Application Image icon', 'startup-pro' )   => 'wpb_application_image',
	esc_html__( 'Arrow icon', 'startup-pro' )               => 'wpb_arrow',
	esc_html__( 'Asterisk icon', 'startup-pro' )            => 'wpb_asterisk',
	esc_html__( 'Hammer icon', 'startup-pro' )              => 'wpb_hammer',
	esc_html__( 'Balloon icon', 'startup-pro' )             => 'wpb_balloon',
	esc_html__( 'Balloon Buzz icon', 'startup-pro' )        => 'wpb_balloon_buzz',
	esc_html__( 'Balloon Facebook icon', 'startup-pro' )    => 'wpb_balloon_facebook',
	esc_html__( 'Balloon Twitter icon', 'startup-pro' )     => 'wpb_balloon_twitter',
	esc_html__( 'Battery icon', 'startup-pro' )             => 'wpb_battery',
	esc_html__( 'Binocular icon', 'startup-pro' )           => 'wpb_binocular',
	esc_html__( 'Document Excel icon', 'startup-pro' )      => 'wpb_document_excel',
	esc_html__( 'Document Image icon', 'startup-pro' )      => 'wpb_document_image',
	esc_html__( 'Document Music icon', 'startup-pro' )      => 'wpb_document_music',
	esc_html__( 'Document Office icon', 'startup-pro' )     => 'wpb_document_office',
	esc_html__( 'Document PDF icon', 'startup-pro' )        => 'wpb_document_pdf',
	esc_html__( 'Document Powerpoint icon', 'startup-pro' ) => 'wpb_document_powerpoint',
	esc_html__( 'Document Word icon', 'startup-pro' )       => 'wpb_document_word',
	esc_html__( 'Bookmark icon', 'startup-pro' )            => 'wpb_bookmark',
	esc_html__( 'Camcorder icon', 'startup-pro' )           => 'wpb_camcorder',
	esc_html__( 'Camera icon', 'startup-pro' )              => 'wpb_camera',
	esc_html__( 'Chart icon', 'startup-pro' )               => 'wpb_chart',
	esc_html__( 'Chart pie icon', 'startup-pro' )           => 'wpb_chart_pie',
	esc_html__( 'Clock icon', 'startup-pro' )               => 'wpb_clock',
	esc_html__( 'Fire icon', 'startup-pro' )                => 'wpb_fire',
	esc_html__( 'Heart icon', 'startup-pro' )               => 'wpb_heart',
	esc_html__( 'Mail icon', 'startup-pro' )                => 'wpb_mail',
	esc_html__( 'Play icon', 'startup-pro' )                => 'wpb_play',
	esc_html__( 'Shield icon', 'startup-pro' )              => 'wpb_shield',
	esc_html__( 'Video icon', 'startup-pro' )               => "wpb_video"
);
vc_map( array(
	'name'        => esc_html__( 'Button', 'startup-pro' ),
	'base'        => 'vc_button',
	'icon'        => 'icon-wpb-ui-button',
	'category'    => esc_html__( 'Content', 'startup-pro' ),
	'description' => esc_html__( 'Eye catching button', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Text on the button', 'startup-pro' ),
			'holder'      => 'button',
			'class'       => 'wpb_button',
			'param_name'  => 'title',
			'value'       => esc_html__( 'Text on the button', 'startup-pro' ),
			'description' => esc_html__( 'Text on the button.', 'startup-pro' )
		),
		array(
			'type'        => 'href',
			'heading'     => esc_html__( 'URL (Link)', 'startup-pro' ),
			'param_name'  => 'href',
			'description' => esc_html__( 'Button link.', 'startup-pro' )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Target', 'startup-pro' ),
			'param_name' => 'target',
			'value'      => $target_arr,
			'dependency' => array(
				'element'   => 'href',
				'not_empty' => true,
				'callback'  => 'vc_button_param_target_callback'
			)
		),
		array(
			'type'               => 'dropdown',
			'heading'            => esc_html__( 'Color', 'startup-pro' ),
			'param_name'         => 'color',
			'value'              => $colors_arr,
			'description'        => esc_html__( 'Button color.', 'startup-pro' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Icon', 'startup-pro' ),
			'param_name'  => 'icon',
			'value'       => $icons_arr,
			'description' => esc_html__( 'Button icon.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Size', 'startup-pro' ),
			'param_name'  => 'size',
			'value'       => $size_arr,
			'description' => esc_html__( 'Button size.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	),
	'js_view'     => 'VcButtonView'
) );
vc_map( array(
	'name'        => esc_html__( 'Button', 'startup-pro' ) . " 2",
	'base'        => 'vc_button2',
	'icon'        => 'icon-wpb-ui-button',
	'category'    => array(
		esc_html__( 'Content', 'startup-pro' )
	),
	'description' => esc_html__( 'Eye catching button', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'vc_link',
			'heading'     => esc_html__( 'URL (Link)', 'startup-pro' ),
			'param_name'  => 'link',
			'description' => esc_html__( 'Button link.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Text on the button', 'startup-pro' ),
			'holder'      => 'button',
			'class'       => 'vc_btn',
			'param_name'  => 'title',
			'value'       => esc_html__( 'Text on the button', 'startup-pro' ),
			'description' => esc_html__( 'Text on the button.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Style', 'startup-pro' ),
			'param_name'  => 'style',
			'value'       => startup_pro_getVcShared( 'button styles' ),
			'description' => esc_html__( 'Button style.', 'startup-pro' )
		),
		array(
			'type'               => 'dropdown',
			'heading'            => esc_html__( 'Color', 'startup-pro' ),
			'param_name'         => 'color',
			'value'              => startup_pro_getVcShared( 'colors' ),
			'description'        => esc_html__( 'Button color.', 'startup-pro' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		/*array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Icon', 'startup-pro' ),
        'param_name' => 'icon',
        'value' => startup_pro_getVcShared( 'icons' ),
        'description' => esc_html__( 'Button icon.', 'startup-pro' )
  ),*/
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Size', 'startup-pro' ),
			'param_name'  => 'size',
			'value'       => startup_pro_getVcShared( 'sizes' ),
			'std'         => 'md',
			'description' => esc_html__( 'Button size.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	),
	'js_view'     => 'VcButton2View'
) );
/* Call to Action Button
----------------------------------------------------------
vc_map( array(
	'name' => esc_html__( 'Call to Action Button', 'startup-pro' ),
	'base' => 'vc_cta_button',
	'icon' => 'icon-wpb-call-to-action',
	'category' => esc_html__( 'Content', 'startup-pro' ),
	'description' => esc_html__( 'Catch visitors attention with CTA block', 'startup-pro' ),
	'params' => array(
		array(
			'type' => 'textarea',
			'admin_label' => true,
			'heading' => esc_html__( 'Text', 'startup-pro' ),
			'param_name' => 'call_text',
			'value' => esc_html__( 'Click edit button to change this text.', 'startup-pro' ),
			'description' => esc_html__( 'Enter your content.', 'startup-pro' )
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text on the button', 'startup-pro' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Text on the button', 'startup-pro' ),
			'description' => esc_html__( 'Text on the button.', 'startup-pro' )
		),
		array(
			'type' => 'href',
			'heading' => esc_html__( 'URL (Link)', 'startup-pro' ),
			'param_name' => 'href',
			'description' => esc_html__( 'Button link.', 'startup-pro' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Target', 'startup-pro' ),
			'param_name' => 'target',
			'value' => $target_arr,
			'dependency' => array( 'element' => 'href', 'not_empty' => true, 'callback' => 'vc_cta_button_param_target_callback' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Color', 'startup-pro' ),
			'param_name' => 'color',
			'value' => $colors_arr,
			'description' => esc_html__( 'Button color.', 'startup-pro' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Icon', 'startup-pro' ),
			'param_name' => 'icon',
			'value' => $icons_arr,
			'description' => esc_html__( 'Button icon.', 'startup-pro' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Size', 'startup-pro' ),
			'param_name' => 'size',
			'value' => $size_arr,
			'description' => esc_html__( 'Button size.', 'startup-pro' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Button position', 'startup-pro' ),
			'param_name' => 'position',
			'value' => array(
				esc_html__( 'Align right', 'startup-pro' ) => 'cta_align_right',
				esc_html__( 'Align left', 'startup-pro' ) => 'cta_align_left',
				esc_html__( 'Align bottom', 'startup-pro' ) => 'cta_align_bottom'
			),
			'description' => esc_html__( 'Select button alignment.', 'startup-pro' )
		),
		$add_css_animation,
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name' => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	),
	'js_view' => 'VcCallToActionView'
) );
vc_map( array(
	'name' => esc_html__( 'Call to Action Button', 'startup-pro' ) . ' 2',
	'base' => 'vc_cta_button2',
	'icon' => 'icon-wpb-call-to-action',
	'category' => array( esc_html__( 'Content', 'startup-pro' ) ),
	'description' => esc_html__( 'Catch visitors attention with CTA block', 'startup-pro' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Heading first line', 'startup-pro' ),
			'admin_label' => true,
			//'holder' => 'h2',
			'param_name' => 'h2',
			'value' => esc_html__( 'Hey! I am first heading line feel free to change me', 'startup-pro' ),
			'description' => esc_html__( 'Text for the first heading line.', 'startup-pro' )
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Heading second line', 'startup-pro' ),
			//'holder' => 'h4',
			//'admin_label' => true,
			'param_name' => 'h4',
			'value' => '',
			'description' => esc_html__( 'Optional text for the second heading line.', 'startup-pro' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'CTA style', 'startup-pro' ),
			'param_name' => 'style',
			'value' => startup_pro_getVcShared( 'cta styles' ),
			'description' => esc_html__( 'Call to action style.', 'startup-pro' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Element width', 'startup-pro' ),
			'param_name' => 'el_width',
			'value' => startup_pro_getVcShared( 'cta widths' ),
			'description' => esc_html__( 'Call to action element width in percents.', 'startup-pro' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Text align', 'startup-pro' ),
			'param_name' => 'txt_align',
			'value' => startup_pro_getVcShared( 'text align' ),
			'description' => esc_html__( 'Text align in call to action block.', 'startup-pro' )
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Custom Background Color', 'startup-pro' ),
			'param_name' => 'accent_color',
			'description' => esc_html__( 'Select background color for your element.', 'startup-pro' )
		),
		array(
			'type' => 'textarea_html',
			//holder' => 'div',
			//'admin_label' => true,
			'heading' => esc_html__( 'Promotional text', 'startup-pro' ),
			'param_name' => 'content',
			'value' => esc_html__( 'I am promo text. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'startup-pro' )
		),
		array(
			'type' => 'vc_link',
			'heading' => esc_html__( 'URL (Link)', 'startup-pro' ),
			'param_name' => 'link',
			'description' => esc_html__( 'Button link.', 'startup-pro' )
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text on the button', 'startup-pro' ),
			//'holder' => 'button',
			//'class' => 'wpb_button',
			'param_name' => 'title',
			'value' => esc_html__( 'Text on the button', 'startup-pro' ),
			'description' => esc_html__( 'Text on the button.', 'startup-pro' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Button style', 'startup-pro' ),
			'param_name' => 'btn_style',
			'value' => startup_pro_getVcShared( 'button styles' ),
			'description' => esc_html__( 'Button style.', 'startup-pro' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Color', 'startup-pro' ),
			'param_name' => 'color',
			'value' => startup_pro_getVcShared( 'colors' ),
			'description' => esc_html__( 'Button color.', 'startup-pro' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		/*array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Icon', 'startup-pro' ),
        'param_name' => 'icon',
        'value' => startup_pro_getVcShared( 'icons' ),
        'description' => esc_html__( 'Button icon.', 'startup-pro' )
  ),*//*
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Size', 'startup-pro' ),
			'param_name' => 'size',
			'value' => startup_pro_getVcShared( 'sizes' ),
			'std' => 'md',
			'description' => esc_html__( 'Button size.', 'startup-pro' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Button position', 'startup-pro' ),
			'param_name' => 'position',
			'value' => array(
				esc_html__( 'Align right', 'startup-pro' ) => 'right',
				esc_html__( 'Align left', 'startup-pro' ) => 'left',
				esc_html__( 'Align bottom', 'startup-pro' ) => 'bottom'
			),
			'description' => esc_html__( 'Select button alignment.', 'startup-pro' )
		),
		$add_css_animation,
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name' => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
*/
/* Video element
---------------------------------------------------------- */
vc_map( array(
	'name'        => esc_html__( 'Video Player', 'startup-pro' ),
	'base'        => 'vc_video',
	'icon'        => 'icon-wpb-film-youtube',
	'category'    => esc_html__( 'Content', 'startup-pro' ),
	'description' => esc_html__( 'Embed YouTube/Vimeo player', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Video link', 'startup-pro' ),
			'param_name'  => 'link',
			'admin_label' => true,
			'description' => sprintf( esc_html__( 'Link to the video. More about supported formats at %s.', 'startup-pro' ), '<a href="http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F" target="_blank">WordPress codex page</a>' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		),
		array(
			'type'       => 'css_editor',
			'heading'    => esc_html__( 'Css', 'startup-pro' ),
			'param_name' => 'css',
			
			'group'      => esc_html__( 'Design options', 'startup-pro' )
		)
	)
) );
/* Google maps element
---------------------------------------------------------- */
vc_map( array(
	'name'        => esc_html__( 'Google Maps', 'startup-pro' ),
	'base'        => 'vc_gmaps',
	'icon'        => 'icon-wpb-map-pin',
	'category'    => esc_html__( 'Content', 'startup-pro' ),
	'description' => esc_html__( 'Map block', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'startup-pro' )
		),
		array(
			'type'        => 'textarea_safe',
			'heading'     => esc_html__( 'Map embed iframe', 'startup-pro' ),
			'param_name'  => 'link',
			'description' => sprintf( esc_html__( 'Visit %s to create your map. 1) Find location 2) Click "Share" and make sure map is public on the web 3) Click folder icon to reveal "Embed on my site" link 4) Copy iframe code and paste it here.', 'startup-pro' ), '<a href="'.esc_url( __('https://mapsengine.google.com/', 'startup-pro')).'" target="_blank">Google maps</a>' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Map height', 'startup-pro' ),
			'param_name'  => 'size',
			'admin_label' => true,
			'description' => esc_html__( 'Enter map height in pixels. Example: 200 or leave it empty to make map responsive.', 'startup-pro' )
		),
		
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
/* Flickr
---------------------------------------------------------- */
vc_map( array(
	'base'        => 'vc_flickr',
	'name'        => esc_html__( 'Flickr Widget', 'startup-pro' ),
	'icon'        => 'icon-wpb-flickr',
	'category'    => esc_html__( 'Content', 'startup-pro' ),
	'description' => esc_html__( 'Image feed from your flickr account', 'startup-pro' ),
	"params"      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Flickr ID', 'startup-pro' ),
			'param_name'  => 'flickr_id',
			'admin_label' => true,
			'description' => sprintf( esc_html__( 'To find your flickID visit %s.', 'startup-pro' ), '<a href="'.esc_url( __('http://idgettr.com/', 'startup-pro')).'" target="_blank">idGettr</a>' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Number of photos', 'startup-pro' ),
			'param_name'  => 'count',
			'value'       => array( 9, 8, 7, 6, 5, 4, 3, 2, 1 ),
			'description' => esc_html__( 'Number of photos.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Type', 'startup-pro' ),
			'param_name'  => 'type',
			'value'       => array(
				esc_html__( 'User', 'startup-pro' )  => 'user',
				esc_html__( 'Group', 'startup-pro' ) => 'group'
			),
			'description' => esc_html__( 'Photo stream type.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Display', 'startup-pro' ),
			'param_name'  => 'display',
			'value'       => array(
				esc_html__( 'Latest', 'startup-pro' ) => 'latest',
				esc_html__( 'Random', 'startup-pro' ) => 'random'
			),
			'description' => esc_html__( 'Photo order.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
/* Graph
---------------------------------------------------------- */
vc_map( array(
	'name'        => esc_html__( 'Progress Bar', 'startup-pro' ),
	'base'        => 'vc_progress_bar',
	'icon'        => 'icon-wpb-graph',
	'category'    => esc_html__( 'Content', 'startup-pro' ),
	'description' => esc_html__( 'Animated progress bar', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'startup-pro' )
		),
		array(
			'type'        => 'exploded_textarea',
			'heading'     => esc_html__( 'Graphic values', 'startup-pro' ),
			'param_name'  => 'values',
			'description' => esc_html__( 'Input graph values, titles and color here. Divide values with linebreaks (Enter). Example: 90|Development|#e75956', 'startup-pro' ),
			'value'       => "90|Development,80|Design,70|Marketing"
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Units', 'startup-pro' ),
			'param_name'  => 'units',
			'description' => esc_html__( 'Enter measurement units (if needed) Eg. %, px, points, etc. Graph value and unit will be appended to the graph title.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Bar color', 'startup-pro' ),
			'param_name'  => 'bgcolor',
			'value'       => array(
				esc_html__( 'Grey', 'startup-pro' )         => 'bar_grey',
				esc_html__( 'Blue', 'startup-pro' )         => 'bar_blue',
				esc_html__( 'Turquoise', 'startup-pro' )    => 'bar_turquoise',
				esc_html__( 'Green', 'startup-pro' )        => 'bar_green',
				esc_html__( 'Orange', 'startup-pro' )       => 'bar_orange',
				esc_html__( 'Red', 'startup-pro' )          => 'bar_red',
				esc_html__( 'Black', 'startup-pro' )        => 'bar_black',
				esc_html__( 'Custom Color', 'startup-pro' ) => 'custom'
			),
			'description' => esc_html__( 'Select bar background color.', 'startup-pro' ),
			'admin_label' => true
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Bar custom color', 'startup-pro' ),
			'param_name'  => 'custombgcolor',
			'description' => esc_html__( 'Select custom background color for bars.', 'startup-pro' ),
			'dependency'  => array( 'element' => 'bgcolor', 'value' => array( 'custom' ) )
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Options', 'startup-pro' ),
			'param_name' => 'options',
			'value'      => array(
				esc_html__( 'Add Stripes?', 'startup-pro' )                                      => 'striped',
				esc_html__( 'Add animation? Will be visible with striped bars.', 'startup-pro' ) => 'animated'
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
/* Support for 3rd Party plugins
---------------------------------------------------------- */
// Contact form 7 plugin
include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); // Require plugin.php to use is_plugin_active() below
if ( class_exists('WPCF7') ) {
	global $wpdb;
	$cf7 = $wpdb->get_results(
		"
  SELECT ID, post_title
  FROM $wpdb->posts
  WHERE post_type = 'wpcf7_contact_form'
  "
	);
	$contact_forms = array();
	if ( $cf7 ) {
		foreach ( $cf7 as $cform ) {
			$contact_forms[ $cform->post_title ] = $cform->ID;
		}
	} else {
		$contact_forms[ esc_html__( 'No contact forms found', 'startup-pro' ) ] = 0;
	}
	vc_map( array(
		'base'        => 'contact-form-7',
		'name'        => esc_html__( 'Contact Form 7', 'startup-pro' ),
		'icon'        => 'icon-wpb-contactform7',
		'category'    => esc_html__( 'Content', 'startup-pro' ),
		'description' => esc_html__( 'Place Contact Form7', 'startup-pro' ),
		'params'      => array(
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Form title', 'startup-pro' ),
				'param_name'  => 'title',
				'admin_label' => true,
				'description' => esc_html__( 'What text use as form title. Leave blank if no title is needed.', 'startup-pro' )
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Select contact form', 'startup-pro' ),
				'param_name'  => 'id',
				'value'       => $contact_forms,
				'description' => esc_html__( 'Choose previously created contact form from the drop down list.', 'startup-pro' )
			)
		)
	) );
} // if contact form7 plugin active
if ( class_exists( 'GFForms' ) ) {
	$gravity_forms_array[ esc_html__( 'No Gravity forms found.', 'startup-pro' ) ] = '';
	if ( class_exists( 'RGFormsModel' ) ) {
		$gravity_forms = RGFormsModel::get_forms( 1, 'title' );
		if ( $gravity_forms ) {
			$gravity_forms_array = array( esc_html__( 'Select a form to display.', 'startup-pro' ) => '' );
			foreach ( $gravity_forms as $gravity_form ) {
				$gravity_forms_array[ $gravity_form->title ] = $gravity_form->id;
			}
		}
	}
	vc_map( array(
		'name'        => esc_html__( 'Gravity Form', 'startup-pro' ),
		'base'        => 'gravityform',
		'icon'        => 'icon-wpb-vc_gravityform',
		'category'    => esc_html__( 'Content', 'startup-pro' ),
		'description' => esc_html__( 'Place Gravity form', 'startup-pro' ),
		'params'      => array(
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Form', 'startup-pro' ),
				'param_name'  => 'id',
				'value'       => $gravity_forms_array,
				'description' => esc_html__( 'Select a form to add it to your post or page.', 'startup-pro' ),
				'admin_label' => true
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Display Form Title', 'startup-pro' ),
				'param_name'  => 'title',
				'value'       => array(
					esc_html__( 'No', 'startup-pro' )  => 'false',
					esc_html__( 'Yes', 'startup-pro' ) => 'true'
				),
				'description' => esc_html__( 'Would you like to display the forms title?', 'startup-pro' ),
				'dependency'  => array( 'element' => 'id', 'not_empty' => true )
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Display Form Description', 'startup-pro' ),
				'param_name'  => 'description',
				'value'       => array(
					esc_html__( 'No', 'startup-pro' )  => 'false',
					esc_html__( 'Yes', 'startup-pro' ) => 'true'
				),
				'description' => esc_html__( 'Would you like to display the forms description?', 'startup-pro' ),
				'dependency'  => array( 'element' => 'id', 'not_empty' => true )
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Enable AJAX?', 'startup-pro' ),
				'param_name'  => 'ajax',
				'value'       => array(
					esc_html__( 'No', 'startup-pro' )  => 'false',
					esc_html__( 'Yes', 'startup-pro' ) => 'true'
				),
				'description' => esc_html__( 'Enable AJAX submission?', 'startup-pro' ),
				'dependency'  => array( 'element' => 'id', 'not_empty' => true )
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Tab Index', 'startup-pro' ),
				'param_name'  => 'tabindex',
				'description' => esc_html__( '(Optional) Specify the starting tab index for the fields of this form. Leave blank if you\'re not sure what this is.', 'startup-pro' ),
				'dependency'  => array( 'element' => 'id', 'not_empty' => true )
			)
		)
	) );
} // if gravityforms active
/* WordPress default Widgets (Appearance->Widgets)
---------------------------------------------------------- */
vc_map( array(
	'name'        => 'WP ' . esc_html__( "Search" , 'startup-pro'),
	'base'        => 'vc_wp_search',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'A search form for your site', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
vc_map( array(
	'name'        => 'WP ' . esc_html__( 'Meta', 'startup-pro' ),
	'base'        => 'vc_wp_meta',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'Log in/out, admin, feed and WordPress links', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
vc_map( array(
	'name'        => 'WP ' . esc_html__( 'Recent Comments', 'startup-pro' ),
	'base'        => 'vc_wp_recentcomments',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'The most recent comments', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Number of comments to show', 'startup-pro' ),
			'param_name'  => 'number',
			'admin_label' => true
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
vc_map( array(
	'name'        => 'WP ' . esc_html__( 'Calendar', 'startup-pro' ),
	'base'        => 'vc_wp_calendar',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'A calendar of your sites posts', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
vc_map( array(
	'name'        => 'WP ' . esc_html__( 'Pages', 'startup-pro' ),
	'base'        => 'vc_wp_pages',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'Your sites WordPress Pages', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Sort by', 'startup-pro' ),
			'param_name'  => 'sortby',
			'value'       => array(
				esc_html__( 'Page title', 'startup-pro' ) => 'post_title',
				esc_html__( 'Page order', 'startup-pro' ) => 'menu_order',
				esc_html__( 'Page ID', 'startup-pro' )    => 'ID'
			),
			'admin_label' => true
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Exclude', 'startup-pro' ),
			'param_name'  => 'exclude',
			'description' => esc_html__( 'Page IDs, separated by commas.', 'startup-pro' ),
			'admin_label' => true
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
$tag_taxonomies = array();
foreach ( get_taxonomies() as $taxonomy ) {
	$tax = get_taxonomy( $taxonomy );
	if ( ! $tax->show_tagcloud || empty( $tax->labels->name ) ) {
		continue;
	}
	$tag_taxonomies[ $tax->labels->name ] = esc_attr( $taxonomy );
}
vc_map( array(
	'name'        => 'WP ' . esc_html__( 'Tag Cloud', 'startup-pro' ),
	'base'        => 'vc_wp_tagcloud',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'Your most used tags in cloud format', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Taxonomy', 'startup-pro' ),
			'param_name'  => 'taxonomy',
			'value'       => $tag_taxonomies,
			'admin_label' => true
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
$custom_menus = array();
$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
if ( is_array( $menus ) ) {
	foreach ( $menus as $single_menu ) {
		$custom_menus[ $single_menu->name ] = $single_menu->term_id;
	}
}
vc_map( array(
	'name'        => 'WP ' . esc_html__( "Custom Menu", 'startup-pro' ),
	'base'        => 'vc_wp_custommenu',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'Use this widget to add one of your custom menus as a widget', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Menu', 'startup-pro' ),
			'param_name'  => 'nav_menu',
			'value'       => $custom_menus,
			'description' => empty( $custom_menus ) ? 'Custom menus not found. Please visit <b>Appearance > Menus</b> page to create new menu.' : esc_html__( 'Select menu', 'startup-pro' ),
			'admin_label' => true
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
vc_map( array(
	'name'        => 'WP ' . esc_html__( 'Text', 'startup-pro' ),
	'base'        => 'vc_wp_text',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'Arbitrary text or HTML', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'       => 'textarea',
			'heading'    => esc_html__( 'Text', 'startup-pro' ),
			'param_name' => 'content',
			// 'admin_label' => true
		),
		/*array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Automatically add paragraphs', 'startup-pro' ),
        'param_name' => "filter"
  ),*/
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
vc_map( array(
	'name'        => 'WP ' . esc_html__( 'Recent Posts', 'startup-pro' ),
	'base'        => 'vc_wp_posts',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'The most recent posts on your site', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Number of posts to show', 'startup-pro' ),
			'param_name'  => 'number',
			'admin_label' => true
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Display post date?', 'startup-pro' ),
			'param_name' => 'show_date',
			'value'      => array( esc_html__( 'Yes, please', 'startup-pro' ) => true )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
$link_category = array( esc_html__( 'All Links', 'startup-pro' ) => '' );
$link_cats = get_terms( 'link_category' );
if ( is_array( $link_cats ) ) {
	foreach ( $link_cats as $link_cat ) {
		$link_category[ $link_cat->name ] = $link_cat->term_id;
	}
}
vc_map( array(
	'name'            => 'WP ' . esc_html__( 'Links', 'startup-pro' ),
	'base'            => 'vc_wp_links',
	'icon'            => 'icon-wpb-wp',
	'category'        => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'           => 'wpb_vc_wp_widget',
	'content_element' => (bool) get_option( 'link_manager_enabled' ),
	'weight'          => - 50,
	'description'     => esc_html__( 'Your blogroll', 'startup-pro' ),
	'params'          => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Link Category', 'startup-pro' ),
			'param_name'  => 'category',
			'value'       => $link_category,
			'admin_label' => true
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Sort by', 'startup-pro' ),
			'param_name' => 'orderby',
			'value'      => array(
				esc_html__( 'Link title', 'startup-pro' )  => 'name',
				esc_html__( 'Link rating', 'startup-pro' ) => 'rating',
				esc_html__( 'Link ID', 'startup-pro' )     => 'id',
				esc_html__( 'Random', 'startup-pro' )      => 'rand'
			)
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Options', 'startup-pro' ),
			'param_name' => 'options',
			'value'      => array(
				esc_html__( 'Show Link Image', 'startup-pro' )       => 'images',
				esc_html__( 'Show Link Name', 'startup-pro' )        => 'name',
				esc_html__( 'Show Link Description', 'startup-pro' ) => 'description',
				esc_html__( 'Show Link Rating', 'startup-pro' )      => 'rating'
			)
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Number of links to show', 'startup-pro' ),
			'param_name' => 'limit'
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
vc_map( array(
	'name'        => 'WP ' . esc_html__( 'Categories', 'startup-pro' ),
	'base'        => 'vc_wp_categories',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'A list or dropdown of categories', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Options', 'startup-pro' ),
			'param_name' => 'options',
			'value'      => array(
				esc_html__( 'Display as dropdown', 'startup-pro' ) => 'dropdown',
				esc_html__( 'Show post counts', 'startup-pro' )    => 'count',
				esc_html__( 'Show hierarchy', 'startup-pro' )      => 'hierarchical'
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
vc_map( array(
	'name'        => 'WP ' . esc_html__( 'Archives', 'startup-pro' ),
	'base'        => 'vc_wp_archives',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'A monthly archive of your sites posts', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Options', 'startup-pro' ),
			'param_name' => 'options',
			'value'      => array(
				esc_html__( 'Display as dropdown', 'startup-pro' ) => 'dropdown',
				esc_html__( 'Show post counts', 'startup-pro' )    => 'count'
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
vc_map( array(
	'name'        => 'WP ' . esc_html__( 'RSS', 'startup-pro' ),
	'base'        => 'vc_wp_rss',
	'icon'        => 'icon-wpb-wp',
	'category'    => esc_html__( 'WordPress Widgets', 'startup-pro' ),
	'class'       => 'wpb_vc_wp_widget',
	'weight'      => - 50,
	'description' => esc_html__( 'Entries from any RSS or Atom feed', 'startup-pro' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'startup-pro' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'startup-pro' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'RSS feed URL', 'startup-pro' ),
			'param_name'  => 'url',
			'description' => esc_html__( 'Enter the RSS feed URL.', 'startup-pro' ),
			'admin_label' => true
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Items', 'startup-pro' ),
			'param_name'  => 'items',
			'value'       => array(
				esc_html__( '10 - Default', 'startup-pro' ) => '',
				1,
				2,
				3,
				4,
				5,
				6,
				7,
				8,
				9,
				10,
				11,
				12,
				13,
				14,
				15,
				16,
				17,
				18,
				19,
				20
			),
			'description' => esc_html__( 'How many items would you like to display?', 'startup-pro' ),
			'admin_label' => true
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Options', 'startup-pro' ),
			'param_name' => 'options',
			'value'      => array(
				esc_html__( 'Display item content?', 'startup-pro' )             => 'show_summary',
				esc_html__( 'Display item author if available?', 'startup-pro' ) => 'show_author',
				esc_html__( 'Display item date?', 'startup-pro' )                => 'show_date'
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' )
		)
	)
) );
/* Empty Space Element
---------------------------------------------------------- */
vc_map( array(
	'name'                    => esc_html__( 'Empty Space', 'startup-pro' ),
	'base'                    => 'vc_empty_space',
	'icon'                    => 'icon-wpb-ui-empty_space',
	'show_settings_on_create' => true,
	'category'                => esc_html__( 'Content', 'startup-pro' ),
	'description'             => esc_html__( 'Add spacer with custom height', 'startup-pro' ),
	'params'                  => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Height', 'startup-pro' ),
			'param_name'  => 'height',
			'value'       => '32px',
			'admin_label' => true,
			'description' => esc_html__( 'Enter empty space height.', 'startup-pro' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' ),
		),
	),
) );
/* Custom Heading element
----------------------------------------------------------- */
vc_map( array(
	'name'                    => esc_html__( 'Custom Heading', 'startup-pro' ),
	'base'                    => 'vc_custom_heading',
	'icon'                    => 'icon-wpb-ui-custom_heading',
	'show_settings_on_create' => true,
	'category'                => esc_html__( 'Content', 'startup-pro' ),
	'description'             => esc_html__( 'Add custom heading text with google fonts', 'startup-pro' ),
	'params'                  => array(
		array(
			'type'        => 'textarea',
			'heading'     => esc_html__( 'Text', 'startup-pro' ),
			'param_name'  => 'text',
			'admin_label' => true,
			'value'       => esc_html__( 'This is custom heading element with Google Fonts', 'startup-pro' ),
			'description' => esc_html__( 'Enter your content. If you are using non-latin characters be sure to activate them under Settings/Visual Composer/General Settings.', 'startup-pro' ),
		),
		array(
			'type'       => 'font_container',
			'param_name' => 'font_container',
			'value'      => '',
			'settings'   => array(
				'fields' => array(
					'tag'                     => 'h2', // default value h2
					'text_align',
					'font_size',
					'line_height',
					'color',
					//'font_style_italic'
					//'font_style_bold'
					//'font_family'
					'tag_description'         => esc_html__( 'Select element tag.', 'startup-pro' ),
					'text_align_description'  => esc_html__( 'Select text alignment.', 'startup-pro' ),
					'font_size_description'   => esc_html__( 'Enter font size.', 'startup-pro' ),
					'line_height_description' => esc_html__( 'Enter line height.', 'startup-pro' ),
					'color_description'       => esc_html__( 'Select color for your element.', 'startup-pro' ),
					//'font_style_description' => esc_html__('Put your description here','js_composer'),
					//'font_family_description' => esc_html__('Put your description here','js_composer'),
				),
			),
			// 'description' => esc_html__( '', 'startup-pro' ),
		),
		array(
			'type'       => 'google_fonts',
			'param_name' => 'google_fonts',
			'value'      => '',
			// Not recommended, this will override 'settings'. 'font_family:'.rawurlencode('Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic').'|font_style:'.rawurlencode('900 bold italic:900:italic'),
			'settings'   => array(
				//'no_font_style' // Method 1: To disable font style
				//'no_font_style'=>true // Method 2: To disable font style
				'fields' => array(
					'font_family'             => 'Abril Fatface:regular',
					//'Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',// Default font family and all available styles to fetch
					'font_style'              => '400 regular:400:normal',
					// Default font style. Name:weight:style, example: "800 bold regular:800:normal"
					'font_family_description' => esc_html__( 'Select font family.', 'startup-pro' ),
					'font_style_description'  => esc_html__( 'Select font styling.', 'startup-pro' )
				)
			),
			// 'description' => esc_html__( '', 'startup-pro' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'startup-pro' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'startup-pro' ),
		),
		array(
			'type'       => 'css_editor',
			'heading'    => esc_html__( 'Css', 'startup-pro' ),
			'param_name' => 'css',
			
			'group'      => esc_html__( 'Design options', 'startup-pro' )
		)
	),
) );
/*** Visual Composer Content elements refresh ***/
class startup_pro_VcSharedLibrary {
	// Here we will store plugin wise (shared) settings. Colors, Locations, Sizes, etc...
	/**
	 * @var array
	 */
	private static $colors = array(
		'Blue' => 'blue',
		'Turquoise' => 'turquoise',
		'Pink' => 'pink',
		'Violet' => 'violet',
		'Peacoc' => 'peacoc',
		'Chino' => 'chino',
		'Mulled Wine' => 'mulled_wine',
		'Vista Blue' => 'vista_blue',
		'Black' => 'black',
		'Grey' => 'grey',
		'Orange' => 'orange',
		'Sky' => 'sky',
		'Green' => 'green',
		'Juicy pink' => 'juicy_pink',
		'Sandy brown' => 'sandy_brown',
		'Purple' => 'purple',
		'White' => 'white'
	);
	/**
	 * @var array
	 */
	public static $icons = array(
		'Glass' => 'glass',
		'Music' => 'music',
		'Search' => 'search'
	);
	/**
	 * @var array
	 */
	public static $sizes = array(
		'Mini' => 'xs',
		'Small' => 'sm',
		'Normal' => 'md',
		'Large' => 'lg'
	);
	/**
	 * @var array
	 */
	public static $button_styles = array(
		'Rounded' => 'rounded',
		'Square' => 'square',
		'Round' => 'round',
		'Outlined' => 'outlined',
		'3D' => '3d',
		'Square Outlined' => 'square_outlined'
	);
	/**
	 * @var array
	 */
	public static $message_box_styles = array(
		'Standard' => 'standard',
		'Solid' => 'solid',
		'Solid icon' => 'solid-icon',
		'Outline' => 'outline',
		'3D' => '3d',
	);
	/**
	 * Toggle styles
	 * @var array
	 */
	public static $toggle_styles = array(
		'Default' => 'default',
		'Simple' => 'simple',
		'Round' => 'round',
		'Round Outline' => 'round_outline',
		'Rounded' => 'rounded',
		'Rounded Outline' => 'rounded_outline',
		'Square' => 'square',
		'Square Outline' => 'square_outline',
		'Arrow' => 'arrow',
		'Text Only' => 'text_only',
	);
	/**
	 * Animation styles
	 * @var array
	 */
	public static $animation_styles = array(
		'Bounce' => 'easeOutBounce',
		'Elastic' => 'easeOutElastic',
		'Back' => 'easeOutBack',
		'Cubic' => 'easeinOutCubic',
		'Quint' => 'easeinOutQuint',
		'Quart' => 'easeOutQuart',
		'Quad' => 'easeinQuad',
		'Sine' => 'easeOutSine'
	);
	/**
	 * @var array
	 */
	public static $cta_styles = array(
		'Rounded' => 'rounded',
		'Square' => 'square',
		'Round' => 'round',
		'Outlined' => 'outlined',
		'Square Outlined' => 'square_outlined'
	);
	/**
	 * @var array
	 */
	public static $txt_align = array(
		'Left' => 'left',
		'Right' => 'right',
		'Center' => 'center',
		'Justify' => 'justify'
	);
	/**
	 * @var array
	 */
	public static $el_widths = array(
		'100%' => '',
		'90%' => '90',
		'80%' => '80',
		'70%' => '70',
		'60%' => '60',
		'50%' => '50',
		'40%' => '40',
		'30%' => '30',
		'20%' => '20',
		'10%' => '10'
	);
	/**
	 * @var array
	 */
	public static $sep_widths = array(
		'1px' => '',
		'2px' => '2',
		'3px' => '3',
		'4px' => '4',
		'5px' => '5',
		'6px' => '6',
		'7px' => '7',
		'8px' => '8',
		'9px' => '9',
		'10px' => '10'
	);
	/**
	 * @var array
	 */
	public static $sep_styles = array(
		'Border' => '',
		'Dashed' => 'dashed',
		'Dotted' => 'dotted',
		'Double' => 'double'
	);
	/**
	 * @var array
	 */
	public static $box_styles = array(
		'Default' => '',
		'Rounded' => 'vc_box_rounded',
		'Border' => 'vc_box_border',
		'Outline' => 'vc_box_outline',
		'Shadow' => 'vc_box_shadow',
		'Bordered shadow' => 'vc_box_shadow_border',
		'3D Shadow' => 'vc_box_shadow_3d'
	);
	/**
	 * Round box styles
	 *
	 * @var array
	 */
	public static $round_box_styles = array(
		'Round' => 'vc_box_circle',
		'Round Border' => 'vc_box_border_circle',
		'Round Outline' => 'vc_box_outline_circle',
		'Round Shadow' => 'vc_box_shadow_circle',
		'Round Border Shadow' => 'vc_box_shadow_border_circle'
	);
	/**
	 * Circle box styles
	 *
	 * @var array
	 */
	public static $circle_box_styles = array(
		'Circle' => 'vc_box_circle_2',
		'Circle Border' => 'vc_box_border_circle_2',
		'Circle Outline' => 'vc_box_outline_circle_2',
		'Circle Shadow' => 'vc_box_shadow_circle_2',
		'Circle Border Shadow' => 'vc_box_shadow_border_circle_2'
	);
	/**
	 * @return array
	 */
	public static function getColors() {
		return self::$colors;
	}
	/**
	 * @return array
	 */
	public static function getIcons() {
		return self::$icons;
	}
	/**
	 * @return array
	 */
	public static function getSizes() {
		return self::$sizes;
	}
	/**
	 * @return array
	 */
	public static function getButtonStyles() {
		return self::$button_styles;
	}
	/**
	 * @return array
	 */
	public static function getMessageBoxStyles() {
		return self::$message_box_styles;
	}
	/**
	 * @return array
	 */
	public static function getToggleStyles() {
		return self::$toggle_styles;
	}
	/**
	 * @return array
	 */
	public static function getAnimationStyles() {
		return self::$animation_styles;
	}
	/**
	 * @return array
	 */
	public static function getCtaStyles() {
		return self::$cta_styles;
	}
	/**
	 * @return array
	 */
	public static function getTextAlign() {
		return self::$txt_align;
	}
	/**
	 * @return array
	 */
	public static function getBorderWidths() {
		return self::$sep_widths;
	}
	/**
	 * @return array
	 */
	public static function getElementWidths() {
		return self::$el_widths;
	}
	/**
	 * @return array
	 */
	public static function getSeparatorStyles() {
		return self::$sep_styles;
	}
	/**
	 * Get list of box styles
	 *
	 * Possible $groups values:
	 * - default
	 * - round
	 * - circle
	 *
	 * @param array $groups Array of groups to include. If not specified, return all
	 *
	 * @return array
	 */
	public static function getBoxStyles( $groups = array() ) {
		$list = array();
		$groups = (array) $groups;
		if ( ! $groups || in_array( 'default', $groups ) ) {
			$list += self::$box_styles;
		}
		if ( ! $groups || in_array( 'round', $groups ) ) {
			$list += self::$round_box_styles;
		}
		if ( ! $groups || in_array( 'cirlce', $groups ) ) {
			$list += self::$circle_box_styles;
		}
		return $list;
	}
	public static function getColorsDashed() {
		$colors = array(
			esc_html__( 'Blue', 'startup-pro' ) => 'blue',
			esc_html__( 'Turquoise', 'startup-pro' ) => 'turquoise',
			esc_html__( 'Pink', 'startup-pro' ) => 'pink',
			esc_html__( 'Violet', 'startup-pro' ) => 'violet',
			esc_html__( 'Peacoc', 'startup-pro' ) => 'peacoc',
			esc_html__( 'Chino', 'startup-pro' ) => 'chino',
			esc_html__( 'Mulled Wine', 'startup-pro' ) => 'mulled-wine',
			esc_html__( 'Vista Blue', 'startup-pro' ) => 'vista-blue',
			esc_html__( 'Black', 'startup-pro' ) => 'black',
			esc_html__( 'Grey', 'startup-pro' ) => 'grey',
			esc_html__( 'Orange', 'startup-pro' ) => 'orange',
			esc_html__( 'Sky', 'startup-pro' ) => 'sky',
			esc_html__( 'Green', 'startup-pro' ) => 'green',
			esc_html__( 'Juicy pink', 'startup-pro' ) => 'juicy-pink',
			esc_html__( 'Sandy brown', 'startup-pro' ) => 'sandy-brown',
			esc_html__( 'Purple', 'startup-pro' ) => 'purple',
			esc_html__( 'White', 'startup-pro' ) => 'white'
		);
		return $colors;
	}
}
/**
 * @param string $asset
 *
 * @return array
 */
function startup_pro_getVcShared( $asset = '' ) {
	switch ( $asset ) {
		case 'colors':
			return startup_pro_VcSharedLibrary::getColors();
			break;
		case 'colors-dashed':
			return startup_pro_VcSharedLibrary::getColorsDashed();
			break;
		case 'icons':
			return startup_pro_VcSharedLibrary::getIcons();
			break;
		case 'sizes':
			return startup_pro_VcSharedLibrary::getSizes();
			break;
		case 'button styles':
		case 'alert styles':
			return startup_pro_VcSharedLibrary::getButtonStyles();
			break;
		case 'message_box_styles':
			return startup_pro_VcSharedLibrary::getMessageBoxStyles();
			break;
		case 'cta styles':
			return startup_pro_VcSharedLibrary::getCtaStyles();
			break;
		case 'text align':
			return startup_pro_VcSharedLibrary::getTextAlign();
			break;
		case 'cta widths':
		case 'separator widths':
			return startup_pro_VcSharedLibrary::getElementWidths();
			break;
		case 'separator styles':
			return startup_pro_VcSharedLibrary::getSeparatorStyles();
			break;
		case 'separator border widths':
			return startup_pro_VcSharedLibrary::getBorderWidths();
			break;
		case 'single image styles':
			return startup_pro_VcSharedLibrary::getBoxStyles();
			break;
		case 'single image external styles':
			return startup_pro_VcSharedLibrary::getBoxStyles( array( 'default', 'round' ) );
			break;
		case 'toggle styles':
			return startup_pro_VcSharedLibrary::getToggleStyles();
			break;
		case 'animation styles':
			return startup_pro_VcSharedLibrary::getAnimationStyles();
			break;
		default:
			# code...
			break;
	}
	return '';
}
