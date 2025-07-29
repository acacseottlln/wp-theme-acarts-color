<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acarts_
 */

get_header();
?>
<div class="container<?php if(is_front_page()) { echo ('-fluid');} ?>">
	<div class="row">
		<main id="primary" class="text-center site-main col-md-12<?php if(is_front_page()) { echo (' front-page');} else {echo (' pt-2'); } ?>">
		
		<img src="<?php echo (get_template_directory_uri()); ?>/images/oups.jpg" alt="Oups!"/>
		<p class="my-4"><?php esc_html_e( "Nous n'avons rien trouvé à cet endroit. Peut-être qu'une recherche vous aidera:", 'acarts_' ); ?></p>

		<?php
					get_search_form(); 
		?>

		</main><!-- #main -->

		
			<?php
			get_sidebar();
			?>


	</div>
</div>

<?php
get_footer();

?>
