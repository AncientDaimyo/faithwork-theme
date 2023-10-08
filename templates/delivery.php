<?php

/**
 * @package faithwork-theme
 *
 */
/*
Template Name: delivery
*/
get_header("second");
?>

<main id="primary" class="site-main checkout-main">
    <div class="delivery-full-page">
        <div class="breadcrumb">
            <?php
            $args = array(
                'delimiter' => '&nbsp;&#47;&nbsp;', // меняем разделитель
            );
            woocommerce_breadcrumb($args);
            ?>
        </div>
        <div class="info-content-page">
            <div class="delivery-info">
                <div class="delivery-heading">
                    <h1>Бесплатная доставка</h1>
                    <div class="delivery-article">
                        <p>Бесплатная доставка осуществляется при заказе от 5000 ₽ до пункта выдачи заказов CDEK, Почта РФ.</p>
                        <p>При оформлении заказа от 5000 ₽ вы можете указать предпочтительный вариант доставки CDEK или Почта РФ.</p>
                    </div>
                </div>
                <div class="delivery-heading">
                    <h1>Доставка Почтой РФ</h1>
                    <div class="delivery-article">
                        <p>В настоящее время доставка осуществляется только в пределах РФ.</p>
                        <p>Стоимость доставки в отделение Почты РФ высчитывается на странице оформления заказа и зависит от расстояния до пункта назначения. Товары отправляются из Санкт-Петербурга.</p>
                    </div>
                </div>
                <div class="delivery-heading">
                    <h1>Время доставки</h1>
                    <div class="delivery-article">
                        <p>Товар передается в транспортную компанию в течение 24 часов с момента поступления средств на счёт. После отправки на ваш email предоставляется трек-код для отслеживания посылки.</p>
                        <p>Срок доставки зависит от удаленности пункта назначения до нашего склада, однако в среднем доставка осуществляется за 5-10 календарных дней.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="delivery-picture">
            <img src=<?php echo (get_template_directory_uri() . '/pic/IMG_0718.PNG') ?>>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer("second");
