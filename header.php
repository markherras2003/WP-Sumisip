<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage tyreconnect
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php   
if(is_home()) {
    echo '<nav class="rosewood">'; 
}
elseif(is_singular('events')) {
    echo '<nav class="marigold">'; 
} 
elseif(is_single()) {
    echo '<nav class="matisse">'; 
} 
elseif(is_category()) {
    echo '<nav class="teal">'; 
} else{
    echo '<nav class="rosewood">';
}
?>
            <div class="branding-wrapper">
                <a href="<?= get_home_url(); ?>">
                    <div class="branding-body">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/svg/branding-official.svg" alt="Branding">
                    </div>
                </a>
            </div>
            <div class="nav-list">
                <div class="nav-item active">
                    <a href="<?= get_home_url(); ?>">
                        <span>Sumisip</span>
                        <span>Home</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="<?= get_home_url().'/explore-sumisip'; ?>">
                        <span>Explore</span>
                        <span>Sumisip</span>
                    </a>
                    <div class="mega-menu">
                        <div class="main mega-menu-group">
                            <h4>Events</h4>
                            <?php   $arg = array(
                                               'post_type' => 'events',
                                               'posts_per_page' => 1,
                                                 );
                                                 $featured = new \WP_Query($arg);
                                                 while($featured->have_posts()): $featured->the_post(); 
                                                 //$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                                                 global $dynamic_featured_image;
                                            ?>
                            <ul>
                                <li>
                                    <a href="<?= get_permalink(); ?>">
                                    <?php 
                                        $key=0;
                                        $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
                                        foreach($featured_images as $featured_image) {
                                            $key=$key+1; 
                                            if ($key===1) {?>
                                                                <div class="thumb-wrapper">
                                                                    <img src="<?= $featured_image['full']; ?>" alt="Main Mega Menu">
                                                                </div>
                                            <?php }
                                                
                                    
                                            }    if($key===0) {    
                                                    ?>   
                                                        <div class="thumb-wrapper"> 
                                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/no-available.png" class="photo-effect">
                                                        </div>
                                                    <?php
                                                        }?> 
                                                   <h5 class="light"><?= get_the_title(); ?></h5>
                                        <div class="p-sm"><?= the_excerpt(); ?></div>
                                    </a>
                                <?php endwhile; ?> 
                                </li>
                                <li class="more-cta"><a href="<?= get_permalink(); ?>">Show More</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Places</h4>
                            <ul>
                                <li><a href="#">Tinuse Island</a></li>
                                <li><a href="#">Mangal Mangrove</a></li>
                                <li><a href="#">Bessy Maglogok</a></li>
                                <li><a href="#">Mahatalang Rotonda</a></li>
                                <li><a href="#">Christian Village</a></li>
                                <li class="more-cta"><a href="<?= get_home_url().'/tourist-spot/'; ?>">Show More</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Food</h4>
                            <ul>
                                <li><a href="#">Fish</a></li>
                                <li><a href="#">Daing</a></li>
                                <li><a href="#">Satti</a></li>
                                <li><a href="#">Bagong Gata</a></li>
                                <li><a href="#">Tiula Itum</a></li>
                                <li class="more-cta"><a href="<?= get_home_url().'/food/'; ?>">Show More</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Artistry</h4>
                            <ul>
                                <li><a href="#">Weaving</a></li>
                                <li><a href="#">Tinalak</a></li>
                                <li><a href="#">Dagmay</a></li>
                                <li><a href="#">Businesses</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="#">
                        <span>About</span>
                        <span>Sumisip</span>
                    </a>
                    <div class="mega-menu">
                        <div class="mega-menu-group">
                            <h4>History</h4>
                            <ul>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">Cuisine</a></li>
                                <li><a href="#">Delicasies</a></li>
                                <li><a href="#">Businesses</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Culture</h4>
                            <ul>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">Cuisine</a></li>
                                <li><a href="#">Delicasies</a></li>
                                <li><a href="#">Businesses</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Awards</h4>
                            <ul>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">Cuisine</a></li>
                                <li><a href="#">Delicasies</a></li>
                                <li><a href="#">Businesses</a></li>
                                <li><a href="#">Cuisine</a></li>
                                <li><a href="#">Delicasies</a></li>
                                <li><a href="#">Businesses</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Roadmaps</h4>
                            <ul>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">Cuisine</a></li>
                                <li><a href="#">Delicasies</a></li>
                                <li><a href="#">Businesses</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="<?= get_home_url().'/category/article_news/'; ?>">
                        <span>News and</span>
                        <span>Articles</span>
                    </a>
                    <div class="mega-menu">
                        <div class="main mega-menu-group">
                            <h4>Latest Post</h4>
                            <ul>
                                <li>
                                    <?php   $arg = array(
                                               'post_type' => 'post',
                                               'posts_per_page' => 1,
                                                 );
                                                 $featured = new \WP_Query($arg);
                                                 while($featured->have_posts()): $featured->the_post(); 
                                                 //$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                                                 global $dynamic_featured_image;

                                            ?>
                                    <a href="<?= get_permalink(); ?>">
                                    <?php 
                $key=0;
                $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
                foreach($featured_images as $featured_image) {
                    $key=$key+1; 
                     if ($key===1) {?>
                                        <div class="thumb-wrapper">
                                            <img src="<?= $featured_image['full']; ?>" alt="Main Mega Menu Thumb">
                                        </div>
                     <?php }
            
                } ?>
                                        <h5 class="light"><?= get_the_title(); ?></h5>
                                        <div class="p-sm"><?= the_excerpt(); ?></div>
                                    </a>
                                <?php endwhile; ?> 
                                </li>
                                <li class="more-cta"><a href="<?= get_permalink(); ?>">Show More</a></li>
                            </ul>
                        </div>
                        <div class="mini-box mega-menu-group">
                            <h4>Trending Articles</h4>
                            <ul>    
                                <?php   $arg = array(
                                               'post_type' => 'post',
                                               'posts_per_page' => 3,
                                                 );
                                                 $featured = new \WP_Query($arg);
                                                 while($featured->have_posts()): $featured->the_post(); 
                                                 //$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                                                 global $dynamic_featured_image;

                                ?>
                                <li>
                                <a href="<?= get_permalink(); ?>">
                                                <?php 
                                $key=0;
                                $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
                                foreach($featured_images as $featured_image) {
                                    $key=$key+1; 
                                    if ($key===1) {?>
                                        <div class="thumb-wrapper">
                                            <img src="<?= $featured_image['thumb']; ?>" alt="Main Mega Menu Thumb">
                                        </div>
                                    <?php }
                            
                                } ?>
                                        <div class="details">
                                            <h5 class="light"><?= the_title(); ?></h5>
                                            <span class="p-sm"><?= the_excerpt(); ?></span>
                                        </div>
                                    </a>
                                   
                                </li>
                                <?php endwhile; ?> 
                            </ul>
                        </div>
                        <div class="mini-box mega-menu-group">
                            <h4>Hot Topics</h4>
                            <ul>    
                                <?php   $arg = array(
                                               'post_type' => 'post',
                                               'posts_per_page' => 3,
                                                 );
                                                 $featured = new \WP_Query($arg);
                                                 while($featured->have_posts()): $featured->the_post(); 
                                                 //$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                                                 global $dynamic_featured_image;

                                ?>
                                <li>
                                <a href="<?= get_permalink(); ?>">
                                                <?php 
                                $key=0;
                                $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
                                foreach($featured_images as $featured_image) {
                                    $key=$key+1; 
                                    if ($key===1) {?>
                                        <div class="thumb-wrapper">
                                            <img src="<?= $featured_image['thumb']; ?>" alt="Main Mega Menu Thumb">
                                        </div>
                                    <?php }
                            
                                } ?>
                                        <div class="details">
                                            <h5 class="light"><?= the_title(); ?></h5>
                                            <span class="p-sm"><?= the_excerpt(); ?></span>
                                        </div>
                                    </a>
                                   
                                </li>
                                <?php endwhile; ?> 
                            </ul>
                        </div>
                    </div>  
                </div>
                <div class="nav-item">
                    <a href="#">
                        <span>Local</span>
                        <span>Government</span>
                    </a>
                </div>
            </div>
            <?php   $arg = array(
                                               'post_type' => 'events',
                                               'posts_per_page' => 1,
                                                 );
                                                 $featured = new \WP_Query($arg);
                                                 while($featured->have_posts()): $featured->the_post(); 
                                            ?>
            <div class="event-nav-list">
                <a href="<?= get_permalink() ?>" class="button outline heavy white"><?= the_title(); ?></a>
            </div>
                                                <?php endwhile ?>

            <div class="nav-menu-wrapper">
                <div class="nav-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

        </nav>
