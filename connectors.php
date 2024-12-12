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
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function connectors_civicrm_install() {
  _connectors_civix_civicrm_install();
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
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *

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
 * Implements hook civicrm_entityTypes().
 *
 * @param array $entityTypes
 */
function connectors_civicrm_entityTypes(&$entityTypes) {
  $entityTypes['CRM_Connectors_DAO_Connector'] = array(
    'name' => 'Connector',
    'class' => 'CRM_Connectors_DAO_Connector',
    'table' => 'civicrm_connector',
  );
  $entityTypes['CRM_Connectors_DAO_ConnectorType'] = array(
    'name' => 'ConnectorType',
    'class' => 'CRM_Connectors_DAO_ConnectorType',
    'table' => 'civicrm_connector_type',
  );
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
