<?php
/**
 * Template Name: Hub Template Page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Sumisip
 * @since 1.0.0
 */

get_header();

?>

<?php 
    global $post;
    global $paged;

    $cta = "Explore ";
    $color = "matisse";

    if( get_query_var('paged') ) {
        $paged = get_query_var('paged');
    }else if ( get_query_var('page') ) {
        $paged = get_query_var('page');
    }else{
        $paged = 1;
    }

    global $dynamic_featured_image;
    $author_ID = $post->post_author;
    $big = 99999999; 
    $arg = array(
        'post_type' => 'post',
        //'posts_per_page' => 1,
        'paged' =>$paged,
        'showposts'=>20,
        'tax_query' => array(             
            array(
               'taxonomy' => 'featured',
               'field' => 'slug',
               'terms' => 'places',
           ),
        )   
    );
    $post_excerpt = new \WP_Query($arg);
    $page_id = get_queried_object_id();
    $featured_images = $dynamic_featured_image->get_featured_images($page_id);
?>

	<section class="post-hero-section">
        <div class="post-hero-background">
        <?php foreach($featured_images as $featured_image) { 
                $i++;
                if($i===1) {  ?>
                <img src="<?= $featured_image['full']; ?>" alt="Article Image">            
            <?php }
            } ?>
        </div>

        <div class="post-hero-wrapper">
            <h1 class="display-1"><?php single_post_title() ?></h1>
        </div>
    </section>
    
<section>

<?php the_content(); ?>   

</section>
    
<?php
get_footer();
