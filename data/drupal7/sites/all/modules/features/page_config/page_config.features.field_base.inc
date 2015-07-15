<?php
/**
 * @file
 * page_config.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function page_config_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_homepage_sections'
  $field_bases['field_homepage_sections'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_homepage_sections',
    'indexes' => array(
      'target_id' => array(
        0 => 'target_id',
      ),
    ),
    'locked' => 0,
    'module' => 'entityreference',
    'settings' => array(
      'handler' => 'base',
      'handler_settings' => array(
        'behaviors' => array(
          'views-select-list' => array(
            'status' => 0,
          ),
        ),
        'sort' => array(
          'type' => 'none',
        ),
        'target_bundles' => array(
          'homepage_4_column_box' => 'homepage_4_column_box',
          'homepage_8_column_box' => 'homepage_8_column_box',
          'homepage_icons' => 'homepage_icons',
          'homepage_image' => 'homepage_image',
        ),
      ),
      'target_type' => 'node',
    ),
    'translatable' => 0,
    'type' => 'entityreference',
  );

  return $field_bases;
}
