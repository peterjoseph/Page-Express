<?php
	
	add_action( 'customize_register', 'options' );
	
	function options( $wp_customize ) {
		$wp_customize->get_section('static_front_page')->title = __( 'Home Page' );
		$wp_customize->get_section('static_front_page')->priority = __( '27' );
		$wp_customize->remove_section( 'title_tagline' );

        function customizer_stylesheet() {
                    wp_register_style( 'customizer-css', get_template_directory_uri() . '/options/styles/styles.css', NULL, NULL, 'all' );
                    wp_enqueue_style( 'customizer-css' );
                }
        add_action( 'customize_controls_print_styles', 'customizer_stylesheet' );
        
        require_once ( get_template_directory() . '/options/customizer_modules/custom_controls.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/header_one.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/header_two.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/header_three.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/upper_unibar.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/content.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/left_sidebar.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/right_sidebar.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/lower_unibar.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/multibar.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/footer.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/global_background.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/responsive_design.php' );
        require_once ( get_template_directory() . '/options/customizer_modules/global_options.php' );
		
		/** REGISTER CONTENT WRAPPER SECTIONS **/
		$wp_customize->add_section('uu_structure', array('title' => 'Upper Uni-Bar','panel' => 'structure','priority' => 30,));
		$wp_customize->add_section('content_wrapper', array('title' => 'Wrapper (Content & Sidebars)','panel' => 'structure','priority' => 30,));
        $wp_customize->add_section('post_page', array('title' => 'Post & Page Content','panel' => 'structure','priority' => 30,));
        $wp_customize->add_section('left_sidebar', array('title' => 'Left Sidebar','panel' => 'structure','priority' => 30,));
        $wp_customize->add_section('right_sidebar', array('title' => 'Right Sidebar','panel' => 'structure','priority' => 30,));
		$wp_customize->add_section('lu_structure', array('title' => 'Lower Uni-Bar','panel' => 'structure','priority' => 30,));
		$wp_customize->add_section('lm_structure', array('title' => 'Multi-Bar','panel' => 'structure','priority' => 30,));
		$wp_customize->add_section('f_structure', array('title' => 'Footer','panel' => 'structure','priority' => 30,));

};

?>