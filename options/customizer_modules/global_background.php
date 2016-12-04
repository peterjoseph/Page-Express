<?php

	$wp_customize->add_section('global_background', array('title' => 'Page Background','priority' => 30,));

		/** GLOBAL BACKGROUND **/

		//Background Title
		$wp_customize->add_setting(
			'global_background_title',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'global_background_title',
			array(
				'label'	=> __( 'Page Background' ),
				'section' => 'global_background',
				'settings' => 'global_background_title',
			)
		));

		//Background Color
		$wp_customize->add_setting(
		    'global_background_color',
		    array(
		        'default' => '#FFF',
						'transport' => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'global_background_color',
		        array(
		            'label' => 'Background Color',
		            'section' => 'global_background',
		            'settings' => 'global_background_color',
		        )
		    )
		);

		//Background Image
		$wp_customize->add_setting( 'global_background_image',
			array(
				'transport' => 'postMessage',
			)
		);
		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'global_background_image',
		        array(
		            'label' => 'Background Image',
		            'section' => 'global_background',
		            'settings' => 'global_background_image'
		        )
		    )
		);

		//Background Image position
		$wp_customize->add_setting(
		    'global_background_image_position',
		    array(
		        'default' => 'left top',
						'transport' => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'global_background_image_position',
		    array(
	        'type' => 'select',
	        'label' => 'Background Image Position',
	        'section' => 'global_background',
					'description'	=> __( 'Assign background image starting position' ),
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

		//Background Image Type
		$wp_customize->add_setting(
		    'global_background_image_type',
		    array(
		        'default' => 'initial',
						'transport' => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'global_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Sizing',
		        'section' => 'global_background',
						'description'	=> __( 'Repeat or Stretch background image' ),
		        'choices' => array(
							'initial' => 'Repeat background image',
				      'contain' => 'Stretch background image to browser window',
							'cover' => 'Stretch image to browser window while maintaining scaling (Some content may be cut off)',
		        ),
		    )
		);

		//Background Image Repeat
		$wp_customize->add_setting(
		    'global_background_image_repeat',
		    array(
		        'default' => 'repeat',
						'transport' => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'global_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'global_background',
						'description'	=> __( 'Set image repetition direction' ),
		        'choices' => array(
							'no-repeat' => 'No Repeat',
		          'repeat' => 'Repeat',
		          'repeat-x' => 'Repeat Horizontally',
		          'repeat-y' => 'Repeat Vertically',
		        ),
		    )
		);

		//Background Image Scroll
		$wp_customize->add_setting(
			'global_background_image_scroll',
			array(
				'default' => 'scroll',
				'transport' => 'postMessage',
			)
		);
		$wp_customize->add_control(
			new WP_button_select(
				$wp_customize,
				'global_background_image_scroll',
				array(
					'settings'		=> 'global_background_image_scroll',
					'section'		=> 'global_background',
					'label' => 'Background Image Scroll',
					'description'	=> __( 'Scroll background image with page or keep fixed to browser window' ),
					'choices'		=> array(
						'scroll' => 'Scroll',
						'fixed' => 'Fixed',
					)
				)
			)
		);

?>
