<?php 


function hired_admin_page_styles() {  
    wp_enqueue_style( 'hired-font-awesome-admin', get_template_directory_uri() . '/fonts/font-awesome.css' ); 
	wp_enqueue_style( 'hired-style-admin', get_template_directory_uri() . '/panel/css/theme-admin-style.css' ); 
}
add_action( 'admin_enqueue_scripts', 'hired_admin_page_styles' );

     
    add_action('admin_menu', 'hired_setup_menu');   
     
    function hired_setup_menu(){
    	add_theme_page( esc_html__('Hired Documentation', 'hired' ), esc_html__('Hired Documentation', 'hired' ), 'edit_theme_options', 'hired-setup', 'hired_init' ); 
    }  
     
 	function hired_init(){ 
	 	echo '<div class="grid grid-pad"><div class="col-1-1"><h1 style="text-align: center;">'; 
		printf(esc_html__('Thank you for using Hired!', 'hired' )); 
        echo "</h1></div></div>";
			
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;" ><div class="col-1-1"><h2>'; 
		printf(esc_html__('Documentation', 'hired' )); 
        echo '</h2>';  
		
		echo '<p>';
		printf(esc_html__('Check out our Hired Documentation to learn how to use Hired and for tutorials on theme functions. ', 'hired' ));  
		echo '</p>'; 
		
		echo '<a href="https://modernthemes.net/documentation/hired-theme-documentation/" target="_blank"><button>';
		printf(esc_html__('Documentation', 'hired' ));
		echo '</button></a></div></div>'; 
		
		
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h2>';   
		printf( esc_html__( 'Changelog' , 'hired' ) );
        echo "</h2>";
		
		echo '<p style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px; text-align: center;">';  
		printf( esc_html__('1.0.0 - New Theme!', 'hired' ));  
		echo '</p></div></div>'; 
		
		
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Get the Premium Experience.', 'hired' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>';
		printf( esc_html__('Plugin Compatibility', 'hired' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Use our new free plugins with this theme to add functionality for things like Details Spinner, Animated Skill Bars, Past Employers, Testimonials and Projects.', 'hired' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-home"></i><h4>';
        printf( esc_html__('About Me Page', 'hired' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Instead of one small section, Hired Premium comes with an About Me page, to really show off your skills. Use our plugin compatability to add to your content.', 'hired' ));
		echo '</p></div>'; 
		
        echo '<div class="col-1-4"><i class="fa fa-image"></i><h4>';
        printf( esc_html__('Video Background', 'hired' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Make your Home Page a little more modern with a video background. The best looking websites give the best first impressions.', 'hired' ));
		echo '</p></div>'; 
		
		echo '<div class="col-1-4"><i class="fa fa-th"></i><h4>';
        printf( esc_html__('Masonry Blog', 'hired' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Have a blog and want it to look a little cooler? Hired Premium comes with a masonry blog layout to make your blog a little more interesting.', 'hired' ));
		echo '</p></div></div>'; 
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-4"><i class="fa fa-th-list"></i><h4>';
		printf( esc_html__( 'More Sidebars', 'hired' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Sometimes you need different sidebars for different pages. We got you covered, offering up to 5 different sidebars.', 'hired' ));
		echo '</p></div>';
		
       	echo '<div class="col-1-4"><i class="fa fa-font"></i><h4>More Google Fonts</h4><p>';
		printf( esc_html__( 'Access an additional 65 Google fonts with Hired right in the WordPress customizer.', 'hired' ));
		echo '</p></div>'; 
		
       	echo '<div class="col-1-4"><i class="fa fa-file-image-o"></i><h4>';
		printf( esc_html__( 'PSD Files', 'hired' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Premium versions include PSD files. Preview your own content or showcase a customized version for your clients.', 'hired' ));
		echo '</p></div>';
            
        echo '<div class="col-1-4"><i class="fa fa-support"></i><h4>';
		printf( esc_html__( 'Free Support', 'hired' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Call on us to help you out. Premium themes come with free support that goes directly to our support staff.', 'hired' ));
		echo '</p></div></div>';
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="https://modernthemes.net/wordpress-themes/hired/hired-premium/" target="_blank"><button class="pro">'; 
		printf( esc_html__( 'View Premium Version', 'hired' )); 
		echo '</button></a></div></div>'; 
		 
		 
		echo '<div class="grid grid-pad"><div class="col-1-1"><h2 style="text-align: center;">';
		printf( esc_html__( 'Changelog' , 'hired' ) );
        echo "</h2>";
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.0 - Fix: minor CSS fixes', 'hired' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.8 - Update: added Stack Overflow to Social Icons plugin', 'hired' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.7 - Update: minor CSS updates', 'hired' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.6 - Fix: number input bug in theme customizer', 'hired' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.5 - Fix: removed http from Skype social icons', 'hired' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.4 - Update: Tested with WordPress 4.5, Updating Font Awesome icons to 4.6, Added Snapchat and Weibo social icon options', 'hired' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.3 - Update: adds one-click option to add Child Theme. Go to Appearance => Editor and activate child theme from notification.', 'hired' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.2 - Update: added many new social icon options to MT - Social Icons widget', 'hired' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.1 - new Font Awesome 4.5 icons added', 'hired' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.0 - added new theme update method', 'hired' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.15 - "Close Menu" added to About Me pop-out', 'hired' )); 
		echo '</p>';
		
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.14 - added Xing to Social Media section', 'hired' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.13 - minor updates to links and a readme.txt file added', 'hired' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.0 - New Theme!', 'hired' ));
		echo '</p></div></div>';
		
		
		
    }
?>