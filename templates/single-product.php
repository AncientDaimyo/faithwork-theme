<?php

/**
 * @package faithwork-theme
 *
 */
/*
Template Name: single-product
*/
get_template_part('templates/template-parts/header-second');
?>

<main id="primary" class="site-main checkout-main">
    <div class="goods-exchange-and-return-full-page">
        <div class="breadcrumb">
            <?php
            $args = array(
                'delimiter' => '&nbsp;&#47;&nbsp;', // меняем разделитель
            );
            woocommerce_breadcrumb($args);
            ?>
            <p>ХУЙ</p>
        </div>
        
        </div>
    </div>
</main><!-- #main -->

<?php get_template_part('templates/template-parts/footer-second') ?>