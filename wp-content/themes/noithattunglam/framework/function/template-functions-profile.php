<?php 
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Template Functions for Profiles & Profile
 * Created by CMSMasters
 * 
 */


/* Get Profiles Heading Function */
function cmsmasters_profile_heading($cmsms_id, $tag = 'h1', $show = true) { 
	$out = '<header class="cmsms_profile_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsms_profile_title entry-title">' . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsms_title($cmsms_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Profiles Heading Without Link Function */
function cmsmasters_profile_title_nolink($cmsms_id, $tag = 'h1', $sub_title = false, $tag_sub = 'h5', $show = true) { 
	$out = '<' . esc_html($tag) . ' class="cmsms_profile_title entry-title">' . 
		cmsms_title($cmsms_id, false) . 
	'</' . esc_html($tag) . '>';
	
	
	if ($sub_title) {
		$out .= '<' . $tag_sub . ' class="cmsms_profile_subtitle">' . 
			esc_html($sub_title) . 
		'</' . esc_html($tag) . '>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}


/* Get Profiles Content/Excerpt Function */
function cmsmasters_profile_exc_cont($show = true) {
	$out = cmsms_divpdel('<div class="cmsms_profile_content entry-content">' . "\n" . 
		wpautop(theme_excerpt(20, false)) . 
	'</div>' . "\n");
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Profiles Category Function */
function cmsmasters_profile_category($cmsms_id, $taxonomy, $template_type = 'page', $show = true) {
	if (get_the_terms($cmsms_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsms_profile_category">' . 
				get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsms_option = cmsmasters_get_global_options();
			$out = '';
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_profile_post_cat']) {
				$out = '<div class="profile_details_item">' . 
					'<div class="profile_details_item_title">' . esc_html__('Categories', 'interior-design') . ':' . '</div>' . 
					'<div class="profile_details_item_desc">' . 
						'<span class="cmsms_profile_category">' . 
							get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
						'</span>' . 
					'</div>' . 
				'</div>';
			}
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Projects Like Function */
function cmsmasters_profile_like($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = cmsmsLike(false);
	} elseif ($template_type == 'post') {
		$cmsms_option = cmsmasters_get_global_options();
		
		$out = '';
		
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_profile_post_like']) {
			$out = '<div class="profile_details_item">' . 
				'<div class="profile_details_item_title">' . esc_html__('Like', 'interior-design') . ':' . '</div>' . 
				'<div class="profile_details_item_desc details_item_desc_like">' . 
					cmsmsLike(false) . 
				'</div>' . 
			'</div>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Profiles Comments Function */
function cmsmasters_profile_comments($template_type = 'page', $show = true) {
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = '<a class="cmsms_profile_comments cmsms_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'interior-design') . ' ' . esc_attr(get_the_title()) . '">' . esc_html(get_comments_number()) . '</a>';
		} elseif ($template_type == 'post') {
			$cmsms_option = cmsmasters_get_global_options();
			
			$out = '';
			
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_profile_post_comment']) {
				$out .= '<div class="profile_details_item">' . 
					'<div class="profile_details_item_title">' . esc_html__('Comments', 'interior-design') . ':' . '</div>' . 
					'<div class="profile_details_item_desc details_item_desc_comments">' . 
						'<a class="cmsms_post_comments cmsms_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'interior-design') . ' ' . esc_attr(get_the_title()) . '">' . 
							'<span>' . esc_html(get_comments_number()) . '</span>' . 
						'</a>' . 
					'</div>' . 
				'</div>';
			}
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Profiles Features Function */
function cmsmasters_profile_features($features_position = 'features', $features = '', $features_title = false, $tag = 'h2', $show = true) {
	if (
		!empty($features[0][0]) && 
		!empty($features[0][1])
	) {
		$out = '';
		
		if ($features_position == 'features') {
			$out .= '<div class="profile_features entry-meta">' . 
				($features_title ? '<' . esc_html($tag) . ' class="profile_features_title">' . esc_html($features_title) . '</' . esc_html($tag) . '>' : '');
		}
		
		
		foreach ($features as $feature) {
			if ($feature[0] != '' && $feature[1] != '') {
				$feature_lists = explode("\n", $feature[1]);
				
				$out .= '<div class="profile_' . esc_attr($features_position) . '_item">' . 
					'<div class="profile_' . esc_attr($features_position) . '_item_title">' . esc_html($feature[0]) . '</div>' . 
					'<div class="profile_' . esc_attr($features_position) . '_item_desc">';
				
						foreach ($feature_lists as $feature_list) {
							$out .= trim($feature_list);
						}
				
					$out .= '</div>' . 
				'</div>';
			}
		}
		
		
		if ($features_position == 'features') {
			$out .= '</div>';
		}
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Profiles Social Icons Function */
function cmsmasters_profile_social_icons($social_icons, $title_box = false, $tag = 'h2', $show = true) {
	if ($social_icons != '') {
		$out = '<div class="profile_social_icons">';
			if ($title_box) {
				$out .= '<' . esc_html($tag) . ' class="profile_social_icons_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
			}
			
			$out .= '<ul class="profile_social_icons_list">';
			
				foreach($social_icons as $social_icon) {
					$social_icon_item = explode('|', str_replace(' ', '', $social_icon));
					
					$social_icon_icon = $social_icon_item[0];
					$social_icon_link = $social_icon_item[1];
					$social_icon_title = $social_icon_item[2];
					$social_icon_target = $social_icon_item[3];
					
					$out .= '<li>' . 
						'<a href="' . esc_url($social_icon_link) . '" class="' . esc_attr($social_icon_icon) . '" title="' . esc_attr($social_icon_title) . '"' . (($social_icon_target == 'true') ? ' target="_blank"' : '') . '></a>' . 
					'</li>';
				}
			
			$out .= '</ul>' . 
		'</div>';
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}

