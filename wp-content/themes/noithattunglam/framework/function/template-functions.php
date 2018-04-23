<?php 
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.9
 * 
 * Template Functions
 * Created by CMSMasters
 * 
 */


/* Get Page Container Classes */
function cmsmasters_get_page_classes($cmsms_option, $classes = false) {
	$browser = new Browser();
	if (
		( $browser->getPlatform() != Browser::PLATFORM_IPHONE ) && 
		( $browser->getPlatform() != Browser::PLATFORM_IPOD ) && 
		( $browser->getPlatform() != Browser::PLATFORM_IPAD ) && 
		( $browser->getPlatform() != Browser::PLATFORM_BLACKBERRY ) && 
		( $browser->getPlatform() != Browser::PLATFORM_ANDROID ) && 
		( $browser->getPlatform() != Browser::PLATFORM_APPLE ) 
	) {
		echo 'csstransition ';
	}

	if ( $browser->getBrowser() == Browser::BROWSER_CHROME ) {
		echo 'chrome_only ';
	}
	
	if ( $browser->getPlatform() == Browser::PLATFORM_APPLE ) {
		echo 'mac_only ';
	}

	if (
		( $browser->getBrowser() == Browser::BROWSER_SAFARI ) &&
		( $browser->getBrowser() != Browser::BROWSER_CHROME ) 
	) {
		echo 'safari_only ';
	}

	if ( $browser->getBrowser() == Browser::BROWSER_IE ) {
		echo 'ie_only ';
	}

	if ($cmsms_option[CMSMS_SHORTNAME . '_header_top_line']) {
		echo 'enable_header_top ';
	}

	if ($cmsms_option[CMSMS_SHORTNAME . '_header_styles'] != 'default') {
		echo 'enable_header_side ';
	}

	if ($cmsms_option[CMSMS_SHORTNAME . '_header_main_nav_style'] != 'h_nav') {
		echo 'navigation_show ';
	}

	if (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_position'])) {
		echo 'cmsms_heading_' . $cmsms_option[CMSMS_SHORTNAME . '_heading_position'] . ' ';
	}

	if (is_singular()) {
		$cmsms_page_id = get_the_ID();
	} elseif (CMSMS_WOOCOMMERCE && is_shop()) {
		$cmsms_page_id = wc_get_page_id('shop');
	}
	
	if ($classes && $classes != '') {
		echo esc_attr($classes) . ' ';
	}
}


/* Get Logo Function */
function cmsmasters_logo() {
	$cmsms_option = cmsmasters_get_global_options();
	
	
	$header_mid_height = (($cmsms_option[CMSMS_SHORTNAME . '_header_mid_height'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_header_mid_height'] : '95');
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_logo_type'] == 'text') {
		if ($cmsms_option[CMSMS_SHORTNAME . '_logo_title'] != '') {
			$blog_title = $cmsms_option[CMSMS_SHORTNAME . '_logo_title'];
		} else {
			$blog_title = (get_bloginfo('name')) ? get_bloginfo('name') : CMSMS_FULLNAME;
		}
		
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_logo_subtitle'] != '') {
			$blog_descr = $cmsms_option[CMSMS_SHORTNAME . '_logo_subtitle'];
		} else {
			$blog_descr = (get_bloginfo('description')) ? get_bloginfo('description') : esc_html__('Default Logo Subtitle', 'interior-design');
		}
		
		
		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr($blog_title) . '" class="logo">' . "\n\t" . 
			'<span class="logo_aligner"></span>' . 
			'<span class="logo_text_wrap">' . 
				'<span class="title">' . esc_html($blog_title) . '</span>' . "\n" . 
				($cmsms_option[CMSMS_SHORTNAME . '_logo_subtitle'] ? '<span class="title_text">' . esc_html($blog_descr) . '</span>' : '') . 
			'</span>' . 
		'</a>';
	} else {
		if ($cmsms_option[CMSMS_SHORTNAME . '_logo_url'] == '') {
			echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . esc_url(get_template_directory_uri()) . '/img/logo.png" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\n\t" . 
				'<img class="logo_retina" src="' . esc_url(get_template_directory_uri()) . '/img/logo_retina.png" alt="' . esc_attr(get_bloginfo('name')) . '" width="172" height="70" />' . "\r" . 
			'</a>' . "\n";
			
			
			$logo_def_style_width = (int) ($header_mid_height * (172 / 70));
			
			
			echo "
<style type=\"text/css\">
	.header_mid .header_mid_inner .logo_wrap {
		width : {$logo_def_style_width}px;
	}
</style>
";
			
			
			echo "
<style type=\"text/css\">
	.header_mid_inner .logo .logo_retina {
		width : 172px;
	}
</style>
";
		} else {
			$logo_img = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_logo_url']);
			
			
			if (is_numeric($logo_img[0])) {
				$logo_img_url = wp_get_attachment_image_src((int) $logo_img[0], 'full');
			}
			
			
			$logo_img_width = ((is_numeric($logo_img[0])) ? (int) $logo_img_url[1] : '172');
			
			$logo_img_height = ((is_numeric($logo_img[0])) ? (int) $logo_img_url[2] : '70');
			
			
			if ($logo_img_height >= $header_mid_height) {
				$logo_style_width = (int) ($header_mid_height * ($logo_img_width / $logo_img_height));
			} else {
				$logo_style_width = $logo_img_width;
			}
			
			
			echo "
<style type=\"text/css\">
	.header_mid .header_mid_inner .logo_wrap {
		width : {$logo_style_width}px;
	}
</style>
";
			
			
			echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . ((is_numeric($logo_img[0])) ? esc_url($logo_img_url[0]) : esc_url($logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_logo_url_retina'] != '') {
				$logo_img_retina = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_logo_url_retina']);
			
				if (is_numeric($logo_img_retina[0])) {
					$logo_img_retina_url = wp_get_attachment_image_src((int) $logo_img_retina[0], 'full');
				}
				
				$logo_img_retina_width = ((is_numeric($logo_img_retina[0])) ? ((int) $logo_img_retina_url[1] / 2) : '172');
				
				$logo_img_retina_height = ((is_numeric($logo_img_retina[0])) ? ((int) $logo_img_retina_url[2] / 2) : '70');
				
				
				echo "
<style type=\"text/css\">
	.header_mid_inner .logo .logo_retina {
		width : {$logo_img_retina_width}px;
	}
</style>
";
				
				
				echo '<img class="logo_retina" src="' . 
				((is_numeric($logo_img_retina[0])) ? esc_url($logo_img_retina_url[0]) : esc_url($logo_img_retina[1])) . 
				'" alt="' . esc_attr(get_bloginfo('name')) . 
				'" width="' . $logo_img_retina_width . 
				'" height="' . $logo_img_retina_height . 
				'" />' . "\r";
			} else {
				echo '<img class="logo_retina" src="' . ((is_numeric($logo_img[0])) ? esc_url($logo_img_url[0]) : esc_url($logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			}
			
			
			echo '</a>' . "\n";
		}
	}
}



/* Get Page Heading Function */
function cmsmasters_page_heading() {
	$cmsms_option = cmsmasters_get_global_options();
		
	if (is_singular()) {
		$cmsms_page_id = get_the_ID();
	} elseif (CMSMS_WOOCOMMERCE && is_shop()) {
		$cmsms_page_id = wc_get_page_id('shop');
	}
	
	
	$cmsms_heading = '';
	
	if (
		is_singular() || 
		(CMSMS_WOOCOMMERCE && is_shop())
	) {
		$cmsms_heading = get_post_meta($cmsms_page_id, 'cmsms_heading', true);
	}
	
	
	if (
		$cmsms_heading != '' && 
		(
			is_singular() || 
			(CMSMS_WOOCOMMERCE && is_shop())
		)
	) {
		$cmsms_heading_block_disabled = get_post_meta($cmsms_page_id, 'cmsms_heading_block_disabled', true);
		
		$cmsms_heading_height = get_post_meta($cmsms_page_id, 'cmsms_heading_height', true);
		$cmsms_heading_alignment = get_post_meta($cmsms_page_id, 'cmsms_heading_alignment', true);
		$cmsms_heading_scheme = get_post_meta($cmsms_page_id, 'cmsms_heading_scheme', true);
		$cmsms_heading_bg_color = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_color', true);
		$cmsms_heading_bg_img_enable = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_img_enable', true);
		$cmsms_heading_bg_img = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_img', true);
		$cmsms_heading_bg_rep = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_rep', true);
		$cmsms_heading_bg_att = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_att', true);
		$cmsms_heading_bg_size = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_size', true);
		
		$cmsms_heading_title = get_post_meta($cmsms_page_id, 'cmsms_heading_title', true);
		$cmsms_heading_subtitle = get_post_meta($cmsms_page_id, 'cmsms_heading_subtitle', true);
		$cmsms_heading_icon = get_post_meta($cmsms_page_id, 'cmsms_heading_icon', true);
		
		$cmsms_breadcrumbs = get_post_meta($cmsms_page_id, 'cmsms_breadcrumbs', true);
	} else {
		$cmsms_heading = 'default';
		$cmsms_heading_block_disabled = 'false';
		
		$cmsms_heading_height = $cmsms_option[CMSMS_SHORTNAME . '_heading_height'];
		$cmsms_heading_alignment = $cmsms_option[CMSMS_SHORTNAME . '_heading_alignment'];
		$cmsms_heading_scheme = $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'];
		$cmsms_heading_bg_color = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'];
		$cmsms_heading_bg_img_enable = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] ? 'true' : 'false';
		$cmsms_heading_bg_img = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'];
		$cmsms_heading_bg_rep = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'];
		$cmsms_heading_bg_att = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'];
		$cmsms_heading_bg_size = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'];
		
		$cmsms_breadcrumbs = $cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] ? 'true' : 'false';
	}
	
	
	list($cmsms_layout) = cmsmasters_theme_page_layout_scheme();
	
		$cmsms_breadcrumbs_height = ($cmsms_breadcrumbs == 'true') ? ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 26) : '0';

	if (
		$cmsms_heading_block_disabled == 'true' && 
		$cmsms_layout == 'fullwidth'
	) {
		echo "";
	} else {
		$options_img = explode('|', $cmsms_heading_bg_img);
		
		
		if (is_numeric($options_img[0])) {
			$options_img_url = wp_get_attachment_image_src((int) $options_img[0], 'full');
		}
		
		
		echo "<style type=\"text/css\">";
		
		
		if ($cmsms_heading_bg_img_enable == 'true' && $cmsms_heading_bg_img != '') {
			echo ".headline_outer {
				background-image:url(" . ((is_numeric($options_img[0])) ? $options_img_url[0] : $options_img[0]) . ");
				background-repeat:{$cmsms_heading_bg_rep};
				background-attachment:{$cmsms_heading_bg_att};
				background-size:{$cmsms_heading_bg_size};
			}";
		}
		
		
		echo ".headline_color {
				background-color:{$cmsms_heading_bg_color};
			}
			.headline_aligner {
				min-height: " . ($cmsms_heading_height - $cmsms_breadcrumbs_height) . "px;
			}
		</style>
		<div class=\"headline cmsms_color_scheme_{$cmsms_heading_scheme}\">
			<div class=\"headline_outer\">
				<div class=\"headline_color\"></div>";
		
		
		if ($cmsms_heading != 'disabled') {
			echo "<div class=\"headline_inner align_{$cmsms_heading_alignment}\">
				<div class=\"headline_aligner\"></div>" . 
				'<div class="headline_text' . (($cmsms_heading == 'custom') ? (($cmsms_heading_icon != '') ? ' headline_icon ' . $cmsms_heading_icon : '') . (($cmsms_heading_subtitle != '') ? ' headline_subtitle' : '') : '') . '">';
			
			
			if ($cmsms_heading == 'custom') {
				if ($cmsms_heading_subtitle == '') {
					echo '<h1 class="entry-title">' . (($cmsms_heading_title != '') ? $cmsms_heading_title : esc_html(get_the_title())) . '</h1>';
				} else {
					echo '<h1 class="entry-title">' . (($cmsms_heading_title != '') ? $cmsms_heading_title : esc_html(get_the_title())) . '</h1>' . 
						'<h4 class="entry-subtitle">' . str_replace("\n", "<br />", $cmsms_heading_subtitle) . '</h4>';
				}
			} elseif (CMSMS_WOOCOMMERCE && is_woocommerce()) {
				echo '<h1 class="entry-title">';
				
					esc_html(woocommerce_page_title());
					
				echo '</h1>';
			} elseif (is_archive() || is_search()) {
				echo '<h1 class="entry-title">';
				
				
				if (is_search()) {
					global $wp_query;
					
					
					if (!empty($wp_query->found_posts)) {
						echo esc_html(sprintf(_n('1 search result for: %2$s', '%1$d search results for: %2$s', $wp_query->found_posts, 'interior-design'), $wp_query->found_posts, get_search_query()));
					} else {
						echo sprintf(esc_html__('0 search results for: %s', 'interior-design'), get_search_query());
					}
				} elseif (is_archive()) {
					if (is_author()) {
						if (get_the_author_meta('first_name') != '' || get_the_author_meta('last_name') != '') {
							echo sprintf(esc_html__('Author: %1$s (%2$s %3$s)', 'interior-design'), '<span class="vcard">' . get_the_author() . '</span>', get_the_author_meta('first_name'), get_the_author_meta('last_name'));
						} else {
							echo sprintf(esc_html__('Author: %s', 'interior-design'), '<span class="vcard">' . get_the_author() . '</span>');
						}
					} else {
						echo get_the_archive_title();
					}
				}
				
				
				echo '</h1>';
			} elseif ($cmsms_heading == 'default') {
				echo the_title('<h1 class="entry-title">', '</h1>', false);
			}
			
			
			echo '</div>';
			
			
			if ( 
				!is_front_page() && 
				$cmsms_breadcrumbs == 'true' && 
				!(
					CMSMS_EVENTS_CALENDAR && 
					(
						tribe_is_list_view() || 
						tribe_is_month() || 
						tribe_is_day() || 
						(function_exists('tribe_is_past') && tribe_is_past()) || 
						(function_exists('tribe_is_upcoming') && tribe_is_upcoming()) || 
						(function_exists('tribe_is_week') && tribe_is_week()) || 
						(function_exists('tribe_is_map') && tribe_is_map()) || 
						(function_exists('tribe_is_photo') && tribe_is_photo()) 
					)
				)
			) {
				echo '<div class="cmsms_breadcrumbs">' . 
					'<div class="cmsms_breadcrumbs_aligner"></div>' . 
					'<div class="cmsms_breadcrumbs_inner">';
				
				
				if (CMSMS_WOOCOMMERCE && is_woocommerce()) {
					woocommerce_breadcrumb();
				} elseif (function_exists('yoast_breadcrumb')) {
					$yoast_enable = get_option('wpseo_internallinks');
					
					
					if ($yoast_enable['breadcrumbs-enable']) {
						yoast_breadcrumb();
					} else {
						breadcrumbs();
					}
				} else {
					breadcrumbs();
				}
				
				
				echo '</div>' . 
				'</div>';
			}
			
			
			echo "</div>";
		}
		
		
			echo "</div>
		</div>";
	}
}



/* Get Social Icons Function */
function cmsmasters_social_icons() {
	$cmsms_option = cmsmasters_get_global_options();
	
	
	echo '<div class="social_wrap">' . "\n" . 
		'<div class="social_wrap_inner">' . "\n" . 
			'<ul>' . "\n";
	
	
	foreach ($cmsms_option[CMSMS_SHORTNAME . '_social_icons'] as $cmsms_social_icons) {
		$cmsms_social_icon = explode('|', str_replace(' ', '', $cmsms_social_icons));
		
		
		echo '<li>' . "\n\t" . 
			'<a href="' . esc_url($cmsms_social_icon[1]) . '" class="' . esc_attr($cmsms_social_icon[0]) . '" title="' . esc_attr($cmsms_social_icon[2]) . '"' . (($cmsms_social_icon[3] == 'true') ? ' target="_blank"' : '') . '></a>' . "\r" . 
		'</li>' . "\n";
	}
	
	
	echo '</ul>' . "\r" . 
		'</div>' . "\r" . 
	'</div>' . "\r";
}



/* Get Posts Thumbnail Function */
function cmsmasters_thumb($cmsms_id, $type = 'post-thumbnail', $link = true, $group = false, $preload = true, $highImg = false, $fullwidth = true, $show = true, $attachment = false, $unique = false, $link_icon = false, $placeholder_icon = 'cmsms_theme_icon_image') {
	$args = array( 
		'class' => (($fullwidth) ? 'full-width' : ''), 
		'alt' => cmsms_title($cmsms_id, false), 
		'title' => cmsms_title($cmsms_id, false) 
	);
	
	
	$link_href = ($attachment) ? wp_get_attachment_image_src(strstr($attachment, '|', true), 'full') : wp_get_attachment_image_src((int) get_post_thumbnail_id($cmsms_id), 'full');
	
	
	if (!$unique) {
		$unique_id = uniqid();
	} else {
		$unique_id = $unique;
	}
	
	
	$out = '<figure class="cmsms_img_wrap">' . 
		'<a href="' . (($link) ? esc_url(get_permalink()) : esc_url($link_href[0])) . '"' . 
		' title="' . cmsms_title($cmsms_id, false) . '"' . 
		(($group) ? ' rel="ilightbox[' . esc_attr($group) . '_' . esc_attr($unique_id) . ']"' : '') . 
		' class="cmsms_img_link' . 
		(($preload) ? ' preloader' . (($highImg) ? ' highImg' : '') : '') . 
		($link_icon ? ' ' . esc_attr($link_icon) : '') . 
		'">';
	
	
	if ($attachment) {
		$out .= wp_get_attachment_image(strstr($attachment, '|', true), (($type) ? $type : 'full'), false, $args);
	} elseif (has_post_thumbnail($cmsms_id)) {
		$out .= get_the_post_thumbnail($cmsms_id, (($type) ? $type : 'full'), $args);
	} else {
		$out .= '<span class="img_placeholder ' . esc_attr($placeholder_icon) . '"></span>';
	}
	
	
	$out .= '</a>' . 
	'</figure>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Thumbnail With Rollover Function */
function cmsmasters_thumb_rollover($cmsms_id, $type = 'post-thumbnail', $rollover = true, $open_link = true, $group = false, $attachment_images = false, $attachment_video_type = false, $attachment_video_link = false, $attachment_video_links = false, $highImg = false, $show = true, $link_redirect = false, $link_url = false, $placeholder_icon = 'cmsms_theme_icon_image') {
	$cmsms_title = cmsms_title($cmsms_id, false);

	$args = array( 
		'class' => 'full-width', 
		'alt' => $cmsms_title, 
		'title' => $cmsms_title 
	);
	
	$unique_id = uniqid();
	
	
	$out = '<figure class="cmsms_img_rollover_wrap preloader' . (($highImg) ? ' highImg' : '') . '">';
	
	
	if (has_post_thumbnail($cmsms_id)) {
		$out .= get_the_post_thumbnail($cmsms_id, (($type) ? $type : 'full'), $args);
		
		$cmsms_image_link = wp_get_attachment_image_src((int) get_post_thumbnail_id($cmsms_id), 'full');
	} elseif ($attachment_images && $attachment_images[0] != '' && sizeof($attachment_images) > 0) {
		$out .= wp_get_attachment_image(strstr($attachment_images[0], '|', true), (($type) ? $type : 'full'), false, $args);
		
		$cmsms_image_link = wp_get_attachment_image_src(strstr($attachment_images[0], '|', true), 'full');
	} else {
		$out .= '<span class="img_placeholder ' . esc_attr($placeholder_icon) . '"></span>';
		
		$cmsms_image_link = '';
	}
	
	
	$is_video_selfhosted = false;
	
	
	if (
		$attachment_video_type == 'selfhosted' && 
		!empty($attachment_video_links) && 
		sizeof($attachment_video_links) > 0
	) {
		$is_video_selfhosted = true;
		
		
		$shv_out = 'href="' . esc_url($attachment_video_links[0]) . '"';
		
		
		$shvl_out = '';
		
		
		unset($attachment_video_links[0]);
		
		
		foreach($attachment_video_links as $attachment_video_link_url) {
			$video_format = substr(strrchr($attachment_video_link_url, '.'), 1);
			
			$shvl_out .= $video_format . ":'{$attachment_video_link_url}', ";
		}
		
		
		$shv_out .= ' data-options="' . 
			'html5video: {' . 
				substr($shvl_out, 0, -2) . 
			'}' . 
		'"';
	}
	
	
	if ($rollover) {
		$out .= '<div class="cmsms_img_rollover">';
		
		if (
			$group && 
			(
				(
					$attachment_video_type == 'embedded' && 
					$attachment_video_link != ''
				) || 
				$is_video_selfhosted || 
				$cmsms_image_link != ''
			)
		) {
			$out .= '<a ' . ($is_video_selfhosted ? $shv_out : 'href="' . ((!$attachment_video_link) ? esc_url($cmsms_image_link[0]) : embedConvert($attachment_video_link)) . '"') . ' rel="ilightbox[' . esc_attr($cmsms_id) . '_' . esc_attr($unique_id) . ']" title="' . esc_attr($cmsms_title) . '" class="cmsms_image_link' . (($open_link) ? '' : ' no_open_link') . '">' . esc_html__( 'Zoom', 'interior-design' ) . '</a>';
		}
		
		
		if ($open_link) {
			$out .= '<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink($cmsms_id))) . '" title="' . esc_attr($cmsms_title) . '" class="cmsms_open_link">' . esc_html__( 'View', 'interior-design' ) . '</a>';
		}
		
		$out .= '</div>';
	} elseif ($open_link) {
		$out .= '<div class="cmsms_img_rollover">' . 
			'<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink($cmsms_id))) . '" title="' . esc_attr($cmsms_title) . '" class="cmsms_open_post_link button">' . esc_html__('Read more', 'interior-design') . '</a>' . 
		'</div>';
	}
	
	
	$out .= '</figure>';
	
	
	if ($group && $attachment_images && sizeof($attachment_images) > 1 && $rollover) {
		if (!has_post_thumbnail($cmsms_id)) {
			unset($attachment_images[0]);
		}
		
		$out .= '<div class="dn">';
		
		foreach ($attachment_images as $attachment_image) {
			$attachment_image_link = wp_get_attachment_image_src(strstr($attachment_image, '|', true), 'full');
			
			$out .= '<figure>' . 
				'<a href="' . esc_url($attachment_image_link[0]) . '" rel="ilightbox[' . esc_attr($cmsms_id) . '_' . esc_attr($unique_id) . ']" title="' . esc_attr($cmsms_title) . '" class="preloader highImg">' . 
					wp_get_attachment_image(strstr($attachment_image, '|', true), 'full', false, $args) . 
				'</a>' . 
			'</figure>';
		}
		
		$out .= '</div>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Small Thumbnail Function */
function cmsmasters_thumb_small($cmsms_id, $type = 'post', $w = 100, $h = 100, $show = true) {
	$out = '<figure class="alignleft">' . 
		'<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsms_title($cmsms_id, false) . '">';

		$args = array( 
			'alt' => cmsms_title($cmsms_id, false), 
			'title' => cmsms_title($cmsms_id, false), 
			'style' => 'width:' . $w . 'px; height:' . $h . 'px;' 
		);
		
		
		if (has_post_thumbnail()) {
			$out .= get_the_post_thumbnail($cmsms_id, 'square-thumb', $args);
		} elseif ($type == 'post') { // Post type - post
			if (get_post_format() == 'audio') {
				$out .= '<span class="img_placeholder cmsms_theme_icon_audio"></span>';
			} elseif (get_post_format() == 'gallery') {
				$cmsms_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta($cmsms_id, 'cmsms_post_images', true))));
				
				$cmsms_post_image = $cmsms_post_images[0];
				
				if (isset($cmsms_post_image) && $cmsms_post_image != '') {
					$out .= wp_get_attachment_image(strstr($cmsms_post_image, '|', true), 'square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsms_theme_icon_gallery"></span>';
				}
			} elseif (get_post_format() == 'image') {
				$cmsms_post_image = get_post_meta($cmsms_id, 'cmsms_post_image_link', true);
				
				if (isset($cmsms_post_image) && $cmsms_post_image != '') {
					$out .= wp_get_attachment_image(strstr($cmsms_post_image, '|', true), 'square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsms_theme_icon_image"></span>';
				}
			} elseif (get_post_format() == 'video') {
				$out .= '<span class="img_placeholder cmsms_theme_icon_video"></span>';
			} else {
				$out .= '<span class="img_placeholder cmsms_theme_icon_std"></span>';
			}
		} elseif ($type == 'project') { // Post type - project
			if (get_post_format() == 'gallery' || get_post_format() == 'standard') {
				$cmsms_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta($cmsms_id, 'cmsms_project_images', true))));
				
				$cmsms_project_image = $cmsms_project_images[0];
				
				if (isset($cmsms_project_image) && $cmsms_project_image != '') {
					$out .= wp_get_attachment_image(strstr($cmsms_project_image, '|', true), 'square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsms_theme_icon_gallery"></span>';
				}
			} else {
				$out .= '<span class="img_placeholder cmsms_theme_icon_video"></span>';
			}
		} elseif ($type == 'profile') { // Post type - profile
			$out .= '<span class="img_placeholder cmsms_theme_icon_person"></span>';
		}
		
		$out .= '</a>' . 
	'</figure>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Title Function */
function cmsms_title($cmsms_id, $show = true) { 
	$cmsms_heading = get_post_meta($cmsms_id, 'cmsms_heading', true);
	
	$cmsms_heading_title = get_post_meta($cmsms_id, 'cmsms_heading_title', true);
	
	$out = '';
	
	if ($cmsms_heading == 'custom' && $cmsms_heading_title != '') {
		$out .= esc_attr($cmsms_heading_title);
	} else {
		$out .= esc_attr(strip_tags(get_the_title($cmsms_id) ? get_the_title($cmsms_id) : $cmsms_id));
	} 
    
	
    if ($show) {
        echo $out;
    } else {
        return $out;
    }
}



/* Get Heading Function */
function cmsmasters_heading($cmsms_id, $tag = 'h1', $show = true) { 
	$out = '<header class="entry-header">' . 
		'<' . esc_html($tag) . ' class="entry-title">' . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsms_title($cmsms_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}





/****************************** Blog, Portfolio, Profiles Single Functions ******************************/

/* Get Previous & Next Post Links Function */
function cmsmasters_prev_next_posts() {
	$cmsms_post_type = get_post_type();

	$published_posts = wp_count_posts($cmsms_post_type)->publish;
	
	
	if ($published_posts > 1) {
		echo '<aside class="post_nav cmsms-icon-th-3">';
		
		
			previous_post_link('<span class="cmsms_prev_post">%link</span>');
		
			next_post_link('<span class="cmsms_next_post">%link</span>');
		

		echo '</aside>';
	}
}



/* Get Sharing Box Function */
function cmsmasters_sharing_box($title_box = false, $tag = 'h3') {
	$page_link = urlencode(get_permalink());
	
	$social_title = cmsms_title(get_the_ID(), false);
	
	$website_name = get_bloginfo('name');
	
	
	if (has_post_thumbnail() && get_post_format() != '') {
		$post_img_id = get_post_thumbnail_id();
		
		$post_img_url = wp_get_attachment_url($post_img_id);
		
		$pinterest_img = urlencode($post_img_url);
	} else {
		preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', get_the_content(), $img_matches);
		
		
		if (!empty($img_matches[1][0])) {
			$first_img = $img_matches[1][0];
		} else {
			$first_img = get_template_directory_uri() . '/img/logo.png';
		}
		
		
		$pinterest_img = urlencode($first_img);
	}
	
	
	echo "<aside class=\"share_posts\">
		" . ($title_box ? "<{$tag} class=\"share_posts_title\">{$title_box}</{$tag}>" : "") . "
		<div class=\"share_posts_inner\">
			<a href=\"https://www.facebook.com/sharer/sharer.php?display=popup&u={$page_link}\">" . esc_html__('Facebook', 'interior-design') . "</a>
			<a href=\"https://plus.google.com/share?url={$page_link}\">" . esc_html__('Google+', 'interior-design') . "</a>
			<a href=\"https://twitter.com/intent/tweet?text=" . urlencode(sprintf(__("Check out '%s' on %s website", 'interior-design'), $social_title, $website_name)) . "&url={$page_link}\">" . esc_html__('Twitter', 'interior-design') . "</a>
			<a href=\"https://pinterest.com/pin/create/button/?url={$page_link}&media={$pinterest_img}&description={$social_title}\">" . esc_html__('Pinterest', 'interior-design') . "</a>
		</div>
	</aside>
";
}



/* Get About Author Box Function */
function cmsmasters_author_box($title_box = false) {
	$user_email = get_the_author_meta('user_email');
	
	
	$user_first_name = get_the_author_meta('first_name') ? get_the_author_meta('first_name') : false;
	
	$user_last_name = get_the_author_meta('last_name') ? get_the_author_meta('last_name') : false;
	
	$user_url = get_the_author_meta('url') ? get_the_author_meta('url') : false;
	
	$user_description = get_the_author_meta('description') ? get_the_author_meta('description') : false;
	
	if ($user_description) {
		echo '<aside class="about_author">';
		
		
		if ($title_box) {
			echo '<h6 class="about_author_title">' . esc_html($title_box) . '</h6>';
		}
		
		
		echo '<div class="about_author_inner">';
		
		
		$out = '';
		
		
		if ($user_first_name) {
			$out .= $user_first_name;
		}
		
		
		if ($user_first_name && $user_last_name) {
			$out .= ' ' . $user_last_name;
		} elseif ($user_last_name) {
			$out .= $user_last_name;
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ' (';
		}
		
		
		if (get_the_author()) {
			$out .= get_the_author();
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ')';
		}
		
		
		echo '<figure class="alignleft">' . 
			get_avatar($user_email, 120, get_option('avatar_default')) . 
		'</figure>' . 
		'<div class="ovh">';
		
		
		if ($out != '') {
			echo '<h5 class="vcard author"><span class="fn" rel="author">' . esc_html($out) . '</span></h5>';
		}
		
		
		if ($user_description) {
			echo '<p>' . str_replace("\n", '<br />', $user_description) . '</p>';
		}
		
		
		if ($user_url) {
			echo '<a href="' . esc_url($user_url) . '" title="' . esc_attr(get_the_author()) . ' ' . esc_attr__('website', 'interior-design') . '" target="_blank">' . esc_html($user_url) . '</a>';
		}
		
		
		echo '</div>' . 
			'</div>' . 
		'</aside>';
	}
}



/* Get More Posts Slider Function */
if (!function_exists('cmsmasters_related')) {

function cmsmasters_related($tag = 'h5', $box_type = false, $tgsarray = null, $items_number = 5, $pause_time = 5, $type = 'post', $taxonomy = null) {
	if ( 
		($box_type == 'related' && !empty($tgsarray)) || 
		$box_type == 'popular' || 
		$box_type == 'recent' 
	) {
		$autoplay = ((int) $pause_time > 0) ? $pause_time * 1000 : 'false';
		
		
		$r_args = array( 
			'posts_per_page' => $items_number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post__not_in' => array(get_the_ID()), 
			'post_type' => $type 
		);
		
		
		if ($box_type == 'related' && !empty($tgsarray)) {
			if ($type == 'post') {
				$r_args['tag__in'] = $tgsarray;
			} elseif ($type != 'post' && $taxonomy) {
				$r_args['tax_query'] = array( 
					array( 
						'taxonomy' => $taxonomy, 
						'field' => 'term_id', 
						'terms' => $tgsarray 
					) 
				);
			}
		} elseif ($box_type == 'popular') {
			$r_args['order'] = 'DESC';
			
			$r_args['orderby'] = 'meta_value';
			
			$r_args['meta_key'] = 'cmsms_likes';
		}
		
		
		$r_query = new WP_Query($r_args);
		
		
		echo "
<aside class=\"cmsms_single_slider" . (($type == 'campaign') ? ' cmsms_single_slider_campaign' : '') . "\">";
	
	if ($r_query->have_posts()) {
		echo "<script type=\"text/javascript\">
			jQuery(document).ready(function () { 
				var container = jQuery('.cmsms_single_slider_wrap'), 
					containerWidth = container.width(), 
					contentWrap = container.closest('.content_wrap'), 
					firstPost = container.find('.cmsms_single_slider_post'), 
					postMinWidth = Number(firstPost.css('minWidth').replace('px', '')), 
					postThreeColumns = (postMinWidth * 4) - 1, 
					postTwoColumns = (postMinWidth * 3) - 1, 
					postOneColumns = (postMinWidth * 2) - 1, 
					itemsNumber = 2;
				
				
				if (contentWrap.hasClass('fullwidth')) {
					itemsNumber = 3;
				} else if (contentWrap.hasClass('r_sidebar') || contentWrap.hasClass('l_sidebar')) {
					itemsNumber = 2;
				}
				
				
				jQuery('.cmsms_single_slider_wrap').owlCarousel( {
					items : 				itemsNumber, 
					itemsDesktop : 			false,
					itemsDesktopSmall : 	[postThreeColumns, 3], 
					itemsTablet : 			[postTwoColumns, 2], 
					itemsMobile : 			[postOneColumns, 1],
					transitionStyle : 		false, 
					rewindNav : 			true, 
					slideSpeed : 			200, 
					paginationSpeed : 		800, 
					rewindSpeed : 			1000, 
					autoPlay : 				{$autoplay}, 
					stopOnHover : 			true, 
					autoHeight : 			true, 
					addClassActive : 		true, 
					responsiveBaseWidth : 	'.cmsms_single_slider_wrap', 
					pagination : 			false, 
					navigation : 			true, 
					navigationText : [ 
						'<span class=\"cmsms_prev_arrow\"><span></span></span>', 
						'<span class=\"cmsms_next_arrow\"><span></span></span>' 
					] 
				} );
			} );	
		</script>";
	}
	
	echo "<{$tag}>";
		
		if ($type == 'post') {
			if ($box_type == 'related') {
				esc_attr_e('Related Posts', 'interior-design');
			} elseif ($box_type == 'popular') {
				esc_attr_e('Popular Posts', 'interior-design');
			} elseif ($box_type == 'recent') {
				esc_attr_e('Latest Posts', 'interior-design');
			}
		} elseif ($type == 'campaign') {
			esc_attr_e('More campaigns', 'interior-design');
		} else {
			if ($box_type == 'related') {
				esc_attr_e('Related Projects', 'interior-design');
			} elseif ($box_type == 'popular') {
				esc_attr_e('Popular Projects', 'interior-design');
			} elseif ($box_type == 'recent') {
				esc_attr_e('Latest Projects', 'interior-design');
			}
		}
		
		
		echo "</{$tag}>
	<div class=\"cmsms_single_slider_inner\">
		<div class=\"cmsms_single_slider_wrap\">";
		
		
		if ($r_query->have_posts()) :
			while ($r_query->have_posts()) : $r_query->the_post();
				$cmsms_project_link_url = get_post_meta(get_the_ID(), 'cmsms_project_link_url', true);
				
				$cmsms_project_link_redirect = get_post_meta(get_the_ID(), 'cmsms_project_link_redirect', true);
				
				
				$cmsms_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_project_images', true))));
				
				
				echo "
			<div class=\"cmsms_single_slider_post\">
				<div class=\"cmsms_single_slider_post_content\">";
					cmsmasters_thumb_rollover(get_the_ID(), 'project-thumb', true, true, true, $cmsms_project_images, false, false, false, false, true, $cmsms_project_link_redirect, $cmsms_project_link_url);
				
				
				if ($type == 'campaign') {
					echo "
					<div class=\"related_posts_campaign_wrap\">";
				}
				
				
				echo "
					<div class=\"related_posts_item_wrap\">" .
						"<h5 class=\"related_posts_item_title\">" . 
							"<a href=\"" . esc_url(get_permalink()) . "\" title=\"" . cmsms_title(get_the_ID(), false) . "\">" . cmsms_title(get_the_ID(), false) . "</a>" . 
						"</h5>";
					
					if ($type == 'post') {
						cmsmasters_post_category('related', 'related');
					} else {
						cmsmasters_project_category(get_the_ID(), 'pj-categs', 'page');
					}
				
				echo "</div>";
				if ($type == 'campaign') {
					$target = get_the_campaign_target(get_the_ID(), true);
					
					$funds = get_the_funds(get_the_ID());
					
					
					$progress = ($target != 0 ? floor((100 / $target) * $funds) : 0);
					
					$togo_number = $target - $funds;
					
					
					echo "
						<span class=\"related_posts_campaign_togo\">" . 
							esc_html__('Target:', 'interior-design') . 
							" <span>" . cmsms_donations_currency($target) . "</span>" . 
							"</span>
						<div class=\"cmsms_campaign_donated\">
							" . do_shortcode("[cmsms_stats count=\"1\"][cmsms_stat progress=\"{$progress}\" subtitle=\"" . sprintf(esc_attr__('%s to go', 'interior-design'), cmsms_donations_currency($togo_number)) . "\"]" . esc_html__('Donated', 'interior-design') . "[/cmsms_stat][/cmsms_stats]") . "
						</div>
					</div>
				";
				}
				
				
				echo "</div>
			</div>";
			endwhile;
		else :
			echo "
			<h5>";
			
			
			if ($type == 'post') {
				esc_html_e('No related posts found', 'interior-design');
			} elseif ($type == 'campaign') {
				esc_html_e('No related campaigns found', 'interior-design');
			} else {
				esc_html_e('No related projects found', 'interior-design');
			}
			
			
			echo "</h5>";
		endif;
		
		
		wp_reset_postdata();
		
		
		echo "
		</div>
	</div>
</aside>
";
	}
}

}



/* Get Posts Author Avatar Function */
function cmsmasters_author_avatar($template_type = 'page') {
	$user_email = get_the_author_meta('user_email') ? get_the_author_meta('user_email') : false;
	
	
	if ($template_type == 'page') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	} else if ($template_type == 'post') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	}
}



/* Get Pingbacks & Trackbacks Function */
function cmsms_get_post_pings($id, $tag = 'h3') {
	$out = '';
	
	$pings = get_comments(array(
		'type' => 		'pings',
		'post_id' => 	$id
	));
	
	
	if (pings_open($id) && sizeof($pings) > 0) {
		$out .= '<aside class="cmsmasters_pings_list">' . "\n" .
			'<' . esc_html($tag) . '>' . esc_html__('Trackbacks and Pingbacks', 'interior-design') . '</' . esc_html($tag) . '>' . "\n" .
			'<div class="cmsmasters_pings_wrap">' . "\n" .
				'<ol class="pingslist">' . "\n";
		
		
		$out .= wp_list_comments(array(
			'short_ping' => 	true,
			'echo' => 			false
		), $pings);
		
		
		$out .= '</ol>' . "\n" .
			'</div>' . "\n" .
		'</aside>';
	}
	
	
	return $out;
}

