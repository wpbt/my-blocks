# Welcome to my plugin: My Block

This plugin is only for learning purpose.

## Development Flow

- This plugin contains multiple blocks inside `/blocks` directory.
- Navigate to each directory (e.g., `/text`) inside `/blocks` directory.
  - Run `npm install` to install npm modules.
  - Run `npm run start` to preview any changes in the block code you make.
  - You can make any change to js files inside `/src` to add/view changes.
- Each block is contained in it's own directory and all the blocks are registered inside `/blocks/blocks.php`.

`blocks.php` _snippet preview_

```php
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
```
