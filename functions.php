<?php

/**
 * Acarts_ functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acarts_
 */

add_theme_support('custom-header');

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('acarts__setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function acarts__setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Acarts_, use a find and replace
		 * to change 'acarts_' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('acarts_', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'acarts_'),
				'menu-2' => esc_html__('Top', 'acarts_'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'acarts__custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'acarts__setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function acarts__content_width()
{
	$GLOBALS['content_width'] = apply_filters('acarts__content_width', 640);
}
add_action('after_setup_theme', 'acarts__content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function acarts__widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'acarts_'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'acarts_'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('headerbar-1', 'acarts_'),
			'id'            => 'headerbar-1',
			'description'   => esc_html__('Add widgets here.', 'acarts_'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// FOOTER 
	register_sidebar(
		array(
			'name'          => esc_html__('footer gauche', 'acarts_'),
			'id'            => 'footer-1',
			'description'   => esc_html__('Add widgets here.', 'acarts_'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('footer milieu gauche', 'acarts_'),
			'id'            => 'footer-2',
			'description'   => esc_html__('Add widgets here.', 'acarts_'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('footer milieu droit', 'acarts_'),
			'id'            => 'footer-3',
			'description'   => esc_html__('Add widgets here.', 'acarts_'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('footer droit', 'acarts_'),
			'id'            => 'footer-4',
			'description'   => esc_html__('Add widgets here.', 'acarts_'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('recherche', 'acarts_'),
			'id'            => 'search-0',
			'description'   => esc_html__('Add widgets here.', 'acarts_'),
			'before_widget' => '<section id="%1$s" class="search-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<span class="widget-title">',
			'after_title'   => '</span>',
		)
	);
}
add_action('widgets_init', 'acarts__widgets_init');

/**
 * Enqueue scripts and styles.
 */
function acarts__scripts()
{
	wp_enqueue_style('acarts_-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('acarts_-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('acarts_-style', 'rtl', 'replace');
	wp_enqueue_style('acarts_-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), _S_VERSION);

	wp_enqueue_script('acarts_-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('acarts_-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('acarts_-boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('acarts_-masonry', 'https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'acarts__scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Add bootstram menu support 
 */
require_once(get_template_directory() . '/inc/nav-menu-template.php');


/**
 * Add bootstrap responsive images
 */
function bootstrap_responsive_images($html)
{
	$classes = 'img-fluid'; // separated by spaces, e.g. 'img image-link'
	// check if there are already classes assigned to the anchor
	if (preg_match('/<img.*? class="/', $html)) {
		$html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
	} else {
		$html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
	}
	// remove dimensions from images,, does not need it!
	$html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
	return $html;
}
add_filter('the_content', 'bootstrap_responsive_images', 10);
add_filter('post_thumbnail_html', 'bootstrap_responsive_images', 10);


/**
 * Overide Latest posts 
 * @TODO : make args work
 */
function custom_latest_posts_render($block_content, $block)
{
	if ($block['blockName'] !== "core/latest-posts") {
		return $block_content;
	}

	$attributes = array();
	if (array_key_exists('attrs', $block) && is_array($block['attrs'])) {
		$attributes = $block['attrs'];
	}

	global $post, $block_core_latest_posts_excerpt_length;

	$args = array(
		'posts_per_page'   => $attributes['postsToShow'] ?? 5,
		'post_status'      => 'publish',
		'order'            => $attributes['order'] ?? 'desc',
		'orderby'          => $attributes['orderBy'] ?? 'date',
		'suppress_filters' => false,
	);

	$block_core_latest_posts_excerpt_length = $attributes['excerptLength'] ?? 55;
	add_filter('excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20);

	if (isset($attributes['categories'])) {
		$args['category__in'] = array_column($attributes['categories'], 'id');
	}
	if (isset($attributes['selectedAuthor'])) {
		$args['author'] = $attributes['selectedAuthor'];
	}

	$recent_posts = get_posts($args);

	$list_items_markup = '';

	foreach ($recent_posts as $post) {

		$post_link = esc_url(get_permalink($post));
		$post_title = get_the_title($post) ?? __('(no title)');

		// Balise initiale
		$list_items_markup .= '<li>';
		$list_items_markup .= '<div class="acarts-header-item">';

		// Ajout du texte de la catégorie à $list_items_markup
		$category_text = get_the_category_list(' ', '', $post->ID);
		$category_text .= verification_date_evenement($post);
		$list_items_markup .= sprintf(
			'<span class="wp-block-latest-posts__post-category">%1$s</span>',
			$category_text
		);

		// Maintenant, on regroupe titre + image dans un seul <a>
		$list_items_markup .= '<a href="' . $post_link . '" class="post-link-wrapper" aria-label="Lire l’article : ' . esc_attr($post_title) . '">';
		$list_items_markup .= '<h3>' . esc_html($post_title) . '</h3>';
		$list_items_markup .= '</div>'; // fin acarts-header-item

		$image_html = get_image_html($post);

		// Contenu du post
		if ($image_html) {
			$image_classes = 'wp-block-latest-posts__featured-image';
			$list_items_markup .= sprintf('<div class="%1$s">%2$s</div>', esc_attr($image_classes), $image_html);
		}

		$list_items_markup .= '</a>'; // lien texte + image

		$list_items_markup .= sprintf(
			'<p class="wp-block-latest-posts__post-excerpt p-1">%s</p>',
			wp_trim_words(get_the_excerpt($post), $block_core_latest_posts_excerpt_length, '...')
		);

		// Lire l'article en entier
		if (get_the_excerpt($post) !== '') {

			$list_items_markup .= sprintf(
				'<p class="wp-block-latest-posts__post-excerpt p-1"><a href="%1$s" class="wp-block-latest-posts__post-read-more">%2$s</a></p>',
				$post_link,
				esc_html__('Lire l’article en entier', 'acarts_')
			);
		}
	}

	remove_filter('excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20);

	$class = 'wp-block-latest-posts__list';

	if (isset($attributes['postLayout']) && 'grid' === $attributes['postLayout']) {
		$class .= ' is-grid';
	}

	if (isset($attributes['columns']) && 'grid' === $attributes['postLayout']) {
		$class .= ' columns-' . $attributes['columns'];
	}

	if (isset($attributes['displayPostDate']) && $attributes['displayPostDate']) {
		$class .= ' has-dates';
	}

	if (isset($attributes['displayAuthor']) && $attributes['displayAuthor']) {
		$class .= ' has-author';
	}

	$class = 'wp-block-latest-posts__list';

	if (isset($attributes['postLayout']) && 'grid' === $attributes['postLayout']) {
		$class .= ' is-grid';
	}
	if (isset($attributes['columns']) && 'grid' === $attributes['postLayout']) {
		$class .= ' columns-' . intval($attributes['columns']);
	}
	if (!empty($attributes['displayPostDate'])) {
		$class .= ' has-dates';
	}
	if (!empty($attributes['displayAuthor'])) {
		$class .= ' has-author';
	}

	return sprintf(
		'<ul class="%1$s">%2$s</ul>',
		esc_attr($class),
		$list_items_markup
	);
}

add_filter('render_block', 'custom_latest_posts_render', 11, 2);


/** Ajoute les classes bootstrap aux tables */
function theme_prefix_bootstrap_responsive_table($content)
{
	$content = str_replace(
		['<table>', '</table>'],
		['<table class="table table-striped">', '</table>'],
		$content
	);

	return $content;
}

add_filter('the_content', 'theme_prefix_bootstrap_responsive_table');

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb()
{
	$delimiter = '&nbsp;&raquo;&nbsp;';

	$home = get_bloginfo('name');

	$before = '<span>';

	$after = '</span>';

	echo '
	<div class="breadcrumb">';

	global $post;

	$homeLink = get_bloginfo('url');

	echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

	if (is_category()) {

		global $wp_query;

		$cat_obj = $wp_query->get_queried_object();

		$thisCat = $cat_obj->term_id;

		$thisCat = get_category($thisCat);

		$parentCat = get_category($thisCat->parent);

		if ($thisCat->parent != 0) echo (get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));

		echo $before . single_cat_title('', false) .  $after;
	} elseif (is_day()) {

		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';

		echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';

		echo $before .  get_the_time('d') .  $after;
	} elseif (is_month()) {

		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';

		echo $before . 'Archive by month "' . get_the_time('F') . '"' . $after;
	} elseif (is_year()) {

		echo $before . 'Archive by year "' . get_the_time('Y') . '"' . $after;
	} elseif (is_single() && !is_attachment()) {

		if (get_post_type() != 'post') {

			$post_type = get_post_type_object(get_post_type());

			$slug = $post_type->rewrite;

			echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>' . $delimiter . ' ';

			echo $before . get_the_title() . $after;
		} else {

			$cat = get_the_category();
			$cat = $cat[0];

			echo ' ' . get_category_parents($cat, TRUE, ' ' . $delimiter . ' ') . ' ';

			echo $before . get_the_title() . $after;
		}
	} elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {

		$post_type = get_post_type_object(get_post_type());

		echo $before . $post_type->labels->singular_name . $after;
	} elseif (is_attachment()) {

		$parent_id = $post->post_parent;

		$breadcrumbs = array();

		while ($parent_id) {

			$page = get_page($parent_id);

			$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';

			$parent_id = $page->post_parent;
		}

		$breadcrumbs = array_reverse($breadcrumbs);

		foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $delimiter . ' ';

		echo $before . get_the_title() . $after;
	} elseif (is_page() && !$post->post_parent) {

		echo $before . get_the_title() . $after;
	} elseif (is_page() && $post->post_parent) {

		$parent_id = $post->post_parent;

		$breadcrumbs = array();

		while ($parent_id) {

			$page = get_page($parent_id);

			$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';

			$parent_id = $page->post_parent;
		}

		$breadcrumbs = array_reverse($breadcrumbs);

		foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $delimiter . ' ';

		echo $before . get_the_title() . $after;
	} elseif (is_search()) {

		echo $before .  get_search_query() .  $after;
	} elseif (is_tag()) {

		echo $before . single_tag_title('', false)  . $after;
	} elseif (is_author()) {

		global $author;

		$userdata = get_userdata($author);

		echo $before .  $userdata->display_name .  $after;
	} elseif (is_404()) {
	}

	if (get_query_var('paged')) {

		if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ' (';

		echo ('Page') . ' ' . get_query_var('paged');

		if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ')';
	}

	echo '</div>';
}
