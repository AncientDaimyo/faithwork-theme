<?php

/**
 * @package faithwork-theme
 */
// Template Name: main
get_header();
?>

<main id="primary" class="site-main custom">
    <section class="main-block first">
        <img src="wp-content/themes/faithwork-theme/pic/bg_image.png">
    </section>
    <section class="main-block second"></section>
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
        <div class="track">
            <div class="marquee-content">
                &nbsp;Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence &nbsp;Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>