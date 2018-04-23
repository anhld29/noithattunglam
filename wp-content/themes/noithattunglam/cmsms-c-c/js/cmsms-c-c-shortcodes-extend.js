/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Visual Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */


/**
 * Quotes Extend
 */

var quotes_new_fields = {};


for (var id in cmsmsShortcodes.cmsms_quotes.fields) {
	if (id === 'mode') {
		quotes_new_fields[id] = cmsmsShortcodes.cmsms_quotes.fields[id];
		
		
		quotes_new_fields['type'] = { 
			type : 		'radio', 
			title : 	composer_shortcodes_extend.quotes_field_slider_type_title, 
			descr : 	composer_shortcodes_extend.quotes_field_slider_type_descr, 
			def : 		'box', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'box' : 	composer_shortcodes_extend.quotes_field_type_choice_box, 
						'center' : 	composer_shortcodes_extend.quotes_field_type_choice_center 
			}, 
			depend : 	'mode:slider' 
		};
	} else {
		quotes_new_fields[id] = cmsmsShortcodes.cmsms_quotes.fields[id];
	}
}


cmsmsShortcodes.cmsms_quotes.fields = quotes_new_fields;



/**
 * Heading Extend
 */

var heading_new_fields = {};


for (var id in cmsmsShortcodes.cmsms_heading.fields) {
	if (id === 'font_weight') {
		heading_new_fields['tablet_check'] = { 
			type : 		'checkbox', 
			title : 	composer_shortcodes_extend.heading_tablet_check, 
			descr : 	'', 
			def : 		'false', 
			required : 	false, 
			width : 	'half',  
			choises : { 
				'true' : cmsms_shortcodes.choice_enable 
			} 
		};
		heading_new_fields['tablet_font_size'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.heading_tablet_font_size, 
			descr : 	"<span>" + cmsms_shortcodes.note + ' ' + cmsms_shortcodes.size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'tablet_check:true' 
		};
		heading_new_fields['tablet_line_height'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.heading_tablet_line_height, 
			descr : 	"<span>" + cmsms_shortcodes.note + ' ' + cmsms_shortcodes.size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'tablet_check:true' 
		};
		
		heading_new_fields[id] = cmsmsShortcodes.cmsms_heading.fields[id];
	} else {
		heading_new_fields[id] = cmsmsShortcodes.cmsms_heading.fields[id];
	}
}


cmsmsShortcodes.cmsms_heading.fields = heading_new_fields;



/**
 * Posts Slider Extend
 */

var posts_slider_new_fields = {};


for (var id in cmsmsShortcodes.cmsms_posts_slider.fields) {
	if (id === 'pause') {
		posts_slider_new_fields[id] = cmsmsShortcodes.cmsms_posts_slider.fields[id];
		
		
		posts_slider_new_fields['slides_control'] = { 
			type : 		'checkbox', 
			title : 	cmsms_shortcodes.clients_field_slides_control_title, 
			descr : 	'', 
			def : 		'true', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'true' : 	cmsms_shortcodes.choice_enable 
			}, 
			depend : 	'post_type:project' 
		};
		
		posts_slider_new_fields['arrow_control'] = { 
			type : 		'checkbox', 
			title : 	cmsms_shortcodes.clients_field_arrow_control_title, 
			descr : 	'', 
			def : 		'true', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'true' : 	cmsms_shortcodes.choice_enable 
			}, 
			depend : 	'post_type:project' 
		};
	} else {
		posts_slider_new_fields[id] = cmsmsShortcodes.cmsms_posts_slider.fields[id];
	}
}


cmsmsShortcodes.cmsms_posts_slider.fields = posts_slider_new_fields;



/**
 * Portfolio Extend
 */
 
var cmsms_portfolio_new_fields = {};

for (var id in cmsmsShortcodes.cmsms_portfolio.fields) {
	if (id === 'filter_text') {
		delete cmsmsShortcodes.cmsms_portfolio.fields[id];
	} else {
		cmsms_portfolio_new_fields[id] = cmsmsShortcodes.cmsms_portfolio.fields[id];
	}
}


cmsmsShortcodes.cmsms_portfolio.fields = cmsms_portfolio_new_fields;



/**
 * Counter Extend
 */

var counter_new_fields = {};


for (var id in cmsmsMultipleShortcodes.cmsms_counter.fields) {
	if (id === 'subtitle') {
		counter_new_fields['title_custom_check'] = { 
			type : 		'checkbox', 
			title : 	composer_shortcodes_extend.title_custom_check, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half',  
			choises : { 
				'true' : cmsms_shortcodes.choice_enable 
			} 
		};
		
		counter_new_fields['title_font_family'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.counter_title_family, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsms_composer_fonts(), 
			depend : 	'title_custom_check:true' 
		};
		
		counter_new_fields['title_font_size'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.counter_title_font_size, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'title_custom_check:true'  
		};
		
		counter_new_fields['title_line_height'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.counter_title_line_height, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'title_custom_check:true'  
		};
		
		counter_new_fields['title_font_weight'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.counter_title_font_weight, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsms_composer_font_weight(), 
			depend : 	'title_custom_check:true'  
		};
		
		counter_new_fields['title_font_style'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.counter_title_font_style, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsms_composer_font_style(), 
			depend : 	'title_custom_check:true' 
		};
		
		counter_new_fields['title_font_color'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.counter_title_color, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			depend : 	'title_custom_check:true' 
		}; 
		
		counter_new_fields[id] = cmsmsMultipleShortcodes.cmsms_counter.fields[id];
	} else if (id === 'color') {
		counter_new_fields['counter_custom_check'] = { 
			type : 		'checkbox', 
			title : 	composer_shortcodes_extend.counter_custom_check, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half',  
			choises : { 
				'true' : cmsms_shortcodes.choice_enable 
			} 
		};
		
		counter_new_fields['counter_font_family'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.counter_family, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsms_composer_fonts(), 
			depend : 	'counter_custom_check:true' 
		};
		
		counter_new_fields['counter_font_size'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.counter_font_size, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'counter_custom_check:true'  
		};
		
		counter_new_fields['counter_line_height'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.counter_line_height, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'counter_custom_check:true'  
		};
		
		counter_new_fields['counter_font_weight'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.counter_font_weight, 
			descr : 	'', 
			def : 		'normal', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsms_composer_font_weight(), 
			depend : 	'counter_custom_check:true'  
		};
		
		cmsmsMultipleShortcodes.cmsms_counter.fields[id]['depend'] = 'counter_custom_check:true';
		
		counter_new_fields[id] = cmsmsMultipleShortcodes.cmsms_counter.fields[id];
	} else {
		counter_new_fields[id] = cmsmsMultipleShortcodes.cmsms_counter.fields[id];
	}
}


cmsmsMultipleShortcodes.cmsms_counter.fields = counter_new_fields;



/**
 * Blog Extend
 */
 
var cmsms_blog_new_fields = {};

for (var id in cmsmsShortcodes.cmsms_blog.fields) {
	if (id === 'filter_text') {
		delete cmsmsShortcodes.cmsms_blog.fields[id];
	} else {
		cmsms_blog_new_fields[id] = cmsmsShortcodes.cmsms_blog.fields[id];
	}
}


cmsmsShortcodes.cmsms_blog.fields = cmsms_blog_new_fields;

