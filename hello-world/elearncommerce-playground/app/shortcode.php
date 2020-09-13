<?php

add_shortcode( 'ecp_hello_world', function( $attributes, $content ) {
  if( !is_array( $attributes ) )
    $attributes = [];

  if( $content !== '' )
    $attributes[ 'message' ] = $content;

  return '<div data-ec-component="ecp-hello-world"
               data-ec-component-args="' . esc_attr( json_encode( $attributes ) ) . '"></div>';
});