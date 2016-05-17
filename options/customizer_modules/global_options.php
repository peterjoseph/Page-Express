<?php
		
		/** REGISTER GLOBAL OPTIONS PANEL **/
		$wp_customize->add_panel( 
			'globaloptions', array('title' => __( 'Advanced Options' ),
		) );
		
		/** REGISTER GlOBAL OPTIONS SECTIONS **/
	    
		$wp_customize->add_section('g_appearance', array('title' => 'Appearance','panel' => 'globaloptions','priority' => 43,));
		$wp_customize->add_section('g_scripts', array('title' => 'Scripts','panel' => 'globaloptions','priority' => 43,));
		
		/** REGISTER GLOBAL OPTIONS **/
		
		//Sitewide CSS
		$wp_customize->add_setting(
		    'sitewide_css',
		    array(
		        'default' => '',
                'sanitize_callback' => 'sitewide_css_sanitization',
		    )
		);
		$wp_customize->add_control(
		    'sitewide_css',
		    array(
		        'label' => 'Custom CSS',
				'description' => 'You can extend the appearance of your theme using custom CSS. Styles added in the box below will be applied across the whole website.',
		        'section' => 'g_appearance',
		        'type' => 'textarea',
		    )
		);
        
                /* SANITIZATION */
                function sitewide_css_sanitization( $input ) {
                    return wp_kses_post( force_balance_tags( $input ) );
                }
		
		//Analytics
		$wp_customize->add_setting(
		    'g_analytics',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control(
		    'g_analytics',
		    array(
		        'label' => 'Google Analytics',
				'description' => 'Enter your tracking code for Google Analytics or a related analytics service. The code will be inserted above the head tag.',
		        'section' => 'g_scripts',
		        'type' => 'textarea',
		    )
		);
        
        //Line Space
		$wp_customize->add_setting(
		    'scripts_line_space',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control( new WP_Line_Space( 
			$wp_customize, 
			'scripts_line_space', 
			array(
				'section' => 'g_scripts',
				'settings' => 'scripts_line_space',
			) 
		));
        
        //Javascript
		$wp_customize->add_setting(
		    'c_javascript',
		    array(
		        'default' => '',
		    )
		);
		$wp_customize->add_control(
		    'c_javascript',
		    array(
		        'label' => 'Custom Javascript',
				'description' => 'Enter your custom javascript code. Object Theme includes JQuery support by default. The code will be inserted above the head tag.',
		        'section' => 'g_scripts',
		        'type' => 'textarea',
		    )
		);
	
?>