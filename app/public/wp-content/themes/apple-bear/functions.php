<?php 

function applebear_files() {
    wp_enqueue_style('applebear_main_styles', get_stylesheet_uri()); //connects stylesheet style.css
}

add_action('wp_enqueue_scripts', 'applebear_files');

function applebear_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location'); //allows dynamic menus
}

add_action('after_setup_theme', 'applebear_features');

function applebear_adjust_queries($query) {
    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            )
        ));
    }
}

add_action('pre_get_posts', 'applebear_adjust_queries');

