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


<div class="overlay">
            <div class="ramadan">
                <div class="content">
                    <div class="img-wrapper"></div>
                    <div class="lantern"></div>
                    <div class="description">
                        <p>The Local Government Unit of Sumisip is in solidarity with our Muslim
                            brothers and sisters around the world in celebrating the holy month of
                            Ramadan welcoming it with love, peace, spirit of oneness and hope
                            amidst the COVID-19 pandemic.
                        </p>
                        <p>
                            While we will not be able to spend this month side-by-side, we hope to
                            keep our sense of community alive as much we can during this ever-
                            changing and uncertain time.
                        </p>
                        <p>
                            Let us continue to offer dua'a to end this health crisis. Let us practice our
                            faith at home.
                        </p>
                        <p>
                            May Allah (swt) protect and guide us all, and give us strength to
                            overcome the adversities brought by the health crisis.
                        </p>

                        <p>Ramadan Mubarak!</p>
                        <p>#Ramadan1141 #Ramadan2020 #Sumisip2020</p>

                    </div>
                </div>
                <svg id="ramadan-close" class="close" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <g transform="translate(0 -0.001)">
                        <g id="Group_446" data-name="Group 446" transform="translate(0 0.001)">
                            <path id="Path_325" data-name="Path 325"
                                d="M13.326,12l10.4-10.4A.938.938,0,0,0,22.4.275L12,10.675,1.6.275A.938.938,0,0,0,.274,1.6L10.674,12,.274,22.4A.938.938,0,0,0,1.6,23.726L12,13.327l10.4,10.4A.938.938,0,0,0,23.725,22.4Z"
                                transform="translate(0 -0.001)" fill="#949494" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="covid">
                <svg id="covid-close" class="close" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <g transform="translate(0 -0.001)">
                        <g id="Group_446" data-name="Group 446" transform="translate(0 0.001)">
                            <path id="Path_325" data-name="Path 325"
                                d="M13.326,12l10.4-10.4A.938.938,0,0,0,22.4.275L12,10.675,1.6.275A.938.938,0,0,0,.274,1.6L10.674,12,.274,22.4A.938.938,0,0,0,1.6,23.726L12,13.327l10.4,10.4A.938.938,0,0,0,23.725,22.4Z"
                                transform="translate(0 -0.001)" fill="#949494" />
                        </g>
                    </g>
                </svg>

                <div class="img-wrapper"></div>

                <div class="content">
                    <span class="display">Sumisip</span>
                    <span class="display-2">Task Force Covid-19</span>
                    <div class="social-links">
                        <div class="email">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27.194" height="20.396"
                                viewBox="0 0 27.194 20.396">
                                <g id="mail" transform="translate(0 -64)">
                                    <g id="Group_413" data-name="Group 413" transform="translate(0 64)">
                                        <g id="Group_412" data-name="Group 412">
                                            <path id="Path_165" data-name="Path 165"
                                                d="M7.114,65.655C10.846,68.816,17.4,74.377,19.32,76.11a1.137,1.137,0,0,0,1.645,0c1.926-1.736,8.475-7.3,12.208-10.458a.566.566,0,0,0,.08-.782A2.25,2.25,0,0,0,31.474,64H8.813a2.25,2.25,0,0,0-1.778.873A.566.566,0,0,0,7.114,65.655Z"
                                                transform="translate(-6.546 -64)" fill="#aa0952" />
                                            <path id="Path_166" data-name="Path 166"
                                                d="M347.238,126.464a.564.564,0,0,0-.6.082c-2.444,2.072-5.665,4.81-8.094,6.9a.566.566,0,0,0,.016.871c2.257,1.808,5.658,4.294,8.114,6.061a.567.567,0,0,0,.9-.46V126.978A.566.566,0,0,0,347.238,126.464Z"
                                                transform="translate(-320.373 -123.097)" fill="#aa0952" />
                                            <path id="Path_167" data-name="Path 167"
                                                d="M.9,140.386c2.456-1.767,5.858-4.253,8.114-6.061a.566.566,0,0,0,.016-.871c-2.429-2.089-5.65-4.827-8.094-6.9a.567.567,0,0,0-.933.432v12.939a.566.566,0,0,0,.9.46Z"
                                                transform="translate(0 -123.105)" fill="#aa0952" />
                                            <path id="Path_168" data-name="Path 168"
                                                d="M34.665,291.72c-2.372-1.7-6.741-4.86-9.349-6.977a.568.568,0,0,0-.729.013c-.512.446-.94.823-1.244,1.1a2.294,2.294,0,0,1-3.162,0c-.3-.273-.731-.65-1.243-1.095a.564.564,0,0,0-.729-.013c-2.6,2.11-6.973,5.277-9.349,6.977a.566.566,0,0,0-.085.846,2.27,2.27,0,0,0,1.657.727H33.093a2.273,2.273,0,0,0,1.657-.727.566.566,0,0,0-.085-.846Z"
                                                transform="translate(-8.166 -272.898)" fill="#aa0952" />
                                        </g>
                                    </g>
                                </g>
                            </svg>

                            <p>lgusumisip@gmail.com</p>
                        </div>
                        <div class="fb">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.428" height="20" viewBox="0 0 10.428 20">
                                <path id="facebook"
                                    d="M14.711,3.321h1.9V.141A25.62,25.62,0,0,0,13.841,0,4.308,4.308,0,0,0,9.216,4.7V7.5H6.187v3.555H9.216V20H12.93V11.056h2.906L16.3,7.5H12.929V5.052C12.93,4.024,13.218,3.321,14.711,3.321Z"
                                    transform="translate(-6.187)" fill="#aa0952" />
                            </svg>

                            <p>www.facebook.com/lgusumisip</p>
                        </div>
                    </div>
                    <div class="contact">
                        <h2>Hotline numbers</h2>
                        <div class="health">
                            <span class="office">Municipality Health Office</span>
                            <span class="numbers">0905-539-3467 & 0915-074-7690</span>
                        </div>
                        <div class="mdrrmo">
                            <span class="office">Mdrrmo</span>
                            <span class="numbers">09060185363</span>
                        </div>
                    </div>
                    <div class="details">
                        <div class="updated-time">
                            <span class="updated">Updated: <span id="covidlatest">2020/04/22 08:40 am</span> <br> Source: Department of Health</span>
                            <span class="confirmed">NO CONFIRMED CASE OF COVID -19 IN <br> SUMISIP, BASILAN</span>
                        </div>
                        <div class="cases">
                            <ul>
                                <li class="New-confirmed rosewood">
                                   <p> New Confirmed Cases </p>
                                    <h3>+<span id="newconfirmed"></span></h3>
                                </li>
                                <li class="confirmed matisse">
                                    <p>Confirmed Cases </p>
                                    <h3><span id="cases"></span></h3></li>
                                <li class="New-Deaths teal">
                                    <p>New Deaths</p>
                                    <h3>+<span id="newdeaths"></span></h3>
                                </li>
                                <li class="Deaths marigold">
                                    <p>Deaths</p>
                                    <h3><span id="deaths"></span></h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
                             <?php
                                if( has_nav_menu('places-menu') ) {
                                    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)

                                    $menuID = $menuLocations['places-menu']; // Get the *primary* menu ID

                                    $navMenu = wp_get_nav_menu_items($menuID); 

                                    } else {
                                        $navMenu = [];
                                    }
                            ?>
                                    <?php 
                                                 $i=0;
                                                 foreach ($navMenu as $menu) {
                                                    $i++;
                                                    if($i>=1 && $i<=7) {            
                                            ?>
                                <li><a href="<?= $menu->url; ?>"><?= $menu->title ?></a></li>
                                <?php
                                   }
                                    if($i==7) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/places/'; ?>">Show More</a></li>
                                <?php 
                                    }
                                }
                                ?> 
                            </ul>
                        </div>

                        <div class="mega-menu-group sbs-m-2 holo-heading">
                            <ul>
                            <?php    
                            $i=0;
                            foreach ($navMenu as $menu) {
                              $i++;
                                if($i>7 && $i<13) {
                                ?>
                                <li><a href="<?= $menu->url; ?>"><?= $menu->title; ?></a></li>
                                <?php
                                }
                                    if($i==13) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/tourist-spot/'; ?>">Show More</a></li>
                                <?php 
                                    }
                            }
                                ?> 
                            </ul>
                        </div>            

                        <div class="mega-menu-group sbs-m-">
                            <h4>Food</h4>
                            <ul>
                            <?php
                                if( has_nav_menu('food-menu') ) {
                                    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)

                                    $menuID = $menuLocations['food-menu']; // Get the *primary* menu ID

                                    $navMenu = wp_get_nav_menu_items($menuID); 

                                    } else {
                                        $navMenu = [];
                                    }
                            ?>
                                    <?php 
                                                 $i=0;
                                                 foreach ($navMenu as $menu) { 
                                                 $i++;
                             ?>
                                <li><a href="<?= $menu->url; ?>"><?= $menu->title; ?></a></li>
                                <?php
                                    if($i>4) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/food/'; ?>">Show More</a></li>
                                <?php 
                                    break;
                                    }
                                  }
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
                            <?php
                                if( has_nav_menu('history-menu') ) {
                                    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)

                                    $menuID = $menuLocations['history-menu']; // Get the *primary* menu ID

                                    $navMenu = wp_get_nav_menu_items($menuID); 

                                    } else {
                                        $navMenu = [];
                                    }
                            ?>
                                    <?php 
                                                 $i=0;
                                                 foreach ($navMenu as $menu) {
                                                     $i++;
                            ?>
                                <li><a href="<?= $menu->url; ?>"><?= $menu->title; ?></a></li>
                                <?php
                                    if($i>4) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/history/'; ?>">Show More</a></li>
                                <?php 
                                    break;
                                    }
                                   }
                                ?> 
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Culture and Arts</h4>
                            <ul>
                            <?php
                                if( has_nav_menu('culture-menu') ) {
                                    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)

                                    $menuID = $menuLocations['culture-menu']; // Get the *primary* menu ID

                                    $navMenu = wp_get_nav_menu_items($menuID); 

                                    } else {
                                        $navMenu = [];
                                    }
                            ?>
                          
                                    <?php 
                                                 $i=0;
                                                 foreach ($navMenu as $menu) {
                                                 $i++;
                             ?>
                                <li><a href="<?= $menu->url; ?>"><?= $menu->title; ?></a></li>
                                <?php
                                    if($i>4) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/culture/'; ?>">Show More</a></li>
                                <?php 
                                    break;
                                    }
                                 }
                                ?> 
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Local Industry</h4>
                            <ul>
                            <?php
                                if( has_nav_menu('local-industry-menu') ) {
                                    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)

                                    $menuID = $menuLocations['local-industry-menu']; // Get the *primary* menu ID

                                    $navMenu = wp_get_nav_menu_items($menuID); 

                                    } else {
                                        $navMenu = [];
                                    }
                            ?>
                                    <?php 
                                                 $i=0;
                                                 foreach ($navMenu as $menu) {
                                                 $i++;
                             ?>
                                <li><a href="<?= $menu->url; ?>"><?= $menu->title; ?></a></li>
                                <?php
                                    if($i>4) {?>
                                <li class="more-cta"><a href="<?= get_home_url().'/industry/'; ?>">Show More</a></li>
                                <?php
                                    break; 
                                    }
                                   }
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

                    <?php 
                            if($key===0) { ?>
                            <div class="thumb-wrapper">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/no-available.png">  
                            </div>  
                    <?php   }
                    ?>
                
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
                                               'category_name' => 'Trending',
                                             /*  'tax_query' => array(             
                                                array(
                                                   'taxonomy' => 'categories',
                                                   'field' => 'slug',
                                                   'terms' => 'trending',
                                               ),
                                              
                                                )   */
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
                                        'category_name' => 'Hot',
                                      /*  'tax_query' => array(             
                                         array(
                                            'taxonomy' => 'categories',
                                            'field' => 'slug',
                                            'terms' => 'trending',
                                        ),
                                       
                                         )   */
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
                        <div class="mega-menu-group mini-box tinier-box extended">
                            <h4>Awards</h4>
                            <?php
                                if( has_nav_menu('awards-menu') ) {
                                    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)

                                    $menuID = $menuLocations['awards-menu']; // Get the *primary* menu ID

                                    $navMenu = wp_get_nav_menu_items($menuID); 

                                    } else {
                                        $navMenu = [];
                                    }
                            ?>
                            <ul>
                                    <?php 
                                                 global $dynamic_featured_image;
                                                 foreach ($navMenu as $menu) {            
                                            ?>
                                                                    <li>
                                    <a href="<?= $menu->url ?>">
                                    <?php 
                                        $key=0;
                                        $posting_id=$menu->object_id;
                                        $featured_images = $dynamic_featured_image->get_featured_images($posting_id);
                                        foreach($featured_images as $featured_image) {
                                            $key=$key+1; 
                                            if ($key===1) {?>
                                        <div class="thumb-wrapper">
                                            <img src="<?= $featured_image['full']; ?>" alt="Main Mega Menu Thumb">
                                        </div>
                                            <?php }
                                    
                                        } ?>
                                     <div class="details">
                                        <h5 class="light"><?= $menu->title ?></h5>
                                        <div class="p-sm"><p><?= custom_get_the_excerpt($posting_id) ?></p></div>
                                        </div>
                                    </a>
                                    </li>
                                    <?php } ?> 
                            </ul>
                        </div>
                        <div class="mega-menu-group sbs-m-1">
                        <h4>Mayor's Office</h4>
                                             <?php  
                                             if(has_nav_menu('mayor-menu')){
                                             wp_nav_menu([
                                                 'theme_location'      => 'mayor-menu',
                                                 'container'           => false,
                                                 'fallback_cb'         => false,
                                                 'depth'               => 0,
                                                 // 'walker'              => new JU_Custom_Nav_Walker()
                                             ]);
                                             }
                                         ?>
                           
                        </div>     
                        <div class="mega-menu-group sbs-m-1">
                        <h4>Sangguniang Bayan</h4>
                                        <?php  
                                             if(has_nav_menu('sangguniang-menu')){
                                             wp_nav_menu([
                                                 'theme_location'      => 'sangguniang-menu',
                                                 'container'           => false,
                                                 'fallback_cb'         => false,
                                                 'depth'               => 0,
                                                 // 'walker'              => new JU_Custom_Nav_Walker()
                                             ]);
                                             }
                                         ?>  
                        </div>
                        <div class="mega-menu-group sbs-m-1">
                        <h4>Departments</h4>
                        <?php  
                                             if(has_nav_menu('department-menu')){
                                             wp_nav_menu([
                                                 'theme_location'      => 'department-menu',
                                                 'container'           => false,
                                                 'fallback_cb'         => false,
                                                 'depth'               => 0,
                                                 // 'walker'              => new JU_Custom_Nav_Walker()
                                             ]);
                                             }
                                         ?> 
                        </div>
                    </div>
                </div>
            </div>
            <?php   $arg = array(
                                               'post_type' => 'events',
                                               'posts_per_page' => 1,
                                               'meta_checkbox'=> 'meta_key',
                                               'meta_value'=> 'yes',
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
