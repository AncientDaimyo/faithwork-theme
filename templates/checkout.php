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

	<div class="breadcrumb">
		<?php
		$args = array(
			'delimiter' => '&nbsp;&#47;&nbsp;', // меняем разделитель
		);
		woocommerce_breadcrumb($args);
		?>
	</div>



	<?php
	get_template_part('template-parts/custom-content');
	?>

</main><!-- #main -->

<?php
get_footer("second");
