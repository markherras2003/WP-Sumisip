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
class SumisipSideBySide extends Widget_Base {

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
        return 'sumisip-side-by-side';
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
        return __( 'Sumisip Side By Side Composition', 'sumisip-element' );
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
                'label' => __( 'Preview Image', 'sumisip-element' ),
            ]
        );


        $this->add_control(
            'ct_image',
            [
                'label' => __( 'Choose Image', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

              /**
         * Widget control end
         */
        $this->end_controls_section();

                  /**
                   

         * Widget control start
         */
        $this->start_controls_section(
            'details_content',
            [
                'label' => __( 'Details', 'sumisip-element' ),
            ]
        );


        $this->add_control(
			'ct_type',
			[
				'label' => __( 'Source', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'nonreverse',
				'options' => [
					'nonreverse' => __( '', 'elementor' ),
					'reverse' => __( 'reverse', 'elementor' ),
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
        ?>



        <div class="global-wrapper content-padding">
            <div class="side-by-side <?= $settings['ct_type'] ?>">
                <div class="preview">
                    <img class="photo-effect tilt-left" src="<?= $settings['ct_image']['url']; ?>" alt="Ahs">
                </div>
                <div class="details">
                    <div class="post-composition">
                        <h3><?= $settings['ct_title']; ?></h3>
                        <?= $settings['ct_description'];?>
                    </div>
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
        
        <div class="global-wrapper content-padding">
            <div class="side-by-side {{settings.ct_type}}">
                <div class="preview">
                    <img class="photo-effect tilt-left" src="{{settings.ct_image.url}}" alt="Ahs">
                </div>
                <div class="details">
                    <div class="post-composition">
                        <h3>{{settings.ct_title}}</h3>
                        <p>{{settings.ct_description}}</p>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
}
