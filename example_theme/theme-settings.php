<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 */
function example_theme_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['breadcrumb'] = array(
    '#type' => 'fieldset',
    '#title' => t('Breadcrumb settings'),
  );

  $form['breadcrumb']['breadcrumb_separator'] = array(
    '#type' => 'textfield',
    '#title' => t('Breadcrumb separator'),
    '#default_value' => theme_get_setting('breadcrumb_separator'),
    '#size' => 5,
    '#maxlength' => 5,
  );
}