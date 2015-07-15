<?php

/**
 * @file
 * system.php
 */

/**
 * Implements hook_preprocess_page().
 */
function cignaNewGlobal_preprocess_page(&$vars) {
    if (isset($vars['node']->type)) {
        $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
    }
}