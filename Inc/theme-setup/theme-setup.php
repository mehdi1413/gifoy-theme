<?php
defined('ABSPATH') || exit;


add_action('after_setup_theme', 'gifoy_theme_setup');

function gifoy_theme_setup(): void
{

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    add_theme_support('html5', [
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    add_theme_support('woocommerce');

    add_image_size('blog-full', '960', '560', ['center', 'center']);
    add_image_size('blog-sidebar', '856', '499', ['center', 'center']);
    add_image_size('blog-card', '374', '250', ['center', 'center']);

    add_filter('show_admin_bar', '__return_false');

    // REGISTER NAV MENU
    register_nav_menu('main','منوی اصلی');
    register_nav_menu('footer','منوی فوتر');
}