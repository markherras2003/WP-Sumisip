<?php
/**
 * Events meta boxes
 */

add_action( 'add_meta_boxes', 'add_events_meta' );
function add_events_meta() {
    add_meta_box( 'start_date_meta', __( 'Start date', 'sm-textdomain' ), 'add_events_start_meta_cb', 'events', 'side'  );
    add_meta_box( 'end_date_meta', __( 'End date', 'sm-textdomain' ), 'add_events_end_meta_cb', 'events', 'side'  );
}

/**
 * @param $post WP_Query
 * Register events meta
 */
function add_events_start_meta_cb( $post ) {
    $value =  get_post_meta( $post->ID, 'start_date', true );
    ?>
    <p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <?php _e( 'Event start', 'sm-textdomain' )?>
            <input type="date" name="start_date" class="datepicker" id="event-datepicker" value="<?= $value ?>" />
        </label>
    </div>
    </p>
    <?php
}

/**
 * @param $post WP_Query
 * Register events meta
 */
function add_events_end_meta_cb( $post ) {
    $value =  get_post_meta( $post->ID, 'end_date', true );
    ?>
    <p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <?php _e( 'Event End', 'sm-textdomain' )?>
            <input type="date" name="end_date" class="datepicker" id="event-datepicker" value="<?= $value ?>" />
        </label>
    </div>
    </p>
    <?php
}

add_action( 'save_post', 'events_meta_save_start' );
function events_meta_save_start( $post_id ) {
    // Checks for input and saves
    if( isset( $_POST[ 'start_date' ] ) ) {
        update_post_meta( $post_id, 'start_date', $_POST[ 'start_date' ] );
    } else {
        return;
    }

}

add_action( 'save_post', 'events_meta_save_end' );
function events_meta_save_end( $post_id ) {
    // Checks for input and saves
    if( isset( $_POST[ 'end_date' ] ) ) {
        update_post_meta( $post_id, 'end_date', $_POST[ 'end_date' ] );
    } else {
        return;
    }

}
