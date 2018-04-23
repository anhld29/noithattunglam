<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 *
 * @cmsms_package 	Interior Design
 * @cmsms_version 	1.0.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_image_ids();


// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

?>
<li <?php post_class(); ?>>
	<div class="product_outer">
	<?php 
		woocommerce_show_product_loop_sale_flash();
		
		$availability = $product->get_availability();

		if (esc_attr($availability['class']) == 'out-of-stock') {
			echo apply_filters('woocommerce_stock_html', '<span class="' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</span>', $availability['availability']);
		}
	?>
		<article class="product_inner">
			<?php
			remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
			
			do_action( 'woocommerce_before_shop_loop_item' );
			?>
			<figure class="cmsms_product_img preloader">
				<a>
					<?php 
					if (has_post_thumbnail()) {
						woocommerce_template_loop_product_thumbnail();
					}
					
					
					if ($attachment_ids) {
						$attachment_id = $attachment_ids[0];
						
						$image = wp_get_attachment_image($attachment_id, apply_filters('single_product_small_thumbnail_size', 'shop_catalog'));
						
						echo apply_filters('woocommerce_single_product_image_thumbnail_html', sprintf($image));
					}
					
					
					if (!has_post_thumbnail() && !$attachment_ids) {
						echo '<span class="cmsms_product_placeholder"></span>';
					}
					?>
				</a>
				<div class="cmsms_add_to_cart_wrap">
				<?php 
					cmsmasters_woocommerce_add_to_cart_button();
				?>
				</div>
			</figure>
			<div class="cmsms_product_head">
				<?php
					remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
					remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
					
					do_action( 'woocommerce_before_shop_loop_item_title' );
					
					
					remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
					
					do_action( 'woocommerce_shop_loop_item_title' );
				?>
				<header class="entry-header cmsms_product_header">
					<h5 class="entry-title cmsms_product_title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h5>
				</header>
				<?php
					woocommerce_template_loop_price();
					
					
					remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
					remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
					
					do_action( 'woocommerce_after_shop_loop_item_title' );
				?>
			</div>
			<div class="cmsms_product_info">
			<?php
				cmsmasters_woocommerce_rating('cmsms_theme_icon_star_empty', 'cmsms_theme_icon_star_full');
				
				if (get_the_terms($product->get_id(), 'product_cat')) {
					echo '<div class="cmsms_product_cat entry-meta">' . 
						wc_get_product_category_list($product->get_id(), ', ', ' ') . 
					'</div>';
				}
				
				
				remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
				remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
				
				do_action( 'woocommerce_after_shop_loop_item' );
			?>
			</div>
		</article>
	</div>
</li>