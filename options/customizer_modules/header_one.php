<?php

$wp_customize->add_panel('header_one', array('title' => __( 'Primary Header' ), 'priority' => 30,) );
		
        $wp_customize->add_section('header_one_visibility', array('title' => 'Primary Header Visibility','panel' => 'header_one','priority' => 30,));
        
        //Header 1 Visibility
		$wp_customize->add_setting(
		    'header1_visibility',
		    array(
		        'default' => 'visible',
		    )
		);
		$wp_customize->add_control(
		    'header1_visibility',
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
        
        
?>