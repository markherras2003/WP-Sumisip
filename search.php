<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

    <section class="post-hero-section">
        <div class="post-hero-background">
            <img src="<?= get_template_directory_uri() ?>/assets/images/hero/wonder1.jpg">
        </div>

        <div class="post-hero-wrapper">
            <h1 class="display-1">Search</h1>
        </div>
    </section>

    <div class="sumisip-posts">
			<div class="global-wrapper section-padding">
				
            <?php  if( have_posts() ) {
                get_template_part( 'partials/posts/post', 'search' );
            }else {
                get_template_part( 'partials/posts/post', 'none' );
            } ?>



            <!-- <div class="post-sidebar">
                <div class="search-sidebar">
                    <input type="text" class="search" placeholder="Search..">
                    <div class="search-icon-wrapper"><svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                            </path>
                        </svg></div>

                </div>
                <div class="category-sidebar">
                    <h4>Categories</h4>
                    <ul class="category-lists">
                        <li><a href="#">Event</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Festival</a></li>
                    </ul>
                </div>

                <div class="archive-sidebar">
                    <h4>Archive</h4>
                    <ul class="archive-list">
                        <li>
                            <a href="#">March 2017</a>
                        </li>
                        <li>
                            <a href="#">Dec 2018</a>
                        </li>
                        <li>
                            <a href="#">Oct 2019</a>
                        </li>
                    </ul>
                </div>

                <div class="cloud-tags">
                    <h4>Tags</h4>
                    <ul class="tags-list">
                        <ul>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Festival</a></li>
                            <li><a href="#">Article</a></li>
                            <li><a href="#">Tourist</a></li>
                        </ul>
                    </ul>
                </div>

            </div> -->

            <?php get_sidebar('sidebar_list'); ?>

        </div>
    </div>

<?php get_footer(); ?>