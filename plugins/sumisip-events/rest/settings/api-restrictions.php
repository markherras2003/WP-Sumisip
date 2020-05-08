<?php

add_filter( 'rest_authentication_errors', 'sumisip_api_request_ips_allowed' );
/**
 * Function to restrict wp-json access.
 * @param $errors WP_Error
 * @return WP_Error
 */
function sumisip_api_request_ips_allowed( $errors ){
    $allowed = get_option('restriction_allowed_ips');
    $allowed_ips = array( 'localhost', '192.168.0.251', '45.13.132.15' );
    $request_server = $_SERVER['REMOTE_ADDR'];
    if( ! in_array( $request_server, $allowed ) )
        return new WP_Error( 403, 'Not Allowed to access gateway. Contact Dev-Ops for more info.' );
    return $errors;
}