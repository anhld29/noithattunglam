<?php 
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Template Functions for Portfolio & Project
 * Created by CMSMasters
 * 
 */


/* Get Projects Heading Function */
function cmsmasters_project_heading($cmsms_id, $tag = 'h1', $show = true, $link_redirect = false, $link_url = false) { 
	$out = '<header class="cmsms_project_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsms_project_title entry-title">' . 
			'<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink())) . '">' . cmsms_title($cmsms_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Heading Without Link Function */
function cmsmasters_project_title_nolink($cmsms_id, $tag = 'h1', $show = true) { 
	$out = '<' . esc_html($tag) . ' class="cmsms_project_title entry-title">' . 
		cmsms_title($cmsms_id, false) . 
	'</' . esc_html($tag) . '>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Content/Excerpt Function */
function cmsmasters_project_exc_cont($show = true) {
	$out = cmsms_divpdel('<div class="cmsms_project_content entry-content">' . "\n" . 
		wpautop(theme_excerpt(20, false)) . 
	'</div>' . "\n");
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Check Projects Content/Excerpt Not Empty Function */
function cmsmasters_project_check_exc_cont() {
	$exc = cmsmasters_project_exc_cont(false);
	
	$no_tags_exc = strip_tags($exc);
	
	$trim_exc = trim($no_tags_exc);
	
	
	if ($trim_exc != '') {
		return true;
	} else {
		return false;
	}
}



/* Get Projects Category Function */
function cmsmasters_project_category($cmsms_id, $taxonomy, $template_type = 'page', $show = true) {
	if (get_the_terms($cmsms_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsms_project_category">' . 
				get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsms_option = cmsmasters_get_global_options();
			$out = '';
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_cat']) {
				$out .= '<div class="project_details_item">' . 
					'<div class="project_details_item_title">' . esc_html__('Categories', 'interior-design') . ':' . '</div>' . 
					'<div class="project_details_item_desc">' . 
						'<span class="cmsms_project_category">' . 
							get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
						'</span>' . 
					'</div>' . 
				'</div>';
			}
		} elseif ($template_type == 'archive') {
			$out = '<span class="cmsms_project_category">' . 
				esc_html__('In', 'interior-design') . ' ' . 
				get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
			'</span>';
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Projects Like Function */
function cmsmasters_project_like($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = cmsmsLike(false);
	} elseif ($template_type == 'post') {
		$cmsms_option = cmsmasters_get_global_options();
		$out = '';
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_like']) {
			$out .= '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Like', 'interior-design') . ':' . '</div>' . 
				'<div class="project_details_item_desc details_item_desc_like">' . 
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



/* Get Projects Comments Function */
function cmsmasters_project_comments($template_type = 'page', $show = true) {
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = '<a class="cmsms_post_comments cmsms_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'interior-design') . ' ' . esc_attr(get_the_title()) . '">' . 
				'<span>' . esc_html(get_comments_number()) . '</span>' . 
			'</a>';
		} elseif ($template_type == 'post') {
			$cmsms_option = cmsmasters_get_global_options();
			
			
			$out = '';
			
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_comment']) {
				$out .= '<div class="project_details_item">' . 
					'<div class="project_details_item_title">' . esc_html__('Comments', 'interior-design') . ':' . '</div>' . 
					'<div class="project_details_item_desc details_item_desc_comments">' . 
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



/* Get Projects Date Function */
function cmsmasters_project_date($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<abbr class="published cmsms_project_date" title="' . esc_attr(get_the_date()) . '">' . 
			esc_html(get_the_date()) . 
		'</abbr>' . 
		'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
			esc_html(get_the_modified_date()) . 
		'</abbr>';
	} elseif ($template_type == 'post') {
		$cmsms_option = cmsmasters_get_global_options();
		
		$out = '';
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_date']) {
			$out .= '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Date', 'interior-design') . ':' . '</div>' . 
				'<div class="project_details_item_desc">' . 
					'<abbr class="published cmsms_project_date" title="' . esc_attr(get_the_date()) . '">' . 
						esc_html(get_the_date()) . 
					'</abbr>' . 
					'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
						esc_html(get_the_modified_date()) . 
					'</abbr>' . 
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



/* Get Projects Author Function */
function cmsmasters_project_author($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsms_project_author">' . 
			esc_html__('By', 'interior-design') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Projects by', 'interior-design') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsms_option = cmsmasters_get_global_options();
		
		$out = '';
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author']) {
			$out .= '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Author', 'interior-design') . ':' . '</div>' . 
				'<div class="project_details_item_desc vcard author">' . 
					'<span class="cmsms_project_author fn" title="' . esc_attr__('Projects by', 'interior-design') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span>' . 
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



/* Get Projects Tags Function */
function cmsmasters_project_tags($cmsms_id, $taxonomy, $template_type = 'page', $show = true) {
	if (get_the_terms($cmsms_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsms_project_tags">' . 
				get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsms_option = cmsmasters_get_global_options();
			$out = '';
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_tag']) {
				$out = '<div class="project_details_item">' . 
					'<div class="project_details_item_title">' . esc_html__('Tags', 'interior-design') . ':' . '</div>' . 
					'<div class="project_details_item_desc">' . 
						'<span class="cmsms_project_tags">' . 
							get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
						'</span>' . 
					'</div>' . 
				'</div>';
			}
		} elseif ($template_type == 'archive') {
			$out = '<span class="cmsms_project_tags">' . 
				esc_html__('Tags', 'interior-design') . ' ' . 
				get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
			'</span>';
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Projects Features Function */
function cmsmasters_project_features($features_position = 'features', $features = '', $features_title = false, $tag = 'h2', $show = true) {
	if (
		!empty($features[0][0]) && 
		!empty($features[0][1])
	) {
		$out = '';
		
		if ($features_position == 'features') {
			$out .= '<div class="project_features entry-meta">' . 
				($features_title ? '<' . esc_html($tag) . ' class="project_features_title">' . esc_html($features_title) . '</' . esc_html($tag) . '>' : '');
		}
		
		
		foreach ($features as $feature) {
			if ($feature[0] != '' && $feature[1] != '') {
				$feature_lists = explode("\n", $feature[1]);
				
				$out .= '<div class="project_' . $features_position . '_item">' . 
					'<div class="project_' . $features_position . '_item_title">' . esc_html($feature[0]) . '</div>' . 
					'<div class="project_' . $features_position . '_item_desc">';
				
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



/* Get Projects Link Function */
function cmsmasters_project_link($link_text, $link_url, $link_target, $show = true) {
	$cmsms_option = cmsmasters_get_global_options();
	$out = '';
	
	if ( 
		$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_link'] && 
		$link_text != '' && 
		$link_url != '' 
	) {
		$out = '<div class="project_details_item">' . 
			'<div class="project_details_item_title">' . esc_html__('Project Link', 'interior-design') . ':' . '</div>' . 
			'<div class="project_details_item_desc">' . 
				'<span class="cmsms_project_tags">' . 
					'<a href="' . esc_url($link_url) . '" title="' . esc_attr($link_text) . '"' . (($link_target == 'true') ? ' target="_blank"' : '') . '>' . esc_html($link_text) . '</a>' . 
				'</span>' . 
			'</div>' . 
		'</div>';
	}
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}

