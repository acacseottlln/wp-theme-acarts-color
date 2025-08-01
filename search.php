<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Acarts_
 */

get_header();
?>

<main id="primary" class="site-main site-index">
	<div class="row p-4" >

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<h1 class="page-title mt-4">
					<?php
					/* translators: %s: search query. */
					printf(esc_html__('Search Results for &#8220;%s&#8221;', 'acarts_'), '<span>' . get_search_query() . '</span>');
					?>
				</h1>
			</header><!-- .page-header -->

		<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part('template-parts/content', 'excerp');

			endwhile;

			else :

				get_template_part('template-parts/content', 'none');
	
			endif;
			?>
		</div>
	
		<?php if (have_posts()) : ?>
			<div class="row mt-4">
				<div class="col">
					<?php the_posts_navigation(); ?>
				</div>
			</div>
		<?php endif ?>
	
	</main><!-- #main -->
	
	<?php
	get_sidebar();
	get_footer();
	