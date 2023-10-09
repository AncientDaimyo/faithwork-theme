<?php

/**
 * @package faithwork-theme
 *
 */
/*
Template Name: about-us
*/
get_template_part('templates/template-parts/header-second');
?>

<main id="primary" class="site-main checkout-main">
    <div class="about-us-full-page">
        <div class="breadcrumb">
            <?php
            $args = array(
                'delimiter' => '&nbsp;&#47;&nbsp;', // меняем разделитель
            );
            woocommerce_breadcrumb($args);
            ?>
        </div>
        <div class="info-content-page">
            <div class="about-us-heading">
                <h1>О проекте</h1>
                <div class="about-us-article">
                    <p><strong>FAITHWORK</strong> – лаконичный стритстайл бренд одежды, раскрывающий ваши тайные глубинные желания. Мы верим в то, что сексуальность каждого человека должна быть раскрыта, не только посредством его мыслей, фантазий и образов, но и внешнего вида, стиля, одежды.</p>
                    <p>Как и в повседневной жизни нам важно видеть в нашем окружений единомышленников, чей разум и тело открыты не только к новой окружающей реальности, но и к внутренним душевным и ментальным изменениям.</p>
                    <p>Присоединяйтесь к <strong>FAITHWORK</strong> и раскройте внутреннее неосознанное.</p>
                </div>
            </div>
            <div class="about-us-picture">
                <img src=<?php echo (get_template_directory_uri() . '/pic/photo_2022-11-08_01-20-05.png') ?>>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php get_template_part('templates/template-parts/footer-second') ?>
