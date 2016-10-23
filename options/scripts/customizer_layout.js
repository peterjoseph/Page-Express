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

});
