<?php

/**
 * Here we override the default HTML output of drupal.
 * refer to https://drupal.org/node/457740
 */

// Auto-rebuild the theme registry during theme development.
if (theme_get_setting('clear_registry')) {
  // Rebuild .info data.
  system_rebuild_theme_data();
  // Rebuild theme registry.
  drupal_theme_rebuild();
}

/**
 * Returns HMTL for a breadcrumb trail.
 * 
 * @param $variables
 *   An associative array containing:
 *   - breadcrumb: Array containing the breadcrumb links
 */
/**function example_theme_breadcrumb($variables) {
  //dpm($variables);
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $output .= '<div class="breadcrumb-personalizado">' . implode(' - ', $breadcrumb) . '</div>';
    return $output;
  }
}*/

/**
 * Implements THEME_properties_HOOK(&$variables)
 */
function example_theme_preprocess_breadcrumb(&$variables) {
  $variables['breadcrumb_separator'] = theme_get_setting('breadcrumb_separator');
}