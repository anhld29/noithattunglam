<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.6
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsms_option = cmsmasters_get_global_options();

?>

</div>

<!-- _________________________ Start Content _________________________ -->
<div class="entry">
	<div class="error">
		<div class="error_bg">
			<div class="error_inner">
				<h1 class="error_title"><?php echo esc_html__('404', 'interior-design'); ?></h1>
				<?php echo '<h2 class="error_subtitle">' . esc_html__("We're sorry, but the page you were looking for doesn't exist.", 'interior-design') . '</h2>'; ?>
			</div>
		</div>
		<div>
			<?php
			
				if ($cmsms_option[CMSMS_SHORTNAME . '_error_search']) { 
					get_search_form(); 
				}
				
				
				if ($cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_button'] && $cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_link'] != '') {
					echo '<div class="error_button_wrap"><a href="' . esc_url($cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_link']) . '" class="button">' . esc_html__('sitemap', 'interior-design') . '</a></div>';
				}
			?>
		</div>
	</div>
</div>
<div class="content_wrap fullwidth">
<!-- _________________________ Finish Content _________________________ -->

<?php 
get_footer();

