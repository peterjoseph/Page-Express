<?php

$wp_customize->add_panel('footer', array('title' => __( 'Footer' ), 'priority' => 30,) );
		
        $wp_customize->add_section('footer_visibility', array('title' => 'Footer Visibility','panel' => 'footer','priority' => 30,));
        
        /** FOOTER VISIBILITY **/
		$wp_customize->add_setting(
		    'footer_visibility',
		    array(
		        'default' => 'visible',
		    )
		);
		$wp_customize->add_control(
		    'footer_visibility',
		    array(
		        'type' => 'select',
                'label' => 'Footer Visibility',
                'description' => 'Control how you would like the Footer to appear. <br>For page specific visibility options use the "Panel Visibility" box on the page editor.',
		        'section' => 'footer_visibility',
		        'choices' => array(
					'visible' => 'Visible Everywhere',
		            'hidden' => 'Hidden',
		            'homepage' => 'Homepage Only',
		            'page' => 'Pages Only',
					'posts' => 'Posts Only',
		        ),
		    )
		);
        
        
        /** FOOTER CONTENT **/
        $wp_customize->add_section('footer_content', array('title' => 'Copyright Text','panel' => 'footer','priority' => 30,));
		
		//Footer Copyright Text
		$wp_customize->add_setting(
		    'footer_copyright',
		    array(
		        'default' => 'Copyright &copy; 2016. All Rights Reserved. Created with Object.',
		    )
		);
		$wp_customize->add_control(
		    'footer_copyright',
		    array(
		        'label' => 'Footer Text/Html',
				'description' => 'Add your own text or html to be rendered in the footer area. <br>This may include copyright information or links to other content and pages.',
		        'section' => 'footer_content',
		        'type' => 'textarea',
		    )
		);
        
        /** FOOTER Layout **/
        $wp_customize->add_section('footer_layout', array('title' => 'Layout & Design','panel' => 'footer','priority' => 30,));
		
        //Footer Background Area Width % or px
		$wp_customize->add_setting(
		    'footer_background_width_option',
		    array(
		        'default' => 'fluid',
		    )
		);
		$wp_customize->add_control(
		    'footer_background_width_option',
		    array(
		        'type' => 'select',
		        'label' => 'Footer Width (Fixed or Flexible)',
		        'section' => 'footer_layout',
		        'choices' => array(
					'fixed' => 'Fixed',
		            'fluid' => 'Fluid',
		        ),
		    )
		);
        
        //Footer Background Area Width Fixed
		$wp_customize->add_setting(
		    'footer_background_width_fixed',
		    array(
		        'default' => '1100',
		    )
		);
		$wp_customize->add_control( 'footer_background_width_fixed', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_layout',
			'label'       => 'Width [Fixed]',
			'input_attrs' => array(
				'min'   => 800,
				'max'   => 1400,
				'step'  => 2,
			),
		) );
        
        //Footer Background Area Width Fluid
		$wp_customize->add_setting(
		    'footer_background_width_fluid',
		    array(
		        'default' => '100',
		    )
		);
		$wp_customize->add_control( 'footer_background_width_fluid', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_layout',
			'label'       => 'Width [Fluid]',
			'input_attrs' => array(
				'min'   => 50,
				'max'   => 100,
				'step'  => 2,
			),
		) );
        
        //Footer Alignment
		$wp_customize->add_setting(
		    'footer_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'footer_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Footer Alignment',
		        'section' => 'footer_layout',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);
        
        //Line Space
		$wp_customize->add_setting(
		    'footer_layout_line_space_one',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Line_Space( 
			$wp_customize, 
			'footer_layout_line_space_one', 
			array(
				'section' => 'footer_layout',
				'settings' => 'footer_layout_line_space_one',
			) 
		));
		
        
        //Footer Content Area Width % or px
		$wp_customize->add_setting(
		    'footer_content_area_width_option',
		    array(
		        'default' => 'fixed',
		    )
		);
		$wp_customize->add_control(
		    'footer_content_area_width_option',
		    array(
		        'type' => 'select',
		        'label' => 'Footer Content Width (Fixed or Flexible)',
		        'section' => 'footer_layout',
		        'choices' => array(
					'fixed' => 'Fixed',
		            'fluid' => 'Fluid',
		        ),
		    )
		);
        
        //Footer Content Area Width Fixed
		$wp_customize->add_setting(
		    'footer_content_area_width_fixed',
		    array(
		        'default' => '1000',
		    )
		);
		$wp_customize->add_control( 'footer_content_area_width_fixed', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_layout',
			'label'       => 'Width [Fixed]',
			'input_attrs' => array(
				'min'   => 800,
				'max'   => 1400,
				'step'  => 2,
			),
		) );
        
        //Footer Content Area Width Fluid
		$wp_customize->add_setting(
		    'footer_content_area_width_fluid',
		    array(
		        'default' => '100',
		    )
		);
		$wp_customize->add_control( 'footer_content_area_width_fluid', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_layout',
			'label'       => 'Width [Fluid]',
			'input_attrs' => array(
				'min'   => 50,
				'max'   => 100,
				'step'  => 2,
			),
		) );
        
        //Footer Content Alignment
		$wp_customize->add_setting(
		    'footer_content_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'footer_content_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Footer Content Alignment',
		        'section' => 'footer_layout',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
		        ),
		    )
		);
        
        //Line Space
		$wp_customize->add_setting(
		    'footer_layout_line_space_two',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Line_Space( 
			$wp_customize, 
			'footer_layout_line_space_two', 
			array(
				'section' => 'footer_layout',
				'settings' => 'footer_layout_line_space_two',
			) 
		));
		
		//Text and Widget Alignment
		$wp_customize->add_setting(
		    'footer_widget_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'footer_widget_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Text & Widget Horizontal Alignment',
		        'section' => 'footer_layout',
		        'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
					'leftandright' => 'Far Left & Far Right',
		        ),
		    )
		);
		
		//Footer link position (Below, Above, Same Line as copyright text)
		$wp_customize->add_setting(
		    'footer_widget_position',
		    array(
		        'default' => 'sameline',
		    )
		);
		$wp_customize->add_control(
		    'footer_widget_position',
		    array(
		        'type' => 'select',
		        'label' => 'Widget Area Position',
		        'section' => 'footer_layout',
		        'choices' => array(
					'sameline' => 'Same Line As Copyright Text',
					'below' => 'Below Copyright Text',
		        ),
		    )
		);
		
        
        /** FOOTER FONTS **/
        $wp_customize->add_section('footer_font_styling', array('title' => 'Typography','panel' => 'footer','priority' => 30,));
		
		//Footer Text Color
		$wp_customize->add_setting(
		    'footer_text_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'footer_text_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'footer_font_styling',
		            'settings' => 'footer_text_color',
		        )
		    )
		);
		
		//Footer text font
		$wp_customize->add_setting(
		    'footer_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'footer_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'footer_font_styling',
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
		
		//Footer Font Size
		$wp_customize->add_setting(
		    'footer_font_size',
		    array(
		        'default' => '14',
		    )
		);
		$wp_customize->add_control( 'footer_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_font_styling',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Footer Font Weight
		$wp_customize->add_setting(
		    'footer_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'footer_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'footer_font_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
		
		//Footer Link Color
		$wp_customize->add_setting(
		    'footer_link_color',
		    array(
		        'default' => '#317dbf',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'footer_link_color',
		        array(
		            'label' => 'Link Color',
		            'section' => 'footer_font_styling',
		            'settings' => 'footer_link_color',
		        )
		    )
		);
		
		//Footer Link Decoration
		$wp_customize->add_setting(
		    'footer_link_decoration',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'footer_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'footer_font_styling',
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
		
		//Footer Link Weight
		$wp_customize->add_setting(
		    'footer_link_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'footer_link_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Link Weight',
		        'section' => 'footer_font_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
        
         
        /** FOOTER BACKGROUND **/
        $wp_customize->add_section('footer_background', array('title' => 'Background','panel' => 'footer','priority' => 30,));
		
		//Footer Background Visibility
		$wp_customize->add_setting(
			'footer_background_visible'
		);
		$wp_customize->add_control(
		    'footer_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Footer Background',
				'section' => 'footer_background',
		        'settings' => 'footer_background_visible',
		    )
		);
		
		//Footer Background Color
		$wp_customize->add_setting(
		    'footer_background_color',
		    array(
		        'default' => '#333',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'footer_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'footer_background',
		            'settings' => 'footer_background_color',
		        )
		    )
		);
		
		//Footer Background Image
		$wp_customize->add_setting( 'footer_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'footer_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'footer_background',
		            'settings' => 'footer_background_image'
		        )
		    )
		);

		//Footer Background Image position
		$wp_customize->add_setting(
		    'footer_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'footer_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'footer_background',
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
		
		//Footer Background Image repeat
		$wp_customize->add_setting(
		    'footer_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'footer_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'footer_background',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
        
        
        /** FOOTER BORDER **/
        $wp_customize->add_section('footer_borders', array('title' => 'Borders','panel' => 'footer','priority' => 30,));
        
        
		//Border Title
		$wp_customize->add_setting(
		    'footer_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'footer_border_title', 
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'footer_borders',
				'settings' => 'footer_border_title',
			) 
		));
		
		//Footer Border Color
		$wp_customize->add_setting(
		    'footer_border_color',
		    array(
		        'default' => '#000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'footer_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'footer_borders',
		            'settings' => 'footer_border_color',
		        )
		    )
		);
		
		//Footer Border Style
		$wp_customize->add_setting(
		    'footer_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'footer_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'footer_borders',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Footer Border Top
		$wp_customize->add_setting(
		    'footer_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_borders',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Footer Border Bottom
		$wp_customize->add_setting(
		    'footer_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_borders',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Footer Border Left
		$wp_customize->add_setting(
		    'footer_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_borders',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Footer Border Right
		$wp_customize->add_setting(
		    'footer_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_borders',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Footer Border Radius
		$wp_customize->add_setting(
		    'footer_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_borders',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
        
        /** FOOTER PADDING **/
        $wp_customize->add_section('footer_padding', array('title' => 'Inner Spacing','panel' => 'footer','priority' => 30,));
	
		//Footer Padding Top
		$wp_customize->add_setting(
		    'footer_padding_top',
		    array(
		        'default' => '14',
		    )
		);
		$wp_customize->add_control( 'footer_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_padding',
			'label'       => 'Top',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Footer Padding Bottom
		$wp_customize->add_setting(
		    'footer_padding_bottom',
		    array(
		        'default' => '14',
		    )
		);
		$wp_customize->add_control( 'footer_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_padding',
			'label'       => 'Bottom',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Footer Padding Left
		$wp_customize->add_setting(
		    'footer_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_padding',
			'label'       => 'Left',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Footer Padding Right
		$wp_customize->add_setting(
		    'footer_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_padding',
			'label'       => 'Right',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
        
        /** FOOTER MARGINS **/
        $wp_customize->add_section('footer_margins', array('title' => 'Outer Spacing','panel' => 'footer','priority' => 30,));
		
		//Footer Margin Top
		$wp_customize->add_setting(
		    'footer_margin_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_margins',
			'label'       => 'Top',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		
		//Footer Margin Bottom
		$wp_customize->add_setting(
		    'footer_margin_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_margins',
			'label'       => 'Bottom',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
        
        /** FOOTER MENU STYLING **/
        $wp_customize->add_section('footer_menu_styling', array('title' => 'Menu Widget Styling','panel' => 'footer','priority' => 30,));
        
        //Footer Menu Layout Title
		$wp_customize->add_setting(
		    'footer_menu_layout',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'footer_menu_layout', 
			array(
				'label'	=> __( 'Layout' ),
				'section' => 'footer_menu_styling',
				'settings' => 'footer_menu_layout',
			) 
		));
		
		//Footer Menu Height
		$wp_customize->add_setting(
		    'footer_menu_height',
		    array(
		        'default' => '20',
		    )
		);
		$wp_customize->add_control( 'footer_menu_height', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_menu_styling',
			'label'       => 'Height',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Footer Menu Width
		$wp_customize->add_setting(
		    'footer_menu_width',
		    array(
		        'default' => '6',
		    )
		);
		$wp_customize->add_control( 'footer_menu_width', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_menu_styling',
			'label'       => 'Width',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );
		
		//Footer Menu Spacing
		$wp_customize->add_setting(
		    'footer_menu_spacing',
		    array(
		        'default' => '3',
		    )
		);
		$wp_customize->add_control( 'footer_menu_spacing', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_menu_styling',
			'label'       => 'Link Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 25,
				'step'  => 1,
			),
		) );
		
		//Footer Font Styling Title
		$wp_customize->add_setting(
		    'footer_menu_styling_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'footer_menu_styling_title', 
			array(
				'label'	=> __( 'Typography' ),
				'section' => 'footer_menu_styling',
				'settings' => 'footer_menu_styling_title',
			) 
		));
		
		//Footer Menu Link Color
		$wp_customize->add_setting(
		    'footer_menu_link_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'footer_menu_link_color',
		        array(
		            'label' => 'Font Color',
		            'section' => 'footer_menu_styling',
		            'settings' => 'footer_menu_link_color',
		        )
		    )
		);
		
		//Footer Menu Link font
		$wp_customize->add_setting(
		    'footer_menu_fonts',
		    array(
		        'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
		    )
		);
		$wp_customize->add_control(
		    'footer_menu_fonts',
		    array(
		        'type' => 'select',
		        'label' => 'Font Style',
		        'section' => 'footer_menu_styling',
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
		
		//Footer Menu Font Weight
		$wp_customize->add_setting(
		    'footer_menu_font_weight',
		    array(
		        'default' => 'normal',
		    )
		);
		$wp_customize->add_control(
		    'footer_menu_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font Weight',
		        'section' => 'footer_menu_styling',
		        'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
		        ),
		    )
		);
		
		//Footer Menu Link Hover Color
		$wp_customize->add_setting(
		    'footer_menu_link_hover_color',
		    array(
		        'default' => '#F4F4F4',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'footer_menu_link_hover_color',
		        array(
		            'label' => 'Link Hover Color',
		            'section' => 'footer_menu_styling',
		            'settings' => 'footer_menu_link_hover_color',
		        )
		    )
		);
		
		//Footer Menu Link Decoration
		$wp_customize->add_setting(
		    'footer_menu_link_decoration',
		    array(
		        'default' => 'none',
		    )
		);
		$wp_customize->add_control(
		    'footer_menu_link_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Link Decoration',
		        'section' => 'footer_menu_styling',
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
		
		//Footer Background Title
		$wp_customize->add_setting(
		    'footer_menu_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'footer_menu_background_title', 
			array(
				'label'	=> __( 'Background' ),
				'section' => 'footer_menu_styling',
				'settings' => 'footer_menu_background_title',
			) 
		));
		
		//Footer Menu Background Visibility
		$wp_customize->add_setting(
			'footer_menu_background_visible'
		);
		$wp_customize->add_control(
		    'footer_menu_background_visible',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Background Visibility',
				'section' => 'footer_menu_styling',
		        'settings' => 'footer_menu_background_visible',
		    )
		);
		
		//Footer Menu Background Color
		$wp_customize->add_setting(
		    'footer_menu_background_color',
		    array(
		        'default' => '#1C1C1C',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'footer_menu_background_color',
		        array(
		            'label' => 'Link Background Color',
		            'section' => 'footer_menu_styling',
		        )
		    )
		);
		
		//Footer Menu Background Image
		$wp_customize->add_setting( 'footer_menu_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'footer_menu_background_image',
		        array(
		            'label' => 'Link Background image',
		            'section' => 'footer_menu_styling',
		        )
		    )
		);
		
		//Footer Hover Background Color
		$wp_customize->add_setting(
		    'footer_menu_hover_background_color',
		    array(
		        'default' => '#5C5C5C',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'footer_menu_hover_background_color',
		        array(
		            'label' => 'Link Hover Background Color',
		            'section' => 'footer_menu_styling',
		        )
		    )
		);
		
		//Footer Hover Background Image
		$wp_customize->add_setting( 'footer_menu_hover_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'footer_menu_hover_background_image',
		        array(
		            'label' => 'Link Hover Background Image',
		            'section' => 'footer_menu_styling',
		        )
		    )
		);
		
		//Footer Menu Background Image position
		$wp_customize->add_setting(
		    'footer_menu_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'footer_menu_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'footer_menu_styling',
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
		
		//Footer Menu Background Image repeat
		$wp_customize->add_setting(
		    'footer_menu_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'footer_menu_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'footer_menu_styling',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Footer Menu Borders Title
		$wp_customize->add_setting(
		    'footer_menu_borders_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'footer_menu_borders_title', 
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'footer_menu_styling',
				'settings' => 'footer_menu_borders_title',
			) 
		));
		
		//Footer Menu Border Color
		$wp_customize->add_setting(
		    'footer_menu_border_color',
		    array(
		        'default' => '#000',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'footer_menu_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'footer_menu_styling',
		            'settings' => 'footer_menu_border_color',
		        )
		    )
		);
		
		//Footer Menu Border Style
		$wp_customize->add_setting(
		    'footer_menu_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'footer_menu_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'footer_menu_styling',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Footer Menu Border Top
		$wp_customize->add_setting(
		    'footer_menu_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_menu_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_menu_styling',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Footer Menu Border Bottom
		$wp_customize->add_setting(
		    'footer_menu_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_menu_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_menu_styling',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Footer Menu Border Left
		$wp_customize->add_setting(
		    'footer_menu_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_menu_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_menu_styling',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Footer Menu Border Right
		$wp_customize->add_setting(
		    'footer_menu_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'footer_menu_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_menu_styling',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Footer Menu Border Radius
		$wp_customize->add_setting(
		    'footer_menu_border_radius',
		    array(
		        'default' => '4',
		    )
		);
		$wp_customize->add_control( 'footer_menu_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'footer_menu_styling',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
?>