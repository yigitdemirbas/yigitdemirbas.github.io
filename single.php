<?php
/**
 * The template for displaying all single posts.
 *
 * @package hired
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>

		<header class="single-entry-header animated fadeIn delay" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'full' ); ?>');">
    
    <?php else: ?>    
    
    	<header class="single-entry-header animated fadeIn delay">  
    
    <?php endif; ?>
    
    
    	<div class="single-entry-content animated fadeInLeft delay">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">
				<?php hired_posted_on(); ?> 
			</div><!-- .entry-meta -->
        </div>
        <div class="header-image-overlay"></div>
	
    <?php if ( has_post_thumbnail( $post->ID ) ): ?>    
    
		</header><!-- .entry-header -->
        
    <?php else: ?>    
    
    	</header><!-- .entry-header -->  
    
    <?php endif; ?>
    
    

<section id="single-content-container" class="animated fadeIn delay-2">
	<div id="primary" class="content-area shortcodes">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</section>
<?php get_footer(); ?>
