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
class ContactForm extends Widget_Base {

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
        return 'contact-form';
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
        return __( 'Tyre Contact Form', 'sumisip-element' );
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
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

        $this->add_control(
            'contact_details',
            [
                'label' => __( 'Contact Details', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'street',
            [
                'label' => __( 'Street ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Street ..'
            ]
        );

        $this->add_control(
            'email',
            [
                'label' => __( 'Email ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Email ..'
            ]
        );

        $this->add_control(
            'phone',
            [
                'label' => __( 'Phone ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Phone ..'
            ]
        );

        $this->add_control(
            'address',
            [
                'label' => __( 'Address ..', 'sumisip-element' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                //'show_label' => false,
                'label_block' => true,
                'placeholder' => 'Address ..'
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
        ?>
        <!--Contact section-->
        <span id="contact" class="anchor"></span>
        <div class="global-wrapper --section-padding contact-form">
            <div class="section-heading">
                <h2><?= $settings['section_title'] ?></h2>
            </div>
            <form id="contact_us" data-empty="" action="#" method="post">
                <div class="form-group">
                    <small>Name</small>
                    <input id="name" name="name" class="input-field" type="text" placeholder="e.g. John Smith" required>
                </div>
                <div class="form-group">
                    <small>Business</small>
                    <input id="buss_name" class="input-field" name="buss_name" type="text"
                           placeholder="e.g. TyreConnect" required>
                </div>
                <div class="form-group">
                    <small>Phone</small>
                    <input id="phone" class="input-field" name="phone" type="number" placeholder="e.g. 0456 123 456"
                           required>
                </div>
                <div class="form-group">
                    <small>Email</small>
                    <input id="email" type="email" class="input-field" name="email"
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="e.g. John@tyreconnect.com.au"
                           required>
                    <!-- <input name="email" type="email" placeholder="e.g. John@tyreconnect.com.au" required> -->
                </div>
                <div class="textarea">
                    <p>Message</p>
                    <textarea name="message" class="input-field" id="message" cols="30" rows="10"
                              placeholder="What do you want to tell us" required></textarea>
                </div>

                <button type="submit" class="button submit">Send message</button>
                <a id="success" class="button success"> <img src="<?php get_template_directory_uri() ?>/assets/check.svg" alt=""> Message sent</a>
            </form>

            <div class="contact-details">
                <div class="address">
                    <span class="title-2">Head office</span>
                    <p><?= $settings['street'] ?></p>
                    <p><?= $settings['email'] ?></p>
                    <p class="phone-text"><?= $settings['phone'] ?></p>
                    <p><?= $settings['address'] ?></p>
                </div>
                <div class="social">
                    <span class="title-2">Follow Us on Social</span>
                    <div class="social-links">
                        <a class="icon linked-in hovered" href="https://www.linkedin.com/company/tyreconnect"><img
                                src="<?= get_template_directory_uri() ?>/assets/social-linkedin.svg" alt=""></a>
                        <a class="icon fb" href="https://twitter.com/tyreconnect"><img
                                src="<?= get_template_directory_uri() ?>/assets/social-facebook.svg" alt=""></a>
                        <a class="icon twitter" href="https://www.facebook.com/tyreconnect"><img
                                src="<?= get_template_directory_uri() ?>/assets/social-twitter.svg" alt=""></a>
                        <a class="icon yt" href="https://www.youtube.com/channel/UCebNKx_br0fk78X18qqwYaw"><img
                                src="<?= get_template_directory_uri() ?>/assets/social-youtube.svg" alt=""></a>
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
        <span id="contact" class="anchor"></span>
        <div class="global-wrapper --section-padding contact-form">
            <div class="section-heading">
                <h2>{{ settings.section_title }}</h2>
            </div>
            <form id="contact_us" data-empty="" action="#" method="post">
                <div class="form-group">
                    <small>Name</small>
                    <input id="name" name="name" class="input-field" type="text" placeholder="e.g. John Smith" required>
                </div>
                <div class="form-group">
                    <small>Business</small>
                    <input id="buss_name" class="input-field" name="buss_name" type="text"
                           placeholder="e.g. TyreConnect" required>
                </div>
                <div class="form-group">
                    <small>Phone</small>
                    <input id="phone" class="input-field" name="phone" type="number" placeholder="e.g. 0456 123 456"
                           required>
                </div>
                <div class="form-group">
                    <small>Email</small>
                    <input id="email" type="email" class="input-field" name="email"
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="e.g. John@tyreconnect.com.au"
                           required>
                    <!-- <input name="email" type="email" placeholder="e.g. John@tyreconnect.com.au" required> -->
                </div>
                <div class="textarea">
                    <p>Message</p>
                    <textarea name="message" class="input-field" id="message" cols="30" rows="10"
                              placeholder="What do you want to tell us" required></textarea>
                </div>

                <button type="submit" class="button submit">Send message</button>
                <a id="success" class="button success"> <img src="<?php get_template_directory_uri() ?>/assets/check.svg" alt=""> Message sent</a>
            </form>

            <div class="contact-details">
                <div class="address">
                    <span class="title-2">Head office</span>
                    <p>{{ settings.street }}</p>
                    <p>{{ settings.email }}</p>
                    <p class="phone-text">{{ settings.phone }}</p>
                    <p>{{ settings.address }}</p>
                </div>
                <div class="social">
                    <span class="title-2">Follow Us on Social</span>
                    <div class="social-links">
                        <a class="icon linked-in hovered" href="https://www.linkedin.com/company/tyreconnect"><img
                                src="<?= get_template_directory_uri() ?>/assets/social-linkedin.svg" alt=""></a>
                        <a class="icon fb" href="https://twitter.com/tyreconnect"><img
                                src="<?= get_template_directory_uri() ?>/assets/social-facebook.svg" alt=""></a>
                        <a class="icon twitter" href="https://www.facebook.com/tyreconnect"><img
                                src="<?= get_template_directory_uri() ?>/assets/social-twitter.svg" alt=""></a>
                        <a class="icon yt" href="https://www.youtube.com/channel/UCebNKx_br0fk78X18qqwYaw"><img
                                src="<?= get_template_directory_uri() ?>/assets/social-youtube.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
