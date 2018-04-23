<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.6
 * 
 * Search Page Template
 * Created by CMSMasters
 * 
 */


get_header();


list($cmsms_layout) = cmsmasters_theme_page_layout_scheme();


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsms_layout == 'r_sidebar') {
	echo '<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo '<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry" role="main">' . "\n\t";
}


echo '<div class="cmsms_search">' . "\n";


if (!have_posts()) : 
	echo '<div class="cmsms_search_zero">' . 
		'<h4>' . esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'interior-design') . '</h4>' . 
		'<br />';
		
		
		get_search_form();
		
	echo '</div>';
else : 
	$cmsms_posts_count = 1;
	
	$cmsms_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	
	if ($cmsms_page > 1) {
		$cmsms_posts_count = ((int) ($cmsms_page - 1) * (int) get_query_var('posts_per_page')) + 1;
	}
	
	
	while (have_posts()) : the_post();
?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_search_post'); ?>>
			<div class="cmsms_search_post_number_wrap">
				<div class="cmsms_search_post_number"><?php echo esc_html($cmsms_posts_count) ?></div>
				<div class="cmsms_post_type_label"><?php 
					$post_type_obj = get_post_type_object(get_post_type());
					
					
					echo $post_type_obj->labels->singular_name;
				?></div>
			</div>
			<div class="cmsms_search_post_cont">
				<header class="cmsms_search_post_header entry-header">
					<h2 class="cmsms_search_post_title entry-title">
						<a href="<?php the_permalink(); ?>">
							<?php cmsms_title(get_the_ID(), true); ?>
						</a>
					</h2>
				</header>
				<?php 
					echo cmsms_divpdel('<div class="cmsms_search_post_content entry-content">' . "\n" . 
						wpautop(theme_excerpt(55, false)) . 
					'</div>' . "\n");
				?>
				<footer class="cmsms_post_cont_info entry-meta">
				<?php 
					if (comments_open()) {
						echo '<div class="cmsms_post_meta_info">' . 
								'<a class="cmsms_post_comments cmsms_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'interior-design') . ' ' . esc_attr(get_the_title()) . '">' . 
									'<span>' . esc_html(get_comments_number()) . '</span>' . 
								'</a>' . 
						'</div>';
					}
					
					
					if (
						get_post_type() == 'post' || 
						get_post_type() == 'project' 
					) {
						echo '<span class="cmsms_search_post_user_name">' . 
								esc_html__('By', 'interior-design') . ' ' . 
								'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" rel="author" title="' . esc_attr__('Posts by', 'interior-design') . ' ' . get_the_author_meta('display_name') . '">' . get_the_author_meta('display_name') . '</a>' . 
							'</span>';
						
						
						if (
							(
								get_post_type() == 'post' && 
								get_the_category()
							) || (
								get_post_type() == 'project' && 
								get_the_terms(get_the_ID(), 'pj-categs')
							)
						) {
							echo '<span class="cmsms_search_post_category">' . 
								esc_html__('In ', 'interior-design') . 
								(get_post_type() == 'post' ? get_the_category_list(', ') : '') . 
								(get_post_type() == 'project' ? get_the_term_list(get_the_ID(), 'pj-categs', '', ', ', '') : '') . 
							'</span>';
						}
					}
					
					
					echo '<span class="cmsms_post_date">' . 
						__('On', 'interior-design') . ' ' . 
						'<abbr class="published cmsms_search_post_date" title="' . esc_attr(get_the_date()) . '">' . 
							get_the_date() . 
						'</abbr>' . 
						'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
							get_the_modified_date() . 
						'</abbr>' . 
					'</span>';
					
					
					echo '<a class="cmsms_post_read_more" href="' . esc_url(get_permalink()) . '">' . esc_html__('Read More', 'interior-design') . '</a>'
				?>
				</footer>
			</div>
		</article>
		
<?php 
		$cmsms_posts_count += 1;
		
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

