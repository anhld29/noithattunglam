<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Profile Standard Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsmasters_get_global_options();


$cmsms_profile_title = get_post_meta(get_the_ID(), 'cmsms_profile_title', true);

$cmsms_profile_subtitle = get_post_meta(get_the_ID(), 'cmsms_profile_subtitle', true);

$cmsms_profile_features = get_post_meta(get_the_ID(), 'cmsms_profile_features', true);

$cmsms_profile_social = get_post_meta(get_the_ID(), 'cmsms_profile_social', true);


$cmsms_profile_details_title = get_post_meta(get_the_ID(), 'cmsms_profile_details_title', true);


$cmsms_profile_features_one_title = get_post_meta(get_the_ID(), 'cmsms_profile_features_one_title', true);
$cmsms_profile_features_one = get_post_meta(get_the_ID(), 'cmsms_profile_features_one', true);

$cmsms_profile_features_two_title = get_post_meta(get_the_ID(), 'cmsms_profile_features_two_title', true);
$cmsms_profile_features_two = get_post_meta(get_the_ID(), 'cmsms_profile_features_two', true);

$cmsms_profile_features_three_title = get_post_meta(get_the_ID(), 'cmsms_profile_features_three_title', true);
$cmsms_profile_features_three = get_post_meta(get_the_ID(), 'cmsms_profile_features_three', true);


$profile_details = '';

if (
	$cmsms_option[CMSMS_SHORTNAME . '_profile_post_cat'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_profile_post_comment'] || 
	(
		!empty($cmsms_profile_features[0][0]) && 
		!empty($cmsms_profile_features[0][1])
	)
) {
	$profile_details = 'true';
}


$profile_sidebar = '';

if (
	$profile_details == 'true' || 
	$cmsms_profile_social != '' || 
	(
		!empty($cmsms_profile_features_one[0][0]) && 
		!empty($cmsms_profile_features_one[0][1])
	) || (
		!empty($cmsms_profile_features_two[0][0]) && 
		!empty($cmsms_profile_features_two[0][1])
	) || (
		!empty($cmsms_profile_features_three[0][0]) && 
		!empty($cmsms_profile_features_three[0][1])
	)
) {
	$profile_sidebar = 'true';
}

?>

<!--_________________________ Start Standard Profile _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ($cmsms_profile_title == 'true') {
		echo '<header class="cmsms_profile_header entry-header">';
			cmsmasters_profile_title_nolink(get_the_ID(), 'h2', $cmsms_profile_subtitle, 'h6');
		echo '</header>';
	}
	
	echo '<div class="profile_content' . (($profile_sidebar == 'true') ? ' with_sidebar' : '') . '">' . 
		'<div class="cmsms_profile_content entry-content">' . "\n";
		
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
	
	
	if ($profile_sidebar == 'true') {
		echo '<div class="profile_sidebar">';
		
			if ($profile_details == 'true') {
				echo '<div class="profile_details entry-meta">' . 
				
					'<h5 class="profile_details_title">' . esc_html($cmsms_profile_details_title) . '</h5>';
					
					cmsmasters_profile_features('details', $cmsms_profile_features, false, 'h5', true);
					
					cmsmasters_profile_category(get_the_ID(), 'pl-categs', 'post');
					
					cmsmasters_profile_comments('post');
					
					cmsmasters_profile_like('post');
					
				echo '</div>';
			}
			
			
			cmsmasters_profile_features('features', $cmsms_profile_features_one, $cmsms_profile_features_one_title, 'h5', true);
			
			cmsmasters_profile_features('features', $cmsms_profile_features_two, $cmsms_profile_features_two_title, 'h5', true);
			
			cmsmasters_profile_features('features', $cmsms_profile_features_three, $cmsms_profile_features_three_title, 'h5', true);
			
			
			cmsmasters_profile_social_icons($cmsms_profile_social, esc_html__('Socials', 'interior-design'), 'h5');
		
		echo '</div>';
	}
	?>
	<div class="cl"></div>
</article>
<!--_________________________ Finish Standard Profile _________________________ -->

