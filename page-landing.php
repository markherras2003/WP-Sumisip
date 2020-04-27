<?php
/**
 * Template Name: Landing Page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Sumisip
 * @since 1.0.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body class="cleanpage">


<div id="ramadan-overlay">

<div class="navigation">
  <div class="global-wrapper">
    <a href="<?= get_home_url(); ?>" class="button">Proceed to Homepage</a>
  </div>
</div>

<div class="ramadan-contents-wrapper">

  <div class="main-image-group">

    <div class="highlights">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/ramadan/highlights.svg" alt="">
    </div>

    <div class="mubarak-group">

      <div class="mubarak-inline">
        <div class="group-a">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/ramadan/main-group-a.svg" alt="">
        </div>

        <div class="group-b">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/ramadan/main-group-b.svg" alt="">
        </div>

      </div>

      <div class="radial-bg">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/ramadan/radial-bg.svg" alt="">
      </div>

    </div>


  </div>

  <div class="copy global-wrapper">
    <p>The Local Government Unit of Sumisip is in solidarity with our Muslim brothers and sisters around the world
      in
      celebrating the holy month of Ramadan welcoming it with love, peace, spirit of oneness and hope amidst the
      COVID-19 pandemic. While we will not be able to spend this month side-by-side, we hope to keep our sense of
      community alive as much we can during this ever- changing and uncertain time.</p>
    <p>
      Let us continue to offer dua’a to end this health crisis. Let us practice our faith at home. May Allah (swt)
      protect and guide us all, and give us strength to overcome the adversities brought by the health
      crisis. Ramadan
      Mubarak!
    </p>

    <p class="tags">
      #Ramadan1141 #Ramadan2020 #Sumisip2020
    </p>

  </div>

</div>

</div>


<?php wp_footer(); ?>
</body>
</html>




    
<?php

