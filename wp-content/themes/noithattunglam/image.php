<?php
/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version		1.0.0
 * 
 * Images Page Template
 * Created by CMSMasters
 * 
 */


get_header();


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div id="middle_content" role="main">' . "\n";


if (have_posts()) : the_post();
	echo '<div class="entry image-attachment">' . "\n";
	
	$metadata = wp_get_attachment_metadata();
	
	echo '<footer class="entry-meta">'; 
		edit_post_link(__('Edit Media', 'interior-design'), '<span class="edit-link fr">', '</span>');
		
		echo '<p>' . esc_html__('Published', 'interior-design') . ' <abbr class="published" title="' . esc_attr(get_the_date()) . '">' . get_the_date() . '</abbr> ' . esc_html__('at', 'interior-design') . ' ' . $metadata['width'] . '&times;' . $metadata['height'] . ' ' . esc_html__('in', 'interior-design') . ' ' . '<a href="' . esc_url(get_permalink($post->post_parent)) . '" title="' . cmsms_title($post->post_parent, false) . '">' . cmsms_title($post->post_parent, false) . '</a>.</p>' . 
	'</footer>' . 
	'<br />' . 
	'<div class="tac">' . 
		cmsmasters_thumb(get_the_ID(), 'slider-thumb', false, 'img_' . get_the_ID(), true, true, true, false, get_the_ID()) . 
	'</div>' . 
	'<div class="cl"></div>' . 
	'<br />';
?>
		<div class="navigation" role="navigation">
			<div class="fl"><?php previous_image_link(false, '&larr; ' . esc_html__('Previous', 'interior-design')); ?></div>
			<div class="fr"><?php next_image_link(false, esc_html__('Next', 'interior-design') . ' &rarr;'); ?></div>
			<div class="cl"></div>
			<br />
		</div>
<?php
	
	
	
	echo '</div>' . "\n" . 
	'<div class="divider"></div>';
endif;


comments_template();


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

