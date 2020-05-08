<?php
namespace SumisipElements\Widgets;
use Elementor\Modules\DynamicTags\Module as TagsModule;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class SumisipFeaturedSection extends Widget_Base {

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
        return 'sumisip-featured-section';
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
        return __( 'Sumisip Featured Section', 'sumisip-element' );
    }

    public function get_icon() {
        return 'eicon-slider-album';
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
         * Widget for Video Content
         */
        $this->start_controls_section(
            'video_content',
            [
                'label' => __( 'Video Preview', 'sumisip-element' ),
            ]
        );

        $this->add_control(
            'video_image',
            [
                'label' => __( 'Choose Image', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


         // Section Title
         $this->add_control(
			'video_link',
			[
				'label' => __( 'Choose File', 'elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
					'categories' => [
						TagsModule::MEDIA_CATEGORY,
					],
				],
				'media_type' => 'video',
				/*'condition' => [
					'video_type' => 'hosted',
					'insert_url' => '',
				],*/
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
        $video_url = $settings['video_link']['url'];
        $arg = array(
            'post_type' => 'post',
            'showposts'=>6,
            'post_status' => 'publish',
            'tax_query' => array(             
                array(
                   'taxonomy' => 'featured',
                   'field' => 'slug',
                   'terms' => 'editors-pick',
               ),
            )
        );
        $featured = new \WP_Query($arg);
       
?>
<section class="featured-section">
        <div class="featured-video">
            <div class="preview">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z" />
                </svg>
                <img src="<?= $settings['video_image']['url'] ?>" alt="">
            </div>

            <video id="featured-video">
                <source src="<?= esc_url( $video_url )?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>




        <div class="featured-articles-wrapper">
            <?php while($featured->have_posts()): $featured->the_post(); 
            global $dynamic_featured_image;
            ?>
                <div class="featured-article">
                    <div class="featured-article-gallery">
                <?php 
                $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
                $key=0;
                foreach($featured_images as $featured_image) { ?>
                        <div class="fa-gallery-img <?= ( ($key+1) === 1 )? 'active': '' ?>">
                            <img src="<?= $featured_image['full']; ?>" alt="Article Image">
                        </div>
                <?php }
                $key=0; ?>
                    </div>
                    <div class="featured-details">
                        <h4><?= the_title(); ?></h4>
                        <?= the_excerpt(); ?>
                            <a href="<?= get_permalink(); ?>">Read More</a>
                    </div>   
                </div>
            <?php endwhile;
                wp_reset_postdata();
            ?>

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
      

      <section class="featured-section">
        <div class="featured-video">

            <div class="preview">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z" />
                </svg>
                <img src="{{ settings.video_image.url }}" alt="">
            </div>

            <video id="featured-video">
                <source src="{{ settings.video_link.url }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

        </div>

        <div class="featured-articles-wrapper">


            <div class="featured-article">

                <div class="featured-article-gallery">
                    <div class="fa-gallery-img active">
                        <img src="./assets/images/featured/1.jpg" alt="Article Image">
                    </div>
                    <div class="fa-gallery-img">
                        <img src="./assets/images/featured/2.jpg" alt="Article Image">
                    </div>
                </div>

                <div class="featured-details">
                <h4>Featured Title</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos...
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>


        </div>

</section>

<?php
    }
}
