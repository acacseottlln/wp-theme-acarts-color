<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acarts_
 */

?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_breadcrumb() ?>
		<header class="entry-header">
			<?php
			if (is_singular()) :
				the_title('<h1 class="entry-title">', '</h1>');
			else :
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;

			if ('post' === get_post_type()) :
			?>
				<div class="entry-meta">
					<?php
					acarts__post_categories();
					?> / 
					<?php
					acarts__posted_on();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">

			
			<?php
			the_post_thumbnail();
			the_excerpt();
			
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
