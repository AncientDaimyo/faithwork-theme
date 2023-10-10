<?php
/**
 * @package faithwork-theme
 *
 */
/*
Template Name: account
*/
get_template_part('templates/template-parts/header-second');
?>

<main id="primary" class="site-main account-main">
    <?php
        if (is_user_logged_in()){

        }
        else {
            get_template_part('templates/template-parts/registration-form');
        }
    ?>
</main><!-- #main -->

<?php get_template_part('templates/template-parts/footer-second') ?>