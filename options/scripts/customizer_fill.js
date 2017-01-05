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
          $('#primary_header_content').find('#menu li a').css('padding-left' , to + 'px' );
          $('#primary_header_content').find('#menu li a').css('padding-right' , to + 'px' );
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

    /****************************************/
    /*                                      */
    /*           SECONDARY HEADER           */
    /*                                      */
    /****************************************/

    //Secondary Header Width Option
    wp.customize( 'secondary_header_width_option', function( value ) {
    value.bind( function( to ) {
        if(to == 'fluid') {
        $('#secondary_header').css('width', wp.customize.value('secondary_header_width_fluid')() + "%" );
        } else {
        $('#secondary_header').css('width', wp.customize.value('secondary_header_width_fixed')() + "px" );
        }
    } );
    });

    //Secondary Header Width Fixed
    wp.customize( 'secondary_header_width_fixed', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('width', to + "px" );
        } );
    });

    //Secondary Header Width Fluid
    wp.customize( 'secondary_header_width_fluid', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('width', to + "%" );
        } );
    });

    //Secondary Header Alignment
    wp.customize( 'secondary_header_alignment', function( value ) {
        value.bind( function( to ) {
            if(to == 'center') {
            $('#secondary_header').css('margin-left', 'auto' );
            $('#secondary_header').css('margin-right', 'auto' );
            } else if(to == 'left') {
            $('#secondary_header').css('margin-left', 'initial' );
            $('#secondary_header').css('margin-right', 'auto' );
            } else {
            $('#secondary_header').css('margin-left', 'auto' );
            $('#secondary_header').css('margin-right', 'initial' );
            }
        } );
    });

    //Secondary Header Content Width Option
    wp.customize( 'secondary_header_content_width_option', function( value ) {
    value.bind( function( to ) {
        if(to == 'fluid') {
        $('#secondary_header_content').css('max-width', wp.customize.value('secondary_header_content_width_fluid')() + "%" );
        } else {
        $('#secondary_header_content').css('max-width', wp.customize.value('secondary_header_content_width_fixed')() + "px" );
        }
    } );
    });

    //Secondary Header Content Width Fixed
    wp.customize( 'secondary_header_content_width_fixed', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').css('max-width', to + "px" );
        } );
    });

    //Secondary Header Content Width Fluid
    wp.customize( 'secondary_header_content_width_fluid', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header_content').css('max-width', to + "%" );
        } );
    });

    //Secondary Header Content Alignment
    wp.customize( 'secondary_header_content_alignment', function( value ) {
        value.bind( function( to ) {
            if(to == 'center') {
            $('#secondary_header_content').css('margin-left', 'auto' );
            $('#secondary_header_content').css('margin-right', 'auto' );
            } else if(to == 'left') {
            $('#secondary_header_content').css('margin-left', 'initial' );
            $('#secondary_header_content').css('margin-right', 'auto' );
            } else {
            $('#secondary_header_content').css('margin-left', 'auto' );
            $('#secondary_header_content').css('margin-right', 'initial' );
            }
        } );
    });

    //Secondary Header Background Visibility
    wp.customize( 'secondary_header_background_visible', function( value ) {
        value.bind( function( to ) {
        if(to == 1) {
            $('#secondary_header').css('background-color', 'transparent' );
            $('#secondary_header').css('background-image', 'none' );
            if(wp.customize.value('secondary_header_menu_background_visible')() == 0) {
            $('#secondary_header_content').find('#menu ul .sub-menu li').css('background-color', wp.customize.value('secondary_header_background_color')() );
            $('#secondary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none' );
            $('#secondary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-color', wp.customize.value('secondary_header_background_color')()) },
                function(){ $(this).css('background-color', wp.customize.value('secondary_header_background_color')()) }
            );
            $('#secondary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-image', 'none') },
                function(){ $(this).css('background-image', 'none') }
            );
            } else {
            $('#secondary_header_content').find('#menu ul .sub-menu li').css('background-color', 'rgba(0, 0, 0, 0.4)' );
            $('#secondary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none');
            $('#secondary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') },
                function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') }
            );
            $('#secondary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-image', 'none') },
                function(){ $(this).css('background-image', 'none') }
            );
            }
        } else {
            $('#secondary_header').css('background-color', wp.customize.value('secondary_header_background_color')() );
            $('#secondary_header').css('background-image', 'url(' + wp.customize.value('secondary_header_background_image')() + ')' );
            $('#secondary_header_content').find('#menu ul .sub-menu li').css('background-color', wp.customize.value('secondary_header_background_color')() );
            $('#secondary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none' );
            $('#secondary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-color', wp.customize.value('secondary_header_background_color')()) },
                function(){ $(this).css('background-color', wp.customize.value('secondary_header_background_color')()) }
            );
            $('#secondary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-image', 'none') },
                function(){ $(this).css('background-image', 'none') }
            );
        }
        } );
    });

    //Secondary Header Background Color
    wp.customize( 'secondary_header_background_color', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('background-color', to );
        } );
    });

    //Secondary Header Background Image
    wp.customize( 'secondary_header_background_image', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header').css('background-image', 'url(' + to + ')' );
        } );
    });

    //Secondary Header Background Position
    wp.customize( 'secondary_header_background_image_position', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header').css('background-position', to );
        } );
    });

    //Secondary Header Background Image Repeat
    wp.customize( 'secondary_header_background_image_repeat', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header').css('background-repeat', to );
        } );
    });

    //Secondary Header Border Style
    wp.customize( 'secondary_header_border_style', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header').css('border-style', to );
        } );
    });

    //Secondary Header Border Color
    wp.customize( 'secondary_header_border_color', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('border-color', to );
        } );
    });

    //Secondary Header Border Top
    wp.customize( 'secondary_header_border_top', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('border-top', to + 'px' + ' ' + wp.customize.value('secondary_header_border_style')() + ' ' + wp.customize.value('secondary_header_border_color')() );
        } );
    });

    //Secondary Header Border Bottom
    wp.customize( 'secondary_header_border_bottom', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('border-bottom', to + 'px' + ' ' + wp.customize.value('secondary_header_border_style')() + ' ' + wp.customize.value('secondary_header_border_color')() );
        } );
    });

    //Secondary Header Border Left
    wp.customize( 'secondary_header_border_left', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('border-left', to + 'px' + ' ' + wp.customize.value('secondary_header_border_style')() + ' ' + wp.customize.value('secondary_header_border_color')() );
        } );
    });

    //Secondary Header Border Right
    wp.customize( 'secondary_header_border_right', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('border-right', to + 'px' + ' ' + wp.customize.value('secondary_header_border_style')() + ' ' + wp.customize.value('secondary_header_border_color')() );
        } );
    });

    //Secondary Header Border Radius
    wp.customize( 'secondary_header_border_radius', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('border-radius', to + 'px' );
        } );
    });

    //Secondary Header Padding Top
    wp.customize( 'secondary_header_padding_top', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('padding-top', to + 'px' );
        } );
    });

    //Secondary Header Padding Bottom
    wp.customize( 'secondary_header_padding_bottom', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('padding-bottom', to + 'px' );
        } );
    });

    //Secondary Header Padding Left
    wp.customize( 'secondary_header_padding_left', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('padding-left', to + 'px' );
        } );
    });

    //Secondary Header Padding Right
    wp.customize( 'secondary_header_padding_right', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('padding-right', to + 'px' );
        } );
    });

    //Secondary Header Margin Top
    wp.customize( 'secondary_header_margin_top', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('margin-top', to + 'px' );
        } );
    });

    //Secondary Header Margin Bottom
    wp.customize( 'secondary_header_margin_bottom', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header').css('margin-bottom', to + 'px' );
        } );
    });

    //Secondary Header Logo Alignment
    wp.customize( 'secondary_header_logo_alignment', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('#logo').css('text-align', to );
        } );
    });

    //Secondary Header Site Title
    wp.customize( 'secondary_header_sitetitle', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('div.title').html( to );
        } );
    });

    //Secondary Header Logo Title Text Color
    wp.customize( 'secondary_header_logo_title_text_color', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('div.title').css( 'color' , to );
        } );
    });

    //Secondary Header Logo Title Font Family
    wp.customize( 'secondary_header_logo_title_fonts', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('div.title').css( 'font-family' , to );
        } );
    });

    //Secondary Header Logo Title Font Size
    wp.customize( 'secondary_header_logo_title_font_size', function( value ) {
        value.bind( function( to ) {
            let height = parseInt(to) + 10;
            $('#secondary_header_content').find('div.title').css( 'font-size' , to + 'px' );
            $('#secondary_header_content').find('div.title').css( 'line-height' , height + 'px' );
        } );
    });

    //Secondary Header Logo Title Font Weight
    wp.customize( 'secondary_header_logo_title_font_weight', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('div.title').css( 'font-weight' , to );
        } );
    });

    //Secondary Header Logo Title Font Transformation
    wp.customize( 'secondary_header_logo_title_font_transformation', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('div.title').css( 'text-transform' , to );
        } );
    });

    //Secondary Header Site Tagline
    wp.customize( 'secondary_header_tagline', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('div.tagline').html( to );
        } );
    });

    //Secondary Header Logo Tagline Text Color
    wp.customize( 'secondary_header_logo_tagline_text_color', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('div.tagline').css( 'color' , to );
        } );
    });

    //Secondary Header Logo Tagline Font Family
    wp.customize( 'secondary_header_logo_tagline_fonts', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('div.tagline').css( 'font-family' , to );
        } );
    });

    //Secondary Header Logo Tagline Font Size
    wp.customize( 'secondary_header_logo_tagline_font_size', function( value ) {
        value.bind( function( to ) {
            let height = parseInt(to) + 10;
            $('#secondary_header_content').find('div.tagline').css( 'font-size' , to + 'px' );
            $('#secondary_header_content').find('div.tagline').css( 'line-height' , height + 'px' );
        } );
    });

    //Secondary Header Logo Tagline Font Weight
    wp.customize( 'secondary_header_logo_tagline_font_weight', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('div.tagline').css( 'font-weight' , to );
        } );
    });

    //Secondary Header Logo Tagline Font Transformation
    wp.customize( 'secondary_header_logo_tagline_font_transformation', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('div.tagline').css( 'text-transform' , to );
        } );
    });

    //Secondary Header Logo Tagline Position
    wp.customize( 'secondary_header_logo_tagline_position', function( value ) {
        value.bind( function( to ) {
        if(to == 1) {
            $('#secondary_header_content').find('div.title').css( 'display' , 'inline' );
            $('#secondary_header_content').find('div.tagline').css( 'display' , 'inline' );
        } else {
            $('#secondary_header_content').find('div.title').css( 'display' , 'block' );
            $('#secondary_header_content').find('div.tagline').css( 'display' , 'block' );
        }
        } );
    });

    //Secondary Header Menu Height
    wp.customize( 'secondary_header_menu_height', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('#menu li a').css('padding-top' , to + 'px' );
            $('#secondary_header_content').find('#menu li a').css('padding-bottom' , to + 'px' );
        } );
    });

    //Secondary Header Menu Spacing
    wp.customize( 'secondary_header_menu_spacing', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('#menu li a').css('padding-left' , to + 'px' );
            $('#secondary_header_content').find('#menu li a').css('padding-right' , to + 'px' );
        } );
    });

    //Secondary Header Menu Separation
    wp.customize( 'secondary_header_menu_separation', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('#menu li').css('margin-left' , to + 'px' );
            $('#secondary_header_content').find('#menu li').css('margin-right' , to + 'px' );
        } );
    });

    //Secondary Header Menu Alignment
    wp.customize( 'secondary_header_menu_alignment', function( value ) {
    value.bind( function( to ) {
        if(wp.customize.value('secondary_header_type_select')() == 'Menu') {
        $('#secondary_header_content').find('#menu .wrapper').css('display', 'table' );
        if(to == 'center') {
            $('#secondary_header_content').find('#menu .wrapper').css('margin-left', 'auto' );
            $('#secondary_header_content').find('#menu .wrapper').css('margin-right', 'auto' );
        } else if(to == 'left') {
            $('#secondary_header_content').find('#menu .wrapper').css('margin-left', 'initial' );
            $('#secondary_header_content').find('#menu .wrapper').css('margin-right', 'auto' );
        } else {
            $('#secondary_header_content').find('#menu .wrapper').css('margin-left', 'auto' );
            $('#secondary_header_content').find('#menu .wrapper').css('margin-right', 'initial' );
        }
        } else {
        $('#secondary_header_content').find('#menu .wrapper').css({ 'position': 'absolute', 'display': 'table', 'top': '50%' });
        if(to == 'center') {
            $('#secondary_header_content').find('#menu .wrapper').css('left', '50%' );
            $('#secondary_header_content').find('#menu .wrapper').css('transform', 'translate(-50%,-50%)' );
        } else if(to == 'left') {
            $('#secondary_header_content').find('#menu .wrapper').css('left', '0' );
            $('#secondary_header_content').find('#menu .wrapper').css('transform', 'translate(0,-50%)' );
        } else {
            $('#secondary_header_content').find('#menu .wrapper').css('left', 'initial' );
            $('#secondary_header_content').find('#menu .wrapper').css('right', '0' );
            $('#secondary_header_content').find('#menu .wrapper').css('transform', 'translate(0,-50%)' );
        }
        }
        if(to == 'right') {
        $('#secondary_header_content').find('#menu .sub-menu').css({'right': '0', 'left': 'initial'});
        } else {
        $('#secondary_header_content').find('#menu .sub-menu').css({'left': '0', 'right': 'initial'});
        }
    } );
    });

    //Secondary Header Menu Text Color
    wp.customize( 'secondary_header_menu_link_color', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('#menu li a').css( 'color' , to );
        } );
    });

    //Secondary Header Menu Font Family
    wp.customize( 'secondary_header_menu_fonts', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('#menu li a').css( 'font-family' , to );
        } );
    });

    //Secondary Header Menu Font Size
    wp.customize( 'secondary_header_menu_font_size', function( value ) {
        value.bind( function( to ) {
            let height = parseInt(to) + 4;
            $('#secondary_header_content').find('#menu li a').css( 'font-size' , to + 'px' );
            $('#secondary_header_content').find('#menu li a').css( 'line-height' , height + 'px' );
        } );
    });

    //Secondary Header Menu Font Weight
    wp.customize( 'secondary_header_menu_font_weight', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('#menu li a').css( 'font-weight' , to );
        } );
    });

    //Secondary Header Menu Font Transformation
    wp.customize( 'secondary_header_menu_font_transformation', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('#menu li a').css( 'text-transform' , to );
        } );
    });

    //Secondary Header Menu Text Decoration
    wp.customize( 'secondary_header_menu_link_decoration', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('#menu li a').css( 'text-decoration' , to );
        } );
    });

    //Secondary Header Menu Link Hover Color
    wp.customize( 'secondary_header_menu_link_hover_color', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('#menu a').hover(
            function(){ $(this).css('color', to) },
            function(){ $(this).css('color', wp.customize.value('secondary_header_menu_link_color')() ) }
            );
        } );
    });

    //Secondary Header Menu Text Alignment
    wp.customize( 'secondary_header_menu_link_alignment', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('#menu li a').css( 'text-align' , to );
            $('#secondary_header_content').find('#menu ul ul li').css({ 'float': 'none', 'text-align': to });
        } );
    });

    //Secondary Header Menu Drop-down Menu Vertical Spacing
    wp.customize( 'secondary_header_menu_sub_vertical_spacing', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content').find('.sub-menu').css('padding-top' , to + 'px' );
        } );
    });

    //Secondary Header Menu Background Visibility
    wp.customize( 'secondary_header_menu_background_visible', function( value ) {
        value.bind( function( to ) {
        if(to == 1) {
            $('#secondary_header_content #menu li').css('background-color', 'transparent' );
            $('#secondary_header_content #menu li').css('background-image', 'none' );
            $('#secondary_header_content #menu li').hover(
            function(){ $(this).css('background-color', 'transparent') },
            function(){ $(this).css('background-color', 'transparent') }
            );
            $('#secondary_header_content #menu li').hover(
            function(){ $(this).css('background-image', 'none') },
            function(){ $(this).css('background-image', 'none') }
            );
            if(wp.customize.value('secondary_header_background_visible')() == 0) {
            $('#secondary_header_content').find('#menu ul .sub-menu li').css('background-color', wp.customize.value('secondary_header_background_color')() );
            $('#secondary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none' );
            $('#secondary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-color', wp.customize.value('secondary_header_background_color')()) },
                function(){ $(this).css('background-color', wp.customize.value('secondary_header_background_color')()) }
            );
            $('#secondary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-image', 'none') },
                function(){ $(this).css('background-image', 'none') }
            );
            } else {
            $('#secondary_header_content').find('#menu ul .sub-menu li').css('background-color', 'rgba(0, 0, 0, 0.4)' );
            $('#secondary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none');
            $('#secondary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') },
                function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') }
            );
            $('#secondary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-image', 'none') },
                function(){ $(this).css('background-image', 'none') }
            );
            }
        } else {
            $('#secondary_header_content #menu li').css('background-color', wp.customize.value('secondary_header_menu_background_color')() );
            $('#secondary_header_content #menu li').css('background-image', 'url(' + wp.customize.value('secondary_header_menu_background_image')() + ')'  );
            $('#secondary_header_content #menu li').hover(
            function(){ $(this).css('background-color', wp.customize.value('secondary_header_menu_hover_background_color')()) },
            function(){ $(this).css('background-color', wp.customize.value('secondary_header_menu_background_color')() ) }
            );
            $('#secondary_header_content #menu li').hover(
            function(){ $(this).css('background-image', 'url(' + wp.customize.value('secondary_header_menu_hover_background_image')() + ')'  ) },
            function(){ $(this).css('background-image', 'url(' + wp.customize.value('secondary_header_menu_background_image')() + ')'  ) }
            );
        }
        } );
    });

    //Secondary Header Menu Background Color
    wp.customize( 'secondary_header_menu_background_color', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header_content #menu li').css('background-color', to );
        $('#secondary_header_content #menu li').css('background-color', to );
        } );
    });

    //Secondary Header Menu Background Image
    wp.customize( 'secondary_header_menu_background_image', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content #menu li').css('background-image', 'url(' + to + ')' );
            $('#secondary_header_content #menu li').css('background-image', 'url(' + to + ')' );
        } );
    });

    //Secondary Header Menu Hover Background Color
    wp.customize( 'secondary_header_menu_hover_background_color', function( value ) {
        value.bind( function( to ) {
        $('#secondary_header_content #menu li').hover(
            function(){ $(this).css('background-color', to ) },
            function(){ $(this).css('background-color', wp.customize.value('secondary_header_menu_background_color')() ) }
        );
        } );
    });

    //Secondary Header Menu Hover Background Image
    wp.customize( 'secondary_header_menu_hover_background_image', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content #menu li').hover(
            function(){ $(this).css('background-image', 'url(' + to + ')' ) },
            function(){ $(this).css('background-image', 'url(' + wp.customize.value('secondary_header_menu_background_image')() + ')' ) }
            );
        } );
    });

    //Secondary Header Menu Background Position
    wp.customize( 'secondary_header_menu_background_image_position', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content #menu li').css('background-position', to );
        } );
    });

    //Secondary Header Menu Background Image Repeat
    wp.customize( 'secondary_header_menu_background_image_repeat', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content #menu li').css('background-repeat', to );
        } );
    });

    //Secondary Header Menu Border Style
    wp.customize( 'secondary_header_menu_border_style', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content #menu li').css('border-style', to );
            $('#secondary_header_content #menu li').css('border-radius', wp.customize.value('secondary_header_menu_border_radius')() + 'px' );
            if(to == 'none') {
                $('#secondary_header_content #menu li').css('border-radius', '0px' );
            }
        } );
    });

    //Secondary Header Menu Border Color
    wp.customize( 'secondary_header_menu_border_color', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content #menu li').css('border-color', to );
        } );
    });

    //Secondary Header Menu Border Top
    wp.customize( 'secondary_header_menu_border_top', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content #menu li').css('border-top', to + 'px' + ' ' + wp.customize.value('secondary_header_menu_border_style')() + ' ' + wp.customize.value('secondary_header_menu_border_color')() );
        } );
    });

    //Secondary Header Menu Border Bottom
    wp.customize( 'secondary_header_menu_border_bottom', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content #menu li').css('border-bottom', to + 'px' + ' ' + wp.customize.value('secondary_header_menu_border_style')() + ' ' + wp.customize.value('secondary_header_menu_border_color')() );
        } );
    });

    //Secondary Header Menu Border Left
    wp.customize( 'secondary_header_menu_border_left', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content #menu li').css('border-left', to + 'px' + ' ' + wp.customize.value('secondary_header_menu_border_style')() + ' ' + wp.customize.value('secondary_header_menu_border_color')() );
        } );
    });

    //Secondary Header Menu Border Right
    wp.customize( 'secondary_header_menu_border_right', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content #menu li').css('border-right', to + 'px' + ' ' + wp.customize.value('secondary_header_menu_border_style')() + ' ' + wp.customize.value('secondary_header_menu_border_color')() );
        } );
    });

    //Secondary Header Menu Border Radius
    wp.customize( 'secondary_header_menu_border_radius', function( value ) {
        value.bind( function( to ) {
            $('#secondary_header_content #menu li').css('border-radius', to + 'px' );
            $('#secondary_header_content #menu .sub-menu li').css('border-radius', '0' + 'px' );
        } );
    });

    /****************************************/
    /*                                      */
    /*            TERTIARY HEADER            */
    /*                                      */
    /****************************************/

    //Tertiary Header Width Option
    wp.customize( 'tertiary_header_width_option', function( value ) {
    value.bind( function( to ) {
        if(to == 'fluid') {
        $('#tertiary_header').css('width', wp.customize.value('tertiary_header_width_fluid')() + "%" );
        } else {
        $('#tertiary_header').css('width', wp.customize.value('tertiary_header_width_fixed')() + "px" );
        }
    } );
    });

    //Tertiary Header Width Fixed
    wp.customize( 'tertiary_header_width_fixed', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('width', to + "px" );
        } );
    });

    //Tertiary Header Width Fluid
    wp.customize( 'tertiary_header_width_fluid', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('width', to + "%" );
        } );
    });

    //Tertiary Header Alignment
    wp.customize( 'tertiary_header_alignment', function( value ) {
        value.bind( function( to ) {
            if(to == 'center') {
            $('#tertiary_header').css('margin-left', 'auto' );
            $('#tertiary_header').css('margin-right', 'auto' );
            } else if(to == 'left') {
            $('#tertiary_header').css('margin-left', 'initial' );
            $('#tertiary_header').css('margin-right', 'auto' );
            } else {
            $('#tertiary_header').css('margin-left', 'auto' );
            $('#tertiary_header').css('margin-right', 'initial' );
            }
        } );
    });

    //Tertiary Header Content Width Option
    wp.customize( 'tertiary_header_content_width_option', function( value ) {
    value.bind( function( to ) {
        if(to == 'fluid') {
        $('#tertiary_header_content').css('max-width', wp.customize.value('tertiary_header_content_width_fluid')() + "%" );
        } else {
        $('#tertiary_header_content').css('max-width', wp.customize.value('tertiary_header_content_width_fixed')() + "px" );
        }
    } );
    });

    //Tertiary Header Content Width Fixed
    wp.customize( 'tertiary_header_content_width_fixed', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').css('max-width', to + "px" );
        } );
    });

    //Tertiary Header Content Width Fluid
    wp.customize( 'tertiary_header_content_width_fluid', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header_content').css('max-width', to + "%" );
        } );
    });

    //Tertiary Header Content Alignment
    wp.customize( 'tertiary_header_content_alignment', function( value ) {
        value.bind( function( to ) {
            if(to == 'center') {
            $('#tertiary_header_content').css('margin-left', 'auto' );
            $('#tertiary_header_content').css('margin-right', 'auto' );
            } else if(to == 'left') {
            $('#tertiary_header_content').css('margin-left', 'initial' );
            $('#tertiary_header_content').css('margin-right', 'auto' );
            } else {
            $('#tertiary_header_content').css('margin-left', 'auto' );
            $('#tertiary_header_content').css('margin-right', 'initial' );
            }
        } );
    });

    //Tertiary Header Background Visibility
    wp.customize( 'tertiary_header_background_visible', function( value ) {
        value.bind( function( to ) {
        if(to == 1) {
            $('#tertiary_header').css('background-color', 'transparent' );
            $('#tertiary_header').css('background-image', 'none' );
            if(wp.customize.value('tertiary_header_menu_background_visible')() == 0) {
            $('#tertiary_header_content').find('#menu ul .sub-menu li').css('background-color', wp.customize.value('tertiary_header_background_color')() );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none' );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-color', wp.customize.value('tertiary_header_background_color')()) },
                function(){ $(this).css('background-color', wp.customize.value('tertiary_header_background_color')()) }
            );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-image', 'none') },
                function(){ $(this).css('background-image', 'none') }
            );
            } else {
            $('#tertiary_header_content').find('#menu ul .sub-menu li').css('background-color', 'rgba(0, 0, 0, 0.4)' );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none');
            $('#tertiary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') },
                function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') }
            );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-image', 'none') },
                function(){ $(this).css('background-image', 'none') }
            );
            }
        } else {
            $('#tertiary_header').css('background-color', wp.customize.value('tertiary_header_background_color')() );
            $('#tertiary_header').css('background-image', 'url(' + wp.customize.value('tertiary_header_background_image')() + ')' );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').css('background-color', wp.customize.value('tertiary_header_background_color')() );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none' );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-color', wp.customize.value('tertiary_header_background_color')()) },
                function(){ $(this).css('background-color', wp.customize.value('tertiary_header_background_color')()) }
            );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-image', 'none') },
                function(){ $(this).css('background-image', 'none') }
            );
        }
        } );
    });

    //Tertiary Header Background Color
    wp.customize( 'tertiary_header_background_color', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('background-color', to );
        } );
    });

    //Tertiary Header Background Image
    wp.customize( 'tertiary_header_background_image', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header').css('background-image', 'url(' + to + ')' );
        } );
    });

    //Tertiary Header Background Position
    wp.customize( 'tertiary_header_background_image_position', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header').css('background-position', to );
        } );
    });

    //Tertiary Header Background Image Repeat
    wp.customize( 'tertiary_header_background_image_repeat', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header').css('background-repeat', to );
        } );
    });

    //Tertiary Header Border Style
    wp.customize( 'tertiary_header_border_style', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header').css('border-style', to );
        } );
    });

    //Tertiary Header Border Color
    wp.customize( 'tertiary_header_border_color', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('border-color', to );
        } );
    });

    //Tertiary Header Border Top
    wp.customize( 'tertiary_header_border_top', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('border-top', to + 'px' + ' ' + wp.customize.value('tertiary_header_border_style')() + ' ' + wp.customize.value('tertiary_header_border_color')() );
        } );
    });

    //Tertiary Header Border Bottom
    wp.customize( 'tertiary_header_border_bottom', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('border-bottom', to + 'px' + ' ' + wp.customize.value('tertiary_header_border_style')() + ' ' + wp.customize.value('tertiary_header_border_color')() );
        } );
    });

    //Tertiary Header Border Left
    wp.customize( 'tertiary_header_border_left', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('border-left', to + 'px' + ' ' + wp.customize.value('tertiary_header_border_style')() + ' ' + wp.customize.value('tertiary_header_border_color')() );
        } );
    });

    //Tertiary Header Border Right
    wp.customize( 'tertiary_header_border_right', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('border-right', to + 'px' + ' ' + wp.customize.value('tertiary_header_border_style')() + ' ' + wp.customize.value('tertiary_header_border_color')() );
        } );
    });

    //Tertiary Header Border Radius
    wp.customize( 'tertiary_header_border_radius', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('border-radius', to + 'px' );
        } );
    });

    //Tertiary Header Padding Top
    wp.customize( 'tertiary_header_padding_top', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('padding-top', to + 'px' );
        } );
    });

    //Tertiary Header Padding Bottom
    wp.customize( 'tertiary_header_padding_bottom', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('padding-bottom', to + 'px' );
        } );
    });

    //Tertiary Header Padding Left
    wp.customize( 'tertiary_header_padding_left', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('padding-left', to + 'px' );
        } );
    });

    //Tertiary Header Padding Right
    wp.customize( 'tertiary_header_padding_right', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('padding-right', to + 'px' );
        } );
    });

    //Tertiary Header Margin Top
    wp.customize( 'tertiary_header_margin_top', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('margin-top', to + 'px' );
        } );
    });

    //Tertiary Header Margin Bottom
    wp.customize( 'tertiary_header_margin_bottom', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header').css('margin-bottom', to + 'px' );
        } );
    });

    //Tertiary Header Logo Alignment
    wp.customize( 'tertiary_header_logo_alignment', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('#logo').css('text-align', to );
        } );
    });

    //Tertiary Header Site Title
    wp.customize( 'tertiary_header_sitetitle', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('div.title').html( to );
        } );
    });

    //Tertiary Header Logo Title Text Color
    wp.customize( 'tertiary_header_logo_title_text_color', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('div.title').css( 'color' , to );
        } );
    });

    //Tertiary Header Logo Title Font Family
    wp.customize( 'tertiary_header_logo_title_fonts', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('div.title').css( 'font-family' , to );
        } );
    });

    //Tertiary Header Logo Title Font Size
    wp.customize( 'tertiary_header_logo_title_font_size', function( value ) {
        value.bind( function( to ) {
            let height = parseInt(to) + 10;
            $('#tertiary_header_content').find('div.title').css( 'font-size' , to + 'px' );
            $('#tertiary_header_content').find('div.title').css( 'line-height' , height + 'px' );
        } );
    });

    //Tertiary Header Logo Title Font Weight
    wp.customize( 'tertiary_header_logo_title_font_weight', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('div.title').css( 'font-weight' , to );
        } );
    });

    //Tertiary Header Logo Title Font Transformation
    wp.customize( 'tertiary_header_logo_title_font_transformation', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('div.title').css( 'text-transform' , to );
        } );
    });

    //Tertiary Header Site Tagline
    wp.customize( 'tertiary_header_tagline', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('div.tagline').html( to );
        } );
    });

    //Tertiary Header Logo Tagline Text Color
    wp.customize( 'tertiary_header_logo_tagline_text_color', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('div.tagline').css( 'color' , to );
        } );
    });

    //Tertiary Header Logo Tagline Font Family
    wp.customize( 'tertiary_header_logo_tagline_fonts', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('div.tagline').css( 'font-family' , to );
        } );
    });

    //Tertiary Header Logo Tagline Font Size
    wp.customize( 'tertiary_header_logo_tagline_font_size', function( value ) {
        value.bind( function( to ) {
            let height = parseInt(to) + 10;
            $('#tertiary_header_content').find('div.tagline').css( 'font-size' , to + 'px' );
            $('#tertiary_header_content').find('div.tagline').css( 'line-height' , height + 'px' );
        } );
    });

    //Tertiary Header Logo Tagline Font Weight
    wp.customize( 'tertiary_header_logo_tagline_font_weight', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('div.tagline').css( 'font-weight' , to );
        } );
    });

    //Tertiary Header Logo Tagline Font Transformation
    wp.customize( 'tertiary_header_logo_tagline_font_transformation', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('div.tagline').css( 'text-transform' , to );
        } );
    });

    //Tertiary Header Logo Tagline Position
    wp.customize( 'tertiary_header_logo_tagline_position', function( value ) {
        value.bind( function( to ) {
        if(to == 1) {
            $('#tertiary_header_content').find('div.title').css( 'display' , 'inline' );
            $('#tertiary_header_content').find('div.tagline').css( 'display' , 'inline' );
        } else {
            $('#tertiary_header_content').find('div.title').css( 'display' , 'block' );
            $('#tertiary_header_content').find('div.tagline').css( 'display' , 'block' );
        }
        } );
    });

    //Tertiary Header Menu Height
    wp.customize( 'tertiary_header_menu_height', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('#menu li a').css('padding-top' , to + 'px' );
            $('#tertiary_header_content').find('#menu li a').css('padding-bottom' , to + 'px' );
        } );
    });

    //Tertiary Header Menu Spacing
    wp.customize( 'tertiary_header_menu_spacing', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('#menu li a').css('padding-left' , to + 'px' );
            $('#tertiary_header_content').find('#menu li a').css('padding-right' , to + 'px' );
        } );
    });

    //Tertiary Header Menu Separation
    wp.customize( 'tertiary_header_menu_separation', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('#menu li').css('margin-left' , to + 'px' );
            $('#tertiary_header_content').find('#menu li').css('margin-right' , to + 'px' );
        } );
    });

    //Tertiary Header Menu Alignment
    wp.customize( 'tertiary_header_menu_alignment', function( value ) {
    value.bind( function( to ) {
        if(wp.customize.value('tertiary_header_type_select')() == 'Menu') {
        $('#tertiary_header_content').find('#menu .wrapper').css('display', 'table' );
        if(to == 'center') {
            $('#tertiary_header_content').find('#menu .wrapper').css('margin-left', 'auto' );
            $('#tertiary_header_content').find('#menu .wrapper').css('margin-right', 'auto' );
        } else if(to == 'left') {
            $('#tertiary_header_content').find('#menu .wrapper').css('margin-left', 'initial' );
            $('#tertiary_header_content').find('#menu .wrapper').css('margin-right', 'auto' );
        } else {
            $('#tertiary_header_content').find('#menu .wrapper').css('margin-left', 'auto' );
            $('#tertiary_header_content').find('#menu .wrapper').css('margin-right', 'initial' );
        }
        } else {
        $('#tertiary_header_content').find('#menu .wrapper').css({ 'position': 'absolute', 'display': 'table', 'top': '50%' });
        if(to == 'center') {
            $('#tertiary_header_content').find('#menu .wrapper').css('left', '50%' );
            $('#tertiary_header_content').find('#menu .wrapper').css('transform', 'translate(-50%,-50%)' );
        } else if(to == 'left') {
            $('#tertiary_header_content').find('#menu .wrapper').css('left', '0' );
            $('#tertiary_header_content').find('#menu .wrapper').css('transform', 'translate(0,-50%)' );
        } else {
            $('#tertiary_header_content').find('#menu .wrapper').css('left', 'initial' );
            $('#tertiary_header_content').find('#menu .wrapper').css('right', '0' );
            $('#tertiary_header_content').find('#menu .wrapper').css('transform', 'translate(0,-50%)' );
        }
        }
        if(to == 'right') {
        $('#tertiary_header_content').find('#menu .sub-menu').css({'right': '0', 'left': 'initial'});
        } else {
        $('#tertiary_header_content').find('#menu .sub-menu').css({'left': '0', 'right': 'initial'});
        }
    } );
    });

    //Tertiary Header Menu Text Color
    wp.customize( 'tertiary_header_menu_link_color', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('#menu li a').css( 'color' , to );
        } );
    });

    //Tertiary Header Menu Font Family
    wp.customize( 'tertiary_header_menu_fonts', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('#menu li a').css( 'font-family' , to );
        } );
    });

    //Tertiary Header Menu Font Size
    wp.customize( 'tertiary_header_menu_font_size', function( value ) {
        value.bind( function( to ) {
            let height = parseInt(to) + 4;
            $('#tertiary_header_content').find('#menu li a').css( 'font-size' , to + 'px' );
            $('#tertiary_header_content').find('#menu li a').css( 'line-height' , height + 'px' );
        } );
    });

    //Tertiary Header Menu Font Weight
    wp.customize( 'tertiary_header_menu_font_weight', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('#menu li a').css( 'font-weight' , to );
        } );
    });

    //Tertiary Header Menu Font Transformation
    wp.customize( 'tertiary_header_menu_font_transformation', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('#menu li a').css( 'text-transform' , to );
        } );
    });

    //Tertiary Header Menu Text Decoration
    wp.customize( 'tertiary_header_menu_link_decoration', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('#menu li a').css( 'text-decoration' , to );
        } );
    });

    //Tertiary Header Menu Link Hover Color
    wp.customize( 'tertiary_header_menu_link_hover_color', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('#menu a').hover(
            function(){ $(this).css('color', to) },
            function(){ $(this).css('color', wp.customize.value('tertiary_header_menu_link_color')() ) }
            );
        } );
    });

    //Tertiary Header Menu Text Alignment
    wp.customize( 'tertiary_header_menu_link_alignment', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('#menu li a').css( 'text-align' , to );
            $('#tertiary_header_content').find('#menu ul ul li').css({ 'float': 'none', 'text-align': to });
        } );
    });

    //Tertiary Header Menu Drop-down Menu Vertical Spacing
    wp.customize( 'tertiary_header_menu_sub_vertical_spacing', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content').find('.sub-menu').css('padding-top' , to + 'px' );
        } );
    });

    //Tertiary Header Menu Background Visibility
    wp.customize( 'tertiary_header_menu_background_visible', function( value ) {
        value.bind( function( to ) {
        if(to == 1) {
            $('#tertiary_header_content #menu li').css('background-color', 'transparent' );
            $('#tertiary_header_content #menu li').css('background-image', 'none' );
            $('#tertiary_header_content #menu li').hover(
            function(){ $(this).css('background-color', 'transparent') },
            function(){ $(this).css('background-color', 'transparent') }
            );
            $('#tertiary_header_content #menu li').hover(
            function(){ $(this).css('background-image', 'none') },
            function(){ $(this).css('background-image', 'none') }
            );
            if(wp.customize.value('tertiary_header_background_visible')() == 0) {
            $('#tertiary_header_content').find('#menu ul .sub-menu li').css('background-color', wp.customize.value('tertiary_header_background_color')() );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none' );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-color', wp.customize.value('tertiary_header_background_color')()) },
                function(){ $(this).css('background-color', wp.customize.value('tertiary_header_background_color')()) }
            );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-image', 'none') },
                function(){ $(this).css('background-image', 'none') }
            );
            } else {
            $('#tertiary_header_content').find('#menu ul .sub-menu li').css('background-color', 'rgba(0, 0, 0, 0.4)' );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').css('background-image', 'none');
            $('#tertiary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') },
                function(){ $(this).css('background-color', 'rgba(0, 0, 0, 0.4)') }
            );
            $('#tertiary_header_content').find('#menu ul .sub-menu li').hover(
                function(){ $(this).css('background-image', 'none') },
                function(){ $(this).css('background-image', 'none') }
            );
            }
        } else {
            $('#tertiary_header_content #menu li').css('background-color', wp.customize.value('tertiary_header_menu_background_color')() );
            $('#tertiary_header_content #menu li').css('background-image', 'url(' + wp.customize.value('tertiary_header_menu_background_image')() + ')'  );
            $('#tertiary_header_content #menu li').hover(
            function(){ $(this).css('background-color', wp.customize.value('tertiary_header_menu_hover_background_color')()) },
            function(){ $(this).css('background-color', wp.customize.value('tertiary_header_menu_background_color')() ) }
            );
            $('#tertiary_header_content #menu li').hover(
            function(){ $(this).css('background-image', 'url(' + wp.customize.value('tertiary_header_menu_hover_background_image')() + ')'  ) },
            function(){ $(this).css('background-image', 'url(' + wp.customize.value('tertiary_header_menu_background_image')() + ')'  ) }
            );
        }
        } );
    });

    //Tertiary Header Menu Background Color
    wp.customize( 'tertiary_header_menu_background_color', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header_content #menu li').css('background-color', to );
        $('#tertiary_header_content #menu li').css('background-color', to );
        } );
    });

    //Tertiary Header Menu Background Image
    wp.customize( 'tertiary_header_menu_background_image', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content #menu li').css('background-image', 'url(' + to + ')' );
            $('#tertiary_header_content #menu li').css('background-image', 'url(' + to + ')' );
        } );
    });

    //Tertiary Header Menu Hover Background Color
    wp.customize( 'tertiary_header_menu_hover_background_color', function( value ) {
        value.bind( function( to ) {
        $('#tertiary_header_content #menu li').hover(
            function(){ $(this).css('background-color', to ) },
            function(){ $(this).css('background-color', wp.customize.value('tertiary_header_menu_background_color')() ) }
        );
        } );
    });

    //Tertiary Header Menu Hover Background Image
    wp.customize( 'tertiary_header_menu_hover_background_image', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content #menu li').hover(
            function(){ $(this).css('background-image', 'url(' + to + ')' ) },
            function(){ $(this).css('background-image', 'url(' + wp.customize.value('tertiary_header_menu_background_image')() + ')' ) }
            );
        } );
    });

    //Tertiary Header Menu Background Position
    wp.customize( 'tertiary_header_menu_background_image_position', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content #menu li').css('background-position', to );
        } );
    });

    //Tertiary Header Menu Background Image Repeat
    wp.customize( 'tertiary_header_menu_background_image_repeat', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content #menu li').css('background-repeat', to );
        } );
    });

    //Tertiary Header Menu Border Style
    wp.customize( 'tertiary_header_menu_border_style', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content #menu li').css('border-style', to );
            $('#tertiary_header_content #menu li').css('border-radius', wp.customize.value('tertiary_header_menu_border_radius')() + 'px' );
            if(to == 'none') {
                $('#tertiary_header_content #menu li').css('border-radius', '0px' );
            }
        } );
    });

    //Tertiary Header Menu Border Color
    wp.customize( 'tertiary_header_menu_border_color', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content #menu li').css('border-color', to );
        } );
    });

    //Tertiary Header Menu Border Top
    wp.customize( 'tertiary_header_menu_border_top', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content #menu li').css('border-top', to + 'px' + ' ' + wp.customize.value('tertiary_header_menu_border_style')() + ' ' + wp.customize.value('tertiary_header_menu_border_color')() );
        } );
    });

    //Tertiary Header Menu Border Bottom
    wp.customize( 'tertiary_header_menu_border_bottom', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content #menu li').css('border-bottom', to + 'px' + ' ' + wp.customize.value('tertiary_header_menu_border_style')() + ' ' + wp.customize.value('tertiary_header_menu_border_color')() );
        } );
    });

    //Tertiary Header Menu Border Left
    wp.customize( 'tertiary_header_menu_border_left', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content #menu li').css('border-left', to + 'px' + ' ' + wp.customize.value('tertiary_header_menu_border_style')() + ' ' + wp.customize.value('tertiary_header_menu_border_color')() );
        } );
    });

    //Tertiary Header Menu Border Right
    wp.customize( 'tertiary_header_menu_border_right', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content #menu li').css('border-right', to + 'px' + ' ' + wp.customize.value('tertiary_header_menu_border_style')() + ' ' + wp.customize.value('tertiary_header_menu_border_color')() );
        } );
    });

    //Tertiary Header Menu Border Radius
    wp.customize( 'tertiary_header_menu_border_radius', function( value ) {
        value.bind( function( to ) {
            $('#tertiary_header_content #menu li').css('border-radius', to + 'px' );
            $('#tertiary_header_content #menu .sub-menu li').css('border-radius', '0' + 'px' );
        } );
    });

    /****************************************/
    /*                                      */
    /*           PAGE BACKGROUND            */
    /*                                      */
    /****************************************/

    //Page Background Color
    wp.customize( 'global_background_color', function( value ) {
        value.bind( function( to ) {
          $('html, body').css('background-color', to );
        } );
    });

    //Page Background Image
    wp.customize( 'global_background_image', function( value ) {
        value.bind( function( to ) {
            $('html, body').css('background-image', 'url(' + to + ')' );
        } );
    });

    //Page Background Position
    wp.customize( 'global_background_image_position', function( value ) {
        value.bind( function( to ) {
            $('html, body').css('background-position', to );
        } );
    });

    //Page Background Image Repeat
    wp.customize( 'global_background_image_repeat', function( value ) {
        value.bind( function( to ) {
            $('html, body').css('background-repeat', to );
        } );
    });

    //Page Background Image Type
    wp.customize( 'global_background_image_type', function( value ) {
        value.bind( function( to ) {
            $('html, body').css('background-size', to );
        } );
    });

    //Page Background Image Scroll
    wp.customize( 'global_background_image_scroll', function( value ) {
        value.bind( function( to ) {
            $('html, body').css('background-attachment', to );
        } );
    });

});
