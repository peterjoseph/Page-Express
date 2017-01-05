jQuery(function($){

  /****************************************/
  /*                                      */
  /*            PRIMARY HEADER            */
  /*                                      */
  /****************************************/

  //Primary Header Type Option
  wp.customize( 'primary_header_type_select', function( value ) {
      if(wp.customize.value('primary_header_type_select')() != 'Logo Only') {
        $( '#customize-control-primary_header_logo_layout_title , #customize-control-primary_header_logo_alignment' ).hide();
      }
      value.bind( function( to ) {
        if(wp.customize.value('primary_header_type_select')() == 'Logo Only') {
          $( '#customize-control-primary_header_logo_layout_title , #customize-control-primary_header_logo_alignment' ).hide(300);
        } else {
          $( '#customize-control-primary_header_logo_layout_title , #customize-control-primary_header_logo_alignment' ).show(300);
        }
      } );
  } );

  //Primary Header Width Option
  wp.customize( 'primary_header_width_option', function( value ) {
    if(wp.customize.value('primary_header_width_option')() == 'fixed') {
      $( '#customize-control-primary_header_width_fluid' ).hide();
    } else {
      $( '#customize-control-primary_header_width_fixed').hide();
    }
    value.bind( function( to ) {
      if(wp.customize.value('primary_header_width_option')() == 'fixed') {
        $( '#customize-control-primary_header_width_fixed').show(); $( '#customize-control-primary_header_width_fluid' ).hide();
      } else {
        $( '#customize-control-primary_header_width_fluid' ).show(); $( '#customize-control-primary_header_width_fixed').hide();
      }
    } );
  } );

  //Primary Header Content Width Option
  wp.customize( 'primary_header_content_width_option', function( value ) {
    if(wp.customize.value('primary_header_content_width_option')() == 'fixed') {
      $( '#customize-control-primary_header_content_width_fluid' ).hide();
    } else {
      $( '#customize-control-primary_header_content_width_fixed').hide();
    }
    value.bind( function( to ) {
      if(wp.customize.value('primary_header_content_width_option')() == 'fixed') {
        $( '#customize-control-primary_header_content_width_fixed').show(); $( '#customize-control-primary_header_content_width_fluid' ).hide();
      } else {
        $( '#customize-control-primary_header_content_width_fluid' ).show(); $( '#customize-control-primary_header_content_width_fixed').hide();
      }
    } );
  } );

  //Primary Header Background
  wp.customize( 'primary_header_background_visible', function( value ) {
      if($('[data-customize-setting-link="primary_header_background_visible"]').is(':checked')) {
          $( '#customize-control-primary_header_background_color, #customize-control-primary_header_background_image, #customize-control-primary_header_background_image_position , #customize-control-primary_header_background_image_repeat' ).hide();
      }
      value.bind( function( to ) {
          if($('[data-customize-setting-link="primary_header_background_visible"]').is(':checked')) {
              $( '#customize-control-primary_header_background_color, #customize-control-primary_header_background_image, #customize-control-primary_header_background_image_position , #customize-control-primary_header_background_image_repeat' ).hide(300);
          } else {
            $( '#customize-control-primary_header_background_color, #customize-control-primary_header_background_image' ).show(300);
            if(wp.customize.value('primary_header_background_image')()) {
              $( '#customize-control-primary_header_background_image_position , #customize-control-primary_header_background_image_repeat' ).show(300);
            } else {
              $( '#customize-control-primary_header_background_image_position , #customize-control-primary_header_background_image_repeat' ).hide(300);
            }
          }
      } );
  } );

  //Primary Header Background Position & Repetition Buttons
  wp.customize( 'primary_header_background_image', function( value ) {
      if(!wp.customize.value('primary_header_background_image')()) {
        $( '#customize-control-primary_header_background_image_position , #customize-control-primary_header_background_image_repeat' ).hide();
      }
      value.bind( function( to ) {
        if(wp.customize.value('primary_header_background_image')()) {
          $( '#customize-control-primary_header_background_image_position , #customize-control-primary_header_background_image_repeat' ).show(300);
        } else {
          $( '#customize-control-primary_header_background_image_position , #customize-control-primary_header_background_image_repeat' ).hide(300);
        }
      } );
  } );

  //Primary Header Borders
  wp.customize( 'primary_header_border_style', function( value ) {
    if(wp.customize.value('primary_header_border_style')() == 'none') {
      $( '#customize-control-primary_header_border_color, #customize-control-primary_header_border_top, #customize-control-primary_header_border_bottom, #customize-control-primary_header_border_left, #customize-control-primary_header_border_right, #customize-control-primary_header_border_radius' ).hide();
    }
    value.bind( function( to ) {
      if(wp.customize.value('primary_header_border_style')() == 'none') {
        $( '#customize-control-primary_header_border_color, #customize-control-primary_header_border_top, #customize-control-primary_header_border_bottom, #customize-control-primary_header_border_left, #customize-control-primary_header_border_right, #customize-control-primary_header_border_radius' ).hide(300);
      } else {
        $( '#customize-control-primary_header_border_color, #customize-control-primary_header_border_top, #customize-control-primary_header_border_bottom, #customize-control-primary_header_border_left, #customize-control-primary_header_border_right, #customize-control-primary_header_border_radius' ).show(300);
      }
    } );
  } );

  //Primary Header Logo Image
  wp.customize( 'primary_header_logo_image', function( value ) {
      if(wp.customize.value('primary_header_logo_image')()) {
        $( '#customize-control-primary_header_logo_title_styling_title , #customize-control-primary_header_sitetitle , #customize-control-primary_header_layout_space_six , #customize-control-primary_header_logo_title_text_color , #customize-control-primary_header_logo_title_fonts , #customize-control-primary_header_logo_title_font_size , #customize-control-primary_header_logo_title_font_weight , #customize-control-primary_header_logo_title_font_transformation , #customize-control-primary_header_logo_tagline_styling_title , #customize-control-primary_header_tagline , #customize-control-primary_header_layout_space_seven , #customize-control-primary_header_logo_tagline_text_color , #customize-control-primary_header_logo_tagline_fonts , #customize-control-primary_header_logo_tagline_font_size , #customize-control-primary_header_logo_tagline_font_weight , #customize-control-primary_header_logo_tagline_font_transformation , #customize-control-primary_header_logo_tagline_position' ).hide();
      }
      value.bind( function( to ) {
        if(wp.customize.value('primary_header_logo_image')()) {
            $( '#customize-control-primary_header_logo_title_styling_title , #customize-control-primary_header_sitetitle , #customize-control-primary_header_layout_space_six , #customize-control-primary_header_logo_title_text_color , #customize-control-primary_header_logo_title_fonts , #customize-control-primary_header_logo_title_font_size , #customize-control-primary_header_logo_title_font_weight , #customize-control-primary_header_logo_title_font_transformation , #customize-control-primary_header_logo_tagline_styling_title , #customize-control-primary_header_tagline , #customize-control-primary_header_layout_space_seven , #customize-control-primary_header_logo_tagline_text_color , #customize-control-primary_header_logo_tagline_fonts , #customize-control-primary_header_logo_tagline_font_size , #customize-control-primary_header_logo_tagline_font_weight , #customize-control-primary_header_logo_tagline_font_transformation , #customize-control-primary_header_logo_tagline_position' ).hide(300);
        } else {
            $( '#customize-control-primary_header_logo_title_styling_title , #customize-control-primary_header_sitetitle , #customize-control-primary_header_layout_space_six , #customize-control-primary_header_logo_title_text_color , #customize-control-primary_header_logo_title_fonts , #customize-control-primary_header_logo_title_font_size , #customize-control-primary_header_logo_title_font_weight , #customize-control-primary_header_logo_title_font_transformation , #customize-control-primary_header_logo_tagline_styling_title , #customize-control-primary_header_tagline , #customize-control-primary_header_layout_space_seven , #customize-control-primary_header_logo_tagline_text_color , #customize-control-primary_header_logo_tagline_fonts , #customize-control-primary_header_logo_tagline_font_size , #customize-control-primary_header_logo_tagline_font_weight , #customize-control-primary_header_logo_tagline_font_transformation , #customize-control-primary_header_logo_tagline_position' ).show(300);
        }
      } );
  } );

  //Primary Header Menu Background
  wp.customize( 'primary_header_menu_background_visible', function( value ) {
      if($('[data-customize-setting-link="primary_header_menu_background_visible"]').is(':checked')) {
          $( '#customize-control-primary_header_layout_space_nine, #customize-control-primary_header_menu_background_color, #customize-control-primary_header_menu_background_image, #customize-control-primary_header_menu_hover_background_color, #customize-control-primary_header_menu_hover_background_image, #customize-control-primary_header_menu_background_image_position , #customize-control-primary_header_menu_background_image_repeat' ).hide();
      }
      value.bind( function( to ) {
          if($('[data-customize-setting-link="primary_header_menu_background_visible"]').is(':checked')) {
              $( '#customize-control-primary_header_layout_space_nine, #customize-control-primary_header_menu_background_color, #customize-control-primary_header_menu_background_image, #customize-control-primary_header_menu_hover_background_color, #customize-control-primary_header_menu_hover_background_image, #customize-control-primary_header_menu_background_image_position , #customize-control-primary_header_menu_background_image_repeat' ).hide(300);
          } else {
            $( '#customize-control-primary_header_layout_space_nine, #customize-control-primary_header_menu_background_color, #customize-control-primary_header_menu_background_image, #customize-control-primary_header_menu_hover_background_color, #customize-control-primary_header_menu_hover_background_image' ).show(300);
            if(wp.customize.value('primary_header_menu_background_image')() || wp.customize.value('primary_header_menu_hover_background_image')()) {
              $( '#customize-control-primary_header_menu_background_image_position , #customize-control-primary_header_menu_background_image_repeat' ).show(300);
            } else {
              $( '#customize-control-primary_header_menu_background_image_position , #customize-control-primary_header_menu_background_image_repeat' ).hide(300);
            }
          }
      } );
  } );

  //Primary Header Menu Background Position & Repetition Buttons
  wp.customize( 'primary_header_menu_background_image', function( value ) {
      if(!wp.customize.value('primary_header_menu_background_image')() && !wp.customize.value('primary_header_menu_hover_background_image')()) {
        $( '#customize-control-primary_header_menu_background_image_position , #customize-control-primary_header_menu_background_image_repeat' ).hide();
      }
      value.bind( function( to ) {
        if(wp.customize.value('primary_header_menu_background_image')() || wp.customize.value('primary_header_menu_hover_background_image')()) {
          $( '#customize-control-primary_header_menu_background_image_position , #customize-control-primary_header_menu_background_image_repeat' ).show(300);
        } else {
          $( '#customize-control-primary_header_menu_background_image_position , #customize-control-primary_header_menu_background_image_repeat' ).hide(300);
        }
      } );
  } );
  wp.customize( 'primary_header_menu_hover_background_image', function( value ) {
      value.bind( function( to ) {
        if(wp.customize.value('primary_header_menu_background_image')() || wp.customize.value('primary_header_menu_hover_background_image')()) {
          $( '#customize-control-primary_header_menu_background_image_position , #customize-control-primary_header_menu_background_image_repeat' ).show(300);
        } else {
          $( '#customize-control-primary_header_menu_background_image_position , #customize-control-primary_header_menu_background_image_repeat' ).hide(300);
        }
      } );
  } );

  //Primary Header Menu Borders
  wp.customize( 'primary_header_menu_border_style', function( value ) {
    if(wp.customize.value('primary_header_menu_border_style')() == 'none') {
      $( '#customize-control-primary_header_menu_border_color, #customize-control-primary_header_menu_border_top, #customize-control-primary_header_menu_border_bottom, #customize-control-primary_header_menu_border_left, #customize-control-primary_header_menu_border_right, #customize-control-primary_header_menu_border_radius' ).hide();
    }
    value.bind( function( to ) {
      if(wp.customize.value('primary_header_menu_border_style')() == 'none') {
        $( '#customize-control-primary_header_menu_border_color, #customize-control-primary_header_menu_border_top, #customize-control-primary_header_menu_border_bottom, #customize-control-primary_header_menu_border_left, #customize-control-primary_header_menu_border_right, #customize-control-primary_header_menu_border_radius' ).hide(300);
      } else {
        $( '#customize-control-primary_header_menu_border_color, #customize-control-primary_header_menu_border_top, #customize-control-primary_header_menu_border_bottom, #customize-control-primary_header_menu_border_left, #customize-control-primary_header_menu_border_right, #customize-control-primary_header_menu_border_radius' ).show(300);
      }
    } );
  } );

  /****************************************/
  /*                                      */
  /*            SECONDARY HEADER          */
  /*                                      */
  /****************************************/

  //Secondary Header Type Option
  wp.customize( 'secondary_header_type_select', function( value ) {
    if(wp.customize.value('secondary_header_type_select')() != 'Logo Only') {
    $( '#customize-control-secondary_header_logo_layout_title , #customize-control-secondary_header_logo_alignment' ).hide();
    }
    value.bind( function( to ) {
    if(wp.customize.value('secondary_header_type_select')() == 'Logo Only') {
      $( '#customize-control-secondary_header_logo_layout_title , #customize-control-secondary_header_logo_alignment' ).hide(300);
    } else {
      $( '#customize-control-secondary_header_logo_layout_title , #customize-control-secondary_header_logo_alignment' ).show(300);
    }
    } );
  } );

  //Secondary Header Width Option
  wp.customize( 'secondary_header_width_option', function( value ) {
  if(wp.customize.value('secondary_header_width_option')() == 'fixed') {
    $( '#customize-control-secondary_header_width_fluid' ).hide();
  } else {
    $( '#customize-control-secondary_header_width_fixed').hide();
  }
  value.bind( function( to ) {
    if(wp.customize.value('secondary_header_width_option')() == 'fixed') {
    $( '#customize-control-secondary_header_width_fixed').show(); $( '#customize-control-secondary_header_width_fluid' ).hide();
    } else {
    $( '#customize-control-secondary_header_width_fluid' ).show(); $( '#customize-control-secondary_header_width_fixed').hide();
    }
  } );
  } );

  //Secondary Header Content Width Option
  wp.customize( 'secondary_header_content_width_option', function( value ) {
  if(wp.customize.value('secondary_header_content_width_option')() == 'fixed') {
    $( '#customize-control-secondary_header_content_width_fluid' ).hide();
  } else {
    $( '#customize-control-secondary_header_content_width_fixed').hide();
  }
  value.bind( function( to ) {
    if(wp.customize.value('secondary_header_content_width_option')() == 'fixed') {
    $( '#customize-control-secondary_header_content_width_fixed').show(); $( '#customize-control-secondary_header_content_width_fluid' ).hide();
    } else {
    $( '#customize-control-secondary_header_content_width_fluid' ).show(); $( '#customize-control-secondary_header_content_width_fixed').hide();
    }
  } );
  } );

  //Secondary Header Background
  wp.customize( 'secondary_header_background_visible', function( value ) {
    if($('[data-customize-setting-link="secondary_header_background_visible"]').is(':checked')) {
      $( '#customize-control-secondary_header_background_color, #customize-control-secondary_header_background_image, #customize-control-secondary_header_background_image_position , #customize-control-secondary_header_background_image_repeat' ).hide();
    }
    value.bind( function( to ) {
      if($('[data-customize-setting-link="secondary_header_background_visible"]').is(':checked')) {
        $( '#customize-control-secondary_header_background_color, #customize-control-secondary_header_background_image, #customize-control-secondary_header_background_image_position , #customize-control-secondary_header_background_image_repeat' ).hide(300);
      } else {
      $( '#customize-control-secondary_header_background_color, #customize-control-secondary_header_background_image' ).show(300);
      if(wp.customize.value('secondary_header_background_image')()) {
        $( '#customize-control-secondary_header_background_image_position , #customize-control-secondary_header_background_image_repeat' ).show(300);
      } else {
        $( '#customize-control-secondary_header_background_image_position , #customize-control-secondary_header_background_image_repeat' ).hide(300);
      }
      }
    } );
  } );

  //Secondary Header Background Position & Repetition Buttons
  wp.customize( 'secondary_header_background_image', function( value ) {
    if(!wp.customize.value('secondary_header_background_image')()) {
    $( '#customize-control-secondary_header_background_image_position , #customize-control-secondary_header_background_image_repeat' ).hide();
    }
    value.bind( function( to ) {
    if(wp.customize.value('secondary_header_background_image')()) {
      $( '#customize-control-secondary_header_background_image_position , #customize-control-secondary_header_background_image_repeat' ).show(300);
    } else {
      $( '#customize-control-secondary_header_background_image_position , #customize-control-secondary_header_background_image_repeat' ).hide(300);
    }
    } );
  } );

  //Secondary Header Borders
  wp.customize( 'secondary_header_border_style', function( value ) {
  if(wp.customize.value('secondary_header_border_style')() == 'none') {
    $( '#customize-control-secondary_header_border_color, #customize-control-secondary_header_border_top, #customize-control-secondary_header_border_bottom, #customize-control-secondary_header_border_left, #customize-control-secondary_header_border_right, #customize-control-secondary_header_border_radius' ).hide();
  }
  value.bind( function( to ) {
    if(wp.customize.value('secondary_header_border_style')() == 'none') {
    $( '#customize-control-secondary_header_border_color, #customize-control-secondary_header_border_top, #customize-control-secondary_header_border_bottom, #customize-control-secondary_header_border_left, #customize-control-secondary_header_border_right, #customize-control-secondary_header_border_radius' ).hide(300);
    } else {
    $( '#customize-control-secondary_header_border_color, #customize-control-secondary_header_border_top, #customize-control-secondary_header_border_bottom, #customize-control-secondary_header_border_left, #customize-control-secondary_header_border_right, #customize-control-secondary_header_border_radius' ).show(300);
    }
  } );
  } );

  //Secondary Header Logo Image
  wp.customize( 'secondary_header_logo_image', function( value ) {
    if(wp.customize.value('secondary_header_logo_image')()) {
    $( '#customize-control-secondary_header_logo_title_styling_title , #customize-control-secondary_header_sitetitle , #customize-control-secondary_header_layout_space_six , #customize-control-secondary_header_logo_title_text_color , #customize-control-secondary_header_logo_title_fonts , #customize-control-secondary_header_logo_title_font_size , #customize-control-secondary_header_logo_title_font_weight , #customize-control-secondary_header_logo_title_font_transformation , #customize-control-secondary_header_logo_tagline_styling_title , #customize-control-secondary_header_tagline , #customize-control-secondary_header_layout_space_seven , #customize-control-secondary_header_logo_tagline_text_color , #customize-control-secondary_header_logo_tagline_fonts , #customize-control-secondary_header_logo_tagline_font_size , #customize-control-secondary_header_logo_tagline_font_weight , #customize-control-secondary_header_logo_tagline_font_transformation , #customize-control-secondary_header_logo_tagline_position' ).hide();
    }
    value.bind( function( to ) {
    if(wp.customize.value('secondary_header_logo_image')()) {
      $( '#customize-control-secondary_header_logo_title_styling_title , #customize-control-secondary_header_sitetitle , #customize-control-secondary_header_layout_space_six , #customize-control-secondary_header_logo_title_text_color , #customize-control-secondary_header_logo_title_fonts , #customize-control-secondary_header_logo_title_font_size , #customize-control-secondary_header_logo_title_font_weight , #customize-control-secondary_header_logo_title_font_transformation , #customize-control-secondary_header_logo_tagline_styling_title , #customize-control-secondary_header_tagline , #customize-control-secondary_header_layout_space_seven , #customize-control-secondary_header_logo_tagline_text_color , #customize-control-secondary_header_logo_tagline_fonts , #customize-control-secondary_header_logo_tagline_font_size , #customize-control-secondary_header_logo_tagline_font_weight , #customize-control-secondary_header_logo_tagline_font_transformation , #customize-control-secondary_header_logo_tagline_position' ).hide(300);
    } else {
      $( '#customize-control-secondary_header_logo_title_styling_title , #customize-control-secondary_header_sitetitle , #customize-control-secondary_header_layout_space_six , #customize-control-secondary_header_logo_title_text_color , #customize-control-secondary_header_logo_title_fonts , #customize-control-secondary_header_logo_title_font_size , #customize-control-secondary_header_logo_title_font_weight , #customize-control-secondary_header_logo_title_font_transformation , #customize-control-secondary_header_logo_tagline_styling_title , #customize-control-secondary_header_tagline , #customize-control-secondary_header_layout_space_seven , #customize-control-secondary_header_logo_tagline_text_color , #customize-control-secondary_header_logo_tagline_fonts , #customize-control-secondary_header_logo_tagline_font_size , #customize-control-secondary_header_logo_tagline_font_weight , #customize-control-secondary_header_logo_tagline_font_transformation , #customize-control-secondary_header_logo_tagline_position' ).show(300);
    }
    } );
  } );

  //Secondary Header Menu Background
  wp.customize( 'secondary_header_menu_background_visible', function( value ) {
    if($('[data-customize-setting-link="secondary_header_menu_background_visible"]').is(':checked')) {
      $( '#customize-control-secondary_header_layout_space_nine, #customize-control-secondary_header_menu_background_color, #customize-control-secondary_header_menu_background_image, #customize-control-secondary_header_menu_hover_background_color, #customize-control-secondary_header_menu_hover_background_image, #customize-control-secondary_header_menu_background_image_position , #customize-control-secondary_header_menu_background_image_repeat' ).hide();
    }
    value.bind( function( to ) {
      if($('[data-customize-setting-link="secondary_header_menu_background_visible"]').is(':checked')) {
        $( '#customize-control-secondary_header_layout_space_nine, #customize-control-secondary_header_menu_background_color, #customize-control-secondary_header_menu_background_image, #customize-control-secondary_header_menu_hover_background_color, #customize-control-secondary_header_menu_hover_background_image, #customize-control-secondary_header_menu_background_image_position , #customize-control-secondary_header_menu_background_image_repeat' ).hide(300);
      } else {
      $( '#customize-control-secondary_header_layout_space_nine, #customize-control-secondary_header_menu_background_color, #customize-control-secondary_header_menu_background_image, #customize-control-secondary_header_menu_hover_background_color, #customize-control-secondary_header_menu_hover_background_image' ).show(300);
      if(wp.customize.value('secondary_header_menu_background_image')() || wp.customize.value('secondary_header_menu_hover_background_image')()) {
        $( '#customize-control-secondary_header_menu_background_image_position , #customize-control-secondary_header_menu_background_image_repeat' ).show(300);
      } else {
        $( '#customize-control-secondary_header_menu_background_image_position , #customize-control-secondary_header_menu_background_image_repeat' ).hide(300);
      }
      }
    } );
  } );

  //Secondary Header Menu Background Position & Repetition Buttons
  wp.customize( 'secondary_header_menu_background_image', function( value ) {
    if(!wp.customize.value('secondary_header_menu_background_image')() && !wp.customize.value('secondary_header_menu_hover_background_image')()) {
    $( '#customize-control-secondary_header_menu_background_image_position , #customize-control-secondary_header_menu_background_image_repeat' ).hide();
    }
    value.bind( function( to ) {
    if(wp.customize.value('secondary_header_menu_background_image')() || wp.customize.value('secondary_header_menu_hover_background_image')()) {
      $( '#customize-control-secondary_header_menu_background_image_position , #customize-control-secondary_header_menu_background_image_repeat' ).show(300);
    } else {
      $( '#customize-control-secondary_header_menu_background_image_position , #customize-control-secondary_header_menu_background_image_repeat' ).hide(300);
    }
    } );
  } );
  wp.customize( 'secondary_header_menu_hover_background_image', function( value ) {
    value.bind( function( to ) {
    if(wp.customize.value('secondary_header_menu_background_image')() || wp.customize.value('secondary_header_menu_hover_background_image')()) {
      $( '#customize-control-secondary_header_menu_background_image_position , #customize-control-secondary_header_menu_background_image_repeat' ).show(300);
    } else {
      $( '#customize-control-secondary_header_menu_background_image_position , #customize-control-secondary_header_menu_background_image_repeat' ).hide(300);
    }
    } );
  } );

  //Secondary Header Menu Borders
  wp.customize( 'secondary_header_menu_border_style', function( value ) {
  if(wp.customize.value('secondary_header_menu_border_style')() == 'none') {
    $( '#customize-control-secondary_header_menu_border_color, #customize-control-secondary_header_menu_border_top, #customize-control-secondary_header_menu_border_bottom, #customize-control-secondary_header_menu_border_left, #customize-control-secondary_header_menu_border_right, #customize-control-secondary_header_menu_border_radius' ).hide();
  }
  value.bind( function( to ) {
    if(wp.customize.value('secondary_header_menu_border_style')() == 'none') {
    $( '#customize-control-secondary_header_menu_border_color, #customize-control-secondary_header_menu_border_top, #customize-control-secondary_header_menu_border_bottom, #customize-control-secondary_header_menu_border_left, #customize-control-secondary_header_menu_border_right, #customize-control-secondary_header_menu_border_radius' ).hide(300);
    } else {
    $( '#customize-control-secondary_header_menu_border_color, #customize-control-secondary_header_menu_border_top, #customize-control-secondary_header_menu_border_bottom, #customize-control-secondary_header_menu_border_left, #customize-control-secondary_header_menu_border_right, #customize-control-secondary_header_menu_border_radius' ).show(300);
    }
  } );
  } );

  /****************************************/
  /*                                      */
  /*            TERTIARY HEADER           */
  /*                                      */
  /****************************************/

  //Tertiary Header Type Option
  wp.customize( 'tertiary_header_type_select', function( value ) {
    if(wp.customize.value('tertiary_header_type_select')() != 'Logo Only') {
    $( '#customize-control-tertiary_header_logo_layout_title , #customize-control-tertiary_header_logo_alignment' ).hide();
    }
    value.bind( function( to ) {
    if(wp.customize.value('tertiary_header_type_select')() == 'Logo Only') {
      $( '#customize-control-tertiary_header_logo_layout_title , #customize-control-tertiary_header_logo_alignment' ).hide(300);
    } else {
      $( '#customize-control-tertiary_header_logo_layout_title , #customize-control-tertiary_header_logo_alignment' ).show(300);
    }
    } );
  } );

  //Tertiary Header Width Option
  wp.customize( 'tertiary_header_width_option', function( value ) {
  if(wp.customize.value('tertiary_header_width_option')() == 'fixed') {
    $( '#customize-control-tertiary_header_width_fluid' ).hide();
  } else {
    $( '#customize-control-tertiary_header_width_fixed').hide();
  }
  value.bind( function( to ) {
    if(wp.customize.value('tertiary_header_width_option')() == 'fixed') {
    $( '#customize-control-tertiary_header_width_fixed').show(); $( '#customize-control-tertiary_header_width_fluid' ).hide();
    } else {
    $( '#customize-control-tertiary_header_width_fluid' ).show(); $( '#customize-control-tertiary_header_width_fixed').hide();
    }
  } );
  } );

  //Tertiary Header Content Width Option
  wp.customize( 'tertiary_header_content_width_option', function( value ) {
  if(wp.customize.value('tertiary_header_content_width_option')() == 'fixed') {
    $( '#customize-control-tertiary_header_content_width_fluid' ).hide();
  } else {
    $( '#customize-control-tertiary_header_content_width_fixed').hide();
  }
  value.bind( function( to ) {
    if(wp.customize.value('tertiary_header_content_width_option')() == 'fixed') {
    $( '#customize-control-tertiary_header_content_width_fixed').show(); $( '#customize-control-tertiary_header_content_width_fluid' ).hide();
    } else {
    $( '#customize-control-tertiary_header_content_width_fluid' ).show(); $( '#customize-control-tertiary_header_content_width_fixed').hide();
    }
  } );
  } );

  //Tertiary Header Background
  wp.customize( 'tertiary_header_background_visible', function( value ) {
    if($('[data-customize-setting-link="tertiary_header_background_visible"]').is(':checked')) {
      $( '#customize-control-tertiary_header_background_color, #customize-control-tertiary_header_background_image, #customize-control-tertiary_header_background_image_position , #customize-control-tertiary_header_background_image_repeat' ).hide();
    }
    value.bind( function( to ) {
      if($('[data-customize-setting-link="tertiary_header_background_visible"]').is(':checked')) {
        $( '#customize-control-tertiary_header_background_color, #customize-control-tertiary_header_background_image, #customize-control-tertiary_header_background_image_position , #customize-control-tertiary_header_background_image_repeat' ).hide(300);
      } else {
      $( '#customize-control-tertiary_header_background_color, #customize-control-tertiary_header_background_image' ).show(300);
      if(wp.customize.value('tertiary_header_background_image')()) {
        $( '#customize-control-tertiary_header_background_image_position , #customize-control-tertiary_header_background_image_repeat' ).show(300);
      } else {
        $( '#customize-control-tertiary_header_background_image_position , #customize-control-tertiary_header_background_image_repeat' ).hide(300);
      }
      }
    } );
  } );

  //Tertiary Header Background Position & Repetition Buttons
  wp.customize( 'tertiary_header_background_image', function( value ) {
    if(!wp.customize.value('tertiary_header_background_image')()) {
    $( '#customize-control-tertiary_header_background_image_position , #customize-control-tertiary_header_background_image_repeat' ).hide();
    }
    value.bind( function( to ) {
    if(wp.customize.value('tertiary_header_background_image')()) {
      $( '#customize-control-tertiary_header_background_image_position , #customize-control-tertiary_header_background_image_repeat' ).show(300);
    } else {
      $( '#customize-control-tertiary_header_background_image_position , #customize-control-tertiary_header_background_image_repeat' ).hide(300);
    }
    } );
  } );

  //Tertiary Header Borders
  wp.customize( 'tertiary_header_border_style', function( value ) {
  if(wp.customize.value('tertiary_header_border_style')() == 'none') {
    $( '#customize-control-tertiary_header_border_color, #customize-control-tertiary_header_border_top, #customize-control-tertiary_header_border_bottom, #customize-control-tertiary_header_border_left, #customize-control-tertiary_header_border_right, #customize-control-tertiary_header_border_radius' ).hide();
  }
  value.bind( function( to ) {
    if(wp.customize.value('tertiary_header_border_style')() == 'none') {
    $( '#customize-control-tertiary_header_border_color, #customize-control-tertiary_header_border_top, #customize-control-tertiary_header_border_bottom, #customize-control-tertiary_header_border_left, #customize-control-tertiary_header_border_right, #customize-control-tertiary_header_border_radius' ).hide(300);
    } else {
    $( '#customize-control-tertiary_header_border_color, #customize-control-tertiary_header_border_top, #customize-control-tertiary_header_border_bottom, #customize-control-tertiary_header_border_left, #customize-control-tertiary_header_border_right, #customize-control-tertiary_header_border_radius' ).show(300);
    }
  } );
  } );

  //Tertiary Header Logo Image
  wp.customize( 'tertiary_header_logo_image', function( value ) {
    if(wp.customize.value('tertiary_header_logo_image')()) {
    $( '#customize-control-tertiary_header_logo_title_styling_title , #customize-control-tertiary_header_sitetitle , #customize-control-tertiary_header_layout_space_six , #customize-control-tertiary_header_logo_title_text_color , #customize-control-tertiary_header_logo_title_fonts , #customize-control-tertiary_header_logo_title_font_size , #customize-control-tertiary_header_logo_title_font_weight , #customize-control-tertiary_header_logo_title_font_transformation , #customize-control-tertiary_header_logo_tagline_styling_title , #customize-control-tertiary_header_tagline , #customize-control-tertiary_header_layout_space_seven , #customize-control-tertiary_header_logo_tagline_text_color , #customize-control-tertiary_header_logo_tagline_fonts , #customize-control-tertiary_header_logo_tagline_font_size , #customize-control-tertiary_header_logo_tagline_font_weight , #customize-control-tertiary_header_logo_tagline_font_transformation , #customize-control-tertiary_header_logo_tagline_position' ).hide();
    }
    value.bind( function( to ) {
    if(wp.customize.value('tertiary_header_logo_image')()) {
      $( '#customize-control-tertiary_header_logo_title_styling_title , #customize-control-tertiary_header_sitetitle , #customize-control-tertiary_header_layout_space_six , #customize-control-tertiary_header_logo_title_text_color , #customize-control-tertiary_header_logo_title_fonts , #customize-control-tertiary_header_logo_title_font_size , #customize-control-tertiary_header_logo_title_font_weight , #customize-control-tertiary_header_logo_title_font_transformation , #customize-control-tertiary_header_logo_tagline_styling_title , #customize-control-tertiary_header_tagline , #customize-control-tertiary_header_layout_space_seven , #customize-control-tertiary_header_logo_tagline_text_color , #customize-control-tertiary_header_logo_tagline_fonts , #customize-control-tertiary_header_logo_tagline_font_size , #customize-control-tertiary_header_logo_tagline_font_weight , #customize-control-tertiary_header_logo_tagline_font_transformation , #customize-control-tertiary_header_logo_tagline_position' ).hide(300);
    } else {
      $( '#customize-control-tertiary_header_logo_title_styling_title , #customize-control-tertiary_header_sitetitle , #customize-control-tertiary_header_layout_space_six , #customize-control-tertiary_header_logo_title_text_color , #customize-control-tertiary_header_logo_title_fonts , #customize-control-tertiary_header_logo_title_font_size , #customize-control-tertiary_header_logo_title_font_weight , #customize-control-tertiary_header_logo_title_font_transformation , #customize-control-tertiary_header_logo_tagline_styling_title , #customize-control-tertiary_header_tagline , #customize-control-tertiary_header_layout_space_seven , #customize-control-tertiary_header_logo_tagline_text_color , #customize-control-tertiary_header_logo_tagline_fonts , #customize-control-tertiary_header_logo_tagline_font_size , #customize-control-tertiary_header_logo_tagline_font_weight , #customize-control-tertiary_header_logo_tagline_font_transformation , #customize-control-tertiary_header_logo_tagline_position' ).show(300);
    }
    } );
  } );

  //Tertiary Header Menu Background
  wp.customize( 'tertiary_header_menu_background_visible', function( value ) {
    if($('[data-customize-setting-link="tertiary_header_menu_background_visible"]').is(':checked')) {
      $( '#customize-control-tertiary_header_layout_space_nine, #customize-control-tertiary_header_menu_background_color, #customize-control-tertiary_header_menu_background_image, #customize-control-tertiary_header_menu_hover_background_color, #customize-control-tertiary_header_menu_hover_background_image, #customize-control-tertiary_header_menu_background_image_position , #customize-control-tertiary_header_menu_background_image_repeat' ).hide();
    }
    value.bind( function( to ) {
      if($('[data-customize-setting-link="tertiary_header_menu_background_visible"]').is(':checked')) {
        $( '#customize-control-tertiary_header_layout_space_nine, #customize-control-tertiary_header_menu_background_color, #customize-control-tertiary_header_menu_background_image, #customize-control-tertiary_header_menu_hover_background_color, #customize-control-tertiary_header_menu_hover_background_image, #customize-control-tertiary_header_menu_background_image_position , #customize-control-tertiary_header_menu_background_image_repeat' ).hide(300);
      } else {
      $( '#customize-control-tertiary_header_layout_space_nine, #customize-control-tertiary_header_menu_background_color, #customize-control-tertiary_header_menu_background_image, #customize-control-tertiary_header_menu_hover_background_color, #customize-control-tertiary_header_menu_hover_background_image' ).show(300);
      if(wp.customize.value('tertiary_header_menu_background_image')() || wp.customize.value('tertiary_header_menu_hover_background_image')()) {
        $( '#customize-control-tertiary_header_menu_background_image_position , #customize-control-tertiary_header_menu_background_image_repeat' ).show(300);
      } else {
        $( '#customize-control-tertiary_header_menu_background_image_position , #customize-control-tertiary_header_menu_background_image_repeat' ).hide(300);
      }
      }
    } );
  } );

  //Tertiary Header Menu Background Position & Repetition Buttons
  wp.customize( 'tertiary_header_menu_background_image', function( value ) {
    if(!wp.customize.value('tertiary_header_menu_background_image')() && !wp.customize.value('tertiary_header_menu_hover_background_image')()) {
    $( '#customize-control-tertiary_header_menu_background_image_position , #customize-control-tertiary_header_menu_background_image_repeat' ).hide();
    }
    value.bind( function( to ) {
    if(wp.customize.value('tertiary_header_menu_background_image')() || wp.customize.value('tertiary_header_menu_hover_background_image')()) {
      $( '#customize-control-tertiary_header_menu_background_image_position , #customize-control-tertiary_header_menu_background_image_repeat' ).show(300);
    } else {
      $( '#customize-control-tertiary_header_menu_background_image_position , #customize-control-tertiary_header_menu_background_image_repeat' ).hide(300);
    }
    } );
  } );
  wp.customize( 'tertiary_header_menu_hover_background_image', function( value ) {
    value.bind( function( to ) {
    if(wp.customize.value('tertiary_header_menu_background_image')() || wp.customize.value('tertiary_header_menu_hover_background_image')()) {
      $( '#customize-control-tertiary_header_menu_background_image_position , #customize-control-tertiary_header_menu_background_image_repeat' ).show(300);
    } else {
      $( '#customize-control-tertiary_header_menu_background_image_position , #customize-control-tertiary_header_menu_background_image_repeat' ).hide(300);
    }
    } );
  } );

  //Tertiary Header Menu Borders
  wp.customize( 'tertiary_header_menu_border_style', function( value ) {
  if(wp.customize.value('tertiary_header_menu_border_style')() == 'none') {
    $( '#customize-control-tertiary_header_menu_border_color, #customize-control-tertiary_header_menu_border_top, #customize-control-tertiary_header_menu_border_bottom, #customize-control-tertiary_header_menu_border_left, #customize-control-tertiary_header_menu_border_right, #customize-control-tertiary_header_menu_border_radius' ).hide();
  }
  value.bind( function( to ) {
    if(wp.customize.value('tertiary_header_menu_border_style')() == 'none') {
    $( '#customize-control-tertiary_header_menu_border_color, #customize-control-tertiary_header_menu_border_top, #customize-control-tertiary_header_menu_border_bottom, #customize-control-tertiary_header_menu_border_left, #customize-control-tertiary_header_menu_border_right, #customize-control-tertiary_header_menu_border_radius' ).hide(300);
    } else {
    $( '#customize-control-tertiary_header_menu_border_color, #customize-control-tertiary_header_menu_border_top, #customize-control-tertiary_header_menu_border_bottom, #customize-control-tertiary_header_menu_border_left, #customize-control-tertiary_header_menu_border_right, #customize-control-tertiary_header_menu_border_radius' ).show(300);
    }
  } );
  } );

  /****************************************/
  /*                                      */
  /*           PAGE BACKGROUND            */
  /*                                      */
  /****************************************/

  //Page Background Position & Repetition Buttons
  wp.customize( 'global_background_image', function( value ) {
      if(!wp.customize.value('global_background_image')()) {
        $( '#customize-control-global_background_image_position , #customize-control-global_background_image_repeat , #customize-control-global_background_image_type , #customize-control-global_background_image_scroll' ).hide();
      }
      value.bind( function( to ) {
        if(wp.customize.value('global_background_image')()) {
          $( '#customize-control-global_background_image_position , #customize-control-global_background_image_repeat , #customize-control-global_background_image_type , #customize-control-global_background_image_scroll' ).show(300);
        } else {
          $( '#customize-control-global_background_image_position , #customize-control-global_background_image_repeat , #customize-control-global_background_image_type , #customize-control-global_background_image_scroll' ).hide(300);
        }
      } );
  } );

});
