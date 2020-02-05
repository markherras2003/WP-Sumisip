<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sumisip
 * @since 1.0.0
 */

 get_header(); 
 

 
 
 ?>

    <?php if( have_posts() ) : 
    ?>
        <section class="post-hero-section">
            <div class="post-hero-background">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/wonder1.jpg">
            </div>

            <div class="post-hero-wrapper">
                <h1>Article Posts</h1>
            </div>
        </section>
    <?php


            get_template_part( 'partials/posts/post', 'excerpt' );
        else: 
            get_template_part( 'partials/posts/post', 'none' );

        endif;

        
    ?>

    <?php get_footer(); ?>