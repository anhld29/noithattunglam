<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.0
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */


/**
* Single Counter
*/
add_filter('cmsms_counter_atts_filter', 'cmsms_counter_atts');

function cmsms_counter_atts() {
	return array( 
		'subtitle' => 				'', 
		'title_custom_check' => 	'', 
		'title_font_family' => 		'', 
		'title_font_size' => 		'', 
		'title_line_height' => 		'', 
		'title_font_weight' => 		'', 
		'title_font_style' => 		'', 
		'title_font_color' => 		'',
		'value' => 					'0', 
		'value_prefix' => 			'', 
		'value_suffix' => 			'', 
		'counter_custom_check' => 	'', 
		'counter_font_family' => 	'', 
		'counter_font_size' => 		'', 
		'counter_line_height' => 	'', 
		'counter_font_weight' => 	'', 
		'color' => 					'', 
		'icon_type' => 				'icon', 
		'icon' => 					'', 
		'image' => 					'', 
		'icon_color' => 			'', 
		'icon_bg_color' => 			'', 
		'icon_bd_color' => 			'', 
		'classes' => 				'' 
	);
}


/**
* Heading
*/
add_filter('cmsms_custom_heading_atts_filter', 'cmsms_custom_heading_atts');

function cmsms_custom_heading_atts() {
	return array( 
		'type' => 					'h1', 
		'font_family' => 			'', 
		'font_size' => 				'', 
		'line_height' => 			'', 
		'tablet_check' =>  			'', 
		'tablet_font_size' => 		'', 
		'tablet_line_height' => 	'', 
		'font_weight' => 			'400', 
		'font_style' => 			'normal', 
		'icon' => 					'', 
		'text_align' => 			'left', 
		'color' => 					'', 
		'bg_color' => 				'', 
		'link' => 					'', 
		'target' => 				'', 
		'margin_top' => 			'0', 
		'margin_bottom' => 			'0', 
		'border_radius' => 			'', 
		'divider' => 				'', 
		'divider_type' => 			'short', 
		'divider_height' => 		'1', 
		'divider_style' => 			'solid', 
		'divider_color' => 			'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}


/* Register Admin Panel JS Scripts */
function register_admin_js_scripts() {
	global $pagenow;
	
	
	wp_register_script('composer-shortcodes-extend', get_template_directory_uri() . '/cmsms-c-c/js/cmsms-c-c-shortcodes-extend.js', array('cmsms_composer_shortcodes_js'), '1.0.0', true);
	
	wp_localize_script('composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
		'choice_disable' => 					esc_attr__('Disable', 'interior-design'), 
		'title_custom_check' => 				esc_attr__('Custom Title Font', 'interior-design'), 
		'counter_title_family' => 				esc_attr__('Custom Title Font Family', 'interior-design'), 
		'counter_title_font_size' => 			esc_attr__('Custom Title Font Size', 'interior-design'), 
		'counter_title_line_height' => 			esc_attr__('Custom Title Line Height', 'interior-design'), 
		'counter_title_font_weight' => 			esc_attr__('Custom Title Font Weight', 'interior-design'), 
		'counter_title_font_style' => 			esc_attr__('Custom Title Font Style', 'interior-design'), 
		'counter_title_color' => 				esc_attr__('Custom Title Color', 'interior-design'), 
		'counter_custom_check' => 				esc_attr__('Custom Counter Font', 'interior-design'), 
		'counter_family' => 					esc_attr__('Custom Counter Font Family', 'interior-design'), 
		'counter_font_size' => 					esc_attr__('Custom Counter Font Size', 'interior-design'), 
		'counter_line_height' => 				esc_attr__('Custom Counter Line Height', 'interior-design'), 
		'counter_font_weight' => 				esc_attr__('Custom Counter Font Weight', 'interior-design'), 
		'quotes_slider_full' => 				esc_attr__('Fullwidth Slider mode', 'interior-design'),
		'menu_title' => 						esc_attr__('Menu', 'interior-design'),
		'menu_item_title' => 					esc_attr__('Menu Offer', 'interior-design'),
		'menu_offers_title' => 					esc_attr__('Menu offers', 'interior-design'),
		'menu_offers_descr' => 					esc_attr__('Here you can add, edit, remove or sort menu offers', 'interior-design'),
		'menu_item_title_descr' => 				esc_attr__('Enter this menu offer title', 'interior-design'),
		'menu_item_price_title' => 				esc_attr__('Price', 'interior-design'),
		'menu_item_price_descr' => 				esc_attr__('Enter this menu offer price', 'interior-design'),
		'menu_item_currency_title' => 			esc_attr__('Currency', 'interior-design'),
		'menu_item_currency_descr' => 			esc_attr__('Enter this menu offer currency', 'interior-design'),
		'menu_item_features_title' => 			esc_attr__('Ingredients', 'interior-design'),
		'menu_item_features_descr' => 			esc_attr__('Add menu offer ingredients', 'interior-design'),
		'menu_item_best_offer_title' => 		esc_attr__('Best Offer', 'interior-design'),
		'menu_item_best_offer_descr' => 		esc_attr__('If checked, this menu offer will be highlighted', 'interior-design'),
		'menu_item_best_feature_title' => 		esc_attr__('Best Offer recommendation', 'interior-design'),
		'menu_item_best_feature_descr' => 		esc_attr__('Enter this menu offer recommendation', 'interior-design'),
		'menu_item_best_offer_bg_title' => 		esc_attr__('Best Offer Background Color', 'interior-design'),
		'menu_item_best_offer_bg_descr' => 		esc_attr__('Choose background color for this menu best offer', 'interior-design'),
		'menu_item_best_offer_txt_title' => 	esc_attr__('Best Offer Text Color', 'interior-design'),
		'menu_item_best_offer_txt_descr' => 	esc_attr__('Choose text color for this menu best offer', 'interior-design'),
		'heading_tablet_check' => 				esc_attr__('Font size for small tablet', 'interior-design'),
		'heading_tablet_font_size' => 			esc_attr__('Tablet font size', 'interior-design'),
		'heading_tablet_line_height' => 		esc_attr__('Tablet line height', 'interior-design'),
		'quotes_field_slider_type_title' => 	esc_attr__('Slider Type', 'interior-design'), 
		'quotes_field_slider_type_descr' => 	esc_attr__('Choose your quotes slider style type', 'interior-design'), 
		'quotes_field_type_choice_box' => 		esc_attr__('Boxed', 'interior-design'), 
		'quotes_field_type_choice_center' => 	esc_attr__('Centered', 'interior-design') 
	));
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('composer-shortcodes-extend');
	}
}

add_action('admin_enqueue_scripts', 'register_admin_js_scripts');


// Quotes Shortcode Attributes Filter
add_filter('cmsms_quotes_atts_filter', 'cmsms_quotes_atts');

function cmsms_quotes_atts() {
	return array( 
		'mode' => 				'grid', 
		'type' => 				'boxed', 
		'columns' => 			'2', 
		'speed' => 				'10', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Posts Slider Shortcode Attributes Filter
add_filter('cmsms_posts_slider_atts_filter', 'cmsms_posts_slider_atts');

function cmsms_posts_slider_atts() {
	return array( 
		'orderby' => 				'', 
		'order' => 					'', 
		'post_type' => 				'', 
		'blog_categories' => 		'', 
		'portfolio_categories' => 	'', 
		'columns' => 				'', 
		'amount' => 				'', 
		'count' => 					'', 
		'pause' => 					'', 
		'slides_control' => 		'', 
		'arrow_control' => 			'', 
		'speed' => 					'', 
		'blog_metadata' => 			'', 
		'portfolio_metadata' => 	'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}
