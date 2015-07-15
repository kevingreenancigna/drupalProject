<?php
/**
 * @file
 * bean_cta_telephone_config.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function bean_cta_telephone_config_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'bean-cta_telephone-field_cta_button'
  $field_instances['bean-cta_telephone-field_cta_button'] = array(
    'bundle' => 'cta_telephone',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'url',
        'settings' => array(
          'nofollow' => FALSE,
          'trim_length' => 80,
        ),
        'type' => 'url_default',
        'weight' => 0,
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

  // Exported field_instance: 'bean-cta_telephone-field_telephone_numbers'
  $field_instances['bean-cta_telephone-field_telephone_numbers'] = array(
    'bundle' => 'cta_telephone',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'The telephone number and associated description to call. For instance: Inside the US: <strong>877.539.6265</strong>. This appears below the title of the telephone call-to-action block.',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'double_field',
        'settings' => array(
          'first' => array(
            'format' => '_none',
            'hidden' => 0,
            'prefix' => '',
            'suffix' => ':&nbsp;',
          ),
          'second' => array(
            'format' => '_none',
            'hidden' => 0,
            'prefix' => '',
            'suffix' => '',
          ),
          'style' => 'inline',
        ),
        'type' => 'double_field_unformatted_list',
        'weight' => 1,
      ),
    ),
    'entity_type' => 'bean',
    'fences_wrapper' => 'p',
    'field_name' => 'field_telephone_numbers',
    'label' => 'Telephone numbers',
    'required' => 1,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'double_field',
      'settings' => array(
        'first' => array(
          'general' => array(
            'prefix' => '',
            'required' => 1,
            'suffix' => '',
          ),
          'textfield' => array(
            'placeholder' => '',
            'size' => 10,
          ),
        ),
        'inline' => 1,
        'second' => array(
          'general' => array(
            'prefix' => '',
            'required' => 1,
            'suffix' => '',
          ),
          'textfield' => array(
            'placeholder' => '',
            'size' => 10,
          ),
        ),
      ),
      'type' => 'textfield_&_textfield',
      'weight' => 2,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('CTA button');
  t('Telephone numbers');
  t('The telephone number and associated description to call. For instance: Inside the US: <strong>877.539.6265</strong>. This appears below the title of the telephone call-to-action block.');

  return $field_instances;
}
