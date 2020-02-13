<?php
/**
 * Template Name: Delicasy Page
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
            <img src="<?= get_template_directory_uri() ?>/assets/images/hero/wonder2.jpg">
        </div>

        <div class="post-hero-wrapper">
            <h1 class="display-1"><?php single_post_title() ?></h1>
        </div>
	</section>
	
	<section class="quarter-height">
        <div class="global-wrapper quarter-height section-padding">
            <div class="side-by-side align-items-center">
                <div class="preview">
                    <div class="photo-stacks">
                        <div class="photo-stack-display loading">
                            <div class="main-stack">
                                <img src="#" alt="Photo Stack">
                            </div>
                            <div class="bg-stack">
                                <img src="#" alt="Photo Stack">
                            </div>
                        </div>
                        <div class="controls teal">
                            <ul>
                                <li class="active" src="<?= get_template_directory_uri() ?>/assets/images/history/3.jpg"></li>
                                <li src="<?= get_template_directory_uri() ?>/assets/images/history/4.jpg"></li>
                                <li src="<?= get_template_directory_uri() ?>/assets/images/history/5.jpg"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="details">
                    <div class="page-composition button-spacing">
                        <h2>Tinuse Island</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa ratione expedita enim repellat
                            debitis fugit possimus, dolores sapiente voluptatem vero, non, aut deleniti odit amet.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa ratione expedita enim repellat
                            debitis fugit possimus, dolores sapiente voluptatem vero, non, aut deleniti odit amet. Amet,
                            nulla tempore. Error totam vitae recusandae?
                        </p>
                        <button class="colored teal">Explore Tinuse Island</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quarter-height bg-silver">
        <div class="global-wrapper section-padding">
            <div class="side-by-side align-items-center reverse">
                <div class="preview">
                    <div class="photo-stacks">
                        <div class="photo-stack-display loading">
                            <div class="main-stack">
                                <img src="#" alt="Photo Stack">
                            </div>
                            <div class="bg-stack">
                                <img src="#" alt="Photo Stack">
                            </div>
                        </div>
                        <div class="controls teal">
                            <ul>
                                <li class="active" src="<?= get_template_directory_uri() ?>/assets/images/history/1.jpg"></li>
                                <li src="<?= get_template_directory_uri() ?>/assets/images/history/2.jpg"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="details">
                    <div class="page-composition">
                        <h2>Bessy Jamitla</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus atque sapiente
                            voluptate autem dolor beatae repellendus nesciunt vitae eveniet id repudiandae
                            asperiores, obcaecati assumenda aliquid deserunt dolores culpa, placeat minima. Sunt,
                            inventore?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, laudantium?
                        </p>
                        <button class="colored teal">Explore Tinuse Island</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php 
	/* Start the Loop */
	    while ( have_posts() ):
			the_post();
		    the_content();  
		endwhile;
		
		// End of the loop.
	?>

<?php
get_footer();
