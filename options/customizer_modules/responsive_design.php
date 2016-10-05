<?php

$wp_customize->add_panel('responsive_design', array('title' => __( 'Responsive Design' ), 'priority' => 30,) );

    $wp_customize->add_section('responsive_design_layout', array('title' => 'Layout','panel' => 'responsive_design','priority' => 30,));

    //Responsive Design Header Fixed
    $wp_customize->add_setting(
        'responsive_design_header_fixed'
    );
    $wp_customize->add_control(
        'responsive_design_header_fixed',
        array(
            'type' => 'checkbox',
            'label' => 'Fixed Mobile Header',
            'section' => 'responsive_design_layout',
            'settings' => 'responsive_design_header_fixed',
        )
    );

    $wp_customize->add_section('responsive_design_logo', array('title' => 'Logo','panel' => 'responsive_design','priority' => 30,));

    $wp_customize->add_section('responsive_design_background', array('title' => 'Background','panel' => 'responsive_design','priority' => 30,));

    //Responsive Design Background Color
    $wp_customize->add_setting(
        'responsive_design_header_background_color',
        array(
            'default' => '#333',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'responsive_design_header_background_color',
            array(
                'label' => 'Mobile Header Background Color',
                'section' => 'responsive_design_background',
                'settings' => 'responsive_design_header_background_color',
            )
        )
    );

?>