<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.6
 * 
 * Gallery Project Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsmasters_get_global_options();

$cmsms_project_project_options = get_post_meta(get_the_ID(), 'cmsms_project_project_options', true);

if ($cmsms_project_project_options == 'custom') {
	$cmsms_project_title = get_post_meta(get_the_ID(), 'cmsms_project_title', true);
} else {
	$cmsms_project_title = cmsms_get_global('portfolio_project_title') ? 'true' : 'false';
}


$cmsms_project_features = get_post_meta(get_the_ID(), 'cmsms_project_features', true);


$cmsms_project_link_text = get_post_meta(get_the_ID(), 'cmsms_project_link_text', true);
$cmsms_project_link_url = get_post_meta(get_the_ID(), 'cmsms_project_link_url', true);
$cmsms_project_link_target = get_post_meta(get_the_ID(), 'cmsms_project_link_target', true);


$cmsms_project_details_title = get_post_meta(get_the_ID(), 'cmsms_project_details_title', true);


$cmsms_project_features_one_title = get_post_meta(get_the_ID(), 'cmsms_project_features_one_title', true);
$cmsms_project_features_one = get_post_meta(get_the_ID(), 'cmsms_project_features_one', true);

$cmsms_project_features_two_title = get_post_meta(get_the_ID(), 'cmsms_project_features_two_title', true);
$cmsms_project_features_two = get_post_meta(get_the_ID(), 'cmsms_project_features_two', true);

$cmsms_project_features_three_title = get_post_meta(get_the_ID(), 'cmsms_project_features_three_title', true);
$cmsms_project_features_three = get_post_meta(get_the_ID(), 'cmsms_project_features_three', true);


$cmsms_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_project_images', true))));


$cmsms_project_columns = get_post_meta(get_the_ID(), 'cmsms_project_columns', true);


if ($cmsms_project_columns == 'three' || $cmsms_project_columns == 'two') {
    $project_thumb = 'project-thumb';
} else {
    $project_thumb = 'masonry-thumb';
}


$cmsms_project_img_columns = 'one_third';

if ($cmsms_project_columns == 'two') {
	$cmsms_project_img_columns = 'one_half';
} elseif ($cmsms_project_columns == 'one') {
	$cmsms_project_img_columns = 'one_first';
}

$colnumb = 0;


$project_details = '';

if (
	$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_like'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_date'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_cat'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_comment'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_tag'] || 
	(
		!empty($cmsms_project_features[0][0]) && 
		!empty($cmsms_project_features[0][1])
	) || 
	$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_link']
) {
	$project_details = 'true';
}


$project_sidebar = '';

if (
	$project_details == 'true' || 
	(
		!empty($cmsms_project_features_one[0][0]) && 
		!empty($cmsms_project_features_one[0][1])
	) || (
		!empty($cmsms_project_features_two[0][0]) && 
		!empty($cmsms_project_features_two[0][1])
	) || (
		!empty($cmsms_project_features_three[0][0]) && 
		!empty($cmsms_project_features_three[0][1])
	)
) {
	$project_sidebar = 'true';
}

?>

<!--_________________________ Start Gallery Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_' . $cmsms_project_columns); ?>>
	<?php
	if ($cmsms_project_title == 'true') {
		echo '<header class="cmsms_project_header entry-header">';
			
			cmsmasters_project_title_nolink(get_the_ID(), 'h2');
			
		echo '</header>';
	}
	
	
	echo '<div class="project_content' . (($project_sidebar == 'true') ? ' with_sidebar' : '') . '">';
		if (!post_password_required()) {
			if (sizeof($cmsms_project_images) > 0 && $cmsms_project_images[0] != '') {
				echo '<div class="project_gallery_row">';
				
				
				foreach ($cmsms_project_images as $cmsms_project_image) {
					$link_href = wp_get_attachment_image_src(strstr($cmsms_project_image, '|', true), 'full');
					
					$image_atts = wp_prepare_attachment_for_js(strstr($cmsms_project_image, '|', true));
					
					
					if ($cmsms_project_columns == 'one' && $colnumb == 1) { 
						echo '<div class="cl"></div></div><div class="project_gallery_row">';
						
						
						$colnumb = 0;
					} else if ($cmsms_project_columns == 'two' && $colnumb == 2) {
						echo '<div class="cl"></div></div><div class="project_gallery_row">';
						
						
						$colnumb = 0;
					} else if ($cmsms_project_columns == 'three' && $colnumb == 3) {
						echo '<div class="cl"></div></div><div class="project_gallery_row">';
						
						
						$colnumb = 0;
					}
					
					
					echo '<div class="' . $cmsms_project_img_columns . '">' . 
						'<figure class="cmsms_img_rollover_wrap preloader">' . 
							wp_get_attachment_image(strstr($cmsms_project_image, '|', true), $project_thumb, false, array(
								'class' => 'full-width', 
								'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsms_title(get_the_ID(), false), 
								'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsms_title(get_the_ID(), false) 
							)) . 
							'<div class="cmsms_img_rollover">' . 
								'<a href="' . esc_url($link_href[0]) . '" rel="ilightbox[img_' . get_the_ID() . ']" title="' . (($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsms_title(get_the_ID(), false)) . '" class="cmsms_image_link jackbox no_open_link">' . esc_html__( 'View', 'interior-design' ) . '</a>' . 
							'</div>' . 
						'</figure>' . 
					'</div>';
					
					
					$colnumb++;
				}
				
				
				echo '<div class="cl"></div></div>';
			} elseif (sizeof($cmsms_project_images) == 1 && $cmsms_project_images[0] != '') {
				cmsmasters_thumb(get_the_ID(), 'masonry-thumb', false, 'img_' . get_the_ID(), true, true, false, true, $cmsms_project_images[0]);
			} elseif (sizeof($cmsms_project_images) < 1 && has_post_thumbnail() && $cmsms_project_featured_image_show == 'true') {
				cmsmasters_thumb(get_the_ID(), 'masonry-thumb', false, 'img_' . get_the_ID(), true, true, false, true, false);
			}
		}
		
		
		echo '<div class="cmsms_project_content entry-content">' . "\n";
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'interior-design') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => ' [ ', 
				'link_after' => ' ] ' 
			));
			
			
			echo '<div class="cl"></div>' . 
		'</div>' . 
	'</div>';
	
	
	if ($project_sidebar == 'true') {
		echo '<div class="project_sidebar">';
			
			if ($project_details == 'true') {
				echo '<div class="project_details entry-meta">' . 
					'<h5 class="project_details_title">' . esc_html($cmsms_project_details_title) . '</h5>';
					
					
					cmsmasters_project_like('post');
					
					cmsmasters_project_date('post');
					
					cmsmasters_project_category(get_the_ID(), 'pj-categs', 'post');
					
					cmsmasters_project_comments('post');
					
					cmsmasters_project_author('post');
					
					cmsmasters_project_tags(get_the_ID(), 'pj-tags', 'post');
					
					cmsmasters_project_features('details', $cmsms_project_features, false, 'h5', true);
					
					cmsmasters_project_link($cmsms_project_link_text, $cmsms_project_link_url, $cmsms_project_link_target);
					
				echo '</div>';
			}
			
			
			cmsmasters_project_features('features', $cmsms_project_features_one, $cmsms_project_features_one_title, 'h5', true);
			
			cmsmasters_project_features('features', $cmsms_project_features_two, $cmsms_project_features_two_title, 'h5', true);
			
			cmsmasters_project_features('features', $cmsms_project_features_three, $cmsms_project_features_three_title, 'h5', true);
			
		echo '</div>';
	}
	?>
	<div class="cl"></div>
</article>
<!--_________________________ Finish Album Project _________________________ -->

