<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.6
 * 
 * Content Composer Posts Slider Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();


global $cmsms_metadata;


$cmsms_metadata = $metadata;


$more_text = ($more_text != '') ? $more_text : __('Load More Posts', 'interior-design');


$filter_cats_text = ($filter_cats_text != '') ? $filter_cats_text : __('All Categories', 'interior-design');


$out = "<div class=\"cmsms_wrap_blog entry-summary\" id=\"blog_{$unique_id}\">";


if ( 
	$layout != 'standard' || 
	($layout == 'standard' && $pagination == 'more') 
) {
	wp_enqueue_style('isotope');
	
	
	wp_enqueue_script('isotope');
	
	wp_enqueue_script('isotopeMode');
	
	
	$out .= "<script type=\"text/javascript\">
jQuery(document).ready(function () {
(function ($) {
	if ($('#blog_{$unique_id}').find('article').length == '0') {
		return false;
	}
	

	startBlog( 
		'" . $unique_id . "', 
		'" . $layout . "', 
		'" . $layout_mode . "', 
		'" . CMSMS_CONTENT_COMPOSER_URL . "', 
		'" . $orderby . "', 
		'" . $order . "', 
		'" . $count . "', 
		'" . $categories . "', 
		'" . $metadata . "' 
	);
} )(jQuery);
} );
</script>
";

	if ($filter !== '') {
		$out .= "<div class=\"cmsms_post_filter_wrap\">
			<div class=\"cmsms_post_filter\">
				<span class=\"cmsms_post_filter_loader\"></span>
				<div class=\"cmsms_post_filter_block\">
					<ul class=\"cmsms_post_filter_list\">
						<li class=\"current\">
							<a class=\"button\" data-filter=\"article.post\"  title=\"" . $filter_cats_text . "\" href=\"javascript:void(0);\">
								<span>" . $filter_cats_text . "</span>
							</a>
						</li>";
						
						
						$cat_args = array( 
							'orderby' => 	'name' 
						);
						
						
						if ($categories != '') {
							$cat_array = explode(',', $categories);
							
							
							for ($i = 0; $i < count($cat_array); $i++) {
								$idObj = get_category_by_slug($cat_array[$i]);
								
								$cat_array[$i] = $idObj->term_id;
							}
						} else {
							$cat_array = $categories;
						}
						
						
						if (count($cat_array) == 1 && $categories != '') {
							$cat_args['child_of'] = $categories;
						} elseif (count($cat_array) > 1) {
							$cat_args['include'] = $cat_array;
						}
						
						
						$post_categs = get_terms('category', $cat_args);
						
						
						if (is_array($post_categs) && !empty($post_categs)) {
							foreach ($post_categs as $post_categ) {
								$out .= "<li>
									<a class=\"button\" href=\"#\" data-filter=\"article.post[data-category~='{$post_categ->slug}']\" title=\"{$post_categ->name}\">
										<span>{$post_categ->name}</span>
									</a>
								</li>";
							}
						}
						
					$out .= "</ul>
				</div>
			</div>
		</div>";
	}
}

$out .= '<div class="blog ' . 
	$layout . 
	(($layout_mode !== '') ? ' ' . $layout_mode : '') . 
	(($columns !== '') ? ' cmsms_' . $columns : '') . 
	(($classes !== '') ? ' ' . $classes : '') . 
'">';


$orderby = ($orderby == 'popular') ? 'meta_value_num' : $orderby;


$args = array( 
	'post_type' => 				'post', 
	'orderby' => 				$orderby, 
	'order' => 					$order, 
	'posts_per_page' => 		$count, 
	'category_name' => 			$categories 
);


if ($pagination == 'more') {
	$args['ignore_sticky_posts'] = 1;
}


if ($pagination == 'pagination') {
	if (get_query_var('paged')) { 
		$paged = get_query_var('paged'); 
	} elseif (get_query_var('page')) { 
		$paged = get_query_var('page'); 
	} else { 
		$paged = 1; 
	}
	
	
	$args['paged'] = $paged;
}


if ($orderby == 'meta_value_num') {
	$args['meta_key'] = 'cmsms_likes';
}


$query = new WP_Query($args);


if ($query->have_posts()) : 
	while ($query->have_posts()) : $query->the_post();
		if ($layout == 'columns') {
			if ($layout_mode == 'puzzle') {
				if (get_post_format() != '') {
					$out .= load_template_part('framework/postType/blog/page/puzzle/' . get_post_format());
				} else {
					$out .= load_template_part('framework/postType/blog/page/puzzle/standard');
				}
			} else {
				if (get_post_format() != '') {
					$out .= load_template_part('framework/postType/blog/page/masonry/' . get_post_format());
				} else {
					$out .= load_template_part('framework/postType/blog/page/masonry/standard');
				}
			}
		} elseif ($layout == 'timeline') {
			if (get_post_format() != '') {
				$out .= load_template_part('framework/postType/blog/page/timeline/' . get_post_format());
			} else {
				$out .= load_template_part('framework/postType/blog/page/timeline/standard');
			}
		} else {
			if (get_post_format() != '') {
				$out .= load_template_part('framework/postType/blog/page/default/' . get_post_format());
			} else {
				$out .= load_template_part('framework/postType/blog/page/default/standard');
			}
		}
	endwhile;
	
	
	if ($pagination == 'more') {
		wp_enqueue_style('mediaelement');
		
		wp_enqueue_style('wp-mediaelement');
		
		
		wp_enqueue_script('mediaelement');
		
		wp_enqueue_script('wp-mediaelement');
	}
endif;


$out .= '</div>';


if ($pagination !== 'disabled') {
	$out .= '<div class="cmsms_wrap_more_posts">';
	
		if ($pagination == 'pagination' && $query->max_num_pages > 1) {
			$out .= cmsms_pagination($query->max_num_pages);
		} elseif ($pagination == 'more' && $query->found_posts > $count) {
			$out .= "<div class=\"cmsms_wrap_post_loader\">
				<a href=\"javascript:void(0);\" class=\"cmsms_button cmsms_post_loader\">
					<span>" . $more_text . "</span>
				</a>
			</div>";
		}
	
	$out .= '</div>';
}

$out .= '</div>';


wp_reset_postdata();

