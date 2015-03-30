<?php

require_once 'connectors.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function connectors_civicrm_config(&$config) {
  _connectors_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function connectors_civicrm_xmlMenu(&$files) {
  _connectors_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function connectors_civicrm_install() {
  _connectors_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function connectors_civicrm_uninstall() {
  _connectors_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function connectors_civicrm_enable() {
  _connectors_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function connectors_civicrm_disable() {
  _connectors_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function connectors_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _connectors_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function connectors_civicrm_managed(&$entities) {
  _connectors_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function connectors_civicrm_caseTypes(&$caseTypes) {
  _connectors_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function connectors_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _connectors_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function connectors_civicrm_preProcess($formName, &$form) {

}


/**
 * Implements hook civicrm_alter_drupal_entities().
 *
 * We are not currently declaring the connector entity for fear that
 * it would be too easy to expose security information.
 *
 * @param array $whitelist
 */
function connectors_civicrm_alter_drupal_entities(&$whitelist) {
  $whitelist['civicrm_connector_type'] = 'connector_type';
}

/**
 * Implements hook civicrm_alter_drupal_entity_labels().
 *
 * We are not currently declaring the connector entity for fear that
 * it would be too easy to expose security information.
 *
 * @param $labels
 */
function connectors_civicrm_alter_drupal_entity_labels(&$labels) {
  $labels['civicrm_connector_type'] = 'name';
}
