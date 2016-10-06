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

    //Responsive Design Header Menu Icon
    $wp_customize->add_setting(
        'responsive_design_header_menu_icon',
        array(
            'default' => 'light',
        )
    );
    $wp_customize->add_control(
        'responsive_design_header_menu_icon',
        array(
            'type' => 'select',
            'label' => 'Menu Icon',
            'section' => 'responsive_design_layout',
            'choices' => array(
                'light' => 'Light Stacked Menu',
                'dark' => 'Dark Stacked Menu',
            ),
        )
    );

    $wp_customize->add_section('responsive_design_logo', array('title' => 'Logo','panel' => 'responsive_design','priority' => 30,));

    //Responsive Design Header Logo Image
    $wp_customize->add_setting( 'responsive_design_header_logo_image' );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'responsive_design_header_logo_image',
            array(
                'label' => 'Mobile Logo Image',
                'section' => 'responsive_design_logo',
                'settings' => 'responsive_design_header_logo_image'
            )
        )
    );

    //Responsive Design Header Logo Font Color
    $wp_customize->add_setting(
        'responsive_design_header_logo_font_color',
        array(
            'default' => '#FFF',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'responsive_design_header_logo_font_color',
            array(
                'label' => 'Font Color',
                'section' => 'responsive_design_logo',
                'settings' => 'responsive_design_header_logo_font_color',
            )
        )
    );

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