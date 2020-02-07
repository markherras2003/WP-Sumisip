<?php get_header(); ?>

    <section class="post-hero-section">
        <div class="post-hero-background">
            <img src="<?= get_template_directory_uri() ?>/assets/images/hero/wonder1.jpg">
        </div>

        <div class="post-hero-wrapper">
            <h1 class="display-1">Tags</h1>
        </div>
    </section>

    <div class="sumisip-posts">
        <div class="global-wrapper section-padding">

            <?php  if( have_posts() ) {
                get_template_part( 'partials/posts/post', 'excerpt' );
            }else {
                get_template_part( 'partials/posts/post', 'none' );
            } ?>

            <div class="post-sidebar">
                <?php dynamic_sidebar('sidebar_list'); ?>
            </div>

        </div>
    </div>

<?php get_footer(); ?>