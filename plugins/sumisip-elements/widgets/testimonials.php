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
class Testimonials extends Widget_Base {

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
        return 'testimonials';
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
        return __( 'Testimonials', 'sumisip-element' );
    }

    public function get_icon() {
        return 'eicon-slider-push';
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
        $this->start_controls_section(
            'section_content',
            [
                'label' => __( 'Content', 'rising-elementor-elementor' ),
            ]
        );

        // Section Title
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Section Title ..'
            ]
        );


        $this->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        // Listing
        $repeater = new \Elementor\Repeater();

        // Card Title
        $repeater->add_control(
            'author',
            [
                'label' => __( 'Author ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Author ..'
            ]
        );
        $repeater->add_control(
            'position',
            [
                'label' => __( 'Position ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Position ..'
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
                'label' => __( 'Featured Services List', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'author' => __( 'John Doe ..', 'sumisip-element' ),
                    ],

                ],
                'title_field' => '{{{ author }}}',
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
        <!--Testimonial section-->

            <div class="container --testi">
                <div class="section-heading">
                    <h2>What our clients are saying</h2>
                </div>
                <div class="testimonials-container">
                    <div class="testimonial-inner">
                        <?php foreach ($settings['list'] as $testimonial): ?>
                            <div class="testimonial-card">
                                <div class="quote-group">
                                    <img src="./assets/quotes.svg" alt="" class="quote">
                                    <p class="desc"> <?= $testimonial['description'] ?> </p>
                                </div>
                                <div class="client-details">
                                    <div class="client-photo">
                                        <img src="<?= $testimonial['image']['url'] ?>"
                                             alt="" class="client">
                                    </div>
                                    <span class="title-3"><?= $testimonial['author'] ?></span>
                                    <p><?= $testimonial['position'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
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
        <div class="container --testi">
            <div class="section-heading">
                <h2>{{ settings.section_title }}</h2>
            </div>
            <div class="testimonials-container">
                <div class="testimonial-inner">
                    <# _.each( settings.list, function( testimonial ) { #>
                        <div class="testimonial-card">
                            <div class="quote-group">
                                <img src="./assets/quotes.svg" alt="" class="quote">
                                <p class="desc">{{ testimonial.description }}</p>
                            </div>
                            <div class="client-details">
                                <div class="client-photo">
                                    <img src="{{ testimonial.image.url }}"
                                         alt="" class="client">
                                </div>
                                <span class="title-3">{{ testimonial.author }}</span>
                                <p>{{ testimonial.position }}</p>
                            </div>
                        </div>
                    <#  }); #>
                </div>
            </div>
        </div>
        <?php
    }
}
