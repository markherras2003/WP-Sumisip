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

<footer class="footer-section">
        <div class="footer-wrapper section-padding">

            <div class="footer-container">

                <div class="seal-footer">
                    <h4>Government Seal</h4>
                    <div class="seal-wrapper">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/seal.png">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/s_arm.png">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/s_bas.png">
                    </div>
                </div>

                <div class="footer-flex">

                    <div class="sumisip-about-footer">
                        <div class="visit-content">
                            <h4>Visit Us</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam, doloribus.</p>
                        </div>

                        <div class="contact-list">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <div class="icon-wrapper"><i class="fa fa-phone"></i></div><span>123-4454-223</span>
                                </li>
                                <li>
                                    <div class="icon-wrapper"><i class="fa fa-envelope"></i></div>
                                    <span>sumisip@mail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="social-footer">
                        <h4>Social Media</h4>
                        <ul>
                            <li><a href="#">
                                    <div class="icon-wrapper"><i class="fa fa-facebook"></i></div>
                                    <span>Sumisipbasilan</span>
                                </a></li>
                            <li><a href="#">
                                    <div class="icon-wrapper"><i class="fa fa-twitter"></i></div>
                                    <span>Sumisipbasilan</span>
                                </a></li>
                            <li><a href="#">
                                    <div class="icon-wrapper"><i class="fa fa-instagram"></i></div>
                                    <span>Sumisipbasilan</span>
                                </a></li>
                        </ul>
                    </div>

                    <div class="links-footer">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Our History</a></li>
                            <li><a href="#">Explore Sumisip</a></li>
                            <li><a href="#">About Sumisip</a></li>
                            <li><a href="#">News and Updates</a></li>
                            <li><a href="#">Local Department</a></li>
                        </ul>
                    </div>

                    <div class="department-footer">
                        <h4>Local Department</h4>
                        <ul>
                            <li><a href="#">Economic Development</a></li>
                            <li><a href="#">Fiscal Managementt</a></li>
                            <li><a href="#">Infastructuret</a></li>
                            <li><a href="#">Public Administrationt</a></li>
                            <li><a href="#">Social Servicest</a></li>
                        </ul>
                    </div>



                </div>
            </div>
        </div>

        <div class="footer-pattern">
            <div class="svg-wrapper">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/we.svg">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/we.svg">
            </div>
        </div>
        <div class="copyright-footer">
            <p>Ⓒ Sumisip, Basilan Philippines.</p>
            <p>All rights reserved. 2020</p>
        </div>

    </footer>


<?php wp_footer(); ?>

</body>
</html>
