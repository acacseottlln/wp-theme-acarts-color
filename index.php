<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acarts_
 */

get_header();
?>
<div id="headerbar" class="p-4 row widget-area">
	<div class="col text-center">
		<?php dynamic_sidebar('headerbar-1'); ?>
	</div>
</div>

<div id="headerbar" class="row widget-area bg-dark">
	<div class="col-12">
		<?php dynamic_sidebar('headerbar-5'); ?>
	</div>
</div>

<main id="primary" class="site-main site-index container-fluid">
	<div class="row">

		<?php
		if (have_posts()) :

			if (is_home() && !is_front_page()) :
		?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
		<?php
			endif;

			/* Start the Loop */
			while (have_posts()) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
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
