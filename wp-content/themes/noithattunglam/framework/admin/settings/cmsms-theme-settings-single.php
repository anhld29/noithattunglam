<?php 
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Admin Panel Post, Project, Profile & Donations Campaign Settings
 * Created by CMSMasters
 * 
 */


if (!function_exists('cmsmasters_options_single_tabs')) {

function cmsmasters_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'interior-design');
	
	if (class_exists('Cmsms_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'interior-design');
	}
	
	if (class_exists('Cmsms_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'interior-design');
	}
	
	if (CMSMS_DONATIONS) {
		$tabs['campaign'] = esc_attr__('Campaign', 'interior-design');
	}
	
	return $tabs;
}

}


function cmsmasters_options_single_sections() {
	$tab = cmsmasters_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'interior-design');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'interior-design');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'interior-design');
		
		
		break;
	case 'campaign':
		$sections = array();
		
		$sections['campaign_section'] = esc_attr__('Donations Campaign Options', 'interior-design');
		
		
		break;
	}
	
	
	return $sections;
} 


function cmsmasters_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsmasters_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = cmsms_theme_settings_single_defaults();
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_layout', 
			'title' => __('Layout Type', 'interior-design'), 
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
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_title', 
			'title' => __('Post Title', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_date', 
			'title' => __('Post Date', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_cat', 
			'title' => __('Post Categories', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_author', 
			'title' => __('Post Author', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_comment', 
			'title' => __('Post Comments', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_tag', 
			'title' => __('Post Tags', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_like', 
			'title' => __('Post Likes', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_nav_box', 
			'title' => __('Posts Navigation Box', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_share_box', 
			'title' => __('Sharing Box', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_author_box', 
			'title' => __('About Author Box', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_more_posts_box', 
			'title' => __('More Posts Box', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab][CMSMS_SHORTNAME . '_blog_more_posts_box'],  
			'choices' => array( 
				__('Show Related Posts', 'interior-design') . '|related', 
				__('Show Popular Posts', 'interior-design') . '|popular', 
				__('Show Recent Posts', 'interior-design') . '|recent', 
				__('Hide More Posts Box', 'interior-design') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_more_posts_count', 
			'title' => __('More Posts Box Items Number', 'interior-design'), 
			'desc' => __('posts', 'interior-design'), 
			'type' => 'number', 
			'std' => $defaults[$tab][CMSMS_SHORTNAME . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_more_posts_pause', 
			'title' => __('More Posts Slider Pause Time', 'interior-design'), 
			'desc' => __("in seconds, if '0' - autoslide disabled", 'interior-design'), 
			'type' => 'number', 
			'std' => $defaults[$tab][CMSMS_SHORTNAME . '_blog_more_posts_pause'],  
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_title', 
			'title' => __('Project Title', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_details_title', 
			'title' => __('Project Details Title', 'interior-design'), 
			'desc' => __('Enter a project details block title', 'interior-design'), 
			'type' => 'text', 
			'std' => 'Project details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_date', 
			'title' => __('Project Date', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_cat', 
			'title' => __('Project Categories', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_author', 
			'title' => __('Project Author', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_comment', 
			'title' => __('Project Comments', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_tag', 
			'title' => __('Project Tags', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_like', 
			'title' => __('Project Likes', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_link', 
			'title' => __('Project Link', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_share_box', 
			'title' => __('Sharing Box', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_nav_box', 
			'title' => __('Projects Navigation Box', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_author_box', 
			'title' => __('About Author Box', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_more_projects_box', 
			'title' => __('More Projects Box', 'interior-design'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab][CMSMS_SHORTNAME . '_portfolio_more_projects_box'], 
			'choices' => array( 
				__('Show Related Projects', 'interior-design') . '|related', 
				__('Show Popular Projects', 'interior-design') . '|popular', 
				__('Show Recent Projects', 'interior-design') . '|recent', 
				__('Hide More Projects Box', 'interior-design') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_more_projects_count', 
			'title' => __('More Projects Box Items Number', 'interior-design'), 
			'desc' => __('projects', 'interior-design'), 
			'type' => 'number', 
			'std' => $defaults[$tab][CMSMS_SHORTNAME . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_more_projects_pause', 
			'title' => __('More Projects Slider Pause Time', 'interior-design'), 
			'desc' => __("in seconds, if '0' - autoslide disabled", 'interior-design'), 
			'type' => 'number', 
			'std' => $defaults[$tab][CMSMS_SHORTNAME . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_slug', 
			'title' => __('Project Slug', 'interior-design'), 
			'desc' => __('Enter a page slug that should be used for your projects single item', 'interior-design'), 
			'type' => 'text', 
			'std' => 'project', 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_title', 
			'title' => __('Profile Title', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_details_title', 
			'title' => __('Profile Details Title', 'interior-design'), 
			'desc' => __('Enter a profile details block title', 'interior-design'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_cat', 
			'title' => __('Profile Categories', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_comment', 
			'title' => __('Profile Comments', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_like', 
			'title' => __('Profile Likes', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_nav_box', 
			'title' => __('Profiles Navigation Box', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_share_box', 
			'title' => __('Sharing Box', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_slug', 
			'title' => __('Profile Slug', 'interior-design'), 
			'desc' => __('Enter a page slug that should be used for your profiles single item', 'interior-design'), 
			'type' => 'text', 
			'std' => 'profile', 
			'class' => '' 
		);
		
		
		break;
	case 'campaign':
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_layout', 
			'title' => __('Layout Type', 'interior-design'), 
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
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_title', 
			'title' => __('Campaign Title', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_date', 
			'title' => __('Campaign Date', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_cat', 
			'title' => __('Campaign Categories', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_author', 
			'title' => __('Campaign Author', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_comment', 
			'title' => __('Campaign Comments', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_tag', 
			'title' => __('Campaign Tags', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_like', 
			'title' => __('Campaign Likes', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_nav_box', 
			'title' => __('Campaign Navigation Box', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_share_box', 
			'title' => __('Sharing Box', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_author_box', 
			'title' => __('About Author Box', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_more_campaigns_box', 
			'title' => __('More Campaigns Box', 'interior-design'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				__('Show Related Tab', 'interior-design') . '|related', 
				__('Show Popular Tab', 'interior-design') . '|popular', 
				__('Show Recent Tab', 'interior-design') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_r_p_l_number', 
			'title' => __('Related, Popular & Latest Campaigns Boxes Items Number', 'interior-design'), 
			'desc' => __('campaigns', 'interior-design'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_slug', 
			'title' => __('Campaign Slug', 'interior-design'), 
			'desc' => __('Enter a page slug that should be used for your donations campaign single item', 'interior-design'), 
			'type' => 'text', 
			'std' => 'campaign', 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return $options;
}

