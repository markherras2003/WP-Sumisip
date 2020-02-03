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
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="rosewood">
            <div class="branding-wrapper">
                <a href="./">
                    <div class="branding-body">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/svg/branding-official.svg" alt="Branding">
                    </div>
                </a>
            </div>
            <div class="nav-list">
                <div class="nav-item active">
                    <a href="./">
                        <span>Sumisip</span>
                        <span>Home</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#">
                        <span>Explore</span>
                        <span>Sumisip</span>
                    </a>
                    <div class="mega-menu">
                        <div class="main mega-menu-group">
                            <h4>Events</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="thumb-wrapper">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/11.jpg" alt="Main Mega Menu">
                                        </div>
                                        <h5 class="light">Kalasiglasigan 2020</h5>
                                        <p class="sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius vero
                                            autem quo similique, temporibus amet. Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Dolorem possimus fuga eos eaque fugiat unde ipsum optio,
                                            voluptatum laudantium error, eum dicta rerum vero repellendus porro suscipit
                                            ullam aut similique!</p>
                                    </a>
                                </li>
                                <li class="more-cta"><a href="#">Show More</a></li>
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
                                <li class="more-cta"><a href="#">Show More</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Food</h4>
                            <ul>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">Cuisine</a></li>
                                <li><a href="#">Delicasies</a></li>
                                <li><a href="#">Businesses</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-group">
                            <h4>Artistry</h4>
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
                    <a href="#">
                        <span>News and</span>
                        <span>Articles</span>
                    </a>
                    <div class="mega-menu">
                        <div class="main mega-menu-group">
                            <h4>Latest Post</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="thumb-wrapper">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/12.jpg" alt="Main Mega Menu Thumb">
                                        </div>
                                        <h5 class="light">Kalasiglasigan 2020</h5>
                                        <p class="sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius vero
                                            autem quo similique, temporibus amet. Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Dolorem possimus fuga eos eaque fugiat unde ipsum optio,
                                            voluptatum laudantium error, eum dicta rerum vero repellendus porro suscipit
                                            ullam aut similique!</p>
                                    </a>
                                </li>
                                <li class="more-cta"><a href="#">Show More</a></li>
                            </ul>
                        </div>
                        <div class="mini-box mega-menu-group">
                            <h4>Trending Articles</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="thumb-wrapper">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/1.jpg" alt="Mini Box Thumb">
                                        </div>
                                        <div class="details">
                                            <h5 class="light">Motorace Event</h5>
                                            <p class="sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic
                                                quisquam est
                                                ipsam similique quaerat dolorem! Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Magnam, doloribus?</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumb-wrapper">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/2.jpg" alt="Mini Box Thumb">
                                        </div>
                                        <div class="details">
                                            <h5 class="light">Lorem ipsum dolor sit, amet consectetur adipisicing.</h5>
                                            <p class="sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic
                                                quisquam est
                                                ipsam similique quaerat dolorem! Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Magnam, doloribus?</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumb-wrapper">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/3.jpg" alt="Mini Box Thumb">
                                        </div>
                                        <div class="details">
                                            <h5 class="light">Motorace Event</h5>
                                            <p class="sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic
                                                quisquam est
                                                ipsam similique quaerat dolorem! Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Magnam, doloribus?</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mini-box mega-menu-group">
                            <h4>Hot Topics</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="thumb-wrapper">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/4.jpg" alt="Mini Box Thumb">
                                        </div>
                                        <div class="details">
                                            <h5 class="light">Motorace Event</h5>
                                            <p class="sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic
                                                quisquam est
                                                ipsam similique quaerat dolorem! Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Magnam, doloribus?</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumb-wrapper">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/5.jpg" alt="Mini Box Thumb">
                                        </div>
                                        <div class="details">
                                            <h5 class="light">Lorem ipsum dolor sit, amet consectetur adipisicing.</h5>
                                            <p class="sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic
                                                quisquam est
                                                ipsam similique quaerat dolorem! Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Magnam, doloribus?</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumb-wrapper">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/6.jpg" alt="Mini Box Thumb">
                                        </div>
                                        <div class="details">
                                            <h5 class="light">Motorace Event</h5>
                                            <p class="sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic
                                                quisquam est
                                                ipsam similique quaerat dolorem! Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Magnam, doloribus?</p>
                                        </div>
                                    </a>
                                </li>
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

            <div class="event-nav-list">
                <a href="#" class="button outline heavy white">Kalasiglasigan 2020</a>
            </div>

            <div class="nav-menu-wrapper">
                <div class="nav-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

        </nav>
