<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Blog Page Masonry Audio Post Format Template
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


$cmsms_post_audio_links = get_post_meta(get_the_ID(), 'cmsms_post_audio_links', true);


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}

?>

<!--_________________________ Start Audio Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_masonry_type'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<div class="cmsms_post_cont">
	<?php 	
		
		if ($date || $likes || $comments) {
			echo '<div class="cmsms_post_meta_wrap">';
			
				if($date) {
					echo '<div class="cmsms_post_meta_left">';
						
						$date ? cmsmasters_post_date('page', 'default') : '';
						
					echo '</div>';
				} if ($comments || $likes) {
					echo '<div class="cmsms_post_meta_right">';
						
						$comments ? cmsmasters_post_comments('page-masonry') : '';
						
						$likes ? cmsmasters_post_like('page') : '';
						
					echo '</div>';
				}
				
			echo '</div>';
		}
		
		
		cmsmasters_post_heading(get_the_ID(), 'h5');
		
		
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
		
		
		if ($more) {
			echo '<div class="cmsms_post_more entry-meta">';
				
				$more ? cmsmasters_post_more(get_the_ID()) : '';
				
			echo '</div>';
		}
		
		
		if ($author || $categories || $tags) {
			echo '<div class="cmsms_post_cont_info entry-meta' . ((!$more && theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
				
				$author ? cmsmasters_post_author('page') : '';
				
				$categories ? cmsmasters_post_category('page') : '';
				
				$tags ? cmsmasters_post_tags('page') : '';
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Audio Article _________________________ -->

