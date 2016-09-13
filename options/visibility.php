<?php

/** DECLARE GLOBAL VARIABLES **/
global $header1; global $header2; global $header3;
global $uunibar; global $cwrapper; global $ccontent;
global $lsidebar; global $rsidebar; global $lunibar; global $multibar; global $footer;

$visibility_control = get_post_meta( get_the_ID(), 'enable-control', true );

/** UNIQUE PAGE OPTIONS **/
if ((is_page() || is_single()) && ($visibility_control == true)) {
    $header1 = get_post_meta( get_the_ID(), 'header1-control', true );
    $header2 = get_post_meta( get_the_ID(), 'header2-control', true );
    $header3 = get_post_meta( get_the_ID(), 'header3-control', true );
    $uunibar = get_post_meta( get_the_ID(), 'upperunibar-control', true );
    $lunibar = get_post_meta( get_the_ID(), 'lowerunibar-control', true );
    $lsidebar = get_post_meta( get_the_ID(), 'leftsidebar-control', true );
    $rsidebar = get_post_meta( get_the_ID(), 'rightsidebar-control', true );
    $ccontent = get_post_meta( get_the_ID(), 'content-control', true );
    $cwrapper = get_post_meta( get_the_ID(), 'wrapper-control', true );
    $multibar = get_post_meta( get_the_ID(), 'multibar-control', true );
    $footer = get_post_meta( get_the_ID(), 'footer-control', true );
}

/** UNIVERSAL PAGE OPTIONS **/
else {
    //Header 1
    $h1vis = get_theme_mod('primary_header_visibility','hidden');
	if($h1vis == 'visible' || ($h1vis == 'homepage' && is_front_page() && $wp_query->get( 'paged' ) < 2 ) || ($h1vis == 'page' && is_page()) || ($h1vis == 'posts' && is_single())) {
        $header1 = TRUE;
    }
    //Header 2
    $h2vis = get_theme_mod('secondary_header_visibility','hidden');
	if($h2vis == 'visible' || ($h2vis == 'homepage' && is_front_page() && $wp_query->get( 'paged' ) < 2 ) || ($h2vis == 'page' && is_page()) || ($h2vis == 'posts' && is_single())) {
        $header2 = TRUE;
    }
    //Header 3
    $h3vis = get_theme_mod('tertiary_header_visibility','hidden');
	if($h3vis == 'visible' || ($h3vis == 'homepage' && is_front_page() && $wp_query->get( 'paged' ) < 2 ) || ($h3vis == 'page' && is_page()) || ($h3vis == 'posts' && is_single())) {
        $header3 = TRUE;
    }

    //Upper Unibar
    $uuvis = get_theme_mod('upper_unibar_visibility','hidden');
	if($uuvis == 'visible' || ($uuvis == 'homepage' && is_front_page() && $wp_query->get( 'paged' ) < 2 ) || ($uuvis == 'page' && is_page()) || ($uuvis == 'posts' && is_single())) {
        $uunibar = TRUE;
    }

    //Post/Page Content
    $ctvis = get_theme_mod('content_visibility','visible');
	if($ctvis == 'visible' || ($ctvis == 'homepage' && is_front_page() && $wp_query->get( 'paged' ) < 2 ) || ($ctvis == 'page' && is_page()) || ($ctvis == 'posts' && is_single())) {
        $ccontent = TRUE;
    }

    //Left Sidebar
    $lsvis = get_theme_mod('left_sidebar_visibility','hidden');
	if($lsvis == 'visible' || ($lsvis == 'homepage' && is_front_page() && $wp_query->get( 'paged' ) < 2 ) || ($lsvis == 'page' && is_page()) || ($lsvis == 'posts' && is_single())) {
        $lsidebar = TRUE;
    }

    //Right Sidebar
    $rsvis = get_theme_mod('right_sidebar_visibility','visible');
	if($rsvis == 'visible' || ($rsvis == 'homepage' && is_front_page() && $wp_query->get( 'paged' ) < 2 ) || ($rsvis == 'page' && is_page()) || ($rsvis == 'posts' && is_single())) {
        $rsidebar = TRUE;
    }

    //Main Wrapper
	$wvis = get_theme_mod('wrapper_visibility','visible');
	if($wvis == 'visible' || ($wvis == 'homepage' && is_front_page() && $wp_query->get( 'paged' ) < 2 ) || ($wvis == 'page' && is_page()) || ($wvis == 'posts' && is_single())) {
        $cwrapper = true;
    }
    //Lower Unibar
    $luvis = get_theme_mod('lower_unibar_visibility','hidden');
	if($luvis == 'visible' || ($luvis == 'homepage' && is_front_page() && $wp_query->get( 'paged' ) < 2 ) || ($luvis == 'page' && is_page()) || ($luvis == 'posts' && is_single())) {
        $lunibar = true;
    }

    //Multibar
    $lmvis = get_theme_mod('lower_multibar_visibility','hidden');
    if($lmvis == 'visible' || ($lmvis == 'homepage' && is_front_page() && $wp_query->get( 'paged' ) < 2 ) || ($lmvis == 'page' && is_page()) || ($lmvis == 'posts' && is_single())) {
        $multibar = true;
    }

    //Footer
    $fvis = get_theme_mod('footer_visibility','visible');
	if($fvis == 'visible' || ($fvis == 'homepage' && is_front_page() && $wp_query->get( 'paged' ) < 2 ) || ($fvis == 'page' && is_page()) || ($fvis == 'posts' && is_single())) {
        $footer = true;
    }
}

?>
