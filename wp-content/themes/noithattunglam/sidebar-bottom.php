<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.0
 * 
 * Sidebar Template
 * Created by CMSMasters
 * 
 */


if (is_singular()) {
	$bottom_sidebar_id = get_post_meta(get_the_ID(), 'cmsms_bottom_sidebar_id', true);
} elseif (CMSMS_WOOCOMMERCE && is_shop()) {
	$bottom_sidebar_id = get_post_meta(wc_get_page_id('shop'), 'cmsms_bottom_sidebar_id', true);
}


if (isset($bottom_sidebar_id) && is_dynamic_sidebar($bottom_sidebar_id) && is_active_sidebar($bottom_sidebar_id)) {
	dynamic_sidebar($bottom_sidebar_id);
} else if (is_active_sidebar('sidebar_bottom')) {
	dynamic_sidebar('sidebar_bottom');
} else {
	sidebarDefaultText();
}

