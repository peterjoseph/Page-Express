<?php

  /** DATA SANITIZATION **/

  //Customizer title
  function pe_sanitize_header_title( $input ) {
    return null;
  }

  //Customizer Line Space
  function pe_sanitize_line_space( $input ) {
    return null;
  }

  //Image Upload
  function pe_sanitize_image( $image, $setting ) {
    $type = array(
      'jpg|jpeg|jpe' => 'image/jpeg',
      'gif'          => 'image/gif',
      'png'          => 'image/png',
      'bmp'          => 'image/bmp',
      'tif|tiff'     => 'image/tiff',
      'ico'          => 'image/x-icon'
    );
    $file = wp_check_filetype( $image, $type );
    return ( $file['ext'] ? $image : $setting->default );
  }

  //Select Options
  function pe_sanitize_select( $input, $setting ) {
  	$choices = $setting->manager->get_control( $setting->id )->choices;
  	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
  }

  //Range
  function pe_sanitize_range( $number, $setting ) {
  	$number = absint( $number );
  	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
  	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
  	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
  	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
  	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
  }

  //Checkbox
  function pe_sanitize_checkbox( $checked ) {
  	return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  //CSS Styling
  function pe_sanitize_css( $css ) {
  	return wp_strip_all_tags( $css );
  }

?>
