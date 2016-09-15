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
						'default' => '',
				)
		);
		$wp_customize->add_control( new WP_header_type(
			$wp_customize,
			'primary_header_type_select',
			array(
				'label'	=> __( 'Header Type' ),
				'description'	=> __( 'Select a header style from the options below' ),
				'section' => 'primary_header_type',
				'settings' => 'primary_header_type_select',
			)
		));

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
?>
