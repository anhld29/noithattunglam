<?php 
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Admin Panel Colors Options
 * Created by CMSMasters
 * 
 */


function cmsmasters_options_color_tabs() {
	$tabs = array();
	
	
	foreach (cmsmasters_all_color_schemes_list() as $key => $value) {
		$tabs[$key] = $value;
	}
	
	
	return $tabs;
}



function cmsmasters_options_color_sections() {
	$tab = cmsmasters_get_the_tab();
	
	
	$schemes = cmsmasters_all_color_schemes_list();
	
	
	$sections = array();
	
	
	$sections[$tab . '_section'] = $schemes[$tab] . ' ' . __('Color Scheme Options', 'interior-design');
	
	
	return $sections;
} 



function cmsmasters_options_color_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsmasters_get_the_tab();
	}
	
	
	$defaults = cmsmasters_color_schemes_defaults();
	
	
	$options = array();
	
	
	if ($tab == 'header' || $tab == 'header_side') { // Header & Header Side
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_color', 
			'title' => __('Text Font Color', 'interior-design'), 
			'desc' => __('Font color for header text', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_link', 
			'title' => __('Primary Font Color', 'interior-design'), 
			'desc' => __('Font color for header headings, links, etc', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => __('Rollover Font Color', 'interior-design'), 
			'desc' => __('Font color for header links rollovers, etc', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_subtitle', 
			'title' => __('Subtitle Font Color', 'interior-design'), 
			'desc' => __('Font color for navigation subtitle, etc', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => __('Background Color', 'interior-design'), 
			'desc' => __('Header block background color', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_hover_bg', 
			'title' => __('Rollover Background Color', 'interior-design'), 
			'desc' => __('Background color for main navigation top level links rollovers and some other elements', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover_bg'] 
		);
		
		if ($tab == 'header_side') {
			$options[] = array( 
				'section' => $tab . '_section', 
				'id' => CMSMS_SHORTNAME . '_' . $tab . '_border', 
				'title' => __('Border Color', 'interior-design'), 
				'desc' => __('Color for borders in header block', 'interior-design'), 
				'type' => 'rgba', 
				'std' => $defaults[$tab]['border'] 
			);
		}
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_link', 
			'title' => __('Dropdown Links Color', 'interior-design'), 
			'desc' => __('Links color for header main navigation dropdown', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_hover', 
			'title' => __('Dropdown Rollover Font Color', 'interior-design'), 
			'desc' => __('Font color for header links rollovers in main navigation dropdown, etc', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_subtitle', 
			'title' => __('Dropdown Subtitle Font Color', 'interior-design'), 
			'desc' => __('Font color for navigation dropdown subtitle, etc', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_bg', 
			'title' => __('Dropdown Background Color', 'interior-design'), 
			'desc' => __('Header block background color for main navigation dropdown', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_hover_bg', 
			'title' => __('Dropdown Rollover Background Color', 'interior-design'), 
			'desc' => __('Background color for main navigation dropdown links rollovers and some other elements', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover_bg'] 
		);
	} elseif ($tab == 'header_top') { // Header Top
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_color', 
			'title' => __('Content Font Color', 'interior-design'), 
			'desc' => __('Font color for header top main content, headings, links, etc', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_link', 
			'title' => __('Primary Font Color', 'interior-design'), 
			'desc' => __('Font color for header top headings, links, etc', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => __('Rollover Font Color', 'interior-design'), 
			'desc' => __('Font color for header top links rollovers, etc', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => __('Background Color', 'interior-design'), 
			'desc' => __('Header top block background color', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_border', 
			'title' => __('Border Color', 'interior-design'), 
			'desc' => __('Color for borders in header top block', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_link', 
			'title' => __('Dropdown Links Color', 'interior-design'), 
			'desc' => __('Links color for header top main navigation dropdown', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_hover', 
			'title' => __('Dropdown Rollover Font Color', 'interior-design'), 
			'desc' => __('Font color for header top links rollovers in main navigation dropdown, etc', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_bg', 
			'title' => __('Dropdown Background Color', 'interior-design'), 
			'desc' => __('Header top block background color for main navigation dropdown', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_border', 
			'title' => __('Dropdown Border Color', 'interior-design'), 
			'desc' => __('Color for borders for main navigation dropdown in header top block ', 'interior-design'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_border'] 
		);
	} else { // Other
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_color', 
			'title' => __('Main Content Font Color', 'interior-design'), 
			'desc' => __('Font color for main content', 'interior-design'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['color'] : $defaults['default']['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_link', 
			'title' => __('Primary Color', 'interior-design'), 
			'desc' => __('First color for links and some other elements', 'interior-design'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['link'] : $defaults['default']['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => __('Highlight Color', 'interior-design'), 
			'desc' => __('Color for links rollovers, etc', 'interior-design'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['hover'] : $defaults['default']['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_heading', 
			'title' => __('Headings Color', 'interior-design'), 
			'desc' => __('Color for headings and some other elements', 'interior-design'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['heading'] : $defaults['default']['heading'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => __('Main Background Color', 'interior-design'), 
			'desc' => __('Main background color for some elements', 'interior-design'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['bg'] : $defaults['default']['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_alternate', 
			'title' => __('Alternate Background Color', 'interior-design'), 
			'desc' => __('Alternate background color for some elements', 'interior-design'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['alternate'] : $defaults['default']['alternate'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_border', 
			'title' => __('Borders Color', 'interior-design'), 
			'desc' => __('Color for borders', 'interior-design'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['border'] : $defaults['default']['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_custom', 
			'title' => __('Custom Color', 'interior-design'), 
			'desc' => __('Color for some custom elements', 'interior-design'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['custom'] : $defaults['default']['custom'] 
		);
	}
	
	
	return $options;	
}

