<?php

/**
 * This document contains the REST API Settings that comes with the theme.
 * @api posts added field for posts thumbnails.
 */
add_action( 'rest_api_init', function($d) {

    register_rest_field( 'post',
        'thumbnail',
        array(
            'get_callback'    => 'slug_get_feed_featured_image_post_meta_cb',
            'schema'          => null,
        )
    );
});

/**
 * Custom callback for adding rest api field.
 * @param $object WP_Post
 * @return array
 */
function slug_get_feed_featured_image_post_meta_cb( $object, $field_name, $request ) {
    global $dynamic_featured_image;
    $featured_images = $dynamic_featured_image->get_featured_images( $object['id'] );
    return $featured_images;
}

/**
 * Function to restrict wp-json access.
 * @param $errors WP_Error
 * @return WP_Error
 */
//function sumisip_api_request_ips_allowed( $errors ){
//    $allowed_ips = array( 'localhost', '192.168.0.251', '45.13.132.15' );
//    $request_server = $_SERVER['REMOTE_ADDR'];
//    if( ! in_array( $request_server, $allowed_ips ) )
//        return new WP_Error( 403, 'Not Allowed to access gateway. Contact Dev-Ops for more info.' );
//    return $errors;
//}
//add_filter( 'rest_authentication_errors', 'sumisip_api_request_ips_allowed' );

/**
 * Added role for WordPress.
 */
if( ! get_role('developer') ){
    $roles = get_role( 'administrator' )->capabilities;
    add_role('developer', 'Developer', $roles);
}
