<?php
require_once SUMISIP_EVENTS . '/admin/pages/index.php';
add_action('admin_menu', 'my_menu');

function my_menu() {
    add_menu_page(
        __( 'Endpoint Setting', 'textdomain' ),
        __( 'Endpoint Setting','textdomain' ),
    'manage_options',
    'notifier',
    'notifier_page_content',
    'dashicons-rest-api',
    6 );
}



