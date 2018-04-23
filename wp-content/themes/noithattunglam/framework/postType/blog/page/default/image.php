<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.6
 * 
 * Blog Page Default Image Post Format Template
 * Created by CMSMasters
 * 
 */


global $cmsms_metadata;


$cmsms_post_metadata = explode(',', $cmsms_metadata);


$date = (in_array('date', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$author = (in_array('author', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$likes = (in_array('likes', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$tags = (get_the_tags() && (in_array('tags', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$more = (in_array('more', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;


$cmsms_post_image_link = get_post_meta(get_the_ID(), 'cmsms_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_default_type'); ?>>
	<div class="cmsms_post_cont">
		<?php 
		if (!post_password_required()) {
			if ($cmsms_post_image_link != '') {
				cmsmasters_thumb(get_the_ID(), 'masonry-thumb', false, 'img_' . get_the_ID(), false, false, false, true, $cmsms_post_image_link);
			} elseif (has_post_thumbnail()) {
				cmsmasters_thumb(get_the_ID(), 'masonry-thumb', false, 'img_' . get_the_ID(), false, false, false, true, false);
			}
		}
		
		echo '<div class="cmsms_post_cont_wrapper">';
			if($date) {
				echo '<div class="cmsms_post_date_wrap">';
				
					$date ? cmsmasters_post_date('page', 'default') : '';
					
				echo '</div>';
			}
			
			
			cmsmasters_post_heading(get_the_ID(), 'h2');
			
			cmsmasters_post_exc_cont();
			
			
			if ($author || $categories || $comments || $likes || $tags || $more) {
				echo '<div class="cmsms_post_cont_info entry-meta">';
					
					$categories ? cmsmasters_post_category('page') : '';
					
					$author ? cmsmasters_post_author('page') : '';
					
					$comments ? cmsmasters_post_comments('page') : '';
							
					$likes ? cmsmasters_post_like('page') : '';
					
					$tags ? cmsmasters_post_tags('page') : '';
					
					
					if ($more) {
						echo '<div class="cmsms_post_more_but entry-meta">';
							
							$more ? cmsmasters_post_more(get_the_ID()) : '';
							
						echo '</div>';
					}
					
				echo '</div>';
			}
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Image Article _________________________ -->

