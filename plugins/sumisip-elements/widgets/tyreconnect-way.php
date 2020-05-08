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
class TyreWay extends Widget_Base {

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
        return 'tyreway';
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
        return __( 'TyreConnect Way', 'sumisip-element' );
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
        $this->end_controls_section();

        $this->start_controls_section(
            'card_content',
            [
                'label' => __( 'Card Items', 'sumisip-element' ),
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
                    'label' => __( 'Featured Services List', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'show_label' => false,
                    'default' => [
                        [
                            'title' => __( 'Card Title ..', 'sumisip-element' ),
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
        //echo '<pre>'; var_dump($settings['gallery_group_1']);
        ?>
        <!--Tyreconnect way section-->
        <span id="works" class="anchor"></span>
        <div class="global-wrapper --section-padding works">
            <div class="section-heading lead">
                <h2><?= $settings['section_title'] ?></h2>
                <p><?= $settings['section_description'] ?></p>
            </div>
            <div class="cards-flex">
                <?php foreach ($settings['list'] as $card): ?>
                    <div class="tway-card">
                        <div class="img-wrapper">
                            <img src="<?= $card['image']['url'] ?>" alt="">
                        </div>
                        <h3><?= $card['title'] ?></h3>
                        <p><?= $card['description'] ?></p>
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
        <span id="works" class="anchor"></span>
        <div class="global-wrapper --section-padding works">
            <div class="section-heading lead">
                <h2>{{ settings.section_title }}</h2>
                <p>{{ settings.section_description }}</p>
            </div>
            <div class="cards-flex">
                <# _.each( settings.list, function( card ) {   #>
                    <div class="tway-card">
                        <div class="img-wrapper">
                            <img src="{{ card.image.url }}" alt="">
                        </div>
                        <h3>{{ card.title }}</h3>
                        <p>{{ card.description }}</p>
                    </div>
                <# }); #>
            </div>
        </div>
        <?php
    }
}
