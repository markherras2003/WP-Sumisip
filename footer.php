<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage sumisip
 * @since 1.0.0
 */

?>


<footer>

<div class="footer-wrapper section-padding">
    <div class="footer-container">

        <div class="footer-section footer-seals">
            <h4>Government Associations</h4>
            <div class="seal-group">
                <?php if( get_theme_mod('site_logos') ) {

                    foreach( explode(",", get_theme_mod('site_logos')) as $key ) {
                    ?>
                        <div class="seal-wrapper">
                            <img src="<?= $key ?>">
                        </div>
                    <?php
                    }   
                }else {
                ?>
                <div class="seal-wrapper">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/footer/sumisip.png">
                </div>
                <div class="seal-wrapper">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/footer/barmm.png">

                </div>

                <?php
                } 
                ?>
            </div>

        </div>

        <div class="footer-flex">

            <div class="footer-section visit-us">
                <div class="visit-content">
                    <h4>Visit Us</h4>
                        <?php  
                            if(has_nav_menu('visit')){
                            wp_nav_menu([
                                'theme_location'      => 'visit',
                                'container'           => false,
                                'fallback_cb'         => false,
                                'depth'               => 0,
                                // 'walker'              => new JU_Custom_Nav_Walker()
                            ]);
                            }
                        ?>
                </div>
            </div>

            <div class="footer-section contact-list">
                <h4>Contact Us</h4>

                <?php
                if( has_nav_menu('contact-menu') ) {
                    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)

                    $menuID = $menuLocations['contact-menu']; // Get the *primary* menu ID

                    $contactNav = wp_get_nav_menu_items($menuID); 

                    } else {
                        $contactNav = [];
                    }
                ?>



                <ul>
                    <li>
                        <div class="icon-wrapper"><svg aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="phone" class="svg-inline--fa fa-phone fa-w-16"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                </path>
                            </svg></div><span><?= array_key_exists(0, $contactNav) ? $contactNav[0]->post_title : 'No Contact Number' ?></span>
                    </li>
                    <li>
                        <div class="icon-wrapper"><svg aria-hidden="true" focusable="false"
                                data-prefix="far" data-icon="envelope"
                                class="svg-inline--fa fa-envelope fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z">
                                </path>
                            </svg></div>
                        <span><?= array_key_exists(1, $contactNav) ? $contactNav[1]->post_title : 'No Email' ?></span>
                    </li>
                </ul>
            </div>

            <div class="footer-section social-footer">
                <h4>Social Media</h4>


                <?php

                    if( has_nav_menu('social-menu') ) {

                        $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                        $menuID = $menuLocations['social-menu']; // Get the *primary* menu ID
                        $socialNav = wp_get_nav_menu_items($menuID);

                    } else {
                        $socialNav = [];
                    }
                ?>


                
                <ul>
                    <li>
                        <a href="<?= array_key_exists(1, $socialNav) ? $socialNav[0]->url  : 'https://www.facebook.com'?>">
                            <div class="icon-wrapper">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab"
                                    data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor"
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                    </path>
                                </svg>
                            </div>
                            <span><?= array_key_exists(1, $socialNav) ? $socialNav[0]->post_title : 'Facebook Page' ?></span>
                        </a>
                    </li>
                    <li><a href="<?= array_key_exists(1, $socialNav) ? $socialNav[0]->url  : 'https://www.twitter.com'?>">
                            <div class="icon-wrapper"><svg aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="twitter"
                                    class="svg-inline--fa fa-twitter fa-w-16" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                    </path>
                                </svg></div>
                            <span><?= array_key_exists(1, $socialNav) ? $socialNav[0]->post_title : 'Twitter Page' ?></span>
                        </a></li>
                    <li><a href="<?= array_key_exists(1, $socialNav) ? $socialNav[0]->url  : 'https://www.instgram.com'?>">
                            <div class="icon-wrapper"><svg aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="instagram"
                                    class="svg-inline--fa fa-instagram fa-w-14" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg></div>
                            <span><?= array_key_exists(1, $socialNav) ? $socialNav[0]->post_title : 'Instagram Page' ?></span>
                            <svg aria-hidden="true" focusable="false" data-prefix="fab"
                                data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor"
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                </path>
                            </svg>
                        </a></li>
                </ul>
            </div>

            <div class="footer-section department-footer">
                <h4>Downloadables</h4>
                <?php  
                    if(has_nav_menu('downloadable')){
                    wp_nav_menu([
                        'theme_location'      => 'downloadable',
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

<div class="footer-pattern"></div>

<div class="footer-copyright">
    <?php if(get_theme_mod('ju_footer_sumisip_copyright')) {
        ?>
            <p><?= get_theme_mod('ju_footer_sumisip_copyright') ?></p>
        <?php
    } else {?> 
    <p>Ⓒ Sumisip, Basilan Philippines.</p>
    <?php 
    }
    ?>

    <?php if(get_theme_mod('ju_footer_sumisip_allrights')) {
        ?>
        <p><?= get_theme_mod('ju_footer_sumisip_allrights') ?></p>
        <?php
    } else {
        ?>
            <p>All rights reserved. 2020</p>
        <?php
        
    } ?>
</div>

</footer>






<?php wp_footer(); ?>

</body>
</html>
