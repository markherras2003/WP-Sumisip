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
class BrandsParalax extends Widget_Base {

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
        return 'brands-paralax';
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
        return __( 'Brands', 'sumisip-element' );
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

        // Brands count
        $this->add_control(
            'brands',
            [
                'label' => __( 'Brands count ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Brands count ..'
            ]
        );

        // Brands count
        $this->add_control(
            'models',
            [
                'label' => __( 'Models count ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Models count ..'
            ]
        );


        // Card Description
        $this->add_control(
            'section_description',
            [
                'label' => __( 'Section Description ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 6,
                'label_block' => true,
                'placeholder' => __( 'Description ..', 'sumisip-element' ),
            ]
        );

        $this->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'parallax_gallery',
            [
                'label' => __( 'Brand Images', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'default' => [],
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
        <span id="brand" class="anchor"></span>
        <section class="bg-darker">
            <div class="brands">
                <div class="content">
                    <h2><?= $settings['section_title'] ?></h2>
                    <div class="counts">
                        <div class="count brand">
                            <span class="num"><?= $settings['brands'] ?></span>
                            <p>brands</p>
                        </div>
                        <div class="count model">
                            <span class="num"><?= $settings['models'] ?></span>
                            <p>models</p>
                        </div>
                    </div>
                    <p> <?= $settings['section_description'] ?> </p>
                </div>
                <div class="parallax-wrapper">
                    <div class="-bg top"></div>
                    <div class="img-wrapper parallax-bg">
                        <?php foreach ($settings['parallax_gallery'] as $brands): ?>
                            <img src="<?= $brands['url'] ?>" alt="">
                        <?php endforeach; ?>
                    </div>
                    <div class="-bg bot"></div>
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
        <span id="brand" class="anchor"></span>
        <section class="bg-darker">
            <div class="brands">
                <div class="content">
                    <h2>{{ settings.section_title }}</h2>
                    <div class="counts">
                        <div class="count brand">
                            <span class="num">{{ settings.brands }}</span>
                            <p>brands</p>
                        </div>
                        <div class="count model">
                            <span class="num">{{ settings.models }}</span>
                            <p>models</p>
                        </div>
                    </div>
                    <p>{{ settings.section_description }}</p>
                </div>
                <div class="parallax-wrapper">
                    <div class="-bg top"></div>
                    <div class="img-wrapper parallax-bg">
                        <# _.each( settings.parallax_gallery, function( brands ) { #>
                            <img src="{{ brands.url }}" alt="">
                        <# }); #>
                    </div>
                    <div class="-bg bot"></div>
                </div>
            </div>
        </section>
        <?php
    }
}
