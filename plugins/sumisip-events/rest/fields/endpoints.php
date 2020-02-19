<?php

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
    $sdate = strtotime( get_post_meta($object['id'], 'event_start', true) );
    $rsdate = date('M d, Y', $sdate);
    $shour = date('H', $sdate);
    $smin = date('i', $sdate);

    $edate = strtotime( get_post_meta($object['id'], 'event_end', true) );
    $redate = date('M d, Y', $edate);
    $ehour = date('H', $edate);
    $emin = date('i', $edate);
    return [
        'start' => [
            'time' => [
                'hour' => $shour,
                'minute' => $smin
            ],
            'date' => $rsdate,
            '_meta' => get_post_meta($object['id'], 'event_start', true)
        ],
        'end' => [
            'time' => [
                'hour' => $ehour,
                'minute' => $emin
            ],
            'date' => $redate,
            '_meta' => get_post_meta($object['id'], 'event_end', true)
        ]
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