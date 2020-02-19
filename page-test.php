<?php
/**
 * Template Name: Test Page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Sumisip
 * @since 1.0.0
 */


get_header();


?>

<div class="hero-section loading">

<div class="upper-hero-grid">

    <div class="hero-details">
        <div class="heading-group">
            <span class="overline">#</span>
            <h1 class="display-1">#</h1>
            <p class="lead">#</p>
            <a href="#" class="button outline black">Read Story</a>
        </div>
    </div>

    <div class="hero-preview">

        <div class="hero-preview-group group-1">

            <div class="main preview-circle-wrapper">
                <div class="preview-circle">
                    <div class="preview-wrapper">
                        <img src="#" alt="">
                    </div>
                </div>
            </div>

            <div class="secondary preview-circle-wrapper">
                <div class="preview-circle">
                    <div class="preview-wrapper">
                        <img src="#" alt="">
                    </div>
                </div>
            </div>

            <div class="tertiary preview-circle-wrapper">
                <div class="preview-circle">
                    <div class="preview-wrapper">
                        <img src="#" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="lower-hero-grid">
    <div class="preview-controller">
        <div class="hero-preview-controls">
            <ul>

                <li class="active" overline="<?= vp_option('vpt_option.tagline_1_1') ?>" heading="<?= vp_option('vpt_option.title_1_1') ?>"
                    description="<?= vp_option('vpt_option.description_1_1') ?>"
                    href="https://lgu-sumisip.com/the-new-sumisip/"
                    mainPrev="<?= vp_option('vpt_option.featured_1_1') ?>" secondaryPrev="<?= vp_option('vpt_option.featured_2_1') ?>"
                    tertiaryPrev="<?= vp_option('vpt_option.featured_3_1') ?>">
                    <img src="<?= vp_option('vpt_option.featured_1_1') ?>" alt="Slide 1">
                </li>

                <li class="active" overline="<?= vp_option('vpt_option.tagline_1_2') ?>" heading="<?= vp_option('vpt_option.title_1_2') ?>"
                    description="<?= vp_option('vpt_option.description_1_2') ?>"
                    href="https://lgu-sumisip.com/the-new-sumisip/"
                    mainPrev="<?= vp_option('vpt_option.featured_1_2') ?>" secondaryPrev="<?= vp_option('vpt_option.featured_2_2') ?>"
                    tertiaryPrev="<?= vp_option('vpt_option.featured_3_3') ?>">
                    <img src="<?= vp_option('vpt_option.featured_1_2') ?>" alt="Slide 1">
                </li>

                <li class="active" overline="<?= vp_option('vpt_option.tagline_1_3') ?>" heading="<?= vp_option('vpt_option.title_1_3') ?>"
                    description="<?= vp_option('vpt_option.description_1_3') ?>"
                    href="https://lgu-sumisip.com/the-new-sumisip/"
                    mainPrev="<?= vp_option('vpt_option.featured_1_3') ?>" secondaryPrev="<?= vp_option('vpt_option.featured_2_3') ?>"
                    tertiaryPrev="<?= vp_option('vpt_option.featured_3_3') ?>">
                    <img src="<?= vp_option('vpt_option.featured_1_3') ?>" alt="Slide 1">
                </li>

                <li class="active" overline="<?= vp_option('vpt_option.tagline_1_4') ?>" heading="<?= vp_option('vpt_option.title_1_4') ?>"
                    description="<?= vp_option('vpt_option.description_1_4') ?>"
                    href="https://lgu-sumisip.com/the-new-sumisip/"
                    mainPrev="<?= vp_option('vpt_option.featured_1_4') ?>" secondaryPrev="<?= vp_option('vpt_option.featured_2_4') ?>"
                    tertiaryPrev="<?= vp_option('vpt_option.featured_3_4') ?>">
                    <img src="<?= vp_option('vpt_option.featured_1_4') ?>" alt="Slide 1">
                </li>

                <li class="active" overline="<?= vp_option('vpt_option.tagline_1_5') ?>" heading="<?= vp_option('vpt_option.title_1_5') ?>"
                    description="<?= vp_option('vpt_option.description_1_5') ?>"
                    href="https://lgu-sumisip.com/the-new-sumisip/"
                    mainPrev="<?= vp_option('vpt_option.featured_1_5') ?>" secondaryPrev="<?= vp_option('vpt_option.featured_2_5') ?>"
                    tertiaryPrev="<?= vp_option('vpt_option.featured_3_5') ?>">
                    <img src="<?= vp_option('vpt_option.featured_1_5') ?>" alt="Slide 1">
                </li>

            </ul>
            <div class="indicators">
                <div class="prev-indicator"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="15.932" viewBox="0 0 16 15.932">
                        <defs>
                            <style>
                                .prev-indicator {
                                    fill: #484848;
                                }
                            </style>
                        </defs>
                        <path class="prev-indicator"
                            d="M.126,7.731l.253-.253a.429.429,0,0,1,.606,0l6.375,6.375V.429A.429.429,0,0,1,7.788,0h.357a.429.429,0,0,1,.429.429V13.853l6.375-6.375a.429.429,0,0,1,.606,0l.253.253a.429.429,0,0,1,0,.606L8.269,15.874a.429.429,0,0,1-.606,0L.126,8.337a.428.428,0,0,1,0-.606Z"
                            transform="translate(16) rotate(90)" />
                    </svg> Prev </div>
                <div class="number-indicator"> <span id="hero-preview-number-indicator">1</span>/<span
                        id="hero-max">0</span>
                </div>
                <div class="next-indicator">Next <svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="15.932" viewBox="0 0 16 15.932">
                        <defs>
                            <style>
                                .next-indicator {
                                    fill: #484848;
                                }
                            </style>
                        </defs>
                        <path class="next-indicator"
                            d="M.126,8.269l.252.253a.429.429,0,0,0,.606,0L7.359,2.147V15.571A.429.429,0,0,0,7.788,16h.357a.429.429,0,0,0,.429-.429V2.147l6.375,6.375a.429.429,0,0,0,.606,0l.252-.253a.429.429,0,0,0,0-.606L8.269.126a.429.429,0,0,0-.606,0L.126,7.663a.429.429,0,0,0,0,.606Z"
                            transform="translate(16) rotate(90)" />
                    </svg> </div>
            </div>
        </div>
    </div>
    <div class="hero-social">

    </div>
</div>

</div>



<?php
get_footer();
