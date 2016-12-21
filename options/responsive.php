/******************************************************/
/*                                                    */
/*               Responsive Mobile Header             */
/*                                                    */
/******************************************************/

@media only screen and (max-width: 800px) {
    #header {
        <?php if(get_theme_mod('responsive_design_header_fixed')) { ?>
            padding-bottom:60px;
        <?php } ?>
    }

    #header .mobile {
        display:block;
        <?php if(get_theme_mod('responsive_design_header_fixed')) { ?>
            position:fixed;
        <?php } ?>
        z-index:6;
    }

    #header .standard {
        <?php if(get_theme_mod('responsive_design_header_fixed')) { ?>
            position:fixed;
            padding-top:60px;
            margin-bottom:-60px;
        <?php } ?>
        display:none;
        width:100%;
        max-height:70%;
        background-image:url('<?php echo get_bloginfo('template_url') ?>/images/transparent_background.png');
        overflow:auto;
    }

    #header .standard #primary_header {
      width:100%;
      box-sizing:border-box;
      border:0px;
      border-radius:0px;
      padding:0px;
      margin:0px;
      <?php if(!get_theme_mod('primary_header_menu_background_visible')) { ?>
      background-color:<?php echo get_theme_mod('primary_header_menu_background_color','#FFF') ?>;
      background-image:none;
      <?php } ?>
    }

    #header .standard #primary_header_content {
        width:100%;
        max-width:100%;
        height:auto;
        padding:0px;
        display:block;
    }

    #header .standard #primary_header_content #logo {
        display:none;
    }

    #header .standard #primary_header_content #menu {
        position: static;
        z-index:5;
    }

    #header .standard #primary_header_content #menu .wrapper {
        margin-left:auto;
        margin-right:auto;
        position:static;
        transform:none;
    }

    #header .standard #primary_header_content #menu .wrapper .menu-item-description {
        display:block;
    }

    #header .standard #primary_header_content #menu .wrapper li a span.menu-item-description {
        text-decoration: none;
    }

    #header .standard #primary_header_content #menu ul {
        margin: 0;
        padding: 0;
        width:100%;
    }

    #header .standard #primary_header_content #menu li {
        width:100%;
        position: static;
        display:inline-block;
        margin:0px;
        padding:0px;
        <?php if(!get_theme_mod('primary_header_menu_background_visible')) { ?>
            background-color:<?php echo get_theme_mod('primary_header_menu_background_color','#FFF') ?>;
            background-image:none;
        <?php } ?>
        border:0px;
        border-radius:0px;
        text-align:center;
    }

    #header .standard #primary_header_content #menu li:hover   {
        border-radius:0px;
    }

    #header .standard #primary_header_content #menu li a  {
        width:100%;
        padding:0px;
        text-align:center;
        padding-top:<?php echo get_theme_mod('primary_header_menu_height','25') ?>px;
        padding-bottom:<?php echo get_theme_mod('primary_header_menu_height','25') ?>px;
        display: inline-block;
    }

    #header .standard #primary_header_content #menu .current-menu-item a, #primary_header_content #menu .current_page_item a, #primary_header_content #menu a:hover {
        width:100%;
        display:inline-block;
        <?php if(!get_theme_mod('primary_header_menu_background_visible')) { ?>
            background-color:<?php echo get_theme_mod('primary_header_menu_hover_background_color','#C7C7C7') ?>;
            background-image:none;
        <?php } ?>
    }

    #header .standard #primary_header_content #menu .sub-menu {
        position: static;
        display: inline-block;
        top: 0; bottom:0; left: 0; right:0;
        width:100%;
    }

    #header .standard #primary_header_content #menu ul ul {
        text-align: left;
    }

    #header .standard #primary_header_content #menu ul ul li {
        width:100%;
        display:inline-block;
        float: none;
        text-align:center;
    }

    #header .standard #primary_header_content #menu ul ul li a {
        width:100%;
        display: inline-block;
        font-weight:300;
    }

    #header .standard #primary_header_content #menu ul li:hover > ul {
        width:100%;
        display: inline-block;
    }

    #header .standard #secondary_header {
        width:100%;
        box-sizing:border-box;
        border:0px;
        border-radius:0px;
        padding:0px;
        margin:0px;
        <?php if(!get_theme_mod('secondary_header_menu_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('secondary_header_menu_background_color','#FFF') ?>;
        background-image:none;
        <?php } ?>
    }

    #header .standard #secondary_header_content {
        width:100%;
        max-width:100%;
        height:auto;
        padding:0px;
        display:block;
    }

    #header .standard #secondary_header_content #logo {
        display:none;
    }

    #header .standard #secondary_header_content #menu {
        position: static;
        z-index:5;
    }

    #header .standard #secondary_header_content #menu .wrapper {
        margin-left:auto;
        margin-right:auto;
        position:static;
        transform:none;
    }

    #header .standard #secondary_header_content #menu .wrapper .menu-item-description {
        display:block;
    }

    #header .standard #secondary_header_content #menu .wrapper li a span.menu-item-description {
        text-decoration: none;
    }

    #header .standard #secondary_header_content #menu ul {
        margin: 0;
        padding: 0;
        width:100%;
    }

    #header .standard #secondary_header_content #menu li {
        width:100%;
        position: static;
        display:inline-block;
        margin:0px;
        padding:0px;
        <?php if(!get_theme_mod('secondary_header_menu_background_visible')) { ?>
            background-color:<?php echo get_theme_mod('secondary_header_menu_background_color','#9E9E9E') ?>;
            background-image:none;
        <?php } ?>
        border:0px;
        border-radius:0px;
        text-align:center;
    }

    #header .standard #secondary_header_content #menu li:hover   {
        border-radius:0px;
    }

    #header .standard #secondary_header_content #menu li a  {
        width:100%;
        padding:0px;
        text-align:center;
        padding-top:<?php echo get_theme_mod('secondary_header_menu_height','25') ?>px;
        padding-bottom:<?php echo get_theme_mod('secondary_header_menu_height','25') ?>px;
        display: inline-block;
    }

    #header .standard #secondary_header_content #menu .current-menu-item a, #secondary_header_content #menu .current_page_item a, #secondary_header_content #menu a:hover {
        width:100%;
        display:inline-block;
        <?php if(!get_theme_mod('secondary_header_menu_background_visible')) { ?>
            background-color:<?php echo get_theme_mod('secondary_header_menu_hover_background_color','#C7C7C7') ?>;
            background-image:none;
        <?php } ?>
    }

    #header .standard #secondary_header_content #menu .sub-menu {
        position: static;
        display: inline-block;
        top: 0; bottom:0; left: 0; right:0;
        width:100%;
    }

    #header .standard #secondary_header_content #menu ul ul {
        text-align: left;
    }

    #header .standard #secondary_header_content #menu ul ul li {
        width:100%;
        display:inline-block;
        float: none;
        text-align:center;
    }

    #header .standard #secondary_header_content #menu ul ul li a {
        width:100%;
        display: inline-block;
        font-weight:300;
    }

    #header .standard #secondary_header_content #menu ul li:hover > ul {
        width:100%;
        display: inline-block;
    }

    #header .standard #tertiary_header {
        width:100%;
        box-sizing:border-box;
        border:0px;
        border-radius:0px;
        padding:0px;
        margin:0px;
        <?php if(!get_theme_mod('tertiary_header_menu_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('tertiary_header_menu_background_color','#FFF') ?>;
        background-image:none;
        <?php } ?>
    }

    #header .standard #tertiary_header_content {
        width:100%;
        max-width:100%;
        height:auto;
        padding:0px;
        display:block;
    }

    #header .standard #tertiary_header_content #logo {
        display:none;
    }

    #header .standard #tertiary_header_content #menu {
        position: static;
        z-index:5;
    }

    #header .standard #tertiary_header_content #menu .wrapper {
        margin-left:auto;
        margin-right:auto;
        position:static;
        transform:none;
    }

    #header .standard #tertiary_header_content #menu .wrapper .menu-item-description {
        display:block;
    }

    #header .standard #tertiary_header_content #menu .wrapper li a span.menu-item-description {
        text-decoration: none;
    }

    #header .standard #tertiary_header_content #menu ul {
        margin: 0;
        padding: 0;
        width:100%;
    }

    #header .standard #tertiary_header_content #menu li {
        width:100%;
        position: static;
        display:inline-block;
        margin:0px;
        padding:0px;
        <?php if(!get_theme_mod('tertiary_header_menu_background_visible')) { ?>
            background-color:<?php echo get_theme_mod('tertiary_header_menu_background_color','#9E9E9E') ?>;
            background-image:none;
        <?php } ?>
        border:0px;
        border-radius:0px;
        text-align:center;
    }

    #header .standard #tertiary_header_content #menu li:hover   {
        border-radius:0px;
    }

    #header .standard #tertiary_header_content #menu li a  {
        width:100%;
        padding:0px;
        text-align:center;
        padding-top:<?php echo get_theme_mod('tertiary_header_menu_height','25') ?>px;
        padding-bottom:<?php echo get_theme_mod('tertiary_header_menu_height','25') ?>px;
        display: inline-block;
    }

    #header .standard #tertiary_header_content #menu .current-menu-item a, #tertiary_header_content #menu .current_page_item a, #tertiary_header_content #menu a:hover {
        width:100%;
        display:inline-block;
        <?php if(!get_theme_mod('tertiary_header_menu_background_visible')) { ?>
            background-color:<?php echo get_theme_mod('tertiary_header_menu_hover_background_color','#C7C7C7') ?>;
            background-image:none;
        <?php } ?>
    }

    #header .standard #tertiary_header_content #menu .sub-menu {
        position: static;
        display: inline-block;
        top: 0; bottom:0; left: 0; right:0;
        width:100%;
    }

    #header .standard #tertiary_header_content #menu ul ul {
        text-align: left;
    }

    #header .standard #tertiary_header_content #menu ul ul li {
        width:100%;
        display:inline-block;
        float: none;
        text-align:center;
    }

    #header .standard #tertiary_header_content #menu ul ul li a {
        width:100%;
        display: inline-block;
        font-weight:300;
    }

    #header .standard #tertiary_header_content #menu ul li:hover > ul {
        width:100%;
        display: inline-block;
    }

}
