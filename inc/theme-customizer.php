<?php

function ju_customize_register( $wp_customize ){

    $wp_customize->add_panel( 'sumisip', [
        'title'         =>  __('Sumisip Theme'),
        'description'   =>  '<p>Sumisip Theme Settings</p>',
        'priority'      =>  10,
    ]);

    ju_customizer_misc_section( $wp_customize );

}


?>