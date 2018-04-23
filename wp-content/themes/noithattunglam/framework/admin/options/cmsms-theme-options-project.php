<?php 
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.0
 * 
 * Project Options Functions
 * Created by CMSMasters
 * 
 */

if (!function_exists('get_custom_project_meta_fields')) {
function get_custom_project_meta_fields() {
	$cmsms_option = cmsmasters_get_global_options();


	$cmsms_global_bottom_sidebar = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar']) && $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';

	$cmsms_global_bottom_sidebar_layout = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'])) ? $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'] : '14141414';

	$cmsms_global_portfolio_project_title = (isset($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_title']) && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_title'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_title'] == 1) ? 'true' : 'false') : 'true';

	$cmsms_global_portfolio_project_details_title = (isset($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_details_title']) && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_details_title'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_details_title'] : __('Project details', 'interior-design');

	$cmsms_global_portfolio_project_share_box = (isset($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_share_box']) && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_share_box'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_share_box'] == 1) ? 'true' : 'false') : 'true';

	$cmsms_global_portfolio_project_author_box = (isset($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author_box']) && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author_box'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author_box'] == 1) ? 'true' : 'false') : 'true';

	$cmsms_global_portfolio_more_projects_box = (cmsms_get_global('portfolio_more_projects_box')) ? cmsms_get_global('portfolio_more_projects_box') : 'related';


	$cmsms_option_name = 'cmsms_project_';


	$tabs_array = array();


	$tabs_array['cmsms_project'] = array( 
		'label' => esc_html__('Project', 'interior-design'), 
		'value'	=> 'cmsms_project' 
	);


	$tabs_array['cmsms_layout'] = array( 
		'label' => esc_html__('Layout', 'interior-design'), 
		'value'	=> 'cmsms_layout' 
	);

	$tabs_array['cmsms_heading'] = array( 
		'label' => esc_html__('Heading', 'interior-design'), 
		'value'	=> 'cmsms_heading' 
	);


	$custom_project_meta_fields = array( 
		array( 
			'id'	=> 'cmsms_project_images', 
			'type'	=> 'content_start', 
			'box'	=> 'true', 
			'hide'	=> 'true' 
		), 
		array( 
			'label'	=> __('Project Images', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'images', 
			'type'	=> 'images_list', 
			'hide'	=> '', 
			'std'	=> '', 
			'frame' => 'post', 
			'multiple' => true 
		), 
		array( 
			'label'	=> __('Number of Columns', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'columns', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> 'three', 
			'options' => array( 
				'three' => array( 
					'label' => __('Three', 'interior-design'), 
					'value'	=> 'three' 
				), 
				'two' => array( 
					'label' => __('Two', 'interior-design'), 
					'value'	=> 'two' 
				), 
				'one' => array( 
					'label' => __('One', 'interior-design'), 
					'value'	=> 'one' 
				) 
			) 
		),
		array( 
			'id'	=> 'cmsms_project_images', 
			'type'	=> 'content_finish' 
		), 
		array( 
			'id'	=> 'cmsms_project_video', 
			'type'	=> 'content_start', 
			'box'	=> 'true', 
			'hide'	=> 'true' 
		), 
		array( 
			'label'	=> __('Video Type', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'video_type', 
			'type'	=> 'radio', 
			'hide'	=> '', 
			'std'	=> 'embedded', 
			'options' => array( 
				'embedded' => array( 
					'label' => __('Embedded (YouTube, Vimeo)', 'interior-design'), 
					'value'	=> 'embedded' 
				), 
				'selfhosted' => array( 
					'label' => __('Self-Hosted', 'interior-design'), 
					'value'	=> 'selfhosted' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Embedded Video Link', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'video_link', 
			'type'	=> 'text_long', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Self-Hosted Video Links', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'video_links', 
			'type'	=> 'repeatable', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'id'	=> 'cmsms_project_video', 
			'type'	=> 'content_finish' 
		), 
		array( 
			'id'	=> $cmsms_option_name . 'tabs', 
			'type'	=> 'tabs', 
			'std'	=> 'cmsms_project', 
			'options' => $tabs_array 
		), 
		array( 
			'id'	=> 'cmsms_project', 
			'type'	=> 'tab_start', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> __('Project Options', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'project_options', 
			'type'	=> 'select', 
			'hide'	=> '', 
			'std'	=> 'default', 
			'options' => array( 
				'default' => array( 
					'label' => __('Use Default Project Options', 'interior-design'),
					'value'	=> 'default' 
				), 
				'custom' => array( 
					'label' => __('Set Custom Project Options', 'interior-design'),
					'value'	=> 'custom' 
				) 
			) 
		),
		array( 
			'label'	=> __('Project Title', 'interior-design'), 
			'desc'	=> __('Show', 'interior-design'), 
			'id'	=> $cmsms_option_name . 'title', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_portfolio_project_title 
		), 
		array( 
			'label'	=> __('Sharing Box', 'interior-design'), 
			'desc'	=> __('Show', 'interior-design'), 
			'id'	=> $cmsms_option_name . 'sharing_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_portfolio_project_share_box 
		), 
		array( 
			'label'	=> __('About Author Box', 'interior-design'), 
			'desc'	=> __('Show', 'interior-design'), 
			'id'	=> $cmsms_option_name . 'author_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_portfolio_project_author_box 
		), 
		array( 
			'label'	=> __('More Posts Box', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'more_posts', 
			'type'	=> 'select', 
			'hide'	=> '', 
			'class'	=> 'cmsms_tr_highlight cmsms_tr_bdb', 
			'std'	=> $cmsms_global_portfolio_more_projects_box, 
			'options' => array( 
				'related' => array( 
					'label' => __('Show Related Box', 'interior-design'),
					'value'	=> 'related' 
				), 
				'popular' => array( 
					'label' => __('Show Popular Box', 'interior-design'),
					'value'	=> 'popular' 
				), 
				'recent' => array( 
					'label' => __('Show Recent Box', 'interior-design'),
					'value'	=> 'recent' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Project Size', 'interior-design'), 
			'desc'	=> __('Recomended Featured Image dimensions', 'interior-design') . ' - ', 
			'id'	=> $cmsms_option_name . 'size', 
			'type'	=> 'radio_img_pj', 
			'hide'	=> '', 
			'std'	=> 'one_x_one', 
			'options' => array( 
				'one_x_one' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/one_x_one.jpg', 
					'size' => '580 x 400', 
					'label' => '1 x 1', 
					'value'	=> 'one_x_one' 
				), 
				'one_x_two' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/one_x_two.jpg', 
					'size' => '580 x 800', 
					'label' => '1 x 2', 
					'value'	=> 'one_x_two' 
				), 
				'one_x_three' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/one_x_three.jpg', 
					'size' => '580 x 1200', 
					'label' => '1 x 3', 
					'value'	=> 'one_x_three' 
				), 
				'two_x_one' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/two_x_one.jpg', 
					'size' => '580 x 200', 
					'label' => '2 x 1', 
					'value'	=> 'two_x_one' 
				), 
				'two_x_two' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/two_x_two.jpg', 
					'size' => '580 x 400', 
					'label' => '2 x 2', 
					'value'	=> 'two_x_two' 
				), 
				'two_x_three' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/two_x_three.jpg', 
					'size' => '580 x 600', 
					'label' => '2 x 3', 
					'value'	=> 'two_x_three' 
				), 
				'three_x_one' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/three_x_one.jpg', 
					'size' => '870 x 200', 
					'label' => '3 x 1', 
					'value'	=> 'three_x_one' 
				), 
				'three_x_two' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/three_x_two.jpg', 
					'size' => '870 x 400', 
					'label' => '3 x 2', 
					'value'	=> 'three_x_two' 
				), 
				'three_x_three' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/three_x_three.jpg', 
					'size' => '870 x 600', 
					'label' => '3 x 3', 
					'value'	=> 'three_x_three' 
				), 
				'four_x_four' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/four_x_four.jpg', 
					'size' => '1160 x 800', 
					'label' => '4 x 4', 
					'value'	=> 'four_x_four' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Project Details Title', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'details_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_portfolio_project_details_title 
		), 
		array( 
			'label'	=> __('Project Info', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __("Project Link Text", 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'link_text', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> __('View Project', 'interior-design') 
		), 
		array( 
			'label'	=> __("Project Link URL", 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'link_url', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> '', 
			'desc'	=> __('Redirect to project link URL instead of opening project page', 'interior-design'), 
			'id'	=> $cmsms_option_name . 'link_redirect', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> __("Project Link Target", 'interior-design'), 
			'desc'	=> __('Open link in a new tab', 'interior-design'), 
			'id'	=> $cmsms_option_name . 'link_target', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> __('Project Features 1 Title', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_one_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Project Features 1', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_one', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Project Features 2 Title', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_two_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Project Features 2', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_two', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Project Features 3 Title', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_three_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Project Features 3', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_three', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'id'	=> 'cmsms_project', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsms_layout', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Page Color Scheme', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_page_scheme', 
			'type'	=> 'select_scheme', 
			'hide'	=> 'false', 
			'std'	=> 'default' 
		), 
		array( 
			'label'	=> __('Bottom Sidebar', 'interior-design'), 
			'desc'	=> __('Show', 'interior-design'), 
			'id'	=> 'cmsms_bottom_sidebar', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_bottom_sidebar 
		), 
		array( 
			'label'	=> __('Choose Bottom Sidebar', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bottom_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Choose Bottom Sidebar Layout', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bottom_sidebar_layout', 
			'type'	=> 'select', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bottom_sidebar_layout, 
			'options' => array( 
				'11' => array( 
					'label' => '1/1',
					'value'	=> '11' 
				), 
				'1212' => array( 
					'label' => '1/2 + 1/2',
					'value'	=> '1212' 
				), 
				'1323' => array( 
					'label' => '1/3 + 2/3',
					'value'	=> '1323' 
				), 
				'2313' => array( 
					'label' => '2/3 + 1/3',
					'value'	=> '2313' 
				), 
				'1434' => array( 
					'label' => '1/4 + 3/4',
					'value'	=> '1434' 
				), 
				'3414' => array( 
					'label' => '3/4 + 1/4',
					'value'	=> '3414' 
				), 
				'131313' => array( 
					'label' => '1/3 + 1/3 + 1/3',
					'value'	=> '131313' 
				), 
				'121414' => array( 
					'label' => '1/2 + 1/4 + 1/4',
					'value'	=> '121414' 
				), 
				'141214' => array( 
					'label' => '1/4 + 1/2 + 1/4',
					'value'	=> '141214' 
				), 
				'141412' => array( 
					'label' => '1/4 + 1/4 + 1/2',
					'value'	=> '141412' 
				), 
				'14141414' => array( 
					'label' => '1/4 + 1/4 + 1/4 + 1/4',
					'value'	=> '14141414' 
				) 
			) 
		), 
		array( 
			'id'	=> 'cmsms_layout', 
			'type'	=> 'tab_finish' 
		) 
	);


	return $custom_project_meta_fields;
}
}