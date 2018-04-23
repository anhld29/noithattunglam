<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.6
 * 
 * Content Composer Quote Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


global $quote_mode,
	$quote_type,
	$quote_counter,
	$column_count,
	$quote_content,
	$quote_image,
	$quote_name,
	$quote_subtitle,
	$quote_link,
	$quote_website;


$quote_counter++;


if ($content == null || $content == "<br />\n") {
	$quote_content = __('Enter quote text here', 'interior-design');
} else {
	$quote_content = $content;
}


$quote_image = $image;

$quote_name = $name;

$quote_subtitle = $subtitle;

$quote_link = $link;

$quote_website = $website;


$out = '<div class="cmsms_quote' . 
	(($classes != '') ? ' ' . $classes : '') . 
'">' . "\n" . 
	load_template_part('framework/postType/quote/' . $quote_mode . (($quote_mode != 'grid') ? '-' . $quote_type : '')) . 
'</div>' . "\n";


if ($quote_mode == 'grid' && (($quote_counter % $column_count) == 0)) {
	$out .= '</div><div class="quotes_list">' . "\n";
}

