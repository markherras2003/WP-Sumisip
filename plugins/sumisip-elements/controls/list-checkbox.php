<?php
/**
 * Elementor emoji one area control.
 *
 * A control for displaying a textarea with the ability to add emojis.
 *
 * @since 1.0.0
 */
class ListCheckbox extends \Elementor\Base_Data_Control {
	const TYPE = 'list-checkbox';
	
	/**
	 * Get emoji one area control type.
	 *
	 * Retrieve the control type, in this case `emojionearea`.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Control type.
	 */
	public function get_type() {
		return self::TYPE;
	}

	public function enqueue() {
		// Styles
		wp_register_script( 'emojionearea-control', plugins_url('/../assets/js/emojionearea-control.js', __FILE__), [ 'jquery' ], '1.0.0' );
		wp_enqueue_script( 'emojionearea-control' );
	}


	protected function get_default_settings() {
		return [
			'input_type' => 'checkbox',
			'placeholder' => '',
			'is_featured' => 'yes',
			'others' => 'no'
		];
	}
	/**
	 * Render emoji one area control output in the seditor.
	 *
	 * Used to generate the control HTML in the editor using Underscore JS
	 * template. The variables for the class are available using `data` JS
	 * object.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function content_template() {
		$control_uid = $this->get_control_uid();
		?>
			<label for="<?php echo $control_uid; ?>">
				<input id="<?php echo $control_uid; ?>" value="{{ data.is_featured }}" type="checkbox"  data-tooltip="{{ data.title }}" title="{{ data.title }}" data-setting="{{ data.name }}" placeholder="{{ data.placeholder }}">
				{{data.label}}
			</label>
		<?php
	}
	
}
