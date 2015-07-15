<?php

/**
 * @file
 * misc.php
 */

/**
 * Implements hook_breadcrumb().
 *
 * @TODO Ask why we have a hook from the cignaIndonesia theme.
 */
function cignaIndonesia_breadcrumb($variables) {
    //$breadcrumb = $variables['breadcrumb'];
    $breadcrumb = drupal_get_breadcrumb();
    $breadcrumb = array_unique($breadcrumb);
    if (!empty($breadcrumb)) {
        // Provide a navigational heading to give context for breadcrumb links to
        // screen-reader users. Make the heading invisible with .element-invisible.
        $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
        $crumbs = '<div class="breadcrumb">';
        $array_size = count($breadcrumb);
        $i = 0;
        if (drupal_get_title()!= "Search"){
            while ( $i < $array_size) {
                $pos = strpos($breadcrumb[$i], drupal_get_title());
                //we stop duplicates entering where there is a sub nav based on page jumps
                if ($pos === false){
                    $crumbs .= '<span class="breadcrumb-' . $i;
                    $crumbs .=  '">' . $breadcrumb[$i] . '</span>';
                    $crumbs .= '<img src="' .base_path() . path_to_theme() . '/images/breadcrumbArrow.gif" width="7" height="6" alt="Breadcrumb arrow" title="Breadcrumb arrow" />';
                }
                $i++;
            }

            $crumbs .= '<span class="active">'. drupal_get_title() .'</span></div>';

        }
        if (drupal_get_title()== "Search"){
            $crumbs .= '<span class="breadcrumb-0';
            $crumbs .=  '">' . $breadcrumb[0] . '</span>';
            $crumbs .= '<img src="' .base_path() . path_to_theme() . '/images/breadcrumbArrow.gif" width="7" height="6" alt="Breadcrumb arrow" title="Breadcrumb arrow" />';
            $crumbs .= '<span class="active">'. drupal_get_title() .'</span></div>';
        }
        return $crumbs;
    }
}

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