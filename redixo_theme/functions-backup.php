<?php
/**
 * Backup of original functions.php
 * This is a minimal version to test
 */

// Basic theme setup
function redixo_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'redixo'),
    ));
}
add_action('after_setup_theme', 'redixo_setup');

// Enqueue scripts and styles
function redixo_theme_scripts() {
    $theme_uri = get_template_directory_uri();
    
    // Main stylesheet
    wp_enqueue_style('redixo-style', $theme_uri . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Main script
    wp_enqueue_script('jquery');
    wp_enqueue_script('redixo-main', $theme_uri . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'redixo_theme_scripts');

// Safe page permalink function
function redixo_get_page_permalink($page_slug = '') {
    if (empty($page_slug)) {
        return home_url('/');
    }
    $page = get_page_by_path($page_slug);
    if ($page) {
        return get_permalink($page->ID);
    }
    return home_url('/');
}

// Fallback menu
function redixo_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li><a href="' . esc_url(redixo_get_page_permalink('about')) . '">About</a></li>';
    echo '<li><a href="' . esc_url(redixo_get_page_permalink('contact')) . '">Contact</a></li>';
    echo '</ul>';
}
