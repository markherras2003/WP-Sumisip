<?php
/**
 * Template Name: Covid Page
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/chart.js"></script>
    <?php wp_head(); ?>
</head>
<body class="cleanpage">

<div id="covid-overlay">

<div class="navigation">
    <div class="global-wrapper">
        <a href="<?= get_home_url(); ?>" class="button">Proceed to Homepage</a>
    </div>
</div>

<div class="covid-content-wrapper">
    <div class="section-heading-group">
        <h1 class=display-1>Sumisip Ncov Watch</h1>
        <p>
        In December 2019 There was an infectious disease that originated in Wuhan China called Coronavirus or Covid-19. As the outbreak has been declared a Public Health Emergency in January 2020, we in the Local Government of Sumisip came together for the preparation and prevention of Covid-19 as well as providing supplies amidst this crisis. LGU Sumisip will be posting updates regarding our status as seen below.
        </p>
    </div>
    <div class="updated-cases">
        <div class="case confirmed">
            <div class="analysis bg-rosewood">
                <span class="monthly">
                    Monthly Analysis
                </span>
                <div class="container">
                    <canvas id="myChart">
                    </canvas>
                </div>
                <div class="canvas-hide"></div>
            </div>
            <div class="total-case">
                <span class="total">Total Confirmed Cases</span>
                <h2>0</h2>
            </div>
        </div>
        <div class="case activ">
            <div class="analysis bg-matisse">
                <span class="monthly">
                    Monthly Analysis
                </span>
                <div class="container">
                    <canvas id="myChart2">
                    </canvas>
                </div>
                <div class="canvas-hide"></div>
            </div>
            <div class="total-case">
                <span class="total">Total Active Cases</span>
                <h2>0</h2>
            </div>
        </div>
        <div class="case recovered">
            <div class="analysis bg-teal">
                <span class="monthly">
                    Monthly Analysis
                </span>
                <div class="container">
                    <canvas id="myChart3">

                    </canvas>
                </div>
                <div class="canvas-hide"></div>
            </div>
            <div class="total-case">
                <span class="total">Persons Under Monitoring (PUM)</span>
                <h2>43</h2>
            </div>
        </div>
        <div class="case death ">
            <div class="analysis bg-plum">
                <span class="monthly">
                    Monthly Analysis
                </span>
                <div class="container">
                    <canvas id="myChart4">

                    </canvas>
                </div>

                <div class="canvas-hide"></div>

            </div>
            <div class="total-case">
                <span class="total">Persons Under Investigation (PUI)</span>
                <h2>5</h2>
            </div>
        </div>
    </div>
</div>

<div class="news-section global-wrapper section-padding">

    <div class="section-heading-group">
        <h2>News Update</h2>
        <p>
        In light of the current situation regarding the Covid-19 pandemic. We provide the latest Covid-19 news and updates regarding our municipality. This includes our programs and operations to combat the virus spread and help our citizens.
        </p>
    </div>

    <div class="news-boxes covid">


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
            'terms'    => array( 'news-article'),
        ),
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => array( 'article_news'),
        ),
    ),

);     


$featured = new \WP_Query($arg);

?>

<?php 
    while($featured->have_posts()): $featured->the_post(); 
        global $dynamic_featured_image;

?>
        <div class="news-box covid-box">
    
        <?php 
    $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
    $key=0;
    foreach($featured_images as $featured_image) {
        $key=$key+1;
        if($key===1) { ?>
                <div class="background-wrapper">
                    <img src="<?= $featured_image['full']; ?>">
                </div>
        <?php  }?>           
    <?php } 
            if($key===0) { ?>
              <div class="background-wrapper">
             <img src="<?= get_template_directory_uri(); ?>/assets/images/no-available.png">  
             </div>  
    <?php   }
    ?>
            <div class="news-content">
                <h4><a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a></h4>
                <div class="news-extra-info">
                    <span class="date"><?= get_the_date(); ?></span>
                    <div class="comment-wrapper">
                        <a href="<?= get_permalink(); ?>">
                            <i class="fa fa-comment"></i>
                            <span><?= get_comments_number(); ?></span>
                        </a>
                    </div>
                    <span class="category">
                                <?php
                                $x=0;
                                foreach((get_the_category()) as $category){
                                $x++;
                                if($x===1) {
                                echo $category->name."<br>";
                                    }
                                }	?></span>
                </div>
                <?= the_excerpt(); ?>
            </div>
            <a href="<?= get_permalink(); ?>">Read More</a>
        </div>

        <?php endwhile;
            wp_reset_postdata();
        ?>

        <a href="https://lgu-sumisip.com/category/covid19/" class="button outline">Load More</a>

    </div>

</div>

<div class="ph-cases bg-coal">
    <div class="section-heading-group">
        <h2>Number of Cases in Ph</h2>
        <p>Updated: <span id="covidlatest">2020/04/22 08:40 am</span></p> 
        <p>Source: Department of Health</p>
    </div>

    <div class="ph-details">
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
            <li class="Deaths plum">
                <p>Deaths</p>
                <h3><span id="deaths"></span></h3>
            </li>
        </ul>
    </div>
</div>

<footer class="covid-footer">
    <h5>Hotline Numbers:</h5>
    <div class="num">
        <p>Municipality Health Office:</p>
        <p>0905-539-3167 / 0915-074-7690</p>
    </div>
    <div class="num">
        <p>MDRRMO:</p>
        <p>0906-018-5363</p>
    </div>

</footer>

</div>











<?php //wp_footer(); ?>
</body>
</html>




    
<?php

