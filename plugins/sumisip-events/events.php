<?php
add_action( 'init', 'sumisip_events_post_type' );
if( !function_exists('sumisip_events_post_type') ){
    function sumisip_events_post_type() {
        $args = [
            'name' => 'events',
            'label' => 'Events',
            'singular_name' => 'event',
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-megaphone',
            'show_in_menu  ' => true,
            'public' => true,
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'excerpt' ),
            'show_ui' => true

        ];
        register_post_type('events', $args );
        add_theme_support( 'post-thumbnails', array( 'events' ) );
    }
}
require_once SUMISIP_EVENTS . '/rest/fields/endpoints.php';
require_once SUMISIP_EVENTS . '/rest/rest.php';
