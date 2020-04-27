<?php
/**
 * sumisip functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage sumisip
 * @since 1.0.0
 */

/**
 * sumisip only works in WordPress 4.7 or later.
 */
//error_reporting(E_ALL);

/*-----------------------------------------------------------------------------------*/
/*	Load Vafpress Framework
/*-----------------------------------------------------------------------------------*/
require_once('vafpress.php');


if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}else{
    defined( 'TC_CORE_PATH' ) or define( 'TC_CORE_PATH', get_theme_file_path('/inc/') );
}
require_once TC_CORE_PATH . 'init.php';
require_once TC_CORE_PATH . 'settings/api.php';
function gavilan_blocks( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'sumisip-blocks',
                'title' => __( 'Sumisip Blocks', 'sumisip' ),
            ),
        )
    );
}
add_filter( 'block_categories', 'gavilan_blocks', 10, 2);
function admin_enqueue_style( $hook ) { 
    wp_enqueue_style('bootstrap-4','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
}
add_action( 'admin_enqueue_scripts'  , 'admin_enqueue_style' );

add_action( 'wp_enqueue_scripts', function(){
    wp_register_script( 'my_ajax_script', get_template_directory_uri() . '/js/ajax.js', array( 'jquery' ), '0.1.0' );
    wp_localize_script( 'my_ajax_script', 'my_ajax_url', ['admin_url' => admin_url( 'admin-ajax.php' )] );
    wp_enqueue_script('my_ajax_script');
} );


//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
 
add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );
 
function create_topics_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Topics', 'taxonomy general name' ),
    'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Topics' ),
    'popular_items' => __( 'Popular Topics' ),
    'all_items' => __( 'All Topics' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Topic' ), 
    'update_item' => __( 'Update Topic' ),
    'add_new_item' => __( 'Add New Topic' ),
    'new_item_name' => __( 'New Topic Name' ),
    'separate_items_with_commas' => __( 'Separate topics with commas' ),
    'add_or_remove_items' => __( 'Add or remove topics' ),
    'choose_from_most_used' => __( 'Choose from the most used topics' ),
    'menu_name' => __( 'Topics' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('topics','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'topic' ),
  ));
}


function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'events' );
}
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured this post', 'sm-textdomain' )?>
        </label>  
    </div>
</p>
 
    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta' );

/**
 * Saves the custom meta input
 */
function sm_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}
 
}
add_action( 'save_post', 'sm_meta_save' );


function add_featured_image_display_settings( $content, $post_id ) {
	$field_id    = 'show_featured_image';
	$field_value = esc_attr( get_post_meta( $post_id, $field_id, true ) );
	$field_text  = esc_html__( 'Show image.', 'generatewp' );
	$field_state = checked( $field_value, 1, false);

	$field_label = sprintf(
	    '<p><label for="%1$s"><input type="checkbox" name="%1$s" id="%1$s" value="%2$s" %3$s> %4$s</label></p>',
	    $field_id, $field_value, $field_state, $field_text
	);

	return $content .= $field_label;
}
add_filter( 'admin_post_thumbnail_html', 'add_featured_image_display_settings', 10, 2 );


function save_featured_image_display_settings( $post_ID, $post, $update ) {
	$field_id    = 'show_featured_image';
	$field_value = isset( $_REQUEST[ $field_id ] ) ? 1 : 0;

	update_post_meta( $post_ID, $field_id, $field_value );
}
add_action( 'save_post', 'save_featured_image_display_settings', 10, 3 );

function sumisip_custom_mime_types( $mimes ) {

    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';

// Optional. Remove a mime type.
    unset( $mimes['exe'] );
    return $mimes;
}
add_filter( 'upload_mimes', 'sumisip_custom_mime_types' );

if ( ! function_exists( 'sumisip_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sumisip_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sumisip, use a find and replace
		 * to change 'sumisip' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sumisip', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'sumisip' ),
				'right_menu-1' => __( 'RightPrimary', 'sumisip' ),
				'footer' => __( 'Footer Menu', 'sumisip' ),
			)
		);

    register_nav_menu('links', __('Quick Links'));
    register_nav_menu('visit', __('Visit Us'));
    register_nav_menu('downloadable', __('Downloadable Links'));
    register_nav_menu('contact-menu', __('Contact Menu'));
	register_nav_menu('social-menu', __('Social Menu'));
	register_nav_menu('department-menu', __('Department Header Links'));
	register_nav_menu('mayor-menu', __('Mayors Office Links'));
	register_nav_menu('sangguniang-menu', __('Sangguniang Bayan Links'));
	register_nav_menu('awards-menu', __('Awards Menu Links'));
	register_nav_menu('history-menu', __('History Menu Links'));
	register_nav_menu('culture-menu', __('Culture and Arts Menu Links'));
	register_nav_menu('local-industry-menu', __('Local Industry Menu Links'));
	register_nav_menu('places-menu', __('Places Menu Links'));
	register_nav_menu('food-menu', __('Food Menu Links'));



		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		//add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'sumisip' ),
					'shortName' => __( 'S', 'sumisip' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'sumisip' ),
					'shortName' => __( 'M', 'sumisip' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'sumisip' ),
					'shortName' => __( 'L', 'sumisip' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'sumisip' ),
					'shortName' => __( 'XL', 'sumisip' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Blue', 'sumisip' ) : null,
					'slug'  => 'primary',
					'color' => sumisip_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Dark Blue', 'sumisip' ) : null,
					'slug'  => 'secondary',
					'color' => sumisip_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'sumisip' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'sumisip' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'sumisip' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'sumisip_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sumisip_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'sumisip' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'sumisip' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'sumisip_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function sumisip_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sumisip_content_width', 640 );
}
add_action( 'after_setup_theme', 'sumisip_content_width', 0 );


 
function tinymce_loader($hook) {

  wp_enqueue_script( 'sumisip-main', get_template_directory_uri().'/js/main.js' , array(), '20181231', true );
}
add_action('admin_enqueue_scripts', 'tinymce_loader');

/**
 * Enqueue scripts and styles.
 */
function sumisip_scripts() {
	//wp_enqueue_style( 'sumisip-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'sumisip-style', get_template_directory_uri().'/assets/css/main.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'editor-style', get_template_directory_uri().'/style.css', array(), wp_get_theme()->get( 'Version' ) );
    //wp_enqueue_style( 'sumisip-ui-library', get_template_directory_uri().'/css/ui-library.css', array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'sumisip-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		//wp_enqueue_script( 'sumisip-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '20181214', true );
		//wp_enqueue_script( 'sumisip-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '20181231', true );
	}

	wp_enqueue_script( 'history-featured', get_template_directory_uri().'/js/photo-stack.js' , array(), '20181231', true );
    wp_enqueue_script( 'hero-slider', get_template_directory_uri().'/js/hero-slider.js' , array(), '20181231', true );
    wp_enqueue_script( 'hero-featured', get_template_directory_uri().'/js/hero-featured.js' , array(), '20181233', true );
	wp_enqueue_script( 'history-timeline', get_template_directory_uri().'/js/history-timeline.js' , array(), '20181231', true );
	if (is_home()) {
	//wp_enqueue_script( 'hero-video', get_template_directory_uri().'/js/hero-video-autoplay.js' , array(), '20181231', true );
	}
	wp_enqueue_script( 'navigation', get_template_directory_uri().'/js/navigation.js' , array('jquery'), '20181231', true );
	//wp_enqueue_script( 'tinymce_script', get_template_directory_uri().'/js/tinymce.js' , array(), '20181231', true );
	
    //wp_enqueue_script( 'sumisip-swiper', get_template_directory_uri() . '/js/swiper.min.js' , array(), '20181231', true );
	//wp_enqueue_style( 'sumisip-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    wp_deregister_script('jquery');
    //wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', null, '3.4.1', false);
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', null, '1.12.4', false);
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-validate', 'https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js', array('jquery'), wp_get_theme()->get( 'Version' ) );
//    $data = array(
//        'ajax_url' => admin_url( 'admin-ajax.php' ),
//    );
//    wp_localize_script( 'wp_tyrecon', "admin_ajax", $data );
//    wp_enqueue_script( 'wp_tyrecon' );
}
add_action( 'wp_enqueue_scripts', 'sumisip_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function sumisip_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'sumisip_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */

function sumisip_editor_customizer_styles() {

	wp_enqueue_style( 'sumisip-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'sumisip-editor-customizer-styles', sumisip_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'sumisip_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function sumisip_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo sumisip_custom_colors_css(); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'sumisip_colors_css_wrap' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-sumisip-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-sumisip-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/*
    
*/

function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	  array_pop($excerpt);
	  $excerpt = implode(" ",$excerpt).'...';
	} else {
	  $excerpt = implode(" ",$excerpt);
	}	
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
  }

  add_filter('the_content', 'remove_empty_tags_recursive', 20, 1);
  function remove_empty_tags_recursive ($str, $repto = NULL) {
		   $str = force_balance_tags($str);
		   //** Return if string not given or empty.
		   if (!is_string ($str)
		   || trim ($str) == '')
		  return $str;
  
		  //** Recursive empty HTML tags.
		 return preg_replace (
  
				//** Pattern written by Junaid Atari.
				'/<([^<\/>]*)>([\s]*?|(?R))<\/\1>/imsU',
  
			   //** Replace with nothing if string empty.
			   !is_string ($repto) ? '' : $repto,
  
			  //** Source string
			 $str
  );}

add_action( 'init', 'wpse4936_init', 100 /* Something high, to make sure all post types are registered */ );
function wpse4936_init()
{
    remove_post_type_support( 'post', 'thumbnail' );
    // Or remove it for all registerd types
  
}

require get_template_directory() . '/inc/widgets.php';
add_action('widgets_init', 'sumisip_widgets_post');


add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
    <h3 style="margin-top:40px"><?php _e("Extra profile information"); ?></h3>

    <table class="form-table">
    <tr>
        <th><label for="facebook"><?php _e("Facebook"); ?></label></th>
        <td>
            <input type="text" name="facebook" id="facebook-link" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your facebook link."); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="instagram"><?php _e("Instagram"); ?></label></th>
        <td>
            <input type="text" name="instagram" id="instagram-link" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your instagram link."); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="twitter"><?php _e("Twitter"); ?></label></th>
        <td>
            <input type="text" name="twitter" id="twitter-link" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your twitter link."); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="email"><?php _e("E-mail"); ?></label></th>
        <td>
            <input type="text" name="email" id="email-link" value="<?php echo esc_attr( get_the_author_meta( 'email', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your email link."); ?></span>
        </td>
    </tr>
    </table>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
    update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
    update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
    update_user_meta( $user_id, 'email', $_POST['email'] );
}

// SEARCH ONLY TITLE OF THE POST - PAGE

function __search_by_title_only( $search,  $wp_query ){

  global $wpdb;

  if(empty($search)) {

     return $search; // skip processing - no search term in query

  }

  $q = $wp_query->query_vars;

  $n = !empty($q['exact']) ? '' : '%';

  $search = '';

  $searchand = '';

  foreach ((array)$q['search_terms'] as $term) {

     $term = esc_sql($wpdb->esc_like($term));

     $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";

     $searchand = ' AND ';

 }

  if (!empty($search)) {

     $search = " AND ({$search}) ";

     if (!is_user_logged_in())
         $search .= " AND ($wpdb->posts.post_password = '') ";

 }

    return $search;

 }

    add_filter('posts_search', '__search_by_title_only', 500, 2);

	 //Exclude pages from WordPress Search
if (!is_admin()) {
	function wpb_search_filter($query) {
	if ($query->is_search) {
	$query->set('post_type', 'post');
	}
	return $query;
	}
	add_filter('pre_get_posts','wpb_search_filter');
}

function get_author_role()
{
    global $authordata;

    $author_roles = $authordata->roles;
    $author_role = array_shift($author_roles);

    return $author_role;
}

function nddt_add_class_to_images($class){
    $class .= ' photo-effect';
    return $class;
}
add_filter('get_image_tag_class','nddt_add_class_to_images');
include( get_theme_file_path('/inc/multi-image-uploader.php'));

// Theme Options
add_action('customize_register', 'ju_customize_register'); // Social
include( get_theme_file_path('/inc/theme-customizer.php')); // Custom file theme
include( get_theme_file_path('/inc/customizer/misc.php')); // Social
// This will add a filter on `excerpt_more` that returns an empty string.
add_filter( 'excerpt_more', '__return_empty_string' ); 





function opening_composition_shortcode( $atts ) {
	return '<div class="post-composition">';
}

function closing_composition_shortcode( $atts ) {
	return '</div>';
}

add_shortcode( 'opening_composition', 'opening_composition_shortcode' );
add_shortcode( 'closing_composition', 'closing_composition_shortcode' );
include( get_theme_file_path('/inc/swp-btnquotecu.php'));

function title_filter( $where, $wp_query ){
	global $wpdb;
	if( $search_term = $wp_query->get( 'title_filter' ) ) :
	$search_term = $wpdb->esc_like( $search_term );
	$search_term = ' \'%' . $search_term . '%\'';
	$title_filter_relation = ( strtoupper( $wp_query->get( 'title_filter_relation' ) ) == 'OR' ? 'OR' : 'AND' );
	$where .= ' '.$title_filter_relation.' ' . $wpdb->posts . '.post_title LIKE ' . $search_term;
	endif;
	return $where;
}


function custom_get_the_excerpt($post_id) {
    global $post;  
    $save_post = $post;
    $post = get_post( $post_id );
    setup_postdata( $post );
    $output = get_the_excerpt();
    $post = $save_post;
    return $output;
}


function insert_fb_in_head()
{
	global $post;
	global $dynamic_featured_image;
    if (!is_singular()) //if it is not a post or a page
        return;

    if ($excerpt = $post->post_excerpt)
    {
        $excerpt = strip_tags($post->post_excerpt);
    }
    else
    {
        $excerpt = get_bloginfo('description');
    }

    echo '<meta property="og:title" content="' . get_the_title() . '"/>';
    echo '<meta property="og:description" content="' . $excerpt . '"/>';
    echo '<meta property="og:type" content="article"/>';
    echo '<meta property="og:url" content="' . get_permalink() . '"/>';
    echo '<meta property="og:site_name" content="' . get_bloginfo() . '"/>';

    echo '<meta name="twitter:title" content="' . get_the_title() . '"/>';
    echo '<meta name="twitter:card" content="summary" />';
    echo '<meta name="twitter:description" content="' . $excerpt . '" />';
    echo '<meta name="twitter:url" content="' . get_permalink() . '"/>';


	$featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
    if ( !$featured_images )
    {
        //the post does not have featured image, use a default image
        $default_image = "https://lgu-sumisip.com/wp-content/uploads/2020/02/1.png"; //<--replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
        echo '<meta name="twitter:image" content="' . $default_image . '"/>';
    }
    else
    {
        //$thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
		echo '<meta property="og:image" content="' . $featured_images[0]['full'] . '"/>';
		echo '<meta property="og:image:width" content="1630" />';
		echo '<meta property="og:image:height" content="630" />';
		
        echo '<meta name="twitter:image" content="' . $featured_images[0]['full'] . '"/>';
    }
}

add_action('wp_head', 'insert_fb_in_head', 5);