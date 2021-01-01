<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package hired
 */
?>

	</div><!-- #content -->
    
	<footer id="colophon" class="site-footer-home animated fadeIn delay-3" role="contentinfo">
		<div class="site-info">
        
			<?php if( get_theme_mod( 'active_byline' ) == '') : ?> 
            
				<?php if ( get_theme_mod( 'hired_footerid' ) ) : ?>
        			<?php echo wp_kses_post( get_theme_mod( 'hired_footerid' )); // footer id ?>
				<?php else : ?>
    				<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'hired' ), 'hired', '<a href="http://modernthemes.net" rel="designer">modernthemes.net</a>' ); ?> 
				<?php endif; ?>
                
        	<?php endif; ?>
            
		</div><!-- .site-info --> 
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
	
</body>
</html>
