<?php
/**
 * Create connector type.
 *
 * @param array $params
 *
 * @return array
 *   API result array.
 *
 * @throws \API_Exception
 */
function civicrm_api3_connector_type_create($params) {
  return _civicrm_api3_basic_create('CRM_Connectors_BAO_ConnectorType', $params);
}

/**
 * Metadata for create function.
 *
 * @param array $params
 *   Existing metadata.
 */
function _civicrm_api3_connector_create_spec_type(&$params) {
}
