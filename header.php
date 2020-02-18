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
    $titles = get_the_title();
        switch($titles) {
            case 'Tourist Spot':
                echo '<nav class="matisse">';
            break;
            case 'Food':
                echo '<nav class="rosewood">';
            break;
            case 'Artistry':
                echo '<nav class="teal">';
            break;
            case 'Events':
                echo '<nav class="marigold">';
            break;
            case 'Explore Sumisip':
                echo '<nav class="teal">';
            break;
            default:
                echo '<nav class="rosewood">';
        }
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
                                <?php endwhile; 
                                    wp_reset_postdata();?> 
                                </li>
                                <li class="more-cta"><a href="<?= get_home_url().'/events/'; ?>">Show More</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-group sbs-m-">
                            <h4>Places</h4>
                            <ul>
                            <?php   $arg = array(
                                                        'post_type' => 'post',
                                                        //'posts_per_page' => 1,
                                                        'paged' =>$paged,
                                                        'showposts'=>14,
                                                        'tax_query' => array(             
                                                            array(
                                                            'taxonomy' => 'featured',
                                                            'field' => 'slug',
                                                            'terms' => 'places',
                                                        ),
                                                        )   
                                                    );
                                                 $places = new \WP_Query($arg);
                                                 $i=0;
                                                 while($places->have_posts()): $places->the_post(); 
                                                 $i++;
                             ?>
                                <li><a href="<?= get_permalink(); ?>"><?= the_title(); ?></a></li>
                                <?php
                                    if($i>6) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/tourist-spot/'; ?>">Show More</a></li>
                                <?php 
                                    }
                                    endwhile; 
                                    wp_reset_postdata();
                                ?> 
                            </ul>
                        </div>

                        <div class="mega-menu-group sbs-m-2 holo-heading">
                            <ul>
                            <?php    
                            $i=0;
                            while($places->have_posts()): $places->the_post(); 
                              $i++;
                                if($i>7 && $i<13) {
                                ?>
                                <li><a href="<?= get_permalink(); ?>"><?= the_title(); ?></a></li>
                                <?php
                                }
                                    if($i>13) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/tourist-spot/'; ?>">Show More</a></li>
                                <?php 
                                    }
                                    endwhile; 
                                    wp_reset_postdata();
                                ?> 
                            </ul>
                        </div>            

                        <div class="mega-menu-group sbs-m-">
                            <h4>Food</h4>
                            <ul>
                            <?php   $arg = array(
                                                        'post_type' => 'post',
                                                        //'posts_per_page' => 1,
                                                        'paged' =>$paged,
                                                        'showposts'=>5,
                                                        'tax_query' => array(             
                                                            array(
                                                            'taxonomy' => 'featured',
                                                            'field' => 'slug',
                                                            'terms' => 'food',
                                                        ),
                                                        )   
                                                    );
                                                 $places = new \WP_Query($arg);
                                                 $i=0;
                                                 while($places->have_posts()): $places->the_post(); 
                                                 $i++;
                             ?>
                                <li><a href="<?= get_permalink(); ?>"><?= the_title(); ?></a></li>
                                <?php
                                    if($i>4) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/artistry/'; ?>">Show More</a></li>
                                <?php 
                                    }
                                    endwhile; 
                                    wp_reset_postdata();
                                ?> 
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
                            <?php   $arg = array(
                                                        'post_type' => 'post',
                                                        //'posts_per_page' => 1,
                                                        'paged' =>$paged,
                                                        'showposts'=>5,
                                                        'tax_query' => array(             
                                                            array(
                                                            'taxonomy' => 'featured',
                                                            'field' => 'slug',
                                                            'terms' => 'history',
                                                        ),
                                                        )   
                                                    );
                                                 $places = new \WP_Query($arg);
                                                 $i=0;
                                                 while($places->have_posts()): $places->the_post(); 
                                                 $i++;
                             ?>
                                <li><a href="<?= get_permalink(); ?>"><?= the_title(); ?></a></li>
                                <?php
                                    if($i>4) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/history/'; ?>">Show More</a></li>
                                <?php 
                                    }
                                    endwhile; 
                                    wp_reset_postdata();
                                ?> 
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Culture and Arts</h4>
                            <ul>
                            <?php   $arg = array(
                                                        'post_type' => 'post',
                                                        //'posts_per_page' => 1,
                                                        'paged' =>$paged,
                                                        'showposts'=>5,
                                                        'tax_query' => array(             
                                                            array(
                                                            'taxonomy' => 'featured',
                                                            'field' => 'slug',
                                                            'terms' => 'culture',
                                                        ),
                                                        )   
                                                    );
                                                 $places = new \WP_Query($arg);
                                                 $i=0;
                                                 while($places->have_posts()): $places->the_post(); 
                                                 $i++;
                             ?>
                                <li><a href="<?= get_permalink(); ?>"><?= the_title(); ?></a></li>
                                <?php
                                    if($i>4) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/culture/'; ?>">Show More</a></li>
                                <?php 
                                    }
                                    endwhile; 
                                    wp_reset_postdata();
                                ?> 
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Local Industry</h4>
                            <ul>
                            <?php   $arg = array(
                                                        'post_type' => 'post',
                                                        //'posts_per_page' => 1,
                                                        'paged' =>$paged,
                                                        'showposts'=>5,
                                                        'tax_query' => array(             
                                                            array(
                                                            'taxonomy' => 'featured',
                                                            'field' => 'slug',
                                                            'terms' => 'industry',
                                                        ),
                                                        )   
                                                    );
                                                 $places = new \WP_Query($arg);
                                                 $i=0;
                                                 while($places->have_posts()): $places->the_post(); 
                                                 $i++;
                             ?>
                                <li><a href="<?= get_permalink(); ?>"><?= the_title(); ?></a></li>
                                <?php
                                    if($i>4) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/industry/'; ?>">Show More</a></li>
                                <?php 
                                    }
                                    endwhile; 
                                    wp_reset_postdata();
                                ?> 
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
                    <div class="mega-menu">
                        <div class="mega-menu-group mini-box extended">
                            <h4>Awards</h4>
                            <ul>
                                    <?php   $arg = array(
                                                        'post_type' => 'post',
                                                        //'posts_per_page' => 1,
                                                        'paged' =>$paged,
                                                        'showposts'=>3,
                                                        'tax_query' => array(             
                                                            array(
                                                            'taxonomy' => 'featured',
                                                            'field' => 'slug',
                                                            'terms' => 'awards',
                                                        ),
                                                        )   
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
                                            <img src="<?= $featured_image['full']; ?>" alt="Main Mega Menu Thumb">
                                        </div>
                                            <?php }
                                    
                                        } ?>
                                     <div class="details">
                                        <h5 class="light"><?= get_the_title(); ?></h5>
                                        <div class="p-sm"><?= the_excerpt(); ?></div>
                                        </div>
                                    </a>
                                    </li>
                                <?php endwhile; ?> 
                            </ul>
                        </div>
                        <div class="mega-menu-group sbs-m-1">
                        <h4>Mayor's Office</h4>
                            <ul>
                            <?php   $arg = array(
                                                        'post_type' => 'post',
                                                        //'posts_per_page' => 1,
                                                        'paged' =>$paged,
                                                        'showposts'=>5,
                                                        'tax_query' => array(             
                                                            array(
                                                            'taxonomy' => 'featured',
                                                            'field' => 'slug',
                                                            'terms' => 'mayors_office',
                                                        ),
                                                        )   
                                                    );
                                                 $places = new \WP_Query($arg);
                                                 $i=0;
                                                 while($places->have_posts()): $places->the_post(); 
                                                 $i++;
                             ?>
                                <li><a href="<?= get_permalink(); ?>"><?= the_title(); ?></a></li>
                                <?php
                                    if($i>4) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/mayors_office/'; ?>">Show More</a></li>
                                <?php 
                                    }
                                    endwhile; 
                                    wp_reset_postdata();
                                ?> 
                            </ul>
                        </div>
                        <div class="mega-menu-group sbs-m-1">
                        <h4>Departments</h4>
                            <ul>
                            <?php   $arg = array(
                                                        'post_type' => 'post',
                                                        //'posts_per_page' => 1,
                                                        'paged' =>$paged,
                                                        'showposts'=>5,
                                                        'tax_query' => array(             
                                                            array(
                                                            'taxonomy' => 'featured',
                                                            'field' => 'slug',
                                                            'terms' => 'departments',
                                                        ),
                                                        )   
                                                    );
                                                 $places = new \WP_Query($arg);
                                                 $i=0;
                                                 while($places->have_posts()): $places->the_post(); 
                                                 $i++;
                             ?>
                                <li><a href="<?= get_permalink(); ?>"><?= the_title(); ?></a></li>
                                <?php
                                    if($i>4) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/departments/'; ?>">Show More</a></li>
                                <?php 
                                    }
                                    endwhile; 
                                    wp_reset_postdata();
                                ?> 
                            </ul>
                        </div>
                    </div>
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
