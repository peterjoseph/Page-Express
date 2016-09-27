<div class="mobile">

</div>
<div class="standard">
    <?php global $header1; if($header1 == TRUE) { ?>
        <div id="primary_header">
            <div id="primary_header_content">
                <?php if( in_array(get_theme_mod('primary_header_type_select','Menu'), array('Logo','Logo & Menu'), true )) { ?>
                    <div id="logo">
                        <div class="wrapper">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                <?php if(get_theme_mod('primary_header_logo_image')) { ?>
                                    <img src="<?php echo get_theme_mod('primary_header_logo_image'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                                <?php } else { ?>
                                    <?php echo "<div class='title'>" . get_theme_mod('primary_header_sitetitle','My Site') . "</div>"; ?>
                                    <?php echo "<div class='tagline'>" . get_theme_mod('primary_header_tagline','just another Wordpress site') . "</div>"; ?>
                                <?php } ?>
                            </a>
                        </div>
                    </div>
                <?php } ?>
                <?php if( in_array(get_theme_mod('primary_header_type_select','Menu'), array('Menu','Logo & Menu','Logo, Menu & Widget','Menu & Widget'), true )) { ?>
                    <div id="menu">
                        <div class="wrapper">
                            <?php if ( has_nav_menu( 'primary_menu' ) ) {
                                wp_nav_menu( array( 'theme_location' => 'primary_menu') );
                            } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>

    <?php global $header2; if($header2 == TRUE) { ?>
        <div id="h2_wrapper">
        </div>
    <?php } ?>

    <?php global $header3; if($header3 == TRUE) { ?>
        <div id="h3_wrapper">
        </div>
    <?php } ?>
</div>