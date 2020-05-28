# CatalogCustomAttributeDefinition

### Description

Contains information defining a custom attribute. Custom attributes are intended to store additional information about a catalog object or to associate a catalog object with an entity in another system. Do not use custom attributes to store any sensitive information (personally identifiable information, card details, etc.). [Read more about custom attributes](/catalog-api/add-custom-attributes)

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**type** | getType() | setType($value) | **string** | The type of this custom attribute. Cannot be modified after creation. Required. See [CatalogCustomAttributeDefinitionType](#type-catalogcustomattributedefinitiontype) for possible values | 
**name** | getName() | setName($value) | **string** | The name of this definition for API and seller-facing UI purposes. The name must be unique within the (merchant, application_id) pair. Required. May not be empty and may not exceed 255 characters. Can be modified after creation. | 
**description** | getDescription() | setDescription($value) | **string** | Seller-oriented description of the meaning of this Custom Attribute, any constraints that the seller should observe, etc. May be displayed as a tooltip in Square UIs. | [optional] 
**source_application** | getSourceApplication() | setSourceApplication($value) | [**\SquareConnect\Model\SourceApplication**](SourceApplication.md) | __Read only.__ Contains information about the application that created this custom attribute definition. | [optional] 
**allowed_object_types** | getAllowedObjectTypes() | setAllowedObjectTypes($value) | **string[]** | The set of Catalog Object Types that this Custom Attribute may be applied to. Currently, only &#x60;ITEM&#x60; and &#x60;ITEM_VARIATION&#x60; are allowed. At least one type must be included. See [CatalogObjectType](#type-catalogobjecttype) for possible values | 
**seller_visibility** | getSellerVisibility() | setSellerVisibility($value) | **string** | The visibility of a custom attribute in seller-facing UIs (including Square Point of Sale applications and Square Dashboard). May be modified. See [CatalogCustomAttributeDefinitionSellerVisibility](#type-catalogcustomattributedefinitionsellervisibility) for possible values | [optional] 
**app_visibility** | getAppVisibility() | setAppVisibility($value) | **string** | The visibility of a custom attribute to applications other than the application that created the attribute. See [CatalogCustomAttributeDefinitionAppVisibility](#type-catalogcustomattributedefinitionappvisibility) for possible values | [optional] 
**string_config** | getStringConfig() | setStringConfig($value) | [**\SquareConnect\Model\CatalogCustomAttributeDefinitionStringConfig**](CatalogCustomAttributeDefinitionStringConfig.md) | Optionally, populated when &#x60;type&#x60; &#x3D; &#x60;STRING&#x60;, unset otherwise. | [optional] 
**number_config** | getNumberConfig() | setNumberConfig($value) | [**\SquareConnect\Model\CatalogCustomAttributeDefinitionNumberConfig**](CatalogCustomAttributeDefinitionNumberConfig.md) |  | [optional] 
**selection_config** | getSelectionConfig() | setSelectionConfig($value) | [**\SquareConnect\Model\CatalogCustomAttributeDefinitionSelectionConfig**](CatalogCustomAttributeDefinitionSelectionConfig.md) | Populated when &#x60;type&#x60; is set to &#x60;SELECTION&#x60;, unset otherwise. | [optional] 
**custom_attribute_usage_count** | getCustomAttributeUsageCount() | setCustomAttributeUsageCount($value) | **int** | __Read-only.__ The number of custom attributes that reference this custom attribute definition. Set by the server in response to a ListCatalog request with &#x60;include_counts&#x60; set to &#x60;true&#x60;.  If the actual count is greater than 100, &#x60;custom_attribute_usage_count&#x60; will be set to &#x60;100&#x60;. | [optional] 
**key** | getKey() | setKey($value) | **string** | The name of the desired custom attribute key that can be used to access the custom attribute value on catalog objects. Cannot be modified after the custom attribute definition has been created. Must be between 1 and 60 characters, and may only contain the characters [a-zA-Z0-9_-]. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

