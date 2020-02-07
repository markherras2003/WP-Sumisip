<?php
add_action('transition_post_status', 'post_published_notification', 10, 3);
function post_published_notification($new_status, $old_status, $post)
{

    if ('publish' === $new_status && 'draft' === $old_status && $post->post_type === 'post') {
        $author = $post->post_author; /* Post author ID. */
        $name = get_the_author_meta('display_name', $author);

        $post_data = [
            'title' => $post->post_title,
            'body' => get_the_excerpt($post->ID),
            'id' => $post->ID,
        ];
        if( !empty(get_option('notifier_endpoint')) ){
            $response = wp_remote_request( get_option('notifier_endpoint'),
                array(
                    'method' => 'POST',
                    'body' => $post_data
                )
            );
        }
    }

}