<?php

add_action('admin_print_styles', 'jquery_datepicker_admin_styles');
function jquery_datepicker_admin_styles() {
    wp_enqueue_style( 'bootstrap-4' , 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
}

add_action( 'admin_enqueue_scripts', 'sumisip_core_plugin_enqueue_scripts' );
function sumisip_core_plugin_enqueue_scripts( $suffix ) {
    if( $suffix != 'toplevel_page_notifier' ){
        return;
    }
    wp_enqueue_style('sumisip-core-style',SUMISIP_PLUGIN_URL.'assets/css/style.css', array('bootstrap-4'));
    wp_enqueue_style( 'jquery-datetimepicker-style' , SUMISIP_PLUGIN_URL.'assets/css/jquery.datetimepicker.css');
    wp_enqueue_style('datepicker-style',SUMISIP_PLUGIN_URL.'assets/css/datepicker.css');


    wp_enqueue_script('sumisip-core-tab-script',SUMISIP_PLUGIN_URL.'assets/js/tab.js', array(), SUMISIP_CORE_VER, true );

    wp_deregister_script('jquery');
    wp_register_script('jquery','http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), SUMISIP_CORE_VER, true );
    wp_enqueue_script('jquery');
    wp_enqueue_script('momentjs','https://cdn.jsdelivr.net/npm/moment@latest/moment.min.js', array('jquery'), SUMISIP_CORE_VER, true );
    wp_enqueue_script('datepicker-jquery',SUMISIP_PLUGIN_URL.'assets/js/datepicker.all.min.js', array('jquery','momentjs' ), SUMISIP_CORE_VER, true );
    wp_enqueue_script('datepicker-en',SUMISIP_PLUGIN_URL.'assets/js/datepicker.en.js', array('jquery','datepicker-jquery' ), SUMISIP_CORE_VER, true );

    //wp_enqueue_script('custom',SUMISIP_PLUGIN_URL.'assets/js/custom.js', array('jquery','momentjs'), SUMISIP_CORE_VER, true );

    wp_register_script(
        'ajaxHandle',
        SUMISIP_PLUGIN_URL . 'assets/js/custom.js',
        array(),
        false,
        true
    );
    wp_enqueue_script( 'ajaxHandle' );
    wp_localize_script(
        'ajaxHandle',
        'ajax_object',
        array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) )
    );
}

