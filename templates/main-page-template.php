<?php

/**
 * @package faithwork-theme
 */
// Template Name: main
get_header();
?>

<main id="primary" class="site-main custom">
    <section class="main-block first">
        <!-- <img src="wp-content/themes/faithwork-theme/pic/bg_image.png"> -->
        <video class="video-main-autoplay" loop="loop" preload="auto" autoplay muted>
            <source src="wp-content/themes/faithwork-theme/Video/IMG_0852.mp4">
        </video>
    </section>
    <section class="main-block second">
        <?php echo (get_theme_mod('marque_text')); ?>
    </section>
    <section class="main-block third">
        <?php get_template_part('template-parts/slider');?>
    </section>

    <div class="marquee">
        <div class="marquee-wrapper">
            <?php
            $marquee_text = 'Я ПОДЖИГАЛ ГОРОДА ПОКА ТЫ ОБИТАЛ';
            for ($i = 1; $i <= 30; $i++) {
            ?>
                <div class="marquee-content"><?php echo ($marquee_text); ?></div>
            <?php
            }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
</main>
<?php get_footer(); ?>