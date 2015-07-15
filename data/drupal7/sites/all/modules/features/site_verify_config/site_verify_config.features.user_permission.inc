<?php
/**
 * @file
 * site_verify_config.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function site_verify_config_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer site verify'.
  $permissions['administer site verify'] = array(
    'name' => 'administer site verify',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'site_verify',
  );

  return $permissions;
}
