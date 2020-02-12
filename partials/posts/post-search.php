<?php 
    global $post;
    $author_ID = $post->post_author;
?>

<main>

    <h1 class="search-title">Search Results for: <?php the_search_query(); ?></h1>

    <?php while( have_posts() ) :  ?>
        <?php the_post(); ?>
        <div class="post-item">
            <div class="post-img">
            <?php
                if( has_post_thumbnail()) {
                    the_post_thumbnail();
                } else {
                    ?>
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/no-available.png">
                    <?php
                }
            ?>
            </div>
            <!-- <div class="post-details"> -->

            <div class="post-details search-content">
                <a href="<?= get_permalink();?>">
                    <h3 class="post-title"><?php the_title() ?></h3>
                </a>
                <div class="post-etc">
                    <span><?= strtoupper(get_author_role($author_ID));?></span>
                    <span><?= get_the_date(); ?></span>
                    <span><?= get_the_category()[0]->name ?></span>
                </div>

                <?php the_excerpt(); ?>

                <a href="<?= get_permalink();?>" class="button outline black">Read Story</a>
            </div>
            

            <!-- </div> -->
        </div>



    <?php  endwhile; ?>
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
</main>