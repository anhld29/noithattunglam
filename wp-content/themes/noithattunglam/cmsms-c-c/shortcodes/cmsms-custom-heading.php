<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.0
 * 
 * Content Composer Heading Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();

$out = '';


if ($font_family != '') {
	$font_family_array = str_replace('+', ' ', explode(':', $font_family));
	
	$font_family_name = "'" . $font_family_array[0] . "'";
	
	
	cmsms_theme_google_font($font_family, $font_family_array[0]);
}


$out = '<style type="text/css"> ' . "\n" . 
	'#cmsms_heading_' . $unique_id . ' { ' . 
		"\n\t" . 'text-align:' . $text_align . '; ' . 
		"\n\t" . 'margin-top:' . $margin_top . 'px; ' . 
		"\n\t" . 'margin-bottom:' . $margin_bottom . 'px; ' . 
	"\n" . '} ' . "\n\n" . 
	'#cmsms_heading_' . $unique_id . ' .cmsms_heading { ' . 
		"\n\t" . 'text-align:' . $text_align . '; ' . 
		(($bg_color != '') ? "\n\t" . cmsms_color_css('background-color', $bg_color) : '') . 
		(($bg_color != '') ? "\n\t" . 'padding-left:1em; ' : '') . 
		(($bg_color != '') ? "\n\t" . 'padding-right:1em; ' : '') . 
		(($divider != '' && $text_align != 'left') ? "\n\t" . 'margin-left:1em; ' : '') . 
		(($divider != '' && $text_align != 'right') ? "\n\t" . 'margin-right:1em; ' : '') . 
		(($border_radius != '') ? "\n\t" . '-webkit-border-radius:' . $border_radius . '; ' . "\n\t" . 'border-radius:' . $border_radius . '; ' : '') . 
	"\n" . '} ' . "\n\n" . 
	'#cmsms_heading_' . $unique_id . ' .cmsms_heading, ' . 
	'#cmsms_heading_' . $unique_id . ' .cmsms_heading a { ' . 
		(($font_family != '') ? "\n\t" . 'font-family:' . $font_family_name . '; ' : '') . 
		(($font_size != '' && $font_size != '0') ? "\n\t" . 'font-size:' . $font_size . 'px; ' : '') . 
		(($line_height != '' && $line_height != '0') ? "\n\t" . 'line-height:' . $line_height . 'px; ' : '') . 
		"\n\t" . 'font-weight:' . $font_weight . '; ' . 
		"\n\t" . 'font-style:' . $font_style . '; ' . 
		(($color != '') ? "\n\t" . cmsms_color_css('color', $color) : '') . 
	"\n" . '} ' . "\n\n" . 
	'#cmsms_heading_' . $unique_id . ' .cmsms_heading_divider { ' . 
		(($divider != '') ? "\n\t" . 'border-bottom-width:' . $divider_height . 'px; ' : '') . 
		(($divider != '') ? "\n\t" . 'border-bottom-style:' . $divider_style . '; ' : '') . 
		(($divider != '' && $divider_color != '') ? "\n\t" . cmsms_color_css('border-bottom-color', $divider_color) : '') . 
		(($divider != '') ? "\n\t" . 'margin-top:-' . round((int) $divider_height / 2) . 'px; ' : '') . 
	"\n" . '} ' . "\n\n";
	
	if ($tablet_check != '') {
		$out .= '@media (max-width: 767px) {' . "\n\n" . 
			'#cmsms_heading_' . $unique_id . ' .cmsms_heading, ' . 
			'#cmsms_heading_' . $unique_id . ' .cmsms_heading a { ' . 
				(($tablet_font_size != '' && $tablet_font_size != '0') ? "\n\t" . 'font-size:' . $tablet_font_size . 'px; ' : '') . 
				(($tablet_line_height != '' && $tablet_line_height != '0') ? "\n\t" . 'line-height:' . $tablet_line_height . 'px; ' : '') . 
			"\n" . '} ' . "\n" . 
		"\n" . '} ' . "\n\n";
	}
	
$out .= '</style>' . "\n";


$out .= '<div id="cmsms_heading_' . $unique_id . '" class="cmsms_heading_wrap cmsms_heading_align_' . $text_align . 
(($divider != '') ? ' cmsms_heading_divider_' . $divider_type : '') . 
'"' . 
(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
'>' . "\n\t";


if ($divider != '' && $text_align != 'left') {
	$out .= '<span class="cmsms_heading_divider_left_wrap"><span class="cmsms_heading_divider cmsms_heading_divider_left"></span></span>' . "\n";
}


$out .= '<' . $type . ' class="cmsms_heading' . 
(($icon != '' && $link == '') ? ' ' . $icon : '') . 
(($classes != '') ? ' ' . $classes : '') . 
'">';


if ($link != '') {
	$out .= '<a href="' . esc_url($link) . '"' . 
	(($icon != '') ? ' class="' . $icon . '"' : '') . 
	(($target == 'blank') ? ' target="_blank"' : '') . 
	'>';
}


$out .= $content;


if ($link != '') {
	$out .= '</a>';
}


$out .= '</' . $type . '>' . "\n";


if ($divider != '' && $text_align != 'right') {
	$out .= '<span class="cmsms_heading_divider_right_wrap"><span class="cmsms_heading_divider cmsms_heading_divider_right"></span></span>' . "\n";
}


$out .= '</div>';

return $out;