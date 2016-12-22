<?php
    //Load CSS Styles
    wp_register_style( 'extender_css', get_template_directory() . '/components/shortcodes/design.css' );
    wp_enqueue_style( 'extender_css' );

    //Centered Box
    function centeredBox($atts, $content = null) {
        extract(shortcode_atts(array(
            "width" => '600px'
        ), $atts));
        return '<div class="oe-columns"><div class="oe-centered-box" style="max-width:' . $width . '">' . do_shortcode($content) . '</div></div><div style="clear: both;">';
    }
    add_shortcode('centered-box', 'centeredBox');
    
    //Padded Box
    function paddedBox($atts, $content = null) {
        extract(shortcode_atts(array(
            "padding" => '10%'
        ), $atts));
        return '<div style="padding:' . $padding . ';' . '">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('padded-box', 'paddedBox');
    
    //Background Box [Color]
    function backgroundColorBox($atts, $content = null) {
        extract(shortcode_atts(array(
            "background" => '#FFFFFF'
        ), $atts));
        return '<div style="background-color:' . $background . ';' . '">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('background-color-box', 'backgroundColorBox');
    
    //Background Box [Image]
    function backgroundImageBox($atts, $content = null) {
        extract(shortcode_atts(array(
            "background" => '',
            "size" => 'cover'
        ), $atts));
        return '<div style="background-image:url(' . "'" . $background . "'" . '); background-size:' . $size . ';' . '">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('background-image-box', 'backgroundImageBox');
    
    //Alert Box [Green]
    function alertBoxGreen($atts, $content = null) {
        return '<div class="oe-alert green">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('alert-green', 'alertBoxGreen');
    
    //Alert Box [Yellow]
    function alertBoxYellow($atts, $content = null) {
        return '<div class="oe-alert yellow">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('alert-yellow', 'alertBoxYellow');
    
    //Alert Box [Red]
    function alertBoxRed($atts, $content = null) {
        return '<div class="oe-alert red">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('alert-red', 'alertBoxRed');
    
    //Alert Box [Blue]
    function alertBoxBlue($atts, $content = null) {
        return '<div class="oe-alert blue">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('alert-blue', 'alertBoxBlue');

    //Border Box
    function borderBox($atts, $content = null) {
        extract(shortcode_atts(array(
            "size" => '2px',
            "color" => '#CCCCCC',
            "style" => 'solid'
        ), $atts));
        return '<div style="border:' . $size . ' ' . $style . ' ' . $color . ';' . '">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('border-box', 'borderBox');

    //Font Awesome Icon shortcode
    function iconShortcode($atts) {
        extract(shortcode_atts(array(
            "type" => '',
            "size" => '16'
        ), $atts));
        return '<i class="fa fa-' . $type . '" aria-hidden="true" style="font-size:'. $size .'rem"></i>';
    }
    add_shortcode('icon', 'iconShortcode');
    
    //2 columns layout
    function columnsTwoStart($atts, $content = null) {
        return '<div class="oe-columns">' . '<div class="one-half">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('columns-two-start', 'columnsTwoStart');
    
    function columnsTwoEnd($atts, $content = null) {
        return '<div class="one-half">' . do_shortcode($content) . '</div>' . '</div> <div style="clear: both;"></div>';
    }
    add_shortcode('columns-two-end', 'columnsTwoEnd');
    
    //3 columns Layout
    function columnsThreeStart($atts, $content = null) {
        return '<div class="oe-columns">' . '<div class="one-third">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('columns-three-start', 'columnsThreeStart');
    
    function columnsThreeMiddle($atts, $content = null) {
        return '<div class="one-third">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('columns-three-middle', 'columnsThreeMiddle');
    
    function columnsThreeEnd($atts, $content = null) {
        return '<div class="one-third">' . do_shortcode($content) . '</div>' . '</div> <div style="clear: both;"></div>';
    }
    add_shortcode('columns-three-end', 'columnsThreeEnd');
    
    //4 columns Layout
    function columnsFourStart($atts, $content = null) {
        return '<div class="oe-columns">' . '<div class="one-fourth">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('columns-four-start', 'columnsFourStart');
    
    function columnsFourLeftInner($atts, $content = null) {
        return '<div class="one-fourth">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('columns-four-innerLeft', 'columnsFourLeftInner');
    
    function columnsFourRightInner($atts, $content = null) {
        return '<div class="one-fourth">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('columns-four-innerRight', 'columnsFourRightInner');
    
    function columnsFourEnd($atts, $content = null) {
        return '<div class="one-fourth">' . do_shortcode($content) . '</div>' . '</div> <div style="clear: both;"></div>';
    }
    add_shortcode('columns-four-end', 'columnsFourEnd');
    
    //Left Sidebar Layout
    function leftSidebarStart($atts, $content = null) {
        return '<div class="oe-columns">' . '<div class="one-third">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('left-sidebar-start', 'leftSidebarStart');
    
    function leftSidebarEnd($atts, $content = null) {
        return '<div class="two-third">' . do_shortcode($content) . '</div>' . '</div> <div style="clear: both;"></div>';
    }
    add_shortcode('left-sidebar-end', 'leftSidebarEnd');
    
    //Right Sidebar Layout
    function rightSidebarStart($atts, $content = null) {
        return '<div class="oe-columns">' . '<div class="two-third">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('right-sidebar-start', 'rightSidebarStart');
    
    function rightSidebarEnd($atts, $content = null) {
        return '<div class="one-third">' . do_shortcode($content) . '</div>' . '</div> <div style="clear: both;"></div>';
    }
    add_shortcode('right-sidebar-end', 'rightSidebarEnd'); 
        
    //Header box
    function headerBox($atts, $content = null) {
        extract(shortcode_atts(array(
            "title" => 'Header Text',
            "subtitle" => 'Subtitle Text',
        ), $atts));
        return '<div class="oe-header">' . '<div class="oe-header-text">' . '<span class="oe-header htitle">' . $title . '</span><br>' . '<span class="oe-header subtitle">' . $subtitle . '</span><br>' . '<span class="oe-header content">' . $content  . '</span>' . '</div>' . '</div>';
    }
    add_shortcode('header', 'headerBox');
    
    //Blue Button - Small
    function smallBlueButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button small blue">' . $content . '</a>';
    }
    add_shortcode('small-blue-button', 'smallBlueButton');
    
    //Red Button - Small
    function smallRedButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button small red">' . $content . '</a>';
    }
    add_shortcode('small-red-button', 'smallRedButton');
    
    //Green Button - Small
    function smallGreenButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button small green">' . $content . '</a>';
    }
    add_shortcode('small-green-button', 'smallGreenButton');
    
    //Yellow Button - Small
    function smallYellowButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button small yellow">' . $content . '</a>';
    }
    add_shortcode('small-yellow-button', 'smallYellowButton');
    
    //Grey Button - Small
    function smallGreyButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button small grey">' . $content . '</a>';
    }
    add_shortcode('small-grey-button', 'smallGreyButton');
    
    //Black Button - Small
    function smallBlackButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button small black">' . $content . '</a>';
    }
    add_shortcode('small-black-button', 'smallBlackButton');
    
    //Blue Button - Medium
    function mediumBlueButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button medium blue">' . $content . '</a>';
    }
    add_shortcode('medium-blue-button', 'mediumBlueButton');
    
    //Red Button - Medium
    function mediumRedButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button medium red">' . $content . '</a>';
    }
    add_shortcode('medium-red-button', 'mediumRedButton');
    
    //Green Button - Medium
    function mediumGreenButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button medium green">' . $content . '</a>';
    }
    add_shortcode('medium-green-button', 'mediumGreenButton');
    
    //Yellow Button - Medium
    function mediumYellowButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button medium yellow">' . $content . '</a>';
    }
    add_shortcode('medium-yellow-button', 'mediumYellowButton');
    
    //Grey Button - Medium
    function mediumGreyButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button medium grey">' . $content . '</a>';
    }
    add_shortcode('medium-grey-button', 'mediumGreyButton');
    
    //Black Button - Medium
    function mediumBlackButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button medium black">' . $content . '</a>';
    }
    add_shortcode('medium-black-button', 'mediumBlackButton');
    
    //Blue Button - Large
    function largeBlueButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button large blue">' . $content . '</a>';
    }
    add_shortcode('large-blue-button', 'largeBlueButton');
    
    //Red Button - Large
    function largeRedButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button large red">' . $content . '</a>';
    }
    add_shortcode('large-red-button', 'largeRedButton');
    
    //Green Button - Large
    function largeGreenButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button large green">' . $content . '</a>';
    }
    add_shortcode('large-green-button', 'largeGreenButton');
    
    //Yellow Button - Large
    function largeYellowButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button large yellow">' . $content . '</a>';
    }
    add_shortcode('large-yellow-button', 'largeYellowButton');
    
    //Grey Button - Large
    function largeGreyButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button large grey">' . $content . '</a>';
    }
    add_shortcode('large-grey-button', 'largeGreyButton');
    
    //Black Button - Large
    function largeBlackButton($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button large black">' . $content . '</a>';
    }
    add_shortcode('large-black-button', 'largeBlackButton');
    
    //Blue Hollow Button - Small
    function smallBlueButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow small blue">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('small-blue-button-hollow', 'smallBlueButtonHollow');
    
    //Red Hollow Button - Small
    function smallRedButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow small red">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('small-red-button-hollow', 'smallRedButtonHollow');
    
    //Green Hollow Button - Small
    function smallGreenButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow small green">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('small-green-button-hollow', 'smallGreenButtonHollow');
    
    //Yellow Hollow Button - Small
    function smallYellowButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow small yellow">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('small-yellow-button-hollow', 'smallYellowButtonHollow');
    
    //Grey Hollow Button - Small
    function smallGreyButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow small grey">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('small-grey-button-hollow', 'smallGreyButtonHollow');
    
    //Black Hollow Button - Small
    function smallBlackButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow small black">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('small-black-button-hollow', 'smallBlackButtonHollow');
    
    //Blue Hollow Button - Medium
    function mediumBlueButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow medium blue">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('medium-blue-button-hollow', 'mediumBlueButtonHollow');
    
    //Red Hollow Button - Medium
    function mediumRedButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow medium red">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('medium-red-button-hollow', 'mediumRedButtonHollow');
    
    //Green Hollow Button - Medium
    function mediumGreenButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow medium green">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('medium-green-button-hollow', 'mediumGreenButtonHollow');
    
    //Yellow Hollow Button - Medium
    function mediumYellowButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow medium yellow">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('medium-yellow-button-hollow', 'mediumYellowButtonHollow');
    
    //Grey Hollow Button - Medium
    function mediumGreyButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow medium grey">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('medium-grey-button-hollow', 'mediumGreyButtonHollow');
    
    //Black Hollow Button - Medium
    function mediumBlackButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow medium black">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('medium-black-button-hollow', 'mediumBlackButtonHollow');
    
    //Blue Hollow Button - Large
    function largeBlueButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow large blue">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('large-blue-button-hollow', 'largeBlueButtonHollow');
    
    //Red Hollow Button - Large
    function largeRedButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow large red">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('large-red-button-hollow', 'largeRedButtonHollow');
    
    //Green Hollow Button - Large
    function largeGreenButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow large green">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('large-green-button-hollow', 'largeGreenButtonHollow');
    
    //Yellow Hollow Button - Large
    function largeYellowButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow large yellow">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('large-yellow-button-hollow', 'largeYellowButtonHollow');
    
    //Grey Hollow Button - Large
    function largeGreyButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow large grey">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('large-grey-button-hollow', 'largeGreyButtonHollow');
    
    //Black Hollow Button - Large
    function largeBlackButtonHollow($atts, $content = null) {
        extract(shortcode_atts(array(
            "link" => '#',
        ), $atts));
        return '<a href="' . $link . '" class="oe-button-hollow large black">' . do_shortcode($content) . '</a>';
    }
    add_shortcode('large-black-button-hollow', 'largeBlackButtonHollow');
?>