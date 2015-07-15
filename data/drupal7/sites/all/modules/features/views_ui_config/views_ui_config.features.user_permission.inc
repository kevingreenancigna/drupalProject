<?php
/**
 * @file
 * views_ui_config.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function views_ui_config_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer views'.
  $permissions['administer views'] = array(
    'name' => 'administer views',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'views',
  );

  return $permissions;
}
