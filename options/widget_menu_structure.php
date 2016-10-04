<?php

/** REGISTER GLOBAL MENUS **/
add_action( 'init', 'menu_areas' );

function menu_areas() {
    register_nav_menus(array(
        'primary_menu' => 'Primary Header Menu',
        'secondary_menu' => 'Secondary Header Menu',
        'tertiary_menu' => 'Tertiary Header Menu',
    ));
}
	
/** REGISTER WIDGET AREAS **/
add_action( 'widgets_init', 'widget_areas' );

/** WIDGET AREA FUNCTIONS **/
function widget_areas() {
    register_sidebar( array(
        'name'          => 'Primary Header',
        'id'            => 'primary_header',
        'before_widget' => '<div class="primary_header_widget_content">',
        'after_widget'  => '</div>',
        'before_title' => '<div class="primary_header_widget_header">',
        'after_title' => '</div>',
    ) );

    register_sidebar( array(
        'name'          => 'Secondary Header',
        'id'            => 'secondary_header',
        'before_widget' => '<div class="secondary_header_widget_content">',
        'after_widget'  => '</div>',
        'before_title' => '<div class="secondary_header_widget_content">',
        'after_title' => '</div>',
    ) );

    register_sidebar( array(
        'name'          => 'Tertiary Header',
        'id'            => 'tertiary_header',
        'before_widget' => '<div class="tertiary_header_widget_content">',
        'after_widget'  => '</div>',
        'before_title' => '<div class="tertiary_header_widget_content">',
        'after_title' => '</div>',
    ) );

	register_sidebar( array(
		'name'          => 'Upper Uni-Bar',
		'id'            => 'uub',
		'before_widget' => '<div class="upper_unibar_widget_content">',
		'after_widget'  => '</div>',
		'before_title' => '<div class="upper_unibar_widget_header">',
		'after_title' => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => 'Lower Uni-Bar',
		'id'            => 'lub',
		'before_widget' => '<div class="lower_unibar_widget_content">',
		'after_widget'  => '</div>',
		'before_title' => '<div class="lower_unibar_widget_header">',
		'after_title' => '</div>',
	) );
    
    register_sidebar( array(
		'name'          => 'Left Sidebar',
		'id'            => 'left_sidebar',
		'before_widget' => '<div class="left_sidebar_widget">',
		'after_widget'  => '</div>',
		'before_title' => '<div class="left_sidebar_widget_title">',
		'after_title' => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => 'Right Sidebar',
		'id'            => 'right_sidebar',
		'before_widget' => '<div class="right_sidebar_widget">',
		'after_widget'  => '</div>',
		'before_title' => '<div class="right_sidebar_widget_title">',
		'after_title' => '</div>',
	) );
    
	register_sidebar( array(
		'name'          => 'Multi-Bar Panel 1',
		'id'            => 'lmp1',
		'before_widget' => '<div class="lower_multibar_widget_content">',
		'after_widget'  => '</div>',
		'before_title' => '<div class="lower_multibar_widget_header">',
		'after_title' => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => 'Multi-Bar Panel 2',
		'id'            => 'lmp2',
		'before_widget' => '<div class="lower_multibar_widget_content">',
		'after_widget'  => '</div>',
		'before_title' => '<div class="lower_multibar_widget_header">',
		'after_title' => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => 'Multi-Bar Panel 3',
		'id'            => 'lmp3',
		'before_widget' => '<div class="lower_multibar_widget_content">',
		'after_widget'  => '</div>',
		'before_title' => '<div class="lower_multibar_widget_header">',
		'after_title' => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => 'Multi-Bar Panel 4',
		'id'            => 'lmp4',
		'before_widget' => '<div class="lower_multibar_widget_content">',
		'after_widget'  => '</div>',
		'before_title' => '<div class="lower_multibar_widget_header">',
		'after_title' => '</div>',
	) );

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer_a',
		'before_widget' => '<div class="footer_object">',
		'after_widget'  => '</div>',
		'before_title' => '<span>',
		'after_title' => '</span>',
	) );

}

?>