<?php

/**
 * Provides settings for Display Suite layout.
 */
function ds_211_cols() {
    return array(
        'label' => t('Two-one-one columns'),
        'regions' => array(
            'top_left' => t('Top left'),
            'top_right' => t('Top right'),
            'main' => t('Main'),
            'footer' => t('Footer'),
        ),
        'css' => FALSE,
        'image' => FALSE,
    );
}