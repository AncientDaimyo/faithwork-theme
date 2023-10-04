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

	$args = array(
		'delimiter' => '→' // меняем разделитель
	);
	woocommerce_breadcrumb($args);

	get_template_part('template-parts/custom-content');
	?>

</main><!-- #main -->

<?php
get_footer("second");
