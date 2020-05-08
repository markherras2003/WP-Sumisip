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
class SumisipHubCompositionLeading extends Widget_Base {

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
        return 'sumisip-hub-composition-leading';
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
        return __( 'Sumisip Hub Composition Leading', 'sumisip-element' );
    }

    public function get_icon() {
        return 'eicon-pro-icon';
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
                'label' => __( 'Hub Composition Items', 'sumisip-element' ),
            ]
        );

        $this->add_control(
			'ct_type',
			[
				'label' => __( 'Select Child', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'content',
				'options' => [
					'' => __( 'content', 'elementor' ),
                    'first-child' => __( 'first-child', 'elementor' ),
                    'last-child' => __( 'last-child', 'elementor' ),
				],
			]
		);


            /**
             * Slider CTA Button text
             */
            $this->add_control(
                'ct_title',
                [
                    'label' => __( 'Title ...', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    //'show_label' => false,
                    'label_block' => true,
                    'placeholder' => 'Title  ...'
                ]
            );

            /**
             * Slider CTA Button link
             */
            $this->add_control(
                'ct_description',
                [
                    'label' => __( 'Description ...', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                    //'show_label' => false,
                    'label_block' => true,
                    'placeholder' => 'Description ...'
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


        <div class="global-wrapper hub-padding <?= $settings['ct_type'] ?>">
            <div class="hub-leading hub-composition">
                <h2><?= $settings['ct_title']; ?></h2>
                <div class="p-lead">
                    <p><?= $settings['ct_description']; ?></p>
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
      
        <div class="global-wrapper hub-padding {{settings.ct_type}}">
            <div class="hub-leading hub-composition">
                <h2>{{settings.ct_title}}</h2>
                <div class="p-lead">
                    <p>{{settings.ct_description}}</p>
                </div>
            </div>
        </div>

        <?php
    }
}
