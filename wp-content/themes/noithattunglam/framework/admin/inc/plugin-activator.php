<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.1.2
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


locate_template('framework/class/class-tgm-plugin-activation.php', true);


function cmsms_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'interior-design'), 
			'slug'					=> 'cmsms-content-composer', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '1.5.9', 
			'force_activation'		=> true, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'interior-design'), 
			'slug'					=> 'cmsms-mega-menu', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Contact Form Builder', 'interior-design'), 
			'slug'					=> 'cmsms-contact-form-builder', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.3.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'interior-design'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.6.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'interior-design'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.4.6.2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Envato Market', 'interior-design'), 
			'slug'					=> 'envato-market', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/envato-market.zip', 
			'required'				=> false, 
			'version'				=> '1.0.0-RC2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'interior-design'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'interior-design'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'interior-design'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		)
	);
	
	
	$config = array( 
		'id' => 				'interior-design', 
		'default_path' => 		'', 
		'menu' => 				'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	__('Theme Required & Recommended Plugins', 'interior-design'), 
			'menu_title' => 	__('Theme Plugins', 'interior-design'), 
			'return' => 		__('Return to Theme Required & Recommended Plugins', 'interior-design') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'cmsms_register_theme_plugins');

