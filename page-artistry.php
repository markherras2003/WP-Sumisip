<?php
/**
 * Template Name: Artistry Page
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
    $color = "teal";
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
               'terms' => 'food',
           ),
        )   
    );
    $post_excerpt = new \WP_Query($arg);

    $pagination = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => $paged,
        'total' => $post_excerpt->max_num_pages,
        'type' => 'array',
        'prev_text' => 'Previous',
        'next_text' => 'Next',
    ) );
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
    <?php 
        $i=0;
        while($post_excerpt->have_posts()): $post_excerpt->the_post();
        $i++;
        ?>
    <?php include( locate_template( 'partials/posts/post-page.php') ); ?>
    
    <?php
        endwhile; 
    wp_reset_postdata();
    ?>
    
<?php
get_footer();
