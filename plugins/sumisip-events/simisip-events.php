<?php
/**
 * Plugin Name: Sumisip Core Plugin
 * Description: This plugin contains settings for API Restrictions, App Notification and Changing event
 * Version: 1.0.3
 * Author: Gavilan Arts
 */
CONST THEME_REQUIRED = 'Sumisip';
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
define( 'SUMISIP_CORE_VER', '1.0.3' );
define( 'SUMISIP_EVENTS', dirname(__FILE__) );
define( 'SUMISIP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SUMISIP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

add_action( 'activate_plugin', 'check_current_theme', 10, 2 );

function check_current_theme( $plugin, $network_wide )
{
    if (THEME_REQUIRED != wp_get_theme() && $plugin == 'sumisip-events/simisip-events.php' ) {
        add_action('plugins_loaded', 'admin_notice');
        function admin_notice()
        {
            add_action('admin_notices', 'admin_notice_missing_main_plugin');
        }

        wp_die('Sumisip Events plugin requires Sumisip Theme to work.');
    }
}
function admin_notice_missing_main_plugin() {
    if ( isset( $_GET['activate'] ) ) {
        unset( $_GET['activate'] );
    }
    $message = sprintf(
    /* translators: 1: Plugin name 2: Elementor */
        esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'tyreconnect-elements' ),
        '<strong>' . esc_html__( 'TyreConnect Elements', 'tyreconnect-elements' ) . '</strong>',
        '<strong>' . esc_html__( 'Elementor', 'tyreconnect-elements' ) . '</strong>'
    );
    printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
}

require( SUMISIP_EVENTS . '/events.php' );
require( SUMISIP_EVENTS . '/metabox.php' );

require( SUMISIP_EVENTS . '/enqueue.php' );

add_action('init','check_user_role');
function check_user_role(){
    $current_user = wp_get_current_user();
    if( in_array('developer', $current_user->roles ) ){
        require( SUMISIP_EVENTS . '/admin/page.php' );
    }
}
require_once SUMISIP_EVENTS . '/callbacks/callback.php';

