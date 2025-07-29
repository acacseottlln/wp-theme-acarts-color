<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Acarts_
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function acarts__body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'acarts__body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function acarts__pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'acarts__pingback_header' );


function charger_css_selon_saison()
{

	$dateActuelle = new DateTime();
	$moisActuel = (int) $dateActuelle->format('m');

	if ($moisActuel === 12 || $moisActuel === 1) {
		echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/snow.css">';
	} else {
		// do nothing
	}
}

add_action('wp_head', 'charger_css_selon_saison');


//
// Pour affichage gallerie
//
function verification_date_evenement($post)
{
	$date_evenement = get_post_custom_values('date_evenement', $post->ID);
	$category_text = '';

	if ($date_evenement) {
		$date_parts = explode('/', $date_evenement[0]);
		$formatted_date = $date_parts[2] . '-' . $date_parts[1] . '-' . $date_parts[0];
		$date_evenement_time = date('Ymd', strtotime($formatted_date));
		$now = (new DateTime())->format('Ymd');
		if ($now < $date_evenement_time) {
			$category_text .= ' <span class="acarts-header-item-aujourdhui">Prochainement</span>';
		} elseif ($now == $date_evenement_time) {
			$category_text .= ' <span class="acarts-header-item-bientot">Aujourd\'hui</span>';
		}
	}

	return $category_text;
}

//
// Retourne image featured pour le bloc "Derniers articles"
//
function get_image_html($post)
{
	if (has_post_thumbnail($post)) {

		$image_style = '';
		if (isset($attributes['featuredImageSizeWidth'])) {
			$image_style .= sprintf('max-width:%spx;', $attributes['featuredImageSizeWidth']);
		}
		if (isset($attributes['featuredImageSizeHeight'])) {
			$image_style .= sprintf('max-height:%spx;', $attributes['featuredImageSizeHeight']);
		}

		$image_classes = 'wp-block-latest-posts__featured-image';
		if (isset($attributes['featuredImageAlign'])) {
			$image_classes .= ' align' . $attributes['featuredImageAlign'];
		}

		$image_id = get_post_thumbnail_id($post);

		return get_the_post_thumbnail(
			$post,
			$attributes['featuredImageSizeSlug'] ?? 'medium',
			array(
				'style' => $image_style,
				'alt'   => get_post_meta($image_id, '_wp_attachment_image_alt', true) ?: get_the_title($post)
			)
		);
	}

	return '';
}