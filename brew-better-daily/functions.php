<?php

if (! defined('ABSPATH')) {
    exit;
}

function bbd_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'brew-better-daily'),
    ]);
}
add_action('after_setup_theme', 'bbd_theme_setup');

function bbd_enqueue_assets(): void
{
    wp_enqueue_style('bbd-site', get_template_directory_uri() . '/assets/css/site.css', [], '1.0.0');
    wp_enqueue_script('bbd-site', get_template_directory_uri() . '/assets/js/site.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'bbd_enqueue_assets');
