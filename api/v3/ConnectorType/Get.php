<?php
/**
 * Get connector type.
 *
 * @param array $params
 *   API parameters.
 *
 * @return array
 *   API Result array.
 */
function civicrm_api3_connector_type_get($params) {
  return _civicrm_api3_basic_get('CRM_Connectors_BAO_ConnectorType', $params);
}

/**
 * Metadata for create function.
 *
 * @param array $params
 *   Existing metadata.
 */
function _civicrm_api3_connector_type_get_spec(&$params) {
  $params['is_active']['api_default'] = 1;
}
