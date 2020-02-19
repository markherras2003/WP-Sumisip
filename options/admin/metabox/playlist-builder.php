<?php

/* Context = 'normal', 'advanced', or 'side' */

return array(
	'id'          => 'playlist',
	'types'       => array('page'),
	'title'       => __('Play List', 'textdomain_videopress'),
	'priority'    => 'high',
	'context'	  => 'side',
	'template'    => array(
	
	// Toggle Layout
	array(
			'type' => 'toggle',
			'name' => 'enable_playlist',
			'label' => __('Include Playlist', 'textdomain_videopress'),
			'description' => __('', 'textdomain_videopress'),
		),
		
	// Start Playlist Type
			array(
				'type' => 'select',
				'name' => 'playlist_type',
				'label' => __('Select Playlist', 'textdomain_videopress'),
				'items' => array(
				
					array(
						'value' => 'flash',
						'label' => __('JWPlayer Playlist', 'textdomain_videopress'),
					),
					array(
						'value' => 'jquery',
						'label' => __('Jquery Playlist', 'textdomain_videopress'),
					),
				),
			'default' => array('flash'),
			'validation' => 'required',
			),
			// End Playlist Type
	
	// Layout Group
	array(
		'type'      => 'group',
		'repeating' => false,
		'name'      => 'playlist_group',
		'title'     => __('Layout', 'textdomain_videopress'),
		'dependency' => array(
				'field'    => 'enable_playlist',
				'function' => 'vp_dep_boolean',
			),
		'fields'    => array(
			
			array(
			'type' => 'toggle',
			'name' => 'full_width',
			'label' => __('Full width playlist?', 'textdomain_videopress'),
			'description' => __('Optional if using JWPlayer playlist', 'textdomain_videopress'),
			),
			
			array(
			'type' => 'textbox',
			'name' => 'playlist_count',
			'label' => __('Number Of Videos', 'textdomain_videopress'),
			'description' => __('', 'textdomain_videopress'),
			'default' => '5'
			),
			
			array(
			'type' => 'select',
			'name' => 'playlist_category',
			'label' => __('Playlist Category', 'textdomain_videopress'),
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
			

		),
	),
	
	

		
	),
);

/**
 * EOF
 */