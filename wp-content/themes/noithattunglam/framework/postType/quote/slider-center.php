<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.6
 * 
 * Quotes Centered Slider Format Template
 * Created by CMSMasters
 * 
 */


global $quote_content,
	$quote_image,
	$quote_name,
	$quote_subtitle,
	$quote_link,
	$quote_website;

?>

<!--_________________________ Start Quotes Centered Slider Article _________________________ -->

<article class="cmsms_quote_inner">
<?php
	if ($quote_image != '') {
		echo '<figure class="quote_image">' . "\n" . 
			wp_get_attachment_image(strstr($quote_image, '|', true), 'thumbnail') . 
		'</figure>' . "\n";
	} else {
		echo '<span class="cmsms_centered_quote">' . '</span>' . "\n";
	}
	
	
	echo cmsms_divpdel('<div class="quote_content">' . "\n" . 
		do_shortcode(wpautop($quote_content)) . 
	'</div>' . "\n");
?>
	<div class="wrap_quote_title">
	<?php
		if ($quote_name != '') {
			echo '<h6 class="quote_title">' . esc_html($quote_name) . '</h6>' . "\n";
		}
		
		
		if ($quote_subtitle != '') {
			echo '<span class="quote_subtitle">' . esc_html($quote_subtitle) . '</span>' . "\n";
		}
		
		
		if ($quote_subtitle != '' && ($quote_link != '' || $quote_website != '')) {
			echo ' - ';
		}
		
		
		if ($quote_link != '' && $quote_website != '') {
			echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . esc_html($quote_website) . '</a>' . "\n";
		} elseif ($quote_link == '' && $quote_website != '') {
			echo '<span class="quote_site">' . esc_html($quote_website) . '</span>' . "\n";
		} elseif ($quote_link != '' && $quote_website == '') {
			echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . esc_html($quote_link) . '</a>' . "\n";
		}
	?>
	</div>
</article>
<!--_________________________ Finish Quotes Centered Slider Article _________________________ -->

