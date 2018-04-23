<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.6
 * 
 * Content Composer Sc Name Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();


global $cmsms_pj_metadata;


$cmsms_pj_metadata = $metadata;


global $cmsms_pj_layout_mode;


$cmsms_pj_layout_mode = $layout_mode;


$more_text = ($more_text != '') ? $more_text : __('Load More Projects', 'interior-design');

$filter_text = ($filter_text != '') ? $filter_text : __('Filter', 'interior-design');

$filter_cats_text = ($filter_cats_text != '') ? $filter_cats_text : __('All Categories', 'interior-design');

$sorting_name_text = ($sorting_name_text != '') ? $sorting_name_text : __('Name', 'interior-design');

$sorting_date_text = ($sorting_date_text != '') ? $sorting_date_text : __('Date', 'interior-design');


$out = "<div class=\"cmsms_wrap_portfolio entry-summary\" id=\"portfolio_{$unique_id}\">
	<script type=\"text/javascript\">
	jQuery(document).ready(function () {
	(function ($) {
		if ($('#portfolio_{$unique_id}').find('article').length == '0') {
			return false;
		}
		

		startPortfolio( 
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


if ($filter != '' || $sorting != '') {
	$out .= "<div class=\"cmsms_project_filter_wrap\">
		<div class=\"cmsms_project_filter\">
			<span class=\"cmsms_project_filter_loader\"></span>";
			
			if ($filter != '') {
				$out .= "<div class=\"cmsms_project_filter_block\">
					<ul class=\"cmsms_project_filter_list\">
						<li class=\"current\">
							<a class=\"button\" data-filter=\"article.project\"  title=\"" . $filter_cats_text . "\" href=\"javascript:void(0);\">
								<span>" . $filter_cats_text . "</span>
							</a>
						</li>";
						
						
						if ($categories != '') {
							$cat_array = explode(',', $categories);
							
							
							for ($i = 0; $i < count($cat_array); $i++) {
								$idObj = get_term_by('slug', $cat_array[$i], 'pj-categs');
								
								$cat_array[$i] = $idObj->term_id;
							}
						} else {
							$cat_array = $categories;
						}
						
						
						$cat_args = array( 
							'orderby' => 	'name', 
							'include' => 	$cat_array 
						);
						
						
						$project_categs = get_terms('pj-categs', $cat_args);
						
						
						if (is_array($project_categs) && !empty($project_categs)) {
							foreach ($project_categs as $project_categ) {
								$out .= "<li>
									<a class=\"button\" href=\"#\" data-filter=\"article.project[data-category~='{$project_categ->slug}']\" title=\"{$project_categ->name}\">
										<span>{$project_categ->name}</span>
									</a>
								</li>";
							}
						}
					
					$out .= "</ul>
				</div>";
			}
			
			
			
			if ($sorting != '') {
				$out .= "<div class=\"cmsms_project_sort_block\">
					<a href=\"#\" name=\"project_name\" title=\"" . $sorting_name_text . "\" class=\"button cmsms_project_sort_but cmsms_theme_icon_slide_bottom" . 
					(($orderby == 'name') ? " current" . 
					(($order == 'DESC') ? " reversed" : "") : "") . 
					"\">
						<span>" . $sorting_name_text . "</span>
					</a>
					<a href=\"#\" name=\"project_date\" title=\"" . $sorting_date_text . "\" class=\"button cmsms_project_sort_but cmsms_theme_icon_slide_bottom" . 
					(($orderby == 'date') ? " current" . 
					(($order == 'DESC') ? " reversed" : "") : "") . 
					"\">
						<span>" . $sorting_date_text . "</span>
					</a>
				</div>";
			}
			
		$out .= "</div>
	</div>";
}

$out .= '<div class="portfolio ' . $layout . ' ' . $gap . '_gap ' . $layout_mode . 
	(($layout != 'puzzle') ? ' cmsms_' . $columns : '') . 
	(($classes != '') ? ' ' . $classes : '') . 
'">';


$orderby = ($orderby == 'popular') ? 'meta_value_num' : $orderby;


$args = array( 
	'post_type' => 				'project', 
	'orderby' => 				$orderby, 
	'order' => 					$order, 
	'posts_per_page' => 		$count 
);

if ($layout == 'puzzle') {
	$args['ignore_sticky_posts'] = true;
}

if ($categories != '') {
	$cat_array = explode(",", $categories);
	
	$args['tax_query'] = array( 
		array( 
			'taxonomy' => 'pj-categs', 
			'field' => 'slug', 
			'terms' => $cat_array 
		)
	);
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
		if ($layout == 'puzzle') {
			if (get_post_format() != '') {
				$out .= load_template_part('framework/postType/portfolio/page/puzzle/' . get_post_format());
			} else {
				$out .= load_template_part('framework/postType/portfolio/page/puzzle/standard');
			}
		} else {
			if (get_post_format() != '') {
				$out .= load_template_part('framework/postType/portfolio/page/grid/' . get_post_format());
			} else {
				$out .= load_template_part('framework/postType/portfolio/page/grid/standard');
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
	$out .= '<div class="cmsms_wrap_more_projects">';
	
		if ($pagination == 'pagination' && $query->max_num_pages > 1) {
			$out .= cmsms_pagination($query->max_num_pages);
		} elseif ($pagination == 'more' && $query->found_posts > $count) {
			$out .= "<div class=\"cmsms_wrap_project_loader\">
				<a href=\"javascript:void(0);\" class=\"cmsms_button cmsms_project_loader\">
					<span>" . $more_text . "</span>
				</a>
			</div>";
		}
	
	$out .= '</div>';
}

$out .= '</div>';


wp_reset_postdata();
