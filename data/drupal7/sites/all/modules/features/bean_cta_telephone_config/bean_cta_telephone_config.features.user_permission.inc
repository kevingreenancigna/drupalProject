<?php
/**
 * @file
 * bean_cta_telephone_config.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function bean_cta_telephone_config_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create any cta_telephone bean'.
  $permissions['create any cta_telephone bean'] = array(
    'name' => 'create any cta_telephone bean',
    'roles' => array(
      'administrator' => 'administrator',
      'content approver' => 'content approver',
      'content editor' => 'content editor',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'delete any cta_telephone bean'.
  $permissions['delete any cta_telephone bean'] = array(
    'name' => 'delete any cta_telephone bean',
    'roles' => array(
      'administrator' => 'administrator',
      'content approver' => 'content approver',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'edit any cta_telephone bean'.
  $permissions['edit any cta_telephone bean'] = array(
    'name' => 'edit any cta_telephone bean',
    'roles' => array(
      'administrator' => 'administrator',
      'content approver' => 'content approver',
      'content editor' => 'content editor',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'view any cta_telephone bean'.
  $permissions['view any cta_telephone bean'] = array(
    'name' => 'view any cta_telephone bean',
    'roles' => array(
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'bean',
  );

  return $permissions;
}
