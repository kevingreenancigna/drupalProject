<?php
/**
 * @file
 * bean_cta_request_callback_config.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function bean_cta_request_callback_config_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_core_body'
  $field_bases['field_core_body'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_core_body',
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'text_long',
  );

  // Exported field_base: 'field_cta_button'
  $field_bases['field_cta_button'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_cta_button',
    'indexes' => array(),
    'locked' => 0,
    'module' => 'url',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'url',
  );

  return $field_bases;
}
