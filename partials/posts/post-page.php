
<?php     
$nd = get_the_title();
$ss = single_post_title('',false);
switch($nd) {
    case 'Places and Tours':
        $color = 'matisse';
    break;
    case 'Our Delicasies':
        $color = 'rosewood';
    break;
    case 'Artistry':
        $color = 'teal';
    break;
    case 'Events':
        $color ='marigold';
    break;
}
?>
<?php if($ss==='Explore Sumisip') { ?>
    <section>
<?php }else{ ?>
<section class="quarter-height <?=  ( $i%2 == 0   )? 'bg-silver': '' ?>">
<?php } ?>
    <div class="global-wrapper quarter-height section-padding">
            <div class="side-by-side align-items-center <?=  ( $i%2 == 0   )? 'reverse': '' ?>">
                <div class="preview">
                    <div class="photo-stacks">
                        <div class="photo-stack-display loading">
                            <div class="main-stack">
                                <img src="#" alt="Photo Stack">
                            </div>
                            <div class="bg-stack">
                                <img src="#" alt="Photo Stack">
                            </div>
                        </div>
                        <div class="controls <?= $color; ?>">
                            <ul>
                            <?php     
                            $x=0;
                            $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
                            foreach($featured_images as $featured_image) { 
                            $x++;
                            ?>  
                            <li class="<?=  ( $x === 1   )? 'active': '' ?>" src="<?= $featured_image['full']; ?>"></li>
                            <?php 
                            }
                            ?>   
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="details">
                    <div class="page-composition button-spacing">
                        <h2><?= the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <button onclick="window.location.href = '<?= get_permalink(); ?>';" class="colored <?= $color; ?>"><?= $cta; ?><?= the_title(); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>