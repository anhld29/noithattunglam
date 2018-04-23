<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.1.2
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function cmsmasters_theme_colors_primary() {
	$cmsms_option = cmsmasters_get_global_options();
	
	
	$cmsms_color_schemes = cmsms_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsms_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsms_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsms_color_scheme_{$scheme}," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer .headline_text .entry-subtitle," : '') . "
	{$rule}input[type=text],
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=search],
	{$rule}input[type=submit],
	{$rule}textarea,
	{$rule}.cmsmsLike,
	{$rule}.cmsmsLike:hover,
	{$rule}select,
	{$rule}.color_2,
	{$rule}option,
	{$rule}.post .cmsms_post_cont_info > span.cmsms_post_like > a:before,  
	{$rule}.profiles.opened-article .profile .cmsms_profile_header .cmsms_profile_subtitle, 
	{$rule}.cmsms_profile.vertical .profile .pl_img .pl_noimg, 
	{$rule}.cmsms_search_post .cmsms_post_cont_info,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_period,
	{$rule}.details_item_desc_comments a:hover,
	{$rule}.details_item_desc_comments a,
	{$rule}.details_item_desc_like a,
	{$rule}.details_item_desc_like a:hover,
	{$rule}.post.cmsms_search_post .cmsms_post_cont_info,
	{$rule}.cmsms_search_post .cmsms_post_footer_info,
	{$rule}.post.cmsms_search_post .cmsms_post_footer_info,
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsms_campaign_donations_count_number, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers, 
	{$rule}.post .cmsms_post_cont_info,
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_cont_info,
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_meta_wrap .cmsms_post_meta_right .cmsms_post_like > a, 
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_meta_wrap .cmsms_post_meta_right .cmsms_post_comments_wrap > a, 
	{$rule}.cmsms_post_comments,
	{$rule}.cmsms_search .cmsms_post_comments:hover,
	{$rule}.cmsms_slider_project_head_right .cmsms_post_comments:hover,
	{$rule}.post.cmsms_timeline_type .cmsms_post_comments:hover,
	{$rule}.donations.opened-article > .donation .cmsms_donation_campaign, 
	{$rule}.comment-content abbr, 
	{$rule}.widget_nav_menu > div > ul li a, 
	{$rule}.widget .owl-buttons span:hover,
	{$rule}.portfolio.grid .cmsms_project_category a, 
	{$rule}.portfolio .owl-item .cmsms_project_category a, 
	{$rule}.portfolio .project .project_outer .project_inner .cmsms_project_footer .cmsms_post_comments:hover,
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsmsLike:before, 
	{$rule}.cmsms_slider_project_category a, 
	{$rule}.widget_pages ul li a, 
	{$rule}.cmsms_tabs.lpr .cmsms_tab li small,
	{$rule}.cmsms_search .cmsms_search_post_cont .cmsms_post_cont_info .cmsms_post_date > abbr, 
	{$rule}.cmsms_single_slider .cmsms_post_category a,
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_meta_wrap .cmsms_post_meta_right > span > a:before, 
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_meta_wrap .cmsms_post_meta_right .cmsms_post_comments_wrap > a:before, 
	{$rule}.donations.opened-article > .donation .cmsms_donation_campaign a,
	{$rule}.tagcloud a, 
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_cont_info > span.cmsms_post_like a:before,
	{$rule}#footer .social_wrap_inner a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input:-moz-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	" . (($scheme != 'default') ? "{$rule}.headline_outer a," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h1," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h2," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h3," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h4," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h5," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h6," : '') . "
	" . (($scheme != 'default') ? "{$rule}.widget ul li a," : '') . "
	{$rule}.related_posts_tabs .cmsms_tab_inner .one_half .rel_post_content:hover a,
	{$rule}.cmsms_post_format_img,
	{$rule}.tweet_time:before,
	{$rule}.cmsms_icon_box.cmsms_icon_top:before,
	{$rule}.cmsms_icon_box.cmsms_icon_heading_left .icon_box_heading:before,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon:before,
	{$rule}.cmsmsLike:hover:before,
	{$rule}.cmsmsLike.active:before,
	{$rule}.cmsms_post_comments:hover:before, 
	{$rule}#cancel-comment-reply-link, 
	{$rule}.post_nav a:hover,
	{$rule}.cmsms_project_filter_list .button:hover, 
	{$rule}.cmsms_post_filter_list .button:hover, 
	{$rule}.cmsms_project_filter_list .current .button, 
	{$rule}.cmsms_post_filter_list .current .button, 
	{$rule}.img_placeholder_small:hover,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_currency, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_price, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_coins, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button,
	{$rule}.pl_subtitle, 
	{$rule}.cmsms_profile.vertical .profile .pl_img:hover .pl_noimg,
	{$rule}.cmsms_search .cmsms_search_post .cmsms_post_read_more:hover, 
	{$rule}.bypostauthor > .comment-body .alignleft:before, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsms_campaign_target_number, 
	{$rule}.related_posts_tabs_campaign .rel_post_content .related_posts_campaign_wrap .related_posts_campaign_togo > span, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > a:hover, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > a:hover, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_category > li > a:hover, 
	{$rule}.donations.opened-article > .donation .cmsms_donation_amount_currency, 
	{$rule}.donations.opened-article > .donation .cmsms_donation_campaign a:hover, 
	{$rule}.cmsms_donations .donation .cmsms_donation_amount_currency,
	{$rule}#footer .social_wrap_inner a:hover,
	{$rule}#footer_nav a:hover,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title:hover > a,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title > a,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item a:hover,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item.current_tab a,
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_horizontal .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner:before,
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner:before,
	{$rule}.cmsms_quote_inner blockquote:before,
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_box .quote_content:before,
	{$rule}.quote_grid .quote_content:before,
	{$rule}.cmsms_quotes .owl-buttons span:hover,
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_title a:hover, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_category a:hover, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_comments a:hover, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_user_name a:hover, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_more a:hover, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_like a.active:before,
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_like a:hover:before,
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_meta_wrap .cmsms_post_meta_right .cmsms_post_like .active:before, 
	{$rule}.comment-edit-link:hover,
	{$rule}.post .cmsms_post_cont_info .cmsmsLike.active:before,
	{$rule}.post .cmsms_post_cont_info .cmsms_post_category a:hover,
	{$rule}.post .cmsms_post_cont_info > span.cmsms_post_like > a:hover:before, 
	{$rule}.post .cmsms_post_cont_info .cmsms_post_user_name a:hover,
	{$rule}.post .cmsms_post_cont_info .cmsms_post_comments_wrap a:hover:before,
	{$rule}.post .cmsms_post_cont_info .cmsms_post_tags a:hover,
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_head_wrap a:hover, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_cont_info a:hover, 
	{$rule}.cmsms_profile.horizontal .pl_social_list li a,
	{$rule}.profile_details_item .cmsms_post_comments:hover:before,
	{$rule}.cmsms_post_read_more:hover,
	{$rule}.post.cmsms_default_type .cmsms_post_comments:hover,
	{$rule}.twr_icon,
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_cont_info > span.cmsms_project_category a:hover,
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_cont_info > span.cmsms_project_author a:hover,
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_cont_info > span.cmsms_project_tags a:hover,
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_cont_info > span.cmsms_post_comments_wrap a:hover,
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_cont_info > span.cmsms_post_like a:hover:before,
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_cont_info > span.cmsms_post_like a.active:before,
	{$rule}.share_posts .share_posts_inner a:hover,
	{$rule}.opened-article .post .cmsms_post_cont .cmsms_post_cont_info .cmsms_post_cont_right .cmsms_post_comments:hover,
	{$rule}.cmsms_project_category a, 
	{$rule}.post .cmsms_slider_post_cont .cmsms_post_cont_info > span a:hover,
	{$rule}.blog .post .cmsms_post_cont_info > span a:hover:before,
	{$rule}.post .cmsms_post_cont_info .cmsms_slider_post_comments a:hover,
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_meta_wrap .cmsms_post_meta_right > span > a:hover:before,
	{$rule}#footer_nav li.current-menu-item.current_page_item a,
	{$rule}.widget_categories ul li.current-cat a,
	{$rule}.widget_pages ul li.current_page_item a,
	{$rule}.image-attachment .edit-link a:hover,
	{$rule}.widget_categories ul li a:hover, 
	{$rule}.widget_pages ul li a:hover, 
	{$rule}.widget ul li a:hover,
	{$rule}.widget.widget_text ul li a:hover,
	{$rule}.widget.widget_meta ul li a:hover,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_wrap a:hover,
	{$rule}.cmsms_search .cmsms_search_post_category a:hover, 
	{$rule}.cmsms_search_post .cmsms_search_post_number_wrap .cmsms_post_type_label, 
	{$rule}.cmsms_search .cmsms_search_post_user_name a:hover, 
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_center .cmsms_centered_quote:before,
	{$rule}.cmsms_notice .notice_close:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	" . (($scheme == 'default') ? "mark," : '') . (($scheme != 'default') ? ".cmsms_color_scheme_{$scheme} mark," : '') . "
	{$rule}.cmsms_icon_box.cmsms_icon_box_top:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left_top:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left:before,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title .cmsms_toggle_plus .cmsms_toggle_plus_hor,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title .cmsms_toggle_plus .cmsms_toggle_plus_vert,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_bg .cmsms_icon_list_item .cmsms_icon_list_icon,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_item:hover .cmsms_icon_list_icon,
	{$rule}.cmsms_button:hover,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.owl-page:hover, 
	{$rule}.owl-page.active, 
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_horizontal .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_quotes .owl-page:hover,
	{$rule}.cmsms_quotes .owl-page.active,
	{$rule}.post .cmsms_post_cont .cmsms_post_title:before, 
	{$rule}.cmsms_dropcap.type2, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers.current, 
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item.current_tab:before,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item:hover:before, 
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item.current_tab a:before,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item a:hover:before, 
	{$rule}.cmsms_profile .profile:before, 
	{$rule}.button:hover,
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_date .cmsms_post_date > abbr,
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_content, 
	{$rule}.content_slider .owl-buttons .owl-prev:hover, 
	{$rule}.content_slider .owl-buttons .owl-next:hover,
	{$rule}.post.format-gallery .cmsms_owl_slider .owl-buttons .owl-next:hover,
	{$rule}.post.format-gallery .cmsms_owl_slider .owl-buttons .owl-prev:hover,
	{$rule}.opened-article .cmsms_owl_slider .owl-buttons .owl-prev:hover,
	{$rule}.opened-article .cmsms_owl_slider .owl-buttons .owl-next:hover,
	{$rule}.cmsms_posts_slider.cmsms_project .owl-buttons .owl-next:hover,
	{$rule}.cmsms_single_slider .cmsms_single_slider_inner .cmsms_single_slider_wrap.owl-carousel .owl-buttons .owl-prev:hover,
	{$rule}.cmsms_single_slider .cmsms_single_slider_inner .cmsms_single_slider_wrap.owl-carousel .owl-buttons .owl-next:hover,
	{$rule}.post .cmsms_post_date > abbr,
	{$rule}.tagcloud a:hover, 
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_date_wrap .cmsms_post_date > abbr, 
	{$rule}.widget_nav_menu > div > ul li > a:hover:before,
	{$rule}.widget_nav_menu > div > ul li.current_page_item > a:before,
	{$rule}.cmsms_posts_slider.cmsms_project .owl-buttons .owl-prev:hover,
	{$rule}.widget_categories ul li a:hover:before,
	{$rule}.widget_pages ul li a:hover:before,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best,
	{$rule}.widget_categories ul li.current-cat a:before,
	{$rule}.widget_pages ul li.current_page_item a:before,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title:hover > .cmsms_toggle_plus > .cmsms_toggle_plus_hor,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title:hover > .cmsms_toggle_plus > .cmsms_toggle_plus_vert,
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_project_filter_list .button, 
	{$rule}input[type=text],
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=search],
	{$rule}input[type=submit],
	{$rule}.cmsms_post_filter_list .button, 
	{$rule}.cmsms_project_filter_list .button:hover, 
	{$rule}.cmsms_post_filter_list .button:hover, 
	{$rule}.cmsms_project_filter_list .current .button, 
	{$rule}.cmsms_search .cmsms_post_date > abbr, 
	{$rule}.cmsms_post_filter_list .current .button {
		background-color:transparent; /* static */
	}
	
	{$rule}.cmsms_icon_list_items.cmsms_color_type_border .cmsms_icon_list_item .cmsms_icon_list_icon:after, 
	{$rule}.cmsms_button:hover,
	{$rule}.button:hover,
	{$rule}.cmsms_stats.stats_mode_bars .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner:before, 
	{$rule}input[type=text]:focus,
	{$rule}input[type=number]:focus,
	{$rule}input[type=email]:focus,
	{$rule}input[type=tel]:focus,
	{$rule}input[type=password]:focus,
	{$rule}input[type=search]:focus,
	{$rule}textarea:focus,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsms_button:hover,
	{$rule}.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_sort_block a.current,
	{$rule}.cmsms_project_filter_list .current .button,
	{$rule}.cmsms_post_filter_list .current .button,
	{$rule}input[type=submit]:hover,
	{$rule}select:focus,
	{$rule}.search_bar_wrap.cmsms_inputactive,
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_image_link:hover, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_open_link:hover, 
	{$rule}.cmsms_featured_campaign .campaign .cmsms_campaign_wrap_heading {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Secondary Color */
	
	
	
	/* Finish Secondary Color */
	
	
	/* Start Highlight Color */
	{$rule}a:hover,
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover," : '') . "
	{$rule}.cmsms_toggles .cmsms_toggles_filter > a.current_filter,
	{$rule}.search_bar_wrap button:before, 
	{$rule}.post .cmsms_post_footer_info,
	{$rule}.post .cmsms_post_header .cmsms_post_subtitle,
	{$rule}#cancel-comment-reply-link:hover, 
	{$rule}.img_placeholder_small,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_list li a, 
	{$rule}.post_nav span:before,
	{$rule}p.search_button button:before,
	{$rule}blockquote:before{
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.blog.columns.puzzle .post .preloader {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}fieldset legend,
	" . (($scheme != 'default') ? "{$rule}.headline_outer h1," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer h2," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer h3," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer h4," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer h5," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer h6," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h1," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h2," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h3," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h4," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h5," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h6," : '') . "
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.widget .owl-buttons,
	{$rule}.cmsms_twitter .owl-buttons span:hover,
	{$rule}.cmsms_quotes .owl-buttons,
	{$rule}.cmsms_post_read_more, 
	{$rule}.post_nav a,
	{$rule}.related_posts_tabs .cmsms_tab_inner .one_half .rel_post_content figure a,
	{$rule}blockquote footer,
	{$rule}table caption,
	{$rule}.image-attachment .edit-link a,
	{$rule}.cmsms_project_filter_list .button, 
	{$rule}.cmsms_post_filter_list .button, 
	{$rule}.cmsms_table tr.cmsms_table_row_footer,
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_horizontal .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat_title,
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap,
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_counter_wrap,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:after,
	{$rule}.cmsms-form-builder .check_parent input[type=\"checkbox\"] + label:after, 
	{$rule}.project .cmsms_project_cont_info, 
	{$rule}.cmsms_img_wrap .img_placeholder:before, 
	{$rule}.cmsms_img_rollover_wrap .img_placeholder:before, 
	{$rule}#wp-calendar caption,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_list li a:hover,
	{$rule}#header .logo, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > a, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > a, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > ul li a:before, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_category > li > a, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_category > li > ul li a:before, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_archive > li a:before, 
	{$rule}.donations.opened-article > .donation .cmsms_donation_details_item_title, 
	{$rule}.cmsms_donations .donation .cmsms_donation_amount_title, 
	{$rule}.opened-article > .campaign .cmsms_campaign_cont_info > span,
	{$rule}.copyright,
	{$rule}#footer_nav a,
	{$rule}blockquote p,
	{$rule}.cmsms_button,
	{$rule}.button,
	{$rule}.cmsms_table tr.cmsms_table_row_header,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > a,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item a,
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat_title,
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_title,
	{$rule}.cmsms_dropcap.type1,
	{$rule}.cmsms-form-builder label,
	{$rule}.comment-respond label,
	{$rule}.cmsms_contact_form p,
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsms_profile.vertical .pl_social_list li a:hover,
	{$rule}.cmsms_slider_project_category a:hover, 
	{$rule}.cmsms_single_slider .cmsms_post_category a:hover, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsmsLike:hover:before,
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsmsLike.active:before,
	{$rule}.comment-edit-link,
	{$rule}.post.cmsms_mansory_type .cmsms_post_comments:hover,
	{$rule}.post_nav:before,
	{$rule}.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_sort_block a:hover,
	{$rule}.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_sort_block a,
	{$rule}.cmsms_twitter .cmsms_twitter_item_content,
	{$rule}.post .cmsms_post_cont_info > span a,
	{$rule}.post .cmsms_post_cont_info .cmsms_post_cont_right > span a,
	{$rule}.post .cmsms_slider_post_cont .cmsms_post_cont_info > span a.cmsmsLike:hover,
	{$rule}.portfolio .owl-item .cmsms_project_category a:hover, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_post_comments,
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsmsLike,
	{$rule}.cmsms_slider_post_user_name a,
	{$rule}#wp-calendar thead th,
	{$rule}.widget_categories ul li a,
	{$rule}.widget_pages ul li a,
	{$rule}.share_posts .share_posts_inner a,
	{$rule}.portfolio.grid .cmsms_project_category a:hover, 
	{$rule}.tweet_time,
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_cont_info > span a,
	{$rule}.widget .search_bar_wrap form .search_button button[type=submit]:before,
	{$rule}.portfolio.grid .cmsms_project_footer a > span, 
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_wrap a, 
	{$rule}.widget.widget_recent_comments a, 
	{$rule}.widget.widget_recent_entries a, 
	{$rule}.widget_nav_menu ul li.current_page_item > a,
	{$rule}.widget_nav_menu ul li a:hover,
	{$rule}.widget.widget_archive a, 
	{$rule}.widget.widget_meta ul li a, 
	{$rule}.widget.widget_text ul li a, 
	{$rule}.widget .rsswidget, 
	{$rule}.sticky .cmsms_post_cont_wrapper:before, 
	{$rule}.cmsms_clients_slider .owl-buttons,
	{$rule}.cmsms_search .cmsms_search_post_category a, 
	{$rule}.cmsms_search .cmsms_search_post_user_name a, 
	{$rule}.cmsms_search .cmsms_search_post .cmsms_post_read_more {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	
	.headline_outer .headline_inner .cmsms_breadcrumbs .cmsms_breadcrumbs_inner a:hover {
		opacity: 0.5;
	}
	
	" . (($scheme == 'default') ? "{$rule}.headline_outer," : '') . "
	{$rule}.cmsms_icon_list_items .cmsms_icon_list_item .cmsms_icon_list_icon,
	{$rule}.cmsms_hover_slider .cmsms_hover_slider_thumbs > li a:before,
	{$rule}.cmsms_search .cmsms_search_post .cmsms_search_post_number, 
	{$rule}.blog.timeline .post .cmsms_post_info, 
	{$rule}.blog.columns.puzzle .post .preloader:after,
	{$rule}.current > .button,
	{$rule}.button.current,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button:hover,
	{$rule}.cmsms_profile .profile .pl_img .pl_noimg:after, 
	{$rule}.cmsms_profile .profile .pl_img figure a:after, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"radio\"] + label:after,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:after,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_hor,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_vert, 
	{$rule}.donation_confirm .donation_confirm_info_title {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button:hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	" . (($scheme == 'default') ? "{$rule}.headline_outer," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h1," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h2," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h3," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h4," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h5," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h6," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h1," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h2," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h3," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h4," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h5," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h6," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h1," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h2," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h3," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h4," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h5," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h6," : '') . "
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}mark,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left_top:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_top:before,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_border .cmsms_icon_list_item .cmsms_icon_list_icon:before,
	{$rule}.cmsms_search .cmsms_search_post .cmsms_search_post_number, 
	{$rule}.button:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsms_button:hover,
	{$rule}input[type=submit]:hover,
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_image_link, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_open_link, 
	{$rule}.cmsms_posts_slider .owl-buttons .owl-prev > span:before, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_title a, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_category, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_comments, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_user_name, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_more a, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_post_cont_info a, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_wrap:hover .cmsms_cont_text_hover .cmsms_slider_post_content, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .pricing_title, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .feature_list *, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_price_wrap .cmsms_currency, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_price_wrap .cmsms_price, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_price_wrap .cmsms_coins, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_price_wrap .cmsms_period, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button:hover, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_content > p, 
	{$rule}.cmsms_posts_slider .owl-buttons .owl-next > span:before, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_head_wrap a, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_cont_info a, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_cont_info, 
	{$rule}.portfolio.puzzle .project .project_outer:hover .project_inner .cmsms_project_footer a,
	{$rule}.post .cmsms_post_date > abbr, 
	{$rule}.tagcloud a:hover, 
	{$rule}.cmsms_posts_slider .owl-buttons,
	{$rule}.cmsms_campaigns .owl-buttons,
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_date_wrap .cmsms_post_date > abbr, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_date .cmsms_post_date > abbr,
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner:before, 
	{$rule}.cmsms_campaigns .campaign .cmsms_img_wrap .preloader:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsms_color_scheme_{$scheme}," : '') . "
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=search],
	{$rule}select,
	{$rule}option,
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer," : '') . "
	{$rule}.related_posts_tabs .cmsms_tab_inner .one_half .rel_post_content figure a,
	{$rule}.search_bar_wrap input[type=text],
	{$rule}.search_bar_wrap input[type=text]:focus,
	{$rule}.cmsms_profile.vertical .profile .pl_img .pl_noimg,
	{$rule}.portfolio .project .project_outer, 
	{$rule}.cmsms_posts_slider .project .slider_project_outer, 
	{$rule}.cmsms_button,
	{$rule}.button,
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont .cmsms_post_cont_info > span,
	{$rule}.cmsms_posts_slider .project .slider_project_outer .slider_project_inner, 
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button, 
	{$rule}.related_posts_item_wrap,
	{$rule}.blog.opened-article .post .cmsms_post_cont,
	{$rule}.blog .post .cmsms_post_cont_info > span, 
	{$rule}.widget_nav_menu ul li a,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_wrap,
	{$rule}.cmsms_notice .notice_close,
	{$rule}.footer_bg,
	{$rule}.sticky .cmsms_post_cont_wrapper:before,
	{$rule}.widget_custom_latest_projects_entries .pj_ddn,
	{$rule}.cmsms_featured_campaign .campaign .cmsms_campaign_donated_percent .cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat canvas {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button,
	{$rule}.opened-article > .campaign .campaign_meta_wrap > div {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#header input[type=text],
	{$rule}#header input[type=number],
	{$rule}#header input[type=email],
	{$rule}#header input[type=password],
	{$rule}#header input[type=search],
	{$rule}#header input[type=submit] {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#header input::-webkit-input-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#header input:-moz-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.current > .button,
	{$rule}.button.current, 
	{$rule}.owl-buttons,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon_wrap, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers.current, 
	{$rule}.blog.timeline .post .cmsms_post_info, 
	{$rule}.blog.columns.puzzle .post .preloader:before, 
	{$rule}.cmsms_dropcap.type2, 
	{$rule}.donation_confirm .donation_confirm_info_title {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.owl-page, 
	{$rule}.cmsms_featured_block,
	{$rule}.cmsms_notice,
	{$rule}.cmsms_icon_box.cmsms_icon_box_top,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"checkbox\"]+label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"radio\"]+label:before,
	{$rule}.post .wp-caption, 
	{$rule}.blog.columns.puzzle .post .puzzle_post_content_wrapper .cmsms_post_footer, 
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}.cmsms_gallery li.cmsms_caption figure,
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_box .cmsms_quote_inner:before, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap > div,
	{$rule}.cmsms_table tr.cmsms_table_row_header,
	{$rule}.cmsms_table tr.cmsms_table_row_footer,
	{$rule}.blog .post .cmsms_post_cont,
	{$rule}.cmsms_archive .project.cmsms_default_type .cmsms_post_cont,
	{$rule}.blog.standard .post .cmsms_post_cont,
	{$rule}.blog.grid .post .cmsms_post_cont,
	{$rule}.blog.columns .post .cmsms_post_cont,
	{$rule}.img_placeholder,
	{$rule}.opened-article .post .cmsms_post_cont .cmsms_post_cont_info .cmsms_post_cont_right > span,
	{$rule}.blog.timeline .post .cmsms_post_cont,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers,  
	{$rule}.tagcloud a,  
	{$rule}.donations.opened-article > .donation .cmsms_donation_info, 
	{$rule}.cmsms_posts_slider .post:nth-child(2n+1), 
	{$rule}.donation_confirm .donation_confirm_info, 
	{$rule}.cmsms_donations .donation .cmsms_donation_cont_wrap, 
	{$rule}.cmsms_featured_campaign .campaign, 
	{$rule}.cmsms_featured_campaign .campaign .cmsms_campaign_donated_percent .cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_box .cmsms_quote_inner:after, 
	{$rule}.blog.columns.puzzle .post .puzzle_post_content_wrapper:before {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsms_profile.horizontal .pl_social_list li a:hover,
	{$rule}.cmsmsLike:before,
	{$rule}.cmsms_twitter .owl-buttons,
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_meta_wrap .cmsms_post_meta_right .cmsms_post_like > a:before, 
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_meta_wrap .cmsms_post_meta_right .cmsms_post_comments_wrap > a:before, 
	{$rule}.cmsms_profile.vertical .pl_social_list li a,
	{$rule}.cmsms_post_comments:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.blog.timeline:before, 
	{$rule}.cmsms_icon_list_items.cmsms_icon_list_type_block .cmsms_icon_list_item:before,
	{$rule}.post.cmsms_timeline_type:before, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li:before, 
	{$rule}.cmsms_donations .donation .img_placeholder, 
	{$rule}.cmsms_featured_campaign .campaign .cmsms_campaign_wrap_img .img_placeholder, 
	{$rule}.cmsms_quotes .owl-page,
	{$rule}.cmsms_campaigns .campaign .cmsms_img_wrap .img_placeholder,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap:before, 
	{$rule}.widget_categories ul li a:before, 
	{$rule}.widget_pages ul li a:before, 
	{$rule}.widget_nav_menu > div > ul li > a:before,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}input[type=text],
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=search],
	{$rule}input[type=tel],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.widget .search_bar_wrap form .search_field,
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.cmsms_icon_wrap .cmsms_simple_icon, 
	{$rule}.cmsms_icon_box.cmsms_icon_box_top,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left,
	{$rule}.cmsms_icon_list_items.cmsms_icon_list_type_block .cmsms_icon_list_item,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_bg .cmsms_icon_list_icon:after,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon:after,
	{$rule}.img_placeholder_small,
	{$rule}.widget_custom_popular_projects_entries .img_placeholder,
	{$rule}.widget_custom_latest_projects_entries .img_placeholder,
	{$rule}.donations.opened-article > .donation .cmsms_donation_details_item, 
	{$rule}.cmsms_donations .donation .cmsms_donation_footer, 
	{$rule}.cmsms_button,
	{$rule}.button,
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsms_button,
	{$rule}input[type=submit],
	{$rule}.cmsms_toggle_wrap,
	{$rule}.project_navi,
	{$rule}.cmsms_toggles,
	{$rule}.cmsms_toggle_title,
	{$rule}.cmsms_toggle_inner,
	{$rule}.cmsms_tabs .cmsms_tabs_list,
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_box .quote_content,
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_box .owl-buttons,
	{$rule}.quote_grid .quote_vert,
	{$rule}.quote_grid.quote_four:after,
	{$rule}.quote_grid.quote_four:before,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggles_filter,
	{$rule}.quote_grid.quote_three:before,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap .cmsms_toggle,
	{$rule}.quote_grid .quotes_list,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item,
	{$rule}.post_nav,
	{$rule}.wp-caption,
	{$rule}.cmsms_notice .notice_close,
	{$rule}.post_comments .commentlist .comment-body,
	{$rule}.post_comments,
	{$rule}.cmsms_search .cmsms_search_post .cmsms_search_post_cont .cmsms_post_cont_info,
	{$rule}.post_comments .commentlist,
	{$rule}.about_author .about_author_inner,
	{$rule}.campaign .cmsms_campaign_cont_info {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_table tr,
	{$rule}.post .cmsms_post_footer_info, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details .project_details_item, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_features .project_features_item, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_features .profile_features_item {
		" . cmsms_color_css('border-top-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}

	
	{$rule}hr,
	{$rule}.cmsms_divider, 
	{$rule}.cmsms_widget_divider {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	
	
	@media only screen and (max-width: 950px) {
		{$rule}.content_wrap .sidebar:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
		}
		
		{$rule}.quote_grid .quotes_list .cmsms_quote, 
		{$rule}.quote_grid .quotes_list .cmsms_quote {
			" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
		}
	}
	
	/* Finish Borders Color */
	
	
	/* Start Custom Color */
	
	{$rule}.cmsms_icon_list_items.cmsms_color_type_bg .cmsms_icon_list_item .cmsms_icon_list_icon,
	{$rule}.headline_outer .headline_icon:before{
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_custom']) . "
	}
	
	{$rule}html:before,
	{$rule}html:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_custom']) . "
	}
	
	{$rule}#middle,
	{$rule}#bottom {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_custom']) . "
	}
		
	/* Finish Custom Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}figure.cmsms_img_rollover_wrap:hover .cmsms_img_rollover, 
	{$rule}.slider_project_outer:hover .cmsms_img_rollover, 
	{$rule}.cmsms_profile.horizontal .pl_img:hover .pl_social,
	{$rule}.cmsms_profile.vertical .pl_img figure:hover .cmsms_img_rolover,
	{$rule}.portfolio.puzzle .project .project_outer:hover .cmsms_img_rollover,
	{$rule}.cmsms_single_slider .cmsms_single_slider_inner .cmsms_single_slider_wrap.owl-carousel .cmsms_single_slider_post:hover .cmsms_img_rollover_wrap .cmsms_img_rollover,
	{$rule}.project_gallery_row .cmsms_img_rollover_wrap:hover .cmsms_img_rollover {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.8);
	}
	
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_image_link,
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_open_link {
		border-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . ", 0.2);
	}
	
	{$rule}.cmsms_campaigns .campaign .cmsms_img_wrap .preloader:hover:after {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . ", 0.85);
	}
	";
	
	
	if ($scheme == 'default') {
	$custom_css .= "
	#slide_top {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.3);
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsms_button.cmsms_but_bg_hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_hover:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_hor, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert:hover, 
	{$rule}.cmsms_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_right, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_top, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_bottom, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_vert, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_hor, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_diag {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_hor:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_shadow {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_shadow:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_shadow {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_dark_bg, 
	{$rule}.cmsms_button.cmsms_but_icon_light_bg, 
	{$rule}.cmsms_button.cmsms_but_icon_divider {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_dark_bg:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_light_bg:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_divider:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_dark_bg, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_light_bg, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_divider {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_divider:after {
		" . cmsms_color_css('border-right-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover:before, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover:after, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_slide_left, 
	{$rule}.cmsms_button.cmsms_but_icon_slide_right {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_slide_right:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_slide_right {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_left, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_right, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_top, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_bottom {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_right:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_top:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_bottom:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_right, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_top, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_bottom {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return $custom_css;
}

