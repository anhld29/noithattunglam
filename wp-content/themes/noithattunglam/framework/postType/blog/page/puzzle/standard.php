<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Blog Page Puzzle Standard Post Format Template
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


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_puzzle_type'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<div class="cmsms_post_cont">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			cmsmasters_thumb(get_the_ID(), 'project-thumb', true, false, true, false, true, true, false);
		} else {
			cmsmasters_post_format_icon_placeholder(get_the_ID(), 'std');
		}
		
		
		echo '<div class="puzzle_post_content_wrapper">' . 
			'<div class="puzzle_post_content_wrap">';
			
			
			if ($date) {
				echo '<div class="cmsms_post_cont_info entry-meta">';
					
					$date ? cmsmasters_post_date('page', 'default') : '';
					
				echo '</div>';
			}
			
			
			cmsmasters_post_heading(get_the_ID(), 'h4');
			
			
			cmsmasters_post_exc_cont();
			
			
			$more ? cmsmasters_post_more(get_the_ID()) : '';
			
			
			if ($author || $categories || $tags || $likes || $comments) {
				echo '<footer class="cmsms_post_footer entry-meta">' . 
					'<div class="cmsms_post_footer_info">';
						
						if ($comments || $likes) {
							echo '<div class="cmsms_post_meta_info">';
								
								$comments ? cmsmasters_post_comments('page') : '';
								
								echo '<div class="cl"></div>';
								
								$likes ? cmsmasters_post_like('page') : '';
								
							echo '</div>';
						}
						
					echo '</div>';
					
					
					$author ? cmsmasters_post_author('page') : '';
					
					$categories ? cmsmasters_post_category('page') : '';
					
					$tags ? cmsmasters_post_tags('page') : '';
					
				echo '</footer>';
			}
			
			
		echo '</div>' . 
		'</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

