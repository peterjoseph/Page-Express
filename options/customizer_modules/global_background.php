<?php

$wp_customize->add_section('global_background', array('title' => 'Global Background','priority' => 30,));
		
/************* BACKGROUND *************/
		
		//Background Color
		$wp_customize->add_setting(
		    'global_background_color',
		    array(
		        'default' => '#FFF',
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
		$wp_customize->add_setting( 'global_background_image' );
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
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'global_background_image_position',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Position',
		        'section' => 'global_background',
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
		    'global_background_image_repeat',
		    array(
		        'default' => 'no-repeat',
		    )
		);
		$wp_customize->add_control(
		    'global_background_image_repeat',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Repetition',
		        'section' => 'global_background',
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
		    'global_background_image_type',
		    array(
		        'default' => 'initial',
		    )
		);
		$wp_customize->add_control(
		    'global_background_image_type',
		    array(
		        'type' => 'select',
		        'label' => 'Background Image Type',
		        'section' => 'global_background',
		        'choices' => array(
					'initial' => 'Repeat the background image',
		            'contain' => 'Stretch the image in the browser',
					'cover' => 'Scale the image (Some content may be cut off)',
		        ),
		    )
		);
        
        
        
?>