<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Profiles Page Vertical Profile Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_profile_social = get_post_meta(get_the_ID(), 'cmsms_profile_social', true);

$cmsms_profile_subtitle = get_post_meta(get_the_ID(), 'cmsms_profile_subtitle', true);

?>

<!--_________________________ Start Vertical Profile _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(((is_home() || is_archive() || is_search()) ? 'shortcode_animated' : '')); ?>>
	<?php
	if (has_post_thumbnail()) {
		echo '<div class="pl_img">' . "\n" . 
			'<figure>' . "\n" . 
				get_the_post_thumbnail(get_the_ID(), 'square-thumb', array( 
					'alt' => cmsms_title(get_the_ID(), false), 
					'title' => cmsms_title(get_the_ID(), false) 
				)) . 
				'<div class="cmsms_img_rolover">' . "\n" . 
					'<a href="' . esc_url(get_permalink()) . '"></a>' . 
				'</div>' . "\n" . 
			'</figure>' . "\n" . 
		'</div>' . "\n";
	} else {
		echo '<div class="pl_img"><a href="' . esc_url(get_permalink()) . '"><div class="pl_noimg cmsms_theme_icon_person"></div></a></div>' . "\n";
	}
	
	echo '<div class="pl_content">' . "\n" .
		'<div class="pl_content_left">' . "\n";
		
		echo '<h3 class="entry-title">' . "\n" . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . "\n" . 
		'</h3>' . "\n";
		
		if ($cmsms_profile_subtitle != '') {
			echo '<h5 class="pl_subtitle">' . esc_html($cmsms_profile_subtitle) . '</h5>' . "\n";
		}
		
		echo '</div>';
		
		
		echo '<div class="pl_content_right">' . "\n".
				'<div class="pl_social">' . "\n";
		
			if ($cmsms_profile_social != '') {
				echo '<ul class="pl_social_list">' . "\n";
				
				foreach ($cmsms_profile_social as $social_icons) {
					$social_icon = explode('|', str_replace(' ', '', $social_icons));
					
					
					echo '<li>' . "\n\t" . 
						'<a href="' . esc_url($social_icon[1]) . '" class="' . $social_icon[0] . '" title="' . esc_attr($social_icon[2]) . '"' . (($social_icon[3] == 'true') ? ' target="_blank"' : '') . '></a>' . "\r" . 
					'</li>' . "\n";
				}
				
				echo '</ul>' . "\n";
			}
			
			echo '</div>' . "\n" . 
		'</div>' . "\n" . 
	'</div>' . "\n";
	
	
	echo '<div class="entry-content">' . "\n" . 
		get_the_excerpt() . 
	'</div>' . "\n";

	?>
	<div class="cl"></div>
</article>
<!--_________________________ Finish Vertical Profile _________________________ -->

