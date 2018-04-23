<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.1.0
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


// Current Theme Constants
if (!defined('CMSMS_SHORTNAME')) {
	define('CMSMS_SHORTNAME', 'interior-design');
}

if (!defined('CMSMS_FULLNAME')) {
	define('CMSMS_FULLNAME', 'Interior Design');
}



/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('cmsmasters_system_fonts_list')) {
	function cmsmasters_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('cmsms_google_fonts_list')) {
	function cmsms_google_fonts_list() {
		$fonts = array( 
			'' => esc_html__('None', 'interior-design'), 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic' => 'Roboto', 
			'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,700,700italic' => 'Open Sans', 
			'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 
			'Droid+Sans:400,700' => 'Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
			'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
			'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
			'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
			'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
			'Ubuntu+Condensed' => 'Ubuntu Condensed', 
			'Headland+One' => 'Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
			'Lato:400,400italic,700,700italic' => 'Lato', 
			'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
			'Oswald:300,400,700' => 'Oswald', 
			'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
			'Lobster' => 'Lobster', 
			'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
			'Questrial' => 'Questrial', 
			'Raleway:300,400,500,600,700' => 'Raleway', 
			'Dosis:300,400,500,700' => 'Dosis', 
			'Cutive+Mono' => 'Cutive Mono', 
			'Quicksand:300,400,700' => 'Quicksand', 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic' => 'Titillium Web', 
			'Montserrat:400,700' => 'Montserrat', 
			'Cookie' => 'Cookie', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Font Weights List
if (!function_exists('cmsms_font_weight_list')) {
	function cmsms_font_weight_list() {
		$list = array( 
			'normal' => 	'normal', 
			'100' => 		'100', 
			'200' => 		'200', 
			'300' => 		'300', 
			'400' => 		'400', 
			'500' => 		'500', 
			'600' => 		'600', 
			'700' => 		'700', 
			'800' => 		'800', 
			'900' => 		'900', 
			'bold' => 		'bold', 
			'bolder' => 	'bolder', 
			'lighter' => 	'lighter', 
		);
		
		
		return $list;
	}
}



// Theme Settings Font Styles List
if (!function_exists('cmsms_font_style_list')) {
	function cmsms_font_style_list() {
		$list = array( 
			'normal' => 	'normal', 
			'italic' => 	'italic', 
			'oblique' => 	'oblique', 
			'inherit' => 	'inherit', 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('cmsmasters_text_transform_list')) {
	function cmsmasters_text_transform_list() {
		$list = array( 
			'none' => 'none', 
			'uppercase' => 'uppercase', 
			'lowercase' => 'lowercase', 
			'capitalize' => 'capitalize', 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('cmsmasters_text_decoration_list')) {
	function cmsmasters_text_decoration_list() {
		$list = array( 
			'none' => 'none', 
			'underline' => 'underline', 
			'overline' => 'overline', 
			'line-through' => 'line-through', 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('cmsmasters_custom_color_schemes_list')) {
	function cmsmasters_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'interior-design'), 
			'second' => esc_html__('Custom 2', 'interior-design'), 
			'third' => esc_html__('Custom 3', 'interior-design'), 
		);
		
		
		return $list;
	}
}



// WP Color Picker Palettes
if (!function_exists('cmsms_color_picker_palettes')) {
	function cmsms_color_picker_palettes() {
		$palettes = array( 
			'#bda87f', 
			'#252531', 
			'#96969c', 
			'#d2d2d5', 
			'#e9e9ea', 
			'#f4f4f4', 
			'#000000', 
			'#ffffff' 
		);
		
		
		return $palettes;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/

// Theme Plugin Support Constants
if (!defined('CMSMS_WOOCOMMERCE') && class_exists('woocommerce')) {
	define('CMSMS_WOOCOMMERCE', true);
} elseif (!defined('CMSMS_WOOCOMMERCE')) {
	define('CMSMS_WOOCOMMERCE', false);
}

if (!defined('CMSMS_EVENTS_CALENDAR') && class_exists('Tribe__Events__Main')) {
	define('CMSMS_EVENTS_CALENDAR', false);
} elseif (!defined('CMSMS_EVENTS_CALENDAR')) {
	define('CMSMS_EVENTS_CALENDAR', false);
}

if (!defined('CMSMS_PAYPALDONATIONS') && class_exists('PayPalDonations')) {
	define('CMSMS_PAYPALDONATIONS', false);
} elseif (!defined('CMSMS_PAYPALDONATIONS')) {
	define('CMSMS_PAYPALDONATIONS', false);
}

if (!defined('CMSMS_DONATIONS') && class_exists('Cmsms_Donations')) {
	define('CMSMS_DONATIONS', false);
} elseif (!defined('CMSMS_DONATIONS')) {
	define('CMSMS_DONATIONS', false);
}

if (!defined('CMSMS_TIMETABLE') && function_exists('timetable_events_init')) {
	define('CMSMS_TIMETABLE', false);
} elseif (!defined('CMSMS_TIMETABLE')) {
	define('CMSMS_TIMETABLE', false);
}

// Change FS Method
if (!defined('FS_METHOD')) {
	define('FS_METHOD', 'direct');
}


// Theme Image Thumbnails Size
if (!function_exists('cmsms_image_thumbnail_list')) {
	function cmsms_image_thumbnail_list() {
		$list = array( 
			'small-thumb' => array( 
				'width' => 		55, 
				'height' => 	55, 
				'crop' => 		true 
			), 
			'square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Square', 'interior-design') 
			), 
			'blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	325, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Masonry Blog', 'interior-design') 
			), 
			'project-thumb' => array( 
				'width' => 		580, 
				'height' => 	400, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project', 'interior-design') 
			), 
			'project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Project', 'interior-design') 
			), 
			'post-thumbnail' => array( 
				'width' => 		800, 
				'height' => 	600, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Featured', 'interior-design') 
			), 
			'masonry-thumb' => array( 
				'width' => 		860, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry', 'interior-design') 
			), 
			'full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	535, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Full', 'interior-design') 
			), 
			'project-full-thumb' => array( 
				'width' => 		800, 
				'height' => 	470, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Full', 'interior-design') 
			), 
			'full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Full', 'interior-design') 
			) 
		);
		
		
		if (CMSMS_EVENTS_CALENDAR) {
			$list['event-thumb'] = array( 
				'width' => 		580, 
				'height' => 	420, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Event', 'interior-design') 
			);
		}
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('cmsmasters_all_color_schemes_list')) {
	function cmsmasters_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'interior-design'), 
			'header' => 		esc_html__('Header', 'interior-design'), 
			'header_top' => 	esc_html__('Header Top', 'interior-design'), 
			'header_side' => 	esc_html__('Header Side', 'interior-design'), 
			'footer' => 		esc_html__('Footer', 'interior-design') 
		);
		
		
		$out = array_merge($list, cmsmasters_custom_color_schemes_list());
		
		
		return $out;
	}
}



// Theme Settings Color Schemes List
if (!function_exists('cmsms_color_schemes_list')) {
	function cmsms_color_schemes_list() {
		$list = cmsmasters_all_color_schemes_list();
		
		
		unset($list['header']);
		
		unset($list['header_top']);
		
		unset($list['header_side']);
		
		
		$out = array_merge($list, cmsmasters_custom_color_schemes_list());
		
		
		return $out;
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('cmsmasters_color_schemes_defaults')) {
	function cmsmasters_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#96969c', 
				'link' => 		'#bda87f', 
				'hover' => 		'#d2d2d5', 
				'heading' => 	'#252531', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#f4f4f4', 
				'border' => 	'#e9e9ea', 
				'custom' => 	'#ffffff' 
			), 
			'header' => array( // Header color scheme
				'color' => 				'#96969c', 
				'link' => 				'#252531', 
				'hover' => 				'#bda87f', 
				'subtitle' => 			'#96969c', 
				'bg' => 				'#ffffff', 
				'bg_scroll' => 			'#f4f4f4', 
				'hover_bg' => 			'#ffffff', 
				'border' => 			'#e9e9ea', 
				'dropdown_link' => 		'#8d8d99', 
				'dropdown_hover' => 	'#ffffff', 
				'dropdown_subtitle' => 	'#62626d', 
				'dropdown_bg' => 		'#252531', 
				'dropdown_hover_bg' => 	'#252531', 
				'dropdown_border' => 	'#3b3b46' 
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 				'#8d8d99', 
				'link' => 				'#ffffff', 
				'hover' => 				'#bda87f', 
				'bg' => 				'#252531', 
				'border' => 			'#3b3b46', 
				'dropdown_link' => 		'#ffffff', 
				'dropdown_hover' => 	'#252531', 
				'dropdown_bg' => 		'#bda87f', 
				'dropdown_border' => 	'#3b3b46' 
			), 
			'header_side' => array( // Header Side color scheme
				'color' => 				'#8d8d99', 
				'link' => 				'#ffffff', 
				'hover' => 				'#bda87f', 
				'subtitle' => 			'#ffffff', 
				'bg' => 				'#252531', 
				'bg_scroll' => 			'#ffffff', 
				'hover_bg' => 			'#252531', 
				'border' => 			'#3b3b46', 
				'dropdown_link' => 		'#8d8d99', 
				'dropdown_hover' => 	'#ffffff', 
				'dropdown_subtitle' => 	'#62626d', 
				'dropdown_bg' => 		'#252531', 
				'dropdown_hover_bg' => 	'#252531', 
				'dropdown_border' => 	'#3b3b46' 
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'#96969c', 
				'link' => 		'#bda87f', 
				'hover' => 		'#d2d2d5', 
				'heading' => 	'#252531', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#f4f4f4', 
				'border' => 	'#e9e9ea', 
				'custom' => 	'#d43c18' 
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'#96969c', 
				'link' => 		'#bda87f', 
				'hover' => 		'#d2d2d5', 
				'heading' => 	'#252531', 
				'bg' => 		'#f4f4f4', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#e9e9ea', 
				'custom' => 	'#ffffff' 
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#ffffff', 
				'link' => 		'#bda87f', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#ffffff', 
				'custom' => 	'#fcfcfc' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'rgba(255,255,255,0.6)', 
				'link' => 		'#bda87f', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#ffffff', 
				'border' => 	'rgba(255,255,255,0.1)', 
				'custom' => 	'#bda87f' 
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
if (!defined('CMSMS_FRAMEWORK')) {
	define('CMSMS_FRAMEWORK', get_template_directory() . '/framework');
}

if (!defined('CMSMS_ADMIN')) {
	define('CMSMS_ADMIN', CMSMS_FRAMEWORK . '/admin');
}

if (!defined('CMSMS_SETTINGS')) {
	define('CMSMS_SETTINGS', CMSMS_ADMIN . '/settings');
}

if (!defined('CMSMS_OPTIONS')) {
	define('CMSMS_OPTIONS', CMSMS_ADMIN . '/options');
}

if (!defined('CMSMS_ADMIN_INC')) {
	define('CMSMS_ADMIN_INC', CMSMS_ADMIN . '/inc');
}

if (!defined('CMSMS_CLASS')) {
	define('CMSMS_CLASS', CMSMS_FRAMEWORK . '/class');
}

if (!defined('CMSMS_FUNCTION')) {
	define('CMSMS_FUNCTION', CMSMS_FRAMEWORK . '/function');
}


if (!defined('CMSMS_COMPOSER')) {
	define('CMSMS_COMPOSER', get_template_directory() . '/cmsms-c-c');
}



// Load Framework Parts
require_once(CMSMS_CLASS . '/Browser.php');

require_once(CMSMS_SETTINGS . '/cmsms-theme-settings.php');

require_once(CMSMS_OPTIONS . '/cmsms-theme-options.php');

require_once(CMSMS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMS_ADMIN_INC . '/plugin-activator.php');

require_once(CMSMS_CLASS . '/twitteroauth.php');

require_once(CMSMS_CLASS . '/widgets.php');

require_once(CMSMS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMS_FUNCTION . '/likes.php');

require_once(CMSMS_FUNCTION . '/pagination.php');

require_once(CMSMS_FUNCTION . '/single-comment.php');

require_once(CMSMS_FUNCTION . '/theme-functions.php');

require_once(CMSMS_FUNCTION . '/theme-fonts.php');

require_once(CMSMS_FUNCTION . '/theme-colors-primary.php');

require_once(CMSMS_FUNCTION . '/theme-colors-secondary.php');

require_once(CMSMS_FUNCTION . '/template-functions.php');

require_once(CMSMS_FUNCTION . '/template-functions-post.php');

require_once(CMSMS_FUNCTION . '/template-functions-project.php');

require_once(CMSMS_FUNCTION . '/template-functions-profile.php');

require_once(CMSMS_FUNCTION . '/template-functions-shortcodes.php');

require_once(CMSMS_FUNCTION . '/template-functions-widgets.php');


if (class_exists('Cmsms_Content_Composer')) {
	require_once(CMSMS_COMPOSER . '/filters/cmsms-c-c-atts-filters.php');
}


// Woocommerce functions
if (CMSMS_WOOCOMMERCE) {
	require_once(get_template_directory() . '/woocommerce/cmsms-woo-functions.php');
}



// Load Theme Local File
if (!function_exists('cmsmasters_load_theme_textdomain')) {
	function cmsmasters_load_theme_textdomain() {
		load_theme_textdomain('interior-design', CMSMS_FRAMEWORK . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'cmsmasters_load_theme_textdomain')) {
	add_action('after_setup_theme', 'cmsmasters_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('cmsmasters_theme_activation')) {
	function cmsmasters_theme_activation() {
		if (get_option('cmsms_active_theme') != CMSMS_SHORTNAME) {
			add_option('cmsms_active_theme', CMSMS_SHORTNAME, '', 'yes');
			
			
			cmsmasters_add_global_options();
			
			
			cmsmasters_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsms-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'cmsmasters_theme_activation');



// Framework Deactivation
if (!function_exists('cmsmasters_theme_deactivation')) {
	function cmsmasters_theme_deactivation() {
		delete_option('cmsms_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'cmsmasters_theme_deactivation')) {
	add_action('switch_theme', 'cmsmasters_theme_deactivation');
}


// Theme Settings Single Posts Default Values
if (!function_exists('cmsms_theme_settings_single_defaults')) {

function cmsms_theme_settings_single_defaults() {
	$settings = array( 
		'post' => array( 
			CMSMS_SHORTNAME . '_blog_post_layout' => 		'r_sidebar', 
			CMSMS_SHORTNAME . '_blog_post_title' => 		1, 
			CMSMS_SHORTNAME . '_blog_post_date' => 			1, 
			CMSMS_SHORTNAME . '_blog_post_cat' => 			1, 
			CMSMS_SHORTNAME . '_blog_post_author' => 		1, 
			CMSMS_SHORTNAME . '_blog_post_comment' => 		1, 
			CMSMS_SHORTNAME . '_blog_post_tag' => 			1, 
			CMSMS_SHORTNAME . '_blog_post_like' => 			1, 
			CMSMS_SHORTNAME . '_blog_post_nav_box' => 		1, 
			CMSMS_SHORTNAME . '_blog_post_share_box' => 	1, 
			CMSMS_SHORTNAME . '_blog_post_author_box' => 	1, 
			CMSMS_SHORTNAME . '_blog_more_posts_box' => 	'related', 
			CMSMS_SHORTNAME . '_blog_more_posts_count' => 	'10', 
			CMSMS_SHORTNAME . '_blog_more_posts_pause' => 	'10' 
		), 
		'project' => array( 
			CMSMS_SHORTNAME . '_portfolio_project_title' => 			1, 
			CMSMS_SHORTNAME . '_portfolio_project_details_title' => 	esc_html__('Project details', 'interior-design'), 
			CMSMS_SHORTNAME . '_portfolio_project_date' => 				1, 
			CMSMS_SHORTNAME . '_portfolio_project_cat' => 				1, 
			CMSMS_SHORTNAME . '_portfolio_project_author' => 			1, 
			CMSMS_SHORTNAME . '_portfolio_project_comment' => 			0, 
			CMSMS_SHORTNAME . '_portfolio_project_tag' => 				0, 
			CMSMS_SHORTNAME . '_portfolio_project_like' => 				1, 
			CMSMS_SHORTNAME . '_portfolio_project_link' => 				0, 
			CMSMS_SHORTNAME . '_portfolio_project_share_box' => 		1, 
			CMSMS_SHORTNAME . '_portfolio_project_nav_box' => 			1, 
			CMSMS_SHORTNAME . '_portfolio_project_author_box' => 		1, 
			CMSMS_SHORTNAME . '_portfolio_more_projects_box' => 		'related', 
			CMSMS_SHORTNAME . '_portfolio_more_projects_count' => 		'10', 
			CMSMS_SHORTNAME . '_portfolio_more_projects_pause' => 		'10', 
			CMSMS_SHORTNAME . '_portfolio_project_slug' => 				'project' 
		), 
		'profile' => array( 
			CMSMS_SHORTNAME . '_profile_post_title' => 			1, 
			CMSMS_SHORTNAME . '_profile_post_details_title' => 	esc_html__('Profile details', 'interior-design'), 
			CMSMS_SHORTNAME . '_profile_post_cat' => 			1, 
			CMSMS_SHORTNAME . '_profile_post_comment' => 		1, 
			CMSMS_SHORTNAME . '_profile_post_like' => 			1, 
			CMSMS_SHORTNAME . '_profile_post_nav_box' => 		1, 
			CMSMS_SHORTNAME . '_profile_post_share_box' => 		1, 
			CMSMS_SHORTNAME . '_profile_post_slug' => 			'profile' 
		) 
	);
	
	
	return $settings;
	}

}
