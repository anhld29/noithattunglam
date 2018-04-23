<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.0
 * 
 * Content Composer Single Tab Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));
	
	
	$unique_id = uniqid();
	
	
	global $style_tab, 
		$out_tabs, 
		$tabs_mode, 
		$tab_active, 
		$tab_counter;
	
	
	$tab_counter++;
	
	if ($custom_colors == 'true') { 
		$style_tab .= "\n" . '#cmsms_tabs_list_item_' . $unique_id . ' a:hover,' . 
		'#cmsms_tabs_list_item_' . $unique_id . '.current_tab a { ' . 
			"\n\t" . cmsms_color_css('color', $bg_color) . 
		"\n" . '} ' . "\n";
		
		$style_tab .= "\n" . '#cmsms_tabs_list_item_' . $unique_id . ':before { ' . 
			"\n\t" . cmsms_color_css('background', $bg_color) . 
		"\n" . '} ' . "\n";
	}
	
	
	$out_tabs .= '<li id="cmsms_tabs_list_item_' . $unique_id . '" class="cmsms_tabs_list_item' . 
	(($tab_active == $tab_counter) ? ' current_tab' : '') . 
	'">' . "\n" . 
		'<a href="#"' . 
		(($icon != '') ? ' class="' . $icon . '"' : '') . 
		'>' . "\n" . 
			'<span>' . $title . '</span>' . "\n" . 
		'</a>' . "\n" . 
	'</li>';
	
	
	$out = '<div id="cmsms_tab_' . $unique_id . '" class="cmsms_tab' . 
	(($tab_active == $tab_counter) ? ' active_tab' : '') . 
	(($classes != '') ? ' ' . $classes : '') . 
	'">' . "\n" . 
		cmsms_divpdel('<div class="cmsms_tab_inner">' . "\n" . 
			do_shortcode(wpautop($content)) . 
		'</div>' . "\n") . 
	'</div>';