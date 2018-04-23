<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.6
 * 
 * Blog Post Full Width Image Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsmasters_get_global_options();


$cmsms_post_post_options = get_post_meta(get_the_ID(), 'cmsms_post_post_options', true);

if ($cmsms_post_post_options == 'custom') {
	$cmsms_post_title = get_post_meta(get_the_ID(), 'cmsms_post_title', true);
} else {
	$cmsms_post_title = cmsms_get_global('blog_post_title') ? 'true' : 'false';
}

$cmsms_post_image_link = get_post_meta(get_the_ID(), 'cmsms_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_post_cont">
	<?php 
		if (!post_password_required()) {
			if ($cmsms_post_image_link != '') {
				cmsmasters_thumb(get_the_ID(), 'masonry-thumb', false, 'img_' . get_the_ID(), false, false, false, true, $cmsms_post_image_link);
			} elseif (has_post_thumbnail()) {
				cmsmasters_thumb(get_the_ID(), 'masonry-thumb', false, 'img_' . get_the_ID(), false, false, false, true, false);
			}
		}
		
		
		if ( 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_date'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_author'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_cat'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_tag'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_like'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_comment'] 
		) {
			echo '<div class="cmsms_post_cont_info entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
				
				if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_date']) {
					
					echo '<div class="cmsms_post_cont_left">';
					
						cmsmasters_post_date('page');
						
					echo '</div>';
					
				}
				
				
				if (
					$cmsms_option[CMSMS_SHORTNAME . '_blog_post_author'] || 
					$cmsms_option[CMSMS_SHORTNAME . '_blog_post_cat'] || 
					$cmsms_option[CMSMS_SHORTNAME . '_blog_post_tag'] || 
					$cmsms_option[CMSMS_SHORTNAME . '_blog_post_like'] || 
					$cmsms_option[CMSMS_SHORTNAME . '_blog_post_comment']
				) {
				
					echo '<div class="cmsms_post_cont_right">';
					
						cmsmasters_post_category('post');
						
						cmsmasters_post_author('post');
						
						cmsmasters_post_tags('post');
						
						cmsmasters_post_comments('page');
						
						cmsmasters_post_like('post');
						
					echo '</div>';
					
				}
			echo '</div>';
		}
		
		
		if ($cmsms_post_title == 'true') {
			echo '<header class="cmsms_post_header entry-header">' . 
					cmsmasters_post_title_nolink(get_the_ID(), 'h2', false) . 
				'</header>';
		}
		
		
		if (get_the_content() != '') {
			echo '<div class="cmsms_post_content entry-content">';
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'interior-design') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => ' [ ', 
					'link_after' => ' ] ' 
				));
				
			echo '<div class="cl"></div>' . 
			'</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Image Article _________________________ -->

