<?php
namespace SumisipElements\Widgets;

use Elementor\Controls_Manager;
use Elementor\Core\Schemes\Typography;
use Elementor\Group_Control_Typography;
use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class DealerBrands extends Widget_Base {

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
        return 'dealer-brands';
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
        return __( 'Dealer Brands', 'sumisip-element' );
    }

    public function get_icon() {
        return 'eicon-bullet-list';
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
        return [ 'elementor-sumisip' ];
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

        $this->start_controls_section(
            'section_content',
            [
                'label' => __( 'Section', 'rising-elementor-elementor' ),
            ]
        );

            // Card Title
            $this->add_control(
                'section_title',
                [
                    'label' => __( 'Section Title ..', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    //'show_label' => false,
                    'label_block' => true,
                    'placeholder' => 'Title ..'
                ]
            );
        $this->end_controls_section();

        $this->start_controls_section(
            'brands_content',
            [
                'label' => __( 'Brand Groups', 'rising-elementor-elementor' ),
            ]
        );
            // Multiple image selector
            $this->add_control(
                'gallery_group_1',
                [
                    'label' => __( 'Image group 1', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::GALLERY,
                    'default' => [],
                ]
            );

            // Multiple image selector
            $this->add_control(
                'gallery_group_2',
                [
                    'label' => __( 'Image group 1', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::GALLERY,
                    'default' => [],
                ]
            );
        $this->end_controls_section();

        /**
         * @style tab
         * Heading style
         */
        $this->start_controls_section(
            'section_heading_style',
            [
                'label' => __( 'Section Heading', 'sumisip-element' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_control(
                'heading_color',
                [
                    'label' => __( 'Color', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .section-title' => 'color: {{VALUE}}',
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
        //echo '<pre>'; var_dump($settings['gallery_group_1']);
        ?>
        <section>
            <div class="global-wrapper --section-padding">
                <div class="section-heading">
                    <h2 class="section-title"><?= $settings['section_title'] ?></h2>
                </div>
                <div class="brand-icons">

                    <div class="brand-icons-group">
                        <?php foreach ( $settings['gallery_group_1'] as $group1 ): ?>
                            <div class="img-wrapper">
                                <img src="<?= $group1['url'] ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="brand-icons-group">
                        <?php foreach ( $settings['gallery_group_2'] as $group1 ): ?>
                            <div class="img-wrapper">
                                <img src="<?= $group1['url'] ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
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
        <span id="solution" class="anchor"></span>
        <div class="global-wrapper --section-padding solution">
            <div class="section-heading lead">
                <h2 class="section-title"> {{ settings.section_title }} </h2>
                <p class="">{{ settings.section_description }}</p>
            </div>
            <div class="cards-flex">
                <# _.each( settings.list, function( card ) {  #>
                <div class="card">
                    <div class="img-wrapper">
                        <img src="{{ card.image.url }}" alt="">
                    </div>
                    <span class="title-1">{{ card.title }}</span>
                    <p>{{ card.description }}</p>
                </div>
                <# }); #>
            </div>
        </div>

        <?php
    }
}
