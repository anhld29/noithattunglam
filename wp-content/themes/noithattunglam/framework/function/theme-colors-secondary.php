<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.9
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function cmsmasters_theme_colors_secondary() {
	$cmsms_option = cmsmasters_get_global_options();
	
	
	$cmsms_color_schemes = cmsms_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.0
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsms_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsms_color_scheme_{$scheme} " : '');
		
		
		if (CMSMS_WOOCOMMERCE) {
			$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_cat, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_cat a, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_info .price del, 
	{$rule}.cmsms_single_product .cmsms_product_right_column .price del, 
	{$rule}#order_review .shop_table td.product-name, 
	{$rule}#order_review .shop_table td.product-name *, 
	{$rule}.widget_product_categories ul li a,
	{$rule}.shop_table.order_details td.product-name, 
	{$rule}.widget_shopping_cart_content .cart_list li .quantity, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.cmsms_single_product .cmsms_product_right_column .product_meta strong, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.woocommerce-info, 
	{$rule}.select2-container--default .select2-selection--single .select2-selection__rendered, 
	{$rule}ul.order_details.bacs_details li strong, 
	{$rule}.woocommerce-message, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.widget_shopping_cart_content .cart_list li a.remove:hover, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_cat a:hover, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_info .price, 
	{$rule}.cmsms_single_product .cmsms_product_right_column .price, 
	{$rule}.required, 
	{$rule}.shop_table .product-name a:hover, 
	{$rule}.shop_table td.product-subtotal, 
	{$rule}.cart_totals table tr.cart-subtotal td, 
	{$rule}.cart_totals table tr.order-total td, 
	{$rule}.cmsms_star_rating .cmsms_star_color_wrap .cmsms_star, 
	{$rule}#order_review .shop_table tr.order-total th, 
	{$rule}#order_review .shop_table tr.order-total td, 
	{$rule}.shop_table.order_details td.product-name a:hover, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.comment-form-rating .stars > span a:hover, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}.product_list_widget li del .amount, 
	{$rule}.widget_shopping_cart_content .cart_list li a:hover, 
	{$rule}.widget_shopping_cart_content .cart_list li .quantity .amount, 
	{$rule}.widget_shopping_cart_content .total .amount, 
	{$rule}.widget .product_list_widget li > a:hover,
	{$rule}.woocommerce-info a:hover, 
	{$rule}.cmsms_dynamic_cart .cmsms_dynamic_cart_button > span.count.cmsms_added_to_cart, 
	{$rule}.woocommerce-shipping-calculator a.shipping-calculator-button:hover,
	{$rule}.comment-form-rating .stars > span a.active, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_add_to_cart_wrap a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.onsale, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_footer > a:hover, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_footer > a.cmsms_add_to_cart_button.loading, 
	{$rule}.widget_shopping_cart_content .buttons .button:first-child:hover, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider_amount .button:hover, 
	{$rule}.shop_table td.actions .button, 
	{$rule}.shipping-calculator-form .button, 
	{$rule}#order_review #payment .place-order .button, 
	{$rule}.woocommerce .checkout_coupon .button, 
	{$rule}.widget_product_categories ul li a:hover:before, 
	{$rule}.widget_product_categories ul li.current-cat a:before,
	{$rule}.shop_table td.actions .button[name=update_cart]:hover {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.select2-container.select2-container--open .select2-selection--single {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.widget_shopping_cart_content .cart_list li a.remove, 
	{$rule}.cmsms_single_product .cmsms_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta time {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_footer > a {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsms_single_product .cmsms_woo_tabs .shop_attributes th,
	{$rule}.shop_table td.product-remove .remove:hover, 
	{$rule}.shop_table td.product-name, 
	{$rule}.shop_table td.product-name a, 
	{$rule}#order_review .shop_table thead tr th, 
	{$rule}.quantity .text, 
	{$rule}.cart_totals table tr.cart-subtotal th, 
	{$rule}.cart_totals table tr.order-total th, 
	{$rule}#order_review .shop_table tr.cart-subtotal th, 
	{$rule}#order_review .shop_table tr.cart-subtotal td, 
	{$rule}dl.customer_details dt, 
	{$rule}ul.order_details li > span, 
	{$rule}.shop_table.order_details thead tr:first-child th, 
	{$rule}.shop_table.order_details thead tr:first-child td, 
	{$rule}.shop_table.order_details tfoot tr:first-child th, 
	{$rule}.shop_table.order_details tfoot tr:first-child td, 
	{$rule}#order_review #payment .payment_methods label, 
	{$rule}.widget_shopping_cart_content .cart_list li a, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_head .price ins .amount, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_head .price > .amount, 
	{$rule}.widget_shopping_cart_content .total strong, 
	{$rule}.widget_product_categories li.current-cat a,
	{$rule}.cmsms_added_product_info .cmsms_added_product_info_text, 
	{$rule}.widget_product_categories ul li a:hover,
	{$rule}.widget_shopping_cart dl dt,
	{$rule}.search_bar_wrap .search_button button[type=submit]:before, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_img a .cmsms_product_placeholder:before, 
	{$rule}.widget .product_list_widget li > a, 
	{$rule}.woocommerce-shipping-calculator a.shipping-calculator-button, 
	{$rule}.shop_table thead tr th, 
	{$rule}.shop_table.customer_details th, 
	{$rule}.woocommerce-info a, 
	{$rule}ul.order_details.bacs_details li, 
	{$rule}.woocommerce-message a, 
	{$rule}.woocommerce-error li {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_footer > a.cmsms_details_button:hover, 
	{$rule}.input-checkbox + label:after, 
	{$rule}.input-radio + label:after, 
	{$rule}input.shipping_method + label:after, 
	{$rule}.out-of-stock, 
	{$rule}.shop_table td.actions .button:hover, 
	{$rule}.shipping-calculator-form .button:hover,  
	{$rule}#order_review #payment .place-order .button:hover, 
	{$rule}.woocommerce .checkout_coupon .button:hover,
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_add_to_cart_wrap a, 
	{$rule}.shop_table td.actions .button[name=update_cart], 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle, 
	{$rule}.cmsms_single_product .cmsms_product_images .cmsms_product_thumbs .cmsms_product_thumb:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.onsale, 
	{$rule}.shop_table td.actions .button, 
	{$rule}.shipping-calculator-form .button,
	{$rule}.woocommerce .checkout_coupon .button, 
	{$rule}#order_review #payment .place-order .button, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_add_to_cart_wrap a, 
	{$rule}.out-of-stock {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.quantity .text, 
	{$rule}#order_review #payment .payment_methods .payment_box, 
	{$rule}.shop_table td.product-remove .remove, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.shop_table tr td,  
	{$rule}.checkout #order_review #payment, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider_amount .button, 
	{$rule}.select2-container.select2-drop-above .select2-choice {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#order_review #payment .payment_methods .payment_box:after {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_footer > a, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_footer > a:hover, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_footer > a:hover:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.product .cmsms_product_right_column .buttons_added .minus, 
	{$rule}.product .cmsms_product_right_column .buttons_added .plus, 
	{$rule}.product .cmsms_product_right_column .buttons_added .text, 
	{$rule}.product .cmsms_product_right_column .buttons_added .minus:hover, 
	{$rule}.product .cmsms_product_right_column .buttons_added .plus:hover, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.shop_table td.actions, 
	{$rule}#order_review .shop_table thead tr th, 
	{$rule}.input-checkbox + label:before,
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before,
	{$rule}.shop_table.order_details thead tr:first-child th, 
	{$rule}.shop_table.order_details thead tr:first-child td, 
	{$rule}ul.order_details li, 
	{$rule}.cart_totals table tr.cart-subtotal, 
	{$rule}.cart_totals table tr.order-total, 
	{$rule}.cmsms_added_product_info, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_img a .cmsms_product_placeholder, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.shop_table.cart thead tr th, 
	{$rule}#order_review .shop_table .cart-subtotal th, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}#order_review .shop_table .cart-subtotal td, 
	{$rule}#order_review .shop_table .order-total td, 
	{$rule}.shop_table.order_details tfoot tr:first-child td, 
	{$rule}.shop_table.order_details tfoot tr:first-child th, 
	{$rule}#order_review .shop_table .order-total th, 
	{$rule}.shop_table.customer_details tr th, 
	{$rule}.shop_table.customer_details tr td, 
	{$rule}.shop_table.shop_table_responsive.my_account_orders thead, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.woocommerce-error {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsms_dynamic_cart .widget_shopping_cart_content:before {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsms_added_product_info:before {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsms_star_rating .cmsms_star, 
	{$rule}.shop_table td.product-remove .remove, 
	{$rule}.comment-form-rating .stars > span {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider,
	{$rule}.widget_product_categories ul li a:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_products .product .product_outer .product_inner .cmsms_product_footer, 
	{$rule}.cmsms_single_product .cmsms_woo_tabs .shop_attributes th, 
	{$rule}.cmsms_single_product .cmsms_woo_tabs .shop_attributes td, 
	{$rule}.cmsms_single_product .cmsms_woo_tabs #reviews #comments .commentlist, 
	{$rule}.cmsms_single_product .cmsms_woo_tabs #reviews #comments .commentlist .comment .comment_container, 
	{$rule}.shop_table th, 
	{$rule}.shop_table td, 
	{$rule}.select2-container .select2-selection--single, 
	{$rule}ul.order_details li, 
	{$rule}ul.order_details li > span, 
	{$rule}.widget_shopping_cart_content .cart_list li, 
	{$rule}.product_list_widget li, 
	{$rule}.shop_table td.product-remove .remove, 
	{$rule}.checkout #order_review #payment, 
	{$rule}#order_review #payment .payment_methods .payment_box, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.input-checkbox + label:before,
	{$rule}.input-radio + label:before, 
	{$rule}.cart_totals table tr.shipping td,  
	{$rule}.cart_totals table tr.cart-discount td, 
	{$rule}input.shipping_method + label:before, 
	{$rule}.shop_table.cart .cart_item {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}#order_review #payment .payment_methods .payment_box:before {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/


";
		}
	}
	
	
	$custom_css .= "
/***************** Start Header Color Scheme Rules ******************/

	/* Start Header Content Color */
	.header_mid,
	.header_mid_inner .social_wrap a, 
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity," : '') . "
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity span," : '') . "
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content .total strong," : '') . "
	.header_mid_inner .search_wrap .search_bar_wrap button:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_color']) . "
	}
	
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button" : '') . " {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_color']) . "
	}
	
	/* Finish Header Content Color */
	
	
	/* Start Header Primary Color */
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .cmsms_dynamic_cart_button," : '') . "
	.header_mid a,
	.header_mid h1 a:hover,
	.header_mid h2 a:hover,
	.header_mid h3 a:hover,
	.header_mid h4 a:hover,
	.header_mid h5 a:hover,
	.header_mid h6 a:hover,
	.header_mid .color_2,
	.header_mid h1,
	.header_mid h2,
	.header_mid h3,
	.header_mid h4,
	.header_mid h5,
	.header_mid h6,
	.header_mid h1 a,
	.header_mid h2 a,
	.header_mid h3 a,
	.header_mid h4 a,
	.header_mid h5 a,
	.header_mid h6 a,
	.header_mid #navigation > li > a,
	.header_mid_inner .social_wrap a:hover,
	.header_mid_inner .header_right_wrap p.search_button button:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
	}
	
	.cmsms_nav_but, 
	.header_mid .responsive_nav:before, 
	.header_mid .responsive_nav:after,
	.cmsms_nav_but:after, 
	.cmsms_nav_but:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
	}
	
	.header_mid .button:hover,
	.header_mid .cmsms_button:hover {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
	}
	
	.header_mid .responsive_nav, 
	.header_mid input[type=text]:focus,
	.header_mid input[type=email]:focus,
	.header_mid input[type=password]:focus,
	.header_mid input[type=search]:focus,
	.header_mid textarea:focus {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
	}
	/* Finish Header Primary Color */
	
	
	/* Start Header Rollover Color */
	.header_mid a:hover,
	.header_mid #navigation > li.current_page_parent > a,
	.header_mid #navigation > li.current_page_ancestor > a,
	.header_mid #navigation > li.current-menu-ancestor > a,
	.header_mid_inner .header_right_wrap p.search_button button:hover:before,
	.header_mid #navigation > li > a:hover,
	.header_mid #navigation > li.current-menu-item > a,
	.header_mid #navigation > li.current_page_item > a,
	.header_mid #navigation > li.menu-item-highlight > a,
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .cmsms_dynamic_cart_button:hover," : '') . "
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li a:hover," : '') . "
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content .total .amount," : '') . "
	.header_mid_inner .header_right_wrap .search_wrap.search_opened p.search_button button:hover:before,
	.header_mid #navigation > li > a > span:before	{
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
	}
	
	.header_mid .responsive_nav:hover:before,
	.header_mid .responsive_nav.active:before,
	.header_mid .responsive_nav.active:after,
	.header_mid .responsive_nav:hover:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
	}
	
	.header_mid .responsive_nav.active, 
	.header_mid .responsive_nav:hover, 
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button:hover" : '') . " {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
	}
	
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
		}
	}
	
		
	@media only screen and (max-width: 1024px) {
		#header .header_mid #navigation > li > a:hover,
		#header .header_mid #navigation > li.current-menu-item > a,
		#header .header_mid #navigation > li.current_page_item > a,
		#header .header_mid #navigation > li.current_page_parent > a,
		#header .header_mid #navigation > li.current-menu-ancestor > a,
		#header .header_mid #navigation > li.current_page_ancestor > a,
		#header .header_mid #navigation > li.menu-item-highlight > a,
		#header .header_mid #navigation > li > a:hover > span > span.nav_subtitle,
		#header .header_mid #navigation > li.current-menu-item > a > span > span.nav_subtitle,
		#header .header_mid #navigation > li.current_page_item > a > span > span.nav_subtitle,
		#header .header_mid #navigation > li.menu-item-highlight > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
		}
		

		#header .header_mid_inner #navigation > li > span.cmsms_cross:before,
		#header .header_mid_inner #navigation > li > span.cmsms_cross:after,
		#header .header_mid_inner #navigation li li.current-menu-ancestor > span.cmsms_cross.cmsms_opened_list:before,
		#header .header_mid_inner #navigation li li.current-menu-item > span.cmsms_cross.cmsms_opened_list:before,
		#header .header_mid_inner #navigation li li.current-menu-ancestor > span.cmsms_cross.cmsms_opened_list:after,
		#header .header_mid_inner #navigation li li.current-menu-item > span.cmsms_cross.cmsms_opened_list:after,
		#header .header_mid_inner #navigation li li.current-menu-ancestor > span.cmsms_cross:before,
		#header .header_mid_inner #navigation li li.current-menu-item > span.cmsms_cross:before,
		#header .header_mid_inner #navigation li li.current-menu-ancestor > span.cmsms_cross:after,
		#header .header_mid_inner #navigation > li li a:hover + .cmsms_cross:before,
		#header .header_mid_inner #navigation > li li a:hover + .cmsms_cross:after,
		#header .header_mid_inner #navigation > li li .cmsms_cross:hover:after,
		#header .header_mid_inner #navigation > li li .cmsms_cross:hover:before,
		#header .header_mid_inner #navigation li li.current-menu-item > span.cmsms_cross:after {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
		}
		
		#header .header_mid_inner #navigation > li.current_page_ancestor > span.cmsms_cross:before,
		#header .header_mid_inner #navigation > li.current_page_ancestor > span.cmsms_cross.cmsms_opened_list:before,
		#header .header_mid_inner #navigation > li.current-menu-item > span.cmsms_cross.cmsms_opened_list:before,
		#header .header_mid_inner #navigation > li.current_page_ancestor > span.cmsms_cross:after,
		#header .header_mid_inner #navigation > li.current-menu-ancestor > span.cmsms_cross:after,
		#header .header_mid_inner #navigation > li.current-menu-ancestor > span.cmsms_cross:before,
		#header .header_mid_inner #navigation > li > a:hover + .cmsms_cross:before,
		#header .header_mid_inner #navigation > li > a:hover + .cmsms_cross:after,
		#header .header_mid_inner #navigation > li > .cmsms_cross:hover:before,
		#header .header_mid_inner #navigation > li > .cmsms_cross:hover:after,
		#header .header_mid_inner #navigation > li.current_page_ancestor > span.cmsms_cross.cmsms_opened_list:after,
		#header .header_mid_inner #navigation > li.current-menu-item > span.cmsms_cross.cmsms_opened_list:after,
		#header .header_mid_inner #navigation > li.current-menu-item > span.cmsms_cross:before,
		#header .header_mid_inner #navigation > li.current-menu-item > span.cmsms_cross:after {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
		}
		
		#header .header_mid #navigation > li > a,
		#header .header_mid #navigation ul li > a:hover,
		#header .header_mid #navigation ul li.current-menu-item > a,
		#header .header_mid #navigation ul li.current_page_item > a,
		#header .header_mid #navigation ul li.current_page_ancestor > a,
		#header .header_mid #navigation ul li.current-menu-ancestor > a { 
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
		}
		
		.header_mid #navigation ul li .cmsms_cross:before,
		.header_mid #navigation ul li .cmsms_cross:after {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_link']) . "			
		}
	}
	
	.header_mid .button,
	.header_mid .cmsms_button,
	.header_mid #navigation > li > a[data-tag]:before,
	.header_mid #navigation ul li > a[data-tag]:before,
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button:hover," : '') . "
	.header_mid #navigation > li.menu-item-highlight > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li:hover > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
		}
	}
	
	/* Finish Header Rollover Color */
		
		
	/* Start Rollover Background Color */
		" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button:hover," : '') . "
		" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li a" : '') . " {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg']) . "
		}
	
	/* Finish Rollover Background Color */
	
	
	/* Start Header Subtitle Color */
	.header_mid #navigation > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_subtitle']) . "
	}
	/* Finish Header Subtitle Color */
	
	
	/* Start Header Background Color */
	.header_mid .cmsms_button,
	.header_mid .cmsms_button:hover,
	.header_mid_inner .header_right_wrap .search_wrap.search_opened p.search_button button:before,
	.header_mid #navigation > li > a[data-tag]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bg']) . "
	}
	
	.header_mid input[type=text]:focus,
	.header_mid input[type=number]:focus,
	.header_mid input[type=email]:focus,
	.header_mid input[type=password]:focus,
	.header_mid input[type=search]:focus,
	.header_mid textarea:focus,
	#header {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bg']) . "
	}
	/* Finish Header Background Color */
	
	/* Start Header Dropdown Link Color */
	.header_mid #navigation ul li a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_link']) . "
	}
	/* Finish Header Dropdown Link Color */
	
	
	/* Start Header Dropdown Rollover Color */
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .buttons a," : '') . "
	.header_mid #navigation ul li > a:hover,
	.header_mid #navigation ul li.current-menu-item > a,
	.header_mid #navigation ul li.current_page_item > a,
	.header_mid #navigation > li li.menu-item-highlight > a,
	.header_mid #navigation > li li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega li > a:hover,
	.header_mid #navigation > li.menu-item-mega li li > a:hover,
	.header_mid #navigation > li.menu-item-mega > ul > li > a,
	.header_mid #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega > ul > li > a,
		.header_mid #navigation ul li > a:hover,
		.header_mid #navigation > li li.menu-item-highlight:hover > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
 
	.header_mid #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_mid #navigation > li:not(.menu-item-mega) ul li.menu-item-highlight > a[data-tag]:before,
	.header_mid #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before, 
	.header_mid #navigation > li.menu-item-mega li li.menu-item-highlight > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
	/* Finish Header Dropdown Rollover Color */
	
	
	/* Start Header Dropdown Subtitle Color */
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_subtitle']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_subtitle']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_subtitle']) . "
		}
	}
	/* Finish Header Dropdown Subtitle Color */
	
	
	/* Start Header Dropdown Background Color */
	.header_mid #navigation ul li > a[data-tag]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a[data-tag]:before {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
		}
	}
	
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content," : '') . "
	" . ((CMSMS_WOOCOMMERCE) ? ".header_mid .cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button," : '') . "
	.header_mid input[type=text],
	.header_mid input[type=number],
	.header_mid input[type=email],
	.header_mid input[type=password],
	.header_mid input[type=search],
	.header_mid input[type=submit],
	.header_mid button,
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.header_mid #navigation ul,
	.header_mid #navigation > li.menu-item-mega li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
		}
	}
	/* Finish Header Dropdown Background Color */
	
	
	/* Start Header Dropdown Rollover Background Color */
	.header_mid #navigation ul li > a:hover,
	.header_mid #navigation ul li.current-menu-item > a,
	.header_mid #navigation ul li.current_page_item > a,
	.header_mid #navigation ul li.menu-item-highlight > a,
	.header_mid #navigation > li.menu-item-mega li li.current-menu-item > a,
	.header_mid #navigation > li.menu-item-mega li li.current_page_item > a,
	.header_mid #navigation > li.menu-item-mega li.menu-item-highlight > a {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li.current-menu-item > a,
		.header_mid #navigation > li.current_page_item > a, 
		.header_mid #navigation > li.menu-item-mega > div > ul > li.current-menu-item > a {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation ul li > a:hover {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg']) . "
		}
	}
	/* Finish Header Dropdown Rollover Background Color */
	
	
	/* Start Header Custom Rules */
	.header_mid ::selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bg']) . "
	}
	
	.header_mid ::-moz-selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bg']) . "
	}
	/* Finish Header Custom Rules */

/***************** Finish Header Color Scheme Rules ******************/



/***************** Start Header Side Color Scheme Rules ******************/

	/* Start Header Side Content Color */
	.header_side, 
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity," : '') . "
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity span," : '') . "
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content .total strong," : '') . "
	.header_side .social_wrap a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_color']) . "
	}
	
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button" : '') . " {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_color']) . "
	}
	
	.header_side .search_wrap .search_bar_wrap button:before,
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button:hover," : '') . "
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li a," : '') . "
	.header_side .cmsms_dynamic_cart a.cmsms_dynamic_cart_button {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_link']) . "
	}
	
	
	/* Finish Header Side Content Color */
	
	
	/* Start Header Side Primary Color */
	.header_side a,
	.header_side h1 a:hover,
	.header_side h2 a:hover,
	.header_side h3 a:hover,
	.header_side h4 a:hover,
	.header_side h5 a:hover,
	.header_side h6 a:hover,
	.header_side .color_2,
	.header_side h1,
	.header_side h2,
	.header_side h3,
	.header_side h4,
	.header_side h5,
	.header_side h6,
	.header_side h1 a,
	.header_side h2 a,
	.header_side h3 a,
	.header_side h4 a,
	.header_side h5 a,
	.header_side h6 a,
	.header_side .button,
	.header_side .button:hover,
	.header_side .nicescroll-cursors,
	.header_side .social_wrap a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_link']) . "
	}
	
	.header_side .cmsms_button,
	.header_side .button:hover,
	#header .header_side .header_side_inner .header_side_middle_side #navigation > li li a:not([href]):hover + .cmsms_cross:before,
	#header .header_side .header_side_inner .header_side_middle_side #navigation > li li a:not([href]):hover + .cmsms_cross:after,
	.header_side .responsive_nav:before,
	.header_side #navigation > li li .cmsms_cross:hover:after,
	.header_side #navigation > li li .cmsms_cross:hover:before,
	.header_side #navigation > li > .cmsms_cross:before,
	.header_side #navigation > li > .cmsms_cross:after,
	.header_side .responsive_nav:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_link']) . "
	}
	
	.header_side .responsive_nav {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_link']) . "
	}
	
	.header_side input[type=text]:focus,
	.header_side input[type=email]:focus,
	.header_side input[type=password]:focus,
	.header_side input[type=search]:focus,
	.header_side textarea:focus {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
	}
	/* Finish Header Side Primary Color */
	
	
	/* Start Header Side Rollover Color */
	.header_side a:hover,
	.header_side #navigation > li.current-menu-ancestor > a,
	.header_side .search_wrap .search_bar_wrap button:hover:before,
	.header_side #navigation > li > a:hover,
	.header_side #navigation > li.current_page_parent > a,
	.header_side #navigation > li.current_page_ancestor > a,
	.header_side #navigation > li.current-menu-item > a,
	.header_side #navigation > li.current_page_item > a,
	.header_side #navigation > li.menu-item-highlight > a,
	.header_side #navigation > li > a > span:before,
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .cmsms_dynamic_cart_button:hover," : '') . "
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li a:hover," : '') . "
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content .total .amount," : '') . "
	.header_side .cmsms_dynamic_cart a.cmsms_dynamic_cart_button:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_hover']) . "
	}
	
	.header_side #navigation > li > a[data-tag]:before,
	.header_side #navigation > li > .cmsms_cross:hover:after,
	.header_side #navigation > li > .cmsms_cross:hover:before,
	#header .header_side .header_side_inner .header_side_middle_side #navigation > li > a:not([href]):hover + .cmsms_cross:before,
	#header .header_side .header_side_inner .header_side_middle_side #navigation > li > a:not([href]):hover + .cmsms_cross:after,
	.header_side #navigation > li.menu-item-highlight > a[data-tag]:before,
	.header_side .responsive_nav:hover:before,
	.header_side .responsive_nav:hover:after,
	#header .header_side #navigation > li.current-menu-ancestor > .cmsms_cross:before,
	#header .header_side #navigation > li.current-menu-ancestor > .cmsms_cross:after,
	.header_side .responsive_nav.active:before,
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button:hover," : '') . "
	.header_side .responsive_nav.active:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_hover']) . "
	}
	
	.header_side .responsive_nav:hover,
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button:hover," : '') . "
	.header_side .responsive_nav.active {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_side #navigation > li:hover > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_hover']) . "
		}
	}
	/* Finish Header Side Rollover Color */
	
	
	/* Start Header Side Subtitle Color */
	.header_side #navigation > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_subtitle']) . "
	}
	/* Finish Header Side Subtitle Color */
	
	
	/* Start Header Side Background Color */
	.header_side .cmsms_button,
	.header_side .cmsms_button:hover,
	.header_side #navigation > li > a[data-tag]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_bg']) . "
	}
	
	.header_side input[type=text]:focus,
	.header_side input[type=number]:focus,
	.header_side input[type=email]:focus,
	.header_side input[type=password]:focus,
	.header_side input[type=search]:focus,
	.header_side textarea:focus,
	.header_side_inner,
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content," : '') . "
	" . ((CMSMS_WOOCOMMERCE) ? ".header_side .cmsms_dynamic_cart .widget_shopping_cart_content .buttons .button," : '') . "
	#header .header_side .header_side_inner .header_side_top_side,
	#header .header_side .header_side_inner .header_side_bottom_side {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_bg']) . "
	}
	
	/* Finish Header Side Background Color */
	
	
	/* Start Header Side Rollover Background Color */
	.header_side .search_wrap.search_opened .search_bar_wrap, 
	.header_side .search_wrap .search_bar_wrap input[type=text],
	.header_side .search_wrap .search_bar_wrap input[type=text]:focus {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_hover_bg']) . "
	}
	/* Finish Header Side Rollover Background Color */
	
	
	/* Start Header Borders Color */
	.header_side .header_side_top_side  {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_border']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_side #navigation {
			" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_border']) . "
		}
	}
	
	.header_side input[type=text],
	.header_side input[type=number],
	.header_side input[type=email],
	.header_side input[type=password],
	.header_side input[type=seach],
	.header_side input[type=submit],
	.header_side button,
	.header_side textarea,
	.header_side select,
	.header_side option {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_border']) . "
	}
	
	.header_side hr,
	.header_side .cmsms_divider {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_border']) . "
	}
	/* Finish Header Side Borders Color */
	
	
	/* Start Header Side Dropdown Link Color */
	.header_side #navigation ul li a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_link']) . "
	}
	
	.header_side #navigation ul li > a[data-tag]:before,
	.header_side #navigation > li li .cmsms_cross:after,
	.header_side #navigation > li li .cmsms_cross:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_side #navigation > li > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_link']) . "
		}
	}
	/* Finish Header Side Dropdown Link Color */
	
	
	/* Start Header Side Dropdown Rollover Color */
	.header_side #navigation ul li > a:hover,
	.header_side #navigation ul li.current-menu-item > a,
	.header_side #navigation ul li.current_page_item > a,
	.header_side #navigation ul li.current_page_ancestor > a,
	.header_side #navigation ul li.current-menu-ancestor > a,
	.header_side #navigation > li li.menu-item-highlight > a,
	.header_side #navigation > li li.menu-item-highlight > a:hover,
	.header_side #navigation > li.menu-item-mega li > a:hover,
	.header_side #navigation > li.menu-item-mega li li > a:hover,
	.header_side #navigation > li.menu-item-mega > ul > li > a,
	.header_side #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_side #navigation > li > a:hover,
		.header_side #navigation > li.current-menu-item > a,
		.header_side #navigation > li.current_page_item > a,
		.header_side #navigation > li.menu-item-highlight > a,
		.header_side #navigation > li > a:hover > span > span.nav_subtitle,
		.header_side #navigation > li.current-menu-item > a > span > span.nav_subtitle,
		.header_side #navigation > li.current_page_item > a > span > span.nav_subtitle,
		.header_side #navigation > li.menu-item-highlight > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_side #navigation > li.menu-item-mega > ul > li > a,
		.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a,
		.header_side #navigation > li li.menu-item-highlight:hover > a,
		.header_side #navigation > li.menu-item-mega li:hover > a,
		.header_side #navigation > li.menu-item-mega > ul > li:hover > a,
		.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container li:hover > a,
		.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a,
		.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_hover']) . "
		}
	}
	
	.header_side #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_side #navigation ul li.current-menu-item > .cmsms_cross:before,
	.header_side #navigation ul li.current-menu-item > .cmsms_cross:after,
	.header_side #navigation ul li.current_page_item > .cmsms_cross:before,
	.header_side #navigation ul li.current_page_item > .cmsms_cross:after,
	.header_side #navigation ul li.current_page_ancestor > .cmsms_cross:after,
	.header_side #navigation ul li.current_page_ancestor > .cmsms_cross:before,
	.header_side #navigation ul li.current-menu-ancestor > .cmsms_cross:before,
	.header_side #navigation ul li.current-menu-ancestor > .cmsms_cross:after,
	.header_side #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_side #navigation > li:not(.menu-item-mega) ul li.menu-item-highlight > a[data-tag]:before,
	.header_side #navigation > li.menu-item-mega li li:hover > a[data-tag]:hover:before,
	.header_side #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before, 
	.header_side #navigation > li.menu-item-mega li li.menu-item-highlight > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_side #navigation > li > a[data-tag]:hover:before,
		.header_side #navigation > li.current-menu-item > a[data-tag]:before,
		.header_side #navigation > li.current_page_item > a[data-tag]:before,
		.header_side #navigation > li.menu-item-highlight > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_side #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_hover']) . "
		}
	}
	/* Finish Header Side Dropdown Rollover Color */
	
	
	/* Start Header Side Dropdown Subtitle Color */
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_subtitle']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_side #navigation > li > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_subtitle']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_subtitle']) . "
		}
	}
	/* Finish Header Side Dropdown Subtitle Color */
	
	
	/* Start Header Side Dropdown Background Color */
	.header_side #navigation ul li > a[data-tag]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_side #navigation > li > a[data-tag]:before {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_bg']) . "
		}
	}
	
	.header_side input[type=text],
	.header_side input[type=number],
	.header_side input[type=email],
	.header_side input[type=password],
	.header_side input[type=search],
	.header_side input[type=submit],
	.header_side button,
	.header_side textarea,
	.header_side select,
	.header_side option,
	.header_side #navigation ul,
	.header_side #navigation > li.menu-item-mega li > a:hover,
	.header_side #navigation > li.menu-item-mega > div.menu-item-mega-container {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_side #navigation {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_side #navigation > li.menu-item-mega li:hover > a {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_bg']) . "
		}
	}
	/* Finish Header Side Dropdown Background Color */
	
	
	/* Start Header Side Dropdown Rollover Background Color */
	.header_side #navigation ul li > a:hover,
	.header_side #navigation ul li.current-menu-item > a,
	.header_side #navigation ul li.current_page_item > a,
	.header_side #navigation ul li.menu-item-highlight > a,
	.header_side #navigation > li.menu-item-mega li li:hover > a:hover,
	.header_side #navigation > li.menu-item-mega li li.current-menu-item > a,
	.header_side #navigation > li.menu-item-mega li li.current_page_item > a,
	.header_side #navigation > li.menu-item-mega li.menu-item-highlight > a {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_hover_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_side #navigation > li > a:hover,
		.header_side #navigation > li.current-menu-item > a,
		.header_side #navigation > li.current_page_item > a,
		.header_side #navigation > li.menu-item-mega > div > ul > li > a:hover, 
		.header_side #navigation > li.menu-item-mega > div > ul > li.current-menu-item > a {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_dropdown_hover_bg']) . "
		}
	}
	
	/* Finish Header Side Dropdown Rollover Background Color */
	
	
	/* Start Header Side Custom Rules */
	.header_side ::selection {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_link']) . "
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_side_color']) . "
	}
	
	.header_side ::-moz-selection {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_side_link']) . "
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_side_color']) . "
	}
	/* Finish Header Side Custom Rules */

/***************** Finish Header Side Color Scheme Rules ******************/



/***************** Start Header Top Color Scheme Rules ******************/

	/* Start Header Top Content Color */
	.header_top,
	.header_top_inner .meta_wrap, 
	.header_top_inner .social_wrap a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_color']) . "
	}
	/* Finish Header Top Content Color */
	
	
	/* Start Header Top Primary Color */
	.header_top a,
	.header_top h1 a:hover,
	.header_top h2 a:hover,
	.header_top h3 a:hover,
	.header_top h4 a:hover,
	.header_top h5 a:hover,
	.header_top h6 a:hover,
	.header_top .color_2,
	.header_top h1,
	.header_top h2,
	.header_top h3,
	.header_top h4,
	.header_top h5,
	.header_top h6,
	.header_top h1 a,
	.header_top h2 a,
	.header_top h3 a,
	.header_top h4 a,
	.header_top h5 a,
	.header_top h6 a,
	.header_top_inner .meta_wrap a, 
	.header_top #top_line_nav > li > a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
	}
	
	.header_top .cmsms_button,
	.header_top .button:hover,
	.responsive_top_nav:before,
	.responsive_top_nav:after	{
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
	}
	
	.responsive_top_nav	{
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
	}
	
	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top input[type=search]:focus,
	.header_top textarea:focus {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
	}
	/* Finish Header Top Primary Color */
	
	
	/* Start Header Top Rollover Color */
	.header_top a:hover,
	.header_top .button,
	.header_top_inner .meta_wrap a:hover, 
	.header_top_inner .social_wrap a:hover, 
	.header_top #top_line_nav > li > a:hover,
	.header_top #top_line_nav > li.current-menu-item > a,
	.header_top #top_line_nav > li.current_page_item > a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
	}
	
	
	.responsive_top_nav:hover:after,
	.responsive_top_nav.active:after,
	.responsive_top_nav.active:before,
	.responsive_top_nav:hover:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
	}
	
	.responsive_top_nav:hover,
	.responsive_top_nav.active {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav > li > a:hover {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
		}
	}
	
	.header_top_but .cmsms_top_arrow_pixel, 
	.header_top_but .cmsms_bot_arrow_pixel {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
	}
	
	.header_top_but .cmsms_top_arrow_pixel:before, 
	.header_top_but .cmsms_top_arrow_pixel:after, 
	.header_top_but .cmsms_top_arrow_pixel span:before, 
	.header_top_but .cmsms_top_arrow_pixel span:after, 
	.header_top_but .cmsms_bot_arrow_pixel:before, 
	.header_top_but .cmsms_bot_arrow_pixel:after, 
	.header_top_but .cmsms_bot_arrow_pixel span:before, 
	.header_top_but .cmsms_bot_arrow_pixel span:after {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
	}
	/* Finish Header Top Rollover Color */
	
	
	/* Start Header Top Background Color */
	.header_top .cmsms_button,
	.header_top .cmsms_button:hover, 
	.header_top #top_line_nav > li > a > span.cmsms_count {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_bg']) . "
	}
	
	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top input[type=search]:focus,
	.header_top textarea:focus,
	.header_top {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_bg']) . "
	}
	
	/* Finish Header Top Background Color */
	
	
	/* Start Header Top Borders Color */
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top input[type=search],
	.header_top input[type=submit],
	.header_top button,
	.header_top textarea,
	.header_top select,
	.header_top option {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_border']) . "
	}
	
	.header_top hr,
	.header_top .cmsms_divider {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_border']) . "
	}
	/* Finish Header Top Borders Color */
	
	
	/* Start Header Top Dropdown Link Color */
	.header_top #top_line_nav ul li a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top #top_line_nav > li > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_link']) . "
		}
	}
	/* Finish Header Top Dropdown Link Color */
	
	
	/* Start Header Top Dropdown Rollover Color */
	.header_top #top_line_nav ul li > a:hover,
	.header_top #top_line_nav ul li.current-menu-item > a,
	.header_top #top_line_nav ul li.current_page_item > a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top #top_line_nav > li > a:hover,
		.header_top #top_line_nav > li.current-menu-item > a,
		.header_top #top_line_nav > li.current_page_item > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav ul li > a:hover {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_hover']) . "
		}
	}
	/* Finish Header Top Dropdown Rollover Color */
	
	
	/* Start Header Top Dropdown Background Color */
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top input[type=search],
	.header_top input[type=submit],
	.header_top button,
	.header_top textarea,
	.header_top select,
	.header_top option {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top #top_line_nav {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav ul,
		.responsive_top_nav:hover:after,
		.responsive_top_nav:hover:before,
		.responsive_top_nav:hover
		.responsive_top_nav.active {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_bg']) . "
		}
	}
	/* Finish Header Top Dropdown Background Color */
	
	
	/* Start Header Top Dropdown Border Color */
	
	@media only screen and (max-width: 1024px) {
		.header_top #top_line_nav li a, 
		.header_top #top_line_nav > li > a:hover,
		.header_top #top_line_nav > li.current-menu-item > a,
		.header_top #top_line_nav > li.current_page_item > a {
			" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_border']) . "
		}
	}
	
	.header_top #top_line_nav ul li a {
		" . cmsms_color_css('border-top-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_border']) . "
	}
	/* Finish Header Top Dropdown Border Color */
	
	
	/* Start Header Top Custom Rules */
	.header_top ::selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_bg']) . "
	}
	
	.header_top ::-moz-selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_bg']) . "
	}
	/* Finish Header Top Custom Rules */

/***************** Finish Header Top Color Scheme Rules ******************/

";
	
	
	return $custom_css;
}

