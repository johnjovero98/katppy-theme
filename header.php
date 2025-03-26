<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Katppy_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'katppy-theme'); ?></a>

		<header id="masthead" class="site-header">
			<div class="container mx-auto p-3">
				<!-- Navigation button -->
				<button id="menu-toggle" class="menu-toggle" aria-controls="site-navigation" aria-expanded="false">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
					</svg>
				</button>

				<!-- Site Logo -->
				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$katppy_theme_description = get_bloginfo('description', 'display');
					if ($katppy_theme_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $katppy_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<!-- Navigation -->
				<div id="overlay" class="overlay"></div><!-- mobile overlay -->
				<nav id="site-navigation" class="main-navigation" aria-hidden="true">
					<!-- close button -->
					<button id="close-button" class="close-button" aria-controls="site-navigation" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
							<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
						</svg>
					</button>

					<!-- Search Bar Widget -->
					<?php dynamic_sidebar('search-bar') ?>

					<!-- Currency Switch Widget -->
					<?php dynamic_sidebar('currency-switch') ?>

					<!-- Menu -->
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->

				<!-- Cart Widget -->
				<?php dynamic_sidebar('mini-cart') ?>
			</div>
		</header><!-- #masthead -->