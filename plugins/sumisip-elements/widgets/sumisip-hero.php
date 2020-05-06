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
class SumisipHeroSlider extends Widget_Base {

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
        return 'sumisip-hero';
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
        return __( 'Sumisip Hero Slider', 'sumisip-element' );
    }

    public function get_icon() {
        return 'eicon-flip-box';
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
            'section_content',
            [
                'label' => __( 'Slider Items', 'sumisip-element' ),
            ]
        );

            $repeater = new \Elementor\Repeater();

            /**
             * Slider Card title
             */
            $repeater->add_control(
                'ct_tagline',
                [
                    'label' => __( 'Tagline ..', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    //'show_label' => false,
                    'label_block' => true,
                    'placeholder' => 'Tagline ..'
                ]
            );

            $repeater->add_control(
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
            $repeater->add_control(
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
             * Slider CTA Button text
             */
            $repeater->add_control(
                'ct_button',
                [
                    'label' => __( 'Button Text ..', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    //'show_label' => false,
                    'label_block' => true,
                    'placeholder' => 'Button Text ..'
                ]
            );

            /**
             * Slider CTA Button link
             */
            $repeater->add_control(
                'ct_link',
                [
                    'label' => __( 'Button Link ..', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    //'show_label' => false,
                    'label_block' => true,
                    'placeholder' => 'Button Link ..'
                ]
            );

                        /**
             * SVG Media Upload
             */
            $repeater->add_control(
                'ct_featured',
                [
                    'label' => __( 'Featured Image', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );

            /**
             * SVG Media Upload
             */
            $repeater->add_control(
                'ct_image',
                [
                    'label' => __( 'Choose Image', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );

                        /**
             * SVG Media Upload
             */
            $repeater->add_control(
                'ct_image2',
                [
                    'label' => __( 'Choose Image', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );


            /**
             * Register field repeater control
             */
            $this->add_control(
                'list',
                [
                    'label' => __( 'Side by Side Content Items', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    //'default' => [],
                    'title_field' => '{{{ ct_title }}}'
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
        //echo '<pre>'; var_dump($settings['gallery_group_1']);
        ?>



<div class="hero-section loading">
 
        <div class="upper-hero-grid">

            <div class="hero-details">
                <div class="heading-group">
                    <span class="overline"></span>
                    <h1 class="display-1"></h1>
                    <p class="lead"></p>
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
                        <?php foreach ( $settings['list'] as $key => $slide ): ?>
                            <li class="<?= ( ($key+1) === 1 )? 'active': '' ?>" overline="<?= $slide['ct_tagline'] ?>" heading="<?= $slide['ct_title'] ?>" 
                            description="<?= $slide['ct_description'] ?>"
                                href="<?= $slide['ct_link'] ?>" mainPrev="<?= $slide['ct_featured']['url'] ?>"
                                secondaryPrev="<?= $slide['ct_image']['url']  ?>"
                                tertiaryPrev="<?= $slide['ct_image2']['url']  ?>">
                                <img src="<?= $slide['ct_featured']['url']  ?>" alt="Slide 1">
                            </li>
                        <?php endforeach; ?>
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
                            <div class="number-indicator"> <span
                                    id="hero-preview-number-indicator">1</span>/<span id="hero-max">0</span>
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
      

      <div class="hero-section loading">



<div class="upper-hero-grid">

    <div class="hero-details">
        <div class="heading-group">
            <span class="overline"></span>
            <h1 class="display-1"></h1>
            <p class="lead"></p>
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
                        <# _.each(settings.list, function( slide , key ) {
                        key=key+1;
                        var desc = "";
                        if (key===1) {
                            desc="active";
                        }    
                        #>
                            <li class="{{desc}}"  overline="{{slide.ct_tagline}}" heading="{{slide.ct_title}}" 
                            description="{{slide.ct_description}}"
                                href="{{slide.ct_link}}" mainPrev="{{slide.ct_featured.url}}"
                                secondaryPrev="{{slide.ct_image.url}}"
                                tertiaryPrev="{{slide.ct_image2.url}}">
                                <img src="{{slide.ct_featured.url}}" alt="Slide 1">
                            </li>
                        <# }); #>
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
                            <div class="number-indicator"> <span
                                    id="hero-preview-number-indicator">1</span>/<span>6</span>
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
    }
}
