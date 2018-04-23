<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.6
 * 
 * Blog Page Default Gallery Post Format Template
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


$cmsms_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_post_images', true))));


$uniqid = uniqid();

?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_default_type'); ?>>
	<div class="cmsms_post_cont">
		<?php 
		if (!post_password_required()) {
			if (sizeof($cmsms_post_images) > 1) {
		?>
				<script type="text/javascript">
					jQuery(document).ready(function () {
						jQuery('.cmsms_slider_<?php echo esc_attr($uniqid); ?>').owlCarousel( { 
							singleItem : 		true, 
							transitionStyle : 	false, 
							rewindNav : 		true, 
							slideSpeed : 		200, 
							paginationSpeed : 	800, 
							rewindSpeed : 		1000, 
							autoPlay : 			false, 
							stopOnHover : 		false, 
							pagination : 		false, 
							navigation : 		true, 
							autoHeight :		true,
							navigationText : 	[ 
								'<span class="cmsms_prev_arrow"></span>', 
								'<span class="cmsms_next_arrow"></span>' 
							] 
						} );
					} );
				</script>
				<div id="cmsms_owl_carousel_<?php the_ID(); ?>" class="cmsms_slider_<?php echo esc_attr($uniqid); ?> cmsms_owl_slider">
				<?php 
					foreach ($cmsms_post_images as $cmsms_post_image) {
						$image_atts = wp_prepare_attachment_for_js(strstr($cmsms_post_image, '|', true));
						
						echo '<div>' . 
							'<figure>' . 
								wp_get_attachment_image(strstr($cmsms_post_image, '|', true), 'post-thumbnail', false, array( 
									'class' => 	'full-width', 
									'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsms_title(get_the_ID(), false), 
									'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsms_title(get_the_ID(), false) 
								)) . 
							'</figure>' . 
						'</div>';
					}
				?>
				</div>
			<?php 
			} elseif (sizeof($cmsms_post_images) == 1 && $cmsms_post_images[0] != '') {
				cmsmasters_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, true, true, true, $cmsms_post_images[0]);
			} elseif (has_post_thumbnail()) {
				cmsmasters_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, true, true, true, false);
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
<!--_________________________ Finish Gallery Article _________________________ -->

