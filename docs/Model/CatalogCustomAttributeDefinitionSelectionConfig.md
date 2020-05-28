# CatalogCustomAttributeDefinitionSelectionConfig

### Description

Configuration associated with `SELECTION`-type custom attribute definitions.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**max_allowed_selections** | getMaxAllowedSelections() | setMaxAllowedSelections($value) | **int** | The maximum number of selections that can be set. The maximum value for this attribute is 100. The default value is 1. The value can be modified, but changing the value will not affect existing custom attribute values on objects. Clients need to handle custom attributes with more selected values than allowed by this limit. | [optional] 
**allowed_selections** | getAllowedSelections() | setAllowedSelections($value) | [**\SquareConnect\Model\CatalogCustomAttributeDefinitionSelectionConfigCustomAttributeSelection[]**](CatalogCustomAttributeDefinitionSelectionConfigCustomAttributeSelection.md) | The set of valid &#x60;CatalogCustomAttributeSelections&#x60;. Up to a maximum of 100 selections can be defined. Can be modified. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

