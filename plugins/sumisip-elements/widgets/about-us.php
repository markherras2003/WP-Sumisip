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
class AboutUs extends Widget_Base {

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
        return 'about-us';
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
        return __( 'About Us', 'sumisip-element' );
    }

    public function get_icon() {
        return 'eicon-mail';
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
                'label' => __( 'Heading', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'paragraphs',
            [
                'label' => __( 'Paragraphs', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $repeater = new \Elementor\Repeater();

        // Description
        $repeater->add_control(
            'section_description',
            [
                'label' => __( 'Paragraph ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 6,
                'label_block' => true,
                'placeholder' => __( 'Paragraph ..', 'sumisip-element' ),
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => __( 'Featured Services List', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'show_label' => false,
                'default' => [
                    [
                        'section_description' => __( 'Paragraph', 'sumisip-element' ),
                    ],

                ],
                'title_field' => '{{{ section_description }}}',
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Select image thumb', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
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
        <!--About Us section-->
        <span id="about" class="anchor"></span>
        <section>
            <div class="wrapper">
                <div class="services">
                    <div class="img-wrapper">
                        <img src="<?= $settings['image']['url'] ?>" alt="">
                    </div>
                    <div class="content">
                        <h2><?= $settings['section_title'] ?></h2>
                        <?php foreach ($settings['list'] as $paragraph): ?>
                            <p> <?= $paragraph['section_description'] ?> </p>
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
        <span id="about" class="anchor"></span>
        <section>
            <div class="wrapper">
                <div class="services">
                    <div class="img-wrapper">
                        <img src="{{ settings.image.url }}" alt="">
                    </div>
                    <div class="content">
                        <h2>{{settings.section_title}}</h2>
                        <# _.each( settings.list, function( paragraph ) { #>
                        <p>{{ paragraph.section_description }}</p>
                        <# }); #>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
