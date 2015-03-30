<?php
/**
 * Get connector.
 *
 * @param $params
 *
 * @return array
 */
function civicrm_api3_connector_get($params) {
  return _civicrm_api3_basic_get('CRM_Connectors_BAO_Connector', $params);
}
function _civicrm_api3_connector_get_spec(&$params) {
  $params['is_active']['api_default'] = 1;
}
