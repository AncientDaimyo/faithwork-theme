<?php
/**
 * @package faithwork-theme
 *
*/
/*
Template Name: checkout
*/
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer("second");