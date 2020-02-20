<?php
    function ju_customizer_misc_section( $wp_customize ){

        // Add Section Section
        $wp_customize->add_section( 'ju_misc_section',[
            'title'     =>  __('Sumisip Footer'),
            'priority'  =>  30,
            'panel'     =>  'sumisip',
        ]);

        $wp_customize->add_setting('ju_footer_sumisip_start_day',[
            'default'   => ''
        ]);

        $wp_customize->add_setting('ju_footer_sumisip_end_day',[
            'default'   => ''
        ]);

        $wp_customize->add_setting('ju_footer_sumisip_start_time',[
            'default'   => ''
        ]);

        $wp_customize->add_setting('ju_footer_sumisip_end_time',[
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
            'ju_footer_sumisip_start_day_input',
            array(
                'label'             =>  __('Sumisip Start Day'),
                'section'           =>  'ju_misc_section',
                'settings'          =>  'ju_footer_sumisip_start_day',
            )
        ));



        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_footer_sumisip_end_day_input',
            array(
                'label'             =>  __('Sumisip End Day'),
                'section'           =>  'ju_misc_section',
                'settings'          =>  'ju_footer_sumisip_end_day',
            )
        ));


        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_footer_sumisip_start_time_input',
            array(
                'label'             =>  __('Sumisip Start Time'),
                'section'           =>  'ju_misc_section',
                'settings'          =>  'ju_footer_sumisip_start_time',
            )
        ));



        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_footer_sumisip_end_time_input',
            array(
                'label'             =>  __('Sumisip End Time'),
                'section'           =>  'ju_misc_section',
                'settings'          =>  'ju_footer_sumisip_end_time',
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
        
    }
?>