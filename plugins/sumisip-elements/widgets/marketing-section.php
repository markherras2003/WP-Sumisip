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
class MarketingSection extends Widget_Base {

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
        return 'marketing-section';
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
        return __( 'Marketing Section', 'sumisip-element' );
    }

    public function get_icon() {
        return 'fas fa-bullhorn';
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
        // Listing
        $repeater = new \Elementor\Repeater();

        // Card Thumb
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
        // PDF
        $repeater->add_control(
            'pdf',
            [
                'label' => __( 'Upload PDF file', 'sumisip-element' ),
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
        //echo '<pre>'; var_dump($settings['list']);
        ?>
        <!--Marketing Section-->
        <section>
            <div class="container">
                <div class="section-heading">
                    <h2><?= $settings['section_title'] ?></h2>
                    <p><?= $settings['section_description'] ?></p>
                </div>
                <div class="slider-container swiper-container">
                    <div class="slider swiper-wrapper">
                        <?php foreach ($settings['list'] as $item ): ?>
                        <div class="slides swiper-slide">
                            <a href="<?= $item['pdf']['url'] ?>"><img
                                    src="<?= $item['image']['url'] ?>" alt="" download></a>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="controls">
                        <a class="button swiper-button-prev --prev ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" viewBox="0 0 11 20">
                                <path fill-rule="evenodd"
                                      d="M9.293.293a1 1 0 0 1 1.497 1.32l-.083.094L2.415 10l8.292 8.293a1 1 0 0 1 .083 1.32l-.083.094a1 1 0 0 1-1.32.083l-.094-.083-9-9a1 1 0 0 1-.083-1.32l.083-.094 9-9z" />
                            </svg>
                        </a>
                        <a class="button --next  swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" viewBox="0 0 11 20">
                                <path fill-rule="evenodd"
                                      d="M.293.293A1 1 0 0 1 1.613.21l.094.083 9 9a1 1 0 0 1 .083 1.32l-.083.094-9 9a1 1 0 0 1-1.497-1.32l.083-.094L8.585 10 .293 1.707A1 1 0 0 1 .21.387L.293.293z" />
                            </svg>
                        </a>
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
        <section>
            <div class="container">
                <div class="section-heading">
                    <h2>{{settings.section_title}}</h2>
                    <p>{{settings.section_description}}</p>
                </div>
                <div class="slider-container swiper-container">
                    <div class="slider swiper-wrapper">
                       <# _.each( settings.list, function( item ) { #>
                            <div class="slides swiper-slide">
                                <a href="{{item.pdf.url}}"><img
                                        src="{{item.image.url}}" alt="" download></a>
                            </div>
                        <# }); #>
                    </div>

                    <div class="controls">
                        <a class="button swiper-button-prev --prev ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" viewBox="0 0 11 20">
                                <path fill-rule="evenodd"
                                      d="M9.293.293a1 1 0 0 1 1.497 1.32l-.083.094L2.415 10l8.292 8.293a1 1 0 0 1 .083 1.32l-.083.094a1 1 0 0 1-1.32.083l-.094-.083-9-9a1 1 0 0 1-.083-1.32l.083-.094 9-9z" />
                            </svg>
                        </a>
                        <a class="button --next  swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" viewBox="0 0 11 20">
                                <path fill-rule="evenodd"
                                      d="M.293.293A1 1 0 0 1 1.613.21l.094.083 9 9a1 1 0 0 1 .083 1.32l-.083.094-9 9a1 1 0 0 1-1.497-1.32l.083-.094L8.585 10 .293 1.707A1 1 0 0 1 .21.387L.293.293z" />
                            </svg>
                        </a>
                    </div>
                </div>
        </section>
        <?php
    }
}
