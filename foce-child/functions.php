<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/custom.css');
    // wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' );
    wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/css/swiper-bundle.min.css');
}

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

function theme_enqueue_scripts()
{
    // wp_enqueue_script( 'swiper-element-bundle.min', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9.2.0', true );
    wp_enqueue_script('swiper-element-bundle.min', get_theme_file_uri('/js/swiper-bundle.min.js'), array(), '9.2.0', true);
    wp_enqueue_script('theme-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '1.0', true);
    // Enqueue Custom Scripts
    wp_enqueue_script('order-custom-scripts', get_theme_file_uri('/js/custom-scripts.js'), array('jquery'), '1.0.0', true);
    // Enqueue hamburger script
    wp_enqueue_script('hamburger-mcdo', get_theme_file_uri('/js/mcdo.js'), array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
