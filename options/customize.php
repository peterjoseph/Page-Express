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

        function customizer_layout() {
            wp_enqueue_script( 'customizer-js-layout', get_template_directory_uri() . '/options/scripts/customizer_layout.js', NULL, NULL, 'all' );
        }
        add_action( 'customize_controls_enqueue_scripts', 'customizer_layout' );

				function customizer_fill() {
					wp_enqueue_script( 'customizer-js-fill', get_template_directory_uri() . '/options/scripts/customizer_fill.js', array( 'customize-preview', 'jquery' ) );
				}
				add_action( 'customize_preview_init', 'customizer_fill' );

        require_once ( get_template_directory() . '/options/customizer_modules/custom_controls.php' );
				require_once ( get_template_directory() . '/options/customizer_modules/sanitization.php' );
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

    };

?>
