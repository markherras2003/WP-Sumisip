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

?>

<section class="post-hero-section">
        <div class="post-hero-background">
            <img src="<?= get_template_directory_uri() ?>/assets/images/hero/wonder3.jpg">  
        </div>

        <div class="post-hero-wrapper">
            <h1 class="display-1"><?php single_post_title() ?></h1>
            <div class="countdown-timer margin-top-2">
            <?php 
                global $wp_query;
                $postid = $wp_query->post->ID;
                date_default_timezone_set("Asia/Manila");
                $start_date = get_post_meta($postid, 'start_date', true);
                $end_date = strtotime(get_post_meta($postid, 'end_date', true));
                $remaining = $end_date - strtotime(date( $start_date." h:i:s A"));
                $days_remaining = floor($remaining / 86400);
                $hours_remaining = floor(($remaining / 3600) % 24);
                $minutes_remaining = floor(($remaining / 60) % 60);
                
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

    <section>

        <?php the_content(); ?>   
        
    </section>



<?php
get_footer();
