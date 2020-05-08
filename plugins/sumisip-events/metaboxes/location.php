<?php
/**
 * Events meta boxes
 */

add_action( 'add_meta_boxes', 'add_events_location_meta' );
function add_events_location_meta() {
    add_meta_box( 'event_location_meta', __( 'Event location', 'sumisip-events' ), 'add_event_location_meta_cb', 'events', 'side'  );
}

/**
 * @param $post WP_Query
 * Register events meta
 */
function add_event_location_meta_cb( $post ) {
    $value =  get_post_meta( $post->ID, 'event_location', true );
    ?>
    <div class="components-base-control__field">
        <label class="components-base-control__label" for="inspector-text-control-0">Event Location</label>
        <input class="components-text-control__input" type="text" id="event_location" name="event_location" value="<?= $value ?>"
    </div>
    <?php
}


add_action( 'save_post', 'events_meta_save_location' );
function events_meta_save_location( $post_id ) {
    // Checks for input and saves
    if( isset( $_POST[ 'event_location' ] ) ) {
        update_post_meta( $post_id, 'event_location', $_POST[ 'event_location' ] );
    } else {
        return;
    }

}

