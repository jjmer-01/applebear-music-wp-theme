<?php 

function applebear_files() {
    wp_enqueue_style('applebear_main_styles', get_stylesheet_uri()); //connects stylesheet style.css
}

add_action('wp_enqueue_scripts', 'applebear_files');

function applebear_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location'); //allows dynamic menus
}

add_action('after_setup_theme', 'applebear_features');

function applebear_post_types() {
    register_post_type('event', array(
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => array(
            'name' => 'Events'
        )
    )); // creates custom post type "event"
}

add_action('init', 'applebear_post_types');