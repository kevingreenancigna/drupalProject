<?php
/**
 * @file
 * bean_cta_telephone_config.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function bean_cta_telephone_config_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'field_bundle_settings_bean__cta_telephone';
  $strongarm->value = array(
    'view_modes' => array(),
    'extra_fields' => array(
      'form' => array(
        'label' => array(
          'weight' => '0',
        ),
        'title' => array(
          'weight' => '1',
        ),
        'revision' => array(
          'weight' => '5',
        ),
        'view_mode' => array(
          'weight' => '4',
        ),
      ),
      'display' => array(),
    ),
  );
  $export['field_bundle_settings_bean__cta_telephone'] = $strongarm;

  return $export;
}
