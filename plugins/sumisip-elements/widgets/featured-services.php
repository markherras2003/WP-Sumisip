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
class FeaturedServices extends Widget_Base {

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
        return 'featured-services';
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
        return __( 'Featured Services', 'sumisip-element' );
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

            // Section Title
            $this->add_control(
                'section_title',
                [
                    'label' => __( 'Title', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    //'show_label' => false,
                    'label_block' => true,
                    'placeholder' => 'Title ..'
                ]
            );
            // Section Description
            $this->add_control(
                'section_description',
                [
                    'label' => __( 'Description', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 6,
                    'label_block' => true,
                    'placeholder' => __( 'Description ..', 'sumisip-element' ),
                ]
            );
        $this->end_controls_section();


        $this->start_controls_section(
            'featured_services_content',
            [
                'label' => __( 'Featured Services Items', 'sumisip-element' ),
            ]
        );

            // Listing
            $repeater = new \Elementor\Repeater();
            // Card Title
            $repeater->add_control(
                'title',
                [
                    'label' => __( 'Title ..', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'show_label' => false,
                    'label_block' => true,
                    'placeholder' => 'Title ..'
                ]
            );
            // Card Description
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
            // Card Icon
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
            $this->add_control(
                'list',
                [
                    'label' => __( 'Featured Services List', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'list_title' => __( 'Title #1', 'plugin-domain' ),
                        ],

                    ],
                    'title_field' => '{{{ title }}}',
                ]
            );

        $this->end_controls_section();

        /**
         * @style tab
         * Section typography control
         */
        $this->start_controls_section(
            'section_description_style',
            [
                'label' => __( 'Section Options', 'sumisip-element' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_control(
                'section_panel_heading',
                [
                    'label' => __( 'Heading', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                ]
            );

            $this->add_control(
                'section_heading_color',
                [
                    'label' => __( 'Color', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .section-title' => 'color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_control(
                'section_panel_description',
                [
                    'label' => __( 'Description', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'section_desc_color',
                [
                    'label' => __( 'Color', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .section-description' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'section_description_typography',
                    'label' => __( 'Description options', 'sumisip-element' ),
                    'scheme' => Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .section-title',
                ]
            );
        $this->end_controls_section();

        /**
         * @style tab
         * Heading typography control
         */
        $this->start_controls_section(
            'section_heading_style',
            [
                'label' => __( 'Card Options', 'sumisip-element' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_control(
                'panel_heading',
                [
                    'label' => __( 'Heading', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::HEADING,

                ]
            );

            $this->add_control(
                'heading_color',
                [
                    'label' => __( 'Color', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .card-title' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'heading_typography',
                    'label' => __( 'Typography', 'sumisip-element' ),
                    'scheme' => Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .card-title',
                ]
            );
            $this->add_control(
                'panel_description',
                [
                    'label' => __( 'Description', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
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
        <span id="solution" class="anchor"></span>
        <div class="global-wrapper --section-padding solution">
            <div class="section-heading lead">
                <h2 class="section-title"><?= $settings['section_title'] ?></h2>
                <p class="section-description"><?= $settings['section_description'] ?></p>
            </div>
            <div class="cards-flex">
                <?php foreach ($settings['list'] as $card): ?>
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="<?= $card['image']['url'] ?>" alt="">
                        </div>
                        <span class="card-title title-1"><?= $card['title'] ?></span>
                        <p class="card-description"> <?= $card['description'] ?> </p>
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
        <span id="solution" class="anchor"></span>
        <div class="global-wrapper --section-padding solution">
            <div class="section-heading lead">
                <h2 class="section-title"> {{ settings.section_title }} </h2>
                <p class="section-description">{{ settings.section_description }}</p>
            </div>
            <div class="cards-flex">
                <# _.each( settings.list, function( card ) {  #>
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ card.image.url }}" alt="">
                        </div>
                        <span class="card-title title-1">{{ card.title }}</span>
                        <p class="card-description">{{ card.description }}</p>
                    </div>
                <# }); #>
            </div>
        </div>
        <?php
    }
}
