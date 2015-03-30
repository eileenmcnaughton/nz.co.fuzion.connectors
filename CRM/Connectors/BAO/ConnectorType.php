<?php
/**
 * CRM_Connectors_BAO_Connector class.
 */
class CRM_Connectors_BAO_ConnectorType extends CRM_Connectors_DAO_ConnectorType {

  /**
   * Create payment token record.
   *
   * @param $params
   *
   * @return \CRM_Connectors_DAO_ConnectorType
   */
  public  static function create($params) {
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, 'ConnectorType', CRM_Utils_Array::value('id', $params), $params);
    $instance = new CRM_Connectors_DAO_ConnectorType();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, 'ConnectorType', $instance->id, $instance);

    return $instance;
  }
}
