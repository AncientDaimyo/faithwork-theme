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

<footer id="colophon" class="site-footer main-block">
	<div class="footer-main">
		<div class="footer-top">
			<img class="footer-image" src="wp-content/themes/faithwork-theme/pic/FAITHWORK_LOGO_Header_Crop_Black.png">
		</div>
		<div class="footer-bottom">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu-left',
					'container'		 => 'div',
					'container_id'   => 'footer-menu-1'
				)
			);
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu-center',
					'container'		 => 'div',
					'container_id'   => 'footer-menu-2',
				)
			);
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu-right',
					'container'		 => 'div',
					'container_id'   => 'footer-menu-3',
				)
			);
			?>
		</div>
	</div>
	<div class="footer-copyright">
		<p class="footer-copyright-paragraf">
			With Love and Lust for You</br>
			FAITHWORK</br>
			2023
		</p>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>