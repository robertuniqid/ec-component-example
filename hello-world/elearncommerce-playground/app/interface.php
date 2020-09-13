<?php

add_filter( 'elearncommerce_application_configuration', 'ecp_register_configuration' );
add_filter( 'elearncommerce_application_lang', 'ecp_register_lang' );

function ecp_register_configuration( $configuration ) {
  $configuration[ 'component_injection' ][ 'ecp-hello-world' ] = ECP_BASE_URL_PATH . 'interface/component/hello-world';

  return $configuration;
}

function ecp_register_lang( $lang ) {
  $lang[ 'ecp_hello_message' ] = __( "Hello World", "ecp" );

  return $lang;
}