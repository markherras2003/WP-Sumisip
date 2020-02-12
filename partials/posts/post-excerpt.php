<?php 
    global $post;
    $author_ID = $post->post_author;
?>
<main>
    <div class="posts-item">
    <?php 
        $i=0;
        while( have_posts() ) :  ?>
        <?php 
        the_post(); ?>
        <div class="post-item">
            <?php
           
                    if ($i+1 === 1) {
                    ?>
          <div class="heading-group">
            <div class="post-title">
                <a href="<?= get_permalink();?>">
                    <h2 class="post-title"> <?php the_title() ?></h2>
                </a>
                <div class="post-etc">
                    <span><?= strtoupper(get_author_role($author_ID)); ?><?php //get_user_meta($author_ID)['first_name'][0]?></span>
                    <span><?= get_the_date(); ?></span>
                    <span><?= get_the_category()[0]->name ?></span>
                </div>
            </div>
          </div>
                 <?php
                    }
                     if( has_post_thumbnail()) {
                     ?>
                     <div class="post-img"> 
  
                  <?=  ( ($i+1) === 1 )? the_post_thumbnail('',array('class'=> 'photo-effect')): the_post_thumbnail()?>
            <?php } else {
                    ?>
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/no-available.png" class="photo-effect">
                    <?php
                }
                $i++;
            
            ?>
            </div>
            <div class="post-details">
            <?php if ($i > 1) { ?>
  
            <div class="post-title">
                <a href="<?= get_permalink();?>">
                    <h3 class="post-title"><?php the_title() ?></h3>
                </a>
                <div class="post-etc">
                    <span><?= strtoupper(get_author_role($author_ID)); ?><?php //get_user_meta($author_ID)['first_name'][0]?></span>
                    <span><?= get_the_date(); ?></span>
                    <span><?= get_the_category()[0]->name ?></span>
                </div>
        </div>

        <?php } ?>

            <div class="post-content">
                <?=  the_excerpt(); ?>
                <a href="<?= get_permalink();?>" class="button outline black">Read Story</a>
            </div>

        </div>

    </div>

    <?php    endwhile; ?>

    
    <div class="pagination-wrapper">
        <ul class="pagination">
            <li><a href="#" class="previous-pagination">Previous</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" class="next-pagination">Next</a></li>
        </ul>
    </div>

            </div>

            </main>