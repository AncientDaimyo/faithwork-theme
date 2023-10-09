<h3 class="vicode_header"><?php _e('Register New Account'); ?></h3>

<?php
// show any error messages after form submission
include('functions.php');
vicode_register_messages(); ?>

<form id="vicode_registration_form" class="vicode_form" action="" method="POST">
    <fieldset>
        <p>
            <label for="vicode_user_Login"><?php _e('Username'); ?></label>
            <input name="vicode_user_login" id="vicode_user_login" class="vicode_user_login" type="text" />
        </p>
        <p>
            <label for="vicode_user_email"><?php _e('Email'); ?></label>
            <input name="vicode_user_email" id="vicode_user_email" class="vicode_user_email" type="email" />
        </p>
        <p>
            <label for="vicode_user_first"><?php _e('First Name'); ?></label>
            <input name="vicode_user_first" id="vicode_user_first" type="text" class="vicode_user_first" />
        </p>
        <p>
            <label for="vicode_user_last"><?php _e('Last Name'); ?></label>
            <input name="vicode_user_last" id="vicode_user_last" type="text" class="vicode_user_last" />
        </p>
        <p>
            <label for="password"><?php _e('Password'); ?></label>
            <input name="vicode_user_pass" id="password" class="password" type="password" />
        </p>
        <p>
            <label for="password_again"><?php _e('Password Again'); ?></label>
            <input name="vicode_user_pass_confirm" id="password_again" class="password_again" type="password" />
        </p>
        <p>
            <input type="hidden" name="vicode_csrf" value="<?php echo wp_create_nonce('vicode-csrf'); ?>" />
            <input type="submit" value="<?php _e('Register Your Account'); ?>" />
        </p>
    </fieldset>
</form>