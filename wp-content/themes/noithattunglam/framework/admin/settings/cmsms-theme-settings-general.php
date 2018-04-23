<?php 
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.6
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function cmsmasters_options_general_tabs() {
	$cmsms_option = cmsmasters_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'interior-design');
	
	$tabs['header'] = esc_attr__('Header', 'interior-design');
	$tabs['content'] = esc_attr__('Content', 'interior-design');
	$tabs['footer'] = esc_attr__('Footer', 'interior-design');
	
	return $tabs;
}


function cmsmasters_options_general_sections() {
	$tab = cmsmasters_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'interior-design');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'interior-design');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'interior-design');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'interior-design');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'interior-design');
		
		break;
	}
	
	return $sections;
} 


function cmsmasters_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsmasters_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_type', 
			'title' => __('Logo Type', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				__('Image', 'interior-design') . '|image', 
				__('Text', 'interior-design') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_url', 
			'title' => __('Logo Image', 'interior-design'), 
			'desc' => __('Choose your website logo image.', 'interior-design'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_url_retina', 
			'title' => __('Retina Logo Image', 'interior-design'), 
			'desc' => __('Choose logo image for retina displays.', 'interior-design'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_title', 
			'title' => __('Logo Title', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : CMSMS_FULLNAME), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_subtitle', 
			'title' => __('Logo Subtitle', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_custom_color', 
			'title' => __('Custom Text Colors', 'interior-design'), 
			'desc' => __('enable', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_title_color', 
			'title' => __('Logo Title Color', 'interior-design'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_subtitle_color', 
			'title' => __('Logo Subtitle Color', 'interior-design'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_col', 
			'title' => __('Background Color', 'interior-design'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_img_enable', 
			'title' => __('Background Image Visibility', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_img', 
			'title' => __('Background Image', 'interior-design'), 
			'desc' => __('Choose your custom website background image url.', 'interior-design'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_rep', 
			'title' => __('Background Repeat', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				__('No Repeat', 'interior-design') . '|no-repeat', 
				__('Repeat Horizontally', 'interior-design') . '|repeat-x', 
				__('Repeat Vertically', 'interior-design') . '|repeat-y', 
				__('Repeat', 'interior-design') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_pos', 
			'title' => __('Background Position', 'interior-design'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				__('Top Left', 'interior-design') . '|top left', 
				__('Top Center', 'interior-design') . '|top center', 
				__('Top Right', 'interior-design') . '|top right', 
				__('Center Left', 'interior-design') . '|center left', 
				__('Center Center', 'interior-design') . '|center center', 
				__('Center Right', 'interior-design') . '|center right', 
				__('Bottom Left', 'interior-design') . '|bottom left', 
				__('Bottom Center', 'interior-design') . '|bottom center', 
				__('Bottom Right', 'interior-design') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_att', 
			'title' => __('Background Attachment', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				__('Scroll', 'interior-design') . '|scroll', 
				__('Fixed', 'interior-design') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_size', 
			'title' => __('Background Size', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				__('Auto', 'interior-design') . '|auto', 
				__('Cover', 'interior-design') . '|cover', 
				__('Contain', 'interior-design') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line', 
			'title' => __('Top Line', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_height', 
			'title' => __('Top Height', 'interior-design'), 
			'desc' => __('pixels', 'interior-design'), 
			'type' => 'number', 
			'std' => '30', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_short_info', 
			'title' => __('Top Short Info', 'interior-design'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'interior-design') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
	if (CMSMS_DONATIONS) {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_donations_but', 
			'title' => __('Top Donations Button', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_donations_but_text', 
			'title' => __('Top Donations Button Text', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => __('Donate Now!', 'interior-design'), 
			'class' => 'nohtml' 
		);
	}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_add_cont', 
			'title' => __('Top Additional Content', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				__('None', 'interior-design') . '|none', 
				__('Top Line Social Icons', 'interior-design') . '|social', 
				__('Top Line Navigation', 'interior-design') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_styles', 
			'title' => __('Header Styles', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'h_side', 
			'choices' => array( 
				__('Default Style', 'interior-design') . '|default',
				__('Header Side Style', 'interior-design') . '|h_side',
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_main_nav_style', 
			'title' => __('Header Navigation Styles', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'h_nav', 
			'choices' => array( 
				__('Default', 'interior-design') . '|default',
				__('Hide Navigation', 'interior-design') . '|h_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_mid_height', 
			'title' => __('Header Middle Height', 'interior-design'), 
			'desc' => __('pixels', 'interior-design'), 
			'type' => 'number', 
			'std' => '60', 
			'min' => '60' 
		);
		
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_side_width', 
			'title' => __('Header Side Width', 'interior-design'), 
			'desc' => __('pixels', 'interior-design'), 
			'type' => 'number', 
			'std' => '270', 
			'min' => '270' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_search', 
			'title' => __('Header Search', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
	if (CMSMS_DONATIONS) {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_donations_but', 
			'title' => __('Header Donations Button', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_donations_but_text', 
			'title' => __('Header Donations Button Text', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => __('Donate Now!', 'interior-design'), 
			'class' => 'nohtml' 
		);
	}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_add_cont', 
			'title' => __('Header Additional Content', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cust_html', 
			'choices' => array( 
				__('None', 'interior-design') . '|none', 
				__('Header Social Icons', 'interior-design') . '|social', 
				__('Header Custom HTML', 'interior-design') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_side_add_cont_height', 
			'title' => __('Header Additional Content Height', 'interior-design'), 
			'desc' => __('pixels', 'interior-design'), 
			'type' => 'number', 
			'std' => '85', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_add_cont_cust_html', 
			'title' => __('Header Custom HTML', 'interior-design'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'interior-design') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_layout', 
			'title' => __('Layout Type by Default', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_archives_layout', 
			'title' => __('Archives Layout Type', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_search_layout', 
			'title' => __('Search Layout Type', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
	if (CMSMS_EVENTS_CALENDAR) {
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_events_layout', 
			'title' => __('Events Calendar Layout Type', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				__('Right Sidebar', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
	}
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_other_layout', 
			'title' => __('Other Layout Type', 'interior-design'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'interior-design') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_alignment', 
			'title' => __('Heading Alignment by Default', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'center', 
			'choices' => array( 
				__('Left', 'interior-design') . '|left', 
				__('Right', 'interior-design') . '|right', 
				__('Center', 'interior-design') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_scheme', 
			'title' => __('Heading Custom Color Scheme by Default', 'interior-design'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_image_enable', 
			'title' => __('Heading Background Image Visibility by Default', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_image', 
			'title' => __('Heading Background Image by Default', 'interior-design'), 
			'desc' => __('Choose your custom heading background image by default.', 'interior-design'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_repeat', 
			'title' => __('Heading Background Repeat by Default', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				__('No Repeat', 'interior-design') . '|no-repeat', 
				__('Repeat Horizontally', 'interior-design') . '|repeat-x', 
				__('Repeat Vertically', 'interior-design') . '|repeat-y', 
				__('Repeat', 'interior-design') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_attachment', 
			'title' => __('Heading Background Attachment by Default', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				__('Scroll', 'interior-design') . '|scroll', 
				__('Fixed', 'interior-design') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_size', 
			'title' => __('Heading Background Size by Default', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				__('Auto', 'interior-design') . '|auto', 
				__('Cover', 'interior-design') . '|cover', 
				__('Contain', 'interior-design') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_color', 
			'title' => __('Heading Background Color Overlay by Default', 'interior-design'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_height', 
			'title' => __('Heading Height by Default', 'interior-design'), 
			'desc' => __('pixels', 'interior-design'), 
			'type' => 'number', 
			'std' => '300', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_breadcrumbs', 
			'title' => __('Breadcrumbs Visibility by Default', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_scheme', 
			'title' => __('Bottom Custom Color Scheme', 'interior-design'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_sidebar', 
			'title' => __('Bottom Sidebar Visibility by Default', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_sidebar_layout', 
			'title' => __('Bottom Sidebar Layout by Default', 'interior-design'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '131313', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_scheme', 
			'title' => __('Footer Custom Color Scheme', 'interior-design'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_additional_content', 
			'title' => __('Footer Additional Content', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				__('None', 'interior-design') . '|none', 
				__('Footer Navigation', 'interior-design') . '|nav', 
				__('Social Icons', 'interior-design') . '|social', 
				__('Custom HTML', 'interior-design') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_height', 
			'title' => __('Footer Height', 'interior-design'), 
			'desc' => __('pixels', 'interior-design'), 
			'type' => 'number', 
			'std' => '60', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_nav', 
			'title' => __('Footer Navigation', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_social', 
			'title' => __('Footer Social Icons', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_html', 
			'title' => __('Footer Custom HTML', 'interior-design'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'interior-design') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_copyright', 
			'title' => __('Copyright Text', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => 'Created by cmsmasters 2017. All Rights Reserved', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

