<?php

/* Context = 'normal', 'advanced', or 'side' */

return array(
	'id'          => 'layout_builder',
	'types'       => array('page'),
	'title'       => __('Layout Builder', 'textdomain_videopress'),
	'priority'    => 'high',
	'context'	  => 'normal',
	'template'    => array(
	
	// Toggle Layout
	array(
			'type' => 'toggle',
			'name' => 'enable_builder',
			'label' => __('Enable Builder', 'textdomain_videopress'),
			'description' => __('', 'textdomain_videopress'),
		),
	
	// Layout Group
	array(
		'type'      => 'group',
		'repeating' => true,
		'name'      => 'layout_group',
		'title'     => __('Layout', 'textdomain_videopress'),
		'dependency' => array(
				'field'    => 'enable_builder',
				'function' => 'vp_dep_boolean',
			),
		'fields'    => array(
		
			array(
			'type' => 'textbox',
			'name' => 'layout_title',
			'label' => __('Layout Title', 'textdomain_videopress'),
			'description' => __('', 'textdomain_videopress'),
			),
			
			array(
			'type' => 'select',
			'name' => 'layout_category',
			'label' => __('Category', 'textdomain_videopress'),
			'items' => array(
			'data' => array(
				array(
				'source' => 'function',
				'value' => 'vp_get_categories',
				),
			),
			),
			'default' => array(
			'{{last}}',
			),
			),
			
			array(
				'type' => 'select',
				'name' => 'layout_type',
				'label' => __('Layout Type', 'textdomain_videopress'),
				'description' => __('', 'textdomain_videopress'),
				'items' => array(
						array(
							'value' => 'layout1',
							'label' => __('Three Columns', 'textdomain_videopress'),
						),
						array(
							'value' => 'layout2',
							'label' => __('List Type', 'textdomain_videopress'),
						),
						array(
							'value' => 'layout3',
							'label' => __('Four Columns', 'textdomain_videopress'),
						),
						array(
							'value' => 'layout4',
							'label' => __('Two Columns', 'textdomain_videopress'),
						),
					),
					
				'default' => array('layout2'),
			),
			
			array(
				'type' => 'textbox',
				'name' => 'item_count',
				'label' => __('How many videos', 'vp_textdomain'),
				'description' => __('', 'vp_textdomain'),
				'default' => '6',
			),
			
			array(
				'type' => 'textbox',
				'name' => 'banner_image',
				'label' => __('Image URL', 'vp_textdomain'),
				'description' => __('', 'vp_textdomain'),
			),
					
			array(
				'type' => 'textbox',
				'name' => 'banner_link',
				'label' => __('Link to Banner', 'vp_textdomain'),
				'description' => __('', 'vp_textdomain'),
			),

		),
	),
	


		
	),
);

/**
 * EOF
 */