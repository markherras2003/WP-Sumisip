<?php get_header(); ?>

    <section class="post-hero-section">
        <div class="post-hero-background">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/wonder1.jpg">
        </div>

        <div class="post-hero-wrapper">
            <h1 class="display-1">News and Articles</h1>
        </div>
    </section>


    <div class="sumisip-posts">
        <div class="global-wrapper section-padding">

            <div class="heading-category-post">
                <h3><?php single_cat_title(); ?></h3>
                <div class="category-post">
                    <a href="#">Places</a>
                    <a href="#">News</a>
                    <a href="#">Blog</a>
                    <a href="#">History</a>
                    <a href="#">Business</a>
                </div>
            </div>

            <div class="posts-item">

                <div class="post-item">
                    <div class="post-img">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/d2.jpg">
                    </div>
                    <div class="post-details">
                        <a href="#">
                            <p class="post-title">The standard Lorem Ipsum passage, used since the 1500s</p>
                        </a>
                        <div class="post-etc">
                            <span href="#">John Doe</span>
                            <span href="#">Dec. 19, 2019</span>
                            <span href="#">Uncategorized</span>
                        </div>
                        <p class="post-context">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>

                </div>


                <div class="post-item">
                    <div class="post-img">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/d3.jpg">
                    </div>
                    <div class="post-details">
                        <a href="#">
                            <p class="post-title">The standard Lorem Ipsum passage, used since the 1500s</p>
                        </a>
                        <div class="post-etc">
                            <span href="#">John Doe</span>
                            <span href="#">Dec. 19, 2019</span>
                            <span href="#">Uncategorized</span>
                        </div>
                        <p class="post-context">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </div>

                <div class="post-item">
                    <div class="post-img">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/c1.jpg">
                    </div>
                    <div class="post-details">
                        <a href="#">
                            <p class="post-title">The standard Lorem Ipsum passage, used since the 1500s</p>
                        </a>
                        <div class="post-etc">
                            <span href="#">John Doe</span>
                            <span href="#">Dec. 19, 2019</span>
                            <span href="#">Uncategorized</span>
                        </div>
                        <p class="post-context">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </div>

                <div class="post-item">
                    <div class="post-img">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/d1.jpg">
                    </div>
                    <div class="post-details">
                        <a href="#">
                            <p class="post-title">The standard Lorem Ipsum passage, used since the 1500s</p>
                        </a>
                        <div class="post-etc">
                            <span href="#">John Doe</span>
                            <span href="#">Dec. 19, 2019</span>
                            <span href="#">Uncategorized</span>
                        </div>
                        <p class="post-context">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </div>


                <div class="pagination">
                    <a href="#" class="previous-pagination">Previous</a>
                    <div class="numeric-pagination">
                        <a href="#">1</a>
                        <a href="#" class="active">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                    </div>
                    <a href="#" class="next-pagination">Next</a>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>