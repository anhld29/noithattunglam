<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Posts Slider Image Post Format Template
 * Created by CMSMasters
 * 
 */


global $cmsms_post_metadata;


$cmsms_metadata = explode(',', $cmsms_post_metadata);

$excerpt = in_array('excerpt', $cmsms_metadata) ? true : false;
$date = in_array('date', $cmsms_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_metadata))) ? true : false;
$author = in_array('author', $cmsms_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_metadata))) ? true : false;
$likes = in_array('likes', $cmsms_metadata) ? true : false;
$more = in_array('more', $cmsms_metadata) ? true : false;
$link_href = ($attachment) ? wp_get_attachment_image_src((int) $attachment, 'full') : wp_get_attachment_image_src((int) get_post_thumbnail_id(), 'full');

$cmsms_post_image_link = get_post_meta(get_the_ID(), 'cmsms_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->

<style>
	#post-<?php the_ID(); ?> .cmsms_atach_img {
		background-image: url(<?php echo esc_url($link_href[0]); ?>);
	}
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_slider_post_cont">
	<?php 
		echo '<div class="cmsms_slider_post_cont_wrap">';
		
			if (!post_password_required() && has_post_thumbnail()) {
			
				echo '<div class="cmsms_cont_text_hover">';
			
				echo '<div class="cmsms_atach_img"></div>';
				
				echo '<div class="cmsms_atach_bg"></div>';
		
			}
			
			if($date) {
				echo '<div class="cmsms_slider_post_date">';
				
					$date ? cmsmasters_slider_post_date('post') : '';
					
				echo '</div>';
			}
			
			
			cmsmasters_slider_post_heading(get_the_ID(), 'post', 'h4');
			
			if($excerpt) {
			
				($excerpt) ? cmsmasters_slider_post_exc_cont('post') : '';
				
			}
			
			
			if ($more) {
				echo '<div class="cmsms_slider_post_more entry-meta">';
					
					$more ? cmsmasters_slider_post_more(get_the_ID()) : '';
					
				echo '</div>';
			}
			
			
			if ($author || $categories || $comments || $likes) {
				echo '<div class="cmsms_post_cont_info entry-meta">';
					
					$categories ? cmsmasters_slider_post_category('post') : '';
					
					$author ? cmsmasters_slider_post_author('post') : '';
					
					$comments ? cmsmasters_slider_post_comments('post') : '';
							
					$likes ? cmsmasters_slider_post_like('post') : '';
					
				echo '</div>';
			}
			
			
			if (!post_password_required() && has_post_thumbnail()) {
			
				echo '</div>';
		
			}
			
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Image Article _________________________ -->

