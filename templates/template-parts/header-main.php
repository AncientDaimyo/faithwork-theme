<?php

/**
 * The header for our theme
 *
 * @package faithwork-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<?php the_custom_logo(); ?>
			<nav id="site-navigation" class="main-navigation">
				<button type="button" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'header-menu',
						'container_id'   => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<?php get_template_part('templates/template-parts/header-icons'); ?>
		</header><!-- #masthead -->