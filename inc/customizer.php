<?php
/**
 * hired Theme Customizer 
 *
 * @package hired
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function hired_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Upgrade
//-------------------------------------------------------------------------------------------------------------------//

	//premiums are better
    class hired_Info extends WP_Customize_Control { 
     
        public $label = '';
        public function render_content() { 
        ?>

        <?php }} 
	

    $wp_customize->add_section(
        'hired_theme_info',
        array(
            'title' => esc_html__('Hired Documentation', 'hired'), 
            'priority' => 5, 
            'description' => esc_html__('Follow along with our documentation at https://modernthemes.net/documentation/hired-theme-documentation/ to quickly set up your Hired WordPress Theme.', 'hired'),   
        )
    );
	 
    //show them what we have to offer
    $wp_customize->add_setting('hired_help', array( 
			'sanitize_callback' => 'hired_no_sanitize',
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_control( new hired_Info( $wp_customize, 'hired_help', array(  
        'section' => 'hired_theme_info', 
        'settings' => 'hired_help',   
        'priority' => 5
        ) )
    );
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Move and Replace
//-------------------------------------------------------------------------------------------------------------------// 
	
	//Colors
	$wp_customize->add_panel( 'hired_colors_panel', array(
    'priority'       => 40,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'General Colors', 'hired' ),
    'description'    => esc_html__( 'Edit your general color settings.', 'hired' ),
	));
	
	//Nav
	$wp_customize->add_panel( 'hired_nav_panel', array(
    'priority'       => 11,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Navigation', 'hired' ),
    'description'    => esc_html__( 'Edit your theme navigation settings.', 'hired' ),
	));
	
	// nav 
	$wp_customize->add_section( 'nav', array( 
	'title' => esc_html__( 'Navigation Settings', 'hired' ),
	'priority' => '10',  
	'panel' => 'hired_nav_panel'
	) );
	
	// colors
	$wp_customize->add_section( 'colors', array(
	'title' => esc_html__( 'Theme Colors', 'hired' ), 
	'priority' => '10', 
	'panel' => 'hired_colors_panel' 
	) );
	
	// Move sections up 
	$wp_customize->get_section('static_front_page')->priority = 10; 
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Navigation
//-------------------------------------------------------------------------------------------------------------------//

 
	// Nav menu toggle
	$wp_customize->add_setting( 'hired_menu_toggle', array(
		'default' => 'icon', 
    	'capability' => 'edit_theme_options',
    	'sanitize_callback' => 'hired_sanitize_menu_toggle_display',  
  	));

  	$wp_customize->add_control( 'hired_menu_toggle_radio', array(
    	'settings' => 'hired_menu_toggle',
    	'label'    => esc_html__( 'Menu Toggle Display', 'hired' ), 
    	'section'  => 'nav',
    	'type'     => 'radio',
    	'choices'  => array(
      		'icon' => esc_html__( 'Icon', 'hired' ),
      		'label' => esc_html__( 'Menu', 'hired' ), 
    	),
	));
	
	// Nav Colors
    $wp_customize->add_section( 'hired_nav_colors_section' , array(
	    'title'       => esc_html__( 'Navigation Colors', 'hired' ),
	    'priority'    => 20, 
	    'description' => esc_html__( 'Set your theme navigation colors.', 'hired'),
		'panel' => 'hired_nav_panel',
	));
	
	$wp_customize->add_setting( 'hired_nav_button_bg', array(
        'default'     => '#25b5f1',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_nav_button_bg', array(
        'label'	   => esc_html__( 'Navigation Button Background', 'hired' ),
        'section'  => 'hired_nav_colors_section',
        'settings' => 'hired_nav_button_bg',
		'priority' => 2
    )));
	
	$wp_customize->add_setting( 'hired_nav_button_hover_bg', array(
        'default'     => '#07a2e2',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_nav_button_hover_bg', array(
        'label'	   => esc_html__( 'Navigation Button Hover Background', 'hired' ),
        'section'  => 'hired_nav_colors_section',
        'settings' => 'hired_nav_button_hover_bg',
		'priority' => 2
    )));

	
	$wp_customize->add_setting( 'hired_nav_button_text_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_nav_button_text_color', array(
        'label'	   => esc_html__( 'Navigation Button Icon', 'hired' ),
        'section'  => 'hired_nav_colors_section',
        'settings' => 'hired_nav_button_text_color',
		'priority' => 3
    )));
	
	$wp_customize->add_setting( 'hired_nav_bg_color', array(
        'default'     => '#25b5f1',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_nav_bg_color', array(
        'label'	   => esc_html__( 'Navigation Background', 'hired' ),
        'section'  => 'hired_nav_colors_section',
        'settings' => 'hired_nav_bg_color',
		'priority' => 10
    )));
	
	$wp_customize->add_setting( 'hired_nav_link_color', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_nav_link_color', array(
        'label'	   => esc_html__( 'Navigation Link', 'hired' ),
        'section'  => 'hired_nav_colors_section',
        'settings' => 'hired_nav_link_color',
		'priority' => 20 
    )));
	
	$wp_customize->add_setting( 'hired_nav_link_hover_color', array(
		 'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_nav_link_hover_color', array(
        'label'	   => esc_html__( 'Navigation Link Hover', 'hired' ),
        'section'  => 'hired_nav_colors_section',
        'settings' => 'hired_nav_link_hover_color', 
		'priority' => 30 
    )));
	

//-------------------------------------------------------------------------------------------------------------------//
// Logo and Favicons
//-------------------------------------------------------------------------------------------------------------------//
 
 
	// Logo upload
    $wp_customize->add_section( 'hired_logo_section' , array(
	    'title'       => esc_html__( 'Logo', 'hired' ),
	    'priority'    => 20, 
	    'description' => esc_html__( 'Upload a logo to replace the default site name and description in the header. Also, upload your site favicon and Apple Icons.', 'hired'),
	));

	$wp_customize->add_setting( 'hired_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hired_logo', array( 
		'label'    => esc_html__( 'Logo', 'hired' ),
		'type'           => 'image',
		'section'  => 'hired_logo_section', 
		'settings' => 'hired_logo',
		'priority' => 10,
	))); 
	
	// Logo Width
	$wp_customize->add_setting( 'logo_size', array(
	    'sanitize_callback' => 'absint',
		'default' => '165'
	));

	$wp_customize->add_control( 'logo_size', array( 
		'label'    => esc_html__( 'Logo Size', 'hired' ), 
		'description' => esc_html__( 'Change the width of the Logo in PX. Only enter numeric value.', 'hired' ),
		'section'  => 'hired_logo_section', 
		'settings' => 'logo_size',
		'type'        => 'number',
		'priority'   => 30,
		'input_attrs' => array(
            'style' => 'margin-bottom: 15px;',  
        ), 
	)); 
	

//-------------------------------------------------------------------------------------------------------------------//
// Social Icons
//-------------------------------------------------------------------------------------------------------------------//


	$wp_customize->add_panel( 'social_panel', array(
    'priority'       => 38,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Social Media Icons', 'hired' ),
    'description'    => esc_html__( 'Edit your social media icons', 'hired' ),
	)); 
	
	//Social Section
	$wp_customize->add_section( 'hired_settings', array(
            'title'          => esc_html__( 'Social Media Settings', 'hired' ),
            'priority'       => 10,
			'panel' => 'social_panel',
    ) );
	
	//social font size
    $wp_customize->add_setting( 
        'hired_social_text_size',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '30',
        )
    );
	
    $wp_customize->add_control( 'hired_social_text_size', array(
        'type'        => 'number', 
        'priority'    => 15,
        'section'     => 'hired_settings', 
        'label'       => esc_html__('Social Icon Size', 'hired'), 
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 32, 
            'step'  => 1
        ),
  	));
	
	//Social Icon Colors
	$wp_customize->add_setting( 'hired_social_bar_color', array(
        'default'     => '#ffffff',   
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_social_bar_color', array(
        'label'	   => esc_html__( 'Social Icon Bar Color', 'hired' ),
        'section'  => 'hired_settings',
        'settings' => 'hired_social_bar_color', 
		'priority' => 18
    )));
		
	//Social Icon Colors
	$wp_customize->add_setting( 'hired_social_color', array(
        'default'     => '#cccccc',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_social_color', array(
        'label'	   => esc_html__( 'Social Icon Color', 'hired' ),
        'section'  => 'hired_settings',
        'settings' => 'hired_social_color', 
		'priority' => 20
    )));
	
	$wp_customize->add_setting( 'hired_social_color_hover', array( 
        'default'     => '#ffffff',  
		'sanitize_callback' => 'sanitize_hex_color',  
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_social_color_hover', array(
        'label'	   => esc_html__( 'Social Icon Hover Color', 'hired' ), 
        'section'  => 'hired_settings',
        'settings' => 'hired_social_color_hover', 
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'hired_social_bg_color', array(
        'default'     => '#ffffff',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_social_bg_color', array(
        'label'	   => esc_html__( 'Social Icon Background Color', 'hired' ),
        'section'  => 'hired_settings',
        'settings' => 'hired_social_bg_color', 
		'priority' => 25
    )));
	
	$wp_customize->add_setting( 'hired_social_bg_color_hover', array(  
        'default'     => '#dadada',  
		'sanitize_callback' => 'sanitize_hex_color',  
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_social_bg_color_hover', array(
        'label'	   => esc_html__( 'Social Icon Hover Background Color', 'hired' ), 
        'section'  => 'hired_settings',
        'settings' => 'hired_social_bg_color_hover', 
		'priority' => 35
    )));
	
	$wp_customize->add_setting( 'hired_social_border_color', array(   
        'default'     => '#eaeaea',  
		'sanitize_callback' => 'sanitize_hex_color',  
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_social_border_color', array(
        'label'	   => esc_html__( 'Social Icon Border Color', 'hired' ), 
        'section'  => 'hired_settings',
        'settings' => 'hired_social_border_color', 
		'priority' => 60 
    ))); 
	

//-------------------------------------------------------------------------------------------------------------------//
// Home Page
//-------------------------------------------------------------------------------------------------------------------//
 
	//Home Page Panel
	$wp_customize->add_panel( 'hired_home_page_panel', array( 
    'priority'       => 25,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Home Page', 'hired' ),
    'description'    => esc_html__( 'Edit your home page settings. Choose from any of <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">these icons</a>. Example: "fa-arrow-right".', 'hired' ),
	));
	
	//Home Color Options
    $wp_customize->add_section( 'hired_home_info_options' , array( 
	    'title'       => esc_html__( 'Home Content', 'hired' ),
	    'priority'    => 20, 
	    'description' => esc_html__( 'Edit the options for the home page.', 'hired'),
		'panel' 	  => 'hired_home_page_panel',
	));
	
	$wp_customize->add_setting( 'hired_home_bg_image', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hired_home_bg_image', array( 
		'label'    => esc_html__( 'Background Image', 'hired' ),
		'type'           => 'image', 
		'section'  => 'hired_home_info_options', 
		'settings' => 'hired_home_bg_image',
		'priority' => 10,
	))); 
	
	//Title
	$wp_customize->add_setting( 'hired_home_title',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_home_title', array(
		'label'    => esc_html__( 'Title Text', 'hired' ), 
		'section'  => 'hired_home_info_options', 
		'settings' => 'hired_home_title',
		'priority'   => 20
	))); 
	
	//Address
	$wp_customize->add_setting( 'hired_home_address',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_home_address', array(
		'label'    => esc_html__( 'Address Text', 'hired' ), 
		'section'  => 'hired_home_info_options', 
		'settings' => 'hired_home_address',
		'priority'   => 30
	)));
	
	//Address Icon
	$wp_customize->add_setting( 'hired_home_address_icon',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_home_address_icon', array(
		'label'    => esc_html__( 'Address Icon', 'hired' ), 
		'description' => esc_html__( 'Suggested: fa-map-marker', 'hired' ),
		'section'  => 'hired_home_info_options', 
		'settings' => 'hired_home_address_icon',
		'priority'   => 35
	)));
	
	//Email
	$wp_customize->add_setting( 'hired_home_email',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text',
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_home_email', array(
		'label'    => esc_html__( 'Email', 'hired' ), 
		'section'  => 'hired_home_info_options',
		'settings' => 'hired_home_email',
		'priority'   => 40
	))); 
	
	//Email Icon
	$wp_customize->add_setting( 'hired_home_email_icon',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_home_email_icon', array(
		'label'    => esc_html__( 'Email Icon', 'hired' ),
		'description' => esc_html__( 'Suggested: fa-comment', 'hired' ), 
		'section'  => 'hired_home_info_options', 
		'settings' => 'hired_home_email_icon',
		'priority'   => 45
	)));
	
	//Phone Number
	$wp_customize->add_setting( 'hired_home_phone',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_home_phone', array(
		'label'    => esc_html__( 'Phone', 'hired' ), 
		'section'  => 'hired_home_info_options', 
		'settings' => 'hired_home_phone',
		'priority'   => 50
	)));
	 
	//Phone Icon
	$wp_customize->add_setting( 'hired_home_phone_icon',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_home_phone_icon', array(
		'label'    => esc_html__( 'Phone Icon', 'hired' ),
		'description' => esc_html__( 'Suggested: fa-phone', 'hired' ), 
		'section'  => 'hired_home_info_options', 
		'settings' => 'hired_home_phone_icon',
		'priority'   => 55 
	)));
	
	//Button One
	$wp_customize->add_setting( 'hired_home_button_text_one',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_home_button_text_one', array(
		'label'    => esc_html__( 'Button One Text ( About Me )', 'hired' ),
		'description' => esc_html__( 'This button links to the side About Me toggle section.', 'hired' ), 
		'section'  => 'hired_home_info_options', 
		'settings' => 'hired_home_button_text_one',
		'priority'   => 60
	)));

	
	//Button Two
	$wp_customize->add_setting( 'hired_home_button_text_two',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_home_button_text_two', array(
		'label'    => esc_html__( 'Button Two Text', 'hired' ), 
		'description' => esc_html__( 'This button should link to something like a Resume or CV.', 'hired' ), 
		'section'  => 'hired_home_info_options', 
		'settings' => 'hired_home_button_text_two',
		'priority'   => 90
	)));
	
	// Page Drop Downs 
	$wp_customize->add_setting('hired_button_two_url', array(  
		'capability' => 'edit_theme_options', 
        'sanitize_callback' => 'hired_sanitize_int' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_button_two_url', array( 
    	'label' => esc_html__( 'Button Two URL', 'hired' ), 
    	'section' => 'hired_home_info_options', 
		'type' => 'dropdown-pages',
    	'settings' => 'hired_button_two_url',
		'priority'   => 95
	)));
	
	// Page URL
	$wp_customize->add_setting( 'hired_home_button_two_url_text',
	    array(
	        'sanitize_callback' => 'esc_url_raw',
	));  

	$wp_customize->add_control( 'hired_home_button_two_url_text', array(
		'type'     => 'url',
		'label'    => esc_html__( 'Button Two External URL Option', 'hired' ), 
		'description' => esc_html__( 'If you use an external URL, leave the Button Two URL field above empty. Must include http:// before any URL.', 'hired' ),
		'section'  => 'hired_home_info_options',   
		'settings' => 'hired_home_button_two_url_text',
		'priority'   => 100
	));  
	
	
	//Home Color Options
    $wp_customize->add_section( 'hired_home_color_options' , array( 
	    'title'       => esc_html__( 'Home Color Options', 'hired' ),
	    'priority'    => 40, 
	    'description' => esc_html__( 'Edit the color options for the home page.', 'hired'),
		'panel' 	  => 'hired_home_page_panel',
	));
	
	$wp_customize->add_setting( 'hired_home_page_bg_color', array(
		 'default'     => '#111111',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_page_bg_color', array(
        'label'	   => esc_html__( 'Home Page Background Color', 'hired' ), 
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_page_bg_color',
		'priority' => 5 
    )));
	
	$wp_customize->add_setting( 'hired_home_info_bg_color', array(
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_info_bg_color', array(
        'label'	   => esc_html__( 'Info Background Color', 'hired' ), 
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_info_bg_color',
		'priority' => 10
    )));
	
	$wp_customize->add_setting( 'hired_home_text_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_text_color',
		'priority' => 20 
    )));
	
	$wp_customize->add_setting( 'hired_home_heading_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_heading_color', array(
        'label'	   => esc_html__( 'Heading Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_heading_color',
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'hired_home_link_color', array(
        'default'     => '#25b5f1',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_link_color', array(
        'label'	   => esc_html__( 'Link Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_link_color',
		'priority' => 32
    )));
	
	$wp_customize->add_setting( 'hired_home_link_hover_color', array(
        'default'     => '#07a2e2',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_link_hover_color', array(
        'label'	   => esc_html__( 'Link Hover Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_link_hover_color',
		'priority' => 33
    )));
	
	$wp_customize->add_setting( 'hired_home_icon_color', array(
        'default'     => '#25b5f1',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_icon_color', array(
        'label'	   => esc_html__( 'Icon Color', 'hired' ), 
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_icon_color',
		'priority' => 35
    )));
	
	$wp_customize->add_setting( 'hired_home_button_one_color', array(
        'default'     => '#25b5f1',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_button_one_color', array(
        'label'	   => esc_html__( 'First Button Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_button_one_color',
		'priority' => 40 
    ))); 
	
	$wp_customize->add_setting( 'hired_home_button_one_text_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_button_one_text_color', array(
        'label'	   => esc_html__( 'First Button Text Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_button_one_text_color',
		'priority' => 50
    ))); 
	
	$wp_customize->add_setting( 'hired_home_button_one_border_color', array(
        'default'     => '#25b5f1',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_button_one_border_color', array(
        'label'	   => esc_html__( 'First Button Border Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_button_one_border_color',
		'priority' => 55
    ))); 
	
	$wp_customize->add_setting( 'hired_home_button_hover_color', array(
		'default'     => '#25b5f1',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_button_hover_color', array(
        'label'	   => esc_html__( 'First Button Hover Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_button_hover_color',
		'priority' => 60
    ))); 
	
	
	$wp_customize->add_setting( 'hired_home_button_two_color', array(
		'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_button_two_color', array(
        'label'	   => esc_html__( 'Second Button Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_button_two_color',
		'priority' => 70 
    ))); 
	
	$wp_customize->add_setting( 'hired_home_button_two_text_color', array(
		'default'     => '#111111',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_button_two_text_color', array(
        'label'	   => esc_html__( 'Second Button Text Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_button_two_text_color',
		'priority' => 80 
    ))); 
	
	$wp_customize->add_setting( 'hired_home_button_two_border_color', array(
		'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_button_two_border_color', array(
        'label'	   => esc_html__( 'Second Button Border Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_button_two_border_color',
		'priority' => 85 
    ))); 
	
	$wp_customize->add_setting( 'hired_home_button_two_hover_color', array(
		'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_button_two_hover_color', array(
        'label'	   => esc_html__( 'Second Button Hover Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_button_two_hover_color',
		'priority' => 90
    ))); 
	
	$wp_customize->add_setting( 'hired_home_divider', array(
		'default'     => '#888888',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_home_divider', array(
        'label'	   => esc_html__( 'Home Divider Color', 'hired' ),
        'section'  => 'hired_home_color_options',
        'settings' => 'hired_home_divider',
		'priority' => 100
    )));  
	
	
	
//-------------------------------------------------------------------------------------------------------------------//
// About Me Section
//-------------------------------------------------------------------------------------------------------------------//

	
	
    $wp_customize->add_section( 'hired_home_about_options' , array( 
	    'title'       => esc_html__( 'Home - About Me Toggle Section', 'hired' ),
	    'priority'    => 25,
	    'description' => esc_html__( 'Edit the side toggle About Me section of your home page.  Important: Populate the Button One Text ( About Me ) before populating this section. If you do not, the button will not appear.', 'hired'), 
		'panel' 	  => 'hired_home_page_panel',  
	)); 
	
	$wp_customize->add_setting( 'hired_home_about_bg_image', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hired_home_about_bg_image', array( 
		'label'    => esc_html__( 'Background Image', 'hired' ), 
		'type'           => 'image',
		'section'  => 'hired_home_about_options', 
		'settings' => 'hired_home_about_bg_image', 
		'priority' => 10, 
	)));
	
	//About Me Title
	$wp_customize->add_setting( 'hired_about_me_title',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_about_me_title', array(
		'label'    => esc_html__( 'About Me Title', 'hired' ), 
		'section'  => 'hired_home_about_options', 
		'settings' => 'hired_about_me_title',
		'priority'   => 20
	)));
	
	//About Me Text
	$wp_customize->add_setting( 'hired_about_me_text',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_about_me_text', array(
		'label'    => esc_html__( 'About Me Paragraph', 'hired' ), 
		'section'  => 'hired_home_about_options', 
		'settings' => 'hired_about_me_text',
		'type'	   => 'textarea', 
		'priority'   => 30
	))); 
	
	//Close
	$wp_customize->add_setting( 'hired_close_button',
	    array(
			'default'     => 'Close', 
	        'sanitize_callback' => 'hired_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_close_button', array(
		'label'    => esc_html__( 'Close Button', 'hired' ), 
		'section'  => 'hired_home_about_options', 
		'settings' => 'hired_close_button',
		'priority'   => 32
	)));
	
	$wp_customize->add_setting( 'hired_about_bg_color', array(
        'default'     => '#25b5f1', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_about_bg_color', array(
        'label'	   => esc_html__( 'Background Color', 'hired' ),
        'section'  => 'hired_home_about_options',
        'settings' => 'hired_about_bg_color',
		'priority' => 50 
    )));
	
	$wp_customize->add_setting( 'hired_about_text_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_about_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'hired' ),
        'section'  => 'hired_home_about_options',
        'settings' => 'hired_about_text_color',
		'priority' => 60
    )));
	
	$wp_customize->add_setting( 'hired_about_heading_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_about_heading_color', array(
        'label'	   => esc_html__( 'Heading Color', 'hired' ),
        'section'  => 'hired_home_about_options',
        'settings' => 'hired_about_heading_color',
		'priority' => 70
    )));
	
	


//-------------------------------------------------------------------------------------------------------------------//
// Colors
//-------------------------------------------------------------------------------------------------------------------//


	
	// Colors
	$wp_customize->add_setting( 'hired_text_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'hired' ),
        'section'  => 'colors',
        'settings' => 'hired_text_color',
		'priority' => 10 
    )));
	
    $wp_customize->add_setting( 'hired_link_color', array( 
        'default'     => '#25b5f1',   
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_link_color', array(
        'label'	   => esc_html__( 'Link Color', 'hired'),
        'section'  => 'colors',
        'settings' => 'hired_link_color', 
		'priority' => 20
    )));
	
	$wp_customize->add_setting( 'hired_hover_color', array( 
        'default'     => '#07a2e2',  
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_hover_color', array(
        'label'	   => esc_html__( 'Hover Color', 'hired' ), 
        'section'  => 'colors',
        'settings' => 'hired_hover_color',
		'priority' => 25
    )));
	
	$wp_customize->add_setting( 'hired_site_title_color', array(
        'default'     => '#25b5f1', 
        'sanitize_callback' => 'sanitize_hex_color',
    )); 
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_site_title_color', array(
        'label'	   => esc_html__( 'Site Title Color', 'hired' ),  
        'section'  => 'colors',
        'settings' => 'hired_site_title_color',
		'priority' => 45
    )));
	
	//Page Colors
    $wp_customize->add_section( 'hired_page_colors_section' , array(  
	    'title'       => esc_html__( 'Page Colors', 'hired' ),
	    'priority'    => 20, 
	    'description' => esc_html__( 'Set your page colors.', 'hired'),
		'panel' => 'hired_colors_panel',
	));
	
	$wp_customize->add_setting( 'hired_page_header_bg', array(
        'default'     => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
    )); 
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_page_header_bg', array(
        'label'	   => esc_html__( 'Page Header Background', 'hired' ),  
        'section'  => 'hired_page_colors_section',
        'settings' => 'hired_page_header_bg',
		'priority' => 48
    )));
	
	$wp_customize->add_setting( 'hired_entry', array(
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_entry', array(
        'label'	   => esc_html__( 'Entry Title Color', 'hired' ), 
        'section'  => 'hired_page_colors_section',
        'settings' => 'hired_entry', 
		'priority' => 50 
    )));
	
	$wp_customize->add_setting( 'hired_button_color', array(  
        'default'     => '#25b5f1',  
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_button_color', array(
        'label'	   => esc_html__( 'Button Color', 'hired' ), 
        'section'  => 'hired_page_colors_section',
        'settings' => 'hired_button_color', 
		'priority' => 60
    )));
	
	$wp_customize->add_setting( 'hired_button_hover_color', array(  
        'default'     => '#07a2e2',  
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_button_hover_color', array(
        'label'	   => esc_html__( 'Button Hover Color', 'hired' ), 
        'section'  => 'hired_page_colors_section', 
        'settings' => 'hired_button_hover_color', 
		'priority' => 65 
    ))); 
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Fonts
//-------------------------------------------------------------------------------------------------------------------//
	
	// Fonts  
    $wp_customize->add_section(
        'hired_typography',
        array(
            'title' => esc_html__('Fonts', 'hired' ),   
            'priority' => 45, 
    ));
	
    $font_choices = 
        array(
			'', 
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Oswald:400,700' => 'Oswald',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Rokkitt:400' => 'Rokkitt',
    );
	
	//body font size
    $wp_customize->add_setting(
        'hired_body_size',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '16',
        ) 
    );
	
    $wp_customize->add_control( 'hired_body_size', array(
        'type'        => 'number', 
        'priority'    => 10,
        'section'     => 'hired_typography',
        'label'       => esc_html__('Body Font Size', 'hired'), 
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 28,
            'step'  => 1
        ),
  	));
    
    $wp_customize->add_setting(
        'headings_fonts',
        array(
            'sanitize_callback' => 'hired_sanitize_fonts', 
    ));
    
    $wp_customize->add_control(
        'headings_fonts',
        array(
            'type' => 'select',
			'default'           => '20', 
            'description' => esc_html__('Select your desired font for the headings. Montserrat is the default Heading font.', 'hired'),
            'section' => 'hired_typography',
            'choices' => $font_choices
    ));
    
    $wp_customize->add_setting(
        'body_fonts',
        array(
            'sanitize_callback' => 'hired_sanitize_fonts', 
    ));
    
    $wp_customize->add_control(
        'body_fonts',
        array(
            'type' => 'select',
			'default'           => '30', 
            'description' => esc_html__( 'Select your desired font for the body.', 'hired' ), 
            'section' => 'hired_typography',  
            'choices' => $font_choices 
    ));
	

//-------------------------------------------------------------------------------------------------------------------//
// Blog
//-------------------------------------------------------------------------------------------------------------------//
	
	// Choose excerpt or full content on blog
    $wp_customize->add_section( 'hired_layout_section' , array( 
	    'title'       => esc_html__( 'Blog', 'hired' ),
	    'priority'    => 38, 
	    'description' => 'Change how Hired displays posts',
	));
	
	//Blog Read More Text
	$wp_customize->add_setting( 'hired_blog_read_more',
	    array(
			'default' => 'Read More',
	        'sanitize_callback' => 'hired_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_blog_read_more', array(
    	'label' => esc_html__( 'Read More Text', 'hired' ),
    	'section'  => 'hired_layout_section', 
    	'settings' => 'hired_blog_read_more',
		'priority'   => 10 
	)));
		
	$wp_customize->add_setting( 'hired_blog_entry_bg', array(
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_blog_entry_bg', array(
        'label'	   => esc_html__( 'Blog Archive Entry Background', 'hired' ), 
        'section'  => 'hired_layout_section', 
        'settings' => 'hired_blog_entry_bg', 
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'hired_blog_post_bg_color', array(
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_blog_post_bg_color', array(
        'label'	   => esc_html__( 'Blog Post Content Background', 'hired' ), 
        'section'  => 'hired_layout_section', 
        'settings' => 'hired_blog_post_bg_color', 
		'priority' => 30 
    ))); 
	
	$wp_customize->add_setting( 'hired_blog_title_color', array(
        'default'     => '#444444',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_blog_title_color', array(
        'label'	   => esc_html__( 'Blog Title', 'hired' ), 
        'section'  => 'hired_layout_section', 
        'settings' => 'hired_blog_title_color', 
		'priority' => 40 
    ))); 


//-------------------------------------------------------------------------------------------------------------------//
// Footer
//-------------------------------------------------------------------------------------------------------------------//

	
	// Footer Panel
	$wp_customize->add_panel( 'hired_footer_panel', array(
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Footer', 'hired' ),
    'description'    		 => esc_html__( 'Edit your footer options', 'hired' ),
	));
	
	// Add Footer Section
	$wp_customize->add_section( 'footer-custom' , array(
    	'title' => esc_html__( 'Footer Options', 'hired' ),
    	'priority' => 20,
    	'description' => esc_html__( 'Customize your footer area', 'hired' ),
		'panel' => 'hired_footer_panel'
	)); 
	
	// Footer Byline Text 
	$wp_customize->add_setting( 'hired_footerid',
	    array(
	        'sanitize_callback' => 'hired_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hired_footerid', array(
    'label' => esc_html__( 'Footer Byline Text', 'hired' ),
    'section' => 'footer-custom', 
    'settings' => 'hired_footerid',
	'priority'   => 10
	)));
	
	//Hide Section 
	$wp_customize->add_setting('active_byline',
	    array(
	        'sanitize_callback' => 'hired_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 'active_byline', array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Footer Byline', 'hired' ),
        'section' => 'footer-custom',  
		'priority'   => 20
    ));
	
	$wp_customize->add_setting( 'hired_footer_text_color', array(  
        'default'     => '#b3b3b3', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_footer_text_color', array(
        'label'	   => esc_html__( 'Home - Footer Text', 'hired'),  
        'section'  => 'footer-custom',
        'settings' => 'hired_footer_text_color', 
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'hired_footer_link_color', array(   
        'default'     => '#25b5f1', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_footer_link_color', array(
        'label'	   => esc_html__( 'Home - Footer Link', 'hired'),  
        'section'  => 'footer-custom',
        'settings' => 'hired_footer_link_color', 
		'priority' => 40
    )));
	
	$wp_customize->add_setting( 'hired_footer_link_hover_color', array(  
        'default'     => '#07a2e2', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hired_footer_link_hover_color', array(
        'label'	   => esc_html__( 'Home - Footer Link Hover', 'hired'),  
        'section'  => 'footer-custom', 
        'settings' => 'hired_footer_link_hover_color', 
		'priority' => 50
    )));
	
	

//-------------------------------------------------------------------------------------------------------------------//
// Animations
//-------------------------------------------------------------------------------------------------------------------// 

	//Animations
	$wp_customize->add_section( 'hired_animations' , array(  
	    'title'       => esc_html__( 'Animation Effects', 'hired' ), 
	    'priority'    => 50,  
	    'description' => esc_html__( 'Get yourself animated or disable it.', 'hired' ), 
	)); 
	
    $wp_customize->add_setting(
        'hired_animate',
        array(
            'sanitize_callback' => 'hired_sanitize_checkbox',
            'default' => 0,
    ));
	
    $wp_customize->add_control( 
        'hired_animate',
        array(
            'type' => 'checkbox',
            'label' => esc_html__('Check this box if you want to disable the animations.', 'hired'),
            'section' => 'hired_animations', 
            'priority' => 1,           
    ));  
	
	
}
add_action( 'customize_register', 'hired_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function hired_customize_preview_js() {
	wp_enqueue_script( 'hired_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'hired_customize_preview_js' );
