//Primary Header

jQuery(function($){
    $('#customize-control-eg2, #customize-control-eg3' ).hide();
    wp.customize( 'eg1', function( value ) {
        value.bind( function( to ) {
            $( '#customize-control-eg2, #customize-control-eg3' ).toggle();
        } );
    } );
});