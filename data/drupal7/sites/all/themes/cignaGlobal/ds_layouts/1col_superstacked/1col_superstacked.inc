<?php

/**
 * Provides settings for Display Suite layout.
 */
function ds_1col_superstacked() {
    return array(
        'label' => t('One column superstacked (ie 3 rows)'),
        'regions' => array(
            'header' => t('Header'),
            'main' => t('Main'),
            'footer' => t('Footer'),
        ),
        'css' => FALSE,
        'image' => FALSE,
    );
}