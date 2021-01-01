<?php
/**
 * hired Theme Customizer
 *
 * @package hired
 */


/**
 * Add CSS in <head> for styles handled by the theme customizer 
 *
 * @since 1.5
 */
function hired_add_customizer_css() {
	
?>
	<!-- hired customizer CSS --> 
	<style> 
	
		<?php if ( get_theme_mod( 'hired_nav_button_bg' ) ) : ?>
		.main-navigation button, .main-navigation input[type="button"], .main-navigation input[type="reset"], .main-navigation input[type="submit"], .push-body-toright button.menu-toggle { background: <?php echo esc_attr( get_theme_mod( 'hired_nav_button_bg', '#25b5f1' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_nav_button_bg' ) ) : ?>
		.main-navigation button, .main-navigation input[type="button"], .main-navigation input[type="reset"], .main-navigation input[type="submit"], .push-body-toright button.menu-toggle { border-color: <?php echo esc_attr( get_theme_mod( 'hired_nav_button_bg', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_nav_button_hover_bg' ) ) : ?>
		.main-navigation button:hover, .main-navigation input[type="button"]:hover, .main-navigation input[type="reset"]:hover, .main-navigation input[type="submit"]:hover, .push-body-toright button.menu-toggle:hover { background: <?php echo esc_attr( get_theme_mod( 'hired_nav_button_hover_bg', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_nav_button_hover_bg' ) ) : ?>
		.main-navigation button:hover, .main-navigation input[type="button"]:hover, .main-navigation input[type="reset"]:hover, .main-navigation input[type="submit"]:hover, .push-body-toright button.menu-toggle:hover { border-color: <?php echo esc_attr( get_theme_mod( 'hired_nav_button_hover_bg', '#07a2e2' )) ?>; } 
		<?php endif; ?> 
		
		
		<?php if ( get_theme_mod( 'hired_nav_button_text_color' ) ) : ?>
		.main-navigation button, .main-navigation input[type="button"], .main-navigation input[type="reset"], .main-navigation input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'hired_nav_button_text_color', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_nav_bg_color' ) ) : ?>
		.cbp-primary { background: <?php echo esc_attr( get_theme_mod( 'hired_nav_bg_color', '#25b5f1' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_nav_link_color' ) ) : ?>
		.cbp-primary a { color: <?php echo esc_attr( get_theme_mod( 'hired_nav_link_color', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_nav_link_hover_color' ) ) : ?>
		.cbp-primary a:hover { color: <?php echo esc_attr( get_theme_mod( 'hired_nav_link_hover_color', '#ffffff' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_text_color' ) ) : ?> 
		body, textarea, p { color: <?php echo esc_attr( get_theme_mod( 'hired_text_color', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_link_color' ) ) : ?>
		a { color: <?php echo esc_attr( get_theme_mod( 'hired_link_color', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hover_color' ) ) : ?>
		a:hover { color: <?php echo esc_attr( get_theme_mod( 'hired_hover_color', '#07a2e2' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_body_size' ) ) : ?>
		body, p { font-size: <?php echo esc_attr( get_theme_mod( 'hired_body_size', '16' )) ?>px; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_site_title_color' ) ) : ?>
		h1.site-title a { color: <?php echo esc_attr( get_theme_mod( 'hired_site_title_color', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_button_color' ) ) : ?>
		button, input[type="button"], input[type="reset"], input[type="submit"] { background: <?php echo esc_attr( get_theme_mod( 'hired_button_color', '#25b5f1' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_button_color' ) ) : ?> 
		button, input[type="button"], input[type="reset"], input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'hired_button_color', '#25b5f1' )) ?>; }    
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_button_hover_color' ) ) : ?>
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { background: <?php echo esc_attr( get_theme_mod( 'hired_button_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_button_hover_color' ) ) : ?>  
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'hired_button_hover_color', '#07a2e2' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_social_color' ) ) : ?>
		.social-media-icons li .fa  { color: <?php echo esc_attr( get_theme_mod( 'hired_social_color', '#cccccc' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_social_color_hover' ) ) : ?>
		.social-media-icons li .fa:hover { color: <?php echo esc_attr( get_theme_mod( 'hired_social_color_hover', '#ffffff' )) ?>; 
		}
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_social_bg_color' ) ) : ?>
		.social-media-icons li .fa  { background-color: <?php echo esc_attr( get_theme_mod( 'hired_social_bg_color', '#ffffff' )) ?>;  
		} 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_social_border_color' ) ) : ?>
		.social-media-icons li .fa  { border-color: <?php echo esc_attr( get_theme_mod( 'hired_social_border_color', '#eaeaea' )) ?>; 
		} 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_social_bg_color_hover' ) ) : ?>
		.social-media-icons li .fa:hover { background-color: <?php echo esc_attr( get_theme_mod( 'hired_social_bg_color_hover', '#dadada' )) ?>;  
		}
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_social_bg_color_hover' ) ) : ?>
		.social-media-icons li .fa:hover { border-color: <?php echo esc_attr( get_theme_mod( 'hired_social_bg_color_hover', '#dadada' )) ?>; 
		}
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_social_text_size' ) ) : ?>
		.social-media-icons li .fa { font-size: <?php echo esc_attr( get_theme_mod( 'hired_social_text_size', '30' )) ?>px; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_info_bg_color' ) ) : ?>
		#home-content { background: <?php echo esc_attr( get_theme_mod( 'hired_home_info_bg_color' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_home_text_color' ) ) : ?>
		#home-content, #home-content p { color: <?php echo esc_attr( get_theme_mod( 'hired_home_text_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_heading_color' ) ) : ?>
		#home-content h1, #home-content h2, #home-content h3, #home-content h4, #home-content h5, #home-content h6 { color: <?php echo esc_attr( get_theme_mod( 'hired_home_heading_color', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_link_color' ) ) : ?>
		#home-content a { color: <?php echo esc_attr( get_theme_mod( 'hired_home_link_color', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_link_hover_color' ) ) : ?>
		#home-content a:hover { color: <?php echo esc_attr( get_theme_mod( 'hired_home_link_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_icon_color' ) ) : ?>
		ul.home-details li .fa { color: <?php echo esc_attr( get_theme_mod( 'hired_home_icon_color', '#25b5f1' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_home_button_one_color' ) ) : ?>
		#home-content button, #home-content input[type="button"], #home-content input[type="reset"], #home-content input[type="submit"] { background-color: <?php echo esc_attr( get_theme_mod( 'hired_home_button_one_color', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_button_one_border_color' ) ) : ?>
		#home-content button, #home-content input[type="button"], #home-content input[type="reset"], #home-content input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'hired_home_button_one_border_color', '#25b5f1' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_home_button_one_text_color' ) ) : ?>
		#home-content button, #home-content input[type="button"], #home-content input[type="reset"], #home-content input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'hired_home_button_one_text_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_button_hover_color' ) ) : ?>
		#home-content button:hover, #home-content input[type="button"]:hover, #home-content input[type="reset"]:hover, #home-content input[type="submit"]:hover { background-color: <?php echo esc_attr( get_theme_mod( 'hired_home_button_hover_color', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_button_hover_color' ) ) : ?>
		#home-content button:hover, #home-content input[type="button"]:hover, #home-content input[type="reset"]:hover, #home-content input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'hired_home_button_hover_color', '#25b5f1' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_home_button_two_color' ) ) : ?>
		#home-content button.resume { background-color: <?php echo esc_attr( get_theme_mod( 'hired_home_button_two_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_button_two_border_color' ) ) : ?> 
		#home-content button.resume { border-color: <?php echo esc_attr( get_theme_mod( 'hired_home_button_two_border_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_button_two_text_color' ) ) : ?>
		#home-content button.resume { color: <?php echo esc_attr( get_theme_mod( 'hired_home_button_two_text_color', '#111111' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_button_two_hover_color' ) ) : ?>
		#home-content button.resume:hover { background-color: <?php echo esc_attr( get_theme_mod( 'hired_home_button_two_hover_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_home_button_two_hover_color' ) ) : ?>
		#home-content button.resume:hover { border-color: <?php echo esc_attr( get_theme_mod( 'hired_home_button_two_hover_color', '#ffffff' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_home_divider' ) ) : ?>
		ul.home-details { border-color: <?php echo esc_attr( get_theme_mod( 'hired_home_divider', '#888888' )) ?>; }
		<?php endif; ?>   
		
		<?php if ( get_theme_mod( 'hired_about_bg_color' ) ) : ?>
		.bio-image::after { background: rgba(0, 0, 0, 0) linear-gradient(to top, <?php echo esc_attr( get_theme_mod( 'hired_about_bg_color', '#25b5f1' )) ?>, rgba(37, 181, 241, 0)) repeat scroll 0 0; }  
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'hired_about_bg_color' ) ) : ?>
		.bio-content, #content .cbp-spmenu { background: <?php echo esc_attr( get_theme_mod( 'hired_about_bg_color', '#25b5f1' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_about_text_color' ) ) : ?>
		.bio-content, .bio-content p { color: <?php echo esc_attr( get_theme_mod( 'hired_about_text_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_about_heading_color' ) ) : ?>
		.bio-content h1, .bio-content h2, .bio-content h3, .bio-content h4, .bio-content h5, .bio-content h6 { color: <?php echo esc_attr( get_theme_mod( 'hired_about_heading_color', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_about_link_color' ) ) : ?>
		.bio-content a { color: <?php echo esc_attr( get_theme_mod( 'hired_about_link_color', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_about_link_hover_color' ) ) : ?>
		.bio-content a:hover { color: <?php echo esc_attr( get_theme_mod( 'hired_about_link_hover_color', '#07a2e2' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_entry' ) ) : ?>
		.single-entry-header { color: <?php echo esc_attr( get_theme_mod( 'hired_entry', '#ffffff' )) ?>; }
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'hired_page_header_bg' ) ) : ?>
		.single-entry-header { background-color: <?php echo esc_attr( get_theme_mod( 'hired_page_header_bg', '#333333' )) ?> !important; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_blog_entry_bg' ) ) : ?>
		.blog-archive-container article { background: <?php echo esc_attr( get_theme_mod( 'hired_blog_entry_bg', '#ffffff' )) ?> !important; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_blog_post_bg_color' ) ) : ?>
		#single-content-container article.post, #single-content-container article.project, li.comment article { background: <?php echo esc_attr( get_theme_mod( 'hired_blog_post_bg_color', '#ffffff' )) ?> !important; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_blog_post_bg_color' ) ) : ?>
		#single-content-container article.post, #single-content-container article.project, li.comment article { background: <?php echo esc_attr( get_theme_mod( 'hired_blog_post_bg_color', '#ffffff' )) ?> !important; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_blog_title_color' ) ) : ?>
		.blog-archive-container article .entry-title a { color: <?php echo esc_attr( get_theme_mod( 'hired_blog_title_color', '#444444' )) ?>; } 
		<?php endif; ?> 
		
		
		
		<?php if ( get_theme_mod( 'hired_footer_text_color' ) ) : ?>
		.site-info { color: <?php echo esc_attr( get_theme_mod( 'hired_footer_text_color', '#b3b3b3' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_footer_link_color' ) ) : ?>
		.site-info a { color: <?php echo esc_attr( get_theme_mod( 'hired_footer_link_color', '#25b5f1' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_footer_link_hover_color' ) ) : ?>
		.site-info a:hover { color: <?php echo esc_attr( get_theme_mod( 'hired_footer_link_hover_color', '#07a2e2' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_home_page_bg_color' ) ) : ?>
		body.body-home { background: <?php echo esc_attr( get_theme_mod( 'hired_home_page_bg_color', '#111111' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_social_bar_color' ) ) : ?>
		.site-header { background: <?php echo esc_attr( get_theme_mod( 'hired_social_bar_color', '#ffffff' )) ?>; }
		<?php endif; ?> 
		
		
		<?php if ( get_theme_mod( 'hired_plugin_service_home_icon_color' ) ) : ?>  
		 .bio-content #mt-services .fa  { color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_service_home_icon_color', '#ffffff' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_plugin_service_home_icon_bg_color' ) ) : ?> 
		 .bio-content #mt-services .fa  { background-color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_service_home_icon_bg_color' )) ?>; }   
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_plugin_service_home_icon_border_color' ) ) : ?>  
		 .bio-content #mt-services .fa  { border-color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_service_home_icon_border_color', '#ffffff' )) ?>; }   
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_plugin_service_page_icon_color' ) ) : ?>  
		 .content-area #mt-services .fa  { color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_service_page_icon_color', '#404040' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_plugin_service_page_icon_bg_color' ) ) : ?> 
		 .content-area #mt-services .fa  { background-color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_service_page_icon_bg_color' )) ?> !important; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_plugin_service_page_icon_border_color' ) ) : ?>  
		 .content-area #mt-services .fa  { border-color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_service_page_icon_border_color', '#404040' )) ?> !important; }   
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'hired_plugin_project_hover_color' ) ) : ?> 
		 .project-box { background-color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_project_hover_color', '#151515' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_plugin_project_hover_text_color' ) ) : ?>
		.bio-content .project-box .project-content h3, .project-box .project-content h3 { color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_project_hover_text_color', '#ffffff' )) ?> !important; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_plugin_testimonial_bg' ) ) : ?> 
		 #secondary > #mt-testimonials .testimonial p, .shortcodes .testimonial p  { background: <?php echo esc_attr( get_theme_mod( 'hired_plugin_testimonial_bg', '#ffffff' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_plugin_testimonial_text_color' ) ) : ?> 
		 #secondary > #mt-testimonials .testimonial p, .shortcodes .testimonial p  { color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_testimonial_text_color', '#ffffff' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( 'option1' == hired_sanitize_index_content( get_theme_mod( 'hired_plugin_testimonial_font_style' ) ) ) : ?>
		#secondary > #mt-testimonials .testimonial p, .shortcodes .testimonial p  { font-style: italic; } 
		<?php else : ?>
		#secondary > #mt-testimonials .testimonial p, .shortcodes .testimonial p  { font-style: normal; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_plugin_skill_color' ) ) : ?> 
		.progressBar div { background-color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_skill_color', '#12cc96' )) ?>; }   
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_plugin_skill_bg_color' ) ) : ?> 
		.progressBar { background-color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_skill_bg_color', '#dddddd' )) ?>; }   
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_plugin_skill_text' ) ) : ?> 
		.progressBar div { color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_skill_text', '#cccccc' )) ?>; }   
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_plugin_detail_icon_color' ) ) : ?> 
		#mt-details .fa { color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_detail_icon_color', '#404040' )) ?>; }   
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_plugin_detail_text_color' ) ) : ?> 
		.odometer.odometer-auto-theme, .odometer.odometer-theme-default { color: <?php echo esc_attr( get_theme_mod( 'hired_plugin_detail_text_color', '#404040' )) ?>; }   
		<?php endif; ?> 
		
		
		
		
		<?php if ( get_theme_mod( 'hired_hw_area_1_heading_color' ) ) : ?>
		.home-widget-one h1, .home-widget-one h2, .home-widget-one h3, .home-widget-one h4, .home-widget-one h5, .home-widget-one h6 { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_1_heading_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_1_text_color' ) ) : ?> 
		.home-widget-one, .home-widget-one p { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_1_text_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_1_link_color' ) ) : ?>
		.home-widget-one a { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_1_link_color', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_1_link_hover_color' ) ) : ?>
		.home-widget-one a:hover { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_1_link_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_1_button_color' ) ) : ?>
		.home-widget-one button { background: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_1_button_color', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_1_button_color' ) ) : ?> 
		.home-widget-one button { border-color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_1_button_color', '#25b5f1' )) ?>; }   
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_hw_area_1_button_hover_color' ) ) : ?>
		.home-widget-one button:hover { background: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_1_button_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_1_button_hover_color' ) ) : ?>
		.home-widget-one button:hover { border-color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_1_button_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'hired_hw_area_2_heading_color' ) ) : ?>
		.home-widget-two h1, .home-widget-two h2, .home-widget-two h3, .home-widget-two h4, .home-widget-two h5, .home-widget-two h6 { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_2_heading_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_2_text_color' ) ) : ?>
		.home-widget-two, .home-widget-two p { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_2_text_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_2_link_color' ) ) : ?>
		.home-widget-two a { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_2_link_color', '#25b5f1' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_hw_area_2_link_hover_color' ) ) : ?>
		.home-widget-two a:hover { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_2_link_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_2_button_color' ) ) : ?>
		.home-widget-two button { background: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_2_button_color', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_2_button_color' ) ) : ?> 
		.home-widget-two button { border-color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_2_button_color', '#25b5f1' )) ?>; }   
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_hw_area_2_button_hover_color' ) ) : ?>
		.home-widget-two button:hover { background: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_2_button_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_2_button_hover_color' ) ) : ?>
		.home-widget-two button:hover { border-color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_2_button_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		
		<?php if ( get_theme_mod( 'hired_hw_area_3_heading_color' ) ) : ?>
		.home-widget-three h1, .home-widget-three h2, .home-widget-three h3, .home-widget-three h4, .home-widget-three h5, .home-widget-three h6 { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_3_heading_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_3_text_color' ) ) : ?>
		.home-widget-three, .home-widget-three p { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_3_text_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_3_link_color' ) ) : ?>
		.home-widget-three a { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_3_link_color', '#25b5f1' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_hw_area_3_link_hover_color' ) ) : ?>
		.home-widget-three a:hover { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_3_link_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		 
		<?php if ( get_theme_mod( 'hired_hw_area_3_button_color' ) ) : ?>
		.home-widget-three button { background: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_3_button_color', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_3_button_color' ) ) : ?>
		.home-widget-three button { border-color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_3_button_color', '#25b5f1' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_3_button_hover_color' ) ) : ?>
		.home-widget-three button:hover { background: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_3_button_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_3_button_hover_color' ) ) : ?>
		.home-widget-three button:hover { border-color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_3_button_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'hired_hw_area_4_heading_color' ) ) : ?>
		.home-widget-four h1, .home-widget-four h2, .home-widget-four h3, .home-widget-four h4, .home-widget-four h5, .home-widget-four h6 { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_4_heading_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_4_text_color' ) ) : ?>
		.home-widget-four, .home-widget-four p { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_4_text_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_4_link_color' ) ) : ?>
		.home-widget-four a { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_4_link_color', '#25b5f1' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_hw_area_4_link_hover_color' ) ) : ?>
		.home-widget-four a:hover { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_4_link_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		 
		<?php if ( get_theme_mod( 'hired_hw_area_4_button_color' ) ) : ?>
		.home-widget-four button { background: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_4_button_color', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_4_button_color' ) ) : ?>
		.home-widget-four button { border-color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_4_button_color', '#25b5f1' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_4_button_hover_color' ) ) : ?>
		.home-widget-four button:hover { background: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_4_button_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_4_button_hover_color' ) ) : ?>
		.home-widget-four button:hover { border-color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_4_button_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		
		 
		<?php if ( get_theme_mod( 'hired_hw_area_5_heading_color' ) ) : ?>
		.home-widget-five h1, .home-widget-five h2, .home-widget-five h3, .home-widget-five h4, .home-widget-five h5, .home-widget-five h6 { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_5_heading_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_5_text_color' ) ) : ?>
		.home-widget-five, .home-widget-five p { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_5_text_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_5_link_color' ) ) : ?>
		.home-widget-five a { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_5_link_color', '#25b5f1' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_hw_area_5_link_hover_color' ) ) : ?>
		.home-widget-five a:hover { color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_5_link_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		 
		<?php if ( get_theme_mod( 'hired_hw_area_5_button_color' ) ) : ?>
		.home-widget-five button { background: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_5_button_color', '#25b5f1' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_5_button_color' ) ) : ?>
		.home-widget-five button { border-color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_5_button_color', '#25b5f1' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_5_button_hover_color' ) ) : ?>
		.home-widget-five button:hover { background: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_5_button_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'hired_hw_area_5_button_hover_color' ) ) : ?>
		.home-widget-five button:hover { border-color: <?php echo esc_attr( get_theme_mod( 'hired_hw_area_5_button_hover_color', '#07a2e2' )) ?>; } 
		<?php endif; ?> 
		
		
		<?php if ( get_theme_mod( 'hired_about_button_color' ) ) : ?>
		button.hired-about-button { background: <?php echo esc_attr( get_theme_mod( 'hired_about_button_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		 
		<?php if ( get_theme_mod( 'hired_about_button_color' ) ) : ?>
		button.hired-about-button { border-color: <?php echo esc_attr( get_theme_mod( 'hired_about_button_color', '#ffffff' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_about_button_text_color' ) ) : ?>
		button.hired-about-button { color: <?php echo esc_attr( get_theme_mod( 'hired_about_button_text_color', '#25b5f1' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_about_button_hover_color' ) ) : ?>
		button.hired-about-button:hover { background: <?php echo esc_attr( get_theme_mod( 'hired_about_button_hover_color', '#ffffff' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'hired_about_button_hover_color' ) ) : ?>
		button.hired-about-button:hover { border-color: <?php echo esc_attr( get_theme_mod( 'hired_about_button_hover_color', '#ffffff' )) ?>; }  
		<?php endif; ?> 
		
		
		<?php if ( get_theme_mod( 'hired_about_me_page_bg' ) ) : ?>
		.hired-aboutme-page { background-color: <?php echo esc_attr( get_theme_mod( 'hired_about_me_page_bg', '#f1f1f1' )) ?>; }  
		<?php endif; ?>   
		
		<?php if ( get_theme_mod( 'hired_about_me_page_header' ) ) : ?>
		.hired-aboutme-header { background-color: <?php echo esc_attr( get_theme_mod( 'hired_about_me_page_header', '#333333' )) ?> !important; }   
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'hired_about_me_page_title' ) ) : ?>
		.hired-aboutme-header .entry-title { color: <?php echo esc_attr( get_theme_mod( 'hired_about_me_page_title', '#ffffff' )) ?>; }   
		<?php endif; ?>
		
		
	</style>
<?php }


add_action( 'wp_head', 'hired_add_customizer_css' );  

