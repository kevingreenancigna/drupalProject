<?php

/**
 * @file
 * block.php
 */

/**
 * Implements hook_preprocess_block().
 */
function cignaNewGlobal_preprocess_block(&$vars) {
    if(!empty($vars['elements']['bean']) && is_array($vars['elements']['bean'])) {
        $array_keys = array_keys($vars['elements']['bean']);
        $bean_name = $array_keys[0];
        $entity_type = $vars['elements']['bean'][$bean_name]['#entity_type'];
        $bundle = $vars['elements']['bean'][$bean_name]['#bundle'];
        $vars['theme_hook_suggestions'][] = 'block__' . $entity_type . '__' . $bundle;
    }
}