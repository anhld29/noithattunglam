<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Blog Page Default Audio Post Format Template
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


$cmsms_post_audio_links = get_post_meta(get_the_ID(), 'cmsms_post_audio_links', true);

?>

<!--_________________________ Start Audio Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_default_type'); ?>>
	<div class="cmsms_post_cont">
		<div class="cmsms_post_cont_wrapper">
		<?php 
			if($date) {
				echo '<div class="cmsms_post_date_wrap">';
				
					$date ? cmsmasters_post_date('page', 'default') : '';
					
				echo '</div>';
			}
			
			cmsmasters_post_heading(get_the_ID(), 'h2');
			
			
			if (!post_password_required() && !empty($cmsms_post_audio_links) && sizeof($cmsms_post_audio_links) > 0) {
				$attrs = array(
					'preload' => 'none'
				);
				
				
				foreach ($cmsms_post_audio_links as $cmsms_post_audio_link_url) {
					$attrs[substr(strrchr($cmsms_post_audio_link_url, '.'), 1)] = $cmsms_post_audio_link_url;
				}
				
				
				echo '<div class="cmsms_audio">' . 
					wp_audio_shortcode($attrs) . 
				'</div>';
			}
			
			
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
		?>
		</div>
	</div>
</article>
<!--_________________________ Finish Audio Article _________________________ -->

