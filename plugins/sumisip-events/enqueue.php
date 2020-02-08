<?php

add_action('admin_print_styles', 'jquery_datepicker_admin_styles');
function jquery_datepicker_admin_styles() {
    wp_enqueue_style( 'bootstrap-4' , 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
}
//
//add_action('admin_enqueue_scripts', 'google_places_api_autocomplete');
//function google_places_api_autocomplete() {
//    wp_register_script('google-places-library', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA4E8hNxu6qWinsq1zE0VuL_OPchzBxczU&libraries=places');
//    wp_enqueue_script( 'autocomplete-handle', plugin_dir_url(__FILE__).'js/event-datepicker.js', ['jquery','google-places-library'] );
//}
//
