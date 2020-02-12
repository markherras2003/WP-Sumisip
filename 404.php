	<?php get_header(); ?>
    <section class="page-404">
        <div class="global-wrapper section-padding">
            <div class="text-404">
                <h1>404</h1>
                <h1 class="display-1 light">Page not found.</h1>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                <a href="<?= get_home_url(); ?>" class="dark">Go Home</a>
            </div>
            <div class="sumisip-brand">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/svg/broken-seal.svg">
            </div>
        </div>
    </section>
    <?php  get_footer(); ?>