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
class CTASection extends Widget_Base {

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
        return 'cta-section';
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
        return __( 'CTA Section', 'sumisip-element' );
    }

    public function get_icon() {
        return 'eicon-editor-external-link';
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
                    'placeholder' => 'Title ..'
                ]
            );

            // Section Description
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

            // Section Title
            $this->add_control(
                'cta_text',
                [
                    'label' => __( 'Button text ..', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    //'show_label' => false,
                    'label_block' => true,
                    'placeholder' => 'Button text ..'
                ]
            );

            // Section Description
            $this->add_control(
                'cta_link',
                [
                    'label' => __( 'Button url ..', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 6,
                    'label_block' => true,
                    'placeholder' => __( 'Button url ..', 'sumisip-element' ),
                ]
            );
        $this->end_controls_section();

        $this->start_controls_section(
            'banner_content',
            [
                'label' => __( 'Banner', 'rising-elementor-elementor' ),
            ]
        );
        $this->add_control(
            'image',
            [
                'label' => __( 'Select background image', 'sumisip-element' ),
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
        <!--CTA Section-->
        <section class="cta-overflow-hidden">
            <div class="banner">
                <div class="img-wrapper">
                    <img src="<?= $settings['image']['url'] ?>" alt="">
                </div>
                <div class="card-wrapper">
                    <div class="spin">
                        <span><?= $settings['section_title'] ?></span>
                        <p><?= $settings['section_description'] ?></p>
                        <a class="get-started button" href="<?= $settings['cta_link'] ?>"><?= $settings['cta_text'] ?></a>
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
        <section class="cta-overflow-hidden">
            <div class="banner">
                <div class="img-wrapper">
                    <img src="{{ settings.image.url }}" alt="">
                </div>
                <div class="card-wrapper">
                    <div class="spin">
                        <span>{{ settings.section_title }}</span>
                        <p>{{ settings.section_description }}</p>
                        <a class="get-started button" href="{{ settings.cta_link }}">{{ settings.cta_text }}</a>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
