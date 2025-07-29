<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Acarts_
 */

get_header();
?>

<div class="container-fluid">
	<div class="row">
		<main id="primary" class="site-main col-md-12 py-2">

			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', get_post_type());

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">&larr;&nbsp;</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle"></span><span class="nav-title">%title&nbsp;&rarr;</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->


			<?php
			get_sidebar();
			?>


	</div>
</div>

<?php
get_footer();
