<?php 
    global $post;
    $author_ID = $post->post_author;
?>
    


    <div class="sumisip-posts">
        <div class="global-wrapper section-padding">

            <div class="heading-category-post">
                <h3>All</h3>
                <div class="category-post">
                    <a href="#">Places</a>
                    <a href="#">News</a>
                    <a href="#">Blog</a>
                    <a href="#">History</a>
                    <a href="#">Business</a>
                </div>
            </div>

            <div class="posts-item">

                <?php while( have_posts() ) :  ?>
					<?php the_post(); ?>

                <div class="post-item">
                    <div class="post-img"><?php
                        if( has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else {
                            ?>
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/no-available.png">
                            <?php
                        }
                    ?>
                    </div>
                    <div class="post-details">
                        <a href="<?= get_permalink();?>">
                            <p class="post-title"><?php the_title() ?></p>
                        </a>
                        <div class="post-etc">
                            <span><?= get_user_meta($author_ID)['first_name'][0]?></span>
                            <span><?= get_the_date(); ?></span>
                            <span><?=  get_the_category()[0]->name ?></span>
                        </div>
                        <div class="excerpt">
                            <?php the_content('test'); ?>
                        </div>
                    </div>
                </div>

            <?php  endwhile; ?>

            <div class="pagination">
                <a href="#" class="previous-pagination">Previous</a>
                <div class="numeric-pagination">
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                </div>
                <a href="#" class="next-pagination">Next</a>
            </div>
        </div>
    </div>
</div>