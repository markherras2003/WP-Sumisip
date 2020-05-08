<?php
namespace SumisipElements;

use EmojiOneArea_Control;
use ListCheckbox;

/**
 * Class Plugin
 *
 * Main Plugin class
 * @since 1.2.0
 */
class Plugin {

	/**
	 * Instance
	 *
	 * @since 1.2.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * widget_scripts
	 *
	 * Load required plugin core files.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function widget_scripts() {
		//wp_register_script( 'elementor-sumisip', plugins_url( '/assets/js/hello-world.js', __FILE__ ), [ 'jquery' ], false, true );
		// wp_register_script( 'emojionearea-control', plugins_url('/assets/js/emojionearea-control.js', __FILE__), [ 'jquery' ], '1.0.0' );
		// wp_enqueue_script( 'emojionearea-control' );
	}

	/**
	 * Include Widgets files
	 *
	 * Load widgets files
	 *
	 * @since 1.2.0
	 * @access private
	 */
	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/sumisip-hero.php' );
		require_once( __DIR__ . '/widgets/sumisip-featured-section.php' );
		require_once( __DIR__ . '/widgets/sumisip-history-timeline.php' );
		require_once( __DIR__ . '/widgets/sumisip-featured-articles.php' );
		require_once( __DIR__ . '/widgets/sumisip-video.php' );
		require_once( __DIR__ . '/widgets/sumisip-programs.php' );
		require_once( __DIR__ . '/widgets/sumisip-hub-composition-leading.php' );
		require_once( __DIR__ . '/widgets/sumisip-hub-composition-content.php' );
		require_once( __DIR__ . '/widgets/sumisip-side-by-side-stacks.php' );
		require_once( __DIR__ . '/widgets/sumisip-side-by-side-single.php' );
		require_once( __DIR__ . '/widgets/sumisip-content.php' );
		/* require_once( __DIR__ . '/widgets/hero.php' );
		*/

    }

	private function include_control_files() {
		require_once( __DIR__ . '/controls/list-checkbox.php' );
	}

	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function register_widgets() {
		$this->include_widgets_files();
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\SumisipHeroSlider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\SumisipFeaturedSection() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\SumisipHistoryTimeline() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\SumisipFeaturedArticles() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\SumisipVideo() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\SumisipPrograms() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\SumisipHubCompositionLeading() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\SumisipHubCompositionContent() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\SumisipSideBySideStacks() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\SumisipSideBySideSingle() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\SumisipContent() );
       /* \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\FeaturedServices() );
	   */
	}

	public function register_rising_controls() {
		// Its is now safe to include Widgets files
		$this->include_control_files();
		\Elementor\Plugin::$instance->controls_manager->register_control('list-checkbox', new ListCheckbox());
	}

	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function __construct() {

		// Register widget scripts
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );
		
		// Widgets Controls 
		
		add_action( 'elementor/controls/controls_registered', [ $this, 'register_rising_controls' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );

		// Register categories
		add_action( 'elementor/elements/categories_registered', [ $this, 'add_elementor_widget_categories' ] );
	}

	/**
	 *  Register new Category for Rising Theme
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'rising-core',
			[
				'title' => __( 'Sumisip Theme Elements', 'plugin-name' ),
				'icon' => 'fa fa-plug',
			]
		);
//		$elements_manager->add_category(
//			'rising-helpers',
//			[
//				'title' => __( 'Second Category', 'plugin-name' ),
//				'icon' => 'fa fa-plug',
//			]
//		);
	
	}
}

// Instantiate Plugin Class
Plugin::instance();
