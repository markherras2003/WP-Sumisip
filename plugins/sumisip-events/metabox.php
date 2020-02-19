<?php
    //require_once 'metaboxes/dates.php';
    require_once 'metaboxes/location.php';

add_filter( 'rwmb_meta_boxes', 'sumisip_events_register_start_date_meta_box' );
function sumisip_events_register_start_date_meta_box( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => 'Start Date',
        'post_types' => 'events',
        'context' => 'side',
        'fields' => array(
            array(
                'id'         => 'event_start',
                'type'       => 'datetime',
                'js_options' => array(
                    'stepMinute'      => 15,
                    'showTimepicker'  => true,
                    'controlType'     => 'select',
                    'showButtonPanel' => false,
                    'oneLine'         => true,
                ),
                'save_format' => 'Y-m-d H:i:s',
                // Display inline?
                'inline'     => false,

                'timestamp'  => false,
            ),
        )
    );
    return $meta_boxes;
}



add_filter( 'rwmb_meta_boxes', 'sumisip_events_register_end_date_meta_box' );
function sumisip_events_register_end_date_meta_box( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => 'End Date',
        'post_types' => 'events',
        'context' => 'side',
        'fields' => array(
            array(
                'id'         => 'event_end',
                'type'       => 'datetime',
                'js_options' => array(
                    'stepMinute'      => 15,
                    'showTimepicker'  => true,
                    'controlType'     => 'select',
                    'showButtonPanel' => false,
                    'oneLine'         => true,
                ),
                'save_format' => 'Y-m-d H:i:s',
                // Display inline?
                'inline'     => false,

                'timestamp'  => false,
            ),
        )
    );

    return $meta_boxes;
}
