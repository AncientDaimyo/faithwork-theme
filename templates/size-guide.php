<?php

/**
 * @package faithwork-theme
 *
 */
/*
Template Name: size-guide
*/
get_template_part('templates/template-parts/header-second');
?>

<main id="primary" class="site-main checkout-main">
    <div class="contact-us-full-page">
        <div class="breadcrumb">
            <?php
            $args = array(
                'delimiter' => '&nbsp;&#47;&nbsp;', // меняем разделитель
            );
            woocommerce_breadcrumb($args);
            ?>
        </div>
        <div class="info-content-page">
            <div class="size-guide-heading">
                <h1>Размерная сетка</h1>
                <div class="size-guide-article">
                    <p>
                        Мы сделали для вас отдельную страницу для выбора размерной сетки всех типов наших товаров
                    </p>
                </div>
            </div>
            <div class="size-guide-picture">
                <img src=<?php echo (get_template_directory_uri() . '/pic/Razmernaja_Setka-01.png') ?>>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php get_template_part('templates/template-parts/footer-second') ?>