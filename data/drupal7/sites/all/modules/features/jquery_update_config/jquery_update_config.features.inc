<?php
/**
 * @file
 * jquery_update_config.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function jquery_update_config_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
