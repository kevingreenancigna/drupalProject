<?php

/**
 * @file
 * misc.php
 */

/**
 * Implements hook_menu_tree().
 */
function cignaGlobal_menu_tree($variables) {
    return $variables['tree'];
}

/**
 * Implements hook_menu_link().
 */
function cignaGlobal_menu_link($variables) {
    $element = $variables['element'];
    $sub_menu = '';

    /*if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }*/
    unset($element['#attributes']['class']);
    unset($element['#attributes']['title']);

    if ((!empty($element['#original_link']['depth'])) && ($element['#original_link']['depth'] == 1)) {
        // Add our own wrapper.
        unset($element['#below']['#theme_wrappers']);
        $sub_menu = '<ul class="dropdown-menu" role="menu">' . drupal_render($element['#below']) . '</ul>';
        // Generate as standard dropdown.
        $element['#title'] = '<span class="fa fa-globe"> </span><span class="language">' . t('Language') . ' : </span>' .
            $element['#title'] . ' <span class="caret"></span>';

        $element['#attributes']['class'][] = 'dropdown';
        $element['#localized_options']['html'] = TRUE;

        $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
        $element['#localized_options']['attributes']['role'] = 'button';
        $element['#localized_options']['attributes']['aria-expanded'] = 'false';
        $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
    }


    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
