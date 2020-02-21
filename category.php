<?php get_header(); ?>

    <section class="post-hero-section">
        <div class="post-hero-background">
        
            <img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>">
        </div>

        <div class="post-hero-wrapper">
            <h1 class="display-1"><?= single_cat_title(); ?>
           </h1>
        </div>
    </section>

    <div class="sumisip-posts">
        <div class="global-wrapper section-padding">
            <div class="global-layout">
                <?php  if( have_posts() ) {
                    get_template_part( 'partials/posts/post', 'excerpt' );
                }else {
                    get_template_part( 'partials/posts/post', 'none' );
                } ?>
                <aside>
                    <?php dynamic_sidebar('sidebar_list'); ?>
                </aside>
            </div>
        </div>
    </div>

<?php get_footer(); ?>