<?php
/**
 * Plugin Name: eLearnCommerce Playground
 * Plugin URI: https://elearncommerce.com
 * Description: -
 * Version: 1.0
 * Author: Robert Rusu
 * Author URI: https://elearncommerce.com
 */

define( "ECP_BASE_FILE_PATH", __FILE__ );
define( "ECP_BASE_PATH", dirname( ECP_BASE_FILE_PATH ) );
define( "ECP_BASE_URL_PATH", plugin_dir_url( ECP_BASE_FILE_PATH ) );

require_once "app/interface.php";
require_once "app/shortcode.php";