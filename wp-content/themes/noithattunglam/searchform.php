<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Search Form Template
 * Created by CMSMasters
 * 
 */
?>

<div class="search_bar_wrap">
	<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
		<p class="search_field">
			<input name="s" placeholder="<?php esc_attr_e('Search...', 'interior-design'); ?>" onfocus="if (placeholder == 'Search...') {placeholder = '';}" onblur="if (placeholder == '') {placeholder = 'Search...';}" value="" type="search" />
		</p>
		<p class="search_button">
			<button type="submit" class="cmsms-icon-search-2"></button>
		</p>
	</form>
</div>

