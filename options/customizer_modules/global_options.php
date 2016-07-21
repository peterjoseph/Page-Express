<?php
		/** REGISTER GLOBAL OPTIONS PANEL **/
		$wp_customize->add_panel( 
			'globaloptions', array('title' => __( 'Advanced Options' ),
		) );
		
		/** REGISTER GlOBAL OPTIONS SECTIONS **/
	    
		$wp_customize->add_section('g_appearance', array('title' => 'Appearance','panel' => 'globaloptions','priority' => 43,));
		$wp_customize->add_section('g_scripts', array('title' => 'Scripts','panel' => 'globaloptions','priority' => 43,));
		$wp_customize->add_section('g_forms', array('title' => 'HTML Form Styling','panel' => 'globaloptions','priority' => 43,));
		
		/** REGISTER GLOBAL OPTIONS **/
		
		//Sitewide CSS
		$wp_customize->add_setting(
		    'sitewide_css',
		    array(
		        'default' => '',
                'sanitize_callback' => 'sitewide_css_sanitization',
		    )
		);
		$wp_customize->add_control(
		    'sitewide_css',
		    array(
		        'label' => 'Custom CSS',
				'description' => 'You can extend the appearance of your theme using custom CSS. Styles added in the box below will be applied across the whole website.',
		        'section' => 'g_appearance',
		        'type' => 'textarea',
		    )
		);
        
		/* SANITIZATION */
		function sitewide_css_sanitization( $input ) {
			return wp_kses_post( force_balance_tags( $input ) );
		}
		
		//Analytics
		$wp_customize->add_setting(
		    'g_analytics',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control(
		    'g_analytics',
		    array(
		        'label' => 'Google Analytics',
				'description' => 'Enter your tracking code for Google Analytics or a related analytics service. The code will be inserted above the head tag.',
		        'section' => 'g_scripts',
		        'type' => 'textarea',
		    )
		);
        
        //Line Space
		$wp_customize->add_setting(
		    'scripts_line_space',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Line_Space( 
			$wp_customize, 
			'scripts_line_space', 
			array(
				'section' => 'g_scripts',
				'settings' => 'scripts_line_space',
			) 
		));
        
        //Javascript
		$wp_customize->add_setting(
		    'c_javascript',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control(
		    'c_javascript',
		    array(
		        'label' => 'Custom Javascript',
				'description' => 'Enter your custom javascript code. Object Theme includes JQuery support by default. The code will be inserted above the head tag.',
		        'section' => 'g_scripts',
		        'type' => 'textarea',
		    )
		);

		/* FORM STYLING */

		//Form Button Styling Title
		$wp_customize->add_setting(
			'g_form_button_styling_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'g_form_button_styling_title',
			array(
				'label'	=> __( 'Buttons' ),
				'section' => 'g_forms',
				'settings' => 'g_form_button_styling_title',
			)
		));

		//Form Button Styling Typography Title
		$wp_customize->add_setting(
			'g_form_button_styling_typography_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_button_styling_typography_title',
			array(
				'label'	=> __( 'Typography' ),
				'section' => 'g_forms',
				'settings' => 'g_form_button_styling_typography_title',
			)
		));

		//Form Button Styling Typography Link Color
		$wp_customize->add_setting(
			'g_form_button_styling_typography_color',
			array(
				'default' => '#FFF',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_button_styling_typography_color',
				array(
					'label' => 'Font Color',
					'section' => 'g_forms',
					'settings' => 'g_form_button_styling_typography_color',
				)
			)
		);

		//Form Button Styling Typography Link font
		$wp_customize->add_setting(
			'g_form_button_styling_typography_fonts',
			array(
				'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
			)
		);
		$wp_customize->add_control(
			'g_form_button_styling_typography_fonts',
			array(
				'type' => 'select',
				'label' => 'Font Style',
				'section' => 'g_forms',
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

		//Form Button Styling Typography Link Size
		$wp_customize->add_setting(
			'g_form_button_styling_typography_font_size',
			array(
				'default' => '14',
			)
		);
		$wp_customize->add_control( 'g_form_button_styling_typography_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 60,
				'step'  => 2,
			),
		) );

		//Form Button Styling Typography Link Weight
		$wp_customize->add_setting(
			'g_form_button_styling_typography_font_weight',
			array(
				'default' => 'normal',
			)
		);
		$wp_customize->add_control(
			'g_form_button_styling_typography_font_weight',
			array(
				'type' => 'select',
				'label' => 'Font Weight',
				'section' => 'g_forms',
				'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
				),
			)
		);

		//Form Button Styling Typography Link Hover Color
		$wp_customize->add_setting(
			'g_form_button_styling_typography_font_hover_color',
			array(
				'default' => '#FFF',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_button_styling_typography_font_hover_color',
				array(
					'label' => 'Font Hover Color',
					'section' => 'g_forms',
					'settings' => 'g_form_button_styling_typography_font_hover_color',
				)
			)
		);

		//Form Button Styling Typography Font Focus Color
		$wp_customize->add_setting(
			'g_form_button_styling_typography_font_focus_color',
			array(
				'default' => '#FFF',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_button_styling_typography_font_focus_color',
				array(
					'label' => 'Font Focus Color',
					'section' => 'g_forms',
					'settings' => 'g_form_button_styling_typography_font_focus_color',
				)
			)
		);

		//Form Button Styling Typography Link Decoration
		$wp_customize->add_setting(
			'g_form_button_styling_typography_font_decoration',
			array(
				'default' => 'none',
			)
		);
		$wp_customize->add_control(
			'g_form_button_styling_typography_font_decoration',
			array(
				'type' => 'select',
				'label' => 'Font Decoration',
				'section' => 'g_forms',
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

		//Form Button Styling Background Title
		$wp_customize->add_setting(
			'g_form_button_styling_background_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_button_styling_background_title',
			array(
				'label'	=> __( 'Background' ),
				'section' => 'g_forms',
				'settings' => 'g_form_button_styling_background_title',
			)
		));

		//Form Button Styling Background Color
		$wp_customize->add_setting(
			'g_form_button_styling_background_color',
			array(
				'default' => '#4CAF50',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_button_styling_background_color',
				array(
					'label' => 'Background Color',
					'section' => 'g_forms',
				)
			)
		);

		//Form Button Styling Background Image
		$wp_customize->add_setting( 'g_form_button_styling_background_image' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'g_form_button_styling_background_image',
				array(
					'label' => 'Background image',
					'section' => 'g_forms',
				)
			)
		);

		//Form Button Styling Background Hover Color
		$wp_customize->add_setting(
			'g_form_button_styling_background_hover_color',
			array(
				'default' => '#4CAF50',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_button_styling_background_hover_color',
				array(
					'label' => 'Hover Background Color',
					'section' => 'g_forms',
				)
			)
		);

		//Form Button Styling Background Hover Image
		$wp_customize->add_setting( 'g_form_button_styling_background_hover_image' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'g_form_button_styling_background_hover_image',
				array(
					'label' => 'Hover Background Image',
					'section' => 'g_forms',
				)
			)
		);

		//Form Button Styling Focus Background Color
		$wp_customize->add_setting(
			'g_form_button_styling_background_focus_color',
			array(
				'default' => '#4CAF50',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_button_styling_background_focus_color',
				array(
					'label' => 'Focus Background Color',
					'section' => 'g_forms',
				)
			)
		);

		//Form Button Styling Focus Background Image
		$wp_customize->add_setting( 'g_form_textinput_styling_background_focus_image' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'g_form_textinput_styling_background_focus_image',
				array(
					'label' => 'Focus Background image',
					'section' => 'g_forms',
				)
			)
		);

		//Form Button Styling Background Image position
		$wp_customize->add_setting(
			'g_form_button_styling_background_image_position',
			array(
				'default' => 'initial',
			)
		);
		$wp_customize->add_control(
			'g_form_button_styling_background_image_position',
			array(
				'type' => 'select',
				'label' => 'Background Image Position',
				'section' => 'g_forms',
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

		//Form Button Styling Background Image repeat
		$wp_customize->add_setting(
			'g_form_button_styling_background_image_repeat',
			array(
				'default' => 'no-repeat',
			)
		);
		$wp_customize->add_control(
			'g_form_button_styling_background_image_repeat',
			array(
				'type' => 'select',
				'label' => 'Background Image Repetition',
				'section' => 'g_forms',
				'choices' => array(
					'no-repeat' => 'No Repeat',
					'repeat' => 'Repeat',
					'repeat-x' => 'Repeat X',
					'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
				),
			)
		);

		//Form Button Styling Borders Title
		$wp_customize->add_setting(
			'g_form_button_styling_borders_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_button_styling_borders_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'g_forms',
				'settings' => 'g_form_button_styling_borders_title',
			)
		));

		//Form Button Styling Borders Color
		$wp_customize->add_setting(
			'g_form_button_styling_borders_color',
			array(
				'default' => '#398F3D',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_button_styling_borders_color',
				array(
					'label' => 'Border Color',
					'section' => 'g_forms',
					'settings' => 'g_form_button_styling_borders_color',
				)
			)
		);

		//Form Button Styling Borders Style
		$wp_customize->add_setting(
			'g_form_button_styling_borders_style',
			array(
				'default' => 'solid',
			)
		);
		$wp_customize->add_control(
			'g_form_button_styling_borders_style',
			array(
				'type' => 'select',
				'label' => 'Border Style',
				'section' => 'g_forms',
				'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
				),
			)
		);


		//Form Button Styling Borders Top
		$wp_customize->add_setting(
			'g_form_button_styling_borders_top',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'g_form_button_styling_borders_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 30,
				'step'  => 1,
			),
		) );

		//Form Button Styling Borders Bottom
		$wp_customize->add_setting(
			'g_form_button_styling_borders_bottom',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'g_form_button_styling_borders_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 30,
				'step'  => 1,
			),
		) );

		//Form Button Styling Borders Left
		$wp_customize->add_setting(
			'g_form_button_styling_borders_left',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'g_form_button_styling_borders_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 30,
				'step'  => 1,
			),
		) );

		//Form Button Styling Borders Right
		$wp_customize->add_setting(
			'g_form_button_styling_borders_right',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'g_form_button_styling_borders_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 30,
				'step'  => 1,
			),
		) );

		//Form Button Styling Borders Radius
		$wp_customize->add_setting(
			'g_form_button_styling_borders_radius',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'g_form_button_styling_borders_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Form Button Styling Padding Title
		$wp_customize->add_setting(
			'g_form_button_styling_padding_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_button_styling_padding_title',
			array(
				'label'	=> __( 'Padding' ),
				'section' => 'g_forms',
				'settings' => 'g_form_button_styling_padding_title',
			)
		));

		//Form Button Styling Padding Top
		$wp_customize->add_setting(
			'g_form_button_styling_padding_top',
			array(
				'default' => '10',
			)
		);
		$wp_customize->add_control( 'g_form_button_styling_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 60,
				'step'  => 2,
			),
		) );

		//Form Button Styling Padding Bottom
		$wp_customize->add_setting(
			'g_form_button_styling_padding_bottom',
			array(
				'default' => '10',
			)
		);
		$wp_customize->add_control( 'g_form_button_styling_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 60,
				'step'  => 2,
			),
		) );

		//Form Button Styling Padding Left
		$wp_customize->add_setting(
			'g_form_button_styling_padding_left',
			array(
				'default' => '25',
			)
		);
		$wp_customize->add_control( 'g_form_button_styling_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 100,
				'step'  => 2,
			),
		) );

		//Form Button Styling Padding Right
		$wp_customize->add_setting(
			'g_form_button_styling_padding_right',
			array(
				'default' => '25',
			)
		);
		$wp_customize->add_control( 'g_form_button_styling_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 100,
				'step'  => 2,
			),
		) );

		//Form Text Input Styling Title
		$wp_customize->add_setting(
			'g_form_textinput_styling_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'g_form_textinput_styling_title',
			array(
				'label'	=> __( 'Text Input' ),
				'section' => 'g_forms',
				'settings' => 'g_form_textinput_styling_title',
			)
		));

		//Form Text Input Styling Typography Title
		$wp_customize->add_setting(
			'g_form_textinput_styling_typography_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_textinput_styling_typography_title',
			array(
				'label'	=> __( 'Typography' ),
				'section' => 'g_forms',
				'settings' => 'g_form_textinput_styling_typography_title',
			)
		));

		//Form Text Input Styling Typography Font Color
		$wp_customize->add_setting(
			'g_form_textinput_styling_typography_color',
			array(
				'default' => '#333',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_textinput_styling_typography_color',
				array(
					'label' => 'Font Color',
					'section' => 'g_forms',
					'settings' => 'g_form_textinput_styling_typography_color',
				)
			)
		);

		//Form Text Input Styling Typography Link font
		$wp_customize->add_setting(
			'g_form_textinput_styling_typography_fonts',
			array(
				'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
			)
		);
		$wp_customize->add_control(
			'g_form_textinput_styling_typography_fonts',
			array(
				'type' => 'select',
				'label' => 'Font Style',
				'section' => 'g_forms',
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

		//Form Text Input Styling Typography Link Size
		$wp_customize->add_setting(
			'g_form_textinput_styling_typography_font_size',
			array(
				'default' => '14',
			)
		);
		$wp_customize->add_control( 'g_form_textinput_styling_typography_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 60,
				'step'  => 2,
			),
		) );

		//Form Text Input Styling Typography Link Weight
		$wp_customize->add_setting(
			'g_form_textinput_styling_typography_font_weight',
			array(
				'default' => 'normal',
			)
		);
		$wp_customize->add_control(
			'g_form_textinput_styling_typography_font_weight',
			array(
				'type' => 'select',
				'label' => 'Font Weight',
				'section' => 'g_forms',
				'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
				),
			)
		);

		//Form Text Input Styling Typography Font Hover Color
		$wp_customize->add_setting(
			'g_form_textinput_styling_typography_font_hover_color',
			array(
				'default' => '#333',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_textinput_styling_typography_font_hover_color',
				array(
					'label' => 'Font Hover Color',
					'section' => 'g_forms',
					'settings' => 'g_form_textinput_styling_typography_font_hover_color',
				)
			)
		);

		//Form Text Input Styling Typography Font Focus Color
		$wp_customize->add_setting(
			'g_form_textinput_styling_typography_font_focus_color',
			array(
				'default' => '#333',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_textinput_styling_typography_font_focus_color',
				array(
					'label' => 'Font Focus Color',
					'section' => 'g_forms',
					'settings' => 'g_form_textinput_styling_typography_font_focus_color',
				)
			)
		);

		//Form Text Input Styling Typography Link Decoration
		$wp_customize->add_setting(
			'g_form_textinput_styling_typography_font_decoration',
			array(
				'default' => 'none',
			)
		);
		$wp_customize->add_control(
			'g_form_textinput_styling_typography_font_decoration',
			array(
				'type' => 'select',
				'label' => 'Font Decoration',
				'section' => 'g_forms',
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

		//Form Text Input Styling Background Title
		$wp_customize->add_setting(
			'g_form_textinput_styling_background_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_textinput_styling_background_title',
			array(
				'label'	=> __( 'Background' ),
				'section' => 'g_forms',
				'settings' => 'g_form_textinput_styling_background_title',
			)
		));

		//Form Text Input Styling Background Color
		$wp_customize->add_setting(
			'g_form_textinput_styling_background_color',
			array(
				'default' => '#FFF',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_textinput_styling_background_color',
				array(
					'label' => 'Background Color',
					'section' => 'g_forms',
				)
			)
		);

		//Form Text Input Styling Background Image
		$wp_customize->add_setting( 'g_form_textinput_styling_background_image' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'g_form_textinput_styling_background_image',
				array(
					'label' => 'Background image',
					'section' => 'g_forms',
				)
			)
		);

		//Form Text Input Styling Background Color
		$wp_customize->add_setting(
			'g_form_textinput_styling_background_hover_color',
			array(
				'default' => '#F3F3F3',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_textinput_styling_background_hover_color',
				array(
					'label' => 'Hover Background Color',
					'section' => 'g_forms',
				)
			)
		);

		//Form Text Input Styling Background Image
		$wp_customize->add_setting( 'g_form_textinput_styling_background_hover_image' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'g_form_textinput_styling_background_hover_image',
				array(
					'label' => 'Hover Background Image',
					'section' => 'g_forms',
				)
			)
		);

		//Form Text Input Styling Focus Background Color
		$wp_customize->add_setting(
			'g_form_textinput_styling_background_focus_color',
			array(
				'default' => '#F2F2F2',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_textinput_styling_background_focus_color',
				array(
					'label' => 'Focus Background Color',
					'section' => 'g_forms',
				)
			)
		);

		//Form Text Input Styling Focus Background Image
		$wp_customize->add_setting( 'g_form_textinput_styling_background_focus_image' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'g_form_textinput_styling_background_focus_image',
				array(
					'label' => 'Focus Background image',
					'section' => 'g_forms',
				)
			)
		);

		//Form Text Input Styling Background Image position
		$wp_customize->add_setting(
			'g_form_textinput_styling_background_image_position',
			array(
				'default' => 'initial',
			)
		);
		$wp_customize->add_control(
			'g_form_textinput_styling_background_image_position',
			array(
				'type' => 'select',
				'label' => 'Background Image Position',
				'section' => 'g_forms',
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

		//Form Text Input Styling Background Image repeat
		$wp_customize->add_setting(
			'g_form_textinput_styling_background_image_repeat',
			array(
				'default' => 'no-repeat',
			)
		);
		$wp_customize->add_control(
			'g_form_textinput_styling_background_image_repeat',
			array(
				'type' => 'select',
				'label' => 'Background Image Repetition',
				'section' => 'g_forms',
				'choices' => array(
					'no-repeat' => 'No Repeat',
					'repeat' => 'Repeat',
					'repeat-x' => 'Repeat X',
					'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
				),
			)
		);

		//Form Text Input Styling Borders Title
		$wp_customize->add_setting(
			'g_form_textinput_styling_borders_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_textinput_styling_borders_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'g_forms',
				'settings' => 'g_form_textinput_styling_borders_title',
			)
		));

		//Form Text Input Styling Borders Color
		$wp_customize->add_setting(
			'g_form_textinput_styling_borders_color',
			array(
				'default' => '#333',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_textinput_styling_borders_color',
				array(
					'label' => 'Border Color',
					'section' => 'g_forms',
					'settings' => 'g_form_textinput_styling_borders_color',
				)
			)
		);

		//Form Text Input Styling Borders Style
		$wp_customize->add_setting(
			'g_form_textinput_styling_borders_style',
			array(
				'default' => 'solid',
			)
		);
		$wp_customize->add_control(
			'g_form_textinput_styling_borders_style',
			array(
				'type' => 'select',
				'label' => 'Border Style',
				'section' => 'g_forms',
				'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
				),
			)
		);


		//Form Text Input Styling Borders Top
		$wp_customize->add_setting(
			'g_form_textinput_styling_borders_top',
			array(
				'default' => '1',
			)
		);
		$wp_customize->add_control( 'g_form_textinput_styling_borders_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 20,
				'step'  => 1,
			),
		) );

		//Form Text Input Styling Borders Bottom
		$wp_customize->add_setting(
			'g_form_textinput_styling_borders_bottom',
			array(
				'default' => '1',
			)
		);
		$wp_customize->add_control( 'g_form_textinput_styling_borders_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 20,
				'step'  => 1,
			),
		) );

		//Form Text Input Styling Borders Left
		$wp_customize->add_setting(
			'g_form_textinput_styling_borders_left',
			array(
				'default' => '1',
			)
		);
		$wp_customize->add_control( 'g_form_textinput_styling_borders_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 20,
				'step'  => 1,
			),
		) );

		//Form Text Input Styling Borders Right
		$wp_customize->add_setting(
			'g_form_textinput_styling_borders_right',
			array(
				'default' => '1',
			)
		);
		$wp_customize->add_control( 'g_form_textinput_styling_borders_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 20,
				'step'  => 1,
			),
		) );

		//Form Text Input Styling Borders Radius
		$wp_customize->add_setting(
			'g_form_textinput_styling_borders_radius',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'g_form_textinput_styling_borders_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 30,
				'step'  => 2,
			),
		) );

		//Form Text Input Styling Padding Title
		$wp_customize->add_setting(
			'g_form_textinput_styling_padding_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_textinput_styling_padding_title',
			array(
				'label'	=> __( 'Padding' ),
				'section' => 'g_forms',
				'settings' => 'g_form_textinput_styling_padding_title',
			)
		));

		//Form Text Input Styling Padding Top
		$wp_customize->add_setting(
			'g_form_textinput_styling_padding_top',
			array(
				'default' => '10',
			)
		);
		$wp_customize->add_control( 'g_form_textinput_styling_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 40,
				'step'  => 2,
			),
		) );

		//Form Text Input Styling Padding Bottom
		$wp_customize->add_setting(
			'g_form_textinput_styling_padding_bottom',
			array(
				'default' => '10',
			)
		);
		$wp_customize->add_control( 'g_form_textinput_styling_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 40,
				'step'  => 2,
			),
		) );

		//Form Text Input Styling Padding Left
		$wp_customize->add_setting(
			'g_form_textinput_styling_padding_left',
			array(
				'default' => '10',
			)
		);
		$wp_customize->add_control( 'g_form_textinput_styling_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 40,
				'step'  => 2,
			),
		) );

		//Form Text Input Styling Padding Right
		$wp_customize->add_setting(
			'g_form_textinput_styling_padding_right',
			array(
				'default' => '10',
			)
		);
		$wp_customize->add_control( 'g_form_textinput_styling_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 40,
				'step'  => 2,
			),
		) );

		//Form Select Box Styling Title
		$wp_customize->add_setting(
			'g_form_selectbox_styling_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'g_form_selectbox_styling_title',
			array(
				'label'	=> __( 'Select Boxs' ),
				'section' => 'g_forms',
				'settings' => 'g_form_selectbox_styling_title',
			)
		));

		//Form Select Box Styling Typography Title
		$wp_customize->add_setting(
			'g_form_selectbox_styling_typography_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_selectbox_styling_typography_title',
			array(
				'label'	=> __( 'Typography' ),
				'section' => 'g_forms',
				'settings' => 'g_form_selectbox_styling_typography_title',
			)
		));

		//Form Select Box Styling Typography Font Color
		$wp_customize->add_setting(
			'g_form_selectbox_styling_typography_color',
			array(
				'default' => '#333',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_selectbox_styling_typography_color',
				array(
					'label' => 'Font Color',
					'section' => 'g_forms',
					'settings' => 'g_form_selectbox_styling_typography_color',
				)
			)
		);

		//Form Select Box Styling Typography font
		$wp_customize->add_setting(
			'g_form_selectbox_styling_typography_fonts',
			array(
				'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
			)
		);
		$wp_customize->add_control(
			'g_form_selectbox_styling_typography_fonts',
			array(
				'type' => 'select',
				'label' => 'Font Style',
				'section' => 'g_forms',
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

		//Form Select Box Styling Typography Font Size
		$wp_customize->add_setting(
			'g_form_selectbox_styling_typography_font_size',
			array(
				'default' => '14',
			)
		);
		$wp_customize->add_control( 'g_form_selectbox_styling_typography_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 60,
				'step'  => 2,
			),
		) );

		//Form Select Box Styling Typography Font Weight
		$wp_customize->add_setting(
			'g_form_selectbox_styling_typography_font_weight',
			array(
				'default' => 'normal',
			)
		);
		$wp_customize->add_control(
			'g_form_selectbox_styling_typography_font_weight',
			array(
				'type' => 'select',
				'label' => 'Font Weight',
				'section' => 'g_forms',
				'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
				),
			)
		);

		//Form Select Box Styling Typography Font Decoration
		$wp_customize->add_setting(
			'g_form_selectbox_styling_typography_font_decoration',
			array(
				'default' => 'none',
			)
		);
		$wp_customize->add_control(
			'g_form_selectbox_styling_typography_font_decoration',
			array(
				'type' => 'select',
				'label' => 'Font Decoration',
				'section' => 'g_forms',
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

		//Form Select Box Styling Background Title
		$wp_customize->add_setting(
			'g_form_selectbox_styling_background_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_selectbox_styling_background_title',
			array(
				'label'	=> __( 'Background' ),
				'section' => 'g_forms',
				'settings' => 'g_form_selectbox_styling_background_title',
			)
		));

		//Form Select Box Styling Background Color
		$wp_customize->add_setting(
			'g_form_selectbox_styling_background_color',
			array(
				'default' => '#F3F3F3',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_selectbox_styling_background_color',
				array(
					'label' => 'Background Color',
					'section' => 'g_forms',
				)
			)
		);

		//Form Select Box Styling Borders Title
		$wp_customize->add_setting(
			'g_form_selectbox_styling_borders_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_selectbox_styling_borders_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'g_forms',
				'settings' => 'g_form_selectbox_styling_borders_title',
			)
		));

		//Form Select Box Styling Borders Color
		$wp_customize->add_setting(
			'g_form_selectbox_styling_borders_color',
			array(
				'default' => '#333',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'g_form_selectbox_styling_borders_color',
				array(
					'label' => 'Border Color',
					'section' => 'g_forms',
					'settings' => 'g_form_selectbox_styling_borders_color',
				)
			)
		);

		//Form Select Box Styling Borders Style
		$wp_customize->add_setting(
			'g_form_selectbox_styling_borders_style',
			array(
				'default' => 'solid',
			)
		);
		$wp_customize->add_control(
			'g_form_selectbox_styling_borders_style',
			array(
				'type' => 'select',
				'label' => 'Border Style',
				'section' => 'g_forms',
				'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
				),
			)
		);


		//Form Select Box Styling Borders Top
		$wp_customize->add_setting(
			'g_form_selectbox_styling_borders_top',
			array(
				'default' => '1',
			)
		);
		$wp_customize->add_control( 'g_form_selectbox_styling_borders_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 30,
				'step'  => 1,
			),
		) );

		//Form Select Box Styling Borders Bottom
		$wp_customize->add_setting(
			'g_form_selectbox_styling_borders_bottom',
			array(
				'default' => '1',
			)
		);
		$wp_customize->add_control( 'g_form_selectbox_styling_borders_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 30,
				'step'  => 1,
			),
		) );

		//Form Select Box Styling Borders Left
		$wp_customize->add_setting(
			'g_form_selectbox_styling_borders_left',
			array(
				'default' => '1',
			)
		);
		$wp_customize->add_control( 'g_form_selectbox_styling_borders_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 30,
				'step'  => 1,
			),
		) );

		//Form Select Box Styling Borders Right
		$wp_customize->add_setting(
			'g_form_selectbox_styling_borders_right',
			array(
				'default' => '1',
			)
		);
		$wp_customize->add_control( 'g_form_selectbox_styling_borders_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 30,
				'step'  => 1,
			),
		) );

		//Form Select Box Styling Borders Radius
		$wp_customize->add_setting(
			'g_form_selectbox_styling_borders_radius',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'g_form_selectbox_styling_borders_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Form Select Box Styling Padding Title
		$wp_customize->add_setting(
			'g_form_selectbox_styling_padding_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'g_form_selectbox_styling_padding_title',
			array(
				'label'	=> __( 'Padding' ),
				'section' => 'g_forms',
				'settings' => 'g_form_selectbox_styling_padding_title',
			)
		));

		//Form Select Box Styling Padding Top
		$wp_customize->add_setting(
			'g_form_selectbox_styling_padding_top',
			array(
				'default' => '10',
			)
		);
		$wp_customize->add_control( 'g_form_selectbox_styling_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 60,
				'step'  => 2,
			),
		) );

		//Form Select Box Styling Padding Bottom
		$wp_customize->add_setting(
			'g_form_selectbox_styling_padding_bottom',
			array(
				'default' => '10',
			)
		);
		$wp_customize->add_control( 'g_form_selectbox_styling_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 60,
				'step'  => 2,
			),
		) );

		//Form Select Box Styling Padding Left
		$wp_customize->add_setting(
			'g_form_selectbox_styling_padding_left',
			array(
				'default' => '50',
			)
		);
		$wp_customize->add_control( 'g_form_selectbox_styling_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 100,
				'step'  => 2,
			),
		) );

		//Form Select Box Styling Padding Right
		$wp_customize->add_setting(
			'g_form_selectbox_styling_padding_right',
			array(
				'default' => '50',
			)
		);
		$wp_customize->add_control( 'g_form_selectbox_styling_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'g_forms',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 5,
				'max'   => 100,
				'step'  => 2,
			),
		) );

?>