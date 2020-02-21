<?php
/**
 * Template Name: Countdown Event
 * Template Post Type: post
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Sumisip
 * @since 1.0.0
 */

get_header();

global $post;
global $dynamic_featured_image;
$page_id = get_queried_object_id();
$featured_images = $dynamic_featured_image->get_featured_images($page_id);
?>

<section class="post-hero-section">
        <div class="post-hero-background">
        <?php foreach($featured_images as $featured_image) { 
                $i++;
                if($i===1) {  ?>
                <img src="<?= $featured_image['full']; ?>" alt="Article Image">            
            <?php }
            } ?>  
        </div>

        <div class="post-hero-wrapper">
            <h1 class="display-1"><?php single_post_title() ?></h1>
            <div class="countdown-timer margin-top-2">
            <?php 
                global $wp_query;
                $postid = $wp_query->post->ID;
                date_default_timezone_set("Asia/Manila");
//                $start_date = get_post_meta($postid, 'start_date', true);
//                $end_date = strtotime(get_post_meta($postid, 'end_date', true));
//                $remaining = $end_date - strtotime(date( $start_date." h:i:s A"));
//                $days_remaining = floor($remaining / 86400);
//                $hours_remaining = floor(($remaining / 3600) % 24);
//                $minutes_remaining = floor(($remaining / 60) % 60);

                $current_day = strtotime( date('Y-m-d H:i:s') );
                $meta_start_date = strtotime( get_post_meta( $postid, 'event_start', true) );

                $date_difference = abs($meta_start_date - $current_day);
                $years_difference = floor($date_difference / (365*60*60*24));
                $months_difference = floor(($date_difference - $years_difference * 365*60*60*24)
                    / (30*60*60*24));
                $days_remaining = floor(($date_difference - $years_difference * 365*60*60*24 -
                        $months_difference*30*60*60*24)/ (60*60*24));
                $hours_remaining = floor(($date_difference - $years_difference * 365*60*60*24
                        - $months_difference*30*60*60*24 - $days_remaining*60*60*24)
                    / (60*60));
                $minutes_remaining = floor(($date_difference - $years_difference * 365*60*60*24
                    - $months_difference*30*60*60*24 - $days_remaining*60*60*24
                    - $hours_remaining*60*60)/ 60);

            wp_reset_query();
            ?>
                <div class="count days">
                    <h2 class="display-3"><?= $days_remaining ?></h2>
                    <p>Days</p>
                </div>
                <div class="count hours">
                    <h2 class="display-3"><?= $hours_remaining ?></h2>
                    <p>Hours</p>
                </div>
                <div class="count minutes">
                    <h2 class="display-3"><?= $minutes_remaining ?></h2>
                    <p>Minutes</p>
                </div>
            </div>
        </div>
    </section>

    <section class="hub-contents">

        <?php the_content(); ?>   
        
    </section>



<?php
get_footer();
