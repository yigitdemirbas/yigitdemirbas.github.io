<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package hired
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> 
<?php wp_head(); ?>
</head>

<body <?php body_class('body-home'); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hired' ); ?></a>

	<header id="masthead" class="site-header animated slideInLeft delay" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
        
			<button class="menu-toggle toggle-menu menu-left push-body" aria-controls="primary-menu" aria-expanded="false">
		
			<?php 
			
				$menu_toggle_option = get_theme_mod( 'hired_menu_toggle', 'icon' ); 

				$menu_display = '';

				if ( $menu_toggle_option == 'icon' ) {
				
					$menu_display = sprintf( '<i class="fa fa-bars"></i>' ); 
			
				} else if ( $menu_toggle_option == 'label' ) {
				
					$menu_display = esc_html_e( 'Menu', 'hired' );  
			
				} 

				echo $menu_display; 
			
			?> 
            
        	</button>
            
		</nav><!-- #site-navigation -->
        
        <div class="social-icons">
        	<?php if ( is_active_sidebar('social-widget-area') ) : ?>
            
            	<?php dynamic_sidebar('social-widget-area'); ?>
                
            <?php endif; ?>  
        </div>
	</header><!-- #masthead -->
    
    <div class="site-branding-home animated fadeIn delay-3">
		
        <?php if ( get_theme_mod( 'hired_logo' ) ) : ?>
              
    			<div class="site-logo site-title"> 
                
       				<a 
                    	href='<?php echo esc_url( home_url( '/' ) ); ?>' 
                        title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' 
                        rel='home'
                    >
                        
                    	<img 
                        	src='<?php echo esc_url( get_theme_mod( 'hired_logo' ) ); ?>' 
							
							<?php if ( get_theme_mod( 'logo_size' ) ) : ?>
                            
                            	width="<?php echo esc_attr( get_theme_mod( 'logo_size', '165' )); ?>"
                                
							<?php endif; ?> 
                            
                            alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                        >
                        
                    </a>  
                    
    			</div><!-- site-logo --> 
                
			<?php else : ?>
            
    			<hgroup>
       				<h1 class='site-title'> 
                    	<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
							<?php bloginfo( 'name' ); ?>
                    	</a>
                    </h1>
    			</hgroup> 
                
		<?php endif; ?> 
        
	</div><!-- .site-branding -->
    
    <!-- Left menu element-->
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left nav-menu-vertical cbp-primary">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>

	<div id="content" class="site-content">
