<?php
/**
 * Exit if accessed directly!
 */
defined( 'ABSPATH' ) || exit;

add_action( 'init', 'myb_register_blocks' );

function myb_register_blocks() {
    // all the blocks are registered here!
    register_block_type( MYB_MAIN_PATH . '/blocks/text/app-build' );
}