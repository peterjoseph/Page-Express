<?php

$wp_customize->add_panel('header_two', array('title' => __( 'Secondary Header' ), 'priority' => 30,) );
		
        $wp_customize->add_section('header_two_visibility', array('title' => 'Secondary Header Visibility','panel' => 'header_two','priority' => 30,));
        
        //Header 2 Visibility
		$wp_customize->add_setting(
		    'header2_visibility',
		    array(
		        'default' => 'visible',
		    )
		);
		$wp_customize->add_control(
		    'header2_visibility',
		    array(
		        'type' => 'select',
		        'label' => 'Header 2',
		        'section' => 'header_two_visibility',
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