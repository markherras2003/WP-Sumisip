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
class SumisipPrograms extends Widget_Base {

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
        return 'sumisip-programs';
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
        return __( 'Sumisip Programs', 'sumisip-element' );
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
         * Widget for Video Content
         */
        $this->start_controls_section(
            'cares_content',
            [
                'label' => __( 'Sumisip Cares Content', 'sumisip-element' ),
            ]
        );

        $this->add_control(
            'cares_title',
            [
                'label' => __( 'Title ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'cares_description',
            [
                'label' => __( 'Description ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'cares_link',
            [
                'label' => __( 'URL Link ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'URL Link ..'
            ]
        );


         /**
         * Widget control end
         */

        $this->end_controls_section();






        /**
         * Widget for Video Content
         */
        $this->start_controls_section(
            'peace_content',
            [
                'label' => __( 'Peace Content', 'sumisip-element' ),
            ]
        );

        $this->add_control(
            'peace_title',
            [
                'label' => __( 'Title ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'peace_description',
            [
                'label' => __( 'Description ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'peace_link',
            [
                'label' => __( 'URL Link ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'URL Link ..'
            ]
        );


         /**
         * Widget control end
         */

        $this->end_controls_section();


                /**
         * Widget for Video Content
         */
        $this->start_controls_section(
            'tour_content',
            [
                'label' => __( 'Tourist Content', 'sumisip-element' ),
            ]
        );

        $this->add_control(
            'tour_title',
            [
                'label' => __( 'Title ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'tour_description',
            [
                'label' => __( 'Description ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'tour_link',
            [
                'label' => __( 'URL Link ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'URL Link ..'
            ]
        );


         /**
         * Widget control end
         */

        $this->end_controls_section();


                        /**
         * Widget for Video Content
         */
        $this->start_controls_section(
            'agri_content',
            [
                'label' => __( 'Agriculture Content', 'sumisip-element' ),
            ]
        );

        $this->add_control(
            'agri_title',
            [
                'label' => __( 'Title ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'agri_description',
            [
                'label' => __( 'Description ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'agri_link',
            [
                'label' => __( 'URL Link ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'URL Link ..'
            ]
        );


         /**
         * Widget control end
         */

        $this->end_controls_section();



                                /**
         * Widget for Video Content
         */
        $this->start_controls_section(
            'youth_content',
            [
                'label' => __( 'Sumisip Youth Content', 'sumisip-element' ),
            ]
        );

        $this->add_control(
            'youth_title',
            [
                'label' => __( 'Title ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'youth_description',
            [
                'label' => __( 'Description ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'youth_link',
            [
                'label' => __( 'URL Link ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'URL Link ..'
            ]
        );


         /**
         * Widget control end
         */

        $this->end_controls_section();
       


                                        /**
         * Widget for Video Content
         */
        $this->start_controls_section(
            'digital_content',
            [
                'label' => __( 'Sumisip Digital Content', 'sumisip-element' ),
            ]
        );

        $this->add_control(
            'digital_title',
            [
                'label' => __( 'Title ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'digital_description',
            [
                'label' => __( 'Description ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Title ..'
            ]
        );

        $this->add_control(
            'digital_link',
            [
                'label' => __( 'URL Link ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'URL Link ..'
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

<section class="programs-section bg-coal">
            <div class="global-wrapper section-padding">
                <div class="section-heading-group">
                    <h1>Sumisip Programs</h1>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.
                    </p>
                </div>

                <div class="program-boxes">
                    <div class="program-box bg-plum">

                        <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M468.7 76.5C423.6 32.2 375 32 362.3 32c-12.7 0-61.5.2-106.3 44.4C211.3 32.3 162.5 32 149.7 32c-12.7 0-61.4.2-106.4 44.5C15.4 104 0 140.7 0 179.9 0 214.1 12.3 246 33.8 272h120.8l29.9-71.8 56.9 126.4c5.5 12.3 22.9 12.7 28.9.6l49.7-99.4 22.1 44.2h136c21.5-26 33.8-57.9 33.8-92.1.1-39.2-15.3-75.9-43.2-103.4zM462.5 240H361.9l-27.6-55.2c-5.9-11.8-22.7-11.8-28.6 0l-48.9 97.9-58.2-129.3c-5.8-12.8-24-12.5-29.4.4L133.3 240H49.5c-9.2-14.6-42.6-82.7 18.3-142.7C90.4 75.1 120 64 149.7 64c33.9 0 54.5 6.3 106.3 57.3C311 67.1 330.5 64 362.3 64c29.7 0 59.3 11.1 81.8 33.3 61 60.1 27.5 128.2 18.4 142.7zM268.7 443.4c-6.2 6.1-16.2 6.1-22.4 0L108.9 304H64l159.9 162.2c18.7 18.5 48.6 18.4 67.3 0L448 304h-44.5L268.7 443.4z" />
                            </svg>
                        </div>

                        <div class="program-content">
                            <h4><?=  $settings['cares_title'] ?></h4>
                            <p><?=  $settings['cares_description'] ?></p>
                        </div>

                        <a href="<?=  $settings['cares_link'] ?>">Learn More</a>

                    </div>

                    <div class="program-box bg-rosewood">

                        <div class="svg-wrapper">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-shield"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                class="svg-inline--fa fa-user-shield fa-w-20 fa-7x">
                                <path fill="currentColor"
                                    d="M622.3 271.1l-115.2-45c-3.5-1.4-7.3-2.1-11.1-2.1s-7.5.7-11.1 2.1l-115.2 45c-10.7 4.2-17.7 14-17.7 24.9 0 111.6 68.7 188.8 132.9 213.9 3.5 1.4 7.3 2.1 11.1 2.1s7.5-.7 11.1-2.1C558.4 489.9 640 420.5 640 296c0-10.9-7-20.7-17.7-24.9zM480 472c-48.2-26.8-94.6-87.6-96-172.1l96-37.5V472zm16.6 8.1c-.1 0-.2-.1-.2-.1h.5c-.2 0-.3.1-.3.1zm15.4-7.6V262.4l96 37.5c-1.5 94.8-57.1 150.2-96 172.6zM48 480c-8.8 0-16-7.2-16-16v-41.6C32 365.9 77.9 320 134.4 320c19.6 0 39.1 16 89.6 16 50.4 0 70-16 89.6-16 2.6 0 5 .6 7.5.8-.7-8.1-1.1-16.3-1.1-24.8 0-2.5.8-4.8 1.1-7.2-2.5-.1-4.9-.8-7.5-.8-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c6.8 0 13.3-1.5 19.2-4-10.3-8.2-20.2-17.6-29.7-28H48zm176-224c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm0-224c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"
                                    class=""></path>
                            </svg>
                        </div>

                        <div class="program-content">
                            <h4><?=  $settings['peace_title'] ?></h4>
                            <p><?=  $settings['peace_description'] ?></p>
                        </div>

                        <a href="<?=  $settings['peace_link'] ?>">Learn More</a>

                    </div>

                    <div class="program-box bg-iris">

                        <div class="svg-wrapper">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="umbrella-beach"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                class="svg-inline--fa fa-umbrella-beach fa-w-20 fa-7x">
                                <path fill="currentColor"
                                    d="M443.48 18.08C409.77 5.81 375.31 0 341.41 0c-90.47 0-176.84 41.45-233.44 112.33-6.7 8.39-2.67 21.04 7.42 24.71l236.15 85.95L257.99 480H8c-4.42 0-8 3.58-8 8v16c0 4.42 3.58 8 8 8h560c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8H292.03l89.56-246.07 236.75 86.17c1.83.67 3.7.98 5.53.98 8.27 0 15.82-6.35 16.04-15.14 3.03-124.66-72.77-242.85-196.43-287.86zm-295.31 96.84C198.11 62.64 268.77 32 341.42 32c7.81 0 15.6.35 23.36 1.04-36.87 23.16-73.76 66.62-103.06 123.21l-113.55-41.33zm315.21 114.73l-171.12-62.28C332.69 90.93 384.89 46.1 420.4 46.09c4.35 0 8.32.68 12.13 2.06 19.56 7.12 33.97 35.16 38.56 75 3.66 31.83.53 68.45-7.71 106.5zm30.8 11.21c13.83-61.57 13.67-118.28.7-159.64 65.33 46.08 107.58 119.45 112.61 200.89l-113.31-41.25z"
                                    class=""></path>
                            </svg>

                        </div>

                        <div class="program-content">
                            <h4><?=  $settings['tour_title'] ?></h4>
                            <p><?=  $settings['tour_description'] ?></p>
                        </div>
                        <a href="<?=  $settings['tour_link'] ?>">Learn More</a>

                    </div>

                    <div class="program-box bg-teal">

                        <div class="svg-wrapper">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="seedling" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="svg-inline--fa fa-seedling fa-w-16 fa-7x">
                                <path fill="currentColor"
                                    d="M442.7 32c-95.9 0-176.4 79.4-197.2 185.7C210.5 145.1 144.8 96 69.3 96H0v16c0 132.3 90.9 240 202.7 240H240v120c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V288h37.3C421.1 288 512 180.3 512 48V32h-69.3zm-240 288C113 320 39.2 235.2 32.5 128h36.8c89.7 0 163.4 84.8 170.2 192h-36.8zm106.6-64h-36.8C279.2 148.8 353 64 442.7 64h36.8c-6.7 107.2-80.5 192-170.2 192z"
                                    class=""></path>
                            </svg>
                        </div>

                        <div class="program-content">
                            <h4><?=  $settings['agri_title'] ?></h4>
                            <p><?=  $settings['agri_description'] ?></p>
                        </div>
                        <a href="<?=  $settings['agri_link'] ?>">Learn More</a>

                    </div>

                    <div class="program-box bg-matisse">

                        <div class="svg-wrapper">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="child" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="svg-inline--fa fa-child fa-w-14 fa-5x">
                                <path fill="currentColor"
                                    d="M413.287 90.746c-23.71-23.707-63.332-27.212-93.318 2.776C318.651 41.725 276.107 0 224 0c-52.104 0-94.647 41.729-95.969 93.521-30.087-30.087-69.711-26.379-93.316-2.778-24.954 24.956-24.954 65.558-.002 90.511L112 258.511V456c0 30.879 25.122 56 56 56h16c15.654 0 29.828-6.456 40-16.846C234.172 505.544 248.346 512 264 512h16c30.878 0 56-25.121 56-56V258.511l77.286-77.256c24.952-24.954 24.952-65.556.001-90.509zM224 32c35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64 28.654-64 64-64zm166.628 126.628L304 245.256V456c0 13.255-10.745 24-24 24h-16c-13.255 0-24-10.745-24-24V344h-32v112c0 13.255-10.745 24-24 24h-16c-13.255 0-24-10.745-24-24V245.256l-86.628-86.628c-12.496-12.497-12.496-32.759 0-45.256 12.498-12.496 32.757-12.497 45.256 0L181.256 192h85.488l78.628-78.628c12.498-12.496 32.757-12.497 45.256 0 12.496 12.497 12.496 32.759 0 45.256z"
                                    class=""></path>
                            </svg>
                        </div>

                        <div class="program-content">
                            <h4><?=  $settings['youth_title'] ?></h4>
                            <p><?=  $settings['youth_description'] ?></p>
                        </div>
                        <a href="<?=  $settings['youth_link'] ?>">Learn More</a>

                    </div>

                    <div class="program-box bg-plum">
                        <div class="svg-wrapper">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="network-wired"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                class="svg-inline--fa fa-network-wired fa-w-20 fa-5x">
                                <path fill="currentColor"
                                    d="M632 240H336v-80h80c17.67 0 32-14.33 32-32V32c0-17.67-14.33-32-32-32H224c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h80v80H8c-4.42 0-8 3.58-8 8v16c0 4.42 3.58 8 8 8h120v80H64c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h160c17.67 0 32-14.33 32-32v-96c0-17.67-14.33-32-32-32h-64v-80h320v80h-64c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h160c17.67 0 32-14.33 32-32v-96c0-17.67-14.33-32-32-32h-64v-80h120c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8zM224 384v96H64v-96h160zm0-256V32h192v96H224zm352 256v96H416v-96h160z"
                                    class=""></path>
                            </svg>
                        </div>
                        <div class="program-content">
                            <h4><?=  $settings['digital_title'] ?></h4>
                            <p><?=  $settings['digital_description'] ?></p>
                        </div>
                        <a href="<?=  $settings['digital_link'] ?>">Learn More</a>
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
      
      <section class="programs-section bg-coal">
            <div class="global-wrapper section-padding">
                <div class="section-heading-group">
                    <h1>Sumisip Programs</h1>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.
                    </p>
                </div>

                <div class="program-boxes">
                    <div class="program-box bg-plum">

                        <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M468.7 76.5C423.6 32.2 375 32 362.3 32c-12.7 0-61.5.2-106.3 44.4C211.3 32.3 162.5 32 149.7 32c-12.7 0-61.4.2-106.4 44.5C15.4 104 0 140.7 0 179.9 0 214.1 12.3 246 33.8 272h120.8l29.9-71.8 56.9 126.4c5.5 12.3 22.9 12.7 28.9.6l49.7-99.4 22.1 44.2h136c21.5-26 33.8-57.9 33.8-92.1.1-39.2-15.3-75.9-43.2-103.4zM462.5 240H361.9l-27.6-55.2c-5.9-11.8-22.7-11.8-28.6 0l-48.9 97.9-58.2-129.3c-5.8-12.8-24-12.5-29.4.4L133.3 240H49.5c-9.2-14.6-42.6-82.7 18.3-142.7C90.4 75.1 120 64 149.7 64c33.9 0 54.5 6.3 106.3 57.3C311 67.1 330.5 64 362.3 64c29.7 0 59.3 11.1 81.8 33.3 61 60.1 27.5 128.2 18.4 142.7zM268.7 443.4c-6.2 6.1-16.2 6.1-22.4 0L108.9 304H64l159.9 162.2c18.7 18.5 48.6 18.4 67.3 0L448 304h-44.5L268.7 443.4z" />
                            </svg>
                        </div>

                        <div class="program-content">
                            <h4>{{settings.cares_title}}</h4>
                            <p>{{settings.cares_description}}</p>
                        </div>
                        <a href="{{settings.cares_link}}">Learn More</a>

                    </div>

                    <div class="program-box bg-rosewood">

                        <div class="svg-wrapper">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-shield"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                class="svg-inline--fa fa-user-shield fa-w-20 fa-7x">
                                <path fill="currentColor"
                                    d="M622.3 271.1l-115.2-45c-3.5-1.4-7.3-2.1-11.1-2.1s-7.5.7-11.1 2.1l-115.2 45c-10.7 4.2-17.7 14-17.7 24.9 0 111.6 68.7 188.8 132.9 213.9 3.5 1.4 7.3 2.1 11.1 2.1s7.5-.7 11.1-2.1C558.4 489.9 640 420.5 640 296c0-10.9-7-20.7-17.7-24.9zM480 472c-48.2-26.8-94.6-87.6-96-172.1l96-37.5V472zm16.6 8.1c-.1 0-.2-.1-.2-.1h.5c-.2 0-.3.1-.3.1zm15.4-7.6V262.4l96 37.5c-1.5 94.8-57.1 150.2-96 172.6zM48 480c-8.8 0-16-7.2-16-16v-41.6C32 365.9 77.9 320 134.4 320c19.6 0 39.1 16 89.6 16 50.4 0 70-16 89.6-16 2.6 0 5 .6 7.5.8-.7-8.1-1.1-16.3-1.1-24.8 0-2.5.8-4.8 1.1-7.2-2.5-.1-4.9-.8-7.5-.8-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c6.8 0 13.3-1.5 19.2-4-10.3-8.2-20.2-17.6-29.7-28H48zm176-224c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm0-224c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"
                                    class=""></path>
                            </svg>
                        </div>

                        <div class="program-content">
                            <h4>{{settings.peace_title}}</h4>
                            <p>{{settings.peace_description}}</p>
                        </div>
                        <a href="{{settings.peace_link}}">Learn More</a>

                    </div>

                    <div class="program-box bg-iris">

                        <div class="svg-wrapper">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="umbrella-beach"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                class="svg-inline--fa fa-umbrella-beach fa-w-20 fa-7x">
                                <path fill="currentColor"
                                    d="M443.48 18.08C409.77 5.81 375.31 0 341.41 0c-90.47 0-176.84 41.45-233.44 112.33-6.7 8.39-2.67 21.04 7.42 24.71l236.15 85.95L257.99 480H8c-4.42 0-8 3.58-8 8v16c0 4.42 3.58 8 8 8h560c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8H292.03l89.56-246.07 236.75 86.17c1.83.67 3.7.98 5.53.98 8.27 0 15.82-6.35 16.04-15.14 3.03-124.66-72.77-242.85-196.43-287.86zm-295.31 96.84C198.11 62.64 268.77 32 341.42 32c7.81 0 15.6.35 23.36 1.04-36.87 23.16-73.76 66.62-103.06 123.21l-113.55-41.33zm315.21 114.73l-171.12-62.28C332.69 90.93 384.89 46.1 420.4 46.09c4.35 0 8.32.68 12.13 2.06 19.56 7.12 33.97 35.16 38.56 75 3.66 31.83.53 68.45-7.71 106.5zm30.8 11.21c13.83-61.57 13.67-118.28.7-159.64 65.33 46.08 107.58 119.45 112.61 200.89l-113.31-41.25z"
                                    class=""></path>
                            </svg>

                        </div>

                        <div class="program-content">
                            <h4>{{settings.tour_title}}</h4>
                            <p>{{settings.tour_description}}</p>
                        </div>
                        <a href="{{settings.tour_link}}">Learn More</a>

                    </div>

                    <div class="program-box bg-teal">

                        <div class="svg-wrapper">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="seedling" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="svg-inline--fa fa-seedling fa-w-16 fa-7x">
                                <path fill="currentColor"
                                    d="M442.7 32c-95.9 0-176.4 79.4-197.2 185.7C210.5 145.1 144.8 96 69.3 96H0v16c0 132.3 90.9 240 202.7 240H240v120c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V288h37.3C421.1 288 512 180.3 512 48V32h-69.3zm-240 288C113 320 39.2 235.2 32.5 128h36.8c89.7 0 163.4 84.8 170.2 192h-36.8zm106.6-64h-36.8C279.2 148.8 353 64 442.7 64h36.8c-6.7 107.2-80.5 192-170.2 192z"
                                    class=""></path>
                            </svg>
                        </div>

                        <div class="program-content">
                            <h4>{{settings.agri_title}}</h4>
                            <p>{{settings.agri_description}}</p>
                        </div>
                        <a href="{{settings.agri_link}}">Learn More</a>

                    </div>

                    <div class="program-box bg-matisse">

                        <div class="svg-wrapper">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="child" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="svg-inline--fa fa-child fa-w-14 fa-5x">
                                <path fill="currentColor"
                                    d="M413.287 90.746c-23.71-23.707-63.332-27.212-93.318 2.776C318.651 41.725 276.107 0 224 0c-52.104 0-94.647 41.729-95.969 93.521-30.087-30.087-69.711-26.379-93.316-2.778-24.954 24.956-24.954 65.558-.002 90.511L112 258.511V456c0 30.879 25.122 56 56 56h16c15.654 0 29.828-6.456 40-16.846C234.172 505.544 248.346 512 264 512h16c30.878 0 56-25.121 56-56V258.511l77.286-77.256c24.952-24.954 24.952-65.556.001-90.509zM224 32c35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64 28.654-64 64-64zm166.628 126.628L304 245.256V456c0 13.255-10.745 24-24 24h-16c-13.255 0-24-10.745-24-24V344h-32v112c0 13.255-10.745 24-24 24h-16c-13.255 0-24-10.745-24-24V245.256l-86.628-86.628c-12.496-12.497-12.496-32.759 0-45.256 12.498-12.496 32.757-12.497 45.256 0L181.256 192h85.488l78.628-78.628c12.498-12.496 32.757-12.497 45.256 0 12.496 12.497 12.496 32.759 0 45.256z"
                                    class=""></path>
                            </svg>
                        </div>

                        <div class="program-content">
                            <h4>{{settings.youth_title}}</h4>
                            <p>{{settings.youth_description}}</p>
                        </div>
                        <a href="{{settings.youth_link}}">Learn More</a>

                    </div>

                    <div class="program-box bg-plum">
                        <div class="svg-wrapper">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="network-wired"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                class="svg-inline--fa fa-network-wired fa-w-20 fa-5x">
                                <path fill="currentColor"
                                    d="M632 240H336v-80h80c17.67 0 32-14.33 32-32V32c0-17.67-14.33-32-32-32H224c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h80v80H8c-4.42 0-8 3.58-8 8v16c0 4.42 3.58 8 8 8h120v80H64c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h160c17.67 0 32-14.33 32-32v-96c0-17.67-14.33-32-32-32h-64v-80h320v80h-64c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h160c17.67 0 32-14.33 32-32v-96c0-17.67-14.33-32-32-32h-64v-80h120c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8zM224 384v96H64v-96h160zm0-256V32h192v96H224zm352 256v96H416v-96h160z"
                                    class=""></path>
                            </svg>
                        </div>
                        <div class="program-content">
                            <h4>{{settings.digital_title}}</h4>
                            <p>{{settings.digital_description}}</p>
                        </div>
                        <a href="{{settings.digital_link}}">Learn More</a>
                    </div>

                </div>
            </div>
        </section>
    

<?php
    }
}
