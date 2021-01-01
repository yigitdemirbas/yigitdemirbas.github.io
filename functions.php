<?php
/**
 * hired functions and definitions
 *
 * @package hired
 */


/**
 * register the theme update
 */ 
require 'theme-updates/theme-update-checker.php';
$MyThemeUpdateChecker = new ThemeUpdateChecker(
'hired', //Theme slug. Usually the same as the name of its directory.
'http://modernthemes.net/updates/?action=get_metadata&slug=hired' //Metadata URL.
);


/**
 * Set the content width based on the theme's design and stylesheet. 
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'hired_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hired_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hired, use a find and replace
	 * to change 'hired' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'hired', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'client-thumb', 250 );
	add_image_size( 'project-thumb', 450, 450, array( 'center', 'center' ) );
	add_image_size( 'team-thumb', 300, 300, array( 'center', 'center' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'hired' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hired_custom_background_args', array(
		'default-color' => 'f1f1f1', 
		'default-image' => '',
	) ) );
}
endif; // hired_setup
add_action( 'after_setup_theme', 'hired_setup' );


/*-----------------------------------------------------------------------------------------------------//
	Register Widgets
	
	@link http://codex.wordpress.org/Function_Reference/register_sidebar
-------------------------------------------------------------------------------------------------------*/


function hired_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hired' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) ); 
	register_sidebar( array(
		'name'          => esc_html__( 'Social Widget Area', 'hired' ), 
		'id'            => 'social-widget-area', 
		'description'   => esc_html__( 'Drag the MT - Social Icons widget here.', 'hired' ),
		'before_widget' => '',
		'after_widget'  => '', 
		'before_title'  => '<h3>',
		'after_title'   => '</h3>', 
	) );
	
	//Register the sidebar widgets   
	register_widget( 'hired_Video_Widget' ); 
	register_widget( 'hired_Contact_Info' );
	register_widget( 'hired_social' );
	
}
add_action( 'widgets_init', 'hired_widgets_init' );


/*-----------------------------------------------------------------------------------------------------//
	Scripts
-------------------------------------------------------------------------------------------------------*/


function hired_scripts() {
	wp_enqueue_style( 'hired-style', get_stylesheet_uri() );
	
	$headings_font = esc_html(get_theme_mod('headings_fonts')); 
	$body_font = esc_html(get_theme_mod('body_fonts'));
	
	if( $headings_font ) {
		wp_enqueue_style( 'hired-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );
	} else {
		wp_enqueue_style( 'hired-open-headings', '//fonts.googleapis.com/css?family=Montserrat:700');  
	}	
	if( $body_font ) {
		wp_enqueue_style( 'hired-body-fonts', '//fonts.googleapis.com/css?family='. $body_font ); 	
	} else {
		wp_enqueue_style( 'hired-open-body', '//fonts.googleapis.com/css?family=Montserrat:700');   
	}

	if ( get_theme_mod('hired_animate') != 1 ) { 
	
	wp_enqueue_style( 'hired-animate', get_template_directory_uri() . '/css/animate.css' ); 
	
	}

	wp_enqueue_style( 'hired-menu', get_template_directory_uri() . '/css/menu.css' );
	
	wp_enqueue_style( 'hired-font-awesome', get_template_directory_uri() . '/fonts/font-awesome.css' );  
	
	wp_enqueue_style( 'hired-column-clear', get_template_directory_uri() . '/css/mt-column-clear.css' ); 

	wp_enqueue_script( 'hired-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'hired-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	if ( is_page_template( 'template-home.php' ) && get_theme_mod( 'hired_home_bg_image' ) ) {  

	wp_enqueue_script( 'hired-backstretch', get_template_directory_uri() . '/js/jquery.backstretch.min.js', array('jquery'), false, true );

	wp_enqueue_script( 'hired-backstretch-scripts', get_template_directory_uri() . '/js/backstretch.script.js', array(), false, true );
	
	}

	wp_enqueue_script( 'hired-menu', get_template_directory_uri() . '/js/jPushMenu.js', array('jquery'), false, true );

	wp_enqueue_script( 'hired-scripts', get_template_directory_uri() . '/js/hired.scripts.js', array(), false, true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hired_scripts' );

/**
 * Load html5shiv
 */
function hired_html5shiv() {
    echo '<!--[if lt IE 9]>' . "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/html5shiv.js' ) . '"></script>' . "\n";
    echo '<![endif]-->' . "\n";
}
add_action( 'wp_head', 'hired_html5shiv' ); 


/*-----------------------------------------------------------------------------------------------------//
	Includes
-------------------------------------------------------------------------------------------------------*/


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Include additional custom admin panel features. 
 */
require get_template_directory() . '/panel/functions-admin.php';
require get_template_directory() . '/panel/theme-admin-page.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/hired-sanitize.php';
require get_template_directory() . '/inc/hired-styles.php'; 

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/gfonts.php';  

/**
 * Sidebar widget columns
 */
require get_template_directory() . '/inc/hired-sidebar-columns.php'; 

/**
 * register your custom widgets
 */ 
require get_template_directory() . "/widgets/contact-info.php"; 
require get_template_directory() . "/widgets/video-widget.php";
require get_template_directory() . "/widgets/widget-mt-social.php"; 

/**
 * Activate for a child theme.  Always use a child theme to make edits.
 */
require_once( trailingslashit( get_template_directory() ) . '/inc/use-child-theme.php' );