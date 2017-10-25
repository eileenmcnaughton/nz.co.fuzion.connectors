TL:DR readme: An extension to support more than one AccountSync (e.g Xeo integration) connection for one site. Basically you define 'these financial types should be pushed to the NGO Xero instance & those should be pushed to their for-profit company's Xero instance'

Long readme:

This extension exists to generate tables for storing credentials for external connectors. Not everything described
is currently implemented.

The current focus is on credentials for Xero but could be any service.

The pattern follows the way payment_processors are defined whereby the payment_processor_type
table defines the labels of the fields. In this case the connector_type table does this for 5 fields
(an arbitrary limit that is more than current requirement). This could have been done using custom fields
but that would mean the extension writer still needs to figure out how to set them up & IMHO would
only make sense if this was becoming a core entity.

The extension will provide an api & an interface for setting the connector variables, create the data structure.

The connector_type is white-listed for exposure as a drupal entity (with the civicrm_entity module) but not connector
for fear it would be too easy to expose information that requires security.

Each connector type will need to define

- default name & description

- module 
  This will generally be the name of the extension

- function
  module function being enacted
  
- plugin 
  plugin name
  
- is_default 
  Is this the default for this combo of module & function
  
- field labels 
  For any of the 'custom fields' to be used.
  
- permission as json
  {get: administer CiviCRM, create: administer CiviCRM, default: administer CiviCRM}
  default is mandatory - the others override it on a per-api-action basis.
  
If we look at how the above would map to a payment processor in core (hypothetically since they are not
 going to change to use this but it's useful to think about) we are looking at
  module:core
  function:payment_gateway
  plugin: paypal
  
For Xero we might have
  module: CiviAccountSync
  function: accounts_ai
  plugin: xero
  
For address management we might have
  module: core
  function: address_geocoding
  plugin: yahoo
  
  module: core
  function: address_validation
  plugin: usps
  

Todo 

- add UI for editing connectors
- implement connector specific permissions
