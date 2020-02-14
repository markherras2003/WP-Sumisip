<?php
/**
 * Template Name: Countdown Event
 * Template Post Type: post
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Sumisip
 * @since 1.0.0
 */

get_header();

?>

<section class="post-hero-section">
        <div class="post-hero-background">
            <img src="<?= get_template_directory_uri() ?>/assets/images/hero/wonder3.jpg">  
        </div>

        <div class="post-hero-wrapper">
            <h1 class="display-1"><?php single_post_title() ?></h1>
            <div class="countdown-timer margin-top-2">
            <?php 
                global $wp_query;
                $postid = $wp_query->post->ID;
                date_default_timezone_set("Asia/Manila");
                $start_date = get_post_meta($postid, 'start_date', true);
                $end_date = strtotime(get_post_meta($postid, 'end_date', true));
                $remaining = $end_date - strtotime(date( $start_date." h:i:s A"));
                $days_remaining = floor($remaining / 86400);
                $hours_remaining = floor(($remaining / 3600) % 24);
                $minutes_remaining = floor(($remaining / 60) % 60);
                
                wp_reset_query();
            ?>
                <div class="count days">
                    <h2 class="display-3"><?= $days_remaining ?></h2>
                    <p>Days</p>
                </div>
                <div class="count hours">
                    <h2 class="display-3"><?= $hours_remaining ?></h2>
                    <p>Hours</p>
                </div>
                <div class="count minutes">
                    <h2 class="display-3"><?= $minutes_remaining ?></h2>
                    <p>Minutes</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="global-wrapper content-padding">
            <div class="section-wrapper">
                <div class="page-composition text-center">
                    <h2>What is Kalasiglasigan?</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ex beatae
                        consectetur tenetur quia pariatur mollitia eius laudantium veritatis illum, consequatur
                        reiciendis natus molestias, odit cum voluptas nobis quidem exercitationem molestiae laboriosam
                        non assumenda ad! Magni laborum repudiandae velit adipisci delectus modi et odio officia
                        consectetur dolore earum tempore impedit, repellendus, quos molestiae eligendi at ut dolor
                        incidunt provident excepturi?
                    </p>
                </div>
            </div>
        </div>
        <div class="global-wrapper content-padding">
            <div class="post-composition">
                <h2>How did Kalasiglasigan start?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae hic natus sed quisquam quo
                    deserunt doloremque, odio ad illum explicabo fugit dolorem tempore libero dignissimos,
                    blanditiis,
                    eaque ut corporis distinctio quod a pariatur labore! Labore libero consequuntur similique quis
                    saepe
                    fugit cumque culpa esse voluptatibus minima aut vero consectetur, perferendis molestiae harum
                    incidunt veritatis error quisquam? Nemo itaque soluta quam.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ut ipsum ad cumque aperiam
                    ipsam
                    voluptates ullam molestias iste corrupti sed eum tempore voluptatibus repudiandae sit neque
                    quasi
                    error eos iure aut illo esse minus, animi voluptas? Corrupti dolorem, corporis voluptatibus ut
                    perferendis dolor qui assumenda libero sapiente exercitationem rem iure vel. Exercitationem
                    obcaecati facilis sunt reiciendis, maxime sequi perferendis nihil sed dolorem eius error minus.
                    Tempore mollitia accusamus sed inventore in amet quasi dolorem ea libero iure eum expedita vel
                    tenetur distinctio, eligendi accusantium quod eveniet quis ipsa ad aspernatur esse excepturi
                    maxime.
                    Dicta iure ut consectetur nam. Repellat!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, earum adipisci unde accusantium
                    ducimus quas fuga facere obcaecati omnis corporis sit molestias ad mollitia cupiditate
                    voluptatum
                    rerum libero natus architecto!</p>
            </div>
        </div>   
        
        <div class="global-wrapper content-padding">
            <div class="side-by-side">
                <div class="preview">
                    <img class="photo-effect tilt-left" src="<?= get_template_directory_uri() ?>/assets/images/tours/tinuse-island.jpg" alt="Ahs">
                </div>
                <div class="details">
                    <div class="post-composition">
                        <h3>1.) Registration</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus atque sapiente
                            voluptate autem dolor beatae repellendus nesciunt vitae eveniet id repudiandae
                            asperiores, obcaecati assumenda aliquid deserunt dolores culpa, placeat minima. Sunt,
                            inventore?
                        </p>
                        <ul>
                            <li>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, et.
                            </li>
                            <li>
                                Lorem, ipsum dolor sit amet.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti minima recusandae
                                cumque
                                dolores commodi suscipit quam, consectetur tempore itaque nisi.
                            </li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="global-wrapper content-padding">
            <div class="side-by-side reverse">
                <div class="preview">
                    <img class="photo-effect tilt-right" src="<?= get_template_directory_uri() ?>/assets/images/featured/12.jpg" alt="Ahs">
                </div>
                <div class="details">
                    <div class="post-composition">
                        <h3>2.) Verification</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus atque sapiente
                            voluptate autem dolor beatae repellendus nesciunt vitae eveniet id repudiandae
                            asperiores, obcaecati assumenda aliquid deserunt dolores culpa, placeat minima. Sunt,
                            inventore?
                        </p>
                        <ul>
                            <li>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, et.
                            </li>
                            <li>
                                Lorem, ipsum dolor sit amet.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti minima recusandae
                                cumque
                                dolores commodi suscipit quam, consectetur tempore itaque nisi.
                            </li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="global-wrapper content-padding">
            <div class="post-composition">
                <h2>Lorem ipsum dolor sit, amet consectetur adipisicing.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum recusandae nemo quia? Velit nisi sed
                    quasi vel eligendi id aut temporibus ut inventore error placeat saepe, voluptatem nesciunt natus
                    distinctio! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias et labore magni
                    voluptates quas blanditiis placeat. Ratione dicta, inventore eligendi magni saepe mollitia quae
                    necessitatibus nostrum consectetur quisquam autem? At, voluptatem quis. Aliquid voluptatem non esse
                    hic placeat quibusdam aut quae impedit doloremque cumque, qui nam molestiae quisquam accusantium,
                    commodi eligendi tempore unde quia deleniti porro velit sunt et? Asperiores, explicabo eligendi
                    dolorem iste tenetur assumenda minus eum officiis atque quod optio recusandae. Itaque inventore
                    nesciunt assumenda reiciendis, voluptas voluptates, veniam illo distinctio beatae eveniet ab dolore
                    tempora nisi numquam laudantium repudiandae! Ipsum ullam itaque similique modi laudantium excepturi
                    minima beatae ad optio sequi. In blanditiis excepturi fuga, quidem a eveniet et placeat debitis
                    repudiandae praesentium autem, voluptatem laborum dolor. Minima suscipit ipsa dignissimos sequi eum!
                    Delectus illo suscipit quibusdam, laudantium optio beatae praesentium natus, tempore voluptas quidem
                    repellendus! Rerum numquam voluptate accusantium id est tenetur veritatis autem quas aliquid
                    accusamus praesentium repudiandae quaerat dolor quibusdam nemo quia repellat, quidem placeat facere
                    ab! Assumenda enim placeat veritatis nulla quisquam odio, autem quaerat iure reprehenderit
                    consectetur earum? Architecto repellat error earum, debitis excepturi sunt iusto natus velit culpa
                    illum quod! Ipsam ex voluptas repudiandae, odio nisi veniam voluptate facilis. Error distinctio
                    officiis laboriosam facilis maxime, nesciunt autem rem mollitia nisi inventore quibusdam architecto
                    quas aliquam vitae at dignissimos optio dolores enim corrupti facere quisquam perspiciatis quod
                    sequi ad. Unde atque magni voluptates, ex sed explicabo non enim cumque? Explicabo natus nam laborum
                    autem delectus, aliquid molestiae molestias facilis tempora neque suscipit, ut impedit asperiores
                    excepturi quia ipsa vel. Accusantium quas magnam nesciunt molestiae voluptatum consectetur aut
                    rerum, iste corrupti voluptates enim maxime ipsum ullam laboriosam temporibus dicta officiis
                    dolorem. Ipsum incidunt commodi corporis quibusdam perspiciatis voluptatem natus, esse
                    necessitatibus soluta corrupti nesciunt magnam iusto laudantium aut distinctio expedita, nostrum
                    quia voluptatum.</p>
            </div>
        </div>
    </section>



<?php
get_footer();
