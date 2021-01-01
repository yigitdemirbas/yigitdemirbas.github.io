<?php
/**
 * The template for displaying search results pages.
 *
 * @package hired
 */

get_header(); ?>

	<header class="single-entry-header animated fadeIn delay"> 
    	<div class="single-entry-content animated fadeInLeft delay">
			<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'hired' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </div>
        <div class="header-image-overlay"></div>
	</header><!-- .entry-header -->
 
<section id="single-content-container" class="search-archive animated fadeIn delay-2">      
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<?php get_footer(); ?>
