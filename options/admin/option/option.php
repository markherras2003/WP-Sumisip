<?php

// Set Image Path
$themepath = get_template_directory_uri().'/images/';
$vafpresspath = get_template_directory_uri().'/options/public/img/';

// Start Options
return array(
	'title' => __('Sumisip Theme Options', 'textdomain_code'),
	'page' => __('Sumisip Menu', 'textdomain_code'),
	'logo' => '',
	'menus' => array(
	
	
//HERO Slider			

array(
	'title' => __('Hero Slider', 'vp_textdomain'),
	'logo'  => '',
	'icon' => 'font-awesome:fa-gear',
	'menus' => array(
		array(
			'title' => __('Hero Slider 1', 'vp_textdomain'),
			'name' => 'slider_1',
			'icon' => 'font-awesome:fa-magic',
			'controls' => array(
								array(
									'type' => 'upload',
									'name' => 'featured_1_1',
									'label' => __('Upload Featured Slider', 'textdomain_code'),
									'description' => __('Upload Your Featured', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_2_1',
									'label' => __('Upload Second Image', 'textdomain_code'),
									'description' => __('Upload Second Image', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_3_1',
									'label' => __('Upload Third Image', 'textdomain_code'),
									'description' => __('Upload Third Image', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'textbox',
									'name' => 'tagline_1_1',
									'label' => __('Tagline', 'textdomain_code'),
									'description' => __('Set your Tagline', 'textdomain_code'),
									'default' => 'Set Your Tagline',
								),

								array(
									'type' => 'textbox',
									'name' => 'title_1_1',
									'label' => __('Title', 'textdomain_code'),
									'description' => __('Set your Title', 'textdomain_code'),
									'default' => 'Set Your Title',
								),
					
							
								array(
									'type' => 'textarea',
									'name' => 'description_1_1',
									'label' => __('Description Text', 'textdomain_code'),
									'description' => __('Set your description', 'textdomain_code'),
									'default' => 'Set your description',
								),

								array(
									'type' => 'textbox',
									'name' => 'url_1_1',
									'label' => __('URL Link', 'textdomain_code'),
									'description' => __('Set your URL Link', 'textdomain_code'),
									'default' => 'Set Your URL Link',
								),
			),
		),


		array(
			'title' => __('Hero Slider 2', 'vp_textdomain'),
			'name' => 'slider_2',
			'icon' => 'font-awesome:fa-magic',
			'controls' => array(
								array(
									'type' => 'upload',
									'name' => 'featured_1_2',
									'label' => __('Upload Featured Slider', 'textdomain_code'),
									'description' => __('Upload Your Featured', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_2_2',
									'label' => __('Upload Second Image', 'textdomain_code'),
									'description' => __('Upload Second Image', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_3_2',
									'label' => __('Upload Third Image', 'textdomain_code'),
									'description' => __('Upload Third Image', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'textbox',
									'name' => 'tagline_1_2',
									'label' => __('Tagline', 'textdomain_code'),
									'description' => __('Set your Tagline', 'textdomain_code'),
									'default' => 'Set Your Tagline',
								),

								array(
									'type' => 'textbox',
									'name' => 'title_1_2',
									'label' => __('Title', 'textdomain_code'),
									'description' => __('Set your Title', 'textdomain_code'),
									'default' => 'Set Your Title',
								),
					
							
								array(
									'type' => 'textarea',
									'name' => 'description_1_2',
									'label' => __('Description Text', 'textdomain_code'),
									'description' => __('Set your description', 'textdomain_code'),
									'default' => 'Set your description',
								),

								array(
									'type' => 'textbox',
									'name' => 'url_1_2',
									'label' => __('URL Link', 'textdomain_code'),
									'description' => __('Set your URL Link', 'textdomain_code'),
									'default' => 'Set Your URL Link',
								),
			),
		),



		array(
			'title' => __('Hero Slider 3', 'vp_textdomain'),
			'name' => 'slider_3',
			'icon' => 'font-awesome:fa-magic',
			'controls' => array(
								array(
									'type' => 'upload',
									'name' => 'featured_1_3',
									'label' => __('Upload Featured Slider', 'textdomain_code'),
									'description' => __('Upload Your Featured', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_2_3',
									'label' => __('Upload Second Image', 'textdomain_code'),
									'description' => __('Upload Second Image', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_3_3',
									'label' => __('Upload Third Image', 'textdomain_code'),
									'description' => __('Upload Third Image', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'textbox',
									'name' => 'tagline_1_3',
									'label' => __('Tagline', 'textdomain_code'),
									'description' => __('Set your Tagline', 'textdomain_code'),
									'default' => 'Set Your Tagline',
								),

								array(
									'type' => 'textbox',
									'name' => 'title_1_3',
									'label' => __('Title', 'textdomain_code'),
									'description' => __('Set your Title', 'textdomain_code'),
									'default' => 'Set Your Title',
								),
					
							
								array(
									'type' => 'textarea',
									'name' => 'description_1_3',
									'label' => __('Description Text', 'textdomain_code'),
									'description' => __('Set your description', 'textdomain_code'),
									'default' => 'Set your description',
								),

								array(
									'type' => 'textbox',
									'name' => 'url_1_3',
									'label' => __('URL Link', 'textdomain_code'),
									'description' => __('Set your URL Link', 'textdomain_code'),
									'default' => 'Set Your URL Link',
								),
			),
		),
		
		

		array(
			'title' => __('Hero Slider 4', 'vp_textdomain'),
			'name' => 'slider_4',
			'icon' => 'font-awesome:fa-magic',
			'controls' => array(
								array(
									'type' => 'upload',
									'name' => 'featured_1_4',
									'label' => __('Upload Featured Slider', 'textdomain_code'),
									'description' => __('Upload Your Featured', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_2_4',
									'label' => __('Upload Second Image', 'textdomain_code'),
									'description' => __('Upload Second Image', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_3_4',
									'label' => __('Upload Third Image', 'textdomain_code'),
									'description' => __('Upload Third Image', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'textbox',
									'name' => 'tagline_1_4',
									'label' => __('Tagline', 'textdomain_code'),
									'description' => __('Set your Tagline', 'textdomain_code'),
									'default' => 'Set Your Tagline',
								),

								array(
									'type' => 'textbox',
									'name' => 'title_1_4',
									'label' => __('Title', 'textdomain_code'),
									'description' => __('Set your Title', 'textdomain_code'),
									'default' => 'Set Your Title',
								),
					
							
								array(
									'type' => 'textarea',
									'name' => 'description_1_4',
									'label' => __('Description Text', 'textdomain_code'),
									'description' => __('Set your description', 'textdomain_code'),
									'default' => 'Set your description',
								),

								array(
									'type' => 'textbox',
									'name' => 'url_1_4',
									'label' => __('URL Link', 'textdomain_code'),
									'description' => __('Set your URL Link', 'textdomain_code'),
									'default' => 'Set Your URL Link',
								),
			),
		),


		array(
			'title' => __('Hero Slider 5', 'vp_textdomain'),
			'name' => 'slider_5',
			'icon' => 'font-awesome:fa-magic',
			'controls' => array(
								array(
									'type' => 'upload',
									'name' => 'featured_1_5',
									'label' => __('Upload Featured Slider', 'textdomain_code'),
									'description' => __('Upload Your Featured', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_2_5',
									'label' => __('Upload Second Image', 'textdomain_code'),
									'description' => __('Upload Second Image', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_3_5',
									'label' => __('Upload Third Image', 'textdomain_code'),
									'description' => __('Upload Third Image', 'textdomain_code'),
									'default' => $themepath.'/assets/svg/branding-official.svg',
								),

								array(
									'type' => 'textbox',
									'name' => 'tagline_1_5',
									'label' => __('Tagline', 'textdomain_code'),
									'description' => __('Set your Tagline', 'textdomain_code'),
									'default' => 'Set Your Tagline',
								),

								array(
									'type' => 'textbox',
									'name' => 'title_1_5',
									'label' => __('Title', 'textdomain_code'),
									'description' => __('Set your Title', 'textdomain_code'),
									'default' => 'Set Your Title',
								),
					
							
								array(
									'type' => 'textarea',
									'name' => 'description_1_5',
									'label' => __('Description Text', 'textdomain_code'),
									'description' => __('Set your description', 'textdomain_code'),
									'default' => 'Set your description',
								),

								array(
									'type' => 'textbox',
									'name' => 'url_1_5',
									'label' => __('URL Link', 'textdomain_code'),
									'description' => __('Set your URL Link', 'textdomain_code'),
									'default' => 'Set Your URL Link',
								),
			),
		),




	),
),

// End Hero		




			/* =============== Jwplayer Settings ====================== */
			array(
				'title' => __('Awards Section', 'textdomain_code'),
				'name' => 'menu_awards',
				'icon' => 'font-awesome:fa-play-circle-o',
				'controls' => array(
				
					array(
						'type' => 'select',
						'name' => 'awards_first',
						'label' => __('First Awards Article', 'vp_textdomain'),
						'description' => __('First Awards Article', 'vp_textdomain'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value'  => 'vp_get_posts',
								),
							),
						),
						'default' => '{{last}}',
					),
	
					array(
						'type' => 'select',
						'name' => 'awards_second',
						'label' => __('Second Awards Article', 'vp_textdomain'),
						'description' => __('Second Awards Article', 'vp_textdomain'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value'  => 'vp_get_posts',
								),
							),
						),
						'default' => '{{last}}',
					),
	
					array(
						'type' => 'select',
						'name' => 'awards_third',
						'label' => __('Third Awards Article', 'vp_textdomain'),
						'description' => __('Third Awards Article', 'vp_textdomain'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value'  => 'vp_get_posts',
								),
							),
						),
						'default' => '{{last}}',
					),
	
					array(
						'type' => 'select',
						'name' => 'awards_fourth',
						'label' => __('Fourth Awards Article', 'vp_textdomain'),
						'description' => __('Fourth Awards Article', 'vp_textdomain'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value'  => 'vp_get_posts',
								),
							),
						),
						'default' => '{{last}}',
					),
	
					array(
						'type' => 'select',
						'name' => 'awards_fifth',
						'label' => __('Fifth Awards Article', 'vp_textdomain'),
						'description' => __('Fifth Awards Article', 'vp_textdomain'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value'  => 'vp_get_posts',
								),
							),
						),
						'default' => '{{last}}',
					),
					
					array(
						'type' => 'textbox',
						'name' => 'awards_title',
						'label' => __('Title Description', 'textdomain_code'),
						'description' => __('Set your Title', 'textdomain_code'),
						'default' => 'Awards And Recognitions',
					),
	
					array(
						'type' => 'textbox',
						'name' => 'awards_description',
						'label' => __('Awards Description', 'textdomain_code'),
						'description' => __('Set your Description', 'textdomain_code'),
						'default' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.',
					),
					
					array(
						'type' => 'textbox',
						'name' => 'awards_url',
						'label' => __('Awards URL', 'textdomain_code'),
						'description' => __('Set your Awards URL Page', 'textdomain_code'),
						'default' => 'http://lgu-sumisip.com/awards',
					),
				
				
				)),



		
			


			/* =============== Jwplayer Settings ====================== */
			array(
			'title' => __('Featured Section', 'textdomain_code'),
			'name' => 'menu_2',
			'icon' => 'font-awesome:fa-play-circle-o',
			'controls' => array(
			
				array(
					'type' => 'select',
					'name' => 'featured_first',
					'label' => __('First Article', 'vp_textdomain'),
					'description' => __('First Article', 'vp_textdomain'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value'  => 'vp_get_posts',
							),
						),
					),
					'default' => '{{last}}',
				),

				array(
					'type' => 'select',
					'name' => 'featured_second',
					'label' => __('Second Article', 'vp_textdomain'),
					'description' => __('Second Article', 'vp_textdomain'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value'  => 'vp_get_posts',
							),
						),
					),
					'default' => '{{last}}',
				),

				array(
					'type' => 'select',
					'name' => 'featured_third',
					'label' => __('Third Article', 'vp_textdomain'),
					'description' => __('Third Article', 'vp_textdomain'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value'  => 'vp_get_posts',
							),
						),
					),
					'default' => '{{last}}',
				),

				array(
					'type' => 'select',
					'name' => 'featured_fourth',
					'label' => __('Fourth Article', 'vp_textdomain'),
					'description' => __('Fourth Article', 'vp_textdomain'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value'  => 'vp_get_posts',
							),
						),
					),
					'default' => '{{last}}',
				),

				array(
					'type' => 'select',
					'name' => 'featured_fifth',
					'label' => __('Fifth Article', 'vp_textdomain'),
					'description' => __('Fifth Article', 'vp_textdomain'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value'  => 'vp_get_posts',
							),
						),
					),
					'default' => '{{last}}',
				),

				array(
					'type' => 'select',
					'name' => 'featured_sixth',
					'label' => __('Sixth Article', 'vp_textdomain'),
					'description' => __('Sixth Article', 'vp_textdomain'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value'  => 'vp_get_posts',
							),
						),
					),
					'default' => '{{last}}',
				),
				
				// Start Video Player Logo
					array(
						'type' => 'upload',
						'name' => 'featured_video',
						'label' => __('Featured Video', 'textdomain_code'),
						'description' => __('Upload A video player', 'textdomain_code'),
						'default' => $themepath.'/assets/svg/branding-official.svg',
					),
				// End Video Player Logo

					// Start Video Player Logo
					array(
						'type' => 'upload',
						'name' => 'featured_image',
						'label' => __('Featured Image', 'textdomain_code'),
						'description' => __('Upload An Image Preview', 'textdomain_code'),
						'default' => $themepath.'/assets/svg/branding-official.svg',
					),
				// End Video Player Logo
				
			
			
			)),
			
			
			/* =============== Menu - Social Media Settings ====================== */
		






//HERO Slider			

array(
	'title' => __('Sumisip Programs', 'vp_textdomain'),
	'logo'  => '',
	'icon' => 'font-awesome:fa-social',
	'menus' => array(


		array(
			'title' => __('Program 1', 'vp_textdomain'),
			'name' => 'programs_1',
			'icon' => 'font-awesome:fa-magic',
			'controls' => array(
								
								array(
									'type' => 'textbox',
									'name' => 'programs_title_1_1',
									'label' => __('Title', 'textdomain_code'),
									'description' => __('Set your Title', 'textdomain_code'),
									'default' => 'Set Your Title',
								),
					
							
								array(
									'type' => 'textarea',
									'name' => 'programs_description_1_1',
									'label' => __('Description Text', 'textdomain_code'),
									'description' => __('Set your description', 'textdomain_code'),
									'default' => 'Set your description',
								),

								array(
									'type' => 'textbox',
									'name' => 'programs_url_1_1',
									'label' => __('URL Link', 'textdomain_code'),
									'description' => __('Set your URL Link', 'textdomain_code'),
									'default' => 'Set Your URL Link',
								),
			),
		),


		array(
			'title' => __('Program 2', 'vp_textdomain'),
			'name' => 'programs_2',
			'icon' => 'font-awesome:fa-magic',
			'controls' => array(
								
								array(
									'type' => 'textbox',
									'name' => 'programs_title_1_2',
									'label' => __('Title', 'textdomain_code'),
									'description' => __('Set your Title', 'textdomain_code'),
									'default' => 'Set Your Title',
								),
					
							
								array(
									'type' => 'textarea',
									'name' => 'programs_description_1_2',
									'label' => __('Description Text', 'textdomain_code'),
									'description' => __('Set your description', 'textdomain_code'),
									'default' => 'Set your description',
								),

								array(
									'type' => 'textbox',
									'name' => 'programs_url_1_2',
									'label' => __('URL Link', 'textdomain_code'),
									'description' => __('Set your URL Link', 'textdomain_code'),
									'default' => 'Set Your URL Link',
								),
			),
		),


		array(
			'title' => __('Program 3', 'vp_textdomain'),
			'name' => 'programs_3',
			'icon' => 'font-awesome:fa-magic',
			'controls' => array(
								
								array(
									'type' => 'textbox',
									'name' => 'programs_title_1_3',
									'label' => __('Title', 'textdomain_code'),
									'description' => __('Set your Title', 'textdomain_code'),
									'default' => 'Set Your Title',
								),
					
							
								array(
									'type' => 'textarea',
									'name' => 'programs_description_1_3',
									'label' => __('Description Text', 'textdomain_code'),
									'description' => __('Set your description', 'textdomain_code'),
									'default' => 'Set your description',
								),

								array(
									'type' => 'textbox',
									'name' => 'programs_url_1_3',
									'label' => __('URL Link', 'textdomain_code'),
									'description' => __('Set your URL Link', 'textdomain_code'),
									'default' => 'Set Your URL Link',
								),
			),
		),


		array(
			'title' => __('Program 4', 'vp_textdomain'),
			'name' => 'programs_4',
			'icon' => 'font-awesome:fa-magic',
			'controls' => array(
								
								array(
									'type' => 'textbox',
									'name' => 'programs_title_1_4',
									'label' => __('Title', 'textdomain_code'),
									'description' => __('Set your Title', 'textdomain_code'),
									'default' => 'Set Your Title',
								),
					
							
								array(
									'type' => 'textarea',
									'name' => 'programs_description_1_4',
									'label' => __('Description Text', 'textdomain_code'),
									'description' => __('Set your description', 'textdomain_code'),
									'default' => 'Set your description',
								),

								array(
									'type' => 'textbox',
									'name' => 'programs_url_1_4',
									'label' => __('URL Link', 'textdomain_code'),
									'description' => __('Set your URL Link', 'textdomain_code'),
									'default' => 'Set Your URL Link',
								),
			),
		),


		array(
			'title' => __('Program 5', 'vp_textdomain'),
			'name' => 'programs_5',
			'icon' => 'font-awesome:fa-magic',
			'controls' => array(
								
								array(
									'type' => 'textbox',
									'name' => 'programs_title_1_5',
									'label' => __('Title', 'textdomain_code'),
									'description' => __('Set your Title', 'textdomain_code'),
									'default' => 'Set Your Title',
								),
					
							
								array(
									'type' => 'textarea',
									'name' => 'programs_description_1_5',
									'label' => __('Description Text', 'textdomain_code'),
									'description' => __('Set your description', 'textdomain_code'),
									'default' => 'Set your description',
								),

								array(
									'type' => 'textbox',
									'name' => 'programs_url_1_5',
									'label' => __('URL Link', 'textdomain_code'),
									'description' => __('Set your URL Link', 'textdomain_code'),
									'default' => 'Set Your URL Link',
								),
			),
		),


		array(
			'title' => __('Program 6', 'vp_textdomain'),
			'name' => 'programs_6',
			'icon' => 'font-awesome:fa-magic',
			'controls' => array(
								
								array(
									'type' => 'textbox',
									'name' => 'programs_title_1_6',
									'label' => __('Title', 'textdomain_code'),
									'description' => __('Set your Title', 'textdomain_code'),
									'default' => 'Set Your Title',
								),
					
							
								array(
									'type' => 'textarea',
									'name' => 'programs_description_1_6',
									'label' => __('Description Text', 'textdomain_code'),
									'description' => __('Set your description', 'textdomain_code'),
									'default' => 'Set your description',
								),

								array(
									'type' => 'textbox',
									'name' => 'programs_url_1_6',
									'label' => __('URL Link', 'textdomain_code'),
									'description' => __('Set your URL Link', 'textdomain_code'),
									'default' => 'Set Your URL Link',
								),
			),
		),



	




	),
),

// End Hero




		/* =============== Jwplayer Settings ====================== */
		array(
			'title' => __('Video Section', 'textdomain_code'),
			'name' => 'video_section',
			'icon' => 'font-awesome:fa-play-circle-o',
			'controls' => array(
			
					// Start Video Player Logo
					array(
						'type' => 'upload',
						'name' => 'section_video',
						'label' => __('Featured Video', 'textdomain_code'),
						'description' => __('Upload An Video', 'textdomain_code'),
						'default' => $themepath.'/assets/svg/branding-official.svg',
					),
				// End Video Player Logo
				
			
			
			)),
			
			
			/* =============== Menu - Social Media Settings ====================== */




		/* =============== Jwplayer Settings ====================== */
		array(
			'title' => __('Site Meta Tag', 'textdomain_code'),
			'name' => 'meta_tag',
			'icon' => 'font-awesome:fa-play-circle-o',
			'controls' => array(
			
					// Start Video Player Logo
					array(
						'type' => 'textbox',
						'name' => 'meta_tag_input',
						'label' => __('Meta Tag', 'textdomain_code'),
						'description' => __('Set your Meta Tag', 'textdomain_code'),
						'default' => 'Sumisip , Best Of Sumisip',
					),
				// End Video Player Logo
				
			
			
			)),
			
			
			/* =============== Menu - Social Media Settings ====================== */



	


		
		
	)
);

/**
 *EOF
 */