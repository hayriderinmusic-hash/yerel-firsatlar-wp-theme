<?php
if (!defined('ABSPATH')) exit;

function yerel_firsatlar_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'yerel_firsatlar_setup');

function yerel_firsatlar_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'yerel_firsatlar_assets');
