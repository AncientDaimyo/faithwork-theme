<?php
// register a new user
function faithwork_add_new_user()
{
    if (isset($_POST["faithwork_user_login"]) && wp_verify_nonce($_POST['faithwork_csrf'], 'faithwork-csrf')) {
        $user_login        = $_POST["faithwork_user_email"];
        $user_email        = $_POST["faithwork_user_email"];
        $user_tel         = $_POST["faithwork_user_tel"];
        $user_first         = $_POST["faithwork_user_first"];
        $user_last         = $_POST["faithwork_user_last"];
        $user_pass        = $_POST["faithwork_user_pass"];

        // this is required for username checks
        require_once(ABSPATH . WPINC . '/registration.php');

        // if (username_exists($user_login)) {
        //     // Username already registered
        //     faithwork_errors()->add('username_unavailable', __('Username already taken'));
        // }
        // if (!validate_username($user_login)) {
        //     // invalid username
        //     faithwork_errors()->add('username_invalid', __('Invalid username'));
        // }
        // if ($user_login == '') {
        //     // empty username
        //     faithwork_errors()->add('username_empty', __('Please enter a username'));
        // }
        // if (!is_email($user_email)) {
        //     //invalid email
        //     faithwork_errors()->add('email_invalid', __('Invalid email'));
        // }
        // if (email_exists($user_email)) {
        //     //Email address already registered
        //     faithwork_errors()->add('email_used', __('Email already registered'));
        // }
        // if ($user_pass == '') {
        //     // passwords do not match
        //     faithwork_errors()->add('password_empty', __('Please enter a password'));
        // }

        $errors = faithwork_errors()->get_error_messages();

        // if no errors then cretate user
        if (empty($errors)) {
            $user_data = [
                'user_login'        => $user_login,
                'user_pass'         => $user_pass,
                'user_email'        => $user_email,
                'user_tel'          => $user_tel,
                'first_name'        => $user_first,
                'last_name'         => $user_last,
                'user_registered'   => date('Y-m-d H:i:s')
            ];
            $new_user_id = wp_insert_user($user_data);
            if ($new_user_id) {
                // send an email to the admin
                wp_new_user_notification($new_user_id);

                // log the new user in
                wp_set_auth_cookie($new_user_id, true);
                wp_set_current_user($new_user_id, $user_login);
                do_action('wp_login', $user_login);

                // send the newly created user to the home page after logging them in
                wp_redirect(home_url());
                exit;
            }
        }
    }
}
add_action('init', 'faithwork_add_new_user');

// used for tracking error messages
function faithwork_errors()
{
    static $wp_error; // global variable handle
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}

// displays error messages from form submissions
function faithwork_register_messages()
{
    if ($codes = faithwork_errors()->get_error_codes()) {
        echo '<div class="faithwork_errors">';
        // Loop error codes and display errors
        foreach ($codes as $code) {
            $message = faithwork_errors()->get_error_message($code);
            echo '<span class="error"><strong>' . __('Error') . '</strong>: ' . $message . '</span><br/>';
        }
        echo '</div>';
    }
}
