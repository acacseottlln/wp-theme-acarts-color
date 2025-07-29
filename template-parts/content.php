<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acarts_
 */

?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header py-2">
		<div class="entry-meta">
					<?php
					acarts__post_categories();
					?>
				</div><!-- .entry-meta -->	
			<?php
			if (is_singular()) :
				the_title('<h1 class="entry-title my-0">', '</h1>');
			else :
				the_title('<h1 class=" my-0"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
			endif;

			if ('post' === get_post_type()) :
			?>
				<div class="entry-meta">
					<?php
					acarts__posted_on();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'acarts_'),
						array(
							'span' => array(
								'class' => array(),
							),
							)
						),
						wp_kses_post(get_the_title()),
						true
						)
					);
					
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__('Pages:', 'acarts_'),
							'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php acarts__entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
