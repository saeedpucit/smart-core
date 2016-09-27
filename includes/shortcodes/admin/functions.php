<?php
function startup_pro_shortcodes_plugin_url( $path = '' ) {
///////////////// BODY is hardware and MIND is software ////////////////

	if($path == '')
		$url = plugins_url().'/smart-core/includes/shortcodes';
	else
		$url = plugins_url().'/smart-core/includes/shortcodes'.$path;

	if ( is_ssl() && 'http:' == substr( $url, 0, 5 ) ) {
		$url = 'https:' . substr( $url, 5 );
	}
	return $url;
}

function startup_pro_alert( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'id'                 => '',
		'class'              => '',
		'in_style'           => '',
		'type'               => 'success',
		'icon'               => '',
		'outlined'           => '',
		'close'              => '',
		'bgcolor'            => '',
		'border_color'       => '',
		'text_color'         => '',
		'animation'          => '',
		'animation_delay'    => '',
		'animation_duration' => '',
	), $atts ) );
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$icon = ( $icon ) ? ' <i class="' . startup_pro_icon_class( $icon ) . ' icon-vertically"></i>' : '';
	$outlined = ( $outlined ) ? ' pro-alert-outlined' : '';
	$close = ( $close ) ? ' pro-alert-dismissable' : '';
	$bgcolor = ( $bgcolor ) ? 'background-color:' . $bgcolor . ';' : '';
	$border_color = ( $border_color ) ? 'border-color:' . $border_color . ';' : '';
	$text_color = ( $text_color ) ? 'color:' . $text_color . ';' : '';
	$el_style = ( $bgcolor || $border_color || $text_color || $in_style ) ? ' style="' . $bgcolor . $border_color . $text_color . $in_style . '"' : '';
	// element animation
	$animation = ( $animation ) ? ' pro-animation ' . $animation : '';
	$animation_data = ( $animation && $animation_delay ) ? ' data-delay="' . $animation_delay . '"' : '';
	$animation_data = ( $animation && $animation_duration ) ? $animation_data . ' data-duration="' . $animation_duration . '"' : $animation_data;
	// begin output
	$output = '<div' . $id . ' class="pro-alert pro-alert-' . $type . $close . $outlined . $animation . $class . '"' . $animation_data . $el_style . '>';
	$output .= ( $close ) ? '<div class="pro-alert-close fa fa-times"></div>' : '';
	$output .= ( $close ) ? '<div class="pro-alert-content">' : '';
	$output .= startup_pro_set_wpautop( $icon . $content );
	$output .= ( $close ) ? '</div>' : '';
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_alert', 'startup_pro_alert' );
/**
 *
 * FAQ Shortcode
 * @since 1.0.0
 * @version 1.3.0
 *
 *
 */
if( ! function_exists( 'smart_faq' ) ) {
  function smart_faq( $atts, $content = '', $key = '' ) {
    global $smart_faqs;
    $smart_faqs = array();
    extract( shortcode_atts( array(
      'id'        => '',
      'class'     => '',
      'in_style'  => '',
    ), $atts ) );
    do_shortcode( $content );
    // is not empty clients
    if( empty( $smart_faqs ) ) { return; }
    $id         = ( $id ) ? ' id="'. $id .'"' : '';
    $class      = ( $class ) ? ' '. $class : '';
    $in_style   = ( $in_style ) ? ' style="'. $in_style .'"' : '';
    $active     = ( isset( $_REQUEST['faq'] ) ) ? $_REQUEST['faq'] : false;
    $active_all = ( ! isset( $_REQUEST['faq'] ) ) ? ' class="active"': '';
    $uniqid     = uniqid();
    // begin output
    $output   = '<div'. $id .' class="smart-faq'. $class .'"'. $in_style .'>';
    // filter
    $output  .= '<div class="smart-faq-filter">';
    $output  .= '<a href="#" data-filter="*"'. $active_all .'>'. __( 'All', 'startup-pro' ) .'</a>';
    foreach ( $smart_faqs as $key => $faq ) {
      $active_nav = ( ( $key + 1 ) == $active ) ? ' class="active"' : '';
      $output  .= ( ! empty( $faq['atts']['title'] ) ) ? '<a href="#" data-filter=".'. $uniqid .'-'. $key .'"'. $active_nav .'>'. $faq['atts']['title'] .'</a>' : '';
    }
    $output  .= '</div>';
    // list
    $output  .= '<div class="smart-faq-isotope">';
    foreach ( $smart_faqs as $key => $faq ) {
      $active_content  = ( ( $key + 1 ) != $active && $active ) ? ' smart-faq-hidden' : '';
      $output  .= '<div class="smart-faq-item '. $uniqid .'-'. $key . $active_content .'">';
      $output  .= do_shortcode( $faq['content'] );
      $output  .= '</div>';
    }
    $output  .= '</div>';
    $output  .= '</div>';
    // end output
    return $output;
  }
  add_shortcode( 'smart_faq', 'smart_faq' );
}
/**
 *
 * Tab Shortcode
 * @version 1.0.0
 * @since 1.1.0
 *
 */
if( ! function_exists( 'smart_faq_block' ) ) {
  function smart_faq_block( $atts, $content = '', $key = '' ) {
    global $smart_faqs;
    $smart_faqs[]  = array( 'atts' => $atts, 'content' => $content );
    return;
  }
  add_shortcode( 'smart_faq_block', 'smart_faq_block' );
}

/**
 *
 * PRO Blockquote Shortcode
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_blockquote( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'id'           => '',
		'class'        => '',
		'in_style'     => '',
		'type'         => 'normal',
		'icon'         => '',
		'icon_size'    => '',
		'icon_color'   => '',
		'border_color' => '',
		'cite'         => '',
	), $atts ) );
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$cite = ( $cite ) ? '<cite>' . $cite . '</cite>' : '';
	$icon = ( $icon ) ? ' pro-blockquote-quote-icon' : '';
	$icon_size = ( $icon_size ) ? 'font-size:' . $icon_size . 'px;' : '';
	$icon_color = ( $icon_color ) ? 'color:' . $icon_color . ';' : '';
	$icon_style = ( $icon_size || $icon_color ) ? ' style="' . $icon_size . $icon_color . '"' : '';
	$border_color = ( $border_color ) ? 'border-color:' . $border_color . ';' : '';
	$quote_style = ( $border_color || $in_style ) ? ' style="' . $border_color . $in_style . '"' : '';

	// begin output
	$output = '<blockquote' . $id . ' class="pro-blockquote pro-blockquote-' . $type . $icon . $class . '"' . $quote_style . '>';
	$output .= ( $icon ) ? '<div class="pro-blockquote-icon fa fa-quote-left"' . $icon_style . '></div>' : '';
	$output .= ( $icon ) ? '<div class="pro-blockquote-content">' : '';
	$output .= startup_pro_set_wpautop( $content ) . $cite;
	$output .= ( $icon ) ? '</div>' : '';
	$output .= '</blockquote>';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_blockquote', 'startup_pro_blockquote' );

/**
 *
 * PRO Blog
 * @since 1.0.0
 * @version 1.1.0
 *
 */
function startup_pro_blog( $atts, $content = '', $id = '' ) {
	global $wp_query, $paged, $post, $startup_pro_blog_column, $startup_pro_blog_image_size;
	extract( shortcode_atts( array(
		'id'      => '',
		'class'   => '',
		'cats'    => 0,
		'limit'   => '10',
		'type'    => 'default',
		'nav'     => '',
		'columns' => 3,
		'size'    => '',
	), $atts ) );
	$id                      = ( $id ) ? ' id="' . $id . '"' : '';
	$class                   = ( $class ) ? ' ' . $class : '';
	$blog_layout             = ( $type == 'grid' || $type == 'masonry' ) ? 'masonry' : 'default blog-layout-' . $type;
	$data_layout             = ( $type == 'grid' ) ? 'fitRows' : 'masonry';
	$startup_pro_blog_column     = $columns;
	$startup_pro_blog_image_size = $size;
	if ( is_front_page() || is_home() ) {
		$paged = ( get_query_var( 'paged' ) ) ? intval( get_query_var( 'paged' ) ) : intval( get_query_var( 'page' ) );
	} else {
		$paged = intval( get_query_var( 'paged' ) );
	}
	// Query args
	$args = array(
		'posts_per_page' => $limit,
		'paged'          => $paged,
	);
	// Nav args
	$nav_args = array(
		'size'           => $size,
		'columns'        => $columns,
		'nav'            => $nav,
		'template'       => $type,
		'posts_per_page' => $limit,
		'isotope'        => ( $type == 'default' || $type == 'medium' || $type == 'small' ) ? '0' : '1',
	);
	if ( $cats ) {
		$args['cat']     = $cats;
		$nav_args['cat'] = $cats;
	}
	$tmp_query = $wp_query;
	$wp_query = new WP_Query( $args );
	ob_start();
	if ( have_posts() ) :
		echo '<div' . $id . ' class="blog-' . $blog_layout . $class . '">';
		if ( $type == 'masonry' || $type == 'grid' ) {
			echo '<div class="isotope-container">';
			echo '<div class="isotope-loading pro-loader"></div>';
			echo '<div class="isotope-wrapper">';
			echo '<div class="row isotope-blog isotope-loop" data-layout="' . $data_layout . '">';
			while( have_posts() ) : the_post();
				get_template_part( 'page-templates/page-blog', 'masonry' );
			endwhile;
			echo '</div><!-- isotope-blog -->';
			startup_pro_paging_nav( $nav_args );
			echo '</div><!-- isotope-wrapper -->';
			echo '</div><!-- isotope-container -->';
		} else {
			// loop posts
			while( have_posts() ) : the_post();
				global $more;
				$more = 0;
				if ( $type == 'default' ) {
					get_template_part( 'post-formats/content', get_post_format() );
				} else {
					get_template_part( 'page-templates/page-blog', $type );
				}
			endwhile;
			// loop nav
			startup_pro_paging_nav( $nav_args );
		}
		echo '</div>';
	else:
		echo '<span class="fa fa-warning-sign"></span> please check settings.';
	endif;
	wp_reset_query();
	wp_reset_postdata();
	$wp_query = $tmp_query;
	$output = ob_get_clean();
	return $output;
}
add_shortcode( 'startup_pro_blog', 'startup_pro_blog' );

/**
 *
 * PRO Button
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_button( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'id'                 => '',
		'class'              => '',
		'title'              => '',
		'href'               => '#',
		'target'             => '',
		// models
		'type'               => 'flat',
		'shape'              => 'square',
		'size'               => 'small',
		'color'              => 'accent',
		'icon'               => '',
		// utilities
		'align'              => '',
		'block'              => '',
		'textshadow'         => '',
		'no_uppercase'       => '',
		'no_bold'            => '',
		'no_transition'      => '',
		// customize
		'bgcolor'            => '',
		'bghovercolor'       => '',
		'textcolor'          => '',
		'texthovercolor'     => '',
		'bordercolor'        => '',
		'borderhovercolor'   => '',
		'in_style'           => '',
		'in_style_hover'     => '',
		// animation
		'animation'          => '',
		'animation_delay'    => '',
		'animation_duration' => '',
	), $atts ) );
	if ( function_exists( 'vc_parse_multi_attribute' ) ) {
		$parse_args = vc_parse_multi_attribute( $href );
		$href = ( isset( $parse_args['url'] ) ) ? $parse_args['url'] : $href;
		$title = ( isset( $parse_args['title'] ) ) ? $parse_args['title'] : $title;
		$target = ( isset( $parse_args['target'] ) ) ? trim( $parse_args['target'] ) : $target;
	}
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$target = ( $target ) ? ' target="' . $target . '"' : '';
	$title = ( $title ) ? ' title="' . startup_pro_htmlentities( $title ) . '"' : '';
	$align_block = ( $block ) ? ' pro-btn-block' : '';
	$align = ( $align ) ? ' text-' . $align : '';
	$textshadow = ( $textshadow ) ? ' pro-btn-shadow' : '';
	$no_uppercase = ( $no_uppercase ) ? ' pro-btn-no-uppercase' : '';
	$no_bold = ( $no_bold ) ? ' pro-btn-no-bold' : '';
	$no_transition = ( $no_transition ) ? ' pro-btn-no-transition' : '';
	$icon = ( $icon ) ? '<i class="' . startup_pro_icon_class( $icon ) . '"></i>' : '';
	$uniqid_class = '';
	$customize = ( $bgcolor || $textcolor || $bordercolor || $bghovercolor || $texthovercolor || $borderhovercolor ) ? true : false;
	// element animation
	$animation = ( $animation ) ? ' pro-animation ' . $animation : '';
	$animation_data = ( $animation && $animation_delay ) ? ' data-delay="' . $animation_delay . '"' : '';
	$animation_data = ( $animation && $animation_duration ) ? $animation_data . ' data-duration="' . $animation_duration . '"' : $animation_data;
	// custom color
	if ( $customize || $in_style || $in_style_hover ) {
		$uniqid = uniqid();
		$custom_style = '';
		if ( $bgcolor || $textcolor || $bordercolor || $in_style ) {
			$custom_style .= '.pro-btn-custom-' . $uniqid . '{';
			$custom_style .= ( $bgcolor ) ? 'background-color:' . $bgcolor . ';' : '';
			$custom_style .= ( $textcolor ) ? 'color:' . $textcolor . '!important;' : '';
			$custom_style .= ( $bordercolor ) ? 'border-color:' . $bordercolor . ';' : '';
			$custom_style .= ( $in_style ) ? $in_style : '';
			$custom_style .= ( $type == '3d' && $bgcolor ) ? 'box-shadow:0 0.3em 0 ' . startup_pro_brightness( $bgcolor, - 0.7901 ) : '';
			$custom_style .= '}';
		}
		// hover colors
		if ( $bghovercolor || $texthovercolor || $borderhovercolor || $in_style_hover ) {
			$custom_style .= '.pro-btn-custom-' . $uniqid . ':hover{';
			$custom_style .= ( $bghovercolor ) ? 'background-color:' . $bghovercolor . ';' : '';
			$custom_style .= ( $texthovercolor ) ? 'color:' . $texthovercolor . '!important;' : '';
			$custom_style .= ( $borderhovercolor ) ? 'border-color:' . $borderhovercolor . ';' : '';
			$custom_style .= ( $in_style_hover ) ? $in_style_hover : '';
			$custom_style .= '}';
		}
		// add inline style
		startup_pro_add_inline_style( $custom_style );
		$uniqid_class = ' pro-btn-custom-' . $uniqid;
		$color = ( $customize ) ? 'own' : $color;
		$type = ( $type != '3d' && $customize ) ? 'custom' : $type;
	}
	// begin output
	$output = '';
	$output .= ( $align ) ? '<div class="pro-btn-align' . $align . $align_block . '">' : '';
	$output .= '<a' . $id . ' href="' . $href . '" class="pro-btn pro-btn-' . $type . ' pro-btn-' . $shape . ' pro-btn-' . $type . '-' . $color . ' pro-btn-' . $size . $no_uppercase . $no_bold . $no_transition . $textshadow . $align_block . $uniqid_class . $animation . $class . '"' . $animation_data . $target . $title . '>';
	$output .= $icon;
	$output .= do_shortcode( $content );
	$output .= '</a>';
	$output .= ( $align ) ? '</div>' : '';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_button', 'startup_pro_button' );
/**
 *
 * PRO Button Group
 * @version 1.0.0
 * @since 1.0.0
 *
 */
function startup_pro_button_group( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'id'    => '',
		'class' => '',
	), $atts ) );
	// begin output
	$output = '<div class="pro-btn-group">';
	$output .= do_shortcode( $content );
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_button_group', 'startup_pro_button_group' );
/**
 * PRO Clients
 * @since 1.0.0
 * @version 1.0.0
 */
function startup_pro_clients( $atts, $content = null ) {
	$args = shortcode_atts( array(
		'clients_groups' => '',
		'columns'        => 4,
		'hover_effect'   => 'yes',
		'border_color'   => ''
	), $atts );
	$group_id     = $args["clients_groups"];
	$columns      = $args["columns"];
	$hover_effect = $args["hover_effect"];
	$border_color = $args["border_color"];
	if ( $hover_effect == 'yes' ) {
		$hover_effect = 'pro-client-effect';
	} else {
		$hover_effect = '';
	}
	$box_width = 100 / $columns;
	if ( $group_id ) {
		$group = get_term( $group_id, 'clients-categories' );
	}
	$args = array(
		'post_type'      => 'startup_pro_clients',
		'posts_per_page' => - 1,
	);
	if ( $group ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'clients-categories',
				'field'    => 'slug',
				'terms'    => $group->slug
			)
		);
	}
	$specific_id = rand( 10000, 100000 );
	$loop        = new WP_Query( $args );
	$counter     = 1;
	$output .= '<ul id="' . $specific_id . '" class="pro-client pro-client-col-' . $columns . ' ' . $hover_effect . '">';
	foreach ( $loop->posts as $members ) {
		#GET CUSTOM INFO ON STAFF
		if ( $counter == $columns ) {
			$last_box = 'border-right:none;';
			$counter  = 1;
		} else {
			$last_box = '';
			$counter ++;
		}
		$extra_info = get_post_custom( $members->ID );
		if ( isset($extra_info["client_link"][0])) {
			$client_link = $extra_info["client_link"][0];
		} else {
			$client_link = '';
		}
		$output .= '<li style="width:' . $box_width . '%;' . $last_box . 'border-color:' . $border_color . ';");">';
		$output .= '<a style="width:100%;height:100%;" href="' . $client_link . '" target="_blank">';
		$attachment_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $members->ID ), 'full' );
		$output .= '<img style="max-height:100%;" src="' . esc_url($attachment_image_src[0]) . '" />';
		$output .= '</a>';
		$output .= '</li>';
	}
	$output .= '</ul>';
	$output .= '<script type="text/javascript">';
	$output .= 'jQuery(document).ready(function(){';
	$output .= "width = jQuery('#" . $specific_id . " li').width();";
	$output .= "jQuery('#" . $specific_id . " li').css('height', width);";
	$output .= '});';
	$output .= 'jQuery(window).resize(function(){';
	$output .= "width = jQuery('#" . $specific_id . " li').width();";
	$output .= "jQuery('#" . $specific_id . " li').css('height', width);";
	$output .= '});';
	$output .= '</script>';
	return $output;
}
add_shortcode( 'startup_pro_clients', 'startup_pro_clients' );
function startup_pro_clients_carousel( $atts, $content = null ) {
	$args = shortcode_atts( array(
		'clients_groups'       => '',
		'columns'              => 4,
		'hover_effect'         => '',
		'border_color'         => '',
		'arrow_color'          => '',
		'arrow_bg_color'       => '',
		'arrow_bg_hover_color' => ''
	), $atts );
	$group_id             = $args["clients_groups"];
	$columns              = $args["columns"];
	$hover_effect         = $args["hover_effect"];
	$border_color         = $args["border_color"];
	$arrow_color          = $args["arrow_color"];
	$arrow_bg_color       = $args["arrow_bg_color"];
	$arrow_bg_hover_color = $args["arrow_bg_hover_color"];
	if ( $columns == "" ) {
		$columns = 4;
	}
	if ( $hover_effect == "" ) {
		$hover_effect = "yes";
	}
	if ( $hover_effect == 'yes' ) {
		$hover_effect = 'pro-client-effect';
	} else {
		$hover_effect = '';
	}
	$box_width = 100 / $columns;
	if ( $group_id ) {
		$group = get_term( $group_id, 'clients-categories' );
	}
	$args = array(
		'post_type'      => 'startup_pro_clients',
		'posts_per_page' => - 1,
	);
	if ( isset($group) ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'clients-categories',
				'field'    => 'slug',
				'terms'    => $group->slug
			)
		);
	}
	$specific_id = rand( 10000, 100000 );
	$loop        = new WP_Query( $args );
	$output      = '';
	$output .= '<div class="pro-team-carousel specific_' . $specific_id . '">';
	foreach ( $loop->posts as $members ) {
		#GET CUSTOM INFO ON STAFF
		$extra_info = get_post_custom( $members->ID );
		if ( isset($extra_info["client_link"][0])) {
			$client_link = $extra_info["client_link"][0];
		} else {
			$client_link = '';
		}
		$box_width_style    = $box_width ? 'width:' . $box_width . '%;' : '';
		$border_color_style = $border_color ? 'border-color:' . $border_color . ';' : '';
		$output .= '<div style="' . $box_width_style . $border_color_style . '">';
		$output .= '<a style="width:100%;height:100%;" href="' . $client_link . '" target="_blank">';
		$attachment_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $members->ID ), 'full' );
		$output .= '<img style="max-height:100%;width:100%;" alt="client-' . $members->ID . '" src="' . esc_url($attachment_image_src[0]) . '" />';
		$output .= '</a>';
		$output .= '</div>';
	}
	$output .= '</div>';
	$style = '.specific_' . $specific_id . ' .pro-team-member:hover > .about, .specific_' . $specific_id . ' .pro-team-member:hover > .social{top:200px;}.specific_' . $specific_id . ' .pro-team-member:hover > h4{  -webkit-transform: scale(1);transform: scale(1);-moz-transform: scale(1);-o-transform: scale(1);-ms-transform: scale(1);}';
	$style .= '.specific_' . $specific_id . ' > button{background-color:' . $arrow_bg_color . ' ;}.specific_' . $specific_id . ' > button:hover{background-color:' . $arrow_bg_hover_color . ';-webkit-transition: background-color 0.2s linear;-moz-transition: background-color 0.2s linear;-ms-transition: background-color 0.2s linear;-o-transition: background-color 0.2s linear;transition: background-color 0.2s linear;}';
	startup_pro_add_inline_style( $style );
	$style = '.slick-prev, .slick-next{color:' . $arrow_color . ' !important;}';
	startup_pro_add_inline_style( $style );
	$output .= '<script type="text/javascript">
          jQuery(".specific_' . $specific_id . '").slick({
            slidesToShow: ' . $columns . ',
            sliderToScroll: 1,
            lazyLoad: "ondemand",
            autoplay: "true",
            arrows: true,
            dots: true,
            responsive: [
	            {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
		    ]
          });
      </script>';
	return $output;
	return $output;
}
add_shortcode( 'startup_pro_clients_carousel', 'startup_pro_clients_carousel' );
/**
 *
 * SMART Call to Action
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function smart_cta( $atts, $content = '', $id = '' ) {
	global $smart_cta_blocks;
	$smart_cta_blocks = array();
	extract( shortcode_atts( array(
		'id'            => '',
		'class'         => '',
		'in_style'      => '',
		'type'          => 'outlined',
		'top'           => '',
		'right'         => '',
		'bottom'        => '',
		'left'          => '',
		'bgcolor'       => '',
		'text_color'    => '',
		'border_color'  => '',
		'border_hcolor' => '',
	), $atts ) );
	do_shortcode( $content );
	// is not empty clients
	if ( empty( $smart_cta_blocks ) ) {
		return;
	}
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$border_top = ( $top ) ? ' pro-cta-top' : '';
	$border_right = ( $right ) ? ' pro-cta-right' : '';
	$border_bottom = ( $bottom ) ? ' pro-cta-bottom' : '';
	$border_left = ( $left ) ? ' pro-cta-left' : '';
	$box_type = ( $type == 'bgcolor' ) ? ' pro-cta-bgcolor' : '';
	$text_color = ( $text_color ) ? 'color:' . $text_color . ';' : '';
	$border_color = ( $border_color ) ? 'border-color:' . $border_color . ';' : '';
	$bgcolor = ( $bgcolor ) ? 'background-color:' . $bgcolor . ';' : '';
	$el_style = ( $text_color || $border_color || $bgcolor || $in_style ) ? ' style="' . $text_color . $border_color . $bgcolor . $in_style . '"' : '';
	// highlight bordercolor
	$border_hcolor = ( $border_hcolor ) ? ' style="border-color:' . $border_hcolor . ';"' : '';
	// begin output
	$output = '';
	$output .= '<div' . $id . ' class="pro-cta' . $box_type . $class . '"' . $el_style . '>';
	foreach ( $smart_cta_blocks as $key => $block ) {
		$output .= ( ! empty( $block['content'] ) ) ? '<div class="pro-cta-block">' . do_shortcode( $block['content'] ) . '</div>' : '';
	}
	$output .= ( $type == 'outlined' ) ? '<div class="pro-cta-outlined' . $border_top . $border_right . $border_bottom . $border_left . '"' . $border_hcolor . '></div>' : '';
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'smart_cta', 'smart_cta' );
/**
 *
 * SMART Call to Action Block
 * @version 1.0.0
 * @since 1.0.0
 *
 */
function smart_cta_block( $atts, $content = '', $id = '' ) {
	global $smart_cta_blocks;
	$smart_cta_blocks[] = array( 'atts' => $atts, 'content' => $content );
	return;
}
add_shortcode( 'smart_cta_block', 'smart_cta_block' );
/**
 *
 * SMART Accordions
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function smart_accordion( $atts, $content = '', $id = '' ) {
	global $smart_accordion_tabs;
	$smart_accordion_tabs = array();
	extract( shortcode_atts( array(
		'id'           => '',
		'class'        => '',
		'no_icons'     => '',
		'icon_color'   => '',
		'title_color'  => '',
		'border_color' => '',
		'active_tab'   => 0,
	), $atts ) );
	do_shortcode( $content );
	// is not empty clients
	if ( empty( $smart_accordion_tabs ) ) {
		return;
	}
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$el_style = ( $border_color ) ? ' style="border-color:' . $border_color . ';"' : '';
	$icon_style = ( $icon_color ) ? ' style="color:' . $icon_color . ';"' : '';
	// begin output
	$output = '<div' . $id . ' class="smart-accordions' . $class . '">';
	foreach ( $smart_accordion_tabs as $key => $tab ) {
		$selected = ( ( $key + 1 ) == $active_tab ) ? ' selected' : '';
		$opened = ( ( $key + 1 ) == $active_tab ) ? ' style="display: block;"' : '';
		$icon = ( isset( $tab['atts']['icon'] ) ) ? startup_pro_icon_class( $tab['atts']['icon'] ) : 'smart-in fa smart-anim-icon';
		$icon = ( ! $no_icons ) ? '<i class="' . $icon . '"' . $icon_style . '></i>' : '';
		$title = ( $title_color ) ? '<span style="color:' . $title_color . ';">' . $tab['atts']['title'] . '</span>' : $tab['atts']['title'];
		$output .= '<div class="smart-accordion"' . $el_style . '>';
		$output .= '<h6 class="smart-accordion-title' . $selected . '">' . $icon . $title . '</h6>';
		$output .= '<div class="smart-accordion-content"' . $opened . '>' . do_shortcode( $tab['content'] ) . '</div>';
		$output .= '</div>';
	}
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'vc_accordion', 'smart_accordion' );
/**
 *
 * SMART Accordion
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function smart_accordion_tab( $atts, $content = '', $id = '' ) {
	global $smart_accordion_tabs;
	$smart_accordion_tabs[] = array( 'atts' => $atts, 'content' => $content );
	return;
}
add_shortcode( 'vc_accordion_tab', 'smart_accordion_tab' );
/**
 *
 * PRO Divider Icon
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_divider_icon( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'id'            => '',
		'class'         => '',
		'in_style'      => '',
		'icon'          => '',
		'text'          => '',
		'align'         => 'center',
		'size'          => '',
		'color'         => '',
		'border_color'  => '',
		'border_type'   => '',
		'width'         => '',
		'custom_width'  => '',
		'margin'        => '',
		'margin_top'    => '',
		'margin_bottom' => '',
		'no_space'      => '',
	), $atts ) );
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$align = ( $align ) ? ' text-' . $align : '';
	$border_type = ( $border_type ) ? ' pro-divider-icon-' . $border_type : '';
	$no_space = ( $no_space ) ? ' pro-divider-inner-no-space' : '';
	$margin_class = ( $margin ) ? ' ' . $margin . '-margin' : '';
	$custom_margin = ( $margin == 'custom' ) ? 'margin-top:' . $margin_top . 'px;margin-bottom:' . $margin_bottom . 'px;' : '';
	$width = ( $width == 'custom' && $custom_width ) ? startup_pro_validpx( $custom_width ) : $width;
	$width = ( $width ) ? 'width:' . $width . ';' : '';
	$el_style = ( $width || $custom_margin || $in_style ) ? ' style="' . $width . $custom_margin . $in_style . '"' : '';
	$size = ( $size ) ? 'font-size:' . startup_pro_esc_string( $size ) . 'px;' : '';
	$color = ( $color ) ? 'color:' . $color . ';' : '';
	$border_color = ( $border_color ) ? 'border-top-color:' . $border_color . ';' : '';
	$inner_style = ( $size || $color || $border_color ) ? ' style="' . $size . $color . $border_color . '"' : '';
	// begin output
	$output = '<div' . $id . ' class="pro-divider-icon' . $align . $margin_class . $class . '"' . $el_style . '>';
	$output .= '<div class="pro-divider-icon-inner' . $no_space . $border_type . '"' . $inner_style . '>';
	$output .= ( $icon ) ? '<i class="' . startup_pro_icon_class( $icon ) . '"></i>' : '';
	$output .= ( $text ) ? '<span class="inner-text">' . $text . '</span>' : '';
	$output .= do_shortcode( $content );
	$output .= '</div>';
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_divider_icon', 'startup_pro_divider_icon' );
/**
 *
 * PRO Tab
 * @version 1.0.0
 * @since 1.0.0
 *
 */
/**
 *
 * PRO Gallery Shortcode Merged with RoyalSlider
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_post_gallery_html( $gallery_html, $attr ) {
	if ( isset( $attr['protype'] ) ) {
		switch ( $attr['protype'] ) {
			case 'slideshow':
			case 'gallery_thumb':
			case 'gallery_nearby':
				//printr($gallery_html);
				$gallery_html = startup_pro_gallery_royalslider( $attr );
				//printr($gallery_html);
				break;
			case 'gallery_lightbox':
				$gallery_html = startup_pro_gallery_fancybox( $attr );
				break;
			default:
				break;
		}
	}
	return $gallery_html;
}
add_filter( 'post_gallery', 'startup_pro_post_gallery_html', 10, 2 );
if ( ! function_exists( 'startup_pro_gallery_royalslider' ) ) {
	function startup_pro_gallery_royalslider( $attr ) {
		// get post
		$post = get_post();
		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( ! empty( $attr['ids'] ) ) {
			if ( empty( $attr['orderby'] ) ) {
				$attr['orderby'] = 'post__in';
			}
		}
		// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
		if ( isset( $attr['orderby'] ) ) {
			$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
			if ( ! $attr['orderby'] ) {
				unset( $attr['orderby'] );
			}
		}
		extract( shortcode_atts( array(
			'id'          => ( $post ) ? $post->ID : 0,
			'class'       => '',
			'order'       => 'ASC',
			'orderby'     => 'menu_order ID',
			'size'        => 'large',
			'include'     => '',
			'exclude'     => '',
			'autoplay'    => 5000,
			'scale'       => 'fill',
			'protype'     => '',
			'width'       => 848,
			'height'      => 400,
			'orientation' => 'horizontal',
			'fullscreen'  => '',
			'loop'        => false,
			'transition'  => 'move',
		), $attr, 'gallery' ) );
		wp_enqueue_style( 'pro-royalslider' );
		wp_enqueue_script( 'pro-royalslider' );
		$id = intval( $id );
		$slider_id = uniqid();
		// set rs-slider class names
		$classes = ( ! empty( $class ) ) ? array( $class ) : array();
		$classes[] = ( $protype == 'gallery_thumb' || $protype == 'gallery_nearby' ) ? 'rsDefault' : 'rsMinW';
		$classes[] = ( $protype == 'gallery_nearby' ) ? 'visibleNearby' : '';
		$classes[] = ( $scale == 'fill' ) ? 'rsFill' : '';
		// get attachments
		if ( ! empty( $include ) ) {
			$_attachments = get_posts( array( 'include'        => $include,
			                                  'post_status'    => 'inherit',
			                                  'post_type'      => 'attachment',
			                                  'post_mime_type' => 'image',
			                                  'order'          => $order,
			                                  'orderby'        => $orderby
			) );
			$attachments = array();
			foreach ( $_attachments as $key => $val ) {
				$attachments[ $val->ID ] = $_attachments[ $key ];
			}
		} elseif ( ! empty( $exclude ) ) {
			$attachments = get_children( array( 'post_parent'    => $id,
			                                    'exclude'        => $exclude,
			                                    'post_status'    => 'inherit',
			                                    'post_type'      => 'attachment',
			                                    'post_mime_type' => 'image',
			                                    'order'          => $order,
			                                    'orderby'        => $orderby
			) );
		} else {
			$attachments = get_children( array( 'post_parent'    => $id,
			                                    'post_status'    => 'inherit',
			                                    'post_type'      => 'attachment',
			                                    'post_mime_type' => 'image',
			                                    'order'          => $order,
			                                    'orderby'        => $orderby
			) );
		}
		// check if empty attachments
		if ( empty( $attachments ) ) {
			return '';
		}
		// begin slider settings
		$slider_settings = array(
			'slidesSpacing'         => 1,
			'arrowsNavAutoHide'     => false,
			'arrowsNavAutoHide'     => false,
			'autoScaleSlider'       => true,
			'keyboardNavEnabled'    => true,
			'imageScaleMode'        => $scale,
			'autoScaleSliderWidth'  => $width,
			'autoScaleSliderHeight' => $height,
			'transitionType'        => $transition,
			'loop'                  => $loop,
			'easeInOut'             => 'easeOutExpo',
			'easeOut'               => 'easeOutExpo',
			'sliderDrag'            => true
		);
		// if autoplay isset
		if ( $autoplay ) {
			$slider_settings['autoplay'] = array(
				'enabled' => true,
				'delay'   => $autoplay,
			);
		}
		// if gallery with thumbnail
		if ( $protype == 'gallery_thumb' ) {
			$slider_settings['imageScalePadding'] = 1;
			$slider_settings['controlNavigation'] = 'thumbnails';
			$slider_settings['thumbs'] = array(
				'orientation' => $orientation,
				'spacing'     => 1,
				'firstMargin' => false,
			);
		}
		// if gallery with thumbnail
		if ( ( $protype == 'gallery_thumb' && $fullscreen !== 'false' ) || $fullscreen == 'true' ) {
			$slider_settings['fullscreen'] = array(
				'enabled'  => true,
				'nativeFS' => true,
			);
		}
		// Gallery visibleNearby
		if ( $protype == 'gallery_nearby' ) {
			$slider_settings['imageScalePadding'] = 8;
			$slider_settings['addActiveClass'] = true;
			$slider_settings['arrowsNav'] = false;
			$slider_settings['controlNavigation'] = 'none';
			$slider_settings['fadeinLoadedSlide'] = false;
			$slider_settings['globalCaption'] = true;
			$slider_settings['globalCaptionInside'] = false;
			$slider_settings['imageScaleMode'] = ( ! empty( $attr['scale'] ) ) ? $scale : 'fit-if-smaller';
			$slider_settings['loop'] = ( ! empty( $attr['loop'] ) ) ? $loop : true;
			$slider_settings['visibleNearby'] = array(
				'enabled'               => true,
				'centerArea'            => 0.5,
				'center'                => true,
				'breakpoint'            => 650,
				'breakpointCenterArea'  => 0.64,
				'navigateByCenterClick' => true,
			);
		}
		// filter for slider_settings
		$slider_settings = apply_filters( 'startup_pro_gallery_slider_settings', $slider_settings, $id );
		$output = '<div class="royalslider-token-' . $slider_id . ' postSlider royalSlider ' . join( ' ', array_filter( $classes ) ) . '">';
		foreach ( $attachments as $attachment_id => $attachment ) {
			$image = wp_get_attachment_image_src( $attachment_id, $size );
			if ( $protype == 'gallery_thumb' ) {
				$thumb = wp_get_attachment_image_src( $attachment_id, 'thumbnail' );
				$thumb = esc_url($thumb[0]);
			}
			$thumb = ( ! empty( $thumb ) ) ? ' data-rsTmb="' . $thumb . '"' : '';
			$expert = ( trim( $attachment->post_excerpt ) ) ? '<span>' . wptexturize( $attachment->post_excerpt ) . '</span>' : '';
			$nearby = ( $protype == 'gallery_nearby' && trim( $attachment->post_title ) ) ? '<span class="rsGCaptionText">' . wptexturize( $attachment->post_title ) . $expert . '</span>' : '';
			$output .= '<div class="rsContent">';
			$output .= ( trim( $attachment->post_excerpt ) && $protype !== 'gallery_nearby' ) ? '<div class="photoCaption">' . $expert . '</div>' : '';
			$output .= '<a class="rsImg"' . $thumb . ' href="' . esc_url($image[0]) . '">' . $nearby . '</a>';
			$output .= '</div>';
		}
		$output .= '</div>';
		// royalSlider
		$output .= '<script type="text/javascript">var proj=jQuery;proj.noConflict();';
		$output .= 'proj(document).ready(function(){"use strict";proj(".royalslider-token-' . $slider_id . '").royalSlider(' . json_encode( $slider_settings ) . ');});';
		$output .= '</script><!-- /post-royalslider -->';
		return $output;
	}
}
if ( ! function_exists( 'startup_pro_gallery_fancybox' ) ) {
	function startup_pro_gallery_fancybox( $attr ) {
		$post = get_post();
		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( ! empty( $attr['ids'] ) ) {
			if ( empty( $attr['orderby'] ) ) {
				$attr['orderby'] = 'post__in';
			}
			$attr['include'] = $attr['ids'];
		}
		// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
		if ( isset( $attr['orderby'] ) ) {
			$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
			if ( ! $attr['orderby'] ) {
				unset( $attr['orderby'] );
			}
		}
		extract( shortcode_atts( array(
			'order'   => 'ASC',
			'orderby' => 'menu_order ID',
			'id'      => $post ? $post->ID : 0,
			'columns' => 3,
			'size'    => 'thumbnail',
			'include' => '',
			'exclude' => '',
			'link'    => ''
		), $attr, 'gallery' ) );
		$id = intval( $id );
		$uniqid = uniqid();
		if ( 'RAND' == $order ) {
			$orderby = 'none';
		}
		if ( ! empty( $include ) ) {
			$_attachments = get_posts( array( 'include'        => $include,
			                                  'post_status'    => 'inherit',
			                                  'post_type'      => 'attachment',
			                                  'post_mime_type' => 'image',
			                                  'order'          => $order,
			                                  'orderby'        => $orderby
			) );
			$attachments = array();
			foreach ( $_attachments as $key => $val ) {
				$attachments[ $val->ID ] = $_attachments[ $key ];
			}
		} elseif ( ! empty( $exclude ) ) {
			$attachments = get_children( array( 'post_parent'    => $id,
			                                    'exclude'        => $exclude,
			                                    'post_status'    => 'inherit',
			                                    'post_type'      => 'attachment',
			                                    'post_mime_type' => 'image',
			                                    'order'          => $order,
			                                    'orderby'        => $orderby
			) );
		} else {
			$attachments = get_children( array( 'post_parent'    => $id,
			                                    'post_status'    => 'inherit',
			                                    'post_type'      => 'attachment',
			                                    'post_mime_type' => 'image',
			                                    'order'          => $order,
			                                    'orderby'        => $orderby
			) );
		}
		if ( empty( $attachments ) ) {
			return '';
		}
		$columns = intval( $columns );
		$itemwidth = ( $columns > 0 ) ? floor( 100 / $columns ) : 100;
		$float = is_rtl() ? 'right' : 'left';
		$size_class = sanitize_html_class( $size );
		$gallery_div = "<div class='gallery-fancybox gallery galleryid-{$id} gallery-columns-{$columns} gallery-size-{$size_class}'>";
		$output = $gallery_div;
		$i = 0;
		foreach ( $attachments as $id => $attachment ) {
			$image = wp_get_attachment_image( $id, $size, false );
			$output .= "<dl class='gallery-item'>";
			$output .= "<dt class='gallery-icon'><a href=" . $attachment->guid . " rel='gallery-" . $uniqid . "'>$image</a></dt>";
			$output .= "</dl>";
			if ( $columns > 0 && ++ $i % $columns == 0 ) {
				$output .= '<div class="clear"></div>';
			}
		}
		$output .= '<div class="clear"></div>';
		$output .= "</div>\n";
		return $output;
	}
}
/**
 *
 * PRO Icon
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_icon( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'id'             => '',
		'class'          => '',
		'in_style'       => '',
		'icon'           => '',
		'type'           => '',
		'shape'          => '',
		'size'           => '',
		'border'         => '',
		'border_width'   => '',
		'border_style'   => '',
		'background'     => '',
		'color'          => 'accent',
		'holder'         => 'span',
		'custom_size'    => '',
		'custom_spacing' => '',
	), $atts ) );
	// helpers
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$bordered = ( $type == 'bordered' ) ? true : false;
	$type_class = ( $type && $type != 'nocolor' ) ? ' pro-icon-' . $type : '';
	$shape_class = ( $shape ) ? ' pro-icon-' . $shape : '';
	$size_class = ( $size ) ? ' pro-icon-' . $size : '';
	// customize
	$custom_css = '';
	$outer_style = '';
	$custom_css .= ( $border_width ) ? 'border-width:' . $border_width . 'px;' : '';
	$custom_css .= ( $border_style ) ? 'border-style:' . $border_style . ';' : '';
	if ( $size == 'custom' && ( $custom_size || $custom_spacing ) ) {
		$custom_css .= ( $custom_size ) ? 'font-size:' . $custom_size . 'px;' : '';
		$custom_css .= ( $custom_spacing ) ? 'width:' . $custom_spacing . 'px;height:' . $custom_spacing . 'px;' : '';
	}
	if ( $color != 'accent' || $border || $background ) {
		$custom_css .= ( $color != 'accent' ) ? 'color:' . $color . ';' : '';
		$custom_css .= ( $background ) ? 'background-color:' . $background . ';' : '';
		$custom_css .= ( $border && ! $bordered ) ? 'border-color:' . $border . ';' : '';
		$outer_style = ( $border ) ? ' style="border-color:' . $border . ';"' : '';
		$color = 'custom';
	}
	// for clean icon
	$color = ( $type == 'nocolor' ) ? 'default' : $color;
	$in_style = ( ! empty( $custom_css ) || $in_style ) ? ' style="' . $custom_css . $in_style . '"' : '';
	// begin output
	$output = '';
	$output .= ( $bordered ) ? '<' . $holder . ' class="pro-icon-outer pro-icon-' . $color . $shape_class . '"' . $outer_style . '>' : '';
	$output .= '<' . $holder . $id . ' class="' . startup_pro_icon_class( $icon ) . ' pro-icon pro-icon-' . $color . $type_class . $shape_class . $size_class . $class . '"' . $in_style . '></' . $holder . '>';
	$output .= ( $bordered ) ? '</' . $holder . '>' : '';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_icon', 'startup_pro_icon' );
/**
 *
 * PRO Iconbox Shortcode
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_iconbox( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'id'                  => '',
		'class'               => '',
		'in_style'            => '',
		'align'               => 'left',
		'icon'                => '',
		'icon_type'           => '',
		'icon_size'           => '',
		'icon_shape'          => '',
		'icon_color'          => 'accent',
		'icon_background'     => '',
		'icon_border'         => '',
		'icon_border_width'   => '',
		'icon_border_style'   => '',
		'custom_icon_size'    => '',
		'custom_icon_spacing' => '',
		'title'               => '',
		'title_color'         => '',
		'title_size'          => 'h4',
		'custom_title_size'   => '',
		// in-progress
		'link'                => '',
		'apply_link'          => '',
		'target'              => '',
		'effect'              => 0,
		'animation'           => '',
		'animation_delay'     => '',
		'animation_duration'  => '',
	), $atts ) );
	if ( function_exists( 'vc_parse_multi_attribute' ) ) {
		$parse_args = vc_parse_multi_attribute( $link );
		$link = ( isset( $parse_args['url'] ) ) ? $parse_args['url'] : $link;
		$target = ( isset( $parse_args['target'] ) ) ? trim( $parse_args['target'] ) : $target;
	}
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$in_style = ( $in_style ) ? ' style="' . $in_style . '"' : '';
	$effect = ( $effect ) ? ' pro-iconbox-effect' : '';
	$position = ( $align == 'left' || $align == 'right' ) ? true : false;
	$target = ( $target ) ? ' target="' . $target . '"' : '';
	$title_color = ( $title_color ) ? 'color:' . $title_color . ';' : '';
	$title_heading = ( $title_size == 'custom' ) ? 'h4' : $title_size;
	$custom_title_size = ( $title_size == 'custom' && $custom_title_size ) ? 'font-size:' . $custom_title_size . 'px;' : '';
	$title_style = ( $title_color || $custom_title_size ) ? ' style="' . $title_color . $custom_title_size . '"' : '';
	// element animation
	$animation = ( $animation ) ? ' pro-animation ' . $animation : '';
	$animation_data = ( $animation && $animation_delay ) ? ' data-delay="' . $animation_delay . '"' : '';
	$animation_data = ( $animation && $animation_duration ) ? $animation_data . ' data-duration="' . $animation_duration . '"' : $animation_data;
	// begin output
	$output = '<div' . $id . ' class="pro-iconbox pro-iconbox-' . $align . $effect . $animation . $class . '"' . $animation_data . $in_style . '>';
	$output .= ( $link && ! $apply_link ) ? '<a href="' . $link . '"' . $target . ' class="pro-box-link">' : '';
	$output .= '<div class="pro-iconbox-header">';
	// icon
	if ( $icon ) {
		$icon_content = '<div class="pro-iconbox-icon">';
		$icon_content .= startup_pro_icon( array(
			'icon'           => $icon,
			'size'           => $icon_size,
			'type'           => $icon_type,
			'shape'          => $icon_shape,
			'color'          => $icon_color,
			'border'         => $icon_border,
			'background'     => $icon_background,
			'custom_size'    => $custom_icon_size,
			'custom_spacing' => $custom_icon_spacing,
			'border_width'   => $icon_border_width,
			'border_style'   => $icon_border_style,
		) );
		$icon_content .= '</div>';
	}
	$output .= ( $icon && $align != 'heading-right' ) ? $icon_content : '';
	$output .= ( $position ) ? '</div>' : '';
	// end pro-iconbox-header
	$output .= ( $position ) ? '<div class="pro-iconbox-block">' : '';
	// title
	if ( $title ) {
		$output .= '<div class="pro-iconbox-title">';
		$output .= '<' . $title_heading . ' class="pro-iconbox-heading"' . $title_style . '>';
		$output .= ( $link && $apply_link ) ? '<a href="' . $link . '"' . $target . '>' : '';
		$output .= $title;
		$output .= ( $link && $apply_link ) ? '</a>' : '';
		$output .= '</' . $title_heading . '>';
		$output .= '</div>';
	}
	$output .= ( $icon && $align == 'heading-right' ) ? $icon_content : '';
	$output .= ( ! $position ) ? '</div>' : ''; // end pro-iconbox-header
	$output .= '<div class="pro-iconbox-text">';
	$output .= startup_pro_set_wpautop( $content );
	$output .= '</div>';
	$output .= ( $position ) ? '</div>' : ''; // end pro-iconbox-block
	$output .= ( $link && ! $apply_link ) ? '</a>' : '';
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_iconbox', 'startup_pro_iconbox' );
/**
 *
 * PRO Portfolio
 * @since 1.0.0
 * @version 1.1.0
 *
 */
function startup_pro_portfolio( $atts, $content = '', $id = '' ) {
	global $wp_query, $paged, $post;
	$defaults = array(
		'id'                  => '',
		'class'               => '',
		'cats'                => 0,
		'style'               => '',
		'columns'             => '',
		'layout'              => '',
		'limit'               => '',
		'nav'                 => '',
		'model'               => '',
		'size'                => '',
		'no_filter'           => '',
		'filter_align'        => '',
		'filter_shape'        => '',
		'filter_color'        => '',
		'filter_hover_color'  => '',
		'filter_border_width' => '',
	);
	extract( shortcode_atts( $defaults, $atts ) );
	$is_row = ( $style == 'default' ) ? ' row' : '';
	if ( is_front_page() || is_home() ) {
		$paged = ( get_query_var( 'paged' ) ) ? intval( get_query_var( 'paged' ) ) : intval( get_query_var( 'page' ) );
	} else {
		$paged = intval( get_query_var( 'paged' ) );
	}
	// Query
	$args = array(
		'posts_per_page' => $limit,
		'post_type'      => 'portfolio',
		'paged'          => $paged,
	);
	if ( $cats ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'portfolio-category',
				'field'    => 'ids',
				'terms'    => explode( ',', $cats )
			)
		);
	}
	$tmp_query = $wp_query;
	$wp_query = new WP_Query( $args );
	ob_start();
	if ( have_posts() ) :
		echo '<div class="portfolio-loop portfolio-' . $style . ' portfolio-model-' . $model . '">';
		// custom colors
		$portfolio_class = '';
		$loader_class = '';
		if ( $filter_color || $filter_hover_color || $filter_border_width ) {
			$custom_style = '';
			$portfolio_uniqid = uniqid();
			if ( $filter_hover_color ) {
				$custom_style .= '.portfolio-' . $portfolio_uniqid . ' a:hover,';
				$custom_style .= '.portfolio-' . $portfolio_uniqid . ' a.active{';
				$custom_style .= 'color:' . $filter_hover_color . '!important;';
				$custom_style .= 'border-color:' . $filter_hover_color . '!important;';
				$custom_style .= '}';
			}
			if ( $filter_color || $filter_border_width ) {
				$custom_style .= '.portfolio-' . $portfolio_uniqid . ' a{';
				$custom_style .= ( $filter_color ) ? 'color:' . $filter_color . '!important;border-color:' . $filter_color . '!important;' : '';
				$custom_style .= ( $filter_border_width ) ? 'border-width:' . startup_pro_esc_string( $filter_border_width ) . 'px!important;' : '';
				$custom_style .= '}';
			}
			// add inline style
			startup_pro_add_inline_style( $custom_style );
			$portfolio_class = ' portfolio-' . $portfolio_uniqid;
			$loader_class = ' loader-' . $portfolio_uniqid;
		}
		// isotope-container
		echo '<div class="isotope-container">';
		echo '<div class="isotope-loading pro-loader' . $loader_class . '"></div>';
		// isotope-wrapper
		echo '<div class="isotope-wrapper">';
		// isotope-filter
		if ( ! $no_filter ) {
			$filter_args = array(
				'echo'     => 0,
				'title_li' => '',
				'style'    => 'none',
				'taxonomy' => 'portfolio-category',
				'walker'   => new Walker_Portfolio_List_Categories(),
			);
			if ( $cats ) {
				$exp_cats = explode( ',', $cats );
				$new_cats = array();
				foreach ( $exp_cats as $cat_value ) {
					$has_children = get_term_children( $cat_value, 'portfolio-category' );
					if ( ! empty( $has_children ) ) {
						$new_cats[] = implode( ',', $has_children );
					} else {
						$new_cats[] = $cat_value;
					}
				}
				$filter_args['include'] = implode( ',', $new_cats );
			}
			$filter_args = wp_parse_args( $args, $filter_args );
			echo '<div class="container">';
			echo '<div class="isotope-filter isotope-filter-' . $filter_shape . ' text-' . $filter_align . $portfolio_class . '">';
			echo '<a href="#" data-filter="*" class="active">' . esc_html__( 'All', 'startup-pro' ) . '</a>';
			echo wp_list_categories( $filter_args );
			echo '</div>';
			echo '</div>';
		}
		// isotope-portfolio
		echo '<div class="isotope-portfolio isotope-loop' . $is_row . '" data-layout="' . $layout . '">';
		while( have_posts() ) : the_post();
			$item_args = array(
				'columns' => $columns,
				'model'   => $model,
				'size'    => $size,
			);
			startup_pro_portfolio_item( $item_args );
		endwhile;
		echo '</div>'; // isotope-portfolio
		// portfolio-pagination
		if ( $nav != 'hide' ) {
			$nav_args = array(
				'isotope'        => 1,
				'post_type'      => 'portfolio',
				'nav'            => $nav,
				'posts_per_page' => $limit,
				'columns'        => $columns,
				'model'          => $model,
				'size'           => $size,
			);
			if ( $cats ) {
				$nav_args['cat'] = $cats;
			}
			startup_pro_paging_nav( $nav_args );
		}
		echo '<div class="clear"></div>'; // isotope-wrapper
		echo '</div>'; // isotope-wrapper
		echo '</div>'; // isotope-container
		echo '</div>';
	else:
		echo '<span class="fa fa-warning-sign"></span> nothing any portfolio item.';
	endif;
	wp_reset_query();
	wp_reset_postdata();
	$wp_query = $tmp_query;
	$output = ob_get_clean();
	return $output;
}
add_shortcode( 'startup_pro_portfolio', 'startup_pro_portfolio' );
/**
 *
 * PRO Story
 * @since 1.0.0
 * @version 1.1.0
 *
 */
function startup_pro_story( $atts, $content = '', $id = '' ) {
	global $wp_query, $paged, $post;
	$defaults = array(
		'id'                  => '',
		'class'               => '',
		'cats'                => 0,
		'style'               => '',
		'columns'             => '',
		'layout'              => '',
		'limit'               => '',
		'nav'                 => '',
		'model'               => '',
		'size'                => '',
		'no_filter'           => '',
		'filter_align'        => '',
		'filter_shape'        => '',
		'filter_color'        => '',
		'filter_hover_color'  => '',
		'filter_border_width' => '',
	);
	extract( shortcode_atts( $defaults, $atts ) );
	$is_row = ( $style == 'default' ) ? ' row' : '';
	if ( is_front_page() || is_home() ) {
		$paged = ( get_query_var( 'paged' ) ) ? intval( get_query_var( 'paged' ) ) : intval( get_query_var( 'page' ) );
	} else {
		$paged = intval( get_query_var( 'paged' ) );
	}
	// Query
	$args = array(
		'posts_per_page' => $limit,
		'post_type'      => 'story',
		'paged'          => $paged,
	);
	if ( $cats ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'story-category',
				'field'    => 'ids',
				'terms'    => explode( ',', $cats )
			)
		);
	}
	$tmp_query = $wp_query;
	$wp_query = new WP_Query( $args );
	ob_start();
	if ( have_posts() ) :
		echo '<div class="portfolio-loop portfolio-' . $style . ' portfolio-model-' . $model . '">';
		// custom colors
		$portfolio_class = '';
		$loader_class = '';
		if ( $filter_color || $filter_hover_color || $filter_border_width ) {
			$custom_style = '';
			$portfolio_uniqid = uniqid();
			if ( $filter_hover_color ) {
				$custom_style .= '.portfolio-' . $portfolio_uniqid . ' a:hover,';
				$custom_style .= '.portfolio-' . $portfolio_uniqid . ' a.active{';
				$custom_style .= 'color:' . $filter_hover_color . '!important;';
				$custom_style .= 'border-color:' . $filter_hover_color . '!important;';
				$custom_style .= '}';
			}
			if ( $filter_color || $filter_border_width ) {
				$custom_style .= '.portfolio-' . $portfolio_uniqid . ' a{';
				$custom_style .= ( $filter_color ) ? 'color:' . $filter_color . '!important;border-color:' . $filter_color . '!important;' : '';
				$custom_style .= ( $filter_border_width ) ? 'border-width:' . startup_pro_esc_string( $filter_border_width ) . 'px!important;' : '';
				$custom_style .= '}';
			}
			// add inline style
			startup_pro_add_inline_style( $custom_style );
			$portfolio_class = ' portfolio-' . $portfolio_uniqid;
			$loader_class = ' loader-' . $portfolio_uniqid;
		}
		// isotope-container
		echo '<div class="isotope-container">';
		echo '<div class="isotope-loading pro-loader' . $loader_class . '"></div>';
		// isotope-wrapper
		echo '<div class="isotope-wrapper">';
		// isotope-filter
		if ( ! $no_filter ) {
			$filter_args = array(
				'echo'     => 0,
				'title_li' => '',
				'style'    => 'none',
				'taxonomy' => 'story-category',
				'walker'   => new Walker_Story_List_Categories(),
			);
			if ( $cats ) {
				$exp_cats = explode( ',', $cats );
				$new_cats = array();
				foreach ( $exp_cats as $cat_value ) {
					$has_children = get_term_children( $cat_value, 'story-category' );
					if ( ! empty( $has_children ) ) {
						$new_cats[] = implode( ',', $has_children );
					} else {
						$new_cats[] = $cat_value;
					}
				}
				$filter_args['include'] = implode( ',', $new_cats );
			}
			$filter_args = wp_parse_args( $args, $filter_args );
			echo '<div class="container">';
			echo '<div class="isotope-filter isotope-filter-' . $filter_shape . ' text-' . $filter_align . $portfolio_class . '">';
			echo '<a href="#" data-filter="*" class="active">' . esc_html__( 'All', 'startup-pro' ) . '</a>';
			echo wp_list_categories( $filter_args );
			echo '</div>';
			echo '</div>';
		}
		// isotope-portfolio
		echo '<div class="isotope-portfolio isotope-loop' . $is_row . '" data-layout="' . $layout . '">';
		while( have_posts() ) : the_post();
			$item_args = array(
				'columns' => $columns,
				'model'   => $model,
				'size'    => $size,
			);
			startup_pro_story_item( $item_args );
		endwhile;
		echo '</div>'; // isotope-portfolio
		// portfolio-pagination
		if ( $nav != 'hide' ) {
			$nav_args = array(
				'isotope'        => 1,
				'post_type'      => 'story',
				'nav'            => $nav,
				'posts_per_page' => $limit,
				'columns'        => $columns,
				'model'          => $model,
				'size'           => $size,
			);
			if ( $cats ) {
				$nav_args['cat'] = $cats;
			}
			startup_pro_paging_nav( $nav_args );
		}
		echo '<div class="clear"></div>'; // isotope-wrapper
		echo '</div>'; // isotope-wrapper
		echo '</div>'; // isotope-container
		echo '</div>';
	else:
		echo '<span class="fa fa-warning-sign"></span> nothing any story item.';
	endif;
	wp_reset_query();
	wp_reset_postdata();
	$wp_query = $tmp_query;
	$output = ob_get_clean();
	return $output;
}
add_shortcode( 'startup_pro_story', 'startup_pro_story' );
/**
 *
 * PRO Pricing Table
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_pricing_table( $atts, $content = '', $id = '' ) {
	global $startup_pro_pricing_columns;
	extract( shortcode_atts( array(
		'id'       => '',
		'class'    => '',
		'in_style' => '',
	), $atts ) );
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$in_style = ( $in_style ) ? ' style="' . $in_style . '"' : '';
	$regex = startup_pro_get_shortcode_regex( 'startup_pro_pricing_column' );
	// count columns
	preg_match_all( '/' . $regex . '/', $content, $count_list );
	$startup_pro_pricing_columns = count( $count_list[0] );
	// begin output
	$output = '<div' . $id . ' class="pro-pricing-table' . $class . '"' . $in_style . '>';
	$output .= do_shortcode( $content );
	$output .= '<div class="clear"></div>';
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_pricing_table', 'startup_pro_pricing_table' );
/**
 *
 * PRO Pricing Column
 * @version 1.0.0
 * @since 1.0.0
 *
 */
function startup_pro_pricing_column( $atts, $content = '', $id = '' ) {
	global $startup_pro_pricing_columns;
	extract( shortcode_atts( array(
		'id'             => '',
		'class'          => '',
		'in_style'       => '',
		'title'          => '',
		'price'          => '',
		'subtitle'       => '',
		'interval'       => '',
		'featured'       => '',
		'currency'       => '',
		'seperator'      => '/',
		'color'          => 'yellow',
		'title_bgcolor'  => '',
		'title_color'    => '',
		'price_bgcolor'  => '',
		'price_color'    => '',
		// button atts
		'button_content' => '',
		'button_link'    => '',
		'button_target'  => '',
		'button_icon'    => '',
		'button_type'    => 'flat',
		'button_shape'   => 'square',
		'button_size'    => 'sm',
		'button_color'   => 'accent',
		'button_block'   => '',
	), $atts ) );
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$in_style = ( $in_style ) ? ' style="' . $in_style . '"' : '';
	$featured = ( $featured ) ? ' featured' : '';
	$currency = ( $currency ) ? '<sup>' . $currency . '</sup>' : '';
	$interval = ( $interval ) ? '<span>' . $seperator . ' ' . $interval . '</span>' : '';
	$subtitle = ( $subtitle ) ? '<span class="pro-pricing-subtitle">' . $subtitle . '</span>' : '';
	$color_class = ( $color ) ? ' pro-pricing-column-fancy pro-pricing-column-' . $color : '';
	// customize
	$title_style = '';
	$price_style = '';
	if ( $color == 'custom' ) {
		// title
		$title_bgcolor = ( $title_bgcolor ) ? 'background-color:' . $title_bgcolor . ';' : '';
		$title_color = ( $title_color ) ? 'color:' . $title_color . ';' : '';
		$title_style = ( $title_bgcolor || $title_color ) ? ' style="' . $title_bgcolor . $title_color . '"' : '';
		// price style
		$price_bgcolor = ( $price_bgcolor ) ? 'background-color:' . $price_bgcolor . ';' : '';
		$price_color = ( $price_color ) ? 'color:' . $price_color . ';' : '';
		$price_style = ( $price_bgcolor || $price_color ) ? ' style="' . $price_bgcolor . $price_color . '"' : '';
	}
	// begin output
	$output = '<div' . $id . ' class="' . startup_pro_get_bootstrap( $startup_pro_pricing_columns ) . ' pro-pricing-column' . $color_class . $featured . $class . '"' . $in_style . '>';
	$output .= ( $title ) ? '<h2 class="pro-pricing-title"' . $title_style . '>' . $title . '</h2>' : '';
	$output .= ( $price ) ? '<h3 class="pro-pricing-price"' . $price_style . '>' . $currency . $price . $interval . $subtitle . '</h3>' : '';
	$output .= '<div class="pro-pricing-column-content">';
	$features_list = explode( '|', $content );
	$is_icon_list = ( has_shortcode( $content, 'startup_pro_icon_list_item' ) ) ? true : false;
	$icon_list_class = ( $is_icon_list ) ? ' class="pro-icon-list"' : '';
	$output .= '<ul' . $icon_list_class . '>';
	foreach ( $features_list as $key => $feature ) {
		$output .= ( $is_icon_list ) ? do_shortcode( $feature ) : '<li>' . do_shortcode( $feature ) . '</li>';
	}
	$output .= '</ul>';
	if ( $button_content ) {
		$output .= '<div class="pro-pricing-button">';
		$output .= startup_pro_button( array(
			'type'   => $button_type,
			'shape'  => $button_shape,
			'href'   => $button_link,
			'target' => $button_target,
			'size'   => $button_size,
			'color'  => $button_color,
			'icon'   => $button_icon,
			'block'  => $button_block,
		), $button_content );
		$output .= '</div>';
	}
	$output .= '</div>';
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_pricing_column', 'startup_pro_pricing_column' );
/**
 *
 * PRO Responsive Slider
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_responsive_slider( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'id'       => '',
		'class'    => '',
		'in_style' => '',
		'border'   => '',
		'protype'  => 'slideshow',
	), $atts ) );
	$atts['protype'] = $protype;
	$id              = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$in_style = ( $in_style ) ? ' style="' . $in_style . '"' : '';
	$border = ( $border ) ? ' pro-fluid-border' : '';
	$border_inline = ( $protype == 'gallery_nearby' ) ? ' pro-fluid-inline' : '';
	// begin output
	$output = '<div' . $id . ' class="pro-responsive-slider' . $border . $border_inline . $class . '"' . $in_style . '>';
	$output .= gallery_shortcode( $atts );
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_responsive_slider', 'startup_pro_responsive_slider' );
/**
 *
 * PRO Staff
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_staff( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'staff_groups'  => '',
		'to_show'       => '4',
		'heading_color' => '#262626',
		'text_color'    => '#647886',
		'job_color'     => '#262626',
		'border_color'  => '#f7c605',
		'hover_effect'  => 'no'
	), $atts ) );
	if ( $hover_effect == "yes" ) {
		$hover = 'true';
	} else {
		$hover = "false";
	}
	#GET POSTS FOR specific team
	if ( $staff_groups ) {
		$group = get_term( $staff_groups, 'groups' );
	}
	$args = array(
		'post_type'      => 'startup_pro_staff',
		'posts_per_page' => $to_show
	);
	//only if a group is set
	if ( $group ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'groups',
				'field'    => 'slug',
				'terms'    => $group->slug
			)
		);
	}
	$loop        = new WP_Query( $args );
	$specific_id = rand( 1000, 10000 );
	if ( $to_show != 5 && $to_show != '1' ) {
		$size_class = 12 / $to_show;
	}
	if ( $to_show == 5 && $to_show != '1' ) {
		$size_class = 'five';
	}
	if ( $to_show != 5 && $to_show != '1' ) {
		$size_class = 12 / $to_show;
	}
	if ( $to_show == 5 && $to_show != '1' ) {
		$size_class = 'five';
	}
	$output = '';
	if ( $to_show != 1 ) {
		$output .= '<div class="pro-team specific_' . $specific_id . '"><div class="container" style="padding-left:0px;padding-right:0px;"><div class="row">';
		foreach ( $loop->posts as $members ) {
			$border_color_style  = $border_color ? 'style="border-color:' . $border_color . ' !important;"' : '';
			$heading_color_style = $heading_color ? 'style="color:' . $heading_color . ';"' : '';
			$job_color_style     = $job_color ? 'style="color:' . $job_color . ';"' : '';
			$text_color_style    = $text_color ? 'style="color:' . $text_color . ';"' : '';
			#GET CUSTOM INFO ON STAFF
			$extra_info = get_post_custom( $members->ID );
			$output .= '<div class="pro-team-member col-md-' . $size_class . '">';
			$output .= '<figure ' . $border_color_style . '>';
			$output .= '<span class="outline"></span>';
			$attachment_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $members->ID ), 'full' );
			$output .= '<img src="' . esc_url($attachment_image_src[0]) . '" alt="<b>' . $members->post_title . '</b>" />';
			$output .= '</figure>';
			$output .= '<h4 ' . $heading_color_style . '>' . $members->post_title . '</h4>';
			$members_terms = wp_get_post_terms( $members->ID, 'staff-categories' );
			$output .= '<h6 ' . $job_color_style . '>' . $members_terms[0]->name . '</h6>';
			if ( isset($extra_info["staff_member_description"][0])) {
				$output .= '<div class="about" ' . $text_color_style . '>' . $extra_info["staff_member_description"][0] . '</div>';
			}
			$output .= '<div class="social">';

			if ( $extra_info['staff_member_email'][0] ) {
				$output .= '<a href="mailto:' . $extra_info['staff_member_email'][0] . '" target="_blank" class="fa fa-envelope" data-toggle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_facebook_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_facebook_link'][0] . '" target="_blank" class="fa fa-facebook" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_twitter_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_twitter_link'][0] . '" target="_blank" class="fa fa-twitter" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_linkedin_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_linkedin_link'][0] . '" target="_blank" class="fa fa-linkedin" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_skype_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_skype_link'][0] . '" target="_blank" class="fa fa-skype" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_vimeo_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_vimeo_link'][0] . '" target="_blank" class="fa fa-vimeo" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_youtube_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_youtube_link'][0] . '" target="_blank" class="fa fa-youtube" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_dribbble_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_dribbble_link'][0] . '" target="_blank" class="fa fa-dribbble" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_deviantart_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_deviantart_link'][0] . '" target="_blank" class="fa fa-deviantart" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_reddit_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_reddit_link'][0] . '" target="_blank" class="fa fa-reddit" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_behance_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_behance_link'][0] . '" target="_blank" class="fa fa-behance" data-toogle="tooltip" data-html="true" ></a>';
			}
			$output .= '</div>';
			$output .= '</div>';
		}
		$output .= '</div></div></div>';
		if ( $hover == 'false' ) {
			$style = '.specific_' . $specific_id . ' .pro-team-member:hover > figure{padding:0px; border:none; -webkit-transform: scale(1);  transform: scale(1);  -moz-transform: scale(1); -o-transform: scale(1); -ms-transform: scale(1); margin-bottom: 16px !important; }';
			$style .= '.specific_' . $specific_id . ' .pro-team-member:hover > .about, .specific_' . $specific_id . ' .pro-team-member:hover > .social{top:200px;}.specific_' . $specific_id . ' .pro-team-member:hover > h4{  -webkit-transform: scale(1);transform: scale(1);-moz-transform: scale(1);-o-transform: scale(1);-ms-transform: scale(1);}';
			startup_pro_add_inline_style( $style );
		}
	} else {
		$output .= '<div class="pro-team specific_' . $specific_id . '"><div style="padding:0;"><div class="row">';
		foreach ( $loop->posts as $members ) {
			#GET CUSTOM INFO ON STAFF
			$extra_info = get_post_custom( $members->ID );
			$output .= '<div class="pro-team-member col-md-6" style="float:none;">';
			$output .= '<figure style="border-color:' . $border_color . ' !important;">';
			$output .= '<span class="outline"></span>';
			$attachment_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $members->ID ), 'full' );
			$output .= '<img src="' . esc_url($attachment_image_src[0]) . '" alt="<b>' . $members->post_title . '</b>" />';
			$output .= '</figure>';
			$output .= '<h4 style="color:' . $heading_color . ';">' . $members->post_title . '</h4>';
			$members_terms = wp_get_post_terms( $members->ID, 'staff-categories' );
			$output .= '<h6 style="color:' . $job_color . ';">' . $members_terms[0]->name . '</h6>';
			$output .= '<div class="about" style="color:' . $text_color . ';">' . $extra_info["staff_member_description"][0] . '</div>';
			$output .= '<div class="social">';
			$output .= '<a href="mailto:' . $extra_info['staff_member_email'][0] . '" target="_blank" class="fa fa-envelope" data-toggle="tooltip" data-html="true" ></a>';
			if ( $extra_info['staff_member_facebook_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_facebook_link'][0] . '" target="_blank" class="fa fa-facebook" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_twitter_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_twitter_link'][0] . '" target="_blank" class="fa fa-twitter" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_linkedin_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_linkedin_link'][0] . '" target="_blank" class="fa fa-linkedin" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_skype_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_skype_link'][0] . '" target="_blank" class="fa fa-skype" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_vimeo_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_vimeo_link'][0] . '" target="_blank" class="fa fa-vimeo" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_youtube_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_youtube_link'][0] . '" target="_blank" class="fa fa-youtube" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_dribbble_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_dribbble_link'][0] . '" target="_blank" class="fa fa-dribbble" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_deviantart_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_deviantart_link'][0] . '" target="_blank" class="fa fa-deviantart" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_reddit_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_reddit_link'][0] . '" target="_blank" class="fa fa-reddit" data-toogle="tooltip" data-html="true" ></a>';
			}
			if ( $extra_info['staff_member_behance_link'][0] ) {
				$output .= '<a href="' . $extra_info['staff_member_behance_link'][0] . '" target="_blank" class="fa fa-behance" data-toogle="tooltip" data-html="true" ></a>';
			}
			$output .= '</div>';
			$output .= '</div>';
		}
		$output .= '</div></div></div>';
		if ( $hover == 'false' ) {
			$style = '.specific_' . $specific_id . ' .pro-team-member:hover > figure{padding:0px; border:none; -webkit-transform: scale(1);  transform: scale(1);  -moz-transform: scale(1); -o-transform: scale(1); -ms-transform: scale(1); margin-bottom: 16px !important; }';
			$style .= '.specific_' . $specific_id . ' .pro-team-member:hover > .about, .specific_' . $specific_id . ' .pro-team-member:hover > .social{top:200px;}.specific_' . $specific_id . ' .pro-team-member:hover > h4{  -webkit-transform: scale(1);transform: scale(1);-moz-transform: scale(1);-o-transform: scale(1);-ms-transform: scale(1);}';
			startup_pro_add_inline_style( $style );
		}
	}
	return $output;
}
add_shortcode( 'startup_pro_staff', 'startup_pro_staff' );
/**
 *
 * PRO Staff carousel
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_staff_carousel( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'hover_effect'         => 'no',
		'staff_groups'         => '',
		'posts_per_line'       => '4',
		'heading_color'        => '#262626',
		'text_color'           => '#647886',
		'job_color'            => '#262626',
		'border_color'         => '#f7c605',
		'scroll'               => 'yes',
		'arrow_color'          => '#fff',
		'arrow_bg_color'       => '#2c3e50',
		'arrow_bg_hover_color' => '#f7c605'
	), $atts ) );
	if ( $hover_effect == "" ) {
		$hover_effect = "no";
	}
	if ( $posts_per_line == "" ) {
		$posts_per_line = 4;
	}
	if ( $heading_color == "" ) {
		$heading_color = "#262626";
	}
	if ( $text_color == "" ) {
		$text_color = "#647886";
	}
	if ( $job_color == "" ) {
		$job_color = "#262626";
	}
	if ( $border_color == "" ) {
		$border_color = "#f7c605";
	}
	if ( $scroll == "" ) {
		$scroll = "yes";
	}
	if ( $arrow_color == "" ) {
		$arrow_color = "#fff";
	}
	if ( $arrow_bg_color == "" ) {
		$arrow_bg_color = "#2c3e50";
	}
	if ( $arrow_bg_hover_color == "" ) {
		$arrow_bg_hover_color = "#f7c605";
	}
	if ( $scroll == "yes" ) {
		$auto = 'true';
	} else {
		$auto = "false";
	}
	if ( $hover_effect == "yes" ) {
		$hover = 'true';
	} else {
		$hover = "false";
	}
	#GET POSTS FOR specific team
	if ( $staff_groups ) {
		$group = get_term( $staff_groups, 'groups' );
	}
	$args = array(
		'post_type'      => 'startup_pro_staff',
		'posts_per_page' => - 1,
	);
	//only if group is set
	if ( $group ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'groups',
				'field'    => 'slug',
				'terms'    => $group->slug
			)
		);
	}
	$loop        = new WP_Query( $args );
	$specific_id = rand( 1000, 10000 );
	if ( $posts_per_line === '1' ) {
		$size_class = '6" style="margin-left:25%;';
	} else {
		$size_class = '12';
	}
	$output = "";
	$output .= '<div class="pro-team-carousel specific_' . $specific_id . '">';
	foreach ( $loop->posts as $members ) {
		#GET CUSTOM INFO ON STAFF
		$border_color_style = $border_color ? 'style="border-color:' . $border_color . ' !important;"' : '';
		$extra_info         = get_post_custom( $members->ID );
		$output .= '<div>';
		$output .= '<div class="pro-team-member col-md-' . $size_class . '">';
		$output .= '<figure ' . $border_color_style . '>';
		$output .= '<span class="outline"></span>';
		$attachment_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $members->ID ), 'full' );
		$output .= '<img src="' . esc_url($attachment_image_src[0]) . '" alt="<b>' . $members->post_title . '</b>" />';
		$output .= '</figure>';
		$output .= '<h4 style="color:' . $heading_color . ';">' . $members->post_title . '</h4>';
		$members_terms = wp_get_post_terms( $members->ID, 'staff-categories' );
		$output .= '<h6 style="color:' . $job_color . ';">' . $members_terms[0]->name . '</h6>';
		if ( isset($extra_info["staff_member_description"][0])) {
			$output .= '<div class="about" style="color:' . $text_color . ';">' . $extra_info["staff_member_description"][0] . '</div>';
		}
		$output .= '<div class="social">';

		if ( isset( $extra_info['staff_member_email_adress'][0] ) ) {
			$output .= '<a href="mailto:' . $extra_info['staff_member_email_adress'][0] . '" target="_blank" class="fa fa-envelope" data-toggle="tooltip" data-html="true" ></a>';
		}
		if ( isset( $extra_info['staff_member_facebook_link'][0] ) ) {
			$output .= '<a href="' . $extra_info['staff_member_facebook_link'][0] . '" target="_blank" class="fa fa-facebook" data-toogle="tooltip" data-html="true" ></a>';
		}
		if ( isset( $extra_info['staff_member_twitter_link'][0] ) ) {
			$output .= '<a href="' . $extra_info['staff_member_twitter_link'][0] . '" target="_blank" class="fa fa-twitter" data-toogle="tooltip" data-html="true" ></a>';
		}
		if ( isset( $extra_info['staff_member_linkedin_link'][0] ) ) {
			$output .= '<a href="' . $extra_info['staff_member_linkedin_link'][0] . '" target="_blank" class="fa fa-linkedin" data-toogle="tooltip" data-html="true" ></a>';
		}
		if ( isset( $extra_info['staff_member_skype_link'][0] ) ) {
			$output .= '<a href="' . $extra_info['staff_member_skype_link'][0] . '" target="_blank" class="fa fa-skype" data-toogle="tooltip" data-html="true" ></a>';
		}
		if ( isset( $extra_info['staff_member_vimeo_link'][0] ) ) {
			$output .= '<a href="' . $extra_info['staff_member_vimeo_link'][0] . '" target="_blank" class="fa fa-vimeo" data-toogle="tooltip" data-html="true" ></a>';
		}
		if ( isset( $extra_info['staff_member_youtube_link'][0] ) ) {
			$output .= '<a href="' . $extra_info['staff_member_youtube_link'][0] . '" target="_blank" class="fa fa-youtube" data-toogle="tooltip" data-html="true" ></a>';
		}
		if ( isset( $extra_info['staff_member_dribbble_link'][0] ) ) {
			$output .= '<a href="' . $extra_info['staff_member_dribbble_link'][0] . '" target="_blank" class="fa fa-dribbble" data-toogle="tooltip" data-html="true" ></a>';
		}
		if ( isset( $extra_info['staff_member_deviantart_link'][0] ) ) {
			$output .= '<a href="' . $extra_info['staff_member_deviantart_link'][0] . '" target="_blank" class="fa fa-deviantart" data-toogle="tooltip" data-html="true" ></a>';
		}
		if ( isset( $extra_info['staff_member_reddit_link'][0] ) ) {
			$output .= '<a href="' . $extra_info['staff_member_reddit_link'][0] . '" target="_blank" class="fa fa-reddit" data-toogle="tooltip" data-html="true" ></a>';
		}
		if ( isset( $extra_info['staff_member_behance_link'][0] ) ) {
			$output .= '<a href="' . $extra_info['staff_member_behance_link'][0] . '" target="_blank" class="fa fa-behance" data-toogle="tooltip" data-html="true" ></a>';
		}
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';
	}
	$output .= '</div>';
	if ( $hover == 'false' ) {
		$style = '.specific_' . $specific_id . ' .pro-team-member:hover > figure{padding:0px; border:2px solid;' . $border_color . '; -webkit-transform: scale(1);  transform: scale(1);  -moz-transform: scale(1); -o-transform: scale(1); -ms-transform: scale(1); margin-bottom: 16px !important; }';
		$style .= '.specific_' . $specific_id . ' .pro-team-member:hover > .about, .specific_' . $specific_id . ' .pro-team-member:hover > .social{top:200px;}.specific_' . $specific_id . ' .pro-team-member:hover > h4{  -webkit-transform: scale(1);transform: scale(1);-moz-transform: scale(1);-o-transform: scale(1);-ms-transform: scale(1);}';
		$style .= '';
		startup_pro_add_inline_style( $style );
	}
	$style = '.specific_' . $specific_id . ' > button {background-color:' . $arrow_bg_color . ';}.specific_' . $specific_id . ' > button:hover{background-color:' . $arrow_bg_hover_color . ';-webkit-transition: background-color 0.2s linear;-moz-transition: background-color 0.2s linear;-ms-transition: background-color 0.2s linear;-o-transition: background-color 0.2s linear;transition: background-color 0.2s linear;}';
	startup_pro_add_inline_style( $style );
	$style = '.slick-prev, .slick-next{color:' . $arrow_color . ' !important;}';
	startup_pro_add_inline_style( $style );
	$output .= '<script type="text/javascript">
          jQuery(".specific_' . $specific_id . '").slick({
            slidesToShow: ' . $posts_per_line . ',
            sliderToScroll: 1,
            arrows: true,
            lazyLoad: "ondemand",
            autoplay: ' . $auto . ',
            arrows: true,
            dots: true,
            responsive: [
	            {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
		    ]
          });
      </script>';
	return $output;
}
add_shortcode( 'startup_pro_staff_carousel', 'startup_pro_staff_carousel' );
/**
 *
 * PRO Tabs
 * @since 1.0.0
 * @version 1.0.0
 *
 *
 */
function startup_pro_tabs( $atts, $content = '', $id = '' ) {
	global $startup_pro_tabs;
	$startup_pro_tabs = array();
	extract( shortcode_atts( array(
		'id'     => '',
		'class'  => '',
		'type'   => 'default',
		'color'  => 'accent',
		'active' => 1,
		'center' => 0,
		'fit'    => 0,
	), $atts ) );
	do_shortcode( $content );
	// is not empty clients
	if ( empty( $startup_pro_tabs ) ) {
		return;
	}
	$output = '';
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$center = ( $center ) ? ' text-center' : '';
	$fit = ( $fit ) ? ' pro-tab-nav-fit' : '';
	if ( $color != 'accent' ) {
		$uniqid = uniqid();
		$style ="
    .pro-tab-{$uniqid} .pro-tab-nav ul li.active a:after {
      background-color: {$color};
    }
    .pro-tab-{$uniqid} .pro-tab-nav ul li a:hover,
    .pro-tab-{$uniqid} .pro-tab-nav ul li.active a {
      color: {$color};
    }
    ";
		startup_pro_add_inline_style( $style );
		$color = $uniqid;
	}
	// begin output
	$output .= '<div' . $id . ' class="pro-tab pro-tab-' . $type . ' pro-tab-' . $color . $class . '">';
	// tab-navs
	$output .= '<div class="pro-tab-nav bs-tab-nav' . $center . $fit . '">';
	$output .= '<ul>';
	foreach ( $startup_pro_tabs as $key => $tab ) {
		$title = $tab['atts']['title'];
		$icon = ( ! empty( $tab['atts']['icon'] ) ) ? '<i class="' . startup_pro_icon_class( $tab['atts']['icon'] ) . '"></i>' : '';
		$active_nav = ( ( $key + 1 ) == $active ) ? ' class="active"' : '';
		$output .= '<li' . $active_nav . '><a href="#' . sanitize_title( $title ) . '">' . $icon . $title . '</a></li>';
	}
	$output .= '</ul>';
	$output .= '</div>';
	// tab-contents
	$output .= '<div class="pro-tab-contents">';
	foreach ( $startup_pro_tabs as $key => $tab ) {
		$title = $tab['atts']['title'];
		$active_content = ( ( $key + 1 ) == $active ) ? ' active' : '';
		$output .= '<div id="' . sanitize_title( $title ) . '" class="pro-tab-content' . $active_content . '">' . do_shortcode( $tab['content'] ) . '</div>';
	}
	$output .= '</div>';
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'vc_tabs', 'startup_pro_tabs' );
/**
 *
 * PRO Tab
 * @version 1.0.0
 * @since 1.0.0
 *
 */
function startup_pro_tab( $atts, $content = '', $id = '' ) {
	global $startup_pro_tabs;
	$startup_pro_tabs[] = array( 'atts' => $atts, 'content' => $content );
	return;
}
add_shortcode( 'vc_tab', 'startup_pro_tab' );
/**
 *
 * PRO Table
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_table( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'id'         => '',
		'class'      => '',
		'in_style'   => '',
		'striped'    => '',
		'bordered'   => '',
		'hover'      => '',
		'condensed'  => '',
		'responsive' => '',
	), $atts ) );
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$in_style = ( $in_style ) ? ' style="' . $in_style . '"' : '';
	$striped = ( $striped ) ? ' pro-table-striped' : '';
	$bordered = ( $bordered ) ? ' pro-table-bordered' : '';
	$hover = ( $hover ) ? ' pro-table-hover' : '';
	$condensed = ( $condensed ) ? ' pro-table-condensed' : '';
	$content = str_replace( '<table', '<table' . $id . ' class="pro-table' . $striped . $bordered . $hover . $condensed . $class . '"' . $in_style, $content );
	// begin output
	$output = '';
	$output .= ( $responsive ) ? '<div class="pro-table-responsive">' : '';
	$output .= startup_pro_set_wpautop( $content );
	$output .= ( $responsive ) ? '</div>' : '';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_table', 'startup_pro_table' );
/**
 *
 * PRO Testimonials
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_reviews( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'testimonial_groups' => 'testimonials',
		'text_color'         => '#647886',
		'job_color'          => '',
		'name_color'         => '',
		'line_color'         => ''
	), $atts ) );
	wp_enqueue_style( 'pro-royalslider' );
	wp_enqueue_script( 'pro-royalslider' );
	if ( $testimonial_groups ) {
		$group = get_term( $testimonial_groups, 'testimonials-categories' );
	}
	$args = array(
		'post_type'      => 'startup_pro_reviews',
		'posts_per_page' => - 1,
	);
	if ( isset($group) ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'testimonials-categories',
				'field'    => 'slug',
				'terms'    => $group->slug
			)
		);
	}
	$specific_id = rand( 1000, 10000 );
	$loop = new WP_Query( $args );
	$output = '';
	$output .= '<div class="royalSlider testimonialSlider specific_' . $specific_id . '">';
	foreach ( $loop->posts as $members ) {
		#GET CUSTOM INFO ON STAFF
		$extra_info = get_post_custom( $members->ID );
		if ( isset($extra_info["external_link"][0])) {
			$external_link = $extra_info["external_link"][0];
		} else {
			$external_link = '';
		}
		if ( isset($extra_info["job_reference"][0])) {
			$job_reference = $extra_info["job_reference"][0];
		} else {
			$job_reference = '';
		}
		$output .= '<div class="pro-testimonial-content">';
		$output .= '<div class="pro-testimonial-avatar">';
		$attachment_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $members->ID ), 'full' );
		$output .= '<img src="' . esc_url($attachment_image_src[0]) . '" alt="' . $members->post_title . '"/>';
		$output .= '<span class="testimonial-misc"></span>';
		$output .= '</div>';
		$output .= '<div class="pro-testimonial-text" style="color:' . $text_color . '">' . $members->post_content . '</div>';
		$output .= '<a class="pro-testimonial-author" href="' . $external_link . '">';
			$output .= '<h5 style="color:' . $name_color . '">' . $members->post_title . '</h5>';
			$output .= '<p style="clear:both;color:' . $job_color . '">' . $extra_info["job_reference"][0] . '</p>';
		$output .= '</a>';
		$output .= '</div>';
	}
	$output .= '</div>';
	$style = '<style>.specific_' . $specific_id . ' .pro-testimonial-text:after{background-color:' . $line_color . ' !important;}</style>';
	startup_pro_add_inline_style( $style );
	return $output;
}
add_shortcode( 'startup_pro_reviews', 'startup_pro_reviews' );
/**
 *
 * PRO Toggle
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_toggle( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'id'           => '',
		'class'        => '',
		'title'        => '',
		'icon'         => '',
		'no_icon'      => '',
		'icon_color'   => '',
		'title_color'  => '',
		'border_color' => '',
		'open'         => '',
	), $atts ) );
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$open = ( $open === 'true' ) ? ' selected' : '';
	$display = ( $open ) ? ' style="display:block;"' : '';
	$el_style = ( $border_color ) ? ' style="border-color:' . $border_color . ';"' : '';
	$icon_style = ( $icon_color ) ? ' style="color:' . $icon_color . ';"' : '';
	$title = ( $title_color ) ? '<span style="color:' . $title_color . ';">' . $title . '</span>' : $title;
	$icon = ( $icon ) ? startup_pro_icon_class( $icon ) : 'pro-in fa pro-anim-icon';
	$icon = ( ! $no_icon ) ? '<i class="' . $icon . '"' . $icon_style . '></i>' : '';
	// begin output
	$output = '<div' . $id . ' class="pro-toggle"' . $el_style . '>';
	$output .= '<h4 class="pro-toggle-title' . $open . '">' . $icon . $title . '</h4>';
	$output .= '<div class="pro-toggle-content"' . $display . '>';
	$output .= startup_pro_set_wpautop( $content );
	$output .= '</div>';
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'vc_toggle', 'startup_pro_toggle' );
/**
 *
 * PRO ToolTip
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_tooltip( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'selector'  => '',
		'placement' => '',
		'trigger'   => '',
	), $atts ) );
	$placement = ( $placement ) ? ' data-placement="' . $placement . '"' : '';
	$trigger = ( $trigger ) ? ' data-trigger="' . $trigger . '"' : '';
	// begin output
	$output = '<div class="pro-tooltip-trigger pro-hide" data-selector=".' . $selector . '"' . $placement . $trigger . '>';
	$output .= do_shortcode( $content );
	$output .= '</div>';
	// end output
	return $output;
}
add_shortcode( 'startup_pro_tooltip', 'startup_pro_tooltip' );
/**
 *
 * PRO Word Rotator
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function startup_pro_rotating( $atts, $content = '', $id = '' ) {
	$a = shortcode_atts( array(
		'words'          => '',
		'delay'          => '',
		'color'          => '',
		'background'     => '',
		'letter-spacing' => '',
		'font-weight'    => '',
		'delay'          => '2000',
		'padding-top'    => '0px',
		'padding-bottom' => '0px',
		'padding-left'   => '0px',
		'padding-right'  => '0px'
		// ...etc
	), $atts );
	// set the style
	$style = '';
	$style .= 'padding-top:' . $a['padding-top'] . ';';
	$style .= 'padding-bottom:' . $a['padding-bottom'] . ';';
	$style .= 'padding-left:' . $a['padding-left'] . ';';
	$style .= 'padding-right:' . $a['padding-right'] . ';';
	if ( $a['color'] ) {
		$style .= 'color:' . $a['color'] . ';';
	}
	if ( $a['background'] ) {
		$style .= 'background-color:' . $a['background'] . ';';
	}
	if ( $a['letter-spacing'] ) {
		$style .= 'letter-spacing:' . $a['letter-spacing'] . ';';
	}
	if ( $a['font-weight'] ) {
		$style .= 'font-weight:' . $a['font-weight'] . ';';
	}
	$output = '';
	$output .= '<span class="pro-word-rotator word-rotate" data-delay="' . $a['delay'] . '"style="' . $style . '"><span class="word-rotate-items">';
	if ( $a['words'] ) {
		$rotating_words = explode( ",", $a['words'] );
		foreach ( $rotating_words as $word ) {
			$output .= '<span>' . $word . '</span>';
		}
	}
	$output .= '</span></span>';
	return $output;
}
