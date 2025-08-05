<?php

function lidia_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_image_size('thumbnail_550x510', 550, 510, true);
    add_image_size('thumbnail_680x600', 680, 600, true);
}

add_action('after_setup_theme', 'lidia_theme_setup');

function lidia_scripts()
{
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('lidia-reset', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('lidia-style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'lidia_scripts');

function lidia_register_menus()
{
    register_nav_menus(array(
        'header' => esc_html__('Header Menu', 'lidia'),
    ));
}

add_action('init', 'lidia_register_menus');

// Підключаємо файл очищення
require_once get_template_directory() . '/includes/functions-cleanup.php';

// Підключаємо файл відключення помилок WP
require_once get_template_directory() . '/includes/disable-wp-textdomain-error.php';
