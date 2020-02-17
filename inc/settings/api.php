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

/**
 * @param $request WP_REST_Request
 * @return array
 */
function sumisip_encode_html_entity ( $results, $server, $request ) {
    if ( $request->get_route() != '/feeds/v1/featured-post' ){
        foreach ( $results as $key => $result ){
            $results[$key]['title']['rendered'] = html_entity_decode( $results[$key]['title']['rendered']  );
        }
        return $results;
    }
}
add_filter( 'rest_pre_echo_response', 'sumisip_encode_html_entity' , 10, 3 );


//add_action( 'rest_api_init', function($d) {
//    register_rest_route( 'feeds/v1', '/featured-post/', array(
//        'methods' => 'GET',
//        'callback' => 'custom_meta_query'
//    ) );
//});
//
//function custom_meta_query(){
//    $collections = [];
//        $args = array(
//            'post_type' => 'post',
//            'posts_per_page' => '-1',
//            'tax_query' => array(
//                array(
//                    'taxonomy' => 'featured',
//                    'field' => 'slug',
//                    'terms' => 'featured',
//                ),
//            )
//        );
//        $meta_query = new WP_Query($args);
//        if($meta_query->have_posts()) {
//            while( $meta_query->have_posts() ){
//                $looper = [];
//                $meta_query->the_post();
//                    global $dynamic_featured_image;
//                    $featured_image = $dynamic_featured_image->get_featured_images( get_the_ID() );
//                $looper['id'] = get_the_ID();
//                $looper['title'] = html_entity_decode( get_the_title() );
//                $looper['content'] = html_entity_decode( get_the_content() );
//                $looper['author'] = get_the_author();
//                $looper['datetime'] = get_post_datetime();
//                $looper['date'] = get_the_date();
//                $looper['thumbnail'] = ($featured_image) ? $featured_image[0]['full'] : [];
//                array_push( $collections, $looper );
//            }
//            echo json_encode($collections);
//        } else {
//            echo [];
//        }
//}
