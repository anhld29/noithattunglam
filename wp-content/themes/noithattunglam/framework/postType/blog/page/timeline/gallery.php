<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.6
 * 
 * Blog Page Timeline Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


global $cmsms_metadata;


$cmsms_post_metadata = explode(',', $cmsms_metadata);


$date = (in_array('date', $cmsms_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsms_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsms_post_metadata) || is_home()) ? true : false;
$tags = (get_the_tags() && (in_array('tags', $cmsms_post_metadata) || is_home())) ? true : false;
$more = (in_array('more', $cmsms_post_metadata) || is_home()) ? true : false;


$cmsms_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_post_images', true))));


$uniqid = uniqid();

?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_timeline_type'); ?>>
	<div class="cmsms_post_info entry-meta">
		<?php $date ? cmsmasters_post_date('page', 'timeline') : ''; ?>
	</div>
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
							autoHeight :		true,
							navigation : 		true, 
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
		
		
		cmsmasters_post_heading(get_the_ID(), 'h5');
		
		
		cmsmasters_post_exc_cont();
		
		
		if ($more) {
			echo '<div class="cmsms_post_more">';
				
				$more ? cmsmasters_post_more(get_the_ID()) : '';
				
			echo '</div>';
		}
		
		
		
		if ($author || $categories || $tags || $date || $likes || $comments) {
			echo '<div class="cmsms_post_cont_info entry-meta' . ((theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
				
				$author ? cmsmasters_post_author('page') : '';
				
				$categories ? cmsmasters_post_category('page') : '';
				
				$tags ? cmsmasters_post_tags('page') : '';
				
				if ($comments || $likes) {
					echo '<div class="cmsms_post_meta_info">';
						
						$comments ? cmsmasters_post_comments('page-masonry') : '';
						
						$likes ? cmsmasters_post_like('page') : '';
						
					echo '</div>';
				}
				
			echo '</div>';
		}
	?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

