<?php
/**
 * @file
 * module_filter_config.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function module_filter_config_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer module filter'.
  $permissions['administer module filter'] = array(
    'name' => 'administer module filter',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'module_filter',
  );

  return $permissions;
}
