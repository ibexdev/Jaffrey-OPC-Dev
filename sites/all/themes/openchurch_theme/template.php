<?php

/**
 * Page preprocessing
 */
function openchurch_theme_preprocess_page(&$vars) {

  /**
   * Embed superfish menu
   */
  $block = block_load('superfish',1);
  $block->title = '<none>';
  
  $renderable_block= _block_get_renderable_array(_block_render_blocks(array($block)));
  
  $vars['page']['main_menu'] = $renderable_block;
}