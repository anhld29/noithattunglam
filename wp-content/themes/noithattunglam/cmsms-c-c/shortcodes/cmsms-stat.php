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
	
	
global $style_stats, 
	$stats_mode, 
	$stats_type, 
	$stats_count;


if ($stats_mode == 'bars') {
	$style_stats .= "\n" . '.cmsms_stats.shortcode_animated #cmsms_stat_' . $unique_id . '.cmsms_stat { ' . 
		"\n\t" . (($stats_type == 'horizontal') ? 'width' : 'height') . ':' . $progress . '%; ' . 
	"\n" . '} ' . "\n\n" . 
	'#cmsms_stat_' . $unique_id . ' .cmsms_stat_inner { ' . 
		(($color != '') ? "\n\t" . cmsms_color_css('background-color', $color) : '') . 
	"\n" . '} ' . "\n";
}


$out = '<div class="cmsms_stat_wrap' . (($stats_mode == 'circles' || ($stats_mode == 'bars' && $stats_type == 'vertical')) ? $stats_count : '') . '">' . "\n" . 
	(($stats_mode == 'bars' && $stats_type == 'vertical') ? '<div class="cmsms_stat_container">' . "\n" : '') . 
		'<div id="cmsms_stat_' . $unique_id . '" class="cmsms_stat' . 
		(($classes != '') ? ' ' . $classes : '') . 
		(($content == '' && $icon == '') ? ' stat_only_number' : '') . 
		(($content != '' && $icon != '') ? ' stat_has_titleicon' : '') . '"' . 
		' data-percent="' . $progress . '"' . 
		(($stats_mode == 'circles' && $color != '') ? ' data-bar-color="' . $color . '"' : '') . 
		'>' . "\n" . 
			'<div class="cmsms_stat_inner' . 
			(($icon != '') ? ' ' . $icon : '') . 
			'">' . "\n" . 
				(($content != '' && $stats_mode == 'bars' && $stats_type == 'horizontal') ? '<span class="cmsms_stat_title">' . $content . '</span>' . "\n" : '') . 
				'<span class="cmsms_stat_counter_wrap">' . "\n" . 
					'<span class="cmsms_stat_counter">' . (($stats_mode == 'bars') ? $progress : '0') . '</span>' . 
					'<span class="cmsms_stat_units">%</span>' . "\n" . 
				'</span>' . "\n" . 
			'</div>' . "\n" . 
		'</div>' . "\n" . 
		(($content != '' && $stats_mode == 'circles') ? '<span class="cmsms_stat_title">' . $content . '</span>' . "\n" : '') . 
	(($stats_mode == 'bars' && $stats_type == 'vertical') ? '</div>' . "\n" : '') . 
	(($content != '' && $stats_mode == 'bars' && $stats_type == 'vertical') ? '<span class="cmsms_stat_title">' . $content . '</span>' . "\n" : '') . 
	(($subtitle != '') ? '<span class="cmsms_stat_subtitle">' . $subtitle . '</span>' . "\n" : '') . 
'</div>';
