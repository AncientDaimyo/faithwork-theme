<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package faithwork-theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-top">
		<img class="footer-image" src="wp-content/themes/faithwork-theme/pic/FAITHWORK_LOGO_Header_Crop_Black.png">
	</div>
	<div class="footer-bottom">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'footer-menu-1',
			)
		);
		wp_nav_menu(
			array(
				'theme_location' => 'menu-3',
				'menu_id'        => 'footer-menu-2',
			)
		);
		wp_nav_menu(
			array(
				'theme_location' => 'menu-4',
				'menu_id'        => 'footer-menu-3',
			)
		);
		?>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>