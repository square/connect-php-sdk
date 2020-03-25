# CatalogCustomAttributeValue

### Description

An instance of a custom attribute. Custom attributes can be defined and added to `ITEM` and `ITEM_VARIATION` type catalog objects. [Read more about custom attributes](/catalog-api/add-custom-attributes).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | The name of the custom attribute. | [optional] 
**string_value** | getStringValue() | setStringValue($value) | **string** | The string value of the custom attribute.  Populated if &#x60;type&#x60; &#x3D; &#x60;STRING&#x60;. | [optional] 
**custom_attribute_definition_id** | getCustomAttributeDefinitionId() | setCustomAttributeDefinitionId($value) | **string** | __Read-only.__ The custom attribute definition this value belongs to. | [optional] 
**type** | getType() | setType($value) | **string** | __Read-only.__ A copy of type from the associated custom attribute definition. See [CatalogCustomAttributeDefinitionType](#type-catalogcustomattributedefinitiontype) for possible values | [optional] 
**number_value** | getNumberValue() | setNumberValue($value) | **string** | Populated if &#x60;type&#x60; &#x3D; &#x60;NUMBER&#x60;. Contains a string representation of a decimal number, using a &#x60;.&#x60; as the decimal separator. | [optional] 
**boolean_value** | getBooleanValue() | setBooleanValue($value) | **bool** | A &#x60;true&#x60; or &#x60;false&#x60; value. Populated if &#x60;type&#x60; &#x3D; &#x60;BOOLEAN&#x60;. | [optional] 
**selection_uid_values** | getSelectionUidValues() | setSelectionUidValues($value) | **string[]** | One or more choices from &#x60;allowed_selections&#x60;. Populated if &#x60;type&#x60; &#x3D; &#x60;SELECTION&#x60;. | [optional] 
**key** | getKey() | setKey($value) | **string** | __Read-only.__ A copy of key from the associated custom attribute definition. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

