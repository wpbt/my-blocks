<?php
/**
 * Plugin Name: My Blocks
 */

/**
 * Exit if accessed directly!
 */
defined( 'ABSPATH' ) || exit;

// plugin constants
define( 'MB_MAIN_PATH', dirname( __FILE__ ) );
define( 'MYB_MAIN_URL', plugins_url( '', __FILE__ ) );

// include our blocks
include_once MB_MAIN_PATH . '/blocks/blocks.php';