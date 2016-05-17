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
		    'post_page_grand_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area( 
			$wp_customize, 
			'post_page_grand_layout_title', 
			array(
				'label'	=> __( 'Homepage Post Styling' ),
				'section' => 'content_post_homepage_layout',
				'settings' => 'post_page_grand_layout_title',
			) 
		));
		
		//Post-Page Homepage Layout Title
		$wp_customize->add_setting(
		    'post_page_layout_title',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Customize_Title_Area( 
			$wp_customize, 
			'post_page_layout_title', 
			array(
				'label'	=> __( 'Layout Options' ),
				'section' => 'content_post_homepage_layout',
				'settings' => 'post_page_layout_title',
			) 
		));
        
        
        //Post-Page Homepage Column Visibility
		$wp_customize->add_setting(
		    'post_page_column',
		    array(
		        'default' => '1',
		    )
		);
		$wp_customize->add_control(
		    'post_page_column',
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
		    'post_page_featured_image',
		    array(
		        'default' => 'below',
		    )
		);
		$wp_customize->add_control(
		    'post_page_featured_image',
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
		    'post_page_meta_box',
		    array(
		        'default' => 'belowcontent',
		    )
		);
		$wp_customize->add_control(
		    'post_page_meta_box',
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
			'post_page_meta_box_author',
		    array(
		        'default' => '1',
		    )
		);
		$wp_customize->add_control(
		    'post_page_meta_box_author',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Show Author Name',
				'section' => 'content_post_homepage_layout',
		        'settings' => 'post_page_meta_box_author',
		    )
		);
        
        //Post-Page Homepage Meta Box Comments
		$wp_customize->add_setting(
			'post_page_meta_box_comments',
		    array(
		        'default' => '1',
		    )
		);
		$wp_customize->add_control(
		    'post_page_meta_box_comments',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Show Comment Count',
				'section' => 'content_post_homepage_layout',
		        'settings' => 'post_page_meta_box_comments',
		    )
		);
        
        //Post-Page Homepage Meta Box time
		$wp_customize->add_setting(
			'post_page_meta_box_time',
		    array(
		        'default' => '1',
		    )
		);
		$wp_customize->add_control(
		    'post_page_meta_box_time',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Show Post Time & Date',
				'section' => 'content_post_homepage_layout',
		        'settings' => 'post_page_meta_box_time',
		    )
		);
        
        //Post-Page Homepage Meta Box Categories
		$wp_customize->add_setting(
			'post_page_meta_box_categories',
		    array(
		        'default' => '0',
		    )
		);
		$wp_customize->add_control(
		    'post_page_meta_box_categories',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Show Post Categories',
				'section' => 'content_post_homepage_layout',
		        'settings' => 'post_page_meta_box_categories',
		    )
		);
        
        //Post-Page Homepage Spacing
		$wp_customize->add_setting(
		    'post_page_spacing',
		    array(
		        'default' => '5',
		    )
		);
		$wp_customize->add_control( 'post_page_spacing', array(
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
			'post_page_enable_excerpts',
		    array(
		        'default' => '1',
		    )
		);
		$wp_customize->add_control(
		    'post_page_enable_excerpts',
		    array(
		        'type' => 'checkbox',
		        'label' => 'Enable Post Excerpts',
				'section' => 'content_post_homepage_layout',
		        'settings' => 'post_page_enable_excerpts',
		    )
		);
        

?>