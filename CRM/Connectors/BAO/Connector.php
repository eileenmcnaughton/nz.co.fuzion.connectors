<?php
/**
 * CRM_Connectors_BAO_Connector class.
 */
class CRM_Connectors_BAO_Connector extends CRM_Connectors_DAO_Connector {

  /**
   * Create payment token record.
   *
   * @param $params
   *
   * @return \CRM_Connectors_DAO_Connector
   */
  public  static function create($params) {
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, 'Connector', CRM_Utils_Array::value('id', $params), $params);
    $instance = new CRM_Connectors_DAO_Connector();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, 'Connector', $instance->id, $instance);

    return $instance;
  }
}
