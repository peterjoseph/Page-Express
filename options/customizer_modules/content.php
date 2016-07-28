<?php

$wp_customize->add_panel('content', array('title' => __( 'Content' ), 'priority' => 30,) );
		
        $wp_customize->add_section('content_visibility', array('title' => 'Content Visibility','panel' => 'content','priority' => 30,));
        
		//Wrapper (Content & Sidebars) Visibility
		$wp_customize->add_setting(
		    'wrapper_visibility',
		    array(
		        'default' => 'visible',
		    )
		);
		$wp_customize->add_control(
		    'wrapper_visibility',
		    array(
		        'type' => 'select',
		        'label' => 'Wrapper (Content & Sidebars)',
		        'section' => 'content_visibility',
		        'choices' => array(
					'visible' => 'Visible Everywhere',
		            'hidden' => 'Hidden',
		            'homepage' => 'Homepage Only',
		            'page' => 'Pages Only',
					'posts' => 'Posts Only',
		        ),
		    )
		);
        
        //Content Visibility
		$wp_customize->add_setting(
		    'content_visibility',
		    array(
		        'default' => 'visible',
		    )
		);
		$wp_customize->add_control(
		    'content_visibility',
		    array(
		        'type' => 'select',
		        'label' => 'Content',
		        'section' => 'content_visibility',
		        'choices' => array(
					'visible' => 'Visible Everywhere',
		            'hidden' => 'Hidden',
		            'homepage' => 'Homepage Only',
		            'page' => 'Pages Only',
					'posts' => 'Posts Only',
		        ),
		    )
		);
        
        
        $wp_customize->add_section('content_wrapper_layout', array('title' => 'Wrapper Layout','panel' => 'content','priority' => 30,));
        
		//Content Layout Title
		$wp_customize->add_setting(
		    'cw_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'cw_layout_title', 
			array(
				'label'	=> __( 'Layout' ),
				'section' => 'content_wrapper_layout',
				'settings' => 'cw_layout_title',
			) 
		));
        
        //Wrapper Width % or px
		$wp_customize->add_setting(
		    'cw_width_option',
		    array(
		        'default' => 'fixed',
		    )
		);
		$wp_customize->add_control(
		    'cw_width_option',
		    array(
		        'type' => 'select',
		        'label' => 'Wrapper Width (Fixed or Flexible)',
		        'section' => 'content_wrapper_layout',
		        'choices' => array(
					'fixed' => 'Fixed',
		            'fluid' => 'Fluid',
		        ),
		    )
		);
        
        //Wrapper Width Fixed
		$wp_customize->add_setting(
		    'cw_width_fixed',
		    array(
		        'default' => '1100',
		    )
		);
		$wp_customize->add_control( 'cw_width_fixed', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_layout',
			'label'       => 'Width [Fixed]',
			'input_attrs' => array(
				'min'   => 800,
				'max'   => 1400,
				'step'  => 2,
			),
		) );
        
        //Wrapper Width Fluid
		$wp_customize->add_setting(
		    'cw_width_fluid',
		    array(
		        'default' => '100',
		    )
		);
		$wp_customize->add_control( 'cw_width_fluid', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_layout',
			'label'       => 'Width [Fluid]',
			'input_attrs' => array(
				'min'   => 50,
				'max'   => 100,
				'step'  => 2,
			),
		) );
        
        //Wrapper Alignment
		$wp_customize->add_setting(
		    'cw_alignment',
		    array(
		        'default' => 'center',
		    )
		);
		$wp_customize->add_control(
		    'cw_alignment',
		    array(
		        'type' => 'select',
		        'label' => 'Wrapper Alignment',
		        'section' => 'content_wrapper_layout',
		        'choices' => array(
					'center' => 'Center',
		            'left' => 'Left',
                    'right' => 'Right',
		        ),
		    )
		);
        
        $wp_customize->add_section('content_wrapper_background', array('title' => 'Wrapper Background','panel' => 'content','priority' => 30,));
        
        //Content Background Title
		$wp_customize->add_setting(
		    'cw_background_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'cw_background_title', 
			array(
				'label'	=> __( 'Background' ),
				'section' => 'content_wrapper_background',
				'settings' => 'cw_background_title',
			) 
		));
		
		//Wrapper Background Visibility
		$wp_customize->add_setting(
			'cw_background_visibility'
		);
		$wp_customize->add_control(
		    'cw_background_visibility',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Background Visibility',
				'section' => 'content_wrapper_background',
		        'settings' => 'cw_background_visibility',
		    )
		);
		
		//Background Color
		$wp_customize->add_setting(
		    'cw_background_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'cw_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'content_wrapper_background',
		            'settings' => 'cw_background_color',
		        )
		    )
		);
		
		//Background Image
		$wp_customize->add_setting( 'cw_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'cw_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'content_wrapper_background',
		            'settings' => 'cw_background_image'
		        )
		    )
		);

		//Background Image position
		$wp_customize->add_setting(
		    'cw_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'cw_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'content_wrapper_background',
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
		
		//Background Image repeat
		$wp_customize->add_setting(
		    'cw_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'cw_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'content_wrapper_background',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Background Image Type
		$wp_customize->add_setting(
		    'cw_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'cw_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'content_wrapper_background',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);
        
        $wp_customize->add_section('content_wrapper_borders', array('title' => 'Wrapper Borders','panel' => 'content','priority' => 30,));
        
        //Content Wrapper Border Title
		$wp_customize->add_setting(
		    'cw_border_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'cw_border_title', 
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'content_wrapper_borders',
				'settings' => 'cw_border_title',
			) 
		));
		
		//Content Wrapper Border Color
		$wp_customize->add_setting(
		    'cw_border_color',
		    array(
		        'default' => '#CCC',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'cw_border_color',
		        array(
		            'label' => 'Border Color',
		            'section' => 'content_wrapper_borders',
		            'settings' => 'cw_border_color',
		        )
		    )
		);
		
		//Content Wrapper Border Style
		$wp_customize->add_setting(
		    'cw_border_style',
		    array(
		        'default' => 'solid',
		    )
		);
		$wp_customize->add_control(
		    'cw_border_style',
		    array(
		        'type' => 'select',
		        'label' => 'Border Style',
		        'section' => 'content_wrapper_borders',
		        'choices' => array(
					'dotted' => 'Dotted',
					'dashed' => 'Dashed',
					'solid' => 'Solid',
					'double' => 'Double',
					'groove' => 'Groove',
		        ),
		    )
		);
		
		
		//Content Wrapper Border Top
		$wp_customize->add_setting(
		    'cw_border_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_border_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_borders',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Content Wrapper Border Bottom
		$wp_customize->add_setting(
		    'cw_border_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_border_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_borders',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Content Wrapper Border Left
		$wp_customize->add_setting(
		    'cw_border_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_border_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_borders',
			'label'       => 'Left Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Content Wrapper Border Right
		$wp_customize->add_setting(
		    'cw_border_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_border_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_borders',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Content Wrapper Border Radius
		$wp_customize->add_setting(
		    'cw_border_radius',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_border_radius', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_borders',
			'label'       => 'Rounded Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
        
        $wp_customize->add_section('content_wrapper_padding', array('title' => 'Wrapper Padding','panel' => 'content','priority' => 30,));
        
        //Content Wrapper Padding Title
		$wp_customize->add_setting(
		    'cw_padding_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'cw_padding_title', 
			array(
				'label'	=> __( 'Padding' ),
				'section' => 'content_wrapper_padding',
				'settings' => 'cw_padding_title',
			) 
		));
		
		//Content Wrapper Padding Top
		$wp_customize->add_setting(
		    'cw_padding_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_padding',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Content Wrapper Padding Bottom
		$wp_customize->add_setting(
		    'cw_padding_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_padding',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Content Wrapper Padding Left
		$wp_customize->add_setting(
		    'cw_padding_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_padding',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Content Wrapper Padding Right
		$wp_customize->add_setting(
		    'cw_padding_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_padding',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
        
        $wp_customize->add_section('content_wrapper_margins', array('title' => 'Wrapper Margins','panel' => 'content','priority' => 30,));
        
        //Content Wrapper Margins Title
		$wp_customize->add_setting(
		    'cw_margins_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'cw_margins_title', 
			array(
				'label'	=> __( 'Margins' ),
				'section' => 'content_wrapper_margins',
				'settings' => 'cw_margins_title',
			) 
		));
		
		//Content Wrapper Margin Top
		$wp_customize->add_setting(
		    'cw_margin_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_margins',
			'label'       => 'Top Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		
		//Content Wrapper Margin Bottom
		$wp_customize->add_setting(
		    'cw_margin_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_wrapper_margins',
			'label'       => 'Bottom Margin',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
        
        $wp_customize->add_section('content_post_homepage_layout', array('title' => 'Post Homepage Layout','panel' => 'content','priority' => 30,));

        
        //Post-Page Homepage Options Title
		$wp_customize->add_setting(
		    'homepage_grand_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'homepage_grand_layout_title',
			array(
				'label'	=> __( 'Homepage Post Styling' ),
				'section' => 'content_post_homepage_layout',
				'settings' => 'homepage_grand_layout_title',
			) 
		));
		
		//Post-Page Homepage Layout Title
		$wp_customize->add_setting(
		    'homepage_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'homepage_layout_title',
			array(
				'label'	=> __( 'Layout Options' ),
				'section' => 'content_post_homepage_layout',
				'settings' => 'homepage_layout_title',
			) 
		));
        
        
        //Post-Page Homepage Column Visibility
		$wp_customize->add_setting(
		    'homepage_column',
		    array(
		        'default' => '1',
		    )
		);
		$wp_customize->add_control(
		    'homepage_column',
		    array(
		        'type' => 'select',
		        'label' => 'Post Style',
		        'section' => 'content_post_homepage_layout',
		        'choices' => array(
					'1' => '1 Column',
		            '2' => '2 Columns',
		            '3' => '3 Columns',
		            '4' => '4 Columns',
		        ),
		    )
		);
        
        //Post-Page Homepage Show Featured Image Visibility
		$wp_customize->add_setting(
		    'homepage_featured_image',
		    array(
		        'default' => 'below',
		    )
		);
		$wp_customize->add_control(
		    'homepage_featured_image',
		    array(
		        'type' => 'select',
		        'label' => 'Featured Image',
		        'section' => 'content_post_homepage_layout',
		        'choices' => array(
					'below' => 'Below Post Title',
		            'above' => 'Above Post Title',
		            'off' => 'Off',
		        ),
		    )
		);
        
        //Post-Page Homepage Show Meta Box
		$wp_customize->add_setting(
		    'homepage_meta_box',
		    array(
		        'default' => 'belowcontent',
		    )
		);
		$wp_customize->add_control(
		    'homepage_meta_box',
		    array(
		        'type' => 'select',
		        'label' => 'Post Details',
		        'section' => 'content_post_homepage_layout',
		        'choices' => array(
					'belowcontent' => 'Below Post Content',
		            'belowtitle' => 'Below Post Title',
		            'off' => 'Off',
		        ),
		    )
		);
        
        //Post-Page Homepage Meta Box Author visibility
		$wp_customize->add_setting(
			'homepage_meta_box_author',
		    array(
		        'default' => '1',
		    )
		);
		$wp_customize->add_control(
		    'homepage_meta_box_author',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Show Author Name',
				'section' => 'content_post_homepage_layout',
		        'settings' => 'homepage_meta_box_author',
		    )
		);
        
        //Post-Page Homepage Meta Box Comments
		$wp_customize->add_setting(
			'homepage_meta_box_comments',
		    array(
		        'default' => '1',
		    )
		);
		$wp_customize->add_control(
		    'homepage_meta_box_comments',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Show Comment Count',
				'section' => 'content_post_homepage_layout',
		        'settings' => 'homepage_meta_box_comments',
		    )
		);
        
        //Post-Page Homepage Meta Box time
		$wp_customize->add_setting(
			'homepage_meta_box_time',
		    array(
		        'default' => '1',
		    )
		);
		$wp_customize->add_control(
		    'homepage_meta_box_time',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Show Post Time & Date',
				'section' => 'content_post_homepage_layout',
		        'settings' => 'homepage_meta_box_time',
		    )
		);
        
        //Post-Page Homepage Meta Box Categories
		$wp_customize->add_setting(
			'homepage_meta_box_categories',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control(
		    'homepage_meta_box_categories',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Show Post Categories',
				'section' => 'content_post_homepage_layout',
		        'settings' => 'homepage_meta_box_categories',
		    )
		);
        
        //Post-Page Homepage Spacing
		$wp_customize->add_setting(
		    'homepage_spacing',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'homepage_spacing', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_post_homepage_layout',
			'label'       => 'Post Spacing',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
        
        //Post-Page Enable Excerpts
		$wp_customize->add_setting(
			'homepage_enable_excerpts',
		    array(
		        'default' => '1',
		    )
		);
		$wp_customize->add_control(
		    'homepage_enable_excerpts',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Enable Post Excerpts',
				'section' => 'content_post_homepage_layout',
		        'settings' => 'homepage_enable_excerpts',
		    )
		);

		$wp_customize->add_section('content_single_typography', array('title' => 'Post/Page Typography','panel' => 'content','priority' => 30,));

		//Post & Page Header Title
		$wp_customize->add_setting(
			'cw_single_typography_title_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_typography_title_title',
			array(
				'label'	=> __( 'Title' ),
				'section' => 'content_single_typography',
				'settings' => 'cw_single_typography_title_title',
			)
		));

		//Post & Page Header Font Family
		$wp_customize->add_setting(
			'cw_single_typography_title_fonts',
			array(
				'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
			)
		);
		$wp_customize->add_control(
			'cw_single_typography_title_fonts',
			array(
				'type' => 'select',
				'label' => 'Font Style',
				'section' => 'content_single_typography',
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

		//Post & Page header Font Size
		$wp_customize->add_setting(
			'cw_single_typography_title_font_size',
			array(
				'default' => '35',
			)
		);
		$wp_customize->add_control( 'cw_single_typography_title_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_single_typography',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 60,
				'step'  => 2,
			),
		) );

		//Post & Page Header Font Color
		$wp_customize->add_setting(
			'cw_single_typography_title_font_color',
			array(
				'default' => '#333',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cw_single_typography_title_font_color',
				array(
					'label' => 'Font Color',
					'section' => 'content_single_typography',
					'settings' => 'cw_single_typography_title_font_color',
				)
			)
		);

		//Post & Page Header Font Hover color
		$wp_customize->add_setting(
			'cw_single_typography_title_font_color_hover',
			array(
				'default' => '#444',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cw_single_typography_title_font_color_hover',
				array(
					'label' => 'Font Hover Color',
					'section' => 'content_single_typography',
					'settings' => 'cw_single_typography_title_font_color_hover',
				)
			)
		);

		//Post & Page Header Font Alignment
		$wp_customize->add_setting(
			'cw_single_typography_title_font_alignment',
			array(
				'default' => 'center',
			)
		);
		$wp_customize->add_control(
			'cw_single_typography_title_font_alignment',
			array(
				'type' => 'select',
				'label' => 'Font Alignment',
				'section' => 'content_single_typography',
				'choices' => array(
					'center' => 'Center',
					'left' => 'Left',
					'right' => 'Right',
				),
			)
		);

		//Post & Page Header Font Style
		$wp_customize->add_setting(
			'cw_single_typography_title_font_style',
			array(
				'default' => 'normal',
			)
		);
		$wp_customize->add_control(
			'cw_single_typography_title_font_style',
			array(
				'type' => 'select',
				'label' => 'Font Style',
				'section' => 'content_single_typography',
				'choices' => array(
					'normal' => 'Normal',
					'italic' => 'Italic',
					'oblique' => 'Oblique',
				),
			)
		);

		//Post & Page Header Font Weight
		$wp_customize->add_setting(
			'cw_single_typography_title_font_weight',
			array(
				'default' => 'normal',
			)
		);
		$wp_customize->add_control(
			'cw_single_typography_title_font_weight',
			array(
				'type' => 'select',
				'label' => 'Font Weight',
				'section' => 'content_single_typography',
				'choices' => array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'light' => 'Light',
				),
			)
		);

		//Post & Page Header Font Transformation
		$wp_customize->add_setting(
			'cw_single_typography_title_font_transformation',
			array(
				'default' => 'none',
			)
		);
		$wp_customize->add_control(
			'cw_single_typography_title_font_transformation',
			array(
				'type' => 'select',
				'label' => 'Font Transformation',
				'section' => 'content_single_typography',
				'choices' => array(
					'none' => 'None',
					'uppercase' => 'Uppercase',
					'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize',
				),
			)
		);


		//Post & Page Header Font Padding
		$wp_customize->add_setting(
			'cw_single_typography_title_font_padding',
			array(
				'default' => '5',
			)
		);
		$wp_customize->add_control( 'cw_single_typography_title_font_padding', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_single_typography',
			'label'       => 'Font Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 40,
				'step'  => 1,
			),
		) );



		//Post & Page Entry and Paragraph Title
		$wp_customize->add_setting(
			'cw_single_typography_entry_paragraph_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_typography_entry_paragraph_title',
			array(
				'label'	=> __( 'Paragraphs' ),
				'section' => 'content_single_typography',
				'settings' => 'cw_single_typography_entry_paragraph_title',
			)
		));

		//Post & Page Entry and Paragraph Font Family
		$wp_customize->add_setting(
			'cw_single_typography_entry_paragraph_fonts',
			array(
				'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
			)
		);
		$wp_customize->add_control(
			'cw_single_typography_entry_paragraph_fonts',
			array(
				'type' => 'select',
				'label' => 'Font Style',
				'section' => 'content_single_typography',
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

		//Post & Page Entry and Paragraph Font Size
		$wp_customize->add_setting(
			'cw_single_typography_entry_paragraph_font_size',
			array(
				'default' => '14',
			)
		);
		$wp_customize->add_control( 'cw_single_typography_entry_paragraph_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_single_typography',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 60,
				'step'  => 2,
			),
		) );

		//Post & Page Entry and Paragraph Font Color
		$wp_customize->add_setting(
			'cw_single_typography_entry_paragraph_font_color',
			array(
				'default' => '#333',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cw_single_typography_entry_paragraph_font_color',
				array(
					'label' => 'Font Color',
					'section' => 'content_single_typography',
					'settings' => 'cw_single_typography_entry_paragraph_font_color',
				)
			)
		);

		//Post & Page Entry and Paragraph Font Link Color
		$wp_customize->add_setting(
			'cw_single_typography_entry_paragraph_font_link_color',
			array(
				'default' => '#333',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cw_single_typography_entry_paragraph_font_link_color',
				array(
					'label' => 'Link Color',
					'section' => 'content_single_typography',
					'settings' => 'cw_single_typography_entry_paragraph_font_link_color',
				)
			)
		);

		//Post & Page Entry and Paragraph Font Hover color
		$wp_customize->add_setting(
			'cw_single_typography_entry_paragraph_font_link_color_hover',
			array(
				'default' => '#444',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cw_single_typography_entry_paragraph_font_link_color_hover',
				array(
					'label' => 'Link Hover Color',
					'section' => 'content_single_typography',
					'settings' => 'cw_single_typography_entry_paragraph_font_link_color_hover',
				)
			)
		);

		//Post & Page Entry and Paragraph Font Padding
		$wp_customize->add_setting(
			'cw_single_typography_entry_paragraph_font_padding',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'cw_single_typography_entry_paragraph_font_padding', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_single_typography',
			'label'       => 'Font Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 40,
				'step'  => 1,
			),
		) );

		//Post & Page H1 Title
		$wp_customize->add_setting(
			'cw_single_typography_h1_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_typography_h1_title',
			array(
				'label'	=> __( 'H1' ),
				'section' => 'content_single_typography',
				'settings' => 'cw_single_typography_h1_title',
			)
		));

		//Post & Page H1 Font Family
		$wp_customize->add_setting(
			'cw_single_typography_h1_fonts',
			array(
				'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
			)
		);
		$wp_customize->add_control(
			'cw_single_typography_h1_fonts',
			array(
				'type' => 'select',
				'label' => 'Font Style',
				'section' => 'content_single_typography',
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

		//Post & Page header Font Size
		$wp_customize->add_setting(
			'cw_single_typography_h1_font_size',
			array(
				'default' => '35',
			)
		);
		$wp_customize->add_control( 'cw_single_typography_h1_font_size', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_single_typography',
			'label'       => 'Font Size',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 80,
				'step'  => 2,
			),
		) );

		//Post & Page H1 Font Color
		$wp_customize->add_setting(
			'cw_single_typography_h1_font_color',
			array(
				'default' => '#333',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cw_single_typography_h1_font_color',
				array(
					'label' => 'Font Color',
					'section' => 'content_single_typography',
					'settings' => 'cw_single_typography_h1_font_color',
				)
			)
		);

		//Post & Page H1 Font Transformation
		$wp_customize->add_setting(
			'cw_single_typography_h1_font_transformation',
			array(
				'default' => 'none',
			)
		);
		$wp_customize->add_control(
			'cw_single_typography_h1_font_transformation',
			array(
				'type' => 'select',
				'label' => 'Font Transformation',
				'section' => 'content_single_typography',
				'choices' => array(
					'none' => 'None',
					'uppercase' => 'Uppercase',
					'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize',
				),
			)
		);


		//Post & Page H1 Font Padding
		$wp_customize->add_setting(
			'cw_single_typography_h1_font_padding',
			array(
				'default' => '0',
			)
		);
		$wp_customize->add_control( 'cw_single_typography_h1_font_padding', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'content_single_typography',
			'label'       => 'Font Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 40,
				'step'  => 1,
			),
		) );

        //Post & Page H2 Title
        $wp_customize->add_setting(
            'cw_single_typography_h2_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'cw_single_typography_h2_title',
            array(
                'label'	=> __( 'H2' ),
                'section' => 'content_single_typography',
                'settings' => 'cw_single_typography_h2_title',
            )
        ));

        //Post & Page H2 Font Family
        $wp_customize->add_setting(
            'cw_single_typography_h2_fonts',
            array(
                'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
            )
        );
        $wp_customize->add_control(
            'cw_single_typography_h2_fonts',
            array(
                'type' => 'select',
                'label' => 'Font Style',
                'section' => 'content_single_typography',
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

        //Post & Page header Font Size
        $wp_customize->add_setting(
            'cw_single_typography_h2_font_size',
            array(
                'default' => '32',
            )
        );
        $wp_customize->add_control( 'cw_single_typography_h2_font_size', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'content_single_typography',
            'label'       => 'Font Size',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 80,
                'step'  => 2,
            ),
        ) );

        //Post & Page H2 Font Color
        $wp_customize->add_setting(
            'cw_single_typography_h2_font_color',
            array(
                'default' => '#333',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'cw_single_typography_h2_font_color',
                array(
                    'label' => 'Font Color',
                    'section' => 'content_single_typography',
                    'settings' => 'cw_single_typography_h2_font_color',
                )
            )
        );

        //Post & Page H2 Font Transformation
        $wp_customize->add_setting(
            'cw_single_typography_h2_font_transformation',
            array(
                'default' => 'none',
            )
        );
        $wp_customize->add_control(
            'cw_single_typography_h2_font_transformation',
            array(
                'type' => 'select',
                'label' => 'Font Transformation',
                'section' => 'content_single_typography',
                'choices' => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                    'capitalize' => 'Capitalize',
                ),
            )
        );


        //Post & Page H2 Font Padding
        $wp_customize->add_setting(
            'cw_single_typography_h2_font_padding',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'cw_single_typography_h2_font_padding', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'content_single_typography',
            'label'       => 'Font Padding',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 40,
                'step'  => 1,
            ),
        ) );

        //Post & Page H3 Title
        $wp_customize->add_setting(
            'cw_single_typography_h3_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'cw_single_typography_h3_title',
            array(
                'label'	=> __( 'H3' ),
                'section' => 'content_single_typography',
                'settings' => 'cw_single_typography_h3_title',
            )
        ));

        //Post & Page H3 Font Family
        $wp_customize->add_setting(
            'cw_single_typography_h3_fonts',
            array(
                'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
            )
        );
        $wp_customize->add_control(
            'cw_single_typography_h3_fonts',
            array(
                'type' => 'select',
                'label' => 'Font Style',
                'section' => 'content_single_typography',
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

        //Post & Page header Font Size
        $wp_customize->add_setting(
            'cw_single_typography_h3_font_size',
            array(
                'default' => '28',
            )
        );
        $wp_customize->add_control( 'cw_single_typography_h3_font_size', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'content_single_typography',
            'label'       => 'Font Size',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 80,
                'step'  => 2,
            ),
        ) );

        //Post & Page H3 Font Color
        $wp_customize->add_setting(
            'cw_single_typography_h3_font_color',
            array(
                'default' => '#333',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'cw_single_typography_h3_font_color',
                array(
                    'label' => 'Font Color',
                    'section' => 'content_single_typography',
                    'settings' => 'cw_single_typography_h3_font_color',
                )
            )
        );

        //Post & Page H3 Font Transformation
        $wp_customize->add_setting(
            'cw_single_typography_h3_font_transformation',
            array(
                'default' => 'none',
            )
        );
        $wp_customize->add_control(
            'cw_single_typography_h3_font_transformation',
            array(
                'type' => 'select',
                'label' => 'Font Transformation',
                'section' => 'content_single_typography',
                'choices' => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                    'capitalize' => 'Capitalize',
                ),
            )
        );


        //Post & Page H3 Font Padding
        $wp_customize->add_setting(
            'cw_single_typography_h3_font_padding',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'cw_single_typography_h3_font_padding', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'content_single_typography',
            'label'       => 'Font Padding',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 40,
                'step'  => 1,
            ),
        ) );

        //Post & Page H4 Title
        $wp_customize->add_setting(
            'cw_single_typography_h4_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'cw_single_typography_h4_title',
            array(
                'label'	=> __( 'H4' ),
                'section' => 'content_single_typography',
                'settings' => 'cw_single_typography_h4_title',
            )
        ));

        //Post & Page H4 Font Family
        $wp_customize->add_setting(
            'cw_single_typography_h4_fonts',
            array(
                'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
            )
        );
        $wp_customize->add_control(
            'cw_single_typography_h4_fonts',
            array(
                'type' => 'select',
                'label' => 'Font Style',
                'section' => 'content_single_typography',
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

        //Post & Page header Font Size
        $wp_customize->add_setting(
            'cw_single_typography_h4_font_size',
            array(
                'default' => '22',
            )
        );
        $wp_customize->add_control( 'cw_single_typography_h4_font_size', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'content_single_typography',
            'label'       => 'Font Size',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 80,
                'step'  => 2,
            ),
        ) );

        //Post & Page H4 Font Color
        $wp_customize->add_setting(
            'cw_single_typography_h4_font_color',
            array(
                'default' => '#333',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'cw_single_typography_h4_font_color',
                array(
                    'label' => 'Font Color',
                    'section' => 'content_single_typography',
                    'settings' => 'cw_single_typography_h4_font_color',
                )
            )
        );

        //Post & Page H4 Font Transformation
        $wp_customize->add_setting(
            'cw_single_typography_h4_font_transformation',
            array(
                'default' => 'none',
            )
        );
        $wp_customize->add_control(
            'cw_single_typography_h4_font_transformation',
            array(
                'type' => 'select',
                'label' => 'Font Transformation',
                'section' => 'content_single_typography',
                'choices' => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                    'capitalize' => 'Capitalize',
                ),
            )
        );


        //Post & Page H4 Font Padding
        $wp_customize->add_setting(
            'cw_single_typography_h4_font_padding',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'cw_single_typography_h4_font_padding', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'content_single_typography',
            'label'       => 'Font Padding',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 40,
                'step'  => 1,
            ),
        ) );

        //Post & Page H5 Title
        $wp_customize->add_setting(
            'cw_single_typography_h5_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'cw_single_typography_h5_title',
            array(
                'label'	=> __( 'H5' ),
                'section' => 'content_single_typography',
                'settings' => 'cw_single_typography_h5_title',
            )
        ));

        //Post & Page H5 Font Family
        $wp_customize->add_setting(
            'cw_single_typography_h5_fonts',
            array(
                'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
            )
        );
        $wp_customize->add_control(
            'cw_single_typography_h5_fonts',
            array(
                'type' => 'select',
                'label' => 'Font Style',
                'section' => 'content_single_typography',
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

        //Post & Page header Font Size
        $wp_customize->add_setting(
            'cw_single_typography_h5_font_size',
            array(
                'default' => '18',
            )
        );
        $wp_customize->add_control( 'cw_single_typography_h5_font_size', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'content_single_typography',
            'label'       => 'Font Size',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 80,
                'step'  => 2,
            ),
        ) );

        //Post & Page H5 Font Color
        $wp_customize->add_setting(
            'cw_single_typography_h5_font_color',
            array(
                'default' => '#333',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'cw_single_typography_h5_font_color',
                array(
                    'label' => 'Font Color',
                    'section' => 'content_single_typography',
                    'settings' => 'cw_single_typography_h5_font_color',
                )
            )
        );

        //Post & Page H5 Font Transformation
        $wp_customize->add_setting(
            'cw_single_typography_h5_font_transformation',
            array(
                'default' => 'none',
            )
        );
        $wp_customize->add_control(
            'cw_single_typography_h5_font_transformation',
            array(
                'type' => 'select',
                'label' => 'Font Transformation',
                'section' => 'content_single_typography',
                'choices' => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                    'capitalize' => 'Capitalize',
                ),
            )
        );


        //Post & Page H5 Font Padding
        $wp_customize->add_setting(
            'cw_single_typography_h5_font_padding',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'cw_single_typography_h5_font_padding', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'content_single_typography',
            'label'       => 'Font Padding',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 40,
                'step'  => 1,
            ),
        ) );

        //Post & Page H6 Title
        $wp_customize->add_setting(
            'cw_single_typography_h6_title',
            array(
                'default' => '',
            )
        );
        $wp_customize->add_control( new WP_Customize_Title_Area(
            $wp_customize,
            'cw_single_typography_h6_title',
            array(
                'label'	=> __( 'H6' ),
                'section' => 'content_single_typography',
                'settings' => 'cw_single_typography_h6_title',
            )
        ));

        //Post & Page H6 Font Family
        $wp_customize->add_setting(
            'cw_single_typography_h6_fonts',
            array(
                'default' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
            )
        );
        $wp_customize->add_control(
            'cw_single_typography_h6_fonts',
            array(
                'type' => 'select',
                'label' => 'Font Style',
                'section' => 'content_single_typography',
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

        //Post & Page header Font Size
        $wp_customize->add_setting(
            'cw_single_typography_h6_font_size',
            array(
                'default' => '14',
            )
        );
        $wp_customize->add_control( 'cw_single_typography_h6_font_size', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'content_single_typography',
            'label'       => 'Font Size',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 80,
                'step'  => 2,
            ),
        ) );

        //Post & Page H6 Font Color
        $wp_customize->add_setting(
            'cw_single_typography_h6_font_color',
            array(
                'default' => '#333',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'cw_single_typography_h6_font_color',
                array(
                    'label' => 'Font Color',
                    'section' => 'content_single_typography',
                    'settings' => 'cw_single_typography_h6_font_color',
                )
            )
        );

        //Post & Page H6 Font Transformation
        $wp_customize->add_setting(
            'cw_single_typography_h6_font_transformation',
            array(
                'default' => 'none',
            )
        );
        $wp_customize->add_control(
            'cw_single_typography_h6_font_transformation',
            array(
                'type' => 'select',
                'label' => 'Font Transformation',
                'section' => 'content_single_typography',
                'choices' => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                    'capitalize' => 'Capitalize',
                ),
            )
        );


        //Post & Page H6 Font Padding
        $wp_customize->add_setting(
            'cw_single_typography_h6_font_padding',
            array(
                'default' => '0',
            )
        );
        $wp_customize->add_control( 'cw_single_typography_h6_font_padding', array(
            'type'        => 'range',
            'priority'    => 10,
            'section'     => 'content_single_typography',
            'label'       => 'Font Padding',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 40,
                'step'  => 1,
            ),
        ) );


		$wp_customize->add_section('cw_single_comments', array('title' => 'Comments','panel' => 'content','priority' => 30,));

		//Comments Comment Area Title
		$wp_customize->add_setting(
		    'cw_single_comments_comment_area_grand_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'cw_single_comments_comment_area_grand_layout_title',
			array(
				'label'	=> __( 'Comments Area' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_comment_area_grand_layout_title',
			) 
		));

		//Comments Area Layout Title
		$wp_customize->add_setting(
			'cw_single_comments_comment_area_layout_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_comments_comment_area_layout_title',
			array(
				'label'	=> __( 'Layout' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_comment_area_layout_title',
			)
		));

		//Comments Header Visibility
		$wp_customize->add_setting(
			'cw_single_comments_layout_comments_header_visibility'
		);
		$wp_customize->add_control(
		    'cw_single_comments_layout_comments_header_visibility',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Comment Header',
				'section' => 'cw_single_comments',
		        'settings' => 'cw_single_comments_layout_comments_header_visibility',
		    )
		);

		//Comments Backgrounds Title
		$wp_customize->add_setting(
			'cw_single_comments_backgrounds_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_comments_backgrounds_title',
			array(
				'label'	=> __( 'Background' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_backgrounds_title',
			)
		));

		//Comment Area Background Visibility
		$wp_customize->add_setting(
			'cw_single_comments_backgrounds_comment_area_background_visibility'
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_comment_area_background_visibility',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Background Visibility',
				'section' => 'cw_single_comments',
		        'settings' => 'cw_single_comments_backgrounds_comment_area_background_visibility',
		    )
		);

		//Comment Area Background Color
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_comment_area_background_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'cw_single_comments_backgrounds_comment_area_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'cw_single_comments',
		            'settings' => 'cw_single_comments_backgrounds_comment_area_background_color',
		        )
		    )
		);
		
		//Comment Area Background Image
		$wp_customize->add_setting( 'cw_single_comments_backgrounds_comment_area_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'cw_single_comments_backgrounds_comment_area_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'cw_single_comments',
		            'settings' => 'cw_single_comments_backgrounds_comment_area_background_image'
		        )
		    )
		);


		//Background Image position
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_comment_area_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_comment_area_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'cw_single_comments',
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
		
		//Background Image repeat
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_comment_area_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_comment_area_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'cw_single_comments',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Background Image Type
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_comment_area_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_comment_area_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'cw_single_comments',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);

		//Comments Padding Title
		$wp_customize->add_setting(
			'cw_single_comments_padding_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_comments_padding_title',
			array(
				'label'	=> __( 'Padding' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_padding_title',
			)
		));

		//Comments Area Padding Top
		$wp_customize->add_setting(
		    'cw_single_comments_padding_comment_area_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_padding_comment_area_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Comments Area Padding Bottom
		$wp_customize->add_setting(
		    'cw_single_comments_padding_comment_area_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_padding_comment_area_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Comments Area Padding Left
		$wp_customize->add_setting(
		    'cw_single_comments_padding_comment_area_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_padding_comment_area_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Comments Area Padding Right
		$wp_customize->add_setting(
		    'cw_single_comments_padding_comment_area_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_padding_comment_area_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//Comments Borders Title
		$wp_customize->add_setting(
			'cw_single_comments_borders_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_comments_borders_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_borders_title',
			)
		));
		


		//Comments Area Border Top
		$wp_customize->add_setting(
		    'cw_single_comments_border_comment_area_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_border_comment_area_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Comments Area Border Bottom
		$wp_customize->add_setting(
		    'cw_single_comments_border_comment_area_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_border_comment_area_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Comments Area Border Left
		$wp_customize->add_setting(
		    'cw_single_comments_border_comment_area_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_border_comment_area_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Left border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Comments Area Border Right
		$wp_customize->add_setting(
		    'cw_single_comments_border_comment_area_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_border_comment_area_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Comments All Comments Title
		$wp_customize->add_setting(
		    'cw_single_comments_all_comments_grand_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'cw_single_comments_all_comments_grand_layout_title',
			array(
				'label'	=> __( 'All Comments' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_all_comments_grand_layout_title',
			) 
		));


		//All Comments Layout Title
		$wp_customize->add_setting(
			'cw_single_comments_all_comments_layout_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_comments_all_comments_layout_title',
			array(
				'label'	=> __( 'Layout' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_all_comments_layout_title',
			)
		));

		//Avatar Position
		$wp_customize->add_setting(
		    'cw_single_comments_layout_avatar_visibility',
		    array(
		        'default' => 'left',
		    )
		);
		$wp_customize->add_control(
		    'cw_single_comments_layout_avatar_visibility',
		    array(
		        'type' => 'select',
		        'label' => 'Avatar Position',
		        'section' => 'cw_single_comments',
		        'choices' => array(
					'left' => 'Left',
		            'right' => 'Right',
		        ),
		    )
		);

		//All Comments Padding Title
		$wp_customize->add_setting(
			'cw_single_comments_all_comments_padding_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_comments_all_comments_padding_title',
			array(
				'label'	=> __( 'Padding' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_all_comments_padding_title',
			)
		));

		//Individual Comment Padding Top
		$wp_customize->add_setting(
		    'cw_single_comments_padding_individual_comment_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_padding_individual_comment_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Top Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Individual Comment Padding Bottom
		$wp_customize->add_setting(
		    'cw_single_comments_padding_individual_comment_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_padding_individual_comment_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Bottom Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Individual Comment Padding Left
		$wp_customize->add_setting(
		    'cw_single_comments_padding_individual_comment_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_padding_individual_comment_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Left padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );
		
		//Individual Comment Padding Right
		$wp_customize->add_setting(
		    'cw_single_comments_padding_individual_comment_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_padding_individual_comment_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Right Padding',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
		) );

		//All Comments Borders Title
		$wp_customize->add_setting(
			'cw_single_comments_all_comments_borders_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_comments_all_comments_borders_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_all_comments_borders_title',
			)
		));

		//Individual Comment Border Top
		$wp_customize->add_setting(
		    'cw_single_comments_border_individual_comment_top',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_border_individual_comment_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Top Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Individual Comment Border Bottom
		$wp_customize->add_setting(
		    'cw_single_comments_border_individual_comment_bottom',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_border_individual_comment_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Bottom Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Individual Comment Border Left
		$wp_customize->add_setting(
		    'cw_single_comments_border_individual_comment_left',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_border_individual_comment_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Left border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );
		
		//Individual Comment Border Right
		$wp_customize->add_setting(
		    'cw_single_comments_border_individual_comment_right',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control( 'cw_single_comments_border_individual_comment_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'cw_single_comments',
			'label'       => 'Right Border',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
		) );

		//Comments Top Level Title
		$wp_customize->add_setting(
		    'cw_single_comments_top_level_comments_grand_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'cw_single_comments_top_level_comments_grand_layout_title',
			array(
				'label'	=> __( 'Top Level Comments' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_top_level_comments_grand_layout_title',
			) 
		));

		//Top Level Comment Backgrounds Title
		$wp_customize->add_setting(
			'cw_single_comments_backgrounds_top_level_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_comments_backgrounds_top_level_title',
			array(
				'label'	=> __( 'Background' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_backgrounds_top_level_title',
			)
		));

		//Top Level Comment Background Visibility
		$wp_customize->add_setting(
			'cw_single_comments_backgrounds_top_level_comment_background_visibility'
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_top_level_comment_background_visibility',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Background Visibility',
				'section' => 'cw_single_comments',
		        'settings' => 'cw_single_comments_backgrounds_top_level_comment_background_visibility',
		    )
		);

		//Top Level Comment Background Color
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_top_level_comment_background_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'cw_single_comments_backgrounds_top_level_comment_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'cw_single_comments',
		            'settings' => 'cw_single_comments_backgrounds_top_level_comment_background_color',
		        )
		    )
		);
		
		//Top Level Comment Background Image
		$wp_customize->add_setting( 'cw_single_comments_backgrounds_top_level_comment_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'cw_single_comments_backgrounds_top_level_comment_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'cw_single_comments',
		            'settings' => 'cw_single_comments_backgrounds_top_level_comment_background_image'
		        )
		    )
		);


		//Top Level Comments Background Image position
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_top_level_comments_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_top_level_comments_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'cw_single_comments',
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
		
		//Background Image repeat
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_top_level_comments_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_top_level_comments_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'cw_single_comments',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Background Image Type
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_top_level_comments_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_top_level_comments_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'cw_single_comments',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);

		//Comments Responding Title
		$wp_customize->add_setting(
		    'cw_single_comments_responding_comments_grand_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'cw_single_comments_responding_comments_grand_layout_title',
			array(
				'label'	=> __( 'Responding Comments' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_responding_comments_grand_layout_title',
			) 
		));

		//Responding Comments Backgrounds Title
		$wp_customize->add_setting(
			'cw_single_comments_backgrounds_responding_comments_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Title_Area(
			$wp_customize,
			'cw_single_comments_backgrounds_responding_comments_title',
			array(
				'label'	=> __( 'Background' ),
				'section' => 'cw_single_comments',
				'settings' => 'cw_single_comments_backgrounds_responding_comments_title',
			)
		));

		//Responding Comments Background Visibility
		$wp_customize->add_setting(
			'cw_single_comments_backgrounds_responding_comments_background_visibility'
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_responding_comments_background_visibility',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Disable Background Visibility',
				'section' => 'cw_single_comments',
		        'settings' => 'cw_single_comments_backgrounds_responding_comments_background_visibility',
		    )
		);

		//Responding Comments Background Color
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_responding_comments_background_color',
		    array(
		        'default' => '#FFF',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'cw_single_comments_backgrounds_responding_comments_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'cw_single_comments',
		            'settings' => 'cw_single_comments_backgrounds_responding_comments_background_color',
		        )
		    )
		);
		
		//Responding Comments Background Image
		$wp_customize->add_setting( 'cw_single_comments_backgrounds_responding_comments_background_image' );
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'cw_single_comments_backgrounds_responding_comments_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'cw_single_comments',
		            'settings' => 'cw_single_comments_backgrounds_responding_comments_background_image'
		        )
		    )
		);


		//Responding Comments Background Image position
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_responding_comments_background_image_position',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_responding_comments_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'cw_single_comments',
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
		
		//Background Image repeat
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_responding_comments_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_responding_comments_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'cw_single_comments',
		        'choices' => array(
					'no-repeat' => 'No Repeat',
		            'repeat' => 'Repeat',
		            'repeat-x' => 'Repeat X',
		            'repeat-y' => 'Repeat Y',
					'initial' => 'Initial',
		        ),
		    )
		);
		
		//Background Image Type
		$wp_customize->add_setting(
		    'cw_single_comments_backgrounds_responding_comments_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'cw_single_comments_backgrounds_responding_comments_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'cw_single_comments',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);
		
?>