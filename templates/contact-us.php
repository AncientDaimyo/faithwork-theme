<?php

/**
 * @package faithwork-theme
 *
 */
/*
Template Name: contact-us
*/
get_header("second");
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
            <div class="contact-us-heading">
                <h1>Контакты</h1>
                <div class="contact-us-article">
                    <p>
                        <strong>Email:</strong> <a href="mailto:clothing@faithwork.ru">clothing@faithwork.ru</a>
                    </p>
                    <p>
                        <strong>ИНН:</strong> 434547177915
                    </p>
                    <p>Скоро тут будет форма обратной связи, но мы её еще не сделали, поэтому пишите на Email, ответим в течение получаса на любой вопрос, даже как сделать сырники.</p>
                </div>
            </div>
            <div class="contact-us-picture">
                <img src=<?php echo (get_template_directory_uri() . '/pic/photo_2022-11-08_01-20-05.png') ?>>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer("second");
