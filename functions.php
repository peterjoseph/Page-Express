<?php
	/** IMPORT OPTIONS **/
	require_once ( get_template_directory() . '/options/customize.php' );
	require_once ( get_template_directory() . '/options/widget_menu_structure.php' );

    /** FEATURES IMAGE SUPPORT **/
    add_theme_support('post-thumbnails', array('post'));

    /** LOAD THE THEME UPDATER **/
    function theme_update() {
        require( get_template_directory() . '/options/updater/theme-updater.php' );
        }
    add_action( 'after_setup_theme', 'theme_update' );

	/** LOAD MENU SUPPORT **/
	add_theme_support( 'menus' );

    /** ADD WIDGET SHORTCODE SUPPORT **/
    add_filter('widget_text', 'do_shortcode');

    /** LOAD META PANELS IN POST & PAGES **/
    require_once ( get_template_directory() . '/options/meta.php' );

    /** STRIP EXCERPT OF SHORTCODES **/
    function clean_excerpt( $text ) {
        $text = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $text);
        return $text;
    }
    add_filter( 'the_excerpt', 'clean_excerpt' );

    /** ADD MENU DESCRIPTIONS **/
    function menu_description( $item_output, $item, $depth, $args ) {
        if ( !empty( $item->description ) ) {
            $item_output = str_replace( $args->link_after . '</a>', '<br><span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
        }

        return $item_output;
    }
    add_filter( 'walker_nav_menu_start_el', 'menu_description', 10, 4 );
 ?>
