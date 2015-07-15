<?php
/**
 * @file
 * bean_cta_request_callback_config.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function bean_cta_request_callback_config_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'bean-cta_request_callback-field_core_body'
  $field_instances['bean-cta_request_callback-field_core_body'] = array(
    'bundle' => 'cta_request_callback',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 1,
      ),
    ),
    'entity_type' => 'bean',
    'fences_wrapper' => 'p',
    'field_name' => 'field_core_body',
    'label' => 'CTA text',
    'required' => 1,
    'settings' => array(
      'text_processing' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'rows' => 5,
      ),
      'type' => 'text_textarea',
      'weight' => 2,
    ),
  );

  // Exported field_instance: 'bean-cta_request_callback-field_cta_button'
  $field_instances['bean-cta_request_callback-field_cta_button'] = array(
    'bundle' => 'cta_request_callback',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'url',
        'settings' => array(
          'nofollow' => 0,
          'trim_length' => '',
        ),
        'type' => 'url_default',
        'weight' => 2,
      ),
    ),
    'entity_type' => 'bean',
    'fences_wrapper' => 'p',
    'field_name' => 'field_cta_button',
    'label' => 'CTA button',
    'required' => 1,
    'settings' => array(
      'title_fetch' => 0,
      'title_field' => 1,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'url',
      'settings' => array(
        'size' => 60,
      ),
      'type' => 'url_external',
      'weight' => 3,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('CTA button');
  t('CTA text');

  return $field_instances;
}
