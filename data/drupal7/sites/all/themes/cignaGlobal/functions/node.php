<?php

/**
 * @file
 * node.php
 */

/**
 * Implements hook_preprocess_node().
 */
function cignaNewGlobal_preprocess_node(&$vars){
    // Create functions for more fine-grained control of node preprocessing.
    $func_node_type = '_cignaNewGlobal_preprocess_node_' . $vars['node']->type;
    $view_mode = !empty($vars['ds_switch']) ? $vars['ds_switch'] : $vars['view_mode'];
    $func_view_mode = $func_node_type . '_' . $view_mode;

    if(function_exists($func_node_type)) $func_node_type($vars);
    if(function_exists($func_view_mode)) $func_view_mode($vars);
}


function _cignaNewGlobal_preprocess_node_landing_page(&$vars) {
    drupal_add_css(drupal_get_path('theme', 'cignaNewGlobal') . '/css/font-awesome.css',
        array(
            'group' => CSS_THEME,
        )
    );
}

/**
 * Preprocess landing page nodes with a view mode of landing_page_1.
 * @see cignaNewGlobal_preprocess_node().
 */
function _cignaNewGlobal_preprocess_node_landing_page_landing_page_1(&$vars) {
    //$vars['content']['#attached']['css'][] = drupal_get_path('theme', 'cignaNewGlobal') . '/css/landing1.css';

    //add attributes to the CTA button
    if(!empty($vars['content']['field_cta_button']['#items']) &&
        is_array($vars['content']['field_cta_button']['#items'])) {
        foreach($vars['content']['field_cta_button']['#items'] as $k => $item) {
            $vars['content']['field_cta_button']['#items'][$k]['attributes']['class'][] = 'btn btn-warning btn-lg';
            $vars['content']['field_cta_button']['#items'][$k]['attributes']['role'][] = 'button';
        }
    }

    drupal_add_css(drupal_get_path('theme', 'cignaNewGlobal') . '/css/landing1.css',
        array(
            'group' => CSS_THEME,
            'weight' => 1000)
    );
}

/**
 * Preprocess landing page nodes with a view mode of landing_page_2.
 * @see cignaNewGlobal_preprocess_node().
 */
function _cignaNewGlobal_preprocess_node_landing_page_landing_page_2(&$vars) {
    //$vars['content']['#attached']['css'][] = drupal_get_path('theme', 'cignaNewGlobal') . '/css/landing2.css';
    drupal_add_css(drupal_get_path('theme', 'cignaNewGlobal') . '/css/landing2.css',
        array(
            'group' => CSS_THEME,
            'weight' => 1000)
    );
}

/**
 * Preprocess landing page nodes with a view mode of landing_page_3.
 * @see cignaNewGlobal_preprocess_node().
 */
function _cignaNewGlobal_preprocess_node_landing_page_landing_page_3(&$vars) {
    //$vars['content']['#attached']['css'][] = drupal_get_path('theme', 'cignaNewGlobal') . '/css/landing3.css';

    //add attributes to the CTA button
    if(!empty($vars['content']['field_cta_button']['#items']) &&
        is_array($vars['content']['field_cta_button']['#items'])) {
        foreach($vars['content']['field_cta_button']['#items'] as $k => $item) {
            $vars['content']['field_cta_button']['#items'][$k]['attributes']['class'][] = 'btn btn-warning btn-lg';
            $vars['content']['field_cta_button']['#items'][$k]['attributes']['role'][] = 'button';
        }
    }

    drupal_add_css(drupal_get_path('theme', 'cignaNewGlobal') . '/css/landing3.css',
        array(
            'group' => CSS_THEME,
            'weight' => 1000)
    );
}

/**
 * Preprocess landing page nodes with a view mode of landing_page_4.
 * @see cignaNewGlobal_preprocess_node().
 */
function _cignaNewGlobal_preprocess_node_landing_page_landing_page_4(&$vars) {
    //$vars['content']['#attached']['css'][] = drupal_get_path('theme', 'cignaNewGlobal') . '/css/landing4.css';
    // Add attributes to the CTA button.
    if(!empty($vars['content']['field_cta_button']['#items']) &&
        is_array($vars['content']['field_cta_button']['#items'])) {
        foreach($vars['content']['field_cta_button']['#items'] as $k => $item) {
            $vars['content']['field_cta_button']['#items'][$k]['attributes']['class'][] = 'btn btn-warning btn-lg hidden-xs center-block';
            $vars['content']['field_cta_button']['#items'][$k]['attributes']['role'][] = 'button';
        }
    }

    drupal_add_css(drupal_get_path('theme', 'cignaNewGlobal') . '/css/landing4.css',
        array(
            'group' => CSS_THEME,
            'weight' => 1000)
    );
}