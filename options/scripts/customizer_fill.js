jQuery(function($){

  /****************************************/
  /*                                      */
  /*            PRIMARY HEADER            */
  /*                                      */
  /****************************************/

  //Primary Header Background Color Picker
  wp.customize( 'primary_header_background_color', function( value ) {
      value.bind( function( to ) {
        $('#primary_header').css('background-color', to );
      } );
  });

});
