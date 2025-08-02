<?php

// 1. Видаляємо зайві мета-теги та скрипти з <head> для безпеки та оптимізації
remove_action('wp_head', 'wp_resource_hints', 2);           // Видаляє DNS prefetch (може використовуватися зловмисниками)
remove_action('wp_head', 'wp_generator');                   // Видаляє версію WordPress з <head> (безпека)
remove_action('wp_head', 'rsd_link');                       // Видаляє Really Simple Discovery (безпека)
remove_action('wp_head', 'rest_output_link_wp_head');       // Видаляє REST API link з <head> (безпека)
remove_action('wp_head', 'wp_oembed_add_discovery_links');  // Видаляє oEmbed links (безпека)
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters'); // Видаляє SVG фільтри (оптимізація)

// 4. Локалізація теми та підтримка RSS
function theme_localization()
{
  load_theme_textdomain('ma', get_template_directory() . '/language'); // Завантажує переклади теми
  add_theme_support('automatic-feed-links');                           // Вмикає автоматичні RSS посилання
}
add_action('after_setup_theme', 'theme_localization'); // Запускається після налаштування теми

// 6. Налаштування зображень та мініатюр
add_theme_support('post-thumbnails');                    // Вмикає підтримку мініатюр для постів
add_image_size('thumbnail_550x510', 550, 510, true);     // Створює кастомний розмір 550x510px з обрізанням
add_image_size('thumbnail_680x600', 680, 600, true);     // Створює кастомний розмір 680x600px з обрізанням
