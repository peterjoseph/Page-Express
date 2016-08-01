<?php

$wp_customize->add_panel('lower_unibar', array('title' => __( 'Lower Uni-Bar' ), 'priority' => 30,) );
		
        $wp_customize->add_section('lower_unibar_visibility', array('title' => 'Lower Uni-Bar Visibility','panel' => 'lower_unibar','priority' => 30,));
        
		//Lower Uni-Bar Visibility
		$wp_customize->add_setting(
		    'lower_unibar_visibility',
		    array(
		        'default' => 'hidden',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_visibility',
		    array(
		        'type' => 'select',
		        'label' => 'Lower Uni-Bar',
		        'section' => 'lower_unibar_visibility',
		        'choices' => array(
					'visible' => 'Visible Everywhere',
		            'hidden' => 'Hidden',
		            'homepage' => 'Homepage Only',
		            'page' => 'Pages Only',
					'posts' => 'Posts Only',
		        ),
		    )
		);
        
        $wp_customize->add_section('lower_unibar_layout', array('title' => 'Layout','panel' => 'lower_unibar','priority' => 30,));

        //Lower Unibar Grand Layout Title
		$wp_customize->add_setting(
		    'lower_unibar_grand_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'lower_unibar_grand_layout_title', 
			array(
				'label'	=> __( 'Panel Styling' ),
				'section' => 'lower_unibar_layout',
				'settings' => 'lower_unibar_grand_layout_title',
			) 
		));
		
		//Lower Uni-bar Layout Title
		$wp_customize->add_setting(
		    'lower_unibar_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_layout_title', 
			array(
				'label'	=> __( 'Layout' ),
				'section' => 'lower_unibar_layout',
				'settings' => 'lower_unibar_layout_title',
			) 
		));
		
		//Lower Uni-Bar Width % or px
		$wp_customize->add_setting(
		    'lower_unibar_width_option',
		    array(
		        'default' => 'fluid',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_width_option',
		    array(
		        'type' => 'select',
		        'label' => 'Uni-Bar Width (Fixed or Flexible)',
		        'section' => 'lower_unibar_layout',
		        'choices' => array(
					'fixed' => 'Fixed',
		            'fluid' => 'Fluid',
		        ),
		    )
		);
        
        //Lower Uni-Bar Width Fixed
		$wp_customize->add_setting(
		    'lower_unibar_width_fixed',
		    array(
		        'default' => '1100',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_width_fixed', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_layout',
			'label'       => 'Width [Fixed]',
			'input_attrs' => array(
				'min'   => 800,
				'max'   => 1400,
				'step'  => 2,
			),
		) );
        
        //Lower Uni-Bar Width Fluid
		$wp_customize->add_setting(
		    'lower_unibar_width_fluid',
		    array(
		        'default' => '100',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_width_fluid', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_layout',
			'label'       => 'Width [Fluid]',
			'input_attrs' => array(
				'min'   => 50,
				'max'   => 100,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-bar Alignment
		$wp_customize->add_setting(
		    'lower_unibar_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Uni-Bar Alignment',
		        'section' => 'lower_unibar_layout',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);
		
		//Lower Uni-Bar Content Width % or px
		$wp_customize->add_setting(
		    'lower_unibar_content_width_option',
		    array(
		        'default' => 'fluid',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_content_width_option',
		    array(
		        'type' => 'select',
		        'label' => 'Content Width (Fixed or Flexible)',
		        'section' => 'lower_unibar_layout',
		        'choices' => array(
					'fixed' => 'Fixed',
		            'fluid' => 'Fluid',
		        ),
		    )
		);
        
        //Lower Uni-Bar Content Width Fixed
		$wp_customize->add_setting(
		    'lower_unibar_content_width_fixed',
		    array(
		        'default' => '1000',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_content_width_fixed', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_layout',
			'label'       => 'Width [Fixed]',
			'input_attrs' => array(
				'min'   => 800,
				'max'   => 1400,
				'step'  => 2,
			),
		) );
        
        //Lower Uni-Bar Content Width Fluid
		$wp_customize->add_setting(
		    'lower_unibar_content_width_fluid',
		    array(
		        'default' => '100',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_content_width_fluid', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_layout',
			'label'       => 'Width [Fluid]',
			'input_attrs' => array(
				'min'   => 50,
				'max'   => 100,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-bar Content Alignment
		$wp_customize->add_setting(
		    'lower_unibar_content_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_content_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Content Alignment',
		        'section' => 'lower_unibar_layout',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);
        
       $wp_customize->add_section('lower_unibar_background', array('title' => 'Background','panel' => 'lower_unibar','priority' => 30,));
       
       
		//Lower Uni-bar Background Title
		$wp_customize->add_setting(
		    'lower_unibar_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_background_title', 
			array(
				'label'	=> __( 'Background' ),
				'section' => 'lower_unibar_background',
				'settings' => 'lower_unibar_background_title',
			) 
		));
		
		//Lower Uni-bar Background Visibility
		$wp_customize->add_setting(
			'lower_unibar_background_visible'
		);
		$wp_customize->add_control(
		    'lower_unibar_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Uni-bar Background',
				'section' => 'lower_unibar_background',
		        'settings' => 'lower_unibar_background_visible',
		    )
		);
		
		//Lower Uni-bar Background Color
		$wp_customize->add_setting(
		    'lower_unibar_background_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'lower_unibar_background',
		            'settings' => 'lower_unibar_background_color',
		        )
		    )
		);
		
		//Lower Uni-bar Background Image
		$wp_customize->add_setting( 'lower_unibar_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_unibar_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'lower_unibar_background',
		            'settings' => 'lower_unibar_background_image'
		        )
		    )
		);

		//Lower Uni-bar Background Image position
		$wp_customize->add_setting(
		    'lower_unibar_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'lower_unibar_background',
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
		
		//Lower Uni-bar Background Image repeat
		$wp_customize->add_setting(
		    'lower_unibar_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'lower_unibar_background',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Lower Uni-bar Background Image Type
		$wp_customize->add_setting(
		    'lower_unibar_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'lower_unibar_background',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);
        
        $wp_customize->add_section('lower_unibar_borders', array('title' => 'Border','panel' => 'lower_unibar','priority' => 30,));

        //Lower Uni-bar Border Title
		$wp_customize->add_setting(
		    'lower_unibar_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_border_title', 
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'lower_unibar_borders',
				'settings' => 'lower_unibar_border_title',
			) 
		));
		
		//Lower Uni-bar Border Color
		$wp_customize->add_setting(
		    'lower_unibar_border_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'lower_unibar_borders',
		            'settings' => 'lower_unibar_border_color',
		        )
		    )
		);
		
		//Lower Uni-bar Border Style
		$wp_customize->add_setting(
		    'lower_unibar_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'lower_unibar_borders',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Lower Uni-bar Border Top
		$wp_customize->add_setting(
		    'lower_unibar_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_borders',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-bar Border Bottom
		$wp_customize->add_setting(
		    'lower_unibar_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_borders',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-bar Border Left
		$wp_customize->add_setting(
		    'lower_unibar_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_borders',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-bar Border Right
		$wp_customize->add_setting(
		    'lower_unibar_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_borders',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-bar Border Radius
		$wp_customize->add_setting(
		    'lower_unibar_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_borders',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

        $wp_customize->add_section('lower_unibar_padding', array('title' => 'Padding','panel' => 'lower_unibar','priority' => 30,));

        //Lower Uni-bar Padding Title
		$wp_customize->add_setting(
		    'lower_unibar_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_padding_title', 
			array(
				'label'	=> __( 'Padding' ),
				'section' => 'lower_unibar_padding',
				'settings' => 'lower_unibar_padding_title',
			) 
		));
		
		//Lower Uni-bar Padding Top
		$wp_customize->add_setting(
		    'lower_unibar_padding_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_padding',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-bar Padding Bottom
		$wp_customize->add_setting(
		    'lower_unibar_padding_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_padding',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-bar Padding Left
		$wp_customize->add_setting(
		    'lower_unibar_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_padding',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-bar Padding Right
		$wp_customize->add_setting(
		    'lower_unibar_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_padding',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
        
        $wp_customize->add_section('lower_unibar_margins', array('title' => 'Margins','panel' => 'lower_unibar','priority' => 30,));
        
        //Lower-Multibar Margins Title
		$wp_customize->add_setting(
		    'lower_unibar_margins_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_margins_title', 
			array(
				'label'	=> __( 'Margins' ),
				'section' => 'lower_unibar_margins',
				'settings' => 'lower_unibar_margins_title',
			) 
		));
		
		//Lower Uni-bar Margin Top
		$wp_customize->add_setting(
		    'lower_unibar_margin_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_margins',
			'label'       => 'Top Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		
		//Lower Uni-bar Margin Bottom
		$wp_customize->add_setting(
		    'lower_unibar_margin_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_margins',
			'label'       => 'Bottom Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
        
       $wp_customize->add_section('lower_unibar_menu_styling', array('title' => 'Menu Styling','panel' => 'lower_unibar','priority' => 30,));
       
       //Lower Uni-bar Grand Menu Styling Title
		$wp_customize->add_setting(
		    'lower_unibar_grand_menu_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'lower_unibar_grand_menu_styling_title', 
			array(
				'label'	=> __( 'Menu Styling' ),
				'section' => 'lower_unibar_menu_styling',
				'settings' => 'lower_unibar_grand_menu_styling_title',
			) 
		));
		
		//Lower Uni-Bar Menu Type
		$wp_customize->add_setting(
		    'lower_unibar_menu_type',
		    array(
		        'default' => 'horizontal',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_menu_type',
		    array(
		        'type' => 'select',
		        'label' => 'Menu Type',
		        'section' => 'lower_unibar_menu_styling',
		        'choices' => array(
					'horizontal' => 'Horizontal',
					'vertical' => 'Vertical',
		        ),
		    )
		);
		
		
		//Lower Uni-Bar Vertical Menu Layout Title
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_layout',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_vertical_menu_layout', 
			array(
				'label'	=> __( 'Vertical Layout' ),
				'section' => 'lower_unibar_menu_styling',
				'settings' => 'lower_unibar_vertical_menu_layout',
			) 
		));
		
		
		//Lower Uni-Bar Vertical Menu Height
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_height',
		    array(
		        'default' => '25',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_vertical_menu_height', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Height',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Vertical Menu Width
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_width',
		    array(
		        'default' => '30',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_vertical_menu_width', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Width',
			'input_attrs' => array(
				'min'   => 30,
				'max'   => 100,
				'step'  => 10,
			),
		) );
		
		//Lower Uni-Bar Vertical Menu Spacing
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_spacing',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_vertical_menu_spacing', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Button Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Vertical Font Styling Title
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_vertical_menu_styling_title', 
			array(
				'label'	=> __( 'Font Styling' ),
				'section' => 'lower_unibar_menu_styling',
				'settings' => 'lower_unibar_vertical_menu_styling_title',
			) 
		));
		
		//Lower Uni-Bar Vertical Menu Link Color
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_link_color',
		    array(
		        'default' => '#000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_vertical_menu_link_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'lower_unibar_menu_styling',
		            'settings' => 'lower_unibar_vertical_menu_link_color',
		        )
		    )
		);
		
		//Lower Uni-Bar Vertical Menu Link font
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_vertical_menu_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'lower_unibar_menu_styling',
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
		
		//Lower Uni-Bar Vertical Menu Font Weight
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_vertical_menu_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'lower_unibar_menu_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
		
		//Lower Uni-Bar Vertical Menu Link Hover Color
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_link_hover_color',
		    array(
		        'default' => '#317dbf',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_vertical_menu_link_hover_color',
		        array(
		            'label' => 'Link Hover Color',
		            'section' => 'lower_unibar_menu_styling',
		            'settings' => 'lower_unibar_vertical_menu_link_hover_color',
		        )
		    )
		);
		
		//Lower Uni-Bar Vertical Menu Link Decoration
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_link_decoration',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_vertical_menu_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'lower_unibar_menu_styling',
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
		
		//Lower Uni-Bar Vertical Menu Link Alignment
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_link_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_vertical_menu_link_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Text Alignment',
		        'section' => 'lower_unibar_menu_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);
		
		//Lower Uni-Bar Vertical Background Title
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_vertical_menu_background_title', 
			array(
				'label'	=> __( 'Background' ),
				'section' => 'lower_unibar_menu_styling',
				'settings' => 'lower_unibar_vertical_menu_background_title',
			) 
		));
		
		//Lower Uni-Bar Vertical Menu Background Visibility
		$wp_customize->add_setting(
			'lower_unibar_vertical_menu_background_visible'
		);
		$wp_customize->add_control(
		    'lower_unibar_vertical_menu_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Background Visibility',
				'section' => 'lower_unibar_menu_styling',
		        'settings' => 'lower_unibar_vertical_menu_background_visible',
		    )
		);
		
		//Lower Uni-Bar Vertical Menu Background Color
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_background_color',
		    array(
		        'default' => '#333',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_vertical_menu_background_color',
		        array(
		            'label' => 'Link Background Color',
		            'section' => 'lower_unibar_menu_styling',
		        )
		    )
		);
		
		//Lower Uni-Bar Vertical Menu Background Image
		$wp_customize->add_setting( 'lower_unibar_vertical_menu_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_unibar_vertical_menu_background_image',
		        array(
		            'label' => 'Link Background image',
		            'section' => 'lower_unibar_menu_styling',
		        )
		    )
		);
		
		//Lower Uni-Bar Vertical Hover Background Color
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_hover_background_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_vertical_menu_hover_background_color',
		        array(
		            'label' => 'Link Hover Background Color',
		            'section' => 'lower_unibar_menu_styling',
		        )
		    )
		);
		
		//Lower Uni-Bar Vertical Hover Background Image
		$wp_customize->add_setting( 'lower_unibar_vertical_menu_hover_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_unibar_vertical_menu_hover_background_image',
		        array(
		            'label' => 'Link Hover Background Image',
		            'section' => 'lower_unibar_menu_styling',
		        )
		    )
		);
		
		//Lower Uni-Bar Vertical Menu Background Image position
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_vertical_menu_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'lower_unibar_menu_styling',
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
		
		//Lower Uni-Bar Vertical Menu Background Image repeat
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_vertical_menu_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'lower_unibar_menu_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Lower Uni-Bar Vertical Menu Borders Title
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_borders_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_vertical_menu_borders_title', 
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'lower_unibar_menu_styling',
				'settings' => 'lower_unibar_vertical_menu_borders_title',
			) 
		));
		
		//Lower Uni-Bar Vertical Menu Border Color
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_border_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_vertical_menu_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'lower_unibar_menu_styling',
		            'settings' => 'lower_unibar_vertical_menu_border_color',
		        )
		    )
		);
		
		//Lower Uni-Bar Vertical Menu Border Style
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_vertical_menu_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'lower_unibar_menu_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Lower Uni-Bar Vertical Menu Border Top
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_vertical_menu_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Vertical Menu Border Bottom
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_vertical_menu_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Vertical Menu Border Left
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_vertical_menu_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Vertical Menu Border Right
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_vertical_menu_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Vertical Menu Border Radius
		$wp_customize->add_setting(
		    'lower_unibar_vertical_menu_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_vertical_menu_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Lower Uni-Bar Horizontal Menu Layout Title
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_layout',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_horizontal_menu_layout', 
			array(
				'label'	=> __( 'Horizontal Layout' ),
				'section' => 'lower_unibar_menu_styling',
				'settings' => 'lower_unibar_horizontal_menu_layout',
			) 
		));
		
		//Lower Uni-Bar Horizontal Menu Height
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_height',
		    array(
		        'default' => '20',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_horizontal_menu_height', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Height',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Horizontal Menu Width
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_width',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_horizontal_menu_width', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Width',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Horizontal Menu Spacing
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_spacing',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_horizontal_menu_spacing', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Link Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );
		
		//Footer Font Styling Title
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_horizontal_menu_styling_title', 
			array(
				'label'	=> __( 'Font Styling' ),
				'section' => 'lower_unibar_menu_styling',
				'settings' => 'lower_unibar_horizontal_menu_styling_title',
			) 
		));
		
		//Lower Uni-Bar Horizontal Menu Link Color
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_link_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_horizontal_menu_link_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'lower_unibar_menu_styling',
		            'settings' => 'lower_unibar_horizontal_menu_link_color',
		        )
		    )
		);
		
		//Lower Uni-Bar Horizontal Menu Link font
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_horizontal_menu_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'lower_unibar_menu_styling',
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
		
		//Lower Uni-Bar Horizontal Menu Font Weight
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_horizontal_menu_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'lower_unibar_menu_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
		
		//Lower Uni-Bar Horizontal Menu Link Hover Color
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_link_hover_color',
		    array(
		        'default' => '#317dbf',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_horizontal_menu_link_hover_color',
		        array(
		            'label' => 'Link Hover Color',
		            'section' => 'lower_unibar_menu_styling',
		            'settings' => 'lower_unibar_horizontal_menu_link_hover_color',
		        )
		    )
		);
		
		//Lower Uni-Bar Horizontal Menu Link Decoration
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_link_decoration',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_horizontal_menu_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'lower_unibar_menu_styling',
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
		
		//Lower Uni-Bar Background Title
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_horizontal_menu_background_title', 
			array(
				'label'	=> __( 'Background' ),
				'section' => 'lower_unibar_menu_styling',
				'settings' => 'lower_unibar_horizontal_menu_background_title',
			) 
		));
		
		//Lower Uni-Bar Horizontal Menu Background Visibility
		$wp_customize->add_setting(
			'lower_unibar_horizontal_menu_background_visible'
		);
		$wp_customize->add_control(
		    'lower_unibar_horizontal_menu_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Background Visibility',
				'section' => 'lower_unibar_menu_styling',
		        'settings' => 'lower_unibar_horizontal_menu_background_visible',
		    )
		);
		
		//Lower Uni-Bar Horizontal Menu Background Color
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_background_color',
		    array(
		        'default' => '#333',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_horizontal_menu_background_color',
		        array(
		            'label' => 'Link Background Color',
		            'section' => 'lower_unibar_menu_styling',
		        )
		    )
		);
		
		//Lower Uni-Bar Horizontal Menu Background Image
		$wp_customize->add_setting( 'lower_unibar_horizontal_menu_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_unibar_horizontal_menu_background_image',
		        array(
		            'label' => 'Link Background image',
		            'section' => 'lower_unibar_menu_styling',
		        )
		    )
		);
		
		//Lower Uni-Bar Hover Background Color
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_hover_background_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_horizontal_menu_hover_background_color',
		        array(
		            'label' => 'Link Hover Background Color',
		            'section' => 'lower_unibar_menu_styling',
		        )
		    )
		);
		
		//Lower Uni-Bar Hover Background Image
		$wp_customize->add_setting( 'lower_unibar_horizontal_menu_hover_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_unibar_horizontal_menu_hover_background_image',
		        array(
		            'label' => 'Link Hover Background Image',
		            'section' => 'lower_unibar_menu_styling',
		        )
		    )
		);
		
		//Lower Uni-Bar Horizontal Menu Background Image position
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_horizontal_menu_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'lower_unibar_menu_styling',
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
		
		//Lower Uni-Bar Horizontal Menu Background Image repeat
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_horizontal_menu_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'lower_unibar_menu_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Lower Uni-Bar Horizontal Menu Borders Title
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_borders_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_horizontal_menu_borders_title', 
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'lower_unibar_menu_styling',
				'settings' => 'lower_unibar_horizontal_menu_borders_title',
			) 
		));
		
		//Lower Uni-Bar Horizontal Menu Border Color
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_border_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_horizontal_menu_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'lower_unibar_menu_styling',
		            'settings' => 'lower_unibar_horizontal_menu_border_color',
		        )
		    )
		);
		
		//Lower Uni-Bar Horizontal Menu Border Style
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_horizontal_menu_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'lower_unibar_menu_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Lower Uni-Bar Horizontal Menu Border Top
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_horizontal_menu_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Horizontal Menu Border Bottom
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_horizontal_menu_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Horizontal Menu Border Left
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_horizontal_menu_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Horizontal Menu Border Right
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_horizontal_menu_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Horizontal Menu Border Radius
		$wp_customize->add_setting(
		    'lower_unibar_horizontal_menu_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_horizontal_menu_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_menu_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
        
        //Lower Uni-bar Grand Widget Styling Title
		$wp_customize->add_setting(
		    'lower_unibar_grand_widget_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'lower_unibar_grand_widget_styling_title', 
			array(
				'label'	=> __( 'Widget Styling' ),
				'section' => 'lower_unibar_menu_styling',
				'settings' => 'lower_unibar_grand_widget_styling_title',
			) 
		));
        
        $wp_customize->add_section('lower_unibar_widget_styling', array('title' => 'Widget Styling','panel' => 'lower_unibar','priority' => 30,));

        //Lower Uni-Bar Widget Header Visibility
		$wp_customize->add_setting(
			'lower_unibar_widgets_header_visibility',
            array(
		        'default' => TRUE,
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_header_visibility',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Widget Title',
				'section' => 'lower_unibar_widget_styling',
		        'settings' => 'lower_unibar_widgets_header_visibility',
		    )
		);
		
		//Lower Uni-Bar Widget Title Styling Title
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_widgets_title_title', 
			array(
				'label'	=> __( 'Title Font Styling' ),
				'section' => 'lower_unibar_widget_styling',
				'settings' => 'lower_unibar_widgets_title_title',
			) 
		));
		
		//Lower Uni-Bar Widget Title Text Color
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_text_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_widgets_title_text_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'lower_unibar_widget_styling',
		            'settings' => 'lower_unibar_widgets_title_text_color',
		        )
		    )
		);
		
		//Lower Uni-Bar Widget Title text font
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_title_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'lower_unibar_widget_styling',
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
		
		//Lower Uni-Bar Widget Title Font Size
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_font_size',
		    array(
		        'default' => '18',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-Bar Widget Title Font Weight
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_font_weight',
		    array(
		        'default' => 'bold',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_title_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'lower_unibar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
		
		//Lower Uni-Bar Widget Title Font Alignment
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_font_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_title_font_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Font Alignment',
		        'section' => 'lower_unibar_widget_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);

		//Lower Uni-Bar Widget Title Background Title
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_widgets_title_background_title', 
			array(
				'label'	=> __( 'Title Background' ),
				'section' => 'lower_unibar_widget_styling',
				'settings' => 'lower_unibar_widgets_title_background_title',
			) 
		));
		
		//Lower Uni-Bar Widget Title Background Visibility
		$wp_customize->add_setting(
			'lower_unibar_widgets_title_background_visible',
            array(
		        'default' => TRUE,
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_title_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Title Background',
				'section' => 'lower_unibar_widget_styling',
		        'settings' => 'lower_unibar_widgets_title_background_visible',
		    )
		);
		
		//Lower Uni-Bar Widget Title Background Color
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_background_color',
		    array(
		        'default' => '#383838',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_widgets_title_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'lower_unibar_widget_styling',
		            'settings' => 'lower_unibar_widgets_title_background_color',
		        )
		    )
		);
		
		//Lower Uni-Bar Widget Title Background Image
		$wp_customize->add_setting( 'lower_unibar_widgets_title_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_unibar_widgets_title_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'lower_unibar_widget_styling',
		            'settings' => 'lower_unibar_widgets_title_background_image'
		        )
		    )
		);

		//Lower Uni-Bar Widget Title Background Image position
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_title_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'lower_unibar_widget_styling',
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
		
		//Lower Uni-Bar Widget Title Background Image repeat
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_title_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'lower_unibar_widget_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Lower Uni-Bar Widget Title Background Image Type
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_title_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'lower_unibar_widget_styling',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);
		
		//Lower Uni-Bar Widget Title Border Title
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_widgets_title_border_title', 
			array(
				'label'	=> __( 'Title Borders' ),
				'section' => 'lower_unibar_widget_styling',
				'settings' => 'lower_unibar_widgets_title_border_title',
			) 
		));
		
		//Lower Uni-Bar Widget Title Border Color
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_border_color',
		    array(
		        'default' => '#000000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_widgets_title_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'lower_unibar_widget_styling',
		            'settings' => 'lower_unibar_widgets_title_border_color',
		        )
		    )
		);
		
		//Lower Uni-Bar Widget Title Border Style
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_title_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'lower_unibar_widget_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Lower Uni-Bar Widget Title Border Top
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Widget Title Border Bottom
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Widget Title Border Left
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Widget Title Border Right
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Widget Title Border Radius
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-Bar Widget Title Padding Title
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_widgets_title_padding_title', 
			array(
				'label'	=> __( 'Title Padding' ),
				'section' => 'lower_unibar_widget_styling',
				'settings' => 'lower_unibar_widgets_title_padding_title',
			) 
		));
		
		//Lower Uni-Bar Widget Title Padding Top
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_padding_top',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-Bar Widget Title Padding Bottom
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_padding_bottom',
		    array(
		        'default' => '10',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-Bar Widget Title Padding Left
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-Bar Widget Title Padding Right
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-Bar Widget Title Margins Title
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_margins_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_widgets_title_margins_title', 
			array(
				'label'	=> __( 'Title Margins' ),
				'section' => 'lower_unibar_widget_styling',
				'settings' => 'lower_unibar_widgets_title_margins_title',
			) 
		));
		
		//Lower Uni-Bar Widget Title Margin Top
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_margin_top',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Top Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		
		//Lower Uni-Bar Widget Title Margin Bottom
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title_margin_bottom',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_title_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Bottom Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
        //Lower Uni-bar Widget Content Styling Title
		$wp_customize->add_setting(
		    'lower_unibar_widgets_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_widgets_title', 
			array(
				'label'	=> __( 'Content Font Styling' ),
				'section' => 'lower_unibar_widget_styling',
				'settings' => 'lower_unibar_widgets_title',
			) 
		));
		
		//Lower Uni-bar Widget Text Color
		$wp_customize->add_setting(
		    'lower_unibar_widgets_text_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_widgets_text_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'lower_unibar_widget_styling',
		            'settings' => 'lower_unibar_widgets_text_color',
		        )
		    )
		);
		
		//Lower Uni-bar Widget text font
		$wp_customize->add_setting(
		    'lower_unibar_widgets_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'lower_unibar_widget_styling',
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
		
		//Lower Uni-bar Widget Font Size
		$wp_customize->add_setting(
		    'lower_unibar_widgets_font_size',
		    array(
		        'default' => '12',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-bar Widget Font Weight
		$wp_customize->add_setting(
		    'lower_unibar_widgets_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'lower_unibar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
		
		//Lower Uni-bar Widget Font Alignment
		$wp_customize->add_setting(
		    'lower_unibar_widgets_font_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_font_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Font Alignment',
		        'section' => 'lower_unibar_widget_styling',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);
		
		//Lower Uni-bar Link Color
		$wp_customize->add_setting(
		    'lower_unibar_widgets_link_color',
		    array(
		        'default' => '#F4F4F4',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_widgets_link_color',
		        array(
		            'label' => 'Link Color',
		            'section' => 'lower_unibar_widget_styling',
		            'settings' => 'lower_unibar_widgets_link_color',
		        )
		    )
		);
		
		//Lower Uni-bar Link Decoration
		$wp_customize->add_setting(
		    'lower_unibar_widgets_link_decoration',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'lower_unibar_widget_styling',
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
		
		//Lower Uni-bar Link Weight
		$wp_customize->add_setting(
		    'lower_unibar_widgets_link_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_link_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Link Weight',
		        'section' => 'lower_unibar_widget_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
		
		//Lower Uni-bar Widget Background Title
		$wp_customize->add_setting(
		    'lower_unibar_widgets_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_widgets_background_title', 
			array(
				'label'	=> __( 'Content Background' ),
				'section' => 'lower_unibar_widget_styling',
				'settings' => 'lower_unibar_widgets_background_title',
			) 
		));
		
		//Lower Uni-bar Widget Background Visibility
		$wp_customize->add_setting(
			'lower_unibar_widgets_background_visible',
            array(
		        'default' => TRUE,
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Content Background',
				'section' => 'lower_unibar_widget_styling',
		        'settings' => 'lower_unibar_widgets_background_visible',
		    )
		);
		
		//Lower Uni-bar Widget Background Color
		$wp_customize->add_setting(
		    'lower_unibar_widgets_background_color',
		    array(
		        'default' => '#000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_widgets_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'lower_unibar_widget_styling',
		            'settings' => 'lower_unibar_widgets_background_color',
		        )
		    )
		);
		
		//Lower Uni-bar Widget Background Image
		$wp_customize->add_setting( 'lower_unibar_widgets_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'lower_unibar_widgets_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'lower_unibar_widget_styling',
		            'settings' => 'lower_unibar_widgets_background_image'
		        )
		    )
		);

		//Lower Uni-bar Widget Background Image position
		$wp_customize->add_setting(
		    'lower_unibar_widgets_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'lower_unibar_widget_styling',
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
		
		//Lower Uni-bar Widget Background Image repeat
		$wp_customize->add_setting(
		    'lower_unibar_widgets_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'lower_unibar_widget_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Lower Uni-bar Widget Background Image Type
		$wp_customize->add_setting(
		    'lower_unibar_widgets_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'lower_unibar_widget_styling',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);
		
		//Lower Uni-bar Widget Border Title
		$wp_customize->add_setting(
		    'lower_unibar_widgets_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_widgets_border_title', 
			array(
				'label'	=> __( 'Widget Content Borders' ),
				'section' => 'lower_unibar_widget_styling',
				'settings' => 'lower_unibar_widgets_border_title',
			) 
		));
		
		//Lower Uni-bar Widget Border Color
		$wp_customize->add_setting(
		    'lower_unibar_widgets_border_color',
		    array(
		        'default' => '#F3F3F3',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'lower_unibar_widgets_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'lower_unibar_widget_styling',
		            'settings' => 'lower_unibar_widgets_border_color',
		        )
		    )
		);
		
		//Lower Uni-bar Widget Border Style
		$wp_customize->add_setting(
		    'lower_unibar_widgets_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'lower_unibar_widgets_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'lower_unibar_widget_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Lower Uni-bar Widget Border Top
		$wp_customize->add_setting(
		    'lower_unibar_widgets_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-bar Widget Border Bottom
		$wp_customize->add_setting(
		    'lower_unibar_widgets_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-bar Widget Border Left
		$wp_customize->add_setting(
		    'lower_unibar_widgets_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-bar Widget Border Right
		$wp_customize->add_setting(
		    'lower_unibar_widgets_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-bar Widget Border Radius
		$wp_customize->add_setting(
		    'lower_unibar_widgets_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Lower Uni-bar Widget Padding Title
		$wp_customize->add_setting(
		    'lower_unibar_widgets_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_widgets_padding_title', 
			array(
				'label'	=> __( 'Padding' ),
				'section' => 'lower_unibar_widget_styling',
				'settings' => 'lower_unibar_widgets_padding_title',
			) 
		));
		
		//Lower Uni-bar Widget Padding Top
		$wp_customize->add_setting(
		    'lower_unibar_widgets_padding_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-bar Widget Padding Bottom
		$wp_customize->add_setting(
		    'lower_unibar_widgets_padding_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-bar Widget Padding Left
		$wp_customize->add_setting(
		    'lower_unibar_widgets_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-bar Widget Padding Right
		$wp_customize->add_setting(
		    'lower_unibar_widgets_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Lower Uni-bar Widget Margins Title
		$wp_customize->add_setting(
		    'lower_unibar_widgets_margins_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'lower_unibar_widgets_margins_title', 
			array(
				'label'	=> __( 'Margins' ),
				'section' => 'lower_unibar_widget_styling',
				'settings' => 'lower_unibar_widgets_margins_title',
			) 
		));
		
		//Lower Uni-bar Widget Margin Top
		$wp_customize->add_setting(
		    'lower_unibar_widgets_margin_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Top Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		
		//Lower Uni-bar Widget Margin Bottom
		$wp_customize->add_setting(
		    'lower_unibar_widgets_margin_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'lower_unibar_widgets_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'lower_unibar_widget_styling',
			'label'       => 'Bottom Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
?>