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

        $wp_customize->add_setting('ju_footer_official_logo',[

        ]);
        

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