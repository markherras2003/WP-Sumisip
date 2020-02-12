<?php
/**
 * Template Name: Countdown Event
 * Template Post Type: post
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();

?>

	<section class="post-hero-section">
        <div class="post-hero-background">
            <img src="<?= get_template_directory_uri() ?>/assets/images/hero/wonder2.jpg">  
        </div>

        <<div class="countdown-event">
            <h1 class="display-1"><?php single_post_title() ?></h1>

            <?php 
                global $wp_query;
                $postid = $wp_query->post->ID;

                date_default_timezone_set("Asia/Manila");
                $date = strtotime(get_post_meta($postid, 'Event Start', true));
                $remaining = $date - strtotime(date("F j  Y h:i:s A"));
                $days_remaining = floor($remaining / 86400);
                $hours_remaining = floor(($remaining / 3600) % 24);
                $minutes_remaining = floor(($remaining / 60) % 60);
                
                wp_reset_query();
            ?>


            <div class="countdown-time">
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

	<?php 
	/* Start the Loop */
    the_post();
	?>

<?php
get_footer();
