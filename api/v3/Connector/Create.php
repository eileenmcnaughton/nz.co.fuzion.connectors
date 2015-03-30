<?php
/**
 * Create connector.
 *
 * @param array $params
 *
 * @return array
 *   API result array.
 *
 * @throws \API_Exception
 */
function civicrm_api3_connector_create($params) {
  return _civicrm_api3_basic_create('CRM_Connectors_BAO_Connector', $params);
}

function _civicrm_api3_connector_create_spec(&$params) {
}
