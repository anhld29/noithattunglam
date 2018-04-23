<?php 
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Post, Page, Project & Profile General Options
 * Created by CMSMasters
 * 
 */


if (!function_exists('get_custom_general_meta_fields')) {
function get_custom_general_meta_fields() {
	$cmsms_option = cmsmasters_get_global_options();


	$cmsms_global_bg_col = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_col']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_col'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_col'] : '#fefefe';
	$cmsms_global_bg_img_enable = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable'] == 1) ? 'true' : 'false') : 'true';
	$cmsms_global_bg_img = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_img']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_img'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_img'] : '';
	$cmsms_global_bg_rep = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_rep']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_rep'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_rep'] : 'repeat';
	$cmsms_global_bg_pos = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_pos']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_pos'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_pos'] : 'top center';
	$cmsms_global_bg_att = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_att']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_att'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_att'] : 'scroll';
	$cmsms_global_bg_size = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_size']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_size'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_size'] : 'auto';


	$cmsms_global_heading_alignment = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_alignment']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_alignment'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_alignment'] : 'center';
	$cmsms_global_heading_scheme = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_scheme']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'] : 'first';
	$cmsms_global_heading_bg_img_enable = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] == 1) ? 'true' : 'false') : 'true';
	$cmsms_global_heading_bg_img = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'] : '';
	$cmsms_global_heading_bg_rep = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'] : 'repeat';
	$cmsms_global_heading_bg_att = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'] : 'scroll';
	$cmsms_global_heading_bg_size = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'] : 'cover';
	$cmsms_global_heading_bg_color = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'] : '';
	$cmsms_global_heading_height = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_height']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_height'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_height'] : '';


	$cmsms_global_breadcrumbs = (isset($cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs']) && $cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] == 1) ? 'true' : 'false') : 'true';


	$custom_general_meta_fields = array( 
		array( 
			'id'	=> 'cmsms_bg', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Background', 'interior-design'), 
			'desc'	=> __('Use Default', 'interior-design'), 
			'id'	=> 'cmsms_bg_default', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> __('Background Color', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_col', 
			'type'	=> 'color', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_col 
		), 
		array( 
			'label'	=> __('Background Image Visibility', 'interior-design'), 
			'desc'	=> __('Show', 'interior-design'), 
			'id'	=> 'cmsms_bg_img_enable', 
			'type'	=> 'checkbox', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_img_enable 
		), 
		array( 
			'label'	=> __('Background Image', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_img', 
			'type'	=> 'image', 
			'hide'	=> 'true', 
			'cancel' => '', 
			'std'	=> $cmsms_global_bg_img, 
			'frame' => 'select', 
			'multiple' => false 
		), 
		array( 
			'label'	=> __('Background Repeat', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_rep', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_rep, 
			'options' => array( 
				'no-repeat' => array( 
					'label' => __('No Repeat', 'interior-design'), 
					'value'	=> 'no-repeat' 
				), 
				'repeat-x' => array( 
					'label' => __('Repeat Horizontally', 'interior-design'), 
					'value'	=> 'repeat-x' 
				), 
				'repeat-y' => array( 
					'label' => __('Repeat Vertically', 'interior-design'), 
					'value'	=> 'repeat-y' 
				), 
				'repeat' => array( 
					'label' => __('Repeat', 'interior-design'), 
					'value'	=> 'repeat' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Background Position', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_pos', 
			'type'	=> 'select', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_pos, 
			'options' => array( 
				'top left' => array( 
					'label' => __('Top Left', 'interior-design'), 
					'value'	=> 'top left' 
				), 
				'top center' => array( 
					'label' => __('Top Center', 'interior-design'), 
					'value'	=> 'top center' 
				), 
				'top right' => array( 
					'label' => __('Top Right', 'interior-design'), 
					'value'	=> 'top right' 
				), 
				'center left' => array( 
					'label' => __('Center Left', 'interior-design'), 
					'value'	=> 'center left' 
				), 
				'center center' => array( 
					'label' => __('Center Center', 'interior-design'), 
					'value'	=> 'center center' 
				), 
				'center right' => array( 
					'label' => __('Center Right', 'interior-design'), 
					'value'	=> 'center right' 
				), 
				'bottom left' => array( 
					'label' => __('Bottom Left', 'interior-design'), 
					'value'	=> 'bottom left' 
				), 
				'bottom center' => array( 
					'label' => __('Bottom Center', 'interior-design'), 
					'value'	=> 'bottom center' 
				), 
				'bottom right' => array( 
					'label' => __('Bottom Right', 'interior-design'), 
					'value'	=> 'bottom right' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Background Attachment', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_att', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_att, 
			'options' => array( 
				'scroll' => array( 
					'label' => __('Scroll', 'interior-design'), 
					'value'	=> 'scroll' 
				), 
				'fixed' => array( 
					'label' => __('Fixed', 'interior-design'), 
					'value'	=> 'fixed' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Background Size', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_size', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_size, 
			'options' => array( 
				'auto' => array( 
					'label' => __('Auto', 'interior-design'), 
					'value'	=> 'auto' 
				), 
				'cover' => array( 
					'label' => __('Cover', 'interior-design'), 
					'value'	=> 'cover' 
				), 
				'contain' => array( 
					'label' => __('Contain', 'interior-design'), 
					'value'	=> 'contain' 
				)
			) 
		), 
		array( 
			'id'	=> 'cmsms_bg', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsms_heading', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Heading', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading', 
			'type'	=> 'radio', 
			'hide'	=> '', 
			'std'	=> 'disabled', 
			'options' => array( 
				'default' => array( 
					'label' => __('Default', 'interior-design'), 
					'value'	=> 'default' 
				), 
				'custom' => array( 
					'label' => __('Custom', 'interior-design'), 
					'value'	=> 'custom' 
				), 
				'disabled' => array( 
					'label' => __('Disabled', 'interior-design'), 
					'value'	=> 'disabled' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Heading Title', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_title', 
			'type'	=> 'text_long', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Heading Subtitle', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_subtitle', 
			'type'	=> 'textarea', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Heading Icon', 'interior-design'), 
			'desc'	=> __('Choose your custom icon for this heading', 'interior-design'), 
			'id'	=> 'cmsms_heading_icon', 
			'type'	=> 'icon', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Heading Alignment', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_alignment', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_alignment, 
			'options' => array( 
				'left' => array( 
					'label' => __('Left', 'interior-design'), 
					'value'	=> 'left' 
				), 
				'right' => array( 
					'label' => __('Right', 'interior-design'), 
					'value'	=> 'right' 
				), 
				'center' => array( 
					'label' => __('Center', 'interior-design'), 
					'value'	=> 'center' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Heading Color Scheme', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_scheme', 
			'type'	=> 'select_scheme', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_scheme 
		), 
		array( 
			'label'	=> __('Heading Background Image Visibility', 'interior-design'), 
			'desc'	=> __('Show', 'interior-design'), 
			'id'	=> 'cmsms_heading_bg_img_enable', 
			'type'	=> 'checkbox', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_bg_img_enable 
		), 
		array( 
			'label'	=> __('Heading Background Image', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_bg_img', 
			'type'	=> 'image', 
			'hide'	=> 'true', 
			'cancel' => '', 
			'std'	=> $cmsms_global_heading_bg_img, 
			'frame' => 'select', 
			'multiple' => false 
		), 
		array( 
			'label'	=> __('Heading Background Repeat', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_bg_rep', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_bg_rep, 
			'options' => array( 
				'no-repeat' => array( 
					'label' => __('No Repeat', 'interior-design'), 
					'value'	=> 'no-repeat' 
				), 
				'repeat-x' => array( 
					'label' => __('Repeat Horizontally', 'interior-design'), 
					'value'	=> 'repeat-x' 
				), 
				'repeat-y' => array( 
					'label' => __('Repeat Vertically', 'interior-design'), 
					'value'	=> 'repeat-y' 
				), 
				'repeat' => array( 
					'label' => __('Repeat', 'interior-design'), 
					'value'	=> 'repeat' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Heading Background Attachment', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_bg_att', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_bg_att, 
			'options' => array( 
				'scroll' => array( 
					'label' => __('Scroll', 'interior-design'), 
					'value'	=> 'scroll' 
				), 
				'fixed' => array( 
					'label' => __('Fixed', 'interior-design'), 
					'value'	=> 'fixed' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Heading Background Size', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_bg_size', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_bg_size, 
			'options' => array( 
				'auto' => array( 
					'label' => __('Auto', 'interior-design'), 
					'value'	=> 'auto' 
				), 
				'cover' => array( 
					'label' => __('Cover', 'interior-design'), 
					'value'	=> 'cover' 
				), 
				'contain' => array( 
					'label' => __('Contain', 'interior-design'), 
					'value'	=> 'contain' 
				)
			) 
		),
		array( 
			'label'	=> __('Heading Background Color Overlay', 'interior-design'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_bg_color', 
			'type'	=> 'rgba', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_bg_color 
		), 
		array( 
			'label'	=> __('Heading Height', 'interior-design'), 
			'desc'	=> __('pixels', 'interior-design'), 
			'id'	=> 'cmsms_heading_height', 
			'type'	=> 'number', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_height, 
			'min' 	=> '0', 
			'max' 	=> '', 
			'step' 	=> '' 
		), 
		array( 
			'label'	=> __('Breadcrumbs', 'interior-design'), 
			'desc'	=> __('Show', 'interior-design'), 
			'id'	=> 'cmsms_breadcrumbs', 
			'type'	=> 'checkbox', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_breadcrumbs 
		), 
		array( 
			'id'	=> 'cmsms_heading', 
			'type'	=> 'tab_finish' 
		) 
	);
	
	
	return $custom_general_meta_fields;
}
}

