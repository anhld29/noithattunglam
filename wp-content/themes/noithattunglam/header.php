<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.7
 * 
 * Website Header Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsmasters_get_global_options();

global $woocommerce;


?><!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8)]><!-->
<html <?php language_attributes(); ?> class="cmsms_html">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>" />

<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];

$checker = array( 
	'ios' => 			preg_match('/iPhone|iPod|iPad/', $ua), 
	'blackberry' => 	preg_match('/BlackBerry/', $ua), 
	'android' => 		preg_match('/Android/', $ua), 
	'mac' => 			preg_match('/Macintosh/', $ua), 
	'chrome' => 		preg_match('/Chrome/', $ua), 
	'safari' => 		preg_match('/Safari/', $ua), 
	'ie' => 			preg_match('/MSIE/', $ua), 
	'ie11' => 			preg_match('/Trident/', $ua) 
);


if (is_singular() && get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
}


$nav_args = array( 
	'theme_location' => 	'primary', 
	'menu_id' => 			'navigation', 
	'menu_class' => 		'navigation', 
	'link_before' => 		'<span>', 
	'link_after' => 		'</span>',
	'fallback_cb' => 		'cmsms_fallback_menu',
	'after'  => 			'<span class="cmsms_cross"></span>'
);

if ( $cmsms_option[CMSMS_SHORTNAME . '_header_styles'] == 'default' && $cmsms_option[CMSMS_SHORTNAME . '_header_styles'] != 'h_side' ) {
	if (class_exists('Walker_Cmsms_Nav_Mega_Menu')) {
		$nav_args['menu_class'] = 'navigation cmsms_mega_menu_enabled';
		$nav_args['link_before'] = '';
		$nav_args['link_after'] = '';
		$nav_args['walker'] = new Walker_Cmsms_Nav_Mega_Menu();
	}
}


wp_head();

?>
</head>
<body <?php body_class(); ?>>
	
<!-- _________________________ Start Page _________________________ -->
<div id="page" class="<?php cmsmasters_get_page_classes($cmsms_option); ?>hfeed site">

<!-- _________________________ Start Main _________________________ -->
<div id="main">
	
<!-- _________________________ Start Header _________________________ -->
<header id="header">
	<?php if ($cmsms_option[CMSMS_SHORTNAME . '_header_top_line']) { ?>
	<div class="header_top" data-height="<?php echo esc_attr($cmsms_option[CMSMS_SHORTNAME . '_header_top_height']); ?>">
		<div class="header_top_outer">
			<div class="header_top_inner">
				<?php 
					if ($cmsms_option[CMSMS_SHORTNAME . '_header_top_line_add_cont'] !== 'none') {
						echo '<div class="header_top_right">' . 
							'<div class="header_top_aligner"></div>';
						
						
						if ($cmsms_option[CMSMS_SHORTNAME . '_header_top_line_add_cont'] == 'social' && isset($cmsms_option[CMSMS_SHORTNAME . '_social_icons'])) {
							cmsmasters_social_icons();
						} elseif ($cmsms_option[CMSMS_SHORTNAME . '_header_top_line_add_cont'] == 'nav' && has_nav_menu('top_line')) {
							echo '<div class="nav_wrap">' . 
								'<a class="responsive_top_nav" href="javascript:void(0);"></a>' . 
								'<nav>';
							
							
							wp_nav_menu(array( 
								'theme_location' => 	'top_line', 
								'menu_id' => 			'top_line_nav', 
								'menu_class' => 		'top_line_nav' 
							));
							
							
							echo '</nav>' . 
							'</div>';
						}
						
						
						echo '</div>';
					}
					
					
					if ($cmsms_option[CMSMS_SHORTNAME . '_header_top_line_short_info'] !== '') {
						echo '<div class="header_top_left">' . 
							'<div class="header_top_aligner"></div>' . 
							'<div class="meta_wrap">' . 
								stripslashes($cmsms_option[CMSMS_SHORTNAME . '_header_top_line_short_info']) . 
							'</div>' . 
						'</div>';
					} 
				?>
				<div class="cl"></div>
			</div>
		</div>
		<div class="header_top_but closed">
			<span class="cmsms_bot_arrow_pixel">
				<span></span>
			</span>
		</div>
	</div>
	<?php } ?>
	<div class="header_mid" data-height="<?php echo esc_attr($cmsms_option[CMSMS_SHORTNAME . '_header_mid_height']); ?>">
		<div class="header_mid_outer">
			<div class="header_mid_inner">
				<div class="logo_wrap"><?php cmsmasters_logo(); ?></div>
				<?php
				if (
					$cmsms_option[CMSMS_SHORTNAME . '_header_styles'] == 'default' && 
					$cmsms_option[CMSMS_SHORTNAME . '_header_styles'] != 'h_side'
				) { 
					if (
						$cmsms_option[CMSMS_SHORTNAME . '_header_add_cont'] == 'cust_html' && 
						$cmsms_option[CMSMS_SHORTNAME . '_header_add_cont_cust_html'] !== ''
					) {
				?>
					<div class="slogan_wrap">
						<div class="slogan_wrap_inner">
							<div class="slogan_wrap_text">
								<?php echo stripslashes($cmsms_option[CMSMS_SHORTNAME . '_header_add_cont_cust_html']) ?>
							</div>
						</div>
					</div>
				<?php 
					} elseif (
						$cmsms_option[CMSMS_SHORTNAME . '_header_add_cont'] == 'social' && 
						isset($cmsms_option[CMSMS_SHORTNAME . '_social_icons'])
					) {
						cmsmasters_social_icons();
					}
				}
				?>
				<?php 
					if (
						$cmsms_option[CMSMS_SHORTNAME . '_header_styles'] == 'default'
					) { 
				?>
				<!-- _________________________ Start Navigation _________________________ -->
					<div class="header_right_wrap <?php if ($cmsms_option[CMSMS_SHORTNAME . '_header_search']) {echo "enable_search";} ?>">
						<div class="resp_nav_wrap">
							<div class="resp_nav_wrap_inner">
								<div class="resp_nav_content">
									<a class="responsive_nav" href="javascript:void(0);"></a>
								</div>
							</div>
						</div>
					<?php
						if (
							$cmsms_option[CMSMS_SHORTNAME . '_header_main_nav_style'] == 'h_nav' ||
							$cmsms_option[CMSMS_SHORTNAME . '_header_styles'] == 'h_side'
						) {
					?>	
						<a href="#" class="cmsms_nav_but_wrap">
							<span class="cmsms_nav_but_outer">
								<span class="cmsms_nav_but_inner">
									<span class="cmsms_nav_but"></span>
								</span>
							</span>
						</a>
						<?php }?> 
							<nav role="navigation" class="<?php if ($cmsms_option[CMSMS_SHORTNAME . '_header_main_nav_style'] == 'default') {echo "nav_open cmsms_ovv";} ?>">
						<?php
							echo "\t";
							
							
							wp_nav_menu($nav_args);
							
							
							echo "\r";
						?>
							<div class="cl"></div>
						</nav>	
					
					
				<?php } else {?>
					<div class="header_right_wrap">
						<a href="#" class="cmsms_nav_but_wrap">
							<span class="cmsms_nav_but_outer">
								<span class="cmsms_nav_but_inner">
									<span class="cmsms_nav_but"></span>
								</span>
							</span>
						</a>
					</div>
					<?php }?>
				<!-- _________________________ Finish Navigation _________________________ -->
				<?php 
				if (CMSMS_WOOCOMMERCE & $cmsms_option[CMSMS_SHORTNAME . '_header_styles'] != 'h_side') {
					cmsmasters_woocommerce_cart_dropdown(); 
				}
				?>
				<?php 
				if (
					$cmsms_option[CMSMS_SHORTNAME . '_header_search'] && 
					$cmsms_option[CMSMS_SHORTNAME . '_header_styles'] != 'h_side'
				) {
				?>
						<div class="search_wrap">
							<div class="search_wrap_inner">
								<div class="search_wrap_inner_left">
									<?php get_search_form(); ?>
								</div>
							</div>
						</div>
					</div>
				<?php 
				}
			?>
			</div>
			<div class="cl"></div>
		</div>
	</div>
	<?php if ($cmsms_option[CMSMS_SHORTNAME . '_header_styles'] == 'h_side') { ?>
	<div class="header_side" data-width="<?php echo esc_attr($cmsms_option[CMSMS_SHORTNAME . '_header_side_width']); ?>">
		<div class="header_side_outer">
			<div class="header_side_inner">
					<div class="header_side_top_side <?php if ( CMSMS_WOOCOMMERCE || $cmsms_option[CMSMS_SHORTNAME . '_header_search']) {echo 'cmsms_with_cont';}?>">
						<?php 
						if (
							$cmsms_option[CMSMS_SHORTNAME . '_header_search'] && 
							$cmsms_option[CMSMS_SHORTNAME . '_header_styles'] != 'default'
						) {
						?>
							<div class="search_wrap">
								<div class="search_wrap_inner">
									<div class="search_wrap_inner_left">
										<?php get_search_form(); ?>
									</div>
								</div>
							</div>
							
						<?php 
						}
						if (CMSMS_WOOCOMMERCE) {
							cmsmasters_woocommerce_cart_dropdown(); 
						}
						?>
						<div class="resp_nav_wrap">
							<div class="resp_nav_wrap_inner">
								<div class="resp_nav_content">
									<a class="responsive_nav" href="javascript:void(0);"></a>
								</div>
							</div>
						</div>
						<div class="cl"></div>
					</div>
				
				<!-- _________________________ Start Navigation _________________________ -->
				<div class="header_side_middle_side">
					<div class="cmsms_wrap_header_side_mid">
					<nav role="navigation">
					<?php
						echo "\t";
						

						wp_nav_menu($nav_args);
						
						
						echo "\r";
					?>
						<div class="cl"></div>
					</nav>
					</div>
				</div>
				
				<!-- _________________________ Finish Navigation _________________________ -->
					<?php
					if (
						$cmsms_option[CMSMS_SHORTNAME . '_header_styles'] == 'h_side' && 
						$cmsms_option[CMSMS_SHORTNAME . '_header_add_cont'] != 'none'
					) { 
						if (
							$cmsms_option[CMSMS_SHORTNAME . '_header_add_cont'] == 'cust_html' && 
							$cmsms_option[CMSMS_SHORTNAME . '_header_add_cont_cust_html'] !== ''
						) {
					?>	<div class="header_side_bottom_side">
							<div class="header_side_aligner"></div>
							<div class="slogan_wrap">
								<div class="slogan_wrap_inner">
									<div class="slogan_wrap_text">
										<?php echo stripslashes($cmsms_option[CMSMS_SHORTNAME . '_header_add_cont_cust_html']) ?>
									</div>
								</div>
							</div>
						</div>	
					<?php 
						} elseif (
							$cmsms_option[CMSMS_SHORTNAME . '_header_add_cont'] == 'social' && 
							isset($cmsms_option[CMSMS_SHORTNAME . '_social_icons'])
						) { ?>
							<div class="header_side_bottom_side">
								<div class="header_side_aligner"></div>
								<?php cmsmasters_social_icons();?>
							</div>	
				<?php	}?>
			<?php	}?>
			</div>
		</div>
	</div>
	<?php } ?>
</header>
<!-- _________________________ Finish Header _________________________ -->

	
<!-- _________________________ Start Middle _________________________ -->
<div id="middle"<?php echo (is_404()) ? ' class="error_page"' : ''; ?>>
<?php 
if (!is_404() && !is_home()) {
	cmsmasters_page_heading();
} else {
	echo "<div class=\"headline\">
		<div class=\"headline_outer cmsms_headline_disabled\"></div>
	</div>";
}


list($cmsms_layout, $cmsms_page_scheme) = cmsmasters_theme_page_layout_scheme();


echo '<div class="middle_inner' . (($cmsms_page_scheme != 'default') ? ' cmsms_color_scheme_' . $cmsms_page_scheme : '') . '">' . "\n" . 
	'<div class="content_wrap ' . $cmsms_layout . 
	((is_singular('project')) ? ' project_page' : '') . 
	((is_singular('profile')) ? ' profile_page' : '') . 
	((CMSMS_WOOCOMMERCE && (
		is_woocommerce() || 
		is_cart() || 
		is_checkout() || 
		is_checkout_pay_page() || 
		is_account_page() || 
		is_order_received_page() || 
		is_add_payment_method_page()
	)) ? ' cmsms_woo' : '') . 
	'">' . "\n\n";

