<?php
/**
 * Plugin name: Customizer Multiple Image Uploader Control
 * Author: Gavilan Arts
 * Author URI: https://gavilanarts.com
 */

add_action( 'customize_register', 'register_new_control' );

function register_new_control($wp_customize) {

    class Multi_Image_Custom_Control extends WP_Customize_Control
    {
        public function enqueue()
        {
            wp_enqueue_script('multi-image-script', get_template_directory_uri().'/js/multi-image.js', array( 'jquery' ),  '1.0.1', true);
        }

        public function render_content()
        { ?>
            <label>
                <span class='customize-control-title'>Image</span>
            </label>
            <div>
                <ul class='images'></ul>
            </div>
            <div class='actions'>
                <a class="button-secondary upload">Add</a>
            </div>

            <input class="wp-editor-area" id="images-input" type="hidden" <?php $this->link(); ?>>
            <?php
        }
    }
}

?>
