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
class SumisipSideBySideSingle extends Widget_Base {

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
        return 'sumisip-side-by-side-single';
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
        return __( 'Sumisip Side By Side Single Hub Composition', 'sumisip-element' );
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
			'ct_types',
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

        $this->add_control(
			'ct_image',
			[
				'label' => __( 'Add Images', 'elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'show_label' => true,
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
				'label' => __( 'Select Position', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'nonreverse',
				'options' => [
					'' => __( 'nonreverse', 'elementor' ),
					'reverse' => __( 'reverse', 'elementor' ),
				],
			]
        );

        $this->add_control(
			'ct_align',
			[
				'label' => __( 'Select Position', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'No Alignment',
				'options' => [
					'' => __( 'No Alignment', 'elementor' ),
                    'align-items-center' => __( 'Center', 'elementor' ),
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

            $this->add_control(
                'ct_color',
                [
                    'label' => __( 'Select Color for Button', 'elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'content',
                    'options' => [
                        'rosewood' => __( 'rosewood', 'elementor' ),
                        'marigold' => __( 'marigold', 'elementor' ),
                        'matisse' => __( 'matisse', 'elementor' ),
                        'teal' => __( 'teal', 'elementor' ),
                    ],
                ]
            );

            $this->add_control(
                'ct_button',
                [
                    'label' => __( 'Title ...', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    //'show_label' => false,
                    'label_block' => true,
                    'placeholder' => 'Title  ...'
                ]
            );

            $this->add_control(
                'ct_link',
                [
                    'label' => __( 'Button URL ...', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    //'show_label' => false,
                    'label_block' => true,
                    'placeholder' => 'Button URL  ...'
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
        $ct=$settings['ct_type'];
        $link=$settings['ct_link'];
        $btext=$settings['ct_button'];
        $tilt="tilt-left";
        if($ct==='reverse') {
        $tilt="tilt-right";
        }
        ?>


<div class="global-wrapper content-padding <?= $settings['ct_types'] ?>">
                <div class="side-by-side <?= $settings['ct_type'] ?> <?= $settings['ct_align'] ?>">
                    <div class="preview">
                        <img src="<?= $settings['ct_image']['url']; ?>" alt="Photo" class="photo-effect <?= $tilt ?>">
                    </div>
                    <div class="details">
                        <div class="page-composition">
                            <h2><?= $settings['ct_title']; ?></h2>
                            <p>
                            <?= $settings['ct_description']; ?>
                            </p>
                            <?php if($ct<>"" && $btext <>"" ) { ?>
                            <a href="<?= $settings['ct_link'] ?>" class="button colored <?= $settings['ct_color'] ?>"><?= $settings['ct_button'] ?></a>
                            <?php } ?>
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
        <#
            var ct = settings.ct_type;
            var tilt = "tilt-left";
            if (ct==="reverse") {
                tilt = "tilt-right";
            }

        #>
        
        <div class="global-wrapper content {{settings.ct_types}}">
                <div class="side-by-side {{settings.ct_type}} {{settings.ct_align}}">
                    <div class="preview">
                        <img src="{{settings.ct_image.url}}" alt="Photo" class="photo-effect {{tilt}}">
                    </div>
                    <div class="details">
                        <div class="page-composition">
                            <h2>{{settings.ct_title}}</h2>
                            <p>
                                {{settings.ct_description}}
                            </p>
                            <#   
                                var lk = settings.ct_link;
                                var bt = settings.ct_button;
                                if (lk != "" && bt != "") {
                            #>
                            <a href="{{settings.ct_link}}" class="button colored {{settings.ct_color}}">{{settings.ct_button}}</a>
                            <#
                                }
                            #>
                        </div>
                    </div>
                </div>
</div>


        <?php
    }
}
