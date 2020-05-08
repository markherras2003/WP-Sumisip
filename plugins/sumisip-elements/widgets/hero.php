<?php
namespace SumisipElements\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class HeroSlider extends Widget_Base {

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
        return 'tyreconnect-hero';
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
        return __( 'Hero Slider', 'elementor-sumisip' );
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
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
    // public function get_script_depends() {
    // 	return [ 'elementor-sumisip' ];
    // }

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
                'title',
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
                'description',
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
                'cta_text',
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
                'cta_link',
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
                'image',
                [
                    'label' => __( 'Choose Image', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );

            /**
             * Slider Image Selector
             */
            $repeater->add_control(
                'image_alignment',
                [
                    'label' => __( 'Border Style', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        ''  => __( 'None', 'sumisip-element' ),
                        'left-center'  => __( 'Image Align Left', 'sumisip-element' ),
                        'right-center' => __( 'Image Align Right', 'sumisip-element' ),
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
                    'default' => [],
                    'title_field' => '{{{ title }}}'
                ]
            );

        /**
         * Widget control end
         */
        $this->end_controls_section();


        /**
         * @style tab
         * Heading style
         */
        $this->start_controls_section(
            'section_heading_style',
            [
                'label' => __( 'Slider Heading', 'sumisip-element' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_control(
                'heading_color',
                [
                    'label' => __( 'Heading Font Color', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .slider-title' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'description_typography',
                    'label' => __( 'Description options', 'sumisip-element' ),
                    'scheme' => Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .slider-title',
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_description_style',
            [
                'label' => __( 'Description', 'sumisip-element' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_control(
                'desc_color',
                [
                    'label' => __( 'Color', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .slider-description' => 'color: {{VALUE}}',
                    ],
                ]
            );
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
        ?>
        <!--Hero Section-->
        <div class="hero-section">
            <div class="slide-wrapper">
                <?php foreach ( $settings['list'] as $key => $slide ): ?>
                    <div class="slide slide-<?= $key+1 ?>">
                        <div class="background-wrapper">
                            <img class="<?= $slide['image_alignment'] ?>" src="<?= $slide['image']['url'] ?>">
                        </div>
                        <div class="global-wrapper">
                            <div class="hero-card">
                                <div class="hero-card-body">
                                    <h1 class="slider-title"> <?= $slide['title'] ?> </h1>
                                    <p class="slider-description"> <?= $slide['description'] ?> </p>
                                </div>
                                <div class="hero-card-footer">
                                    <a class="get-started button" href="<?= $slide['cta_link'] ?>"><?= $slide['cta_text'] ?></a>
                                    <div class="slide-controls">
                                        <button class="<?= ( ($key+1) === 1 )? 'control-active': '' ?>" target="1"><span></span></button>
                                        <button class="<?= ( ($key+1) === 2 )? 'control-active': '' ?>" target="2"><span></span></button>
                                        <button class="<?= ( ($key+1) === 3 )? 'control-active': '' ?>" target="3"><span></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
        <div class="hero-section">
            <div class="slide-wrapper">
                <# _.each(settings.list, function( slide ) {  #>
                    <div class="slide slide-1">
                        <div class="background-wrapper">
                            <img src="{{slide.image.url}}">
                        </div>
                        <div class="global-wrapper">
                            <div class="hero-card">
                                <div class="hero-card-body">
                                    <h1 class="slider-title">{{slide.title}}</h1>
                                    <p class="slider-description">{{slide.description}}</p>
                                </div>
                                <div class="hero-card-footer">
                                    <a class="get-started button" href="{{slide.cta_link}}">{{slide.cta_text}}</a>
                                    <div class="slide-controls">
                                        <button class="control-active" target="1"><span></span></button>
                                        <button target="2"><span></span></button>
                                        <button target="3"><span></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <# }); #>
            </div>
        </div>
        <?php
    }
}
