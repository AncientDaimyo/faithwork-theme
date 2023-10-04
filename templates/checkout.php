<?php

/**
 * @package faithwork-theme
 *
 */
/*
Template Name: checkout
*/
get_header("second");
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

	<div class="delivery-details">
		<span class="woocommerce-input-wrapper">
			<input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="Имя" value="" autocomplete="family-name">
		</span>

		<span class="woocommerce-input-wrapper">

		</span>

		<span class="woocommerce-input-wrapper">

		</span>

		<span class="woocommerce-input-wrapper">

		</span>

		<span class="woocommerce-input-wrapper">

		</span>
	</div>



	<?php
	get_template_part('template-parts/custom-content');
	?>

</main><!-- #main -->

<?php
get_footer("second");
