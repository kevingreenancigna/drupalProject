<?php

/**
 * @file
 * css.php
 */

/**
 * Implements hook_css_alter().
 */
function cignaGlobal_css_alter(&$vars){
    $node = menu_get_object('node');
    if( is_object($node) && isset($node->type) && $node->type == 'landing_page') {
        unset($vars['sites/all/themes/cignaGlobal/css/style.css']);
    }
}
