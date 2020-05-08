<?php
namespace SumisipElements\Widgets;
use Elementor\Modules\DynamicTags\Module as TagsModule;
use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class SumisipVideo extends Widget_Base {

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
        return 'sumisip-video';
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
        return __( 'Sumisip Video Section', 'sumisip-element' );
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
                'label' => __( 'Sumisip Self Hosted Video', 'sumisip-element' ),
            ]
        );


        $this->add_control(
			'hosted_url',
			[
				'label' => __( 'Choose File', 'elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
					'categories' => [
						TagsModule::MEDIA_CATEGORY,
					],
				],
				'media_type' => 'video',
				/*'condition' => [
					'video_type' => 'hosted',
					'insert_url' => '',
				],*/
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
        $video_url = $settings['hosted_url']['url'];
        //esc_url( $video_url );
?>

        <section class="video-section">
            <video id="autoplayVideo" controls muted="muted">
                <source src="<?= esc_url( $video_url )?>" type="video/mp4">
            </video>
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

        <section class="video-section">
            <video id="autoplayVideo" autoplay muted>
                <source src="" type="video/mp4">
            </video>
        </section>

<?php
    }
}
