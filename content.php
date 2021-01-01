<?php
/**
 * @package hired
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    	<?php the_post_thumbnail('large'); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
    	<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<p><?php esc_html_e( 'Posted on', 'hired' ); ?>&nbsp;<?php the_time('F j, Y'); ?>&nbsp;<?php esc_html_e( 'in', 'hired' ); ?>&nbsp;<?php the_category(', ') ?></p>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		
		<a href="<?php the_permalink(); ?>">
        	
        		<button>
        			<?php echo wp_kses_post( get_theme_mod( 'hired_blog_read_more', esc_html__( 'Read More', 'hired' ) ));  ?> 
				</button>
			
        </a> 
        
	</div><!-- .entry-content -->  
</article><!-- #post-## -->