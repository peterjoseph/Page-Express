<?php

	$wp_customize->add_panel('upper_unibar', array('title' => __( 'Upper Uni-Bar' ), 'priority' => 30,) );

	$wp_customize->add_section('upper_uni_visibility', array('title' => 'Visibility','panel' => 'upper_unibar','priority' => 30,));

	/** UPPER UNI-BAR VISIBILITY **/
	
	//Upper Uni-Bar Visibility Title
	$wp_customize->add_setting(
		'upper_unibar_visibility_title',
		array(
			'default' => '',
						'sanitize_callback' => 'pe_sanitize_header_title',
		)
	);
	$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
		$wp_customize,
		'upper_unibar_visibility_title',
		array(
			'label'	=> __( 'Visibility' ),
			'section' => 'upper_uni_visibility',
			'settings' => 'upper_unibar_visibility_title',
		)
	));

	//Upper Uni-Bar Visibility
	$wp_customize->add_setting(
		'upper_unibar_visibility',
		array(
			'default' => 'visible',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'upper_unibar_visibility',
		array(
			'type' => 'select',
			'section' => 'upper_uni_visibility',
			'choices' => array(
				'visible' => 'Visible Everywhere',
				'hidden' => 'Hidden',
				'homepage' => 'Homepage Only',
				'page' => 'Pages Only',
				'posts' => 'Posts Only',
			),
		)
	);

    $wp_customize->add_section('upper_unibar_layout', array('title' => 'Layout','panel' => 'upper_unibar','priority' => 30,));

    /** UPPER UNI-BAR LAYOUT **/
	
	//Upper Unibar Layout Title
	$wp_customize->add_setting(
		'upper_unibar_grand_layout_title',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_header_title',
		)
	);
	$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
		$wp_customize,
		'upper_unibar_grand_layout_title',
		array(
			'label'	=> __( 'Layout' ),
			'section' => 'upper_unibar_layout',
			'settings' => 'upper_unibar_grand_layout_title',
		)
	));

	//Upper Uni-Bar Width % or px
	$wp_customize->add_setting(
		'upper_unibar_width_option',
		array(
			'default' => 'fluid',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		new WP_button_select(
			$wp_customize,
			'upper_unibar_width_option',
			array(
				'settings'		=> 'upper_unibar_width_option',
				'label' => 'Uni-Bar Width',
				'section' => 'upper_unibar_layout',
				'description'	=> __( 'Assign fixed or fluid width to Uni-Bar' ),
				'choices' => array(
					'fixed' => 'Fixed',
					'fluid' => 'Fluid',
				),
			)
		)
	);

	//Upper Uni-Bar Width Fixed
	$wp_customize->add_setting(
		'upper_unibar_width_fixed',
		array(
			'default' => '1100',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
		new WP_range(
			$wp_customize,
			'upper_unibar_width_fixed', 
			array(
				'settings'    => 'upper_unibar_width_fixed',
				'section'     => 'upper_unibar_layout',
				'type' => __(' pixels'),
				'input_attrs' => array(
					'min'   => 800,
					'max'   => 1400,
					'step'  => 2,
				),
			)
		)
	);

	//Upper Uni-Bar Width Fluid
	$wp_customize->add_setting(
		'upper_unibar_width_fluid',
		array(
			'default' => '100',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control( 
		new WP_range(
			$wp_customize,
			'upper_unibar_width_fluid', 
			array(
				'section'     => 'upper_unibar_layout',
				'settings'    => 'upper_unibar_width_fluid',
				'type' => __(" percent"),
				'input_attrs' => array(
					'min'   => 50,
					'max'   => 100,
					'step'  => 2,
				),
			)
		) 
	);

	//Upper Uni-bar Alignment
	$wp_customize->add_setting(
		'upper_unibar_alignment',
		array(
			'default' => 'center',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		new WP_button_select(
			$wp_customize,
			'upper_unibar_alignment',
			array(
				'settings'    => 'upper_unibar_alignment',
				'section'     => 'upper_unibar_layout',
				'label' => 'Uni-Bar Alignment',
				'description'	=> __( 'Change alignment of Uni-Bar relative to rest of page' ),
				'choices' => array(
					'left' => 'Left',
					'center' => 'Center',
					'right' => 'Right',
				),
			)
		)
	);

	//Line Space
	$wp_customize->add_setting(
		'upper_unibar_layout_space_one',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_line_space',
		)
	);
	$wp_customize->add_control( new WP_Line_Space(
		$wp_customize,
		'upper_unibar_layout_space_one',
		array(
			'section' => 'upper_unibar_layout',
			'settings' => 'upper_unibar_layout_space_one',
		)
	));

	//Upper Uni-Bar Content Width % or px
	$wp_customize->add_setting(
		'upper_unibar_content_width_option',
		array(
			'default' => 'fluid',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		new WP_button_select(
			$wp_customize,
			'upper_unibar_content_width_option',
			array(
				'settings'		=> 'upper_unibar_content_width_option',
				'section'		=> 'upper_unibar_layout',
				'label'			=> __( 'Content Width'),
				'description'	=> __( 'Assign fixed or fluid width to content inside Uni-Bar. Content width may appear smaller if size entered is greater than width of header.' ),
				'choices'		=> array(
					'fixed' => 'Fixed',
					'fluid' => 'Fluid',
				)
			)
		)
	);

	//Upper Uni-Bar Content Width Fixed
	$wp_customize->add_setting(
		'upper_unibar_content_width_fixed',
		array(
			'default' => '1000',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
		new WP_range(
			$wp_customize,
			'upper_unibar_content_width_fixed', array(
				'section'     => 'upper_unibar_layout',
				'settings'    => 'upper_unibar_content_width_fixed',
				'type' => __(" pixels"),
				'input_attrs' => array(
					'min'   => 800,
					'max'   => 1400,
					'step'  => 2,
				),
			)
		) );

	//Upper Uni-Bar Content Width Fluid
	$wp_customize->add_setting(
		'upper_unibar_content_width_fluid',
		array(
			'default' => '100',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
		new WP_range(
			$wp_customize,
			'upper_unibar_content_width_fluid', array(
				'section'     => 'upper_unibar_layout',
				'settings'    => 'upper_unibar_content_width_fluid',
				'type' => __(" percent"),
				'input_attrs' => array(
					'min'   => 50,
					'max'   => 100,
					'step'  => 2,
				),
			)
		) );

	//Upper Uni-bar Content Alignment
	$wp_customize->add_setting(
		'upper_unibar_content_alignment',
		array(
			'default' => 'center',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		new WP_button_select(
			$wp_customize,
			'upper_unibar_content_alignment',
			array(
				'settings'		=> 'upper_unibar_content_alignment',
				'section'		=> 'upper_unibar_layout',
				'label'			=> __( 'Content Alignment'),
				'description'	=> __( 'Change alignment of content inside Uni-Bar' ),
				'choices'		=> array(
					'left' => 'Left',
					'center' => 'Center',
					'right' => 'Right',
				)
			)
		)
	);

        $wp_customize->add_section('upper_unibar_background', array('title' => 'Background','panel' => 'upper_unibar','priority' => 30,));

        //Upper Uni-bar Background Title
		$wp_customize->add_setting(
		    'upper_unibar_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'upper_unibar_background_title',
			array(
				'label'	=> __( 'Background' ),
				'section' => 'upper_unibar_background',
				'settings' => 'upper_unibar_background_title',
			)
		));

		//Upper Uni-bar Background Visibility
		$wp_customize->add_setting(
			'upper_unibar_background_visible',
			array(
				'sanitize_callback' => 'pe_sanitize_checkbox',
			)
		);
		$wp_customize->add_control(
			'upper_unibar_background_visible',
			array(
				'type' => 'checkbox',
				'label' => 'Disable Uni-bar Background',
				'section' => 'upper_unibar_background',
				'description'	=> __( 'Remove background and make Uni-Bar transparent' ),
				'settings' => 'upper_unibar_background_visible',
			)
		);

		//Line Space
		$wp_customize->add_setting(
			'upper_unibar_layout_space_two',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_line_space',
			)
		);
		$wp_customize->add_control( new WP_Line_Space(
			$wp_customize,
			'upper_unibar_layout_space_two',
			array(
				'section' => 'upper_unibar_background',
				'settings' => 'upper_unibar_layout_space_two',
			)
		));

		//Upper Uni-bar Background Color
		$wp_customize->add_setting(
			'upper_unibar_background_color',
			array(
				'default' => '#FFF',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'upper_unibar_background_color',
				array(
					'label' => 'Background Color',
					'section' => 'upper_unibar_background',
					'settings' => 'upper_unibar_background_color',
				)
			)
		);

		//Upper Uni-bar Background Image
		$wp_customize->add_setting( 'upper_unibar_background_image',
			array(
				'sanitize_callback' => 'pe_sanitize_image',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upper_unibar_background_image',
				array(
					'label' => 'Background Image',
					'section' => 'upper_unibar_background',
					'settings' => 'upper_unibar_background_image'
				)
			)
		);

		//Upper Uni-bar Background Image position
		$wp_customize->add_setting(
			'upper_unibar_background_image_position',
			array(
				'default' => 'left top',
				'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			'upper_unibar_background_image_position',
			array(
				'type' => 'select',
				'label' => 'Background Image Position',
				'description'	=> __( 'Assign background image starting position in Uni-Bar' ),
				'section' => 'upper_unibar_background',
				'choices' => array(
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

		//Upper Uni-bar Background Image repeat
		$wp_customize->add_setting(
			'upper_unibar_background_image_repeat',
			array(
				'default' => 'no-repeat',
				'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			'upper_unibar_background_image_repeat',
			array(
				'type' => 'select',
				'label' => 'Background Image Repetition',
				'section' => 'upper_unibar_background',
				'description'	=> __( 'Control background image repetition in Uni-Bar' ),
				'choices' => array(
					'no-repeat' => 'No Repeat',
					'repeat' => 'Repeat',
					'repeat-x' => 'Repeat Horizontally',
					'repeat-y' => 'Repeat Vertically',
				),
			)
		);

		//Upper Uni-bar Background Image Type
		$wp_customize->add_setting(
		    'upper_unibar_background_image_type',
		    array(
		        'default' => 'initial',
				'sanitize_callback' => 'pe_sanitize_select',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'upper_unibar_background',
				'description'	=> __( 'Position background image in Uni-Bar' ),
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image to fit inside',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);

        $wp_customize->add_section('upper_unibar_borders', array('title' => 'Borders','panel' => 'upper_unibar','priority' => 30,));

        //Upper Uni-bar Border Title
		$wp_customize->add_setting(
		    'upper_unibar_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'upper_unibar_border_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'upper_unibar_borders',
				'settings' => 'upper_unibar_border_title',
			)
		));

		//Upper Uni-bar Border Style
		$wp_customize->add_setting(
        'upper_unibar_border_style',
        array(
            'default' => 'none',
			'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			'upper_unibar_border_style',
			array(
				'type' => 'select',
				'label' => 'Border',
				'section' => 'upper_unibar_borders',
				'description'	=> __( 'Select border style to display around Uni-Bar' ),
				'choices' => array(
					'none' => 'None',
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
				),
			)
		);

		//Upper Uni-bar Border Color
		$wp_customize->add_setting(
			'upper_unibar_border_color',
			array(
				'default' => '#CCC',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'upper_unibar_border_color',
				array(
					'label' => 'Border Color',
					'section' => 'upper_unibar_borders',
					'settings' => 'upper_unibar_border_color',
				)
			)
		);

		//Upper Uni-bar Border Top
		$wp_customize->add_setting(
			'upper_unibar_border_top',
			array(
				'default' => '0',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'upper_unibar_border_top', array(
					'priority'    => 10,
					'section'     => 'upper_unibar_borders',
					'label'       => 'Top Border',
					'type' => __(" pixels"),
					'input_attrs' => array(
						'min'   => 0,
						'max'   => 50,
						'step'  => 1,
					),
				)
			) );

		//Upper Uni-bar Border Bottom
		$wp_customize->add_setting(
			'upper_unibar_border_bottom',
			array(
				'default' => '0',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'upper_unibar_border_bottom', array(
					'priority'    => 10,
					'section'     => 'upper_unibar_borders',
					'label'       => 'Bottom Border',
					'type' => __(" pixels"),
					'input_attrs' => array(
						'min'   => 0,
						'max'   => 50,
						'step'  => 1,
					),
				)
			) );

		//Upper Uni-bar Border Left
		$wp_customize->add_setting(
			'upper_unibar_border_left',
			array(
				'default' => '0',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'upper_unibar_border_left', array(
					'priority'    => 10,
					'section'     => 'upper_unibar_borders',
					'label'       => 'Left Border',
					'type' => __(" pixels"),
					'input_attrs' => array(
						'min'   => 0,
						'max'   => 50,
						'step'  => 1,
					),
				)
			) );

		//Upper Uni-bar Border Right
		$wp_customize->add_setting(
			'upper_unibar_border_right',
			array(
				'default' => '0',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'upper_unibar_border_right', array(
					'priority'    => 10,
					'section'     => 'upper_unibar_borders',
					'label'       => 'Right Border',
					'type' => __(" pixels"),
					'input_attrs' => array(
						'min'   => 0,
						'max'   => 50,
						'step'  => 1,
					),
				)
			) );

		//Upper Uni-bar Border Radius
		$wp_customize->add_setting(
			'upper_unibar_border_radius',
			array(
				'default' => '0',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'upper_unibar_border_radius', array(
					'priority'    => 10,
					'section'     => 'upper_unibar_borders',
					'label'       => 'Border Rounding',
					'type' => __(" pixels"),
					'input_attrs' => array(
						'min'   => 0,
						'max'   => 50,
						'step'  => 1,
					),
				)
			) );

        $wp_customize->add_section('upper_unibar_padding', array('title' => 'Inner Spacing','panel' => 'upper_unibar','priority' => 30,));

        //Upper Uni-bar Padding Title
		$wp_customize->add_setting(
			'upper_unibar_padding_title',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_header_title',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'upper_unibar_padding_title',
			array(
				'label'	=> __( 'Inner Spacing' ),
				'section' => 'upper_unibar_padding',
				'settings' => 'upper_unibar_padding_title',
			)
		));

		//Upper Uni-bar Padding Top
		$wp_customize->add_setting(
			'upper_unibar_padding_top',
			array(
				'default' => '0',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'upper_unibar_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_padding',
			'label'       => 'Top Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
			)
		) );

		//Upper Uni-bar Padding Bottom
		$wp_customize->add_setting(
			'upper_unibar_padding_bottom',
			array(
				'default' => '0',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'upper_unibar_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_padding',
			'label'       => 'Bottom Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
			)
		) );

		//Upper Uni-bar Padding Left
		$wp_customize->add_setting(
			'upper_unibar_padding_left',
			array(
				'default' => '0',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'upper_unibar_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_padding',
			'label'       => 'Left Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
			)
		) );

		//Upper Uni-bar Padding Right
		$wp_customize->add_setting(
			'upper_unibar_padding_right',
			array(
				'default' => '0',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'upper_unibar_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_padding',
			'label'       => 'Right Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
			)
		) );

        $wp_customize->add_section('upper_unibar_margins', array('title' => 'Outer Spacing','panel' => 'upper_unibar','priority' => 30,));

        //Upper Uni-bar Margins Title
		$wp_customize->add_setting(
			'upper_unibar_margins_title',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_header_title',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'upper_unibar_margins_title',
			array(
				'label'	=> __( 'Outer Spacing' ),
				'section' => 'upper_unibar_margins',
				'settings' => 'upper_unibar_margins_title',
			)
		));

		//Upper Uni-bar Margin Top
		$wp_customize->add_setting(
			'upper_unibar_margin_top',
			array(
				'default' => '0',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'upper_unibar_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_margins',
			'label'       => 'Top Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
			)
		) );

		//Upper Uni-bar Margin Bottom
		$wp_customize->add_setting(
			'upper_unibar_margin_bottom',
			array(
				'default' => '0',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'upper_unibar_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_margins',
			'label'       => 'Bottom Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
			)
		) );


        $wp_customize->add_section('upper_unibar_menu_styling', array('title' => 'Menu Styling','panel' => 'upper_unibar','priority' => 30,));


        //Upper Uni-bar Grand Menu Styling Title
		$wp_customize->add_setting(
		    'upper_unibar_grand_menu_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'upper_unibar_grand_menu_styling_title',
			array(
				'label'	=> __( 'Menu Styling' ),
				'section' => 'upper_unibar_menu_styling',
				'settings' => 'upper_unibar_grand_menu_styling_title',
			)
		));


        //Upper Uni-bar Menu Type
		$wp_customize->add_setting(
		    'upper_unibar_menu_type',
		    array(
		        'default' => 'horizontal',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_menu_type',
		    array(
		        'type' => 'select',
		        'label' => 'Menu Type',
		        'section' => 'upper_unibar_menu_styling',
		        'choices' => array(
					'horizontal' => 'Horizontal',
					'vertical' => 'Vertical',
		        ),
		    )
		);


		//Upper Uni-bar Vertical Menu Layout Title
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_layout',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_vertical_menu_layout',
			array(
				'label'	=> __( 'Vertical Layout' ),
				'section' => 'upper_unibar_menu_styling',
				'settings' => 'upper_unibar_vertical_menu_layout',
			)
		));


		//Upper Uni-bar Vertical Menu Height
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_height',
		    array(
		        'default' => '25',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_vertical_menu_height', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Height',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Vertical Menu Width
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_width',
		    array(
		        'default' => '30',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_vertical_menu_width', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Width',
			'input_attrs' => array(
				'min'   => 30,
				'max'   => 100,
				'step'  => 10,
			),
		) );

		//Upper Uni-bar Vertical Menu Spacing
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_spacing',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_vertical_menu_spacing', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Button Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Vertical Font Styling Title
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_vertical_menu_styling_title',
			array(
				'label'	=> __( 'Font Styling' ),
				'section' => 'upper_unibar_menu_styling',
				'settings' => 'upper_unibar_vertical_menu_styling_title',
			)
		));

		//Upper Uni-bar Vertical Menu Link Color
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_link_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_vertical_menu_link_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'upper_unibar_menu_styling',
		            'settings' => 'upper_unibar_vertical_menu_link_color',
		        )
		    )
		);

		//Upper Uni-bar Vertical Menu Link font
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_vertical_menu_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'upper_unibar_menu_styling',
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

		//Upper Uni-bar Vertical Menu Font Weight
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_vertical_menu_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'upper_unibar_menu_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);

		//Upper Uni-bar Vertical Menu Link Hover Color
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_link_hover_color',
		    array(
		        'default' => '#317dbf',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_vertical_menu_link_hover_color',
		        array(
		            'label' => 'Link Hover Color',
		            'section' => 'upper_unibar_menu_styling',
		            'settings' => 'upper_unibar_vertical_menu_link_hover_color',
		        )
		    )
		);

		//Upper Uni-bar Vertical Menu Link Decoration
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_link_decoration',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_vertical_menu_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'upper_unibar_menu_styling',
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

		//Upper Uni-bar Vertical Menu Link Alignment
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_link_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_vertical_menu_link_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Text Alignment',
		        'section' => 'upper_unibar_menu_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);

		//Upper Uni-bar Vertical Background Title
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_vertical_menu_background_title',
			array(
				'label'	=> __( 'Background' ),
				'section' => 'upper_unibar_menu_styling',
				'settings' => 'upper_unibar_vertical_menu_background_title',
			)
		));

		//Upper Uni-bar Vertical Menu Background Visibility
		$wp_customize->add_setting(
			'upper_unibar_vertical_menu_background_visible'
		);
		$wp_customize->add_control(
		    'upper_unibar_vertical_menu_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Background Visibility',
				'section' => 'upper_unibar_menu_styling',
		        'settings' => 'upper_unibar_vertical_menu_background_visible',
		    )
		);

		//Upper Uni-bar Vertical Menu Background Color
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_background_color',
		    array(
		        'default' => '#333',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_vertical_menu_background_color',
		        array(
		            'label' => 'Link Background Color',
		            'section' => 'upper_unibar_menu_styling',
		        )
		    )
		);

		//Upper Uni-bar Vertical Menu Background Image
		$wp_customize->add_setting( 'upper_unibar_vertical_menu_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'upper_unibar_vertical_menu_background_image',
		        array(
		            'label' => 'Link Background image',
		            'section' => 'upper_unibar_menu_styling',
		        )
		    )
		);

		//Upper Uni-bar Vertical Hover Background Color
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_hover_background_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_vertical_menu_hover_background_color',
		        array(
		            'label' => 'Link Hover Background Color',
		            'section' => 'upper_unibar_menu_styling',
		        )
		    )
		);

		//Upper Uni-bar Vertical Hover Background Image
		$wp_customize->add_setting( 'upper_unibar_vertical_menu_hover_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'upper_unibar_vertical_menu_hover_background_image',
		        array(
		            'label' => 'Link Hover Background Image',
		            'section' => 'upper_unibar_menu_styling',
		        )
		    )
		);

		//Upper Uni-bar Vertical Menu Background Image position
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_vertical_menu_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'upper_unibar_menu_styling',
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

		//Upper Uni-bar Vertical Menu Background Image repeat
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_vertical_menu_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'upper_unibar_menu_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);

		//Upper Uni-bar Vertical Menu Borders Title
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_borders_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_vertical_menu_borders_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'upper_unibar_menu_styling',
				'settings' => 'upper_unibar_vertical_menu_borders_title',
			)
		));

		//Upper Uni-bar Vertical Menu Border Color
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_border_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_vertical_menu_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'upper_unibar_menu_styling',
		            'settings' => 'upper_unibar_vertical_menu_border_color',
		        )
		    )
		);

		//Upper Uni-bar Vertical Menu Border Style
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_vertical_menu_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'upper_unibar_menu_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);


		//Upper Uni-bar Vertical Menu Border Top
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_vertical_menu_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Vertical Menu Border Bottom
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_vertical_menu_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Vertical Menu Border Left
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_vertical_menu_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Vertical Menu Border Right
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_vertical_menu_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Vertical Menu Border Radius
		$wp_customize->add_setting(
		    'upper_unibar_vertical_menu_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_vertical_menu_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Uni-bar Horizontal Menu Layout Title
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_layout',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_horizontal_menu_layout',
			array(
				'label'	=> __( 'Horizontal Layout' ),
				'section' => 'upper_unibar_menu_styling',
				'settings' => 'upper_unibar_horizontal_menu_layout',
			)
		));

		//Upper Uni-bar Horizontal Menu Height
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_height',
		    array(
		        'default' => '20',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_horizontal_menu_height', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Height',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Horizontal Menu Width
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_width',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_horizontal_menu_width', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Width',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Horizontal Menu Spacing
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_spacing',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_horizontal_menu_spacing', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Link Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );

		//Footer Font Styling Title
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_horizontal_menu_styling_title',
			array(
				'label'	=> __( 'Font Styling' ),
				'section' => 'upper_unibar_menu_styling',
				'settings' => 'upper_unibar_horizontal_menu_styling_title',
			)
		));

		//Upper Uni-bar Horizontal Menu Link Color
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_link_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_horizontal_menu_link_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'upper_unibar_menu_styling',
		            'settings' => 'upper_unibar_horizontal_menu_link_color',
		        )
		    )
		);

		//Upper Uni-bar Horizontal Menu Link font
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_horizontal_menu_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'upper_unibar_menu_styling',
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

		//Upper Uni-bar Horizontal Menu Font Weight
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_horizontal_menu_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'upper_unibar_menu_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);

		//Upper Uni-bar Horizontal Menu Link Hover Color
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_link_hover_color',
		    array(
		        'default' => '#317dbf',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_horizontal_menu_link_hover_color',
		        array(
		            'label' => 'Link Hover Color',
		            'section' => 'upper_unibar_menu_styling',
		            'settings' => 'upper_unibar_horizontal_menu_link_hover_color',
		        )
		    )
		);

		//Upper Uni-bar Horizontal Menu Link Decoration
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_link_decoration',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_horizontal_menu_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'upper_unibar_menu_styling',
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

		//Upper Uni-bar Background Title
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_horizontal_menu_background_title',
			array(
				'label'	=> __( 'Background' ),
				'section' => 'upper_unibar_menu_styling',
				'settings' => 'upper_unibar_horizontal_menu_background_title',
			)
		));

		//Upper Uni-bar Horizontal Menu Background Visibility
		$wp_customize->add_setting(
			'upper_unibar_horizontal_menu_background_visible'
		);
		$wp_customize->add_control(
		    'upper_unibar_horizontal_menu_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Background Visibility',
				'section' => 'upper_unibar_menu_styling',
		        'settings' => 'upper_unibar_horizontal_menu_background_visible',
		    )
		);

		//Upper Uni-bar Horizontal Menu Background Color
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_background_color',
		    array(
		        'default' => '#333',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_horizontal_menu_background_color',
		        array(
		            'label' => 'Link Background Color',
		            'section' => 'upper_unibar_menu_styling',
		        )
		    )
		);

		//Upper Uni-bar Horizontal Menu Background Image
		$wp_customize->add_setting( 'upper_unibar_horizontal_menu_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'upper_unibar_horizontal_menu_background_image',
		        array(
		            'label' => 'Link Background image',
		            'section' => 'upper_unibar_menu_styling',
		        )
		    )
		);

		//Upper Uni-bar Hover Background Color
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_hover_background_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_horizontal_menu_hover_background_color',
		        array(
		            'label' => 'Link Hover Background Color',
		            'section' => 'upper_unibar_menu_styling',
		        )
		    )
		);

		//Upper Uni-bar Hover Background Image
		$wp_customize->add_setting( 'upper_unibar_horizontal_menu_hover_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'upper_unibar_horizontal_menu_hover_background_image',
		        array(
		            'label' => 'Link Hover Background Image',
		            'section' => 'upper_unibar_menu_styling',
		        )
		    )
		);

		//Upper Uni-bar Horizontal Menu Background Image position
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_horizontal_menu_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'upper_unibar_menu_styling',
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

		//Upper Uni-bar Horizontal Menu Background Image repeat
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_horizontal_menu_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'upper_unibar_menu_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);

		//Upper Uni-bar Horizontal Menu Borders Title
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_borders_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_horizontal_menu_borders_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'upper_unibar_menu_styling',
				'settings' => 'upper_unibar_horizontal_menu_borders_title',
			)
		));

		//Upper Uni-bar Horizontal Menu Border Color
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_border_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_horizontal_menu_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'upper_unibar_menu_styling',
		            'settings' => 'upper_unibar_horizontal_menu_border_color',
		        )
		    )
		);

		//Upper Uni-bar Horizontal Menu Border Style
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_horizontal_menu_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'upper_unibar_menu_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);


		//Upper Uni-bar Horizontal Menu Border Top
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_horizontal_menu_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Horizontal Menu Border Bottom
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_horizontal_menu_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Horizontal Menu Border Left
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_horizontal_menu_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Horizontal Menu Border Right
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_horizontal_menu_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Horizontal Menu Border Radius
		$wp_customize->add_setting(
		    'upper_unibar_horizontal_menu_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_horizontal_menu_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_menu_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );


        $wp_customize->add_section('upper_unibar_widget_styling', array('title' => 'Widget Styling','panel' => 'upper_unibar','priority' => 30,));

        //Upper Uni-bar Grand Widget Styling Title
		$wp_customize->add_setting(
		    'upper_unibar_grand_widget_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'upper_unibar_grand_widget_styling_title',
			array(
				'label'	=> __( 'Widget Styling' ),
				'section' => 'upper_unibar_widget_styling',
				'settings' => 'upper_unibar_grand_widget_styling_title',
			)
		));

        //Upper Uni-bar Widget Header Visibility
		$wp_customize->add_setting(
			'upper_unibar_widgets_header_visibility',
            array(
		        'default' => TRUE,
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_header_visibility',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Widget Title',
				'section' => 'upper_unibar_widget_styling',
		        'settings' => 'upper_unibar_widgets_header_visibility',
		    )
		);

		//Upper Uni-bar Widget Title Styling Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_title_title',
			array(
				'label'	=> __( 'Title Font Styling' ),
				'section' => 'upper_unibar_widget_styling',
				'settings' => 'upper_unibar_widgets_title_title',
			)
		));

		//Upper Uni-bar Widget Title Text Color
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_text_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_widgets_title_text_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'upper_unibar_widget_styling',
		            'settings' => 'upper_unibar_widgets_title_text_color',
		        )
		    )
		);

		//Upper Uni-bar Widget Title text font
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_title_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'upper_unibar_widget_styling',
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

		//Upper Uni-bar Widget Title Font Size
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_font_size',
		    array(
		        'default' => '18',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Uni-bar Widget Title Font Weight
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_font_weight',
		    array(
		        'default' => 'bold',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_title_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'upper_unibar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);

		//Upper Uni-bar Widget Title Font Alignment
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_font_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_title_font_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Font Alignment',
		        'section' => 'upper_unibar_widget_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);

		//Upper Uni-bar Widget Title Background Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_title_background_title',
			array(
				'label'	=> __( 'Title Background' ),
				'section' => 'upper_unibar_widget_styling',
				'settings' => 'upper_unibar_widgets_title_background_title',
			)
		));

		//Upper Uni-bar Widget Title Background Visibility
		$wp_customize->add_setting(
			'upper_unibar_widgets_title_background_visible',
            array(
		        'default' => TRUE,
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_title_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Title Background',
				'section' => 'upper_unibar_widget_styling',
		        'settings' => 'upper_unibar_widgets_title_background_visible',
		    )
		);

		//Upper Uni-bar Widget Title Background Color
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_background_color',
		    array(
		        'default' => '#383838',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_widgets_title_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'upper_unibar_widget_styling',
		            'settings' => 'upper_unibar_widgets_title_background_color',
		        )
		    )
		);

		//Upper Uni-bar Widget Title Background Image
		$wp_customize->add_setting( 'upper_unibar_widgets_title_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'upper_unibar_widgets_title_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'upper_unibar_widget_styling',
		            'settings' => 'upper_unibar_widgets_title_background_image'
		        )
		    )
		);

		//Upper Uni-bar Widget Title Background Image position
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_title_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'upper_unibar_widget_styling',
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

		//Upper Uni-bar Widget Title Background Image repeat
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_title_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'upper_unibar_widget_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);

		//Upper Uni-bar Widget Title Background Image Type
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_title_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'upper_unibar_widget_styling',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);

		//Upper Uni-bar Widget Title Border Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_title_border_title',
			array(
				'label'	=> __( 'Title Borders' ),
				'section' => 'upper_unibar_widget_styling',
				'settings' => 'upper_unibar_widgets_title_border_title',
			)
		));

		//Upper Uni-bar Widget Title Border Color
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_border_color',
		    array(
		        'default' => '#000000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_widgets_title_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'upper_unibar_widget_styling',
		            'settings' => 'upper_unibar_widgets_title_border_color',
		        )
		    )
		);

		//Upper Uni-bar Widget Title Border Style
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_title_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'upper_unibar_widget_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);


		//Upper Uni-bar Widget Title Border Top
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Widget Title Border Bottom
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Widget Title Border Left
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Widget Title Border Right
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Widget Title Border Radius
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Widget Title Padding Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_title_padding_title',
			array(
				'label'	=> __( 'Title Padding' ),
				'section' => 'upper_unibar_widget_styling',
				'settings' => 'upper_unibar_widgets_title_padding_title',
			)
		));

		//Upper Uni-bar Widget Title Padding Top
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_padding_top',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Uni-bar Widget Title Padding Bottom
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_padding_bottom',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Uni-bar Widget Title Padding Left
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Uni-bar Widget Title Padding Right
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Uni-bar Widget Title Margins Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_margins_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_title_margins_title',
			array(
				'label'	=> __( 'Title Margins' ),
				'section' => 'upper_unibar_widget_styling',
				'settings' => 'upper_unibar_widgets_title_margins_title',
			)
		));

		//Upper Uni-bar Widget Title Margin Top
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_margin_top',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Top Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );


		//Upper Uni-bar Widget Title Margin Bottom
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title_margin_bottom',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_title_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Bottom Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

        //Upper Uni-bar Widget Content Styling Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_title',
			array(
				'label'	=> __( 'Content Font Styling' ),
				'section' => 'upper_unibar_widget_styling',
				'settings' => 'upper_unibar_widgets_title',
			)
		));

		//Upper Uni-bar Widget Text Color
		$wp_customize->add_setting(
		    'upper_unibar_widgets_text_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_widgets_text_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'upper_unibar_widget_styling',
		            'settings' => 'upper_unibar_widgets_text_color',
		        )
		    )
		);

		//Upper Uni-bar Widget text font
		$wp_customize->add_setting(
		    'upper_unibar_widgets_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'upper_unibar_widget_styling',
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

		//Upper Uni-bar Widget Font Size
		$wp_customize->add_setting(
		    'upper_unibar_widgets_font_size',
		    array(
		        'default' => '12',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Uni-bar Widget Font Weight
		$wp_customize->add_setting(
		    'upper_unibar_widgets_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'upper_unibar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);

		//Upper Uni-bar Widget Font Alignment
		$wp_customize->add_setting(
		    'upper_unibar_widgets_font_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_font_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Font Alignment',
		        'section' => 'upper_unibar_widget_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);

		//Upper Uni-bar Link Color
		$wp_customize->add_setting(
		    'upper_unibar_widgets_link_color',
		    array(
		        'default' => '#F4F4F4',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_widgets_link_color',
		        array(
		            'label' => 'Link Color',
		            'section' => 'upper_unibar_widget_styling',
		            'settings' => 'upper_unibar_widgets_link_color',
		        )
		    )
		);

		//Upper Uni-bar Link Decoration
		$wp_customize->add_setting(
		    'upper_unibar_widgets_link_decoration',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'upper_unibar_widget_styling',
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

		//Upper Uni-bar Link Weight
		$wp_customize->add_setting(
		    'upper_unibar_widgets_link_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_link_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Link Weight',
		        'section' => 'upper_unibar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);

		//Upper Uni-bar Widget Background Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_background_title',
			array(
				'label'	=> __( 'Content Background' ),
				'section' => 'upper_unibar_widget_styling',
				'settings' => 'upper_unibar_widgets_background_title',
			)
		));

		//Upper Uni-bar Widget Background Visibility
		$wp_customize->add_setting(
			'upper_unibar_widgets_background_visible',
            array(
		        'default' => TRUE,
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Content Background',
				'section' => 'upper_unibar_widget_styling',
		        'settings' => 'upper_unibar_widgets_background_visible',
		    )
		);

		//Upper Uni-bar Widget Background Color
		$wp_customize->add_setting(
		    'upper_unibar_widgets_background_color',
		    array(
		        'default' => '#000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_widgets_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'upper_unibar_widget_styling',
		            'settings' => 'upper_unibar_widgets_background_color',
		        )
		    )
		);

		//Upper Uni-bar Widget Background Image
		$wp_customize->add_setting( 'upper_unibar_widgets_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'upper_unibar_widgets_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'upper_unibar_widget_styling',
		            'settings' => 'upper_unibar_widgets_background_image'
		        )
		    )
		);

		//Upper Uni-bar Widget Background Image position
		$wp_customize->add_setting(
		    'upper_unibar_widgets_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'upper_unibar_widget_styling',
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

		//Upper Uni-bar Widget Background Image repeat
		$wp_customize->add_setting(
		    'upper_unibar_widgets_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'upper_unibar_widget_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);

		//Upper Uni-bar Widget Background Image Type
		$wp_customize->add_setting(
		    'upper_unibar_widgets_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'upper_unibar_widget_styling',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);

		//Upper Uni-bar Widget Border Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_border_title',
			array(
				'label'	=> __( 'Widget Content Borders' ),
				'section' => 'upper_unibar_widget_styling',
				'settings' => 'upper_unibar_widgets_border_title',
			)
		));

		//Upper Uni-bar Widget Border Color
		$wp_customize->add_setting(
		    'upper_unibar_widgets_border_color',
		    array(
		        'default' => '#F3F3F3',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_widgets_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'upper_unibar_widget_styling',
		            'settings' => 'upper_unibar_widgets_border_color',
		        )
		    )
		);

		//Upper Uni-bar Widget Border Style
		$wp_customize->add_setting(
		    'upper_unibar_widgets_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'upper_unibar_widget_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);


		//Upper Uni-bar Widget Border Top
		$wp_customize->add_setting(
		    'upper_unibar_widgets_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Widget Border Bottom
		$wp_customize->add_setting(
		    'upper_unibar_widgets_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Widget Border Left
		$wp_customize->add_setting(
		    'upper_unibar_widgets_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Widget Border Right
		$wp_customize->add_setting(
		    'upper_unibar_widgets_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Widget Border Radius
		$wp_customize->add_setting(
		    'upper_unibar_widgets_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Uni-bar Widget Padding Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_padding_title',
			array(
				'label'	=> __( 'Padding' ),
				'section' => 'upper_unibar_widget_styling',
				'settings' => 'upper_unibar_widgets_padding_title',
			)
		));

		//Upper Uni-bar Widget Padding Top
		$wp_customize->add_setting(
		    'upper_unibar_widgets_padding_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Uni-bar Widget Padding Bottom
		$wp_customize->add_setting(
		    'upper_unibar_widgets_padding_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Uni-bar Widget Padding Left
		$wp_customize->add_setting(
		    'upper_unibar_widgets_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Uni-bar Widget Padding Right
		$wp_customize->add_setting(
		    'upper_unibar_widgets_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Uni-bar Widget Margins Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_margins_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_margins_title',
			array(
				'label'	=> __( 'Margins' ),
				'section' => 'upper_unibar_widget_styling',
				'settings' => 'upper_unibar_widgets_margins_title',
			)
		));

		//Upper Uni-bar Widget Margin Top
		$wp_customize->add_setting(
		    'upper_unibar_widgets_margin_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Top Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );


		//Upper Uni-bar Widget Margin Bottom
		$wp_customize->add_setting(
		    'upper_unibar_widgets_margin_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_widget_styling',
			'label'       => 'Bottom Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );


		$wp_customize->add_section('upper_unibar_list_styling', array('title' => 'List Styling','panel' => 'upper_unibar','priority' => 30,));

		//Upper Unibar Widget List Icon Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_icon_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_content_lists_icon_title',
			array(
				'label'	=> __( 'Icon' ),
				'section' => 'upper_unibar_list_styling',
				'settings' => 'upper_unibar_widgets_content_lists_icon_title',
			)
		));

		//Upper Unibar Widget List Icon Type
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_icon',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_content_lists_icon',
		    array(
		        'type' => 'select',
		        'label' => 'List Icon',
		        'section' => 'upper_unibar_list_styling',
		        'choices' => array(
					'none' => 'None',
					'square' => 'Square',
					'disc' => 'Disc',
					'circle' => 'Circle',
		        ),
		    )
		);

		//Upper Unibar Widget List Padding Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_content_lists_padding_title',
			array(
				'label'	=> __( 'Spacing' ),
				'section' => 'upper_unibar_list_styling',
				'settings' => 'upper_unibar_widgets_content_lists_padding_title',
			)
		));

		//Upper Unibar Widget List Padding Top
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_padding_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_content_lists_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_list_styling',
			'label'       => 'Top Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );

		//Upper Unibar Widget List Padding Bottom
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_padding_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_content_lists_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_list_styling',
			'label'       => 'Bottom Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );

		//Upper Unibar Widget List Padding Left
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_content_lists_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_list_styling',
			'label'       => 'Left Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Unibar Widget List Padding Right
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_content_lists_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_list_styling',
			'label'       => 'Right Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Upper Unibar Widget List Border Title
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'upper_unibar_widgets_content_lists_border_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'upper_unibar_list_styling',
				'settings' => 'upper_unibar_widgets_content_lists_border_title',
			)
		));

		//Upper Unibar Widget List Border Color
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_border_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'upper_unibar_widgets_content_lists_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'upper_unibar_list_styling',
		            'settings' => 'upper_unibar_widgets_content_lists_border_color',
		        )
		    )
		);

		//Upper Unibar Widget List Border Style
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'upper_unibar_widgets_content_lists_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'upper_unibar_list_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);


		//Upper Unibar Widget List Border Top
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_content_lists_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_list_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Unibar Widget List Border Bottom
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_content_lists_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_list_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Unibar Widget List Border Left
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_content_lists_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_list_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Unibar Widget List Border Right
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_content_lists_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_list_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Upper Unibar Widget List Border Radius
		$wp_customize->add_setting(
		    'upper_unibar_widgets_content_lists_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'upper_unibar_widgets_content_lists_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'upper_unibar_list_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
?>
