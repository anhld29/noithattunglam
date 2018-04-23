<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.6
 * 
 * Blog Archive by Author Page Template
 * Created by CMSMasters
 * 
 */


get_header();


list($cmsms_layout) = cmsmasters_theme_page_layout_scheme();

$cmsms_post_image_link = get_post_meta(get_the_ID(), 'cmsms_post_image_link', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsms_layout == 'r_sidebar') {
	echo '<div class="content cmsms_archive entry" role="main">' . "\n\t";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo '<div class="content cmsms_archive entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content cmsms_archive entry" role="main">' . "\n\t";
}


cmsmasters_author_box();


echo '<br />' . "\n" . 
'<div class="blog portfolio cmsms_profile vertical cmsms_campaigns">' . "\n";


if (!have_posts()) : 
	echo '<h2>' . esc_html__('No posts found', 'interior-design') . '</h2>';
else : 
	while (have_posts()) : the_post();
		if (get_post_type() == 'profile') {
			get_template_part('framework/postType/profile/page/vertical');
		} elseif (get_post_type() == 'campaign') {
			get_template_part('framework/postType/campaign/page/horizontal');
		} elseif (get_post_type() == 'post') {
			if (get_post_format() != '') {
				get_template_part('framework/postType/blog/page/default/' . get_post_format());
			} else {
				get_template_part('framework/postType/blog/page/default/standard');
			}
		} else {
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_default_type'); ?>>
				<div class="cmsms_post_cont">
					<?php 
					if (!post_password_required()) {
						if ($cmsms_post_image_link != '') {
							cmsmasters_thumb(get_the_ID(), 'masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsms_post_image_link);
						} elseif (has_post_thumbnail()) {
							cmsmasters_thumb(get_the_ID(), 'masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
						}
					}
					
					
					echo '<div class="cmsms_post_date_wrap">';
					
						cmsmasters_post_date('page', 'default');
						
					echo '</div>';
					
					
					cmsmasters_post_heading(get_the_ID(), 'h2');
					
					cmsmasters_post_exc_cont();
					
					echo '<div class="cmsms_post_cont_info entry-meta">';
						
						cmsmasters_project_category(get_the_ID(), 'pj-categs', 'archive');
						
						cmsmasters_project_author('page');
						
						cmsmasters_post_comments('page');
						
						cmsmasters_post_like('page');
						
						cmsmasters_project_tags(get_the_ID(), 'pj-tags', 'archive');
						
					echo '</div>';
				?>
				</div>
			</article>
		<?php
		}
	endwhile;
	
	
	echo cmsms_pagination();
endif;


echo '</div>' . "\n" . 
'</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsms_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar" role="complementary">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar fl" role="complementary">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

