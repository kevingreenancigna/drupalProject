<?php
/**
 * @file
 * bean_cta_request_callback_config.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function bean_cta_request_callback_config_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create any cta_request_callback bean'.
  $permissions['create any cta_request_callback bean'] = array(
    'name' => 'create any cta_request_callback bean',
    'roles' => array(
      'administrator' => 'administrator',
      'content approver' => 'content approver',
      'content editor' => 'content editor',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'delete any cta_request_callback bean'.
  $permissions['delete any cta_request_callback bean'] = array(
    'name' => 'delete any cta_request_callback bean',
    'roles' => array(
      'administrator' => 'administrator',
      'content approver' => 'content approver',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'edit any cta_request_callback bean'.
  $permissions['edit any cta_request_callback bean'] = array(
    'name' => 'edit any cta_request_callback bean',
    'roles' => array(
      'administrator' => 'administrator',
      'content approver' => 'content approver',
      'content editor' => 'content editor',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'view any cta_request_callback bean'.
  $permissions['view any cta_request_callback bean'] = array(
    'name' => 'view any cta_request_callback bean',
    'roles' => array(
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'bean',
  );

  return $permissions;
}
