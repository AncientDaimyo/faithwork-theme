<form id="faithwork_sign_in_form" class="faithwork_form" action="" method="POST">
    <fieldset>
        <p>
            <label for="faithwork_user_email"><?php _e('Email'); ?></label>
            <input name="faithwork_user_email" id="faithwork_user_email" class="faithwork_user_email" type="email" placeholder="USER@EMAIL.com" />
        </p>
       
        <p>
            <label for="password"><?php _e('Password'); ?></label>
            <input name="faithwork_user_pass" id="password" class="password" type="password" placeholder="Пароль" />
        </p>
        <div class="account-forms">
                <input type="hidden" name="faithwork_csrf" value="<?php echo wp_create_nonce('faithwork-csrf'); ?>" />
                <input type="submit" value="<?php _e('Register Your Account'); ?>" />
            </div>
    </fieldset>
</form>