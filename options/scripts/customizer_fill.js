jQuery(function($){

  /****************************************/
  /*                                      */
  /*            PRIMARY HEADER            */
  /*                                      */
  /****************************************/
//'transport' => 'postMessage',

  //Primary Header Width Option
  wp.customize( 'primary_header_width_option', function( value ) {});

  //Primary Header Width Fixed
  wp.customize( 'primary_header_width_fixed', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('max-width', to + "px" );
      } );
  });

  //Primary Header Width Fluid
  wp.customize( 'primary_header_width_fluid', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('max-width', to + "%" );
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

  //Primary Header Content Width Alignment
  wp.customize( 'primary_header_content_width_option', function( value ) {});

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





  //Primary Header Background Color Picker
  wp.customize( 'primary_header_background_color', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('background-color', to );
      } );
  });


});
