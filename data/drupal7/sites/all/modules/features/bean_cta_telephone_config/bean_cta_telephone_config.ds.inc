<?php
/**
 * @file
 * bean_cta_telephone_config.ds.inc
 */

/**
 * Implements hook_ds_field_settings_info().
 */
function bean_cta_telephone_config_ds_field_settings_info() {
  $export = array();

  $ds_fieldsetting = new stdClass();
  $ds_fieldsetting->api_version = 1;
  $ds_fieldsetting->id = 'bean|cta_telephone|default';
  $ds_fieldsetting->entity_type = 'bean';
  $ds_fieldsetting->bundle = 'cta_telephone';
  $ds_fieldsetting->view_mode = 'default';
  $ds_fieldsetting->settings = array(
    'field_cta_button' => array(
      'formatter_settings' => array(
        'ft' => array(
          'func' => 'theme_ds_field_expert',
          'fi' => TRUE,
          'fi-el' => 'p',
          'fi-cl' => 'col-sm-12 col-md-4 col-lg-12',
          'fi-at' => '',
          'fi-def-at' => FALSE,
          'fi-odd-even' => FALSE,
          'fi-first-last' => FALSE,
        ),
      ),
    ),
    'field_telephone_numbers' => array(
      'formatter_settings' => array(
        'ft' => array(
          'func' => 'theme_ds_field_expert',
          'fis' => TRUE,
          'fis-el' => 'p',
          'fis-cl' => 'col-sm-12 col-md-4 col-lg-12',
          'fis-at' => '',
          'fis-def-at' => FALSE,
        ),
      ),
    ),
  );
  $export['bean|cta_telephone|default'] = $ds_fieldsetting;

  return $export;
}

/**
 * Implements hook_ds_layout_settings_info().
 */
function bean_cta_telephone_config_ds_layout_settings_info() {
  $export = array();

  $ds_layout = new stdClass();
  $ds_layout->api_version = 1;
  $ds_layout->id = 'bean|cta_telephone|default';
  $ds_layout->entity_type = 'bean';
  $ds_layout->bundle = 'cta_telephone';
  $ds_layout->view_mode = 'default';
  $ds_layout->layout = 'ds_1col';
  $ds_layout->settings = array(
    'regions' => array(
      'ds_content' => array(
        0 => 'title',
        1 => 'field_telephone_numbers',
        2 => 'field_cta_button',
      ),
    ),
    'fields' => array(
      'title' => 'ds_content',
      'field_telephone_numbers' => 'ds_content',
      'field_cta_button' => 'ds_content',
    ),
    'classes' => array(),
    'wrappers' => array(
      'ds_content' => 'div',
    ),
    'layout_wrapper' => 'div',
    'layout_attributes' => '',
    'layout_attributes_merge' => 1,
    'layout_link_attribute' => '',
    'layout_link_custom' => '',
    'hide_sidebars' => 0,
  );
  $export['bean|cta_telephone|default'] = $ds_layout;

  return $export;
}
