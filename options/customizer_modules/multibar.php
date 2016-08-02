<?php

$wp_customize->add_panel('multibar', array('title' => __( 'Multi-bar' ), 'priority' => 30,) );
		
        $wp_customize->add_section('multibar_visibility', array('title' => 'Multi-bar Visibility','panel' => 'multibar','priority' => 30,));
        
        //Lower Multi-Bar Visibility
		$wp_customize->add_setting(
		    'lower_multibar_visibility',
		    array(
		        'default' => 'visible',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_visibility',
		    array(
		        'type' => 'select',
		        'label' => 'Multi-Bar',
		        'section' => 'multibar_visibility',
		        'choices' => array(
					'visible' => 'Visible Everywhere',
		            'hidden' => 'Hidden',
		            'homepage' => 'Homepage Only',
		            'page' => 'Pages Only',
					'posts' => 'Posts Only',
		        ),
		    )
		);
        
        $wp_customize->add_section('multibar_layout', array('title' => 'Layout','panel' => 'multibar','priority' => 30,));
        
        //Multibar Grand Layout Title
		$wp_customize->add_setting(
		    'multibar_grand_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'multibar_grand_layout_title', 
			array(
				'label'	=> __( 'Panel Styling' ),
				'section' => 'multibar_layout',
				'settings' => 'multibar_grand_layout_title',
			) 
		));
		
		//Lower-Multibar Layout Title
		$wp_customize->add_setting(
		    'lower_multibar_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_layout_title', 
			array(
				'label'	=> __( 'Layout' ),
				'section' => 'multibar_layout',
				'settings' => 'lower_multibar_layout_title',
			) 
		));
		
		//Lower Multibar Width % or px
		$wp_customize->add_setting(
		    'lower_multibar_width_option',
		    array(
		        'default' => 'fluid',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_width_option',
		    array(
		        'type' => 'select',
		        'label' => 'Multibar Content Width (Fixed or Flexible)',
		        'section' => 'multibar_layout',
		        'choices' => array(
					'fixed' => 'Fixed',
		            'fluid' => 'Fluid',
		        ),
		    )
		);
        
        //Lower Multibar Width Fixed
		$wp_customize->add_setting(
		    'lower_multibar_width_fixed',
		    array(
		        'default' => '1100',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_width_fixed', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_layout',
			'label'       => 'Width [Fixed]',
			'input_attrs' => array(
				'min'   => 800,
				'max'   => 1400,
				'step'  => 2,
			),
		) );
        
        //Lower Multibar Width Fluid
		$wp_customize->add_setting(
		    'lower_multibar_width_fluid',
		    array(
		        'default' => '100',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_width_fluid', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_layout',
			'label'       => 'Width [Fluid]',
			'input_attrs' => array(
				'min'   => 50,
				'max'   => 100,
				'step'  => 2,
			),
		) );
		
		//Lower Multi-bar Alignment
		$wp_customize->add_setting(
		    'lower_multibar_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Multibar Alignment',
		        'section' => 'multibar_layout',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);
		
		//Lower Multibar Content Width % or px
		$wp_customize->add_setting(
		    'lower_multibar_content_width_option',
		    array(
		        'default' => 'fixed',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_content_width_option',
		    array(
		        'type' => 'select',
		        'label' => 'Multibar Content Width (Fixed or Flexible)',
		        'section' => 'multibar_layout',
		        'choices' => array(
					'fixed' => 'Fixed',
		            'fluid' => 'Fluid',
		        ),
		    )
		);
        
        //Lower Multibar Content Width Fixed
		$wp_customize->add_setting(
		    'lower_multibar_content_width_fixed',
		    array(
		        'default' => '1100',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_content_width_fixed', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_layout',
			'label'       => 'Width [Fixed]',
			'input_attrs' => array(
				'min'   => 800,
				'max'   => 1400,
				'step'  => 2,
			),
		) );
        
        //Lower Multibar Content Width Fluid
		$wp_customize->add_setting(
		    'lower_multibar_content_width_fluid',
		    array(
		        'default' => '100',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_content_width_fluid', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_layout',
			'label'       => 'Width [Fluid]',
			'input_attrs' => array(
				'min'   => 50,
				'max'   => 100,
				'step'  => 2,
			),
		) );
		
		//Lower Multi-bar Content Alignment
		$wp_customize->add_setting(
		    'lower_multibar_content_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_content_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Content Alignment',
		        'section' => 'multibar_layout',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);
		
		//Lower Multi-bar Panel Count
		$wp_customize->add_setting(
		    'lower_multibar_panel_count',
		    array(
		        'default' => 'three',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_panel_count',
		    array(
		        'type' => 'select',
		        'label' => 'Number of visible panels',
		        'section' => 'multibar_layout',
		        'choices' => array(
					'one' => 'One',
					'two' => 'Two',
					'three' => 'Three',
					'four' => 'Four',
		        ),
		    )
		);
		
		//Lower Multi-bar Panel Padding
		$wp_customize->add_setting(
		    'lower_multibar_panel_padding',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_panel_padding', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_layout',
			'label'       => 'Panel Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 30,
				'step'  => 1,
			),
		) );
		
         $wp_customize->add_section('multibar_background', array('title' => 'Background','panel' => 'multibar','priority' => 30,));

         //Lower Multi-Bar Background Title
		$wp_customize->add_setting(
		    'lower_multibar_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_background_title', 
			array(
				'label'	=> __( 'Background' ),
				'section' => 'multibar_background',
				'settings' => 'lower_multibar_background_title',
			) 
		));
		
		//Lower Multi-Bar Background Visibility
		$wp_customize->add_setting(
			'lower_multibar_background_visible'
		);
		$wp_customize->add_control(
		    'lower_multibar_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Multi-bar Background',
				'section' => 'multibar_background',
		        'settings' => 'lower_multibar_background_visible',
		    )
		);
		
		//Lower Multi-Bar Background Color
		$wp_customize->add_setting(
		    'lower_multibar_background_color',
		    array(
		        'default' => '#282828',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'multibar_background',
		            'settings' => 'lower_multibar_background_color',
		        )
		    )
		);
		
		//Lower Multi-Bar Background Image
		$wp_customize->add_setting( 'lower_multibar_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_multibar_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'multibar_background',
		            'settings' => 'lower_multibar_background_image'
		        )
		    )
		);

		//Lower Multi-Bar Background Image position
		$wp_customize->add_setting(
		    'lower_multibar_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'multibar_background',
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
		
		//Lower Multi-bar Background Image repeat
		$wp_customize->add_setting(
		    'lower_multibar_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'multibar_background',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Lower Multi-bar Background Image Type
		$wp_customize->add_setting(
		    'lower_multibar_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'multibar_background',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);
        
        $wp_customize->add_section('multibar_borders', array('title' => 'Borders','panel' => 'multibar','priority' => 30,));

        
		
		//Lower Multi-bar Border Title
		$wp_customize->add_setting(
		    'lower_multibar_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_border_title', 
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'multibar_borders',
				'settings' => 'lower_multibar_border_title',
			) 
		));
		
		//Lower Multi-bar Border Color
		$wp_customize->add_setting(
		    'lower_multibar_border_color',
		    array(
		        'default' => '#000000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'multibar_borders',
		            'settings' => 'lower_multibar_border_color',
		        )
		    )
		);
		
		//Lower Multi-bar Border Style
		$wp_customize->add_setting(
		    'lower_multibar_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'multibar_borders',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Lower Multi-bar Border Top
		$wp_customize->add_setting(
		    'lower_multibar_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_borders',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Border Bottom
		$wp_customize->add_setting(
		    'lower_multibar_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_borders',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Border Left
		$wp_customize->add_setting(
		    'lower_multibar_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_borders',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Border Right
		$wp_customize->add_setting(
		    'lower_multibar_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_borders',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Border Radius
		$wp_customize->add_setting(
		    'lower_multibar_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_borders',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
        
        $wp_customize->add_section('multibar_padding', array('title' => 'Padding','panel' => 'multibar','priority' => 30,));

        //Lower Multi-bar Padding Title
		$wp_customize->add_setting(
		    'lower_multibar_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_padding_title', 
			array(
				'label'	=> __( 'Padding' ),
				'section' => 'multibar_padding',
				'settings' => 'lower_multibar_padding_title',
			) 
		));
		
		//Lower Multi-bar Padding Top
		$wp_customize->add_setting(
		    'lower_multibar_padding_top',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_padding',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Multi-bar Padding Bottom
		$wp_customize->add_setting(
		    'lower_multibar_padding_bottom',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_padding',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Multi-bar Padding Left
		$wp_customize->add_setting(
		    'lower_multibar_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_padding',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Multi-bar Padding Right
		$wp_customize->add_setting(
		    'lower_multibar_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_padding',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
        
        $wp_customize->add_section('multibar_margins', array('title' => 'Margins','panel' => 'multibar','priority' => 30,));

        //Lower-Multibar Margins Title
		$wp_customize->add_setting(
		    'lower_multibar_margins_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_margins_title', 
			array(
				'label'	=> __( 'Margins' ),
				'section' => 'multibar_margins',
				'settings' => 'lower_multibar_margins_title',
			) 
		));
		
		//Lower Multi-bar Margin Top
		$wp_customize->add_setting(
		    'lower_multibar_margin_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_margins',
			'label'       => 'Top Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		
		//Lower Multi-bar Margin Bottom
		$wp_customize->add_setting(
		    'lower_multibar_margin_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_margins',
			'label'       => 'Bottom Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
        
        
        $wp_customize->add_section('multibar_menu_styling', array('title' => 'Menu Styling','panel' => 'multibar','priority' => 30,));

        
        //Lower Multi-bar Grand Menu Styling Title
		$wp_customize->add_setting(
		    'lower_multibar_grand_menu_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'lower_multibar_grand_menu_styling_title', 
			array(
				'label'	=> __( 'Menu Styling' ),
				'section' => 'multibar_menu_styling',
				'settings' => 'lower_multibar_grand_menu_styling_title',
			) 
		));
		
		/**** LOWER MULTI-BAR MENU STYLING ****/
		//Lower Multi-Bar Menu Layout Title
		$wp_customize->add_setting(
		    'lower_multibar_menu_layout',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_menu_layout', 
			array(
				'label'	=> __( 'Layout' ),
				'section' => 'multibar_menu_styling',
				'settings' => 'lower_multibar_menu_layout',
			) 
		));
		
		//Lower Multi-Bar Menu Height
		$wp_customize->add_setting(
		    'lower_multibar_menu_height',
		    array(
		        'default' => '25',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_menu_height', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_menu_styling',
			'label'       => 'Height',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-Bar Menu Width
		$wp_customize->add_setting(
		    'lower_multibar_menu_width',
		    array(
		        'default' => '15',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_menu_width', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_menu_styling',
			'label'       => 'Left & Right Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-Bar Menu Spacing
		$wp_customize->add_setting(
		    'lower_multibar_menu_spacing',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_menu_spacing', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_menu_styling',
			'label'       => 'Button Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-Bar Font Styling Title
		$wp_customize->add_setting(
		    'lower_multibar_menu_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_menu_styling_title', 
			array(
				'label'	=> __( 'Font Styling' ),
				'section' => 'multibar_menu_styling',
				'settings' => 'lower_multibar_menu_styling_title',
			) 
		));
		
		//Lower Multi-Bar Menu Link Color
		$wp_customize->add_setting(
		    'lower_multibar_menu_link_color',
		    array(
		        'default' => '#333',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_menu_link_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'multibar_menu_styling',
		            'settings' => 'lower_multibar_menu_link_color',
		        )
		    )
		);
		
		//Lower Multi-Bar Menu Link font
		$wp_customize->add_setting(
		    'lower_multibar_menu_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_menu_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'multibar_menu_styling',
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
		
		//Lower Multi-Bar Menu Font Weight
		$wp_customize->add_setting(
		    'lower_multibar_menu_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_menu_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'multibar_menu_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
		
		//Lower Multi-Bar Menu Link Hover Color
		$wp_customize->add_setting(
		    'lower_multibar_menu_link_hover_color',
		    array(
		        'default' => '#317dbf',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_menu_link_hover_color',
		        array(
		            'label' => 'Link Hover Color',
		            'section' => 'multibar_menu_styling',
		            'settings' => 'lower_multibar_menu_link_hover_color',
		        )
		    )
		);
		
		//Lower Multi-Bar Menu Link Decoration
		$wp_customize->add_setting(
		    'lower_multibar_menu_link_decoration',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_menu_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'multibar_menu_styling',
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
		
		//Lower Multi-Bar Menu Link Alignment
		$wp_customize->add_setting(
		    'lower_multibar_menu_link_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_menu_link_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Text Alignment',
		        'section' => 'multibar_menu_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);
		
		//Lower Multi-Bar Background Title
		$wp_customize->add_setting(
		    'lower_multibar_menu_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_menu_background_title', 
			array(
				'label'	=> __( 'Background' ),
				'section' => 'multibar_menu_styling',
				'settings' => 'lower_multibar_menu_background_title',
			) 
		));
		
		//Lower Multi-Bar Menu Background Visibility
		$wp_customize->add_setting(
			'lower_multibar_menu_background_visible'
		);
		$wp_customize->add_control(
		    'lower_multibar_menu_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Background Visibility',
				'section' => 'multibar_menu_styling',
		        'settings' => 'lower_multibar_menu_background_visible',
		    )
		);
		
		//Lower Multi-Bar Menu Background Color
		$wp_customize->add_setting(
		    'lower_multibar_menu_background_color',
		    array(
		        'default' => '#9E9E9E',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_menu_background_color',
		        array(
		            'label' => 'Link Background Color',
		            'section' => 'multibar_menu_styling',
		        )
		    )
		);
		
		//Lower Multi-Bar Menu Background Image
		$wp_customize->add_setting( 'lower_multibar_menu_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_multibar_menu_background_image',
		        array(
		            'label' => 'Link Background image',
		            'section' => 'multibar_menu_styling',
		        )
		    )
		);
		
		//Lower Multi-Bar Hover Background Color
		$wp_customize->add_setting(
		    'lower_multibar_menu_hover_background_color',
		    array(
		        'default' => '#C7C7C7',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_menu_hover_background_color',
		        array(
		            'label' => 'Link Hover Background Color',
		            'section' => 'multibar_menu_styling',
		        )
		    )
		);
		
		//Lower Multi-Bar Hover Background Image
		$wp_customize->add_setting( 'lower_multibar_menu_hover_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_multibar_menu_hover_background_image',
		        array(
		            'label' => 'Link Hover Background Image',
		            'section' => 'multibar_menu_styling',
		        )
		    )
		);
		
		//Lower Multi-Bar Menu Background Image position
		$wp_customize->add_setting(
		    'lower_multibar_menu_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_menu_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'multibar_menu_styling',
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
		
		//Lower Multi-Bar Menu Background Image repeat
		$wp_customize->add_setting(
		    'lower_multibar_menu_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_menu_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'multibar_menu_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Lower Multi-Bar Menu Borders Title
		$wp_customize->add_setting(
		    'lower_multibar_menu_borders_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_menu_borders_title', 
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'multibar_menu_styling',
				'settings' => 'lower_multibar_menu_borders_title',
			) 
		));
		
		//Lower Multi-Bar Menu Border Color
		$wp_customize->add_setting(
		    'lower_multibar_menu_border_color',
		    array(
		        'default' => '#000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_menu_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'multibar_menu_styling',
		            'settings' => 'lower_multibar_menu_border_color',
		        )
		    )
		);
		
		//Lower Multi-Bar Menu Border Style
		$wp_customize->add_setting(
		    'lower_multibar_menu_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_menu_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'multibar_menu_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Lower Multi-Bar Menu Border Top
		$wp_customize->add_setting(
		    'lower_multibar_menu_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_menu_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_menu_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-Bar Menu Border Bottom
		$wp_customize->add_setting(
		    'lower_multibar_menu_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_menu_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_menu_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-Bar Menu Border Left
		$wp_customize->add_setting(
		    'lower_multibar_menu_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_menu_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_menu_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-Bar Menu Border Right
		$wp_customize->add_setting(
		    'lower_multibar_menu_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_menu_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_menu_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-Bar Menu Border Radius
		$wp_customize->add_setting(
		    'lower_multibar_menu_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_menu_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_menu_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
        
        $wp_customize->add_section('multibar_widget_styling', array('title' => 'Widget Styling','panel' => 'multibar','priority' => 30,));
        
        
        //Lower Multi-bar Grand Widget Styling Title
		$wp_customize->add_setting(
		    'lower_multibar_grand_widget_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'lower_multibar_grand_widget_styling_title', 
			array(
				'label'	=> __( 'Widget Styling' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_grand_widget_styling_title',
			) 
		));
        
        
		/**** LOWER MULTI-BAR WIDGET STYLING *****/
		
		//Lower-Multibar Widget Layout Title
		$wp_customize->add_setting(
		    'lower_multibar_widgets_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_widgets_layout_title', 
			array(
				'label'	=> __( 'Layout' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_widgets_layout_title',
			) 
		));
		
		//Lower-Multibar Widget Header Visibility
		$wp_customize->add_setting(
			'lower_multibar_widgets_header_visibility'
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_header_visibility',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Widget Title',
				'section' => 'multibar_widget_styling',
		        'settings' => 'lower_multibar_widgets_header_visibility',
		    )
		);
		
		//Lower-Multibar Widget Title Styling Title
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_widgets_title_title', 
			array(
				'label'	=> __( 'Title Font Styling' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_widgets_title_title',
			) 
		));
		
		//Lower-Multibar Widget Title Text Color
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_text_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_widgets_title_text_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'multibar_widget_styling',
		            'settings' => 'lower_multibar_widgets_title_text_color',
		        )
		    )
		);
		
		//Lower-Multibar Widget Title text font
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_title_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'multibar_widget_styling',
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
		
		//Lower-Multibar Widget Title Font Size
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_font_size',
		    array(
		        'default' => '18',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower-Multibar Widget Title Font Weight
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_font_weight',
		    array(
		        'default' => 'bold',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_title_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'multibar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
		
		//Lower-Multibar Widget Title Font Alignment
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_font_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_title_font_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Font Alignment',
		        'section' => 'multibar_widget_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);

		//Lower Multi-Bar Widget Title Background Title
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_widgets_title_background_title', 
			array(
				'label'	=> __( 'Title Background' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_widgets_title_background_title',
			) 
		));
		
		//Lower Multi-Bar Widget Title Background Visibility
		$wp_customize->add_setting(
			'lower_multibar_widgets_title_background_visible'
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_title_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Title Background',
				'section' => 'multibar_widget_styling',
		        'settings' => 'lower_multibar_widgets_title_background_visible',
		    )
		);
		
		//Lower Multi-Bar Widget Title Background Color
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_background_color',
		    array(
		        'default' => '#383838',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_widgets_title_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'multibar_widget_styling',
		            'settings' => 'lower_multibar_widgets_title_background_color',
		        )
		    )
		);
		
		//Lower Multi-Bar Widget Title Background Image
		$wp_customize->add_setting( 'lower_multibar_widgets_title_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_multibar_widgets_title_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'multibar_widget_styling',
		            'settings' => 'lower_multibar_widgets_title_background_image'
		        )
		    )
		);

		//Lower Multi-Bar Widget Title Background Image position
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_title_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'multibar_widget_styling',
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
		
		//Lower Multi-bar Widget Title Background Image repeat
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_title_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'multibar_widget_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Lower Multi-bar Widget Title Background Image Type
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_title_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'multibar_widget_styling',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);
		
		//Lower Multi-bar Widget Title Border Title
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_widgets_title_border_title', 
			array(
				'label'	=> __( 'Title Borders' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_widgets_title_border_title',
			) 
		));
		
		//Lower Multi-bar Widget Title Border Color
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_border_color',
		    array(
		        'default' => '#000000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_widgets_title_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'multibar_widget_styling',
		            'settings' => 'lower_multibar_widgets_title_border_color',
		        )
		    )
		);
		
		//Lower Multi-bar Widget Title Border Style
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_title_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'multibar_widget_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Lower Multi-bar Widget Title Border Top
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Widget Title Border Bottom
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Widget Title Border Left
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Widget Title Border Right
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Widget Title Border Radius
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Widget Title Padding Title
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_widgets_title_padding_title', 
			array(
				'label'	=> __( 'Title Padding' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_widgets_title_padding_title',
			) 
		));
		
		//Lower Multi-bar Widget Title Padding Top
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_padding_top',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Multi-bar Widget Title Padding Bottom
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_padding_bottom',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Multi-bar Widget Title Padding Left
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Multi-bar Widget Title Padding Right
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower-Multibar Widget Title Margins Title
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_margins_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_widgets_title_margins_title', 
			array(
				'label'	=> __( 'Title Margins' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_widgets_title_margins_title',
			) 
		));
		
		//Lower Multi-bar Widget Title Margin Top
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_margin_top',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Top Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		
		//Lower Multi-bar Widget Title Margin Bottom
		$wp_customize->add_setting(
		    'lower_multibar_widgets_title_margin_bottom',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_title_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Bottom Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Lower-Multibar Widget Content Styling Title
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_widgets_content_title', 
			array(
				'label'	=> __( 'Content Font Styling' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_widgets_content_title',
			) 
		));
		
		
		//Lower-Multibar Widget Content Text Color
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_text_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_widgets_content_text_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'multibar_widget_styling',
		            'settings' => 'lower_multibar_widgets_content_text_color',
		        )
		    )
		);
		
		//Lower-Multibar Widget Content text font
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_content_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'multibar_widget_styling',
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
		
		//Lower-Multibar Widget Content Font Size
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_font_size',
		    array(
		        'default' => '14',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower-Multibar Widget Content Font Weight
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_content_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'multibar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
		
		//Lower-Multibar Widget Content Font Alignment
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_font_alignment',
		    array(
		        'default' => 'left',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_content_font_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Font Alignment',
		        'section' => 'multibar_widget_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);
		
		//Lower Multi-bar Content Link Color
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_link_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_widgets_content_link_color',
		        array(
		            'label' => 'Link Color',
		            'section' => 'multibar_widget_styling',
		            'settings' => 'lower_multibar_widgets_content_link_color',
		        )
		    )
		);
		
		//Lower Multi-bar Content Link Decoration
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_link_decoration',
		    array(
		        'default' => 'underline',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_content_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'multibar_widget_styling',
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
		
		//Lower Multi-bar Content Link Weight
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_link_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_content_link_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Link Weight',
		        'section' => 'multibar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
		
		//Lower Multi-Bar Widget Content Background Title
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_widgets_content_background_title', 
			array(
				'label'	=> __( 'Content Background' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_widgets_content_background_title',
			) 
		));
		
		//Lower Multi-Bar Widget Content Background Visibility
		$wp_customize->add_setting(
			'lower_multibar_widgets_content_background_visible'
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_content_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Content Background',
				'section' => 'multibar_widget_styling',
		        'settings' => 'lower_multibar_widgets_content_background_visible',
		    )
		);
		
		//Lower Multi-Bar Widget Content Background Color
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_background_color',
		    array(
		        'default' => '#575757',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_widgets_content_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'multibar_widget_styling',
		            'settings' => 'lower_multibar_widgets_content_background_color',
		        )
		    )
		);
		
		//Lower Multi-Bar Widget Content Background Image
		$wp_customize->add_setting( 'lower_multibar_widgets_content_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_multibar_widgets_content_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'multibar_widget_styling',
		            'settings' => 'lower_multibar_widgets_content_background_image'
		        )
		    )
		);

		//Lower Multi-Bar Widget Content Background Image position
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_content_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'multibar_widget_styling',
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
		
		//Lower Multi-bar Widget Content Background Image repeat
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_content_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'multibar_widget_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Lower Multi-bar Widget Content Background Image Type
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_content_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'multibar_widget_styling',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);
		
		//Lower Multi-bar Widget Content Border Title
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_widgets_content_border_title', 
			array(
				'label'	=> __( 'Content Borders' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_widgets_content_border_title',
			) 
		));
		
		//Lower Multi-bar Widget Title Border Color
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_border_color',
		    array(
		        'default' => '#000000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_multibar_widgets_content_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'multibar_widget_styling',
		            'settings' => 'lower_multibar_widgets_content_border_color',
		        )
		    )
		);
		
		//Lower Multi-bar Widget Content Border Style
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'lower_multibar_widgets_content_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'multibar_widget_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Lower Multi-bar Widget Content Border Top
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Widget Content Border Bottom
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Widget Content Border Left
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Widget Content Border Right
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Widget Content Border Radius
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Multi-bar Widget Content Padding Title
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_widgets_content_padding_title', 
			array(
				'label'	=> __( 'Content Padding' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_widgets_content_padding_title',
			) 
		));
		
		//Lower Multi-bar Widget Content Padding Top
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_padding_top',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Multi-bar Widget Content Padding Bottom
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_padding_bottom',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Multi-bar Widget Content Padding Left
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_padding_left',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Multi-bar Widget Content Padding Right
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_padding_right',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower-Multibar Widget Content Margins Title
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_margins_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_multibar_widgets_content_margins_title', 
			array(
				'label'	=> __( 'Content Margins' ),
				'section' => 'multibar_widget_styling',
				'settings' => 'lower_multibar_widgets_content_margins_title',
			) 
		));
		
		//Lower Multi-bar Widget Content Margin Top
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_margin_top',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Top Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		
		//Lower Multi-bar Widget Content Margin Bottom
		$wp_customize->add_setting(
		    'lower_multibar_widgets_content_margin_bottom',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_multibar_widgets_content_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'multibar_widget_styling',
			'label'       => 'Bottom Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

?>