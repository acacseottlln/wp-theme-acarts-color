<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acarts_
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php charger_css_selon_saison(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;1,400;1,500&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/prb1gxf.css">
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'acarts_'); ?></a>

		<header id="masthead" class="site-header fixed-top">

			<nav id="site-top-menu" class="navbar">
				<div class="container-fluid">

					<div class="mr-auto d-none d-md-block">
						<?php dynamic_sidebar('search-0'); ?>
					</div>

					<div class="ms-auto me-1">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'top-menu',
								'container' => false,
							)
						);
						?>
					</div>
				</div>
			</nav>

			<nav id="site-navigation" class="navbar navbar-toggleable-lg navbar-light bg-light">
				<div class="col-12 px-2">
					<div class="d-flex align-items-center" style="width:100%">
						<div class="d-none d-md-block pl-2">
							<img class="header-logo" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						</div>
						<div>
							<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<h1>

									<?php
									if (is_front_page() && is_home()) :
									?>
										<?php bloginfo('name'); ?>
									<?php
									else :
									?>
										<span class="site-title"><?php bloginfo('name'); ?></span>
									<?php
									endif;
									$acarts__description = get_bloginfo('description', 'display');

									if ($acarts__description || is_customize_preview()) :
									?>
										<small class="site-description">

											<?php echo $acarts__description; /*phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>

										</small>

									<?php endif; ?>
								</h1>
							</a>
						</div>
						<div class="pr-2" style="margin-left: auto !important;">
							</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
								<div id="menu-text">
									<span class="navbar-toggler-icon"></span>
									MENU
									<span class="navbar-toggler-icon"></span>
								</div>
							</button>

						</div>
					</div>
				</div>

				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker()
						)
					);
					?>
				</div>

			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	</div><!-- container-fluid -->