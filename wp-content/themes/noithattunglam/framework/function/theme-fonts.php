<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.3
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function cmsmasters_theme_fonts() {
	$cmsms_option = cmsmasters_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body, 
	blockquote footer,
	.cmsms_pricing_table .cmsms_currency,
	.cmsms_pricing_table .cmsms_coins,
	.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap,
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_counter_wrap, 
	.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner
	.cmsms_pricing_table .cmsms_period,
	.cmsms_profile .pl_subtitle,
	.cmsms_tabs.lpr .cmsms_tab li,
	.cmsms_stat_counter_wrap,
	.cmsms_profile_subtitle{
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	.cmsms_twitter .published {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	.cmsms_quotes_slider.cmsms_quotes_slider_type_center .wrap_quote_title .quote_subtitle {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 2) . "px;
	}
	
	.post.cmsms_masonry_type .cmsms_post_meta_wrap .cmsms_post_meta_left .cmsms_post_date,
	.widget_custom_contact_form_entries .cmsms-form-builder .cmsms_input.area_opened label {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] - 3) . "px;
	}
	
	.post_comments .commentlist .comment-body .comment-content .published,
	.cmsms_profile .pl_subtitle {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	
	.post.cmsms_masonry_type .cmsms_post_cont_info > span,
	.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_cont_info > span,
	.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_cont_info > span a,
	.blog.timeline .post .cmsms_post_info .cmsms_post_date,
	.opened-article .post .cmsms_post_cont .cmsms_post_cont_info .cmsms_post_cont_left .cmsms_post_date abbr,
	.post.cmsms_timeline_type .cmsms_post_comments,
	.post.cmsms_timeline_type .cmsms_post_like a,
	.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_meta_wrap .cmsms_post_meta_right span > a,
	.post.cmsms_masonry_type .cmsms_post_cont_info > span a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] - 2) . "px;
	}
	
	.cmsms_profile_subtitle,
	.post.cmsms_default_type .cmsms_post_content,
	.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_content {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 2) . "px;
	}
	
	.post.cmsms_masonry_type .cmsms_post_content,
	.post.cmsms_timeline_type .cmsms_post_content,
	.widget_custom_contact_form_entries .submit_wrap a.button,
	.widget_custom_contact_form_entries .cmsms-form-builder label {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] - 1) . "px;
	}
	
	.cmsms_pricing_table .cmsms_currency,
	.cmsms_pricing_table .cmsms_coins {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 10) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 10) . "px;
	}
	
	.cmsms_pricing_table .cmsms_period,
	.comment-content > p,
	.profile_sidebar .profile_details,
	.project_sidebar .project_details_item,
	.details_item_desc_comments a,
	.details_item_desc_like a,
	.cmsms_posts_slider .project .slider_project_outer .slider_project_inner .cmsms_slider_project_head_right > a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	
	blockquote footer,
	.details_item_desc_like a:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 2) . "px;
	}
	
	.details_item_desc_comments a:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 3) . "px;
	}
	
	.cmsms_breadcrumbs, 
	.cmsms_breadcrumbs .cmsms_breadcrumbs_inner, 
	.cmsms_breadcrumbs .cmsms_breadcrumbs_inner a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] - 4) . "px;
	}
	
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_counter_wrap {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 18) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 10) . "px;
	}
	
	.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 18) . "px;
	}
	
	.cmsms_quotes.quote_grid .quote_subtitle,
	.cmsms_quotes.cmsms_quotes_slider .quote_subtitle {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle .cmsms_toggle_inner {
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 7) . "px;
	}
	
	.cmsms_tabs_wrap {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 12) . "px;
	}
	
	.cmsms_tabs.lpr .cmsms_tabs_wrap {
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	
	q {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] . "px;
	}
	
	.cmsms_posts_slider .post .cmsms_slider_post_quote_author, 
	.widget_nav_menu ul ul li a, 
	.widget_nav_menu ul ul ul li a, 
	.widget_nav_menu ul ul ul ul li a, 
	.widget_nav_menu ul ul ul ul ul li a, 
	#wp-calendar th, 
	#wp-calendar td,
	.sidebar aside { 
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	.cmsms_wrap_pagination ul li .cmsms_theme_icon_slide_prev, 
	.cmsms_wrap_pagination ul li .cmsms_theme_icon_slide_next {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	
	.cmsms_post_filter_but:before, 
	.cmsms_project_filter_but:before, 
	.cmsms_project_sort_but:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 3) . "px;
	}
	
	.cmsms_post_filter_but:before, 
	.cmsms_project_filter_but:before {
		width:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 2) . "px !important;
	}
	
	.cmsms_twitter abbr, 
	.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li li > a, 
	.cmsms_sitemap_wrap .cmsms_sitemap_category > li li > a, 
	.cmsms_sitemap_wrap .cmsms_sitemap_archive li, 
	.cmsms_sitemap_wrap .cmsms_sitemap_archive li > a {
		font-weight:700; /* static */
	}
	
	q, 
	.contact_widget_name.cmsms_theme_icon_person:before, 
	.contact_widget_email.cmsms_theme_icon_user_mail:before, 
	.contact_widget_phone.cmsms_theme_icon_user_phone:before, 
	.adress_wrap.cmsms_theme_icon_user_address:before, 
	.cmsms_post_filter_but:before, 
	.cmsms_project_filter_but:before, 
	.cmsms_project_sort_but:before {
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px !important;
	}
	
	.details_item_desc_like,
	.details_item_desc_comments, 
	.campaign .cmsms_campaign_meta_info {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	/* Finish Content Font */


	/* Start Link Font */
	a,
	.cmsms_slider_post_more .cmsms_post_read_more,
	.widget_nav_menu > div > ul > li > ul > li > a,
	.widget_nav_menu > div > ul > li > ul > li > ul > li > a,
	.widget_nav_menu > div > ul > li > ul > li > ul > li > ul > li > a,
	.widget_nav_menu ul ul ul ul ul li a,
	.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item > a,
	.cmsms_tabs.lpr .cmsms_tabs_wrap a,
	.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_cont_info > span a{
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_link_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_link_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_text_decoration'] . ";
	}
	
	.cmsms_slider_post_more .cmsms_post_read_more,
	.portfolio .project .project_outer .project_inner .cmsms_project_footer a,
	.cmsms_tabs.lpr .cmsms_tabs_wrap a,
	.pj_ddn .cmsms_project_category a,
	.cmsms_tabs.lpr .cmsms_tab li p {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] - 2) . "px;
	}
	
	.widget ul li a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] - 1) . "px;
	}	
	
	.widget_pages ul li a:before,
	.widget_categories ul li a:before {
		top:" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] - 5) / 2 ) . "px;
	}
	
	.cmsmsLike:before, 
	.cmsms_post_comments:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] + 2) . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] . "px;
		
	}
	
	.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_footer .cmsms_post_comments:before,
	.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_footer .cmsmsLike:before {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] . "px;
	}
	
	.pj_ddn .cmsms_project_category, 
	.widget .cmsmsLike,
	.widget_nav_menu > div > ul > li > ul > li > a,
	.widget_nav_menu > div > ul > li > ul > li > ul > li > a,
	.widget_nav_menu > div > ul > li > ul > li > ul > li > ul > li > a,
	.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item > a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] - 1) . "px;
	}
	
	.widget .widget_custom_twitter_entries .tweet_list a {
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_weight'] . ";
	}

	a:hover {
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	#navigation > li > a {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_text_transform'] . ";
	}
	
	#header .header_mid_inner #navigation li.menu-item-has-children > span.cmsms_cross,
	#header .header_side_inner #navigation li.menu-item-has-children > span.cmsms_cross {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] . "px;
		width:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] . "px;
	}
	
	#navigation > li > a > span:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] - 2) . "px;
	}
	
	#navigation > li.menu-item-icon > a > span > span.nav_subtitle,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
		padding-left:" . ceil(((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
	}
	
	body.rtl #navigation > li.menu-item-icon > a > span > span.nav_subtitle,
	body.rtl #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
		padding-right:" . ceil(((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
		padding-left:0; /* static */
	}
	
	#navigation > li > a[data-tag]:before,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[data-tag]:before {
		margin-top:" . round(((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] - ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] - 2)) / 2) . "px;
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a {
		font-weight:700; /* static */
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header nav #navigation li a {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] - 1) . "px;
			font-weight:400; /* static */
		}
		
		html #page #header nav #navigation > li > a {
			font-weight:500; /* static */
		}
		
		html #page #header nav #navigation li li li a {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] - 2) . "px;
		}
		
		html #page #header nav #navigation > li.menu-item-hide-text > a > span,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-hide-text > a > span {
			font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] . "px;
			line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] . "px;
		}
		
		html #page #header nav #navigation > li.menu-item-icon > a > span > span.nav_subtitle,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
			padding-left:" . ceil(((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
		}
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	#navigation ul li a {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
	}
	
	#navigation > li > a > span > span.nav_subtitle,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle, 
	#navigation li > a[data-tag]:before {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] - 3) . "px;
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
		font-weight:300; /* static */
	}
	
	#navigation > li > a > span > span.nav_subtitle {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] - 7) . "px;
		font-weight:400; /* static */
	}
	
	#navigation ul li a span:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] + 3) . "px;
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] + 4) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header nav #navigation > li.menu-item-hide-text > a > span > span.nav_subtitle,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-hide-text > a > span > span.nav_subtitle {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] - 2) . "px;
			line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] - 2) . "px;
		}
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	#header .logo .title,
	.cmsms_pricing_table .cmsms_price {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	
	.cmsms_twitter .published {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight'] . ";
	}
	
	.error .error_title {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] + 200) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 200) . "px;
	}
	
	.cmsms_dropcap {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.cmsms_icon_list_items.cmsms_icon_list_icon_type_number .cmsms_icon_list_item .cmsms_icon_list_icon:before,
	.cmsms_icon_box.box_icon_type_number:before,
	.cmsms_icon_box.cmsms_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style'] . ";
	}
	
	.cmsms_dropcap.type1 {
		font-size:40px; /* static */
	}
	
	.cmsms_dropcap.type2 {
		font-size:25px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 14) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 20) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 40) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 40) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 30) . "px;
	}
	
	.cmsms_pricing_table .cmsms_price {
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] - 30) . "px;
	}
	
	.cmsms_pricing_table .cmsms_price {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] - 8) . "px;
	}
	
	.cmsms_pricing_table .cmsms_pricing_item_inner:before, 
	.cmsms_profile.horizontal .profile:before {
		width:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] * 2 + 8) . "px;
		margin-left:-" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] + 4) . "px;
	}
	
	.cmsms_profile.vertical .profile:before {
		height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] * 2) . "px;
		margin-top:-" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] . "px;
	}
	
	.cmsms_twitter .owl-buttons span:before {
		line-height:" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] + 6) / 2) . "px;
	}
	
	.cmsms_twitter .owl-buttons > div, 
	.cmsms_twitter .owl-buttons span, 
	.cmsms_twitter .owl-buttons span:before {
		width:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] + 6) . "px;
		height:" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] - 6) / 2) . "px;
	}
	
	.cmsms_twitter .owl-buttons {
		margin-top:-" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] + 6) / 2) . "px;
	}
	
	.cmsms_quotes_slider.cmsms_quotes_slider_type_box .owl-buttons span:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] - 16) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] - 1) . "px;
	}
	
	.cmsms_quotes_slider.cmsms_quotes_slider_type_box .owl-buttons > div, 
	.cmsms_quotes_slider.cmsms_quotes_slider_type_box .owl-buttons span, 
	.cmsms_quotes_slider.cmsms_quotes_slider_type_box .owl-buttons span:before {
		width:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] + 3) . "px;
		height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] + 6) . "px;
	}
	
	
	@media only screen and (max-width: 600px) {
		.error .error_title {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] + 150) . "px;
			line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 150) . "px;
		}
	}
	
	@media only screen and (max-width: 540px) {
		.error .error_title {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] + 70) . "px;
			line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 70) . "px;
		}
	}
	
	@media only screen and (max-width: 320px) {
		.error .error_title {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] + 50) . "px;
			line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 50) . "px;
		}
	}
	
	
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.cmsms_search_post_number {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h2_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	
	.post .cmsms_post_format_img:before {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] . "px;
	}
	
	
	.post .cmsms_post_format_img:before {
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . "px;
	}
	
	.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap {
		line-height:60px; /* static */
	}
	
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] - 6) . "px;
	}
	
	.cmsms_counters.counters_type_horizontal .cmsms_counter_wrap .cmsms_counter.counter_has_icon .cmsms_counter_inner {
		padding-" . ((is_rtl()) ? 'right' : 'left') . ":" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] + 14) . "px;
	}
	
	.post .cmsms_post_cont .cmsms_post_title:before {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] . "px;
		margin-top:" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] - (int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size']) / 2) . "px;
	}
	
	@media only screen and (max-width: 540px) {
		h2,
		h2 a {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] - 5) . "px;
			line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] - 5) . "px;
		}
	}
	
	@media only screen and (max-width: 320px) {
		h2,
		h2 a {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] - 10) . "px;
			line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] - 10) . "px;
		}
	}
	
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.cmsms_sitemap_wrap .cmsms_sitemap > li > a,
	.cmsms_post_info .cmsms_post_date .cmsms_year {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	.cmsms_quotes_slider.cmsms_quotes_slider_type_center .quote_content {
		line-height:" . ((int)  $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] + 15). "px;
	}
	
	.sidebar aside h3 {
		font-size:" . ((int)  $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] - 8). "px;
	}
	
	.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . ((int)  $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] + 6). "px;
	}
	
	.post .cmsms_post_format_img:before,
	.cmsms_quotes_slider.cmsms_quotes_slider_type_center .quote_content {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
	}
	
	.post.cmsms_timeline_type .cmsms_post_format_img:before, 
	.bypostauthor > .comment-body .alignleft:before {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
	}
	
	.post_nav > span:before {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.post.cmsms_timeline_type .cmsms_post_format_img:before, 
	.post_nav > span:before, 
	.bypostauthor > .comment-body .alignleft:before, 
	.widget .owl-buttons span:before {
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.portfolio .project .project_outer .project_inner .cmsms_project_header .cmsms_project_title, 
	.cmsms_posts_slider .project .slider_project_outer .slider_project_inner .cmsms_slider_project_header .cmsms_slider_project_title {
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] - 2) . "px;
	}
	
	.cmsms_post_info .cmsms_post_date .cmsms_year {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] - 2) . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
	}
	
	.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_title:before {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
		margin-top:" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] - (int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size']) / 2) . "px;
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		width:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.blog.timeline .post .cmsms_post_info {
		width:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] + 110) . "px;
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.blog.timeline .post.cmsms_timeline_left .cmsms_post_info {
		right:-" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] + 110) / 2) . "px;
	}
	
	.blog.timeline .post.cmsms_timeline_right .cmsms_post_info {
		left:-" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] + 110) / 2) . "px;
	}
	
	@media only screen and (max-width: 540px) {
		.cmsms_quotes_slider.cmsms_quotes_slider_type_center .quote_content {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] - 4) . "px;
			line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size']. "px;
		}
	}
	
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	
	.pj_ddn .cmsmsLike, 
	.pj_ddn .cmsmsLike:before {
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] + 2) . "px !important;
	}
	
	.post.cmsms_masonry_type .cmsms_post_format_img:before, 
	.post.cmsms_puzzle_type .cmsms_post_format_img:before{
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . "px;
	}

	.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_title:before, 
	.post.cmsms_puzzle_type .cmsms_post_cont .cmsms_post_title:before {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		margin-top:" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] - (int) $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size']) / 2) . "px;
	}

	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a, 
	#reply-title.comment-reply-title,
	.cmsms_stats .cmsms_stat_wrap .cmsms_stat_title, 
	.cmsms_stats.stats_mode_bars .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap, 
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_title, 
	.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a, 
	.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > a, 
	.cmsms_sitemap_wrap .cmsms_sitemap_category > li > a,
	.post_nav > span, 
	.post_nav > span a,
	.cmsms_twitter .cmsms_twitter_item_content,
	.cmsms_twitter .cmsms_twitter_item_content a,
	.post_nav > span a, 
	.cmsms_quotes h6.quote_title,  
	.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > a {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.about_author .about_author_inner .vcard.author {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] + 2) . "px;
	}
	
	.widget .owl-buttons span:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] - 7) . "px;
	}
	
	.widget .owl-buttons span {
		width:" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] + 4) / 2) . "px;
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] . "px;
	}
	
	.post_nav > span a {
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] - 6) . "px;
	}
	
	.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > a {
		line-height:26px; /* static */
	}
	
	.cmsms_quotes.quote_grid .quote_content,
	.cmsms_quotes.quote_grid .quote_content blockquote,
	.cmsms_quotes_slider.cmsms_quotes_slider_type_box .quote_content blockquote,
	.cmsms_quotes_slider.cmsms_quotes_slider_type_box .quote_content {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] + 10) . "px;
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	.image-attachment .edit-link a,
	.share_posts .share_posts_inner a,
	table.shop_attributes th, 
	.post .cmsms_post_cont .cmsms_post_more_but .cmsms_post_read_more,
	fieldset legend,
	blockquote footer,
	.cmsms_post_info .cmsms_post_date .cmsms_day_mon, 
	table caption, 
	table th, 
	.cmsms_img .cmsms_img_caption,
	.gallery .gallery-item .gallery-caption,
	.cmsms_gallery li.cmsms_caption figcaption,
	.wp-caption .wp-caption-text,
	table th a, 
	.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_more a,
	.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_more a,
	.cmsms_table tr.cmsms_table_row_header, 
	.cmsms_table tr.cmsms_table_row_header a, 
	.cmsms_table tr.cmsms_table_row_footer td, 
	.cmsms_table tr.cmsms_table_row_footer, 
	.cmsms_table tr.cmsms_table_row_footer a, 
	.profile_sidebar .profile_details .profile_details_item_title,
	.profile_sidebar .profile_features .profile_features_item_title,
	.project_sidebar .project_features .project_features_item_title,
	.project_sidebar .project_details .project_details_item_title,
	.comment-edit-link, 
	.tweet_time,
	.comment-reply-link, 
	#cancel-comment-reply-link, 
	.related_posts_tabs_campaign .cmsms_stats .cmsms_stat_wrap .cmsms_stat_title, 
	.related_posts_tabs_campaign .cmsms_stats.stats_mode_bars .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap, 
	.cmsms_search_post .cmsms_search_post_number_wrap .cmsms_post_type_label {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	table caption, 
	table th, 
	table th a, 
	.cmsms_table tr.cmsms_table_row_footer td, 
	.cmsms_table tr.cmsms_table_row_header, 
	.cmsms_table tr.cmsms_table_row_header a, 
	.cmsms_table tr.cmsms_table_row_footer, 
	.comment-reply-link, 
	#cancel-comment-reply-link,
	.cmsms_table tr.cmsms_table_row_footer a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 2) . "px;
	}
	
	.comment-edit-link {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 4) . "px;
	}
	
	.post.cmsms_masonry_type .cmsms_post_header .cmsms_post_subtitle, 
	.post.cmsms_timeline_type .cmsms_post_header .cmsms_post_subtitle, 
	.profile_sidebar .profile_details .profile_details_item_title, 
	.post.cmsms_puzzle_type .cmsms_post_header .cmsms_post_subtitle,
	.profile_sidebar .profile_features .profile_features_item_title,
	.profile_sidebar .profile_features .profile_features_item_desc,
	.project_sidebar .project_features .project_features_item_title,
	.project_sidebar .project_features .project_features_item_desc,
	.project_sidebar .project_details .project_details_item_title,
	.cmsms_img .cmsms_img_caption,
	.gallery .gallery-item .gallery-caption,
	.cmsms_gallery li.cmsms_caption figcaption,
	.wp-caption .wp-caption-text,
	.tweet_time {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	.cmsms_post_info .cmsms_post_date .cmsms_day_mon, 
	.cmsms_search_post .cmsms_search_post_number_wrap .cmsms_post_type_label {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 2) . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] . "px;
	}
	
	.cmsms_quotes.cmsms_quotes_slider.cmsms_quotes_slider_type_center h6.quote_title {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] + 6) . "px;
	}
	
	.post .cmsms_slider_post_header .cmsms_slider_post_subtitle {
		font-weight:400; /* static */
	}
	
	.post .cmsms_post_header .cmsms_post_subtitle, 
	.cmsms_search_post .cmsms_search_post_number_wrap .cmsms_post_type_label {
		text-transform:uppercase; /* static */
	}
	
	#cancel-comment-reply-link {
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	
	.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_more a,
	.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_more a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] - 2) . "px;
	}
	
	/* Finish H6 Font */


	/* Start Button Font */
	input[type=submit], 
	input[type=button], 
	button, 
	.cmsms_button,
	.button,
	.cmsms_search_post_cont_info, 
	.cmsms_search_post_cont_info a {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_button_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] . "px !important;
	}
	
	.cmsms_post_filter_list li a,
	.cmsms_project_filter_list li a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] + 1) . "px;
	}
	
	.cmsms_posts_slider .cmsms_slider_post_header .cmsms_slider_post_subtitle,
	.cmsms_search_post_cont_info, 
	.cmsms_search_post_cont_info a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] + 4) . "px;
	}
	
	
	.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item > a {
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] - 4) . "px;
	}
	
	.cmsms_button.cmsms_but_icon_dark_bg, 
	.cmsms_button.cmsms_but_icon_light_bg, 
	.cmsms_button.cmsms_but_icon_divider, 
	.cmsms_button.cmsms_but_icon_inverse {
		padding-left:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsms_button.cmsms_but_icon_dark_bg:before, 
	.cmsms_button.cmsms_but_icon_light_bg:before, 
	.cmsms_button.cmsms_but_icon_divider:before, 
	.cmsms_button.cmsms_but_icon_inverse:before, 
	.cmsms_button.cmsms_but_icon_dark_bg:after, 
	.cmsms_button.cmsms_but_icon_light_bg:after, 
	.cmsms_button.cmsms_but_icon_divider:after, 
	.cmsms_button.cmsms_but_icon_inverse:after {
		width:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small,
	.meta_wrap,
	.meta_wrap a,
	form .formError .formErrorContent,
	.header_top_inner nav > div > ul > li a,
	.header_mid .slogan_wrap_text {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_text_transform'] . ";
	}

	#navigation > li.menu-item-mega > div.menu-item-mega-container ul ul li.menu-item-mega-description span.menu-item-mega-description-container {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . "px;
	}
	
	.related_posts_tabs_campaign .cmsms_stats .cmsms_stat_wrap .cmsms_stat_subtitle, 
	.related_posts_tabs_campaign .rel_post_content .related_posts_campaign_wrap .related_posts_campaign_togo, 
	.cmsms_posts_slider .cmsms_slider_post_cont_info,
	.cmsms_posts_slider .cmsms_slider_post_cont_info a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] + 1) . "px;
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'] . " !important;
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . "px !important;
	}
	
	.meta_wrap > div[class^=\"cmsms-icon-\"]:before,
	.meta_wrap > p[class^=\"cmsms-icon-\"]:before,
	.meta_wrap > span[class^=\"cmsms-icon-\"]:before,
	.meta_wrap > strong[class^=\"cmsms-icon-\"]:before,
	.meta_wrap > div[class*=\" cmsms-icon-\"]:before,
	.meta_wrap > p[class*=\" cmsms-icon-\"]:before,
	.meta_wrap > span[class*=\" cmsms-icon-\"]:before,
	.meta_wrap > strong[class*=\" cmsms-icon-\"]:before, 
	.meta_wrap > div[class^=\"cmsms_theme_icon_\"]:before,
	.meta_wrap > p[class^=\"cmsms_theme_icon_\"]:before,
	.meta_wrap > span[class^=\"cmsms_theme_icon_\"]:before,
	.meta_wrap > strong[class^=\"cmsms_theme_icon_\"]:before,
	.meta_wrap > div[class*=\" cmsms_theme_icon_\"]:before,
	.meta_wrap > p[class*=\" cmsms_theme_icon_\"]:before,
	.meta_wrap > span[class*=\" cmsms_theme_icon_\"]:before,
	.meta_wrap > strong[class*=\" cmsms_theme_icon_\"]:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] - 2) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header .header_top .header_top_outer .header_top_inner .header_top_right .nav_wrap nav #top_line_nav > li > a {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] + 1) . "px;
			font-weight:700; /* static */
		}
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input[type=text],
	input[type=email],
	input[type=password],
	input[type=number],
	input[type=url],
	input[type=tel],
	input[type=search],
	textarea,
	select,
	option {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_input_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_input_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_style'] . ";
	}
	
	#header input[type=search] {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_size'] + 47) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_input_font_line_height'] + 46) . "px;
		font-weight:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_weight'] + 300) . ";
	}
	
	.gform_wrapper input[type=text], 
	.gform_wrapper input[type=url], 
	.gform_wrapper input[type=email], 
	.gform_wrapper input[type=tel], 
	.gform_wrapper input[type=number], 
	.gform_wrapper input[type=password], 
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote,
	q,
	q:before,
	q:after	{
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_style'] . ";
	}
	
	blockquote:before,
	.cmsms_quotes_slider.cmsms_quotes_slider_type_box .quote_content:before,
	.quote_grid .quote_content:before {
		font: 75px/75px Arial, Helvetica, 'Nimbus Sans L', sans-serif; // static
	}
	
	
	
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";


if (CMSMS_WOOCOMMERCE) {

	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */
	dl dt,
	.onsale, 
	.woocommerce-info, 
	.woocommerce-message, 
	.woocommerce-error, 
	.woocommerce-info a, 
	.woocommerce-message a, 
	.woocommerce-error a, 
	.out-of-stock, 
	.widget_shopping_cart_content .total strong, 
	ul.order_details.bacs_details li strong,
	.widget .search_bar_wrap form .search_field input[type=search],
	.cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button,
	.cmsms_single_product .cmsms_tabs .cmsms_tabs_wrap .cmsms_tab .cmsms_tab_inner,
	.cmsms_single_product .cmsms_product_right_column .price,
	.cmsms_single_product .cmsms_woo_tabs .shop_attributes td,
	.cart_totals table tr.shipping th, 
	.cart_totals table tr.cart-discount th, 
	.checkout #order_review .shop_table th,
	.cmsms_single_product .cmsms_product_right_column .product_meta strong,
	.checkout #order_review .shop_table td, 
	.checkout #order_review .shop_table th *, 
	.checkout #order_review .shop_table td *, 
	.shop_table.order_details th, 
	.shop_table.order_details td, 
	.cmsms_products .product .product_outer .product_inner .cmsms_add_to_cart_wrap a,
	.shop_table.order_details th *, 
	.shop_table.order_details td *, 
	.woocommerce .checkout_coupon .button,
	#order_review #payment .place-order .button,
	.shop_table td.actions .button,
	.shipping-calculator-form .button,
	.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity,
	.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li .variation,
	.shop_table.order_details td.product-name, 
	.shop_table.order_details td.product-name * {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	.cmsms_single_product .cmsms_product_right_column .price {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 10) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 10) . "px;
	}
	
	.cmsms_products .product .product_outer .product_inner .cmsms_add_to_cart_wrap a, 
	.out-of-stock {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] - 3) . "px;
	}
	
	.onsale,
	.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity,
	.cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button,
	.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li .variation {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] - 2) . "px;
	}
	
	.cmsms_single_product .cmsms_woo_tabs .shop_attributes td,
	.widget .search_bar_wrap form .search_field input[type=search] {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] - 1) . "px;
	}
	
	.cmsms_single_product .cmsms_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta, 
	.widget_shopping_cart_content .total strong,
	.widget_shopping_cart_content .total span,
	.widget ul.product_list_widget li,
	dl dt {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	.widget_shopping_cart_content .cart_list li a.remove {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 3) . "px;
	}
	
	.cmsms_products .product .product_outer .product_inner .cmsms_product_footer {
		height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 36) . "px;
	}
	
	.cmsms_products .product .product_outer .product_inner .cmsms_product_footer > a {
		height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 12) . "px;
		padding-right:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 2) . "px;
		max-width:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] + 12) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	
	.widget_product_categories ul li a {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_link_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_link_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_text_decoration'] . ";
	}
	
	.widget ul li a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] - 1) . "px;
	}	
	
	.widget_product_categories ul li a:before {
		top:" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] - 5) / 2 ) . "px;
	}
	
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
	
	/* Start H3 Font */  
	.woocommerce h2,
	.cart_totals > h2, 
	.woocommerce-shipping-calculator > h2, 
	.cmsms_single_product .cmsms_product_right_column .product_title,
	.woocommerce-shipping-calculator > h2 a {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	.cmsms_products .product .product_outer .product_inner .cmsms_product_info .price {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsms_products .product .product_outer .product_inner .cmsms_product_info .price {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.cmsms_single_product .cmsms_woo_tabs h2,
	.woocommerce h3,
	.woocommerce h2,
	.woocommerce h4 {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.shop_table td.product-price, 
	.shop_table td.product-subtotal, 
	.widget_shopping_cart_content .cart_list li .quantity, 
	.widget_shopping_cart_content .total .amount, 
	.product_list_widget li .amount {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_system_font'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.cart_totals table tr.order-total, 
	.cart_totals table tr.cart-subtotal th, 
	.cart_totals table tr.cart-subtotal td span, 
	.cart_totals table tr.order-total th, 
	.cmsms_dynamic_cart .widget_shopping_cart_content .total strong,
	.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li a,
	.cmsms_dynamic_cart .widget_shopping_cart_content .total .amount,
	ul.order_details li > span, 
	ul.order_details.bacs_details li,
	.shop_table.customer_details th,
	.woocommerce-shipping-calculator a.shipping-calculator-button,
	.checkout #order_review table tr th.product-name, 
	.checkout #order_review table tr th.product-total, 
	.checkout #order_review table tr.cart-subtotal td, 
	.checkout #order_review table tr.cart-subtotal td *, 
	.checkout #order_review table tr.order-total td, 
	.checkout #order_review table tr.order-total td *, 
	.checkout #order_review table tr.cart-subtotal th, 
	.checkout #order_review table tr.order-total th, 
	.shop_table.order_details thead tr:first-child th, 
	.shop_table.order_details thead tr:first-child td, 
	.shop_table.order_details tfoot tr:first-child th, 
	.shop_table.order_details tfoot tr:first-child td, 
	.shop_table.order_details tfoot tr:first-child td *, 
	.shop_table.order_details tfoot tr:last-child th, 
	.shop_table.order_details tfoot tr:last-child td, 
	.shop_table.order_details tfoot tr:last-child td *,
	.shop_table td.product-name a, 
	.shop_table thead th,
	.shop_table.cart td.product-subtotal,
	.cmsms_single_product .cmsms_woo_tabs .shop_attributes th,
	.cmsms_products .product .product_outer .product_inner .cmsms_product_head .price ins,
	.cmsms_products .product .product_outer .product_inner .cmsms_product_head .price > .amount,
	.cmsms_products .product .product_outer .product_inner .cmsms_product_header .cmsms_product_title, 
	.cmsms_products .product .product_outer .product_inner .cmsms_product_header .cmsms_product_title a	{
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	
	.cmsms_products .product .product_outer .product_inner .cmsms_product_head .price del,
	.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li a,
	.cmsms_dynamic_cart .widget_shopping_cart_content .total strong,
	.cmsms_dynamic_cart .widget_shopping_cart_content .total .amount {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] - 2) . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_weight'] . ";
	}
	
	.cmsms_single_product .cmsms_woo_tabs .shop_attributes th {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] - 1) . "px;
	}
	
	.widget ul li a, 
	.cmsms_tabs.lpr .cmsms_tabs_wrap a,
	.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item > a {
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_weight'] . ";
	}
	
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.shop_table td.product-name, 
	.cmsms_added_product_info .cmsms_added_product_info_text {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_button_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_button_font_system_font'] . ";
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.cmsms_single_product .cmsms_product_right_column .cart .single_add_to_cart_button,
	.widget_price_filter .price_slider_wrapper .price_slider_amount .button,
	.widget_shopping_cart .widget_shopping_cart_content .buttons .button {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] - 2) . "px;
	}
	
	.cmsms_dynamic_cart_button {
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_weight'] . ";
		
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	.cmsms_single_product .cmsms_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .description {
		font-family:" . cmsmasters_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_text_transform'] . ";
	}
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/


";

}

if ($cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] > 30) {
	$custom_css .= "
		@media only screen and (max-width: 950px) {
			h1,
			h1 a {
				font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] - 20) . "px;
				line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] - 20) . "px;
			}
		}
	";
} else {
	$custom_css .= "
		@media only screen and (max-width: 950px) {
			h1,
			h1 a {
				font-size:60px;
				line-height:70px;
			}
		}
	";
}



if ($cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] > 40) {
	$custom_css .= "
		@media only screen and (max-width: 767px) {
			h1,
			h1 a {
				font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] - 30) . "px;
				line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] - 30) . "px;
			}
		}
	";
} else {
	$custom_css .= "
		@media only screen and (max-width: 767px) {
			h1,
			h1 a {
				font-size:50px;
				line-height:60px;
			}
		}
	";
}



if ($cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] > 50) {
	$custom_css .= "
		@media only screen and (max-width: 600px) {
			h1,
			h1 a {
				font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] - 40) . "px;
				line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] - 40) . "px;
			}
		}
	";
} else {
	$custom_css .= "
		@media only screen and (max-width: 600px) {
			h1,
			h1 a {
				font-size:40px;
				line-height:50px;
			}
		}
	";
}



if ($cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] > 60) {
	$custom_css .= "
		@media only screen and (max-width: 540px) {
			h1,
			h1 a {
				font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] - 50) . "px;
				line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] - 50) . "px;
			}
		}
	";
} else {
	$custom_css .= "
		@media only screen and (max-width: 540px) {
			h1,
			h1 a {
				font-size:30px;
				line-height:40px;
			}
		}
	";
}



if ($cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] > 70) {
	$custom_css .= "
		@media only screen and (max-width: 320px) {
			h1,
			h1 a {
				font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] - 60) . "px;
				line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] - 60) . "px;
			}
		}
	";
} else {
	$custom_css .= "
		@media only screen and (max-width: 320px) {
			h1,
			h1 a {
				font-size:40px;
				line-height:50px;
			}
		}
	";
}




	
	return $custom_css;
}

