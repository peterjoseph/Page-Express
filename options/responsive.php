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
    }

    #header .standard {
        display:none;
    }
}