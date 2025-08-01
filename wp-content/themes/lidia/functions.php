<?php

function lidia_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('comment-form');
    add_theme_support('comment-list');
    add_theme_support('post-formats', array('quote', 'image'));

    // Додаємо кастомні розміри зображень
    add_image_size('thumbnail_550x510', 550, 510, true);
    add_image_size('thumbnail_680x600', 680, 600, true);
}

add_action('after_setup_theme', 'lidia_theme_setup');

function lidia_scripts()
{
    wp_enqueue_style('lidia-reset', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('lidia-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('lidia-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'lidia_scripts');

function lidia_register_menus()
{
    register_nav_menus(array(
        'header' => esc_html__('Header Menu', 'lidia'),
    ));
}

add_action('init', 'lidia_register_menus');

// Функції очищення
function lidia_cleanup()
{
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

    // 3. Додаткове очищення
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'wp_generator');

    // 4. Вимкнення REST API для неавторизованих користувачів
    add_filter('rest_authentication_errors', function ($result) {
        if (!is_user_logged_in()) {
            return new WP_Error('rest_cannot_access', 'REST API доступний тільки для авторизованих', array('status' => 403));
        }
        return $result;
    });

    // 5. Видалення версії WP зі скриптів і стилів
    function remove_wp_version_from_scripts($src)
    {
        return remove_query_arg('ver', $src);
    }
    add_filter('script_loader_src', 'remove_wp_version_from_scripts', 15, 1);
    add_filter('style_loader_src', 'remove_wp_version_from_scripts', 15, 1);
}

// Завантажуємо функції очищення після повної ініціалізації WordPress
add_action('wp_loaded', 'lidia_cleanup');