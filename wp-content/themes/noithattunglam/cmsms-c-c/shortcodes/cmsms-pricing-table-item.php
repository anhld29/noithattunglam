<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.0
 * 
 * Content Composer Sc Name Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));
	
	
$unique_id = uniqid();


if ($button_font_family != '') {
	$font_family_array = explode(':', $button_font_family);
	
	$font_family_name = "'" . $font_family_array[0] . "'";
	
	
	cmsms_theme_google_font($button_font_family, $font_family_array[0]);
}


if (
	$button_style != '' || 
	$button_font_family != '' || 
	$button_font_size != '' || 
	$button_line_height != '' || 
	$button_font_weight != '' || 
	$button_font_style != '' || 
	$button_padding_hor != '' || 
	$button_border_width != '' || 
	$button_border_style != '' || 
	$button_border_radius != '' || 
	$button_bg_color != '' || 
	$button_text_color != '' || 
	$button_border_color != '' || 
	$button_bg_color_h != '' || 
	$button_text_color_h != '' || 
	$button_border_color_h != '' 
) {
	$button_custom_styles = 'true';
} else {
	$button_custom_styles = 'false';
}


$feature_array = explode('||', $features);


global $style_pricing;


if ($best == 'true') {
	if ($best_bg_color != '') {
		$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' { ' . 
			"\n\t" . cmsms_color_css('background-color', $best_bg_color) . 
		"\n" . '} ' . "\n";
	}
	
	
	if ($best_text_color != '') {
		$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .pricing_title, ' . 
		'#cmsms_pricing_item_' . $unique_id . ' .pricing_title *, ' . 
		'#cmsms_pricing_item_' . $unique_id . ' .cmsms_price_wrap, ' . 
		'#cmsms_pricing_item_' . $unique_id . ' .cmsms_price_wrap *, ' . 
		'#cmsms_pricing_item_' . $unique_id . ' .feature_list, ' . 
		'#cmsms_pricing_item_' . $unique_id . ' .feature_list * { ' . 
			"\n\t" . cmsms_color_css('color', $best_text_color) . 
		"\n" . '} ' . "\n";
	}
}


if ($button_show == 'true') {
	$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button:before { ' . 
		"\n\t" . 'margin-right:' . (($button_title != '') ? '.5em; ' : '0;') . 
		"\n\t" . 'margin-left:0; ' . 
		"\n\t" . 'vertical-align:baseline; ' . 
	"\n" . '} ' . "\n\n";

	if ($button_custom_styles == 'true') {
		$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button { ' . 
			(($button_font_family != '') ? "\n\t" . 'font-family:' . str_replace('+', ' ', $font_family_name) . '; ' : '') . 
			(($button_font_size != '') ? "\n\t" . 'font-size:' . $button_font_size . 'px; ' : '') . 
			(($button_line_height != '') ? "\n\t" . 'line-height:' . $button_line_height . 'px; ' : '') . 
			(($button_font_weight != '') ? "\n\t" . 'font-weight:' . $button_font_weight . '; ' : '') . 
			(($button_font_style != '') ? "\n\t" . 'font-style:' . $button_font_style . '; ' : '') . 
			(($button_padding_hor != '') ? "\n\t" . 'padding-right:' . $button_padding_hor . 'px; ' : '') . 
			(($button_padding_hor != '') ? "\n\t" . 'padding-left:' . $button_padding_hor . 'px; ' : '') . 
			(($button_border_width != '') ? "\n\t" . 'border-width:' . $button_border_width . 'px; ' : '') . 
			(($button_border_style != '') ? "\n\t" . 'border-style:' . $button_border_style . '; ' : '') . 
			(($button_border_radius != '') ? "\n\t" . '-webkit-border-radius:' . $button_border_radius . '; ' . "\n\t" . 'border-radius:' . $button_border_radius . '; ' : '') . 
			(($button_bg_color != '') ? "\n\t" . cmsms_color_css('background-color', $button_bg_color) : '') . 
			(($button_text_color != '') ? "\n\t" . cmsms_color_css('color', $button_text_color) : '') . 
			(($button_border_color != '') ? "\n\t" . cmsms_color_css('border-color', $button_border_color) : '') . 
		"\n" . '} ' . "\n";
		
		$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button:hover { ' . 
			(($button_bg_color_h != '') ? "\n\t" . cmsms_color_css('background-color', $button_bg_color_h) : '') . 
			(($button_text_color_h != '') ? "\n\t" . cmsms_color_css('color', $button_text_color_h) : '') . 
			(($button_border_color_h != '') ? "\n\t" . cmsms_color_css('border-color', $button_border_color_h) : '') . 
		"\n" . '} ' . "\n";
	}
	
	
	if ($button_style != '') {
		if (
			$button_style == 'cmsms_but_bg_slide_left' || 
			$button_style == 'cmsms_but_bg_slide_right' || 
			$button_style == 'cmsms_but_bg_slide_top' || 
			$button_style == 'cmsms_but_bg_slide_bottom' || 
			$button_style == 'cmsms_but_bg_expand_vert' || 
			$button_style == 'cmsms_but_bg_expand_hor' || 
			$button_style == 'cmsms_but_bg_expand_diag' 
		) {
			if ($button_bg_color != '') {
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_slide_left:hover, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_slide_right:hover, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_slide_top:hover, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_slide_bottom:hover, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_expand_vert:hover, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_expand_hor:hover, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_expand_diag:hover { ' . 
					"\n\t" . cmsms_color_css('background-color', $button_bg_color) . 
				"\n" . '} ' . "\n";
			}
			
			if ($button_bg_color_h != '') {
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_slide_left:after, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_slide_right:after, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_slide_top:after, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_slide_bottom:after, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_expand_vert:after, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_expand_hor:after, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_bg_expand_diag:after { ' . 
					"\n\t" . cmsms_color_css('background-color', $button_bg_color_h) . 
				"\n" . '} ' . "\n";
			}
		}
		
		
		if (
			$button_style == 'cmsms_but_icon_dark_bg' || 
			$button_style == 'cmsms_but_icon_light_bg' || 
			$button_style == 'cmsms_but_icon_divider' || 
			$button_style == 'cmsms_but_icon_inverse' 
		) {
			$but_icon_pad = ($button_padding_hor != '' ? $button_padding_hor : '20') + ($button_line_height != '' ? $button_line_height : '40');
			
			if ($button_padding_hor != '' || $button_line_height != '') {
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_dark_bg, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_light_bg, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_divider, ' .  
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_inverse { ' . 
					"\n\t" . 'padding-left:' . $but_icon_pad . 'px; ' . 
				"\n" . '} ' . "\n";
				
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_dark_bg:before, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_light_bg:before, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_divider:before, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_inverse:before, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_dark_bg:after, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_light_bg:after, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_divider:after, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_inverse:after { ' . 
					"\n\t" . 'width:' . $button_line_height . 'px; ' . 
				"\n" . '} ' . "\n";
			}
			
			
			if ($button_border_color != '' || $button_border_color_h != '') {
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_divider:after { ' . 
					"\n\t" . cmsms_color_css('border-color', $button_border_color) . 
				"\n" . '} ' . "\n";
				
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_divider:hover:after { ' . 
					"\n\t" . cmsms_color_css('border-color', $button_border_color_h) . 
				"\n" . '} ' . "\n";
			}
			
			
			if ($button_style == 'cmsms_but_icon_inverse') {
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_inverse:before { ' . 
					(($button_text_color_h != '') ? "\n\t" . cmsms_color_css('color', $button_text_color_h) : '') . 
				"\n" . '} ' . "\n";
			
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_inverse:after { ' . 
					(($button_bg_color_h != '') ? "\n\t" . cmsms_color_css('background-color', $button_bg_color_h) : '') . 
				"\n" . '} ' . "\n";
				
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_inverse:hover:before { ' . 
					(($button_text_color != '') ? "\n\t" . cmsms_color_css('color', $button_text_color) : '') . 
				"\n" . '} ' . "\n";
				
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_inverse:hover:after { ' . 
					(($button_bg_color != '') ? "\n\t" . cmsms_color_css('background-color', $button_bg_color) : '') . 
				"\n" . '} ' . "\n";
			}
		}
		
		
		if (
			$button_style == 'cmsms_but_icon_slide_left' || 
			$button_style == 'cmsms_but_icon_slide_right' 
		) {
			if ($button_padding_hor != '') {
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_slide_left, ' . 
				'#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_slide_right { ' . 
					"\n\t" . 'padding-left:' . ($button_padding_hor * 2) . 'px; ' . 
					"\n\t" . 'padding-right:' . ($button_padding_hor * 2) . 'px; ' . 
				"\n" . '} ' . "\n";
				
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_slide_left:before { ' . 
					"\n\t" . 'width:' . ($button_padding_hor * 2) . 'px; ' . 
					"\n\t" . 'left:-' . ($button_padding_hor * 2) . 'px; ' . 
				"\n" . '} ' . "\n";
				
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_slide_left:hover:before { ' . 
					"\n\t" . 'left:0; ' . 
				"\n" . '} ' . "\n";
				
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_slide_right:before { ' . 
					"\n\t" . 'width:' . ($button_padding_hor * 2) . 'px; ' . 
					"\n\t" . 'right:-' . ($button_padding_hor * 2) . 'px; ' . 
				"\n" . '} ' . "\n";
				
				$style_pricing .= '#cmsms_pricing_item_' . $unique_id . ' .cmsms_button.cmsms_but_icon_slide_right:hover:before { ' . 
					"\n\t" . 'right:0; ' . 
				"\n" . '} ' . "\n";
			}
		}
	}
}


$price_out = '<div id="cmsms_pricing_item_' . $unique_id . '" class="cmsms_pricing_item' . 
(($best == 'true') ? ' pricing_best' : '') . 
(($classes != '') ? ' ' . $classes : '') . 
'"' . 
(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
'>' . "\n" . 
	'<div class="cmsms_pricing_item_inner">' . "\n" . 
		'<h3 class="pricing_title">' . $content . '</h3>' . "\n" . 
		'<div class="cmsms_price_wrap">' . "\n" . 
		'<span class="cmsms_currency">' . $currency . '</span>' . "\n" . 
		'<span class="cmsms_price">' . $price . '</span>' . "\n" . 
		(($coins != '') ? '<span class="cmsms_coins">' . $coins . '</span>' . "\n" : '') . 
		(($period != '') ? '<br /><span class="cmsms_period">' . $period . '</span>' . "\n" : '') . 
		'</div>' . "\n";
		
		if (!empty($feature_array)) {
			$price_out .= '<ul class="feature_list">' . "\n";
		}
		
		
		foreach ($feature_array as $feature) { 
			$feature_atts = explode('|', $feature);
			
			
			$feature_atts = preg_replace('/^title\{([^\}]*)\}/','$1', $feature_atts);
			
			$feature_atts = preg_replace('/^link\{([^\}]*)\}/','$1', $feature_atts);
			
			$feature_atts = preg_replace('/^icon\{([^\}]*)\}/','$1', $feature_atts);
			 
			$price_out .= '<li>' . 
			((isset($feature_atts[2]) && $feature_atts[2] != '') ? '<span class="feature_icon ' . $feature_atts[2] . '">' : '') . 
			((isset($feature_atts[1]) && $feature_atts[1] != '') ? '<a href="' . $feature_atts[1] . '" class="feature_link">' : '') . 
			$feature_atts[0] . 
			((isset($feature_atts[1]) && $feature_atts[1] != '') ? '</a>' : '') . 
			((isset($feature_atts[2]) && $feature_atts[2] != '') ? '</span>' : '') . 
			'</li>' . "\n";
		}
		
		
		if (!empty($feature_array)) { 
			$price_out .= '</ul>' . "\n";
		}
		
		
		if ($button_show == 'true') {
			$price_out .= '<a href="' . $button_link . '" class="cmsms_button' . 
			(($button_style != '') ? ' cmsms_but_clear_styles ' . $button_style : '') . 
			(($button_icon != '') ? ' ' . $button_icon : '') . 
			'"' . 
			(($button_target == 'blank') ? ' target="_blank"' : '') . 
			'><span>' . $button_title . '</span></a>' . "\n";
		}
	
	$price_out .= '</div>' . "\n" . 
'</div>' . "\n";


$out = $price_out;