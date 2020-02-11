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

/**
 * Register 'meta_date' field in rest api response
 */
add_action( 'rest_api_init', function($d) {

    register_rest_field( 'events',
        'meta_date',
        array(
            'get_callback'    => 'slug_get_post_meta_cb',
            'update_callback' => 'slug_update_post_meta_cb',
            'schema'          => null,
        )
    );
});


function slug_get_post_meta_cb( $object, $field_name, $request ) {
    return [
        'start_date' => get_post_meta($object['id'], 'start_date', true),
        'end_date' => get_post_meta($object['id'], 'end_date', true),
    ];
}

/**
 * Register 'event_location' field in rest api response
 */
add_action( 'rest_api_init', function($d) {

    register_rest_field( 'events',
        'event_location',
        array(
            'get_callback'    => 'slug_get_location_post_meta_cb',
            'schema'          => null,
        )
    );
});

function slug_get_location_post_meta_cb( $object, $field_name, $request ) {
    return get_post_meta($object['id'], 'event_location', true);
}

function prefix_send_email_to_admin() {
    //die($_POST['endpoint']);
    update_option('notifier_endpoint', $_POST['endpoint']);
    wp_redirect(admin_url('/admin.php?page=notifier'));
}
add_action( 'admin_post_notifier_end_point', 'prefix_send_email_to_admin' );


/**
 * Register 'event_location' field in rest api response
 */
add_action( 'rest_api_init', function($d) {

    register_rest_field( 'events',
        'thumbnail',
        array(
            'get_callback'    => 'slug_get_featured_image_post_meta_cb',
            'schema'          => null,
        )
    );
});

function slug_get_featured_image_post_meta_cb( $object, $field_name, $request ) {
    global $dynamic_featured_image;
    $featured_images = $dynamic_featured_image->get_featured_images( $object['id'] );
    return $featured_images;
}
