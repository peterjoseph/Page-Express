<?php

$wp_customize->add_panel('right_sidebar', array('title' => __( 'Right Sidebar' ), 'priority' => 30,) );

        $wp_customize->add_section('right_sidebar_visible', array('title' => 'Right Sidebar Visibility','panel' => 'right_sidebar','priority' => 30,));


       //Right Sidebar Visibility
		$wp_customize->add_setting(
		    'right_sidebar_visibility',
		    array(
		        'default' => 'visible',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_visibility',
		    array(
		        'type' => 'select',
		        'label' => 'Right Sidebar',
		        'section' => 'right_sidebar_visible',
		        'choices' => array(
					'visible' => 'Visible Everywhere',
		            'hidden' => 'Hidden',
		            'homepage' => 'Homepage Only',
		            'page' => 'Pages Only',
					'posts' => 'Posts Only',
		        ),
		    )
		);

        $wp_customize->add_section('right_sidebar_layout', array('title' => 'Layout','panel' => 'right_sidebar','priority' => 30,));
        //Right Sidebar Layout Title
		$wp_customize->add_setting(
		    'right_sidebar_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_layout_title',
			array(
				'label'	=> __( 'Right Sidebar Layout' ),
				'section' => 'right_sidebar_layout',
				'settings' => 'right_sidebar_layout_title',
			)
		));

        //Right Sidebar Width % or px
		$wp_customize->add_setting(
		    'right_sidebar_width_option',
		    array(
		        'default' => 'fixed',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_width_option',
		    array(
		        'type' => 'select',
		        'label' => 'Sidebar Width (Fixed or Fluid)',
		        'section' => 'right_sidebar_layout',
		        'choices' => array(
					'fixed' => 'Fixed',
		            'fluid' => 'Fluid',
		        ),
		    )
		);



        //Right Sidebar Width Fixed
		$wp_customize->add_setting(
		    'right_sidebar_width_fixed',
		    array(
		        'default' => '30',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_width_fixed', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_layout',
			'label'       => 'Width [Fixed]',
			'input_attrs' => array(
				'min'   => 20,
				'max'   => 100,
				'step'  => 1,
			),
		) );

        //Right Sidebar Width Fluid
		$wp_customize->add_setting(
		    'right_sidebar_width_fluid',
		    array(
		        'default' => '30',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_width_fluid', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_layout',
			'label'       => 'Width [Fluid]',
			'input_attrs' => array(
				'min'   => 20,
				'max'   => 30,
				'step'  => 1,
			),
		) );


         //Right Sidebar Padding
		$wp_customize->add_setting(
		    'right_sidebar_layout_padding',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_layout_padding', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_layout',
			'label'       => 'Sidebar Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 40,
				'step'  => 1,
			),
		) );


        $wp_customize->add_section('right_sidebar_background', array('title' => 'Background','panel' => 'right_sidebar','priority' => 30,));

        //Right Sidebar Background Visibility
		$wp_customize->add_setting(
			'right_sidebar_background_visible'
		);
		$wp_customize->add_control(
		    'right_sidebar_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Sidebar Background',
				'section' => 'right_sidebar_background',
		        'settings' => 'right_sidebar_background_visible',
		    )
		);

		//Right Sidebar Background Color
		$wp_customize->add_setting(
		    'right_sidebar_background_color',
		    array(
		        'default' => '#F4F4F4',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'right_sidebar_background',
		            'settings' => 'right_sidebar_background_color',
		        )
		    )
		);

		//Right Sidebar Background Image
		$wp_customize->add_setting( 'right_sidebar_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'right_sidebar_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'right_sidebar_background',
		            'settings' => 'right_sidebar_background_image'
		        )
		    )
		);

		//Right Sidebar Background Image position
		$wp_customize->add_setting(
		    'right_sidebar_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'right_sidebar_background',
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

		//Right Sidebar Background Image repeat
		$wp_customize->add_setting(
		    'right_sidebar_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'right_sidebar_background',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);

		//Right Sidebar Background Image Type
		$wp_customize->add_setting(
		    'right_sidebar_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'right_sidebar_background',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);

        $wp_customize->add_section('right_sidebar_borders', array('title' => 'Borders','panel' => 'right_sidebar','priority' => 30,));

        //Right Sidebar Border Title
		$wp_customize->add_setting(
		    'right_sidebar_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_border_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'right_sidebar_borders',
				'settings' => 'right_sidebar_border_title',
			)
		));

		//Right Sidebar Border Color
		$wp_customize->add_setting(
		    'right_sidebar_border_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'right_sidebar_borders',
		            'settings' => 'right_sidebar_border_color',
		        )
		    )
		);

		//Right Sidebar Border Style
		$wp_customize->add_setting(
		    'right_sidebar_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'right_sidebar_borders',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);


		//Right Sidebar Border Top
		$wp_customize->add_setting(
		    'right_sidebar_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_borders',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Border Bottom
		$wp_customize->add_setting(
		    'right_sidebar_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_borders',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Border Left
		$wp_customize->add_setting(
		    'right_sidebar_border_left',
		    array(
		        'default' => '1',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_borders',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Border Right
		$wp_customize->add_setting(
		    'right_sidebar_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_borders',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Border Radius
		$wp_customize->add_setting(
		    'right_sidebar_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_borders',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

        $wp_customize->add_section('right_sidebar_padding', array('title' => 'Padding','panel' => 'right_sidebar','priority' => 30,));

        //Right Sidebar Padding Title
		$wp_customize->add_setting(
		    'right_sidebar_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_padding_title',
			array(
				'label'	=> __( 'Padding' ),
				'section' => 'right_sidebar_padding',
				'settings' => 'right_sidebar_padding_title',
			)
		));

		//Right Sidebar Padding Top
		$wp_customize->add_setting(
		    'right_sidebar_padding_top',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_padding',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

        //Right Sidebar Padding Bottom
		$wp_customize->add_setting(
		    'right_sidebar_padding_bottom',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_padding',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Padding Left
		$wp_customize->add_setting(
		    'right_sidebar_padding_left',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_padding',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );


		//Right Sidebar Padding Right
		$wp_customize->add_setting(
		    'right_sidebar_padding_right',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_padding',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

        $wp_customize->add_section('right_sidebar_widget_styling', array('title' => 'Widget Styling','panel' => 'right_sidebar','priority' => 30,));

        //Right Sidebar Grand Widget Styling Title
		$wp_customize->add_setting(
		    'right_sidebar_grand_widget_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'right_sidebar_grand_widget_styling_title',
			array(
				'label'	=> __( 'Widget Styling' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_grand_widget_styling_title',
			)
		));

		//Right Sidebar Widget Layout Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_layout_title',
			array(
				'label'	=> __( 'Layout' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_widgets_layout_title',
			)
		));

		//Right Sidebar Widget Header Visibility
		$wp_customize->add_setting(
			'right_sidebar_widgets_header_visibility'
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_header_visibility',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Widget Title',
				'section' => 'right_sidebar_widget_styling',
		        'settings' => 'right_sidebar_widgets_header_visibility',
		    )
		);

		//Right Sidebar Widget Title Styling Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_title_title',
			array(
				'label'	=> __( 'Title Font Styling' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_widgets_title_title',
			)
		));

		//Right Sidebar Widget Title Text Color
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_text_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_widgets_title_text_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'right_sidebar_widget_styling',
		            'settings' => 'right_sidebar_widgets_title_text_color',
		        )
		    )
		);

		//Right Sidebar Widget Title text font
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_title_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'right_sidebar_widget_styling',
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

		//Right Sidebar Widget Title Font Size
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_font_size',
		    array(
		        'default' => '18',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget Title Font Weight
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_font_weight',
		    array(
		        'default' => 'bold',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_title_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'right_sidebar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);

		//Right Sidebar Widget Title Font Alignment
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_font_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_title_font_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Font Alignment',
		        'section' => 'right_sidebar_widget_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);

		//Right Sidebar Widget Title Background Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_title_background_title',
			array(
				'label'	=> __( 'Title Background' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_widgets_title_background_title',
			)
		));

		//Right Sidebar Widget Title Background Visibility
		$wp_customize->add_setting(
			'right_sidebar_widgets_title_background_visible'
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_title_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Title Background',
				'section' => 'right_sidebar_widget_styling',
		        'settings' => 'right_sidebar_widgets_title_background_visible',
		    )
		);

		//Right Sidebar Widget Title Background Color
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_background_color',
		    array(
		        'default' => '#383838',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_widgets_title_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'right_sidebar_widget_styling',
		            'settings' => 'right_sidebar_widgets_title_background_color',
		        )
		    )
		);

		//Right Sidebar Widget Title Background Image
		$wp_customize->add_setting( 'right_sidebar_widgets_title_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'right_sidebar_widgets_title_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'right_sidebar_widget_styling',
		            'settings' => 'right_sidebar_widgets_title_background_image'
		        )
		    )
		);

		//Right Sidebar Widget Title Background Image position
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_title_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'right_sidebar_widget_styling',
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



		//Right Sidebar Widget Title Background Image repeat
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_title_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'right_sidebar_widget_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);

		//Right Sidebar Widget Title Background Image Type
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_title_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'right_sidebar_widget_styling',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);

		//Right Sidebar Widget Title Border Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_title_border_title',
			array(
				'label'	=> __( 'Title Borders' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_widgets_title_border_title',
			)
		));

		//Right Sidebar Widget Title Border Color
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_border_color',
		    array(
		        'default' => '#000000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_widgets_title_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'right_sidebar_widget_styling',
		            'settings' => 'right_sidebar_widgets_title_border_color',
		        )
		    )
		);

		//Right Sidebar Widget Title Border Style
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_title_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'right_sidebar_widget_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);


		//Right Sidebar Widget Title Border Top
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget Title Border Bottom
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget Title Border Left
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget Title Border Right
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget Title Border Radius
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget Title Padding Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_title_padding_title',
			array(
				'label'	=> __( 'Title Padding' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_widgets_title_padding_title',
			)
		));

		//Right Sidebar Widget Title Padding Top
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_padding_top',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget Title Padding Bottom
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_padding_bottom',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget Title Padding Left
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget Title Padding Right
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget Title Margins Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_margins_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_title_margins_title',
			array(
				'label'	=> __( 'Title Margins' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_widgets_title_margins_title',
			)
		));

		//Right Sidebar Widget Title Margin Top
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_margin_top',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Top Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );


		//Right Sidebar Widget Title Margin Bottom
		$wp_customize->add_setting(
		    'right_sidebar_widgets_title_margin_bottom',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_title_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Bottom Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget Content Styling Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_content_title',
			array(
				'label'	=> __( 'Content Font Styling' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_widgets_content_title',
			)
		));


		//Right Sidebar Widget Content Text Color
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_text_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_widgets_content_text_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'right_sidebar_widget_styling',
		            'settings' => 'right_sidebar_widgets_content_text_color',
		        )
		    )
		);

		//Right Sidebar Widget Content text font
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'right_sidebar_widget_styling',
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

		//Right Sidebar Widget Content Font Size
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_font_size',
		    array(
		        'default' => '14',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget Content Font Weight
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'right_sidebar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);

		//Right Sidebar Widget Content Font Alignment
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_font_alignment',
		    array(
		        'default' => 'left',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_font_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Font Alignment',
		        'section' => 'right_sidebar_widget_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);

		//Right Sidebar Content Link Color
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_link_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_widgets_content_link_color',
		        array(
		            'label' => 'Link Color',
		            'section' => 'right_sidebar_widget_styling',
		            'settings' => 'right_sidebar_widgets_content_link_color',
		        )
		    )
		);

		//Right Sidebar Content Link Decoration
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_link_decoration',
		    array(
		        'default' => 'underline',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'right_sidebar_widget_styling',
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

		//Right Sidebar Content Link Weight
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_link_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_link_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Link Weight',
		        'section' => 'right_sidebar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);


		//Right Sidebar Widget Content Background Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_content_background_title',
			array(
				'label'	=> __( 'Content Background' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_widgets_content_background_title',
			)
		));

		//Right Sidebar Widget Content Background Visibility
		$wp_customize->add_setting(
			'right_sidebar_widgets_content_background_visible'
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Content Background',
				'section' => 'right_sidebar_widget_styling',
		        'settings' => 'right_sidebar_widgets_content_background_visible',
		    )
		);

		//Right Sidebar Widget Content Background Color
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_background_color',
		    array(
		        'default' => '#575757',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_widgets_content_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'right_sidebar_widget_styling',
		            'settings' => 'right_sidebar_widgets_content_background_color',
		        )
		    )
		);

		//Right Sidebar Widget Content Background Image
		$wp_customize->add_setting( 'right_sidebar_widgets_content_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'right_sidebar_widgets_content_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'right_sidebar_widget_styling',
		            'settings' => 'right_sidebar_widgets_content_background_image'
		        )
		    )
		);

		//Right Sidebar Widget Content Background Image position
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'right_sidebar_widget_styling',
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

		//Right Sidebar Widget Content Background Image repeat
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'right_sidebar_widget_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);

		//Right Sidebar Widget Content Background Image Type
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'right_sidebar_widget_styling',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);

		//Right Sidebar Widget Content Border Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_content_border_title',
			array(
				'label'	=> __( 'Content Borders' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_widgets_content_border_title',
			)
		));

		//Right Sidebar Widget Title Border Color
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_border_color',
		    array(
		        'default' => '#000000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_widgets_content_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'right_sidebar_widget_styling',
		            'settings' => 'right_sidebar_widgets_content_border_color',
		        )
		    )
		);

		//Right Sidebar Widget Content Border Style
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'right_sidebar_widget_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);


		//Right Sidebar Widget Content Border Top
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget Content Border Bottom
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget Content Border Left
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget Content Border Right
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget Content Border Radius
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget Content Padding Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_content_padding_title',
			array(
				'label'	=> __( 'Content Padding' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_widgets_content_padding_title',
			)
		));

		//Right Sidebar Widget Content Padding Top
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_padding_top',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget Content Padding Bottom
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_padding_bottom',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget Content Padding Left
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_padding_left',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget Content Padding Right
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_padding_right',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget Content Margins Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_margins_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_content_margins_title',
			array(
				'label'	=> __( 'Content Margins' ),
				'section' => 'right_sidebar_widget_styling',
				'settings' => 'right_sidebar_widgets_content_margins_title',
			)
		));

		//Right Sidebar Widget Content Margin Top
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_margin_top',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Top Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );


		//Right Sidebar Widget Content Margin Bottom
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_margin_bottom',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_widget_styling',
			'label'       => 'Bottom Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

        $wp_customize->add_section('right_sidebar_menu_styling', array('title' => 'Menu Styling','panel' => 'right_sidebar','priority' => 30,));

        //Right Sidebar Menu Styling Title
		$wp_customize->add_setting(
		    'right_sidebar_grand_menu_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'right_sidebar_grand_widget_styling_title',
			array(
				'label'	=> __( 'Menu Styling' ),
				'section' => 'right_sidebar_menu_styling',
				'settings' => 'right_sidebar_grand_menu_styling_title',
			)
		));

		//Right Sidebar Menu Layout Title
		$wp_customize->add_setting(
		    'right_sidebar_menu_layout',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_menu_layout',
			array(
				'label'	=> __( 'Layout' ),
				'section' => 'right_sidebar_menu_styling',
				'settings' => 'right_sidebar_menu_layout',
			)
		));

		//Right Sidebar Menu Height
		$wp_customize->add_setting(
		    'right_sidebar_menu_height',
		    array(
		        'default' => '25',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_menu_height', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_menu_styling',
			'label'       => 'Height',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Menu Spacing
		$wp_customize->add_setting(
		    'right_sidebar_menu_spacing',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_menu_spacing', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_menu_styling',
			'label'       => 'Button Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );

		//Right Sidebar Font Styling Title
		$wp_customize->add_setting(
		    'right_sidebar_menu_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_menu_styling_title',
			array(
				'label'	=> __( 'Font Styling' ),
				'section' => 'right_sidebar_menu_styling',
				'settings' => 'right_sidebar_menu_styling_title',
			)
		));

		//Right Sidebar Menu Link Color
		$wp_customize->add_setting(
		    'right_sidebar_menu_link_color',
		    array(
		        'default' => '#333',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_menu_link_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'right_sidebar_menu_styling',
		            'settings' => 'right_sidebar_menu_link_color',
		        )
		    )
		);

		//Right Sidebar Menu Link font
		$wp_customize->add_setting(
		    'right_sidebar_menu_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_menu_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'right_sidebar_menu_styling',
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

		//Right Sidebar Menu Font Weight
		$wp_customize->add_setting(
		    'right_sidebar_menu_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_menu_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'right_sidebar_menu_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);

		//Right Sidebar Menu Link Hover Color
		$wp_customize->add_setting(
		    'right_sidebar_menu_link_hover_color',
		    array(
		        'default' => '#317dbf',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_menu_link_hover_color',
		        array(
		            'label' => 'Link Hover Color',
		            'section' => 'right_sidebar_menu_styling',
		            'settings' => 'right_sidebar_menu_link_hover_color',
		        )
		    )
		);

		//Right Sidebar Menu Link Decoration
		$wp_customize->add_setting(
		    'right_sidebar_menu_link_decoration',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_menu_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'right_sidebar_menu_styling',
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

		//Right Sidebar Menu Link Alignment
		$wp_customize->add_setting(
		    'right_sidebar_menu_link_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_menu_link_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Text Alignment',
		        'section' => 'right_sidebar_menu_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);

		//Right Sidebar Background Title
		$wp_customize->add_setting(
		    'right_sidebar_menu_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_menu_background_title',
			array(
				'label'	=> __( 'Background' ),
				'section' => 'right_sidebar_menu_styling',
				'settings' => 'right_sidebar_menu_background_title',
			)
		));

		//Right Sidebar Menu Background Visibility
		$wp_customize->add_setting(
			'right_sidebar_menu_background_visible'
		);
		$wp_customize->add_control(
		    'right_sidebar_menu_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Background Visibility',
				'section' => 'right_sidebar_menu_styling',
		        'settings' => 'right_sidebar_menu_background_visible',
		    )
		);

		//Right Sidebar Menu Background Color
		$wp_customize->add_setting(
		    'right_sidebar_menu_background_color',
		    array(
		        'default' => '#9E9E9E',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_menu_background_color',
		        array(
		            'label' => 'Link Background Color',
		            'section' => 'right_sidebar_menu_styling',
		        )
		    )
		);

		//Right Sidebar Menu Background Image
		$wp_customize->add_setting( 'right_sidebar_menu_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'right_sidebar_menu_background_image',
		        array(
		            'label' => 'Link Background image',
		            'section' => 'right_sidebar_menu_styling',
		        )
		    )
		);

		//Right Sidebar Hover Background Color
		$wp_customize->add_setting(
		    'right_sidebar_menu_hover_background_color',
		    array(
		        'default' => '#C7C7C7',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_menu_hover_background_color',
		        array(
		            'label' => 'Link Hover Background Color',
		            'section' => 'right_sidebar_menu_styling',
		        )
		    )
		);

		//Right Sidebar Hover Background Image
		$wp_customize->add_setting( 'right_sidebar_menu_hover_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'right_sidebar_menu_hover_background_image',
		        array(
		            'label' => 'Link Hover Background Image',
		            'section' => 'right_sidebar_menu_styling',
		        )
		    )
		);

		//Right Sidebar Menu Background Image position
		$wp_customize->add_setting(
		    'right_sidebar_menu_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_menu_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'right_sidebar_menu_styling',
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

		//Right Sidebar Menu Background Image repeat
		$wp_customize->add_setting(
		    'right_sidebar_menu_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_menu_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'right_sidebar_menu_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);

		//Right Sidebar Menu Borders Title
		$wp_customize->add_setting(
		    'right_sidebar_menu_borders_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_menu_borders_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'right_sidebar_menu_styling',
				'settings' => 'right_sidebar_menu_borders_title',
			)
		));

		//Right Sidebar Menu Border Color
		$wp_customize->add_setting(
		    'right_sidebar_menu_border_color',
		    array(
		        'default' => '#000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_menu_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'right_sidebar_menu_styling',
		            'settings' => 'right_sidebar_menu_border_color',
		        )
		    )
		);

		//Right Sidebar Menu Border Style
		$wp_customize->add_setting(
		    'right_sidebar_menu_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_menu_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'right_sidebar_menu_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);


		//Right Sidebar Menu Border Top
		$wp_customize->add_setting(
		    'right_sidebar_menu_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_menu_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_menu_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Menu Border Bottom
		$wp_customize->add_setting(
		    'right_sidebar_menu_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_menu_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_menu_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Menu Border Left
		$wp_customize->add_setting(
		    'right_sidebar_menu_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_menu_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_menu_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Menu Border Right
		$wp_customize->add_setting(
		    'right_sidebar_menu_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_menu_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_menu_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Menu Border Radius
		$wp_customize->add_setting(
		    'right_sidebar_menu_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_menu_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_menu_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		$wp_customize->add_section('right_sidebar_list_styling', array('title' => 'List Styling','panel' => 'right_sidebar','priority' => 30,));

		//Right Sidebar Widget List Icon Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_icon_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_content_lists_icon_title',
			array(
				'label'	=> __( 'Icon' ),
				'section' => 'right_sidebar_list_styling',
				'settings' => 'right_sidebar_widgets_content_lists_icon_title',
			)
		));

		//Right Sidebar Widget List Icon Type
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_icon',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_lists_icon',
		    array(
		        'type' => 'select',
		        'label' => 'List Icon',
		        'section' => 'right_sidebar_list_styling',
		        'choices' => array(
					'none' => 'None',
					'square' => 'Square',
					'disc' => 'Disc',
					'circle' => 'Circle',
		        ),
		    )
		);

		//Right Sidebar Widget List Padding Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_content_lists_padding_title',
			array(
				'label'	=> __( 'Spacing' ),
				'section' => 'right_sidebar_list_styling',
				'settings' => 'right_sidebar_widgets_content_lists_padding_title',
			)
		));

		//Right Sidebar Widget List Padding Top
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_padding_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_lists_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_list_styling',
			'label'       => 'Top Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget List Padding Bottom
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_padding_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_lists_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_list_styling',
			'label'       => 'Bottom Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget List Padding Left
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_lists_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_list_styling',
			'label'       => 'Left Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget List Padding Right
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_lists_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_list_styling',
			'label'       => 'Right Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Right Sidebar Widget List Border Title
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'right_sidebar_widgets_content_lists_border_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'right_sidebar_list_styling',
				'settings' => 'right_sidebar_widgets_content_lists_border_title',
			)
		));

		//Right Sidebar Widget List Border Color
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_border_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'right_sidebar_widgets_content_lists_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'right_sidebar_list_styling',
		            'settings' => 'right_sidebar_widgets_content_lists_border_color',
		        )
		    )
		);

		//Right Sidebar Widget List Border Style
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'right_sidebar_widgets_content_lists_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'right_sidebar_list_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);


		//Right Sidebar Widget List Border Top
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_lists_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_list_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget List Border Bottom
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_lists_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_list_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget List Border Left
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_lists_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_list_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget List Border Right
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_lists_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_list_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Right Sidebar Widget List Border Radius
		$wp_customize->add_setting(
		    'right_sidebar_widgets_content_lists_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'right_sidebar_widgets_content_lists_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'right_sidebar_list_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

?>
