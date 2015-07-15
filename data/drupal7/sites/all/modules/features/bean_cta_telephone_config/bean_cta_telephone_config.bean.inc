<?php
/**
 * @file
 * bean_cta_telephone_config.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function bean_cta_telephone_config_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'cta_telephone';
  $bean_type->label = 'CTA Telephone';
  $bean_type->options = '';
  $bean_type->description = 'A block calling visitors to phone';
  $export['cta_telephone'] = $bean_type;

  return $export;
}
