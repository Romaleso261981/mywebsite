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

// Goog;e Maps API Key for ACF
function my_acf_init()
{
    acf_update_setting('google_api_key', '4fb6bcb25bb0b9524f57b7cc29ba363abe587ce0');
}
add_action('acf/init', 'my_acf_init');

/**
 * Custom services post type
 */
function lidia_register_services_post_type()
{
    $labels = array(
        'name' => 'Services',
        'singular_name' => 'Service',
        'menu_name' => 'Services',
        'all_items' => 'All Services',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Service',
        'edit_item' => 'Edit Service',
        'new_item' => 'New Service',
        'view_item' => 'View Service',
        'search_items' => 'Search Services',
        'not_found' => 'No services found',
        'not_found_in_trash' => 'No services found in Trash',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-book',
        'menu_position' => 5,
        'menu_icon' => 'dashicons-book',
        'show_in_rest' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
    );
    register_post_type('services', $args);
};

add_action('init', 'lidia_register_services_post_type');

/**
 * Custom reviews post type
 */
function lidia_register_reviews_post_type()
{
    $labels = array(
        'name' => 'Reviews',
        'singular_name' => 'Review',
        'menu_name' => 'Reviews',
        'all_items' => 'All Reviews',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Review',
        'edit_item' => 'Edit Review',
        'new_item' => 'New Review',
        'view_item' => 'View Review',
        'search_items' => 'Search Reviews',
        'not_found' => 'No reviews found',
        'not_found_in_trash' => 'No reviews found in Trash',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'reviews'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-star-filled',
        'menu_position' => 5,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
    );
    register_post_type('reviews', $args);
};

add_action('init', 'lidia_register_reviews_post_type');

/**
 * Custom services taxonomy
 */
function lidia_register_services_taxonomy()
{
    $labels = array(
        'name' => 'Services Categories',
        'singular_name' => 'Services Category',
        'menu_name' => 'Services Categories',
        'all_items' => 'All Services Categories',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Services Category',
        'edit_item' => 'Edit Services Category',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
    );

    register_taxonomy('services_category', 'services', $args);
}

add_action('init', 'lidia_register_services_taxonomy');