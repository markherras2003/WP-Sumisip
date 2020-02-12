<?php
/**
 * Template Name: Tour Page
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

        <div class="post-hero-wrapper">
            <h1 class="display-1"><?php single_post_title() ?></h1>
        </div>
    </section>

	<?php 
	/* Start the Loop */
		while ( have_posts() ):
			the_post();
		    the_content();  
		endwhile; // End of the loop.
	?>

<?php
get_footer();
