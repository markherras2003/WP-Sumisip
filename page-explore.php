<?php
/**
 * Template Name: Explore Page
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

    $cta = "Explore ";
    $color = "marigold";
    global $dynamic_featured_image;
    $page_id = get_queried_object_id();
    $featured_images = $dynamic_featured_image->get_featured_images($page_id);
?>

<section class="post-hero-section">
        <div class="post-hero-background">
        <?php foreach($featured_images as $featured_image) {  ?>
            <img src="<?= $featured_image['full']; ?>">
        <?php }?>
        </div>
        <div class="post-hero-wrapper">
            <h1 class="display-1"><?php single_post_title() ?></h1>
        </div>
    </section>

    <section class="page-heading-wrapper">
        <div class="global-wrapper section-padding">

            <div class="section-wrapper">
                <div class="page-composition text-center margin-bottom-5">
                    <?php
                    $arg = array(
                        'post_type' => 'page',
                        'pagename' => 'events',
                        'showposts'=>1, 
                    );
                    $events = new \WP_Query($arg);
                    ?>
                    <h2>Festivals and Events</h2>
                    <?php 
                        while($events->have_posts()): $events->the_post();
                            echo the_excerpt();
                        ?>
                  
                    <a href="<?= get_permalink(); ?>" class="button colored  marigold">See all Events</a>
                    <?php endwhile; wp_reset_postdata(); ?>  
                </div>
            </div>
            <div class="event-group">
                    <?php
                    $arg = array(
                        'post_type' => 'events',
                        'showposts'=>5, 
                    );
                    $events = new \WP_Query($arg);
                    ?>
                    <?php 
                        $x=0;
                        while($events->have_posts()): $events->the_post();
                        ?>
                        <a href="<?= get_permalink(); ?>" class="event-item">
                    <?php   $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
                           
                            foreach($featured_images as $featured_image) {
                                $x++;     
                            if($x===1) {?>
                            <img src="<?= $featured_image['full']; ?>">
                            <?php }
                            } ?>
                        <div class="event-details">
                        <h5 class="event-title"><?= the_title(); ?></h5>
                        <h2 class="event-date"><?= get_the_date(); ?></h2>
                    </div>
                </a>
                    <?php endwhile; wp_reset_postdata(); ?> 
            </div>

        </div>
    </section>



<?php
    $ID =array('2','203');
    $arg = array(
    'post_type' => 'page',
    'showposts'=>10, 
    'order' => 'asc',
    'post__not_in' => $ID,
    );
    $paging = new \WP_Query($arg);
    ?>
   
   <?php 
        $i=0;
        while($paging->have_posts()): $paging->the_post();
        $i++;
        ?>
    <?php include( locate_template( 'partials/posts/post-page.php') ); ?>
    
    <?php
        endwhile; 
    wp_reset_postdata();
    ?>
<?php
get_footer();
