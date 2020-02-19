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
									'default' => $themepath.'logo.png',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_2_1',
									'label' => __('Upload Second Image', 'textdomain_code'),
									'description' => __('Upload Second Image', 'textdomain_code'),
									'default' => $themepath.'logo-small.png',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_3_1',
									'label' => __('Upload Third Image', 'textdomain_code'),
									'description' => __('Upload Third Image', 'textdomain_code'),
									'default' => $themepath.'logo-small.png',
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
									'default' => $themepath.'logo.png',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_2_2',
									'label' => __('Upload Second Image', 'textdomain_code'),
									'description' => __('Upload Second Image', 'textdomain_code'),
									'default' => $themepath.'logo-small.png',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_3_2',
									'label' => __('Upload Third Image', 'textdomain_code'),
									'description' => __('Upload Third Image', 'textdomain_code'),
									'default' => $themepath.'logo-small.png',
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
									'default' => $themepath.'logo.png',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_2_3',
									'label' => __('Upload Second Image', 'textdomain_code'),
									'description' => __('Upload Second Image', 'textdomain_code'),
									'default' => $themepath.'logo-small.png',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_3_3',
									'label' => __('Upload Third Image', 'textdomain_code'),
									'description' => __('Upload Third Image', 'textdomain_code'),
									'default' => $themepath.'logo-small.png',
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
									'default' => $themepath.'logo.png',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_2_4',
									'label' => __('Upload Second Image', 'textdomain_code'),
									'description' => __('Upload Second Image', 'textdomain_code'),
									'default' => $themepath.'logo-small.png',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_3_4',
									'label' => __('Upload Third Image', 'textdomain_code'),
									'description' => __('Upload Third Image', 'textdomain_code'),
									'default' => $themepath.'logo-small.png',
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
									'default' => $themepath.'logo.png',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_2_5',
									'label' => __('Upload Second Image', 'textdomain_code'),
									'description' => __('Upload Second Image', 'textdomain_code'),
									'default' => $themepath.'logo-small.png',
								),

								array(
									'type' => 'upload',
									'name' => 'featured_3_5',
									'label' => __('Upload Third Image', 'textdomain_code'),
									'description' => __('Upload Third Image', 'textdomain_code'),
									'default' => $themepath.'logo-small.png',
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
						'default' => $themepath.'logo-small.png',
					),
				// End Video Player Logo

					// Start Video Player Logo
					array(
						'type' => 'upload',
						'name' => 'featured_image',
						'label' => __('Featured Image', 'textdomain_code'),
						'description' => __('Upload An Image Preview', 'textdomain_code'),
						'default' => $themepath.'logo-small.png',
					),
				// End Video Player Logo
				
			
			
			)),
			
			
			/* =============== Menu - Social Media Settings ====================== */
			array(
			'title' => __('Social Media Settings', 'textdomain_code'),
			'name' => 'menu_3',
			'icon' => 'font-awesome:fa-group',
			'controls' => array(
					
				// Facebook
					array(
						'type' => 'textbox',
						'name' => 'facebook',
						'label' => __('Facebook page', 'textdomain_code'),
						'description' => __('Enter your facebook URL', 'textdomain_code'),
						'default' => '',
						'validation' => 'url',
					),
				// Facebook
				
				// Twitter
					array(
						'type' => 'textbox',
						'name' => 'twitter',
						'label' => __('Twitter Profile', 'textdomain_code'),
						'description' => __('Enter your Twitter Profile URL', 'textdomain_code'),
						'default' => '',
						'validation' => 'url',
					),
				// Twitter
				
				// Google
					array(
						'type' => 'textbox',
						'name' => 'google',
						'label' => __('Google Plus', 'textdomain_code'),
						'description' => __('Enter your google plus URL', 'textdomain_code'),
						'default' => '',
						'validation' => 'url',
					),
				// Google
				
				// Pinterest
					array(
						'type' => 'textbox',
						'name' => 'pinterest',
						'label' => __('Pinterest', 'textdomain_code'),
						'description' => __('Enter your pinterest profile', 'textdomain_code'),
						'default' => '',
						'validation' => 'url',
					),
				// Pinterest
				
				// Flickr
					array(
						'type' => 'textbox',
						'name' => 'linkedin',
						'label' => __('LinkedIn', 'textdomain_code'),
						'description' => __('Enter your LinkedIn profile', 'textdomain_code'),
						'default' => '',
						'validation' => 'url',
					),
				// Flickr
				
				// Enable RSS Feed
					array(
						'type' => 'toggle',
						'name' => 'enablerss',
						'label' => __('Enable RSS Feed', 'textdomain_code'),
						'description' => __('Turn on RSS Feed?', 'textdomain_code'),
						'default' => '0',
					),
				// Enable RSS Feed
					)),
			/* =============== Menu - Social Media Settings ====================== */	
			
			
			
			/* =============== Menu - Footer Widgets ====================== */
			array(
			'title' => __('Footer Widgets', 'textdomain_code'),
			'name' => 'menu_4',
			'icon' => 'font-awesome:fa-th',
			'controls' => array(
					

			// Enable RSS Feed
					array(
						'type' => 'toggle',
						'name' => 'enable_footer_widget',
						'label' => __('Enable Footer Widget', 'textdomain_code'),
						'description' => __('Do you want to enable the footer widget?', 'textdomain_code'),
						'default' => '0',
					),
			// Enable RSS Feed

			array(
				'type' => 'radioimage',
				'name' => 'widget_columns',
				'label' => __('Widget Columns', 'textdomain_code'),
				'description' => __('Choose a column for your widget', 'textdomain_code'),
				'item_max_height' => '100',
				'item_max_width' => '100',
				'items' => array(
					array(
						'value' => 'style_one',
						'label' => __('Style One', 'textdomain_code'),
						'img' => $themepath.'sizes/style-1.png',
					),
					array(
						'value' => 'style_two',
						'label' => __('Style Two', 'textdomain_code'),
						'img' => $themepath.'sizes/style-2.png',
					),
					array(
						'value' => 'style_three',
						'label' => __('Style Three', 'textdomain_code'),
						'img' => $themepath.'sizes/style-3.png',
					),
					array(
						'value' => 'one_third',
						'label' => __('One Third', 'textdomain_code'),
						'img' => $themepath.'sizes/one-third.png',
					),
					array(
						'value' => 'one_fourth',
						'label' => __('One Fourth', 'textdomain_code'),
						'img' => $themepath.'sizes/one-fourth.png',
					),
				),
				'default' => array(
					'one_third',
				),
			),

		)),
			/* =============== Menu - Footer Widgets ====================== */	


		
		
	)
);

/**
 *EOF
 */