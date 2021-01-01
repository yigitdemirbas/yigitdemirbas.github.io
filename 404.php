<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package hired
 */

get_header(); ?>

	<header class="single-entry-header animated fadeIn delay"> 
    	<div class="single-entry-content animated fadeInLeft delay">
			<h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'hired' ); ?></h1>
        </div>
        <div class="header-image-overlay"></div> 
	</header><!-- .entry-header -->

<section id="single-content-container" class="animated fadeIn delay-2">      
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'hired' ); ?></p>

					<?php get_search_form(); ?> 

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<?php get_footer(); ?>
