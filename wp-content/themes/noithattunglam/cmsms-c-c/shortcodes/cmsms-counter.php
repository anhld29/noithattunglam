<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.0
 * 
 * Content Composer Counter Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));
	
	
$unique_id = uniqid();


global $style_counters, 
	$counters_count;


$style_counters .= "\n" . '#cmsms_counter_' . $unique_id . ' .cmsms_counter_inner:before { ' . 
	(($icon_color != '') ? "\n\t" . cmsms_color_css('color', $icon_color) : '') . 
	(($icon_bg_color != '') ? "\n\t" . cmsms_color_css('background-color', $icon_bg_color) : '') . 
	(($icon_bd_color != '') ? "\n\t" . cmsms_color_css('border-color', $icon_bd_color) : '') . 
"\n" . '} ' . "\n\n";


if ($icon_type == 'image' && $image != '') {
	$image_id = explode('|', $image);
	
	
	$image_url_array = wp_get_attachment_image_src($image_id[0], 'full');
	
	
	if (is_numeric($image_id[0]) && is_array($image_url_array)) {
		$image_url = $image_url_array[0];
	} else if ($image_id[0] != '') {
		$image_url = $image_id[0];
	} else {
		$image_url = $image_id[1];
	}
	
	
	$style_counters .= '#cmsms_counter_' . $unique_id . ' .cmsms_counter_inner:before { ' . 
		"\n\t" . "content:''; " . 
		"\n\t" . 'background-image:url(' . $image_url . '); ' . 
	"\n" . '} ' . "\n";
}



if ($title_custom_check != '') {
	if ($title_font_family != '') {
		$title_font_family_array = str_replace('+', ' ', explode(':', $title_font_family));
		
		$title_font_family_name = "'" . $title_font_family_array[0] . "'";
		
		
		cmsms_theme_google_font($title_font_family, $title_font_family_array[0]);
	}
	
	$style_counters .= "\n" . '#cmsms_counter_' . $unique_id . ' .cmsms_counter_title { ' . 
		(($title_font_family != '') ? "\n\t" . 'font-family:' . $title_font_family_name . '; ' : '') .
		(($title_font_size != '' && $title_font_size != '0') ? "\n\t" . 'font-size:' . $title_font_size . 'px; ' : '') .
		(($title_line_height != '' && $title_line_height != '0') ? "\n\t" . 'line-height:' . $title_line_height . 'px; ' : '') .
		(($title_font_weight != '') ? "\n\t" . 'font-weight:' . $title_font_weight . '; ' : '') .
		(($title_font_style != '') ? "\n\t" . 'font-style:' . $title_font_style . '; ' : '') .
		(($title_font_color != '') ? "\n\t" . cmsms_color_css('color', $title_font_color) : '') . 
	"\n" . '} ' . "\n\n";
}

if ($counter_custom_check != '') {
	if ($counter_font_family != '') {
		$counter_font_family_array = str_replace('+', ' ', explode(':', $counter_font_family));
		
		$counter_font_family_name = "'" . $counter_font_family_array[0] . "'";
		
		
		cmsms_theme_google_font($counter_font_family, $counter_font_family_array[0]);
	}

	$style_counters .= "\n" . '#cmsms_counter_' . $unique_id . ' .cmsms_counter_counter_wrap { ' . 
		(($counter_font_family != '') ? "\n\t" . 'font-family:' . $counter_font_family_name . '; ' : '') .
		(($counter_font_size != '' && $counter_font_size != '0') ? "\n\t" . 'font-size:' . $counter_font_size . 'px; ' : '') .
		(($counter_line_height != '' && $counter_line_height != '0') ? "\n\t" . 'line-height:' . $counter_line_height . 'px; ' : '') .
		(($counter_font_weight != '') ? "\n\t" . 'font-weight:' . $counter_font_weight . '; ' : '') .
		(($color != '') ? "\n\t" . cmsms_color_css('color', $color) : '') . 
	"\n" . '} ' . "\n\n";
}


$out = '<div class="cmsms_counter_wrap' . $counters_count . '">' . "\n" . 
	'<div id="cmsms_counter_' . $unique_id . '" class="cmsms_counter' . 
	(($classes != '') ? ' ' . esc_attr($classes) : '') . 
	(($icon_type == 'icon' && $icon != '') ? ' counter_has_icon' : '') . 
	(($icon_type == 'image' && $image != '') ? ' counter_has_image' : '') . 
	'" data-percent="' . esc_attr($value) . '">' . "\n" . 
		'<div class="cmsms_counter_inner' . 
		(($icon != '') ? ' ' . esc_attr($icon) : '') . 
		'">' . "\n" . 
			'<span class="cmsms_counter_counter_wrap">' . "\n" . 
				'<span class="cmsms_counter_prefix">' . esc_html($value_prefix) . '</span>' . 
				'<span class="cmsms_counter_counter">0</span>' . 
				'<span class="cmsms_counter_suffix">' . esc_html($value_suffix) . '</span>' . "\n" . 
			'</span>' . "\n" . 
			(($content != '') ? '<span class="cmsms_counter_title">' . $content . '</span>' . "\n" : '') . 
		'</div>' . "\n" . 
		(($subtitle != '') ? '<span class="cmsms_counter_subtitle">' . $subtitle . '</span>' . "\n" : '') . 
	'</div>' . "\n" . 
'</div>';

