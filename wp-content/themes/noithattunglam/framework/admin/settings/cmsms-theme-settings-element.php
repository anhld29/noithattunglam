<?php 
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.4
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function cmsmasters_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'interior-design');
	$tabs['icon'] = esc_attr__('Social Icons', 'interior-design');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'interior-design');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'interior-design');
	$tabs['error'] = esc_attr__('404', 'interior-design');
	$tabs['code'] = esc_attr__('Custom Codes', 'interior-design');
	
	if (class_exists('Cmsms_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'interior-design');
	}
	
	return $tabs;
}


function cmsmasters_options_element_sections() {
	$tab = cmsmasters_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'interior-design');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'interior-design');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'interior-design');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'interior-design');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'interior-design');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'interior-design');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'interior-design');
		
		break;
	}
	
	return $sections;	
} 


function cmsmasters_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsmasters_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => CMSMS_SHORTNAME . '_sidebar', 
			'title' => __('Custom Sidebars', 'interior-design'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => CMSMS_SHORTNAME . '_social_icons', 
			'title' => __('Social Icons', 'interior-design'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsms-icon-dribbble|#|' . __('Dribbble', 'interior-design') . '|true', 
				'cmsms-icon-facebook|#|' . __('Facebook', 'interior-design') . '|true', 
				'cmsms-icon-behance|#|' . __('Behance', 'interior-design') . '|true', 
				'cmsms-icon-twitter|#|' . __('Twitter', 'interior-design') . '|true', 
				'cmsms-icon-pinterest|#|' . __('Pinterest', 'interior-design') . '|true' 
			) 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_skin', 
			'title' => __('Skin', 'interior-design'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				__('Dark', 'interior-design') . '|dark', 
				__('Light', 'interior-design') . '|light', 
				__('Mac', 'interior-design') . '|mac', 
				__('Metro Black', 'interior-design') . '|metro-black', 
				__('Metro White', 'interior-design') . '|metro-white', 
				__('Parade', 'interior-design') . '|parade', 
				__('Smooth', 'interior-design') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_path', 
			'title' => __('Path', 'interior-design'), 
			'desc' => __('Sets path for switching windows', 'interior-design'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				__('Vertical', 'interior-design') . '|vertical', 
				__('Horizontal', 'interior-design') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_infinite', 
			'title' => __('Infinite', 'interior-design'), 
			'desc' => __('Sets the ability to infinite the group', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_aspect_ratio', 
			'title' => __('Keep Aspect Ratio', 'interior-design'), 
			'desc' => __('Sets the resizing method used to keep aspect ratio within the viewport', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_mobile_optimizer', 
			'title' => __('Mobile Optimizer', 'interior-design'), 
			'desc' => __('Make lightboxes optimized for giving better experience with mobile devices', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_max_scale', 
			'title' => __('Max Scale', 'interior-design'), 
			'desc' => __('Sets the maximum viewport scale of the content', 'interior-design'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_min_scale', 
			'title' => __('Min Scale', 'interior-design'), 
			'desc' => __('Sets the minimum viewport scale of the content', 'interior-design'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_inner_toolbar', 
			'title' => __('Inner Toolbar', 'interior-design'), 
			'desc' => __('Bring buttons into windows, or let them be over the overlay', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_smart_recognition', 
			'title' => __('Smart Recognition', 'interior-design'), 
			'desc' => __('Sets content auto recognize from web pages', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_fullscreen_one_slide', 
			'title' => __('Fullscreen One Slide', 'interior-design'), 
			'desc' => __('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_fullscreen_viewport', 
			'title' => __('Fullscreen Viewport', 'interior-design'), 
			'desc' => __('Sets the resizing method used to fit content within the fullscreen mode', 'interior-design'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				__('Center', 'interior-design') . '|center', 
				__('Fit', 'interior-design') . '|fit', 
				__('Fill', 'interior-design') . '|fill', 
				__('Stretch', 'interior-design') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_toolbar', 
			'title' => __('Toolbar Controls', 'interior-design'), 
			'desc' => __('Sets buttons be available or not', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_arrows', 
			'title' => __('Arrow Controls', 'interior-design'), 
			'desc' => __('Enable the arrow buttons', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_fullscreen', 
			'title' => __('Fullscreen Controls', 'interior-design'), 
			'desc' => __('Sets the fullscreen button', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_thumbnail', 
			'title' => __('Thumbnails Controls', 'interior-design'), 
			'desc' => __('Sets the thumbnail navigation', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_keyboard', 
			'title' => __('Keyboard Controls', 'interior-design'), 
			'desc' => __('Sets the keyboard navigation', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_mousewheel', 
			'title' => __('Mouse Wheel Controls', 'interior-design'), 
			'desc' => __('Sets the mousewheel navigation', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_swipe', 
			'title' => __('Swipe Controls', 'interior-design'), 
			'desc' => __('Sets the swipe navigation', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_slideshow', 
			'title' => __('Slideshow Controls', 'interior-design'), 
			'desc' => __('Enable the slideshow feature and button', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_nav', 
			'title' => __('Website Pages', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_categs', 
			'title' => __('Blog Archives by Categories', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_tags', 
			'title' => __('Blog Archives by Tags', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_month', 
			'title' => __('Blog Archives by Month', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_categs', 
			'title' => __('Portfolio Archives by Categories', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_tags', 
			'title' => __('Portfolio Archives by Tags', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_color', 
			'title' => __('Text Color', 'interior-design'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#bda87f' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_color_second', 
			'title' => __('Secondary Text Color', 'interior-design'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_color', 
			'title' => __('Background Color', 'interior-design'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#252531' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_img_enable', 
			'title' => __('Background Image Visibility', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_image', 
			'title' => __('Background Image', 'interior-design'), 
			'desc' => __('Choose your custom error page background image.', 'interior-design'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_rep', 
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
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_pos', 
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
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_att', 
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
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_size', 
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
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_search', 
			'title' => __('Search Line', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_button', 
			'title' => __('Sitemap Button', 'interior-design'), 
			'desc' => __('show', 'interior-design'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_link', 
			'title' => __('Sitemap Page URL', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_css', 
			'title' => __('Custom CSS', 'interior-design'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_js', 
			'title' => __('Custom JavaScript', 'interior-design'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_api_key', 
			'title' => __('Twitter API key', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_api_secret', 
			'title' => __('Twitter API secret', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_access_token', 
			'title' => __('Twitter Access token', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_access_token_secret', 
			'title' => __('Twitter Access token secret', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMS_SHORTNAME . '_recaptcha_public_key', 
			'title' => __('reCAPTCHA Public Key', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMS_SHORTNAME . '_recaptcha_private_key', 
			'title' => __('reCAPTCHA Private Key', 'interior-design'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

