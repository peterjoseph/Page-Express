jQuery(function($){

    /****************************************/
    /*                                      */
    /*            PRIMARY HEADER            */
    /*                                      */
    /****************************************/

    // //Primary Header Width Option
    // wp.customize( 'option_primary_header_width_option', function( value ) {
    // } );

    //Primary Header Background
    wp.customize( 'primary_header_background_visible', function( value ) {
        if($('[data-customize-setting-link="primary_header_background_visible"]').is(':checked')) {
            $( '#customize-control-primary_header_background_color, #customize-control-primary_header_background_image, #customize-control-primary_header_background_image_position , #customize-control-primary_header_background_image_repeat' ).hide();
        }
        value.bind( function( to ) {
            $( '#customize-control-primary_header_background_color, #customize-control-primary_header_background_image, #customize-control-primary_header_background_image_position , #customize-control-primary_header_background_image_repeat' ).toggle();
        } );
    } );

    // //Primary Header Background Position & Repetition Buttons
    // wp.customize( 'primary_header_background_image', function( value ) {
    //     value.bind( function( to ) {
    //         if(to != null) {
    //           $( '#customize-control-primary_header_background_image_position , #customize-control-primary_header_background_image_repeat' ).show();
    //         } else {
    //           $( '#customize-control-primary_header_background_image_position , #customize-control-primary_header_background_image_repeat' ).hide();
    //         }
    //     } );
    // } );
    //
    // //Primary Header Borders
    // wp.customize( 'primary_header_border_style', function( value ) {
    //   value.bind( function( to ) {
    //     if ( 'none' == to ) {
    //         alert("penis");
    //     }
    //   } );
    // } );

});
