<?php
/**
 * PRO Shortcode Extends
 * WPBakery Visual Composer Extends
 * @package VPBakeryVisualComposer
 *
 */
require_once vc_path_dir( 'SHORTCODES_DIR', 'vc-column.php' );
require_once vc_path_dir( 'SHORTCODES_DIR', 'vc-tab.php' );
require_once vc_path_dir( 'SHORTCODES_DIR', 'vc-tabs.php' );
require_once vc_path_dir( 'SHORTCODES_DIR', 'vc-row.php' );
// =====================
// PRO Button Group     =
// =====================
class startup_pro_WPBakeryShortCodesContainer extends WPBakeryShortCodesContainer {
	public function contentAdmin( $atts, $content = null ) {
		$width = $el_class = '';
		extract( shortcode_atts( $this->predefined_atts, $atts ) );
		$label_class = ( isset( $this->settings['label_class'] ) ) ? $this->settings['label_class'] : 'info';
		$output = '';
		$column_controls = $this->getColumnControls( $this->settings( 'controls' ) );
		$column_controls_bottom = $this->getColumnControls( 'add', 'bottom-controls' );
		for ( $i = 0; $i < count( $width ); $i ++ ) {
			$output .= '<div ' . $this->mainHtmlBlockParams( $width, $i ) . '>';
			$output .= '<div class="pro-container-title"><span class="pro-label pro-label-' . $label_class . '">' . $this->settings['name'] . '</span></div>'; // ADDED THIS LINE
			$output .= $column_controls;
			$output .= '<div class="wpb_element_wrapper">';
			$output .= '<div ' . $this->containerHtmlBlockParams( $width, $i ) . '>';
			$output .= do_shortcode( shortcode_unautop( $content ) );
			$output .= '</div>';
			if ( isset( $this->settings['params'] ) ) {
				$inner = '';
				foreach ( $this->settings['params'] as $param ) {
					$param_value = isset( $$param['param_name'] ) ? $$param['param_name'] : '';
					if ( is_array( $param_value ) ) {
						// Get first element from the array
						reset( $param_value );
						$first_key = key( $param_value );
						$param_value = $param_value[ $first_key ];
					}
					$inner .= $this->singleParamHtmlHolder( $param, $param_value );
				}
				$output .= $inner;
			}
			$output .= '</div>';
			$output .= $column_controls_bottom;
			$output .= '</div>';
		}
		return $output;
	}
}
class WPBakeryShortCode_startup_pro_Button_Group extends startup_pro_WPBakeryShortCodesContainer {}
class WPBakeryShortCode_startup_pro_Progress_Group extends startup_pro_WPBakeryShortCodesContainer {}
class WPBakeryShortCode_startup_pro_Icon_List extends startup_pro_WPBakeryShortCodesContainer {}
//class WPBakeryShortCode_VC_Clients extends startup_pro_WPBakeryShortCodesContainer {}
class WPBakeryShortCode_startup_pro_Pricing_Table extends startup_pro_WPBakeryShortCodesContainer {}
class WPBakeryShortCode_startup_pro_Carousel extends startup_pro_WPBakeryShortCodesContainer {}
class WPBakeryShortCode_startup_pro_Carousel_Item extends startup_pro_WPBakeryShortCodesContainer {}
class WPBakeryShortCode_startup_pro_Team extends startup_pro_WPBakeryShortCodesContainer {}
// =====================
// SMART Call to Action   =
// =====================
class WPBakeryShortCode_SMART_Cta extends WPBakeryShortCode_VC_Tabs {}
class WPBakeryShortCode_SMART_Cta_Block extends WPBakeryShortCode_VC_Tab {
	public function mainHtmlBlockParams( $width, $i ) {
		return 'data-element_type="' . $this->settings["base"] . '" class="wpb_' . $this->settings['base'] . ' wpb_vc_tab wpb_sortable wpb_content_holder"' . $this->customAdminBlockParams();
	}
	public function getColumnControls( $controls, $extended_css = '' ) {
		return '';
	}
}
// =====================
// SMART FAQ              =
// =====================
class WPBakeryShortCode_SMART_FAQ extends WPBakeryShortCode_VC_Tabs {}
class WPBakeryShortCode_SMART_FAQ_Block extends WPBakeryShortCode_VC_Tab {
  public function mainHtmlBlockParams( $width, $i ) {
    return 'data-element_type="'.$this->settings["base"].'" class="wpb_'.$this->settings['base'].' wpb_vc_tab wpb_sortable wpb_content_holder"'.$this->customAdminBlockParams();
  }
}
// =====================
// VC SECTION          =
// =====================
class WPBakeryShortCode_VC_Section extends WPBakeryShortCode_VC_Row {
}