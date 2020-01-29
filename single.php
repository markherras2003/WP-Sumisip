<?php 
get_header();
?>

    <section class="post-hero-section">
        <?php 

        global $post;
        $author_ID = $post->post_author;

            if(have_posts()) {
                while( have_posts()) {
                    the_post();
                }
            }
        ?>


        <div class="post-hero-background">
            <?php
                if( has_post_thumbnail()) {
                    the_post_thumbnail();
                } else {
                    ?>
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/no-available.png">
                    <?php
                }
            ?>
        </div>

        <div class="post-hero-wrapper">
            <div class="post-dir">
             <?php the_category() ?>
            </div>

            <h1 class="display-1"><?php the_title() ?></h1>
            <div class="post-etc">
                <a href="#">By <?php the_author(); ?></a>
                <a href="#"><?php the_date(); ?></a>
            </div>
        </div>

    </section>

    <section class="post-body-section">
        <div class="global-wrapper section-padding">

            <div class="post-main-body">


                <div class="post-img-wrapper">
                    <?php
                        if( has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else {
                            ?>
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/no-available.png">
                            <?php
                        }
                    ?>

                </div>

                <div class="post-content">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_content(); ?></p>

                </div>

                <div class="post-tags"> 
                    <h4>Tags</h4>
                    <div class="post-tag">
                        <a href="#"><?php the_tags('') ?></a>
                    </div>
                </div>


                <div class="author-profile">
                    <div class="author-img">
                        <?= get_avatar($author_ID); ?>
                    </div>
                    <div class="author-details">
                        <h4>About the Author</h4>
                        <span><?= $current_user->roles[0]?></span>
                        <?php
                            $userMeta = get_user_meta($author_ID);
                            ?>
                            <p><?= $userMeta['description'][0] ?></p>
                    </div>
                </div>

                <div class="post-social-media">
                    <div class="social-wrapper">
                        <a href="<?= $userMeta['facebook'][0] ?> "><i class="fa fa-facebook"></i></a>
                        <a href="<?= $userMeta['instagram'][0] ?> "><i class="fa fa-instagram"></i></a>
                        <a href="<?= $userMeta['twitter'][0] ?> "><i class="fa fa-twitter"></i></a>
                        <a href="<?= $userMeta['email'][0] ?> "><i class="fa fa-envelope"></i></a>
                    </div>
                </div>



                <?php
                
                ?>

                
                <div class="comment-section">
                    <h4>Comments</h4>

                    <div class="comment-wrapper">
                        <div class="comment-profile-img">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/men.jpg">
                        </div>
                        <div class="comment-etc-wrapper">
                            <h4>Admin</h4>
                            <span>Dec. 19, 2019</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse beatae voluptas quidem
                                rerum reprehenderit officia consectetur debitis.</p>
                            <a href="#">Reply</a>
                        </div>
                    </div>

                    <div class="comment-wrapper">
                        <div class="comment-profile-img">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/men.jpg">
                        </div>
                        <div class="comment-etc-wrapper">
                            <h4>Admin</h4>
                            <span>Dec. 19, 2019</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse beatae voluptas quidem
                                rerum reprehenderit officia consectetur debitis.</p>
                            <a href="#">Reply</a>
                        </div>
                    </div>

                    <div class="comment-wrapper">
                        <div class="comment-profile-img">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/men.jpg">
                        </div>
                        <div class="comment-etc-wrapper">
                            <h4>Admin</h4>
                            <span>Dec. 19, 2019</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse beatae voluptas quidem
                                rerum reprehenderit officia consectetur debitis.</p>
                            <a href="#">Reply</a>
                        </div>
                    </div>
                </div>


                <?php comments_template() ?>



            </div>

            <?php get_sidebar(); ?>

        </div>
    </section>

<?php

get_footer();
?>
