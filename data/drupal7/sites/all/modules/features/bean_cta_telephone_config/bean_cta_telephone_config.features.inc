<?php
/**
 * @file
 * bean_cta_telephone_config.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function bean_cta_telephone_config_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "bean_admin_ui" && $api == "bean") {
    return array("version" => "5");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
