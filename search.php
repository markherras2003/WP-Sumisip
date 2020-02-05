<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <h1>Search Results for: <?php the_search_query(); ?></h1>
			<?php get_search_form(); ?>
			<h1>Test</h1>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();