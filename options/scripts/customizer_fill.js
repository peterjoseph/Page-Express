jQuery(function($){

  /****************************************/
  /*                                      */
  /*            PRIMARY HEADER            */
  /*                                      */
  /****************************************/

  //Primary Header Width Option
  wp.customize( 'primary_header_width_option', function( value ) {
    value.bind( function( to ) {
      if(to == 'fluid') {
        $('#primary_header').css('width', wp.customize.value('primary_header_width_fluid')() + "%" );
      } else {
        $('#primary_header').css('width', wp.customize.value('primary_header_width_fixed')() + "px" );
      }
    } );
  });

  //Primary Header Width Fixed
  wp.customize( 'primary_header_width_fixed', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('width', to + "px" );
      } );
  });

  //Primary Header Width Fluid
  wp.customize( 'primary_header_width_fluid', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('width', to + "%" );
      } );
  });

  //Primary Header Alignment
  wp.customize( 'primary_header_alignment', function( value ) {
        value.bind( function( to ) {
          if(to == 'center') {
            $('#primary_header').css('margin-left', 'auto' );
            $('#primary_header').css('margin-right', 'auto' );
          } else if(to == 'left') {
            $('#primary_header').css('margin-left', 'initial' );
            $('#primary_header').css('margin-right', 'auto' );
          } else {
            $('#primary_header').css('margin-left', 'auto' );
            $('#primary_header').css('margin-right', 'initial' );
          }
        } );
  });

  //Primary Header Content Width Option
  wp.customize( 'primary_header_content_width_option', function( value ) {
    value.bind( function( to ) {
      if(to == 'fluid') {
        $('#primary_header_content').css('max-width', wp.customize.value('primary_header_content_width_fluid')() + "%" );
      } else {
        $('#primary_header_content').css('max-width', wp.customize.value('primary_header_content_width_fixed')() + "px" );
      }
    } );
  });

  //Primary Header Content Width Fixed
  wp.customize( 'primary_header_content_width_fixed', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').css('max-width', to + "px" );
      } );
  });

  //Primary Header Content Width Fluid
  wp.customize( 'primary_header_content_width_fluid', function( value ) {
      value.bind( function( to ) {
        $('#primary_header_content').css('max-width', to + "%" );
      } );
  });

  //Primary Header Content Alignment
  wp.customize( 'primary_header_content_alignment', function( value ) {
        value.bind( function( to ) {
          if(to == 'center') {
            $('#primary_header_content').css('margin-left', 'auto' );
            $('#primary_header_content').css('margin-right', 'auto' );
          } else if(to == 'left') {
            $('#primary_header_content').css('margin-left', 'initial' );
            $('#primary_header_content').css('margin-right', 'auto' );
          } else {
            $('#primary_header_content').css('margin-left', 'auto' );
            $('#primary_header_content').css('margin-right', 'initial' );
          }
        } );
  });

  //Primary Header Background Visibility
  wp.customize( 'primary_header_background_visible', function( value ) {
      value.bind( function( to ) {
        if(to == 1) {
          $('#primary_header').css('background-color', 'transparent' );
          $('#primary_header').css('background-image', 'none' );
          if(wp.customize.value('primary_header_menu_background_visible')() == 0) {
            $('#primary_header_content').find('#menu ul .sub-menu li').css('background-color', wp.customize.value('primary_header_background_color')() );
            $('#primary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none' );
            $('#primary_header_content').find('#menu ul .sub-menu li').hover(
              function(){ $(this).css('background-color', wp.customize.value('primary_header_background_color')()) },
              function(){ $(this).css('background-color', wp.customize.value('primary_header_background_color')()) }
            );
            $('#primary_header_content').find('#menu ul .sub-menu li').hover(
              function(){ $(this).css('background-image', 'none') },
              function(){ $(this).css('background-image', 'none') }
            );
          } else {
            $('#primary_header_content').find('#menu ul .sub-menu li').css('background-color', 'rgba(0, 0, 0, 0.4)' );
            $('#primary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none');
            $('#primary_header_content').find('#menu ul .sub-menu li').hover(
              function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') },
              function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') }
            );
            $('#primary_header_content').find('#menu ul .sub-menu li').hover(
              function(){ $(this).css('background-image', 'none') },
              function(){ $(this).css('background-image', 'none') }
            );
          }
        } else {
          $('#primary_header').css('background-color', wp.customize.value('primary_header_background_color')() );
          $('#primary_header').css('background-image', 'url(' + wp.customize.value('primary_header_background_image')() + ')' );
            $('#primary_header_content').find('#menu ul .sub-menu li').css('background-color', wp.customize.value('primary_header_background_color')() );
            $('#primary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none' );
            $('#primary_header_content').find('#menu ul .sub-menu li').hover(
              function(){ $(this).css('background-color', wp.customize.value('primary_header_background_color')()) },
              function(){ $(this).css('background-color', wp.customize.value('primary_header_background_color')()) }
            );
            $('#primary_header_content').find('#menu ul .sub-menu li').hover(
              function(){ $(this).css('background-image', 'none') },
              function(){ $(this).css('background-image', 'none') }
            );
        }
      } );
  });

  //Primary Header Background Color
  wp.customize( 'primary_header_background_color', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('background-color', to );
      } );
  });

  //Primary Header Background Image
  wp.customize( 'primary_header_background_image', function( value ) {
      value.bind( function( to ) {
          $('#primary_header').css('background-image', 'url(' + to + ')' );
      } );
  });

  //Primary Header Background Position
  wp.customize( 'primary_header_background_image_position', function( value ) {
      value.bind( function( to ) {
          $('#primary_header').css('background-position', to );
      } );
  });

  //Primary Header Background Image Repeat
  wp.customize( 'primary_header_background_image_repeat', function( value ) {
      value.bind( function( to ) {
          $('#primary_header').css('background-repeat', to );
      } );
  });

  //Primary Header Border Style
  wp.customize( 'primary_header_border_style', function( value ) {
      value.bind( function( to ) {
          $('#primary_header').css('border-style', to );
      } );
  });

  //Primary Header Border Color
  wp.customize( 'primary_header_border_color', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('border-color', to );
      } );
  });

  //Primary Header Border Top
  wp.customize( 'primary_header_border_top', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('border-top', to + 'px' + ' ' + wp.customize.value('primary_header_border_style')() + ' ' + wp.customize.value('primary_header_border_color')() );
      } );
  });

  //Primary Header Border Bottom
  wp.customize( 'primary_header_border_bottom', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('border-bottom', to + 'px' + ' ' + wp.customize.value('primary_header_border_style')() + ' ' + wp.customize.value('primary_header_border_color')() );
      } );
  });

  //Primary Header Border Left
  wp.customize( 'primary_header_border_left', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('border-left', to + 'px' + ' ' + wp.customize.value('primary_header_border_style')() + ' ' + wp.customize.value('primary_header_border_color')() );
      } );
  });

  //Primary Header Border Right
  wp.customize( 'primary_header_border_right', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('border-right', to + 'px' + ' ' + wp.customize.value('primary_header_border_style')() + ' ' + wp.customize.value('primary_header_border_color')() );
      } );
  });

  //Primary Header Border Radius
  wp.customize( 'primary_header_border_radius', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('border-radius', to + 'px' );
      } );
  });

  //Primary Header Padding Top
  wp.customize( 'primary_header_padding_top', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('padding-top', to + 'px' );
      } );
  });

  //Primary Header Padding Bottom
  wp.customize( 'primary_header_padding_bottom', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('padding-bottom', to + 'px' );
      } );
  });

  //Primary Header Padding Left
  wp.customize( 'primary_header_padding_left', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('padding-left', to + 'px' );
      } );
  });

  //Primary Header Padding Right
  wp.customize( 'primary_header_padding_right', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('padding-right', to + 'px' );
      } );
  });

  //Primary Header Margin Top
  wp.customize( 'primary_header_margin_top', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('margin-top', to + 'px' );
      } );
  });

  //Primary Header Margin Bottom
  wp.customize( 'primary_header_margin_bottom', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('margin-bottom', to + 'px' );
      } );
  });

  //Primary Header Logo Alignment
  wp.customize( 'primary_header_logo_alignment', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('#logo').css('text-align', to );
      } );
  });

  //Primary Header Site Title
  wp.customize( 'primary_header_sitetitle', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('div.title').html( to );
      } );
  });

  //Primary Header Logo Title Text Color
  wp.customize( 'primary_header_logo_title_text_color', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('div.title').css( 'color' , to );
      } );
  });

  //Primary Header Logo Title Font Family
  wp.customize( 'primary_header_logo_title_fonts', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('div.title').css( 'font-family' , to );
      } );
  });

  //Primary Header Logo Title Font Size
  wp.customize( 'primary_header_logo_title_font_size', function( value ) {
      value.bind( function( to ) {
          let height = parseInt(to) + 10;
          $('#primary_header_content').find('div.title').css( 'font-size' , to + 'px' );
          $('#primary_header_content').find('div.title').css( 'line-height' , height + 'px' );
      } );
  });

  //Primary Header Logo Title Font Weight
  wp.customize( 'primary_header_logo_title_font_weight', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('div.title').css( 'font-weight' , to );
      } );
  });

  //Primary Header Logo Title Font Transformation
  wp.customize( 'primary_header_logo_title_font_transformation', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('div.title').css( 'text-transform' , to );
      } );
  });

  //Primary Header Site Tagline
  wp.customize( 'primary_header_tagline', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('div.tagline').html( to );
      } );
  });

  //Primary Header Logo Tagline Text Color
  wp.customize( 'primary_header_logo_tagline_text_color', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('div.tagline').css( 'color' , to );
      } );
  });

  //Primary Header Logo Tagline Font Family
  wp.customize( 'primary_header_logo_tagline_fonts', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('div.tagline').css( 'font-family' , to );
      } );
  });

  //Primary Header Logo Tagline Font Size
  wp.customize( 'primary_header_logo_tagline_font_size', function( value ) {
      value.bind( function( to ) {
          let height = parseInt(to) + 10;
          $('#primary_header_content').find('div.tagline').css( 'font-size' , to + 'px' );
          $('#primary_header_content').find('div.tagline').css( 'line-height' , height + 'px' );
      } );
  });

  //Primary Header Logo Tagline Font Weight
  wp.customize( 'primary_header_logo_tagline_font_weight', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('div.tagline').css( 'font-weight' , to );
      } );
  });

  //Primary Header Logo Tagline Font Transformation
  wp.customize( 'primary_header_logo_tagline_font_transformation', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('div.tagline').css( 'text-transform' , to );
      } );
  });

  //Primary Header Logo Tagline Position
  wp.customize( 'primary_header_logo_tagline_position', function( value ) {
      value.bind( function( to ) {
        if(to == 1) {
          $('#primary_header_content').find('div.title').css( 'display' , 'inline' );
          $('#primary_header_content').find('div.tagline').css( 'display' , 'inline' );
        } else {
          $('#primary_header_content').find('div.title').css( 'display' , 'block' );
          $('#primary_header_content').find('div.tagline').css( 'display' , 'block' );
        }
      } );
  });

  //Primary Header Menu Height
  wp.customize( 'primary_header_menu_height', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('#menu li a').css('padding-top' , to + 'px' );
          $('#primary_header_content').find('#menu li a').css('padding-bottom' , to + 'px' );
      } );
  });

  //Primary Header Menu Spacing
  wp.customize( 'primary_header_menu_spacing', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('#menu li').css('padding-left' , to + 'px' );
          $('#primary_header_content').find('#menu li').css('padding-right' , to + 'px' );
      } );
  });

  //Primary Header Menu Separation
  wp.customize( 'primary_header_menu_separation', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('#menu li').css('margin-left' , to + 'px' );
          $('#primary_header_content').find('#menu li').css('margin-right' , to + 'px' );
      } );
  });

  //Primary Header Menu Alignment
  wp.customize( 'primary_header_menu_alignment', function( value ) {
    value.bind( function( to ) {
      if(wp.customize.value('primary_header_type_select')() == 'Menu') {
        $('#primary_header_content').find('#menu .wrapper').css('display', 'table' );
        if(to == 'center') {
          $('#primary_header_content').find('#menu .wrapper').css('margin-left', 'auto' );
          $('#primary_header_content').find('#menu .wrapper').css('margin-right', 'auto' );
        } else if(to == 'left') {
          $('#primary_header_content').find('#menu .wrapper').css('margin-left', 'initial' );
          $('#primary_header_content').find('#menu .wrapper').css('margin-right', 'auto' );
        } else {
          $('#primary_header_content').find('#menu .wrapper').css('margin-left', 'auto' );
          $('#primary_header_content').find('#menu .wrapper').css('margin-right', 'initial' );
        }
      } else {
        $('#primary_header_content').find('#menu .wrapper').css({ 'position': 'absolute', 'display': 'table', 'top': '50%' });
        if(to == 'center') {
          $('#primary_header_content').find('#menu .wrapper').css('left', '50%' );
          $('#primary_header_content').find('#menu .wrapper').css('transform', 'translate(-50%,-50%)' );
        } else if(to == 'left') {
          $('#primary_header_content').find('#menu .wrapper').css('left', '0' );
          $('#primary_header_content').find('#menu .wrapper').css('transform', 'translate(0,-50%)' );
        } else {
          $('#primary_header_content').find('#menu .wrapper').css('left', 'initial' );
          $('#primary_header_content').find('#menu .wrapper').css('right', '0' );
          $('#primary_header_content').find('#menu .wrapper').css('transform', 'translate(0,-50%)' );
        }
      }
      if(to == 'right') {
        $('#primary_header_content').find('#menu .sub-menu').css({'right': '0', 'left': 'initial'});
      } else {
        $('#primary_header_content').find('#menu .sub-menu').css({'left': '0', 'right': 'initial'});
      }
    } );
  });

  //Primary Header Menu Text Color
  wp.customize( 'primary_header_menu_link_color', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('#menu li a').css( 'color' , to );
      } );
  });

  //Primary Header Menu Font Family
  wp.customize( 'primary_header_menu_fonts', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('#menu li a').css( 'font-family' , to );
      } );
  });

  //Primary Header Menu Font Size
  wp.customize( 'primary_header_menu_font_size', function( value ) {
      value.bind( function( to ) {
          let height = parseInt(to) + 4;
          $('#primary_header_content').find('#menu li a').css( 'font-size' , to + 'px' );
          $('#primary_header_content').find('#menu li a').css( 'line-height' , height + 'px' );
      } );
  });

  //Primary Header Menu Font Weight
  wp.customize( 'primary_header_menu_font_weight', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('#menu li a').css( 'font-weight' , to );
      } );
  });

  //Primary Header Menu Font Transformation
  wp.customize( 'primary_header_menu_font_transformation', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('#menu li a').css( 'text-transform' , to );
      } );
  });

  //Primary Header Menu Text Decoration
  wp.customize( 'primary_header_menu_link_decoration', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('#menu li a').css( 'text-decoration' , to );
      } );
  });

  //Primary Header Menu Link Hover Color
  wp.customize( 'primary_header_menu_link_hover_color', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('#menu a').hover(
            function(){ $(this).css('color', to) },
            function(){ $(this).css('color', wp.customize.value('primary_header_menu_link_color')() ) }
          );
      } );
  });

  //Primary Header Menu Text Alignment
  wp.customize( 'primary_header_menu_link_alignment', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('#menu li a').css( 'text-align' , to );
          $('#primary_header_content').find('#menu ul ul li').css({ 'float': 'none', 'text-align': to });
      } );
  });

  //Primary Header Menu Drop-down Menu Vertical Spacing
  wp.customize( 'primary_header_menu_sub_vertical_spacing', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content').find('.sub-menu').css('padding-top' , to + 'px' );
      } );
  });

  //Primary Header Menu Background Visibility
  wp.customize( 'primary_header_menu_background_visible', function( value ) {
      value.bind( function( to ) {
        if(to == 1) {
          $('#primary_header_content #menu li').css('background-color', 'transparent' );
          $('#primary_header_content #menu li').css('background-image', 'none' );
          $('#primary_header_content #menu li').hover(
            function(){ $(this).css('background-color', 'transparent') },
            function(){ $(this).css('background-color', 'transparent') }
          );
          $('#primary_header_content #menu li').hover(
            function(){ $(this).css('background-image', 'none') },
            function(){ $(this).css('background-image', 'none') }
          );
          if(wp.customize.value('primary_header_background_visible')() == 0) {
            $('#primary_header_content').find('#menu ul .sub-menu li').css('background-color', wp.customize.value('primary_header_background_color')() );
            $('#primary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none' );
            $('#primary_header_content').find('#menu ul .sub-menu li').hover(
              function(){ $(this).css('background-color', wp.customize.value('primary_header_background_color')()) },
              function(){ $(this).css('background-color', wp.customize.value('primary_header_background_color')()) }
            );
            $('#primary_header_content').find('#menu ul .sub-menu li').hover(
              function(){ $(this).css('background-image', 'none') },
              function(){ $(this).css('background-image', 'none') }
            );
          } else {
            $('#primary_header_content').find('#menu ul .sub-menu li').css('background-color', 'rgba(0, 0, 0, 0.4)' );
            $('#primary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none');
            $('#primary_header_content').find('#menu ul .sub-menu li').hover(
              function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') },
              function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') }
            );
            $('#primary_header_content').find('#menu ul .sub-menu li').hover(
              function(){ $(this).css('background-image', 'none') },
              function(){ $(this).css('background-image', 'none') }
            );
          }
        } else {
          $('#primary_header_content #menu li').css('background-color', wp.customize.value('primary_header_menu_background_color')() );
          $('#primary_header_content #menu li').css('background-image', 'url(' + wp.customize.value('primary_header_menu_background_image')() + ')'  );
          $('#primary_header_content #menu li').hover(
            function(){ $(this).css('background-color', wp.customize.value('primary_header_menu_hover_background_color')()) },
            function(){ $(this).css('background-color', wp.customize.value('primary_header_menu_background_color')() ) }
          );
          $('#primary_header_content #menu li').hover(
            function(){ $(this).css('background-image', 'url(' + wp.customize.value('primary_header_menu_hover_background_image')() + ')'  ) },
            function(){ $(this).css('background-image', 'url(' + wp.customize.value('primary_header_menu_background_image')() + ')'  ) }
          );
        }
      } );
  });

  //Primary Header Menu Background Color
  wp.customize( 'primary_header_menu_background_color', function( value ) {
      value.bind( function( to ) {
        $('#primary_header_content #menu li').css('background-color', to );
        $('#primary_header_content #menu li').css('background-color', to );
      } );
  });

  //Primary Header Menu Background Image
  wp.customize( 'primary_header_menu_background_image', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content #menu li').css('background-image', 'url(' + to + ')' );
          $('#primary_header_content #menu li').css('background-image', 'url(' + to + ')' );
      } );
  });

  //Primary Header Menu Hover Background Color
  wp.customize( 'primary_header_menu_hover_background_color', function( value ) {
      value.bind( function( to ) {
        $('#primary_header_content #menu li').hover(
          function(){ $(this).css('background-color', to ) },
          function(){ $(this).css('background-color', wp.customize.value('primary_header_menu_background_color')() ) }
        );
      } );
  });

  //Primary Header Menu Hover Background Image
  wp.customize( 'primary_header_menu_hover_background_image', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content #menu li').hover(
            function(){ $(this).css('background-image', 'url(' + to + ')' ) },
            function(){ $(this).css('background-image', 'url(' + wp.customize.value('primary_header_menu_background_image')() + ')' ) }
          );
      } );
  });

  //Primary Header Menu Background Position
  wp.customize( 'primary_header_menu_background_image_position', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content #menu li').css('background-position', to );
      } );
  });

  //Primary Header Menu Background Image Repeat
  wp.customize( 'primary_header_menu_background_image_repeat', function( value ) {
      value.bind( function( to ) {
          $('#primary_header_content #menu li').css('background-repeat', to );
      } );
  });

    //Primary Header Menu Border Style
    wp.customize( 'primary_header_menu_border_style', function( value ) {
        value.bind( function( to ) {
            $('#primary_header_content #menu li').css('border-style', to );
            $('#primary_header_content #menu li').css('border-radius', wp.customize.value('primary_header_menu_border_radius')() + 'px' );
            if(to == 'none') {
              $('#primary_header_content #menu li').css('border-radius', '0px' );
            }
        } );
    });

    //Primary Header Menu Border Color
    wp.customize( 'primary_header_menu_border_color', function( value ) {
        value.bind( function( to ) {
          $('#primary_header_content #menu li').css('border-color', to );
        } );
    });

    //Primary Header Menu Border Top
    wp.customize( 'primary_header_menu_border_top', function( value ) {
        value.bind( function( to ) {
          $('#primary_header_content #menu li').css('border-top', to + 'px' + ' ' + wp.customize.value('primary_header_menu_border_style')() + ' ' + wp.customize.value('primary_header_menu_border_color')() );
        } );
    });

    //Primary Header Menu Border Bottom
    wp.customize( 'primary_header_menu_border_bottom', function( value ) {
        value.bind( function( to ) {
          $('#primary_header_content #menu li').css('border-bottom', to + 'px' + ' ' + wp.customize.value('primary_header_menu_border_style')() + ' ' + wp.customize.value('primary_header_menu_border_color')() );
        } );
    });

    //Primary Header Menu Border Left
    wp.customize( 'primary_header_menu_border_left', function( value ) {
        value.bind( function( to ) {
          $('#primary_header_content #menu li').css('border-left', to + 'px' + ' ' + wp.customize.value('primary_header_menu_border_style')() + ' ' + wp.customize.value('primary_header_menu_border_color')() );
        } );
    });

    //Primary Header Menu Border Right
    wp.customize( 'primary_header_menu_border_right', function( value ) {
        value.bind( function( to ) {
          $('#primary_header_content #menu li').css('border-right', to + 'px' + ' ' + wp.customize.value('primary_header_menu_border_style')() + ' ' + wp.customize.value('primary_header_menu_border_color')() );
        } );
    });

    //Primary Header Menu Border Radius
    wp.customize( 'primary_header_menu_border_radius', function( value ) {
        value.bind( function( to ) {
          $('#primary_header_content #menu li').css('border-radius', to + 'px' );
          $('#primary_header_content #menu .sub-menu li').css('border-radius', '0' + 'px' );
        } );
    });

});
