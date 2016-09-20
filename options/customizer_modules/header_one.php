<?php

$wp_customize->add_panel('header_one', array('title' => __( 'Primary Header' ), 'priority' => 30,) );

    $wp_customize->add_section('header_one_visibility', array('title' => 'Primary Header Visibility','panel' => 'header_one','priority' => 30,));

    //Primary Header Visibility
		$wp_customize->add_setting(
		    'primary_header_visibility',
		    array(
		        'default' => 'visible',
		    )
		);
		$wp_customize->add_control(
		    'primary_header_visibility',
		    array(
		        'type' => 'select',
		        'label' => 'Header 1',
		        'section' => 'header_one_visibility',
		        'choices' => array(
					'visible' => 'Visible Everywhere',
		            'hidden' => 'Hidden',
		            'homepage' => 'Homepage Only',
		            'page' => 'Pages Only',
					'posts' => 'Posts Only',
		        ),
		    )
		);

		$wp_customize->add_section('primary_header_type', array('title' => 'Header Type','panel' => 'header_one','priority' => 30,));

    //Primary Header Type
    $wp_customize->add_setting(
        'primary_header_type_select',
        array(
            'default' => 'Menu',
        )
    );
    $wp_customize->add_control(
    		new WP_header_type(
    			$wp_customize,
    			'primary_header_type_select',
    			array(
    				'settings'		=> 'primary_header_type_select',
    				'section'		=> 'primary_header_type',
    				'label'			=> __( 'Header Type', 'object' ),
    				'description'	=> __( 'Select a header style from the options below', 'object' ),
    				'choices'		=> array(
    					'Menu' 		=> get_template_directory_uri() . '/options/images/header_options/menu_only.png',
    					'Logo' 	=> get_template_directory_uri() . '/options/images/header_options/logo_only.png',
    					'Logo & Menu'	=> get_template_directory_uri() . '/options/images/header_options/logo_menu.png',
    					'Logo & Widget' 		=> get_template_directory_uri() . '/options/images/header_options/logo_widget.png',
              'Logo, Menu & Widget' 		=> get_template_directory_uri() . '/options/images/header_options/logo_menu_widget.png',
              'Menu & Widget' 		=> get_template_directory_uri() . '/options/images/header_options/menu_widget.png',
    				)
    			)
    		)
    	);

		$wp_customize->add_section('primary_header_layout', array('title' => 'Layout','panel' => 'header_one','priority' => 30,));

		//Primary Header Width % or px
		$wp_customize->add_setting(
		    'primary_header_width_option',
		    array(
		        'default' => 'fluid',
		    )
		);
		$wp_customize->add_control(
		    'primary_header_width_option',
		    array(
		        'type' => 'select',
		        'label' => 'Header Width (Fixed or Flexible)',
		        'section' => 'primary_header_layout',
		        'choices' => array(
					'fixed' => 'Fixed',
		            'fluid' => 'Fluid',
		        ),
		    )
		);

    //Primary Header Width Fixed
		$wp_customize->add_setting(
		    'primary_header_width_fixed',
		    array(
		        'default' => '1100',
		    )
		);
		$wp_customize->add_control( 'primary_header_width_fixed', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_layout',
			'label'       => 'Width [Fixed]',
			'input_attrs' => array(
				'min'   => 800,
				'max'   => 1400,
				'step'  => 2,
			),
		) );

        //Primary Header Width Fluid
		$wp_customize->add_setting(
		    'primary_header_width_fluid',
		    array(
		        'default' => '100',
		    )
		);
		$wp_customize->add_control( 'primary_header_width_fluid', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_layout',
			'label'       => 'Width [Fluid]',
			'input_attrs' => array(
				'min'   => 50,
				'max'   => 100,
				'step'  => 2,
			),
		) );

		//Primary Header Alignment
		$wp_customize->add_setting(
		    'primary_header_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'primary_header_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Header Alignment',
		        'section' => 'primary_header_layout',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);

		//Primary Header Content Width % or px
		$wp_customize->add_setting(
		    'primary_header_content_width_option',
		    array(
		        'default' => 'fluid',
		    )
		);
		$wp_customize->add_control(
		    'primary_header_content_width_option',
		    array(
		        'type' => 'select',
		        'label' => 'Content Width (Fixed or Flexible)',
		        'section' => 'primary_header_layout',
		        'choices' => array(
					'fixed' => 'Fixed',
		            'fluid' => 'Fluid',
		        ),
		    )
		);

    //Primary Header Content Width Fixed
		$wp_customize->add_setting(
		    'primary_header_content_width_fixed',
		    array(
		        'default' => '1000',
		    )
		);
		$wp_customize->add_control( 'primary_header_content_width_fixed', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_layout',
			'label'       => 'Width [Fixed]',
			'input_attrs' => array(
				'min'   => 800,
				'max'   => 1400,
				'step'  => 2,
			),
		) );

        //Primary Header Content Width Fluid
		$wp_customize->add_setting(
		    'primary_header_content_width_fluid',
		    array(
		        'default' => '100',
		    )
		);
		$wp_customize->add_control( 'primary_header_content_width_fluid', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_layout',
			'label'       => 'Width [Fluid]',
			'input_attrs' => array(
				'min'   => 50,
				'max'   => 100,
				'step'  => 2,
			),
		) );

		//Primary Header Content Alignment
		$wp_customize->add_setting(
		    'primary_header_content_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'primary_header_content_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Content Alignment',
		        'section' => 'primary_header_layout',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);

		/** PRIMARY HEADER BACKGROUND **/
		$wp_customize->add_section('primary_header_background', array('title' => 'Background','panel' => 'header_one','priority' => 30,));

		//Primary Header Background Visibility
		$wp_customize->add_setting(
			'primary_header_background_visible'
		);
		$wp_customize->add_control(
			'primary_header_background_visible',
			array(
				'type' => 'checkbox',
				'label' => 'Disable header Background',
				'section' => 'primary_header_background',
				'settings' => 'primary_header_background_visible',
			)
		);

		//Primary Header Background Color
		$wp_customize->add_setting(
			'primary_header_background_color',
			array(
				'default' => '#333',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'primary_header_background_color',
				array(
					'label' => 'Background Color',
					'section' => 'primary_header_background',
					'settings' => 'primary_header_background_color',
				)
			)
		);

		//Primary Header Background Image
		$wp_customize->add_setting( 'primary_header_background_image' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'primary_header_background_image',
				array(
					'label' => 'Background Image',
					'section' => 'primary_header_background',
					'settings' => 'primary_header_background_image'
				)
			)
		);

		//Primary Header Background Image position
		$wp_customize->add_setting(
			'primary_header_background_image_position',
			array(
				'default' => 'initial',
			)
		);
		$wp_customize->add_control(
			'primary_header_background_image_position',
			array(
				'type' => 'select',
				'label' => 'Background Image Position',
				'section' => 'primary_header_background',
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

		//Primary Header Background Image repeat
		$wp_customize->add_setting(
			'primary_header_background_image_repeat',
			array(
				'default' => 'no-repeat',
			)
		);
		$wp_customize->add_control(
			'primary_header_background_image_repeat',
			array(
				'type' => 'select',
				'label' => 'Background Image Repetition',
				'section' => 'primary_header_background',
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
		$wp_customize->add_section('primary_header_borders', array('title' => 'Borders','panel' => 'header_one','priority' => 30,));


		//Border Title
		$wp_customize->add_setting(
			'primary_header_border_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'primary_header_border_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'primary_header_borders',
				'settings' => 'primary_header_border_title',
			)
		));

		//Primary Header Border Color
		$wp_customize->add_setting(
			'primary_header_border_color',
			array(
				'default' => '#000',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'primary_header_border_color',
				array(
					'label' => 'Border Color',
					'section' => 'primary_header_borders',
					'settings' => 'primary_header_border_color',
				)
			)
		);

		//Primary Header Border Style
		$wp_customize->add_setting(
			'primary_header_border_style',
			array(
				'default' => 'solid',
			)
		);
		$wp_customize->add_control(
			'primary_header_border_style',
			array(
				'type' => 'select',
				'label' => 'Border Style',
				'section' => 'primary_header_borders',
				'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
				),
			)
		);


		//Primary Header Border Top
		$wp_customize->add_setting(
			'primary_header_border_top',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'primary_header_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_borders',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Primary Header Border Bottom
		$wp_customize->add_setting(
			'primary_header_border_bottom',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'primary_header_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_borders',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Primary Header Border Left
		$wp_customize->add_setting(
			'primary_header_border_left',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'primary_header_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_borders',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Primary Header Border Right
		$wp_customize->add_setting(
			'primary_header_border_right',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'primary_header_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_borders',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Primary Header Border Radius
		$wp_customize->add_setting(
			'primary_header_border_radius',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'primary_header_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_borders',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		/** PRIMARY HEADER PADDING **/
		$wp_customize->add_section('primary_header_padding', array('title' => 'Inner Spacing','panel' => 'header_one','priority' => 30,));

		//Primary Header Padding Top
		$wp_customize->add_setting(
			'primary_header_padding_top',
			array(
				'default' => '14',
			)
		);
		$wp_customize->add_control( 'primary_header_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_padding',
			'label'       => 'Top',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Primary Header Padding Bottom
		$wp_customize->add_setting(
			'primary_header_padding_bottom',
			array(
				'default' => '14',
			)
		);
		$wp_customize->add_control( 'primary_header_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_padding',
			'label'       => 'Bottom',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Primary Header Padding Left
		$wp_customize->add_setting(
			'primary_header_padding_left',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'primary_header_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_padding',
			'label'       => 'Left',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Primary Header Padding Right
		$wp_customize->add_setting(
			'primary_header_padding_right',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'primary_header_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_padding',
			'label'       => 'Right',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		/** PRIMARY HEADER MARGINS **/
		$wp_customize->add_section('primary_header_margins', array('title' => 'Outer Spacing','panel' => 'header_one','priority' => 30,));

		//Primary Header Margin Top
		$wp_customize->add_setting(
			'primary_header_margin_top',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'primary_header_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_margins',
			'label'       => 'Top',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );


		//Primary Header Margin Bottom
		$wp_customize->add_setting(
			'primary_header_margin_bottom',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'primary_header_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'primary_header_margins',
			'label'       => 'Bottom',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

    /** PRIMARY HEADER LOGO Options **/
    $wp_customize->add_section('primary_header_logo', array('title' => 'Logo Styling','panel' => 'header_one','priority' => 30,));

    //Primary Header Logo Title
    $wp_customize->add_setting(
        'primary_header_logo_title',
        array(
            'default' => '',
        )
    );
    $wp_customize->add_control( new WP_Customize_Title_Area(
        $wp_customize,
        'primary_header_logo_title',
        array(
            'label'	=> __( 'Logo' ),
            'section' => 'primary_header_logo',
            'settings' => 'primary_header_logo_title',
        )
    ));

    //Primary Header Logo Image
    $wp_customize->add_setting( 'primary_header_logo_image' );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'primary_header_logo_image',
            array(
                'label' => 'Upload Logo',
                'section' => 'primary_header_logo',
                'settings' => 'primary_header_logo_image'
            )
        )
    );

    $wp_customize->add_setting(
        'primary_header_sitetitle',
        array(
            'default' => 'My Site',
        )
    );
    $wp_customize->add_control(
        'primary_header_sitetitle',
        array(
            'label' => 'Site Title',
            'section' => 'primary_header_logo',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'primary_header_tagline',
        array(
            'default' => 'just another Wordpress site',
        )
    );
    $wp_customize->add_control(
        'primary_header_tagline',
        array(
            'label' => 'Tagline',
            'section' => 'primary_header_logo',
            'type' => 'text',
        )
    );

    //Primary Header Logo Alignment Title
    $wp_customize->add_setting(
        'primary_header_logo_alignment_title',
        array(
            'default' => '',
        )
    );
    $wp_customize->add_control( new WP_Customize_Title_Area(
        $wp_customize,
        'primary_header_logo_alignment_title',
        array(
            'label'	=> __( 'Logo Alignment' ),
            'section' => 'primary_header_logo',
            'settings' => 'primary_header_logo_alignment_title',
        )
    ));

    //Primary Header Logo Alignment
    $wp_customize->add_setting(
        'primary_header_logo_alignment',
        array(
            'default' => 'center',
        )
    );
    $wp_customize->add_control(
        'primary_header_logo_alignment',
        array(
            'type' => 'select',
            'label' => 'Logo Alignment',
            'section' => 'primary_header_logo',
            'choices' => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
            ),
        )
    );
?>
