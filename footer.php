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
                    <li class="multiple-details">
                        <div class="icon-wrapper"><svg aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="phone" class="svg-inline--fa fa-phone fa-w-16"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                </path>
                            </svg>
                        </div>
                        <div class="multiple">
                            <span><?= array_key_exists(0, $contactNav) ? $contactNav[0]->post_title : 'No Contact Number' ?></span>
                            <span><?= array_key_exists(1, $contactNav) ? $contactNav[1]->post_title : 'No Contact Number' ?></span>
                        </div>
                    </li>
                    <li>
                        <div class="icon-wrapper">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope"
                                class="svg-inline--fa fa-envelope fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z">
                                </path>
                            </svg></div>
                        <span><?= array_key_exists(2 , $contactNav) ? $contactNav[2]->post_title : 'No Email' ?></span>
                    </li>
                    <li class="multiple-details">
                        <div class="icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z" />
                            </svg>
                        </div>
                        <div class="multiple">
                            <span><?= get_theme_mod('ju_footer_sumisip_start_day') ? get_theme_mod('ju_footer_sumisip_start_day') : '' ?> - <?= get_theme_mod('ju_footer_sumisip_start_day') ? get_theme_mod('ju_footer_sumisip_end_day') : '' ?> </span>
                            <span><?= get_theme_mod('ju_footer_sumisip_start_time') ? get_theme_mod('ju_footer_sumisip_start_time') : '' ?> - <?= get_theme_mod('ju_footer_sumisip_end_time') ? get_theme_mod('ju_footer_sumisip_end_time') : '' ?></span>
                        </div>
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
                        <a href="<?= array_key_exists(0, $socialNav) ? $socialNav[0]->url  : 'https://www.facebook.com'?>">
                            <div class="icon-wrapper">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab"
                                    data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor"
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                    </path>
                                </svg>
                            </div>
                            <span><?= array_key_exists(0, $socialNav) ? $socialNav[0]->post_title : 'Facebook Page' ?></span>
                        </a>
                    </li>
                        <li>
                        <a href="<?= array_key_exists(1, $socialNav) ? $socialNav[1]->url  : 'https://www.twitter.com'?>">
                            <div class="icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path
                                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                                    </svg>
                            </div>
                            <span><?= array_key_exists(1, $socialNav) ? $socialNav[1]->post_title : 'Sumisip Youtube' ?></span>
                        </a>
                    </li>
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
    <p><?= get_theme_mod('ju_footer_sumisip_copyright') ? get_theme_mod('ju_footer_sumisip_copyright') : ''  ?></p>
    <p><?= get_theme_mod('ju_footer_sumisip_allrights') ? get_theme_mod('ju_footer_sumisip_allrights') : ''  ?></p>
</div>

</footer>






<?php wp_footer(); ?>

</body>
</html>
