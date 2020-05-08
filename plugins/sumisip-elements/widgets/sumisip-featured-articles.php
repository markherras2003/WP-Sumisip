<?php
namespace SumisipElements\Widgets;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class SumisipFeaturedArticles extends Widget_Base {

    /**
     * Retrieve the widget name.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'sumisip-featured-articles';
    }

    /**
     * Retrieve the widget title.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'Sumisip Featured Articles', 'sumisip-element' );
    }

    public function get_icon() {
        return 'eicon-posts-grid';
    }

    public function get_categories() {
        return [ 'rising-core' ];
    }

    /**
     * Retrieve the list of scripts the widget depended on.
     *
     * Used to set scripts dependencies required to run the widget.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget scripts dependencies.
     */
    public function get_script_depends() {
        return [];
    }

    /**
     * Register the widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function _register_controls() {

     /**
         * Widget control start
         */
        $this->start_controls_section(
            'history_content',
            [
                'label' => __( 'News And Articles', 'sumisip-element' ),
            ]
        );



        $this->add_control(
            'ct_title',
            [
                'label' => __( 'Title ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        /**
         * Slider Card description
         */
        $this->add_control(
            'ct_description',
            [
                'label' => __( 'Description ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 6,
                'label_block' => true,
                'placeholder' => __( 'Description ..', 'sumisip-element' ),
            ]
        );


               /**
         * Widget control end
         */
        $this->end_controls_section();

       
    }

    /**
     * Render the widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function render() {
        $settings = $this->get_settings_for_display();
            $arg = array(
                'post_type' => 'post',
                'showposts'=>6,
                'post_status' => 'publish',
                 'tax_query' => array(
                  'relation' => 'OR',
                    array(
                        'taxonomy' => 'featured',
                        'field'    => 'slug',
                        'terms'    => array( 'news-articles'),
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

<section class="news-section">
            <div class="global-wrapper section-padding">
                <div class="section-heading-group">
                    <h1><?= $settings['ct_title']; ?></h1>
                    <p><?= $settings['ct_description']?></p>
                </div>
                <div class="news-boxes">
                <?php 
                while($featured->have_posts()): $featured->the_post(); 
                    global $dynamic_featured_image;
            
                ?>
                    <div class="news-box">
                    <?php 
                $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
                $key=0;
                foreach($featured_images as $featured_image) {
                    $key=$key+1;
                    if($key===1) { ?>
                            <div class="background-wrapper">
                                <img src="<?= $featured_image['full']; ?>">
                            </div>
                    <?php  }
                   ?>

                <?php } ?>
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
                                            <?php foreach((get_the_category()) as $category){
                                            echo $category->name."<br>";
                                            }	?></span>
                            </div>
                            <?= the_excerpt(); ?>
                        </div>
                        <a href="<?= get_permalink(); ?>">Read More</a>
                    </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="view-more">
                    <button class="button outline black lg" onclick="window.location.href = '<?= get_home_url().'/category/article_news/'; ?>';">View More News and Articles</button>
                </div>
            </div>
        </section>



        <?php
    }

    /**
     * Render the widget output in the editor.
     *
     * Written as a Backbone JavaScript template and used to generate the live preview.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function _content_template() {
        ?>
      

    

<?php
    }
}
