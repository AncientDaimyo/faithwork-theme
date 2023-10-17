<?php

/**
 * @package faithwork-theme
 */
// Template Name: main
get_template_part('templates/template-parts/header-main');
?>

<main id="primary" class="site-main custom" >
    <section class="main-block first">
        <!-- <img src="wp-content/themes/faithwork-theme/pic/bg_image.png"> -->
        <video class="video-main-autoplay" loop="loop" preload="auto" autoplay muted>
            <source src=<?php echo(get_template_directory_uri() . '/assets/video/IMG_0852.mp4')?>>
        </video>
    </section>
    <section class="main-block second">
        <?php echo (get_theme_mod('marque_text')); ?>
    </section>
    <section class="main-block third">
        <?php get_template_part('templates/template-parts/slider');?>
    </section>

    <?php get_template_part('templates/template-parts/marquee'); ?>


    <!-- <script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script> -->
</main>
<?php get_template_part('templates/template-parts/footer-main') ?>