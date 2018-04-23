<?php 
/**
 * @package 	WordPress Plugin
 * @subpackage 	CMSMasters Content Composer
 * @version		1.5.5
 * 
 * Views Post Type
 * Created by CMSMasters
 * 
 */


class Cmsms_Views {
	public function __construct() { 
		$view_labels = array( 
			'name' => esc_html__('Views', 'cmsms_content_composer'), 
			'singular_name' => esc_html__('View', 'cmsms_content_composer') 
		);
		
		
		$view_args = array( 
			'labels' => $view_labels, 
			'public' => false, 
			'capability_type' => 'post', 
			'hierarchical' => false, 
			'exclude_from_search' => true, 
			'publicly_queryable' => false, 
			'show_ui' => false, 
			'show_in_nav_menus' => false 
		);
		
		
		register_post_type('cmsms_view', $view_args);
	}
}


function cmsms_views_init() {
	global $lk;
	
	
	$lk = new Cmsms_Views();
}

add_action('init', 'cmsms_views_init');

