<?php

// 1. Видаляємо зайві мета-теги та скрипти з <head>
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');

// 2. Видалення непотрібних елементів із <head>
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// 3. Додаткове очищення під час init
add_action('init', function () {
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'wp_generator');
}, PHP_INT_MAX - 1);

// 4. Локалізація теми + підтримка RSS
function theme_localization()
{
    load_theme_textdomain('ma', get_template_directory() . '/language');
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'theme_localization');

// 5. Підтримка WooCommerce та базових функцій
function ionetheme_setup()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('comment-form');
    add_theme_support('comment-list');
}
add_action('after_setup_theme', 'ionetheme_setup');

// 6. Зображення
add_theme_support('post-thumbnails');
add_image_size('thumbnail_550x510', 550, 510, true);
add_image_size('thumbnail_680x600', 680, 600, true);

// 7. Формати постів
function mytheme_custom_post_formats()
{
    add_theme_support('post-formats', array('quote', 'image'));
}
add_action('after_setup_theme', 'mytheme_custom_post_formats');

// 8. Вимкнення REST API для неавторизованих користувачів
add_filter('rest_authentication_errors', function ($result) {
    if (!is_user_logged_in()) {
        return new WP_Error('rest_cannot_access', 'REST API доступний тільки для авторизованих', array('status' => 403));
    }
    return $result;
});

// 9. Видалення версії WP зі скриптів і стилів
function remove_wp_version_from_scripts($src)
{
    return remove_query_arg('ver', $src);
}
add_filter('script_loader_src', 'remove_wp_version_from_scripts', 15, 1);
add_filter('style_loader_src', 'remove_wp_version_from_scripts', 15, 1);