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
    <p>Assalāmu alaykum wa rahmatullahi ta’ala wa barakatuhu!
       As this blessed month of Ramadan ends, the Local Government of Sumisip is in solidarity 
       in celebrating the Eid’l Fitr with peace, love, spirit of oneness and hope.</p>
    <p>
    While we celebrate it differently from the past eids, let us consider this eid not any less
    special than the eids we celebrated. We thank you for remaining steadfast with us amidst
    the COVID-19 pandemic. Alhamdulillāh.
    </p>
    <p>
    We may not be able to celebrate this pious day together,  let us, in spirit, pray together for 
    this pandemic to end. Let us stay home to secure our safety and celebrate this special with 
    our family, for verily, Allah loves those who are cautious.
    </p>
    <p>
    Taqabbala Allah minna wa minkum.
    May Allah accept from us, and from you. 
    </p>

    <p class="tags">
      Eid Mubarak! May this blessed day bring us happiness and prosperity.
    </p>

  </div>

<?php 

$arg = array(
    'post_type' => 'post',
    'showposts'=>3,
    'post_status' => 'publish',
     'tax_query' => array(
      'relation' => 'OR',
        array(
            'taxonomy' => 'featured',
            'field'    => 'slug',
            'terms'    => array( 'Ramadan2020'),
        ),
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => array( 'Ramadan2020'),
        ),
    ),

);     


$featured = new \WP_Query($arg);

?>

  <section class="article">
        <div class="global-wrapper">
            <div class="ramadan-cards">

            <?php 
                while($featured->have_posts()): $featured->the_post(); 
                global $dynamic_featured_image;

            ?>
              <div class="r-cards">
                <?php 
                  $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
                  $key=0;
                  foreach($featured_images as $featured_image) {
                      $key=$key+1;
                      if($key===1) { ?>
                              <div class="img-wrap"">
                                  <img src="<?= $featured_image['full']; ?>">
                              </div>
                      <?php  }?>           
                  <?php } 
                          if($key===0) { ?>
                            <div class="img-wrap"">
                          <img src="<?= get_template_directory_uri(); ?>/assets/images/no-available.png">  
                          </div>  
                  <?php   }
                ?>
                <div class="content">
                  <h6><a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a></h6>
                  <?= the_excerpt(); ?>
                  <a href="<?= get_permalink(); ?>">Read More</a>
                </div>
              </div>

              <?php endwhile;
               wp_reset_postdata();
              ?>

            </div>
        </div>
      </section>

</div>

</div>


<?php wp_footer(); ?>
</body>
</html>




    
<?php

