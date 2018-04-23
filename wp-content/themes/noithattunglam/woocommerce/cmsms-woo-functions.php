<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.9
 * 
 * Website WooCommerce Functions
 * Created by CMSMasters
 * 
 */


/* Woocommerce Dynamic Cart */
function cmsmasters_woocommerce_cart_dropdown() {
	global $woocommerce;
	
	$cart_link = wc_get_cart_url();
	
	$output = '<div class="cmsms_dynamic_cart">' .  
		'<a href="' . esc_url($cart_link) . '" class="cmsms_dynamic_cart_button">' .
			'<span class="count cmsms-icon-custom-bag">' . esc_html($woocommerce->cart->get_cart_contents_count()) . '</span>' . 
		'</a>' . 
		'<div class="widget_shopping_cart_content"></div>' . 
	'</div>';
	
	
	echo $output;
}


/* WooCommerce Dynamic cart count update after ajax */
function cmsmasters_woocommerce_header_add_to_cart_count( $dynamic_count ) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<span class="count cmsms-icon-custom-bag"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
	<?php
	
	$dynamic_count['.cmsms_dynamic_cart span'] = ob_get_clean();
	
	return $dynamic_count;
}

add_filter('add_to_cart_fragments', 'cmsmasters_woocommerce_header_add_to_cart_count');


/* Woocommerce Add to Cart Button */
function cmsmasters_woocommerce_add_to_cart_button() {
	global $woocommerce, 
		$product;
	
	
	if ( 
		$product->is_purchasable() && 
		$product->is_type( 'simple' ) && 
		$product->is_in_stock() 
	) {
		echo '<a href="' . esc_url($product->add_to_cart_url()) . '" data-product_id="' . esc_attr($product->get_id()) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="button add_to_cart_button cmsms_add_to_cart_button ajax_add_to_cart product_type_simple cmsms-icon-custom-bag" title="' . esc_attr__('Add to Cart', 'interior-design') . '">' . 
			'<span>' . esc_html__('Add to Cart', 'interior-design') . '</span>' . 
		'</a>' . 
		'<a href="' . esc_url(wc_get_cart_url()) . '" class="button added_to_cart wc-forward cmsms_theme_icon_check" title="' . esc_attr__('View Cart', 'interior-design') . '">' . 
			'<span>' . esc_html__('View Cart', 'interior-design') . '</span>' . 
		'</a>';
	}
	
	
	echo '<a href="' . esc_url(get_permalink($product->get_id())) . '" data-product_id="' . esc_attr($product->get_id()) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="button cmsms_details_button cmsms_theme_icon_details">' . 
		'<span>' . esc_html__('Show Details', 'interior-design') . '</span>' . 
	'</a>';
}


/* Woocommerce Rating */
function cmsmasters_woocommerce_rating($icon_trans = '', $icon_color = '', $in_review = false, $comment_id = '', $show = true) {
	global $product;
	
	
	if (get_option( 'woocommerce_enable_review_rating') === 'no') {
		return;
	}
	
	
	$rating = (($in_review) ? intval(get_comment_meta($comment_id, 'rating', true)) : ($product->get_average_rating() ? $product->get_average_rating() : '0'));
	
	$itemprop = $in_review ? 'reviewRating' : 'aggregateRating';
	
	$itemtype = $in_review ? 'Rating' : 'AggregateRating';
	
	
	$out = "
<div class=\"cmsms_star_rating\" itemprop=\"{$itemprop}\" itemscope itemtype=\"http://schema.org/{$itemtype}\" title=\"" . sprintf(esc_html__('Rated %s out of 5', 'interior-design'), $rating) . "\">
<div class=\"cmsms_star_trans_wrap\">
	<span class=\"{$icon_trans} cmsms_star\"></span>
	<span class=\"{$icon_trans} cmsms_star\"></span>
	<span class=\"{$icon_trans} cmsms_star\"></span>
	<span class=\"{$icon_trans} cmsms_star\"></span>
	<span class=\"{$icon_trans} cmsms_star\"></span>
</div>
<div class=\"cmsms_star_color_wrap\" style=\"width:" . (($rating / 5) * 100) . "%\">
	<div class=\"cmsms_star_color_inner\">
		<span class=\"{$icon_color} cmsms_star\"></span>
		<span class=\"{$icon_color} cmsms_star\"></span>
		<span class=\"{$icon_color} cmsms_star\"></span>
		<span class=\"{$icon_color} cmsms_star\"></span>
		<span class=\"{$icon_color} cmsms_star\"></span>
	</div>
</div>
<span class=\"rating dn\"><strong itemprop=\"ratingValue\">" . esc_html($rating) . "</strong> " . esc_html__('out of 5', 'interior-design') . "</span>
</div>
";
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}


add_theme_support('woocommerce');


if (version_compare(WOOCOMMERCE_VERSION, '2.1') >= 0) {
	add_filter('woocommerce_enqueue_styles', '__return_false');
} else {
	define('WOOCOMMERCE_USE_CSS', false);
}

