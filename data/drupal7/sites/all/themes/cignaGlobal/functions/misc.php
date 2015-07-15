<?php

/**
 * @file
 * misc.php
 */

/**
 * Implements theme_double_field().
 */
function cignaGlobal_double_field($vars) {
    $element = $vars['element'];
    $settings = $element['#display']['settings'];

    if ($settings['style'] == 'link') {
        $output = l($element['#item']['first'], $element['#item']['second']);
    }
    elseif ($settings['style'] == 'simple') {
        $output = $element['#item']['first'] . $element['#item']['second'];
    }
    else {
        $output = $element['#item']['first'];
        $output .= '<strong>' . $element['#item']['second'] . '</strong><br/>';
    }
    return $output;
}