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
<!-- 
	<div class="delivery-details">
		<span class="woocommerce-input-wrapper">
			<input type="text" class="input-text" name="billing_first_name" id="billing_first_name" placeholder="Имя" value="" autocomplete="given-name">
		</span>
		<span class="woocommerce-input-wrapper">
			<input type="text" class="input-text" name="billing_last_name" id="billing_last_name" placeholder="Фамилия" value="" autocomplete="family-name">
		</span>
		<span class="woocommerce-input-wrapper">
			<input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Адрес" value="" autocomplete="address-line1">
		</span>
		<span class="woocommerce-input-wrapper">
			<input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="Населенный пункт" value="" autocomplete="address-level2">
		</span>
		<span class="woocommerce-input-wrapper">
			<input type="text" class="input-text " value="" placeholder="Область / район" name="billing_state" id="billing_state" autocomplete="address-level1" data-input-classes="">
		</span>
		<span class="woocommerce-input-wrapper">
			<input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="Почтовый индекс" value="" autocomplete="postal-code">
		</span>
		<span class="woocommerce-input-wrapper">
			<input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="Телефон" value="" autocomplete="tel">
		</span>
		<span class="woocommerce-input-wrapper">
			<input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="Email" value="" autocomplete="email">
		</span>
	</div> -->



	<?php
	get_template_part('template-parts/custom-content');
	?>

</main><!-- #main -->

<?php
get_footer("second");
