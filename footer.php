<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acarts_
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="row">
			<div class="col-md-3">
				<?php dynamic_sidebar('footer-1'); ?>
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar('footer-2'); ?>
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar('footer-3'); ?>
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar('footer-4'); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
	<?php wp_footer(); ?>
</body>

</html>