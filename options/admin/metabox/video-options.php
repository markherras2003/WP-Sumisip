<?php

return array(
	'id'          => 'video_options',
	'types'       => array('post'),
	'title'       => __('Video Upload Options', 'vp_textdomain'),
	'priority'    => 'high',
	'template'    => array(
	
				array(
					'type' => 'radiobutton',
					'name' => 'video_type',
					'label' => __('Video Type', 'vp_textdomain'),
					'description' => __('', 'vp_textdomain'),
					'items' => array(
						array(
							'value' => 'upload',
							'label' => __('Upload', 'vp_textdomain'),
						),
						array(
							'value' => 'youtube_url',
							'label' => __('External URL', 'vp_textdomain'),
						),
						array(
							'value' => 'embed_code',
							'label' => __('Embed Code', 'vp_textdomain'),
						),
					),
				),
				array(
					'type' => 'upload',
					'name' => 'video_upload',
					'label' => __('Upload Video', 'vp_textdomain'),
					'description' => __('', 'vp_textdomain'),
					'dependency' => array(
						'field'    => 'video_type',
						'function' => 'vp_dep_is_upload',
					),
				),
				
				array(
					'type' => 'upload',
					'name' => 'video_upload_mobile',
					'label' => __('Mobile Version', 'vp_textdomain'),
					'description' => __('', 'vp_textdomain'),
					'dependency' => array(
						'field'    => 'video_type',
						'function' => 'vp_dep_is_upload',
					),
				),
				
				array(
					'type' => 'textbox',
					'name' => 'youtube_url',
					'label' => __('URL', 'vp_textdomain'),
					'description' => __('', 'vp_textdomain'),
					'dependency' => array(
						'field'    => 'video_type',
						'function' => 'vp_dep_is_youtube_url',
					),
				),
				
				array(
					'type' => 'textarea',
					'name' => 'embed_code',
					'label' => __('Embed Code', 'vp_textdomain'),
					'description' => __('', 'vp_textdomain'),
					'dependency' => array(
						'field'    => 'video_type',
						'function' => 'vp_dep_is_embed_code',
					),
				),
				
				// Notice Box
				array(
					'type' => 'notebox',
					'name' => 'nb_1',
					'label' => __('Fun Facts', 'vp_textdomain'),
					'description' => __('Take note that External URL can be anything, video file such as mp4, 3gp, FLV etc. it can also be a YouTube URL and RTMP Live Steaming( rtmp:example.com/stream and Third Party CDN', 'vp_textdomain'),
					'status' => 'normal',
				),
				
			),
);

/**
 * EOF
 */