<?php 
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function cmsmasters_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'interior-design');
	$tabs['export'] = esc_attr__('Export', 'interior-design');
	
	
	return $tabs;
}


function cmsmasters_options_demo_sections() {
	$tab = cmsmasters_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'interior-design');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'interior-design');
		
		
		break;
	}
	
	
	return $sections;
} 


function cmsmasters_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsmasters_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => CMSMS_SHORTNAME . '_demo_import', 
			'title' => __('Theme Settings', 'interior-design'), 
			'desc' => __("Enter your theme settings data here and click 'Import' button", 'interior-design'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => CMSMS_SHORTNAME . '_demo_export', 
			'title' => __('Theme Settings', 'interior-design'), 
			'desc' => __("Click here to export your theme settings data to the file", 'interior-design'), 
			'type' => 'button', 
			'std' => __('Export Theme Settings', 'interior-design'), 
			'class' => 'cmsms-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

