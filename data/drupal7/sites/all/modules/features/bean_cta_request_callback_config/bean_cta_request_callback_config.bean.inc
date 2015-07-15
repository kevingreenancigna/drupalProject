<?php
/**
 * @file
 * bean_cta_request_callback_config.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function bean_cta_request_callback_config_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'cta_request_callback';
  $bean_type->label = 'CTA Request Callback';
  $bean_type->options = '';
  $bean_type->description = '';
  $export['cta_request_callback'] = $bean_type;

  return $export;
}
