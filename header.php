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
                    <img src="<?= get_template_directory_uri(); ?>/assets/elements/branding.svg" alt="Branding">
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
                    <div class="mega-menu-group">
                        <h4>Events</h4>
                        <ul>
                            <li><a href="#">Kalasiglasigan 2020</a></li>
                            <li><a href="#">Medical Mission</a></li>
                            <li><a href="#">Sumusip Cares</a></li>
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
                        <h4>Craftmanship</h4>
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

        <div class="nav-menu-wrapper close">
            <div class="nav-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

    </nav>