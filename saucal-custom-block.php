<?php
/**
 * Plugin Name: Saucal Custom Block Plugin
 * Author: Phoka Taole
 * Version: 1.0.0
 */
  
function loadMyBlock() {
  wp_enqueue_script(
    'saucal-custom-block',
    plugin_dir_url(__FILE__) . 'saucal-block.js',
    array('wp-blocks','wp-editor'),
    true
  );
}
   
add_action('enqueue_block_editor_assets', 'loadMyBlock');