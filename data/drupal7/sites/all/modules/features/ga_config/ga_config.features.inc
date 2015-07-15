<?php
/**
 * @file
 * ga_config.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function ga_config_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
