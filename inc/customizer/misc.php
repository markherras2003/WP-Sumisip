<?php
    function ju_customizer_misc_section( $wp_customize ){

        // Add Section Section
        $wp_customize->add_section( 'ju_misc_section',[
            'title'     =>  __('Sumisip Footer'),
            'priority'  =>  30,
            'panel'     =>  'sumisip',
        ]);

        $wp_customize->add_setting('ju_footer_sumisip_description',[
            'default'   => ''
        ]);

        $wp_customize->add_setting('ju_footer_sumisip_copyright',[
            'default'   => ''
        ]);

        $wp_customize->add_setting('ju_footer_sumisip_allrights',[
            'default'   => ''
        ]);

        $wp_customize->add_setting('ju_footer_official_logo',[

        ]);
        $wp_customize->add_setting('ju_customizer_button',[

        ]);

        $wp_customize->add_setting( 'site_logos', array(
            'default'   => '',
            'transport' => 'refresh',
        ) );

        $wp_customize->add_control( new Multi_Image_Custom_Control( $wp_customize, 'site_logos', array(
            'section' => 'ju_misc_section',
            'settings' => 'site_logos',
            'label'   => esc_html__( 'Site Logos'),
        ) ) );



        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_footer_sumisip_description_input',
            array(
                'label'             =>  __('Sumisip Footer Description'),
                'section'           =>  'ju_misc_section',
                'settings'          =>  'ju_footer_sumisip_description',
                'type'              => 'textarea'
            )
        ));

        
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_footer_sumisip_copyright_input',
            array(
                'label'             =>  __('Sumisip Copyright'),
                'section'           =>  'ju_misc_section',
                'settings'          =>  'ju_footer_sumisip_copyright',
            )
        ));


        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_footer_sumisip_rights_input',
            array(
                'label'             =>  __('Sumisip Rights Reserved'),
                'section'           =>  'ju_misc_section',
                'settings'          =>  'ju_footer_sumisip_allrights',
            )
        ));

        $wp_customize->add_control(
            new WP_Customize_Media_Control(
                $wp_customize,
                'official_logo_input',
                array(
                    'label'      => __( 'Upload Seal' ),
                    'section'    => 'ju_misc_section',
                    'settings'   => 'ju_footer_official_logo',
                )
            )
        );
        
    }
?>