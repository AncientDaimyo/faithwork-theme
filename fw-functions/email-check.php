<?php
require_once(rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/wp-load.php');
email_check();

function email_check() {
    $email = $_POST['faithwork_user_email'];
    if (email_exists($email)) {
        set_query_var('email', $email);
        echo get_template_part('templates/template-parts/sign-in-form');
    }
    else {
        set_query_var('email', $email);
        echo get_template_part('templates/template-parts/sign-up-form');
    }
}