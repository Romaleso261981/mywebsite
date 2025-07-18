<?php

function custom_welcome_message()
{
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();

        $user_name = !empty($current_user->display_name) ? $current_user->display_name : $current_user->user_login;

        $first_name = !empty($current_user->first_name) ? $current_user->first_name : $user_name;

        $welcome_message = sprintf(
            '<div class="welcome-message logged-in">
                <p>Вітаємо, <strong>%s</strong>! 👋</p>
                <p>Раді бачити вас знову на нашому сайті.</p>
            </div>',
            esc_html($first_name)
        );

        return $welcome_message;
    } else {
        $welcome_message = '<div class="welcome-message guest">
            <p>Вітаємо на нашому сайті! 🌟</p>
            <p>Будь ласка, <a href="' . esc_url(wp_login_url()) . '">увійдіть</a> або <a href="' . esc_url(wp_registration_url()) . '">зареєструйтесь</a> для отримання повного доступу.</p>
        </div>';

        return $welcome_message;
    }
}

function custom_heading($text)
{
    echo '<h2 class="section-title">' . esc_html($text) . '</h2>';
}