<?php

$wp_customize->add_panel('header_three', array('title' => __( 'Tertiary Header' ), 'priority' => 30,) );
		
        $wp_customize->add_section('header_three_visibility', array('title' => 'Tertiary Header Visibility','panel' => 'header_three','priority' => 30,));
        
        //Header 3 Visibility
		$wp_customize->add_setting(
		    'header3_visibility',
		    array(
		        'default' => 'visible',
		    )
		);
		$wp_customize->add_control(
		    'header3_visibility',
		    array(
		        'type' => 'select',
		        'label' => 'Header 3',
		        'section' => 'header_three_visibility',
		        'choices' => array(
					'visible' => 'Visible Everywhere',
		            'hidden' => 'Hidden',
		            'homepage' => 'Homepage Only',
		            'page' => 'Pages Only',
					'posts' => 'Posts Only',
		        ),
		    )
		);
        
        
?>