<?php

/**
 * @file
 * css.php
 */

/**
 * Implements hook_preprocess_entity().
 */
function cignaNewGlobal_preprocess_entity(&$vars){
    // Create functions for more fine-grained control of entity preprocessing.
    $entity_type = $vars['entity_type'];
    $func_bundle = '_cignaNewGlobal_preprocess_entity__' . $entity_type . '__' . $vars[$entity_type]->type;
    $view_mode = !empty($vars['ds_switch']) ? $vars['ds_switch'] : $vars['view_mode'];
    $func_view_mode = $func_bundle . '_' . $view_mode;

    if(function_exists($func_bundle)) $func_bundle($vars);
    if(function_exists($func_view_mode)) $func_view_mode($vars);

    // Add attributes to the CTA button.
    if(!empty($vars['content']['field_cta_button']['#items']) &&
        is_array($vars['content']['field_cta_button']['#items'])) {
        foreach($vars['content']['field_cta_button']['#items'] as $k => $item) {
            $vars['content']['field_cta_button']['#items'][$k]['attributes']['class'][] = 'btn btn-primary';
        }
    }


}

/**
 * Preprocess function for CTA Telephone Bean.
 *
 * @see cignaNewGlobal_preprocess_entity.
 */
function _cignaNewGlobal_preprocess_entity__bean__cta_telephone(&$vars) {
    // Add mark-up to telephone numbers.
    if(!empty($vars['content']['field_telephone_numbers']['#items'])){
        $items =& $vars['content']['field_telephone_numbers']['#items'];
        foreach($items as $k => $item) {
            $items[$k] = $items[$k]['first'] . '<strong>' . $items[$k]['second'] . '</strong>';
        }
    }

    //var_dump($vars['content']['field_telephone_numbers'][0]);
}
