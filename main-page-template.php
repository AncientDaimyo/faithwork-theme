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
    <section class="main-block third"></section>
    <?php
    // if ( have_posts() ) :

    // 	/* Start the Loop */
    // 	while ( have_posts() ) :
    // 		the_post();

    // 		/*
    // 		 * Include the Post-Type-specific template for the content.
    // 		 * If you want to override this in a child theme, then include a file
    // 		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
    // 		 */
    // 		get_template_part( 'template-parts/content', get_post_type() );

    // 	endwhile;

    // 	the_posts_navigation();

    // else :

    // 	get_template_part( 'template-parts/content', 'none' );

    // endif;
    ?>


    <div class="marquee">
        <div class="marquee-wrapper">
            <?php
            $marquee_text = '1';
            for ($i = 1; $i <= 10; $i++) {
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