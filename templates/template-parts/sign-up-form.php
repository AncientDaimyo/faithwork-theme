<form id="faithwork-registration-form" class="faithwork-form" action="" method="POST">

    <div class="account-full-forms">
        <fieldset>
            <?php
            $email = get_query_var('email');
            echo $email;
            ?>
            <legend class="account-legend">Тут будет жоский(joski') логотип</legend>
            <div class="account-forms">
                <input name="faithwork_user_email" id="faithwork-user-email" class="faithwork-user-email" type="hidden" value="<?php echo ($email); ?>" />
            </div>
            <div class="account-forms">
                <input name="faithwork_user_first" id="faithwork-user-first" type="text" class="faithwork-user-first" placeholder="Олег" />
            </div>
            <div class="account-forms">
                <input name="faithwork_user_last" id="faithwork-user-last" type="text" class="faithwork-user-last" placeholder="Березин" />
            </div>
            <div class="account-forms">
                <input name="faithwork_user_tel" id="tel" class="tel" type="tel" required="required" autocorrect="off" autocapitalize="off" pattern="^\+\d{1} \(\d{3}\) \d{3}-\d{2}-\d{2}$" minlength="19"/>
            </div>
            <div class="account-forms">
                <input name="date" id="date" class="date" type="text" placeholder="28.08.2002" maxlength="8" max="<?php echo date("d.m.Y"); ?>" />
            </div>
            <div class="account-forms">
                <input name="faithwork-user-pass" id="password" class="password" type="password" placeholder="Пароль" />
            </div>
            <div class="account-forms">
                <input type="hidden" name="faithwork_csrf" value="<?php echo wp_create_nonce('faithwork-csrf'); ?>" />
                <input type="submit" value="<?php _e('Register Your Account'); ?>" />
            </div>
        </fieldset>
    </div>
</form>

<script>
    jQuery("#faithwork-registration-form").on("submit", function(e) {
        e.preventDefault();
        jQuery.ajax({
            url: document.location.protocol + '//' + document.location.host + '/wp-content/themes/faithwork-theme/fw-functions/sign-up-ajax.php',
            type: 'POST',
            data: jQuery(this).serialize(),
            beforeSend: function(xhr) {
                jQuery('.ajax-info').html('Загрузка, 5 сек...');
                jQuery('#faithwork_login_check').addClass('disable');
            },
            success: function(data) {
                jQuery('.ajax-info').empty();
            },
            error: function() {
                jQuery('.ajax-info').html('Ошибка');
                jQuery('#faithwork_login_check').removeClass('disable');
            }
        });
    });

    jQuery('#tel').on('input', function() {
        jQuery(this).val(jQuery(this).val().replace(/[A-Za-zА-Яа-яЁё]/, ''));
    });


    jQuery('#date').on('input', function() {
        jQuery(this).val(jQuery(this).val().replace(/[A-Za-zА-Яа-яЁё]/, ''));
    });
    jQuery('#date').mask('99.99.9999');

    jQuery('#tel').mask('+9 (999) 999-99-99');
</script>