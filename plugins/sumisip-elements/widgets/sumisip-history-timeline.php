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
class SumisipHistoryTimeline extends Widget_Base {

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
        return 'sumisip-history-timeline';
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
        return __( 'Sumisip History Timeline Section', 'sumisip-element' );
    }

    public function get_icon() {
        return 'eicon-time-line';
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
            'history_content',
            [
                'label' => __( 'History Timeline Items', 'sumisip-element' ),
            ]
        );


        $repeater = new \Elementor\Repeater();

        /**
         * Slider Card title
         */
        $repeater->add_control(
            'ct_tagline',
            [
                'label' => __( 'Tagline ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Tagline ..'
            ]
        );

        $repeater->add_control(
            'ct_title',
            [
                'label' => __( 'Title ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        /**
         * Slider Card description
         */
        $repeater->add_control(
            'ct_description',
            [
                'label' => __( 'Description ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 6,
                'label_block' => true,
                'placeholder' => __( 'Description ..', 'sumisip-element' ),
            ]
        );

        /**
         * Slider CTA Button text
         */
        $repeater->add_control(
            'ct_button',
            [
                'label' => __( 'Button Text ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Button Text ..'
            ]
        );

        /**
         * Slider CTA Button link
         */
        $repeater->add_control(
            'ct_link',
            [
                'label' => __( 'Button Link ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Button Link ..'
            ]
        );

                    /**
         * SVG Media Upload
         */
        $repeater->add_control(
            'ct_featured',
            [
                'label' => __( 'Featured Image', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

                /**
         * Slider CTA Timeline Year
         */
        $repeater->add_control(
            'ct_year',
            [
                'label' => __( 'Timeline Year...', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Timeline Year...'
            ]
        );


         /**
             * Register field repeater control
             */
            $this->add_control(
                'list',
                [
                    'label' => __( 'Side by Side Content Items', 'sumisip-element' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    //'default' => [],
                    'title_field' => '{{{ ct_title }}}'
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

<section class="history-section">
            <div class="global-wrapper section-padding loading">
                <div class="display">
                    <div class="display-preview">
                    <?php foreach ( $settings['list'] as $key => $slide ): ?>
                        <div class="dp-photo <?= ( ($key+1) === 1 )? 'active': '' ?><?= ( ($key+1) === 2 )? 'next': '' ?>">
                        <img src="<?= $slide['ct_featured']['url']  ?>" alt="History">
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <div class="display-details">
                        <div class="heading-group">
                            <span id="h-overline" class="overline"></span>
                            <h1 id="h-title"></h1>
                        </div>
                        <div class="paragraph-group">
                            <p id="h-contents"></p>
                        </div>
                        <!--<a id="h-link" href="#" class="button margin-top-1 colored teal">Read Story</a>-->
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-control-left disabled">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.371" height="17.914"
                            viewBox="0 0 10.371 17.914">
                            <defs>
                                <style>
                                    .a {
                                        fill: none;
                                        stroke: #0b928e;
                                        stroke-miterlimit: 10;
                                        stroke-width: 2px;
                                    }
                                </style>
                            </defs>
                            <path class="a" d="M8.25,16.5,0,8.25,8.25,0" transform="translate(1.414 0.707)" />
                        </svg>
                    </div>
                    <div class="timeline-body">

                    <?php foreach ( $settings['list'] as $key => $slide ): ?>

                        <div class="timeline-block <?= ( ($key+1) === 1 )? 'active': '' ?>" overline="<?= $slide['ct_tagline']?>" title="<?= $slide['ct_title']?>"
                            contents="<?= $slide['ct_description']?>" link="<?= $slide['ct_link'] ?>">
                            <div class="indicator"><?php echo '<span>&nbsp;</span>'; ?></div>
                            <span><?= $slide['ct_year'] ?></span>
                        </div>
                    <?php endforeach; ?>
                    
                    </div>
                    <div class="timeline-control-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.371" height="17.914"
                            viewBox="0 0 10.371 17.914">
                            <defs>
                                <style>
                                    .a {
                                        fill: none;
                                        stroke: #0b928e;
                                        stroke-miterlimit: 10;
                                        stroke-width: 2px;
                                    }
                                </style>
                            </defs>
                            <path class="a" d="M0,16.5,8.25,8.25,0,0" transform="translate(0.707 0.707)" />
                        </svg>
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

<section class="history-section">
            <div class="global-wrapper section-padding loading">
                <div class="display">
                    <div class="display-preview">
                    <# _.each(settings.list, function( slide,key ) {
                        key=key+1;
                        var desc = "";
                        if (key===1) {
                            desc="active";
                        }
                        if (key===2) {
                            desc="next";
                        }
                        #>
                        <div class="dp-photo {{desc}}">
                        <img src="{{slide.ct_featured.url}}" alt="History">
                        </div>
                    <# }); #>
                    </div>
                    <div class="display-details">
                        <div class="heading-group">
                            <span id="h-overline" class="overline"></span>
                            <h1 id="h-title"></h1>
                        </div>
                        <div class="paragraph-group">
                            <p id="h-contents"></p>
                        </div>
                        <!--<a id="h-link" href="#" class="button margin-top-1 colored teal">Read Story</a>-->
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-control-left disabled">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.371" height="17.914"
                            viewBox="0 0 10.371 17.914">
                            <defs>
                                <style>
                                    .a {
                                        fill: none;
                                        stroke: #0b928e;
                                        stroke-miterlimit: 10;
                                        stroke-width: 2px;
                                    }
                                </style>
                            </defs>
                            <path class="a" d="M8.25,16.5,0,8.25,8.25,0" transform="translate(1.414 0.707)" />
                        </svg>
                    </div>
                    <div class="timeline-body">

                    <# _.each(settings.list, function( slide,key ) {
                        
                        key=key+1;
                        var desc = "";
                        if (key===1) {
                            desc="active";
                        } 
                    #>
                        <div class="timeline-block {{desc}}" overline="{{slide.ct_tagline}}" title="{{slide.ct_title}}"
                            contents="{{slide.ct_description}}" link="{{slide.ct_link}}">
                            <div class="indicator"><span></span></div>
                            <span>{{slide.ct_year}}</span>
                        </div>
                    <# }); #>
                    
                    </div>
                    <div class="timeline-control-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.371" height="17.914"
                            viewBox="0 0 10.371 17.914">
                            <defs>
                                <style>
                                    .a {
                                        fill: none;
                                        stroke: #0b928e;
                                        stroke-miterlimit: 10;
                                        stroke-width: 2px;
                                    }
                                </style>
                            </defs>
                            <path class="a" d="M0,16.5,8.25,8.25,0,0" transform="translate(0.707 0.707)" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>


<?php
    }
}
