<?php
/**
 * @file
 * bean_cta_telephone_config.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function bean_cta_telephone_config_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_telephone_numbers'
  $field_bases['field_telephone_numbers'] = array(
    'active' => 1,
    'cardinality' => 2,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_telephone_numbers',
    'indexes' => array(),
    'locked' => 0,
    'module' => 'double_field',
    'settings' => array(
      'first' => array(
        'maxlength' => 48,
        'precision' => 10,
        'scale' => 2,
        'size' => 'normal',
        'type' => 'varchar',
      ),
      'second' => array(
        'maxlength' => 48,
        'precision' => 10,
        'scale' => 2,
        'size' => 'normal',
        'type' => 'varchar',
      ),
    ),
    'translatable' => 0,
    'type' => 'double_field',
  );

  return $field_bases;
}
