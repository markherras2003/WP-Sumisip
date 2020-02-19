<?php
/**
 * Admin form callback for endpoint settings
 */
function handle_app_notifier_settings() {
    $ips = ( get_option('restriction_allowed_ips') ) ? get_option('restriction_allowed_ips') : [];
    update_option('notifier_endpoint', $_POST['endpoint']);
    update_option('enable_notification', $_POST['enable_notification']);
    update_option( 'enable_api_restriction', $_POST['enable_api_restriction'] );

    if ( isset( $_POST['restriction_allowed_ips'] ) && !empty( $_POST['restriction_allowed_ips'] ) ) {
        array_push($ips,  $_POST['restriction_allowed_ips'] );
        update_option('restriction_allowed_ips', $ips);
    }
    wp_redirect(admin_url('/admin.php?page=notifier'));
}
add_action( 'admin_post_notifier_end_point', 'handle_app_notifier_settings' );

/**
 * AJAX Callbacks
 */
add_action( "wp_ajax_remove_ip_from_whitelist", "remove_ip_from_whitelist_cb" );
add_action( "wp_ajax_nopriv_remove_ip_from_whitelist", "remove_ip_from_whitelist_cb" );
function remove_ip_from_whitelist_cb(){
    update_option('restriction_allowed_ips', $_POST['ip_list']);
    wp_die();
}
