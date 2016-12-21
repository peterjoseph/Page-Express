<?php

$wp_customize->add_panel('header_three', array('title' => __( 'Tertiary Header' ), 'priority' => 30,) );

        $wp_customize->add_section('header_three_visibility', array('title' => 'Tertiary Header Visibility','panel' => 'header_three','priority' => 30,));

        //Header 3 Visibility
		$wp_customize->add_setting(
		    'tertiary_header_visibility',
		    array(
		        'default' => 'visible',
		    )
		);
		$wp_customize->add_control(
		    'tertiary_header_visibility',
		    array(
		        'type' => 'select',
		        'label' => 'Header 3',
		        'section' => 'header_three_visibility',
		        'choices' => array(
					'visible' => 'Visible Everywhere',
		            'hidden' => 'Hidden',
		            'homepage' => 'Homepage Only',
		            'page' => 'Pages Only',
					'posts' => 'Posts Only',
		        ),
		    )
		);

        $wp_customize->add_section('tertiary_header_type', array('title' => 'Header Type','panel' => 'header_three','priority' => 30,));

        //Tertiary Header Type
        $wp_customize->add_setting(
            'tertiary_header_type_select',
            array(
                'default' => 'Menu',
            )
        );
        $wp_customize->add_control(
            new WP_header_type(
                $wp_customize,
                'tertiary_header_type_select',
                array(
                    'settings'		=> 'tertiary_header_type_select',
                    'section'		=> 'tertiary_header_type',
                    'label'			=> __( 'Header Type', 'pageexpress' ),
                    'description'	=> __( 'Select a header style from the options below', 'pageexpress' ),
                    'choices'		=> array(
                        'Menu' 		=> get_template_directory_uri() . '/options/images/header_options/menu_only.png',
                        'Logo' 	=> get_template_directory_uri() . '/options/images/header_options/logo_only.png',
                        'Logo & Menu'	=> get_template_directory_uri() . '/options/images/header_options/logo_menu.png',
                    )
                )
            )
        );

        $wp_customize->add_section('tertiary_header_layout', array('title' => 'Layout','panel' => 'header_three','priority' => 30,));

        //Tertiary Header Width % or px
        $wp_customize->add_setting(
            'tertiary_header_width_option',
            array(
                'default' => 'fluid',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_width_option',
            array(
                'type' => 'select',
                'label' => 'Header Width (Fixed or Flexible)',
                'section' => 'tertiary_header_layout',
                'choices' => array(
                    'fixed' => 'Fixed',
                    'fluid' => 'Fluid',
                ),
            )
        );

        //Tertiary Header Width Fixed
        $wp_customize->add_setting(
            'tertiary_header_width_fixed',
            array(
                'default' => '1100',
            )
        );
        $wp_customize->add_control( 'tertiary_header_width_fixed', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_layout',
            'label'       => 'Width [Fixed]',
            'input_attrs' => array(
                'min'   => 800,
                'max'   => 1400,
                'step'  => 2,
            ),
        ) );

        //Tertiary Header Width Fluid
        $wp_customize->add_setting(
            'tertiary_header_width_fluid',
            array(
                'default' => '100',
            )
        );
        $wp_customize->add_control( 'tertiary_header_width_fluid', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_layout',
            'label'       => 'Width [Fluid]',
            'input_attrs' => array(
                'min'   => 50,
                'max'   => 100,
                'step'  => 2,
            ),
        ) );

        //Tertiary Header Alignment
        $wp_customize->add_setting(
            'tertiary_header_alignment',
            array(
                'default' => 'center',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_alignment',
            array(
                'type' => 'select',
                'label' => 'Header Alignment',
                'section' => 'tertiary_header_layout',
                'choices' => array(
                    'center' => 'Center',
                    'left' => 'Left',
                    'right' => 'Right',
                ),
            )
        );

        //Tertiary Header Content Width % or px
        $wp_customize->add_setting(
            'tertiary_header_content_width_option',
            array(
                'default' => 'fluid',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_content_width_option',
            array(
                'type' => 'select',
                'label' => 'Content Width (Fixed or Flexible)',
                'section' => 'tertiary_header_layout',
                'choices' => array(
                    'fixed' => 'Fixed',
                    'fluid' => 'Fluid',
                ),
            )
        );

        //Tertiary Header Content Width Fixed
        $wp_customize->add_setting(
            'tertiary_header_content_width_fixed',
            array(
                'default' => '1000',
            )
        );
        $wp_customize->add_control( 'tertiary_header_content_width_fixed', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_layout',
            'label'       => 'Width [Fixed]',
            'input_attrs' => array(
                'min'   => 800,
                'max'   => 1400,
                'step'  => 2,
            ),
        ) );

        //Tertiary Header Content Width Fluid
        $wp_customize->add_setting(
            'tertiary_header_content_width_fluid',
            array(
                'default' => '100',
            )
        );
        $wp_customize->add_control( 'tertiary_header_content_width_fluid', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_layout',
            'label'       => 'Width [Fluid]',
            'input_attrs' => array(
                'min'   => 50,
                'max'   => 100,
                'step'  => 2,
            ),
        ) );

        //Tertiary Header Content Alignment
        $wp_customize->add_setting(
            'tertiary_header_content_alignment',
            array(
                'default' => 'center',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_content_alignment',
            array(
                'type' => 'select',
                'label' => 'Content Alignment',
                'section' => 'tertiary_header_layout',
                'choices' => array(
                    'center' => 'Center',
                    'left' => 'Left',
                    'right' => 'Right',
                ),
            )
        );

        /** PRIMARY HEADER BACKGROUND **/
        $wp_customize->add_section('tertiary_header_background', array('title' => 'Background','panel' => 'header_three','priority' => 30,));

        //Tertiary Header Background Visibility
        $wp_customize->add_setting(
            'tertiary_header_background_visible'
        );
        $wp_customize->add_control(
            'tertiary_header_background_visible',
            array(
                'type' => 'checkbox',
                'label' => 'Disable header Background',
                'section' => 'tertiary_header_background',
                'settings' => 'tertiary_header_background_visible',
            )
        );

        //Tertiary Header Background Color
        $wp_customize->add_setting(
            'tertiary_header_background_color',
            array(
                'default' => '#333',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'tertiary_header_background_color',
                array(
                    'label' => 'Background Color',
                    'section' => 'tertiary_header_background',
                    'settings' => 'tertiary_header_background_color',
                )
            )
        );

        //Tertiary Header Background Image
        $wp_customize->add_setting( 'tertiary_header_background_image' );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'tertiary_header_background_image',
                array(
                    'label' => 'Background Image',
                    'section' => 'tertiary_header_background',
                    'settings' => 'tertiary_header_background_image'
                )
            )
        );

        //Tertiary Header Background Image position
        $wp_customize->add_setting(
            'tertiary_header_background_image_position',
            array(
                'default' => 'initial',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_background_image_position',
            array(
                'type' => 'select',
                'label' => 'Background Image Position',
                'section' => 'tertiary_header_background',
                'choices' => array(
                    'initial' => 'Initial',
                    'left top' => 'Top Left',
                    'left center' => 'Center Left',
                    'left bottom' => 'Bottom Left',
                    'right top' => 'Top Right',
                    'right center' => 'Center Right',
                    'right bottom' => 'Bottom Right',
                    'center top' => 'Top Center',
                    'center center' => 'Center Center',
                    'center bottom' => 'Bottom Center',
                ),
            )
        );

        //Tertiary Header Background Image repeat
        $wp_customize->add_setting(
            'tertiary_header_background_image_repeat',
            array(
                'default' => 'no-repeat',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_background_image_repeat',
            array(
                'type' => 'select',
                'label' => 'Background Image Repetition',
                'section' => 'tertiary_header_background',
                'choices' => array(
                    'no-repeat' => 'No Repeat',
                    'repeat' => 'Repeat',
                    'repeat-x' => 'Repeat X',
                    'repeat-y' => 'Repeat Y',
                    'initial' => 'Initial',
                ),
            )
        );


        /** PRIMARY HEADER BORDER **/
        $wp_customize->add_section('tertiary_header_borders', array('title' => 'Borders','panel' => 'header_three','priority' => 30,));


        //Border Title
        $wp_customize->add_setting(
            'tertiary_header_border_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'tertiary_header_border_title',
            array(
                'label'	=> __( 'Borders' ),
                'section' => 'tertiary_header_borders',
                'settings' => 'tertiary_header_border_title',
            )
        ));

        //Tertiary Header Border Color
        $wp_customize->add_setting(
            'tertiary_header_border_color',
            array(
                'default' => '#000',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'tertiary_header_border_color',
                array(
                    'label' => 'Border Color',
                    'section' => 'tertiary_header_borders',
                    'settings' => 'tertiary_header_border_color',
                )
            )
        );

        //Tertiary Header Border Style
        $wp_customize->add_setting(
            'tertiary_header_border_style',
            array(
                'default' => 'solid',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_border_style',
            array(
                'type' => 'select',
                'label' => 'Border Style',
                'section' => 'tertiary_header_borders',
                'choices' => array(
                    'dotted' => 'Dotted',
                    'dashed' => 'Dashed',
                    'solid' => 'Solid',
                    'double' => 'Double',
                    'groove' => 'Groove',
                ),
            )
        );


        //Tertiary Header Border Top
        $wp_customize->add_setting(
            'tertiary_header_border_top',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_border_top', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_borders',
            'label'       => 'Top Border',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );

        //Tertiary Header Border Bottom
        $wp_customize->add_setting(
            'tertiary_header_border_bottom',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_border_bottom', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_borders',
            'label'       => 'Bottom Border',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );

        //Tertiary Header Border Left
        $wp_customize->add_setting(
            'tertiary_header_border_left',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_border_left', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_borders',
            'label'       => 'Left Border',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );

        //Tertiary Header Border Right
        $wp_customize->add_setting(
            'tertiary_header_border_right',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_border_right', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_borders',
            'label'       => 'Right Border',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );

        //Tertiary Header Border Radius
        $wp_customize->add_setting(
            'tertiary_header_border_radius',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_border_radius', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_borders',
            'label'       => 'Rounded Border',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 2,
            ),
        ) );

        /** PRIMARY HEADER PADDING **/
        $wp_customize->add_section('tertiary_header_padding', array('title' => 'Inner Spacing','panel' => 'header_three','priority' => 30,));

        //Tertiary Header Padding Top
        $wp_customize->add_setting(
            'tertiary_header_padding_top',
            array(
                'default' => '14',
            )
        );
        $wp_customize->add_control( 'tertiary_header_padding_top', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_padding',
            'label'       => 'Top',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 2,
            ),
        ) );

        //Tertiary Header Padding Bottom
        $wp_customize->add_setting(
            'tertiary_header_padding_bottom',
            array(
                'default' => '14',
            )
        );
        $wp_customize->add_control( 'tertiary_header_padding_bottom', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_padding',
            'label'       => 'Bottom',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 2,
            ),
        ) );

        //Tertiary Header Padding Left
        $wp_customize->add_setting(
            'tertiary_header_padding_left',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_padding_left', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_padding',
            'label'       => 'Left',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 2,
            ),
        ) );

        //Tertiary Header Padding Right
        $wp_customize->add_setting(
            'tertiary_header_padding_right',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_padding_right', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_padding',
            'label'       => 'Right',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 2,
            ),
        ) );

        /** PRIMARY HEADER MARGINS **/
        $wp_customize->add_section('tertiary_header_margins', array('title' => 'Outer Spacing','panel' => 'header_three','priority' => 30,));

        //Tertiary Header Margin Top
        $wp_customize->add_setting(
            'tertiary_header_margin_top',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_margin_top', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_margins',
            'label'       => 'Top',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );


        //Tertiary Header Margin Bottom
        $wp_customize->add_setting(
            'tertiary_header_margin_bottom',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_margin_bottom', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_margins',
            'label'       => 'Bottom',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );

        /** PRIMARY HEADER LOGO Options **/
        $wp_customize->add_section('tertiary_header_logo', array('title' => 'Logo Styling','panel' => 'header_three','priority' => 30,));

        //Tertiary Header Logo Title
        $wp_customize->add_setting(
            'tertiary_header_logo_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'tertiary_header_logo_title',
            array(
                'label'	=> __( 'Logo' ),
                'section' => 'tertiary_header_logo',
                'settings' => 'tertiary_header_logo_title',
            )
        ));

        //Tertiary Header Logo Image
        $wp_customize->add_setting( 'tertiary_header_logo_image' );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'tertiary_header_logo_image',
                array(
                    'label' => 'Upload Logo',
                    'section' => 'tertiary_header_logo',
                    'settings' => 'tertiary_header_logo_image'
                )
            )
        );

        $wp_customize->add_setting(
            'tertiary_header_sitetitle',
            array(
                'default' => 'My Site',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_sitetitle',
            array(
                'label' => 'Site Title',
                'section' => 'tertiary_header_logo',
                'type' => 'text',
            )
        );

        $wp_customize->add_setting(
            'tertiary_header_tagline',
            array(
                'default' => 'just another Wordpress site',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_tagline',
            array(
                'label' => 'Tagline',
                'section' => 'tertiary_header_logo',
                'type' => 'text',
            )
        );

        //Tertiary Header Logo Alignment Title
        $wp_customize->add_setting(
            'tertiary_header_logo_alignment_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'tertiary_header_logo_alignment_title',
            array(
                'label'	=> __( 'Logo Alignment' ),
                'section' => 'tertiary_header_logo',
                'settings' => 'tertiary_header_logo_alignment_title',
            )
        ));

        //Tertiary Header Logo Alignment
        $wp_customize->add_setting(
            'tertiary_header_logo_alignment',
            array(
                'default' => 'left',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_logo_alignment',
            array(
                'type' => 'select',
                'label' => 'Logo Alignment',
                'section' => 'tertiary_header_logo',
                'choices' => array(
                    'left' => 'Left',
                    'center' => 'Center',
                    'right' => 'Right',
                ),
            )
        );

        //Tertiary Header Logo Title Styling title
        $wp_customize->add_setting(
            'tertiary_header_logo_title_styling_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'tertiary_header_logo_title_styling_title',
            array(
                'label'	=> __( 'Site Title Styling' ),
                'section' => 'tertiary_header_logo',
                'settings' => 'tertiary_header_logo_title_styling_title',
            )
        ));

        //Tertiary Header Logo Title Text Color
        $wp_customize->add_setting(
            'tertiary_header_logo_title_text_color',
            array(
                'default' => '#FFF',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'tertiary_header_logo_title_text_color',
                array(
                    'label' => 'Font Color',
                    'section' => 'tertiary_header_logo',
                    'settings' => 'tertiary_header_logo_title_text_color',
                )
            )
        );

        //Tertiary Header Logo Title text font
        $wp_customize->add_setting(
            'tertiary_header_logo_title_fonts',
            array(
                'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_logo_title_fonts',
            array(
                'type' => 'select',
                'label' => 'Font Style',
                'section' => 'tertiary_header_logo',
                'choices' => array(
                    'Arial,"Helvetica Neue",Helvetica,sans-serif' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
                    '"Arial Narrow",Arial,sans-serif' => '"Arial Narrow",Arial,sans-serif',
                    'Calibri,Candara,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Calibri,Candara,Segoe,"Segoe UI",Optima,Arial,sans-serif',
                    'Candara,Calibri,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Candara,Calibri,Segoe,"Segoe UI",Optima,Arial,sans-serif',
                    'Futura,"Trebuchet MS",Arial,sans-serif' => 'Futura,"Trebuchet MS",Arial,sans-serif',
                    'Geneva,Tahoma,Verdana,sans-serif' => 'Geneva,Tahoma,Verdana,sans-serif',
                    '"Gill Sans","Gill Sans MT",Calibri,sans-serif' => '"Gill Sans","Gill Sans MT",Calibri,sans-serif',
                    '"Helvetica Neue",Helvetica,Arial,sans-serif' => '"Helvetica Neue",Helvetica,Arial,sans-serif',
                    'Tahoma,Verdana,Segoe,sans-serif' => 'Tahoma,Verdana,Segoe,sans-serif',
                    '"Segoe UI",Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif' => '"Segoe UI",Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif',
                    '"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif' => '"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif',
                    'Verdana,Geneva,sans-serif' => 'Verdana,Geneva,sans-serif',
                    '"Big Caslon","Book Antiqua","Palatino Linotype",Georgia,serif' => '"Big Caslon","Book Antiqua","Palatino Linotype",Georgia,serif',
                    '"Book Antiqua",Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif' => '"Book Antiqua",Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif',
                    '"Calisto MT","Bookman Old Style",Bookman,"Goudy Old Style",Garamond,"Hoefler Text","Bitstream Charter",Georgia,serif' => '"Calisto MT","Bookman Old Style",Bookman,"Goudy Old Style",Garamond,"Hoefler Text","Bitstream Charter",Georgia,serif',
                    'Cambria,Georgia,serif' => 'Cambria,Georgia,serif',
                    'Georgia,Times,"Times New Roman",serif' => 'Georgia,Times,"Times New Roman",serif',
                    '"Lucida Bright",Georgia,serif' => '"Lucida Bright",Georgia,serif',
                    'Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Georgia,serif' => 'Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Georgia,serif',
                    'Perpetua,Baskerville,"Big Caslon","Palatino Linotype",Palatino,"URW Palladio L","Nimbus Roman No9 L",serif' => 'Perpetua,Baskerville,"Big Caslon","Palatino Linotype",Palatino,"URW Palladio L","Nimbus Roman No9 L",serif',
                    'TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif' => 'TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif',
                ),
            )
        );

        //Tertiary Header Logo Title Font Size
        $wp_customize->add_setting(
            'tertiary_header_logo_title_font_size',
            array(
                'default' => '32',
            )
        );
        $wp_customize->add_control( 'tertiary_header_logo_title_font_size', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_logo',
            'label'       => 'Font Size',
            'input_attrs' => array(
                'min'   => 8,
                'max'   => 70,
                'step'  => 2,
            ),
        ) );

        //Tertiary Header Logo Title Font Weight
        $wp_customize->add_setting(
            'tertiary_header_logo_title_font_weight',
            array(
                'default' => 'bold',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_logo_title_font_weight',
            array(
                'type' => 'select',
                'label' => 'Font Weight',
                'section' => 'tertiary_header_logo',
                'choices' => array(
                    'normal' => 'Normal',
                    'bold' => 'Bold',
                    'light' => 'Light',
                ),
            )
        );

        //Tertiary Header Logo Title Font Transformation
        $wp_customize->add_setting(
            'tertiary_header_logo_title_font_transformation',
            array(
                'default' => 'none',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_logo_title_font_transformation',
            array(
                'type' => 'select',
                'label' => 'Font Transformation',
                'section' => 'tertiary_header_logo',
                'choices' => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                    'capitalize' => 'Capitalize',
                ),
            )
        );

        //Tertiary Header Logo Tagline Styling title
        $wp_customize->add_setting(
            'tertiary_header_logo_tagline_styling_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'tertiary_header_logo_tagline_styling_title',
            array(
                'label'	=> __( 'Site Tagline Styling' ),
                'section' => 'tertiary_header_logo',
                'settings' => 'tertiary_header_logo_tagline_styling_title',
            )
        ));

        //Tertiary Header Logo Tagline Text Color
        $wp_customize->add_setting(
            'tertiary_header_logo_tagline_text_color',
            array(
                'default' => '#CCC',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'tertiary_header_logo_tagline_text_color',
                array(
                    'label' => 'Font Color',
                    'section' => 'tertiary_header_logo',
                    'settings' => 'tertiary_header_logo_tagline_text_color',
                )
            )
        );

        //Tertiary Header Logo Tagline text font
        $wp_customize->add_setting(
            'tertiary_header_logo_tagline_fonts',
            array(
                'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_logo_tagline_fonts',
            array(
                'type' => 'select',
                'label' => 'Font Style',
                'section' => 'tertiary_header_logo',
                'choices' => array(
                    'Arial,"Helvetica Neue",Helvetica,sans-serif' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
                    '"Arial Narrow",Arial,sans-serif' => '"Arial Narrow",Arial,sans-serif',
                    'Calibri,Candara,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Calibri,Candara,Segoe,"Segoe UI",Optima,Arial,sans-serif',
                    'Candara,Calibri,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Candara,Calibri,Segoe,"Segoe UI",Optima,Arial,sans-serif',
                    'Futura,"Trebuchet MS",Arial,sans-serif' => 'Futura,"Trebuchet MS",Arial,sans-serif',
                    'Geneva,Tahoma,Verdana,sans-serif' => 'Geneva,Tahoma,Verdana,sans-serif',
                    '"Gill Sans","Gill Sans MT",Calibri,sans-serif' => '"Gill Sans","Gill Sans MT",Calibri,sans-serif',
                    '"Helvetica Neue",Helvetica,Arial,sans-serif' => '"Helvetica Neue",Helvetica,Arial,sans-serif',
                    'Tahoma,Verdana,Segoe,sans-serif' => 'Tahoma,Verdana,Segoe,sans-serif',
                    '"Segoe UI",Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif' => '"Segoe UI",Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif',
                    '"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif' => '"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif',
                    'Verdana,Geneva,sans-serif' => 'Verdana,Geneva,sans-serif',
                    '"Big Caslon","Book Antiqua","Palatino Linotype",Georgia,serif' => '"Big Caslon","Book Antiqua","Palatino Linotype",Georgia,serif',
                    '"Book Antiqua",Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif' => '"Book Antiqua",Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif',
                    '"Calisto MT","Bookman Old Style",Bookman,"Goudy Old Style",Garamond,"Hoefler Text","Bitstream Charter",Georgia,serif' => '"Calisto MT","Bookman Old Style",Bookman,"Goudy Old Style",Garamond,"Hoefler Text","Bitstream Charter",Georgia,serif',
                    'Cambria,Georgia,serif' => 'Cambria,Georgia,serif',
                    'Georgia,Times,"Times New Roman",serif' => 'Georgia,Times,"Times New Roman",serif',
                    '"Lucida Bright",Georgia,serif' => '"Lucida Bright",Georgia,serif',
                    'Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Georgia,serif' => 'Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Georgia,serif',
                    'Perpetua,Baskerville,"Big Caslon","Palatino Linotype",Palatino,"URW Palladio L","Nimbus Roman No9 L",serif' => 'Perpetua,Baskerville,"Big Caslon","Palatino Linotype",Palatino,"URW Palladio L","Nimbus Roman No9 L",serif',
                    'TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif' => 'TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif',
                ),
            )
        );

        //Tertiary Header Logo Tagline Font Size
        $wp_customize->add_setting(
            'tertiary_header_logo_tagline_font_size',
            array(
                'default' => '18',
            )
        );
        $wp_customize->add_control( 'tertiary_header_logo_tagline_font_size', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_logo',
            'label'       => 'Font Size',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 2,
            ),
        ) );

        //Tertiary Header Logo Tagline Font Weight
        $wp_customize->add_setting(
            'tertiary_header_logo_tagline_font_weight',
            array(
                'default' => 'normal',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_logo_tagline_font_weight',
            array(
                'type' => 'select',
                'label' => 'Font Weight',
                'section' => 'tertiary_header_logo',
                'choices' => array(
                    'normal' => 'Normal',
                    'bold' => 'Bold',
                    'light' => 'Light',
                ),
            )
        );

        //Tertiary Header Logo Tagline Font Transformation
        $wp_customize->add_setting(
            'tertiary_header_logo_tagline_font_transformation',
            array(
                'default' => 'none',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_logo_tagline_font_transformation',
            array(
                'type' => 'select',
                'label' => 'Font Transformation',
                'section' => 'tertiary_header_logo',
                'choices' => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                    'capitalize' => 'Capitalize',
                ),
            )
        );

        //Tertiary Header Logo Tagline Position
        $wp_customize->add_setting(
            'tertiary_header_logo_tagline_position'
        );
        $wp_customize->add_control(
            'tertiary_header_logo_tagline_position',
            array(
                'type' => 'checkbox',
                'label' => 'Display tagline on same line as title',
                'section' => 'tertiary_header_logo',
                'settings' => 'tertiary_header_logo_tagline_position',
            )
        );

        $wp_customize->add_section('tertiary_header_menu_styling', array('title' => 'Menu Styling','panel' => 'header_three','priority' => 30,));

        //Tertiary Header Menu Alignment Title
        $wp_customize->add_setting(
            'tertiary_header_menu_alignment_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'tertiary_header_menu_alignment_title',
            array(
                'label'	=> __( 'Menu Alignment' ),
                'section' => 'tertiary_header_menu_styling',
                'settings' => 'tertiary_header_menu_alignment_title',
            )
        ));

        //Tertiary Header Menu Alignment
        $wp_customize->add_setting(
            'tertiary_header_menu_alignment',
            array(
                'default' => 'right',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_menu_alignment',
            array(
                'type' => 'select',
                'label' => 'Menu Alignment',
                'section' => 'tertiary_header_menu_styling',
                'choices' => array(
                    'left' => 'Left',
                    'center' => 'Center',
                    'right' => 'Right',
                ),
            )
        );

        //Tertiary Header Menu Layout Title
        $wp_customize->add_setting(
            'tertiary_header_menu_layout',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'tertiary_header_menu_layout',
            array(
                'label'	=> __( 'Layout' ),
                'section' => 'tertiary_header_menu_styling',
                'settings' => 'tertiary_header_menu_layout',
            )
        ));

        //Tertiary Header Menu Height
        $wp_customize->add_setting(
            'tertiary_header_menu_height',
            array(
                'default' => '25',
            )
        );
        $wp_customize->add_control( 'tertiary_header_menu_height', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_menu_styling',
            'label'       => 'Height',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );

        //Tertiary Header Menu Spacing
        $wp_customize->add_setting(
            'tertiary_header_menu_spacing',
            array(
                'default' => '5',
            )
        );
        $wp_customize->add_control( 'tertiary_header_menu_spacing', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_menu_styling',
            'label'       => 'Button Spacing',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 25,
                'step'  => 1,
            ),
        ) );

        //Tertiary Header Menu Font Styling Title
        $wp_customize->add_setting(
            'tertiary_header_menu_styling_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'tertiary_header_menu_styling_title',
            array(
                'label'	=> __( 'Font Styling' ),
                'section' => 'tertiary_header_menu_styling',
                'settings' => 'tertiary_header_menu_styling_title',
            )
        ));

        //Tertiary Header Menu Link Color
        $wp_customize->add_setting(
            'tertiary_header_menu_link_color',
            array(
                'default' => '#FFF',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'tertiary_header_menu_link_color',
                array(
                    'label' => 'Font Color',
                    'section' => 'tertiary_header_menu_styling',
                    'settings' => 'tertiary_header_menu_link_color',
                )
            )
        );

        //Tertiary Header Menu Link font
        $wp_customize->add_setting(
            'tertiary_header_menu_fonts',
            array(
                'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_menu_fonts',
            array(
                'type' => 'select',
                'label' => 'Font Style',
                'section' => 'tertiary_header_menu_styling',
                'choices' => array(
                    'Arial,"Helvetica Neue",Helvetica,sans-serif' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
                    '"Arial Narrow",Arial,sans-serif' => '"Arial Narrow",Arial,sans-serif',
                    'Calibri,Candara,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Calibri,Candara,Segoe,"Segoe UI",Optima,Arial,sans-serif',
                    'Candara,Calibri,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Candara,Calibri,Segoe,"Segoe UI",Optima,Arial,sans-serif',
                    'Futura,"Trebuchet MS",Arial,sans-serif' => 'Futura,"Trebuchet MS",Arial,sans-serif',
                    'Geneva,Tahoma,Verdana,sans-serif' => 'Geneva,Tahoma,Verdana,sans-serif',
                    '"Gill Sans","Gill Sans MT",Calibri,sans-serif' => '"Gill Sans","Gill Sans MT",Calibri,sans-serif',
                    '"Helvetica Neue",Helvetica,Arial,sans-serif' => '"Helvetica Neue",Helvetica,Arial,sans-serif',
                    'Tahoma,Verdana,Segoe,sans-serif' => 'Tahoma,Verdana,Segoe,sans-serif',
                    '"Segoe UI",Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif' => '"Segoe UI",Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif',
                    '"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif' => '"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif',
                    'Verdana,Geneva,sans-serif' => 'Verdana,Geneva,sans-serif',
                    '"Big Caslon","Book Antiqua","Palatino Linotype",Georgia,serif' => '"Big Caslon","Book Antiqua","Palatino Linotype",Georgia,serif',
                    '"Book Antiqua",Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif' => '"Book Antiqua",Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif',
                    '"Calisto MT","Bookman Old Style",Bookman,"Goudy Old Style",Garamond,"Hoefler Text","Bitstream Charter",Georgia,serif' => '"Calisto MT","Bookman Old Style",Bookman,"Goudy Old Style",Garamond,"Hoefler Text","Bitstream Charter",Georgia,serif',
                    'Cambria,Georgia,serif' => 'Cambria,Georgia,serif',
                    'Georgia,Times,"Times New Roman",serif' => 'Georgia,Times,"Times New Roman",serif',
                    '"Lucida Bright",Georgia,serif' => '"Lucida Bright",Georgia,serif',
                    'Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Georgia,serif' => 'Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Georgia,serif',
                    'Perpetua,Baskerville,"Big Caslon","Palatino Linotype",Palatino,"URW Palladio L","Nimbus Roman No9 L",serif' => 'Perpetua,Baskerville,"Big Caslon","Palatino Linotype",Palatino,"URW Palladio L","Nimbus Roman No9 L",serif',
                    'TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif' => 'TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif',
                ),
            )
        );

        //Tertiary Header Menu Font Size
        $wp_customize->add_setting(
            'tertiary_header_menu_font_size',
            array(
                'default' => '14',
            )
        );
        $wp_customize->add_control( 'tertiary_header_menu_font_size', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_menu_styling',
            'label'       => 'Font Size',
            'input_attrs' => array(
                'min'   => 8,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );

        //Tertiary Header Menu Font Weight
        $wp_customize->add_setting(
            'tertiary_header_menu_font_weight',
            array(
                'default' => 'normal',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_menu_font_weight',
            array(
                'type' => 'select',
                'label' => 'Font Weight',
                'section' => 'tertiary_header_menu_styling',
                'choices' => array(
                    'normal' => 'Normal',
                    'bold' => 'Bold',
                    'light' => 'Light',
                ),
            )
        );

        //Tertiary Header Menu Font Transformation
        $wp_customize->add_setting(
            'tertiary_header_menu_font_transformation',
            array(
                'default' => 'none',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_menu_font_transformation',
            array(
                'type' => 'select',
                'label' => 'Font Transformation',
                'section' => 'tertiary_header_menu_styling',
                'choices' => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                    'capitalize' => 'Capitalize',
                ),
            )
        );

        //Tertiary Header Menu Link Hover Color
        $wp_customize->add_setting(
            'tertiary_header_menu_link_hover_color',
            array(
                'default' => '#CCC',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'tertiary_header_menu_link_hover_color',
                array(
                    'label' => 'Link Hover Color',
                    'section' => 'tertiary_header_menu_styling',
                    'settings' => 'tertiary_header_menu_link_hover_color',
                )
            )
        );

        //Tertiary Header Menu Link Decoration
        $wp_customize->add_setting(
            'tertiary_header_menu_link_decoration',
            array(
                'default' => 'none',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_menu_link_decoration',
            array(
                'type' => 'select',
                'label' => 'Link Decoration',
                'section' => 'tertiary_header_menu_styling',
                'choices' => array(
                    'none' => 'none',
                    'underline' => 'underline',
                    'overline' => 'overline',
                    'line-through' => 'line-through',
                    'initial' => 'initial',
                    'inherit' => 'inherit',
                ),
            )
        );

        //Tertiary Header Menu Link Alignment
        $wp_customize->add_setting(
            'tertiary_header_menu_link_alignment',
            array(
                'default' => 'center',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_menu_link_alignment',
            array(
                'type' => 'select',
                'label' => 'Text Alignment',
                'section' => 'tertiary_header_menu_styling',
                'choices' => array(
                    'center' => 'Center',
                    'left' => 'Left',
                    'right' => 'Right',
                ),
            )
        );

        //Tertiary Header Background Title
        $wp_customize->add_setting(
            'tertiary_header_menu_background_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'tertiary_header_menu_background_title',
            array(
                'label'	=> __( 'Background' ),
                'section' => 'tertiary_header_menu_styling',
                'settings' => 'tertiary_header_menu_background_title',
            )
        ));

        //Tertiary Header Menu Background Visibility
        $wp_customize->add_setting(
            'tertiary_header_menu_background_visible'
        );
        $wp_customize->add_control(
            'tertiary_header_menu_background_visible',
            array(
                'type' => 'checkbox',
                'label' => 'Disable Background Visibility',
                'section' => 'tertiary_header_menu_styling',
                'settings' => 'tertiary_header_menu_background_visible',
            )
        );

        //Tertiary Header Menu Background Color
        $wp_customize->add_setting(
            'tertiary_header_menu_background_color',
            array(
                'default' => '#9E9E9E',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'tertiary_header_menu_background_color',
                array(
                    'label' => 'Link Background Color',
                    'section' => 'tertiary_header_menu_styling',
                )
            )
        );

        //Tertiary Header Menu Background Image
        $wp_customize->add_setting( 'tertiary_header_menu_background_image' );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'tertiary_header_menu_background_image',
                array(
                    'label' => 'Link Background image',
                    'section' => 'tertiary_header_menu_styling',
                )
            )
        );

        //Tertiary Header Hover Background Color
        $wp_customize->add_setting(
            'tertiary_header_menu_hover_background_color',
            array(
                'default' => '#C7C7C7',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'tertiary_header_menu_hover_background_color',
                array(
                    'label' => 'Link Hover Background Color',
                    'section' => 'tertiary_header_menu_styling',
                )
            )
        );

        //Tertiary Header Hover Background Image
        $wp_customize->add_setting( 'tertiary_header_menu_hover_background_image' );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'tertiary_header_menu_hover_background_image',
                array(
                    'label' => 'Link Hover Background Image',
                    'section' => 'tertiary_header_menu_styling',
                )
            )
        );

        //Tertiary Header Menu Background Image position
        $wp_customize->add_setting(
            'tertiary_header_menu_background_image_position',
            array(
                'default' => 'initial',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_menu_background_image_position',
            array(
                'type' => 'select',
                'label' => 'Background Image Position',
                'section' => 'tertiary_header_menu_styling',
                'choices' => array(
                    'initial' => 'Initial',
                    'left top' => 'Top Left',
                    'left center' => 'Center Left',
                    'left bottom' => 'Bottom Left',
                    'right top' => 'Top Right',
                    'right center' => 'Center Right',
                    'right bottom' => 'Bottom Right',
                    'center top' => 'Top Center',
                    'center center' => 'Center Center',
                    'center bottom' => 'Bottom Center',
                ),
            )
        );

        //Tertiary Header Menu Background Image repeat
        $wp_customize->add_setting(
            'tertiary_header_menu_background_image_repeat',
            array(
                'default' => 'no-repeat',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_menu_background_image_repeat',
            array(
                'type' => 'select',
                'label' => 'Background Image Repetition',
                'section' => 'tertiary_header_menu_styling',
                'choices' => array(
                    'no-repeat' => 'No Repeat',
                    'repeat' => 'Repeat',
                    'repeat-x' => 'Repeat X',
                    'repeat-y' => 'Repeat Y',
                    'initial' => 'Initial',
                ),
            )
        );

        //Tertiary Header Menu Borders Title
        $wp_customize->add_setting(
            'tertiary_header_menu_borders_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'tertiary_header_menu_borders_title',
            array(
                'label'	=> __( 'Borders' ),
                'section' => 'tertiary_header_menu_styling',
                'settings' => 'tertiary_header_menu_borders_title',
            )
        ));

        //Tertiary Header Menu Border Color
        $wp_customize->add_setting(
            'tertiary_header_menu_border_color',
            array(
                'default' => '#000',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'tertiary_header_menu_border_color',
                array(
                    'label' => 'Border Color',
                    'section' => 'tertiary_header_menu_styling',
                    'settings' => 'tertiary_header_menu_border_color',
                )
            )
        );

        //Tertiary Header Menu Border Style
        $wp_customize->add_setting(
            'tertiary_header_menu_border_style',
            array(
                'default' => 'solid',
            )
        );
        $wp_customize->add_control(
            'tertiary_header_menu_border_style',
            array(
                'type' => 'select',
                'label' => 'Border Style',
                'section' => 'tertiary_header_menu_styling',
                'choices' => array(
                    'dotted' => 'Dotted',
                    'dashed' => 'Dashed',
                    'solid' => 'Solid',
                    'double' => 'Double',
                    'groove' => 'Groove',
                ),
            )
        );


        //Tertiary Header Menu Border Top
        $wp_customize->add_setting(
            'tertiary_header_menu_border_top',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_menu_border_top', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_menu_styling',
            'label'       => 'Top Border',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );

        //Tertiary Header Menu Border Bottom
        $wp_customize->add_setting(
            'tertiary_header_menu_border_bottom',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_menu_border_bottom', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_menu_styling',
            'label'       => 'Bottom Border',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );

        //Tertiary Header Menu Border Left
        $wp_customize->add_setting(
            'tertiary_header_menu_border_left',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_menu_border_left', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_menu_styling',
            'label'       => 'Left Border',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );

        //Tertiary Header Menu Border Right
        $wp_customize->add_setting(
            'tertiary_header_menu_border_right',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_menu_border_right', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_menu_styling',
            'label'       => 'Right Border',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 1,
            ),
        ) );

        //Tertiary Header Menu Border Radius
        $wp_customize->add_setting(
            'tertiary_header_menu_border_radius',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'tertiary_header_menu_border_radius', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'tertiary_header_menu_styling',
            'label'       => 'Rounded Border',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 50,
                'step'  => 2,
            ),
        ) );
?>
